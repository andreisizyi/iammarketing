<?php 
echo '<div class="row vw-pad justify-content-center">';
foreach ($marklist as $text => $values) {
	foreach ($values as $img => $link) {
		echo
		'<div class="col-md-3 col-6">
			<div class="box w-100">
				<a href="/'.$link.'">
					<img title="" alt="" class="times toggle-m" width="95" height="95" src="'.get_template_directory_uri().'/images/marketing-list/'.$img.'.svg">
					<p>'.$text.'</p>
				</a>
			</div>
		</div>';
	}
}
echo '</div>';
?>