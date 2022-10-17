
			{if $success}
			
			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">
				
					<h1>Your comments have been sent</h1>
					<p><span>Thank you for contacting {$domain.pagetitle}. Your comments have been passed to the relevant department and if necessary we'll contact your shortly.</span></p>
					<p>&nbsp;</p>
					<p><span><a href="/tracker/">Click here</a> to return to the homepage</span></p>
				
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
				inputreplace('#comments', "Tell us what you're thinking...");
			});
			
			{/literal}
			</script>

			<div class="loginRegisterHolder">
				
				<form action="/contact/" method="post">
				
					<input type="hidden" name="docontact" value="1" />

					<div class="loginBoxArea" id="stdForm">
					
						<h1>Get in contact with us:</h1>
						
						{if $contacterror}<p class="error"><span>{$contacterror}</span></p>{/if}
						
						<p><span>We'd love to hear from you, whether it's a suggestion for a new feature, a bug that you've found or you simply want to tell us how great {$domain.pagetitle} is! Just make sure you choose the right department from the dropdown menu. <strong>All fields are required.</strong></span></p>
						<p>&nbsp;</p>
						<p><strong>We respect your information and don't share it with anyone. Read more on our <a href="/tracker/help-support/security/">privacy</a> page.</strong></p>
						<p>&nbsp;</p>
						<p><input id="firstname" name="firstname" type="text" value="{if $post.firstname}{$post.firstname|stripslashes|htmlentities}{else}First name{/if}" class="field" tabindex="1" /></p>
						<p><input id="lastname" name="lastname" type="text" value="{if $post.lastname}{$post.lastname|stripslashes|htmlentities}{else}Last name{/if}" class="field" tabindex="2" /></p>
						<p><input id="emailaddress" name="emailaddress" type="text" value="{if $post.emailaddress}{$post.emailaddress|stripslashes|htmlentities}{else}Email address{/if}" class="field" tabindex="3" /></p>
						<p><input id="confirmemailaddress" name="confirmemailaddress" type="text" value="{if $post.confirmemailaddress}{$post.confirmemailaddress|stripslashes|htmlentities}{else}Confirm email address{/if}" class="field" tabindex="4" /></p>
					
					</div>
					
					<div class="registerBoxArea" id="stdForm2">
					
						<p><select name="department" size="1" tabindex="5">
							<option value="">Choose a department</option>
							<option value="General enquiry"{if $post.department == 'General enquiry'} selected="selected"{/if}>General enquiry</option>
							<option value="Help &amp; Support"{if $post.department == 'Help &amp; Support'} selected="selected"{/if}>Help &amp; Support</option>
							<option value="Feedback"{if (!$post.department && $mode == 'feedback') || $post.department == 'Feedback'} selected="selected"{/if}>Feedback</option>
							<option value="Suggestion"{if (!$post.department && $mode == 'suggestion') || $post.department == 'Suggestion'} selected="selected"{/if}>Suggestion</option>
							<option value="Shop enquiry"{if $post.department == 'Shop enquiry'} selected="selected"{/if}>Shop enquiry</option>
							<option value="Report scorecard"{if (!$post.department && $mode == 'report-scorecard') || $post.department == 'Report scorecard'} selected="selected"{/if}>Report scorecard</option>
							<option value="Bug Report"{if (!$post.department && $mode == 'report-bug') || $post.department == 'Bug Report'} selected="selected"{/if}>Bug report</option>
						</select></p>
						<p><textarea id="comments" name="comments" tabindex="6">{if $post.comments}{$post.comments|stripslashes|htmlentities}{else}Tell us what you're thinking...{/if}</textarea></p>
					
						<p>&nbsp;</p>
						{$recaptcha}
	
						<p><input class="fieldButton" type="image" src="/tracker/wl/lovegolf/images/but-send-comments.png" height="30" width="210" alt="Send comments" tabindex="7" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
				
					</div>
					
					<div class="floatEnder"></div>

				</form>
			
			</div>
			
			{/if}
					