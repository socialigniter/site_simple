<!-- RSS & Atom Feeds - commented out until this serves some actual data or better yet, a directory of other available feeds from modules
<link rel="alternate" type="application/rss+xml" title="<?= $site_title ?> RSS 2.0 Feed" href="<?= base_url() ?>feed" />
-->

<!--  Icons for Mobile Devices, Favicon -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="mobile-web-app-capable" content="yes" />

<link rel="shortcut icon" href="<?= $site_images.config_item('design_site_logo') ?>" />
<link rel="apple-touch-icon-precomposed" href="<?= $site_images.config_item('design_site_logo') ?>" />

<!-- CSS Styles -->
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

#navbar_inside					{ height: 50px; display: none; background: <?= make_css_background('header') ?>; color: #<?= config_item('design_header_link_color_normal') ?>; }
#navbar a		 				{ color: #<?= config_item('design_header_link_color_normal') ?>; }
#navbar a:link					{ color: #<?= config_item('design_header_link_color_normal') ?>; text-decoration: none; }
#navbar a:visited				{ color: #<?= config_item('design_header_link_color_visited') ?>; text-decoration: none; }
#navbar a:hover					{ color: #<?= config_item('design_header_link_color_hover') ?>; text-decoration: none; }
#navbar a:active  				{ text-decoration: underline; }

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
