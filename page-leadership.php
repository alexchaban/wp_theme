<?php
/**
 * The leadership template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Leadership page
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
              if(!empty(get_field( "leadership_video_headline" ))) {
                echo "<h1>".get_field( "leadership_video_headline" )."</h1>";
              }

              if(!empty(get_field( "leadership_video_description" ))) {
                echo "<div class=\"description\">".get_field( "leadership_video_description" )."</div>";
              }
            ?>
          </div>
        </div>
      </div>
      <main role="main">
          <div class="top-content">
          <div class="container">
            <div class="intro">
            <?php
              if(!empty(get_field( "leadership_sub_video_description" ))) {
                echo get_field( "leadership_sub_video_description" );
              }
            ?>
            </div>
          </div>
          <div class="wrapper leaders">
            <div class="row">
              <div class="container">
                <div class="img-wrap">
                <?php if(!empty(get_field( "leadership_photo_01" ))) { ?>
                  <a href="#">
                    <img src="<?php echo get_field( "leadership_photo_01" ); ?>" alt="image description">
                  </a>
                  <?php } ?>
                </div>
                <div class="description">
                  <?php
                    if(!empty(get_field( "leadership_name_01" ))) {
                      echo "<h2><a href=\"#\">".get_field( "leadership_name_01" )."</a>";
                        if(!empty(get_field( "leadership_position_01" ))) {
                          echo "<span>".get_field( "leadership_position_01" )."</sapn>";
                        }
                      echo "</h2>";
                    }

                    if(!empty(get_field( "leadership_bio_01" ))) {
                      echo get_field( "leadership_bio_01" );
                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="container">
                <div class="img-wrap">
                <?php if(!empty(get_field( "leadership_photo_02" ))) { ?>
                  <a href="#">
                    <img src="<?php echo get_field( "leadership_photo_02" ); ?>" alt="image description">
                  </a>
                  <?php } ?>
                </div>
                <div class="description">
                  <?php
                    if(!empty(get_field( "leadership_name_02" ))) {
                      echo "<h2><a href=\"#\">".get_field( "leadership_name_02" )."</a>";
                        if(!empty(get_field( "leadership_position_02" ))) {
                          echo "<span>".get_field( "leadership_position_02" )."</sapn>";
                        }
                      echo "</h2>";
                    }

                    if(!empty(get_field( "leadership_bio_02" ))) {
                      echo get_field( "leadership_bio_02" );
                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="container">
                <div class="img-wrap">
                  <?php if(!empty(get_field( "leadership_photo_03" ))) { ?>
                  <a href="#">
                  <img src="<?php echo get_field( "leadership_photo_03" ); ?>" alt="image description">
                  </a>
                  <?php } ?>
                </div>
                <div class="description">
                  <?php
                    if(!empty(get_field( "leadership_name_03" ))) {
                      echo "<h2><a href=\"#\">".get_field( "leadership_name_03" )."</a>";
                        if(!empty(get_field( "leadership_position_03" ))) {
                          echo "<span>".get_field( "leadership_position_03" )."</sapn>";
                        }
                      echo "</h2>";
                    }

                    if(!empty(get_field( "leadership_bio_03" ))) {
                      echo get_field( "leadership_bio_03" );
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-wrapper">
          <?php
            if(!empty(get_field( "leadership_bottom_headline" ))) {
              echo "<h2>".get_field( "leadership_bottom_headline" )."</h2>";
            }
          ?>
          <div class="row">
            <div class="col">
              <?php
                if(!empty(get_field( "leadership_bottom_block_left" ))) {
                  echo "<a href='".get_field('leadership_bottom_block_left_link')."'><span>".get_field( "leadership_bottom_block_left" )."</span></a>";
                }
              ?>
            </div>
            <div class="col">
              <?php
                if(!empty(get_field( "leadership_bottom_block_left" ))) {
                  echo "<a href='".get_field('leadership_bottom_block_right_link')."'><span>".get_field( "leadership_bottom_block_right" )."</span></a>";
                }
              ?>
            </div>
          </div>
        </div>
      </main>
    </div>
<?php

get_footer();