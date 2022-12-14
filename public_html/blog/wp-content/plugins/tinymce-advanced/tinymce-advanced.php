<?php
/*
Plugin Name: TinyMCE Advanced
Plugin URI: http://www.laptoptips.ca/projects/tinymce-advanced/
Description: Enables advanced features and plugins in TinyMCE, the visual editor in WordPress.
Version: 3.3.9
Author: Andrew Ozz
Author URI: http://www.laptoptips.ca/

Some code and ideas from WordPress (http://wordpress.org/). The options page for this plugin uses jQuery (http://jquery.com/).

Released under the GPL v.2, http://www.gnu.org/copyleft/gpl.html

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
*/


if ( ! function_exists('tadv_paths') ) {
	/*
	If using domain mapping or plugins that change the path dinamically, edit these to set the proper path and URL.
	*/
	function tadv_paths() {
		if ( !defined('TADV_URL') )
			define('TADV_URL', WP_PLUGIN_URL . '/tinymce-advanced/');
			
		if ( !defined('TADV_PATH') )
			define('TADV_PATH', WP_PLUGIN_DIR . '/tinymce-advanced/');
	}
	add_action( 'plugins_loaded', 'tadv_paths', 50 );
}


if ( ! function_exists('tadv_add_scripts') ) {
	function tadv_add_scripts($page) {
		if ( 'settings_page_tinymce-advanced' == $page ) {
			wp_enqueue_script( 'tadv-js', TADV_URL . 'js/tadv.js', array('jquery-ui-sortable'), '3.3.9', true );
			wp_enqueue_style( 'tadv-css', TADV_URL . 'css/tadv-styles.css', array(), '3.3.9' );
		}
	}
} // end tadv_add_scripts


if ( ! function_exists('tadv_activate') ) {
	function tadv_activate() {

		@include_once('tadv_defaults.php');
		$tadv_options = array( 'advlink1' => 0, 'advimage' => 1, 'importcss' => 0, 'contextmenu' => 0, 'no_autop' => 0 );

		if ( isset($tadv_toolbars) ) {
			add_option( 'tadv_toolbars', $tadv_toolbars, '', 'no' );
			add_option( 'tadv_options', $tadv_options, '', 'no' );
			add_option( 'tadv_plugins', $tadv_plugins, '', 'no' );
			add_option( 'tadv_btns1', $tadv_btns1, '', 'no' );
			add_option( 'tadv_btns2', $tadv_btns2, '', 'no' );
			add_option( 'tadv_btns3', $tadv_btns3, '', 'no' );
			add_option( 'tadv_btns4', $tadv_btns4, '', 'no' );
			add_option( 'tadv_allbtns', $tadv_allbtns, '', 'no' );
		}
	}
	add_action( 'activate_tinymce-advanced/tinymce-advanced.php', 'tadv_activate' );
}


if ( ! function_exists('tdav_css') ) {
	function tdav_css($wp) {
		$tadv_options = get_option('tadv_options', array());

		if ( $tadv_options['importcss'] == '1' )
			$wp .= ',' . get_bloginfo('stylesheet_url');

		$wp .= ',' . TADV_URL . 'css/tadv-mce.css';
		return trim($wp, ' ,');
	}
	add_filter( 'mce_css', 'tdav_css' );
}


if ( ! function_exists('tdav_get_file') ) {
	function tdav_get_file($path) {
	
		if ( function_exists('realpath') )
			$path = realpath($path);
	
		if ( ! $path || ! @is_file($path) )
			return '';
	
		if ( function_exists('file_get_contents') )
			return @file_get_contents($path);
	
		$content = '';
		$fp = @fopen($path, 'r');
		if ( ! $fp )
			return '';
	
		while ( ! feof($fp) )
			$content .= fgets($fp);
	
		fclose($fp);
		return $content;
	}
}

$tadv_allbtns = array();
$tadv_hidden_row = 0;


