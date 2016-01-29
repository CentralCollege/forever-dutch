<?php get_header(); ?>
    <section class="red keystone">
      <div class="container">
        <h1>Your Time is now.</h1>
        <h2>Make your gift.</h2>
      </div>
    </section>
    <section class="give">
      <div class="container breathe newsEvents">
        <?php
          $response = wp_remote_get( 'http://dev.central.edu/api/alumni/events/' );
          $body = $response['body'];
          echo $body;
        ?>
      </div>
    </section>
    <?php get_footer();?>
