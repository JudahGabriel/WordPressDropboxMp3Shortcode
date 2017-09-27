<?php

/*
Plugin Name: Dropbox MP3 Shortcode
Plugin URI: https://github.com/JudahGabriel/WordPressDropboxMp3Shortcode
Description: Provides a [mp3] shortcode.
Author: Judah Gabriel Himango
Version: 1.0
Author URI: http://twitter.com/judahgabriel
Tags: Search
License: https://github.com/JudahGabriel/WordPressDropboxMp3Shortcode/blob/master/LICENSE
*/

// [mp3]
function mp3_func( $atts ) {
    $a = shortcode_atts( array(
        0 => 'http://missing'
    ), $atts );

	$mp3url = str_replace("www.dropbox", "dl.dropbox", str_replace("?dl=0", "?", $a[0]));
    return "<audio controls style='width: 100%'><source src='{$mp3url}' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
}
add_shortcode( 'mp3', 'mp3_func' );


?>