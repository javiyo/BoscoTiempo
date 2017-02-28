<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>News</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="News" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.40" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1487178055" rel="stylesheet" type="text/css" />
	<link href="css/news.css?ts=1487178055" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance36" class="wb_element"><ul class="hmenu"><li><a href="Inicio/" target="_self" title="Inicio">Inicio</a></li><li><a href="Registro/" target="_self" title="Registro">Registro</a></li><li><a href="Contactos/" target="_self" title="Contactos">Contactos</a></li></ul></div><div id="wb_element_instance37" class="wb_element"><a href="Inicio/"><img alt="sticker,375x360.u1" src="https://ih1.redbubble.net/image.120467749.2677/sticker,375x360.u1.png"></a></div><div id="wb_element_instance38" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle"><a href="Inicio/">B</a>oscoTiempo</h5>
</div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance40" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(news);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance40");
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
					$("#wb_element_instance40").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 141px;">
	
<div id="wb_element_instance39" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2017 <a href="http://boscotiempo.esy.es">boscotiempo.esy.es</a></p></div><div id="wb_element_instance41" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(61);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
