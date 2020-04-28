jQuery(function($) {
	function butactive( countpage ) {
		let _this = $(this);
		if (this_page < countpage ) {
			$('.btn-next').addClass('active');
		} else {
			$('.btn-next').removeClass('active');
		};
		if (this_page < 2) {
			$('.btn-back').removeClass('active');
		} 
		else if (this_page > 1) {
			$('.btn-back').addClass('active');
		};
		//console.log(countpage);
	}
	$('.btn-next').on('click', function() {
		let _this = $(this);
		if ($(_this).hasClass('active')) {
			$('.loop-portfolio').css('opacity','0');
			$('#portfolio .load_icon').fadeIn();
			let data = {
				'action': 'loadmore',
				'query': _this.attr('data-param-posts'),
				'page': this_page + 1,
				'tpl': _this.attr('data-tpl')
			}
			var countpage = _this.attr('data-max-pages');
			console.log(this_page);
			$.ajax({
				url: '/wp-admin/admin-ajax.php',
				data: data,
				type: 'POST',
				success: function(data) {
					if (data != 0) {
						this_page++;
						console.log(this_page);
						$('.btn-next').addClass('active');
						butactive(countpage);
						setTimeout(function () {
						$('.loop-portfolio').css('opacity','1').html(data);
						}, 300);
						$('.btn-next').attr('data-tpl','ttttttttttttttttttt');
					}
				}
			});
			$('#portfolio .load_icon').fadeOut();
		}
	});
	$('.btn-back').on('click', function() {
		let _this = $(this);
		if ($(_this).hasClass('active')) {
			$('.loop-portfolio').css('opacity','0');
			$('#portfolio .load_icon').fadeIn();
			let data = {
				'action': 'loadmore',
				'query': _this.attr('data-param-posts'),
				'page': this_page - 1,
				'tpl': _this.attr('data-tpl')
			}
			var countpage = _this.attr('data-max-pages');
			$.ajax({
				url: '/wp-admin/admin-ajax.php',
				data: data,
				type: 'POST',
				success: function(data) {
					if (this_page > 1) {
						this_page = this_page - 1;
						//console.log(this_page);
						butactive(countpage);
						setTimeout(function () {
						$('.loop-portfolio').css('opacity','1').html(data);
						}, 300);	
					}
				}
			});
			$('#portfolio .load_icon').fadeOut();
		}
	});
	$('.btn-work').on('click', function() {
		let _this = $(this);
		$('.loop-portfolio').css('opacity','0');
		$('#portfolio .load_icon').fadeIn();
		let data = {
			'action': 'loadcat',
			'query': _this.attr('data-param-posts'),
			'page': this_page,
			'tpl': _this.attr('data-tpl')
		}
		$('.navigation a').attr('data-tpl', _this.attr('data-tpl'))
		$('.navigation a').attr('data-max-pages', _this.attr('data-max-pages'))
		var countpage = _this.attr('data-max-pages');
		$.ajax({
			url: '/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			success: function(data) {
				//console.log(this_page);
				this_page = 1;
				butactive(countpage);
				$('.btn-work').removeClass('active');
				_this.addClass('active');
				setTimeout(function () {
				$('.loop-portfolio').css('opacity','1').html(data);
				}, 300);
			}
		});
		$('#portfolio .load_icon').fadeOut();
	});	
});