<?php
require 'navbar.php';
?>
<head>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="assets/css/panel_inside.css">
    <script src="assets/js/prefixfree.min.js"></script>
</head>

<body>
<div class="container">
    <div class="well well-sm">
        <strong>Vista</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>Lista</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                    class="glyphicon glyphicon-th"></span>Cuadrícula</a>
        </div>
    </div>
    <div id="products" class="row list-group">
        <div class="item  col-xs-4 col-lg-4" onclick="location.href='#';" style="cursor: pointer;">
            <div class="thumbnail">
                <img class="group list-group-image" style='height: 250px; width: 100%; object-fit: contain'
                     src="http://www.polarpuffs-cakes.com/themes/polar/images/googlemap.png" alt=""/>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Registrar lugar</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4" onclick="location.href='#';" style="cursor: pointer;">
            <div class="thumbnail">
                <img class="group list-group-image" style='height: 250px; width: 100%; object-fit: contain'
                     src="https://cdn2.iconfinder.com/data/icons/ecommerce-solid-icons-vol-2/64/088-512.png" alt=""/>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Registrar promoción</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </div>
            </div>
        </div>

        <div class="item  col-xs-4 col-lg-4" onclick="location.href='#';" style="cursor: pointer;">
            <div class="thumbnail">
                <img class="group list-group-image square" style='height: 250px; width: 100%; object-fit: contain'
                     src="https://cdn0.iconfinder.com/data/icons/seo-smart-pack/128/grey_new_seo2-40-512.png" alt=""/>
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Estadísticas</h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src="assets/js/panel.js"></script>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/search.js"></script>
<!-- ///  plugins  /// -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="assets/js/user_login.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<?php
require 'footer.php';
?>
