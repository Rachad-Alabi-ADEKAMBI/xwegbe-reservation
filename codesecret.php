<?php
/**
 * Plugin Name: Code Secret
 */

 add_shortcode('secret', 'secret_content');
 wp_enqueue_script('vue', 'https://unpkg.com/vue@3');

    function secret_content(){
        echo("<div id='app'>
        <input type='text' v-model='proposition'>
{{  message }}
            </div>

           
            ");
            wp_enqueue_script('app', plugin_dir_url(__FILE__). 'app.js');
            wp_enqueue_style('', plugin_dir_url(__FILE__). 'style.css');


    }
    
 ?>