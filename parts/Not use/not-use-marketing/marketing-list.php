<?php 
$marklist=(array(
	'kontext-adv'=>'Настройка контекстной рекламы',
	'seo'=>'СЕО продвижение сайта',
	'social-network'=>'Продвижение в социальных сетях и лидогенерация',
	'search-reputation'=>'Репутация вашего сайта  в поисковой выдаче',
	'target-adv'=>'Таргетированная<br>реклама',
	'analitics-site'=>'Аналитика действующего сайта',
	'account-audit'=>'Аудит рекламного<br>аккаунта',
	'sms'=>'СМС рассылки'
));
echo '<div class="row vw-pad">';
foreach ($marklist as $img => $text) {
	echo
	'<div class="col-md-3 col-6">
		<div class="box w-100">
			<img title="" alt="" class="times toggle-m" width="95" height="95" src="'.get_template_directory_uri().'/images/marketing-list/'.$img.'.svg">
			<p>'.$text.'</p>
		</div>
	</div>';
}
echo '</div>';
?>