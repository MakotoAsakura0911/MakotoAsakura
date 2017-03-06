<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)
require_once("core/public.php");
include("content_1.php");
include("content_2.php");
include("content_3.php");
include("content_4.php");
include("content_5.php");


//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/swiper.css" type="text/css">
        <link rel="stylesheet" href="'.$level.'css/justifiedGallery.min.css" type="text/css">
        <link rel="stylesheet" href="'.$level.'css/lightbox.min.css" type="text/css">
		<link rel="stylesheet" href="'.$level.'css/jquery.maximage.css" type="text/css">
		<link rel="stylesheet" href="'.$level.'css/cont2_sass.css" type="text/css">
		<link rel="stylesheet" href="'.$level.'css/cont3.css" type="text/css">
		<link rel="stylesheet" href="'.$level.'css/cont4.css" type="text/css">
		<link rel="stylesheet" href="'.$level.'css/cont5.css" type="text/css">';
//使用するjavascript(jQuery)を記入
$js = '<script type="text/javascript" src="'.$level.'js/swiper.min.js"></script>
        <script type="text/javascript" src="'.$level.'js/jquery.justifiedGallery.min.js"></script>
        <script type="text/javascript" src="'.$level.'js/lightbox.min.js"></script>
		<script type="text/javascript" src="'.$level.'js/jquery.cycle.all.min.js"></script>
		<script type="text/javascript" src="'.$level.'js/jquery.maximage.min.js"></script>
		<script type="text/javascript" src="'.$level.'js/main.js"></script>';
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

<?php

html_cont1();

html_cont2();

html_cont3();

html_cont4();

html_cont5();
?>

</article>
<!--ここまででコンテントの内容終わる　-->


</body>
</html>
