<?php get_header(); ?>
<?php the_widget( $widget, $instance, $args ); ?> 
<section id="mainvisual">
	<div class="wrap">
		<div>
			<h2><span class="first">LEARNING</span><span>CHANGES YOUR LIFE</span></h2>
		</div>
		<div>
			<h3>Dhaka, the Capital of Bangladesh</h3>
		</div>
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
