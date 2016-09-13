<?php get_header();?>
    <section class="red footballTeamAfter">
      <div class="container">
        <h1>Forever Dutch.</h1>
        <p><strong>Central College is more than a four-year experience.</strong></p>
        <p>It’s forever a part of who we are and how we live. We are Forever Dutch.</p>
        <p>And now it falls to us to answer the call in this defining moment in the life of the college.</p>
        <h2>This is your team. This is your time.</h2>
        <p><a href="/give" class="whiteButton pullRight">Give Now</a></p>
        <img src="//d1lqhpmxg10s5j.cloudfront.net/images/athletics/templateImages/centralAthleticsLogo_2.png" alt="Central College Dutch" width="270" height="115">
      </div>
    </section>
    <section class="videoPromo">
      <div class="container">
        <div class="one-half column">
          <div class="youTubeVideo"></div>
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
    <script type="text/javascript">
      $(document).ready(function(){
        var youTubeImage = '<h2><?php echo get_option('video_title');?></h2>&nbsp;<img src="<?php echo get_option('video_thumb');?>" alt="<?php echo get_option('video_title');?>" class="youTubeThumb" style="width: 100%;">';
        $('.youTubeVideo').append(youTubeImage);
        $('.youTubeVideo').click(function(){
          var youTubeEmbed = '<iframe width="99%" height="350" src="//www.youtube.com/embed/<?php echo get_option('video_ID');?>/?rel=0&showinfo=0&autohide=1&vq=hd720&autoplay=true"></iframe>';
          $('.youTubeVideo').html(youTubeEmbed);
          ga('send', 'event', 'Video', 'play', 'Forever Dutch Video', 'Homepage Announcement Video Play', {nonInteraction: true});
        });
		  var youTubeImage1 = '<h2><?php echo get_option('video_title1');?></h2>&nbsp;<img src="<?php echo get_option('video_thumb1');?>" alt="<?php echo get_option('video_title1');?>" class="youTubeThumb" style="width: 100%;">';
        $('.youTubeVideo1').append(youTubeImage1);
        $('.youTubeVideo1').click(function(){
          var youTubeEmbed1 = '<iframe width="99%" height="350" src="//www.youtube.com/embed/<?php echo get_option('video_ID1');?>/?rel=0&showinfo=0&autohide=1&vq=hd720&autoplay=true"></iframe>';
          $('.youTubeVideo1').html(youTubeEmbed1);
          ga('send', 'event', 'Video', 'play', 'Forever Dutch Video', 'Homepage Announcement Video Play', {nonInteraction: true});
        });
      });
    </script>
    <?php get_footer();?>
