<?php
require 'navbar.php';
?>

<body style="padding-top: 75px">
<!-- /// begin registro_lugar /// -->
<div class="col-md-1"></div>
<div class="col-md-10">
    <div class="col-md-12">
        <h3>Registro de lugar</h3>
    </div>
    <div class="col-lg-12">
        <div class="well">
            <div class="row">

                <div class="form-group">
                    <div class="col-md-5">
                        <h4>Nombre</h4>
                        <input type="text" placeholder="Nombre" id="name" class="form-control">
                    </div>
                    <div class="col-md-5">
                        <h4>Dirección</h4>
                        <input type="text" placeholder="Dirección" id="address" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <h4>Ciudad</h4>
                        <input type="text" placeholder="Ciudad" id="city" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <h4>Teléfono</h4>
                        <input type="text" placeholder="Teléfono" id="phone" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <h4>Categoría</h4>
                        <select class="form-control" id="category">
                            <option>Categorías</option>
                            <option></option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <h4>Descripción</h4>
                        <textarea rows="4" class="form-control" id="description"></textarea>
                    </div>
                    <div class="col-md-3">
                        <br/><br/>
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