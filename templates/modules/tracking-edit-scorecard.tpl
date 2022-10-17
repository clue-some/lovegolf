			<div class="mainAreaContentFull">
				
				<div class="addRoundTabButton">
				
					<p><a href="/tracker/round/add/"><img src="/tracker/wl/lovegolf/images/but-add-new-round-top-tab.gif" height="32" width="125" alt="Add new round" /></a></p>
				
				</div>
				
				<h1>Tracking centre - Edit scorecard</h1>
				<p>&nbsp;</p>
				
				<ul id="trackingMenu">
			
					<li class="first"><a href="/tracking-centre/">Tracking centre</a></li>
					<li class="current"><a href="/tracking/view-scorecards/">View scorecards</a></li>
					<li><a href="/tracking/shot-analysis/">Shot analysis</a></li>
					<li><a href="/tracking/handicap/">Handicap</a></li>
					<li><a href="/tracking/statistics/">Course statistics</a></li>
				
				</ul>
				
				<div class="trackingBody">
				
					<div class="trackingBodyContent">
					
						{if $success}
						<p class="message"><span>Changes saved.</span></p> 
						{/if}
					
						{if $error}
						<p class="error"><span>{$error}</span></p> 
						{/if}
			
						<form id="roundAdd" method="post" action="">
				
							<input type="hidden" id="courseid" name="courseid" value="{$course.courseid}" />
				
							<input type="hidden" name="editround" value="true" />
							
							<h1>Round details</h1>
				
							<div class="addRoundHolder">
								
								<p><input id="name" name="name" type="text" size="50" value="{if $post.name}{$post.name}{else}Type a name for this round{/if}" class="field" /></p>
								<div class="addRoundDateArea">
								
									<div class="addRoundDateField">
									
										<p><input class="fieldShort" id="date" name="date" type="text" value="{if $post.date}{$post.date}{else}Enter the date your round was played{/if}"/></p>
										
									</div>
									
									<div class="addRoundDateIcon">
									
										<p><a href="#" id="date_picker_button"><img src="/tracker/wl/lovegolf/images/but-calendar.gif" height="22" width="22" alt="Click here to view calendar" /></a></p>
										
									</div>
									
									<div class="floatEnder"></div>
									
								</div>
								
								{*
								<p><select id="teeid" name="teeid">
								  <option value="">Select tee</option>
								{section name="tee" loop=$tees}
								  <option value="{$tees[tee].teeid}"{if $tee.teeid == $tees[tee].teeid || (!$tee.teeid && $currentuser.sex == "Male" && $tees[tee].colour == "Yellow") || (!$tee.teeid && $currentuser.sex == "Female" && $tees[tee].colour == "Red")} selected="selected"{/if}>{$tees[tee].colour} ({if $tees[tee].totalyards}{$tees[tee].totalyards} yards{/if}{if $tees[tee].totalmetres}{$tees[tee].totalmetres} metres{/if})</option>
								{/section}
								</select>
								</p>
								*}
								{*
								<p>
								<select id="handicap" name="handicap">
								  <option value="1"{if !$post.handicap || $post.handicap == "1"} selected="selected"{/if}>Track my handicap</option>
								  <option value="0"{if $post.handicap == "0"} selected="selected"{/if}>Don't track my handicap</option>
								</select>
								</p>
								*}
								<p>&nbsp;</p>
								<h2>Enter the weather conditions: <span>(Optional)</span></h2>
								<p><select id="primaryweatherid" name="primaryweatherid">
									<option value="0">Select primary weather condition</option>
								{section name="weather" loop=$weathers}
									<option value="{$weathers[weather].weatherid}"{if $post.primaryweatherid == $weathers[weather].weatherid} selected="selected"{/if}>{$weathers[weather].name}</option>
								{/section}
								</select></p>
								<p><select id="secondaryweatherid" name="secondaryweatherid">
									<option value="0">Select secondary weather condition</option>
								{section name="weather" loop=$weathers}
									<option value="{$weathers[weather].weatherid}"{if $post.secondaryweatherid == $weathers[weather].weatherid} selected="selected"{/if}>{$weathers[weather].name}</option>
								{/section}
								</select></p>
								
							</div>
						
							<div class="floatEnder"></div>
							
							{if $post.stats}
							
								{if $post.holesplayed == "all"}
									{include file="modules/round/includes/holes/stats/all.tpl" editround=1}
								{/if}
							
								{if $post.holesplayed == "front9"}
									{include file="modules/round/includes/holes/stats/front9.tpl" editround=1}
								{/if}
		
								{if $post.holesplayed == "back9"}
									{include file="modules/round/includes/holes/stats/back9.tpl" editround=1}
								{/if}
									
							{else}
		
								{if $post.holesplayed == "all"}
									{include file="modules/round/includes/holes/simple/all.tpl" editround=1}
								{/if}
							
								{if $post.holesplayed == "front9"}
									{include file="modules/round/includes/holes/simple/front9.tpl" editround=1}
								{/if}
		
								{if $post.holesplayed == "back9"}
									{include file="modules/round/includes/holes/simple/back9.tpl" editround=1}
								{/if}
							
							{/if}
						
							<p><input type="image" src="/tracker/wl/lovegolf/images/but-edit-round.png" height="30" width="210" alt="Edit round" /></p>
							<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
							
						</form>
													
					</div>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
			
			</div>					