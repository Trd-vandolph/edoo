<?php
	/**
	* Template Name: Contact Form Page
	*
	* @package WordPress
	* @subpackage Edoo Theme
	* @since Edoo Theme
	* Template Author: Vandolph C. Reyes
	*/
?>

<?php get_header(); ?>
<section id="contact">
	<?php
		$page = get_page_by_path( 'contact-form' );
		if( isset( $page ) ) {
			echo apply_filters( 'the_content', $page->post_content );
		}
	?>
</section>
<?php echo get_footer(); ?>
