<?php get_header();?>
    <section class="red">
      <div class="container breathe">
        <h1>Forever Dutch.</h1>
        <h2>48-hour challenge</h2>
        <p>When everyone contributes, our team grows stronger. The 48-hour challenge begins at midnight!</p>
        <img src="<?php echo bloginfo('template_directory')?>/images/48HourChallenge.svg" alt="48 Hour Challenge" width="300">
        <p class="alignRight"><a href="/give" class="whiteButton">Contribute</a></p>
      </div>
    </section>
    <section class="darkGray dropTop breathe" style="padding-top:0;">
      <div class="container">
        <h2>48-Hour Challenge Countdown</h2>
        <div class="countdown">
          <div class="clockGroup">
            <div class="days clock">0</div>
            <div class="label">days</div>
          </div>
          <div class="clockGroup">
            <div class="hours clock">0</div>
            <div class="label">hours</div>
          </div>
          <div class="clockGroup">
            <div class="minutes clock">0</div>
            <div class="label">minutes</div>
          </div>
          <div class="clockGroup">
            <div class="seconds clock">0</div>
            <div class="label">seconds</div>
          </div>
        </div>
      </div>
    </section>
    <section class="videoPromo">
      <div class="container">
        <div class="one-half column">
          <?php //<div class="youTubeVideo"></div>?>
          <h2>Follow the construction</h2>
          <img src="//img.centralcollege.info/forever-dutch/current.jpg?t=<?php echo date(ymdH);?>" alt="Follow the Construction" class="youTubeThumb" style="width: 100%;">

        </div>
        <div class="one-half column">
          <div class="youTubeVideo1"></div>
        </div>
        <div class="clearBoth"></div>
      </div>
    </section>
    <section class="darkGray breathe">
      <div class="container">
        <div class="twelve columns latestPhotos">
          <h2>Latest Construction Photos:</h2>
          <div class="alignCenter">
          <?php
            $attachments = get_posts( array(
                'post_type' => 'attachment',
                'posts_per_page' => 5,
                'post_status' => null,
                'post_mime_type' => 'image'
            ) );

            if(isset($attachments[0]->ID)) {
             echo wp_get_attachment_image( $attachments[0]->ID, 'thumbnail' );
             echo wp_get_attachment_image( $attachments[1]->ID, 'thumbnail' );
             echo wp_get_attachment_image( $attachments[2]->ID, 'thumbnail' );
             echo wp_get_attachment_image( $attachments[3]->ID, 'thumbnail' );
             echo wp_get_attachment_image( $attachments[4]->ID, 'thumbnail' );
            }
            ?>
          </div>
          <p class="alignRight"><a href="/category/news/" class="whiteButton">See more photos</a></p>
        </div>
        <div class="clearBoth"></div>
      </div>
    </section>

    <section class="lightGray dedicationAfter dropTop">
      <div class="top container">
        <h2 class="redText">Game-changing facilities.</h2>
        <h2 class="redText">A life-changing athletics program.</h2>
        <p> More than trophies and titles, a Central College education changes lives. Facilities can enhance Central's ability to attact students and, ultimately, to serve them.</p>
        <h3>The time has come &mdash; not just for a renovation, but for a transformation.</h3>
        <p><a href="/events" class="redButton">Upcoming Events</a></p>
      </div>
    </section>
    <section class="quoteSpace">
      <div class="container">
        <blockquote>Being part of the Central community and Central softball opened my eyes to the difference I can make. Over four years, I learned that everything we do connects to something greater in our future. <cite>Heidi Reburn '14</cite></blockquote>
      </div>
    </section>
    <section class="photo">
      <!--- First Row !--->
      <div class="container">
        <div class="hard-half column">
          <div class="imageGroup">
            <img src="<?php echo bloginfo('template_directory')?>/images/staggBowlTrophy.jpg" alt="Central College Baseball Dugout">
          </div>
        </div>
        <div class="hard-half column">
          <div class="imageGroup">
            <img src="<?php echo bloginfo('template_directory')?>/images/2003SoftballTitle.jpg" class="u-max-full-width" alt="Forever Dutch">
          </div>
        </div>
        <div class="clearBoth"></div>
      </div>
    </section>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/external-libraries/jquery.countdown/dist/jquery.countdown.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        var youTubeImage = '<h2><?php echo get_option('video_title');?></h2><img src="<?php echo get_option('video_thumb');?>" alt="<?php echo get_option('video_title');?>" class="youTubeThumb" style="width: 100%;">';
        $('.youTubeVideo').append(youTubeImage);
        $('.youTubeVideo').click(function(){
          var youTubeEmbed = '<iframe width="99%" height="350" src="//www.youtube.com/embed/<?php echo get_option('video_ID');?>/?rel=0&showinfo=0&autohide=1&vq=hd720&autoplay=true"></iframe>';
          $('.youTubeVideo').html(youTubeEmbed);
          ga('send', 'event', 'Video', 'play', 'Forever Dutch Video', 'Homepage Announcement Video Play', {nonInteraction: true});
        });
		  var youTubeImage1 = '<h2><?php echo get_option('video_title1');?></h2><img src="<?php echo get_option('video_thumb1');?>" alt="<?php echo get_option('video_title1');?>" class="youTubeThumb" style="width: 100%;">';
        $('.youTubeVideo1').append(youTubeImage1);
        $('.youTubeVideo1').click(function(){
          var youTubeEmbed1 = '<iframe width="99%" height="350" src="//www.youtube.com/embed/<?php echo get_option('video_ID1');?>/?rel=0&showinfo=0&autohide=1&vq=hd720&autoplay=true"></iframe>';
          $('.youTubeVideo1').html(youTubeEmbed1);
          ga('send', 'event', 'Video', 'play', 'Forever Dutch Video', 'Homepage Announcement Video Play', {nonInteraction: true});
        });
        //Setup the countdowns
        // --------------------------------------------------------------
        $('.days').countdown('10/24/2016 23:59:00', function(event) {
          $('.days').html(event.strftime('%-D'));
        });
        $('.hours').countdown('10/24/2016 23:59:00', function(event) {
          $('.hours').html(event.strftime('%-H'));
        });
        $('.minutes').countdown('10/24/2016 23:59:00', function(event) {
          $('.minutes').html(event.strftime('%-m'));
        });
        $('.seconds').countdown('10/24/2016 23:59:00', function(event) {
          $('.seconds').html(event.strftime('%-S'));
        });
        // --------------------------------------------------------------
      });

    </script>
    <?php get_footer();?>
