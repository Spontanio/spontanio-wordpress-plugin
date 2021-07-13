<div>
    <?php if ( ! $autoLaunch ): ?>
    <button type="button" id="shortcode-button" class="spontanio-button"><?php echo $buttonText; ?></button>
    <?php endif; ?>

    <div id="shortcode-data"
		<?php echo $autoLaunch ? 'class="onload-data"' : ''; ?>
        data-id="<?php echo $autoLaunch ? 'spontanio-onload' : 'spontanio-shortcode'; ?>"
        data-position="<?php echo $position; ?>"
        data-roomname = "<?php echo esc_attr( $roomName ); ?>"
        data-width="<?php echo $width; ?>"
        data-height="<?php echo $height; ?>"
    >
    </div>
</div>