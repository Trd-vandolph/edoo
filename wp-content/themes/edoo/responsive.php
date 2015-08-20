<?php
	/**
	* Template Name: Responsive Design Service
	*
	* @package WordPress
	* @subpackage Edoo Theme
	* @since Edoo Theme
	* Template Author: Vandolph C. Reyes
	*/
?>

<?php get_header(); ?>
<section id="first">
	<?php
		$page = get_page_by_path( 'first' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="second">
	<?php
		$page = get_page_by_path( 'second' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="third" class="<?php echo $en; ?>">
	<?php
		$page = get_page_by_path( 'third' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="fourth">
	<?php
		$page = get_page_by_path( 'fourth' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<?php echo get_footer(); ?>
