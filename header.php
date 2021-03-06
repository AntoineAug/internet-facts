<?php
session_start();
require 'kernel/config.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<?php display_title_and_description(); ?>

		<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png"/>
		<meta property="og:image" content="http://internet-facts.com/images/icon_facebook.png" /> 
		
		<link rel="stylesheet" href="/css/uniform.css" type="text/css" media="all">
		<link href='//fonts.googleapis.com/css?family=Ubuntu:300|Open+Sans:300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
		<meta name="viewport" content="width=device-width">

		<script src="//code.jquery.com/jquery-1.8.0.min.js"></script>
		<script src="/js/uniform.js"></script>

		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-12045924-26']);
		  _gaq.push(['_setDomainName', 'internet-facts.com']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=453772431323467";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div id="header">
		<div class="content">
			<div id="logo">
				<a href="/" title="Internet Facts"><img src="/images/logo.png" alt="Logo Internet Facts" />Internet Facts</a>
				<span id="caption">The Facts that you never knew in your life</span>
			</div>

			<div id="social-networks">
				<a href="https://twitter.com/<?php echo $twitter_username; ?>" class="twitter-follow-button" data-show-count="false">Follow @<?php echo $twitter_username; ?></a>
			</div>
		</div>
	</div><!-- END HEADER -->

	<div id="menu" class="group">
		<a href="/" title="Home"<?php display_active_page('index'); ?>><span class="icon home"></span>Home</a>
		<a href="/random" title="Random Facts"<?php display_active_page('random'); ?>><span class="icon random"></span>Random Facts</a>
		<a href="/addfact" title="Add a Fact"<?php display_active_page('addfact'); ?>><span class="icon add"></span>Add a Fact</a>
		<a href="/search" title="Search a Fact or an user"<?php display_active_page('search'); ?>><span class="icon search"></span>Search</a>
		<a href="/newsletter" title="Newsletter"<?php display_active_page('newsletter'); ?>><span class="icon newsletter"></span>Newsletter</a>
		<a href="/about" title="About"<?php display_active_page('about'); ?>><span class="icon about"></span>About</a>
		<a href="/contact" title="Contact"<?php display_active_page('contact'); ?>><span class="icon contact"></span>Contact</a>
	</div><!-- END MENU -->

	<div id="content">