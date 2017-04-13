<?php get_header();?>
    <section class="red">
      <div class="container breathe">
        <h1>Forever Dutch.</h1>
        <p>The game-winning shot. The rally cries from the dugout. The game-preserving defensive stop. The exchange of the baton. Red and white. "Hoo-rah!"</p>
        <p>Teamwork ... It is the backbone of the Central spirit that defines what it means to be Forever Dutch.</p>
        <p>Now more than ever, we need you&mdash;the Forever Dutch family&mdash;to help continue Central's legacy of supporting successful students.</p>
        <h2>This is your team. This is your time.</h2>
        <p><a href="/give" class="whiteButton pullRight">Give Now</a></p>
        <img src="//d1lqhpmxg10s5j.cloudfront.net/images/athletics/templateImages/centralAthleticsLogo_2.png" alt="Central College Dutch" width="270" height="115">
     </div>
    </section>

    <section class="dropTop">
      <div class="container">
        <h2 class="redText">The rennovation phase</h2>
        <p>“Game changers.” That’s what Eric Van Kley, Central’s athletics director, calls the transformation of the A.N. Kuyper Athletics Complex facilities. The Renovation phase of Forever Dutch builds off the momentum, excitement and energy of the earlier phases. With modern functionality and appearance, this phase will bring necessary renovations to several areas:</p>
      </div>
      <div class="container">
        <div class="four columns">
          <h2>Total renovation of locker rooms</h2>
          <p>The locker rooms were constructed for an all-male, eight-sport program that served 202 athletes in 1969. Central now boasts a 19-sport program for men and women and nearly 750 student-athletes. A large new locker room makes adequate space available for every team.</p>
        </div>
        <div class="four columns">
          <h2>Expanded athletic training room</h2>
          <p>The athletic training room will expand by 30-40% and will provide elbow room for trainers to prepare athletes to be game-ready. The modernized treatment and programming space will enhance the educational value for student trainers.</p>
        </div>
        <div class="four columns">
          <h2>New team space</h2>
          <p>A multi-purpose space will be instrumental for recruiting, team building activities and watching game film.</p>
        </div>
        <div class="clearBoth"></div>
      </div>
      <div class="container">
        <div class="four columns">
          <h2>Recruiting and special event suites</h2>
          <p>Two suites overlooking the gym will provide space to host events and enhance the overall experience for students, alumni and top quality recruits.</p>
        </div>
        <div class="four columns">
          <h2>Renovation and addition of new assistant and head coach offices</h2>
          <p>Our nationally recognized coaching staff members get the best out of their athletes, so they deserve the best office environment to maximize their work and provide hospitality to recruits and families.</p>
        </div>
        <div class="four columns">
          <h2>Reception area/Sikkink Welcome Center</h2>
          <p>This area is an open and inviting space that will allow families, students and coaches to visit with each other.</p>
        </div>
        <div class="clearBoth"></div>
      </div>
    </div>
    </section>

    <section class="lightGray dedicationAfter dropTop">
      <div class="top container">
        <h2 class="redText">Game-changing facilities.</h2>
        <h2 class="redText">A life-changing athletics program.</h2>
        <p> More than trophies and titles, a Central College education changes lives. Facilities can enhance Central's ability to attract students and, ultimately, to serve them.</p>
        <h3>The time has come &mdash; not just for a renovation, but for a transformation.</h3>
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
        /* var youTubeImage = '<h2><?php echo get_option('video_title');?></h2><img src="<?php echo get_option('video_thumb');?>" alt="<?php echo get_option('video_title');?>" class="youTubeThumb" style="width: 100%;">';
        $('.youTubeVideo').append(youTubeImage);
        $('.youTubeVideo').click(function(){
          var youTubeEmbed = '<iframe width="99%" height="350" src="//www.youtube.com/embed/<?php echo get_option('video_ID');?>/?rel=0&showinfo=0&autohide=1&vq=hd720&autoplay=true"></iframe>';
          $('.youTubeVideo').html(youTubeEmbed);
          ga('send', 'event', 'Video', 'play', 'Forever Dutch Video', 'Homepage Announcement Video Play', {nonInteraction: true});
        }); */
		  var youTubeImage1 = '<h2><?php echo get_option('video_title1');?></h2><img src="<?php echo get_option('video_thumb1');?>" alt="<?php echo get_option('video_title1');?>" class="youTubeThumb" style="width: 100%;">';
        $('.youTubeVideo1').append(youTubeImage1);
        $('.youTubeVideo1').click(function(){
          var youTubeEmbed1 = '<iframe width="99%" height="350" src="//www.youtube.com/embed/<?php echo get_option('video_ID1');?>/?rel=0&showinfo=0&autohide=1&vq=hd720&autoplay=true"></iframe>';
          $('.youTubeVideo1').html(youTubeEmbed1);
          ga('send', 'event', 'Video', 'play', 'Forever Dutch Video', 'Homepage Announcement Video Play', {nonInteraction: true});
        });
      });

    </script>
    <?php get_footer();?>
