<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<?php include_http_metas() ?>
	<?php include_metas() ?>
	<?php include_title() ?>
	<?php include_stylesheets() ?>

	<link rel="shortcut icon" href="/favicon.ico" />

	<!--[if lt IE 7.]>
	<?php echo stylesheet_tag('/sf/sf_default/css/ie.css') ?>
	<![endif]-->
	<style type="text/css">
		.vertical_center{
			width: 100%;
			height: 78vh;
			position: relative;
		}

		.img_vertical{
		  position: absolute;
		  top: 50%; 
		  left: 50%;
		  transform: translate(-50%, -50%);
		}
	</style>
</head>
<body>
	<div>
		<header class="navbar navbar-primary navbar-top">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-6 col-sm-6">
		            <a class="navbar-brand bac-header" href="<?php echo url_for('@homepage') ?>"></a>
		          </div>
		          <div class="col-md-6 col-sm-6 text-right oculto">
		            <h5 class="sub-brand"><img src="/images/bac-header-2.png"></h5>
		          </div>
		      </div>
		    </div>
		</header>
	  	<?php echo $sf_content ?>
	  	<footer>
		  <div class="footer">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-6 col-sm-6">
		          <a class="navbar-brand bac-footer" href="http://www.buenosaires.gob.ar" target="_blank">Buenos Aires Ciudad</a>
		        </div>
		        <div class="col-md-6 col-sm-6">
		          <div class="sub-brand">
		            <p>Portal Educación<br>
		            <span class="text-muted">Ministerio de Educación</span></p>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</footer>
	</div>
	<?php include_javascripts() ?>
</body>
</html>
