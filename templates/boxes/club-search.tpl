			<script type="text/javascript">
			{literal}

			$(function() {
				inputreplace('#courseFinderQuery', 'Enter club name, address or postcode');
			});
			
			{/literal}
			</script>

			<div class="leftAreaHolder">
			
				<div class="leftTitleBar" id="blue">
				
					<h1>Quick search</h1>
					
				</div>
				
				<div class="leftBox">
					
					<form action="{$self}" method="post">
					{if $loginerror}
					<p>{$loginerror}</p>
					<p>&nbsp;</p>
					{/if}
					<p><input name="loginusername" id="loginusername" type="text" class="field" value="{if $post.loginusername}{$post.loginusername}{else}Username{/if}" /></p>
					<p><input name="loginpassword" id="loginpassword" type="password" class="field" value="{if $post.loginpassword}{$post.loginpassword}{else}Password{/if}"/></p>
					<div class="checkBoxFloat">
						<p><input name="loginremember" class="formCheck" type="checkbox" value="" /></p>
					</div>
					<p><span><span>Remember me!</span></span></p>
					<input type="hidden" name="dologin" value="true" />
					<p style="margin-bottom: 5px;"><input type="image" src="/tracker/wl/lovegolf/images/but-small-login.png" height="22" width="192" alt="Log-in" /></p>
					<p><span>Lost password? <a href="/lost-password/">Click Here</a></span></p>
					</form>
				
				</div>
				
				<div class="leftBoxBase">
					
					<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base.gif" height="8" width="210" alt="" /></p>
						
				</div>
				
			</div>
			