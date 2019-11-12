<?php get_header() ?>

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