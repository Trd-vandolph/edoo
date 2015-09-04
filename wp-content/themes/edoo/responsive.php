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
<section id="first" class="<?php echo $ja; ?>">
	<?php
		$page = get_page_by_path( 'first' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="second" class="<?php echo $ja; ?>">
	<?php
		$page = get_page_by_path( 'second' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="third" class="<?php echo $en . $ja; ?>">
	<?php
		$page = get_page_by_path( 'third' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<section id="fourth" class="<?php echo $ja; ?>">
	<?php
		$page = get_page_by_path( 'fourth' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<div class="fixed-button">
	<a href="<?php echo $fixed_button; ?>" target="_blank"><?php echo $fixed_message; ?></a>
</div>
<?php echo get_footer(); ?>
