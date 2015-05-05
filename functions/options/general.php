<?php
function sc_bxslider_settings_init(  ) { 

    register_setting( 'sc_bxslider', 'sc_bxslider_settings' );

    add_settings_section(
        'sc_bxslider_sc_bxslider_section', 
        __( 'General configuration', 'scbxslider' ), 
        'sc_bxslider_settings_section_callback', 
        'sc_bxslider'
    );

    // mode
    add_settings_field( 
        'mode', 
        __( 'mode', 'scbxslider' ), 
        'mode_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // randomStart
    add_settings_field( 
        'randomStart', 
        __( 'randomStart', 'scbxslider' ), 
        'randomStart_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // infiniteLoop
    add_settings_field( 
        'infiniteLoop', 
        __( 'infiniteLoop', 'scbxslider' ), 
        'infiniteLoop_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // hideControlOnEnd
    add_settings_field( 
        'hideControlOnEnd', 
        __( 'hideControlOnEnd', 'scbxslider' ), 
        'hideControlOnEnd_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // captions
    add_settings_field( 
        'captions', 
        __( 'captions', 'scbxslider' ), 
        'captions_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // ticker
    add_settings_field( 
        'ticker', 
        __( 'ticker', 'scbxslider' ), 
        'ticker_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // tickerHoder
    add_settings_field( 
        'tickerHover', 
        __( 'tickerHover', 'scbxslider' ), 
        'tickerHover_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // adaptativeHeight
    add_settings_field( 
        'adaptativeHeight', 
        __( 'adaptativeHeight', 'scbxslider' ), 
        'adaptativeHeight_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // video
    add_settings_field( 
        'video', 
        __( 'video', 'scbxslider' ), 
        'video_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // responsive
    add_settings_field( 
        'responsive', 
        __( 'responsive', 'scbxslider' ), 
        'responsive_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // preloadImages
    add_settings_field( 
        'preloadImages', 
        __( 'preloadImages', 'scbxslider' ), 
        'preloadImages_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // touchEnabled
    add_settings_field( 
        'touchEnabled', 
        __( 'touchEnabled', 'scbxslider' ), 
        'touchEnabled_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // oneToOneTouch
    add_settings_field( 
        'oneToOneTouch', 
        __( 'oneToOneTouch', 'scbxslider' ), 
        'oneToOneTouch_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // preventDefaultSwipeX
    add_settings_field( 
        'preventDefaultSwipeX', 
        __( 'preventDefaultSwipeX', 'scbxslider' ), 
        'preventDefaultSwipeX_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );

    // preventDefaultSwipeY
    add_settings_field( 
        'preventDefaultSwipeY', 
        __( 'preventDefaultSwipeY', 'scbxslider' ), 
        'preventDefaultSwipeY_render', 
        'sc_bxslider', 
        'sc_bxslider_sc_bxslider_section' 
    );


}

// mode
function mode_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[mode]'>
        <option value='1' <?php selected( $options['mode'], 1 ); ?>>fade</option>
        <option value='2' <?php selected( $options['mode'], 2 ); ?>>horizontal</option>
        <option value='3' <?php selected( $options['mode'], 3 ); ?>>vertical</option>
    </select>

<?php

}

// randomStart
function randomStart_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[randomStart]'>
        <option value='1' <?php selected( $options['randomStart'], 1 ); ?>>false</option>
        <option value='2' <?php selected( $options['randomStart'], 2 ); ?>>true</option>
    </select>

<?php

}

// infiniteLoop
function infiniteLoop_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[infiniteLoop]'>
        <option value='1' <?php selected( $options['infiniteLoop'], 1 ); ?>>true</option>
        <option value='2' <?php selected( $options['infiniteLoop'], 2 ); ?>>false</option>
    </select>

<?php

}

// hideControlOnEnd
function hideControlOnEnd_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[hideControlOnEnd]'>
        <option value='1' <?php selected( $options['hideControlOnEnd'], 1 ); ?>>false</option>
        <option value='2' <?php selected( $options['hideControlOnEnd'], 2 ); ?>>true</option>
    </select>

<?php

}

// captions
function captions_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[captions]'>
        <option value='1' <?php selected( $options['captions'], 1 ); ?>>true</option>
        <option value='2' <?php selected( $options['captions'], 2 ); ?>>false</option>
    </select>

<?php

}

// ticker
function ticker_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[ticker]'>
        <option value='1' <?php selected( $options['ticker'], 1 ); ?>>false</option>
        <option value='2' <?php selected( $options['ticker'], 2 ); ?>>true</option>
    </select>

<?php

}

// tickerHoder
function tickerHover_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[tickerHover]'>
        <option value='1' <?php selected( $options['tickerHover'], 1 ); ?>>false</option>
        <option value='2' <?php selected( $options['tickerHover'], 2 ); ?>>true</option>
    </select>

<?php

}

// adaptativeHeight
function adaptativeHeight_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[adaptativeHeight]'>
        <option value='1' <?php selected( $options['adaptativeHeight'], 1 ); ?>>false</option>
        <option value='2' <?php selected( $options['adaptativeHeight'], 2 ); ?>>true</option>
    </select>

<?php

}

// video
function video_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[video]'>
        <option value='1' <?php selected( $options['video'], 1 ); ?>>false</option>
        <option value='2' <?php selected( $options['video'], 2 ); ?>>true</option>
    </select>

<?php

}

// responsive
function responsive_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[responsive]'>
        <option value='1' <?php selected( $options['responsive'], 1 ); ?>>true</option>
        <option value='2' <?php selected( $options['responsive'], 2 ); ?>>false</option>
    </select>

<?php

}

// preloadImages
function preloadImages_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[preloadImages]'>
        <option value='1' <?php selected( $options['preloadImages'], 1 ); ?>>false</option>
        <option value='2' <?php selected( $options['preloadImages'], 2 ); ?>>true</option>
    </select>

<?php

}

// touchEnabled
function touchEnabled_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[touchEnabled]'>
        <option value='1' <?php selected( $options['touchEnabled'], 1 ); ?>>true</option>
        <option value='2' <?php selected( $options['touchEnabled'], 2 ); ?>>false</option>
    </select>

<?php

}

// oneToOneTouch
function oneToOneTouch_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[oneToOneTouch]'>
        <option value='1' <?php selected( $options['oneToOneTouch'], 1 ); ?>>true</option>
        <option value='2' <?php selected( $options['oneToOneTouch'], 2 ); ?>>false</option>
    </select>

<?php

}

// preventDefaultSwipeX
function preventDefaultSwipeX_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[preventDefaultSwipeX]'>
        <option value='1' <?php selected( $options['preventDefaultSwipeX'], 1 ); ?>>true</option>
        <option value='2' <?php selected( $options['preventDefaultSwipeX'], 2 ); ?>>false</option>
    </select>

<?php

}

