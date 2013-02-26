<h2>Forgot Password</h2>
<p>Please enter your email address</p>

<form method="post" name="forgot_password" id="forgot_password" action="<?= base_url()."api/users/password_forgot"; ?>">
	<p>
		<input type="text" name="email" id="forgot_email" placeholder="you@email.com" value="">
	  	<span id="forgot_email_error"></span>
	</p>
	<p id="email_error"></p>
	<p><input type="submit" name="submit" value="Retrieve" /></p>
</form>