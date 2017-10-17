<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Apogee_Physicians
 */

get_header(); ?>
	<section class="hero home">
		<div class="hero-container">
			<div class="hero-content">
				<h1 data-aos="fade-down" data-aos-easing="ease" data-aos-duration="750" data-aos-once="true"><span>Top of the Curve in</span> Hospital Medicine</h1>
				<p class="p-wrap" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="750" data-aos-delay="750" data-aos-once="true">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
				<div class="button-container" data-aos-offset="0" data-aos="zoom-in" data-aos-easing="ease" data-aos-duration="750" data-aos-delay="1500" data-aos-once="true">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>careers" class="btn first orange">Careers</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>services" class="btn outline-white">Services</a>
				</div>
			</div>
		</div>
		<div class="hero-quote">
			<p>“What's best for the <span>Patient</span> is best for the <span>Practice</span>.”   ™</p>
		</div>
	</section>
	<section class="main-content">
		<div class="career-container wrap group">
			<div class="half first" data-aos-offset="75" data-aos="fade-down" data-aos-duration="750" data-aos-once="true">
				<a href="#">
					<img src="<?php bloginfo('template_directory'); ?>/_images/career-map.png" alt="..."/>
				</a>
			</div>
			<div class="half" data-aos-offset="75" data-aos="fade-down" data-aos-duration="750" data-aos-once="true" data-aos-delay="500">
				<h2 class="blue">Work with Apogee</h2>
				<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
				<a href="#" class="btn orange">Join Now</a>
			</div>
		</div>
		<div class="services-container group">
			<div class="wrap">
				<div class="half first services-content" data-aos-offset="75" data-aos="fade-up" data-aos-duration="750" data-aos-delay="500" data-aos-once="true">
					<h2>We Provide the Best Services</h2>
					<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.  it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
					<a href="#" class="btn orange">View Our Services</a>
				</div>
				<div class="half services-image" data-aos-offset="75" data-aos="fade-up" data-aos-duration="750" data-aos-once="true">
					<!-- <ul class="carousel">
						<li><img src="http://placehold.it/500x500" alt="..." /></li>
						<li><img src="http://placehold.it/500x500" alt="..." /></li>
						<li><img src="http://placehold.it/500x500" alt="..." /></li>
					</ul> -->
					<img src="http://placehold.it/750x500" alt="..." />
				</div>
			</div>
		</div>
		<div class="grid-container">
			<div class="wrap" style="max-width: 54em;">
				<div>
					<h2 class="blue">Apogee at a Glance</h2>
					<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
				</div>
				<ul class="three-list group stats">
					<li class="grid-one">
						<figure>
							<svg width="175" height="175" viewBox="0 0 440 440">
								<defs>
									<mask id="mask" x="0" y="0" width="100" height="100" >
										<rect x="80" y="-140" rx="140" ry="140" width="280" height="500"/>
									</mask>
								</defs>
								<circle cx="220" cy="220" r="180"/>
								<circle class="stat" cx="220" cy="220" r="180" transform="rotate(-90,220,220)"/>
							</svg>
							<figcaption>
								<span id="counter_one">100</span>
								<h5>Physician - Owned</h5>
							</figcaption>
						</figure>
					</li>
					<li class="grid-two">
						<div id="counter_two">
							<span>146</span><h5>Largest Customer</h5>
						</div>
					</li>
					<li class="grid-three">
						<div id="counter_three">
							<span>65</span><h5>Largest Program</h5>
						</div>
					</li>
					<li class="grid-four">
						<figure>
							<svg width="175" height="175" viewBox="0 0 440 440">
								<defs>
									<mask id="mask" x="0" y="0" width="100" height="100" >
										<rect x="80" y="-140" rx="140" ry="140" width="280" height="500"/>
									</mask>
								</defs>
								<circle cx="220" cy="220" r="180"/>
								<circle class="stat-2" cx="220" cy="220" r="180" transform="rotate(-90,220,220)"/>
							</svg>
							<figcaption>
								<span id="counter_four">90</span>
								<h5>New Program Staffing</h5>
							</figcaption>
						</figure>
					</li>
					<li class="grid-five">
						<figure>
							<svg width="175" height="175" viewBox="0 0 440 440">
								<defs>
									<mask id="mask" x="0" y="0" width="100" height="100" >
										<rect x="80" y="-140" rx="140" ry="140" width="280" height="500"/>
									</mask>
								</defs>
								<circle cx="220" cy="220" r="180"/>
								<circle class="stat-3" cx="220" cy="220" r="180" transform="rotate(-90,220,220)"/>
							</svg>
							<figcaption>
								<span id="counter_five">100</span>
								<h5>Of Shifts Covered</h5>
							</figcaption>
						</figure>
					</li>
					<li class="grid-six">
						<figure>
							<svg width="175" height="175" viewBox="0 0 440 440">
								<defs>
									<mask id="mask" x="0" y="0" width="100" height="100" >
										<rect x="80" y="-140" rx="140" ry="140" width="280" height="500"/>
									</mask>
								</defs>
								<circle cx="220" cy="220" r="180"/>
								<circle class="stat-4" cx="220" cy="220" r="180" transform="rotate(-90,220,220)"/>
							</svg>
							<figcaption>
								<span id="counter_six">97</span>
								<h5>Shifts Covered by Non-Locums</h5>
							</figcaption>
						</figure>
					</li>
				</ul>
				<div class="button-container" data-aos="flip-up" data-aos-easing="ease" data-aos-duration="750" data-aos-once="true">
					<a href="#" class="btn first blue">View Our Careers</a>
					<a href="#" class="btn outline-blue">View Our Services</a>
				</div>
			</div>
		</div>
		<div class="carousel-container">
			<h2>Physician Testimonials</h2>
			<ul class="carousel-list carousel">
				<li>
					<div class="testimonial-container group">
						<div class="third first">
							<img src="http://placehold.it/500x500" alt="..." data-aos="fade-up-right" data-aos-duration="750" data-aos-once="true" />
						</div>
						<div class="two-third" data-aos="fade-up-left" data-aos-duration="750" data-aos-delay="400" data-aos-once="true">
							<h3>Jamie Upegui Gomez <span>MD</span></h3>
							<p>Apogee is a great company that offers valuable resources and benefits to me as a physician. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="testimonial-container group">
						<div class="third first">
							<img src="http://placehold.it/500x500" alt="..." data-aos="fade-up-right" data-aos-duration="750" data-aos-once="true" />
						</div>
						<div class="two-third" data-aos="fade-up-left" data-aos-duration="750" data-aos-delay="400" data-aos-once="true">
							<h3>Jamie Upegui Gomez <span>MD</span></h3>
							<p>Apogee is a great company that offers valuable resources and benefits to me as a physician. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="testimonial-container group">
						<div class="third first">
							<img src="http://placehold.it/500x500" alt="..." data-aos="fade-up-right" data-aos-duration="750" data-aos-once="true" />
						</div>
						<div class="two-third" data-aos="fade-up-left" data-aos-duration="750" data-aos-delay="400" data-aos-once="true">
							<h3>Jamie Upegui Gomez <span>MD</span></h3>
							<p>Apogee is a great company that offers valuable resources and benefits to me as a physician. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>

<?php
get_footer();
