<?php
/**
 * Calendly Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title = get_field('title');
?>

<section <?php echo $id; ?> class="bg-cover bg-center bg-no-repeat">
    <div class="mx-auto max-w-77 sm:max-w-89.5 lg:max-w-167.5 2xl:max-w-223">
        <h2 class="heading [@media(min-width:698px)]:mb-0"><?php echo esc_html( $title ); ?></h2>

        <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/d/cq6z-8b9-q2s/panamo-strategy-call" data-resize="true" style="min-width:320px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
        <!-- Calendly inline widget end -->
    </div>
</section>