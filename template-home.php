<?php 

/*
Template Name: Home Template
*/

get_header();?>

    <div class="slider-area">
        <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
            <div class="carousel-inner">
            <?php 
                    $args = array(
                        'post_type' => 'sliders',
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    );
                    $query = new WP_Query($args);
                    $i = 0;
                    while($query->have_posts()) {
                        $query->the_post();
                        $i++;
                        $slider_btn_text = get_field( "button_text" );
                        $slider_btn_url = get_field( "button_url" );
                    ?>
                        <div class="carousel-item <?php if($i == 1) {echo ' active';}?>">
                            <img src="<?php the_post_thumbnail_url();?>" class="d-block w-100" alt="<?php the_title();?>">
                            <div class="carousel-caption d-none d-md-block">
                                <h4><?php the_title();?></h4>
                                <a href="<?php echo $slider_btn_url;?>"><?php echo $slider_btn_text;?></a>
                            </div>
                        </div>
                    <?php
                    }
                ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
        </div>
    
    </div>

    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>">
                        <h4>Welcome to Liton Eco Tour, Bangladesh</h4>
                        <p>As an experienced tour operator, we offer unforgettable adventures through the breathtaking Sundarban Mangroves forest.<br/>
Now possible with us photography Tour in Bangladesh .  capture every magical moment.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="about-img">
                        <img class="img-fluid border" src="<?php echo get_template_directory_uri();?>/assets/img/about.png" alt="<?php the_title();?>">
						<span class="about-experience">20+ Years <br/>Experience</span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about-content">
                        <h4 class="page-title">Why Choose Liton Eco Tour</h4>
                        <p>We are an experienced tour operator specializing in tours of the Sundarbans Mangrove Forest, Archaeological sites, Photography tours, Srimangal, Sylhet, the Chittagong Hill Tracts, Rangamati, Barisal Backwater trips, Tanguar Haor, Birisiri, Dhaka, and other locations across Bangladesh. With 20+ years of experience organizing tours for international visitors, we offer a truly authentic and enriching experience in Bangladesh.</p>
                        <p>Visit Bangladesh with Liton Eco Tours for an unforgettable adventure!</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> <b>20+ Years of Experience:</b> We have a long history of offering guided tours that cater to your needs.</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> <b>Everything Well-Organized:</b> We ensure a seamless, hassle-free experience from start to finish.</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> <b>No Hidden Fees:</b> What we quote is what you pay—transparency is our priority.</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> <b>Local Company, Local People:</b> We are a local business, supporting local communities, and our team is made up of knowledgeable locals.</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> <b>Comfortable and Hassle-Free Tours:</b> We focus on your comfort so you can enjoy the journey stress-free.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> <b>Engage with Locals:</b> Many locals are involved in our tours, enriching your experience and fostering genuine connections.</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> <b>Discover New Places, New People:</b> Explore different ways of life and discover the hidden gems of Bangladesh.</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> <b>Best Price, Best Service:</b> We strive to offer competitive prices without compromising on quality.</li>
                                    <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> <b>Experienced Tour Guides:</b> Our guides are passionate, professional and experienced, ensuring you get the most out of your trip.</li>
                                </ul>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>

    <section class="services-area" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/services-bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>">
                        <h4>Bangladesh Information</h4>
                        <p>Bangladesh has an approximate population density of 1,084 per square kilometer (2,808 per square mile). </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-1.png" alt="<?php the_title();?>">
                          <h4>Biography</h4>
                          <p>Nestled to the east of India along the Bay of Bengal, Bangladesh is a South Asian gem known for its vibrant landscapes and rich natural beauty.</p>
                          <a href="<?php echo esc_url( get_page_link( 11 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-2.png" alt="<?php the_title();?>">
                          <h4>Map</h4>
                          <p>The People's Republic of Bangladesh is a South Asian country that also bridges the cultural and geographical crossroads of Southeast Asia.</p>
                          <a href="<?php echo esc_url( get_page_link( 12 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-3.png" alt="<?php the_title();?>">
                          <h4>Visa Information</h4>
                          <p>Visa requirements for Bangladeshi citizens are administrative entry restrictions set by other countries, determining the terms under which they may enter or travel abroad.</p>
                          <a href="<?php echo esc_url( get_page_link( 21 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-4.png" alt="<?php the_title();?>">
                          <h4>Foreign Mission</h4>
                          <p>This is a list of diplomatic missions in Bangladesh. Currently, the capital city, Dhaka, is home to 46 embassies and high commissions.</p>
                          <a href="<?php echo esc_url( get_page_link( 20 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-5.png" alt="<?php the_title();?>">
                          <h4>History</h4>
                          <p>Modern Bangladesh emerged as an independent nation in 1971, following a historic struggle for liberation from Pakistan.</p>
                          <a href="<?php echo esc_url( get_page_link( 13 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-8.png" alt="<?php the_title();?>">
                          <h4>Geography and Climate</h4>
                          <p>Bangladesh is a densely populated, low-lying country in South Asia, shaped by an extensive river system and boasting a 580 km (360 mi) coastline along the Bay of Bengal.</p>
                          <a href="<?php echo esc_url( get_page_link( 19 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-9.png" alt="<?php the_title();?>">
                          <h4>Weather</h4>
                          <p>Straddling the Tropic of Cancer, Bangladesh experiences a tropical climate with a mild winter from October to March and a hot, humid summer from April to June.</p>
                          <a href="<?php echo esc_url( get_page_link( 14 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-6.png" alt="<?php the_title();?>">
                          <h4>People & Culture</h4>
                          <p>Bangladesh is an ethnically homogeneous nation, with Bengalis making up about 98% of the population. It is also a Muslim-majority country, reflecting its deep-rooted cultural and religious identity.</p>
                          <a href="<?php echo esc_url( get_page_link( 18 ) ); ?>">read more</a>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <!-- Single Service -->
                       <div class="single-service">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/services/service-icon-7.png" alt="<?php the_title();?>">
                          <h4>Airlines</h4>
                          <p>Biman Bangladesh Airlines was established on January 4, 1972, as the national carrier of Bangladesh, operating under the Bangladesh Biman Corporation.</p>
                          <a href="<?php echo esc_url( get_page_link( 17 ) ); ?>">read more</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="packages-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>">
                        <h4>Our TOUR</h4>
                        <p>We have designed some interesting tour packages that you may like . Please see below.</p>
                        <span>Note: We also offer personalized tours tailored to your preferences upon request.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    $args = array(
                        'post_type' => 'tours',
                        'posts_per_page' => 8,
                        'order' => 'ASC'
                    );

                    $query = new WP_Query($args);

                    while($query->have_posts()) {
                        $query->the_post();
                        $tour_place = get_field( "place" );
                        $tour_duration = get_field( "duration" );
                    ?>
                        <div class="col-md-3">
                            <div class="single-package">
                                <?php $thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);   
