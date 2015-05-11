<?php
function sc_bxslider_settings_init(  ) { 

    register_setting( 'sc_bxslider', 'sc_bxslider_settings' );

        add_settings_section(
            'sc_bxslider_sc_bxslider_section', 
            __( 'General configuration', 'scbxslider' ), 
            'sc_bxslider_settings_section_callback', 
            'sc_bxslider'
        );

        // custom CSS
        add_settings_field( 
            'custom_css', 
            __( 'Custom CSS (for developers)', 'scbxslider' ), 
            'custom_css_render', 
            'sc_bxslider', 
            'sc_bxslider_sc_bxslider_section' 
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
        /*add_settings_field( 
            'video', 
            __( 'video', 'scbxslider' ), 
            'video_render', 
            'sc_bxslider', 
            'sc_bxslider_sc_bxslider_section' 
        );*/

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
        <option value='fade' <?php selected( $options['mode'], 'fade' ); ?>>fade</option>
        <option value='horizontal' <?php selected( $options['mode'], 'horizontal' ); ?>>horizontal</option>
        <option value='vertical' <?php selected( $options['mode'], 'vertical' ); ?>>vertical</option>
    </select>

<?php

}

// randomStart
function randomStart_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[randomStart]'>
        <option value='false' <?php selected( $options['randomStart'], 'false'); ?>>false</option>
        <option value='true' <?php selected( $options['randomStart'], 'true'); ?>>true</option>
    </select>

<?php

}

// infiniteLoop
function infiniteLoop_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[infiniteLoop]'>
        <option value='true' <?php selected( $options['infiniteLoop'], 'true'); ?>>true</option>
        <option value='false' <?php selected( $options['infiniteLoop'], 'false'); ?>>false</option>
    </select>

<?php

}

// hideControlOnEnd
function hideControlOnEnd_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[hideControlOnEnd]'>
        <option value='false' <?php selected( $options['hideControlOnEnd'], 'false'); ?>>false</option>
        <option value='true' <?php selected( $options['hideControlOnEnd'], 'true'); ?>>true</option>
    </select>

<?php

}

// captions
function captions_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[captions]'>
        <option value='true' <?php selected( $options['captions'], 'true'); ?>>true</option>
        <option value='false' <?php selected( $options['captions'], 'false'); ?>>false</option>
    </select>

<?php

}

// ticker
function ticker_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[ticker]'>
        <option value='false' <?php selected( $options['ticker'], 'false'); ?>>false</option>
        <option value='true' <?php selected( $options['ticker'], 'true'); ?>>true</option>
    </select>

<?php

}

// tickerHoder
function tickerHover_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[tickerHover]'>
        <option value='false' <?php selected( $options['tickerHover'], 'false'); ?>>false</option>
        <option value='true' <?php selected( $options['tickerHover'], 'true'); ?>>true</option>
    </select>

<?php

}

// adaptativeHeight
function adaptativeHeight_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[adaptativeHeight]'>
        <option value='false' <?php selected( $options['adaptativeHeight'], 'false'); ?>>false</option>
        <option value='true' <?php selected( $options['adaptativeHeight'], 'true'); ?>>true</option>
    </select>

<?php

}

// video
/*function video_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[video]'>
        <option value='false' <?php selected( $options['video'], true ); ?>>false</option>
        <option value='true' <?php selected( $options['video'], true ); ?>>true</option>
    </select>

<?php

}*/

// responsive
function responsive_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[responsive]'>
        <option value='true' <?php selected( $options['responsive'], 'true'); ?>>true</option>
        <option value='false' <?php selected( $options['responsive'], 'false'); ?>>false</option>
    </select>

<?php

}

// preloadImages
function preloadImages_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[preloadImages]'>
        <option value='false' <?php selected( $options['preloadImages'], 'false'); ?>>false</option>
        <option value='true' <?php selected( $options['preloadImages'], 'true'); ?>>true</option>
    </select>

<?php

}

// touchEnabled
function touchEnabled_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[touchEnabled]'>
        <option value='true' <?php selected( $options['touchEnabled'], 'true'); ?>>true</option>
        <option value='false' <?php selected( $options['touchEnabled'], 'false'); ?>>false</option>
    </select>

