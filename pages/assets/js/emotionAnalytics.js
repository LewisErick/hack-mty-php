$(function() {
    var params = {"url":"http://www.purethoughts.net/wp-content/uploads/2015/11/Happy-Boy.jpg"};

    $.ajax({
            url: "https://api.projectoxford.ai/emotion/v1.0/recognize?" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","5fbd76b6f01b46e9ae6c6d0fe8dd3f92");
            },
            type: "POST",
            // Request body
            data: '{"url":"http://www.purethoughts.net/wp-content/uploads/2015/11/Happy-Boy.jpg"}'
        })
        .done(function(data) {
            alert("success");
        })
        .fail(function() {
            alert("error");
        });
});

function analyzeEmotion(url){
    var params = {"url":url};
    $.ajax({
            url: "https://api.projectoxford.ai/emotion/v1.0/recognize?" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","5fbd76b6f01b46e9ae6c6d0fe8dd3f92");
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