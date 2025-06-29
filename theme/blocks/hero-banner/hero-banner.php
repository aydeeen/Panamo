<?php
/**
 * Hero Banner Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$bg_image = get_field('bg_image');
$title    = get_field('title');
?>

<section <?php echo $id; ?> class="h-80 max-w-full bg-center bg-cover bg-no-repeat flex justify-center items-center" style="background-image: url('<?php echo esc_url( $bg_image ); ?>');">
    <h1 class="text-center text-5xl text-white font-bold"><?php echo esc_html( $title ); ?></h1>
</section>
