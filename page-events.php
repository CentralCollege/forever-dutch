<?php get_header(); ?>
    <section class="red keystone">
      <div class="container">
        <h1>Your Time</h1>
        <h2>Your opportunity to learn more</h2>
      </div>
    </section>
    <section class="give">
      <div class="container breathe newsEvents">
        <?php
          $response = wp_remote_get( 'http://www.central.edu/api/alumni/events/' );
          if( $response['response']['code'] == '200'){
            echo $response['body'];
          } else { ?>
            <h3>There are no upcoming events.</h3>
          <?php }?>
      </div>
    </section>
    <?php get_footer();?>
