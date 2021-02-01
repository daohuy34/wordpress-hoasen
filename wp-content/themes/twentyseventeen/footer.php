
   <div class="lienhe-home">
   		<div class="container">
            <h2><?php pll_e( 'Nếu bạn có nhu cầu hoặc thắc mắc, hãy liên hệ vói chúng tôi theo số Hotline 24/7' ) ?></h2>
            <h3>0899 161 336</h3>
            <ul>
                <li><a href="<?php echo get_permalink( 118 ) ?>"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon8-guuicauhoi.png"/><?php pll_e( 'Gửi câu hỏi' ) ?></a></li>
                <li><a href="<?php echo theme_option('url-reg'); ?>"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon2-thutuc.png"/><?php pll_e( 'Thủ tục đăng ký' ) ?></a></li>
            </ul>
        </div>
   </div>
<div class="footer-hoasen">
   		<div class="container">
            <h2><?php echo theme_option('name'); ?></h2>
            <h3><?php echo theme_option('name-i'); ?></h3>
            <h4 style="line-height: 1.3rem;"><?php echo theme_option('address'); ?></h4>
            <ul class="list-phone">
                <li><?php pll_e( 'Tel' ) ?>: <b><?php echo theme_option('phone-1'); ?></b></li>
                <li> <?php pll_e( 'Fax' ) ?>: <b><?php echo theme_option('fax'); ?></b> </li>
                <li> <?php pll_e( 'Hotline' ) ?>: <b><?php echo theme_option('hotline'); ?></b></li>
            </ul>
            <h4 style="line-height: 1.3rem;"><?php pll_e( 'Văn phòng' ) ?>: <?php echo theme_option('address-office'); ?></h4>
            <ul class="list-phone">
                <li><?php pll_e( 'Tel' ) ?>: <b><?php echo theme_option('phone-2'); ?></b></li>
            </ul>
            <p><?php pll_e( 'Email' ) ?>: <a href="#"><?php echo theme_option('email'); ?></</a></p>
            <ul class="list-socialhome">
                <li><a href="<?php echo theme_option('facebook'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon9-facebook.png"/></a></li>
                <li><a href="<?php echo theme_option('twitter'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon10-twit.png"/></a></li>
                <li><a href="<?php echo theme_option('zalo'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon11-zalo.png"/></a></li>
                <li><a href="<?php echo theme_option('youtube'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon12-youtube.png"/></a></li>
            </ul>
            <p class="copyright">著作権 ©<b> 2020</b> ロータスジャパン. <b>All Rights Reserves. Design by <a href="https://alobacsi.com/" target="_blank">Alobacsi.vn</a></b></p>
        </div>
   </div>
   <div class="badge badge-primary text-wrap btn-dangky"><h2><a href="#"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon2-thutuc.png"/><span><?php pll_e( 'Thủ tục đăng ký' ) ?></span></a></h2></div>
   <div class="badge badge-primary text-wrap btn-dangky hotline"><h3><a href="tel:<?php echo theme_option('hotline'); ?>"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon13-phone.png"/><span><?php echo theme_option('hotline'); ?></span></a></h3></div>
   <div class="modal fade" style="top:0.5rem;" id="timkiemModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div style="padding: 0 1rem;" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php pll_e( 'Tìm kiếm' ) ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--<div id="list-result" class="modal-body">
            
          </div>-->
          <div class="modal-footer">
            <button type="button" onclick="myFunction()" class="btn btn-secondary" data-dismiss="modal"><?php pll_e( 'Đóng' ) ?></button>
          </div>
        </div>
      </div>
    </div><!--timkiemModal-->
    <!-- allmenu-mobile start-->
    <nav id="menu" class="menu-mobile">
         <?php
            $customize_menu = new macho_bootstrap_walker;
            wp_nav_menu( 
                array( 
                    'theme_location' => 'header-menu', 
                    'container' => 'false', 
                    'menu_id' => '', 
                    'menu_class' => '',
                    'walker' => $customize_menu,
                )
            ); ?>
    </nav>
