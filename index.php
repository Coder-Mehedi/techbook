<?php
	// Home Section
	$title_part_one = get_field('title_part_one','option');
	$title_part_two = get_field('title_part_two','option');
	$tag_line_sentence = get_field('tag_line_sentence','option');

	if( have_rows('action_button','option') ): 
		while( have_rows('action_button','option') ): the_row(); 
			$button_text = get_sub_field('button_text');
			$button_url = get_sub_field('button_url');
		endwhile;
	endif;

	// About Section
	$main_title = get_field('main_title','option');
	$about_section_text = get_field('about_section_text','option');
	
	// Founder Section
	$founder_name = get_field('founder_name','option');
	$founder_description = get_field('some_description_about_founder','option');
	$leadership_skills_text = get_field('leadership_skills_textarea','option');
	if( have_rows('leadership_skill_group','option') ): 
		while( have_rows('leadership_skill_group','option') ): the_row(); 
			$skill_area_one = get_sub_field('skill_area_one');
			$skill_area_two = get_sub_field('skill_area_two');
		endwhile;
	endif;

	// Other Skill Section
	$others_skills_title = get_field("others_skills_title", "option");
	$other_skill = get_field('other_skill','option');

	// Technical Skill Section
	$skilled_in_text = get_field('skilled_in_text', 'option');
	$technical_skills = get_field('technical_skills', 'option');

	// Services Section
	$leadership_consultancy_text = get_field('leadership_consultancy_text', 'option');
	$technical_consultancy_text = get_field('technical_consultancy_text', 'option');

	// Approach Section
	$approach_text = get_field('approach_text', 'option');

	// Contact Section
	$contact_number = get_field('contact_number', 'option');
	$email = get_field('contact_email', 'option');
	$address = get_field('contact_address', 'option');
?>


<!DOCTYPE html>
<html ⚡ lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<title>Techbook</title>
<link href="" rel="stylesheet">

<?php wp_head() ?>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
		  	<a class="navbar-brand logo" href="#">
		  		<img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
		  	</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
		      	<li class="nav-item"><a class="nav-link" href="#">About</a></li>
		      	<li class="nav-item"><a class="nav-link" href="#">meet the founder</a></li>
		      	<li class="nav-item"><a class="nav-link" href="#">services</a></li>
		      	<li class="nav-item"><a class="nav-link" href="#">approach</a></li>
		      	<li class="nav-item"><a class="nav-link" href="#">blog</a></li>
		      	<li class="nav-item"><a class="nav-link" href="#">contact</a></li>
		    	</ul>
		  	</div>
		</nav>
	</div>
		<div class="header_section">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse1.png" class="img1" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse3.png" class="img3" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse4.png" class="img4" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse5.png" class="img5" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse6.png" class="img6" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse7.png" class="img7" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse8.png" class="img8" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2><?php echo $title_part_one ? $title_part_one : ''; ?></br><span><?php echo $title_part_two ? $title_part_two : ''; ?></span><p><?php echo $tag_line_sentence ? $tag_line_sentence : ''; ?></p></h2>
						<a href="<?php echo $button_url ? $button_url : '#'; ?>"><button><?php echo $button_text ? $button_text : 'Button' ?></button></a>
					</div>
					<div class="col-md-12">
						<a href="#">-About</a>
						<h3><?php echo $main_title ? $main_title : '' ?></h3>
						<p><?php echo $about_section_text ? $about_section_text : '' ?></p>
						
					</div>
				</div>
			</div>
		</div>

		<section class="founder">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder1.png" class="founder1" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder2.png" class="founder2" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder3.png" class="founder3" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder4.png" class="founder4" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder5.png" class="founder5" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder6.png" class="founder6" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder7.png" class="founder7" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder8.png" class="founder8" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder9.png" class="founder9" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder10.png" class="founder10" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder11.png" class="founder11" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/founder12.png" class="founder12" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-6 textCntr">
						<h5>— meet the founder</h5>
						<h3><?php echo $founder_name ? $founder_name : ''; ?></h3>
						<div  class="author">
							<img src="<?php echo get_template_directory_uri() ?>/images/founderimg.png" alt="">
							<h6>CEO - Founder</h6>
						</div>
						<hr>
						<p><?php echo $founder_description ? $founder_description : ''; ?></p>
						<h4>Leadership Skills</h4>
						<hr>
						<p><?php echo $leadership_skills_text ? $leadership_skills_text : ''; ?></p>
						<p class="text1"><?php echo $skill_area_one ? $skill_area_one : ''; ?></p>
						<p class="text2"><?php echo $skill_area_two ? $skill_area_two : ''; ?></p>
						<h4><?php echo $others_skills_title ? $others_skills_title : ''; ?></h4>
						<p class="text4"><?php echo $other_skill ? $other_skill : ''; ?></p>
						<h3>Technical Skills</h3>
						<hr>
						<p class="text3"><?php echo $skilled_in_text ? $skilled_in_text : ''; ?></p>
						<p><?php echo $technical_skills ? $technical_skills : ''; ?></p>
					</div>
					<div class="col-md-6">
						
					</div>
				</div>
			</div>
		</section>

		<section class="services">
			<img src="<?php echo get_template_directory_uri() ?>/images/service1.png" class="service1" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/service2.png" class="service2" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/service3.png" class="service3" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/service4.png" class="service4" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mb-20">
						<h5>— Services</h5>
					</div>
					<div class="col-md-6">
						<h3>Leadership Consultancy</h3>
						<hr>
						<p><?php echo $leadership_consultancy_text ? $leadership_consultancy_text : ''; ?></p>
					</div>
					<div class="col-md-6">
						<h3>Technical Consultancy</h3>
						<hr>
						<p><?php echo $technical_consultancy_text ? $technical_consultancy_text : ''; ?></p>
					</div>
				</div>
			</div>
		</section>

		<section class="approach">
			<img src="<?php echo get_template_directory_uri() ?>/images/approach1.png" class="approach1" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/approach2.png" class="approach2" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<h5>Approach</h5>
						<hr>
						<p><?php echo $approach_text ? $approach_text : ''; ?></p>
					</div>
					<div class="col-md-7 mt-100">
						<h5>Founder’s Thoughts</h5>
						<hr>
						<h6>— popular articles</h6>
					</div>
					<?php if ( have_posts() ):
						while ( have_posts() ): the_post(); ?>
					<div class="col-md-6">
						<div class="articles">
						  	<div class="articleImg"><img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt=""></div>
						  	<div class="card-body">
						    	<h5 class="card-title"><?php the_title(); ?></h5>
						    	<span><?php the_time() ?></span><span><?php the_date(); ?></span>
						    	<button class="bg1">SERVICES</button>
						    	<button class="bg2">SERVICES</button>
						  	</div>
						</div>
					</div>
					<?php endwhile;endif; ?>
				</div>
			</div>
		</section>

		<footer>
			<img src="<?php echo get_template_directory_uri() ?>/images/footer1.png" class="footerimg1" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/footer2.png" class="footerimg2" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/footer3.png" class="footerimg3" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3>Contact Details</h3>
						<p><?php echo $contact_number ? $contact_number : ''; ?></p>
						<p><?php echo $email ? $email : ''; ?><br>
							<?php echo $address ? $address : ''; ?>
						</p>
					</div>
				</div>
			</div>
		</footer>


	<?php wp_footer() ?>
</body>