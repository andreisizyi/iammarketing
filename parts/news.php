<?php
	$thispost = get_the_ID();
	$news_Query = new WP_Query( array(
		'post_type'        => 'post', 
		'post_status'      => 'publish',
		'posts_per_page'   => 3,
		'post__not_in'     => array($thispost),
		'category_name'    => 'blog'
	));
echo '<div class="row vw-pad justify-content-center">';
		if ( $news_Query->have_posts() ) {
			while ( $news_Query->have_posts() ) { $news_Query->the_post();
				get_template_part('parts/loop-news');
			}
		}
		else { echo('<p>Материалов нет.</p>'); }
		wp_reset_postdata();
?>
</div>