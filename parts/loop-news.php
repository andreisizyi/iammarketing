<?php 
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
					echo	'<span class="tags">';
							$posttags = get_the_tags();
							if( $posttags ){
								foreach( $posttags as $tag ){
									echo $tag->name; 
								}
							}
					echo	'</span>
							<p>'
							.get_excerpt(250).
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
?>