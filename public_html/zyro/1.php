<!DOCTYPE html>
<html lang="es">
<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Inicio</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.40" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1487178055" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1487178055" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance0" class="wb_element"><ul class="hmenu"><li class="active"><a href="Inicio/" target="_self" title="Inicio">Inicio</a></li><li><a href="Registro/" target="_self" title="Registro">Registro</a></li><li><a href="LogIn/" target="_self" title="Login">LogIn</a></li></ul></div><div id="wb_element_instance1" class="wb_element"><a href="Inicio/"><img alt="sticker,375x360.u1" src="https://ih1.redbubble.net/image.120467749.2677/sticker,375x360.u1.png"></a></div><div id="wb_element_instance2" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle"><a href="Inicio/">B</a>oscoTiempo</h5>
</div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance4" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #d9d9d9;"></div></div><div id="wb_element_instance5" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">¿Cómo funciona?</h1></div><div id="wb_element_instance6" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2">¡Regístrate!</h2>

<p class="wb-stl-normal">Rellena el formulario para registrarte</p>
</div><div id="wb_element_instance7" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2">Entra</h2>

<p class="wb-stl-normal">Rellena los campos con tu usuario y contraseña</p>
</div><div id="wb_element_instance8" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2">Empieza</h2>

<p class="wb-stl-normal">Descubre todas las posibilidades</p>
</div><div id="wb_element_instance9" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2">Esta página se encuentra en construcción</h2>

<p> </p>

<p class="wb-stl-normal">Cualquier cambio o página actual no representa el resultado final</p>
</div><div id="wb_element_instance10" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: left;"><font color="#ffffff"><span style="font-size: 24px;">En este sitio podrás ayudar y ser ayudado, ¡Empieza ya con el intercambio de favores!</span></font></p>
</div><div id="wb_element_instance11" class="wb_element"><a class="wb_button" href="Registro/"><span>Registrarse</span></a></div><div id="wb_element_instance12" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle" style="text-align: center;">Hola</h4></div><div id="wb_element_instance13" class="wb_element"><a class="wb_button" href="LogIn/"><span>Entrar</span></a></div><div id="wb_element_instance14" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(1);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance14");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance14").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 141px;">
	
<div id="wb_element_instance3" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2017 <a href="http://boscotiempo.esy.es">boscotiempo.esy.es</a></p></div><div id="wb_element_instance15" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(74);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
