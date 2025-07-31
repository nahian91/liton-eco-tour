<?php 

/*
Template Name: Contact Template
*/

get_header();?>

    <section class="breadcumb bg" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="breadcumb-title">Contact Us</h4>
                    <ul class="breadcumb-nav">
                        <li class="breadcumb-list"><a href="<?php echo site_url();?>" class="breadcumb-link">Home</a></li>
                        <li class="breadcumb-list">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-area pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>">
                        <h4>WHERE YOU CAN FIND US</h4>
                        <p>Contact us/Liton Eco Tours Please write as much details as possible about the service you require</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-box">
                        <h4>Dhaka Office</h4>
                        <div class="single-contact">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <h5>Hafiz Garden , House No-37/5, <br>
                            Apartment no-5h , plot no - KA,<br>
                            Lichu Bagan Road, Dhaka</h5>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-mobile"></i>
							<div class="phone">
								<h5>( +88) 01710994099 ( WhatsApp)</h5> 
								<h5>(+88) 01843060227</h5>
							</div>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-envelope"></i>
                            <h5>litontouristguide@gmail.com, <br>  litondeb1983@yahoo.com</h5>
                        </div>
						<div class="contact-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14600.670820284045!2d90.4163674!3d23.812634799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6548e0c8655%3A0xcfbb1ce6af74da3c!2sLiton%20Eco%20Tour!5e0!3m2!1sen!2sbd!4v1747202882799!5m2!1sen!2sbd"></iframe>
						</div>
                    </div>
                </div>
                <div class="col-md-6">                    
                    <div class="contact-box">
                        <h4>Srimangal Office </h4>
                        <div class="single-contact">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <h5>Shobujbag <br>Srimangal - 3210, Bangladesh</h5>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-mobile"></i>
							<div class="phone">
								<h5>( +88) 01710994099 ( WhatsApp)</h5> 
								<h5>(+88) 01843060227</h5>
							</div>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-envelope"></i>
                            <h5>litontouristguide@gmail.com, <br>  litondeb1983@yahoo.com</h5>
                        </div>
						<div class="contact-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3636.023480395415!2d91.7115487750404!3d24.310816067031677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37517b1759fb19dd%3A0x255c2bb4f9ec5e7a!2sSobujbag%20point!5e0!3m2!1sen!2sbd!4v1751365682766!5m2!1sen!2sbd"></iframe>

						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-bottom pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/title-icon.png" alt="<?php the_title();?>">
                        <h4>SEND US A MESSAGE</h4>
                        <p>Please write as much details as possible about the service you require . If you want us to organize a customized tour for you , please write which places you want to visit , your interest , dislikes, and expectations.also provide your arrival and departure details,so that we can prepare a wonderful tailor-made itinerary for you based on your requirements and available time.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <?php echo do_shortcode('[contact-form-7 id="5e4f0e3" title="Contact form 1"]');?>
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