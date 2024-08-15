<?php
function dylanluke_register_example_pattern() {
    if ( function_exists( 'register_block_pattern' ) ) {
        register_block_pattern(
            'dylanluke/example-pattern',  // This is the slug (unique identifier) for the pattern
            array(
                'title'       => __( 'Example Pattern', 'dylanluke' ),  // Title of the pattern
                'description' => _x( 'A custom block pattern.', 'Block pattern description', 'dylanluke' ),  // Description of the pattern
                'content'     => '<!-- wp:paragraph --><p>This is an example block pattern.</p><!-- /wp:paragraph -->',  // Content of the pattern
                'categories'  => array( 'text' ),  // Categories the pattern belongs to
                'keywords'    => array( 'example', 'custom' ),  // Keywords for searching the pattern
            )
        );
    }
}
add_action( 'init', 'dylanluke_register_example_pattern' );
?>
