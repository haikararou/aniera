<?php
/**
 * Template Name: 売れば売るほどプラスアップキャンペーン
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg" class="lp">
  <div class="wrapper1 lp-wrapper lead__bg">
    <section class="wrapper-lead lp-wrapper-lead ">
      <div class="lead lead__lp">
        <p class="lead__catch-copy">アニメグッズ売るならアニエラ！高価買取お任せ下さい！</p>
        <div class="lead__title-wrap">
          <p class="lead__area-copy">全国対応！送料無料！</p>
          <h2 class="lead__title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/title.svg" width="692" height="67" alt="アニメグッズ高価買取!"></h2>
        </div>

        <div class="lead__mv_outer">
          <figure class="lead__mv"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/lead-kv.svg" width="745" height="240" alt=""></figure>
        </div>
        <ul class="link__lists lead__link">
          <li class="link__item"><a href="<?php echo esc_url(home_url('purchase')); ?>" class="link__inner">宅配買取トップ</a></li>
          <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/kaitori-guide')); ?>" class="link__inner">宅配買取の流れ</a></li>
          <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/packing')); ?>" class="link__inner">梱包ガイド</a></li>
          <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/identification')); ?>" class="link__inner">身分証ガイド</a></li>
          <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/shipping')); ?>" class="link__inner">お荷物の発送方法</a></li>
          <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/faq')); ?>" class="link__inner">よくある質問</a></li>
          <li class="link__item"><a href="https://kaitori.aniera.jp/" target="_blank" class="link__inner">お申し込み</a></li>
        </ul>
        <div class="problem">
          <div class="problem__fukidashi">
            <p class="problem__title">こんな<span>悩み</span>…ありませんか？？</p>
            <ul class="problem__list">
              <li class="problem__item">アニメグッズの専門店にお願いしたいけど、ジャンルがバラバラでどこに<br>お願いして良いか分からない…</li>
              <li class="problem__item">とにかく一括で買い取ってもらいたい！だけど、買い叩かれるのは嫌だ！！</li>
              <li class="problem__item">メルカリとかで売るのは、対人トラブルがありそうで怖い…</li>
              <li class="problem__item">好きだったグッズ。せっかくなら、大切にしてくれる人へ渡って欲しい…</li>
            </ul>
          </div>
          <p class="problem__text">もし、こんなお悩みをお持ちでしたら…</p>
          <p class="problem__cvt-text"><span>好きの橋渡し！高くて早くて愛もある！</span><br><span>アニエラの宅配買取サービスを、</span><br class="br"><span class="i-block">ぜひご利用ください！</span></p>
          <div class="u-lp-btn">
            <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="wrapper1 lp-wrapper2">

    <section class="wrapper-lead lp-wrapper-lead">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en" ><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/news.svg" width="67" height="13" alt=""></figure>
        <span class="title-jp">お知らせ</span>
      </span>
      </h2>


      <div class="u-lp-inner">
        <div class="u-block__inner">
          <ul class="news__lists">

          <?php
$custom_posts = get_posts(array(
    'post_type' => 'blog', // 投稿タイプ
    'posts_per_page' => 3, // 表示件数
    'orderby' => 'date', // 表示順の基準
    'order' => 'DESC', // 昇順・降順
    'tax_query' => array(
        array(
            'taxonomy' => 'blog_cat', //タクソノミーを指定
            'field' => 'slug', //ターム名をスラッグで指定する
            'terms' => 'info-kaitori', //表示したいタームをスラッグで指定
            'operator' => 'IN'
        ),
    )
));
global $post;
if($custom_posts): foreach($custom_posts as $post): setup_postdata($post); ?>
<li class="news__item">
  <a href="<?php the_permalink() ?>">
    <time datetime="2022-2-22" lang="en" class="news__date"><?php the_time('Y.m.d') ?></time>
    <p class="news__title"><?php the_title(); ?></p>
  </a>
</li>  
<?php endforeach; wp_reset_postdata(); endif; ?>

          </ul>
        </div>
        <p class="news__btn"><a href="/blog_cat/info-kaitori/" class="link__inner">一覧を見る</a></p>
      </div>
      <!-- <div class="u-lp-btn">
        <a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
      </div> -->
    </section>







    <section class="wrapper-lead lp-wrapper-lead" id="plusupcp">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en" ><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/campaign.svg" width="137" height="13" alt=""></figure>
        <span class="title-jp">キャンペーン情報</span>
      </span>
      </h2>

      <!-- <p class="cp__lead"><span class="em">お引越し・新生活応援！<br>買取金額大幅UP</span></p>
      <figure class="cp__banner"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/cp-banner_22SP_1.jpg" width="800" height="426" alt="'22 SPRING CAMPAIGN"></figure> -->


      <section class="wrapper-lead lp-wrapper-lead000">
        <div class="lead lead__lp">
          <div class="lead__title-wrap">
            <p class="lead__area-copy">売れば売るほど</p>
            <h2 class="lead__title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp2/title.svg" width="692" height="67" alt="プラスアップキャンペーン"></h2>
          </div>
        </div>
        <dl class="cp__list2">
          <div class="cp__list-inner div1">
            <dt class="cp__list-term">10～19点</dt>
            <dd class="cp__list-desc">+1,000円UP!!</dd>
          </div>
          <div class="cp__list-inner div2">
            <dt class="cp__list-term">20～39点</dt>
            <dd class="cp__list-desc">+2,500円UP!!</dd>
          </div>
          <div class="cp__list-inner div3">
            <dt class="cp__list-term">40～59点</dt>
            <dd class="cp__list-desc">+5,000円UP!!</dd>
          </div>
          <div class="cp__list-inner div4">
            <dt class="cp__list-term">60～79点</dt>
            <dd class="cp__list-desc">+8,000円UP!!</dd>
          </div>
          <div class="cp__list-inner div5">
            <dt class="cp__list-term">80～99点</dt>
            <dd class="cp__list-desc">+12,000円UP!!</dd>
          </div>
          <div class="cp__list-inner div6">
            <dt class="cp__list-term">100～199点</dt>
            <dd class="cp__list-desc">+20,000円UP!!</dd>
          </div>
          <div class="cp__list-inner div7">
            <dt class="cp__list-term">200点以上</dt>
            <dd class="cp__list-desc">+50,000円UP!!</dd>
          </div>
        </dl>
        <p class="u-detail__caution u-text__center">※査定金額が100円以上の商品が対象になります。</p>
      
    </section>



      <div class="u-block__inner">
        <section class="u-unit">
          <h3 class="cp__lead">まとめて売れば、<br><span class="em">最大50,000円UP!!</span></h3>
          <p class="cp__text"><span class="em">CD・DVD・Blu-ray・ゲーム・グッズの組み合わせは自由！<br>まとめてお得にお売りいただけます！</span></p>

          <div class="conts">
            <p class="u-head-wrap"><span  class="u-head">買取アップの条件</span></p>
            <div class="u-detail">
              <dl class="u-detail__wrap">
                <div class="u-detail__inner">
                  <dt class="u-detail__term">キャンペーン期間</dt>
                  <dd class="u-detail__desc -bold -small">2023年<span class="large">3</span>月<span class="large">1</span>日(水)～2023年<span class="large">5</span>月<span class="large">7</span>日(日)</dd>
                </div>
                <div class="u-detail__inner">
                  <dt class="u-detail__term">対象者</dt>
                  <dd class="u-detail__desc">期間中に弊社宅配買取をお申込みのお客様</dd>
                </div>
                <div class="u-detail__inner">
                  <dt class="u-detail__term">対象商品</dt>
                  <dd class="u-detail__desc">1点が査定額100円以上の買取可能商品すべて</dd>
                </div>
              </dl>
              <p class="u-detail__caution">※キャンペーン専用申込コード等はございません。ボーナスは自動で加算されます。<br>※同一タイトル商品は3点までカウントいたします。<br>※他キャンペーン・クーポンとの併用はできません。いずれか付与額の高い方を自動で適用させて頂きます。</p>
            </div>
          </div>

          <div class="conts">
            <p class="u-head-wrap"><span class="u-head">　　　　買取 UP 金額　　　　</span></p>
            <dl class="cp__list">
              <div class="cp__list-inner">
                <dt class="cp__list-term">10～19点</dt>
                <dd class="cp__list-desc">+1,000円UP!!</dd>
              </div>
              <div class="cp__list-inner">
                <dt class="cp__list-term">20～39点</dt>
                <dd class="cp__list-desc">+2,500円UP!!</dd>
              </div>
              <div class="cp__list-inner">
                <dt class="cp__list-term">40～59点</dt>
                <dd class="cp__list-desc">+5,000円UP!!</dd>
              </div>
              <div class="cp__list-inner">
                <dt class="cp__list-term">60～79点</dt>
                <dd class="cp__list-desc">+8,000円UP!!</dd>
              </div>
              <div class="cp__list-inner">
                <dt class="cp__list-term">80～99点</dt>
                <dd class="cp__list-desc">+12,000円UP!!</dd>
              </div>
              <div class="cp__list-inner">
                <dt class="cp__list-term">100～199点</dt>
                <dd class="cp__list-desc">+20,000円UP!!</dd>
              </div>
              <div class="cp__list-inner">
                <dt class="cp__list-term">200点以上</dt>
                <dd class="cp__list-desc">+50,000円UP!!</dd>
              </div>
            </dl>
            <p class="u-detail__caution u-text__center">※査定金額が100円以上の商品が対象になります。</p>
          </div>

          <p class="u-head-wrap"><span  class="u-head">キャンペーン適用例</span></p>
          <p class="cp__text"><span class="em">DVD・Blu-ray・ゲーム・グッズの組み合わせは自由！<br>どうせ売るならまとめて売ってお得に現金化！</p>
          <div class="cp_example">
            <h2><span>CD・DVD・ゲームなどまとめて50点</span></h2>
            <div class="cp_example_flex">
              <div class="cp_example_flex01">通常査定金額 <span>8,000</span>円</div>
              <div class="cp_example_flex02">+ 5,000円UP</div>
              <div class="cp_example_flex03">合計買取金額 <span>13,000</span>円！</div>
            </div>
          </div>
          <div class="cp_example">
            <h2><span>Blu-ray・ゲーム・フィギュアなど200点</span></h2>
            <div class="cp_example_flex">
              <div class="cp_example_flex01">通常査定金額 <span>50,000</span>円</div>
              <div class="cp_example_flex02">+ 50,000円UP</div>
              <div class="cp_example_flex03">合計買取金額 <span>100,000</span>円！</div>
            </div>
          </div>
        </section>
      </div>
      <div class="u-lp-btn">
        <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
      </div>
    </section>







    <section class="wrapper-lead lp-wrapper-lead">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/price.svg" width="65" height="13" alt=""></figure>
        <span class="title-jp">買取価格表</span>
      </span>
      </h2>

      <div class="price__wrap">
        <ul class="price__type">
          <li class="price__tab is-active">CD</li>
          <li class="price__tab">DVD</li>
          <li class="price__tab">ゲーム</li>
          <li class="price__tab">フィギュア</li>
        </ul>

        <!-- CD -->
        <div class="price__block is-show">
          <div class="price__table">
            <div class="scroll-table">
              <?php echo do_shortcode('[table id=7 /]'); ?>
            </div>
          </div>
        </div>

        <!-- DVD -->
        <div class="price__block">
          <div class="price__table">
            <div class="scroll-table">
              <?php echo do_shortcode('[table id=8 /]'); ?>
            </div>
          </div>
        </div>

        <!-- ゲーム -->
        <div class="price__block">
          <div class="price__table">
            <div class="scroll-table">
              <?php echo do_shortcode('[table id=10 /]'); ?>
            </div>
          </div>
        </div>

        <!-- フィギュア-->
        <div class="price__block">
          <div class="price__table">
            <div class="scroll-table">
              <?php echo do_shortcode('[table id=6 /]'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="kaitori-list" class="wrapper-lead lp-wrapper-lead">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/list.svg" width="45" height="13" alt=""></figure>
        <span class="title-jp">買取できるものリスト</span>
      </span>
      </h2>
      <div class="u-lp-inner">
        <p>DVD / Blu-ray / CD / ゲーム / フィギュア / 食玩 / 抱き枕カバー / タペストリー / ぬいぐるみ / 版権許諾コスプレ衣装 / ラバーストラップ / トレカ / グラス / きゅんキャラ / ねんどろいど / figma / コラボグッズ / 複製原画 / アクリルキーホルダー / ZIPPO / セル画 / ドール / 同人ソフト / 同人誌（二次創作を除く） / ボードゲーム / 声優グッズ / 特撮関連グッズ / テレカ・金券 / おもちゃ / レコード、他多数！</p>
        <div class="u-block__inner">
          <p class="u-head-wrap"><span class="u-head">○お売りできるもの</span></p>
          <dl class="dropdown__list -disc list__dropdown">
            <dt class="u-dropdown__title">CD</dt>
            <dd class="u-dropdown__conts">
              <ul>
                <li>アニメ・声優・ゲーム・特撮 関連<br>（主題歌・キャラソン・サウンドトラック・ドラマ・シュチュエーション・ラジオDJCDなど）</li>
                <li>同人・東方 関連音楽</li>
                <li>PCゲーム関連</li>
                <li>8cmCD</li>
                <li>レコード</li>
                <li>特典・非売品（全巻購入特典、各巻購入特典、連動購入特典、同時購入特典、店舗特典 等<br>※新品未開封買取可能</li>
              </ul>
            </dd>
            <dt class="u-dropdown__title">DVD・Blu-ray</dt>
            <dd class="u-dropdown__conts">
              <ul>
                <li>アニメ・ゲーム・特撮・声優 関連</li>
                <li>DVDBOX・Blu-rayBOX</li>
                <li>2.5次元・舞台・演劇等関連</li>
                <li>同人音楽関連</li>
                <li>特典関連（全巻購入特典、各巻購入特典、連動購入特典、同時購入特典、店舗特典 等）</li>
                <li>DVD付きコミック（ケース・コミック・DVDすべて揃っているものに限る）<br>※新品未開封買取可</li>
              </ul>
            </dd>
            <dt class="u-dropdown__title">ゲーム</dt>
            <dd class="u-dropdown__conts">
              <ul>
                <li>ゲームソフト各種（箱、説明書がない商品でも買取可能）<br>※新品未開封可</li>
                <li>ゲーム機本体</li>
                <li>プレイステーション1～4</li>
                <li>PSP・PSVITA</li>
                <li>ファミコン・スーパーファミコン</li>
                <li>ニンテンドー64(64DD)</li>
                <li>ゲームボーイ・アドバンス・SP・ミクロ</li>
                <li>ゲームキューブ</li>
                <li>ニンテンドーDS・2DS・3DS・3DSLL・New3DS</li>
                <li>Wii・Wii U</li>
                <li>SWITCH</li>
                <li>ヴァーチャルボーイ</li>
                <li>スーパー32X</li>
                <li>X-BOX・X-BOX360・X-BOXOne</li>
                <li>SG-1000</li>
                <li>セガサターン</li>
                <li>ドリームキャスト</li>
                <li>ゲームギア</li>
                <li>3DO</li>
                <li>ネオジオポケット</li>
                <li>PC-FX</li>
                <li>ワンダースワン<br>など</li>
              </ul>
            </dd>
            <dt class="u-dropdown__title">PCゲーム</dt>
            <dd class="u-dropdown__conts">
              <ul>
                <li>ウィンドウズソフト全般（一般ソフト/18禁ソフト/同人ソフト）</li>
              </ul>
            </dd>
            <dt class="u-dropdown__title">書籍</dt>
            <dd class="u-dropdown__conts">
              <ul>
                <li class="-style-none">※弊社在庫過多のため、書籍のみでの買取を一時休止しております。<br>お値段をおつけし難い状況であり、お荷物保管場所確保ができかねますので、何卒ご理解を賜りますようお願い申し上げます。<br>CD、DVD、ゲーム等とご同梱の書籍につきましては買取可能です。</li>
                <li>単行本(現在全巻セットのみ買取可)</li>
                <li>アニメの画集</li>
                <li>声優関連の写真集</li>
                <li>コンテ本</li>
                <li>ムック本</li>

              </ul>
            </dd>
            <dt class="u-dropdown__title">グッズ・関連商品</dt>
            <dd class="u-dropdown__conts">
              <ul>
                <li>PVCフィギュア（箱がない状態でも可）</li>
                <li>アニメ・ゲーム・コミック系のキャラクターグッズ</li>
                <li>声優・2.5次元関連グッズ</li>
                <li>イベント販売品</li>
                <li>ライブ物販品</li>
                <li>未開封Tシャツ</li>
                <li>通販限定品</li>
                <li>キャンぺーン特典品</li>
                <li>店舗別特典</li>
                <li>タペストリー<br>など</li>
              </ul>
            </dd>
          </dl>
          <p>その他、記載のないものでもお売りいただける場合がございます。<br>お気軽にお問い合わせください。</p>
        </div>

        <div class="u-block__inner">
          <p class="u-head-wrap"><span class="u-head">×お売りいただけないもの</span></p>
          <ul class="list-ng">
            <li class="list-ng__item">レンタル落ち</li>
            <li class="list-ng__item">限定版付属の単体品</li>
            <li class="list-ng__item">サンプル品</li>
            <li class="list-ng__item">VHS</li>
            <li class="list-ng__item">海賊版・コピー品</li>
            <li class="list-ng__item">レーザーディスク</li>
            <li class="list-ng__item">再生不能のジャンク品</li>
            <li class="list-ng__item">景品類</li>
            <li class="list-ng__item">カビや重度の汚れがある</li>
            <li class="list-ng__item">ケース・ディスク欠品の商品</li>
            <li class="list-ng__item">雑誌等の付録単体品</li>
          </ul>
        </div>
        <div class="u-lp-btn">
          <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
        </div>
      </div>
    </section>
    <section class="wrapper-lead lp-wrapper-lead">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/reason.svg" width="96" height="13" alt=""></figure>
        <span class="title-jp">アニエラが選ばれる理由</span>
      </span>
      </h2>
      <div class="u-lp-inner">
        <div class="u-block__inner">
          <ul class="reason__list">
            <li class="reason__item">
              <figure class="reason__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/reason1.png" width="225" height="225" alt=""></figure>
              <p class="reason__text">各ジャンルに精通した<br>専門バイヤー常駐！</p>
            </li>
            <li class="reason__item">
              <figure class="reason__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/reason2.png" width="225" height="225" alt=""></figure>
              <p class="reason__text">全国対応！<br>送料・手数料無料！</p>
            </li>
            <li class="reason__item">
              <figure class="reason__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/reason3.png" width="225" height="225" alt=""></figure>
              <p class="reason__text">ご希望の方に無料でダンボールをお届け！</p>
            </li>
            <li class="reason__item">
              <figure class="reason__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/reason4.png" width="225" height="225" alt=""></figure>
              <p class="reason__text">最短即日入金！</p>
            </li>
            <li class="reason__item">
              <figure class="reason__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/reason5.png" width="225" height="225" alt=""></figure>
              <p class="reason__text">誰にも会わずに<br>自宅から簡単発送！</p>
            </li>
            <li class="reason__item">
              <figure class="reason__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/reason6.png" width="225" height="225" alt=""></figure>
              <p class="reason__text">専門バイヤーが<br>１点１点丁寧に査定致します</p>
            </li>
          </ul>
          <p class="reason__lead"><span class="em">アニエラの査定スタッフは、アニメ愛に溢れた人達ばかり！</span><br>総合リサイクルショップでは見逃してしまうような、<br class="u-sp-none">ファンだからこそ分かる価値を見逃しません！</p>
        </div>
        <div class="u-lp-btn">
          <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
        </div>
      </div>
    </section>
    <section class="wrapper-lead lp-wrapper-lead">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/delivery.svg" width="251" height="13" alt=""></figure>
        <span class="title-jp">宅配買取について</span>
      </span>
      </h2>
      <div class="u-lp-inner">
        <div class="u-block__inner">
          <p class="u-head-wrap"><span class="u-head">宅配買取とは？</span></p>
          <p>宅配買取はお客様自身で売りたい品物を梱包後、配送業者を利用して商品をお送り頂き、査定、金融機関口座に振込することで代金をお支払いする中古品の買取方法です。お客様とは直接顔をあわせず、申し込みフォーム・メールでのやりとりのみでご入金までのお手続きが完結いたします。</p>
          <ul class="delivery__list">
            <li class="delivery__item">
              <figure class="delivery__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/flow1.png" width="153" height="204" alt=""></figure>
            </li>
            <li class="delivery__item">
              <figure class="delivery__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/flow2.png" width="153" height="204" alt=""></figure>
            </li>
            <li class="delivery__item">
              <figure class="delivery__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/flow3.png" width="153" height="204" alt=""></figure>
            </li>
            <li class="delivery__item">
              <figure class="delivery__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/flow4.png" width="153" height="204" alt=""></figure>
            </li>
            <li class="delivery__item">
              <figure class="delivery__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/flow5.png" width="153" height="204" alt=""></figure>
            </li>
          </ul>
          <p class="delivery__text">宅配買取なら…<br><span class="em">
            ・ご自宅に居ながら売れる！<br>
            ・売りたい物が大量でもらくらく売れる！<br>
            ・誰にも趣味を見られずに売れる！<br>
            ・査定を待つ時間をより有効に使える！<br>
            ・代金を受け取りに行く必要なし！</span></p>
          <p>ただし、非対面でのお取引のため、以下のものが必要となります。</p>
        </div>
        <div class="u-block__inner">
          <p class="u-head-wrap -mb"><span class="u-head">宅配買取に必要なもの</span></p>
          <section class="u-unit delivery-unit">
            <figure class="u-unit__number"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num1.svg" width="62" height="62" alt=""></figure>
            <h3 class="delivery-unit__title">有効な身分証明書</h3>
            <div class="delivery-unit__inner">
              <p>・運転免許証<br>・各種健康保険証(健康保険、国民健康保険、共済組合、船員保険)<br>・日本国パスポート<br>・年金手帳(住所記載欄があるものに限る)<br>・外国人登録(済)証明書<br>・住民基本台帳カード(住所記載欄があるものに限る)</p>
            </div>
            <div class="delivery-unit__inner">
              <p class="delivery-unit__head">＜ご利用頂けないもの＞</p>
              <p>・学生証、社員証他、上記以外のもの</p>
            </div>
            <div class="delivery-unit__inner">
              <p class="delivery-unit__head">＜注意点＞</p>
              <p class="delivery-unit__attention">※現住所（集荷先住所）記載のものに限ります。<br>※顔写真を塗りつぶす等の加工がされたものは無効となります。<br>※健康保険証の記号・番号は黒塗りしてください。</p>
            </div>
            <div class="delivery-unit__inner">
              <p class="delivery-unit__head">＜18歳未満のお客様＞</p>
              <p>下記の同意書を印刷し、保護者の方がご記入・ご捺印頂いたものを身分証と同封して頂きますようお願い致します。</p>
            </div>
            <p class="u-dl"><a href="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/agreement-form.pdf" class="u-dl__link"><span class="u-dl__icon">保護者同意書ダウンロード</span></a></p>
          </section>
          <section class="u-unit delivery-unit">
            <figure class="u-unit__number"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num2.svg" width="62" height="62" alt=""></figure>
            <h3 class="delivery-unit__title">支払先の本人名義口座</h3>
            <p>買取代金は銀行振込でお支払いたします。買取をお申し込みされるご本人様名義の金融機関口座（ゆうちょ含む）が必要です。</p>
          </section>
          <section class="u-unit delivery-unit">
            <figure class="u-unit__number"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num3.svg" width="62" height="62" alt=""></figure>
            <h3 class="delivery-unit__title">メールアドレス</h3>
            <div class="delivery-unit__inner">
              <p>査定結果のご連絡などはすべてお申し込みのメールアドレス宛にお送りいたします。</p>
            </div>
            <div class="delivery-unit__inner">
              <p class="delivery-unit__head">＜注意点＞</p>
              <p>迷惑メールフィルター設定、迷惑メールブロック設定、ドメイン指定受信を設定している場合は、設定を解除するか【aniera.jp】を受信許可登録してください。<br> 一部フリーメールアドレスへ弊社からのメールが届かない事象が多発しております。下記のアドレスをお使いの方は、その他のメールアドレスをお使いいただくか、【 @aniera.jp 】からのメールを受信できるよう設定をお願いいたします。</p>
              <p class="delivery-unit__attention">お問い合わせの多いアドレス<br>@icloud.com / @me.com / @yahoo.co.jp / @hotmail.co.jp</p>
            </div>
          </section>
        </div>
        <div class="u-lp-btn">
          <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
        </div>
      </div>
    </section>
    <section class="wrapper-lead lp-wrapper-lead">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/flow.svg" width="64" height="13" alt=""></figure>
        <span class="title-jp">宅配買取の流れ</span>
      </span>
      </h2>
      <div class="u-lp-inner">
        <p>アニエラの宅配買取はとっても簡単で便利です！スマホ、PCなどで専用フォームからお申し込みいただいたら、売りたい商品を梱包して、ご指定日に集配業者に引き渡すだけ！お客様はご自宅から外に出なくてもお売りいただけるのでとっても便利♪</p>
        <p class="u-text__center">もっと詳しく知りたい方はこちら</p>
        <div class="u-lp-btn2">
          <a href="<?php echo esc_url(home_url('purchase/kaitori-guide')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">宅配買取の流れ</span></a>
        </div>
      </div>
    </section>
    <section class="wrapper-lead lp-wrapper-lead">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/estimate.svg" width="111" height="13" alt=""></figure>
        <span class="title-jp">無料のお見積もり</span>
      </span>
      </h2>
      <div class="u-lp-inner">
        <p>「事前にどのくらいの査定額になるか知りたい！」というお客様は、ぜひ無料事前査定をご利用ください。<br>商品のバーコード番号を入力するだけで、商品をお送りいただかなくてもお見積もりが可能です！<br>※事前査定額はあくまで目安であり、商品状態などにより多少変動する場合がございます。</p>
        <div class="u-lp-btn2">
          <a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">無料お見積もりはこちら</span></a>
        </div>
      </div>
    </section>
    <section class="wrapper-lead lp-wrapper-lead">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/voice.svg" width="72" height="13" alt=""></figure>
        <span class="title-jp">お客様の声</span>
      </span>
      </h2>
      <div class="u-lp-inner">
        <div class="u-block__inner">
          <ul class="voice__list">
            <li class="voice__item">
              <figure class="voice__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/voice1.png" width="128" height="128" alt="" class="voice__icon-img">
                <figcaption class="voice__icon-name">東京都 30代 男性</figcaption>
              </figure>
              <p class="voice__text">今までは近場の店舗に売りに行っていたのですが、今回初めて宅配買取をアニエラさんにお願いしました。家で梱包しておけば、荷物は取りに来てくれるのでとても楽だなと感じました。荷物を送った２日後にはもう査定結果のメールが来ていて正直驚きました。梱包の手間は多少ありますが、荷物を持ちに来てくれるのは非常にありがたいです。</p>
            </li>
            <li class="voice__item">
              <figure class="voice__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/voice2.png" width="128" height="128" alt="" class="voice__icon-img">
                <figcaption class="voice__icon-name">愛知県 20代女性</figcaption>
              </figure>
              <p class="voice__text">宅配買取がはじめてだったので、色々と質問してしまったのですが、迅速に対応して頂き、安心して荷物を送ることが出来ました。あまり枚数も多くなかったのに、丁寧に対応して頂き、うれしかったです。</p>
            </li>
            <li class="voice__item">
              <figure class="voice__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/voice3.png" width="128" height="128" alt="" class="voice__icon-img">
                <figcaption class="voice__icon-name">京都府 50代 男性</figcaption>
              </figure>
              <p class="voice__text">引っ越しのため、長年コレクションしていたアニメCDの買取をお願いしました。量が多く、また状態も良いとは言えない物でしたので、査定額はあまり期待していませんでしたが、想像以上の高い査定額で驚きました。対応もスピーディーで満足しています。</p>
            </li>
            <li class="voice__item">
              <figure class="voice__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/voice4.png" width="128" height="128" alt="" class="voice__icon-img">
                <figcaption class="voice__icon-name">栃木県 30代 女性</figcaption>
              </figure>
              <p class="voice__text">BLCDの買取をお願いしました。家族にも内緒にしている趣味なので、自宅でこっそり送ることが出来るのは非常に助かります。特典CDなども買い取ってくださり、感謝しています。また利用したいです。</p>
            </li>
            <li class="voice__item">
              <figure class="voice__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/voice5.png" width="128" height="128" alt="" class="voice__icon-img">
                <figcaption class="voice__icon-name">北海道 30代 男性</figcaption>
              </figure>
              <p class="voice__text">フィギュアの買取をお願いしました。５箱くらいになってしまったのですが、送料無料で買い取って下さいました。買ったきり家でホコリを被っていた物なので、新しい持ち主の元に旅立ってくれたら良いなと思います。買取価格も事前にご連絡頂き、納得して売ることが出来ました。また何かありましたら、よろしくお願いします。</p>
            </li>
            <li class="voice__item">
              <figure class="voice__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/voice6.png" width="128" height="128" alt="" class="voice__icon-img">
                <figcaption class="voice__icon-name">長野県 20代 女性</figcaption>
              </figure>
              <p class="voice__text">アニメと声優のBlu-rayを買い取ってもらいました。色んなサイトを見ましたが、アニエラさんが一番アニメが好きそうだなと思ってお願いすることにしました（笑）あと、売りたい商品の値段を調べられるので、安心して任せることが出来ました。今後もお願いしたいと思っています。これからも頑張ってください！ブログも楽しみにしてます。</p>
            </li>
            <li class="voice__item">
              <figure class="voice__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/voice7.png" width="128" height="128" alt="" class="voice__icon-img">
                <figcaption class="voice__icon-name">徳島県 50代 男性</figcaption>
              </figure>
              <p class="voice__text">アニメ系のCDやDVDを部屋に積んで居たのですが、最近の地震の頻発で怖くなり、売却することにしました。かなり状態が悪かったのですが、引き取ってもらえました。参考価格よりは値段下がりましたが、ほとんど買取不可だろうと思っていたので、ありがたかったです。</p>
            </li>
            <li class="voice__item">
              <figure class="voice__icon">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/voice8.png" width="128" height="128" alt="" class="voice__icon-img">
                <figcaption class="voice__icon-name">青森県 30代 女性</figcaption>
              </figure>
              <p class="voice__text">大切にしていた乙女ゲームやシチュエーションCDなどを買取して頂きました。他の店では買取して頂けなかった店舗特典類もちゃんと値段を付けてくれました。とても感謝してます。アニエラ様なら、ひとつひとつ大切に査定していただけるのでこれからもお願いしたいと思っています。</p>
            </li>


          </ul>
        </div>
        <div class="u-lp-btn">
          <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
        </div>
      </div>
    </section>
    <section class="wrapper-lead lp-wrapper-lead">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/compare.svg" width="113" height="13" alt=""></figure>
        <span class="title-jp">他店との比較</span>
      </span>
      </h2>
      <div class="u-lp-inner">
        <div class="u-block__inner">
          <div class="compare__table-wrap">
            <table class="compare__table">
              <tbody>
                <tr>
                  <th class="compare__head-1"></th>
                  <th class="compare__head-2 compare__bg -sub">宅配買取A</th>
                  <th class="compare__head-3 compare__bg -main">アニエラ</th>
                  <th class="compare__head-4 compare__bg -sub">店舗型B</th>
                </tr>
                <tr>
                  <td class="compare__item">買取方法</td>
                  <td class="compare__bg -sub">宅配<br>（ご自身で発送）</td>
                  <td class="compare__bg -main">無料集荷宅配<br>（ご自身で発送も可）</td>
                  <td class="compare__bg -sub">持ち込み</td>
                </tr>
                <tr>
                  <td class="compare__item">取り扱い</td>
                  <td class="compare__bg -sub"><span class="compare__symbol">△</span><br>30点から</td>
                  <td class="compare__bg -main"><span class="compare__symbol">◎</span><br>1点から</td>
                  <td class="compare__bg -sub"><span class="compare__symbol">◎</span><br>1点から</td>
                </tr>
                <tr>
                  <td class="compare__item">送料</td>
                  <td class="compare__bg -sub"><span class="compare__symbol">△</span><br>制限付き無料</td>
                  <td class="compare__bg -main"><span class="compare__symbol">◎</span><br>完全無料</td>
                  <td class="compare__bg -sub"><span class="compare__symbol">○</span><br>持ち込み</td>
                </tr>
                <tr>
                  <td class="compare__item">手数料</td>
                  <td class="compare__bg -sub"><span class="compare__symbol">△</span><br>査定額から差し引き</td>
                  <td class="compare__bg -main"><span class="compare__symbol">◎</span><br>完全無料</td>
                  <td class="compare__bg -sub"><span class="compare__symbol">○</span><br>持ち込み</td>
                </tr>
                <tr>
                  <td class="compare__item">スピード</td>
                  <td class="compare__bg -sub"><span class="compare__symbol">△</span><br>一週間以上</td>
                  <td class="compare__bg -main"><span class="compare__symbol">○</span><br>到着後、最短1日</td>
                  <td class="compare__bg -sub"><span class="compare__symbol">◎</span><br>即日現金</td>
                </tr>
                <tr class="comapare__border -bottom-none">
                  <td class="compare__item">特典品</td>
                  <td class="compare__bg -sub"><span class="compare__symbol">×</span><br>買取不可</td>
                  <td class="compare__bg -main"><span class="compare__symbol">◎</span><br>1点1点査定</td>
                  <td class="compare__bg -sub"><span class="compare__symbol">×</span><br>買取不可</td>
                </tr>
                <tr class="comapare__border -top-none compare__method">
                  <td class="compare__item"></td>
                  <td class="compare__bg -sub">家具や本など、色んなジャンルをまとめて一気に片付けられる。素早く現金化したい、1点1点しっかり見て査定してもらいたい方には不向き。</td>
                  <td class="compare__bg -main">非売品でも、1点1点しっかり査定してもらえる。自分のコレクションが他の好きな人に橋渡しされる。アニメ関連商品に特化しているため、色んな商品（本・ブランド服・家具）を一度に売りたい方は不向き。</td>
                  <td class="compare__bg -sub">気軽に持っていける。即日現金で買取価格が受け取れる。近くに店舗がない方には不向き。また、店舗の維持費が高いため、査定額が低くなってしまう傾向も？</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="u-lp-btn">
          <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
        </div>
      </div>
    </section>
    <section class="wrapper-lead lp-wrapper-lead">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/faq.svg" width="45" height="13" alt=""></figure>
        <span class="title-jp">よくある質問</span>
      </span>
      </h2>
      <div class="u-lp-inner">
        <div class="u-block__inner">
          <dl class="dropdown__list faq__dropdown">
            <dt class="u-dropdown__title"><span class="faq__dropdown-icon">本当に手数料無料なのですか？</span></dt>
            <dd class="u-dropdown__conts">
              <p>送料・振込手数料は商品1点から全て無料（当店負担）です。買取依頼時に「査定後、金額を確認して承認」をお選びいただいた場合で、買取不成立による商品の返送料のみ、お客様ご負担となります。</p>
            </dd>
            <dt class="u-dropdown__title"><span class="faq__dropdown-icon">キャンペーン期間中の集荷でなければいけませんか？</span></dt>
            <dd class="u-dropdown__conts">
              <p>お申し込み日を基準としておりますので、お荷物の引き渡し希望日をキャンペーン期間終了日以降に設定していただいた場合でも、買取アップキャンペーン対象とさせていただきます。</p>
            </dd>
            <dt class="u-dropdown__title"><span class="faq__dropdown-icon">買取不可のものは返送されてくるのですか？</span></dt>
            <dd class="u-dropdown__conts">
              <p>お送りいただいた商品の中に買取不可の商品があった場合でも、アニメに関連した商品であれば、お引き取りいたします！<br>一部商品のみの返送などはいたしませんので、安心してお送りください。</p>
            </dd>
            <dt class="u-dropdown__title"><span class="faq__dropdown-icon">値段のつきにくい商品はありますか？</span></dt>
            <dd class="u-dropdown__conts">
              <p>商品や、ジャンルによるので一概にはいえませんが、特に以下のジャンル商品は経験上お値段つきにくいものが多くなっておりますので、ご確認ください。<br><br>漫画本単品、雑誌、ラノベ単品、同人誌、特典系のポスター、缶バッチ等の小物類、プライズ品、付録単体（雑誌等の付録など）</p>
            </dd>
            <dt class="u-dropdown__title"><span class="faq__dropdown-icon">査定完了から入金までどのくらいかかりますか？</span></dt>
            <dd class="u-dropdown__conts">
              <p>査定はお荷物が集荷センターに届いてから、原則3日以内には完了いたします。(自動承認の場合)<br>要承認をご選択のお客様は最大10営業日程度で査定結果ご連絡となります。<br>また、お支払いに関しては以下の通りです。<br>【査定後すぐにお支払い（自動承認）】<br>　査定完了後3営業日以内<br>【査定後、金額を確認して承認（要承認）】<br>　ご承認後3営業日以内<br><br>お急ぎの場合は、できるだけご要望にお答えしますのでご相談ください。</p>
            </dd>
            <dt class="u-dropdown__title"><span class="faq__dropdown-icon">発送の仕方が分からないのですが…。</span></dt>
            <dd class="u-dropdown__conts">
              <p>お申し込み時にご入力いただいた指定日時に配達員が送り状を持参してご自宅にお伺いします。すでに印字された送り状をお持ちいたしますので、送り状の記入の必要はございません。</p>
            </dd>
            <dt class="u-dropdown__title"><span class="faq__dropdown-icon">18歳未満ですが、買取できますか？</span></dt>
            <dd class="u-dropdown__conts">
              <p>18歳未満のお客様には保護者同意書のご記入と御同封をお願いしております。親御様の了解が取れない場合には買取することが出来ません。 下記の同意書を印刷し、保護者の方がご記入頂いたものを、身分証と同封してください。</p>
              <p class="u-dl"><a href="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/agreement-form.pdf" class="u-dl__link"><span class="u-dl__icon">保護者同意書ダウンロード</span></a></p>
            </dd>
            <dt class="u-dropdown__title"><span class="faq__dropdown-icon">身分証を提示するのはなぜですか？</span></dt>
            <dd class="u-dropdown__conts">
              <p>古物営業法に基づき、法律でご提示が義務付けられております。</p>
            </dd>
          </dl>
        </div>
        <div class="u-lp-btn">
          <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
        </div>
      </div>
    </section>
    <section class="wrapper-lead lp-wrapper-lead">
      <h2 class="u-lp-title">
      <span class="title-inner">
        <figure class="title-en"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/episode.svg" width="100" height="13" alt=""></figure>
        <span class="title-jp">エピソード</span>
      </span>
      </h2>
      <div class="u-lp-inner">
        <div class="u-block__inner">
          <p>実店舗を持たないアニエラですが、定期的に長野県松本市にある松本PARCOにて、期間限定ショップをオープンしています。期間中は、アニエラフェスタなどの活動を通じてアニエラを知ってくださった、多くのお客様にご来店頂き、地元のアニメ好きの高校生などに、手に取りやすい価格で皆様の大切にされていたグッズを「橋渡し」することが出来ました。</p>
          <p>アニエラフェスタやアニエラの活動を通じて、たくさんのアニメファンと繋がれていること。これがアニエラの強みの一つだと思っております。</p>
          <p>・こつこつ集めたCDやグッズ、<br>・お気に入りのDVD、<br>・何度もプレイしたゲーム…。</p>
          <p>断捨離したいけど、思い入れもあるし捨てづらい<br>そんなお悩みをお持ちの方、是非、アニエラへお問い合わせください。</p>
          <p class="episode__text-em">他に必要としてくれる人へ<br>『好きの橋渡し』<br>させて頂きます!</p>
        </div>
        <figure class="episode__store">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/store.jpg" width="" height="" alt="" class="episode__store-img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/store2.jpg" width="" height="" alt="" class="episode__store-img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/store3.jpg" width="" height="" alt="" class="episode__store-img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/store4.jpg" width="" height="" alt="" class="episode__store-img">
        </figure>


      </div>
    </section>
    <div class="wrapper-lead lp-wrapper-lead">
      <ul class="link__lists">
        <li class="link__item"><a href="<?php echo esc_url(home_url('purchase')); ?>" class="link__inner">宅配買取トップ</a></li>
        <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/kaitori-guide')); ?>" class="link__inner">宅配買取の流れ</a></li>
        <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/packing')); ?>" class="link__inner">梱包ガイド</a></li>
        <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/identification')); ?>" class="link__inner">身分証ガイド</a></li>
        <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/shipping')); ?>" class="link__inner">お荷物の発送方法</a></li>
        <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/faq')); ?>" class="link__inner">よくある質問</a></li>
        <li class="link__item"><a href="https://kaitori.aniera.jp/" target="_blank" class="link__inner">お申し込み</a></li>
      </ul>
    </div>
  </div>

</div>
<?php endwhile;?>

<?php get_footer(); ?>