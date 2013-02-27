<h2>Signup with <?= ucwords($signup_module) ?></h2>

<h3>Howdi <?= $name ?></h3>

<p>Your account is almost setup, please enter your email address</p>

<form method="post" name="user_social_signup" id="user_social_signup" action="<?= base_url() ?>api/users/set_userdata_signup_email">
	
	<p><input type="text" name="signup_email" value="<?= $signup_email ?>"></p>
	<div id="email_error"></div>
	
	<p><input type="submit" name="submit" value="Signup"></p>

</form>