if ( ! function_exists('tadv_mce_btns') ) {
	function tadv_mce_btns($orig) {
		global $tadv_allbtns, $tadv_hidden_row;
		$tadv_btns1 = (array) get_option('tadv_btns1', array());
		$tadv_allbtns = (array) get_option('tadv_allbtns', array());

		if ( in_array( 'wp_adv', $tadv_btns1 ) )
			$tadv_hidden_row = 2;

		if ( is_array($orig) && ! empty($orig) ) {
			$orig = array_diff( $orig, $tadv_allbtns );
			$tadv_btns1 = array_merge( $tadv_btns1, $orig );
		}
		return $tadv_btns1;
	}
	add_filter( 'mce_buttons', 'tadv_mce_btns', 999 );
}


if ( ! function_exists('tadv_mce_btns2') ) {
	function tadv_mce_btns2($orig) {
		global $tadv_allbtns, $tadv_hidden_row;
		$tadv_btns2 = (array) get_option('tadv_btns2', array());

		if ( in_array( 'wp_adv', $tadv_btns2 ) )
			$tadv_hidden_row = 3;

		if ( is_array($orig) && ! empty($orig) ) {
			$orig = array_diff( $orig, $tadv_allbtns );
			$tadv_btns2 = array_merge( $tadv_btns2, $orig );
		}
		return $tadv_btns2;
	}
	add_filter( 'mce_buttons_2', 'tadv_mce_btns2', 999 );
}


if ( ! function_exists('tadv_mce_btns3') ) {
	function tadv_mce_btns3($orig) {
		global $tadv_allbtns, $tadv_hidden_row;
		$tadv_btns3 = (array) get_option('tadv_btns3', array());

		if ( in_array( 'wp_adv', $tadv_btns3 ) )
			$tadv_hidden_row = 4;

		if ( is_array($orig) && ! empty($orig) ) {
			$orig = array_diff( $orig, $tadv_allbtns );
			$tadv_btns3 = array_merge( $tadv_btns3, $orig );
		}
		return $tadv_btns3;
	}
	add_filter( 'mce_buttons_3', 'tadv_mce_btns3', 999 );
}


if ( ! function_exists('tadv_mce_btns4') ) {
	function tadv_mce_btns4($orig) {
		global $tadv_allbtns;
		$tadv_btns4 = (array) get_option('tadv_btns4', array());

		if ( is_array($orig) && ! empty($orig) ) {
			$orig = array_diff( $orig, $tadv_allbtns );
			$tadv_btns4 = array_merge( $tadv_btns4, $orig );
		}
		return $tadv_btns4;
	}
	add_filter( 'mce_buttons_4', 'tadv_mce_btns4', 999 );
}


if ( ! function_exists('tadv_mce_options') ) {
	function tadv_mce_options($init) {
		global $tadv_hidden_row;
		$tadv_options = get_option('tadv_options', array());

		if ( $tadv_hidden_row > 0 )
			$init['wordpress_adv_toolbar'] = 'toolbar' . $tadv_hidden_row;
		else
			$init['wordpress_adv_hidden'] = false;

		if ( isset($tadv_options['no_autop']) && $tadv_options['no_autop'] == 1 )
			$init['apply_source_formatting'] = true;

		return $init;
	}
	add_filter( 'tiny_mce_before_init', 'tadv_mce_options' );
}


if ( ! function_exists('tadv_htmledit') ) {
	function tadv_htmledit($c) {
		$tadv_options = get_option('tadv_options', array());

		if ( isset($tadv_options['no_autop']) && $tadv_options['no_autop'] == 1 ) {
			$c = str_replace( array('&amp;', '&lt;', '&gt;'), array('&', '<', '>'), $c );
			$c = wpautop($c);
			$c = htmlspecialchars($c, ENT_NOQUOTES);
		}
		return $c;
	}
	add_filter('htmledit_pre', 'tadv_htmledit', 999);
}


