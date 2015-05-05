<?php
add_action( 'admin_menu', 'sc_bxslider_add_admin_menu' );
add_action( 'admin_init', 'sc_bxslider_settings_init' );


function sc_bxslider_add_admin_menu(  ) { 

    add_menu_page( 'SC BXSlider', 'SC BXSlider', 'manage_options', 'sc_bxslider', 'sc_bxslider_options_page' );

}

require_once(plugin_dir_path( __FILE__ ) . 'options/general.php');


function sc_bxslider_options_page(  ) { 

    ?>
    <form action='options.php' method='post'>
        
        <h2>SC BXSlider</h2>
        
        <?php
        settings_fields( 'sc_bxslider' );
        do_settings_sections( 'sc_bxslider' );
        submit_button();
        ?>
        
    </form>
    <?php

}

?>