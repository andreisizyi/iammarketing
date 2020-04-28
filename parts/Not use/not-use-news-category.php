<section id="news" class="s-content pt-0">
	<div class="container">
	<?php
		$post_id = get_post( 22 );
		echo '<h2>'.$post_id->post_title.'</h2>
		<div class="text56 m-auto">';
		$content = $post_id->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo $content.'</div>';
		$news_Query = new WP_Query( array(
			'post_type'        => 'post', 
			'post_status'      => 'publish',
			'posts_per_page'   => 3,
			'category_name'   => 'blog'
		));
		echo '<div class="row vw-pad justify-content-center">';
		if ( $news_Query->have_posts() ) {
			while ( $news_Query->have_posts() ) { $news_Query->the_post();
				echo'
					<div class="col-md-4 col-sm-6 col-12">
						<div class="post">
							<div class="thumb-container">
							<a href="'.get_post_permalink().'">';
							the_post_thumbnail('post');
					echo	'</a></div>
							<h3>';
							the_title();
					echo	'</h3>';
					echo	'<span>';
							$posttags = get_the_tags();
							if( $posttags ){
								foreach( $posttags as $tag ){
									echo $tag->name; 
								}
							}
					echo	'</span>
							<p>'
							.get_the_excerpt().
							'</p>
							<a href="'.get_post_permalink().'">Читать дальше 
								<svg class="link-ico" width="34" height="26" viewBox="0 0 34 26" xmlns="http://www.w3.org/2000/svg">
								<rect x="20.8867" y="25.3438" width="4.41945" height="17.6778" transform="rotate(-135 20.8867 25.3438)"/>
								<rect x="17.7617" y="3.46875" width="4.41945" height="17.6778" transform="rotate(-45 17.7617 3.46875)"/>
								<rect x="29.7227" y="15.0537" width="28.7264" height="4.41945" transform="rotate(-180 29.7227 15.0537)"/>
								</svg>
							</a>
						</div>
					</div>';
					
			}
		}
		else { echo('<p>Материалов нет.</p>'); }
			wp_reset_postdata();
		?>
		</div>
		<div class="text56 m-auto">
			<a href="/blog">
				<button class="std mt-5" type="button">Все новости</button>
			</a>
		</div>
	</div>
</section>