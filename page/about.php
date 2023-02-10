<?php
/**
 * Template Name: 運営会社
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead">
                <h2><svg aria-label="ABOUT" viewBox="0 0 419.3 80"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_about"></use></svg></h2>
                <p>アニメやゲームなど、日本のポップカルチャーを通じて、人々の『人生をもっと楽しく』する会社です。ネットショップの運営や、長野県最大のアニソン野外フェス『ナガノアニエラフェスタ』（動員5,000名以上）の開催、『オシャレに楽しむアニメ服』をコンセプトにした商品開発など、様々な“楽しい”を企画・プロデュースしています。</p>
            </div>
            <dl class="concept">
                <div>
                    <dt><svg aria-label="Mission" viewBox="0 0 122.7 22.4"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#mission"></use></svg></dt>
                    <dd>人生をもっと楽しく</dd>
                </div>
                <div>
                    <dt><svg aria-label="Vision" viewBox="0 0 100.2 21.3"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vision"></use></svg></dt>
                    <dd>日本のポップカルチャーを<span>世界一の文化にする。</span></dd>
                </div>
                <div>
                    <dt><svg aria-label="Value" viewBox="0 0 90 23.2"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#value"></use></svg></dt>
                    <dd>よく遊び、よく学ぶ</dd>
                </div>
            </dl>
        </div>
        <div class="wrapper4">
            <div class="conts">
                <h2>社名の由来</h2>
                <div class="indent">
                    <p>アニエラは、ANIME（アニメ）と、ERA（時代）を掛け合わせた造語です。アニメや漫画をはじめとする日本のポップカルチャーを世界に広め、その時代を代表する会社になるという想いが込められています。</p>
                </div>
            </div>
            <div class="conts">
                <h2>アニエラの事業</h2>
                <div class="indent">
                    <ol>
                        <li>
                            <h2>アニメグッズの宅配買取<span>～好きの橋渡し～</span></h2>
                            <p>長野県を拠点に全国各地からアニメ系グッズの買取・販売を行っています。スタッフはもちろんアニメ好きばかり！様々な理由で手放さなければならなくなった大切な商品を、次に大切にしてくれる方へ橋渡しする、“好きの橋渡し”に誇りを持って、日々査定に励んでいます。</p>
                            <a href="https://aniera.jp/purchase/" target="_blank" class="more_right_s"><span class="arw"></span><span>詳しく見る</span></a>
                        </li>
                        <li>
                            <h2>ANIERA MODE<span>～オシャレに楽しむアニメ服～</span></h2>
                            <p>ANIERA MODEは「オシャレに楽しむアニメ服」をコンセプトにしたアニエラのアパレルブランドです。「アニメも好きだけれど、オシャレも楽しみたい！」そんな方々に向けて、日常使いのできるアイテムを提案しています。</p>
                            <a href="<?php echo home_url(); ?>/service/#link02" target="_blank" class="more_right_s"><span class="arw"></span><span>詳しく見る</span></a>
                        </li>
                        <li>
                            <h2>ナガノアニエラフェスタ<span>～長野県最大のアニソン野外フェス～</span></h2>
                            <p>ナガノアニエラフェスタは、アニソンに特化した野外フェスです。信州の大自然を肌で感じながら、アーティストによるライブパフォーマンスや、美味しいお酒・ご飯など、たくさんのコンテンツを自由に楽しめる野外フェスを毎年開催しています。</p>
                            <a href="https://aniera-festa.com/" target="_blank" class="more_right_s"><span class="arw"></span><span>詳しく見る</span></a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="conts">
                <h2>会社概要</h2>
                <div class="indent">
                    <dl>
                        <div>
                            <dt>社名</dt>
                            <dd>株式会社アニエラ<br>ANIERA.Inc</dd>
                        </div>
                        <div>
                            <dt>設立</dt>
                            <dd>2017年2月1日</dd>
                        </div>
                        <div>
                            <dt>資本金</dt>
                            <dd>500万円</dd>
                        </div>
                        <div>
                            <dt>住所</dt>
                            <dd>〒399-0001 長野県松本市宮田5-13</dd>
                        </div>
                        <div>
                            <dt>電話</dt>
                            <dd><a href="tel:0263-87-3452">0263-87-3452</a></dd>
                        </div>
                        <div>
                            <dt>メール</dt>
                            <dd><a href="m&#97;i&#108;t&#111;:&#115;&#117;p&#64;&#97;&#110;ie&#114;&#97;&#46;&#106;&#112;">&#115;&#117;p&#64;&#97;&#110;ie&#114;&#97;&#46;&#106;&#112;</a></dd>
                        </div>
                        <div>
                            <dt>代表者</dt>
                            <dd>代表取締役 小林諒（コバヤシリョウ）</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>

