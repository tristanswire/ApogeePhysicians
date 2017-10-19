<?php
/**
 * Template Name: Careers 2
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

	<section class="hero careers-two">
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
			<p>“What's best for the <span>Patient</span> is best for the <span>Practice</span>.”™</p>
		</div>
	</section>

	<section class="container location-map">
		<h2>Find Your Home</h2>
		<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it is a place to belong and call home.</p>
		<div class="group">
			<ul class="tabs location-tabs">
				<li class="active">
					<a href="#physician" class="btn" data-toggle="tab">Careers</a>
					<?php include('_svg/icon-chevron-down.php'); ?>
				</li>
				<li>
					<a href="#nppa" class="btn" data-toggle="tab">NP/PA</a>
					<?php include('_svg/icon-chevron-down.php'); ?>
				</li>
			</ul>
			<div class="tab-content location-content">
				<div class="tab-pane fade in active" id="physician">
					Physician Map
					<img src="<?php bloginfo('template_directory'); ?>/_images/career-map.png" alt="..."/>
					<p>Interested in our travel team? <a href="#" class="modal-trigger">Click here</a> for more information</p>
				</div>
				<div class="tab-pane fade in" id="nppa">
					NPPA Map
					<img src="<?php bloginfo('template_directory'); ?>/_images/career-map.png" alt="..."/>
					<p>Interested in our travel team? <a href="#" class="modal-trigger">Click here</a> for more information</p>
				</div>
			</div>
			<div class="modal">
				<div class="modal-content">
					<a href="#" class="modal-trigger"><?php include('_svg/icon-close.php'); ?></a>
					<h2>Apogee Hospitalist Travel Team</h2>

					<h3>The perfect fit for the best physicians.</h3>
					<p>Live where you want. Work where you are appreciated. When you are a member of the Apogee Travel Team, you choose the lifestyle you want to live. You will enjoy the advantages of the largest and most successful physician-owned and -operated hospitalist group in the nation.</p>
					<p>This is a unique opportunity to work in a location where you can be respected and appreciated for the specialist you are without having to compromise where you live.</p>

					<h3>Consider the Apogee Travel Team Advantage:</h3>
					<ul>
						<li>Annual base salary and travel stipend</li>
						<li>Security of having a permanent position as a full-time Apogee employee with full benefits, including medical, dental, vision, malpractice, and CME</li>
						<li>Opportunity to see the country on Apogee; visit and practice in a variety of communities and hospital settings without making a commitment to move</li>
						<li>In-house credentialing and licensing department; all services and fees are paid by Apogee</li>
						<li>Frequent assignments in new Apogee programs that are awaiting permanent Apogee physicians</li>
						<li>Full support of members of our physician executive leadership team, many of whom have been on the Travel Team themselves</li>
						<li>Onsite administrative support from our Patient Information Coordinators, who will assist with billing, coding, and a variety of other duties, allowing you to focus on patient care</li>
						<li>Apogee University, a two-day course, benefiting all Apogee physicians, that includes a core curriculum based on the Apogee Promise of Safety, Quality, Service, and Value, and provides CME credits</li>
						<li>As a member of Apogee’s Travel Team, you are uniquely positioned to develop professionally and to transition into a leadership role.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="container list-container">
		<div class="wrap">
			<h2 class="blue">Join the Apogee Family</h2>
			<p class="p-wrap intro">More than any single attribute, our culture is most responsible for our group’s success because one you join Apogee, you join a family.</p>
			<ul class="three-list group">
				<li>
					<?php include('_svg/icon-heart.php'); ?>
					<h3 class="blue">Physician-Owned &amp; Operated</h3>
					<p>The largest, entirely physician-owned and operated Hospitalist group in the nation with one singular focus, Hospital Medicine.</p>
				</li>
				<li>
					<?php include('_svg/icon-briefcase.php'); ?>
					<h3 class="blue">Patient-Centered Focus</h3>
					<p>Our guiding vision of, What’s best for the Patient is best for the Practice™, gave rise to a belief system that put our patients first.</p>
				</li>
				<li>
					<?php include('_svg/icon-clipboard.php'); ?>
					<h3 class="blue">Family-Oriented Culture</h3>
					<p>Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind.</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="container prof-dev">
		<div class="wrap group" style="padding: 2em 0;">
			<h2 class="blue">Professional Development</h2>
			<div class="group">
				<div class="half first">
					<h3>Apogee University</h3>
					<p>Staying competitive in the market means constantly staying abreast of the latest research, best practices, and industry news. Each newly hired physician enjoys an all-expense paid trip to Apogee’s headquarters in Scottsdale, AZ for Apogee University. There, our doctors learn the guiding principals and vision of Apogee from Chairman, Dr. Michael Gregory. Best practices are taught and doctors leave feeling inspired and equipped to provide excellent patient care.</p>
				</div>
				<div class="half">
					<h3>Continuing Medical Education</h3>
					<p>Apogee is certified by AFFP through the Accrediting Council for Continuing Medical Education. We provide our physicians with CME courses so they can receive credit and stay up to date with the ever changing medical field.</p>
				</div>
			</div>
		</div>
		<div class="group" style="background-color: #F9F9F9; padding: 2em 0 4em;">
			<div class="wrap group">
				<h2 class="blue">Leadership Development</h2>
				<div class="group">
					<h3>Program Directors Academy</h3>
					<p>Program Directors Academy (PDA) focuses on leadership principles and strategies for execution. Dr. Peter W. Thompson, Chief of Clinical Operations, leads this two-day course Two contemporary books on leadership are required reading: Hard-wiring Excellence by Quint Studer &amp; Practicing Excellence by Stephen Beeson, M.D.</p>
					<h3>Objectives of Program Directors Academy:</h3>
					<ul class="half full">
						<li>Identify the key leadership strategies to create and maintain a culture of excellence in the Hospitalist program</li>
						<li>Understand how to use expectation settings to prepare teams for success</li>
						<li>Explore the use of data to improve team performance efficiency</li>
						<li>Specific Topics Addressed</li>
						<li>Apogee University Strategies Review</li>
						<li>Conflict Management</li>
					</ul>
					<ul class="half full">
						<li>Financial Stewardship</li>
						<li>High / Middle / Low Performers</li>
						<li>Leadership</li>
						<li>Patient Safety and Risk Management</li>
						<li>Quality / Quality Improvement</li>
						<li>Service Excellence and Service Recovery</li>
						<li>Supplemental Information</li>
						<li>Understanding and Using Apogee Reports</li>
					</ul>
				</div>
				<div class="group">
					<h3>Program Directors Summit</h3>
					<p>Program Directors Summit is a quarterly held leadership development and strategic operation in which all of the Program Directors gather together to define the most recent changes and challenges in hospital medicine while continuing to develop their leadership skills in order to implement new strategies in patient care.
					<h3>Specific Topics Addressed:</h3>
					<ul class="half full">
						<li>Apogee Growth and Future Outlook</li>
						<li>Corrective Action</li>
						<li>Financial Stewardship</li>
						<li>Leadership</li>
						<li>Patient Safety and Risk Management</li>
					</ul>
					<ul class="half full">
						<li>Practice Development</li>
						<li>Presentations by Program Directors on Delivering the Apogee Promise</li>
						<li>Productivity</li>
						<li>Surgical Co-management</li>
						<li>Coding &amp; Compliance</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="container side-by-side">
		<div class="group">
			<div class="content">
				<h2>Become an Apogee Hospitalist</h2>
				<p class="p-wrap">Apogee’s infrastructure is designed specifically with the best interests of you and your family in mind. Apogee is not merely a place of employment; it’s a place to belong and call home.</p>
				<div class="button-container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>careers" class="btn first orange">Work with Apogee</a>
					<a href="#" class="btn outline-white">Find a Location</a>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
