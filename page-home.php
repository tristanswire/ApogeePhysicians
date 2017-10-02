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
				<h1 data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-duration="1000"><span>Top of the Curve in</span> Hospital Medicine</h1>
				<p class="p-wrap" data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="750">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
				<div class="button-container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>careers" class="btn first orange" data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="2250">Careers</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>services" class="btn outline-white" data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="2750">Services</a>
				</div>
			</div>
		</div>
		<div class="hero-quote quote-wow">
			<p>“What's best for the <span>Patient</span> is best for the <span>Practice</span>.” <span class="tm">&trade;</span></p>
		</div>
	</section>
	<section class="main-content">
		<div class="career-container wrap group">
			<div class="half first">
				<a href="#">
					<img src="<?php bloginfo('template_directory'); ?>/_images/career-map.png" alt="..."/>
				</a>
			</div>
			<div class="half">
				<h2 class="blue">Work with Apogee</h2>
				<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
				<a href="#" class="btn orange">Join Now</a>
			</div>
		</div>
		<div class="services-container group">
			<div class="left-container first">
				<div class="services-content">
					<h2>We Provide the Best Services</h2>
					<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.  it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
					<a href="#" class="btn orange">View Our Services</a>
				</div>
			</div>
			<div class="right-container">
				<ul class="carousel">
					<li><img src="http://placehold.it/500x600" alt="..." /></li>
					<li><img src="http://placehold.it/500x600" alt="..." /></li>
					<li><img src="http://placehold.it/500x600" alt="..." /></li>
				</ul>
			</div>
		</div>
		<div class="grid-container">
			<div class="wrap">
				<h2 class="blue">Apogee at a Glance</h2>
				<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
				<ul class="three-list group stats">
					<li>
						<figure>
							<svg width="440" height="440" viewBox="0 0 440 440">
								<defs>
									<mask id="mask" x="0" y="0" width="100" height="100" >
										<rect x="80" y="-140" rx="140" ry="140" width="280" height="500"/>
									</mask>
								</defs>
								<circle cx="220" cy="220" r="180"/>
								<circle class="stat" cx="220" cy="220" r="180" transform="rotate(-90,220,220)"/>
							</svg>
							<figcaption>
								<span>100</span>
							</figcaption>
							<p>100%<span>Physician - Owned</span></p>
						</figure>
						<p>100%<span>Physician - Owned</span></p>
					</li>
					<li>
						<p>146 FTES<span>Largest Customer</span></p>
					</li>
					<li>
						<p>65 FTES<span>Largest Program</span></p>
					</li>
					<li>
						<p>90%<span>New Program Staffing</span></p>
					</li>
					<li>
						<p>100%<span>Of Shifts Covered</span></p>
					</li>
					<li>
						<p>97%<span>Shifts Covered by Non-Locums</span></p>
					</li>
				</ul>
				<div class="button-container">
					<a href="#" class="btn first orange">View Our Careers</a>
					<a href="#" class="btn outline-orange">View Our Services</a>
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
