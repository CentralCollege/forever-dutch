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
        <div class="one-half column videoTitle">
          <h2 class="redText">Time for a<br />Transformation.</h2>
        </div>
        <div class="one-half column">
          <div class="youTubeVideo"></div>
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
    <section class="photoSplit">
      <div class="container">
        <div class="one-half column">
          <img src="<?php echo bloginfo('template_directory')?>/images/staggBowlTrophy.jpg" class="u-max-full-width" alt="Forever Dutch">
        </div>
        <div class="one-half column">
          <img src="<?php echo bloginfo('template_directory')?>/images/2003SoftballTitle.jpg" class="u-max-full-width" alt="Forever Dutch">
        </div>
        <div class="clearBoth"></div>
      </div>
    </section>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
      function addYouTubeVideo(id,title){
        var youTubeImage = '<img src="<?php echo bloginfo('template_directory')?>/images/videoThumb.jpg" alt="'+title+'" class="youTubeThumb">';
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
        addYouTubeVideo('6BImc9wKKT4','Forever Dutch Video');
      });
    </script>
    <?php get_footer();?>
