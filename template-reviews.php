<?php 

/*
Template Name: Reviews Template
*/

get_header();?>

    <section class="breadcumb bg" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="breadcumb-title">Client Reviews</h4>
                    <ul class="breadcumb-nav">
                        <li class="breadcumb-list"><a href="<?php echo site_url();?>" class="breadcumb-link">Home</a></li>
                        <li class="breadcumb-list">Client Reviews</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="clients-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo do_action( 'wprev_tripadvisor_plugin_action', 2 ); ?>
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