<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EW5GMQX7MB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EW5GMQX7MB');
</script>
<body>
    <header class="header-area pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="<?php echo site_url();?>" class="logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="<?php the_title();?>" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6 text-end">
                    <a href="https://www.tripadvisor.com/Attraction_Review-g293936-d15529131-Reviews-or10-Liton_Eco_Tours-Dhaka_City_Dhaka_Division.html" target="_blank" class="top-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/tripadvisor-logo.png" alt="<?php the_title();?>">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <nav class="nav-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <?php
                              wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'menu_class' => 'navbar-nav halim-menu'
                              ));
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </nav>