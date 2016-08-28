<?php
/**
 * Created by PhpStorm.
 * User: lagwy
 * Date: 28/08/16
 * Time: 6:37 AM
 */

if (isset($_POST["category"])) {
    // Recibir los parametros
    $category = $_POST["category"];
    $dinero = $_POST["dinero"];
    $tiempo = $_POST["tiempo"];
}

require 'navbar.php';
?>
<head>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="assets/css/card.css">
</head>

<body>
<div class="container">
    <div class="col-lg-12" style="padding: 75px" >
    <?php
        $stack = new Stack();
        $stmnt = $stack -> getBusqueda($category, $dinero, $tiempo);
        while($row = mysql_fetch_assoc($stmnt)) {
        echo '
        <div class="col-md-5 no-padding lib-item" data-category="view">
            <div class="lib-panel">
                <div class="row box-shadow">
                    <div class="col-md-6 promo-img">
                        <img class="lib-img-show" src="https://mediawen.com/img/customers/img.jpg">
                    </div>
                    <div class="col-md-6">
                            <div class="lib-row lib-header title">
                                        '.$row["nombre"].'
                            <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-header price" style="font-size: 12px; padding-top: 0; font-weight: bold">
                                        '.$row["dinero"].'
                            </div>
                            <div class="lib-row lib-header address" style="font-size: 12px; padding-top: 5px;">
                                        Address
                            <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc descp">
                                '.$row["descripcion"].'
                            </div>
                            <div class="col-md-12" align="right">
                            <a id="mas" href="" class="btn btn-info">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
    ?>

        <div class="col-md-1">
        </div>

        <div class="col-md-5 no-padding lib-item" data-category="view" >
            <div class="lib-panel">
                <div class="row box-shadow">
                    <div class="col-md-6 promo-img">
                        <img class="lib-img-show" src="https://mediawen.com/img/customers/img.jpg">
                    </div>
                    <div class="col-md-6">
                        <div class="lib-row lib-header title">
                            Example library
                            <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-header price" style="font-size: 12px; padding-top: 0; font-weight: bold">
                            $100
                        </div>
                        <div class="lib-row lib-header address" style="font-size: 12px; padding-top: 5px;">
                            Address
                            <div class="lib-header-seperator"></div>
                        </div>
                        <div class="lib-row lib-desc descp">
                            Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem
                            ipsum dolor
                        </div>
                        <div class="col-md-12" align="right">
                            <a id="mas" href="" class="btn btn-info">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<!--


<script type="text/javascript" src="assets/js/textAnalytics.js"></script>
<script type="text/javascript" src="assets/js/emotionAnalytics.js"></script>

<script type="text/javascript">
    analyzeEmotion("http://2d0yaz2jiom3c6vy7e7e5svk.wpengine.netdna-cdn.com/wp-content/uploads/2015/12/trump_mug.jpg");
    analyzeText("es", "ans","Sentimiento de este texto");
</script> -->




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
