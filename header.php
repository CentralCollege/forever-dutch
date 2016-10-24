<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="copyright" content="Copyright (c) 2016 Central College" />
    <meta name="Description" content="The transformation of the A.N. Kuyper Athletics Complex has begun and we need your help to see it through." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="//www.central.edu/favicon.ico" />
    <meta property="fb:app_id" content="122820004455478" />
    <meta property="fb:admins" content="78302220" />
    <meta property="fb:admins" content="14827654" />
    <meta property="fb:admins" content="1183110072" />
    <meta property="fb:admins" content="629217238" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php the_permalink();?>" />
    <meta property="og:title" content="Forever Dutch - <?php the_title();?>" />
    <meta property="og:description" content="The transformation of the A.N. Kuyper Athletics Complex has begun and we need your help to see it through.">
    <meta property="og:image" content="<?php echo bloginfo('template_directory')?>/images/facebookOG.jpg" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@centralcollege">
    <meta name="twitter:creator" content="@centralcollege">
    <meta name="twitter:title" content="Forever Dutch">
    <meta name="twitter:description" content="The transformation of the A.N. Kuyper Athletics Complex has begun and we need your help to see it through.">
    <meta name="twitter:image" content="<?php echo bloginfo('template_directory')?>/images/facebookOG.jpg">
    <link rel="dns-prefetch" href="http://www.central.edu" />
    <?php if($_SERVER['HTTP_HOST'] == '192.168.56.111'){ ?>
        <script src="//localhost:35729/livereload.js" type="text/javascript"></script>
    <?php } ?>
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,700|Rajdhani:700|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo bloginfo('template_directory')?>/print.css" rel="stylesheet" type="text/css" media="print" />
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-73097331-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!--- WP HEADERS !--->
    <?php wp_head();?>
  </head>
  <body>
    <header>
      <nav class="primary">
        <a href="/" class="logo"><img src="<?php echo bloginfo('template_directory')?>/images/centralCollegeLogo.svg" alt="Central College Logo"></a>
        <div class="nav-group">
          <a href="/challenge" class="redButtonNav">Challenge</a>
          <a href="/history">History</a>
          <a href="/projects">Projects</a>
          <a href="/category/news/">News</a>
          <a href="/events">Events</a>
          <a href="/donate">Giving Info</a>
          <a href="//www.facebook.com/centralcollege" class="fa fa-facebook"></a>
          <a href="//www.twitter.com/centralcollege" class="fa fa-twitter"></a>
          <a href="//www.instagram.com/centralcollege" class="fa fa-instagram"></a>
        </div>
      </nav>
    </header>
