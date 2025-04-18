<?php

if ( ! betterdocs()->settings->get( 'enable_tags' ) ) {
	return;
}

	/** @var \WP_Post $post */
	global $post;
	$product_terms = wp_get_object_terms( $post->ID, 'doc_tag' );

if ( empty( $product_terms ) ) {
	return;
}

	$_terms = [];

if ( ! empty( $product_terms ) ) {
	foreach ( $product_terms as $term ) {
		$_terms[] = wp_kses_post(
			'<a href="' . get_term_link( $term->slug, 'doc_tag' ) . '">' . esc_html( $term->name ) . '</a>'
		);
	}
}

	$wrapper_attributes = [
		'class' => 'betterdocs-tags'
	];

	if ( isset( $widget_type ) && $widget_type == 'blocks' ) {
		$wrapper_attributes['class'] .= ' ' . $blockId;
	}

	$wrapper_class = betterdocs()->template_helper->get_html_attributes( $wrapper_attributes );
	?>

<div <?php echo $wrapper_class; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php echo implode( ', ', $_terms ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
