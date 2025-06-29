<?php
/**
 * Thank You Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title             = get_field('title');
$subtitle          = get_field('subtitle');
$subtitle_2        = get_field('subtitle_2');
$button            = get_field('button');
$with_us_title     = get_field('with_us_title');
$with_others_title = get_field('with_others_title');
?>

<section <?php echo $id; ?> class="h-[calc(100vh-224px)] flex flex-col justify-center" >
    <h1 class="heading"><?php echo wp_kses_post( $title ); ?></h1>
    <h2 class="heading-small mb-5"><?php echo esc_html( $subtitle ); ?></h2>
    <h2 class="heading-small ~mb-10/12"><?php echo esc_html( $subtitle_2 ); ?></h2>
    <a href="<?php echo esc_url( $button["url"] ); ?>" role="button" target="<?php echo esc_attr( $button['target'] ? $button['target'] : '_self' ); ?>" class="btn mx-auto max-w-60">
        <span><?php echo esc_html( $button['title'] ); ?></span>
    </a>
</section>
