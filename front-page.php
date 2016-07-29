<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Homepage 
 * @package scout
 */

get_header(); ?>

			<section class="promo-block">
				<div class="top-block" id="visual">
					<div class="video-holder">
						<div class="main-holder video-container">
							<video width="1920" src='<?php echo get_field( "video" );?>' height="1080" controls preload="none" loop autoplay>
								<source type="video/mp4" src='<?php echo get_field( "video" );?>' />
								<!-- Flash fallback for non-HTML5 browsers without JavaScript -->
								<object width="1920" height="1080" type="application/x-shockwave-flash" data="js/flashmediaelement.swf">
									<param name="movie" value="js/flashmediaelement.swf" />
									<param name="flashvars" value="controls=true&amp;file=<?php echo get_field( "video" );?>" />
								</object>
							</video>
						</div>
						<div id="video-container-1" class="holder-left video-container">
							<video width="1920" src='<?php echo get_field( "left_video" );?>' height="1080" controls preload="auto" loop>
								<source type="video/mp4" src='<?php echo get_field( "left_video" );?>' />
								<!-- Flash fallback for non-HTML5 browsers without JavaScript -->
								<object width="1920" height="1080" type="application/x-shockwave-flash" data="js/flashmediaelement.swf">
									<param name="movie" value="js/flashmediaelement.swf" />
									<param name="flashvars" value="controls=true&amp;file=<?php echo get_field( "left_video" );?>" />
								</object>
							</video>
						</div>
						<div id="video-container-2" class="holder-right video-container">
							<video width="1920" src='<?php echo get_field( "right_video" );?>' height="1080" preload="auto" loop>
								<source type="video/mp4" src='<?php echo get_field( "right_video" );?>' />
								<source type="video/webm" src='<?php echo get_template_directory_uri() ."/media/video1.webm"?>' />
								<source type="video/ogg" src='<?php echo get_template_directory_uri() ."/media/video1.ogv"?>' />
								<!-- Flash fallback for non-HTML5 browsers without JavaScript -->
								<object width="1920" height="1080" type="application/x-shockwave-flash" data="js/flashmediaelement.swf">
									<param name="movie" value="js/flashmediaelement.swf" />
									<param name="flashvars" value="controls=true&amp;file=<?php echo get_field( "right_video" );?>" />
								</object>
							</video>
						</div>
					</div>
					<div class="heading-text">
						<h1><?php echo get_field( "video_headline" );?></h1>

						<p><?php echo get_field( "video_sub_header" );?></p>
					</div>
					<strong class="mouse"><span class="scroller"></span></strong>
				</div>
				<div class="two-cols same-height-parent">
					<div class="col orange same-height-block" data-video="#video-container-1">
						<div class="info-block">
							<div class="info-content">
								<h2>Scout For Employers</h2>
								<div class="text-wrap">
									<p><?php echo get_field( "scout_for_employers_description" );?></p>
								</div>
								<div class="btn-holder">
									<a href="<?php echo get_field('continue_for_employers_button_link')?>" class="btn">Continue for Employers</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col blue same-height-block" data-video="#video-container-2">
						<div class="info-block">
							<div class="info-content">
								<h2>Scout For Search Firms</h2>
								<div class="text-wrap">
									<p><?php echo get_field( "scout_for_search_firms_description" );?></p>
								</div>
								<div class="btn-holder">
									<a href="<?php echo get_field('continue_for_search_firms_button_link')?>" class="btn">Continue for Search Firms</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="who-we-are">
				<div class="holder">
					<div class="content-t">
						<div class="highlight-text">
							<?php echo get_field( "intro_text" );?>
						</div>
						<a href="<?php echo get_field( "intro_button_link" );?>" class="btn-learn"><?php echo get_field( "intro_button__text" );?></a>
					</div>
					<div class="tab-container">
						<div class="tab-content">
							<?php
								$posts = get_field( "software_module" );
								$count = 1;
								foreach ($posts as $post) { 
									$link = $post->guid;
									$src = get_field(software_homepage_screenshot);

									$alt = $post->post_title;
										?>
											<div id="tab<?php echo $count; ?>" class="tab">
												<div class="image-holder">
													<div class="image-frame">
														<img src='<?php echo $src[url];?>' height="<?php echo $src[height];?>" width="<?php echo $src[width];?>" alt="image description">
													</div>
												</div>
												<a href="<?php echo get_permalink();?>" class="btn-learn">See How It Works</a>
											</div>

										<?php
									$count++;
								}
								unset($post);
							?>
						</div>
						<strong class="title">We partner with the most popular ATS’s</strong>
						
						<ul class="tabset">
							<?php
								$posts = get_field( "software_module" );
