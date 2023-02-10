<?php
/**
 * Template Name: home
 * Template Post Type: page
 */
get_header(); ?>

<div id="bg">
    <div class="wrapper1">
        <div id="top_lead">
            <div>
            <span>日本の</span>
            <span>ポップカルチャーを、</span>
            <span>世界に。</span>
            </div>
        </div>
        <div id="top_slider">
            <div class="top_slider">
                <div class="swiper-container slider01">
                    <div class="swiper-wrapper">
                    <?php if(have_rows('slider')): ?>
                    <?php while(have_rows('slider')): the_row(); ?>
                        <?php if(get_sub_field('slider_ph')): ?><div class="swiper-slide"><?php if(get_sub_field('slider_url')): ?><a href="<?php the_sub_field('slider_url'); ?>"<?php if(get_sub_field('slider_blank')): ?> target="_blank"<?php endif; ?>><img src="<?php the_sub_field('slider_ph'); ?>" alt=""></a><?php else: ?><img src="<?php the_sub_field('slider_ph'); ?>" alt=""><?php endif; ?></div><?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="swiper-button-prev prev"></div>
                <div class="swiper-button-next next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div id="top_thumbnail">
            <div class="top_thumbnail">
                <div class="swiper-container slider-thumbnail01">
                    <div class="swiper-wrapper">
                        <?php if(have_rows('slider')): ?>
                        <?php while(have_rows('slider')): the_row(); ?>
                            <div class="swiper-slide"><div class="comment"><?php the_sub_field('slider_txt'); ?></div></div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scrolldown1"><span><svg aria-label="SCROLL" viewBox="0 0 9.7 58.5"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#scroll"></use></svg></span></div>
</div>

<div id="aniera_blog">
    <div class="wrapper2">
        <h2>
            <svg aria-label="ANIERA BLOG" viewBox="0 0 863.7 80.6"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_anierablog"></use></svg>
        </h2>
    </div>
    <div class="wrapper3">
        <div class="aniera_blog">
            <?php
                $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC',
                'meta_key' => 'show_index', //カスタムフィールドのキー
                'meta_value' => 'show', //カスタムフィールドの値
                'meta_compare' => 'LIKE' //'meta_value'のテスト演算子
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>
            <a href="<?php the_permalink();?>">
                <figure><img src="<?php if(has_post_thumbnail()): ?><?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?><?php else: ?><?php bloginfo('template_url') ?>/common/img/noimage.jpg<?php endif; ?>" alt="<?php the_title(); ?>" /></figure>
                <div class="txt">
                    <div class="date"><div><?php the_time('Y'); ?><span><?php the_time('n.j'); ?></span></div></div>
                    <h3><?php the_title(); ?></h3>
                    <div class="category"><span><?php $terms = get_the_terms($post->ID,'blog_cat'); if($terms){echo $terms[0]->name;} ?></span></div>
                </div>
            </a>
            <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="more_right"></a>
    </div>
</div>

<div id="new_arrival">
    <div class="wrapper2">
        <h2><svg aria-label="NEW ARRIVAL" viewBox="0 0 842.9 83.6"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_newarrival"></use></svg></h2>
    </div>
    <div class="wrapper3">
        <nav>
        <?php
        $args = array(
        'style'              => 'list',
        'taxonomy'           => 'store_cat',
        'hide_empty'         => 1, //記事のないカテゴリも表示
        'title_li'           => '', // リストのタイトルを非表示
        'depth'              => 0, //子カテゴリも表示
        'current_category'   => 0,
        );
        ?>
            <ul>
            <?php $categories = get_categories($args); ?>
            <?php
                $categories=get_categories($args);
                foreach($categories as $category) {
                $current = false;
                $current_cat = get_queried_object_id();
                if( $current_cat ==  $category->term_id ){
                $current = true;
                }
            ?>
            <li <?php if($current) { echo 'class="here"'; } ?>>
                <a href="<?php echo get_category_link( $category->term_id ); ?> " ><?php echo $category->name; ?></a>
            </li>
            <?php } ?>
            </ul>
        </nav>
        <div class="new_arrival">
            <?php
            $store_posts = get_posts('post_type=store&posts_per_page=4');
            if ( !empty($store_posts) ): ?>
            <?php foreach ( $store_posts as $post ): setup_postdata($post); ?>
            <?php get_template_part('inc/part-listpost-store'); ?>
            <?php endforeach; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <a href="<?php echo get_post_type_archive_link('store'); ?>" class="more_right"></a>
    </div>
</div>

