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
				<h1 data-aos="fade-down" data-aos-easing="ease" data-aos-duration="1000"><span>Top of the Curve in</span> Hospital Medicine</h1>
				<p class="p-wrap" data-aos="fade-up" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="750">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
				<div class="button-container" data-aos="flip-up" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="1500">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>careers" class="btn first orange">Careers</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>services" class="btn outline-white">Services</a>
				</div>
			</div>
		</div>
		<div class="hero-quote quote-wow">
			<p>“What's best for the <span>Patient</span> is best for the <span>Practice</span>.” <span class="tm">&trade;</span></p>
		</div>
	</section>
	<section class="main-content">
		<div class="career-container lg-wrap group">
			<div class="half first" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="1000">
				<a href="#">
					<img src="<?php bloginfo('template_directory'); ?>/_images/career-map.png" alt="..."/>
				</a>
			</div>
			<div class="half" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="500" data-aos-delay="750">
				<h2 class="blue">Work with Apogee</h2>
				<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
				<a href="#" class="btn orange">Join Now</a>
			</div>
		</div>
		<div class="services-container group">
			<div class="left-container first" data-aos="fade-right" data-aos-easing="ease" data-aos-duration="500">
				<div class="services-content">
					<h2>We Provide the Best Services</h2>
					<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.  it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
					<a href="#" class="btn orange">View Our Services</a>
				</div>
			</div>
			<div class="right-container" data-aos="fade-left" data-aos-easing="ease" data-aos-duration="500" data-aos-delay="750">
				<ul class="carousel">
					<li><img src="http://placehold.it/500x500" alt="..." /></li>
					<li><img src="http://placehold.it/500x500" alt="..." /></li>
					<li><img src="http://placehold.it/500x500" alt="..." /></li>
				</ul>
			</div>
		</div>
		<div id="waypoint" class="grid-container">
			<div class="wrap" style="max-width: 54em;">
				<div data-aos="fade-down" data-aos-easing="ease" data-aos-duration="500" data-aos-delay="750">
					<h2 class="blue">Apogee at a Glance</h2>
					<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
				</div>
				<ul class="three-list group stats">
					<li data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="500">
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
								<span id="animate_circle_one">0</span>
								<h5>Physician - Owned</h5>
							</figcaption>
						</figure>
					</li>
					<li data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="1000">
						<div id="counter_one">
							<span>0</span><h5>Largest Customer</h5>
						</div>
					</li>
					<li data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="1500">
						<div id="counter_two">
							<span>0</span><h5>Largest Program</h5>
						</div>
					</li>
					<li data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="2000">
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
							<figcaption id="animate_circle_two">
								<span>0</span>
								<h5>New Program Staffing</h5>
							</figcaption>
						</figure>
					</li>
					<li data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="2250">
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
							<figcaption id="animate_circle_three">
								<span>0</span>
								<h5>Of Shifts Covered</h5>
							</figcaption>
						</figure>
					</li>
					<li data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="3000">
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
							<figcaption id="animate_circle_four">
								<span>0</span>
								<h5>Shifts Covered by Non-Locums</h5>
							</figcaption>
						</figure>
					</li>
				</ul>
				<div class="button-container" data-aos-easing="ease" data-aos-duration="500">
					<a href="#" class="btn first orange" data-aos="flip-up">View Our Careers</a>
					<a href="#" class="btn outline-orange" data-aos="flip-up">View Our Services</a>
				</div>
			</div>
		</div>
		<div class="testimonial-container">
			<h2>Physician Testimonials</h2>
			<ul class="carousel-testimonial carousel">
				<li>
					<div class="carousel-content">
						<img src="http://placehold.it/500x500" alt="..." />
						<div>
							<h3>Jamie Upegui Gomez <span>MD</span></h3>
							<p>Apogee is a great company that offers valuable resources and benefits to me as a physician. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="carousel-content">
						<img src="http://placehold.it/500x500" alt="..." />
						<div>
							<h3>Jamie Upegui Gomez <span>MD</span></h3>
							<p>Apogee is a great company that offers valuable resources and benefits to me as a physician. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="carousel-content">
						<img src="http://placehold.it/500x500" alt="..." />
						<div>
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
