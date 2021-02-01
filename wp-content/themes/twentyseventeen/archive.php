<?php get_header(); ?>
<main class="bd-masthead" id="content" role="main">
    <nav aria-label="breadcrumb" class="container-fluid nav-breadcrumb">
        <ol class="breadcrumb container">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
        </ol>
    </nav>
    <div class="catepage">
    	<div class="container">
        	<div class="row">
                <div class="col-md-8">
                    <div class="listpage">
                        <ul>
                            <?php  $args = array( 
                                'post_type' => 'post', 
                                'posts_per_page' => 2, 
                                'orderby' => 'desc', 
                                'post_status' => 'publish',
                                'post_type' => 'post');
                            $loop = new WP_Query( $args );
                            $post = $loop->posts;
                            foreach($posts as $key => $post):
                            ?>
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                                <li>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="responsive-image responsive-image--16by9">
                                                <a href="<?php echo get_permalink( $post->ID ) ?>">
                                                <img alt="..." src="<?php echo $url ?>">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php the_title(); ?></a></h3>
                                            <p><?php the_excerpt(); ?></p>
                                            <p class="time-line"><?php echo get_the_date('d-m-Y'); ?> <?php the_time( 'H:i' ); ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php pagination_tdc(); ?>
                    </div><!--listpage-->
                </div><!--col-md-8-->
                <div class=" right-dichvu col-md-4">
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
                    <div class="right-subbox">
                    	<div class="line-top"></div>
                        <h2><?php pll_e( 'Đọc nhiều nhất' ) ?></h2>
                        <ul>
                        <?php  $args = array( 
                            'posts_per_page' => 3,
                            'post_type' => 'post', 
                            'meta_key' => 'post_views_count',
                            'orderby' => 'meta_value_num',);
                        $loop = new WP_Query( $args );
                        $post = $loop->posts;
                        foreach($posts as $key => $post):
                        ?>
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                            <li class="row no-gutters">
                                <div class="col-6">
                                    <div class="responsive-image responsive-image--16by9">
                                        <a href="<?php echo get_permalink($post->ID) ?>">
                                            <img alt="..." src="<?php echo $url ?>">
                                        </a>
                                    </div>
                                </div>
                            <div class="col-6">
                                    <h3 class="card-title"><a href="<?php echo get_permalink($post->ID) ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div><!--right-subbox-->
                </div><!--col-md-4-->
        	</div><!--row-->
        </div><!--container-->
   </div><!--catepage-->
<?php get_footer(); ?>