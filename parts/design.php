<?php 
echo '<div class="row vw-pad justify-content-center array-row">';
foreach ($marklist as $text => $values) {
	foreach ($values as $img => $link) {
		echo
		'<div class="col-md-3 col-6">
			<div class="box padding-box w-100">
				<a href="/'.$link.'">
					<div class="box-image">
						<img title="" alt="" class="times toggle-m" width="95" height="95" src="'.get_template_directory_uri().'/images/'.$img.'.svg">
					</div>
					<h3>'.$text.'</h3>
				</a>
			</div>
		</div>';
	}
}
echo '</div>';
?>