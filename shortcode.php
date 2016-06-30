<?php
/**
* Add Shortcode for embedding SVGs into posts
**/
function post_embed_svg( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'url' => '',
		),
		$atts,
		'embed-svg'
	);

	// Embed SVG into Post

	return file_get_contents($atts['url']);

}
add_shortcode( 'embed-svg', 'post_embed_svg' );

?>
