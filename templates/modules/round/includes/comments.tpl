					
					<script type="text/javascript">
					{literal}
		
					$(function() {
						inputreplace('#comments', 'Add comments for your round (Optional)');
					});
					
					{/literal}
					</script>			
					
					<div class="addRoundHolder">

						<p>&nbsp;</p>					
						<h2>Was the Competition Scratch Score (CSS) adjusted?</h2>
						<p><input id="sss" name="sss" type="text" size="3" value="{if $post.sss}{$post.sss}{else}{$tee.sss}{/if}" class="field" /></p>
						<p>&nbsp;</p>
						<p><textarea id="comments" name="comments">{if $post.comments}{$post.comments|stripslashes}{else}Add comments for your round (Optional){/if}</textarea></p>
						
						{if !$editround}
						<p><input type="image" src="/tracker/wl/lovegolf/images/but-add-round.png" height="30" width="210" alt="Add round" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
						{/if}

					</div>
					
					<div class="tipsHolder">
			
						<p>&nbsp;</p>
						<div class="tipsTitleBar">
						
							<h1>Love Golf Tips</h1>
						
						</div>
						
						<div class="tipsContentArea">
						
							<h2>CSS effected?</h2>
							<p>If this round was a competition, the club may adjust the standard scratch score (SSS) to take into account weather or playing conditions. If no adjustment was made, CSS will be the same as SSS. If it was adjusted, it effects the way your handicap is calculated, so enter the CSS figure into the field provided so that your handicap is accurate.</p>
							
						</div>
						
						<div class="tipsBaseArea">
						
							<p><img src="/tracker/wl/lovegolf/images/im-tips-base-area.gif" height="5" width="230" alt="" /></p>
						
						</div>
						
					</div>
					
					<div class="floatEnder"></div>
