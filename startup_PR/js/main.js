
// グローバル変数定義
// html文書がロードされた瞬間に実行される

// オンロードイベント
// <body>に指定された各エレメント

/////////////////////////スクロールフェードイン/////////////////////////
$(function() {
	$('.fade1').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('in');
		}
	});
	$('.fade2').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('in');
		}
	});
	$('.fade3').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('in');
		}
	});
});
