<?php get_header(); ?>
<section id="s2" class="s-content">
	<div class="container">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1 class="blog-title"><?php the_title(); ?></h1>
			<?php if( has_excerpt() ){ ?>
				<p class="text56 m-auto">
					<?php 
					$content = get_the_excerpt();
					$content = wp_strip_all_tags($content);
					echo do_shortcode($content);
					?>
				</p>
			<?php } ?>
			<?php if( has_post_thumbnail() ){ ?>
				<div class="svg-container acquaintance m-auto">
					<?php the_post_thumbnail('full'); ?>
				</div>
			<?php } ?>
			<?php if ( !empty( get_the_content() ) ){  ?>
				<article class="box padding-box">
					<?php the_content(); ?>
				</article>
			<?php } ?>
		<?php endwhile; ?>
	</div>
</section>
<?php
$post_id = get_post( 271 );
$content = $post_id->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
get_footer();
?>
