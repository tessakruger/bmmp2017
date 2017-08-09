<?php
/**
* Template Name: Home Page
**/
?>

<?php get_header(); ?>
<?php the_content(); ?>

<div id="content">
    <!-- Home: How to Order -->
        <section class="order-section">
        	<div class="order-container">
        		<div class="order-title-wrapper">
              		<h4 class="order-title">How to Order</h4>
              		<p class="order-subtext">Start customizing your meal plan by taking these steps</p>
            	</div>

            	<div class="order-steps-wrapper">

              		<div class="order-step">
            			<div class="order-line one"></div>
    	        		<div class="order-icon"><img id="order-step-icon" src="<?php bloginfo('template_url'); ?>/assets/images/icons-howToOrder/ordernow-icon.png"></div>
    	        		<div class="order-mobile-wrapper">
	                		<div class="order-step-title">
	                			Order Now
	                		</div>
	                		<div class="order-step-description">
	                 			Browse our list of custom meals
	                		</div>
	                	</div>
               		</div>
    	            <div class="order-step">
    	            	<div class="order-line two"></div>
    	              	<div class="order-icon"><img id="order-step-icon" src="<?php bloginfo('template_url'); ?>/assets/images/icons-howToOrder/customize-meal-icon.png"></div>
    	              	<div class="order-mobile-wrapper">
	    	              	<div class="order-step-title">
	    	                	Customize Meal
	    	              	</div>
	    	              	<div class="order-step-description">
	    	                	Select a protein, vegetable, and carb option from our menu. Feel free to mix and match as you like, but be sure to order a minimum of 5 meals. You can add extra protein, vegetable, and/or carb for a small additional fee.
	    	              	</div>
	    	            </div>
    	            </div>
    	            <div class="order-step" id="order-popup">
    	            	<div class="order-line three"></div>
      			        <div class="order-icon"><img id="order-step-delivery" src="<?php bloginfo('template_url'); ?>/assets/images/icons-howToOrder/delivery-icon.png"></div>
      			        <div class="order-mobile-wrapper">
	      			        <div class="order-step-title">
	      			        	Pickup or Delivery?
	      			        </div>
	      	            	<div class="order-step-description">
	      	              		Save money by picking up your meals from designated pick-up locations, or enter your zip code in your cart to find out if you are eligible for free local delivery or a standard flat rate. Our pick up time is from 6pm to 9pm and our Delivery time is from 4pm - 9pm.
	      	            	</div>
	      	            </div>
    	  	        </div>
    	            <div class="order-step">
    	            	<div class="order-icon"><img id="order-step-icon" src="<?php bloginfo('template_url'); ?>/assets/images/icons-howToOrder/checkout-enjoy-icon.png"></div>
    	            	<div class="order-mobile-wrapper">
	    	            	<div class="order-step-title">
	    	              		Checkout & Enjoy
	    	            	</div>
	    	            	<div class="order-step-description">
	    	              		Submit your order, and let us take care of the rest.
	    	            	</div>
	    	            </div>
    	          	</div>

    	          	<div id="order-delivery-text">
    	          		<p>You are now ordering for Sunday, July 2, 2017.<br />
    	          		Pick-up (6PM-9PM)/Delivery (4PM-9PM).<br />
    	          		Place your order before Thursday 11:59pm.<br />
    	          		Questions? Call/text (714)767-4145</p>
    	          	</div>

           		</div><!--order-steps-wrapper END -->

          	</div><!--order-container END -->
        </section>
        <!-- end of Home: How to Order -->

	<!-- Home: What People Are Saying -->
	<section>
		<div id="testimonials-container" class="testimonials-img">
			<div>
				<h4 id="testimonials-title">What People Are Saying</h4>
				<p id="testimonials-subtitle">review us on yelp or send us an email</p>
			</div>
			<div class="testimonials-wrapper">
				<ul class="testimonials">
					testimonial 1 ->
					<li>
						<div class="testimonial-author">
							<a href="whatPeopleAreSaying.php"><img src="<?php bloginfo('template_url'); ?>/assets/images/whatPeopleAreSaying/sandilee-review.jpg"></a>
							<ul class="testimonial-info">
								<li>Sandilee M.</li>
								<li>Costa Mestsa, CA</li>
							</ul>
						</div>
						<p>Another place I have tried to replace My Fit Foods meals--I really like BMMP a lot &amp; will be ordering again for sure! Here are the many reasons: - Great customer service = The chef returned my call last week before I placed my order, and couldn't have been nicer--he answered all my questions &amp; gave me a coupon code since it was my first order. He also asked for suggestions (smart), so I also put them below my praise here.</p>
					</li>
					testimonial 2 ->
					<li>
						<div class="testimonial-author">
							<a href="whatPeopleAreSaying.php"><img src="<?php bloginfo('template_url'); ?>/assets/images/whatPeopleAreSaying/hazele-review.jpg"></a>
							<ul class="testimonial-info">
								<li>Hazel E.</li>
								<li>Costa Mestsa, CA</li>
							</ul>
						</div></a>
						<p>This is my first week ordering from BMMP and I am really impressed! I've tried one other meal prep company and I was so turned off because I received several meals where the brown rice was only half cooked (bleh!!). However, everything I've had so far from BMMP has been delicious and very well prepared...</p>
					</li>
					testimonial 3 ->
					<li>
						<div class="testimonial-author">
							<a href="whatPeopleAreSaying.php"><img src="<?php bloginfo('template_url'); ?>/assets/images/whatPeopleAreSaying/tracyh-review.jpg"></a>
							<ul class="testimonial-info">
								<li>Tracy H.</li>
								<li>Irvine, CA</li>
							</ul>
						</div>
						<p>They had a wide selection of options that revolved around several different types of proteins. I liked that they usually had at 2 different preparation of each protein to choose from...</p>
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
							<a href="mission.php"><img class="team-img" src="<?php bloginfo('template_url'); ?>/assets/images/teamMission/Bryan-Tapia.jpg"></a>
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
							<a href="mission.php"><img class="team-img" src="<?php bloginfo('template_url'); ?>/assets/images/teamMission/Margarita-Tapia.jpg"></a>
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
	<!-- end of Home: Meet Our Team -->

</div><!--  load whatever content -->

<?php get_footer(); ?>