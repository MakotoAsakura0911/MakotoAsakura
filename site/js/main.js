
// グローバル変数定義
// html文書がロードされた瞬間に実行される

$(function(){
    var rwdMenu = $('#menuList'),
    switchPoint = 768,
    slideSpeed = 400;

    var menuSouce = rwdMenu.html();

    $(window).load(function(){

        function menuSet(){
            if(window.innerWidth <= switchPoint){
                if(!($('#rwdMenuWrap').length)){
                    $('body').prepend('<header id="rwdMenuWrap"><div id="switchBtnArea"><h1 id="logo"><a href="#content1" class="nav_1"></a></h1><a href="javascript:void(0);" id="switchBtn"><span></span><span></span><span></span></a></div></header>');
                    $('#rwdMenuWrap').append(menuSouce);

                    var menuList = $('#rwdMenuWrap > ul');

                    $('#switchBtn').on('click', function(){
                        menuList.slideToggle(slideSpeed);
                        $(this).toggleClass('btnClose');
                    });
                }
            } else {
                $('#rwdMenuWrap').remove();
            }
        }

        $(window).on('resize', function(){
            menuSet();
        });

        menuSet();
    });
});





/////////////////////////ナビゲーションクリック移動/////////////////////////
$(function() {
	// ナビゲーションのリンクを指定
	var navLink = $('ul li a , h1 a');

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


/////////////////////////_コンテンツ１_/////////////////////////
$(function(){
	// Trigger maximage
		jQuery('#maximage').maximage();
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


/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
//  コンテンツ4 --- ギャラリー表示 ---
$(function(){
  $("#gallery").justifiedGallery({
    rowHeight : 300,
    lastRow : 'nojustify',
    margins : 3
  });
});
