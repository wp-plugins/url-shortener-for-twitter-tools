=== unfake.it URL shortener for Twitter Tools ===
Tags: twitter, tweet, post, digest, notify, unfake, unfake.it, shorten, url
Donate link: http://www.thomasgericke.de/v4/interactive/blog/projects/wordpress-plugin-for-unfake-it/
Contributors: thomasgericke
Requires at least: 2.3
Tested up to: 3.0.1
Stable tag: 1.4

== Description ==

unfake.it URL shortener Plugin for Twitter Tools works as a WordPress plugin and (hopefully) gets an URL as inbound parameter, shortens it by using unfake.it API and sends back the shortened URL as outbound return string.

You may also save your shortened URLs on facebook using our facebook application. If configured so, your WordPress blog will take you to facebook. Your blog post (including a thumbnailed screenshot of your post) will be displayed on your profile page as well as in your friends newsfeeds. 

== Details ==

You need Twitter Tools v1.6 (or above) for this plugin to work!

== Installation ==

1. Download the plugin archive and expand it (you've likely already done this).
2. Create a folder named `url-shortener-for-twitter-tools` in your `wp-contents/plugins/` directory. (This should happen automatically, once you unzipped the archive; just make sure, the location is correct.)
3. Put the `tt_unfake_it.php` file into the `wp-content/plugins/url-shortener-for-twitter-tools/` directory. (This should happen automatically, once you unzipped the archive; just make sure, the location is correct.)
4. Go to the Plugins page in your WordPress Administration area and click 'Activate' for 'unfake.it URL shortener for Twitter Tools'.

== Configuration ==

As of version 1.2, you may choose whether or not to save your shortened blog URLs including a thumbnailed screenshot on facebook.

1. go to `Settings` section of your WordPress' admin menu
2. select `unfake.it URL shortener`
3. select `yes` or `no`
4. press the submit button

Default is `yes`. No worries, this plugin won't ask for or store your facebook login information.

== Frequently Asked Questions ==

= I don't know where to configure my Twitter account =

Your Twitter account ain't configured for and within this plugin. As mentioned above, you need the plugin Twitter Tools, where your account has to be configured.

= What if I install your plugin and don't even use Twitter Tools. Will your plugin harm my WordPress blog? =

No! Unless you use Twitter Tools, simply nothing will happen.

= Are donations welcome? =

Sure. Donations keep me doin' what I'm doin'. Visit http://www.thomasgericke.de/v4/interactive/blog/projects/wordpress-plugin-for-unfake-it/ to flattr me and send any micropayment. Not required, but appreciated.

= I like this plugin but I don't want commercials to show up for my shortened URLs. What can I do? =

Get in touch with me (the author)! We'll find a way.

== Screenshots ==

1. you won't have to shorten your post URL by yourself, as you could do on the unfake.it website: screenshot-1.jpg
2. to make this plugin work without any further configuration, just make sure, you enabled twittering your posts in the Twitter Tools Options: screenshot-2.jpg (WP administration: `Settings`, `Twitter Tools`)
3. to disallow the plugin adding URLs to facebook, simply turn this feature off: screenshot-3.jpg

== Changelog ==

= 1.4 =

* minor correction in API call

= 1.3 =

* admin page rewritten
* flattr introduced
* begging for donations introduced

= 1.2 =

* settings page added
* database tables introduced
* facebook integration added

== Author ==

2009, 2010, Thomas Gericke

http://unfake.it/
http://www.thomasgericke.de/
