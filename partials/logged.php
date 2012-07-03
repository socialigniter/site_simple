<ul id="navbar_right">
<?php if ($this->social_auth->logged_in()): ?>
	<li><a class="dark_nav" href="<?= $link_home ?>">Home</a></li>	
	<li><a class="dark_nav" href="<?= $link_profile ?>">Profile</a></li>	
	<li><a class="dark_nav" href="<?= $link_settings ?>">Settings</a></li>	
	<li><a class="dark_nav" href="<?= $link_logout ?>">Log Out</a></li>
<?php else: ?>
	<?php if (config_item('users_signup') == 'TRUE'): ?>
	<li><a class="dark_nav" href="<?= base_url().'signup' ?>">Sign Up</a></li>
	<?php endif; ?>
	<?php if (config_item('users_login') == 'TRUE'): ?>
	<li><a class="dark_nav" href="<?= base_url().'login' ?>">Log In</a></li>
	<?php endif; ?>	
<?php endif; ?>
</ul>
<div class="clear"></div>
