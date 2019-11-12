<?php get_header() ?>

<div class="container">
		<div class="blog_header">
			<img src="<?php echo get_template_directory_uri() ?>/images/bloghed1.png" class="blog_header1" alt="">
			<h2>Blog Posts</h2>
			<hr>
			<h4>Filter by</h4>
			<div class="row mt-4">
				<div class="col-md-12">
					<div class="buttons">
					    <a href="<?php echo bloginfo( 'url' ) ?>/blog">All Categories</a>
						<?php wp_list_categories(
							array('title_li' => '',
								'style' => '',
								'separator' => '',
						)) ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>

<section class="blog_body">
		<img src="<?php echo get_template_directory_uri() ?>/images/blogbody1.png" class="blogbody1" alt="">
		<img src="<?php echo get_template_directory_uri() ?>/images/blogbody2.png" class="blogbody2" alt="">
		<img src="<?php echo get_template_directory_uri() ?>/images/blogbody3.png" class="blogbody3" alt="">
		<img src="<?php echo get_template_directory_uri() ?>/images/blogbody4.png" class="blogbody4" alt="">
		<div class="container">
			<div class="row blogPost">
            <?php if ( have_posts() ) : ?>
            <?php while (have_posts() ) : the_post(); ?>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="postImg">
								<img src="<?php the_post_thumbnail_url(); ?>">
							</div>
						</div>
						<div class="col-md-6 blockbg">
							<h4><?php the_title(); ?></h4>
							<h6>by <?php the_author(); ?></h6>
							<?php $content = substr(get_the_content(), 0, 200); ?>
							<p><?php echo $content ?>...</p>
							<p class="dinline"><i class="far fa-eye"></i>325</p>
							<span><?php the_time(); ?></span><span><?php the_date(); ?></span>
							<a href="<?php the_permalink(); ?>">Read More</a>
							<p></p>
						</div>
					</div>
				</div>
				<?php endwhile ?>
			<?php endif ?>

			</div>
		</div>
	</section>

<?php get_footer() ?>