<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		$(".example5").colorbox();		
	});
	{/literal}
</script>
	
	{if $success}
	<p class="message"><span>Changes Saved!</span></p>
	{/if}
	
	<div class="myProfileLeft">
	
		<h1>Edit My Profile</h1>
		
		{if $gcpwelcome}
		
		<div style="background: #7db930; padding: 10px; margin: 10px 0px 20px 0px;">
		
			<h1 style="color: #fff; font-size: 1.2em;">Welcome Golf Card Plus member!</h1>
			<p style="color: #fff;">{$domain.pagetitle} is a more advanced website than Golf Card Plus, so before you start adding rounds, please update your profile below.</p>
			<p>&nbsp;</p>
			<p style="color: #fff;"><strong>Your Handicap</strong> - If you have one, please enter it below. We can then maintain it with every round you add. If you don't have one, you'll be given the default handicap of <strong>28</strong>.</p>
			<p>&nbsp;</p>
			<p style="color: #fff;">To change your password from the one we've generated for you, go to the bottom of this page and change it to something more memorable.</p>
			<p>&nbsp;</p>
			<p style="color: #fff;">For a list of the main differences between Golf Card Plus and {$domain.pagetitle}, <a style="color: #fff;" class='example5' href="/tracker/help-gcp-lovegolf.php">click here</a>.</p>
		
		</div>
		
		{/if}		
	
		<form action="" method="post">
		
			{if $profilemessage}
			<p class="error">{$profilemessage}</p>
			{/if}
	
			<div class="editProfileHolder">
			
				<p>First name:</p>
				<p><input class="field" type="text" id="profile_firstname" name="firstname" value="{$currentuser.firstname}" /></p>
				<p>Last name:</p>
				<p><input class="field" type="text" id="profile_surname" name="surname" value="{$currentuser.surname}" /></p>
				<p>Email address:</p>
				<p><input class="field" type="text" id="profile_email" name="email" value="{$currentuser.email}" /></p>
				<p>Telephone number:</p>
				<p><input class="field" type="text" id="profile_phonenumber" name="phonenumber" value="{$currentuser.phonenumber}" /></p>
				<p>Address:</p>
				<p><input class="field" type="text" id="profile_address1" name="address1" value="{$currentuser.address1}" /></p>
				<p>Town:</p>
				<p><input class="field" type="text" id="profile_town" name="town" value="{$currentuser.town}" /></p>
				<p>County:</p>
				<p><input class="field" type="text" id="profile_county" name="county" value="{$currentuser.county}" /></p>
				<p>Postcode:</p>
				<p><input class="field" type="text" id="profile_postcode" name="postcode" value="{$currentuser.postcode}" /></p>
				<p>Country:</p>
				<p><input class="field" type="text" id="profile_country" name="country" value="{$currentuser.country}" /></p>
				<p>Date of Birth:</p>
				<div class="addRoundCheckoutArea">
				<p>
					<select id="dobday" name="dobday" size="1" tabindex="1">
						<option value="">- Day -</option>
						{section name="dobday" loop=32 start=1}
						<option value="{$smarty.section.dobday.index}"{if $smarty.section.dobday.index == $currentuser.dob|date_format:"%d"} selected="selected"{/if}>{$smarty.section.dobday.index}</option>
						{/section}
					</select>
					<select id="dobmonth" name="dobmonth" size="1" tabindex="2">
						<option value="">- Month -</option>
						{section name="dobmonth" loop=13 start=1}
						<option value="{$smarty.section.dobmonth.index}"{if $smarty.section.dobmonth.index == $currentuser.dob|date_format:"%m"} selected="selected"{/if}>{$smarty.section.dobmonth.index}</option>
						{/section}
					</select>
					<select id="dobyear" name="dobyear" size="1" tabindex="3">
						<option value="">- Year -</option>
						{section name="dobyear" loop=$thisyear start=$firstyear}
						<option value="{$smarty.section.dobyear.index}"{if $smarty.section.dobyear.index == $currentuser.dob|date_format:"%Y"} selected="selected"{/if}>{$smarty.section.dobyear.index}</option>
						{/section}
					</select>
				</p>
				</div>				
				<p>&nbsp;</p>
				<p>Handicap: (use decimals if available)</p>
				<p><input class="field" type="text" id="profile_handicap" name="handicap" value="{$currentuser.handicap}" /></p>
			
			</div>

			<input type="hidden" name="doprofileedit" value="true" />
			<p><input type="image" src="/tracker/wl/lovegolf/images/but-update-profile.png" height="30" width="210" alt="Update profile" /></p>
			<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
		
		</form>
	
		<h1>Change My Password</h1>
		
		<form action="" method="post">
		
			{if $passwordmessage}
			<p class="error">{$passwordmessage}</p>
			{/if}
		
			<div class="editProfileHolder">
			
				<p>Current password:</p>
				<p><input class="field" type="password" id="profile_oldpassword" name="oldpassword" value="" /></p>
				<p>New password:</p>
				<p><input class="field" type="password" id="profile_newpassword" name="newpassword" value="" /></p>
				<p>Enter new password again:</p>
				<p><input class="field" type="password" id="profile_newpassword2" name="newpassword2" value="" /></p>
			
			</div>
			
				<input type="hidden" name="dopasswordedit" value="true" />
				<p><input type="image" src="/tracker/wl/lovegolf/images/but-update-password.png" height="30" width="210" alt="Update password" /></p>
			<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
		
		</form>	
		
	</div>
	
	<script>
	{literal}

	function uploadwait() {
		$('#uploadInput').fadeOut();
		$('.myProfilePhoto').addClass('loading');
	}
	
	{/literal}
	</script>
	
	<form action="" method="post" enctype="multipart/form-data" onsubmit="uploadwait();">
	
	<div class="myProfileRight">
	
		<div class="myProfileStats">
		
			<div class="myProfileStatsContent">
			
				<h1>Upload image:</h1>
				<p><br />Use the browse button below to find an image on your computer.</p> 
				<p>Offensive pictures will be removed and offending account deleted.</p>
				<p>Max filesize 10mb.</p>
			
			</div>

		</div>
		
		<div class="myProfilePhoto">
		
			{if $currentuser.photo}
			<img src="/tracker/profileimage/{$currentuser.photo}?" alt="Profile Image" />
			{else}
			<img src="/tracker/profileimage/im-tiger.jpg" alt="Profile Image" />
			{/if}
		
		</div>
		
		<div class="floatEnder"></div>
		
		<div id="uploadInput" style="padding: 10px;">
			
			{if $photomessage}
			<p class="error">{$photomessage}</p>
			<p>&nbsp;</p>
			{/if}
			<input type="file" id="profile_photo" name="image"  />
			<input type="hidden" name="dophotoupload" value="true" />
			<input type="hidden" name="MAX_FILE_SIZE" value="10240" />
			<input type="submit" id="profile_submit" name="submit" value="Upload" />
			
		</div>
	
	</div>
	
	</form>
	
	<div class="floatEnder"></div>
	