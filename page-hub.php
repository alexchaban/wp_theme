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
 * Template Name: Hub page
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
              if(!empty(get_field( "hub_video_headline" ))) {
                echo "<h1>".get_field( "hub_video_headline" )."</h1>";
              }

              if(!empty(get_field( "hub_video_description" ))) {
                echo "<div class=\"description\">".get_field( "hub_video_description" )."</div>";
              }
             ?>
          </div>
          </div>
        </div>
      </div>
      <main role="main">
        <div class="top-content">
          <div class="container">
            <?php
              if(!empty(get_field( "hub_sub_video_headline" ))) {
                echo get_field( "hub_sub_video_headline" );
              }
             ?>
          </div>
        </div>
        <div class="new-scout">
          <div class="container">
            <?php
              if(!empty(get_field( "hub_needs_headline" ))) {
                echo "<h2>".get_field( "hub_needs_headline" )."</h2>";
              }

              if(!empty(get_field( "hub_needs_description" ))) {
                echo get_field( "hub_needs_description" );
              }
             ?>
            <div class="row">
              <div class="col">
              <?php
                if(!empty(get_field( "hub_needs_block_left_icon" )) && !empty(get_field( "hub_needs_block_left_link" ))) {
                  ?>
                  <a href="<?=get_field( "left_block_link" )?>" class="block">
                    <div class="content">
                      <div class="img-wrap">
                        <picture>
                          <img src="<?=get_field( "hub_needs_block_left_icon" )?>" alt="image description">
                        </picture>
                      </div>
                      <?=get_field( "hub_needs_block_left_link" )?>
                    </div>
                  </a>
                  <?php
                }
               ?>
              </div>
              <div class="col">
                <?php
                  if(!empty(get_field( "hub_needs_block_right_icon" )) && !empty(get_field( "hub_needs_block_right_link" ))) {
                    ?>
                    <a href="<?=get_field( "right_block_link" )?>" class="block">
                      <div class="content">
                        <div class="img-wrap">
                          <picture>
                            <img src="<?=get_field( "hub_needs_block_right_icon" )?>" alt="image description">
                          </picture>
                        </div>
                        <?=get_field( "hub_needs_block_right_link" )?>
                      </div>
                    </a>
                    <?php
                  }
                 ?>
              </div>
            </div>
          </div>
        </div>
        <div class="link-wrapper">
            <div class="col">
              <?php
                if(!empty(get_field( "hub_center_block_menu_left_headline" ))) {
                  echo "<h3>".get_field( "hub_center_block_menu_left_headline" )."</h3>";
                }

                if(!empty(get_field( "hub_center_block_menu_left_content" ))) {
                  echo get_field( "hub_center_block_menu_left_content" );
                }
               ?>
            </div>
            <div class="col">
              <?php
                if(!empty(get_field( "hub_center_block_menu_right_headline" ))) {
                  echo "<h3>".get_field( "hub_center_block_menu_right_headline" )."</h3>";
                }

                if(!empty(get_field( "hub_center_block_menu_right_content" ))) {
                  echo get_field( "hub_center_block_menu_right_content" );
                }
               ?>
            </div>
        </div>

        <div class="position-block">
          <div class="container">
            <?php
              if(!empty(get_field( "hub_sub_center_block_menu_headline" ))) {
                echo "<h2>".get_field( "hub_sub_center_block_menu_headline" )."</h2>";
              }

              if(!empty(get_field( "hub_sub_center_block_menu_description" ))) {
                echo get_field( "hub_sub_center_block_menu_description" );
              }

              if(!empty(get_field( "hub_sub_center_block_menu_link" ))) {
                echo "<a href=\"".get_field( "sub_center_block_menu_link" )."\" class=\"btn-yellow\">".get_field( "hub_sub_center_block_menu_link" )."</a>";
              }
             ?>
          </div>
        </div>

        <div class="image-thumbs">
          <div class="heading-holder">
            <?php
              if(!empty(get_field( "hub_slider_holder_above_headline" ))) {
                echo "<h2>".get_field( "hub_slider_holder_above_headline" )."</h2>";
              }

              if(!empty(get_field( "hub_slider_holder_above_button" ))) {
                echo "<a href=\"".get_field('slider_holder_above_button_link')."\" class=\"btn btn-gray\">".get_field( "hub_slider_holder_above_button" )."</a>";
              }
             ?>
          </div>
          <div class="w1">
            <ul class="thubs-list">
              <?php
                $posts = get_field( "hub_slide_row_one" );
                if(count($posts))
                {
                  $count = 1;
                  foreach ($posts as $post) {
                      ?>
                        <li>
                          <a href="#">
                            <img width="319" height="321" src="<?=$post->guid?>" alt="image description">
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
            <ul class="thubs-list">
              <?php
                $posts = get_field( "hub_slide_row_two" );
                if(count($posts))
                {
                  $count = 1;
                  foreach ($posts as $post) {
                      ?>
                        <li>
                          <a href="#">
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

        <div class="search-block">
          <?php
            if(!empty(get_field( "hub_slider_holder_sub_headline" ))) {
              echo "<h3>".get_field( "hub_slider_holder_sub_headline" )."</h3>";
            }

            if(!empty(get_field( "hub_slider_holder_sub_link" ))) {
              echo "<h4><a href=\"#\">".get_field( "hub_slider_holder_sub_link" )."</a></h4>";
            }

            if(!empty(get_field( "hub_slider_holder_sub_description" ))) {
              echo get_field( "hub_slider_holder_sub_description" );
            }
           ?>
        </div>

        <div class="partners">
          <div class="container">
            <?php
              if(!empty(get_field( "hub_bottom_headline" ))) {
                echo "<h5>".get_field( "hub_bottom_headline" )."</h5>";
              }
            ?>
            <div class="carousel">
              <div class="mask">
                <div class="slideset">
                  <?php
                    $posts = get_field( "hub_bottom_slider" );
                    if(count($posts))
                    {
                      $count = 1;
                      foreach ($posts as $post) {
                          ?>
                            <div class="slide">
                              <a href="#" target="_blank">
                                 <picture>
                                    <img src="<?=$post->guid?>" alt="logo">
                                  </picture>
                              </a>
                            </div>
                          <?php
                        $count++;
                      }
                      unset($post);
                    }
                  ?>
                </div>
              </div>
              <a class="controller btn-prev" href="#"><span class="icon-arrow-left"></span></a>
              <a class="controller btn-next" href="#"><span class="icon-arrow-right"></span></a>
            </div>
          </div>
        </div>
      </main>
    </div>
<?php

get_footer();