<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scout
 */

?>


	<footer id="footer">
		<div class="footer-top">
			<div class="sticky-block" data-visual="#visual">
				<div class="holder">
					<div class="block-r">
						<ul>
							<li><a href="/atsdemo">see scout live</a></li>
							<li><a href="#" class="orange">live chat</a></li>
							<li><a href="/careers" class="blue">careers</a></li>
						</ul>
					</div>
					<div class="block-l">
						<div class="footer-logo">
							<a href="/">
								<picture>
									<!--[if IE 9]>
									<video style="display: none;">
										<![endif]-->
										<source srcset="<?php echo get_template_directory_uri();?>/images/footer-logo-mob.png, <?php echo get_template_directory_uri();?>/images/footer-logo-mob-2x.png 2x" media="(max-width: 767px)">
											<source srcset="<?php echo get_template_directory_uri();?>/images/footer-logo-mob.png">
										<!--[if IE 9]>
									</video>
									<![endif]-->
									<img src="<?php echo get_template_directory_uri();?>/images/footer-logo-mob.png" alt="scout">
								</picture>
							</a>
						</div>
						<div class="contact"><span>contact</span><a href="tel:6175355030" class="tel">617.535.5030</a></div>
					</div>
				</div>
			</div>
			<div class="footer-logo-wrap">
				<div class="footer-logo">
					<a href="#">
						<picture>
							<!--[if IE 9]>
							<video style="display: none;">
								<![endif]-->
								<source srcset="<?php echo get_template_directory_uri();?>/images/footer-logo-mob.png 2x" media="(max-width: 767px)">
								<!--[if IE 9]>
							</video>
							<![endif]-->
							<img src="<?php echo get_template_directory_uri();?>/images/footer-logo-mob.png" alt="scout">
						</picture>
					</a>
				</div>
			</div>
			<div class="four-cols">
				<div class="holder">
					<div class="col">
						<address>
							<span class="city">BOSTON</span><br>
							501 Boylston Street <br>
							Third Floor <br>
							Boston, MA 02116 <br>
							Phone: <a href="tel:6175355030" class="tel">617.535.5030</a> <br>
							Fax: 877.730.9080 <br>
						</address>
						<address>
							<span class="city">CHICAGO</span> <br>
							750 N. Orleans St <br>
							Suite #403 <br>
							Chicago, IL 60654 <br>
							Phone: <a href="tel:3125094399" class="tel">312.509.4399</a><br>
							Fax: 877.730.9080
						</address>
					</div>
					<div class="col">
						<nav class="footer-nav">
							<strong class="title">For Employers</strong>
							<?php wp_nav_menu(array( 'theme_location' => 'for_employers' ));?>
						</nav>
						<nav class="footer-nav">
							<strong class="title">For search firms</strong>
							<?php wp_nav_menu(array( 'theme_location' => 'for_search_firms' ));?>
						</nav>
					</div>
					<div class="col">
						<nav class="footer-nav">
							<strong class="title">WHO WE ARE</strong>
							<?php wp_nav_menu(array( 'theme_location' => 'who_we_are' ));?>
						</nav>
						<nav class="footer-nav">
							<strong class="title">LEARN WHAT’S POSSIBLE</strong>
							<?php wp_nav_menu(array( 'theme_location' => 'learn_whats_possible' ));?>
						</nav>
					</div>
					<div class="col">
						<span class="social-network">Follow Scout on <a href="https://www.linkedin.com/company/scout-exchange">LinkedIn</a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="holder">
				<span class="copyright">Copyright &copy; 2016 <a href="/">Scout Exchange</a></span>
			</div>
		</div>
	</footer>

</div> <!-- #Wrapper -->
<?php wp_footer(); ?>

</body>
</html>
