<?php
function fse_child_styles() {
	wp_enqueue_style( 'fse-child-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'fse_child_styles' );

// Custom Block Styles
function ow_register_block_styles(){
	// Send an item to the top of a flex or grid container
	register_block_style(
		'core/group',
		array(
			'name' => 'ow-top',
			'label' => __( 'Send to top', 'ow' ),
			'style_handle' => 'ow-top'
		)
	);
	register_block_style(
		'core/paragraph',
		array(
			'name' => 'ow-top',
			'label' => __( 'Send to top', 'ow' ),
			'style_handle' => 'ow-top'
		)
	);

	// Set up the main card element
	register_block_style(
		'core/group',
		array(
			'name' => 'ow-card',
			'label' => __( 'Card', 'ow' ),
			'style_handle' => 'ow-card'
		)
	);

	// Set the height to 100%
	register_block_style(
		'core/cover',
		array(
			'name' => 'ow-height-full',
			'label' => __( 'Height 100%', 'ow' ),
			'style_handle' => 'ow-height-full'
		)
	);
	register_block_style(
		'core/group',
		array(
			'name' => 'ow-height-full',
			'label' => __( 'Height 100%', 'ow' ),
			'style_handle' => 'ow-height-full'
		)
	);

	// Use grid instead
	register_block_style(
		'core/group',
		array(
			'name' => 'ow-grid',
			'label' => __( 'Use Grid', 'ow' ),
			'style_handle' => 'ow-grid'
		)
	);
}
add_action( 'init', 'ow_register_block_styles' );