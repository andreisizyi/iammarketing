<?php 
if(isMobileDevice()) :
	$postperpage = 6;
else :
	$postperpage = 8;
endif;				
$mypost_Query = new WP_Query( array(
	'post_type'        => 'post', 
	'post_status'      => 'publish',
	'posts_per_page'   => $postperpage,
	'category_name'   => 'portfolio'
));
$termID = 6;
$taxonomyName = "category";
$termchildren = get_term_children( $termID, $taxonomyName );
foreach ($termchildren as $child) {
	$term = get_term_by( 'id', $child, $taxonomyName );
	$queryname = $term->slug;
	$$queryname = new WP_Query( array(
		'post_type'        => 'post', 
		'post_status'      => 'publish',
		'posts_per_page'   => $postperpage,
		'category_name'   => $term->name,
	) );
}
?>
<div class="w-100 menu-portfolio">
	<?php
	$term_main = get_category( $termID );
	echo "<a class='a-btn btn-work' data-param-posts='".serialize($mypost_Query->query_vars)."' data-max-pages='".$mypost_Query->max_num_pages."' data-tpl='".$term_main->slug."'>".$term_main->name."</a>
	<span>/</span>";
	$i = 1;
	$len = count($termchildren);
	$termID = 6;
	$taxonomyName = "category";
	$termchildren = get_term_children( $termID, $taxonomyName );
	foreach ($termchildren as $child) {
		$term = get_term_by( 'id', $child, $taxonomyName );
		$slug = $term->slug;
		//echo $$slug->max_num_pages;
		if (!$term->count == 0) {
			if($i == $len):
			echo "<a class='a-btn btn-work' data-param-posts='".serialize($$slug->query_vars)."' data-max-pages='".$$slug->max_num_pages."' data-tpl='".$slug."' >".$term->name."</a>";
			break;
			else:
			echo "<a class='a-btn btn-work' data-param-posts='".serialize($$slug->query_vars)."' data-max-pages='".$$slug->max_num_pages."' data-tpl='".$slug."' >".$term->name."</a>
			<span>/</span>";
			endif;
			$i++;
		}
	}
	?>
</div>
<div class="loop-outer position-relative">
	<div class="row no-gutters loop-portfolio">
		<?php
		if ( $mypost_Query->have_posts() ) {
			while ( $mypost_Query->have_posts() ) { $mypost_Query->the_post();
				echo'
				<div class="col-md-3 col-6">
					<a data-fancybox="gallery2" href="'.get_the_post_thumbnail_url($post, 'full').'">';
						the_post_thumbnail('portfolio');
				echo'</a>
				</div>';
			}
		}
		else { echo('<p>Материалов нет.</p>'); }
			wp_reset_postdata();
		?>
	</div>
	<div class="load_icon">
		<div class="windows8">
			<div class="wBall" id="wBall_1">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_2">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_3">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_4">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_5">
				<div class="wInnerBall"></div>
			</div>
		</div>
	</div>
</div>
<div class="navigation">
	<?php if ( $mypost_Query->max_num_pages > 1 ) { ?>
		<a class="a-btn btn-back" data-param-posts='<?php echo serialize($mypost_Query->query_vars); ?>' data-max-pages='<?php echo $mypost_Query->max_num_pages; ?>' data-tpl='portfolio'>
			<svg class="arrow arrow-left" width="33" height="26" viewBox="0 0 33 26" xmlns="http://www.w3.org/2000/svg">
			<rect x="12.5" y="0.34375" width="4.41945" height="17.6778" transform="rotate(45 12.5 0.34375)"/>
			<rect x="15.625" y="22.2188" width="4.41945" height="17.6778" transform="rotate(135 15.625 22.2188)"/>
			<rect x="3.66406" y="10.6338" width="28.7264" height="4.41945"/>
			</svg>
		</a>
	<?php } ?>
	<?php if ( $mypost_Query->max_num_pages > 1 ) { ?>
		<script> var this_page = 1;</script>
		<a class="a-btn btn-next active" data-param-posts='<?php echo serialize($mypost_Query->query_vars); ?>' data-max-pages='<?php echo $mypost_Query->max_num_pages; ?>' data-tpl='portfolio'>
			<svg class="arrow arrow-right" width="34" height="26" viewBox="0 0 34 26" xmlns="http://www.w3.org/2000/svg">
			<rect x="20.8867" y="25.3438" width="4.41945" height="17.6778" transform="rotate(-135 20.8867 25.3438)"/>
			<rect x="17.7617" y="3.46875" width="4.41945" height="17.6778" transform="rotate(-45 17.7617 3.46875)"/>
			<rect x="29.7227" y="15.0537" width="28.7264" height="4.41945" transform="rotate(-180 29.7227 15.0537)"/>
			</svg>
		</a>
	<?php } ?>
</div>