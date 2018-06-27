<?php
/* Template Name: Campaign Landing Template*/
get_header('cpl'); ?>
<header>
	<?php
	$logo = get_field('site_logo', 'option');
	$logo_url = $logo['sizes']['medium'];
	$favicon_url = $logo['sizes']['small'];
	?>
	<a class="logo" href="#top">
		<img src="<?php echo $logo_url ?>" alt="">
	</a>
	<nav id="main-nav" class="main-navigation">
		<ul id="menu-main_nav" class="menu">
			<?php
				//$panels = get_field('panels');
				//$panel_ids = [];
					if (have_rows('panels')):
						while (have_rows('panels')):the_row();
							$panel_id = get_sub_field('panel_id');
							$id_link_text = ucwords($panel_id);
							$id_text_lower = strtolower($panel_id);
							$id_add_underscore = str_replace(' ', '_', $id_text_lower);
							if($panel_id){
			?>
			<li class=""><a href="#<?php echo $id_add_underscore; ?>" class=""><?php echo $id_link_text; ?></a></li>
			<?php
			}
				endwhile; endif;
					//var_dump($panels);
			?>
			<!-- <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#panel" class="">Know Your Options</a></li> -->
			<!-- <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#footer" class="">Second Heading</a></li> -->
		</ul>
		<a id="mobileMenuTrigger">Menu</a>
	</nav>
</header>