</main>
</body>
</html>
<?php wp_footer(); ?>
<script>
	function getCookie(name) {
	  const value = `; ${document.cookie}`;
	  const parts = value.split(`; ${name}=`);
	  if (parts.length === 2) return parts.pop().split(';').shift();
	}
 	var ul = document.getElementById("menu-header");
  	var li = document.createElement("li");
	var a = document.createElement("a");
	li.setAttribute("class", "flag-home");
	var img = document.createElement("img");
	console.log(getCookie('pll_language'));
	if(getCookie('pll_language') === 'ja') {
      a.href = "/vi/";
	   img.src = "<?php echo get_template_directory_uri(); ?>/assets/images/vietnam.png";
	} else {
      a.href = "/ja/";
	   img.src = "<?php echo get_template_directory_uri(); ?>/assets/images/japan.png";
	}
	a.appendChild(img);
	li.appendChild(a);
	ul.appendChild(li);
	
	//mobile
	var ulMobile = document.getElementById("menu-nav-vi");
  	var liMobile = document.createElement("li");
	var aMobile = document.createElement("a");
	li.setAttribute("class", "flag-home");
	var imgMobile = document.createElement("img");
	console.log(getCookie('pll_language'));
	if(getCookie('pll_language') === 'ja') {
      aMobile.href = "/vi/";
	   imgMobile.src = "<?php echo get_template_directory_uri(); ?>/assets/images/vietnam.png";
	} else {
      aMobile.href = "/ja/";
	   imgMobile.src = "<?php echo get_template_directory_uri(); ?>/assets/images/japan.png";
	}
	imgMobile.style.width = '70px';
	aMobile.appendChild(imgMobile);
	liMobile.appendChild(aMobile);
	ulMobile.appendChild(liMobile);
</script>
<script>
	var body  = document.getElementsByTagName("body")[0];
	var ulMobile = document.getElementById("menu-nav-vi");
	var liMobile = document.createElement("li");
	var inputMobile = document.createElement("input");	
	var btnSearchMobile = document.createElement("button");
	
	inputMobile.style.width = "100%";
	inputMobile.style.hieght = "30px";
	inputMobile.placeholder = "Nhập từ khóa cần tìm";
	inputMobile.classList.add('form-control','search-ajax');
	
	btnSearchMobile.type = 'submit';
	btnSearchMobile.classList.add('btn','btn-search');
	
	liMobile.style.display = 'flex';
	
	liMobile.appendChild(inputMobile);	
	liMobile.appendChild(btnSearchMobile);
	ulMobile.appendChild(liMobile);
	
	var list = document.getElementById("menu-nav-vi");
  	list.insertBefore(liMobile, list.childNodes[0]);
	
	var timeout = null; // khai báo biến timeout
    $(".search-ajax").keyup(function(){ // bắt sự kiện khi gõ từ khóa tìm kiếm
        clearTimeout(timeout); // clear time out
        timeout = setTimeout(function (){
           call_ajax(); // gọi hàm ajax
        }, 1000);
    });
    function call_ajax() { // khởi tạo hàm ajax
        var data = $('.search-ajax').val(); // get dữ liệu khi đang nhập từ khóa vào ô
        $.ajax({
            type: 'POST',
            async: true,
            url: '<?php echo admin_url('admin-ajax.php');?>',
            data: {
                'action' : 'Post_filters', 
                'data': data
            },
            beforeSend: function () {
            },
            success: function (data) {
				console.log(data);
				if($( window ).width()<500){
					console.log('a');
					if(!$('#list-result').length){
						console.log('e');
						$( "<div id='list-result'></div>" ).insertAfter( ".modal-header" );
						$('#list-result').html(data);
						$('#timkiemModal').css('z-index','9999999');
						$('#timkiemModal').css('display','block');
						$('#timkiemModal').css('opacity','1');

					}else{
						console.log('d');	
						$('#list-result').html(data);
						$('#timkiemModal').css('z-index','9999999');
						$('#timkiemModal').css('display','block');						
						$('#timkiemModal').css('opacity','1');
					}
				}else{
					console.log('b');
                	$('#load-data').html(data); // show dữ liệu khi trả về
				}
            }
        });
    }
	
	function myFunction() {
	  	console.log('myFunction');
		$('#timkiemModal').css('z-index','1000');
		$('#timkiemModal').css('display','nonhe');						
		$('#timkiemModal').css('opacity','0');
	}
</script>