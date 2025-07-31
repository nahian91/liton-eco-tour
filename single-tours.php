<?php get_header(); ?>

<section class="breadcumb bg" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h4 class="breadcumb-title"><?php the_title();?></h4>
				<ul class="breadcumb-nav">
					<li class="breadcumb-list"><a href="<?php echo site_url();?>" class="breadcumb-link">Home</a></li>
					<li class="breadcumb-list"><?php the_title();?></li>
				</ul>
			</div>
		</div>
	</div>
</section>

	<main id="primary" class="site-main single-tour pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<?php
						while ( have_posts() ) {
							the_post();
							$tour_place = get_field( "place" );
                        	$tour_duration = get_field( "duration" );
						?>
					<h4 class="page-title"><?php the_title();?></h4>
					<div class="package-meta">
						<span><i class="bx bx-map"></i> <?php echo $tour_place;?></span>
						<span><i class="bx bxs-watch"></i> <?php echo $tour_duration;?></span>
					</div>
					<div class="single-tour-img" style="background-image:url('<?php the_post_thumbnail_url();?>')"></div>
					
					<?php
							the_content();
						
						}; // End of the loop.
					?>
				</div>
				<div class="col-md-3">
					<div class="sidebar">
						<h4>Our Exclusive Tours</h4>
						<ul>
						<?php 
							$args = array(
								'post_type' => 'tours',
								'posts_per_page' => -1,
								'order' => 'ASC'
							);
							$query = new WP_Query($args);
							while($query->have_posts()) {
								$query->the_post();
						?>
							<li><a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt=""> <?php the_title();?></a></li>
						<?php 
							}
						?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->


<section class="cta-area page" style="background-image: url('https://litonecotour.com/wp-content/uploads/2023/03/slide-3.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>We do not publish our price publicly. we request you to send us an email for more details and price. <br/> Above itinerary can be change on your request.</h4>
                     <a href="https://litonecotour.com/our-tours/">View All Tours</a>
                    <a href="https://litonecotour.com/contact-us/">Contact Now</a>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