<main id="content">
	<?php
	$bg_img = get_field('background_image');
	//var_dump($bg_img);
	$bg_url = $bg_img['sizes']['background-fullscreen'];
	$wg_color = get_field('panel_background_color');

	//$bg_url = $bg_img['url'];

	//color

	//if (!empty($bg_url)) { ?>
		<!-- <div class="welcome-gate" id="top">
			<div class="hero" style="background-image:url('<?php echo $bg_url ?>')"></div>

			<div class="img-filter" style="background-color:<?php echo $primary_color ?>;"></div> -->
	<?php //} else{ ?>
		<div class="welcome-gate <?php if($wg_color != ''){echo $wg_color; } ?>" id="top" style="<?php if($bg_url != ''){ echo 'background-image:url('.$bg_url.')'; } ?>">
	<?php //}; ?>
		<div class="mesh-container">
			<div class="mesh-row">

				<!-- Campaign logo -->
				<?php
					$cp_logo = get_field('campaign_logo');
					$cp_logo_url = $cp_logo['sizes']['large'];
				?>
				<img class="feature-image" src="<?php echo $cp_logo_url; ?>">
				<div class="sign sf">
					<h1 id="welcomeTitle" class="pf"><?php the_field('statement'); ?></h1>
					<!-- <//?php if (get_field('main_blurb') != '') { ?>
						<p id="welcomeDesc" class="sf"><//?php the_field('main_blurb'); ?></p>
					<//?php } ?> -->
				</div>
			</div>
		</div>
		<a id="scrollLink">
			<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 31">
			    <g>
			      <path d="M3,1.31l37.3,27.88L77.6,1.31" style="fill: none;stroke: #fff;stroke-width: 3px"/>
			    </g>
			</svg>
		</a>
	</div>


	<?php
	if(have_rows('panels')):
		while(have_rows('panels')) : the_row();
			$panel_type = get_sub_field('panel_type');
			$panel_name = get_sub_field('panel_id');
			$id_link_text2 = ucwords($panel_name);
			$id_text_lower2 = strtolower($panel_name);
			$id_add_underscore2 = str_replace(' ', '_', $id_text_lower2);
	?>
				<?php
				if ($panel_type == 'intro') { ?>
					<div class="panel <?php the_sub_field('panel_type'); ?>" id="<?php echo $id_add_underscore2; ?>">
						<div class="mesh-container">
							<div class="mesh-row">
								<div class="columns-5">
									<h2 class="blurb pf" style="color:<?php echo $primary_color ?>"><?php the_sub_field('main_blurb'); ?></h2>
									<?php
									$cta_link = get_sub_field('cta_link');
									$cta_link_external = get_sub_field('cta_link_external');
									$cta_title = get_sub_field('cta_title');
									if(!empty($cta_title)){ ?>
										<a href="<?php echo $cta_link ?>"<?php if ($cta_link_external) {echo 'target="_blank"';} ?>><p class="cta pf"><?php echo $cta_title ?></p></a>
									<?php };
									?>
								</div>
								<div class="columns-6 offset-by-1">
									<div class="intro-desc sf"><?php the_sub_field('intro_text'); ?></div>
								</div>
							</div>
						</div>
					</div>
				<?php
			} elseif($panel_type == 'cards'){
				$panel_bg = get_sub_field('panel_background_image');
				$panel_bg_url = $panel_bg['sizes']['background-fullscreen'];
				$panel_name_cards = get_sub_field('panel_id');
				$id_link_text_cards = ucwords($panel_name_cards);
				$id_text_lower_cards = strtolower($panel_name_cards);
				$id_add_underscore_cards = str_replace(' ', '_', $id_text_lower_cards);

				//if (!empty($panel_bg_url)) { ?>
					<!-- <div class="panel <//?php the_sub_field('panel_type'); ?>" id="<//?php echo $id_add_underscore2; ?>">
						<div class="hero" style="background-image:url('<//?php echo $panel_bg_url ?>')"></div>
						<div class="img-filter" style="background-color:<//?php echo $secondary_color ?>"></div> -->
				<?php //} else{ ?>
					<div class="panel <?php echo $panel_type; ?> bc-grid" id="<?php echo $id_add_underscore_cards;?>" > <!-- style="background-color:<?php echo $secondary_color ?>;" -->
				<?php //}; ?>
					<div class="mesh-container">
							<?php
							$cards = get_sub_field('cards');
							$cta_title = get_sub_field('cta_card_title');
							$cta_link_text = get_sub_field('cta_card_link_text');
							$cta_card_link = get_sub_field('cta_card_link');
							$cta_external = get_sub_field('external');
							//$cta_
							$card_num = count($cards);
							$width_class = '';
							if ($card_num == 1) {
								$width_class = 'columns-12';
							} elseif ($card_num == 2) {
								$width_class = 'columns-6';
							} elseif ($card_num == 3) {
								$width_class = 'columns-4';
							} elseif ($card_num == 4) {
								$width_class = 'columns-3';
							}
							$card_cnt=0;
							if(have_rows('cards')): ?>
							<div class="mesh-row">
							<?php while(have_rows('cards')): the_row();
								$card_cnt++;
								$color = get_sub_field('color');


							?>
								<div class="card columns-4 <?php echo $color; ?>">
									<?php
									$card_img = get_sub_field('card_image');
									$card_img_url = $card_img['sizes']['medium_large'];
									$card_link = get_sub_field('card_link');
									$card_title = get_sub_field('card_title');
									$card_description = get_sub_field('card_blurb');
									?>

										<img src="<?php echo $card_img_url; ?>" alt="">
										<div class="text">
											<h3 class="pf"><?php echo $card_title; ?></h3>
											<p class="sf"><?php echo $card_description; ?></p>
										</div>


								</div>
								<?if ($card_cnt % 3 == 0){
								echo '</div><div class="mesh-row">';
							}elseif($card_cnt == $card_num){ ?>
								<div class='card columns-4 dl'>
									<div class="text">
										<h3 class="dl-title"><?php echo $cta_title; ?></h3>
										<p class="dl-link"><?php echo $cta_link_text; ?></p>
									</div>
								</div>
							</div><!--end final row -->
							<?php } ?>


							<?php endwhile; ?>

						<?php endif; ?>
						<!-- <div class='card columns-4 dl'>
									<div class="text">
										<h3 class="pf" style="color:red;"><//?php echo $cta_title; ?></h3>
										<p class="sf"><//?php echo $cta_link_text; ?></p>
									</div>
								</div>
							</div> --><!--end final row -->
						<!-- </div> -->
					</div>
				</div>
			<?php	} elseif ($panel_type == 'wysiwyg') {
				$panel_name_text = get_sub_field('panel_id');
				$id_link_text_text = ucwords($panel_name_text);
				$id_text_lower_text = strtolower($panel_name_text);
				$id_add_underscore_text = str_replace(' ', '_', $id_text_lower_text);
				?>
				<div class="panel wysiwyg" id="<?php echo $id_add_underscore_text; ?>">
					<div class="mesh-container">
						<div class="mesh-row">
							<?php
							$columns = get_sub_field('text_panel');
							$col_count = count($columns);
							$col_class = '';
							if($col_count == 1){
								$col_class = 'columns-12';
							} elseif($col_count == 2){
								$col_class = 'columns-6';
							};
							if(have_rows('text_panel')): while(have_rows('text_panel')) : the_row();
								?>
								<div class="<?php echo $col_class ?> content-col">
									<?php the_sub_field('content_column'); ?>
								</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			<?php }elseif($panel_type == 'title') {
				$tb_text = get_sub_field('title_row_text');
				?>
			<div class="title-bar">
				<p><?php echo $tb_text; ?></p>
			</div>
			<?php }elseif($panel_type == 'image'){
				$image = get_sub_field('image_panel');
				$image_url = $image['sizes']['background-fullscreen'];
				$panel_name_image = get_sub_field('panel_id');
				$id_link_text_image = ucwords($panel_name_image);
				$id_text_lower_image = strtolower($panel_name_image);
				$id_add_underscore_image = str_replace(' ', '_', $id_text_lower_image);
				?>

				<div class="panel image" id="<?php echo $id_add_underscore_image; ?>">
					<!-- <div class="image-panel" style="background-image:url('<?php echo $image_url; ?>'); background-size:cover, background-repeat:no-repeat; background-position: center center; height:80vh;"></div> -->
		        	<div class="img-panel">
						<img class="feature-img" src="<?php echo $image_url; ?>" alt="map">
					</div>
					<div class="map-key">
						<div class="key-row">
							<?php
							$folder = get_stylesheet_directory_uri();
							?>
							<img class="key-marker" src="<?php echo $folder.'/img/marker1.png' ?>" alt="marker">
							<p class="key-text">This facility offers <span class="blue">both iud + contraceptive implant</span> services <img class="key-icon" src="<?php echo $folder.'/img/iud_blue.png' ?>" alt="iud icon"> <img class="key-icon" src="<?php echo $folder.'/img/implant_blue.png' ?>" alt="implant icon"></p>
						</div>
						<div class="key-row">
							<img class="key-marker" src="<?php echo $folder.'/img/marker2.png' ?>" alt="marker">
							<p class="key-text">This facility offers <span class="purple">only contraceptive implant</span> services <img class="key-icon" src="<?php echo $folder.'/img/implant_purple.png' ?>" alt="iud icon"></p>
						</div>
					</div>
	        </div>
			<?php }elseif($panel_type == 'locations'){
				$panel_name_loc = get_sub_field('panel_id');
				//var_dump($panel_name_loc);
			$id_link_text_loc = ucwords($panel_name_loc);
			$id_text_lower_loc = strtolower($panel_name_loc);
			$id_add_underscore_loc = str_replace(' ', '_', $id_text_lower_loc);
			?>
			<div class="panel locations" id="<?php echo $id_add_underscore_loc; ?>">
				<?php $loc_cnt=0;
				if(have_rows('locations_grid')): ?>
					<div class="mesh-container">
					<div class="mesh-row">
				<?php 	while(have_rows('locations_grid')):the_row();
				$location_name = get_sub_field('location_name');
				$location_address = get_sub_field('location_address');
				$directions = str_replace('<br />', ' ', $location_address);
				$loc_cnt++;
				?>
					<div class="columns-4 location-card">
						<h2><?php echo $loc_cnt; ?>. <?php echo $location_name; ?></h2>
						<p><?php echo $location_address; ?></p>
						<a class="directions" href="https://www.google.com/maps/dir/?api=1&amp;origin=current+location&amp;destination=<?php echo $directions; ?>" target="_blank">Get Directions >></a>
					</div>
				<?php endwhile; ?>
					</div> <!-- end row -->
				</div> <!-- end mesh-container -->
			</div>
			<?php endif; ?>
			<?php }elseif($panel_type == 'sponsors'){
				if(have_rows('sponsor_panel')):?>
				<div class="panel sponsors" id="<?php echo $id_add_underscore2; ?>">
					<?php while(have_rows('sponsor_panel')):the_row();
				$sponsor_logo = get_sub_field('sponsor_logo');
				//var_dump($sponsor_logo);
				$sponsor_logo_URL = $sponsor_logo['sizes']['large'];
				$sponsor_logo_alt = $sponsor_logo['alt'];
				$alt = '';
				if($sponsor_logo_alt != ''){
					$alt = 'alt="'.$sponsor_logo_alt.'"';
				}

				$spoonsor_logo_alt = $sponsor_logo['alt'];
				$sponsor_link = get_sub_field('sponsor_link');
				$external = get_sub_field('external');
				$target='';
				if($external != ''){
					$target= 'target="_blank';
				}
				?>

				<?php if ($sponsor_link != ''){ ?>
				<a href="<?php echo $sponsor_link; ?>" <?php echo $target; ?> >
				<?php } ?>
					<img src="<?php echo $sponsor_logo_URL; ?>" <?php echo $alt; ?> >
				<?php if ($sponsor_link != ''){ ?>
				</a>
				<?php }
					endwhile; ?>
					</div>
					<?php endif;?>
			<!-- https://www.google.com/maps?saddr=My+location&daddr= -->

	<?php  } endwhile; endif; ?>
<div class="partner panel">
	<div class="mesh-container">
		<div class="mesh-row">
			<div class="columns-3">
				<div class="logo-wrap">
					<img src="http://localhost:8888/wvfree/wp-content/uploads/WVFREE_PrimaryLogo_Black.png" alt="">
				</div>
			</div>
			<div class="columns-3">
				<div class="logo-wrap">
					<img src="http://localhost:8888/wvfree/wp-content/uploads/WV-BehavioralHealthcareProvidersAssoc_Black.png" alt="">
				</div>
			</div>
			<div class="columns-3">
				<div class="logo-wrap">
					<img src="http://localhost:8888/wvfree/wp-content/uploads/WV_Perinatal_Logo_Black.png" alt="">
				</div>
			</div>
			<div class="columns-3">
				<div class="logo-wrap">
					<img src="http://localhost:8888/wvfree/wp-content/uploads/wvfree-drannelbanfieldmd-partnerlogo_black.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
</main><!-- End of Content -->

<?php get_footer('cpl'); ?>
