<?php
/**
 * The ATS Guide template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Who We Are page
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
						if(!empty(get_field( "who_we_are_headline" ))) {
							echo "<h1>".get_field( "who_we_are_headline" )."</h1>";
						}

						if(!empty(get_field( "who_we_are_description" ))) {
							echo get_field( "who_we_are_description" );
						}
					?>
				</div>
			</div>
		</div>
		<main role="main">
			<div class="top-content container">
				<?php
					if(!empty(get_field( "who_we_are_sub_description" ))) {
						echo get_field( "who_we_are_sub_description" );
					}
				?>
			</div>
			<div class="who-we-are">
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
			
			<div class="two-columns same-height-parent" style="background: url(images/img38.jpg) 50% 50% / cover">
				<article class="column hide-on-mob same-height-block">
					<div class="bg-stretch">
						<span data-srcset="<?php echo get_template_directory_uri() .'/images/img39-small.jpg'?>, <?php echo get_template_directory_uri() .'/images/img39-small-2x.jpg'?> 2x"></span>
						<span data-srcset="<?php echo get_template_directory_uri() .'/images/img39.jpg'?>" data-media="(min-width: 768px)"></span>
					</div>
					<div class="content-holder">
						<div class="equalize">
							<?php
								if(!empty(get_field( "who_we_are_sub_free_demo" ))) {
									echo get_field( "who_we_are_sub_free_demo" );
								}
							?>
						
						<a href="<?php echo get_field( "who_we_are_free_demo_link" ); ?>" class="btn btn-orange"><?php echo get_field( "who_we_are_free_demo_text" ); ?></a>
						</div>
					</div>
				</article>
				<div class="column same-height-block">
					<div class="bg-stretch">
						<span data-srcset="<?php echo get_template_directory_uri() .'/images/img40-small.jpg'?>, <?php echo get_template_directory_uri() .'/images/img40-small-2x.jpg'?> 2x"></span>
						<span data-srcset="<?php echo get_template_directory_uri() .'/images/img40.jpg'?>" data-media="(min-width: 768px)"></span>
					</div>
					<div class="content-holder">
						<div class="equalize">
							<div class="text-wrap ">
								<?php
									if(!empty(get_field( "who_we_are_team" ))) {
										echo get_field( "who_we_are_team" );
									}
								?>
							</div>
						
						
						<a href="<?php echo get_field( "who_we_are_meet_the_team_link" ); ?>" class="btn btn-blue"><?php echo get_field( "who_we_are_meet_the_team_text" ); ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="location-section">
				<div class="intro container">
					<?php
						if(!empty(get_field( "who_we_are_offices" ))) {
							echo get_field( "who_we_are_offices" );
						}
					?>
				</div>
				<?php 
					$args = array (
						'category_name'=>'office_locations',
						'posts_per_page' => '3'
					);
					$the_query = new WP_Query( $args );

					// The Loop
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); ?>
							<div class="address-hold">
								<?php echo the_post_thumbnail('full', array('class' => 'bg-stretch'))?>
								<address class="container">
									<strong><?php echo get_the_title();?></strong> <?php echo get_the_content();?>
								</address>
							</div>
						<?php
					}} else {
						// no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				 ?>
			</div>
			<div class="btn-wrapper container add dog-nas">
				<?php
					if(!empty(get_field( "who_we_are_last_block" ))) {
						echo "<h2>".get_field( "who_we_are_last_block" )."</h2>";
					}
				?>
				<div class="row">
					<div class="col">
						<a href='<?php echo get_field( "who_we_are_news_link" ); ?>'>
							<span><?php echo get_field( "who_we_are_news_text" ); ?></span>
						</a>
					</div>
					<div class="col">
						<a href="<?php echo get_field( "who_we_are_press_releases" ); ?>">
							<span><?php echo get_field( "who_we_are_press_releases_text" ); ?></span>
						</a>
					</div>
				</div>
			</div>
		</main>
	</div>
<?php

get_footer();