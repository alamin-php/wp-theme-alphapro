<?php 
function alphapro_bootstraping(){
    load_theme_textdomain( "alphapro");
    add_theme_support( "title-tag");
}
add_action( "after_setup_theme", "alphapro_bootstraping");