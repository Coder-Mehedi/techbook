<?php
// Template Name: Blog

get_header(); ?>


<header class="header">
	    <div class="container">
	        <div class="hdrIn">
	        	<button onclick="openNav()" class="togglarBtn">&#9776;</button>
	            <a class="logo" href="http://techbookae.com/">
			  		<img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
			  	</a>
	            	
	            	<?php wp_nav_menu( array(
	            		'theme_location'  => 'menu-1',
	            		'container'       => 'nav',
	            		'container_class' => 'nav',
	            		'container_id'    => 'mySidenav',
	            		'menu_class'      => 'menu',
	            		'items_wrap'      => '<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#8592;</a><ul id = "%1$s" class = "%2$s">%3$s</ul>',
	            	) ); ?>
	        </div>
	    </div>
	</header>

	
	<div class="container">
		<div class="blog_header">
			<img src="<?php echo get_template_directory_uri() ?>/images/bloghed1.png" class="blog_header1" alt="">
			<h2>Blog Posts</h2>
			<hr>
			<h4>Filter by</h4>
			<div class="row mt-4">
				<div class="col-md-12">
					<div class="buttons">
					    <a href="<?php echo bloginfo( 'url' ) ?>/blog" class="cat-button">All Categories</a>
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
<?php
$posts_query = new WP_Query(['post_type' => 'post', 'posts_per_page' => 6]); ?>
            <?php if ( $posts_query->have_posts() ) : ?>
            <?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>

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

			<?php 
// Contact Section
	$contact_number = get_field('contact_number', 'option');
	$email = get_field('contact_email', 'option');
	$address = get_field('contact_address', 'option');
 ?>	


		<footer id="footer">
			<img src="<?php echo get_template_directory_uri() ?>/images/footer1.png" class="footerimg1" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/footer2.png" class="footerimg2" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/footer3.png" class="footerimg3" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3>بيانات الاتصال</h3>
						<p><?php echo $contact_number ? $contact_number : ''; ?></p>
						<p><?php echo $email ? $email : ''; ?><br>
							<?php echo $address ? $address : ''; ?>
						</p>
					</div>
					<!-- <div class="col-md-6">
						<form method="POST">
							<input class="btn btn-warning" type="submit" value="English" name="english">
							<input class="btn btn-warning" type="submit" value="Arabic" name="arabic">
						</form>
					</div> -->
				</div>
			</div>
		</footer>


	<?php wp_footer() ?>


<?php get_footer() ?>