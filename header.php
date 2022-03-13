<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Akamai Learning Design</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <section class="top-bar">
      <div class="container">
        <div class="row">
          <div class="logo col-xl-6 col-md-4 col-sm-6 col-5">logo</div>
          <nav class="main-menu col-xl-5 col-md-5 text-right">
            <?php wp_nav_menu( array( 'theme_location' => 'my_main_menu' ) ); ?>
          </nav>
          <div class="search col-xl-1 col-md-1 col-sm-1 col-2 text-right">Search</div>
        </div>
      </div>
    </section>
  </header>