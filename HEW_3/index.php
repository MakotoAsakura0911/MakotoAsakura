<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("view/public.php");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/index.css" type="text/css" />
		<link rel="stylesheet" href="'.$level.'css/swiper.css">
		<link rel="stylesheet" href="'.$level.'css/slimbox2.css">';
//使用するjavascript(jQuery)を記入
$js = '<script type="text/javascript" src="'.$level.'js/swiper.min.js"></script>
		<script type="text/javascript" src="'.$level.'js/jquery.inview.js"></script>
		<script type="text/javascript" src="'.$level.'js/slimbox2.js"></script>';
//サイトのタイトルを記入
$title = '';
//サイトのキーワードを記入(表示には関係ない・任意)
$keywords = '';
//サイトの説明文を記入(表示には関係ない・任意)
$description = '';
//サイトの製作者を記入(表示には関係ない・任意)
$author = '';

/************
記入例
**************
//ファイルの回想を記入
$level = '../../';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/style.css" type="text/css" />
        <link rel="stylesheet" href="'.$level.'css/style.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '';・・・内容がない場合はそのままにする

//サイトのタイトルを記入
$title = 'webサイト -TOP-';
//サイトのキーワードを記入(表示には関係ない・任意)
$keyword = 'web,犬,単語';
//サイトの説明文を記入(表示には関係ない・任意)
$description = 'これはサイトの説明を表しています。';
//サイトの製作者を記入(表示には関係ない・任意)
$auther = 'IW32班';
*************
記入例終了
*************/


