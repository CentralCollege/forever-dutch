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
			<?php if(is_single()==1){?>
				<h2 class="redText"><?php the_title();?></h2>
			<?php }else{?>
				<h2 class="redText"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			<?php } ?>
			<?php the_content(); ?>
			<?php if(is_single()==1){?>
				<hr size=1 />
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=174642462605092";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="social_FB">
					<div class="fb-share-button" data-href="<?php the_permalink();?>" data-layout="button"></div>
				</div>
				<div class="social_twitter">
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink();?>" data-via="centralcollege" data-hashtags="foreverDutch">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
			<?php }?>
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
