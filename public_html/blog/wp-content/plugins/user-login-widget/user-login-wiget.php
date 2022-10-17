<?php
/*
Plugin Name: User Login Wiget
Plugin URI: http://www.antiteori.com/
Description: Creates HTML to provide user Login to your site without goto the login page <em>*http://your.site/wp-login.php*</em>.
Version: 1.0
Author: d_anank
Author URI: http://www.antiteori.com/
WordPress Version: 2.7
*/

class userLoginWiget{
	
	var $id;
	var $name;
	
	function userLoginWiget(){
		add_action('wp_dashboard_setup', array(&$this, 'register_widget'));
		add_filter('wp_dashboard_widgets', array(&$this, 'add_widget'));
        register_sidebar_widget(array('User Login Wiget', 'widgets'), array(&$this, 'widget_sidebar'));
        register_widget_control(array('User Login Wiget', 'widgets'), array(&$this, 'widget_sidebar_control'));
		$this->id = 'userLoginWiget';
		$this->name = 'User Login Wiget';
	}
	
	function register_widget() {
		wp_register_sidebar_widget($this->id, 
			__($this->name, $this->id), 
			array(&$this, 'widget'), 
			array('all_link' => 'http://www.antiteori.com/', 'width' => 'full')
		);
		wp_register_widget_control($this->id, 
			__($this->name, $this->id), 
			array(&$this, 'widget_control'), 
			array(), 
			array('widget_id' => $this->id)
		);
	}
	
	function add_widget($widgets) {
		global $wp_registered_widgets;
		if (!isset($wp_registered_widgets[$this->id]) ) return $widgets;
		array_splice($widgets, '', 0, $this->id);
		return $widgets;
	}
	
	function widget_sidebar($args) {
        extract($args, EXTR_SKIP);
        if(isset($before_widget)) echo $before_widget;
		if (!$widget_options = get_option('dashboard_widget_options')) $widget_options[$this->id] = array();
		if (!isset($widget_options[$this->id])) $widget_options[$this->id] = array();
		if(empty($widget_options[$this->id]['title'])) $widget_options[$this->id]['title'] = $this->name;
		if(empty($widget_options[$this->id]['username_label'])) $widget_options[$this->id]['username_label'] = "Username";
		if(empty($widget_options[$this->id]['password_label'])) $widget_options[$this->id]['password_label'] = "Password";
		if(empty($widget_options[$this->id]['login_button'])) $widget_options[$this->id]['login_button'] = "Log In";
        
		if ( !current_user_can('level_0') ) {
	        if(isset($before_title)) echo $before_title;
	        if(isset($after_title)) echo $after_title;
        ?>
<form name="loginform" id="loginform" action="<?php echo site_url('wp-login.php', 'login_post') ?>" method="post">
	<p><input class="field" type="text" name="log" id="user_login" class="input" value="Username" tabindex="10" /></p>
	<p><input class="field" type="password" name="pwd" id="user_pass" class="input" value="Password" tabindex="20" /></p><?php do_action('login_form'); ?>
	<p style="margin-bottom: 5px;"><input type="image" src="/tracker/wl/lovegolf/images/but-small-login.png" height="22" width="192" alt="Log-in" />
		<!-- <input type="submit" name="wp-submit" id="wp-submit" value="<?php echo $widget_options[$this->id]['login_button']; ?>" tabindex="100" /> -->
		<input type="hidden" name="redirect_to" value="<?php echo site_url( get_permalink() ); ?>" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
	<p><span>Lost password? <a href="/lost-password/">Click Here</a></span></p>
</form>

		<?php
		}else{
	        global $userdata;
	        if(isset($before_title)) echo $before_title;
	    	echo "Welcome : ". $userdata->display_name;
	        if(isset($after_title)) echo $after_title;
		?>
<form name="logoutform" id="logoutform" action="<?php echo site_url('wp-login.php?action=logout&redirect_to='.site_url('/index.php'), 'logout_post') ?>" method="post">
	<ul><li>Name : <strong><?php echo $userdata->first_name;?> <?php echo $userdata->last_name;?></strong></li>
	<li>E-mail : <?php echo ($userdata->user_email)?'<a href="mailto:'.$userdata->user_email.'">'.$userdata->user_email.'</a>':'';?></li>
	<li>URL : <?php echo ($userdata->user_url)?'<a href="'.$userdata->user_url.'">'.$userdata->user_url.'</a>':'';?></li>
	<li><a href="<?php echo site_url('wp-admin/index.php');?>">Admin Page</a></li>
	<li><a href="<?php echo site_url('wp-admin/post-new.php');?>">Post Article</a></li>
	<li><a href="<?php echo wp_logout_url(site_url('index.php'));?>">LogOut</a></li></ul>
</form>

	    <?php
		}
        if(isset($after_widget)) echo $after_widget;
	}
	
    function widget_sidebar_control($args = null) {
		if (!empty($args)) extract($args, EXTR_SKIP);
		if (!$widget_options = get_option('dashboard_widget_options')) $widget_options = array();
		if (!isset($widget_options[$this->id])) $widget_options[$this->id] = array();
		if ('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST["widget-".$this->id])) {
			$widget_options[$this->id] = stripslashes_deep($_POST["widget-".$this->id]);
			update_option('dashboard_widget_options', $widget_options);
		}
		echo "<p><label>"; _e('Title', $this->id);
		echo "<br /><input type='text' name='widget-".$this->id."[title]' size='19' value='" . $widget_options[$this->id]['title'] . "'></label> Default : '$this->name'</p>";
		echo "<p><label>"; _e('Username Label', $this->id);
		echo "<br /><input type='text' name='widget-".$this->id."[username_label]' size='19' value='" . $widget_options[$this->id]['username_label'] . "'></label> Default : 'Username'</p>";
		echo "<p><label>"; _e('Password Label', $this->id);
		echo "<br /><input type='text' name='widget-".$this->id."[password_label]' size='19' value='" . $widget_options[$this->id]['password_label'] . "'></label> Default : 'Password'</p>";
		echo "<p><label>"; _e('Login Button Value', $this->id);
		echo "<br /><input type='text' name='widget-".$this->id."[login_button]' size='19' value='" . $widget_options[$this->id]['login_button'] . "'></label> Default : 'Log In'</p>";
		echo '<input class="widget-width" value="400" type="hidden">';
    }

}

add_action('plugins_loaded', create_function('', 'global $userLoginWiget; if (empty($userLoginWiget)) $userLoginWiget = new userLoginWiget();'));
add_action('widgets_init', create_function('', 'global $userLoginWiget; if (empty($userLoginWiget)) $userLoginWiget = new userLoginWiget();'));

?>