<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	
	<meta name="viewport" content="target-densitydpi=device-dpi, user-scalable=0, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, width=device-width" />
	<title>한국치아금거래소</title>
	<link rel="icon" type="/wp-content/themes/twentytwentyone/image/png" sizes="96x96" href="/wp-content/themes/twentytwentyone/images/favicon-96x96.png">
	<link rel="stylesheet" href="/wp-content/themes/twentytwentyone/css/main.css" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>  
</head>

<body <?php body_class(); ?>>
    <!--ALL-->
    <div id="wrap">
    
	 <header class="header">
		  <section class="inner">
			<!--logo-->
			 <h1 class="logo"><a href="/">한국치아금거래소</a></h1>
			<!--// logo-->
			<!--gnb-->
			<nav class="gnb">
				<ul class="depth01">
				   <li class="title">
					   <a href="/회사소개" alt="">회사소개</a>
					</li>

					<li class="title">
						<a href="/택배매입신청">택배매입신청
							<div class="depth-warp">
								<ul class="depth02">
									<li><a href="/택배매입신청">택배매입신청</a></li>
								</ul>
								<ul class="depth02">
									<li><a href="/수령확인-동영상">수령확인 동영상</a></li>
								</ul>
							</div>
						</a>
					</li>

					<li class="title">
						<a href="/온라인-매입현황">온라인 매입현황</a>
					</li>

					<li class="title">
						<a href="/문의게시판">문의게시판</a>
					</li>

					<li class="title">
						<a href="/판매후기">판매후기</a>
					</li>		
				</ul>
			</nav>
			<!--// gnb-->

		</section>
	</header>

	<!--모바일 메뉴-->
	<div class="m_menu_wrap">
		<div class="m_menu"> 

			<h3 class="logo"><a href="/"><img src="/wp-content/themes/twentytwentyone/images/logo.png" alt="모바일 로고"></a></h3>  

			<div class="hamburger-menu">
				<div class="bar">
				</div>	
			</div>
		</div>    

		<nav class="mobile-menu">
			<ul>

				<li class="has-children"><a href="/회사소개">회사소개</a></li>		

				<li class="has-children">택배매입신청<span class="icon-arrow"></span>
					<ul class="children">
						<li><a href="/택배매입신청">택배매입신청</a></li>
						<li><a href="/수령확인-동영상">수령확인 동영상</a></li>
					</ul>
				</li>	  

				<li class="has-children"><a href="/온라인-매입현황">온라인 매입현황</a></li>
				
				<li class="has-children"><a href="/문의게시판">문의게시판</a></li>	           

				<li class="has-children"><a href="/판매후기">판매후기</a></li>	           
										
			</ul>    
		</nav>
	</div>
	<!--// 모바일 메뉴-->

	<script> 
		AOS.init(); 

		$(document).ready(function(){
			$(".depth01>li").mouseover(function(){
				$(this).children(".depth-warp").stop().slideDown(170);
			});
			$(".depth01>li").mouseleave(function(){
				$(this).children(".depth-warp").stop().slideUp(170);
			});
			$('.hamburger-menu').on('click', function() {
				$('.bar').toggleClass('animate');
				$('.mobile-menu').toggleClass('active');
				return false;
			})
			$('.has-children').on ('click', function() {
				$(this).children('ul').slideToggle('slow', 'swing');
				$('.icon-arrow1').toggleClass('open');
			});
		});    
	</script>
	

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
	</a>

	<?php //get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
