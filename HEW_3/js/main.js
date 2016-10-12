
// グローバル変数定義
// html文書がロードされた瞬間に実行される



// オンロードイベント
// <body>に指定された各エレメント
$(function(){
	$("#fontSizeController li").click(function () {
		var font = $("#fontSizeController li").index(this);
		switch(font){
		case 0 : $("body").css("font-size", + 0.75 + "em"); break;
		case 1 : $("body").css("font-size", + 1 + "em"); break;
		case 2 : $("body").css("font-size", + 1.2 + "em"); break;
		}
	});
});



/////////////////////////ナビゲーションクリック移動/////////////////////////
$(function() {
	// ナビゲーションのリンクを指定
	var navLink = $('nav li a , h1 a');

	// 各コンテンツのページ上部からの開始位置と終了位置を配列に格納しておく
	var contentsArr = new Array();
	for (var i = 0; i < navLink.length; i++) {
		// コンテンツのIDを取得
		var targetContents = navLink.eq(i).attr('href');
		// ページ内リンクでないナビゲーションが含まれている場合は除外する
		if(targetContents.charAt(0) == '#') {
			// ページ上部からコンテンツの開始位置までの距離を取得
			var targetContentsTop = $(targetContents).offset().top;
			// ページ上部からコンテンツの終了位置までの距離を取得
			var targetContentsBottom = targetContentsTop + $(targetContents).outerHeight(true) - 1;
			// 配列に格納
			contentsArr[i] = [targetContentsTop, targetContentsBottom]
		}
	};

	// 現在地をチェックする
	function currentCheck() {
		// 現在のスクロール位置を取得
		var windowScrolltop = $(window).scrollTop();
		for (var i = 0; i < contentsArr.length; i++) {
			// 現在のスクロール位置が、配列に格納した開始位置と終了位置の間にあるものを調べる
			if(contentsArr[i][0] <= windowScrolltop && contentsArr[i][1] >= windowScrolltop) {
				// 開始位置と終了位置の間にある場合、ナビゲーションにclass="current"をつける
				navLink.removeClass('current');
				navLink.eq(i).addClass('current');
				i == contentsArr.length;
			}
		};
	}

	// ページ読み込み時とスクロール時に、現在地をチェックする
	$(window).on('load scroll', function() {
		currentCheck();
	});

	// ナビゲーションをクリックした時のスムーズスクロール
	navLink.click(function() {
		$('html,body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, 800);
		return false;
	})
});



/////////////////////////スクロールフェードイン/////////////////////////
$(function() {
	$('.fade').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('in');
		}
		else{
			$(this).stop().removeClass('in');
		}
	});
});



/////////////////////////swiperスライダー_コンテンツ３_/////////////////////////
$(function(){
var swiper = new Swiper('.swiper-container', {
	pagination: '.swiper-pagination',
	paginationClickable: true,
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	parallax: true,
	speed: 600,
//	loop: true,
	});
});



/////////////////////////隠し文章表示・非表示_コンテンツ４_/////////////////////////
$(function(){
	$(".day").click(function(){
	  $($(this).next(".textArea")).animate(
		{height: "toggle", opacity: "toggle"},
		"nomal"
		);
	});
});



/////////////////////////写真ギャラリー_コンテンツ５_/////////////////////////
$(document).ready(function() {
	$("a[rel*=lightbox]").slimbox({
		previousKeys: [37, 80],
		nextKeys: [39, 78]
	});
});
