<?php
/**
 * The performance template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Performance page
 * @package scout
 */

get_header(); 

/*echo '<pre>';
var_dump(  );
die();*/
?>

    <div id="wrapper">
      <div class="banner add">
        <div class="bg-stretch">
          <!-- <span data-srcset="images/img12-small.jpg, images/img12-small-2x.jpg 2x"></span> -->
          <!-- <span data-srcset="images/img12.jpg" data-media="(min-width: 768px)"></span> -->
          <?php // echo the_post_thumbnail()?>
        </div>
        <div class="container">
          <div class="text-holder">
            <?php
              if(!empty(get_field( "performance_video_headline" ))) {
                echo "<h1>".get_field( "performance_video_headline" )."</h1>"; 
              }

              if(!empty(get_field( "performance_video_description" ))) {
                echo "<div class=\"description\">".get_field( "performance_video_description" )."</div>";
              }
             ?>
          </div>
          </div>
        </div>
      </div>
      <main role="main">
        <div class="main-container test">
          <div class="intro-block">
            <?php
              if(!empty(get_field( "performance_headline_01" ))) {
                echo "<h2>".get_field( "performance_headline_01" )."</h2>"; 
              }

              if(!empty(get_field( "performance_description_01" ))) {
                echo get_field( "performance_description_01" );
              }
             ?>
          </div>
        </div>
        <?php if(!empty(get_field( "performance_video" ))) { ?>
        <div class="video-container">
          <div class="video">
            <?php  echo get_field('performance_video'); ?>
          </div>
        </div>
        <?php } ?>
        <div class="main-container">
          <?php
            if(!empty(get_field( "performance_headline_02" ))) {
              echo "<h2>".get_field( "performance_headline_02" )."</h2>"; 
            }

            if(!empty(get_field( "performance_description_02" ))) {
              echo get_field( "performance_description_02" );
            }
          ?>
        </div>
        <div class="two-columns same-height-parent" style="background: url(<?php echo get_template_directory_uri();?>/images/img13.jpg) 50% 50% / cover !important;">
          <article class="column same-height-block">
            <div class="bg-stretch">
              <span data-srcset="<?php echo get_template_directory_uri();?>/images/img14-small.jpg, <?php echo get_template_directory_uri();?>/images/img14-small-2x.jpg 2x"></span>
              <span data-srcset="<?php echo get_template_directory_uri();?>/images/img14.jpg" data-media="(min-width: 768px)"></span>
            </div>
            <div class="content-holder">
	        <div class="equalize">
              <?php
                if(!empty(get_field( "performance_register_left_block_headline" ))) {
                  echo "<h1>".get_field( "performance_register_left_block_headline" )."</h1>"; 
                }

                if(!empty(get_field( "performance_register_left_block_description" ))) {
                  echo "<div class='text-wrap'>".get_field( "performance_register_left_block_description" )."</div>"; 
                }?>
                <div class="form-elements">
                  <?php if(!empty(get_field( "performance_register_left_block_button" ))) {
                    echo "<a href='".get_field('register_left_block_button_link')."' class='btn btn-orange'>".get_field( "performance_register_left_block_button" )."</a>"; 
                  } ?>
                </div>
	        </div>
            </div>
          </article>
          <div class="column same-height-block form-column">
            <div class="bg-stretch">
              <span data-srcset="<?php echo get_template_directory_uri();?>/images/img15-small.jpg, <?php echo get_template_directory_uri();?>/images/img15-small-2x.jpg 2x"></span>
              <span data-srcset="<?php echo get_template_directory_uri();?>/images/img15.jpg" data-media="(min-width: 768px)"></span>
            </div>
            <div class="content-holder">
              <div class="form entry-form">
                <?php
                  if(!empty(get_field( "performance_register_right_block_headline" ))) {
                    echo "<h1>".get_field( "performance_register_right_block_headline" )."</h1>"; 
                  }

                  if(!empty(get_field( "performance_register_right_block_description" ))) {
                    echo get_field( "performance_register_right_block_description" ); 
                  }
                ?>
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
        <div class="content-t performance-bottom">
            <?php
              if(!empty(get_field( "performance_headline_03" ))) {
                echo "<div class=\"highlight-text\">".get_field( "performance_headline_03" )."</div>"; 
              }

              if(!empty(get_field( "performance_description_03" ))) {
                echo "<div class=\"definition\">".get_field( "performance_description_03" )."</div>";
              }

              if(!empty(get_field( "performance_bottom_image" ))) {
                echo "<img src='".get_field( "performance_bottom_image" )."' alt='' >";
              }
            ?>
        </div>
      </main>
    </div>
<?php

get_footer();
