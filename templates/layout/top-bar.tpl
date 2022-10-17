<div class="topBar">

	<div class="topBarHolder">
	
		<div class="topBarContent">
			
			<p>
			<a href="http://{$host}/">Home</a>
			{if $currentuser.loggedin}
			| <a href="http://{$host}/logout/">Logout</a>
			{else} 
			| <a href="http://{$host}/login/">Login</a> 
			| <a href="http://{$host}/register/">Register</a> 
			| <a href="http://{$host}/lost-password/">Lost password?</a> 
			{/if}
			| <a href="http://{$host}/help-support/">Help & Support</a>
			| <a href="http://{$host}/contact/">Contact</a>
			{if $currentuser.admin}
			| <strong>Admin</strong>
			{/if}
			</p>
			
		</div>
		
	</div>

</div>
