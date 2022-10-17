<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		$(".example5").colorbox();		
	});
	{/literal}
</script>			
			{if $failure}
			
			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">
				
					<h1>Activation failed</h1>
					
					<p class="error">{$error}</p>
				
				</div>
				
				<div class="registerBoxArea" id="regForm2">
				
					<p>&nbsp;</p>
				
				</div>
			
			</div>

			{elseif $success}
			
			<script type="text/javascript">
				{literal}
	
				$(function() {
					inputreplace('#loginemail', 'Username');
					inputreplace('#loginpassword', 'Password');
				});
				
				{/literal}
			</script>
			
			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">

					<form action="/tracking-login/" method="post">
						
						<input type="hidden" name="dologin" value="1" />					
					
						<h1>Account Activated!</h1>
						
						{if $loginerror}<p class="error"><span>{$loginerror}</span></p>{/if}
							
						<p><span>Your account is now active! Remember to add lovegolf.co.uk to your safe-senders list in your email client.</span></p>
						<p>&nbsp;</p>
						<p><span>You can login below with your email address and password.</span></p>
						<p>&nbsp;</p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Email Address:</p>
						<p><input id="loginemail" name="loginemail" type="text" class="field" tabindex="1" value="{if $post.loginemail}{$post.loginemail}{else}Username{/if}" /></p>
						<p style="padding: 0px 0px 3px 10px; font-weight: bold;">Password:</p>
						<p><input id="loginpassword" name="loginpassword" type="password" class="field" tabindex="2" value="{if $post.loginpassword}{$post.loginpassword}{/if}" /></p>
						<div class="checkBoxFloat">
							<p><input id="loginremember" name="loginremember" class="formCheck" type="checkbox" tabindex="3" value="" /></p>
						</div>
						<p><label for="loginremember">Remember me on this computer</label></p>
						<p>&nbsp;</p>
						<div class="lostPasswordFloat">
							<p>Lost password? <a href="/lost-password/">Click Here</a></p>
						</div>
						<p><input type="image" src="/tracker/wl/lovegolf/images/but-login-login-register.png" height="30" width="210" alt="Log-in" tabindex="4" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
					
					</form>
				
				</div>
				
				<div class="registerBoxArea" id="regForm2">
				
					<p>&nbsp;</p>
				
				</div>
			
			</div>
			
			{else}
			
			<div class="loginRegisterHolder">
				
				<script>
				{literal}
					function validateactivation() {
						if ($('#dobday').val() == '') { 
							alert('Please select the day of your birth'); 
							return false; 
						}
						if ($('#dobmonth').val() == '') { 
							alert('Please select the month of your birth'); 
							return false; 
						}
						if ($('#dobyear').val() == '') { 
							alert('Please select the year of your birth'); 
							return false; 
						}
						if ($('#sex').val() == '') { 
							alert('Please select your gender'); 
							return false; 
						}
					}
				{/literal}
				</script>
				
				<form action="" method="post" onsubmit="return validateactivation();">
				
					<input type="hidden" name="doactivate" value="1" />
				
					<div class="loginBoxArea" id="actForm">
					
						<h1>Your account is almost ready!</h1>
	
						<p><span>To get the most out of your {$domain.pagetitle} account, please tell us a little more about yourself. This information helps us to generate your handicap (if you don't already have one). <a class='example5' href="/tracker/help-handicap-gen.php">Read more</a>.</span></p>
					
						<p>&nbsp;</p>

						<p><span><strong>What's your date of Birth?</strong></span> (required)</p>
						<p>&nbsp;</p>
						
						<p>
							<select id="dobday" name="dobday" size="1" tabindex="1">
								<option value="">- Day -</option>
								{section name="dobday" loop=32 start=1}
								<option value="{$smarty.section.dobday.index}">{$smarty.section.dobday.index}</option>
								{/section}
							</select>
							<select id="dobmonth" name="dobmonth" size="1" tabindex="2">
								<option value="">- Month -</option>
								{section name="dobmonth" loop=13 start=1}
								<option value="{$smarty.section.dobmonth.index}">{$smarty.section.dobmonth.index}</option>
								{/section}
							</select>
							<select id="dobyear" name="dobyear" size="1" tabindex="3">
								<option value="">- Year -</option>
								{section name="dobyear" loop=$thisyear start=$firstyear}
								<option value="{$smarty.section.dobyear.index}">{$smarty.section.dobyear.index}</option>
								{/section}
							</select>
						</p>
						
						<p><select id="sex" name="sex" size="1" tabindex="2">
								<option value="">Are you Male or Female?</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
						</select></p>
					
					</div>
					
					<div class="registerBoxArea" id="actForm2">
					
						<h1>Your Handicap</h1>
						<p><span>We can generate your handicap from the first 3 rounds you add, or if you already have one you can simply add it below.</span></p>
						<p>&nbsp;</p>
						<p><span>Enter your handicap below (actual handicap - include decimal point if necessary).</span></p>
						<p>&nbsp;</p>
						<p><span>If you want Love Golf to generate it after your first 3 rounds <strong>leave the handicap field below BLANK</strong>.</span></p>
						<p><input id="handicap" name="handicap" type="text" value="" class="field" /></p>
						
						<p><input class="fieldButton" type="image" src="/tracker/wl/lovegolf/images/but-activate-account.png" height="30" width="210" alt="Activate my account" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
					
					</div>
					
				</form>
				
				<div class="floatEnder"></div>
				
			</div>
			
			{/if}
			