			
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
					inputreplace('#loginusername', 'Username');
					inputreplace('#loginpassword', 'Password');
				});
				
				{/literal}
			</script>
			
			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">
				
					<h1>Account Activated!</h1>
					
					{if $loginerror}<p class="error"><span>{$loginerror}</span></p>{/if}
						
					<p><span>Your account is now active and your password has been sent via email. Remember to add lovegolf.co.uk to your safe-senders list in your email client.</span></p>
					<p>&nbsp;</p>
					<p><span>You can login below with your username and the password we've just emailed to you.</span></p>
					<p>&nbsp;</p>
					<p><input id="loginusername" name="loginusername" type="text" class="field" tabindex="1" value="{if $post.loginusername}{$post.loginusername}{else}Username{/if}" /></p>
					<p><input id="loginpassword" name="loginpassword" type="password" class="field" tabindex="2" value="{if $post.loginpassword}{$post.loginpassword}{else}Password{/if}" /></p>
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
				
				</div>
				
				<div class="registerBoxArea" id="regForm2">
				
					<p>&nbsp;</p>
				
				</div>
			
			</div>
			
			{else}
			
			<div class="loginRegisterHolder">
				
				<form action="" method="post" onsubmit="{literal}if ($('#sex').val() == '') { alert('Please select your gender'); return false; }{/literal}">
				
					<input type="hidden" name="doactivate" value="1" />
				
					<div class="loginBoxArea" id="actForm">
					
						<h1>Your account is almost ready!</h1>
	
						<p><span>To get the most out of your {$domain.pagetitle} account, please tell us a little more about yourself. We use this information to calculate your handicap.</span></p>
					
						<p>&nbsp;</p>

						<p><span><strong>What's your date of Birth?</strong></span></p>
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
					
						<div class="activateHandicap">	
							
							<span id="handicapvalue"></span>
							
						</div>
						
						<div class="activateHandicapText">
						
							<h1>My Handicap</h1>
							<p>If you already have a handicap, use the slider below until you see the correct figure.</p>
						
						</div>	
						
						<div class="floatEnder"></div>				
					
						<div class="handicapsliderNumber">
						
							<p>0</p>
						
						</div>
						
						<div id="handicapslider"></div>
						
						<div class="handicapsliderNumber">
						
							<p>54</p>
						
						</div>
						
						<div class="floatEnder"></div>
						
						<script type="text/javascript">
						{literal}
	
							function refreshHandicap() {
								$('#handicap').val($('#handicapslider').slider("value"));
								$('#handicapvalue').html($('#handicapslider').slider("value"));
							}
							$(function() {
								$('#handicapslider').slider({
										orientation:'horizontal',
										max: 54,
										value: 28,
										slide: refreshHandicap,
										change: refreshHandicap
								});
								refreshHandicap();
								$('#dobday, #dobmonth, #dobyear, #sex').change(function () {
									var today = new Date();
									var birthday = new Date($('#dobyear').val(),$('#dobmonth').val(),$('#dobday').val());
									var ageseconds = today - birthday;
									var age = Math.floor((((ageseconds/1000)/3600)/24)/365.25);
									if (age < 18) {
										$('#handicapslider').slider("value", 54);
									} else if (age > 18 && $('#sex').val() == 'Female') {
										$('#handicapslider').slider("value", 36); 
									} else {
										$('#handicapslider').slider("value", 28);
									}
									refreshHandicap();
								});
								
							});
						
						{/literal}
						</script>
						
						<input id="handicap" name="handicap" type="hidden" value="{if $post.handicap}{$post.handicap}{else}28{/if}" class="field" tabindex="3" /></p>
					
						<p><input class="fieldButton" type="image" src="/tracker/wl/lovegolf/images/but-activate-account.png" height="30" width="210" alt="Activate my account" /></p>
							<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
					
					</div>
					
				</form>
				
				<div class="floatEnder"></div>
				
			</div>
			
			{/if}
			