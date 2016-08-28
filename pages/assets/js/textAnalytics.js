function analyzeText(language, id, text){
    var params = {"documents":[{"language": language, "id": id, "text": text}]};
    $.ajax({
            url: "https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/sentiment?" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","71b1bd4b20204550b93f424b11d9bc0c");
            },
            type: "POST",
            // Request body
            data: JSON.stringify(params)
        })
        .done(function(data) {
            alert("success");
        })
        .fail(function() {
            alert("error");
        });
}