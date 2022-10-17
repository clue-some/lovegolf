		<div class="mainAreaContentFull">

			<div class="tipsHolder">
			
				<div class="tipsTitleBar">
				
					<h1>Love Golf Tips</h1>
				
				</div>
				
				<div class="tipsContentArea">
				
					<h2>Round name</h2>
					<p>Think of something memorable about the round so you can reference it later. Maybe mention who you played with, or the competition name too.</p>
					<p>&nbsp;</p>
					<h2>Add extra stats</h2>
					<p>To get the most out of {$domain.pagetitle} you should add as many extra stats as possible. The more stats you add, the deeper the analysis we can give you! <span style="color: #5a62b5; font-weight: bold;">Did you know you can print a special scorecard from the</span> <a href="/clubs/">club directory</a>? It has extra spaces for you to record additional information.</p>
					<p>&nbsp;</p>
					<h2>Effect handicap?</h2>
					<p>If you say 'Track my handicap' to this, you handicap will be adjusted based on the outcome of the round. Say 'Don't track my handicap', and your handicap will not be effected. <span style="color: #5a62b5; font-weight: bold;">Please note that once a round has been added, you can't edit the handicap tracking element of it later.</span></p>
					
				</div>
				
				<div class="tipsBaseArea">
				
					<p><img src="/tracker/wl/lovegolf/images/im-tips-base-area.gif" height="5" width="230" alt="" /></p>
				
				</div>
				
				<p style="text-align: center; font-size: 0.8em;">Need more help?<br /><strong>Visit the Love Golf Help Blog!</strong><br /><span style="font-size: 0.7em;">[opens a new window]</span></p>
				<p style="text-align: right;"><a href="/blog/category/using-love-golf" target="_blank"><img src="/tracker/wl/lovegolf/images/im-logo-help-small.gif" height="62" width="199" alt="Love Golf Help!" /></a></p>
			
			</div>
			<script type="text/javascript">
			{literal}

			$(function() {
				inputreplace('#name', 'Type a name for this round');
				inputreplace('#date', 'Enter the date your round was played');
			});
			
			{/literal}
			</script>			

			<form id="roundAdd" method="post" action="">

			<div class="addRounder">

				{if $error}
				<p class="error"><span>{$error}</span></p> 
				{/if}
	
				<input type="hidden" id="courseid" name="courseid" value="{$course.courseid}" />
	
				<input type="hidden" name="addround" value="true" />
				
				<h1>Round details</h1>
				<h2>{$course.name} <span><a href="/tracker/round/add/">Change</a></span></h2>
	
								<!-- {if $course.verified}
								<div class="clubOffersArea">
								
									<div class="clubOffersTitleBkg">
									
										<div class="clubOffersTitle">
										
											<div class="clubOffersLeft">
											
												<h1>Club special offers:</h1>
											
											</div>
											
											<div class="clubOffersRight">
											
												<p><a href="/course/{$courses[course].urlname}/">View club profile</a> | <a href="{$course.website}" target="_blank">Visit club website</a> | <a href="#" target="_blank">Book a tee time</a></p>
											
											</div>
											
											<div class="floatEnder"></div>
										
										</div>
									
									</div>
									
									<div class="clubOffersContent">
									
										<h1>Twilight golf</h1>
										<p>Get a 50% discount on our standard 18 hole rate after 5pm on weekdays.</p>
									
									</div>
									
									<div class="clubOffersFooterBkg">
									
										<div class="clubOffersFooter">
										
										
										
										</div>
									
									</div>
								
								</div>
								{else}
								<p>&nbsp;</p>
								{/if}-->
	
							<div class="addRoundHolder">
								
								<p><input id="name" name="name" type="text" size="50" value="{if $post.name}{$post.name}{else}Type a name for this round{/if}" class="field" /></p>
								<div class="addRoundDateArea">
								
									<div class="addRoundDateField">
									
										<p><input class="fieldShort" id="date" name="date" type="text" value="{if $post.date}{$post.date}{else}Enter the date your round was played{/if}"/></p>
										
									</div>
									
									<div class="addRoundDateIcon">
									
										<p><a href="#" id="date_picker_button"><img src="/tracker/wl/lovegolf/images/but-calendar.gif" height="22" width="22" alt="Click here to view calendar" /></a></p>
										
									</div>
									
									<input type="hidden" id="lasttrackedround" value="{$lasttrackedround}" />
									
									<div class="floatEnder"></div>
									
								</div>
								
								<div class="addRoundSelectArea">
								
									<p><select id="teeid" name="teeid">
									  <option value="">Select tee</option>
									{section name="tee" loop=$tees}
									  <option value="{$tees[tee].teeid}"{if $tee.teeid == $tees[tee].teeid || (!$tee.teeid && $currentuser.sex == "Male" && $tees[tee].colour == "Yellow") || (!$tee.teeid && $currentuser.sex == "Female" && $tees[tee].colour == "Red")} selected="selected"{/if}>{$tees[tee].colour} ({if $tees[tee].totalyards}{$tees[tee].totalyards} yards{/if}{if $tees[tee].totalmetres}{$tees[tee].totalmetres} metres{/if})</option>
									{/section}
									</select>
									</p>
								
								</div>
								<div class="addRoundSelectArea">
								
									<p>
									<select id="holesplayed" name="holesplayed">
									  <option value="">Select holes played</option>
									{if $course.holes == 9}
									  <option value="front9"{if $post.holesplayed == "front9"} selected="selected"{/if}>9 holes</option>
									  <option value="all"{if !$post.holesplayed || $post.holesplayed == "all"} selected="selected"{/if}>18 holes</option>
									{else}
									  <option value="all"{if !$post.holesplayed || $post.holesplayed == "all"} selected="selected"{/if}>18 holes</option>
									  <option value="front9"{if $post.holesplayed == "front9"} selected="selected"{/if}>Front 9</option>
									  <option value="back9"{if $post.holesplayed == "back9"} selected="selected"{/if}>Back 9</option>
									{/if}
									</select>
									</p>
									
								</div>
								<div class="addRoundSelectArea">
								
									<p><select id="stats" name="stats">
									  <option value="1"{if !$post.stats || $post.stats == "1"} selected="selected"{/if}>Add extra statistics</option>
									  <option value="0"{if $post.stats == "0"} selected="selected"{/if}>Don't add extra statistics</option>
									</select></p>
									
								</div>
								<p style="font-size: 0.7em; color: #cc0000; margin-bottom: 10px;"><strong>IMPORTANT!</strong> You can't edit the handicap tracking status later, so make sure it is set correctly. You can always amend your handicap within your profile.</p>
								<div class="addRoundSelectArea">
								
									<p><select id="handicap" name="handicap">
									  <option value="1"{if !$post.handicap || $post.handicap == "1"} selected="selected"{/if}>Track my handicap</option>
									  <option value="0"{if $post.handicap == "0"} selected="selected"{/if}>Don't track my handicap</option>
									</select></p>
									
								</div>
								<p>&nbsp;</p>
								<h2>Enter the weather conditions: <span>(Optional)</span></h2>
								<div class="addRoundSelectArea">
								
									<p><select id="primaryweatherid" name="primaryweatherid">
										<option value="0">Select primary weather condition</option>
									{section name="weather" loop=$weathers}
										<option value="{$weathers[weather].weatherid}"{if $post.primaryweatherid == $weathers[weather].weatherid} selected="selected"{/if}>{$weathers[weather].name}</option>
									{/section}
									</select></p>
									
								</div>
								
								<div class="addRoundSelectArea">
								
									<p><select id="secondaryweatherid" name="secondaryweatherid">
										<option value="0">Select secondary weather condition</option>
									{section name="weather" loop=$weathers}
										<option value="{$weathers[weather].weatherid}"{if $post.secondaryweatherid == $weathers[weather].weatherid} selected="selected"{/if}>{$weathers[weather].name}</option>
									{/section}
									</select></p>
									
								</div>
								
								<p><input type="image" id="next_load_holes" src="/tracker/wl/lovegolf/images/but-add-scorecard-info.png" height="30" width="210" alt="Add scorecard info" /></p>
								<div style="width: 380px; background: url(/tracker/wl/lovegolf/images/im-down-arrow.png) no-repeat 0 7px; padding: 2px 0px 2px 23px; margin: 10px 0px 20px 0px;">
									<p style="font-size: 0.7em;">Your scorecard will appear below.<br /><strong><em>You may need to scroll down to see it.</em></strong></p>
								</div>
												
				</div>
			
			</div>
						
			<div class="floatEnder"></div>
			
			<div id="ajaxHoles">
				
				{if $post}
				
					{if $post.stats}
					
						{if $post.holesplayed == "all"}
							{include file="modules/round/includes/holes/stats/all.tpl"}
						{/if}
					
						{if $post.holesplayed == "front9"}
							{include file="modules/round/includes/holes/stats/front9.tpl"}
						{/if}

						{if $post.holesplayed == "back9"}
							{include file="modules/round/includes/holes/stats/back9.tpl"}
						{/if}
							
					{else}

						{if $post.holesplayed == "all"}
							{include file="modules/round/includes/holes/simple/all.tpl"}
						{/if}
					
						{if $post.holesplayed == "front9"}
							{include file="modules/round/includes/holes/simple/front9.tpl"}
						{/if}

						{if $post.holesplayed == "back9"}
							{include file="modules/round/includes/holes/simple/back9.tpl"}
						{/if}
					
					{/if}
				
				{/if}
				
			</div>

		</form>
			
	</div>
		
	<div class="mainAreaContentFooter">
		
		<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
		
	</div>
