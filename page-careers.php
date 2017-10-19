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

	<section class="tab-container careers">
		<ul class="career-tabs group">
			<li class="half full active">
				<a href="#careers" data-toggle="tab">
					<img src="<?php bloginfo('template_directory'); ?>/_images/physician-cover.jpg" alt="..."/>
					<div class="center">
						<h2>Physician</h2>
					</div>
				</a>
				<?php include('_svg/icon-chevron-down.php'); ?>
			</li>
			<li class="half full">
				<a href="#services" data-toggle="tab">
					<img src="<?php bloginfo('template_directory'); ?>/_images/pa-cover-new.jpg" alt="..."/>
					<div class="center">
						<h2>Nurse Practitioner <span>&amp;</span> Physician Assistant</h2>
					</div>
				</a>
				<?php include('_svg/icon-chevron-down.php'); ?>
			</li>
		</ul>
	</section>
	<div class="tab-content">
		<!-- BEGIN PHYSICIAN SECTION -->
			<div class="tab-pane fade in active" id="careers">
				<section class="list-container ">
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
				<section class="container professional-development" style="border-bottom: 0.05em solid #fff; ">
					<div class="group">
						<ul class="tabs third group">
							<li class="active">
								<a href="#apogee_university" data-toggle="tab">
									<h2>Apogee University</h2>
								</a>
							</li>
							<li>
								<a href="#med_educ" data-toggle="tab">
									<h2>Continuing Medical Education</h2>
								</a>
							</li>
							<li>
								<a href="#pds" data-toggle="tab">
									<h2>Leadership Development</h2>
								</a>
							</li>
						</ul>
						<div class="tab-content two-third first">
							<div class="tab-pane fade in active" id="apogee_university">
								<h2>Apogee University</h2>
								<p>Staying competitive in the market means constantly staying abreast of the latest research, best practices, and industry news. Each newly hired physician enjoys an all-expense paid trip to Apogee’s headquarters in Scottsdale, AZ for Apogee University. There, our doctors learn the guiding principals and vision of Apogee from Chairman, Dr. Michael Gregory. Best practices are taught and doctors leave feeling inspired and equipped to provide excellent patient care.</p>
							</div>
							<div class="tab-pane fade in" id="med_educ">
								<h2>Continuing Medical Education</h2>
								<p>Apogee is certified by AFFP through the Accrediting Council for Continuing Medical Education. We provide our physicians with CME courses so they can receive credit and stay up to date with the ever changing medical field.</p>
							</div>
							<div class="tab-pane fade in" id="pds">
								<div class="group">
									<h2>Program Directors Academy</h2>
									<p>Program Directors Academy (PDA) focuses on leadership principles and strategies for execution. Dr. Peter W. Thompson, Chief of Clinical Operations, leads this two-day course Two contemporary books on leadership are required reading: Hard-wiring Excellence by Quint Studer &amp; Practicing Excellence by Stephen Beeson, M.D.</p>
									<h3>Objectives of Program Directors Academy</h3>
									<ul class="half full">
										<li>Identify the key leadership strategies to create and maintain a culture of excellence in the Hospitalist program</li>
										<li>Understand how to use expectation settings to prepare teams for success</li>
										<li>Explore the use of data to improve team performance efficiency</li>
										<li>Specific Topics Addressed</li>
										<li>Apogee University Strategies Review</li>
									</ul>
									<ul class="half full">
										<li>Conflict Management</li>
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
									<h2>Program Directors Summit</h2>
									<p>Program Directors Summit is a quarterly held leadership development and strategic operation in which all of the Program Directors gather together to define the most recent changes and challenges in hospital medicine while continuing to develop their leadership skills in order to implement new strategies in patient care.
									<h3>Specific Topics Addressed</h3>
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
					</div>
				</section>
				<!-- <section class="container-background">
					<div class="wrap group">
						<h2 class="white">The Apogee Difference</h2>
						<p class="p-wrap white intro">The Apogee Difference is the book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section</p>
						<ul class="dropdown-list group">
							<li>
								<a href="#">
									Physician Support
									<?php include('_svg/icon-plus-box.php'); ?>
									<?php include('_svg/icon-minus-box.php'); ?>
								</a>
								<ul>
									<li>Apogee provides organizational stability and a supportive physician-led senior team. Hospitalists report directly to other physicians who have worked in hospitals and understand the practice of medicine. Physicians are given the opportunity to network with some of the brightest leaders in hospital medicine from programs across the country</li>
								</ul>
							</li>
							<li>
								<a href="#">
									Consistent Executive &amp; Physician Leadership
									<?php include('_svg/icon-plus-box.php'); ?>
									<?php include('_svg/icon-minus-box.php'); ?>
								</a>
								<ul>
									<li>Each Apogee Hospitalist has a liaison and an advocate from our Physician Relations team. They develop a personal one-on-one relationship and provide the resources and tools to be successful. Apogee has created an environment exclusively for meeting the physician needs and is committed to maximizing the physician’s quality of life both inside and outside the hospital.</li>
								</ul>
							</li>
							<li>
								<a href="#">
									Administrative Support
									<?php include('_svg/icon-plus-box.php'); ?>
									<?php include('_svg/icon-minus-box.php'); ?>
								</a>
								<ul>
									<li>Apogee Hospitalists are supported by a Patient Information Coordinator who aids in the routine administrative duties frequently attached to running a private practice. Each program is essentially its own practice, each facility is assigned its own support staff to create rounding lists, conduct patient callbacks, schedule follow-up appointments with the primary care physician and submit billing.</li>
								</ul>
							</li>
							<li>
								<a href="#">
									Compensation &amp; Benefits
									<?php include('_svg/icon-plus-box.php'); ?>
									<?php include('_svg/icon-minus-box.php'); ?>
								</a>
								<ul>
									<li>Our compensation package ensures you are rewarded as a senior member from your first day with the group. Complete benefits package that includes medical, dental, vision, 401K, CME and Malpractice and tail coverage.</li>
								</ul>
							</li>

						</ul>
					</div>
				</section> -->
				<section class="container visa">
					<div class="wrap group">
						<div class="intro">
							<h2 class="blue">Visa to Green Card</h2>
							<p>Apogee is proud to have a physician immigration attorney on staff. This enables us to sponsor physicians who are on a J-1 visa waiver, or a non-immigrant H-1B visa as we renew the H-1B visa. Jackie and her team have over 17 years’ experience facilitating the Visa to Green Card process for Apogee physicians and their family members.</p>
						</div>
						<div class="left sixty">
							<div class="container-top">
								<h3 class="blue">What Apogee Does for You</h3>
								<ul>
									<li>Covers the cost of services and filings</li>
									<li>Process the non-immigrant H-4 visa for a spouse and child/children</li>
									<li>Begin the permanent sponsorship from the first day an employment agreement is signed and received by our office, allowing our physicians to obtain their green card up to one year earlier than they would have otherwise</li>
								</ul>
							</div>
							<div class="container-bottom">
								<div class="headshot">
									<img src="<?php bloginfo('template_directory'); ?>/_images/jacqueline-gallina.jpg" alt="Jacqueline Gallina Director of Physician Visa Relations" />
									<h4>Jacqeline Gallina <span>Director of Physician Visa Relations</span></h4>
								</div>
								<div>
									<a href="mailto:mica@apogeephysicians.com">
										<?php include('_svg/icon-email.php'); ?>
										mica@apogeephysicians.com
									</a>
									<a href="tel:123-456-7890">
										<?php include('_svg/icon-phone.php'); ?>
										123-456-7890
									</a>
								</div>
							</div>
						</div>
						<div class="right forty">
							<img src="<?php bloginfo('template_directory'); ?>/_images/physician-2.png" alt="An Apogee Physician"/>
						</div>
					</div>
				</section>
				<section class="side-by-side bg-gray">
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
				<section class="carousel-container">
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
				</section>
			</div>
		<!-- END PHYSICIAN SECTION -->
		<!-- BEGIN NPPA SECTION -->
			<div class="tab-pane fade in" id="services">
				<section class="list-container ">
					<div class="wrap">
						<h2 class="blue">NP/PA Section</h2>
						<p class="p-wrap intro">More than any single attribute, our culture is most responsible for our group’s success.</p>
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
					</div>
					<h2 style="margin: 3em auto -1em;">Professional Development</h2>
				</section>
				<section class="container professional-development">
					<div class="group">
						<div class="tab-content two-third first">
							<div class="tab-pane fade in active" id="apogee_pre">
								<h2>Apogee University Pre-course</h2>
								<p>Apogee University's pre-course is offered to physicians and non-physician practitioners. Joshua Rosenberg, D.O., Vice President of Clinical Operations, will review clinical scenarios common to the practice of inpatient medicine. Each scenario will begin with a presentation including but not limited to history, exam, medical decision-making, admitting orders, and discussion will include caveats particular to the case topic. Common considerations will be highlighted as well as any special caveats. Collaboration with physician counterparts is a common theme of the course.</p>
								<h3>Diseases and discussions to be reviewed will include:</h3>
								<ul>
									<li>Common Cardiovascular diseases</li>
									<li>Common Pulmonary diseases</li>
									<li>UTI and Acute Renal Failure</li>
									<li>Cellulitis</li>
									<li>Gastrointestinal Bleeding</li>
									<li>Core Measures</li>
									<li>Caveats to the NPP's practice of inpatient medicine</li>
									<li>Opportunities and strategies for NPPs to collaborate with their physician counterparts</li>
								</ul>
							</div>
							<div class="tab-pane fade in" id="np_uni">
								<h2>Apogee University</h2>
								<p>Staying competitive in the market means constantly staying abreast of the latest research, best practices, and industry news. Each newly hired physician enjoys an all-expense paid trip to Apogee’s headquarters in Scottsdale, AZ for Apogee University. There, our doctors learn the guiding principles and vision of Apogee from Chairman, Dr. Michael Gregory. Best practices are taught and doctors leave feeling inspired and equipped to provide excellent patient care.</p>
							</div>
							<div class="tab-pane fade in" id="np_med">
								<h2>Continuing Medical Education</h2>
								<p>Apogee is certified by AFFP through the Accrediting Council for Continuing Medical Education. We provide our physicians with CME courses so they can receive credit and stay up to date with the ever changing medical field.</p>
							</div>
						</div>
						<ul class="tabs third group">
							<li class="active">
								<a href="#apogee_pre" data-toggle="tab">
									<h2>Apogee University Pre-course</h2>
								</a>
							</li>
							<li>
								<a href="#np_uni" data-toggle="tab">
									<h2>Apogee University</h2>
								</a>
							</li>
							<li>
								<a href="#np_med" data-toggle="tab">
									<h2>Continuing Medical Education</h2>
								</a>
							</li>
						</ul>
					</div>
				</section>
			</div>
		<!-- END NPPA SECTION -->
	</div>
<?php
get_footer();
