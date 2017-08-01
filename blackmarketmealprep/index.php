<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 */
?> 

<?php get_header(); // Load the header.php template. ?>

	<div id="content">

		<!-- Home: What People Are Saying -->
		<section>
			<div id="testimonials-container">
				<div>
					<h4 id="testimonials-title">What People Are Saying</h4>
					<p id="testimonials-subtitle">review us on yelp or send us an email</p>
				</div>
				<div class="testimonials-wrapper">
					<ul class="testimonials">
						<!-- testimonial 1 -->
						<li>
							<div class="testimonial-author">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/sandilee-review.jpg">
								<ul class="testimonial-info">
									<li>Sandilee M.</li>
									<li>Costa Mestsa, CA</li>
								</ul>
							</div>
							<p>Another place I have tried to replace My Fit Foods meals--I really like BMMP a lot &amp; will be ordering again for sure! Here are the many reasons: - Great customer service = The chef returned my call last week before I placed my order, and couldn't have been nicer--he answered all my questions &amp; gave me a coupon code since it was my first order. He also asked for suggestions (smart), so I also put them below my praise here.</p>
						</li>
						<!-- testimonial 2 -->
						<li>
							<div class="testimonial-author">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/hazele-review.jpg">
								<ul class="testimonial-info">
									<li>Hazel E.</li>
									<li>Costa Mestsa, CA</li>
								</ul>
							</div>
							<p>This is my first week ordering from BMMP and I am really impressed! I've tried one other meal prep company and I was so turned off because I received several meals where the brown rice was only half cooked (bleh!!). However, everything I've had so far from BMMP has been delicious and very well prepared...</p>
						</li>
						<!-- testimonial 3 -->
						<li>
							<div class="testimonial-author">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/tracyh-review.jpg">
								<ul class="testimonial-info">
									<li>Tracy H.</li>
									<li>Irvine, CA/li>
								</ul>
							</div>
							<p>hey had a wide selection of options that revolved around several different types of proteins. I liked that they usually had at 2 different preparation of each protein to choose from...</p>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- end of Home: What People Are Saying -->
	
		<!-- Home: Meet Our Team -->
		<section>
			<div class="team-container">
				<div class="team-left-panel">
					<h4 class="team-title">Meet Our Team</h4>
					<p class="team-history">Black Market started as a way for my fiancé and I to get fit and ready for our wedding. We were discouraged by what other meal prep companies had to offer, the same repetitive menus, served by people with no culinary experience. Given my seven years of culinary training, creativity, and passion for food, I knew I could elevate the typical meal prep into something more enjoyable. I began prepping our meals in my mother’s kitchen, creating healthy and delicious meals week after week. Eventually, people started asking us to make meals for them too. They loved how healthy it was and delicious it tasted. Before long, the word spread and more people started asking us to meal prep for them. Finding the need for delicious, healthy, reasonably priced meal prep lead us to create Black Market Meal Prep.</p>
				</div>
				<div class="team-right-panel"> 
					<!-- Bryan Tapia Profile -->
					<ul class="team" id="team-bryan"> 
						<li>
							<div class="team-author">
								<a href="mission.php"><img src="<?php bloginfo('template_url'); ?>/assets/images/Bryan-Tapia.jpg"></a>
								<ul class="team-info">
									<li class="team-name"><a class="team-name-link" href="mission.php">Chef Bryan Tapia</a></li>
									<li class="team-position"><a class="team-pos-link" href="mission.php">Executive Chef &amp; Owner</a></li>
								</ul>
							</div>
						</li>
					</ul>
					<!-- Margarita Tapia Profile -->
					<ul class="team" id="team-margarita"> 
						<li>
							<div class="team-author">
								<a href="mission.php"><img src="<?php bloginfo('template_url'); ?>/assets/images/Margarita-Tapia.jpg"></a>
								<ul class="team-info">
									<li class="team-name"><a class="team-name-link" href="mission.php">Margarita Tapia</a></li>
									<li class="team-position"><a class="team-pos-link" href="mission.php">Co Founder/Operations</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- end of Home: Meet Our Team  -->


	</div><!-- load whatever content -->


<?php get_footer(); // Load the footer.php template. ?>