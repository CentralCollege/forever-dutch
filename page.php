<?php get_header();?>
<section class="red keystone">
	<div class="container">
		<h1><?php echo get_the_title();?></h1>
		<h2>Stay connected.</h2>
	</div>
</section>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<div class="container newsEvents">
		<div class="post">
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
