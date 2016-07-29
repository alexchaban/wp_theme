<?php
/**
 * The ATS template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Careers page
 * @package scout
 */

get_header(); 

?>
		<div id="wrapper">
			<div class="banner">
				<div class="bg-stretch">
					<?php // echo the_post_thumbnail()?>
				</div>
				<div class="container">
					<div class="text-holder">
						<?php
							if(!empty(get_field( "careers_video_headline" ))) {
								echo "<h1>".get_field( "careers_video_headline" )."</h1>";
							}

							if(!empty(get_field( "careers_video_description" ))) {
								echo "<div class=\"description\">".get_field( "careers_video_description" )."</div>";
							}
						?>
					</div>
				</div>
			</div>
			<main role="main">
				<div class="top-content">
					<div class="container">
						<?php
							if(!empty(get_field( "careers_video_headline" ))) {
								echo "<h2>".get_field( "careers_sub_video_headline" )."</h2>";
							}

							if(!empty(get_field( "careers_sub_video_description" ))) {
								echo get_field( "careers_sub_video_description" );
							}
						?>
					</div>
				</div>
				<div class="testimonials">
					<div class="container">
						<div class="tab-content">
								<?php
									$posts = get_field( "careers_testimonials" );
									$count = 1;
									foreach ($posts as $post) { 
											?>
												<div id="tab<?=$count; ?>" class="tab <?php if($count==1) echo 'active';?>">
													<div class="img-wrap">
														<picture>
															<?=get_the_post_thumbnail($post->ID)?>
														</picture>
													</div>
													<blockquote>
														<q>
														<?=$post->post_content?>
														</q>
														<cite>- <?=$post->post_title?></cite>
													</blockquote>
												</div>

											<?php
										$count++;
									}
									unset($post);
								?>
						</div>
						<div class="tabset3">
							<ul class="tabset">
								<?php
									$posts = get_field( "careers_testimonials" );
									$count = 1;
									foreach ($posts as $post) { 
										$name = $post->post_title;
											?>
												<li <?php if($count==1) echo 'class="active"';?>>
													<a href="#tab<?php echo $count; ?>">
														<div class="img-wrap">
															<picture>
																<?=get_the_post_thumbnail($post->ID, 'post-thumbnail', array( 'class' => 'grayscale' ))?>
															</picture>
														</div>
														<span class="name"><?=$name?></span>
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
				<div class="two-columns same-height-parent" style="background: url(<?php echo get_template_directory_uri();?>/images/img38.jpg) 50% 50% / cover">
					<article class="column same-height-block">
						<div class="bg-stretch">
							<span data-srcset="<?php echo get_template_directory_uri();?>/images/img39-small.jpg, <?php echo get_template_directory_uri();?>/images/img39-small-2x.jpg 2x"></span>
							<span data-srcset="<?php echo get_template_directory_uri();?>/images/img39.jpg" data-media="(min-width: 768px)"></span>
						</div>
						<div class="content-holder">
							<div class="equalize">
							<div class="text-wrap">
								<?php
									if(!empty(get_field( "careers_culture_values_text" ))) {
										echo get_field( "careers_culture_values_text" );
									}
								?>
							</div>
							<a href="<?php echo get_field( "careers_culture_values_btn_link" ); ?>" class="btn btn-orange">See what we are about</a>
						</div></div>
					</article>
					<div class="column same-height-block">
						<div class="bg-stretch">
							<span data-srcset="<?php echo get_template_directory_uri();?>/images/img40-small.jpg, <?php echo get_template_directory_uri();?>/images/img40-small-2x.jpg 2x"></span>
							<span data-srcset="<?php echo get_template_directory_uri();?>/images/img40.jpg" data-media="(min-width: 768px)"></span>
						</div>
						<div class="content-holder">
							<div class="equalize">
							<div class="text-wrap">
								<?php
									if(!empty(get_field( "careers_perks_text" ))) {
										echo get_field( "careers_perks_text" );
									}
								?>
							</div>
							<a href="<?php echo get_field( "careers_perks_btn_link" ); ?>" class="btn btn-blue">See What scout has to offer</a>
						</div></div>
					</div>
				</div>
				<div class="position-block">
					<div class="container">
						<?php
							if(!empty(get_field( "careers_content" ))) {
								echo get_field( "careers_content" );
							}

							if(!empty(get_field( "careers_content_button_text" ))) {
								echo "<a href=".get_field('careers_content_button_link')." class=\"btn-yellow\">".get_field( "careers_content_button_text" )."</a>";
							}
						?>
					</div>
				</div>
				<div class="image-thumbs">
					<div class="heading-holder">
						<?php
							if(!empty(get_field( "careers_content_headline" ))) {
								echo "<h2>".get_field( "careers_content_headline" )."</h2>";
							}
						?>
					</div>
					<div class="w1">
						<ul class="thubs-list gallery">
							<?php
								$posts = get_field( "careers_slide_row_one" );
								if(count($posts))
								{
									$count = 1;
									foreach ($posts as $post) {
											?>
												<li>
													<a href="<?=$post->guid?>" class="fbx-link">
														<picture>
															<img width="319" height="321" src="<?=$post->guid?>" alt="image description">
														</picture>
													</a>
												</li>
											<?php
										$count++;
									}
									unset($post);
								}
							?>
						</ul>
					</div>
					<div class="w2">
						<ul class="thubs-list gallery">
							<?php
								$posts = get_field( "careers_slide_row_two" );
								if(count($posts))
								{
									$count = 1;
									foreach ($posts as $post) {
											?>
												<li>
													<a href="<?=$post->guid?>" class="fbx-link">
														<picture>
															<img width="319" height="321" src="<?=$post->guid?>" alt="image description">
														</picture>
													</a>
												</li>
											<?php
										$count++;
									}
									unset($post);
								}
							?>
						</ul>
					</div>
				</div>
				<div class="btn-wrapper dog-nas add">
					<?php
						if(!empty(get_field( "careers_bottom_headline" ))) {
							echo "<h2>".get_field( "careers_bottom_headline" )."</h2>";
						}
					?>
					<div class="row">
						<div class="col">
							<?php
								if(!empty(get_field( "careers_bottom_block_left_title" ))) {
									echo "<a href='".get_field('careers_bottom_block_left_link')."'><span>".get_field( "careers_bottom_block_left_title" )."</span></a>";
								}
							?>
						</div>
						<div class="col">
							<?php
								if(!empty(get_field( "careers_bottom_block_right_title" ))) {
									echo "<a href='".get_field('careers_bottom_block_right_link')."'><span>".get_field( "careers_bottom_block_right_title" )."</span></a>";
								}
							?>
						</div>
					</div>
				</div>
			</main>
		</div>
<?php

get_footer();
