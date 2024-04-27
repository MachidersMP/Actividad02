<?php
session_start();
if (empty($_SESSION["id"])){
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="bd-example mb-0" style="height: 80vh">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" style="height: 80vh">
					<img src="img/1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="display-4 mb-4 font-weight-bold">BOOTSTRAP 4</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="carousel-item" style="height: 80vh">
					<img src="img/1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="display-4 mb-4 font-weight-bold">BOOTSTRAP 4</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
				<div class="carousel-item" style="height: 80vh">
					<img src="img/1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="display-4 mb-4 font-weight-bold">BOOTSTRAP 4</h5>
						<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<nav class="navbar navbar-dark bg-dark  navbar-expand-md navbar-light bg-light fixed-top">
		<div class="text-white bg-success p-2">
			<?php
			echo $_SESSION["nombre"]." ", $_SESSION["apellido"];
			?>
		</div>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<div class="navbar-nav mr-auto">
				<div class="offset-md-1 mr-auto text-center"></div>
				<a class="nav-item nav-link text-justify active ml-3 hover-primary" href="#">Tienda</a>
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-justify ml-3" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Categoria
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">TECNOLOGIA</a>
						<a class="dropdown-item" href="#">DISEÑO WEB</a>
						<a class="dropdown-item" href="servicios.html">DISEÑO GRAFICO</a>
						<a class="dropdown-item" href="#">SISTEMAS DE ESCRITORIO</a>
						<a class="dropdown-item" href="#">SISTEMAS WEB</a>
					</div>
				</li>
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="#">Acerca</a>
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="#">Contacto</a>
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="Controlador/controlador_cerrar_session.php">Salir</a>

			</div>
			<div class="text-center justify-content-center">
				<a class="btn btn-outline-primary" target="_blank" href="https://www.facebook.com">Facebook</a>
				<a class="btn btn-outline-danger" target="_blank" href="https://www.youtube.com">Youtube</a>
			</div>
		</div>

	</nav>
	<div class="">
		<div class="jumbotron bg-dark text-light rounded-0">
			<h1 class="display-4">TechZone</h1>
			<p class="lead">Descubre una experiencia de entretenimiento inigualable con la amplia selección de  televisores, audífonos y parlantes disponibles en Tienda Amiga. Te ofrecemos precios competitivos y facilidad de pagos en productos de marcas líderes como Hometech, Honor, LG, Samsung y Sony. Sumérgete en la claridad y el realismo de la imagen con nuestros televisores de última generación, mientras disfrutas de un sonido envolvente y nítido gracias a nuestros excepcionales  sistemas de audio.Ya sea que estés buscando disfrutar de tus películas y series favoritas o sumergirte en la música con audífonos de primera categoría, en Tienda Amiga encontrarás todo lo que necesitas para llevar tu experiencia audiovisual al siguiente nivel. Descubre la mejor calidad y los precios más competitivos en TV y audio.</p>
			<hr class="my-4 bg-light">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
				<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
			</div>
		</div>
	</div>

	<form action="" class="form-inline d-flex justify-content-center flex-column flex-md-row">
		<div class="form-group mx-2 my-2">
			<label class="d-none d-md-block" for="">Nombre</label>
			<input type="text" class="form-control" placeholder="Nombre">
		</div>
		<div class="form-group mx-2 my-2">
			<label class="d-none d-md-block" for="">Apellido</label>
			<input type="text" class="form-control" placeholder="Apellido">
		</div>
		<div class="form-group mx-2 my-2">
			<button class="btn btn-outline-primary">enviar</button>
		</div>
	</form>



	<p><h2>PcComponentes es tu tienda online de tecnología e informática</h2><p>Somos la <strong>tienda online líder en tecnología</strong>, basada en la confianza, la experiencia de compra y el conocimiento del sector tecnológico. Desde 2005 somos <strong>expertos</strong> en informática y electrónica, contando con más de 100.000 artículos disponibles y 31.700 m2 repartidos entre todas nuestras instalaciones, además de tres <a title="tiendas físicas de PcComponentes" href="https://www.pccomponentes.com/tiendas">tiendas físicas</a> en <strong>Santa cruz de la Sierra</strong>, <strong>Bolivia</strong> y <strong>Sucre	</strong>.</p><h2>Los expertos en tecnología más comprometidos contigo</h2><p>Nuestros <strong><a title="compromisos con nuestro cliente" href="https://www.pccomponentes.com/compromisos">compromisos</a></strong> se centran en ser expertos en lo que vendemos y garantizar al cliente todo lo que necesita: envíos gratuitos a partir de 5.000 bs, garantía en 24h, devoluciones gratuitas y atención al cliente local y sin esperas.</p></p>














	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>