// echo '<pre>';
// var_dump( count($posts) );
								$count = 1;
								foreach ($posts as $post) { 
									$link = $post->guid;
									$src = get_field(software_homepage_logo);
									$alt = $post->post_title;
										?>
											<li <?php if($count==1) echo 'class="active"' ; ?> >
												<a href="#tab<?php echo $count; ?>">
													<span>
														<?php echo $post->post_content;?>
														<img src="<?php echo $src['sizes']['thumbnail'];?>" height="<?php echo $src['sizes']['thumbnail-height'];?>" width="<?php echo $src['sizes']['thumbnail-width'];?>" alt="<?php echo $alt;?>">
													</span>
												</a>
											</li>
										<?php
									$count++;
								}
								unset($post);
							?>
						</ul>
					</div>
				</div>
			</div>
			<div class="about-block">
				<div class="container">
					<article class="article">
						<div class="icon-wrap icon1">
							<img src='<?php echo get_field( "benefits_top_left_icon" )['url'];?>' alt="image description">
						</div>
						<div class="description">
							<?php echo get_field( "benefits_top_left_text" );?>
						</div>
					</article>
					<article class="article">
						<div class="icon-wrap">
							<img src='<?php echo get_field( "benefits_top_right_icon" )['url'];?>' alt="image description">
						</div>
						<div class="description">
							<?php echo get_field( "benefits_top_right_text" );?>
						</div>
					</article>
					<article class="article">
						<div class="icon-wrap">
							<img src='<?php echo get_field( "benefits_bottom_left_icon" )['url'];?>' alt="image description">
						</div>
						<div class="description">
							<?php echo get_field( "benefits_bottom_left_text" );?>
						</div>
					</article>
					<article class="article">
						<div class="icon-wrap">
							<img src='<?php echo get_field( "benefits_bottom_right_icon" )['url'];?>' alt="image description">
						</div>
						<div class="description">
							<?php echo get_field( "benefits_bottom_right_text" );?>
						</div>
					</article>
				</div>
			</div>
			<div class="two-columns same-height-parent" style="background: url(<?php echo get_template_directory_uri();?>/images/img03.jpg) 50% 50% / cover">
				<article class="column same-height-block hide-on-mob" style="background: url(images/img08.jpg) 50% 50% / cover">
					<div class="content-holder">
						<div class="equalize">
							<h1><?php echo get_field( "demo_header_text" );?></h1>
							
								<?php echo get_field( "demo_paragraph_text" );?>
							<div class="form-elements">
								<a href="<?php echo get_field( "demo_button_link" );?>" class="btn btn-orange"><?php echo get_field( "intro_button_text" );?></a>
							</div>
						</div>
					</div>
				</article>
				<div class="column same-height-block form-column" style="background: url(<?php echo get_template_directory_uri();?>/images/img09.jpg) 50% 50% / cover">
					<div class="content-holder">
						<div class="form entry-form">
							<h1><?php echo get_field( "form_header" );?></h1>
							<?php echo get_field( "form_paragraph_text" );?>
							<div class="form-elements">
								<div class="row">
									<div class="col">
										<input type="text" placeholder="First Name*">
									</div>
									<div class="col">
										<input type="text" placeholder="Last Name*">
									</div>
								</div>
								<div class="row">
									<div class="col">
										<input type="email" placeholder="Email*">
									</div>
									<div class="col">
										<input type="text" placeholder="Company">
									</div>
								</div>
								<div class="row">
									<div class="col full">
										<span class="fake-select">
											<select id="select-1">
												<option selected="selected">Applicant Tracking System*</option>
												<option>Select option 2</option>
												<option>Select option 3</option>
												<option>Select option 4</option>
											</select>
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col full btn-wrap">
										<input type="submit" class="btn btn-blue" value="Let's Get Started">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php get_template_part('template-parts/news-video-casestd')?>
			
			<div class="testimonial-block" style="background: url(<?php echo get_template_directory_uri();?>/images/img07.jpg) no-repeat 0 0 / cover">
				<div class="holder">
					<h1><?php echo get_field( "testimonials_header" );?></h1>
					<div class="slideshow-container">
						<div class="slideshow">
							<div class="slideset">
								<?php
									$posts = get_field( "testimonials" );
									foreach ($posts as $post) { 
											?>
												<div class="slide">
													<?php echo apply_filters('the_content', $post->post_content)?>
												</div>
											<?php
										$count++;
									}
									unset($post);
								?>
							</div>
							<a class="controller btn-prev" href="#"><span class="icon-arrow-left"></span></a>
							<a class="controller btn-next" href="#"><span class="icon-arrow-right"></span></a>
							<div class="pagination">
								<!-- pagination generated here -->
							</div>
						</div>
					</div>
				</div>
			</div>

<?php

get_footer();
