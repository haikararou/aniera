//preload
$(window).on('load', function () {
  $('body').removeClass('preload');
});

//ページ内リンク
$(function () {
  // #で始まるアンカーをクリックした場合に処理
  $('a[href^="#"]').click(function () {
    var speed = 800; // ミリ秒
    var href = $(this).attr('href');
    var target = $(href == '#' || href == '' ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  });
});

// pagetop
var $win = $(window);
$win.on('load resize', function () {
  if (window.matchMedia('(max-width:768px)').matches) {
    // SPの処理
    $('#pagetop').hide();
  } else {
    // PCの処理
    $('#pagetop').hide();
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > 300) {
        $('#pagetop').slideDown('fast');
      } else {
        $('#pagetop').slideUp('fast');
      }
    });
  }
});

/*ドロワーメニュー --------------------------------------------------------------------------------------------*/
//PC用
var modalopen = false;
$('#navMenu').click(function (e) {
  if (modalopen == false) {
    drowerChange('view');
  } else if (modalopen == true) {
    drowerChange('hiden');
  }
  e.stopPropagation();
});

/*ドロワーメニューの出し入れ --------------------------------------------------------------------------------------------*/
//PC用
function drowerChange(bl) {
  if (bl == 'view') {
    modalopen = true;
    $('body').addClass('open');
    TweenMax.fromTo(
      $('#spNav'),
      0.8,
      {},
      {
        opacity: '1',
        delay: 0,
        ease: Power2.easeOut,
        onComplete: function () {},
      }
    );
    TweenMax.fromTo(
      $('.navScroll'),
      0.8,
      { 'padding-top': '20px' },
      {
        'padding-top': '0px',
        opacity: '1',
        display: 'block',
        delay: 0.6,
        ease: Power2.easeOut,
        onComplete: function () {},
      }
    );
  } else if (bl == 'hiden') {
    modalopen = false;
    TweenMax.fromTo(
      $('.navScroll'),
      0.3,
      { 'padding-top': '0px' },
      {
        'padding-top': '20px',
        opacity: '0',
        display: 'none',
        delay: 0,
        ease: Power2.easeOut,
        onComplete: function () {},
      }
    );
    TweenMax.fromTo(
      $('#spNav'),
      0.4,
      { opacity: '1' },
      {
        opacity: '0',
        delay: 0.2,
        ease: Power2.easeOut,
        onComplete: function () {
          $('body.open').removeClass('open');
        },
      }
    );
  }
}

/* ヘッダーボタン ドロップシャドウ --------------------------------------------------------------------------------------------*/
$(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 500) {
      $('.head_btn').addClass('shadow');
    } else {
      $('.head_btn').removeClass('shadow');
    }
  });
});

/* グローバルナビ ドロップダウン --------------------------------------------------------------------------------------------*/
$(function () {
  $('#globalNav li').hover(
    function () {
      $('div:not(:animated)', this).slideDown();
    },
    function () {
      $('div.dropdwn_menu', this).slideUp();
    }
  );
});

/* スマホとタブレットでの:hoverの挙動を無効化 --------------------------------------------------------------------------------------------*/
var touch =
  'ontouchstart' in document.documentElement ||
  navigator.maxTouchPoints > 0 ||
  navigator.msMaxTouchPoints > 0;
if (touch) {
  try {
    for (var si in document.styleSheets) {
      var styleSheet = document.styleSheets[si];
      if (!styleSheet.rules) continue;
      for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
        if (!styleSheet.rules[ri].selectorText) continue;
        if (styleSheet.rules[ri].selectorText.match(':hover')) {
          styleSheet.deleteRule(ri);
        }
      }
    }
  } catch (ex) {}
}

/*スマホ検索 --------------------------------------------------------------------------------------------*/
var $win = $(window);
$win.on('load resize', function () {
  if (window.matchMedia('(max-width:768px)').matches) {
    // SPの処理
  } else {
    // PCの処理
    $('#store-search_sp').removeClass('open');
    $('#store-search_sp').animate(
      { opacity: 0 },
      { duration: 200, easing: 'swing' }
    );
  }
});
// $('#sp_search').click(function () {
//   $('#store-search_sp').addClass('open');
//   $('#store-search_sp').animate(
//     { opacity: 1 },
//     { duration: 400, easing: 'swing' }
//   );
// });
// $(window).scroll(function () {
//   $('#store-search_sp').removeClass('open');
//   $('#store-search_sp').animate(
//     { opacity: 0 },
//     { duration: 200, easing: 'swing' }
//   );
// });


