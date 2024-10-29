<?php
/**
 * Full Page 
 *
 * Handle Full Page.
 *
 * @package Ananta_Full_Page_Template
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
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>
<div id="ananta-page" class="ananta-headNfoot-site">
	<?php do_action( '_ananta_head_' ); ?>
</div>
<div id="ananta-full-page" class="ananta-full-page-site">
<?php do_action( '_ananta_full_page_' ); ?>
</div>
<?php
do_action( '_ananta_foot_' );
wp_footer(); ?>
</body>
</html>
