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