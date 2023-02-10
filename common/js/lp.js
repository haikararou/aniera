/* LP用のjs　本番環境ではconfig.jsへ転記する*/

$(function () {
  /* ドロップダウン */
  /*$('.u-dropdown__title').click(function () {
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
      $(this).next('.u-dropdown__conts').slideDown();
    } else {
      $(this).next('.u-dropdown__conts').slideUp();
    }
  });*/

  /* タブ */
  $('.price__tab').click(function () {
    // クリックした要素の先祖要素の中で、classの値がgroupの要素を取得
    const group = $(this).parents('.price__wrap');
    group.find('.is-active').removeClass('is-active');
    $(this).addClass('is-active');
    group.find('.is-show').removeClass('is-show');
    // クリックしたタブからインデックス番号を取得
    const index = $(this).index();
    // クリックしたタブと同じインデックス番号をもつコンテンツを表示
    group.find('.price__block').eq(index).addClass('is-show');
  });
});
