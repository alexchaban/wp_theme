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
 * Template Name: ATS page
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
            <div class="img-wrap">
              <?php if(!empty(get_field( "video_logo_headline_01" ))) { ?>
              <picture>
                <img src="<?php echo get_field( "video_logo_headline_01" ); ?>" alt="scout" />
              </picture>
              <?php } ?>
            </div>
            <span>
                <?php 
                  if(!empty(get_field( "video_logo_txt_headline_01" ))) {
                    echo get_field( "video_logo_txt_headline_01" );
                  }
                 ?>
            </span>
            <div class="img-wrap">
              <?php if(!empty(get_field( "video_logo_headline_02" ))) { ?>
              <picture>
                <img src="<?php echo get_field( "video_logo_headline_02" ); ?>" alt="oracle &reg; taleo" />
              </picture>
              <?php } ?>
            </div>
            <div class="description">
                <?php 
                  if(!empty(get_field( "video_description" ))) {
                    echo get_field( "video_description" );
                  }
                 ?>
            </div>
          </div>
        </div>
      </div>
      <main role="main">
        <div class="top-content">
          <div class="container">
            <div class="intro">
                <?php 
                  if(!empty(get_field( "video_sub_description" ))) {
                    echo get_field( "video_sub_description" );
                  }
                 ?>
            </div>
            <div class="threecolumn">
              <div class="row">
                <article class="col">
                  <div class="icon-wrap">
                    <?php if(!empty(get_field( "ats_block_icon_01" ))) { ?>
                      <img src="<?php echo get_field( "ats_block_icon_01" ); ?>" alt="image description" />
                    <?php } ?>
                  </div>
                    <?php
                      if(!empty(get_field( "ats_block_headline_01" ))) {
                        echo "<h1>".get_field( "ats_block_headline_01" )."</h1>";
                      }

                      if(!empty(get_field( "ats_block_description_01" ))) {
                        echo get_field( "ats_block_description_01" );
                      }
                    ?>
                </article>
                <article class="col">
                  <div class="icon-wrap">
                  <?php if(!empty(get_field( "ats_block_icon_02" ))) { ?>
                      <img src="<?php echo get_field( "ats_block_icon_02" ); ?>" alt="image description" />
                    <?php } ?>
                  </div>
                    <?php
                      if(!empty(get_field( "ats_block_headline_02" ))) {
                        echo "<h1>".get_field( "ats_block_headline_02" )."</h1>";
                      }

                      if(!empty(get_field( "ats_block_description_02" ))) {
                        echo get_field( "ats_block_description_02" );
                      }
                    ?>
                </article>
                <article class="col">
                  <div class="icon-wrap">
                  <?php if(!empty(get_field( "ats_block_icon_03" ))) { ?>
                      <img src="<?php echo get_field( "ats_block_icon_03" ); ?>" alt="image description" />
                    <?php } ?>
                  </div>
                    <?php
                      if(!empty(get_field( "ats_block_headline_03" ))) {
                        echo "<h1>".get_field( "ats_block_headline_03" )."</h1>";
                      }

                      if(!empty(get_field( "ats_block_description_03" ))) {
                        echo get_field( "ats_block_description_03" );
                      }
                    ?>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="works">
            <?php
              if(!empty(get_field( "ats_content_headline" ))) {
                echo "<h2>".get_field( "ats_content_headline" )."</h2>";
              }

              if(!empty(get_field( "ats_content_description" ))) {
                echo get_field( "ats_content_description" );
              }
            ?>
          </div>
        </div>
        <div class="two-columns same-height-parent ats-page-columns" style="background: url(<?php echo get_template_directory_uri();?>/images/img03.jpg) 50% 50% / cover">
          <article class="column same-height-block hide-on-mob" style="background: url(<?php echo get_template_directory_uri();?>/images/img08.jpg) 50% 50% / cover">
            <div class="content-holder">
	            <div class="equalize">
              <?php
                if(!empty(get_field( "ats_sub_content_block_left_headline" ))) {
                  echo "<h1>".get_field( "ats_sub_content_block_left_headline" )."</h1>";
                }

                if(!empty(get_field( "ats_sub_content_block_left_description" ))) {
                  echo "<div class='text-wrap'>".get_field( "ats_sub_content_block_left_description" )."</div>";
                }

                if(!empty(get_field( "ats_sub_content_block_left_button_01" )) || !empty(get_field( "ats_sub_content_block_left_button_02" ))) {
                  echo "<div class=\"btn-holder\">";
                    if(!empty(get_field( "ats_sub_content_block_left_button_01" ))) {
                      echo "<a href='".get_field('sub_content_block_left_button_01_link')."' class=\"btn btn-orange\">".get_field( "ats_sub_content_block_left_button_01" )."</a>";
                    }
                    if(!empty(get_field( "ats_sub_content_block_left_button_02" ))) {
                      echo "<a href='".get_field('sub_content_block_left_button_02_link')."' class=\"btn btn-white\">".get_field( "ats_sub_content_block_left_button_02" )."</a>";
                    }
                  echo "</div>";
                }
              ?>
            </div></div>
          </article>
          <div class="column same-height-block form-column" style="background: url(<?php echo get_template_directory_uri();?>/images/img09.jpg) 50% 50% / cover">
            <div class="content-holder">
              <div class="form entry-form">
                <?php
                  if(!empty(get_field( "ats_sub_content_block_right_headline" ))) {
                    echo "<h1>".get_field( "ats_sub_content_block_right_headline" )."</h1>";
                  }

                  if(!empty(get_field( "ats_sub_content_block_right_description" ))) {
                    echo get_field( "ats_sub_content_block_right_description" );
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
        <div class="testimonial-block" style="background: url(<?php echo get_template_directory_uri();?>/images/img24.jpg) no-repeat 100% 0 / cover">
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
        <div class="resources-section same-height">
          <div class="contaier">
            <div class="column">
              <a class="block height" href="<?php echo get_field('ats_additional_resource_link_01')?>">
                <div class="text">
                  <?php
                    if(!empty(get_field( "ats_additional_resource_headline_01" ))) {
                      echo "<h2>".get_field( "ats_additional_resource_headline_01" )."</h2>";
                    }

                    if(!empty(get_field( "ats_additional_resource_description_01" ))) {
                      echo get_field( "ats_additional_resource_description_01" );
                    }

                    if(!empty(get_field( "ats_additional_resource_link_01" ))) {
                      echo "<span class=\"download\">".get_field( "ats_additional_resource_href_01" )."</span>";
                    }
                  ?>
                </div>
              </a>
            </div>
            <div class="column">
              <a class="block height" href="<?php echo get_field('ats_additional_resource_link_02')?>">
                <div class="text">
                  <?php
                    if(!empty(get_field( "ats_additional_resource_headline_02" ))) {
                      echo "<h2>".get_field( "ats_additional_resource_headline_02" )."</h2>";
                    }

                    if(!empty(get_field( "ats_additional_resource_description_02" ))) {
                      echo get_field( "ats_additional_resource_description_02" );
                    }

                    if(!empty(get_field( "ats_additional_resource_link_02" ))) {
                      echo "<span class=\"download\">".get_field( "ats_additional_resource_href_02" )."</span>";
                    }
                  ?>
                </div>
              </a>
            </div>
            <div class="column">
              <a class="block height" href="<?php echo get_field('ats_additional_resource_link_03')?>">
                <div class="text">
                  <?php
                    if(!empty(get_field( "ats_additional_resource_headline_03" ))) {
                      echo "<h2>".get_field( "ats_additional_resource_headline_03" )."</h2>";
                    }

                    if(!empty(get_field( "ats_additional_resource_description_03" ))) {
                      echo get_field( "ats_additional_resource_description_03" );
                    }

                    if(!empty(get_field( "ats_additional_resource_link_03" ))) {
                      echo "<span class=\"download\">".get_field( "ats_additional_resource_href_03" )."</span>";
                    }
                  ?>
                </div>
              </a>
            </div>
          </div>
        </div>
      </main>
    </div>
<?php

get_footer();