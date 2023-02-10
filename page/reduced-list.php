<?php
/**
 * Template Name: 宅配買取- 減額基準一覧
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg" class="lp">
  <div class="wrapper1 lp-wrapper u-lp__sec-bg">
    <ul class="link__lists -secondary">
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase')); ?>" class="link__inner">宅配買取トップ</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/kaitori-guide')); ?>" class="link__inner">宅配買取の流れ</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/packing')); ?>" class="link__inner">梱包ガイド</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/identification')); ?>" class="link__inner">身分証ガイド</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/shipping')); ?>" class="link__inner">お荷物の発送方法</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/faq')); ?>" class="link__inner">よくある質問</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="link__inner">お申し込み</a></li>
    </ul>
    <section class="u-lp-sec-wrapper">
      <h2 class="u-sec-maintitle">減額基準一覧</h2>
      <p>当店の基本的な査定減額基準一覧です。<br>※ 下記に記載のないものでも、当店の査定基準により状態が著しく悪いと判断する商品は減額（または買取不可）とさせていただく場合がございます。あらかじめご了承ください</p>
      <section class="kaitori__container">
        <div class="faq__contents -mb">
          <p>目次</p>
          <ol class="faq__contents-lists">
            <li class="faq__contents-item"><a href="#topic1" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num1.svg" width="20" height="20" alt="" class="faq__contents-num">CD</a></li>
            <li class="faq__contents-item"><a href="#topic2" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num2.svg" width="20" height="20" alt="" class="faq__contents-num">DVD・Blu-ray</a></li>
            <li class="faq__contents-item"><a href="#topic3" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num3.svg" width="20" height="20" alt="" class="faq__contents-num">ゲーム</a></li>
            <li class="faq__contents-item"><a href="#topic4" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num4.svg" width="20" height="20" alt="" class="faq__contents-num">グッズ等</a></li>
          </ol>
        </div>

        <div class="u-unit -secondary kaitori__unit -mb">
          <p class="u-unit__text-large">用語説明</p>
          <p class="u-unit__bold -mb0">必須付属品</p>
          <p>外箱、歌詞カード、説明書、動作に必要な付属品機器など。<br>※はがき、チラシ、ポストカードなどは含みません。</p>
          <p class="u-unit__bold -mb0">同梱物（特典）</p>
          <p>限定版商品の同梱特典として帯、外箱等に記載されているもの（特典CD、特典小冊子、その他小物など）。<br>※プロダクトコードやイベント応募券は含みません。</p>
        </div>
      </section>

      <section id="topic1" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num1.svg" width="45" height="45" alt="" class="u-sec-title__num">CD</h3>
        <p class="u-headline">CD</p>
        <p>・在庫過多の商品<br>・必須付属品のうち欠品のある商品<br>・本体に劣化、汚れ、ヤケ、重度のスレ、傷がある商品<br>・必須付属品に汚れ、ヤケ、重度のスレ・傷がある商品<br>・タバコなど強い臭いがついた商品<br>・ケースに割れがある商品<br>・ブックレットに破れ、汚れ、ヤケがある商品<br>・ディスクに軽度～修復可能な傷がある場合は程度に応じて減額対象となります</p>
        <p>※ケースの自然なスレなどは減額対象とはなりません。<br>※ブックレットの自然なヨレ、爪跡、スレなどは減額対象とはなりません。<br>※外箱を開封する際自然にできる外箱の折れ、軽度な潰れは減額対象とはなりません。<br>※ケース、ディスク、ブックレットのいずれかが欠品する場合は買取不可となります。<br>※ディスクに修復不可能な傷、割れがある場合は買取不可となります。<br>※レンタルアップ商品やサンプル品は買取不可となります。</p>
        <p class="u-headline">8cmCD</p>
        <p>・ジャケットに重度の劣化（破損・汚損）、重度のヤケがある商品<br>・ディスクに傷がある商品<br>・トレー下部を切り離した商品</p>
        <p>※自然な経年劣化は減額対象とはなりません。<br>※ディスク、トレーに破損・割れがある商品は買取不可となります</p>
      </section>

      <section id="topic2" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num2.svg" width="45" height="45" alt="" class="u-sec-title__num">DVD・Blu-ray</h3>
        <p class="u-headline">DVD・Blu-ray</p>
        <p>・必須付属品・同梱物（特典）のうち欠品のある商品<br>・本体に劣化、汚れ、ヤケ、重度のスレ、傷がある商品<br>・必須付属品・同梱物（特典）に劣化、汚れ、ヤケ、重度のスレ、傷がある商品<br>・タバコなどの臭いがついた商品<br>・ケースに割れがある商品<br>・ブックレットに破れ、汚れがある商品<br>・ディスクに軽度～修復可能な傷がある場合は度合いに応じて減額対象となります</p>
        <p>※帯の有無は減額対象とはなりません。<br>※ケース、ディスク、ブックレットのいずれかが欠品する場合は買取不可となります。<br>※ディスクに修復不可能な傷、割れがある場合は買取不可となります。<br>※レンタルアップ商品やサンプル品は買取不可となります。</p>
      </section>

      <section id="topic3" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num3.svg" width="45" height="45" alt="" class="u-sec-title__num">ゲーム</h3>
        <p class="u-headline">ゲームソフト・機器</p>
        <p>・必須付属品・同梱物（特典）のうち欠品のある商品<br>・本体に劣化、汚れ、ヤケ、重度のスレ、傷がある商品<br>・必須付属品・同梱物（特典含む）に劣化、汚れ、ヤケ、重度のスレ、傷がある商品<br>・タバコなどの臭いがついた商品<br>・ケースに割れがある商品<br>・外箱に破れ、ヤケ、汚れ、重度の潰れのある商品<br>・内箱に破れ、ヤケ、汚れ、重度の潰れのある商品</p>
        <p>※外箱を開封する際自然にできる外箱の折れ、軽度な潰れは減額対象とはなりません。<br>※ソフトが欠品する場合は買取不可となります。</p>
        <p class="u-headline">PCゲームをお売りいただく際の注意点</p>
        <p>ライセンス認証が必要な商品は、<span class="u-text-attention">必ずライセンス解放を行ってからお売りいただきますよう</span>お願い致します。<br>ライセンス解放が行われていない商品は、買取不可となりますのであらかじめご了承ください。</p>
      </section>

      <section id="topic4" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num4.svg" width="45" height="45" alt="" class="u-sec-title__num">グッズ類</h3>
        <p class="u-headline">フィギュア</p>
        <p>・外箱の欠品した商品<br>・外箱に汚れ、染み、潰れなどがある商品<br>・外箱の透明フィルムが剥がれた商品<br>・本体にカビ、汚れ、染みなどがある商品<br>・臭いのある商品</p>
        <p>※本体（パーツ）・台座に欠品、破損がある商品は買取不可となります。<br>※外箱欠品の商品は一部買取不可となる場合がございます。</p>
        <p class="u-headline">タペストリー</p>
        <p>・汚れ、染みのある商品<br>・破れのある商品<br>・自然な巻きシワでない重度のシワがある商品<br>・臭いのある商品<br>・ポール、紐に汚損・破損のある商品</p>
        <p class="u-headline">ぬいぐるみ</p>
        <p>・汚れ、染みのある商品<br>・臭いのある商品</p>

        <div class="u-lp-btn2 kaitori__foot-btn2">
          <a href="<?php echo esc_url(home_url('purchase/faq/')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">よくあるご質問に戻る</span></a>
        </div>
      </section>

    </section>
    <ul class="link__lists -secondary">
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase')); ?>" class="link__inner">宅配買取トップ</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/kaitori-guide')); ?>" class="link__inner">宅配買取の流れ</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/packing')); ?>" class="link__inner">梱包ガイド</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/identification')); ?>" class="link__inner">身分証ガイド</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/shipping')); ?>" class="link__inner">お荷物の発送方法</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('purchase/faq')); ?>" class="link__inner">よくある質問</a></li>
      <li class="link__item"><a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="link__inner">お申し込み</a></li>
    </ul>
  </div>

</div>
<?php endwhile;?>

<?php get_footer(); ?>
