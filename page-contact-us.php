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
 * Template Name: Contact Us page
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
            if(!empty(get_field( "contact_us_headline" ))) {
              echo "<h1>".get_field( "contact_us_headline" )."</h1>";
            }

            if(!empty(get_field( "contact_us_description" ))) {
              echo get_field( "contact_us_description" );
            }
          ?>
        </div>
      </div>
    </div>
    <main role="main">
      <div class="top-content container">
        <?php
          if(!empty(get_field( "contact_us_sub_description" ))) {
            echo get_field( "contact_us_sub_description" );
          }
        ?>
      </div>
      <div class="contact-form two-columns">
        <div class="intro container">
          <?php
            if(!empty(get_field( "contact_us_offices" ))) {
              echo get_field( "contact_us_offices" );
            }
          ?>
        </div>
        <div class="container column" style="background: #ddd">
          <div class="content-holder">
            <div class="form entry-form">
              
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
                        <option selected="selected">I am a...</option>
                        <option>Select option 2</option>
                        <option>Select option 3</option>
                        <option>Select option 4</option>
                      </select>
                    </span>
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
      
      <div class="location-section">
        
        <?php 
          $args = array (
            'category_name'=>'office_locations',
            'posts_per_page' => '3'
          );
          $the_query = new WP_Query( $args );

          // The Loop
          if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
              $the_query->the_post(); ?>
              <div class="address-hold">
                <?php echo the_post_thumbnail('full', array('class' => 'bg-stretch'))?>
                <address class="container">
                  <strong><?php echo get_the_title();?></strong> <?php echo get_the_content();?>
                </address>
              </div>
            <?php
          }} else {
            // no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();
         ?>
      </div>
    </main>
  </div>
<?php

get_footer();