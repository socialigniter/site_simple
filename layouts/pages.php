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
<meta property="og:image" content="<?= $site_image ?>"/>
<meta property="og:url" content="<?= current_url() ?>"/>
<meta property="og:site_name" content="<?= config_item('site_title') ?>"/>
<meta property="og:description" content="<?= $site_description ?>">

<!-- RSS & Atom Feeds -->
<link rel="alternate" type="application/rss+xml" title="<?= $site_title ?> RSS 2.0 Feed" href="<?= base_url() ?>feed" />
<link rel="alternate" type="application/rss+xml" title="<?= $site_title ?> RSS 2.0 Comments" href="<?= base_url() ?>feed/comments" />
<?= $head ?>
<script type="text/javascript">
$(document).ready(function()
{
	getNews();
	$('#navbar_inside').delay(500).fadeIn('slow');
	$('#footerbar').delay(1000).fadeIn('slow');
	
	// Fade In Footer
	$('#footerbar_right').live('click', function()
	{
		$('#footer').css('position', 'relative');

		getNews();
		$('#footerbar_right').delay(500).fadeOut('slow');
		$('#footer_content').delay(500).fadeIn('slow', function()
		{
			var doc_height = $(document).height();						
			$.scrollTo(doc_height, 800);
		});
	});

    var footer = $('#footer');
    var w = ( $(window).width() - footer.width() ) / 2;

    footer.css('left', w);
	footer.css('display', 'block'); 
    footer.css('bottom', 0);
});
</script>
</head>
<body>
<div id="navbar">
	<div id="navbar_inside">
		<a href="<?= base_url() ?>" id="navbar_left_index"><?= show_site_logo('small', $site_assets.'icons/home.png') ?><span class="navbar_text"><?= $site_title ?></span></a>
		<?= $logged ?>
		<div class="clear"></div>
	</div>
</div>
<div id="container">
	<div id="title">
		<h1><?= $page_title ?></h1>
		<p id="sub_title"><a href="<?= base_url().'#!/'.$page_type ?>"><?= ucwords($page_type) ?></a> by <a href="<?= base_url() ?>"><?= $site_title ?></a><span id="published_date"><?= $pub_date ?></span></p>
		<div class="clear"></div>
	</div>	
	<?= $content ?>
</div>
<?= $this->load->view('site_brennannovak/partials/footer_site') ?>
<?= $google_analytics ?>
</body>
</html>