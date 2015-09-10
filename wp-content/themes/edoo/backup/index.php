<?php get_header(); ?>
<section id="mainvisual">
	<div class="wrap">
		<?php
			$page = get_page_by_path( 'changes' );
			if( isset( $page ) ) {
				echo apply_filters( 'the_content', $page->post_content );
			}
		?>
	</div>
	<p class="balloon"><img src="<?php bloginfo( 'template_directory' ); ?>/img/balloon.png" /></p>
</section>
<section id="about">
	<?php
		$page = get_page_by_path( 'about' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="vision">
	<?php
		$page = get_page_by_path( 'vision' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="learning">
	<?php
		$page = get_page_by_path( 'learning' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="service">
	<?php
		$page = get_page_by_path( 'service' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="responsive">
	<?php
		$page = get_page_by_path( 'responsiveservice' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="team">
	<?php
		$page = get_page_by_path( 'team' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="contact">
	<?php
		$page = get_page_by_path( 'contact' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<?php get_footer(); ?>
