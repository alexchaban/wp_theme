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
 *
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
                if(!empty(get_field( "headline" ))) {
                  echo get_field( "headline" );
                }
              ?>
          </div>
          </div>
        </div>
      </div>
      <main role="main">
        <section class="block-section">
          <?php 
            if(!empty(get_field( "main_content" ))) {
              echo get_field( "main_content" );
            }
           ?>
          <div class="row same-height">
            <?php
              $posts = get_field( "careers_interior_posts" );
              if(!empty($posts))
              {
                foreach ($posts as $post) { 
                    ?>
                      <div class="col">
                        <a class="block height" href="<?php echo get_permalink();?>">
                          <div class="hover-img">
                            <img src="<?php echo get_field( "careers_interior_image" );?>" alt="">
                          </div>
                          <div class="frame">
                            <div class="icon-wrap">
                              <?=get_the_post_thumbnail($post->ID)?>
                            </div>
                            <strong class="title"><?php echo get_the_title();?></strong>
                          </div>
                        </a>
                      </div>
                    <?php
                  $count++;
                }
                unset($post);
              }
            ?>
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

        <div class="btn-wrapper dog-nas add">
          <?php 
            if(!empty(get_field( "whatspossible_bottom_headline" ))) {
              echo "<h2>".get_field( "whatspossible_bottom_headline" )."</h2>";
            }
          ?>
          <div class="row">
            <div class="col">
              <?php 
                if(!empty(get_field( "whatspossible_bottom_block_left_headline" ))) {
                  echo "<a href='".get_field('whatspossible_bottom_block_left_link')."'><span>".get_field( "whatspossible_bottom_block_left_headline" )."</span></a>";
                }
              ?>
            </div>
            <div class="col">
              <?php 
                if(!empty(get_field( "whatspossible_bottom_block_right_headline" ))) {
                  echo "<a href='".get_field('whatspossible_bottom_block_right_link')."'><span>".get_field( "whatspossible_bottom_block_right_headline" )."</span></a>";
                }
              ?>
            </div>
          </div>
        </div>
      </main>
    </div>
<?php

get_footer();