<div id="service">
    <h2><svg aria-label="SERVICE" viewBox="0 0 490.1 80.5"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_service"></use></svg></h2>
    <div class="service">
        <div class="swiper-container slider02" id="mySlider">
            <div class="swiper-wrapper">
                <a href="./purchase/" class="swiper-slide">
                    <figure><img src="<?php bloginfo('template_url') ?>/common/img/top/service_01.jpg" alt="アニメグッズの宅配買取" width="352" height="225"></figure>
                    <div class="txt">
                        <div class="cat_delivery_purchase"><svg aria-label="Delivery Purchase" viewBox="0 0 123 11.5"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#delivery_purchase"></use></svg></div>
                        <h3>アニメグッズの宅配買取<span>～好きの橋渡し～</span></h3>
                        <p>長野県を拠点に全国各地からアニメ系グッズの買い取り・販売を行っています。</p>
                    </div>
                </a>
                <a href="<?php echo home_url(); ?>/service/#link02" class="swiper-slide">
                    <figure><img src="<?php bloginfo('template_url') ?>/common/img/top/service_02.jpg" alt="ANIERA MODE" width="352" height="225"></figure>
                    <div class="txt">
                        <div class="cat_fashion"><svg aria-label="Fashion" viewBox="0 0 41.1 8.9"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fashion"></use></svg></div>
                        <h3>ANIERA MODE<span>～オシャレに楽しむアニメ服～</span></h3>
                        <p>ANIERA MODEは「オシャレに楽しめるアニメ服」をコンセプトに、日常使いの出来るアイテムの制作を行っています。</p>
                    </div>
                </a>
                <a href="https://aniera-festa.com/" class="swiper-slide">
                    <figure><img src="<?php bloginfo('template_url') ?>/common/img/top/service_03.jpg" alt="ナガノアニエラフェスタ" width="352" height="225"></figure>
                    <div class="txt">
                        <div class="cat_festival"><svg aria-label="Festival" viewBox="0 0 50.6 9.1"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#festival"></use></svg></div>
                        <h3>ナガノアニエラフェスタ<span>～長野県最大のアニソン野外フェス～</span></h3>
                        <p>⻑野県で5,000⼈以上を動員するアニメソングに特化した野外フェスです。</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="management" class="wrapper3">
        <h2><svg aria-label="MANAGEMENT" viewBox="0 0 409.4 35.7"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_management"></use></svg></h2>
        <div class="banner">
            <a href="https://www.amazon.co.jp/s?i=merchant-items&me=AHK8CEFCJ74SA" target="_blank"><img src="<?php bloginfo('template_url') ?>/common/img/top/banner_01.jpg" width="544" height="100" alt="Amazon"></a>
            <a href="https://auctions.yahoo.co.jp/seller/aniera2015" target="_blank"><img src="<?php bloginfo('template_url') ?>/common/img/top/banner_02.jpg" width="544" height="100" alt="ヤフオク"></a>
            <a href="https://store.shopping.yahoo.co.jp/aniera/" target="_blank"><img src="<?php bloginfo('template_url') ?>/common/img/top/banner_03.jpg" width="544" height="100" alt="Y!ショップ"></a>
            <a href="https://x.aniera.jp/" target="_blank"><img src="<?php bloginfo('template_url') ?>/common/img/top/banner_05.jpg" width="544" height="100" alt="ANIERA-X"></a>
        </div>
    </div>
</div>

<div id="about">
    <div class="wrapper3">
        <div>
            <h2><span>人々の『人生をもっと楽しく』する会社</span><svg aria-label="ABOUT" viewBox="0 0 419.3 80"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_about"></use></svg></h2>
            <p>アニメやゲームなど、日本のポップカルチャーを通じて、人々の『人生をもっと楽しく』する会社です。ネットショップの運営や、長野県最大のアニソン野外フェス『ナガノアニエラフェスタ』（動員5,000名以上）の開催、『オシャレに楽しむアニメ服』をコンセプトにした商品開発など、様々な“楽しい”を企画・プロデュースしています。</p>
            <a href="<?php echo home_url(); ?>/about/" class="more_right"></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>
//サムネイル
var sliderThumbnail01 = new Swiper('.slider-thumbnail01', {
    slideToClickedSlide: true,
	controller: {
		control: mySwiper01,
		//inverse: false,
		//by: 'slide'
	},
    slidesPerView: 1,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});
var mySwiper01 = new Swiper ('.slider01', {
    autoplay: {
        delay: 2000,
    },
    loop: true,
    allowTouchMove: false,
    preventClicks: false,
    preventClicksPropagation: false,
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },
    thumbs: {
    swiper: sliderThumbnail01
    }
});
//mySwiper01.controller.control = sliderThumbnail01;

let mySwiperX;   //Swiperインスタンスを格納する変数の宣言
let screenWidth;  //画面幅の値を格納する変数の宣言
let swiperElement = document.getElementById("mySlider");  //コンテナ要素
let options = {   //スライダーの初期化のオプション
autoplay: {
    delay: 2000,
    },
    direction: 'horizontal',
    speed: 700,
    loop: true,
    slidesPerView: 3.5,
    spaceBetween: 40,
    //slidesPerGroup: 3,
    allowSlidePrev: true,
    allowSlideNext: true,
    navigation: {
        nextEl: '.next',
        prevEl: '.prev',
    },
    breakpoints: {
    // when window width is >= 1220px
    1220: {
        slidesPerView: 3.5,
    },
    // when window width is >= 766px
    766: {
    slidesPerView: 2.5,
    },
    // when window width is >= 300px
    300: {
    slidesPerView: 1.3,
    },
  }
};
function initSwiper() {
    if(swiperElement){ //コンテナ要素があれば
        screenWidth = window.innerWidth; //画面幅を取得
        if(screenWidth > 300 && !mySwiperX ) {
            mySwiperX = new Swiper('#mySlider', options);  //スライダーの初期化
        } else if (screenWidth <= 300 && mySwiperX ) {
            mySwiperX.destroy(true, true);  //スライダーを破棄
            mySwiperX = null;
        }
    }
}
initSwiper();
window.addEventListener('resize',initSwiper);
</script>
