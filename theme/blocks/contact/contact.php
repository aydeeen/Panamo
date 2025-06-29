<?php
/**
 * Contact Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title = get_field('title');
?>

<section <?php echo $id; ?> >
    <h2 class="heading"><?php echo esc_html( $title ); ?></h2>
    <?php echo do_shortcode('[contact-form-7 id="77d5e61" title="Contact form"]'); ?>
</section>







