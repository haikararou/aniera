<?php
get_header(); ?>

<div id="bg">
    <div class="wrapper1">
        <div class="wrapper3">
            <div class="lead">
                <h2><svg aria-label="STORE" viewBox="0 0 368.5 78.7"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_store"></use></svg></h2>
                <?php get_sidebar('store'); ?>
            </div>
        </div>
        <?php $catargs = array( 'taxonomy' => 'store_cat' ); $catlists = get_categories( $catargs ); foreach($catlists as $cat) : ?>
        <div class="wrapper2 cat_title <?php echo($cat->slug); ?>">
            <h2 class="title"><?php echo $cat->name; ?></h2>
            <h2 id="page_title"><svg aria-label="NEW ARRIVAL" viewBox="0 0 842.9 83.6"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_newarrival"></use></svg></h2>
        </div>
        <div class="wrapper3" id="<?php echo($cat->slug); ?>">
        <div class="conts">
            <div class="new_arrival">
            <?php $args = array( 'posts_per_page' => '16', 'post_type' => 'store', 'store_cat' => $cat->slug ); $my_posts = get_posts( $args ); if ( $my_posts ) { foreach ( $my_posts as $post ) : setup_postdata( $post ); ?>
            <?php get_template_part('inc/part-listpost-store'); ?>
            <?php endforeach; } wp_reset_postdata(); ?>
            </div>
            <a href="<?php echo '/store_cat/'.$cat->slug; ?>" class="more_right"></a>
        </div>
        </div>
        <?php endforeach; ?>

        <div class="wrapper2">
            <h2 class="title">ショップガイド</h2>
        </div>
        <div class="wrapper3">
            <div class="conts">
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