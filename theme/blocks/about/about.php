<?php
/**
 * About Block template.
 *
 * @param array $block The block settings and attributes.
 */

$id = NULL;
if ( ! empty( $block['anchor'] ) ) {
    $id = 'id="' . esc_attr( $block['anchor'] ) . '" ';
} 

$title  = get_field('title');
$button = get_field('button');
?>

<section <?php echo $id; ?> >
    <h2 class="heading"><?php echo esc_html( $title ); ?></h2>
    <?php if ( have_rows('items') ): ?>
        <div class="max-w-1300px mx-auto grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 ~gap-6/8 mb-10 auto-rows-fr">
            <?php while (have_rows('items')): the_row(); 
                $icon  = get_sub_field('icon');
                $title = get_sub_field('title');
                $text  = get_sub_field('text');
                ?>
                    <div class="bg-main rounded-2xl overflow-hidden shadow-[0px_9px_30px_0px_rgba(245,36,78,10%)] text-white">
                        <div class="~p-6/8 h-full flex flex-col gap-5 justify-between [&_svg]:fill-white [&_svg]:shrink-0">
                            <div class="flex gap-2">
                                <?php echo $icon; ?>
                                <h3 class="text-2xl font-semibold"><?php echo esc_html( $title ); ?></h3>
                            </div>
                            <p class="text-lg leading-relaxed"><?php echo esc_html( $text ); ?></p>
                        </div>
                    </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <a href="<?php echo esc_url( $button["url"] ); ?>" role="button" target="<?php echo esc_attr( $button['target'] ? $button['target'] : '_self' ); ?>" class="btn mx-auto max-w-60">
        <span><?php echo esc_html( $button['title'] ); ?></span>
    </a>
</section>
