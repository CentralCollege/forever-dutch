<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forever Dutch</title>
    <meta name="copyright" content="Copyright (c) 2016 Central College" />
    <link href='styles.css' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="//img.centralcollege.info/icons/animal-monkey.png" />
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <script src="//localhost:35729/livereload.js" type="text/javascript"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" />


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
    <section class="red-title">
      <div class="container">
        <h1>Forever Dutch.</h1>
        <p><strong>Central College is more than a four-year experience.</strong><br/>
          It's forever a part of who we are and how we live. We are Forever Dutch</p>
        <h2>This is your team. This is your time.</h2>
        <p><a href="/donate" class="white-button">Donate Now</a></p>
        <img src="//d1lqhpmxg10s5j.cloudfront.net/images/athletics/templateImages/centralAthleticsLogo_2.png" alt="Central College Dutch" width="270" height="115">
      </div>
    </section>
    <section class="video-promo">
      <div class="container">
        <div class="one-half column video-title">
          <p>Time for a Transformation.</p>
        </div>
        <div class="one-half column">
          <div class="youTubeVideo"></div>
          <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/6BImc9wKKT4" allowfullscreen></iframe> -->
        </div>
        <div class="clearBoth"></div>
      </div>
    </section>
    <section class="gray-space">
      <div class="container">
        <h2>Game-changing facilities.</h2>
        <h2>A life-changing athletics program.</h2>
        <p> More than trophies and titles, a Central College education changes lives. Facilities can enhance Central's ability to attact students and, ultimately, to serve them.</p>
        <h3>The time has come &mdash; not just for a renovation, but for a transformation.</h3>
        <p><a href="/news" class="red-button">Upcoming Events</a></p>
      </div>
    </section>
    <section class="white-quote">
      <div class="container">
        <blockquote>Being part of the Central community and Central softball opened my eyes to the difference I can make. Over four years, I learned that everything we do connects to something greater in our future. <cite>Heidi Reburn '14</cite></blockquote>
      </div>
    </section>
    <section class="photo-split">
      <img src="<?php echo bloginfo('template_directory')?>/images/staggBowlTrophy.jpg" class="u-max-full-width" alt="Forever Dutch">
      <img src="<?php echo bloginfo('template_directory')?>/images/2003SoftballTitle.jpg" class="u-max-full-width" alt="Forever Dutch">
    </section>
    <footer>
      <div class="addr one-half column">
        <strong>Central College</strong><br />
        <span class="street-address">812 University St.</span> <span class="locality">Pella</span>, <span class="region">Iowa</span> <span class="postal-code">50219</span> <br />
        <div class="phone"><a href="tel:877-447-0287">1-877-447-0287</a></div>
        <div class="email"><a href="mailto:foreverdutch@central.edu">foreverdutch@central.edu</a></div>
      </div>
      <div class="footer-logo one-half column">
        <a href="/" id="logo"><img src="//d1lqhpmxg10s5j.cloudfront.net/images/athletics/templateImages/12centralCollegeLogo.png" alt="Central College" width="115" height="75"></a>
      </div>
      <div class="clearBoth"></div>
    </footer>
    <script src="js/scripts.js" type="text/javscript"></script>
    <script type="text/javascript">
      function addYouTubeVideo(id,title){
        var youTubeImage = '<img src="//192.168.56.111/wp-content/themes/foreverDutch/images/videoThumb.jpg" alt="'+title+'">';
        $('.youTubeVideo').append(youTubeImage);

        $('.youTubeVideo').click(function(){
          var youTubeEmbed = '<iframe width="99%" height="350" src="//www.youtube.com/embed/'+id+'/?rel=0&showinfo=0&autohide=1&vq=hd720&autoplay=true"></iframe>';
          $('.youTubeVideo').html(youTubeEmbed);
        });
        $('.youTubeVideo').hover(function(){
          $('.playButtonImg').attr('src','//img.centralcollege.info/main/playButtonHover.png');
        },function(){
          $('.playButtonImg').attr('src','//img.centralcollege.info/main/playButton.png');
        });
      }
      $(document).ready(function(){
        addYouTubeVideo('6BImc9wKKT4','youTubeTitle');
      });
    </script>
  </body>
</html>