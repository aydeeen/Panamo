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

$title             = get_field('title');
$button            = get_field('button');
$with_us_title     = get_field('with_us_title');
$with_others_title = get_field('with_others_title');
?>

<section <?php echo $id; ?> >
    <h2 class="heading sm:mb-14"><?php echo esc_html( $title ); ?></h2>
    <div class="grid grid-cols-2 gap-6 sm:gap-10 justify-items-center max-w-7xl mx-auto mb-10 sm:mb-14">
        <div>
            <h3 class="[@media(max-width:549px)]:min-h-14 text-xl md:text-2xl text-green font-bold mb-6 flex items-center"><?php echo esc_html( $with_us_title ); ?></h3>
            <ul class="grid gap-4">
                    <?php while (have_rows('with_us')): the_row(); 
                    $text = get_sub_field('text');
                    ?>
                        <li class="flex items-center gap-2 text-sm md:text-base font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#19c516" class="shrink-0 size-6 md:size-8" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>                        
                            <?php echo esc_html( $text ); ?>
                        </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div>
            <h3 class="[@media(max-width:549px)]:min-h-14 text-xl md:text-2xl text-red font-bold mb-6 flex items-center"><?php echo esc_html( $with_others_title ); ?></h3>
            <ul class="grid gap-4">
                <?php while (have_rows('with_others')): the_row(); 
                    $text  = get_sub_field('text');
                    ?>
                        <li class="flex items-center gap-2 text-sm md:text-base font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#ff0000" class="shrink-0 size-6 md:size-8" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm37.66,130.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>                 
                            <?php echo esc_html( $text ); ?>
                        </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <a href="<?php echo esc_url( $button["url"] ); ?>" role="button" target="<?php echo esc_attr( $button['target'] ? $button['target'] : '_self' ); ?>" class="btn mx-auto max-w-60">
        <span><?php echo esc_html( $button['title'] ); ?></span>
    </a>
</section>
