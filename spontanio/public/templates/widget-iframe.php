<?php
	echo $args['before_widget'];
	echo $args['before_title'];
	echo $args['after_title'];
?>
<button type="button" id="widget-button" class="spontanio-button"><?php echo $buttonName; ?></button>
    <div id="widget-data"
         data-id="spontanio-widget"
         data-position="<?php echo $position; ?>"
         data-roomname = "<?php echo esc_attr( $roomName ); ?>"
         data-width="<?php echo $width; ?>"
         data-height="<?php echo $height; ?>"
    >
    </div>
<?php
	echo $args['after_widget'];
