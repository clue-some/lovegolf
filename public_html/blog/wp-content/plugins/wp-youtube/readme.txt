=== Plugin Name ===
Tags: post, posts, plugin, video, manage, editor, upload, media, youtube, url
Requires at least: 2.3
Tested up to: 2.3
Stable tag: 2.0

WP YouTube now supports a profile editor, where you can set up different settings, but only one profile is needed for all your YouTube videos. Easy to use!

== Description ==

= Manage all the YouTube videos at the same time =
This plugin helps you to present your YouTube videos without the effort to paste the whole embed-code. You only need the YouTube ID, the rest is handled by WP YouTube. You can set options to manage all the YouTube videos at the same time. With the new profile editor it is even possible to set different settings. If you have old YouTube videos, they are not conflicted by this plugin.

= Profile settings =

* Width
* Height
* Tag name
* Tag type
* Color
* Show border
* Autoplay
* Include related videos
* Valid XHTML code
	
See <a href="http://wordpress.org/extend/plugins/wp-youtube/screenshots/">screenshots</a> for an overview...

For upgrade read on the installation page first!

== Installation ==

= First time installation =

1. Upload the FOLDER 'wp-youtube' to the /wp-content/plugins/
2. Activate the plugin 'WP YouTube' through the 'Plugins' menu in admin
3. Go to 'Manage / YouTube Profiles' for more instructions

= Upgrade from a previous version =

1. Deactivate 'WP YouTube' through the 'Plugins' menu in admin
2. Remove the file 'wp-youtube.php' from /wp-content/plugins/
3. Upload the FOLDER 'wp-youtube' to the /wp-content/plugins/
4. Activate the plugin 'WP YouTube' through the 'Plugins' menu in admin
5. Go to 'Manage / YouTube Profiles'. Your previous options should be imported.
6. 'Save Profiles' to use / save your imported data.
7. Go to 'Manage / YouTube Profiles' for more instructions

== Frequently Asked Questions ==

= Can I still post embed code the old fasion way with this plugin installed? =

Yes, you can.

= Does this plugin change all my old embed videos? =

No. This plugin is looking for the [wp_youtube]-tag. If there is none, nothing will be affected.

= How do I report a bug? =

Contact me at my <a href="http://www.jenst.se/2008/01/13/wp-youtube-2">here</a>. Describe the problem as good as you can and what version you use.

= How can I support this plugin? =

Spread the word, report bugs and give med feedback.

== Screenshots ==

1. The profile editor to be set on all your YouTube videos.
2. The post displaying the YouTube tag and the YouTube ID.

== Changelog ==

[ WP YouTube 2.0 ]

* Totally rewritten from the scratch to make way for a new profile editor
* Profile editor created. You can use different profiles in your posts or pages, for example if you have the need to use different colors.
* Because of the profile editor, each profile is more compact to take a little less space on the screen
* Javascript is now required to use WP YouTube admin. Because of the Javascript the plugin is very fast to use.
* Preview of your YouTube player, shows colors and border settings
* You can paste a function code in your theme and that way use settings from a profile. If you are into theme creation this might be a good thing.
* You can remove profiles, all or one at the time
* If you have used a previous version of WP YouTube, that data is imported (save required).
* The menu is moved to 'Manage / YouTube Profiles' simply because you manage YouTube profiles.
* Option to remove old WP YouTube data from database
* Option to remove WP YouTube 2 data from database, if you need to uninstall this plugin.

[ WP YouTube 0.9 ]

* New feature - "Tag type" added
* Fix - Autoplay bug fixed
* Fix - Stylesheet code removed, it wasn't used anyway

[ WP YouTube 0.8 ]

* New feature - "Autoplay" option added
* New feature - "Include related videos" option added
* New feature - "Valid XHTML code" option added
* Fix - Width and height was switched
* Fix - The "Tag name" is now set to default value even if options is never updated
* Fix - Some visual enhancements to the instructions part
* Fix - The support link is changed and goes now directly to WP YouTube