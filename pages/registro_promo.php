<?php
require 'navbar.php';
?>

    <body style="padding-top: 75px">
    <!-- /// begin registro_promo /// -->
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="col-md-12">
            <h3>Registro de promoción</h3>
        </div>
        <div class="col-lg-12">
            <div class="well">
                <div class="row">

                    <div class="form-group">

                        <div class="col-md-3">
                            <h4>Lugar</h4>
                            <select class="form-control" id="lugar">
                                <option>Lugares</option>
                                <option></option>
                            </select>
                        </div>

                        <div class="col-md-5">
                            <h4>Nombre de la promoción</h4>
                            <input type="text" placeholder="Nombre" id="name" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <h4>Precio</h4>
                            <input type="text" placeholder="Precio" id="cost" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <h4>Horas</h4>
                            <input type="text" placeholder="Horas" id="hours" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <h4>Días</h4>
                            <input type="text" placeholder="Días" id="days" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <h4>Descripción</h4>
                            <textarea rows="4" class="form-control" id="description"></textarea>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input class="btn btn-default" value="Guardar" type="submit" id="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>


<?php
require 'footer.php';
?>