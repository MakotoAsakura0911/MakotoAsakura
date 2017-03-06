<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)



//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/cont3.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = 'IF YOU DO DO -Concept Syungaとは-';
//サイトのキーワードを記入(表示には関係ない・任意)
$keywords = '';
//サイトの説明文を記入(表示には関係ない・任意)
$description = '';
//サイトの製作者を記入(表示には関係ない・任意)
$author = 'IW13 : taito nakahashi';

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


function html_cont3(){

echo'

	<!-- content3 -->

		<div id="content3" class="cont_1">

			<!-- Slider -->
			<div class="swiper-container">
				<div class="swiper-wrapper">

					<div class="swiper-slide">
						<!-- Slide-01 -->
						<div class="cont3-title">
							<h2>Motif</h2>
						</div>

						<div class="cont3-body">
							<div class="cont3-text cont3-text-box1">
								<p>日本には助平という言葉がある。</p>
								<p>これは私たちが人を愛し、思いやる上でとても大切なものである。</p>
								<p>相手に興味を持ち、好奇心を示すが故に、</p>
								<p>その人に好かれたいと思い、</p>
								<p>その人を思いやる。</p>
							</div>
							<div class="cont3-text-box2">
								<div class="title-text">〜 日本の『助平』を世界に 〜</div>
							</div>
							<div class="cont3-text cont3-text-box3">
								<p>日本の『利他の精神』は、</p>
								<p>この『助平心』から始まったと私は思う。</p>
								<p>更に、その思いを時に隠し、時にさらけ出す。</p>
								<p>その絶妙なバランスにこそ美徳があり、尊敬されるべきものである。</p>
								<p>そんな日本人の『助平心』をもっと世の中に、世界に表現したいと思います。</p>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<!-- Slide-02 -->
						<div class="cont3-title">
							<h2>Motif</h2>
						</div>

						<div class="cont3-body">
							<div class="cont3-text-box4">
								<div class="title-text">〜 助平を服へ 〜</div>
							</div>
							<div class="cont3-text2 cont3-text-box5">
								<p>助平心をインスパイアさせたオリジナルパターンとテキストスタイルを</p>
								<p>用いシックなテイストに力強い柄をミックス</p>
								<p class="margin">スマートに振る舞う日本人の心の中。</p>
								<p>『助平心』を絶妙なバランスで展開させます。</p>
								<p class="margin">『日本人の助平』を感じていただけたら幸いです。</p>
							</div>
						</div>
					</div>

				</div>

				<div class="swiper-pagination swiper-pagination-white swiper-pagination-clickable"></div>
				<div class="swiper-button-prev swiper-button-white"></div>
				<div class="swiper-button-next swiper-button-white"></div>
				<div class="swiper-scrollbar"></div>

			</div>

		</div>

';}

?>
