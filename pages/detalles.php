<?php
    require 'navbar.php';
?>

<body style="padding-top: 75px">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">

    <div class="container">
        <div class="well">
            <div class="row">
            <div class="col-md-12">
                <div class="col-md-5">
                    <img id="foto" src="https://upload.wikimedia.org/wikipedia/commons/6/60/Panorama_ITESM.jpg" style="width:100%">
                </div>
                <div class="col-md-7">
                    <h2 id="lugar">Instituto Tecnológico y de Estudios Superiores de Monterrey</h2>
                    <h3>$0 MXN</h3> <br/>
                    <label id="direccion">Ave. Eugenio Garza Sada 2501 Sur Col. Tecnológico, 64849 Monterrey, Nuevo León</label><br/><br>
                    <button id="foto_grade" onclick="" class="btn btn-default">
                    <span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Subir Emoción</button>
                    <button id="comentar" onclick="" class="btn btn-default"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Escribir comentario</button>
                    <div class="col-md-4" id="rateYo"></div>
                    <div class="col-md-10"><p style="font-size:20px;">4.8</p></div>
                </div>
            </div>
            <div class="col-md-12">
                <h3>Descripción:</h3>
                <p style="font-size: 16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras erat massa, semper in vulputate in, iaculis at dolor. Aenean convallis pellentesque justo at dapibus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse nunc lectus, auctor dapibus dui sit amet, convallis pulvinar diam. Aliquam pellentesque diam non lorem gravida, id suscipit risus viverra. In convallis leo quis tortor aliquet, eu laoreet est ornare. Pellentesque blandit quis lacus vitae pulvinar. Pellentesque tincidunt vehicula dui, at auctor lorem consectetur imperdiet. Quisque finibus odio diam, tristique sollicitudin nibh sollicitudin vitae. Aliquam suscipit est ultrices suscipit sollicitudin. Fusce a ullamcorper lorem, vel sagittis dolor.</p>
            </div>
            </div>
        </div>
        <div class="well" id="HacerComment">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                    <label for="comment"> Agregar comentario: </label>
                    </div>
                    <div class="col-md-10">
                        <textarea id="Comentar" class="form-control" rows="4" style="width:100%"></textarea>
                    </div>
                    <div class="col-md-2"><button class="btn btn-default">Comentar</button></div>
                </div>
            </div>
        </div>
    </div>
    

</body>

<?php
require 'footer.php';
?>
<!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js"></script>
     <script type="text/javascript">
        $(document).ready( function () {
          $("#rateYo").rateYo({
            rating: 4.8,
            multiColor: {
            "startColor": "#FF0000", //RED
            "endColor": "#F39C12" //YELLOW
            },
            readOnly: true,
          });
          $("#HacerComment").hide();
          $("#comentar").click(function(){
                $("#HacerComment").show();
            });
    });
    </script>
    
