<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SWEET_WORLD
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="description" content="SWEET WORLD (SW) es una fábrica de dulces y postres que ofrece gran variedad de productos que se llevan a domicilio a cada uno de los clientes, SW tiene puntos de distribución en 5 ciudades de Perú">
    <meta name="author" content="Kevin Grande">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/shop-item.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	

	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php
			        
            /*wp_nav_menu();*/
            $menu_name = 'menu-1'; //menu slug
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

            foreach ($menuitems as $item) {
              echo '<li class="nav-item">
                          <a class="nav-link" href="'.$item->url.'">'.$item->title.'</a>
                        </li>';
                
            }


/*echo "<pre>";

print_r($menuitems);
echo $menuitems->name;
echo "</pre>";*/
              
            ?>
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                  <ul class="left hide-on-med-and-down">
                      <li>
                        <i class="material-icons prefix">Buscas tus productos</i>
                        <input id="icon_prefix" type="text" value="<?php echo get_search_query() ?>" name="s" class="search validate">
                            <label for="icon_prefix">Buscar</label>
                          </li>
                  </ul>
                  
                    </form>
                    <script>
                      function key(){
                        $('.search').keypress(function (e) {
                  if (e.which == 13) {
                    $('search-form').submit();
                    return false;    //<---- Add this line
                  }
                });
                    }
                    </script>
          </ul>
        </div>
      </div>
    </nav>

	<!-- Page Content -->
    <div class="container">

     




