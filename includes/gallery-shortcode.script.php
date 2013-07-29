<?php
/*  Copyright 2013 MarvinLabs (contact@marvinlabs.com)
This program is free software; you can redistribute it and/or modify
This program is distributed in the hope that it will be useful,
You should have received a copy of the GNU General Public License
?>
$( '#<?php echo $gallery_id; ?> .bxslider' ).bxSlider({
<?php if ( !$hide_carousel ) : ?>	
		pagerCustom:	'#<?php echo $gallery_id; ?> .bxpager',
<?php endif; // !$hide_carousel ?>
		adaptiveHeight:	<?php echo ( $adaptive_height ? 'true' : 'false'); ?>,
		auto:	<?php echo ( $auto_start ? 'true' : 'false'); ?>,
		mode:	'<?php echo $transition; ?>',
		speed: 	<?php echo $speed; ?>,
		pause: 	<?php echo $duration; ?>,
		<?php echo $extra_options; ?>
	});		
	
<?php if ( !$hide_carousel ) : ?>	
$('#<?php echo $gallery_id; ?> .bxpager').bxSlider({
  		minSlides: <?php echo $this->plugin->get_option( BXSG_Settings::$OPTION_GS_CAROUSEL_MIN_THUMBS ); ?>,
  		maxSlides: <?php echo $this->plugin->get_option( BXSG_Settings::$OPTION_GS_CAROUSEL_MAX_THUMBS ); ?>,
  		slideWidth: <?php echo $this->plugin->get_option( BXSG_Settings::$OPTION_GS_CAROUSEL_THUMB_WIDTH ); ?>,
  		slideMargin: <?php echo $this->plugin->get_option( BXSG_Settings::$OPTION_GS_CAROUSEL_THUMB_MARGIN ); ?>,
  		slideMove: <?php echo $this->plugin->get_option( BXSG_Settings::$OPTION_GS_CAROUSEL_THUMBS_MOVE ); ?>
	});	
<?php endif; // !$hide_carousel ?>