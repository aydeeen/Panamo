<?php
/**
 * Clients Block template.
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

<section <?php echo $id; ?> x-data="clientsCarouselFilter()" class="[&_.flickity-slider]:flex [&_.flickity-slider]:items-center [&_.flickity-button]:bg-main [&_.flickity-button-icon]:fill-white">
    <h1 class="heading"><?php echo esc_html( $title ); ?></h1>
    <a href="<?php echo esc_url( $button["url"] ); ?>" role="button" target="<?php echo esc_attr( $button['target'] ? $button['target'] : '_self' ); ?>" class="btn mx-auto mb-10 max-w-60">
        <span><?php echo esc_html( $button['title'] ); ?></span>
    </a>
    <?php if ( have_rows('clients') ): ?>
        <div class="-mx-5" x-show="active == 0" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
            <div x-data="clientsCarousel()" x-init="init()">
                <div class="clientsCarousel" x-ref="clientsCarousel">   
                    <?php while ( have_rows('clients') ): the_row(); 
                        $image = get_sub_field('logo');
                        ?>
                            <div class="flex justify-center mx-10 w-[calc(100%-40px)] sm:w-[calc(50%-40px)] md:w-[calc(45%-40px)] lg:w-[calc(40%-40px)] xl:w-[calc(33.333333%-40px)]">
                                <?php echo wp_get_attachment_image( $image, 'logo', false, [ 'class' => 'max-w-[350px] w-full max-h-[200px] object-contain' ] ); ?>
                            </div>
                    <?php endwhile; ?>	
                </div>	
            </div>
        </div>
    <?php endif; ?>
</section>

<script>
   const clientsCarousel = () => {
        return {
            active: 0,
            init() {
                const flkty = new Flickity(this.$refs.clientsCarousel, {
                    wrapAround: true,
                    autoPlay: true,
                    prevNextButtons: false,
                    pageDots: false
                });
                flkty.on('change', i => this.active = i);

                flkty.on('dragEnd', function() {
                    flkty.playPlayer(); // Restart the autoplay after interaction
                });
            }
        }
   } 
     
    const clientsCarouselFilter = () => {
        return {
            active: 0,
            changeActive(i) {
            this.active = i;
            
                this.$nextTick(() => {
                    let flkty = Flickity.data( this.$el.querySelectorAll('.carousel')[i] );
                    flkty.resize();
                });
            }
        }
    }
</script>
