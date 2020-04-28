</main>	
	<footer>
		<div class="container">
			<nav class="row">
				<div class="col-md-2 logo-ct">
					<a href="/"><img class="logo" title="" alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"></a>
				</div>
				<div class="col-md-3 padl tc">
					<?php  footermenu('menu_footer_1'); ?>
				</div>
				<div class="col-md-2 tc">
					<?php  footermenu('menu_footer_2'); ?>
				</div>
				<div class="col-md-2 tc">
					<?php  footermenu('menu_footer_3'); ?>
				</div>
				<div class="col-md-3 ct-block">
					<h2 class="f-title">+38(093) 014 96 60</h2>
					<button class="std" type="button" data-toggle="modal" data-target="#contactUs">Связаться</button>
					<p>г. Киев<br>
					ул. Депутатская 27, кв 13<br>
					03115</p>
					<div class="s-net">
						<a target="_blank" href="https://www.facebook.com/IAmMarketingKiev/"><img title="" alt="" src="<?php echo get_template_directory_uri(); ?>/images/social/facebook.svg"></a> <a target="_blank" href="https://www.instagram.com/iammarketingua/"><img title="" alt="" src="<?php echo get_template_directory_uri(); ?>/images/social/instagram.svg"></a>
					</div>
				</div>
			</nav>
			<div class="copyright">© 2019 I Am Marketing. Все права защищены.</div>
		</div>
		<div class="modal modal-iam fade" id="contactUs" tabindex="-1" role="dialog" aria-labelledby="contactUs" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h2 class="modal-title" id="exampleModalLongTitle">Связаться с нами</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true"><img title="" alt="" class="times" width="15" height="15" src="<?php echo get_template_directory_uri(); ?>/images/times-solid.svg"></span>
				</button>
			  </div>
			  <div class="modal-body">
				<?php echo do_shortcode('[contact-form-7 id="168" title="CF popup"]'); ?>
			  </div>
			  <div class="modal-footer">
			  </div>
			</div>
		  </div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>
