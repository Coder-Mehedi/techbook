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
	$founder_photo = get_field('founder_photo','option');
	$founder_description = get_field('some_description_about_founder','option');
	$leadership_skills_text = get_field('leadership_skills_textarea','option');
	if( have_rows('leadership_skill_group','option') ): 
		while( have_rows('leadership_skill_group','option') ): the_row(); 
			$skill_area_one = get_sub_field('skill_area_one');
			$skill_area_two = get_sub_field('skill_area_two');
		endwhile;
	endif;

	// management Skill Section
	$management_skill_title = get_field("management_skill_title", "option");
	$other_skill = get_field('other_skill','option');

	// Technical Skill Section
	$skilled_in_text = get_field('skilled_in_text', 'option');
	$technical_skills = get_field('technical_skills', 'option');

	// Services Section
	$leadership_consultancy_text = get_field('leadership_consultancy_text', 'option');
	$technical_consultancy_text = get_field('technical_consultancy_text', 'option');

	// Approach Section
	$approach_text = get_field('approach_text', 'option');

	
?>


<?php get_header(); ?>

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

		<div class="header_section">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse1.png" class="img1" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse3.png" class="img3" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse4.png" class="img4" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse5.png" class="img5" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse6.png" class="img6" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse7.png" class="img7" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/ellipse8.png" class="img8" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/Ellipse 10.png" class="img10" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2><?php echo $title_part_one ? $title_part_one : ''; ?></br><span><?php echo $title_part_two ? $title_part_two : ''; ?></span><p><?php echo $tag_line_sentence ? $tag_line_sentence : ''; ?></p></h2>
						<a href="<?php echo $button_url ? $button_url : '#services'; ?>"><?php echo $button_text ? $button_text : 'Button' ?></a>
					</div>
					<div class="col-md-12">
						<h6 href="#">About</h6>
						<h3><?php echo $main_title ? $main_title : '' ?></h3>
						<p><?php echo $about_section_text ? $about_section_text : '' ?></p>
						
					</div>
				</div>
			</div>
		</div>

		<section class="founder" id='founder'>
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
					<div class="col-md-7 textCntr">
						<h5>meet the founder</h5>
						<h3><?php echo $founder_name ? $founder_name : ''; ?></h3>
						<div  class="author">
							<img src="<?php echo $founder_photo['url'] ?>" alt="<?php echo $founder_photo['alt'] ?>">
							<h6>CEO - Founder</h6>
						</div>
						<hr>
                        
						<p class="textMb"><?php echo $founder_description ? $founder_description : ''; ?></p>
						<h3>Leadership Skills</h3>
						<hr>
                        
						<p class="text0">Adnan is a strategic thinker and able to balance the long-term objectives with short-term challenges. Adnan has a strong experience in managing challenges associated with multinational and multicultural teams. Adnan carries numerous distinguished achievements such as the prestigious award of "Distinguished Government Employee" by the Dubai Government.  Adnan has extensive experience in:</p>
						<ul class="text1">
							<li>HR strategy and organizational development</li> 
							<li>HR policy development</li> 
							<li>HR audit Strategic planning and advanced leadership skills</li>
							<li>Change management and restructuring of business</li>
							<li>Talent management and development</li>
							<li>Group and relationship coaching</li>
							<li>Facilitation of workshops</li>
						</ul>
						<ul class="text2">
							<li>Performance management</li> 
							<li>Reward management</li> 
							<li>Leadership development programs</li>
							<li>Provide strategic guidance in the assessment and development of the existing and/or proposed systems/projects</li>
							<li>Skills in directing multi-department, multicultural technical and administrative staff</li>
							<li>Expert in organizing resources and establishing business priorities</li>
						</ul>
						<h4>Also managing operations of businesses such as:</h4>
						<ul class="text4">
							<li>Project management</li> 
							<li>Commercial and contract management Knowledge of financial business information</li>
							<li>Ability to develop and evaluate commercial and technical proposals</li> 
							<li>Knowledge of current trends and developments in information technology</li> 
							<li>Ability to identify and secure alternative funding and supply resources</li>
						</ul>
						<h3>Technical Skills</h3>
						<hr>
						<p class="text3">
							Adnan has worked in top management and engineering positions in renowned Government entities in the United Arab Emirates. His professional experience evolved into executive level positions in institutes such as Dubai Electricity and Water Authority (DEWA), Dubai World and Emirates Nuclear Energy Corporation (ENEC). Adnan has extensive experience in:
						</p>
						<ul class="text5">
							<li>Operation and maintenance of transmission and distribution plants.</li>
							<li>Project Management of transmission and distribution plants.</li>
							<li>Project Management of Nuclear power generation and transmission plants.</li>
							<li>Engineering, manufacturing, transportation and construction of energy plants.</li>
							<li>Project Management of mega offshore structures</li> 
							<li>Compliance with United Arab Emirates nuclear policy.</li>
						</ul>
                        
					</div>
					<div class="col-md-6">
						
					</div>
				</div>
			</div>
		</section>

		<section class="services" id="services">
			<img src="<?php echo get_template_directory_uri() ?>/images/service1.png" class="service1" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/service2.png" class="service2" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/service3.png" class="service3" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/service4.png" class="service4" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/service5.png" class="service5" alt="">
			<img src="<?php echo get_template_directory_uri() ?>/images/service6.png" class="service6" alt="">
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

		<section class="approach" id="approach">
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
						<h6>— Latest articles</h6>
					</div>
					<?php if ( have_posts() ):
						while ( have_posts() ): the_post(); ?>
					<div class="col-md-6">
						<div class="articles">
						  	<div class="articleImg"><img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt=""></div>
						  	<div class="card-body">
						    	<h5 class="card-title"><?php the_title(); ?></h5>
						    	<span><?php the_time() ?></span><span><?php the_date(); ?></span>
						    	<a href="/blog" class="bg1">Blog</a>
						    	<a href="<?php the_permalink(); ?>" class="bg2">Read More
						    	</a>
						  	</div>
						</div>
					</div>
					<?php endwhile;endif; ?>
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
					<div class="col-md-6">
						<form method="POST" action="">
							<input class="btn btn-info" type="submit" value="English" name="english">
							<input class="btn btn-info" type="submit" value="Arabic" name="arabic">
						</form>
					</div>
				</div>
			</div>
		</footer>


	<?php wp_footer() ?>

<?php get_footer() ?>