/*ユーザーエージェントを取得しclassを付与 --------------------------------------------------------------------------------------------*/
// 変数
var agent = navigator.userAgent; // ユーザーエージェント
var htmlElement = document.documentElement; // html要素
// UserAgentで振り分けてhtmlにclassを振る
if (navigator.platform.search('Mac') != -1) {
  htmlElement.className += ' mac';
}
if (agent.search('Windows') != -1) {
  htmlElement.className += ' win';
  if (agent.search('Trident') != -1 || agent.search('MSIE') != -1) {
    htmlElement.className += ' ie';
    if (agent.search('Trident') != -1) {
      htmlElement.className += ' gte_ie8';
    }
    if (agent.search('Trident') == -1) {
      htmlElement.className += ' lte_ie8';
    }
    if (agent.search('MSIE 7') != -1) {
      htmlElement.className += ' ie7';
    }
    if (agent.search('MSIE 8') != -1) {
      htmlElement.className += ' ie8';
    }
    if (agent.search('MSIE 9') != -1) {
      htmlElement.className += ' ie9';
    }
    if (agent.search('MSIE 10') != -1) {
      htmlElement.className += ' ie10';
    }
    if (agent.search('Trident/7') != -1) {
      htmlElement.className += ' ie11';
    }
  }
}
if (agent.search('Chrome') != -1 && agent.search('OPR') == -1) {
  htmlElement.className += ' chrome';
}
if (
  agent.search('Safari') != -1 &&
  agent.search('Chrome') == -1 &&
  agent.search('OPR') == -1 &&
  agent.search('Presto') == -1
) {
  htmlElement.className += ' safari';
}
if (agent.search('Firefox') != -1) {
  htmlElement.className += ' firefox';
}
if (agent.search('iPad') != -1) {
  htmlElement.className += ' ipad';
}
if (agent.search('iPhone') != -1) {
  htmlElement.className += ' iphone';
}
if (agent.search('Android') != -1) {
  htmlElement.className += ' android';
}
/* iOS 13以降のiPadを判定するユーザーエージェント --------------------------------------------------------------------------------------------*/
var ua = window.navigator.userAgent.toLowerCase();
if (
  ua.indexOf('ipad') > -1 ||
  (ua.indexOf('macintosh') > -1 && 'ontouchend' in document)
) {
  htmlElement.className += ' ipad';
}





$(function () {
  // 「.modal_open」をクリックしたらモーダルと黒い背景を表示する
    $(document).on('click','.modal_open', function () {
    // 黒い背景をbody内に追加
    $('body').append('<div class="modal_bg"></div>');
    $('.modal_bg').fadeIn();
    // data-targetの内容をIDにしてmodalに代入
    var modal = '#' + $(this).attr('data-target');
    // モーダルをウィンドウの中央に配置する
    function modalResize() {
      var w = $(window).width();
      var h = $(window).height();
      var j = h + 40;
      var x = (w - $(modal).outerWidth(true)) / 2;
      var y = (h - $(modal).outerHeight(true)) / 2;
      if (j < y) {
        $(modal).css({ left: x + 'px', top: y + 'px' });
      } else {
        $(modal).css({ left: x + 'px', top: 20 + 'px' });
      }
    }

    // modalResizeを実行
    modalResize();
    // modalをフェードインで表示
    $(modal).fadeIn();
    // .modal_bgか.modal_closeをクリックしたらモーダルと背景をフェードアウトさせる
    $('.modal_bg, .modal_close')
      .off()
      .click(function () {
        $('.modal_box').fadeOut();
        $('.modal_bg').fadeOut('slow', function () {
          $('.modal_bg').remove();
        });
      });
    // ウィンドウがリサイズされたらモーダルの位置を再計算する
    $(window).on('resize', function () {
      modalResize();
    });
    // .modal_switchを押すとモーダルを切り替える
    $('.modal_switch').click(function () {
      // 押された.modal_switchの親要素の.modal_boxをフェードアウトさせる
      $(this).parents('.modal_box').fadeOut();
      // 押された.modal_switchのdata-targetの内容をIDにしてmodalに代入
      var modal = '#' + $(this).attr('data-target');
      // モーダルをウィンドウの中央に配置する
      function modalResize() {
        var w = $(window).width();
        var h = $(window).height();
        var x = (w - $(modal).outerWidth(true)) / 2;
        var y = (h - $(modal).outerHeight(true)) / 2;
        $(modal).css({ left: x + 'px', top: y + 'px' });
      }
      // modalResizeを実行
      modalResize();
      $(modal).fadeIn();
      // ウィンドウがリサイズされたらモーダルの位置を再計算する
      $(window).on('resize', function () {
        modalResize();
      });
    });
  });
  /* ドロップダウン--------------------------------------------------------------------------------------------*/
  $('.u-dropdown__title').click(function () {
    $(this).toggleClass('open');
    if ($(this).hasClass('open')) {
      $(this).next('.u-dropdown__conts').slideDown();
    } else {
      $(this).next('.u-dropdown__conts').slideUp();
    }
  });
});



