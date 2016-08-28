<?php
 require 'navbar.php';
?>

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
    
    <div class="container">
    <div class="col-md-12">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand" href=""><img src="" alt=""></i>&nbsp;<b style="color:#F2720A">TOUR</b><b style="color:#41CC25">LINE</b></span>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right nav nav-pills" id="nav">
                        <li><a href="#home">Inicio</a></li>
                        <li><a href="#multimedia">Registrarse</a></li>
                        <li class="active"><a>Inicio de Sesión</a><li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
      </div>
    </div>
    <div class="well"></div>

<body>
    <link rel="stylesheet" href="assets/css/user_login.css">

    <div class="login-box">
        <div class="lb-header">
            <a href="#" class="active" id="login-box-link">Iniciar sesión</a>
            <a href="#" id="signup-box-link">Registro</a>
        </div>
         <div class="social-login align-center">
            <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>
            <div id="fb-root"></div>
        </div>
        <!-- Login -->
        <form class="email-login" method="POST" action="stack.php">
            <div class="u-form-group">
                <input type="text" id="email" name="email" placeholder="Email"/>
            </div>
            <div class="u-form-group">
                <input type="password" id="password" name="password" placeholder="Contraseña"/>
            </div >
            <div class="u-form-group">
                <input type="Submit" id="Login" value="Iniciar Sesión" name="Login" name="Login">
            </div>
            <div class="u-form-group">
                <a href="#" class="forgot-password">Olvide mi contraseña</a>
            </div>
        </form>
        <!-- Sign Up -->
        <form class="email-signup" method="POST" action="stack.php">
            <div class="u-form-group">
                <input type="email" id="email" name="email" placeholder="Email"/>
            </div>
            <div class="u-form-group">
                <input type="text" id="newuser" name="newuser" placeholder="Nombre Completo"/>
            </div>
            <div class="u-form-group">
                <input type="password" id="password" name="password" placeholder="Contraseña"/>
            </div>
            <div class="u-form-group">
                <input type="password" id="cpass" name="cpass" placeholder="Confirmar contraseña"/>
            </div>
            <div class="u-form-group">
                <input type="text" name="ciudad" placeholder="Ciudad"/>
            </div>
            <div class="u-form-group">
                <input type="date" name="date" placeholder="Fecha"/>
            </div>
            <div class="u-form-group">
                <input id="Register" name="Register" type="Submit" value="SignUp">
            </div>
        </form>
        <div class="col-md-12 alert alert-danger" id="errormsg" hidden></div>
    </div>
    <script type="text/javascript" scr="assets/js/validate.js"></script>

    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
</body>

<?php
    require 'footer.php'
?>
