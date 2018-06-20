<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- Typography & Icon Fonts -->
	<link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/f93022a6-9283-45d4-9674-35fc620d6324.css"/>
	<?php

		// $primary_font_css = get_field('primary_font_css', 'option');
		// $secondary_font_css = get_field('secondary_font_css', 'option');
		// $pf_css = '';
		// $sf_css = '';
		//
		// $font_select = get_field('font_pairing', 'option');
		// if ($font_select == 1) {
		// 	echo '<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">';
		// 	echo '<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">';
		// 	$pf_css = "font-family: 'Nunito Sans', sans-serif;";
		// 	$sf_css = "font-family: 'Merriweather', serif;";
		// } elseif($font_select == 2){
		// 	echo '<link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">';
		// 	$pf_css = "font-family: 'Montserrat', sans-serif;";
		// 	$sf_css = "font-family: 'Playfair Display', serif;";
		// } elseif($font_select == 3){
		// 	echo ' <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Zilla+Slab:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">';
		// 	$pf_css = "font-family: 'Ubuntu', sans-serif;";
		// 	$sf_css = "font-family: 'Zilla Slab', serif;";
		// } elseif($font_select == 4){
		// 	echo '<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Merriweather:300,300i,400,400i,700,700i" rel="stylesheet">';
		// 	$pf_css = "font-family: 'IBM Plex Serif', serif;";
		// 	$sf_css = "font-family: 'Merriweather', serif;";
		// } elseif ($font_select == 5) {
		// 	echo '<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i|Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">';
		// 	$pf_css = "font-family: 'Muli', sans-serif;";
		// 	$sf_css = "font-family: 'Raleway', sans-serif;";
		// } elseif ($font_select == 6) {
		// 	echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Zilla+Slab:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">';
		// 	$pf_css = "font-family: 'Zilla Slab', serif;";
		// 	$sf_css = "font-family: 'Open Sans', sans-serif;";
		// } else {
		// 	echo '<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">';
		// 	echo '<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">';
		// 	$pf_css = "font-family: 'Nunito Sans', sans-serif;";
		// 	$sf_css = "font-family: 'Merriweather', serif;";
		// };
		//
		// // $primary_font = get_field('primary_font_code', 'option');
		// // //the_field('primary_font_code', 'option');
		// // if($primary_font != '' && $primary_font_css != ''){
		// // 	echo $primary_font;
		// // }else{
		// // 	echo '<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">';
		// // }
		// // $secondary_font = get_field('secondary_font_code', 'option');
		// // //the_field('secondary_font_code', 'option');
		// // if($secondary_font != '' && $primary_font_css != ''){
		// // 	echo $secondary_font;
		// // }else{
		// // 	echo '<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">';
		// // }

	?>

	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

	<?php

		// if($primary_font != '' && $primary_font_css != ''){
		// 	$pf_css = $primary_font_css;
		// }else{
		// 	$pf_css = "font-family: 'Nunito Sans', sans-serif;";
		// }
		//
		// if($secondary_font != '' && $secondary_font_css != ''){
		// 	$sf_css = $secondary_font_css;
		// }else{
		// 	$sf_css = "font-family: 'Merriweather', serif;";
		// }

	?>

	<style>
		.pf,
		.panel.wysiwyg blockquote,
		.panel.wysiwyg blockquote p,
		.panel.wysiwyg,
		input,
		textarea{
			font-family: 'lust', serif;
		}

		.sf,
		.panel.wysiwyg p,
		.panel.wysiwyg ul,
		.panel.wysiwyg li{
			<?php echo $sf_css;?>
		}
	</style>

	<!-- Favicons
	================================================== -->
	<?php
	$logo = get_field('site_logo', 'option');
	$logo_url = $logo['sizes']['medium'];
	$favicon_url = $logo['sizes']['small'];
	?>
	<link rel="shortcut icon" href="<?php echo $favicon_url ?>">
	<link rel="apple-touch-icon" href="<?php echo $favicon_url ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $favicon_url ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $favicon_url ?>">

	<!-- Analytics -->
	<?php the_field('google_analytics_code', 'option'); ?>

	<!-- SEO -->
	<?php the_field('google_sitemap_verification', 'option'); ?>
	<?php the_field('bing_sitemap_verification', 'option'); ?>

	<?php
		$primary_color = get_field('primary_color', 'option');
		$secondary_color = get_field('secondary_color', 'option');
		$tertiary_color = get_field('tertiary_color', 'options');

	?>

	<style>
		p.cta{
			background-color:<?php echo $tertiary_color; ?>;
		}
		p.cta:hover,
		p.cta:active,
		p.cta:focus{
			color: <?php echo $tertiary_color; ?> !important;
		}
		/* .main-navigation ul{
			background-color: <//?php echo $primary_color; ?>;
		} */
		input[type="submit"]{
			color: <?php echo $primary_color; ?>;
		}
		.panel.wysiwyg a{
			color: <?php echo $tertiary_color; ?>;
		}
	</style>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php
	$primary_color = get_field('primary_color', 'option');
	?>
	<header>
			<a class="logo" href="#top">
				<img src="http://localhost:8888/wvfree/wp-content/uploads/WVFREE_FilledCircle_PurpleBlueGradient_large_72dpi.png" alt="">
			</a>
			<nav id="main-nav" class="main-navigation">
				<ul id="menu-main_nav" class="menu">
					<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#panel" class="">Know Your Options</a></li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#footer" class="">Second Heading</a></li>
				</ul>
				<a id="mobileMenuTrigger">Menu</a>
			</nav>
		</header>
