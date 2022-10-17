
			<script type="text/javascript">
			{literal}
			
			$(function() {

				inputreplace('#handicap', '28');
				inputreplace('#lastname', 'Last name');
				
			});
			
			{/literal}
			</script>
			
			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">
				
					<h1>Thanks for logging in to {$domain.pagetitle}</h1>
					<p><span>As you've come from Golf Card Plus you'll need to give us a bit more information to get the best from {$domain.pagetitle}.</span></p>
					<p>&nbsp;</p>
					<h2>Your handicap</h2>
					<p style="padding: 0px 0px 3px 10px; font-weight: bold;">By default we've set your handicap at 28. If your handicap is different, enter it below.</p>
					<p><input id="handicap" name="handicap" type="text" value="{if $post.handicap}{$post.handicap}{else}28{/if}" class="field" tabindex="1" /></p>
					<p style="padding: 0px 0px 3px 10px; font-weight: bold;"></p>
					<p><input id="handicap" name="handicap" type="text" value="{if $post.handicap}{$post.handicap}{else}28{/if}" class="field" tabindex="1" /></p>
				
				</div>
				
				<div class="registerBoxArea" id="regForm">
				
					<p>&nbsp;</p>
				
				</div>
			
			</div>