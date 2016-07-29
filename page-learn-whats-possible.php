<?php
/**
 * The Whatspossible template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Learn What's Possible page
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
              if(!empty(get_field( "whatspossible_video_headline" ))) {
                echo "<h1>".get_field( "whatspossible_video_headline" )."</h1>";
              }

              if(!empty(get_field( "whatspossible_video_description" ))) {
                echo get_field( "whatspossible_video_description" );
              }
             ?>
          </div>
        </div>
      </div>
      <main role="main">
        <div class="top-content">
          <div class="container">
            <?php
              if(!empty(get_field( "whatspossible_content_headline" ))) {
                echo "<h2>".get_field( "whatspossible_content_headline" )."</h2>";
              }

              if(!empty(get_field( "whatspossible_content_description" ))) {
                echo get_field( "whatspossible_content_description" );
              }
             ?>
          </div>
        </div>

        <?php get_template_part('template-parts/news-video-casestd')?>

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

        <div class="btn-wrapper">
          <?php 
            if(!empty(get_field( "whatspossible_bottom_headline" ))) {
              echo "<h2>".get_field( "whatspossible_bottom_headline" )."</h2>";
            }
          ?>
          <div class="row">
            <div class="col">
              <?php 
                if(!empty(get_field( "whatspossible_bottom_block_left_headline" ))) {
                  echo "<a href=".get_field( 'whatspossible_bottom_block_left_headline_link' )."><span>".get_field( "whatspossible_bottom_block_left_headline" )."</span></a>";
                }
              ?>
            </div>
            <div class="col">
              <?php 
                if(!empty(get_field( "whatspossible_bottom_block_right_headline" ))) {
                  echo "<a href=".get_field( 'whatspossible_bottom_block_right_headline_link' )."><span>".get_field( "whatspossible_bottom_block_right_headline" )."</span></a>";
                }
              ?>
            </div>
          </div>
        </div>
      </main>
    </div>
<?php

get_footer();