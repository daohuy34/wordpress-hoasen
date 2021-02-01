<?php get_header(); ?>
<main class="bd-masthead" id="content" role="main">
    <div class="cover-home">
        <?php
            echo do_shortcode('[smartslider3 slider="1"]');
        ?>
    </div>
   <div class="gioithieu-home">
   		<div class="container d-flex">
        	<div class="row">
                <div class="left-gioithieu col-md-8">
                    <div class="line-top"></div>
                    <h2><a href="<?php echo get_category_link( 3 ) ?>"><?php echo get_cat_name(3) ;?></a></h2>
                    <?php 
                        $args = array( 
                            'posts_per_page' => 3,
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            'category_name' => 'gioi-thieu');
                        $loop = new WP_Query( $args );
                        $postList = $loop->posts;
                        foreach($postList as $key => $post):
                    ?> 
                    <?php if ($key === 0) : ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    <?php endif; ?>
                    <?php if ($key === 1) : ?>
                    <div class="media tinhthan">
                        <i class="mr-3"></i>
                        <div class="media-body">
                            <h4 class="mt-0"><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if ($key === 2) : ?>
                    <div class="media tinhthan chamsoc">
                        <i class="mr-3"></i>
                        <div class="media-body">
                            <h4 class="mt-0"><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div><!--left-gioithieu-->
                <div class="right-dichvu col-md-4">
                    <div class="dichvu-home">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <?php $one_post = get_post(32);?>
                                <div class="card-header" id="headingOne">
                                    <h3 class="mb-0">
                                        <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <?php echo $one_post->post_title; ?>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <p><?php echo $one_post->post_excerpt; ?></p>                            
                                        <p class="xemchitiet"><a href="<?php echo get_permalink($one_post->id) ?>"><?php pll_e( 'Chi tiết' ) ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <?php $two_post = get_post(34);?>
                                <div class="card-header" id="headingTwo">
                                    <h3 class="mb-0">
                                        <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <?php echo $two_post->post_title; ?>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $two_post->post_excerpt; ?></p> 
                                        <p class="xemchitiet"><a href="<?php echo get_permalink(34) ?>"><?php pll_e( 'Chi tiết' ) ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <?php $three_post = get_post(36);?>
                                <div class="card-header" id="headingThree">
                                    <h3 class="mb-0">
                                        <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <?php echo $three_post->post_title; ?>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $three_post->post_excerpt; ?></p> 
                                        <p class="xemchitiet"><a href="<?php echo get_permalink(36) ?>"><?php pll_e( 'Chi tiết' ) ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <?php $four_post = get_post(38);?>
                                <div class="card-header" id="headingTwo">
                                    <h3 class="mb-0">
                                        <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <?php echo $four_post->post_title; ?>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $four_post->post_excerpt; ?></p> 
                                        <p class="xemchitiet"><a href="<?php echo get_permalink(38) ?>"><?php pll_e( 'Chi tiết' ) ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <?php $five_post = get_post(40);?>
                                <div class="card-header" id="headingFive">
                                    <h3 class="mb-0">
                                        <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <?php echo $five_post->post_title; ?>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $five_post->post_excerpt; ?></p> 
                                        <p class="xemchitiet"><a href="<?php echo get_permalink(40) ?>"><?php pll_e( 'Chi tiết' ) ?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div><!--accordion-->
                    </div><!--dichvu-home-->
                </div><!--right-dichvu-->
            </div>
        </div><!--container-->
   </div><!--gioithieu-home-->
   <div class="camnhan-home">
   		<div class="container">
            <h2><a href="#"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/hbr1-doidongcamnhan.png"/></a></h2>
            <div class="camnhan-slidehome">
                <div id="slide-camnhanhome" class="owl-carousel">
                    <?php 
                        $args = array( 
                            'posts_per_page' => 6,
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            'category_name' => 'cam-nhan');
                        $loop = new WP_Query( $args );
                        $postList = $loop->posts;
                        foreach($postList as $key => $post):
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                    ?>
                    <div class="item-camnhanhome">
                        <div class="img-camnhanhome">
                            <div class="responsive-image responsive-image--16by9">
                                <a href="<?php echo get_permalink( $post->ID ) ?>"><img alt="<?php echo $post->post_title ?>" src="<?php echo $url ?>"></a>
                            </div>
                        </div>
                        <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php echo $post->post_title ?></a></h3>
                        <?php
                        $excerpt = explode(" - ", get_the_excerpt());
                        if(isset($excerpt[0])) {
                            echo "<h4>" . $excerpt[0] . "</h4>";
                        }
                        if(isset($excerpt[1])) {
                            echo "<h5>" . $excerpt[1] . "</h5>";
                        }
                        ?>
                    </div>
                    <?php endforeach; ?>
                </div><!--carousel-slide-videohome-->	
            </div><!--camnhan-slidehome-->
        </div><!--container-->
   </div><!--camnhan-home-->
   <div class="tintuc-home">
   		<div class="container">
        	<div class="line-top"></div>
        	<h2><a href="#"><?php pll_e( 'Tin tức & Sự kiện' ) ?></a></h2>
            <div id="slide-tintuchome" class="owl-carousel">
                <?php 
                        $args = array( 
                            'posts_per_page' => 6,
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            'category_name' => 'tin-tuc-su-kien');
                        $loop = new WP_Query( $args );
                        $postList = $loop->posts;
                        foreach($postList as $key => $post):
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                    ?>
                <div class="item-tintuchome">
                    <div class="img-boxhome">
                        <div class="responsive-image responsive-image--16by9">
                            <a href="<?php echo get_permalink( $post->ID ) ?>">
                                <img alt="<?php echo $post->post_title ?>" src="<?php echo $url; ?>">
                            </a>
                        </div>
                    </div>
                    <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php echo $post->post_title; ?></a></h3>
                    <p><?php echo $post->post_excerpt; ?></p> 
                    <p class="time-line"><?php echo get_the_date('d-m-Y'); ?> <?php the_time( 'H:i' ); ?></p>
                </div>
                <?php endforeach; ?>
            </div><!--slide-tintuchome-->
        </div><!--container-->
   </div><!--tintuc-home-->
   <div class="hinhanh-home">
   		<h2><a href="#"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/hbr2-hinhanh.png"/></a></h2>
        <ul class="subname-hinhanh">
        	<li><a href="<?php echo get_category_link( 7 ) ?>"><?php pll_e( 'Ảnh đẹp' ) ?></a></li>
            <li><a href="<?php echo get_category_link( 7 ) ?>"><?php pll_e( 'Video' ) ?></a></li>
        </ul>
        <div class="row">
            <?php 
                $args = array( 
                    'posts_per_page' => 6,
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    'category_name' => 'anh-video');
                $loop = new WP_Query( $args );
                $postList = $loop->posts;
                foreach($postList as $key => $post):
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
            ?>
            <div class="col-4">
            	<div class="item-hinhanhhome">
                    <div class="responsive-image responsive-image--16by9">
                        <a href="<?php echo get_permalink( $post->ID ) ?>">
                            <img alt="<?php echo $post->post_title ?>" src="<?php echo $url; ?>">
                        </a>
                         <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php echo $post->post_title; ?></a></h3>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div><!--row-->
   </div><!--hinhanh-home-->
<?php get_footer(); ?>