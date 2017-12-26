<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php //include_title() ?>
    <title>
    <?php if (!include_slot('title')): ?>
        Gobierno de la Ciudad de Buenos Aires
    <?php endif; ?>
    </title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php echo $sf_content ?>
  </body>
</html>
