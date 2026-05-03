<?php
/**
 * The header for our theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header>
		<div class="header">
			<nav>
				<div id="menu_icon" class="header__menu-icon">
					<div class="header__menu__line"></div>
					<div class="header__menu__line"></div>
					<div class="header__menu__line"></div>
				</div>
				<div id="menu" class="header__menu">
					<div id="menu_close" class="header__menu__close">
						<div class="close"></div>
					</div>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'	   => 'header__menu__list',
							) );
						?>
				</div>
			</nav>
			<div class="header__logo">
				<a href="<?php echo home_url(); ?>">
					<img  class="header_logo__img"
						src="<?php echo THEME_URI; ?>/imgs/logo_lg.png" 
						alt="Barcos Barcelona, Alquiler de barcos." 
						srcset="<?php echo THEME_URI; ?>/imgs/logo_sm.png 190w,
								<?php echo THEME_URI; ?>/imgs/logo_lg.png 350w"
						sizes=	"(max-width: 992px) 190px,
								350px"
					>
				</a>
			</div>
			<div class="header__search">
				<div id="search_icon" >
					<img src="<?php echo THEME_URI; ?>/imgs/lupa.png">
				</div>
			</div>
			<div id="search" class="header__search-section">
					<div id="search_close" class="header__search__close">
						<div class="close"></div>
					</div>
				</div>
		</div>
  	</header>