//////////////////////////////////////////
//head内の文章入力場所　終了
/////////////////////////////////////////
html_header();
html_nav();
?>
<!--ここからコンテントの内容始まる　-->
<article>

	<!-- コンテンツ１　-->
	<div id="MainContent1">

		<div id="Content1_1">
			<h1>Hair Color Code</h1>
		</div>

	</div>


	<!-- コンテンツ２　-->
	<div id="MainContent2">

		<div class="Content2-Box">
			<h2 class="fade">ABOUT</h2>
			<div class="Content2-Text">
				<p class="fade">このサイトは　　Hair Color　　をシュミレーションするサイトです。</p>
				<p class="fade">実際に染めたい色に染めても予想以外の色になってしまったという時に</p>
				<p class="fade">リアルタイムで写真を撮り、染めたい色を再現してくれる機能です。</p>
			</div>
		</div>

	</div>


	<!-- コンテンツ３　-->
	<div id="MainContent3">

		<div class="Content3-Box">
			<h2 class="fade">HOW TO</h2>
			<div class="Content3-Text fade">

				<!-- Slider -->
				<div class="swiper-container">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<!-- Slide-01　コンテンツを挿入する -->
							<p>スタートボタンをクリックして、</p>
							<p>ページ移動したあと写真を撮ります。</p>
							<p>写真は顔全体・髪の毛が入るようにしてください。</p>
						</div>

						<div class="swiper-slide">
							<!-- Slide-02　コンテンツを挿入する -->
							<p>写真を撮った後は染めたい色を選択し、</p>
							<p>自分好みの染めたい色を選んでください。</p>
							<p>染めたい色を選択すると、</p>
							<p>今の髪の毛の色と混合した色が表示されます。</p>
						</div>

						<div class="swiper-slide">
							<!-- Slide-03 コンテンツを挿入する -->
							<p>表示結果を携帯端末に送信・記録をして</p>
							<p>記録したものを予約した美容院へ提示してください。</p>
						</div>

					</div>

					<div class="swiper-pagination swiper-pagination-white swiper-pagination-clickable"></div>
					<div class="swiper-button-prev swiper-button-white"></div>
					<div class="swiper-button-next swiper-button-white"></div>
					<div class="swiper-scrollbar"></div>

				</div>

			</div>
		</div>

	</div>


	<!-- コンテンツ４　-->
	<div id="MainContent4">

		<div class="Content4-Box">
			<h2 class="fade">INFORMATION</h2>

			<div class="Content4-Text fade">
				<ul>
				<!-- NEWS1　-->
					<li>
						<span class="day">
							2016/09/20
							<span class="newTitle">『ミュータント・ニンジャ・タートルズ：影＜シャドウズ＞』IMAX3D®版上映決定！</span>
							<i class="fa fa-sort-desc" aria-hidden="true"></i>
						</span>
						<p class="textArea">
							世界一有名な“亀”がパワーアップして帰ってくる！<br />
							影の軍団ニンジャタートルズがさらなる興奮と驚きと爆笑を引っさげ　この夏、大スクリーンで疾風怒濤に暴れまわる！<br />
							NYの街を飛び出し、世界を舞台に暴れまわる４匹の大活躍を、ぜひIMAX3Dの大迫力でお楽しみください！

						</p>
					</li>

				<!-- NEWS2　-->
					<li>
						<span class="day">
							2016/09/11
							<span class="newTitle">『ゴーストバスターズ』IMAX®3D版上映決定！</span>
							<i class="fa fa-sort-desc" aria-hidden="true"></i>
						</span>
						<p class="textArea">
							30年前に世界中を席巻した待望の大ヒットシリーズ 『ゴーストバスターズ』が、超豪華キャストで再起動！<br />
							IMAX3Dであなたも一緒にバスター開始！

						</p>
					</li>

				<!-- NEWS3　-->
					<li><span class="day">2016/08/10<span class="newTitle">家族で映画デーが始まる！</span><i class="fa fa-sort-desc" aria-hidden="true"></i></span><p class="textArea">！！</p></li>

				<!-- NEWS4　-->
					<li><span class="day">2016/07/31<span class="newTitle">夏休みイベント開催！</span></span><p class="textArea">！！</p></li>

				<!-- NEWS5　-->
					<li><span class="day">2016/07/01<span class="newTitle">たくさんの映画作品が上映中！</span></span><p class="textArea">！！</p></li>

				<!-- NEWS6　-->
					<li><span class="day">2016/06/01<span class="newTitle">東京、大阪、名古屋にて映画館がオープン！</span></span><p class="textArea">！！</p></li>

				<!-- NEWS7　-->
					<li><span class="day">2016/05/01<span class="newTitle">HALシネマ　リニューアルオープン！</span></span><p class="textArea">！！</p></li>
				</ul>
			</div>

		</div>
	</div>


	<!-- コンテンツ５　-->
	<div id="MainContent5">

		<div class="Content5-Box">
			<!-- ギャラリーコンテンツエリア -->
			<h2 class="fade">GALLERY</h2>

			<div class="Content5-Text fade">

					<a href="images/gallery/1.png" rel="lightbox" title="color1">
						<img src="images/gallery/1_icon.png" width="65" height="65" alt="images/gallery/1.png" />
					</a>
					<a href="images/gallery/2.png" rel="lightbox" title="color2">
						<img src="images/gallery/2_icon.png" width="65" height="65" alt="images/gallery/2.png" />
					</a>
					<a href="images/gallery/3.png" rel="lightbox" title="color3">
						<img src="images/gallery/3_icon.png" width="65" height="65" alt="images/gallery/1.png" />
					</a>
					<a href="images/gallery/4.png" rel="lightbox" title="color4">
						<img src="images/gallery/4_icon.png" width="65" height="65" alt="images/gallery/1.png" />
					</a>
					<a href="images/gallery/5.png" rel="lightbox" title="color5">
						<img src="images/gallery/5_icon.png" width="65" height="65" alt="images/gallery/1.png" />
					</a>
					<a href="images/gallery/6.png" rel="lightbox" title="color6">
						<img src="images/gallery/6_icon.png" width="65" height="65" alt="images/gallery/1.png" />
					</a>
					<a href="images/gallery/7.png" rel="lightbox" title="color7">
						<img src="images/gallery/7_icon.png" width="65" height="65" alt="images/gallery/1.png" />
					</a>
					<a href="images/gallery/8.png" rel="lightbox" title="color8">
						<img src="images/gallery/8_icon.png" width="65" height="65" alt="images/gallery/1.png" />
					</a>
			</div>
		</div>
	</div>


	<!-- コンテンツ６　-->
	<div id="MainContent6">

		<div class="Content6-Box">
			<h2 class="fade">CONTACT</h2>

			<div class="Content6-Text">
			</div>
		</div>

	</div>



</article>
<!--ここまででコンテントの内容終わる　-->
<?php html_footer(); ?>

</body>
</html>
