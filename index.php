<?php get_header();?>
<section class="red keystone">
	<div class="container">
		<?php if(in_category('News')){?><h1>News</h1><?php }
		else if (in_category('Events')){?><h1>Events</h1><?php } ?>
		<h2>Stay connected.</h2>
	</div>
</section>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<div class="container breathe newsEvents">
		<div class="post">
			<div class="meta"><?php echo the_category(' '); ?> // <?php the_time( get_option( 'date_format' ) ) ?></div>
			<h2 class="redText"><?php the_title();?></h2>
			<?php the_content(); ?>
		</div>
	</div>
	<?php endwhile; ?>
	<?php else : ?>
		<div class="container">
			<h1>Not Found</h1>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<p>Start over at <a href="/">the homepage</a>.</p>
		</div>
<?php endif; ?>
<?php get_footer();?>
