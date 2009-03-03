<?php
/*
Plugin Name: unfake.it URL shortener for Twitter Tools
Plugin URI: http://unfake.it/help.php#twitter-tools
Description: Takes URLs to your new blog posts and shortens them befor sending to Twitter. This plugin totally depends on Twitter Tools v1.6 and above since it works as a filter.
Version: 1.0
Author: Thomas Gericke
Author URI: http://www.thomasgericke.de/
*/

// **********************************************************************
// COPYRIGHT
// **********************************************************************
// Copyright (c) 2009 Thomas Gericke. All rights reserved.
//
//
// **********************************************************************
// LICENSE
// **********************************************************************
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
//
// **********************************************************************
// ABOUT
// **********************************************************************
// This is an add-on for WordPress - http://wordpress.org/.
// It also is a filter for Twitter Tools plugin and won't work without.
//
//
// **********************************************************************
// CREDITS
// **********************************************************************
// Thanks to Alex King (http://alexking.org) for his Twitter Tools plugin
//
//
// **********************************************************************
// DISCLAIMER
// **********************************************************************
// This program is proudly brought to you without any warranty!


function tt_unfake_it_install() {

	// glad, we have nothing to do here...

}

add_action ('tt_unfake_it/tt_unfake_it.php', 'tt_unfake_it_install');

function fake_tt_url($long_url) { 

	$unfake_api = "http://unfake.it/?a=api&X-Client=wpv1&url=";
	$api_handle = fopen ($unfake_api . $long_url, "r");
	$fake_url = fread ($api_handle, 8192);
	fclose ($api_handle);
	return $fake_url;

}

add_filter('tweet_blog_post_url', 'fake_tt_url')

?>
