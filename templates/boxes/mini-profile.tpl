			<div class="leftAreaHolder">
						
				<div class="leftTitleBar" id="blue">
				
					<h1>Mini profile</h1>
					
				</div>
				
				<div class="leftBox">
					
					<div class="lbProfileImage">
					
						<p>
						{if $currentuser.photo}
						<img src="/tracker/profileimage/thumb_{$currentuser.photo}" alt="Profile Image" />
						{else}
						<img src="/tracker/profileimage/im-tiger.jpg" alt="Profile Image" />
						{/if}
						</p>
					
					</div>
					
					<div class="lbHandicapHolder">
					
						<div class="lbHandicapBox">
						
							<h1>{if $currentuser.handicappending}?{else}{$currentuser.handicap|number_format}{/if}</h1>
						
						</div>
						
						<p>{if $currentuser.handicappending}Pending{else}({$currentuser.handicap|number_format:1}){/if}</p>
						{if !$currentuser.handicappending}<p>Category {$currentuserhandicapcategory}</p>{/if}
					
					</div>
					
					<div class="floatEnder"></div>
				
				</div>
				
				<div class="leftBox" id="noPadding">
					
					{if $userstatistics.lastround.score}
					<div class="leftBoxProfileSub">
					
						<p>Last round score:</p>
						<p><span><span>{$userstatistics.lastround.score|number_format:0}</span> {$userstatistics.lastround.date|date_format}</span></p>
						
					</div>
					{/if}
					
					{if $userstatistics.bestround.score}
					<div class="leftBoxProfileSub">
					
						<p>Best score:</p>
						<p><span><span>{$userstatistics.bestround.score|number_format:0}</span> {$userstatistics.bestround.date|date_format}</span></p>
						
					</div>
					{/if}
					
					{if $userstatistics.averageround.score}
					<div class="leftBoxProfileSub">
					
						<p>Average score:</p>
						<p><span><span>{$userstatistics.averageround.score|number_format:0}</span> after {$userstatistics.averageround.rounds|number_format:0} rounds</span></p>
						
					</div>
					{/if}
					
					<div class="leftBoxProfileSub" id="noBorder2">
					
						<p><a href="/my/profile-edit/">&raquo; Edit profile</a></p>
						
					</div>
				
				</div>
				
				<div class="leftBoxBase">
					
					<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base.gif" height="8" width="210" alt="" /></p>
							
				</div>
				
			</div>