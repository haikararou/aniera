<?php

/**
 * 記事ページのテンプレート
 */
get_header(); ?>
<script src="/wp-content/themes/aniera/common/js/cart.js"></script>

<div id="bg">
    <div class="wrapper1">
        <div class="wrapper3">
            <div class="lead">
                <h2><svg aria-label="STORE" viewBox="0 0 368.5 78.7">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_store"></use>
                    </svg></h2>
                <ul id="Breadcrumb" class="breadcrumbs">
                    <?php if (function_exists('bcn_display')) {
                        bcn_display();
                    } ?>
                </ul>
            </div>
        </div>

        <div class="wrapper3 product_box" <?php if (get_field('product_id')) : ?> id="<?php the_field('product_id'); ?>" <?php endif; ?>>
            <div id="product_deta">
                <div class="product_detaL">
                    <div class="store_slider">
                        <div class="swiper-container slider01">
                            <div class="swiper-wrapper">
                            </div>
                        </div>
                        <div class="swiper-button-prev prev prev2"></div>
                        <div class="swiper-button-next next next2"></div>
                        <div class="thumblist"></div>
                    </div>
                </div>
                <div class="product_detaR">
                    <h2 id="title"><?php the_title(); ?></h2>
                    <ul class="category">
                        <?php
                        $terms = get_the_terms($post->ID, 'store_cat');
                        if ($terms) {
                            foreach ($terms as $term) {
                                echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                            }
                        }
                        ?>
                        <?php the_tags('<li>', '</li><li>', '</li>'); ?>
                    </ul>
                    <div class="price">
                        <div class="priceL">￥</div>
                        <div class="priceC">税込</div>
                    </div>
                    <div class="sale">
                        <div class="off_price"><?php the_field('off'); ?></div>
                        <div class="regular_price">通常価格 <span>￥</span></div>
                    </div>
                    <h3 id="releasedate"></h3>
                    <h3 id="reservestartdate"></h3>
                    <div class="AddToFavourites pc"><span><svg viewBox="0 0 28.7 27.5">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                            </svg>お気に入り</span></div>
                    <div id="AddTo">
                        <div class="AddToFavourites"><span><svg viewBox="0 0 28.7 27.5">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                                </svg>お気に入り</span></div>
                    </div>

                    <div class="modal_box">
                    </div>
                    <h4 id="h4_itemsize">アイテムサイズ</h4>
                    <table id="tab_itemsize">

                    </table>
                    <h4 id="label_pp">以前購入した商品</h4>
                    <p id="txt_pp"></p>
                    <p id="detail"></p>
                </div>
            </div>
            <div class="product_txt">
                <?php if (get_field('item')) : ?>
                    <div>
                        <h2>商品説明</h2>
                    </div>
                    <div class="entry_body">
                        <?php the_field('item'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php $related_posts = get_field('related');
        if ($related_posts) : ?>
            <div class="wrapper2">
                <h2 class="title">関連商品</h2>
            </div>
            <div class="wrapper3">
                <div class="conts">
                    <div class="new_arrival">
                        <?php
                        foreach ($related_posts as $post) : // variable must be called $post
                            setup_postdata($post);
                        ?>
                            <?php get_template_part('inc/part-listpost-store'); ?>
                        <?php endforeach;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="wrapper2">
            <h2 class="title">ショップガイド</h2>
        </div>
        <div class="wrapper3">
            <div class="">
                <div class="guide">
                    <div>
                        <h2>配送について</h2>
                        <p>佐川急便、送料全国一律 690円（北海道・沖縄1,000円、離島1,500円）ご注文から即日～３営業日以内には発送させて頂きます。(土日祝日はお休み頂いております)</p>
                        <a href="<?php echo home_url(); ?>/tradelaw/#link01" class="more_right_s"><span class="arw"></span><span>詳しく見る</span></a>
                    </div>
                    <div>
                        <h2>お支払い方法について</h2>
                        <p>クレジットカート決済 / 後払い をご利用いただけます。<br>※商品によって、お支払い方法が限定される場合があります。</p>
                        <a href="<?php echo home_url(); ?>/tradelaw/#link02" class="more_right_s"><span class="arw"></span><span>詳しく見る</span></a>
                    </div>
                    <div>
                        <h2>キャンセル・返品について</h2>
                        <p>ご注文確定後、お客様のご都合によるキャンセルや商品変更・返品はお受け致しかねますのであらかじめご了承ください。</p>
                        <a href="<?php echo home_url(); ?>/tradelaw/#link03" class="more_right_s"><span class="arw"></span><span>詳しく見る</span></a>
                    </div>
                    <div>
                        <h2>お問い合わせ</h2>
                        <p>当店に対するご意見ご感想、お問い合わせなど、下記リンク先のフォームよりお気軽にお尋ねください。</p>
                        <a href="<?php echo home_url(); ?>/ec/contact/" class="more_right_s"><span class="arw"></span><span>詳しく見る</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<div id="modal1" class="modal_box">
    <a class="modal_close"><span>閉じる</span></a>
</div>
<script>
    $(function() {
        var $pid = $(".product_box").attr("id");
        $.ajax({
            type: "post",
            url: "/ec/api/product-info",
            timeout: 10000,
            cache: false,
            data: {
                'pid': $pid
            },
            dataType: 'json',
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            }
        }).done(function(response, textStatus, jqXHR) {
            if (response.status === "err") {
                alert("err: " + response.msg);
            } else {

                $("#title").html(response.data.title);
                if (response.data.release_date_str !== '') {
                    $("#releasedate").html('発売：' + response.data.release_date_str);
                } else {
                    $("#releasedate").remove();
                }
                if (response.data.reserve_date_str !== '') {
                    $("#reservestartdate").html('予約開始日：' + response.data.reserve_date_str);
                } else {
                    $("#reservestartdate").remove();
                }

                $("#detail").html(response.data.detail);
                $(".priceL").append(response.data.price);
                if (response.data.off_price !== '') {
                    $('.off_price').html(response.data.off_price);
                    $('.regular_price span').append(response.data.regular_price);
                } else {
                    $('.off_price').remove();
                    $('.regular_price').remove();
                }
                if (response.data.soldout === true) {
                    $('.slider01').addClass('soldout');
                }
                if (response.sd !== '') {
                    $("#tab_itemsize").html(response.sd);
                } else {
                    $("#h4_itemsize").remove();
                    $("#tab_itemsize").remove();
                }
                if (response.pp !== '') {
                    $('#txt_pp').html(response.pp);
                } else {
                    $('#label_pp').remove();
                    $('#txt_pp').remove();
                }
                var picture_html = '';
                if (response.pictureData != undefined || response.pictureData.length > 0) {
                    $.each(response.pictureData, function(index, obj) {
                        picture_html += '<div class="swiper-slide"><img src="' + obj.image_path + '" alt="">';
                        if (response.data.condition !== null) {
                            picture_html += '<ul>';
                            if (response.data.condition === '1') {
                                picture_html += '<li class="new">新品</li>';
                            } else {
                                picture_html += '<li>中古</li>';
                            }
                            picture_html += '</ul>';
                        }
                        picture_html += '</div>';
                    });
                    $('.swiper-container .swiper-wrapper').html(picture_html);
                    createSwipeImage();
                }
                $(".modal_box").prepend(response.cf);
                $("#AddTo").prepend(response.scf);
                if (response.favoriteState === true) {
                    $(".AddToFavourites").addClass('active');
                }
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            alert("失敗: サーバー内でエラーがあったか、サーバーから応答がありませんでした。");
        }).always(function(data_or_jqXHR, textStatus, jqXHR_or_errorThrown) {
            initialCnt();
        });

        function createSwipeImage() {
            // サムネイル画像のスライダー
            const thumbClass = 'thumblist-item';
            const mytap = window.ontouchstart === null ? "touchstart" : "click";

            const mySwiper = new Swiper('.swiper-container', {
                speed: 1500,
                autoplay: {
                    delay: 2000
                },
                effect: 'fade',
                navigation: {
                    nextEl: '.next',
                    prevEl: '.prev',
                },
                fadeEffect: {
                    crossFade: true
                },
                pagination: {
                    el: '.thumblist',
                    type: 'custom',
                    renderCustom: function(swiper, current, total) {
                        const slides = swiper.slides;
                        let html = '';
                        for (let i = 0; i < total; i++) {
                            if (current == i + 1) {
                                html = html + `<div class="${thumbClass} current" data-slideto="${i}">${slides[i].innerHTML}</div>`;
                            } else {
                                html = html + `<div class="${thumbClass}" data-slideto="${i}">${slides[i].innerHTML}</div>`;
                            }
                        }
                        return html;
                    }
                }
            });


            const clickThumbs = (() => {
                const thumbItems = document.getElementsByClassName(thumbClass);
                for (let i = 0; i < thumbItems.length; i++) {
                    thumbItems[i].addEventListener(mytap, ((e) => {
                        let index = e.currentTarget.dataset.slideto;
                        mySwiper.slideTo(index, 1500, true);
                        // autoplayオプションを使わない場合は、以下をコメントアウトをする
                        setTimeout(mySwiper.autoplay.start, 3000);
                    }), false);
                }
            });

            clickThumbs();
            mySwiper.on('slideChange', clickThumbs);
        }

    });
    $(".AddToFavourites").click(function() {
        var $pid = $(".product_box").attr("id");
        var $btn_favorite = $(".AddToFavourites");
        $.ajax({
            type: "post",
            url: "/ec/api/favorite/update",
            timeout: 1000,
            cache: false,
            data: {
                'pid': $pid,
                'url': window.location.pathname,
            },
            dataType: 'json',
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            }
        }).done(function(response, textStatus, jqXHR) {
            if (response.status === "err") {
                alert("err: " + response.msg);
            } else {
                $btn_favorite.toggleClass("active");
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            alert("失敗: サーバー内でエラーがあったか、サーバーから応答がありませんでした。");
        }).always(function(data_or_jqXHR, textStatus, jqXHR_or_errorThrown) {});

    });
</script>