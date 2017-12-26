<div class="page-contents">
	<div class="container">
		
		<div class="row">
			<div class="col-md-8 col-lg-9">
				<?php if(isset($msg)): ?>
					<div class="alert alert-info text-info text-center"><?php echo $msg; ?></div>
				<?php endif; ?>

				<!-- Favoritos -->
				<?php if($totalFavoritos > 0): ?>
					<div class="row">
						<div class="col-xs-12">
					  		<h2>Mis Favoritos</h2>
						</div>
					</div>
				<?php endif; ?>

				<div class="clearfix">
					<div class="margintop20">
						<?php foreach ($favoritos as $boton): ?>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
								<div class="panel panel-default" style="position: relative">

									<form action="<?php echo url_for('@agregar_favoritos') ?>" method="GET" id="form_agregar_favoritos">
										<input type="checkbox" class="boton_favorito boton_favorito_quitar" checked data-id="<?php echo $boton->getId() ?>" id="boton_favorito_<?php echo $boton->getId() ?>">
										<label for="boton_favorito_<?php echo $boton->getId() ?>" title="Quitar de Favoritos"  class="estrella_favoritos">★</label>
									</form>

									<a class="shortcut" href="<?php echo $boton->getBtnLink() ?>" title="<?php echo $boton->getBtnNombre() ?>">
										<div class="panel-body">
											<span style="background-color: <?php echo $boton->getBtnBg() ?>">
											<span class="<?php echo $boton->getBtnImagen() ?>"></span>
											</span>
											<h3><?php echo $boton->getBtnNombre() ?></h3>
										</div>
									</a>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

				<?php /*recorro todas la categorias, estas a su ves ya estan relacionadas con sus botones pertenecientes a su categoria asiganda
					es por eso que puedo ingresar a la 'tabla' botones y recorrerlos tambien.*/ ?>
				<?php foreach ($categorias as $cat): ?>
					<?php if ($cat->getBotones()->count() > 0): ?>
						<div class="row">
							<div class="col-xs-12">
						  		<h2><?php echo $cat->getCatNombre() ?></h2>
							</div>
						</div>
						<div class="clearfix">
							<div class="margintop20">
								<?php foreach ($cat->getBotones() as $boton): ?>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
										<div class="panel panel-default" style="position: relative">

											<form action="<?php echo url_for('@agregar_favoritos') ?>" method="GET" id="form_agregar_favoritos">
												<input type="checkbox" class="boton_favorito boton_favorito_agregar" data-id="<?php echo $boton->getId() ?>" id="boton_favorito_<?php echo $boton->getId() ?>">
												<label for="boton_favorito_<?php echo $boton->getId() ?>" title="Agregar a Favoritos"  class="estrella_favoritos">★</label>
											</form>

											<a class="shortcut" href="<?php echo $boton->getBtnLink() ?>" title="<?php echo $boton->getBtnNombre() ?>">
												<div class="panel-body">
													<span style="background-color: <?php echo $boton->getBtnBg() ?>">
													<span class="<?php echo $boton->getBtnImagen() ?>"></span>
													</span>
													<h3><?php echo $boton->getBtnNombre() ?></h3>
												</div>
											</a>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif ?>
				<?php endforeach; ?>
			</div>

			<div class="col-md-4 col-lg-3 margintop80">
				<div class="">
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h3 class="panel-title">Personal</h3>
					</div>
					<div class="panel-body">
					  <a href="#" class="text-capitalize"><?php echo $sf_user->getGuardUser()->getFirstName().' '.$sf_user->getGuardUser()->getLastName() ?></a>
					  <p class="clearmargin truncate"><?php echo $sf_user->getGuardUser()->getEmailAddress() ?></p>
					</div>
					<div class="box-list">
					  <a href="">
						<i class="fa fa-user gray marginright10"></i>
						<b>Mi BA</b>
						<i class="fa fa-chevron-right pull-right gray"></i>
					  </a>
					</div>
					<div class="box-list">
					  <a href="">
						<i class="fa fa-info-circle gray marginright10"></i>
						<b>Mis Datos</b>
						<i class="fa fa-chevron-right pull-right gray"></i>
					  </a>
					</div>
				  </div>

				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h3 class="panel-title">Servicios</h3>
					</div>
					<?php foreach($servicios as $servicio): ?>
					  <div class="box-list">
						<a href="<?php echo $servicio->getSerLink() ?>">
						  <i class="<?php echo $servicio->getSerIcono(); ?> gray marginright10"></i>
						  <b><?php echo $servicio->getSerNombre(); ?></b>
						  <i class="fa fa-chevron-right pull-right gray"></i>
						</a>
					  </div>
					<?php endforeach; ?>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-body text-center">
					  <a href="#" class="btn btn-lg btn-primary btn-block">Soporte</a>
					  <p class="font11 gray clearmargin margintop10">Teléfono 0800-333-3382 (Opción 1-2-5)</p>
					  <p class="font11 gray clearmargin">Mail para directivos:</p>
					  <p class="font11 gray clearmargin">soporte.cuentasbue@bue.edu.ar</p>
					</div>
				  </div>
				</div>
			</div>
		</div>
		
		<!-- section de noticias -->
		<?php if($totalNoticias > 0): ?>
			<hr>
			<div class="row margintop-10 marginbottom20">
			  <div class="col-xs-12">
				<h2>Novedades de Educación BA</h2>
			  </div>
			</div>
		<?php endif; ?>

		<!-- Slide de noticias -->
		<div class="slideNoticias">
			<?php foreach ($noticias as $noticia): ?>
				<div class="col-xs-12 col-sm-6 col-md-4">
				  <a href="<?php echo $noticia->getNotLink() ?>" title="<?php echo $noticia->getNotNombre() ?>">
					<figure class="fig-img">
					  	<?php echo image_tag('/uploads/news/'.$noticia->getNotImagen(), array('alt' => $noticia->getNotNombre(), 'class' => 'img-responsive', 'size' => '740x480')) ?>
						<figcaption>
							<h4><?php echo $noticia->getNotNombre() ?></h4>
						</figcaption>
					</figure>
				  </a>
				</div>
		  	<?php endforeach; ?>
		</div>

	</div>
</div>