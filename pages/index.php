<?php
	require 'navbar.php';
?>
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

	
<body style="padding-top: 75px">
	<div style="height:330px;">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
	        <!-- Carousel indicators -->
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            <li data-target="#myCarousel" data-slide-to="1"></li>
	            <li data-target="#myCarousel" data-slide-to="2"></li>
	        </ol>   
	        <!-- Wrapper for carousel items -->
	        <div class="carousel-inner">
	            <div class="item active">
	                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/MonterreyPanoramic.jpg/1000px-MonterreyPanoramic.jpg" alt="First Slide" style="width:100%; height:315px;">
	            </div>
	            <div class="item">
	                <img src="http://www.easytaxi.com/wp-content/uploads/2015/07/monterrey.jpg" alt="Second Slide" style="width:100%; height:315px;">
	            </div>
	            <div class="item">
	                <img src="https://mexdesc-impresionesaerea.netdna-ssl.com/sites/default/files/styles/adaptive/public/fichas-destino/monterrey-nuevo-leon-panoramica.jpg?itok=E5BSUOeZ" alt="Third Slide" style="width:100%; height:315px;">
	            </div>
	        </div>
	        <!-- Carousel controls -->
	        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left"></span>
	        </a>
	        <a class="carousel-control right" href="#myCarousel" data-slide="next">
	            <span class="glyphicon glyphicon-chevron-right"></span>
	        </a>
	    </div>
	</div>

	<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="well">
				<div class="row">
				<div class="col-md-12">
					<h3>Busca atracciones en tu ciudad:</h3>
				</div>
					<form method="POST" action="search.php">
					<div class="form-group">
						<div class="col-md-3">
							<h4>Categorias</h4>
							<select name="category" class="form-control">
								<!-- Comida/Lugares turísticos/Convenciones/Museos/Lugares donde pasear/Actividades -->
								<option value="comida">Comida</option>
								<option value="lugares">Lugares turísticos</option>
								<option value="convenciones">Convenciones</option>
								<option value="museos">Museos</option>
								<option value="paseos">Lugares donde pasear</option>
								<option value="actividades">Actividades</option>
							</select>
						</div>
						<div class="col-md-3">
							<h4>Presupuesto</h4>
							<input type="number" name="dinero" placeholder="Dinero" id="dinero" class="form-control">
						</div>
						<div class="col-md-3">
							<h4>Tiempo Libre</h4>
							<input type="datetime" name="tiempo" placeholder="Tiempo Libre" class="form-control">
						</div>
						<div class="col-md-3">
						<br/><br/>
							<input class="btn btn-default" value="Buscar" type="submit" id="submit">
						</div>
					</div>
					</form>
				</div>
				</div>
			</div>
	<div class="col-md-1"></div>
	<div class="col-md-12">
		
	</div>


	<script type="text/javascript">
		$('.carousel').carousel();
	</script>
</body>

<?php
 require 'footer.php';
 ?>