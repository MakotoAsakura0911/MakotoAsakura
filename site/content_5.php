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

function html_cont5(){

echo'

	<!-- content5 -->

		<div id="content5" class="cont_1">

			<div class="Content5-Text fade">

				<h2 class="cont_2__heading">CONTACT</h2>

				<form action="" method="post">
					<div>
						<label for="name">お名前</label>
						<input type="text" placeholder="お名前" name="" value="">
					</div>

					<div>
						<label for="mail">メールアドレス</label>
						<input type="email" placeholder="メールアドレス" name="mail" value="">
					</div>

					<div>
						<label for="name">ご用件</label>
							<select name="kenmei" class="form-control">
							<option value="">選択してください</option>
							<option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
							<option value="ご意見・ご感想">ご意見・ご感想</option>
							</select>
					</div>

					<div>
						<label for="msg">お問い合わせ内容</label>
						<textarea cols="30" rows="10" name="msg"></textarea>
					</div>

					<input class="button" type="submit" value="送信">
				</form>

			</div>
		</div>

';}

?>
