jQuery(function($) {
	function butactive( countpage ) {
		let _this = $(this);
		if (this_page_logo < countpage ) {
			$('.btn-next-clients').addClass('active');
		} else {
			$('.btn-next-clients').removeClass('active');
		};
		if (this_page_logo < 2) {
			$('.btn-back-clients').removeClass('active');
		} 
		else if (this_page_logo > 1) {
			$('.btn-back-clients').addClass('active');
		};
		//console.log(countpage);
	}
	$('.btn-next-clients').on('click', function() {
		let _this = $(this);
		if ($(_this).hasClass('active')) {
			$('.loop-portfolio-clients').css('opacity','0');
			$('#clients .load_icon').fadeIn();
			let data = {
				'action': 'loadmore',
				'query': _this.attr('data-param-posts'),
				'page': this_page_logo + 1,
				'tpl': _this.attr('data-tpl')
			}
			var countpage = _this.attr('data-max-pages');
			console.log(this_page_logo);
			$.ajax({
				url: '/wp-admin/admin-ajax.php',
				data: data,
				type: 'POST',
				success: function(data) {
					if (data != 0) {
						this_page_logo++;
						console.log(this_page_logo);
						$('.btn-next-clients').addClass('active');
						butactive(countpage);
						setTimeout(function () {
						$('.loop-portfolio-clients').css('opacity','1').html(data);
						}, 300);
					}
				}
			});
			$('#clients .load_icon').fadeOut();	
		}
	});
	$('.btn-back-clients').on('click', function() {
		let _this = $(this);
		if ($(_this).hasClass('active')) {
			$('.loop-portfolio-clients').css('opacity','0');
			$('#clients .load_icon').fadeIn();
			let data = {
				'action': 'loadmore',
				'query': _this.attr('data-param-posts'),
				'page': this_page_logo - 1,
				'tpl': _this.attr('data-tpl')
			}
			var countpage = _this.attr('data-max-pages');
			$.ajax({
				url: '/wp-admin/admin-ajax.php',
				data: data,
				type: 'POST',
				success: function(data) {
					if (this_page_logo > 1) {
						this_page_logo = this_page_logo - 1;
						//console.log(this_page_logo);
						butactive(countpage);
						setTimeout(function () {
						$('.loop-portfolio-clients').css('opacity','1').html(data);
						}, 300);	
					}
				}
			});
			$('#clients .load_icon').fadeOut();
		}
	});
});