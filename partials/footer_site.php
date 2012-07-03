<div id="footer" <?php if (!$this->uri->segment(1)) echo 'style="display:none"'; ?>>
	<div id="footerbar">
		<a id="footerbar_left" href="<?= base_url() ?>search"><img src="<?= $site_assets ?>icons/navbar_search.png"><span class="footerbar_text">Search</span></a>
		<a id="footerbar_right" href="<?= base_url() ?>#!/work"><img src="<?= $site_assets ?>icons/navbar_work.png"><span class="footerbar_text">Work</span></a>
	</div>
	<div id="footer_content">
		<div class="footer_wrap">
		<div id="footer_left">
			<p id="footer_about"><img src="<?= $site_assets ?>icons/alert-brennannovak.png"><span id="footer_about_name">Hi :)</span> My name is Brennan Novak. I help build the internets. I like thinking. I also like creating, ideally a combination of both- that is ideal. I am most interested in a mixture of technology and <a href="http://en.wikipedia.org/wiki/Biophilia_hypothesis" target="_blank">biophilia</a></p>
			<p>I currently reside in Portland OR, it is swell. I care about the environment, it is kinda important. You can read more <a href="<?= base_url() ?>about">about</a> me and you should follow me on <a href="http://plus.google.com/105726731634945715549">google+</a></p>
		</div>
		<div id="footer_middle">
			<h3>Recent</h3>
			<ul id="news_feed">
			</ul>
		</div>
		<div id="footer_right">
			<h3>Connect</h3>
			<ul>
				<li><a href="http://twitter.com/brennannovak" rel="me" target="_blank">Twitter</a></li>
				<li><a href="http://facebook.com/brennannovak" rel="me" target="_blank">Facebook</a></li>
				<li><a href="http://github.com/brennannovak" rel="me" target="_blank">GitHub</a></li>
				<li><a href="http://leftbrain.brennannovak.com" rel="me" target="_blank">Posterous</a></li>
				<li><a href="http://flickr.com/brennannovak" rel="me" target="_blank">Flickr</a></li>
				<li><a href="http://rightbrain.brennannovak.com" rel="me" target="_blank">Tumblr</a></li>
				<li><a href="https://plus.google.com/105726731634945715549" rel="me" target="_blank">Google+</a></li>
				<li><a href="http://linkedin.com/in/brennannovak" rel="me" target="_blank">LinkedIn</a></li>
				<li><a href="http://news.ycombinator.com/user?id=brennannovak" rel="me" target="_blank">Hacker News</a></li>
			</ul>
		</div>
		<div class="clear"></div>
		</div>
	</div>
</div>