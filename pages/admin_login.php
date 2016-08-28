<?php
	require 'navbar_admin.php';
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
<link rel="stylesheet" type="text/css" href="assets/css/login_admin.css">
	<div class="login">
	 	<div class="login-triangle"></div>
	  
	  	<h2 class="login-header">Log in</h2>

	  	<form class="login-container">
	    	<p><input type="email" placeholder="Email"></p>
	    	<p><input type="password" placeholder="Password"></p>
	    	<p><input type="submit" value="Log in"></p>
	  	</form>
	</div>
</body>

<?php
	require 'footer.php';
?>