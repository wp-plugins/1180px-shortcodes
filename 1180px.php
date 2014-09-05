<?php
/*
Plugin Name: 1180px Shortcodes
Plugin URI: http://1180px.com
Description: Adds simple shortcodes for the 1180px css framework
Version: 1.0.3
Author: Chris Blackwell
Author URI: http://chrisblackwell.me
*/

/**
 * Copyright (c) 2013 Chris Blackwell. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

// Register the 1180px css file
function register_1180_css_file() {
    wp_register_style( '1180px', plugins_url( '/css/1180px.css', __FILE__ ), array(), '1.0', 'all' );
    wp_enqueue_style( '1180px' );
}
add_action( 'wp_enqueue_scripts', 'register_1180_css_file' );

// [row]
function row_shortcode( $atts, $content = null ) {

    /* Parse nested shortcodes and add formatting. */
    $content = trim( do_shortcode( shortcode_unautop( $content ) ) );

    /* Remove '' from the start of the string. */
    if ( substr( $content, 0, 4 ) == '' )
        $content = substr( $content, 4 );

    /* Remove '' from the end of the string. */
    if ( substr( $content, -3, 3 ) == '' )
        $content = substr( $content, 0, -3 );

    /* Remove any instances of ''. */
    $content = str_replace( array( '<p></p>' ), '', $content );
    $content = str_replace( array( '<p>  </p>' ), '', $content );

    remove_filter( 'the_content', 'wpautop' );
    add_filter( 'the_content', 'wpautop' , 99);
    add_filter( 'the_content', 'shortcode_unautop',100 );

    if(isset($atts['class']))
    {
        return '<div class="row ' . $atts['class'] . '">' . $content . '</div>';
    }
    return '<div class="row">' . $content . '</div>';

}
add_shortcode( 'row', 'row_shortcode' );

// [span1]
function span1_shortcode( $atts, $content = null ) {
    return '<div class="span1">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span1', 'span1_shortcode' );

// [span2]
function span2_shortcode( $atts, $content = null ) {
    return '<div class="span2">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span2', 'span2_shortcode' );

// [span3]
function span3_shortcode( $atts, $content = null ) {
    return '<div class="span3">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span3', 'span3_shortcode' );

// [span4]
function span4_shortcode( $atts, $content = null ) {
    return '<div class="span4">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span4', 'span4_shortcode' );

// [span5]
function span5_shortcode( $atts, $content = null ) {
    return '<div class="span5">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span5', 'span5_shortcode' );

// [span6]
function span6_shortcode( $atts, $content = null ) {
    return '<div class="span6">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span6', 'span6_shortcode' );

// [span7]
function span7_shortcode( $atts, $content = null ) {
    return '<div class="span7">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span7', 'span7_shortcode' );

// [span8]
function span8_shortcode( $atts, $content = null ) {
    return '<div class="span8">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span8', 'span8_shortcode' );

// [span9]
function span9_shortcode( $atts, $content = null ) {
    return '<div class="span9">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span9', 'span9_shortcode' );

// [span10]
function span10_shortcode( $atts, $content = null ) {
    return '<div class="span10">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span10', 'span10_shortcode' );

// [span11]
function span11_shortcode( $atts, $content = null ) {
    return '<div class="span11">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span11', 'span11_shortcode' );

// [span12]
function span12_shortcode( $atts, $content = null ) {
    return '<div class="span12">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'span12', 'span12_shortcode' );
