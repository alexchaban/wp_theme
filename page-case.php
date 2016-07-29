<?php
/**
 * The Case template file.
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
              if(!empty(get_field( "case_video_headline" ))) {
                echo "<h1>".get_field( "case_video_headline" )."</h1>";
              }

              if(!empty(get_field( "case_video_description" ))) {
                echo get_field( "case_video_description" );
              }
            ?>
          </div>
        </div>
      </div>
      <main role="main">
        <section class="demo-section">
          <?php
            if(!empty(get_field( "case_sub_video_description" ))) {
              echo "<h2>".get_field( "case_sub_video_description" )."</h2>";
            }
          ?>
          <div class="row">
            <div class="case-width-restriction">
              <?php 
                $posts = get_field( "case_module" );
                $count = 1;
                if($posts)
                {
                  foreach ($posts as $post) {
                    $link = get_field("case_link_01");
                    $title = get_field(case_headline);
                    $content = get_field(case_description);
                    $link_headline_01 = get_field(case_link_headline_01);
                    $link_headline_02 = get_field(case_link_headline_02);

              ?>
              <div class="col">
                <article class="block block-case height same-height-left" style="height: 208px; padding-top: 10px;">
                  <?php
                    if(!empty($title) && !empty($content))
                    {
                      if(!empty($title)) echo "<h3 class=\"ellipsis\">".$title."</h3>";
                      if(!empty($content)) {
                        $content_wo_tags = strip_tags($content);
                        $content = strlen($content_wo_tags) > 50 ? "<div class=\"description height\"><p>".substr($content_wo_tags,0,280)."</p></div>" : "<div class=\"description height\">".$content."</div>";

                        echo $content;
                      }

                      if(!empty($link_headline_01) || !empty($link_headline_02))
                      {
                        echo "<div class=\"link-wrap\">";
                        if(!empty($link_headline_01)) {
                          echo "<a href=\"".$link[0]->guid."\" class=\"btn-gray first\">".$link_headline_01."</a>";
                        }
                       
                        if(!empty($link_headline_01) && !empty($link_headline_02)) {
                          echo "<span>|</span>";
                        }

                        if(!empty($link_headline_02)) {
                          echo "<a href=\"#\" class=\"btn-gray second\">".$link_headline_02."</a>";
                        }
                        echo "</div>";
                      }
                    }
                  ?>
                </article>
              </div>

                      <?php
                    $count++;
                  }
                  unset($post);
                }
              ?>
              <!-- <div class="col">
                <article class="block block-case height same-height-left" style="height: 208px;">
                  <h3>Epstein</h3>
                  <div class="description height">
                    <p>
                      Epstein is a global architectural engineering and construction firm that struggled to find senior level project and site managers without having to do a retained search. Learn how they reduced their costs and fill times for key, high-level positions with Scout.
                    </p>
                  </div>
                  <div class="link-wrap">
                    <a href="#" class="btn-gray first">View Study</a>  <span>|</span>  <a href="#" class="btn-gray second">Download »</a>
                  </div>
                </article>
              </div>
              
              <div class="col">
                <article class="block block-case height same-height-left" style="height: 208px;">
                  <h3>Epstein</h3>
                  <div class="description height">
                    <p>
                      Epstein is a global architectural engineering and construction firm that struggled to find senior level project and site managers without having to do a retained search. Learn how they reduced their costs and fill times for key, high-level positions with Scout.
                    </p>
                  </div>
                  <div class="link-wrap">
                    <a href="#" class="btn-gray first">View Study</a>  <span>|</span>  <a href="#" class="btn-gray second">Download »</a>
                  </div>
                </article>
              </div> -->
            </div>
          </div>
        </section>
        <div class="btn-wrapper">
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod.</h2>
          <div class="row">
            <div class="col">
              <a href="#">
                <span>News</span>
              </a>
            </div>
            <div class="col">
              <a href="#">
                <span>Videos</span>
              </a>
            </div>
          </div>
        </div>
      </main>
    </div>
<?php

get_footer();