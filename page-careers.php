<?php
/**
 * Template Name: Careers
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

	<section class="hero careers">
		<div class="hero-container">
			<div class="hero-content">
				<h1><span>Become An</span> Apogee Hospitalist</h1>
				<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it’s a place to belong and call home.</p>
				<div class="button-container">
					<a href="#" class="btn orange">Join Now</a>
				</div>
			</div>
		</div>
		<div class="hero-quote">
			<p>“What's best for the <span>Patient</span> is best for the <span>Practice</span>.” <span class="tm">&trade;</span></p>
		</div>
	</section>
	<section class="list-container wrap">
		<h2 class="blue">Join the Apogee Family</h2>
		<p class="p-wrap">More than any single attribute, our culture is most responsible for our group’s success.</p>
		<ul class="three-list group">
			<li>
				<?php include('_svg/icon-heart.php'); ?>
				<h3 class="blue">Work Life Balance</h3>
				<p>Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind.</p>
			</li>
			<li>
				<?php include('_svg/icon-briefcase.php'); ?>
				<h3 class="blue">Career Development</h3>
				<p>Expand your mind with ongoing, innovative education through Apogee University and Program Director Academy.</p>
			</li>
			<li>
				<?php include('_svg/icon-clipboard.php'); ?>
				<h3 class="blue">Patients Come First</h3>
				<p>Our guiding vision of, What’s best for the Patient is best for the Practice™, gave rise to a belief system that put our patients and doctors first.</p>
			</li>
		</ul>
	</section>
	<section class="side-by-side bg-gray">
		<div class="wrap group">
			<div class="half full content">
				<h2>Become a Hospitalist</h2>
				<p>Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
				<div class="button-container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>careers" class="btn first">Work with Apogee</a>
					<a href="#" class="btn outline-blue">Find a Location</a>
				</div>
			</div>
			<div class="half full">
				<img src="<?php bloginfo('template_directory'); ?>/_images/physician.png" alt="An Apogee Physician"/>
			</div>
		</div>
	</section>
	<section class="custom-map">
		<div class="wrap">
			<h2>Explore Our Career Locations</h2>
		</div>
	</section>
	<section class="bg-gray">
		<div class="wrap">
			<h2 class="blue">Professional Development</h2>
			<p class="p-wrap">Apogee Physicians is dedicated to delivering the Apogee Promise for every patient, every time. The Promise is to provide excellent care through the pillars of Safety, Quality, Service, and Value.</p>
		</div>
	</section>
	<section class="container-full visa">
		<div class="wrap group">
			<h2 class="blue">Visa to Green Card</h2>
			<p class="p-wrap">Apogee has an in-house immigration attorney which enables us to sponsor physicians who are on a J-1 visa waiver, or a non-immigrant H-1B visa as we renew the H-1B visa.</p>
			<div class="sixty">
				<h3 class="blue">What Apogee Does for You</h3>
				<ul>
					<li>Covers the cost of services and filings</li>
					<li>Process the non-immigrant H-4 visa for a spouse and child/children</li>
					<li>Begin the permanent sponsorship from the first day an employment agreement is signed and received by our office, allowing our physicians to obtain their green card up to one year earlier than they would have otherwise</li>
				</ul>
				<div class="container-bottom group">
					<div class="half full">
						<h4>Jacqeline Gallina <span>Director of Physician Visa Relations</span></h4>
					</div>
					<div class="half full">
						<a href="mailto:visa@apogeephysicians.com">
							<?php include('_svg/icon-email.php'); ?>
							visa@apogeephysicians.com
						</a>
						<a href="tel:123-456-7890">
							<?php include('_svg/icon-phone.php'); ?>
							123-456-7890
						</a>
					</div>
				</div>
			</div>
			<div class="forty">
				<img src="<?php bloginfo('template_directory'); ?>/_images/physician-2.png" alt="An Apogee Physician"/>
			</div>
		</div>
	</section>
	<section class="container-background">
		<div class="wrap group">
			<h2 class="white">The Apogee Difference</h2>
			<p class="p-wrap white">Apogee has an in-house immigration attorney which enables us to sponsor physicians who are on a J-1 visa waiver, or a non-immigrant H-1B visa as we renew the H-1B visa.</p>
			<ul class="dropdown-list group">
				<li>
					<a href="#">
						Physician-Owned, Physician-Operated
						<?php include('_svg/icon-plus-box.php'); ?>
						<?php include('_svg/icon-minus-box.php'); ?>
					</a>
					<ul>
						<li><span></span>Apogee provides organizational stability and a supportive physician-led senior team</li>
						<li><span></span>Our Hospitalists report directly to other physicians who have worked in hospitals and understand the practice of medicine</li>
						<li><span></span>Additionally, our physicians are given the opportunity to network with some of the brightest leaders in Hospitalist medicine from programs across the country</li>
					</ul>
				</li>
				<li>
					<a href="#">
						Consistent Executive &amp; Physician Leadership
						<?php include('_svg/icon-plus-box.php'); ?>
						<?php include('_svg/icon-minus-box.php'); ?>
					</a>
					<ul>
						<li><span></span>Point #1</li>
						<li><span></span>Point #2</li>
						<li><span></span>Point #3</li>
					</ul>
				</li>
				<li>
					<a href="#">
						Top Reasons Physicians Join Apogee
						<?php include('_svg/icon-plus-box.php'); ?>
						<?php include('_svg/icon-minus-box.php'); ?>
					</a>
					<ul>
						<li><span></span>Patient-Centric Focus</li>
						<li><span></span>Physician-Owned &amp; Operated</li>
						<li><span></span>Family-Oriented Culture</li>
					</ul>
				</li>
				<li>
					<a href="#">
						Compensation &amp; Benefits
						<?php include('_svg/icon-plus-box.php'); ?>
						<?php include('_svg/icon-minus-box.php'); ?>
					</a>
					<ul>
						<li><span></span>Our compensation package ensures you are rewarded as a senior member from your first day with the group</li>
						<li><span></span>Complete benefits package that includes medical, dental, vision, 401K, CME and Malpractice and tail coverage.</li>
					</ul>
				</li>
				<li>
					<a href="#">
						Ongoing Professional Development &amp; Clinical Training
						<?php include('_svg/icon-plus-box.php'); ?>
						<?php include('_svg/icon-minus-box.php'); ?>
					</a>
					<ul>
						<li><span></span>Point #1</li>
						<li><span></span>Point #2</li>
						<li><span></span>Point #3</li>
					</ul>
				</li>
				<li>
					<a href="#">
						Proprietary End-To-End IT Platform
						<?php include('_svg/icon-plus-box.php'); ?>
						<?php include('_svg/icon-minus-box.php'); ?>
					</a>
					<ul>
						<li><span></span>Point #1</li>
						<li><span></span>Point #2</li>
						<li><span></span>Point #3</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
	<section class="container">
		<div class="wrap group">
			<h2>The Apogee Difference</h2>
			<ul class="top group">
				<li>
					<span>01</span>
					<h3>Physician-Owned, Physician-Operated</h3>
					<p>Apogee provides organizational stability and a supportive physician-led senior team. Our Hospitalists report directly to other physicians who have worked in hospitals and understand the practice of medicine. Additionally, our physicians are given the opportunity to network with some of the brightest leaders in Hospitalist medicine from programs across the country.</p>
					<p>Additionally, our physicians are given the opportunity to network with some of the brightest leaders in Hospitalist medicine from programs across the country.</p>
				</li>
				<li>
					<span>02</span>
					<h3>Consistent Executive &amp; Physician Leadership</h3>
					<ul class="inside">
						<li><span></span>Patient-Centric Focus</li>
						<li><span></span>Physician-Owned &amp; Operated</li>
						<li><span></span>Family-Oriented Culture</li>
					</ul>
				</li>
				<li>
					<span>03</span>
					<h3>Top Reasons Physicians Join Apogee</h3>
					<ul class="inside">
						<li><span></span>Patient-Centric Focus</li>
						<li><span></span>Physician-Owned &amp; Operated</li>
						<li><span></span>Family-Oriented Culture</li>
					</ul>
				</li>
				<li>
					<span>04</span>
					<h3>Compensation &amp; Benefits</h3>
					<p>Our compensation package ensures you are rewarded as a senior member from your first day with the group. Complete benefits package that includes medical, dental, vision, 401K, CME and Malpractice and tail coverage.</p>
				</li>
				<li>
					<span>05</span>
					<h3>Ongoing Professional Development &amp; Clinical Training</h3>
					<ul class="inside">
						<li><span></span>Patient-Centric Focus</li>
						<li><span></span>Physician-Owned &amp; Operated</li>
						<li><span></span>Family-Oriented Culture</li>
					</ul>
				</li>
				<li>
					<span>06</span>
					<h3>Proprietary End-To-End IT Platform</h3>
					<ul class="inside">
						<li><span></span>Patient-Centric Focus</li>
						<li><span></span>Physician-Owned &amp; Operated</li>
						<li><span></span>Family-Oriented Culture</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<section class="testimonial-container services">
		<h2 class="blue">Physician Testimonials</h2>
		<ul class="testimonial-carousel carousel">
			<li>
				<div class="carousel-content">
					<img src="http://placehold.it/500x500" alt="..." />
					<div>
						<h3 class="blue">Jamie Upegui Gomez <span>MD</span></h3>
						<p>Apogee is a great company that offers valuable resources and benefits to me as a physician. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="carousel-content">
					<img src="http://placehold.it/500x500" alt="..." />
					<div>
						<h3 class="blue">Jamie Upegui Gomez <span>MD</span></h3>
						<p>Apogee is a great company that offers valuable resources and benefits to me as a physician. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="carousel-content">
					<img src="http://placehold.it/500x500" alt="..." />
					<div>
						<h3 class="blue">Jamie Upegui Gomez <span>MD</span></h3>
						<p>Apogee is a great company that offers valuable resources and benefits to me as a physician. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
					</div>
				</div>
			</li>
		</ul>
	</div>
<?php
get_footer();
