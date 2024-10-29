<?php
/**
 * Header Site
 *
 * Handle header Site.
 *
 * @package Ananta_Gutenberg_Site_Builder_Template
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}

?>
<div id="anant-page" class="anant-headNfoot-site">

<?php do_action( '_ananta_head_' ); ?>

</div>