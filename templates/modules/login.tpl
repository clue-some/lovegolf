			
			<script type="text/javascript">
			{literal}

			$(function() {
				inputreplace('#loginemail', 'Email Address');
			});
			
			{/literal}
			</script>

			<div class="loginRegisterHolder">
		
				<form action="" method="post">
					
					<input type="hidden" name="dologin" value="1" />					
					
					<div class="loginBoxArea">
					
						<h1>Account log-in:</h1>
						
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Email Address:</p>
						<p><input id="loginemail" name="loginemail" type="text" class="field" tabindex="1" value="{if $post.loginemail}{$post.loginemail}{else}Email Address{/if}" /></p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Password:</p>
						<p><input id="loginpassword" name="loginpassword" type="password" class="field" tabindex="2" /></p>
						<div class="checkBoxFloat">
							<p><input id="loginremember" name="loginremember" class="formCheck" type="checkbox" tabindex="3" value="" /></p>
						</div>
						<p><label for="loginremember">Remember me on this computer</label></p>
						<p>&nbsp;</p>
						{if $loginerror}<p class="error"><span>{$loginerror}</span></p>{/if}
						<div class="lostPasswordFloat">
							<p>Lost password? <a href="/lost-password/">Click Here</a></p>
						</div>
						<p><input type="image" src="/tracker/wl/lovegolf/images/but-login-login-register.png" height="30" width="210" alt="Log-in" tabindex="4" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
	
					</div>
				
				</form>
				
				<form action="/register/" method="post">
										
					<div class="registerBoxArea">
					
						<h1>Create an account:</h1>
						<p>&nbsp;</p>
						<p style="font-size: 1.25em;">Unlike other golf tracking websites,<br />{$domain.pagetitle} is free. With your account you can<br />track, shop, socialise and search for golf clubs<br />near you, all in one place.</p>
						<p>&nbsp;</p>
						<p><input type="image" src="/tracker/wl/lovegolf/images/but-register-login-register.png" height="30" width="210" alt="Register now" tabindex="6" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
	
					</div>
				
				</form>
		
				<div class="floatEnder"></div>
				
				{if $skiploginoption}
				
				<div class="shopLoginSkip">
				
					<div class="shopLoginSkipFloat" style="margin-right: 41px;">
					
						<p style="text-align: right;">If you'd prefer to shop without creating an account, skip straight to the checkout &raquo;&raquo;</p>
					
					</div>
					
					<div class="shopLoginSkipFloat" style="width: 210px;">
					
						<p><a href="https://{$host}/shop/checkout.php"><img src="/tracker/wl/lovegolf/images/but-skip-to-checkout.png" height="30" width="210" alt="Skip to checkout &raquo;" /></a></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
					
					</div>
					
					<div class="floatEnder"></div>
				
				</div>
				
				{/if}
				
				<div class="safeSecureArea">
				
					<p><img src="/tracker/wl/lovegolf/images/im-safe-secure.png" height="62" width="294" alt="{$domain.pagetitle} is safe & secure" /></p>
					<p>&nbsp;</p>
				
				</div>
				
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
			
			</div>
