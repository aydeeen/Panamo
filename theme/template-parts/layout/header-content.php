<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ple
 */

$logo    = get_field('logo', 'option');
$button  = get_field('button', 'option');
$tagline = get_field('tagline', 'option');
?>

<header id="masthead" class="shadow-bottom">
	<div class="text-sm sm:text-base text-center text-white font-bold p-2 bg-gradient-to-br from-main to-main-dark">
		<p><?php echo esc_html( $tagline ); ?></p>
	</div>
	<div class="max-w-content mx-auto p-5">
		<nav id="site-navigation" class="flex items-center justify-between" aria-label="<?php esc_attr_e( 'Main Navigation', 'ple' ); ?>">
			<a href="/" rel="home">
				<img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" class="max-w-150px" />
			</a>

			<a href="<?php echo esc_url( $button["url"] ); ?>" role="button" target="<?php echo esc_attr( $button['target'] ? $button['target'] : '_self' ); ?>" class="btn">
      			<span><?php echo esc_html( $button["title"] ); ?></span>
			</a>
		</nav>
	</div>
</header>
