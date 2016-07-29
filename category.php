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
        <?php 
          $queried_object = get_queried_object(); 
          $taxonomy = $queried_object->taxonomy;
          $term_id = $queried_object->term_id;  

          
            
        ?>
        <img src="<?php the_field('category_thumbnail', $taxonomy . '_' . $term_id);?>"  class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">
        </div>
        <div class="container">
          <div class="text-holder">
              <h1><?php single_cat_title(); ?></h1>
              <?php echo category_description(); ?>
          </div>
          </div>
        </div>
      </div>
      <main role="main">
        <?php 
          if (is_category('news')){
            get_template_part('template-parts/category-news-template');
          }
          elseif (is_category('videos')) {
            get_template_part('template-parts/category-videos-template');
          }
          else{
            get_template_part('template-parts/category-simple-template');
          }
        ?>
        <?php if (!(is_category('homepage-news-module'))) { ?>
        <div class="btn-wrapper">

          <h2><?php the_field('bottom_headline', $taxonomy . '_' . $term_id);?></h2>
          <div class="row">
            <div class="col">
              <a href="<?php the_field('bottom_left_link_href', $taxonomy . '_' . $term_id);?>">
                <?php the_field('bottom_left_link_text', $taxonomy . '_' . $term_id);?>
              </a>
            </div>
            <div class="col">
              <a href="<?php the_field('bottom_right_link_href', $taxonomy . '_' . $term_id);?>">
                <?php the_field('bottom_right_link_text', $taxonomy . '_' . $term_id);?>
              </a>
            </div>
          </div>
        </div>
        <?php } ?>
      </main>
    </div>
<?php

get_footer();
