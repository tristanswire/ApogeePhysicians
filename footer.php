<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Apogee_Physicians
 */

?>

	</div><!-- #content -->

	<footer>
  		<div class="footer-content group">
    		<div class="footer-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	      			<img class="logo" src="<?php bloginfo('template_directory'); ?>/_images/ap-logo-white.png">
				</a>
        		<a href="https://www.google.com/maps/place/15059+N+Scottsdale+Rd+%23600,+Scottsdale,+AZ+85254/@33.6233264,-111.9277598,17z/data=!3m1!4b1!4m5!3m4!1s0x872b743faadc46e1:0xbc13b91f3b9f1426!8m2!3d33.6233264!4d-111.9255711">15059 N. Scottsdale Road <br /> Suite 600
    				<br />Scottsdale, AZ 85254
    			</a>
    		</div>
			<div class="footer-navigation">
				<div class="footer-links-holder">
					<h4>Apogee</h4>
					<ul class="footer-links">
						<li><a href="">Home</a></li>
						<li><a href="">Careers</a></li>
						<li><a href="">Services</a></li>
					</ul>
				</div>
      			<div class="footer-links-holder">
        			<h4>About Us</h4>
					<ul class="footer-links">
						<li><a href="">Apogee Story</a></li>
						<li><a href="">Apogee Culture</a></li>
						<li><a href="">Leadership</a></li>
					</ul>
      			</div>
				<div class="footer-links-holder">
					<h4>Portal</h4>
					<ul class="footer-links">
						<li><a href="">Patient Portal</a></li>
						<li><a href="">Apogee Login</a></li>
						<li><a href="">Apogee Store</a></li>
					</ul>
				</div>
				<div class="footer-links-holder">
					<h4>Contact Us</h4>
					<ul class="footer-links">
						<li><a href="">FAQ</a></li>
						<li><a href="">Contact Us</a></li>
						<li>
							<div class="social">
								<a href="https://www.facebook.com/" class="facebook">
									<?php include('_svg/icon-facebook-circle.php'); ?>
								</a>
								<a href="https://twitter.com/" class="twitter">
									<?php include('_svg/icon-twitter-circle.php'); ?>
								</a>
								<a href="https://www.linkedin.com/" class="linkedin">
									<?php include('_svg/icon-linkedin-circle.php'); ?>
								</a>
							</div>
						</li>
					</ul>
				</div>
    		</div>
  		</div>
  		<div class="bottom-bar">
    		<p>Apogee Physicians &copy; <?php echo date("Y"); ?></p>
  		</div>
	</footer>

	<!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_js/functions-min.js"></script>

</body>
</html>
