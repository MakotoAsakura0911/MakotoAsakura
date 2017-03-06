<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)



//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '';
//使用するjavascript(jQuery)を記入
$js = '';
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


function html_cont1(){

echo'


	<!-- content1 -->

	<div id="content1" class="cont_1">

	<div id="maximage">
		<img src="images/01.png" alt="" width="1920" height="1080" />
		<img src="images/bg_2.jpg" alt="" width="1920" height="1080" />
		<img src="images/bg_3.jpg" alt="" width="1920" height="1080" />
	</div>

		<div class="top-title">
			<h1><img src="images/top-title.png" width="450" alt="" /></h1>
		</div>

	</div>


';}

?>
