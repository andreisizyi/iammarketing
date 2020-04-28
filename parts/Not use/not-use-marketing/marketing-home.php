<section id="marketing" class="s-content bg-grey">
	<div class="anc" id="s2_anc"></div>
	<div class="container">
		<?php
			$post_id = get_post( 13 );
			echo '<h2>'.$post_id->post_title.'</h2><div class="text56 m-auto">';
			$content = $post_id->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content.'</div>';
			
		?>
		<div class="svg-container m-auto">
			<?php get_template_part('parts/marketing/marketing-list'); ?>
			<a href="/internet-marketing">
				<button class="std mt-5" type="button">Подробнее</button>
			</a>
		</div>
</section>