<?php

}

// oneToOneTouch
function oneToOneTouch_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[oneToOneTouch]'>
        <option value='true' <?php selected( $options['oneToOneTouch'], 'true'); ?>>true</option>
        <option value='false' <?php selected( $options['oneToOneTouch'], 'false'); ?>>false</option>
    </select>

<?php

}

// preventDefaultSwipeX
function preventDefaultSwipeX_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[preventDefaultSwipeX]'>
        <option value='true' <?php selected( $options['preventDefaultSwipeX'], 'true'); ?>>true</option>
        <option value='false' <?php selected( $options['preventDefaultSwipeX'], 'false'); ?>>false</option>
    </select>

<?php

}

// preventDefaultSwipeY
function preventDefaultSwipeY_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <select name='sc_bxslider_settings[preventDefaultSwipeY]'>
        <option value='true' <?php selected( $options['preventDefaultSwipeY'], 'true'); ?>>true</option>
        <option value='false' <?php selected( $options['preventDefaultSwipeY'], 'false'); ?>>false</option>
    </select>

<?php

}

// custom CSS
function custom_css_render(  ) { 

    $options = get_option( 'sc_bxslider_settings' );
    ?>
    <textarea cols='40' rows='8' name='sc_bxslider_settings[custom_css]'> 
        <?php echo $options['custom_css']; ?>
    </textarea>
    <?php

}

function sc_bxslider_settings_section_callback(  ) { 

    echo __( 'General Configuration for SC BXSlider', 'scbxslider' );
}

// call plugin
add_action( 'wp_footer', 'sc_bxslider_call', 9999 );
function sc_bxslider_call() { 
    $options = get_option( 'sc_bxslider_settings' ); ?>


    <script>
        jQuery(document).ready(function(){
            jQuery('.sc-bxslider').sc_bxslider({
                <?php if (isset($options["mode"]))                  { echo "mode: '" . $options['mode'] . "'"; } ?>,
                <?php if (isset($options["randomStart"]))           { echo "randomStart: " . $options["randomStart"]; } ?>,
                <?php if (isset($options["infiniteLoop"]))          { echo "infiniteLoop: " . $options["infiniteLoop"]; } ?>,
                <?php if (isset($options["hideControlOnEnd"]))      { echo "hideControlOnEnd: " . $options["hideControlOnEnd"]; } ?>,
                <?php if (isset($options["captions"]))              { echo "captions: " . $options["captions"]; } ?>,
                <?php if (isset($options["ticker"]))                { echo "ticker: " . $options["ticker"]; } ?>,
                <?php if (isset($options["tickerHover"]))           { echo "tickerHover: " . $options["tickerHover"]; } ?>,
                <?php if (isset($options["adaptativeHeight"]))      { echo "adaptativeHeight: " . $options["adaptativeHeight"]; } ?>,
                <?php if (isset($options["responsive"]))            { echo "responsive: " . $options["responsive"]; } ?>,
                <?php if (isset($options["preloadImages"]))         { echo "preloadImages: " . $options["preloadImages"]; } ?>,
                <?php if (isset($options["touchEnabled"]))          { echo "touchEnabled: " . $options["touchEnabled"]; } ?>,
                <?php if (isset($options["oneToOneTouch"]))         { echo "oneToOneTouch: " . $options["oneToOneTouch"]; } ?>,
                <?php if (isset($options["preventDefaultSwipeX"]))  { echo "preventDefaultSwipeX: " . $options["preventDefaultSwipeX"]; } ?>,
                <?php if (isset($options["preventDefaultSwipeY"]))  { echo "preventDefaultSwipeY: " . $options["preventDefaultSwipeY"]; } ?>,
            });
        });
    </script>

<?php }

// custom css
add_action('wp_head', 'sc_bxslider_custom_css');
function sc_bxslider_custom_css() { 
    $options = get_option( 'sc_bxslider_settings' );
    if (isset($options['custom_css'])) : ?>
        <style>
            /* Custom CSS by SC BXSlider */ 
            <?php echo $options['custom_css']; ?>
        </style> <?php
    endif;
}

