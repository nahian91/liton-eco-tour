<?php get_header();?>
    <section class="breadcumb bg" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="breadcumb-title">Blogs</h4>
                    <ul class="breadcumb-nav">
                        <li class="breadcumb-list"><a href="<?php echo site_url();?>" class="breadcumb-link">Home</a></li>
                        <li class="breadcumb-list">Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-area blog-page pt-100 pb-100">
    <div class="container">
        <div class="row">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 9,
                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1
            );

            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
            ?>
                <div class="col-md-4">
                    <div class="single-blog">
                        <?php if (has_post_thumbnail()) : ?>
                            <img class="w-100" src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="blog-content">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="meta">
                                <a href=""><?php echo get_the_date('d M'); ?></a>
                                <a href=""><?php echo get_the_date('Y'); ?></a>
                            </div>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="box-btn">read more</a>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>

        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col-xxl-12">
                <nav>
                    <ul class="pagination d-flex justify-content-center">
                        <?php
                        echo paginate_links(array(
                            'total'   => $blog_query->max_num_pages,
                            'current' => max(1, get_query_var('paged')),
                            'prev_text' => __('« Previous'),
                            'next_text' => __('Next »'),
                        ));
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>