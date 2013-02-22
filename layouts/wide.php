<!DOCTYPE html>  
<html>
<head>
<title><?= site_title($sub_title, $page_title, $site_title) ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="title" content="<?= site_title($sub_title, $page_title, $site_title) ?>" />
<meta name="description" content="<?= $site_description ?>" />
<meta name="keywords" content="<?= $site_keywords ?>" />
<meta name="google-site-verification" content="<?= $settings['services']['google_webmaster']; ?>" />
<meta name="msvalidate.01" content="<?= $settings['services']['bing_webmaster']; ?>" />

<!-- OpenGraph (Facebook) http://ogp.me -->
<meta property="og:title" content="<?= site_title($sub_title, $page_title, $site_title) ?>"/>
<meta property="og:type" content="website" />
<meta property="og:image" content="<?= site_image($site_image) ?>"/>
<meta property="og:url" content="<?= current_url() ?>"/>
<meta property="og:site_name" content="<?= config_item('site_title') ?>"/>
<meta property="og:description" content="<?= $site_description ?>">


<!-- RSS & Atom Feeds -->
<link rel="alternate" type="application/rss+xml" title="<?= $site_title ?> RSS 2.0 Feed" href="<?= base_url() ?>feed" />

<?= $head ?>
</head>
<body>
<div id="navbar">
	<div id="navbar_inside">
		<a href="<?= base_url() ?>" id="navbar_left_index"><?= show_site_logo('small', $site_assets.'icons/home.png') ?><span class="navbar_text"><?= $site_title ?></span></a>
		<?= $logged; ?>
		<div class="clear"></div>
	</div>
</div>


<div id="container">
	<div id="content_message" class="message_normal"><?= $message ?></div>
	<?= $content ?>
	<?= $wide ?>
</div>

<div id="footer">
	<?= $footer ?>
</div>
<?= $google_analytics ?>
</body>
</html>