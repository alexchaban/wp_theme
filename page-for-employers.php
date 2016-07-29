<?php
/**
 * The for-employers template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: For Employers page
 * @package scout
 */

get_header(); 

?>
    <div id="wrapper">
      <main role="main">
        <div class="intro-block">
          <div class="bg-stretch">
            <?php echo the_post_thumbnail()?>
          </div>
          <div class="container">
            <div class="text emp-intro-text" style="float:right;">
              <?php
                if(!empty(get_field( "for_employers_headline_01_(part_1)" )) || !empty(get_field( "for_employers_headline_01_(part_2)" ))) {
                  echo "<h1>";
                  if(!empty(get_field( "for_employers_headline_01_(part_1)" )))
                    echo "<span>".get_field( "for_employers_headline_01_(part_1)" )." </span>";
                  if(!empty(get_field( "for_employers_headline_01_(part_2)" )))
                    echo get_field( "for_employers_headline_01_(part_2)" );
                  echo "</h1>";
                }

                if(!empty(get_field( "for_employers_description_01" ))) {
                  echo get_field( "for_employers_description_01" );
                }
               ?>
            </div>
          </div>
          <div class="threecolumns orangeicons-bg">
            <div class="row same-height">
              <div class="col height">
                <div class="icon-wrap">
                  <?php if(!empty(get_field( "for_employers_icon_bar_01" ))) { ?>
                    <img src="<?php echo get_field( "for_employers_icon_bar_01" )['url']; ?>" alt="scout">
                  <?php } ?>
                </div>
                <?php 
                  if(!empty(get_field( "for_employers_icon_bar_description_01" ))) {
                    echo get_field( "for_employers_icon_bar_description_01" );
                  }
                 ?>
              </div>
              <div class="col height">
                <div class="icon-wrap">
                    <?php if(!empty(get_field( "for_employers_icon_bar_02" ))) { ?>
                      <img src="<?php echo get_field( "for_employers_icon_bar_02" )['url']; ?>" alt="scout">
                    <?php } ?>
                </div>
                <?php 
                  if(!empty(get_field( "for_employers_icon_bar_description_02" ))) {
                    echo get_field( "for_employers_icon_bar_description_02" );
                  }
                ?>
              </div>
              <div class="col height">
                <div class="icon-wrap">
                    <?php if(!empty(get_field( "for_employers_icon_bar_03" ))) { ?>
                      <img src="<?php echo get_field( "for_employers_icon_bar_03" )['url']; ?>" alt="scout">
                    <?php } ?>
                </div>
                <?php echo get_field( "for_employers_icon_bar_description_03" ); ?>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="main-block">
          <div class="container">
            <?php
              if(!empty(get_field( "for_employers_headline_02" ))) {
                echo "<h2>".get_field( "for_employers_headline_02" )."</h2>"; 
              }

              if(!empty(get_field( "for_employers_description_02" ))) {
                echo get_field( "for_employers_description_02" );
              }

              if(!empty(get_field( "for_employers_button_02" ))) {
                echo "<p><a class=\"btn-learn bluebtn\" href=\"".get_field( 'for_employers_button_link' )."\">".get_field( "for_employers_button_02" )."</a></p>";
              }
            ?>
          </div>
          <div class="wrapper">
            <div class="row">
              <div class="container">
                <div class="alignleft">
                  <img src="<?php echo get_field( "for_employers_image_03" ); ?>" alt="scout">
                </div>
                <div class="description">
                      <?php 
                        if(!empty(get_field( "for_employers_headline_03" ))) {
                          echo "<h3>".get_field( "for_employers_headline_03" )."</h3>";
                         }
                        if(!empty(get_field( "for_employers_description_03" ))) {
                          echo get_field( "for_employers_description_03" );
                        }
                      ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="container">
                <div class="alignright">
                  <img src="<?php echo get_field( "for_employers_image_04" ); ?>" alt="scout">
                </div>
                <div class="description">
                      <?php 
                        if(!empty(get_field( "for_employers_headline_04" ))) {
                          echo "<h3>".get_field( "for_employers_headline_04" )."</h3>";
                         }
                        if(!empty(get_field( "for_employers_description_04" ))) {
                          echo get_field( "for_employers_description_04" );
                        }
                      ?>
                </div>
              </div>
            </div>
          </div>
          <div class="wrapper">
            <div class="row">
              <div class="container">
                <div class="alignleft">
                  <img src="<?php echo get_field( "for_employers_image_05" ); ?>" alt="scout">
                </div>
                <div class="description">
                      <?php 
                        if(!empty(get_field( "for_employers_headline_05" ))) {
                          echo "<h3>".get_field( "for_employers_headline_05" )."</h3>";
                         }

                        if(!empty(get_field( "for_employers_description_05" ))) {
                         echo get_field( "for_employers_description_05" );
                        }
                      ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="resources">
          <div class="intro">
                      <?php 
                        if(!empty(get_field( "for_employers_headline_06" ))) {
                          echo "<h2>".get_field( "for_employers_headline_06" )."</h2>";
                         }

                        if(!empty(get_field( "for_employers_description_06" ))) {
                          echo "<div class=\"definition\">".get_field( "for_employers_description_06" )."</div>";
                        }
                      ?>
          </div>
          <div class="three-cols viewport-section emp-three-cols">
            <div class="row same-height">
              <div class="col">
                <a href="<?php echo get_field('for_employers_block_link_01'); ?>" class="height">
                  <div class="wrap">
                    <div class="intro-text">
                      <?php if(!empty(get_field( "for_employers_block_title_headline_01" ))) {
                        echo get_field( "for_employers_block_title_headline_01" );
                       }
                      ?>
                    </div>
                    <div class="description">
                      <?php if(!empty(get_field( "for_employers_block_title_description_01" ))) {
                        echo get_field( "for_employers_block_title_description_01" );
                       }
                      ?>
                      <span class="icon-circle-right"></span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="<?php echo get_field('for_employers_block_link_02'); ?>" class="height transparent">
                  <?php if(!empty(get_field( "for_employers_block_title_background_02" ))) { ?>
                  <img src="<?php echo get_field( "for_employers_block_title_background_02" ); ?>" alt="image description">
                 <?php } ?>
                  <div class="img-wrap">
                  </div>
                  <div class="wrap">
                    <div class="intro-text">
                      <?php if(!empty(get_field( "for_employers_block_title_headline_02" ))) {
                        echo get_field( "for_employers_block_title_headline_02" );
                       }
                      ?>
                    </div>
                    <div class="description">
                      <?php if(!empty(get_field( "for_employers_block_title_description_02" ))) {
                        echo get_field( "for_employers_block_title_description_02" );
                       }
                      ?>
                      <span class="icon-circle-right"></span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="<?php echo get_field('for_employers_block_link_03'); ?>" class="height">
                  <div class="wrap">
                    <div class="intro-text">
                    <?php if(!empty(get_field( "for_employers_block_title_logo_03" ))) { ?>
                      <img style="max-width: 300px;" src="<?php echo get_field( "for_employers_block_title_logo_03" ); ?>" alt="scout plus &reg;">
                    <?php } ?>
                    </div>
                    <div class="description">
                      <?php if(!empty(get_field( "for_employers_block_title_description_03" ))) {
                        echo get_field( "for_employers_block_title_description_03" );
                      }
                      ?>
                      <span class="icon-circle-right"></span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <div class="who-we-are">
          <div class="holder">
            <div class="">
              <?php 
                if(!empty(get_field( "for_employers_bottom_block_headline_01" ))) {
                  echo "<div class=\"highlight-text\"><h2>".get_field( "for_employers_bottom_block_headline_01" )."</h2></div>";
                 }

                if(!empty(get_field( "for_employers_bottom_block_description_01" ))) {
                  echo "<div class=\"definition\">".get_field( "for_employers_bottom_block_description_01" )."</div>";
                }
              ?>
            </div>
            <div class="tab-container">
              <div class="tab-content">
              <?php
                $posts = get_field( "for_employers_slider" );
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
                      </div>
                    <?php
                  $count++;
                }
                unset($post);
              ?>
              </div>
              <ul class="tabset1 tabset emp-tabset1" style="background: #ff813e;">
              <?php
                $posts = get_field( "for_employers_slider" );
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
              <a href="<?php echo get_field('partner_atss_link')?>" class="btn-learn"><?php echo get_field('partner_atss_text')?></a>
            </div>
          </div>
        </div>
      </main>
    </div>
<?php

get_footer();
