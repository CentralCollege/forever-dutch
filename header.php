<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="//img.centralcollege.info/icons/animal-monkey.png" />
    <meta property="fb:app_id" content="122820004455478" />
    <meta property="fb:admins" content="78302220" />
    <meta property="fb:admins" content="14827654" />
    <meta property="fb:admins" content="1183110072" />
    <meta property="fb:admins" content="629217238" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php the_permalink();?>" />
    <meta property="og:title" content="<?php the_title();?>" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@centralcollege">
    <meta name="twitter:creator" content="@centralcollege">
    <meta name="twitter:title" content="<?php the_title();?>">
    <meta name="twitter:description" content="<?php echo $storyDesc;?>">
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" media="screen" />
    <?php wp_head();?>
  </head>
  <body>
    <header>
      <nav class="primary">
        <a href="/" class="logo"><img src="http://d1lqhpmxg10s5j.cloudfront.net/images/2015/centralCollegeLogo.svg" alt="Central College Logo"></a>
        <div class="nav-group">
          <a href="/history">History</a>
          <a href="/projects">Projects</a>
          <a href="/news">News/Events</a>
          <a href="/donate">Donate</a>
          <a href="www.facebook.com/centralcollege" class="fa fa-facebook"></a>
          <a href="www.instagram.com/centralcollege" class="fa fa-twitter"></a>
          <a href="www.twitter.com/centralcollege" class="fa fa-instagram"></a>
        </div>
      </nav>
    </header>
    <div class="post-info">
