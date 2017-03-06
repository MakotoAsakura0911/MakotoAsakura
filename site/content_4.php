<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)



//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/cont4.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = 'IF YOU DO DO -Concept Syungaとは-';
//サイトのキーワードを記入(表示には関係ない・任意)
$keywords = '';
//サイトの説明文を記入(表示には関係ない・任意)
$description = '';
//サイトの製作者を記入(表示には関係ない・任意)
$author = 'IW31 : Seki Daichi';

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

function html_cont4(){

echo'

	<!-- content4 -->

		<div id="content4" class="cont_2 container">
            <h2 class="cont_2__heading">
                GALLARY
            </h2>
            <div class="cont_2__wrapp">
                <div id="gallery" class="gallery">
                    <a class="gallery__link" href="images/gallery/gallery_image01.png" data-lightbox="gallery" data-title="My caption1">
                        <img class="gallery__link--image" alt="Title 1" src="images/gallery/gallery_image01.png"/>
                    </a>
                    <a class="gallery__link" href="images/gallery/gallery_image02.png" data-lightbox="gallery" data-title="My caption2">
                        <img class="gallery__link--image" alt="Title 2" src="images/gallery/gallery_image02.png"/>
                    </a>
                    <a class="gallery__link" href="images/gallery/gallery_image03.png" data-lightbox="gallery" data-title="My caption3">
                        <img class="gallery__link--image" alt="Title 3" src="images/gallery/gallery_image03.png"/>
                    </a>
                    <a class="gallery__link" href="images/gallery/gallery_image04.png" data-lightbox="gallery" data-title="My caption4">
                        <img class="gallery__link--image" alt="Title 4" src="images/gallery/gallery_image04.png"/>
                    </a>
                    <a class="gallery__link" href="images/gallery/gallery_image05.JPG" data-lightbox="gallery" data-title="My caption5">
                        <img class="gallery__link--image" alt="Title 5" src="images/gallery/gallery_image05.JPG"/>
                    </a>
                    <a class="gallery__link" href="images/gallery/gallery_image06.JPG" data-lightbox="gallery" data-title="My caption6">
                        <img class="gallery__link--image" alt="Title 6" src="images/gallery/gallery_image06.JPG"/>
                    </a>
                    <a class="gallery__link" href="images/gallery/gallery_image07.JPG" data-lightbox="gallery" data-title="My caption7">
                        <img class="gallery__link--image" alt="Title 7" src="images/gallery/gallery_image07.JPG"/>
                    </a>
                    <a class="gallery__link" href="images/gallery/gallery_image08.JPG" data-lightbox="gallery" data-title="My caption8">
                        <img class="gallery__link--image" alt="Title 8" src="images/gallery/gallery_image08.JPG"/>
                    </a>
                    <a class="gallery__link" href="images/gallery/gallery_image09.JPG" data-lightbox="gallery" data-title="My caption9">
                        <img class="gallery__link--image" alt="Title 9" src="images/gallery/gallery_image09.JPG"/>
                    </a>
                    <a class="gallery__link" href="images/gallery/gallery_image10.JPG" data-lightbox="gallery" data-title="My caption10">
                        <img class="gallery__link--image" alt="Title 10" src="images/gallery/gallery_image10.JPG"/>
                    </a>
                    <a class="gallery__link" href="images/gallery/gallery_image11.JPG" data-lightbox="gallery" data-title="My caption11">
                        <img class="gallery__link--image" alt="Title 11" src="images/gallery/gallery_image11.JPG"/>
                    </a>
                    <!-- other images... -->
                </div>
            </div>
		</div>

';}

?>
