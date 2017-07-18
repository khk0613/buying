$(document).ready(function() {

	function validate(form) {
		error = '';

		if (!$(form + ' input[name=name]').val()) error += "名前を入力してください。\n";
		if (!$(form + ' input[name=email]').val()) error += "メールアドレスを入力してください。\n";
		if ($(form + ' input[name=category]:checked').length == 0) error += "お問い合わせの分野を選択してください。\n";
		if ($(form + ' textarea').val() == '') error += "お問い合わせ内容を入力してください。\n";

		if (error != '') {
			alert(error);
			return false;
		} else {
			$.ajax({
				url:'PHPMailer-master/send_mail.php',
				type:'post',
				data:{
					name:$(form + ' input[name=name]').val(),
					email:$(form + ' input[name=email]').val(),
					category:$(form + ' input[name=category]:checked').val(),
					content:$(form + ' textarea').val(),
					_token:$(form + ' input[name=_token]').val(),
				}
			}).done(function (response){
				if (response == 'Message has been sent') alert('お問い合わせいただきありがとうございます。');
			});
		}
	}

	// 서비스 필드 아이템 문의하기
	$('.btn-toi').click(function(){
		if ($(window).width() > 640) {
			toi_index = $(this).parent().index();
			$('.box-modal').fadeIn();
			$('.blackcover').fadeIn();	
			$('.box-modal input[type=checkbox]').eq(toi_index+3).click();	
			return false;
		} else {
			if ($(this).hasClass('on')){
				location.href = "m_index.php#inquiry";
				$(this).removeClass('on');
				return false;
			} else {
				$(this).addClass('on');
				return false;
			}
		}
		
	});

	// 문의하기
	$('.section4 form').submit(function(){
		validate('.section4');
		return false;
	});

	// 모달 문의하기
	$('.box-modal form').submit(function(){
		validate('.box-modal');
		return false;
	});

	// 문의하기 폼 모달 닫기
	// $('.box-modal .btn-close, .blackcover').click(function(){
	// 	$('.box-modal').fadeOut();
	// 	$('.blackcover').fadeOut();
	// 	$('.box-modal input[type=checkbox]').removeAttr('checked');
	// 	$('.box-modal input[name=name]').val('');
	// 	$('.box-modal input[name=email]').val('');
	// 	$('.box-modal textarea').val('');
	// 	return false;
	// });

	$('.btn-main-toi').click(function(){
		$('.box-modal').fadeIn();
		$('.blackcover').fadeIn();	
		return false;
	});

	// 내비게이션 스크롤 
	$('.wrap-header .box-header .ul-nav li a').click(function(){
		if ($(this).hasClass('btn-inquiry')) {
			$('.box-modal').fadeIn();
			$('.blackcover').fadeIn();	
		} else if ($(this).hasClass('btn-data')) {

		} else {
			point = $(this).parent().index();
			$('.wrap-header .box-header .ul-nav li').removeClass('active');
			$(this).parent().addClass('active');
			$('html, body').animate({scrollTop:$('.scroll_point').eq(point).offset().top - 60}, 500, 'swing');	
		}

		return false;
	});

	// 아코디언 슬라이드
	function accordion(current){			
		j = current;

		accordionSet = setInterval(function(){
			j++;
			if (j > $('.ul-accordion li').length - 1) {
				j = 0;
				$('.ul-accordion li').removeClass('open');
				$('.ul-accordion li').eq(0).addClass('open');
				$('.ul-accordion .box-close').fadeIn();
				$('.ul-accordion li').eq(0).find('.box-close').fadeOut();				
			} else {
				$('.ul-accordion li').eq(j).addClass('open');
				$('.ul-accordion .box-close').fadeIn();
				$('.ul-accordion li').eq(j).find('.box-close').fadeOut();				
			}
		},5000);
	}
	accordion(0);

	// 아코디언 이전/다음 버튼 컨트롤
	function accordionControl(start_index) {
		$('.ul-accordion li').removeClass('open');

		for (i = 0; i <= start_index; i++) {
			$('.ul-accordion li').eq(i).addClass('open');			
		}

		$('.ul-accordion .box-close').fadeIn();
		$('.ul-accordion li').eq(start_index).find('.box-close').fadeOut();
	}

	// 아코디언 재생
	$('.section3 .btn-play').click(function(){
		clearInterval(accordionSet);
		start_index = $('.ul-accordion .open').length - 1;
		accordion(start_index);		
		return false;
	});

	// 아코디언 정지
	$('.section3 .btn-stop').click(function(){
		clearInterval(accordionSet);
		return false;
	});

	// 아코디언 이전
	$('.section3 .btn-prev').click(function(){
		accordion_length = $('.ul-accordion li').length;
		open_count = $('.ul-accordion .open').length;
		start_index = open_count == 1 ? accordion_length - 1 : open_count - 2;

		clearInterval(accordionSet);
		accordionControl(start_index);

		return false;
	});

	// 아코디언 다음
	$('.section3 .btn-next').click(function(){
		accordion_length = $('.ul-accordion li').length;
		open_count = $('.ul-accordion .open').length;
		start_index = open_count == accordion_length ? 0 : open_count;

		clearInterval(accordionSet);
		accordionControl(start_index);

		return false;
	});

	// 아코디언 슬라이드
	$('.ul-accordion .box-close').click(function(){
		
		prev_open_index = $('.ul-accordion .open').index();
		current_open_index = $(this).closest('li').index();
		length = $('.ul-accordion li').length;

		if (current_open_index < prev_open_index) {
			for (i = length; i > current_open_index; i--) {
				$('.ul-accordion li').eq(i-1).removeClass('open');	
			}
		} else {
			for (i = 0; i < current_open_index - prev_open_index; i++) {
				$('.ul-accordion li').eq(i+1).addClass('open');		
			}
		}

		$(this).closest('li').addClass('open');
		$('.ul-accordion .box-close').fadeIn();
		$(this).fadeOut();

		clearInterval(accordionSet);	
		
		return false;		
	});

	// 탑버튼 생성
	if ($('.section1').length) {
		$(window).scroll(function(){
			scroll = $(window).scrollTop();		

			if (scroll > $('.section1').offset().top - 68) {
				$('.btn-top').fadeIn();
			} else {
				$('.btn-top').fadeOut();
			}
		});	
	}

	// 탑버튼 클릭
	$('.btn-top').click(function(){
		$('html, body').animate({scrollTop:0}, 500);
		return false;
	});
	
	// 메리트 슬라이드
	var mySwiper = new Swiper ('.slide-merit', {
        direction: 'horizontal',
        loop: true,        
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
	    pagination: '.swiper-pagination',
	    paginationClickable: true,
        paginationBulletRender: function (swiper, index, className) {
            return '<span class="' + className + '">強み 0' + (index + 1) + '</span>';
        }
    });  
    var mySwiper = new Swiper ('.slide-merit2', {
        direction: 'horizontal',
        loop: true,        
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
	    pagination: '.swiper-pagination',
	    paginationClickable: true,
        paginationBulletRender: function (swiper, index, className) {
            return '<span class="' + className + '">強み 0' + (index + 1) + '</span>';
        }
    });  


//햄버거

	$('.btn-hamburger').click(function(){
		$(this).toggleClass('open');
		$('.box-sidebar').toggleClass('open');
		//$('.blackcover').show();	
		if($(this).hasClass('open')){
			$('.blackcover').show();	
		}else{
			$('.blackcover').hide();	
		}
		
		return false;
	});

	$('.box-sidebar li a').click(function(){
		j = $(this).parent().index();
		console.log(j);
		$('body, html').animate({scrollTop:$('#section'+(j+1)).offset().top - 111},500);
		$('.btn-hamburger').toggleClass('open');
		$('.box-sidebar').toggleClass('open');
		return false;
	});

//사이드바
$('.box-sidebar li a').click(function(){
		j = $(this).parent().index();
		$('body, html').animate({scrollTop:$('#section'+(j+1)).offset().top - 111},500);
		$('.btn-hamburger').toggleClass('open');
		$('.box-sidebar').toggleClass('open');
		return false;
	});

//링크이동
// $('.m_inquiry').click(function(){
// 	var $location = $('.box-location').offset();
// 	// var $locationTop = $location.top;
// 	// console.log($locationTop);
// 	location.href='m_index.php';
// 	$('body,html').animate({scrollTop : $location.top},400);
// });
// // $(window).scroll(function(){
// //         var elem = $('.naver_wrap').offset();
// //         var $window = $(window).scrollTop();
// //         var height = elem.top;
// //         console.log($window);
// //         console.log(elem.top);
// //         if(height <  $window){
// //             $('.naver').addClass('on');
// //         } else{
// //             $('.naver').removeClass('on');
// //         }
// //     });



});