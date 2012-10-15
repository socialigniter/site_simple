<link rel="icon" type="image/png" href="<?= $site_images ?>favicon.png" />
<link href="<?= $site_assets ?>site.css" rel="stylesheet" type="text/css" media="all" /> 
<?php
$this->load->helper('color');
$color_rgb_bright	= hex_to_rgb(config_item('design_link_color_normal'), 'csv');
$color_rgb_dark		= hex_to_rgb(config_item('design_link_color_hover'), 'csv');
?>
<style type="text/css">
body 			{ background: <?= make_css_background('background') ?>; font-family: <?= config_item('design_font_family') ?>; font-size: <?= config_item('design_font_size') ?>; color: #<?= config_item('design_font_color') ?>; }
p 				{ font-family: <?= config_item('design_font_family') ?>; font-size: <?= config_item('design_font_size') ?>; color: #<?= config_item('design_font_color') ?>; }
a:link 			{ color: #<?= config_item('design_link_color_normal') ?>; text-decoration: none; line-height: 21px; }
a:visited		{ color: #<?= config_item('design_link_color_visited') ?>; text-decoration: none; }
a:hover			{ color:#<?= config_item('design_link_color_hover') ?>; text-decoration: underline; }
a:active		{ text-decoration: none; }

input[type=submit], input[type=reset], input[type=button], button { background-color: #434343; background-image: -webkit-gradient(linear, left top, left bottom, from(rgb(67, 67, 67)), to(rgb(0, 0, 0))); background-image: -webkit-linear-gradient(top, rgb(67, 67, 67), rgb(0, 0, 0)); background-image: -moz-linear-gradient(top, rgb(67, 67, 67), rgb(0, 0, 0)); background-image: -o-linear-gradient(top, rgb(67, 67, 67), rgb(0, 0, 0)); background-image: -ms-linear-gradient(top, rgb(67, 67, 67), rgb(0, 0, 0)); background-image: linear-gradient(top, rgb(67, 67, 67), rgb(0, 0, 0)); filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#434343', EndColorStr='#000000'); border: 2px double #333; cursor: pointer; color: #FFFFFF; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding: 8px 12px; }
input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover { border: 2px double #<?= config_item('design_link_color_hover') ?>; background: #<?= config_item('design_link_color_normal') ?>; background-image: -webkit-gradient(linear, left top, left bottom, from(rgb(<?= $color_rgb_bright ?>)), to(rgb(<?= $color_rgb_dark ?>))); background-image: -webkit-linear-gradient(top, rgb(<?= $color_rgb_bright ?>), rgb(<?= $color_rgb_dark ?>)); background-image: -moz-linear-gradient(top, rgb(<?= $color_rgb_bright ?>), rgb(<?= $color_rgb_dark ?>)); background-image: -o-linear-gradient(top, rgb(<?= $color_rgb_bright ?>), rgb(<?= $color_rgb_dark ?>)); background-image: -ms-linear-gradient(top, rgb(<?= $color_rgb_bright ?>), rgb(<?= $color_rgb_dark ?>)); background-image: linear-gradient(top, rgb(<?= $color_rgb_bright ?>), rgb(<?= $color_rgb_dark ?>)); filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr='#<?= config_item('design_link_color_normal') ?>', EndColorStr='#<?= config_item('design_link_color_hover') ?>'); text-decoration: none; border-radius: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; font-size: 14px; padding: 8px 12px; }

#navbar 						{ width: 100%; height: 40px; margin: 0; }
#navbar a		 				{ color: #<?= config_item('design_header_link_color_normal') ?>; font-size: <?= config_item('design_font_size') ?>; font-weight: bold; letter-spacing: 1px; text-decoration: none; }
#navbar a:link					{ color: #<?= config_item('design_header_link_color_normal') ?>; text-decoration: none; }
#navbar a:visited				{ color: #<?= config_item('design_header_link_color_visited') ?>; text-decoration: none; }
#navbar a:hover					{ color: #<?= config_item('design_header_link_color_hover') ?>; text-decoration: none; }
#navbar a:active  				{ text-decoration: underline; }
#navbar_inside					{ height: 40px; display: none; background: <?= make_css_background('header') ?>; color: #<?= config_item('design_header_link_color_normal') ?>; }

/* Modules Have This */
.content_container h1 a			{ font-weight: bold !important; color: #<?= config_item('design_font_color_normal') ?>; text-decoration: none; }
.content_container h2 a			{ font-weight: bold !important; color: #<?= config_item('design_font_color_normal') ?>; text-decoration: none; }
.content_container h3 a			{ font-weight: bold !important; color: #<?= config_item('design_font_color_normal') ?>; text-decoration: none; }
.content_container a:link 		{ font-weight: normal; font-weight: bold; color: #<?= config_item('design_link_color_normal') ?>; text-decoration: none; }
.content_container a:visited	{ font-weight: normal; font-weight: bold; color: #<?= config_item('design_link_color_visited') ?>; text-decoration: none; }
.content_container a:hover		{ font-weight: normal; font-weight: bold; color:#<?= config_item('design_link_color_hover') ?>; text-decoration: underline; }
.content_container a:active		{ font-weight: normal; font-weight: bold; text-decoration: none; }
.content_container p 			{ font-family: <?= config_item('design_font_family') ?>; font-size: <?= config_item('design_font_size') ?>; color: #<?= config_item('design_font_color') ?>; }
</style>
<script type="text/javascript" charset="utf-8" src="<?= base_url() ?>js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/social.core.js"></script>
<script type="text/javascript">
//Global User Data:
var user_data = {
	"user_id":"<?= $logged_user_id ?>",
	"username":"<?= $logged_username ?>",
	"user_level_id":"<?= $logged_user_level_id ?>",
	"name":"<?= $logged_name ?>",
	"image":"<?= $logged_image ?>",
	"location":"<?= $logged_location ?>",
	"geo_enabled":"<?= $logged_geo_enabled ?>",
	"geo_lat":"",
	"geo_long":"",
	"privacy":"<?= $logged_privacy ?>",	 
	"consumer_key": "<?= $oauth_consumer_key ?>",
	"consumer_secret": "<?= $oauth_consumer_secret ?>",
	"token": "<?= $oauth_token ?>",
	"token_secret": "<?= $oauth_token_secret ?>"
}

var base_url 		= jQuery.url.attr('protocol') + '://' +jQuery.url.attr('host') + '/';
var current_module	= jQuery.url.segment(1);
var core_modules	= jQuery.parseJSON('<?= json_encode(config_item('core_modules')) ?>');
var core_assets		= '<?= $dashboard_assets.'icons/' ?>';
var site_assets		= '<?= $site_assets ?>';

$(document).ready(function()
{
	// Hides Things
	$('.error').hide();

	if ($('#content_message').html() != '') $('#content_message').notify({status:'success',message:$('#content_message').html()});

	// Navbar
	$('#navbar_inside').delay(1500).fadeIn('slow');
});
</script>
