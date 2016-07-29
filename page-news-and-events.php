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
              echo "<h1>".get_field( "headline" )."</h1>";
            }

            if(!empty(get_field( "description" ))) {
              echo get_field( "description" );
            }
          ?>
        </div>
      </div>
    </div>
    <main role="main">
      <section class="news-section">
        <div class="intro">
          <?php
            if(!empty(get_field( "sub_description" ))) {
              echo get_field( "sub_description" );
            }
          ?>
        </div>
        <div class="row same-height">
              <?php
                $posts = get_field( "news" );
                if(count($posts))
                {
                  $count = 1;
                  foreach ($posts as $post) {
                      ?>
                        <div class="col">
                          <article class="block height">
                            <time datetime="2016-01-04"><?php the_time('F j, Y'); ?></time>
                            <h3>
                              <a href="<?php echo get_permalink(); ?>">
                                <?php echo get_the_title();?>
                              </a>
                            </h3>
                            <p>
                              <?php echo the_excerpt();?>
                            </p>
                            <a href="<?php if(!empty(get_field('view_more_button_link'))){echo get_field('view_more_button_link');}else{echo get_permalink();}?>" class="news-read-more">
                              <?php 
                                if(!empty(get_field('view_more_button_text'))){
                                  echo get_field('view_more_button_text');
                                }
                                else{
                                  echo 'Read Full Article »';
                                }
                              ?>
                            </a>
                          </article>
                        </div>
                      <?php
                    $count++;
                  }
                  unset($post);
                }
              ?>
          <div class="clear"></div>
        </div>
        <div class="btn-hold">
          <a href="/category/news" class="btn btn-blue">View All Articles</a>
        </div>
      </section>
      <section class="events-section">
          <div class="intro">
            <?php
            if(!empty(get_field( "events_text" ))) {
              echo get_field( "events_text" );
            }
          ?>
          </div>
            <div class="event-holder">
              <?php
                $posts = get_field( "events" );
                if(count($posts))
                {
                  $count = 1;
                  foreach ($posts as $post) {
                      ?>
                        <div class="event">
                          <div class="meta">
                              <?php
                                if(!empty(the_excerpt())) {
                                  echo '<address>'.the_excerpt().'</address>';
                                }
                                if(!empty(get_field( "time" ))) {
                                  echo '<time datetime="P4D">'.get_field( "time" ).'</time>';
                                }
                              ?>
                          <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title();?></a></h3>
                        </div>
                      <?php
                    $count++;
                  }
                  unset($post);
                }
              ?>
            </div>
      </section>
      <div class="events-photos">
        <h2>Photos</h2>
        <ul class="photos">
          <?php
            $posts = get_field( "photos" );
            if(count($posts))
            {
              $count = 1;
              foreach ($posts as $post) {
                  ?>
                    <li>
                      <a href="<?php echo get_permalink();?>">
                        <?php 
                        if(!empty(get_field('gallery_thumbnail'))){
                          echo '<img src="'.get_field('gallery_thumbnail').'" alt="">';
                        }
                        else{
                          the_post_thumbnail();
                        }
                        ?>
                      </a>
                    </li>
                  <?php
                $count++;
              }
              unset($post);
            }
          ?>
        </ul>
        <div class="clear"></div>
      </div>
    </main>
  </div>
<?php

get_footer();