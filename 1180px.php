<?php
/*
Plugin Name: 1180px Shortcodes
Plugin URI: http://1180px.com
Description: Adds simple shortcodes for the 1180px css framework
Version: 1.0
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
wp_register_style( '1180px', plugins_url( '/css/1180px.min.css', __FILE__ ), array(), '1.0', 'all' );
wp_enqueue_style( '1180px' );

// [row]
function row_shortcode( $atts ) {
    return '<div class="row">';
}
add_shortcode( 'row', 'row_shortcode' );

// [/row]
function row_close_shortcode( $atts ) {
    return '</div><!-- close row -->';
}
add_shortcode( '/row', 'row_close_shortcode' );

// [/span]
function span_close_shortcode( $atts ) {
    return '</div><!-- close span -->';
}
add_shortcode( '/row', 'span_close_shortcode' );

// [span1]
function span1_shortcode( $atts ) {
    return '<div class="span1">';
}
add_shortcode( 'span1', 'span1_shortcode' );

// [span2]
function span2_shortcode( $atts ) {
    return '<div class="span2">';
}
add_shortcode( 'span2', 'span2_shortcode' );

// [span3]
function span3_shortcode( $atts ) {
    return '<div class="span3">';
}
add_shortcode( 'span3', 'span3_shortcode' );

// [span1]
function span4_shortcode( $atts ) {
    return '<div class="span4">';
}
add_shortcode( 'span4', 'span4_shortcode' );

// [span5]
function span5_shortcode( $atts ) {
    return '<div class="span5">';
}
add_shortcode( 'span5', 'span5_shortcode' );

// [span6]
function span6_shortcode( $atts ) {
    return '<div class="span6">';
}
add_shortcode( 'span6', 'span6_shortcode' );

// [span7]
function span7_shortcode( $atts ) {
    return '<div class="span7">';
}
add_shortcode( 'span7', 'span7_shortcode' );

// [span8]
function span8_shortcode( $atts ) {
    return '<div class="span8">';
}
add_shortcode( 'span8', 'span8_shortcode' );

// [span9]
function span9_shortcode( $atts ) {
    return '<div class="span9">';
}
add_shortcode( 'span9', 'span9_shortcode' );

// [span10]
function span10_shortcode( $atts ) {
    return '<div class="span10">';
}
add_shortcode( 'span10', 'span10_shortcode' );

// [span11]
function span11_shortcode( $atts ) {
    return '<div class="span11">';
}
add_shortcode( 'span11', 'span11_shortcode' );

// [span12]
function span12_shortcode( $atts ) {
    return '<div class="span12">';
}
add_shortcode( 'span12', 'span12_shortcode' );

