

<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)



//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/cont2_sass.css" type="text/css">';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = 'contents2';
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

function html_cont2(){

echo'

	<!-- content2 -->

		<div id="content2" class="cont_2">

			<!-- Slider start -->
            <div class="slider">
    			<div class="swiper-container">
        			<div class="swiper-wrapper">
        				<div class="swiper-slide clearfix">
                            <h2 class="heading2">
                                Event Name
                            </h2>
                            <div class="event cfx">
            				    <div class="slide_left">
                                    <img class="image" src="images/concept/logo.png" alt="イメージ">
            				    </div>
                                <div class="slide_right">
                                    <p class="sentence">
                                        <span class="sentence__block">IF YOU DO.DO</span>
                                        <span class="sentence__block">「威風堂々」と読み、</span>
                                        <span class="sentence__block">環境や周りに流されず、プライドや自信を携えて</span>
                                        <span class="sentence__block two_line">自分たちの個性を表現していく意味を込めました。</span>
                                        <span class="sentence__block two_line">英語で読めば「したいことがあればやれ！」という意味です。</span>
                                        <span class="sentence__block">学生最後のイベント</span>
                                        <span class="sentence__block two_line">自分たちのやりたい事をやる</span>
                                        <span class="sentence__block">そんな思いを込めました。</span>
                                    </p>
            				    </div>
                            </div>
        				</div>

                        <div class="swiper-slide">
                            <h2 class="heading2">
                                Cloth Image
                            </h2>
                            <div class="cloth cfx">
                                <div class="slide_left">
                                    <div class="handle cfx">
                                        <p class="handle__image">
                                            <img class="handle__image__left" src="images/concept/cloth-image1.png" alt="">
                                        </p>
                                        <p class="handle__image">
                                            <img class="handle__image__right" src="images/concept/cloth-image2.png" alt="">
                                        </p>
                                    </div>
                                    <p class="sentence">
                                        <span class="sentence__block">日本人の助平な気持ちをイメージしたオリジナルプリントと</span>
                                        <span class="sentence__block">オリジナルパターン昇華プリントとドビー織りで</span>
                                        <span class="sentence__block">テキストスタイルから作っていきます。</span>
                                    </p>
                                </div>
                                <div class="slide_right">
                                    <div class="mannequin cfx">
                                        <p class="mannequin__image">
                                            <img class="mannequin__image__left" src="images/concept/cloth-image6.png" alt="">
                                        </p>
                                        <p class="mannequin__image">
                                            <img class="mannequin__image__right" src="images/concept/cloth-image3.png" alt="">
                                        </p>
                                    </div>

                                    <p class="sentence">
                                        <span class="sentence__block">本来洋服には使わない「のぼり」の生地を使い、</span>
                                        <span class="sentence__block">断ち切りで洋服を作らせていただきました。</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <h2 class="heading2">
                                Brand Name
                            </h2>
                            <div class="brand">
                                <img class="brand__image" src="images/concept/sanagi-logo.png" alt="SANAGIロゴ">
                                <p class="brand__sentence sentence01">
                                    <span class="brand__sentence--line">当たり前。常識。</span>
                                    <span class="brand__sentence--line">自分の尺で測れる、自分の常識。</span>
                                </p>
                                <p class="brand__sentence sentence02">
                                    <span class="brand__sentence--line">その常識を超えたところに</span>
                                    <span class="brand__sentence--line">『異常』がある。</span>
                                </p>
                                <p class="brand__sentence sentence03">
                                    <span class="brand__sentence--line">しかし、そこにも確かに常識が</span>
                                    <span class="brand__sentence--line">存在する</span>
                                </p>
                                <p class="brand__sentence sentence04">
                                    <span class="brand__sentence--line">蛹が蝶になる瞬間。</span>
                                    <span class="brand__sentence--line">それは今までとは違う瞬間。</span>
                                    <span class="brand__sentence--line">『違常識』に出会う瞬間である。</span>
                                </p>
                            </div>
                        </div>
        			</div>

        			<div class="swiper-button-prev swiper-button-white"></div>
        			<div class="swiper-button-next swiper-button-white"></div>
        			<div class="swiper-scrollbar"></div>

    			</div><!-- .swiper-container -->
            </div class="slider">
            <!-- Slider end -->

		</div><!-- .cont_2 -->

';}

?>
