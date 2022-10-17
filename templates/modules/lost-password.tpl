
			{if $success}
			
			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">
				
					<h1>Thank you</h1>
					<p><span>An email has been sent to you asking you to confirm your password reset request.</span></p>
					<p>&nbsp;</p>
					<p><span><a href="/">Click here</a> to return to the homepage</span></p>
				
				</div>
				
				<div class="registerBoxArea" id="regForm">
				
					<p>&nbsp;</p>
				
				</div>
			
			</div>
			
			{else}

			<script type="text/javascript">
			{literal}

			$(function() {
				inputreplace('#lostpasswordemailaddress', 'Email address');
			});
			
			{/literal}
			</script>
			
			<div class="loginRegisterHolder">
			
				<form action="" method="post">
				
				<div class="loginBoxArea">
				
					<h1>Lost password?</h1>
					{if $lostpassworderror}<p class="error"><span>{$lostpassworderror}</span></p>{/if}
					<p><span>Enter your email address below and we'll reset your password for you.</span></p>
					<p>&nbsp;</p>
					<p><input name="lostpasswordemailaddress" id="lostpasswordemailaddress" class="field" type="text" value="{if $post.lostpasswordemailaddress}{$post.lostpasswordemailaddress}{else}Email address{/if}" /></p>
					<p>&nbsp;</p>
					<input type="hidden" name="dolostpassword" value="true" />
					<p><input class="lostPasswordButton" type="image" src="/tracker/wl/lovegolf/images/but-retrieve-password.png" height="30" width="210" alt="Retrieve password" /></p>
					<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
	
				</div>
				
				</form>
				
				<form action="/register/" method="post">
										
					<div class="registerBoxArea">
					
						<h1>Not already a member?</h1>
						<p>Unlike other golf tracking websites,<br />{$domain.pagetitle} is free. With your account you can<br />track, shop, socialise and search for courses,<br />all in one place.</p>
						<p><input type="image" src="/tracker/wl/lovegolf/images/but-register-login-register.png" height="30" width="210" alt="Register now" tabindex="6" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
	
					</div>
				
				</form>
			
				<div class="floatEnder"></div>
				
			</div>

			{/if}
			