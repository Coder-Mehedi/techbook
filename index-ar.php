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
	            		'theme_location'  => 'menu-2',
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
						<h2>نحن نبدأ حيث تنتهي الكتب</br><span>تِكْ بُوكْ</span><p>شريكك الاستشاري المفضل.</p></h2>
						<a href="<?php echo $button_url ? $button_url : '#services'; ?>">الخدمات</a>
					</div>
					<div class="col-md-12">
						<h6 href="#">حول تِك بُوك</h6>
						<h3>يقدم تك بوك للمدراء التنفيذيين ثروة من الخدمات الاستشارية في القيادة واتخاذ القرارات الإستراتيجية والمالية والتقنية الهامة.</h3>
						<p>يساعد تك بوك المدراء التنفيذيين على إدارة خططهم المؤسسية ومشروعاتهم الاستراتيجية بفعالية، مدعمًا بمعرفة نظرية سليمة وخبرة عملية ضرورية.</p>
						<p>يهدف تك بوك إلى تخفيض المخاطر التي تواجه المدراء التنفيذيين والشركات إلى الحد الأدنى و بلورة المؤسسة لتبقى الشركة المفضلة.</p>
						<p>سيدعم تك بوك المدراء التنفيذيين للبقاء في المنافسة على مدى السنوات العشر القادمة.</p>
						
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
						<h5>قابل المؤسس</h5>
						<h3><span>(</span>أبو خالد<span>)</span>عدنان علي النقي</h3>
						<div  class="author">
							<img src="<?php echo $founder_photo['url'] ?>" alt="<?php echo $founder_photo['alt'] ?>">
							<h6>مؤسس<span>-</span>المدير التنفيذي</h6>
						</div>
						<hr>
                        
						<p class="textMb">عدنان مواطن فخور من دولة الإمارات العربية المتحدة. ولد في دبي عام ١٩٦٧ و تخرج من كلية الهندسة الكهربائية. عدنان رائد على على المستوى القيادي والإداري و يتمتع بخبرة أكثر من ٢٥عاماً.</p>
						<h3>المهارات القيادة</h3>
						<hr>
                        
						<p class="text0">
                            عدنان مفكر استراتيجي يستطيع أن يحقق التوازن بين الأهداف الطويلة المدى والتحديات القصيرة المدى. يتمتع عدنان بخبرة قوية في مواجهة التحديات المتعلقة بالفرق المتعددة الجنسيات والثقافات كما انه يحمل العديد من الإنجازات المتميزة مثل جائزة "الموظف الحكومي المتميز" من قبل حكومة دبي.

يتمتع عدنان بخبرة واسعة في:
                        </p>
						<ul class="text1">
							<li>استراتيجية تطوير وتنظيم الموارد البشرية</li> 
							<li>تطوير سياسة الموارد البشرية</li> 
							<li>التدقيق في الموارد البشرية والتخطيط الإستراتيجي ومهارات القيادة المتقدمة</li>
							<li>تغيير الإدارة وإعادة هيكلة المؤسسات</li>
							<li>إدارة وتنمية المواهب</li>
							<li>التدريب الجماعي و تسهيل ورش العمل</li>
							<li>تسهيل ورش العمل</li>
<!--							<li>إدارة المكافآت</li>-->
						</ul>
						<ul class="text2">
							<li>إدارة الأداء و الكفاءة</li> 
							<li>إدارة المكافآت</li> 
							<li>برامج تطوير المهارات القيادية</li>
							<li>تقييم وتطوير النظم والمشاريع الحالية أو المقترحة</li>
							<li>توجيه الموظفين الفنيين والإداريين متعددي الثقافات والمهارات</li>
							<li>تنظيم الموارد وتحديد أولويات العمل</li>
						</ul>
						<h4>أيضًا، يتمتع عدنان بخبرة في إدارة عمليات المؤسسات مثل:</h4>
						<ul class="text4">
							<li>إدارة المشاريع</li> 
							<li>إدارة الصفقات التجارية والعقود</li>
							<li>تطوير وتقييم المقترحات التجارية والتقنية</li> 
							<li>ادارة تكنولوجيا المعلومات</li> 
							<li>إيجاد وتأمين طرق تمويل وإمدادات بديلة</li>
						</ul>
						<h3>المهارات التقنية</h3>
						<hr>
						<p class="text3">يتمتع عدنان بخبرة واسعة في:<span>(ENEC)</span>و مؤسسة الإمارات للطاقة النووية<span>(DEWA)</span>عمل عدنان في مناصب إدارية وهندسية عليا في منظمات حكومية عريقة في الإمارات العربية المتحدة كهيئة كهرباء ومياه دبي</p>
						<ul class="text5">
							<li>.تشغيل وصيانة محطات النقل والتوزيع</li>
							<li>.إدارة مشاريع محطات النقل والتوزيع</li>
							<li>.إدارة مشاريع محطات توليد ونقل الطاقة النووية</li>
							<li>.تصميم وصناعة و شحن وبناء محطات توليد الطاقة</li>
							<li>.إدارة المشاريع البحرية العملاقة</li> 
							<li>.الامتثال للسياسة النووية لدولة الإمارات العربية المتحدة</li>
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
						<h5>الخدمات —</h5>
					</div>
					<div class="col-md-6">
						<h3>الاستشارات القيادية</h3>
						<hr>
						<p>.تهدف تك بوك إلى تخفيض المخاطر التي تواجه المدراء التنفيذيين والمؤسسات إلى الحد الأدنى مع بلورة المؤسسة لتبقى الشركة المفضلة. تدعم تك بوك المدراء التنفيذيين للبقاء في المنافسة على مدى السنوات العشر القادمة</p>
					</div>
					<div class="col-md-6">
						<h3>الاستشارات الفنية</h3>
						<hr>
						<p>تساعد تك بوك المدراء التنفيذيين على تحليل وتقييم واختيار أفضل الحلول و التقنيات المتاحة لتنفيذ مشاريع توليد و نقل و توزيع الطاقة بالاضافة الى المشاريع البحرية</p>
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
						<h5>المنهج</h5>
						<hr>
<p>.تسعى تك بوك إلى تقديم خدماتها باحترافية مع التركيز على دعم المستثمرين و المدراء التنفيذيين لتطوير الإستراتيجيات والمناهج والإجراءات التي تقلل من المخاطر التي تواجههم وتنفيذ أعمالهم بشكل منهجي</p>
					</div>
					<div class="col-md-7 mt-100">
						<h5>خواطر المؤسس</h5>
						<hr>
						<h6>أحدث المقالات —</h6>
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
						<form method="POST">
							<input class="btn btn-info" type="submit" value="English" name="english">
							<input class="btn btn-info" type="submit" value="Arabic" name="arabic">
						</form>
					</div>
				</div>
			</div>
		</footer>


	<?php wp_footer() ?>

<?php get_footer() ?>