<?php 
echo'
	<div class="col-md-4 col-sm-6 col-12">
		<div class="post text-center">
			<div class="thumb-container">
				<a href="'.get_post_permalink().'">';
					the_post_thumbnail('post');
					echo	'</a></div>
							<h3>';
							the_title();
					echo	'</h3>
					<span><a href="'.get_post_permalink().'"><button class="std mt-4" type="button">Узнать условия</button></a>
	</div>
</div>';
?>