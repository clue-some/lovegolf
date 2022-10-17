
			{if $success}
			
			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">
				
					<h1>Your password has been reset</h1>
					<p><span>An email has been sent containing your new password.</span></p>
					<p>&nbsp;</p>
					<p><span><a href="/">Click here</a> to return to the homepage</span></p>
				
				</div>
				
				<div class="registerBoxArea" id="regForm">
				
					<p>&nbsp;</p>
				
				</div>
			
			</div>
			
			{elseif $failure}

			<div class="loginRegisterHolder">
				
				<div class="loginBoxArea" id="regForm">
				
					<h1>Password reset failed</h1>
					
					<p class="error">{$error}</p>
				
				</div>
				
				<div class="registerBoxArea" id="regForm">
				
					<p>&nbsp;</p>
				
				</div>
			
			</div>

			{/if}
			