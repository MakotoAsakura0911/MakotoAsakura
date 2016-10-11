$(document).ready(function(){
//メインスライド用の記述
  $('.bxslider01').bxSlider({
  pagerCustom: '#bx-pager',//ページャーをカスタマイズする（サムネイルにする）ための記述
  controls:false//前後の矢印を消すための記述
  });
});

//サムネイルをスライドさせるための記述
$(document).ready(function(){
  $('.bxslider02').bxSlider({
  pager:false,
  minSlides: 5,//１スライドに表示するサムネイルの数
  maxSlides: 5,//１スライドに表示するサムネイルの最大数
  slideWidth: 90,//サムネイルの横幅（単位はpx）
  slideMargin: 10,//サムネイル間の余白（単位はpx）
  nextSelector: '#NextIcon',//"次へ”矢印をカスタマイズするための記述
  prevSelector: '#PrevIcon'//"前へ”矢印をカスタマイズするための記述
      });
});