<?php
/**
 * The Demo template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Demo Page
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
              if(!empty(get_field( "demo_video_headline" ))) {
                echo "<h1>".get_field( "demo_video_headline" )."</h1>";
              }

              if(!empty(get_field( "demo_video_description" ))) {
                echo get_field( "demo_video_description" );
              }
             ?>
          </div>
        </div>
      </div>
      <main role="main">
        <div class="top-content">
          <section class="demo-section">
            <?php
              if(!empty(get_field( "demo_sub_video_description" ))) {
                echo get_field( "demo_sub_video_description" );
              }
            ?>
            <div class="row">
              <div class="width-restriction">
                <?php 
                  $posts = get_field( "demo_module" );
                  $count = 1;
                  if($posts)
                  {
                    foreach ($posts as $post) {
                      $logo = get_field(demo_logo);
                      $link = get_field(demo_link);
                        ?>
                          <div class="col">
                            <div class="block height same-height-left">
                              <div class="frame">
                                <div class="icon-wrap">
                                    <picture>
                                      <img src="<?=$logo['url'];?>" alt="image description">
                                    </picture>
                                </div>
                                <a href="<?php if(!empty(get_field('view_more_button_link'))){echo get_field('view_more_button_link');}else{echo get_permalink();}?>" class="btn-try"><?=$link;?></a>
                              </div>
                            </div>
                          </div>
                        <?php
                      $count++;
                    }
                    unset($post);
                  }
                ?>
              </div>
            </div>
          </section>
          <div class="testimonial-block">
            <div class="holder">
              <h1><?php echo get_field( "testimonials_header" );?></h1>
              <div class="slideshow-container">
                <div class="slideshow">
                  <div class="slideset">
                    <?php
                      $posts = get_field( "testimonials" );
                      if(!empty($posts))
                      {
                        foreach ($posts as $post) { 
                            ?>
                              <div class="slide">
                                <?php echo apply_filters('the_content', $post->post_content)?>
                              </div>
                            <?php
                          $count++;
                        }
                        unset($post);
                      }
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
        </div>
      </main>
    </div>
<?php

get_footer();