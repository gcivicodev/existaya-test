<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

	<section id="ln-pre-header">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-7">
					<p class="mb-0">Contacto: <a href="tel:5728841114">(57) 2 884 11 14</a></p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-5">
					<ul class="list-inline mb-0">
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/fb-1.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/tw-1.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/g-1.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/ins-1.png" ></a></li>
					</ul>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-5 col-sm-5 col-12 d-sm-block d-md-block d-none">
					<p class="mb-0 float-right text-right ln-pre-header-pcw"><img src="/existaya-test/wp-content/uploads/2018/08/user.png" > &nbsp; <a href="#">Mi Cuenta</a></p>
					<p class="mb-0 float-right text-right ln-pre-header-pcw mr-5"><a href="#">Centro de Ayuda</a></p>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-5 col-sm-5 col-12 mt-2 d-sm-none d-md-none d-block">
					<p class="float-left mb-0 ln-pre-header-pcw mr-5"><a href="#">Centro de Ayuda</a></p>
					<p class="float-right mb-0 ln-pre-header-pcw"><img src="/existaya-test/wp-content/uploads/2018/08/user.png" ><a href="#">Mi Cuenta</a></p>
				</div>
			</div>
		</div>
	</section>
	
	<header id="masthead" class="ln-header pt-2 pb-2 site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">

            	<div class="col-2 pl-0 d-xl-block d-lg-none d-sm-none d-md-none d-none">
	                <div class="navbar-brand">
	                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
	                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
	                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
	                        </a>
	                    <?php else : ?>
	                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
	                    <?php endif; ?>

	                </div>
            	</div>

                <div class="col-8 d-xl-block d-lg-none d-sm-none d-md-none d-none">
	                <?php
	                wp_nav_menu(array(
	                'theme_location'    => 'primary',
	                'container'       => 'div',
	                'container_id'    => 'main-nav',
	                'container_class' => 'collapse navbar-collapse justify-content-center',
	                'menu_id'         => false,
	                'menu_class'      => 'navbar-nav',
	                'depth'           => 3,
	                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
	                'walker'          => new wp_bootstrap_navwalker()
	                ));
	                ?>
                </div>

                <div class="col-2 d-xl-block d-lg-none d-sm-none d-md-none d-none">
					<ul class="list-inline ln-header-actions">
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/search.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/heart.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/car.png" ></a><span class="ln-car-counter">0</span></li>
					</ul>
                </div>

            	<div class="col-sm-6 col-md-6 col-12 pl-0 d-xl-none d-lg-block d-sm-block d-md-block d-block">
	                <div class="navbar-brand">
	                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
	                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
	                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
	                        </a>
	                    <?php else : ?>
	                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
	                    <?php endif; ?>

	                </div>
            	</div>

                <div class="col-sm-6 col-md-6 col-12 d-xl-none d-lg-block d-sm-block d-md-block d-block">
	                <button class="navbar-toggler float-right mt-2" type="button" data-toggle="collapse" data-target="#main-nav-mobile" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="navbar-toggler-icon"></span>
	                </button>
					<ul class="list-inline ln-header-actions">
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/search.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/heart.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/car.png" ></a><span class="ln-car-counter">0</span></li>
					</ul>
                </div>

                 <div class="col-12 d-xl-none d-lg-block d-sm-block d-md-block d-block">
	                <?php
	                wp_nav_menu(array(
	                'theme_location'    => 'primary',
	                'container'       => 'div',
	                'container_id'    => 'main-nav-mobile',
	                'container_class' => 'collapse navbar-collapse justify-content-center',
	                'menu_id'         => false,
	                'menu_class'      => 'navbar-nav',
	                'depth'           => 3,
	                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
	                'walker'          => new wp_bootstrap_navwalker()
	                ));
	                ?>
                </div>

            </nav>
        </div>
	</header>

	<section id="ln-post-header">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<?php $pagename = get_query_var('pagename');  ?>
					<?php $pagename = (!empty($pagename)) ? $pagename : ''; ?>
					<p class="mb-0 text-capitalize">Home / <b><?php echo $pagename; ?></b></p>
				</div>
			</div>
		</div>
	</section>

	<?php 

		$args = array(
			'post_type' => 'slider',
			'tag' => $pagename,
		);

		$query = new WP_Query( $args );

		$post_id = $query->post->ID;

		$postmeta = get_post_meta($post_id, 'wpcf-image', false);

	?>

	<section id="slider">
		<?php if(count($postmeta) > 1): ?>
			<?php foreach($postmeta as $image): ?>
				<div><img class="img-fluid" src="<?php echo $image; ?>"></div>
			<?php endforeach; ?>
		<?php else: ?>
			<div><img class="img-fluid" src="https://dummyimage.com/2000x700/000/fff.png"></div>
		<?php endif; ?>
	</section>


	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>