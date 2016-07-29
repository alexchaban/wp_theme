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
 * Template Name: ATS Guide page
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
              <?php if(!empty(get_field( "ats_guide_video_logo_headline_01" ))) { ?>
              <picture>
                <img src="<?php echo get_field( "ats_guide_video_logo_headline_01" ); ?>" alt="scout" />
              </picture>
              <?php } ?>
          </div>
          <span>
              <?php 
                if(!empty(get_field( "ats_guide_video_logo_txt_headline_01" ))) {
                  echo get_field( "ats_guide_video_logo_txt_headline_01" );
                }
               ?>
          </span>
          <div class="img-wrap">
              <?php if(!empty(get_field( "ats_guide_video_logo_headline_02" ))) { ?>
              <picture>
                <img src="<?php echo get_field( "ats_guide_video_logo_headline_02" ); ?>" alt="oracle &reg; taleo" />
              </picture>
              <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <main role="main">
      <div id="twocolumns">
        <aside class="aside">
          <ul class="tabset tabset2">
            <?php
              $posts = get_field( "ast_guide_menu" );
              $count = 1;
              foreach ($posts as $post) { 
                  ?>
                    <li class="active">
                      <a href="#tab<?php echo $count;?>">
                        <picture style="padding-top: 45px; display: block;">
                          <?=get_the_post_thumbnail($post->ID, 'post-thumbnail', array( 'class' => 'opacity' ))?>
                        </picture>  
                        <span><?php if(!empty($post->post_title)) echo $post->post_title ?></span>
                      </a>
                    </li>
                  <?php
                $count++;
              }
              unset($post);
            ?>
          </ul>
        <?php if(!empty(get_field( "performance_video_thumbnail" ))) { ?>
        <div class="video-container">
          <div class="video">
            <a class="lightbox fancybox.iframe" href="<?php echo get_field( "performance_video" ); ?>">
              <picture>
                <img src="<?php echo get_field( "performance_video_thumbnail" ); ?>" alt="scout best data. best recruiters" />
              </picture>
            </a>
          </div>
        </div>
        <?php } ?>

          <?php if(!empty(get_field( "ast_video_file" ))) { ?>
          <div class="video-block">
            <a  class="lightbox fancybox.iframe" href="<?=get_field( "ast_video_file" );?>">
              <?php if(!empty(get_field( "ast_video_thumbnail" ))) { ?>
              <img src="<?=get_field( "ast_video_thumbnail" );?>" height="200" width="313" alt="image description">
              <?php } ?>
              <div class="content">
                <?php 
                  if(!empty(get_field( "ast_video_headline_01" ))) { 
                    echo "<strong>".get_field( "ast_video_headline_01" )."</strong>";
                  }
                ?>
                <span class="icon-play"></span>
                <?php 
                  if(!empty(get_field( "ast_video_headline_02" ))) { 
                    echo "<strong>".get_field( "ast_video_headline_02" )."</strong>";
                  }
                ?>
              </div>
            </a>
          </div>
          <?php } ?>
          <a class="chat-block" href="#">
            <div class="content">
              <span class="icon-whatsapp"></span>
                <?php 
                  if(!empty(get_field( "ast_chat_headline" ))) { 
                    echo "<strong>".get_field( "ast_chat_headline" )."</strong>";
                  }
                ?>
            </div>
          </a>
        </aside>
        <div class="tab-content">
            <?php
              $posts = get_field( "ast_guide_menu" );
              $count = 1;
              foreach ($posts as $post) { 
                  ?>
                  <div id="tab<?php echo $count;?>" class="tab">
                    <?php if(!empty($post->post_content)) echo $post->post_content ?>
                  </div>
                  <?php
                $count++;
              }
              unset($post);
            ?>
        </div>
      </div>
    </main>
    </div>
<?php

get_footer();