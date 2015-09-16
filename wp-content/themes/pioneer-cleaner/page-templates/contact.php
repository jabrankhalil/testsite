<?php
/**
 * Template Name: Contact Page
 */

//Specific to this page add Googlemap API into the footer but as top priority

add_action('wp_footer', 'pc_load_google_map_js', 0);

get_header();

the_post();

	$address_map = get_field('address_googlemap');

	if(!empty($address_map) AND is_array($address_map)) : ?>
		<?php
			$location                 = new stdClass();
			$location->title          = $address_map['title'];
			$location->locationlatlng = $address_map['lat'] . ',' . $address_map['lng'];
			$location->custompinimage = get_field('map_marker') ? get_field('map_marker') : get_field('logo', 'option');
			$location->id             = '1';

			$locations					= array($location);
			$locations_json				= htmlentities(json_encode($locations));
		?>
		<div class="panel widget widget_pt_google_map panel-first-child panel-last-child" id="panel-29-0-0-0">
			<div class="simple-map  js-where-we-are" data-latlng="<?php echo $address_map['lat']; ?>,<?php echo $address_map['lng']; ?>" data-markers="<?php echo $locations_json; ?>"  data-zoom="12" data-type="roadmap" data-style="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:65},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:51},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:30},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:-25},{&quot;saturation&quot;:-100}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ffff00&quot;},{&quot;lightness&quot;:-25},{&quot;saturation&quot;:-97}]}]" style="height: 380px;">
			</div>
		</div>
	<?php endif; ?>
	<div class="spacer-big"></div>
	<div class="hentry container" role="main">
		<div class="row">
			<div class="col-md-3">
				<div class="textwidget panel widget">
					<span class="icon-container"><span class="fa fa-home"></span></span>

					<?php if(pc_has_option_field('address') OR pc_has_option_field('postcode')) : ?>
						<b><?php bloginfo('name'); ?></b><br>
						<?php the_field('address', 'option'); ?><br>
						<?php the_field('city', 'option'); ?>, <?php the_field('postcode', 'option'); ?>
						<br>
					<?php endif; ?>
					<br>

					<?php if(pc_has_option_field('phone')) : ?>
						<span class="icon-container"><span class="fa fa-phone"></span></span> <b><?php the_field('phone', 'option'); ?></b><br>
					<?php endif; ?>

					<?php if(pc_has_option_field('email_address')) : ?>
					<span class="icon-container"><span class="fa fa-envelope"></span></span><a href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a>
					<br>
					<?php endif; ?>

					<br>

					<?php if(pc_has_option_field('opening_time') OR pc_has_option_field('close_time')) : ?>
					<span class="icon-container">
						<span class="fa fa-home"></span>
					</span>

						<b><?php the_field('opening_time', 'option'); ?></b><br>
						<?php the_field('close_time', 'option'); ?>
					<?php endif; ?>
				</div>
				<div class="panel widget widget_pt_social_icons panel-last-child">
					<?php
					$social_links = array(
						'facebook'  => get_field('facebook', 'option'),
						'twitter'   => get_field('twitter', 'option'),
						'youtube'   => get_field('youtube', 'option')
					);

					$social_links = array_filter($social_links);

					foreach($social_links as $social_key => $social_link) :
						?>
						<a class="social-icons__link" href="<?php echo $social_link; ?>" target="_blank"><i class="fa  fa-<?php echo $social_key;?>"></i></a>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-9">
				<?php
				if(pc_has_option_field('email_address')) :
					do_shortcode(get_field('contact_form7_shortcode', 'option'));
				endif;
				?>
			</div>
		</div>
	</div><!-- /container -->

<?php
get_footer();