the_post_thumbnail( 'medium', array( 'alt' => $alt ) ); ?>

                                <h4><?php the_title();?></h4>
                                <div class="package-meta">
                                    <span><i class="bx bx-map"></i> <?php echo $tour_place;?></span>
                                    <span><i class="bx bxs-watch"></i> <?php echo $tour_duration;?></span>
                                </div>
                                <div class="package-btn">
                                    <a href="<?php the_permalink();?>">View Details</a>
                                    <a href="<?php echo esc_url( get_page_link( 47 ) ); ?>">Contact Now</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                ?>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="<?php echo esc_url( get_page_link( 23 ) ); ?>" class="view-all-btn">View All Tours</a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-area" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/cta-bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Traveling is not a luxury, it's a necessity.</h4>
                     <a href="https://litonecotour.com/our-tours/">View All Tours</a>
                    <a href="https://litonecotour.com/contact-us/">Contact Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="">
                        <h4>Our Services</h4>
                        <p>We have awesome services that you may like . Please see below.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="services-list">
                        <ul>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Photography Tour</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Package Tour</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Customize Tour</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Group Tour</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Corporate Tour</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Camping Tour</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Trekking Tour</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-list">
                        <ul>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Cycling Tour</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Religious Tour</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Festival Tour</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Study Tour</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Train Tickets</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> English Speaking Guide Service</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-list">
                        <ul>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Steamer Ticket</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> River Cruise</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Rent-A Car</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Hotel & Resort Booking</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> English Speaking Guide Service</li>
                            <li><img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>"> Interpreter</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="testimonials-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>">
                        <h4>Client Reviews</h4>
                        <p>Contact us/Liton Eco Tours Please write as much details as possible about the service you require.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials">
                        <?php echo do_action( 'wprev_tripadvisor_plugin_action', 1 );?>
                    </div>
				</div>
            </div>
        </div>
    </section>
<?php get_footer();?>