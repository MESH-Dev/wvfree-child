
<?php
$primary_color = get_field('primary_color', 'option');
$secondary_color = get_field('secondary_color', 'option');
$contact_section_statement = get_field('contact_section_statement', 'option');
?>
<footer id="footer" class="panel site-footer primary">

	<div class="mesh-container" id="contact">
		<div class="mesh-row">
         <div id="left-col" class="columns-4">
            <h5 class="footer-title pf"><?php the_field('contact_section_title', 'option'); ?></h5>
				<p><?php echo $contact_section_statement; ?></p>
            <?php
            $line1 = get_field('address_line_1', 'option');
            $line2 = get_field('address_line_2', 'option');
            $phone = get_field('phone_number', 'option');
            $email = get_field('email_address', 'option');
            $contact_outro = get_field('contact_outro', 'option');
            $contact_form = get_field('contact_form_shortcode', 'option'); ?>
				
				<div class="contact-media">
               <?php if(!empty ($contact_outro)){ ?>
               <p class="pf"><?php echo $contact_outro; ?></p>
            <?php } ?>
				<?php
            if (!empty($phone)) { ?>
               <a href="tel:<?php echo $phone ?>" class="pf"><p><?php echo $phone ?></p></a>
            <?php };
            if (!empty($email)) { ?>
               <a href="mailto:<?php echo $email ?>" class="pf"><p><?php echo $email ?></p></a>
            <?php }; ?>

				</div>
            <div class="address">
            <?php
            if (!empty($line1)) { ?>
               <p class="pf"><?php echo $line1 ?></p>
            <?php };
            if (!empty($line2)) { ?>
               <p class="pf"><?php echo $line2 ?></p>
            <?php }; ?>
            </div>
				<div class="social">
					<?php
					if (have_rows('social_nav', 'options')):
						while (have_rows('social_nav', 'options')): the_row();
							$icon = get_sub_field('social_icon');
							$url = get_sub_field('social_url');
							?>
							<a href="<?php echo $url ?>" target="_blank"><i class="<?php echo $icon ?>"></i></a>
						<?php endwhile;
					endif;
					?>
				</div>
				<p class="byline">Site by <a href="http://meshfresh.com" target="_blank">MESH</a></p>
         </div>
         <div id="right-col" class="columns-6 offset-by-2">
            <?php
            if(!empty($contact_form)){
               echo do_shortcode($contact_form);
            };
            ?>
         </div>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
