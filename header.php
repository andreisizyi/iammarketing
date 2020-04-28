<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
	<header>
		<div class="container">
			<nav class="header-content">
				<div class="row no-gutters d-none d-md-flex">
					<div class="col-md-5">
						<div class="w-100 before_menu bf_1">г.Киев  ул. Депутатская 27</div>
						<ul class="w-100 menu ml"><?php topmenu(1,3) ?></ul>
					</div>
					<div class="col-md-2 text-center logo-pc">
						<a href="/"><img  width="166" height="112" class="logo" title="" alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"></a>
					</div>
					<div class="col-md-5">
						<div class="w-100 before_menu bf_2"><a href="tel:+380930149660">+38 (093) 014-96-60</a><button class="std" type="button" data-toggle="modal" data-target="#contactUs">Связаться</button></div>
						<ul class="w-100 menu mr"><?php topmenu(4,6) ?></ul>
					</div>
				</div>
				<div class="d-block d-md-none">
					<div class="menu-m row no-gutters">
						<div class="col-4 text-left d-flex justify-content-start align-items-center">
							<img title="" alt="" class="times toggle-m" width="30" height="30" src="<?php echo get_template_directory_uri(); ?>/images/times-solid.svg">
							<img title="" alt="" class="bars toggle-m" width="30" height="30" src="<?php echo get_template_directory_uri(); ?>/images/bars-solid.svg">
						</div>
						<div class="col-4 text-center pt-3 pb-3 logo-c-m">
							<a href="/"><img class="logo" title="" alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"></a>
						</div>
						<div class="col-4 text-right d-flex justify-content-end align-items-center">
							<a href="tel:+380930149660">
								<img title="" alt="" class="phone" width="30" height="30" src="<?php echo get_template_directory_uri(); ?>/images/phone-alt-solid.svg">
							</a>
						</div>
					</div>
					<div class="text-center menu-m-slide">
						<ul class="w-100 ml d-flex flex-column">
						<?php topmenumobile(); ?>
						</ul>
						<div class="w-100 before_menu d-flex flex-column">
							<a href="tel:+380930149660">+38 (093) 014-96-60</a>
							<button class="std" type="button" data-toggle="modal" data-target="#contactUs">Связаться</button>
						</div>
						<div class="w-100 before_menu">
							г.Киев ул. Депутатская 27
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<main>
	<?php 
		if(!is_front_page()):
			echo '<div class="h-space w-100">';
			dimox_breadcrumbs();
			echo '</div>';
		endif;
	?>