/*お支払い方法 --------------------------------------------------------------------------------------------*/

function payment_card() {
  document.getElementById("creditCard").style.display="block";
  document.getElementById("atodene").style.display="none";
}
function payment_atodene() {
  document.getElementById("creditCard").style.display="none";
  document.getElementById("atodene").style.display="block";
}

function address_decision() {
  document.getElementById("addressee_decision").style.display="block";
  document.getElementById("addressee_new").style.display="none";
}
function address_new() {
  document.getElementById("addressee_decision").style.display="none";
  document.getElementById("addressee_new").style.display="block";
}

/*増減ボタン --------------------------------------------------------------------------------------------*/
$(function(){
    initialCnt();
    //プラス処理
    $(document).off('click','.spinner_area .plus');
    $(document).on('click','.spinner_area .plus', function(e){
      var cnt = Number($(this).prev("input").val());
      var variation = $(this).prev("input").data('variation');
      cnt++;
      $('input[data-variation="'+variation+'"]').val(cnt);
      var stock = $('input[data-variation="'+variation+'"]').data('stock');
      if(cnt > 0) {
        $('button.minus_'+variation+'').prop("disabled", false);
      }
      if(cnt >= stock) {
        $('button.plus_'+variation+'').prop("disabled", true);
      }
      return false;
    });
    $(document).off('click','.spinner_area .minus');
    $(document).on('click','.spinner_area .minus', function(e){
        var cnt = Number($(this).next("input").val());
        var variation = $(this).next("input").data('variation');
        cnt--;
        $('input[data-variation="'+variation+'"]').val(cnt);
        var stock = $('input[data-variation="'+variation+'"]').data('stock');
        if(cnt == 0) {
          $('button.minus_'+variation+'').prop("disabled", true);
        }
        if(cnt < stock) {
          $('button.plus_'+variation+'').prop("disabled", false);
        }
          return false;
    });

});
function initialCnt() {
  $('.spinner_area .number').each(function(val) {
      //console.log($(this));
      var val = Number($(this).val());
      var stock = Number($(this).data('stock'));
      //console.log(stock);
      if (val == 0) {
          $(this).prev('button').prop("disabled", true);
      } else {
          $(this).prev('button').prop("disabled", false);
      }
      stock = 1;
      if (stock >= val) {
          $(this).next('button').prop("disabled", false);
      } else {
          $(this).next('button').prop("disabled", true);
      }
  });
}



/*order.php 右カラム追従 --------------------------------------------------------------------------------------------*/
$(window).on('load', function () {
  var adjust = 240; //スクロール時のトップ位置調整用（問題なければ0）
  var sidebar = $('.orderR'); //サイドバーを指定
  var wrap = $('.order'); //ラッパーを指定
  var adjustTop = 0;
  var sidebarTop = parseInt(sidebar.css('top'));
  var sidebarMax = wrap.height() + adjust - sidebar.height();
  $(window).on('scroll', function () {
      var h = sidebarTop + $(window).scrollTop();
      if (h < sidebarMax) {
          if($(window).scrollTop() < adjust) {
              adjustTop = 0;
          } else {
              adjustTop = adjust;
          }
          var offset = sidebarTop-adjustTop + $(window).scrollTop() + 'px';
          sidebar.animate({top: offset},{duration:500, queue: false});
      }
  });
});

$(function(){
  $.ajax({
    url: "/ec/api/auth",
    timeout: 1000,
    cache: false,
    dataType: 'json',
    crossDomain: true,
    xhrFields: {
      withCredentials: true
    }
}).done(function(res, textStatus, jqXHR) {
    if (res.status === "err") {
        alert("err: " + res.msg);
    } else {
      $('.login').attr('href', res.accounturl);
      $('#cart').attr('href', res.carturl);
      $(".h_cart a").attr('href', res.carturl);
      $('#cart span').html(res.cartcount);
      $('.h_login').html(res.h_login);
      if(res.h_logout === "") {
        $('.h_logout').remove();
      } else {
        $('.h_logout').html(res.h_logout);
      }
    }
}).fail(function(jqXHR, textStatus, errorThrown) {
    alert("失敗: サーバー内でエラーがあったか、サーバーから応答がありませんでした。");
}).always(function(data_or_jqXHR, textStatus, jqXHR_or_errorThrown) {
});

});
