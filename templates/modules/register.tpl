
			{if $success}
			
			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">
				
					<h1>Thank you for registering with {$domain.pagetitle}</h1>
					<p><span>To complete your registration, please click on the link in the email we've just sent you.</span></p>
					<p>&nbsp;</p>
					<p><span>Remember to add lovegolf.co.uk to your email safe list to ensure receipt of all future mailings.</span></p>
				
				</div>
				
				<div class="registerBoxArea" id="regForm">
				
					<p>&nbsp;</p>
				
				</div>
			
			</div>	
			
			{else}

			<script type="text/javascript">
			{literal}
			
			$(function() {

				inputreplace('#firstname', 'First name');
				inputreplace('#lastname', 'Last name');
				inputreplace('#emailaddress', 'Email address');
				inputreplace('#confirmemailaddress', 'Confirm email address');
				inputreplace('#password', "Choose a password");
				
			});
			
			{/literal}
			</script>
			
			<div class="loginRegisterHolder">
				
				<form action="/register/" method="post">
				
					<input type="hidden" name="doregister" value="1" />
				
					<div class="loginBoxArea" id="regForm" style="margin-top: 60px;">
					
						<h1>Register for your free account:</h1>

						<p><span>Fill in the simple form below and start using {$domain.pagetitle} today! All fields are required.</span></p>
						<p>&nbsp;</p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">First name:</p>
						<p><input id="firstname" name="firstname" type="text" value="{if $post.firstname}{$post.firstname}{else}First name{/if}" class="field" tabindex="1" /></p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Last name:</p>
						<p><input id="lastname" name="lastname" type="text" value="{if $post.lastname}{$post.lastname}{else}Last name{/if}" class="field" tabindex="2" /></p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Email address:</p>
						<p><input id="emailaddress" name="emailaddress" type="text" value="{if $post.emailaddress}{$post.emailaddress}{else}Email address{/if}" class="field" tabindex="3" /></p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Confirm email address:</p>
						<p><input id="confirmemailaddress" name="confirmemailaddress" type="text" value="{if $post.confirmemailaddress}{$post.confirmemailaddress}{else}Confirm email address{/if}" class="field" tabindex="4" /></p>
						<p style="padding: 0px 0px 3px 10px;">We don't share your data with anyone. Read our <a href="/terms/">terms</a>.</p>
					
					</div>
					
					<div class="registerBoxArea" id="regForm" style="margin-top: 144px;">
					
						<p style="padding: 0px 0px 3px 10px; font-weight: bold; font-size: 0.7em;">Choose a password:</p>
						<p><input id="password" name="password" type="text" value="{if $post.password}{$post.password}{else}Choose a password{/if}" class="field" tabindex="5" /></p>
						<div class="checkBoxFloat">
							<p><input id="newsletteroptin" name="newsletteroptin" class="formCheck" type="checkbox" value="1" tabindex="6" /></p>
						</div>
						<p><label for="newsletteroptin">Check this box if you would like to receive email newsletters from Love Golf</label></p>
						<p>&nbsp;</p>
						{if $registrationerror}<p class="error"><span>{$registrationerror}</span></p>{/if}
						<p><input class="fieldButton" type="image" src="/tracker/wl/lovegolf/images/but-register-login-register.png" height="30" width="210" alt="Register now" tabindex="7" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
						<p>&nbsp;</p>
						<p><img src="/tracker/wl/lovegolf/images/im-safe-secure.png" height="62" width="294" alt="{$domain.pagetitle} is safe & secure" /></p>
					
					</div>
				
				</form>
				
				<div class="floatEnder"></div>
				
			</div>
			
			{/if}
					