if ( ! function_exists('tmce_replace') ) {
	function tmce_replace() {
		global $merged_filters;
		$tadv_options = get_option('tadv_options', array());
		$tadv_plugins = get_option('tadv_plugins', array());

		if ( ! array_key_exists('tiny_mce_before_init', $merged_filters) ) // we are not on a page that has the visual editor included with wp_tiny_mce()
			return;

		if ( isset($tadv_options['no_autop']) && $tadv_options['no_autop'] == 1 ) { ?>

<script type="text/javascript">
//<![CDATA[
jQuery('body').bind('afterPreWpautop', function(e, o){
	o.data = o.unfiltered
		.replace(/caption\]\[caption/g, 'caption] [caption')
		.replace(/<object[\s\S]+?<\/object>/g, function(a) {
			return a.replace(/[\r\n]+/g, ' ');
        });

}).bind('afterWpautop', function(e, o){
	o.data = o.unfiltered;
});
//]]>
</script>
<?php
		}

		if ( in_array('advlist', $tadv_plugins) ) {
			$lang = ( '' == get_locale() ) ? 'en' : strtolower( substr(get_locale(), 0, 2) );
?>

<script type="text/javascript">
//<![CDATA[
tinyMCE.addI18n({<?php echo $lang; ?>:{
advlist:{
types:"Types",
def:"Default",
lower_alpha:"a b c",
lower_greek:"\u03b1 \u03b2 \u03b3",
lower_roman:"i ii iii",
upper_alpha:"A B C",
upper_roman:"I II III",
circle:"\u26aa",
disc:"\u26ab",
square:"\u25a0"
}}});
//]]>
</script>
<?php
		}
	}
	add_action( 'admin_print_footer_scripts', 'tmce_replace', 50 );
}


if ( ! function_exists('tadv_load_plugins') ) {
	function tadv_load_plugins($plug) {
		$tadv_plugins = get_option('tadv_plugins');
		if ( empty($tadv_plugins) || !is_array($tadv_plugins) )
			return $plug;

		$plugpath = TADV_URL . 'mce/';

		$plug = (array) $plug;
		foreach( $tadv_plugins as $plugin )
			$plug["$plugin"] = $plugpath . $plugin . '/editor_plugin.js';

		return $plug;
	}
	add_filter( 'mce_external_plugins', 'tadv_load_plugins', 999 );
}


if ( ! function_exists('tadv_load_langs') ) {
	function tadv_load_langs($langs) {
		$tadv_plugins = get_option('tadv_plugins');
		if ( empty($tadv_plugins) || !is_array($tadv_plugins) )
			return $langs;

		$langpath = TADV_PATH . 'mce/';
		$dolangs = array( 'advhr', 'advimage', 'advlink', 'media', 'searchreplace', 'style', 'table', 'xhtmlxtras' );

		$langs = (array) $langs;
		foreach( $tadv_plugins as $plugin ) {
			if ( !in_array( $plugin, $dolangs ) )
				continue;

			$langs["$plugin"] = $langpath . $plugin . '/langs/langs.php';
		}
		return $langs;
	}
	add_filter( 'mce_external_languages', 'tadv_load_langs' );
}


if ( ! function_exists('tadv_page') ) {
	function tadv_page() {
		if ( !defined('TADV_ADMIN_PAGE') )
			define('TADV_ADMIN_PAGE', true);

		include_once( TADV_PATH . 'tadv_admin.php');
	}
}

if ( ! function_exists('tadv_menu') ) {
	function tadv_menu() {
		if ( function_exists('add_options_page') ) {
			add_options_page( 'TinyMCE Advanced', 'TinyMCE Advanced', 'manage_options', 'tinymce-advanced', 'tadv_page' );
			add_action( 'admin_enqueue_scripts', 'tadv_add_scripts' );
		}
	}
	add_action( 'admin_menu', 'tadv_menu' );
}

