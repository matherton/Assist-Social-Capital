<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package StudioPress\Genesis
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    https://my.studiopress.com/themes/genesis/
 */

$people = require GENESIS_CONFIG_DIR . '/contributors.php';
$genesis_contributors = new Genesis_Contributors( $people );
$genesis_allowed_code = array(
		'code' => array(),
);
?>
<div class="wrap about-wrap">

<img src="<?php echo esc_attr( get_template_directory_uri() . '/lib/admin/images/whats-new.png' ); ?>" class="alignright whats-new" />

<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

<p class="about-text"><?php esc_html_e( 'Genesis 2.6 includes the ability to live preview all your theme and SEO settings using the WordPress customizer, support for AdSense Auto Ads, full WordPress title tag compatibility, and much more. See below for full changelog.', 'genesis' ); ?></p>

<div class="changelog">
	<div class="feature-section">
		<h2 class="screen-reader-text"><?php _e( 'Changes', 'genesis' ); ?></h2>

		<h3><?php esc_html_e( 'Added', 'genesis' ); ?></h3>
		<ul>
			<li><?php esc_html_e( 'Add option to sort Featured Posts by date modified.', 'genesis' ); ?></li>
			<li><?php echo wp_kses( __( 'Add contextual filter for <code>content</code> passed through the Markup API.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php echo wp_kses( __( 'Add <code>Genesis_Customizer</code> class.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php echo wp_kses( __( 'Add <code>Genesis_SEO_Document_Title_Parts</code> class.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php echo wp_kses( __( 'Add <code>title-tag</code> theme support by default.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php esc_html_e( 'Add class autoloader.', 'genesis' ); ?></li>
			<li><?php esc_html_e( 'Add support for AdSense Auto Ads.', 'genesis' ); ?></li>
			<li><?php echo wp_kses( __( 'Add <code>aria-label</code> attribute to secondary <code>nav</code> element.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php esc_html_e( 'Add allowance for extra attributes on script tags for registered scripts.', 'genesis' ); ?></li>
		</ul>

		<h3><?php esc_html_e( 'Changed', 'genesis' ); ?></h3>
		<ul>
			<li><?php echo wp_kses( __( 'Change URLs to <code>https</code> wherever possible.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php echo wp_kses( __( 'Update normalize.css to <code>7.0.0</code>.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php esc_html_e( 'Duplicate all theme and SEO settings in the Customizer.', 'genesis' ); ?></li>
			<li><?php echo wp_kses( __( 'Move all classes to their own files in <code>lib/classes</code>.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php echo wp_kses( __( 'Use Markup API for <code>entry-title-link</code>.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php esc_html_e( 'Use Markup API for 404 page title.', 'genesis' ); ?></li>
			<li><?php esc_html_e( 'Change description for headings on archive pages to account for accessibility.', 'genesis' ); ?></li>
			<li><?php esc_html_e( 'Improve color scheme retrieval function.', 'genesis' ); ?></li>
		</ul>

		<h3><?php esc_html_e( 'Fixed', 'genesis' ); ?></h3>
		<ul>
			<li><?php esc_html_e( 'More compliance with WordPress coding standards.', 'genesis' ); ?></li>
			<li><?php echo wp_kses( __( 'Set ID of <code>entry-pings</code> to <code>comments</code> if only pings exist.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php esc_html_e( 'Ensure default settings get saved to database in new installs.', 'genesis' ); ?></li>
			<li><?php echo wp_kses( __( 'Change <code>h3</code> to <code>h2</code> for titles in admin metaboxes.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php esc_html_e( 'Ensure theme support for Genesis import / export menu before outputting.', 'genesis' ); ?></li>
			<li><?php esc_html_e( 'Check for post parents before outputting parent in breadcrumbs.', 'genesis' ); ?></li>
			<li><?php echo wp_kses( __( 'Ensure <code>[post_tags]</code> and <code>[post_categories]</code> are valid for post type before outputting.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php echo wp_kses( __( 'Update <code>aria-label</code> attributes for <code>nav</code> elements to remove redundant "navigation" word.', 'genesis' ), $genesis_allowed_code ); ?></li>
		</ul>

		<h3><?php esc_html_e( 'Removed', 'genesis' ); ?></h3>
		<ul>
			<li><?php echo wp_kses( __( 'Remove duplicate <code>genesis_load_favicon</code> from being hooked to <code>wp_head</code>.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php echo wp_kses( __( 'Remove screen reader <code>h2</code> from inside Header Right widget area.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php echo wp_kses( __( 'Remove screen reader <code>h2</code> from inside primary <code>nav</code> element.', 'genesis' ), $genesis_allowed_code ); ?></li>
			<li><?php esc_html_e( 'Remove feed settings if Genesis 2.6 is your first version.', 'genesis' ); ?></li>
		</ul>


	</div>
</div>

<div class="project-leads">

	<h2><?php _e( 'Project Leads', 'genesis' ); ?></h2>

	<ul class="wp-people-group " id="wp-people-group-project-leaders">
		<?php
		$lead_developers = $genesis_contributors->find_by_role( 'lead-developer' );
		array_walk( $lead_developers, function( Genesis_Contributor $person ) {
			printf(
				'<li class="wp-person">' .
				'<a href="%1$s"><img src="%2$s" alt="%3$s" class="gravatar" /></a><a class="web" href="%1$s">%4$s</a>' .
				'<span class="title">%5$s</span>' .
				'</li>' . "\n",
				esc_url( $person->get_profile_url() ),
				esc_url( $person->get_avatar_url() ),
				esc_attr( $person->get_name() ),
				esc_html( $person->get_name() ),
				esc_html( $person->get_named_role() )
			);
		});
		?>
	</ul>

</div>

<div class="contributors">

	<h2><?php _e( 'Contributors', 'genesis' ); ?></h2>

	<ul class="wp-people-group" id="wp-people-group-contributing-developers">
		<?php
		$contributors = $genesis_contributors->find_contributors();
		array_walk( $contributors, function( Genesis_Contributor $person ) {
			printf(
				'<li class="wp-person">' .
				'<a href="%1$s"><img src="%2$s" alt="%3$s" class="gravatar" /></a><a class="web" href="%1$s">%4$s</a>' .
				'<span class="title">%5$s</span>' .
				'</li>' . "\n",
				esc_url( $person->get_profile_url() ),
				esc_url( $person->get_avatar_url() ),
				esc_attr( $person->get_name() ),
				esc_html( $person->get_name() ),
				esc_html( $person->get_named_role() )
			);
		});
		?>
	</ul>

</div>

<div class="return-to-dashboard">
	<p><a href="<?php echo esc_url( menu_page_url( 'genesis', 0 ) ); ?>"><?php _e( 'Go to Theme Settings &rarr;', 'genesis' ); ?></a></p>
	<?php if ( ! genesis_seo_disabled() ) : ?>
	<p><a href="<?php echo esc_url( menu_page_url( 'seo-settings', 0 ) ); ?>"><?php _e( 'Go to SEO Settings &rarr;', 'genesis' ); ?></a></p>
	<?php endif; ?>

</div>

</div>
