<?php
    $index_posts = new WP_Query(array(
        'post_type'=>'post',
        'post_per_page'=>'2',
        'post_status'=>'publish'
    ));

    if($index_posts->have_posts()) {
?>


<div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary"></p>
                <h1 class="display-6">Our Blog</h1>
            </div>
            <div class="row g-4">
                <?php $i=0; while($index_posts->have_posts()){ $index_posts->the_post(); ?>
                   <?php // if($i%2==0){ ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <?php if(has_post_thumbnail()){ ?>
                        <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <?php } ?>
                        <div class="p-4">
                        
                            <h4 class="mb-3"><?php the_title(); ?></h4>
                            <span class="mb-3"><?php echo get_the_date(); ?></span><span> ( <?php echo get_comments_number(); ?> comment )</span>
                            <br><span class="mb-3">author : <?php echo get_the_author(); ?></span>
                            <p><?php echo the_excerpt(); ?> </p>
                            <h4 class="text-primary"><a href="<?php the_permalink(); ?>" >Read More </a></h4>
                        </div>
                        <!-- <div class="store-overlay">
                          
                        </div> -->
                    </div>

                    <?php// }else{ ?>
                </div>
                <?php $i++;} ?>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">View More Blog</a>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>