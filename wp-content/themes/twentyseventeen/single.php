<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
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
                	<div class="detailpage">
                        <div class="kbwc-socials"> 
                            <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
                            <!-- Your share button code 
                            <div class="fb-share-button" 
                            data-href="" 
                            data-layout="button_count">
                            </div>-->
                            <div class="fb-like fb_iframe_widget" data-href="" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=182982662309851&amp;container_width=0&amp;href=https%3A%2F%2Ftopxuatkhaulaodong.com%2F16-thuc-tap-sinh-tocontap-saigon-tiep-tuc-len-duong-sang-nhat-ban-lam-viec%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;size=small&amp;width="><span style="vertical-align: bottom; width: 128px; height: 20px;"><iframe name="f285bba61bc32c4" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v7.0/plugins/like.php?action=like&amp;app_id=182982662309851&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df57d407faf3c2c%26domain%3Dtopxuatkhaulaodong.com%26origin%3Dhttps%253A%252F%252Ftopxuatkhaulaodong.com%252Ff25173dbd75914%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Ftopxuatkhaulaodong.com%2F16-thuc-tap-sinh-tocontap-saigon-tiep-tuc-len-duong-sang-nhat-ban-lam-viec%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;size=small&amp;width=" style="border: none; visibility: visible; width: 128px; height: 20px;" class=""></iframe></span></div>
                        </div>
                        <h1><?php echo the_title()?></h1>
                        <div class="sapo"><?php the_excerpt(); ?></div>
                        <div class=" d-flex mb-2">
                            <div class="mr-auto"><p class="time-line"><?php echo get_the_date('d-m-Y'); ?> <?php the_time( 'H:i' ); ?></p></div>
                            <div class="print">
                                <a onclick="printDiv()"><?php pll_e( 'In ấn' ) ?></a>
                            </div>
                        </div>
                        <div id="content" class="content">
                            <?php echo apply_filters('the_content', $post->post_content); ;?>
                        </div><!--content-->
                        <ul class=" d-flex align-content-start flex-wrap tukhoa">
                            <li><span>Từ khóa:</span></li>
                            <?php
                                $tags = get_tags(array(
                                    'hide_empty' => false,
                                    'perPage' => 5
                                ));
                                foreach ( $tags as $k  => $tag ) :
                                $tag_link = get_tag_link( $tag->term_id );
                                if($k<5):
                            ?>
                            <li>
                                <a href='<?php echo $tag_link; ?>' title='<?php echo $tag->name; ?>' class='<?php echo $tag->slug ?>'><?php echo $tag->name ?></a>
                            </li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div><!--detailpage-->
                    <div class="dangchuy">
                    	<div class="line-top"></div>
                        <h2><?php pll_e( 'Tin mới nhất' ) ?></h2>
						<div class="camnhan-slidehome">
                            <div id="dangchuy" class="owl-carousel">
                            <?php 
                                $args = array( 
                                    'posts_per_page' => 6,
                                    'post_status' => 'publish',
                                    'post_type' => 'post');
                                $loop = new WP_Query( $args );
                                $postList = $loop->posts;
                                foreach($postList as $key => $post):
                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                            ?>
                                <div class="item-camnhanhome">
                                    <div class="img-camnhanhome">
                                        <div class="responsive-image responsive-image--16by9">
                                            <a href="<?php echo get_permalink( $post->ID ) ?>"><img alt="..." src="<?php echo $url?>"></a>
                                        </div>
                                    </div>
                                    <h3><a href="<?php echo get_permalink( $post->ID ) ?>"><?php echo the_title()?></a></h3>
                                </div>
                                <?php endforeach; ?>
                            </div><!--carousel-slide-videohome-->	
                        </div><!--camnhan-slidehome-->
                    </div><!--dangchuy-->
                    <div class="listpage">
                    	<div class="line-top"></div>
						<?php
						$category_detail=get_the_category($post->ID);//$post->ID
							foreach($category_detail as $cd){
								$idCat = $cd->term_id;
							// echo $idCat;
						}
						?>
                        <h2><a href="<?php echo get_category_link( $idCat ) ?>"><?php pll_e( 'Tin cùng chuyên mục' ) ?></a></h2>
                        <ul>
                            <?php 
                                $args = array( 
                                    'posts_per_page' => 6,
                                    'post_status' => 'publish',
                                    'post_type' => 'post');
                                $loop = new WP_Query( $args );
                                $postList = $loop->posts;
                                foreach($postList as $key => $post):
                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                            ?>
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
                        <!-- <?php  $args = array( 
                            'post_type' => 'post', 
                            'meta_key' => 'post_views_count',
                            'orderby' => 'meta_value_num',
                            'posts_per_page' => 5,);
                        $loop = new WP_Query( $args );
                        $post = $loop->posts;
                        foreach($posts as $key => $post):
                        ?>
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                            <li class="row no-gutters">
                                <div class="col-6">
                                    <div class="responsive-image responsive-image--16by9">
                                        <a href="<?php echo get_permalink($post->id) ?>">
                                            <img alt="..." src="https://topxuatkhaulaodong.com/wp-content/uploads/2020/07/lao-động-Nhật-Bản-3.jpg">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h3 class="card-title"><a href="<?php echo get_permalink($post->id) ?>"><?php pll_e( 'Vì sao Nhật Bản thu hút nhiều lao động Việt Nam?' ) ?></a></h3>
                                </div>
                            </li>
                            <?php endforeach; ?> -->

                            <?php
                            $one_post = get_post(182);
                            $url = wp_get_attachment_url( get_post_thumbnail_id($one_post->ID), 'thumbnail' ); 
                            ?>
                            <li class="row no-gutters">
                                <div class="col-6">
                                    <div class="responsive-image responsive-image--16by9">
                                        <a href="<?php echo get_permalink($one_post->ID) ?>">
                                            <img alt="..." src="<?php echo $url; ?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h3 class="card-title"><a href="<?php echo get_permalink($one_post->ID) ?>"><?php echo $one_post->post_title; ?></a></h3>
                                </div>
                            </li>
                        </ul>
                        
                    </div><!--right-subbox-->
                </div><!--col-md-4-->
        	</div><!--row-->
        </div><!--container-->
   </div><!--catepage-->
<?php
get_footer();
