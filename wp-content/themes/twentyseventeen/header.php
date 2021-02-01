<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Toggle the visibility of content across your project with a few classes and our JavaScript plugins.">
    <meta name="generator" content="Jekyll v4.1.1">
    
    <meta name="docsearch:language" content="en">
    <meta name="docsearch:version" content="4.5">
    
    <meta name="author" content="Hoa sen">
    <meta http-equiv="content-language" content="vi" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <meta name='COPYRIGHT' content='&copy; http://duonglaohoasennhatban.com/' />
    <meta name="keywords" content="" />
    <meta property="og:title" content="website title" /> 
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:url" content="website link" /> 
    <meta property="og:image" content="image description" />
    <meta property="og:description" content="website description" /> 
    <meta property="og:site_name" content="website name" />
    <meta property="fb:admins" content="Facebook Admin ID page" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    
    <title>Viện Dưỡng lão Hoa Sen Nhật Bản</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/components/collapse/">
    
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/hoasen.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.mmenu.all.css" rel="stylesheet"/>
    
    <!-- Documentation extras -->
    <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-grid.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-reboot.css" rel="stylesheet"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/getting-started/download/">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@getbootstrap">
    <meta name="twitter:creator" content="@getbootstrap">
    <meta name="twitter:title" content="Collapse">
    <meta name="twitter:description" content="Toggle the visibility of content across your project with a few classes and our JavaScript plugins.">
    <meta name="twitter:image" content="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-social-logo.png">
    
    <!-- Facebook -->
    <meta property="og:url" content="<?php bloginfo('url') ?>">
	<meta property="og:title" content="<?php is_front_page() ? bloginfo('description') : wp_title(); ?>">
	<meta property="og:description" content="<?php bloginfo('description') ?>">
	<meta property="og:type" content="website">
	<meta property="og:image" content="<?php $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large'); echo $post_thumbnail[0]; ?>">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="100%">
	<meta property="og:image:height" content="630">
    
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.1.3.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/style.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mmenu.min.all.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.matchHeight.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
      ga('create', 'UA-146052-10', 'getbootstrap.com');
      ga('set', 'anonymizeIp', true);
      ga('send', 'pageview');
    </script>
    <script async src="https://www.google-analytics.com/analytics.js"></script>
</head>
<body>
<header class="">
	<nav class="main-header">
    	<div class="container d-flex">
        	<div class="logo-hdr mr-auto"><h1><a href="/<?php echo pll_current_language(); ?>/"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-hoasennhatban.png"/></a></h1></div>
			<div class="search-desktop">
				<form class="form-inline hdr-search">

					<?php
					$currentLang = pll_current_language();
					if(isset($currentLang)) {
						if($currentLang === 'ja') {
							echo '<input class="form-control  search-ajax" type="search" placeholder="キーワード...">';
						} else {
							echo '<input class="form-control  search-ajax" type="search" placeholder="Nhập từ khóa cần tìm...">';
						}
					} else {
						echo '<input class="form-control search-ajax" type="search" placeholder="Nhập từ khóa cần tìm...">';
					}
					?>
					<button class="btn btn-search" type="submit"></button>
				</form>
				<div style="z-index: 9999; position: absolute;background: white;" id="load-data" class="autocomplete-items"></div>
			</div>
				<div class="cate-mobile ml-auto"><a href="#menu"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/icon14-menu.png"/></a></div>
			
        </div>
    </nav>
    <nav class="menu-header">
        <?php
            $customize_menu = new macho_bootstrap_walker;
            wp_nav_menu( 
                array( 
                    'theme_location' => 'header-menu', 
                    'container' => 'false', 
                    'menu_id' => 'menu-header', 
                    'menu_class' => 'list-group list-group-horizontal ml-auto mnenu-pc container',
                    'walker' => $customize_menu,
                )
        ); ?>
		<!-- <li class="flag-home"><a href="#"><img alt="..." src="<?php echo get_template_directory_uri(); ?>/assets/images/japan.png"/></a></li> -->
    </nav> 
</header>