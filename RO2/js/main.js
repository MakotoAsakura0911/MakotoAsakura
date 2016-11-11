$(function () {
    //クリックしたときのファンクションをまとめて指定
    $('.tab_area li').click(function () {

        //.index()を使いクリックされたタブが何番目かを調べ、
        //indexという変数に代入します。
        var index = $('.tab_area li').index(this);

        //コンテンツを一度すべて非表示にし、
        $('.content_area div').css('display', 'none');

        //クリックされたタブと同じ順番のコンテンツを表示します。
        $('.content_area div').eq(index).css('display', 'block');

        //一度タブについているクラスselectを消し、
        $('.tab_area li').removeClass('select');

        //クリックされたタブのみにクラスselectをつけます。
        $(this).addClass('select')
    });
});
