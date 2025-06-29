<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package panamo
 */

$footer_logo = get_field('footer_logo', 'option');
?>

<footer id="colophon" class="bg-gradient-to-br from-main-dark to-main">
	<div class="flex justify-between gap-10">
		<div class="max-w-content mx-auto p-6">
			<?php echo wp_get_attachment_image( $footer_logo, 'full', false, ["class" => "max-w-150px"] ); ?>
		</div>
	</div>
</footer><!-- #colophon -->

<div x-data="{ isVisible: false }" x-init="window.addEventListener('scroll', () => { isVisible = window.scrollY > 100; })" class="fixed bottom-6 right-6 z-50" x-show="isVisible" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-2">
  	<button class="bg-main size-12 border border-solid border-white rounded-full flex justify-center items-center [&:hover]:bg-white [&:hover]:border-main transition-colors [&:hover_svg_path]:stroke-main [&_svg_path]:transition-[stroke]" title="Scroll to top" aria-label="Scroll to top" @click="window.scrollTo({ top: 0, behavior: 'smooth' })">
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12 19L12 5" stroke="#ECE3CF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M5 12L12 5L19 12" stroke="#ECE3CF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
  </button>
</div>	