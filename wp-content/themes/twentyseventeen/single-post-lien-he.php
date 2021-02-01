<?php get_header() ?>
<main class="bd-masthead" id="content" role="main">
   <nav aria-label="breadcrumb" class="container-fluid nav-breadcrumb">
        <ol class="breadcrumb container">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
        </ol>
   </nav>
   <div class="lienhe-sub container">
   		<div class="line-top"></div>
   		<h2>Liên hệ</h2>
   		<div class="row">
            <div class="col-7">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.5865843602123!2d106.67382261469773!3d11.069589992122989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174cfd29378bc9d%3A0x71e0ca0d85df52ce!2zRMav4bugTkcgTMODTyBIT0EgU0VOIE5I4bqsVCBC4bqiTg!5e0!3m2!1svi!2s!4v1591783954409!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                 </div>
                 <div id="directionsPanel"></div>
            </div>
            <div class="col-5">
            	<h1><?php echo theme_option('name'); ?></h1>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3"><?php pll_e( 'Trụ sở chính' ) ?>:</label>
                        <label class="col-sm-9"><b><?php echo theme_option('address'); ?></b></label>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3"><?php pll_e( 'Điện thoại' ) ?>:</label>
                        <label class="col-sm-9"><b><?php echo theme_option('phone-1'); ?></b></label>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3"><?php pll_e( 'Fax' ) ?>:</label>
                        <label class="col-sm-9"><b><?php echo theme_option('fax'); ?></b></label>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3"><?php pll_e( 'Hotline' ) ?>:</label>
                        <label class="col-sm-9"><b><?php echo theme_option('hotline'); ?></b></label>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3"><?php pll_e( 'Email' ) ?>:</label>
                        <label class="col-sm-9"><a href="mailto:<?php echo theme_option('email'); ?>"><b><?php echo theme_option('email'); ?></b></a></label>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3"><?php pll_e( 'Văn phòng' ) ?>:</label>
                        <label class="col-sm-9"><b><?php echo theme_option('address-office'); ?></b></label>
                     </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3"><?php pll_e( 'Điện thoại' ) ?>:</label>
                        <label class="col-sm-9"><b><?php echo theme_option('phone-1'); ?> -  <?php echo theme_option('phone-2'); ?></b></label>
                     </div>
                     <h3><?php pll_e( 'Gửi Email liên hệ' ) ?>:</h3>
                     <?php
                     $currentLang = pll_current_language();
                     if(isset($currentLang)) {
                        if($currentLang === 'ja') {
                           echo do_shortcode('[contact-form-7 id="146" title="Liên hệ (ja)"]');
                        } else {
                           echo do_shortcode('[contact-form-7 id="121" title="Liên hệ (vi)"]');
                        }
                     } else {
                        echo do_shortcode('[contact-form-7 id="121" title="Liên hệ (vi)"]');
                     }
                     ?>
                <!-- <form>
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Nhập họ tên">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ của bạn">
                        </div>                
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Nhập Email">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Số điện thoại của bạn">
                        </div>          
                    <textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="3" placeholder="Nhập nội dung câu hỏi của bạn tại đây.."></textarea>
                    <button class="btn btn-guicauhoi" type="submit">Gửi câu hỏi</button>
                </form> -->
            </div>
        </div><!--row-->
   </div><!--lienhe-sub row-->
<?php get_footer() ?>