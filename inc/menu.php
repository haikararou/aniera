<div id="logo"><a href="<?php echo home_url(); ?>/">ANIERA</a></div>
<div id="navToggle">
    <div id="navMenu" class="head_btn"><span></span><span></span></div>
</div>
<div id="ecNavi">
    <a href="" id="cart"><svg viewBox="0 0 24 19.5">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cr"></use>
        </svg><span>0</span></a>
    <a href="/ec/favorite" class="star"><svg aria-label="Star" viewBox="0 0 22.2 21.3">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
        </svg></a></li>
    <a href="#" class="login"><svg aria-label="login" viewBox="0 0 20 17.2">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#login"></use>
        </svg></a>
</div>
<div id="spNav">
    <div class="navScroll">
        <nav class="nav">
            <div id="store-search">
                <div>
                    <select name="cat-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                        <option value="<?php echo home_url(); ?>/store/">全ての商品</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo esc_html(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <form method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="text" name="s" class="search" value="<?php the_search_query(); ?>">
                    <input type="submit" name="submit" value="" class="submit">
                    <input type="hidden" name="post_type" value="store">
                </form>
            </div>
            <div class="spNavL">
                <dl>
                    <dt><a href="<?php echo home_url(); ?>/">ホーム</a></dt>
                    <dt><a href="<?php echo home_url(); ?>/service/">サービス</a></dt>
                    <dt><a href="<?php echo home_url(); ?>/blog/">アニエラブログ</a></dt>
                    <dt><a href="<?php echo home_url(); ?>/purchase/">宅配買取</a></dt>
                    <dd><a href="<?php echo esc_url(home_url('purchase/kaitori-guide')); ?>">宅配買取の流れ</a></dd>
                    <dd><a href="<?php echo esc_url(home_url('purchase/packing')); ?>">梱包ガイド</a></dd>
                    <dd><a href="<?php echo esc_url(home_url('purchase/identification')); ?>">身分証ガイド</a></dd>
                    <dd><a href="<?php echo esc_url(home_url('purchase/shipping')); ?>">お荷物の発送方法</a></dd>
                    <dd><a href="<?php echo esc_url(home_url('purchase/faq')); ?>">よくある質問</a></dd>
                    <dd><a href="https://kaitori.aniera.jp/" target="_blank">お申し込み</a></dd>
                </dl>
            </div>
            <div class="spNavC">
                <dl>
                    <dt><a href="<?php echo home_url(); ?>/store/">オンラインストア</a></dt>
                    <dd class="h_logout"></dd>
                    <dd class="h_login"></dd>
                    <dd><a href="/ec/favorite">お気に入り</a></dd>
                    <dd class="h_cart"><a href="">カートを見る</a></dd>
                </dl>
                <dl>
                    <dt><span>運営店舗</span></dt>
                    <dd><a href="http://eastend-music.com/" target="_blank">いーすとえんど！</a></dd>
                    <dd><a href="https://blackrose-otome.com/" target="_blank">ブラックローズ</a></dd>
                    <dd><a href="http://anipos.com/" target="_blank">アニポス</a></dd>
                    <dd><a href="https://whitefang.jp/" target="_blank">ホワイトファング</a></dd>
                    <dd><a href="https://2nd-stage-otome.com/" target="_blank">セカンドステージ</a></dd>
                </dl>
            </div>
            <div class="spNavR">
                <dl>
                    <dt><a href="<?php echo get_permalink(get_page_by_path('about')->ID); ?>">運営会社</a></dt>
                    <dd><a href="<?php echo get_permalink(get_page_by_path('privacy')->ID); ?>">プライバシーポリシー</a></dd>
                    <dd><a href="<?php echo get_permalink(get_page_by_path('tradelaw')->ID); ?>">特定商取引法に基づく表記</a></dd>
                    <dd><a href="<?php echo get_permalink(get_page_by_path('agreement')->ID); ?>">ご利用規約</a></dd>
                    <dt><a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="contact"><svg aria-label="Contact" viewBox="0 0 134 24.1"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#contact_link"></use></svg></a></dt>
                </dl>
                <nav class="sns">
                    <ul>
                        <li><a href="https://www.instagram.com/aniera_japan/" target="_blank" title="Instagram"><svg viewBox="0 0 25 21.3"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ig"></use></svg></a></li>
                        <li><a href="https://twitter.com/aniera_japan" target="_blank" title="Twitter"><svg viewBox="0 0 25 21.3"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#tw"></use></svg></a></li>
                        <li><a href="https://www.youtube.com/channel/UCD8BV8DdTSkC3HZ6l5kNNTQ" target="_blank" title="Youtube"><svg viewBox="0 0 25 21.3"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#yt"></use></svg></a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>
<div id="globalNav">
    <nav class="nav">
        <ul>
            <li><a href="<?php echo home_url(); ?>/service/">サービス</a></li>
            <li><a href="<?php echo home_url(); ?>/blog/">アニエラブログ</a></li>
            <li><a href="<?php echo home_url(); ?>/purchase/">宅配買取</a></li>
        </ul>
        <div>
            <a href="<?php echo home_url(); ?>/store/">オンラインストア</a>
            <?php
            $args = array(
                'post_type'        => 'store',
                'style'              => 'list',
                'taxonomy'           => 'store_cat',
                'hide_empty'         => 1, //記事のないカテゴリも表示
                'title_li'           => '', // リストのタイトルを非表示
                'depth'              => 0, //子カテゴリも表示
                'current_category'   => 0,
            );
            ?>
            <?php $categories = get_categories($args); ?>
            <?php
            $categories = get_categories($args);
            foreach ($categories as $category) {
                $current = false;
                $current_cat = get_queried_object_id();
                if ($current_cat ==  $category->term_id) {
                    $current = true;
                }
            ?>
            <?php } ?>
            <div id="store-search">
                <div>
                    <select name="cat-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                        <option value="<?php echo home_url(); ?>/store/">全ての商品</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo esc_html(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <form method="get" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="text" name="s" class="search" value="<?php the_search_query(); ?>">
                    <input type="submit" name="submit" value="" class="submit">
                    <input type="hidden" name="post_type" value="store">
                </form>
            </div>
        </div>
    </nav>
</div>