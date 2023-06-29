<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

<aside class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- .widget-area -->

<?php
endif;
?>
<!--푸터-->
<footer class="footer">
	<section class="inner">
		<section class="flex_wrap">
			<h3>
				<a href=""><img src="/wp-content/themes/twentytwentyone/images/footer_logo.png" alt="푸터로고"></a>
			</h3>
			<ul>
				<li>
					<span>회사명 : 한국치아금매입소</span>
					<span> 사업자등록번호 : 123-45-6789</span>
					<span>대표:홍길동</span>

				</li>

				<li>
					<span>주소: 대전광역시 동구 중동 12번길 501호</span>
				</li>

				<li>
					<span>대표전화 : 010-1234-5678</span>
					<span>팩스: 123-456-7890</span>
					<span>우편번호:12345</span>
				</li>
				
				<li><p class="copyright">ⓒ한국치아금매입소 ALL RIGHT RESERVED.</p></li>
			</ul>
		
			</section>
			
	</section>
</footer>
<!--// 푸터-->