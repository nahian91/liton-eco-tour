<?php 

/*
Template Name: Services Template
*/

get_header();?>

    <section class="breadcumb bg" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="breadcumb-title">Our Services</h4>
                    <ul class="breadcumb-nav">
                        <li class="breadcumb-list"><a href="<?php echo site_url();?>" class="breadcumb-link">Home</a></li>
                        <li class="breadcumb-list">Our Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="service-area pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>">
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
<?php get_footer();?>