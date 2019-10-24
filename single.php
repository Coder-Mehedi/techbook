<?php get_header() ?>
	<section class="postMainBody">
		<div class="postImage">
			<img src="<?php the_post_thumbnail_url() ?>" alt="">
		</div>
		<div class="postBody">
			<img src="<?php echo get_template_directory_uri() ?>/images/singl1.png" class="singl1" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/singl2.png" class="singl2" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/singl3.png" class="singl3" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/singl4.png" class="singl4" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/singl5.png" class="singl5" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/singl6.png" class="singl6" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/singl7.png" class="singl7" alt="">
			<div class="container">
				<div class="postBodyHeader">
					<h1><?php the_title(); ?></h1>
					<p><i class="far fa-eye"></i>325 <span><?php the_time(); ?></span><span><?php echo get_the_date(); ?></span></p>
					<hr>
				</div>
				<div class="postText">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content( ) ?>
				<?php endwhile; ?>
				</div>
				<div class="prev-next">
<?php
	$next_post_link_url = get_permalink( get_adjacent_post(false,'',false)->ID ); 
	$prev_post_link_url = get_permalink( get_adjacent_post(false,'',true)->ID );
?>
					<a href="<?php echo $prev_post_link_url ?>" class="prev" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/prev.png"></a>
					<a href="<?php echo $next_post_link_url ?>" class="next" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/next.png"></a>
				</div>
			</div>
		</div>
	</section>
<?php get_footer() ?>