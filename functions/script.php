<?php

// call plugin
add_action( 'wp_footer', 'sc_bxslider_call', 9999 );
function sc_bxslider_call() { ?>

	<script>
		jQuery(document).ready(function(){
			jQuery('.sc-bxslider').sc_bxslider({
				mode: 'fade',
				captions: true
			});
		});
	</script>

<?php }