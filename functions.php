<?php

    function cheri_resourser() {
        wp_enqueue_style('style', get_stylesheet_uri() , null, null, null);
    
    };

    add_action('wp_enqueue_scripts', 'cheri_resourser');

    

?>