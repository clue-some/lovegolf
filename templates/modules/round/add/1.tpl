		<div class="mainAreaContentFull">
		
			<div class="tipsHolder">
			
				<div class="tipsTitleBar">
				
					<h1>Love Golf Tips</h1>
				
				</div>
				
				<div class="tipsContentArea">
				
					<h2>Favourite courses</h2>
					<p><img src="/tracker/images/but-courses-add-fav.gif" height="17" width="13" alt="Add to favourites" />Whenever you see this icon next to a club's course name, you can click to add that course to your favourites.</p>
					<p>&nbsp;</p>
					<h2>Recent courses</h2>
					<p>Whenever you add a round to a club's course it is added to your recent course list so you can access it again quickly.</p>
					<p>&nbsp;</p>
					<h2>Club/course search</h2>
					<p>If you know the name of the club or course you are looking for, or even its address or postcode, type it into the search field and the results will appear below.</p>
					<p>&nbsp;</p>
					<p>Remember, some clubs have more than one course. Typing in a club name will display all the courses within the club.</p>
					
				</div>
				
				<div class="tipsBaseArea">
				
					<p><img src="/tracker/wl/lovegolf/images/im-tips-base-area.gif" height="5" width="230" alt="" /></p>
				
				</div>
				
				<p style="text-align: center; font-size: 0.8em;">Need more help?<br /><strong>Visit the Love Golf Help Blog!</strong><br /><span style="font-size: 0.7em;">[opens a new window]</span></p>
				<p style="text-align: right;"><a href="/blog/category/using-love-golf" target="_blank"><img src="/tracker/wl/lovegolf/images/im-logo-help-small.gif" height="62" width="199" alt="Love Golf Help!" /></a></p>
				<p>&nbsp;</p>
			
			</div>
			
			<div class="addRounder">
			
				<script type="text/javascript">
				{literal}
				
				$(function() {
	
					inputreplace('#searchCoursesQuery', 'Enter club or course name, address or postcode');
					
				});
				
				{/literal}
				</script>			
				
				<div class="addRoundHolder">
				
					<h1>Add round</h1>
					<h2>Add a round to one of your favourite courses:</h2>
								
					{if $favouritecourses}							
									
					<form action="/tracker/round/add/course/" method="post" />
		
					<div class="addRoundSelectArea">
					
						<p><select id="favourite_courses" name="courseid">
			
						{section name="course" loop=$favouritecourses}
			
							<option value="{$favouritecourses[course].courseid}">{$favouritecourses[course].clubname|truncate:40}{if $favouritecourses[course].clubname != $favouritecourses[course].name} / {$favouritecourses[course].name|truncate:20}{/if}</option>
			
						{/section}
						</select></p>
						
					</div>
					<p><input type="image" src="/tracker/wl/lovegolf/images/but-next-step.gif" height="30" width="210" alt="Next step &raquo;" /></p>
					<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
									
					</form>
								
					{else}
									
					<p>You do not have any favourite courses. Click this icon <img src="/tracker/images/but-courses-add-fav.gif" height="17" width="13" alt="Favourites" /> next to the course you wish to add in the <a href="/clubs/">club directory</a> to add it as a favourite.</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
									
					{/if}
		
					<h2>Add a round to a course you've played recently:</h2>
		
					{if $recentcourses}							
		
					<form action="/tracker/round/add/course/" method="post" />
		
					<div class="addRoundSelectArea">
					
						<p><select id="recent_courseid" name="courseid">
			
						{section name="course" loop=$recentcourses}
							<option value="{$recentcourses[course].courseid}">{$recentcourses[course].clubname|truncate:40}{if $recentcourses[course].clubname != $recentcourses[course].name} / {$recentcourses[course].name|truncate:20}{/if}</option>
						{/section}
										
						</select></p>
						
					</div>
					
					<p><input type="image" src="/tracker/wl/lovegolf/images/but-next-step.gif" height="30" width="210" alt="Next step &raquo;" /></p>
					<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
		
					</form>
									
					{else}
									
					<p>You have not added any rounds yet. Use the search below to find the club/course you're looking for.</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
									
					{/if}
		
					<h2>Or search for a club/course in the {$domain.pagetitle} database:</h2>
					<form action="" id="roundAddSearch"/>
					<p><input name="q" type="text" id="searchCoursesQuery" class="field" value="Enter club or course name, address or postcode" /></p>
					<p><input id="search_courses" type="image" src="/tracker/wl/lovegolf/images/but-next-step.gif" height="30" width="210" alt="Next step &raquo;" /></p>
					</form>
					<div style="width: 380px; background: url(/tracker/wl/lovegolf/images/im-down-arrow.png) no-repeat 0 7px; padding: 2px 0px 2px 23px; margin: 10px 0px;">
						<p style="font-size: 0.7em;">Your search results will appear below.<br /><strong><em>You may need to scroll down to see them.</em></strong></p>
					</div>
					<p>&nbsp;</p>
					
				</div>
			
			</div>
						
			<div class="floatEnder"></div>
			
			<div id="ajaxCourses">
								
			</div>
							
			<div class="floatEnder"></div>
			
		</div>
		
		<div class="mainAreaContentFooter">
		
			<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
			
		</div>