// preventDefaultSwipeY
function preventDefaultSwipeY_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[preventDefaultSwipeY]'>
        <option value='1' <?php selected( $options['preventDefaultSwipeY'], 1 ); ?>>true</option>
        <option value='2' <?php selected( $options['preventDefaultSwipeY'], 2 ); ?>>false</option>
    </select>

<?php

}


function sc_bxslider_settings_section_callback(  ) { 

    echo __( 'General Configuration for SC BXSlider', 'scbxslider' );
}



// call plugin
add_action( 'wp_footer', 'sc_bxslider_call', 9999 );
function sc_bxslider_call() { 
    $options = get_option( 'sc_bxslider_settings' );
    print_r($options);?>

	<script>
		jQuery(document).ready(function(){
			jQuery('.sc-bxslider').sc_bxslider({
				mode: <?php if ($options['mode'] == 1) { echo "'fade'"; } elseif ($options['mode'] == 2) { echo "'horizontal'"; } else { echo "'vertical'"; } ?>,
				randomStart: <?php if ($options['randomStart'] == 1) { echo 'false'; } else { echo 'true'; } ?>,
				infiniteLoop: <?php if ($options['infiniteLoop'] == 1) { echo 'true'; } else { echo 'false'; } ?>,
				hideControlOnEnd: <?php if ($options['hideControlOnEnd'] == 1) { echo 'false'; } else { echo 'true'; } ?>,
				captions: <?php if ($options['captions'] == 1) { echo 'true'; } else { echo 'false'; } ?>,
				ticker: <?php if ($options['ticker'] == 1) { echo 'false'; } else { echo 'true'; } ?>,
				tickerHover: <?php if ($options['tickerHover'] == 1) { echo 'false'; } else { echo 'true'; } ?>,
				adaptativeHeight: <?php if ($options['adaptativeHeight'] == 1) { echo 'false'; } else { echo 'true'; } ?>,
				video: <?php if ($options['video'] == 1) { echo 'false'; } else { echo 'true'; } ?>,
				responsive: <?php if ($options['responsive'] == 1) { echo 'true'; } else { echo 'false'; } ?>,
				preloadImages: <?php if ($options['preloadImages'] == 1) { echo 'false'; } else { echo 'true'; } ?>,
				touchEnabled: <?php if ($options['touchEnabled'] == 1) { echo 'true'; } else { echo 'false'; } ?>,
				oneToOneTouch: <?php if ($options['oneToOneTouch'] == 1) { echo 'true'; } else { echo 'false'; } ?>,
				preventDefaultSwipeX: <?php if ($options['preventDefaultSwipeX'] == 1) { echo 'true'; } else { echo 'false'; } ?>, 
				preventDefaultSwipeY: <?php if ($options['preventDefaultSwipeY'] == 1) { echo 'true'; } else { echo 'false'; } ?>,
			});
		});
	</script>

<?php }