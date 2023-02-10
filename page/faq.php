<?php
/**
 * Template Name: 宅配買取-よくある質問
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
      <h2 class="u-sec-maintitle">よくある質問</h2>
      <section class="kaitori__container">
        <div class="faq__contents">
          <p>目次</p>
          <ol class="faq__contents-lists">
            <li class="faq__contents-item"><a href="#topic1" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num1.svg" width="20" height="20" alt="" class="faq__contents-num">特に多く寄せられる質問</a></li>
            <li class="faq__contents-item"><a href="#topic2" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num2.svg" width="20" height="20" alt="" class="faq__contents-num">買取商品について</a></li>
            <li class="faq__contents-item"><a href="#topic3" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num3.svg" width="20" height="20" alt="" class="faq__contents-num">買取のご依頼について</a></li>
            <li class="faq__contents-item"><a href="#topic4" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num4.svg" width="20" height="20" alt="" class="faq__contents-num">梱包について</a></li>
            <li class="faq__contents-item"><a href="#topic5" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num5.svg" width="20" height="20" alt="" class="faq__contents-num">集荷・発送について</a></li>
            <li class="faq__contents-item"><a href="#topic6" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num6.svg" width="20" height="20" alt="" class="faq__contents-num">査定について</a></li>
            <li class="faq__contents-item"><a href="#topic7" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num7.svg" width="20" height="20" alt="" class="faq__contents-num">入金について</a></li>
            <li class="faq__contents-item"><a href="#topic8" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num8.svg" width="20" height="20" alt="" class="faq__contents-num">必要書類について</a></li>
            <li class="faq__contents-item"><a href="#topic9" class="faq__contents-link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num9.svg" width="20" height="20" alt="" class="faq__contents-num">その他、お問い合わせ</a></li>
          </ol>
        </div>

      </section>

      <section id="topic1" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num1.svg" width="45" height="45" alt="" class="u-sec-title__num">特に多く寄せられる質問</h3>
        <dl class="dropdown__list faq__dropdown -mb">
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">申し込み完了の自動返信が届きません。</span></dt>
          <dd class="u-dropdown__conts">
            <p>迷惑メールに設定されている可能性がございます。まずは迷惑メールフォルダをご確認ください。届いていない場合には、以下の原因が考えられます。<br>・ご記入頂いたメールアドレスが間違っている<br>・フィルター設定でPCメールの受信を拒否している<br>・ドメイン指定受信を設定している</p>
            <p>上記いずれにも該当せず、当店からの自動返信メールが届いていない場合には、大変お手数ではございますが、<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせフォーム</a>または当店の運営元「株式会社 アニエラ」まで直接ご連絡下さい。</p>
            <p>※ご連絡いただく際は、下記を必ずご確認ください。<br>・迷惑メールフィルター設定が強になっている場合、標準に設定し直してください。<br>・迷惑メールブロック設定をしている場合は受信許可リストに【@aniera.jp】を登録してください。<br>・ドメイン指定受信を設定している場合は、設定を解除するか【aniera.jp】をドメイン登録してください。</p>
            <p>■アニエラ カスタマーセンター：support@aniera.jp</p>
            <p>yahooやezwebのメールアドレスの方より、自動応答メールが届かないとの声を多く頂戴しております。<br>おそらくドメイン元の設定により自動メールがはじかれてしまっているため、お手数ですがお問い合わせフォームよりご連絡ください。再送させていただきます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">身分証を入れ忘れてしまった。</span></dt>
          <dd class="u-dropdown__conts">
            <p>スマホカメラなどで身分証全体が映るよう撮影しメールに添付してお送り下さい。<br>もしくは、身分証のコピーを当店まで郵送して下さい。郵送の場合、送料はお客様ご負担となります。<br>■アニエラ カスタマーセンター：support@aniera.jp</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">集荷日を変更したい。</span></dt>
          <dd class="u-dropdown__conts">
            <p><a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせフォーム</a>より、集荷日前営業日の17:00までにご連絡頂ければ変更いたします。<br>※お問い合わせは常時受け付けておりますが、集荷日時の変更は営業時間内のご対応となります。</p>
            <p>営業時間<br>営業時間：平日9時 ～ 17時<br>定休日　：土日祝日・年末年始・臨時休業あり</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">本当に手数料無料なのですか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>送料・振込手数料は商品1点から全て無料（当店負担）です。<br>買取依頼時に「査定後、金額を確認して承認」をお選びいただいた場合で、買取不成立による商品の返送料のみ、お客様ご負担となります。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">買取商品の一部のみを返却してもらうということは可能ですか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>すべて買取かすべて返却のいずれかになります。一部商品の返却は出来かねますので、あらかじめご了承下さい。<br>ただし、買取不可商品に関しましては、お客様のご希望があれば、送料お客様ご負担のうえ返送を行っております。<br>※買取依頼時に「すぐにお支払い(自動承認)」をご選択された場合は、ご返却できません。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">自動承認とは何ですか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>お申し込み時に予め買取を承諾して頂くことにより、査定終了後に査定金額の変動に関わりなく送金作業に移ります。 査定結果の通知、承諾の流れが省略されますので、よりスピーディに入金が行われます。<br>自動承諾でお申込みの場合、荷物到着後のキャンセル、返送はできません。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">買取不可となった商品は引き取って頂けますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>当店の<a href="<?php echo esc_url(home_url('purchase#kaitori-list')); ?>" class="u-link">査定基準</a>に満たなかった商品は買取不可となります。商品の返送をご希望されない場合には、当店が責任を持って処分させて頂きます。ただしあからさまな査定基準に満たしていない商品（重度のカビ・汚れのひどい商品など）のみが送られてきた場合は、着払いにて返送させていただく場合がございます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">事前査定を利用したいのですがJANコードがわかりません。</span></dt>
          <dd class="u-dropdown__conts">
            <p><a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせフォーム</a>から事前査定希望の旨と商品名、商品情報をお送りいただければ査定を行わせていただきます。<br>ただ数量が多い場合はお時間をいただく場合がございます。予めご了承ください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">お荷物の到着メールが届きません。</span></dt>
          <dd class="u-dropdown__conts">
            <p>大変申し訳ございませんが、当店はお荷物の到着メールの送信を行っておりません。<br>お荷物の配送状況を確認したい場合は、お手数ではございますが、集荷時の送り状控えに記載されているお問い合わせ番号から追跡をお願いいたします。</p>
          </dd>
        </dl>
        <p>ご不明な点が解決しない場合は、お気軽に<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせ</a>ください。</p>
        <p class="faq__pagetop"><a href="#" class="faq__pagetop-icon">ページのトップへ</a></p>
      </section>

      <section id="topic2" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num2.svg" width="45" height="45" alt="" class="u-sec-title__num">買取商品について</h3>
        <dl class="dropdown__list faq__dropdown -mb">
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">売りたいものが買取可能な商品かどうか知りたいです。</span></dt>
          <dd class="u-dropdown__conts">
            <p>お手数ではございますが、一度<a href="<?php echo esc_url(home_url('purchase#kaitori-list')); ?>" class="u-link">お売りいただけるもの</a>一覧をご確認ください。<br>お売りいただけるもの一覧の記載が曖昧で、ご不明な点がある場合は、お気軽に<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせフォーム</a>よりご連絡下さい。<br>アニメ関連商品なら幅広く買取しておりますので、記載のない商品でもお売りいただける場合がございます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">商品がどのような状態だと減額されるんですか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>当店の査定減額基準については、こちらのページをご参考ください→<a href="<?php echo esc_url(home_url('purchase/reduced-list')); ?>" class="u-link">減額基準一覧</a></p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">同一タイトルの商品は買い取っていただけるのでしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>同一タイトル商品の買取も可能でございます。基本的に3点までは同額の買取となります。4点目以降に関しましては買取不可となります。予めご了承ください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">特典、イベント限定グッズなども買い取って頂けるのでしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>買取可能でございます。商品によっては買取不可の商品もございますが、過去多数の特典・限定商品を高価買取させていただいております。<br>ご不安な場合は、お気軽に<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせフォーム</a>よりご連絡下さい。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">ライブ・イベントの物販品などは買取してもらえますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>買取可能でございます。ただし種類などにより買取可・不可がございます。お手数ですが、詳細をご記入の上、<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問合せフォーム</a>よりご相談ください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">アニメ関連商品以外も買取してもらえますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>アニメ関連以外も買取可能ですが、得意ジャンルではありませんので、買取金額にこだわる場合には専門店にご依頼した方がよろしいかと存じます</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">未開封品は買取してもらえますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>■未開封商品の買取について</p>
            <p>・新品・未開封商品の買取につきましては、購入品・盗品の判別を致しかねますため一般的に中古買取店では買取不可となる場合がございます。<br>・当店では、取り扱いジャンルの性質上、未開封の商品も一部買取可能でございます。<br>・ただし、未開封の同一商品が複数大量にある場合に限りましては、古物営業法に基づき買取をお断りさせていただく場合がございますのでご了承願います。<br>・開封・未開封に関わらず同一商品の買取は3点まで（4点目以降は買取不可）とさせていただいております。<br>・また、未開封商品であっても中古美品としてのお取り扱いとなりますため、査定時に開封させていただく場合がございます。<br>・査定価格が中古美品より高額になるということはなく、未開封商品であっても買取不可となる商品もございます。<br>・一部、フィギュアやPCゲームソフトなどのジャンルはこの限りではない場合がございます。<br>上記をご了承いただきましたうえでお申込みいただきますようお願いいたします。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">ジャンク品でも買取してもらえますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>ジャンク品の買取は行っておりません。再生不可能なCDやDVDは買取不可となります。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">ガチャポングッズ・ゲームセンターなどのプライズや景品などは買取してもらえますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>大変申し訳ございません。ガチャポン、ゲームセンターなどのプライズや景品につきましては、当店では買取しておりません。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">フィギュア等の商品は買って頂けるのでしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>プライズ商品以外でしたら買取可能でございます。<br>その他、商品の買取可否につきましては、<a href="<?php echo esc_url(home_url('purchase#kaitori-list')); ?>" class="u-link">お売りいただけるもの一覧</a>をご参照下さい。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">事前査定で提示された金額は、本査定時では変わることはあるのでしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>事前査定のご提示額は、完美品を想定した金額を提示しております。付属品の欠品や、キズなどの減額対象があった場合は、査定額に変動がある場合がございます。<br>なお、商品状態が完美品の場合は、事前査定申し込みから本査定お申し込みまで<span class="u-dropdown__text-bold">一週間以内</span>であれば、事前査定時の価格で買取をさせていただきます。</p>
          </dd>
        </dl>
        <p>ご不明な点が解決しない場合は、お気軽に<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせ</a>ください。</p>
        <p class="faq__pagetop"><a href="#" class="faq__pagetop-icon">ページのトップへ</a></p>
      </section>

      <section id="topic3" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num3.svg" width="45" height="45" alt="" class="u-sec-title__num">買取のご依頼について</h3>
        <dl class="dropdown__list faq__dropdown -mb">
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">宅配買取を申し込みたいのですが？</span></dt>
          <dd class="u-dropdown__conts">
            <p><a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">こちら</a>からお申し込みいただけます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">高校生ですが、買取可能ですか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>18歳未満のお客様には保護者同意書のご記入とご同封をお願いしております。親御様の了解が取れない場合には買取することが出来ません。<br>下記の同意書を印刷し、保護者の方がご記入頂いたものを、身分証と同封してください。</p>
            <p class="u-dl"><a href="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/agreement-form.pdf" class="u-dl__link"><span class="u-dl__icon">保護者同意書ダウンロード</span></a></p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">商品の点数は正確に記入しないといけませんか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>おおよそで結構です。だいたいの点数をご記入ください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">申込内容を間違えてしまいました。変更はできますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>申込完了後の自動返信メールをご確認いただき、氏名・電話番号をご記入の上、変更箇所を<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせフォーム</a>よりご連絡ください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">申し込みのキャンセルは出来ますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>集荷日以内であれば、<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせフォーム</a>よりその旨をご連絡を頂ければキャンセルいたします。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">全国どこでも集荷できますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>もちろん、日本国内でしたら集荷可能です。<br>基本的には佐川急便、沖縄・離島にお住まいの方は郵便局より集荷となります。<br>また、大型(10箱以上)となる場合はヤマト運輸より手配させていただきます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">乙女系の品物も送りたいのですが、ブラックローズ宛と分けて梱包したほうが良いでしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>姉妹サイトの査定も同じ事務所で行っておりますので、ご一緒にして頂いて構いません。それぞれの査定スタッフが得意ジャンルの査定に携わっておりますので、ご安心ください。1点1点丁寧に査定させて頂きます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">タペストリーや抱き枕カバーも送りたいのですが、アニポス宛と分けて梱包したほうが良いでしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>姉妹サイトの査定も同じ事務所で行っておりますので、ご一緒にして頂いて構いません。それぞれの査定スタッフが得意ジャンルの査定に携わっておりますので、ご安心ください。1点1点丁寧に査定させて頂きます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">ガンプラやプラモデルも送りたいのですが、ホワイトファング宛と分けて梱包したほうが良いでしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>姉妹サイトの査定も同じ事務所で行っておりますので、ご一緒にして頂いて構いません。それぞれの査定スタッフが得意ジャンルの査定に携わっておりますので、ご安心ください。1点1点丁寧に査定させて頂きます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">2.5次元系の商品も送りたいのですが、セカンドステージ宛と分けて梱包したほうが良いでしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>姉妹サイトの査定も同じ事務所で行っておりますので、ご一緒にして頂いて構いません。それぞれの査定スタッフが得意ジャンルの査定に携わっておりますので、ご安心ください。1点1点丁寧に査定させて頂きます。</p>
          </dd>
        </dl>
        <p>ご不明な点が解決しない場合は、お気軽に<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせ</a>ください。</p>
        <p class="faq__pagetop"><a href="#" class="faq__pagetop-icon">ページのトップへ</a></p>
      </section>

      <section id="topic4" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num4.svg" width="45" height="45" alt="" class="u-sec-title__num">梱包について</h3>
        <dl class="dropdown__list faq__dropdown -mb">
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">梱包の仕方がよくわからないのですが</span></dt>
          <dd class="u-dropdown__conts">
            <p>適度なダンボールに商品を詰めて頂き、ガムテープなどで厳重に蓋をしてください。<br>輸送時の破損防止のため、隙間がある場合は新聞紙や広告紙、緩衝材などのクッション材を必ず入れてください。到着時に破損していた場合には査定額が落ちる場合もございます。当店では責任が取れませんのであらかじめご了承ください。</p>
            <p>参考ページ：<a href="<?php echo esc_url(home_url('purchase/packing/')); ?>" class="u-link">梱包方法</a></p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">ダンボールのサイズに制限はありますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>3辺(縦+横+高さ)の合計160cm以内、30kg以内で収まるようにお願いいたいます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">ダンボールが複数になる場合、身分証はそれぞれに入れる必要がありますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>いずれか一つのダンボールにご同封頂き、封入したダンボールに「書類在中」と明記してください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">商品以外に同封するものはありますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>身分証のコピーを必ずご同封ください。また、18歳未満の方は当店の買取同意書をご自宅で印刷し、保護者の方にご記入して頂き、必ずご同封ください。<br>※身分証を買取フォームよりアップロードする場合は、紙のコピーは必要ありません。</p>
            <p class="u-dl"><a href="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/agreement-form.pdf" class="u-dl__link"><span class="u-dl__icon">保護者同意書ダウンロード</span></a></p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">ダンボールでないといけませんか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>CDやブルーレイ/DVDなどで商品点数が少ない場合には、クッション材付きの封筒などをご利用いただいても問題ございません。ただし、輸送時の破損に関しましては責任が取れませんので、必ず破損防止梱包をお願いします。<br>輸送時の破損が心配な方はダンボールをご使用いただくと安心です。</p>
          </dd>
        </dl>
        <p>ご不明な点が解決しない場合は、お気軽に<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせ</a>ください。</p>
        <p class="faq__pagetop"><a href="#" class="faq__pagetop-icon">ページのトップへ</a></p>
      </section>

      <section id="topic5" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num5.svg" width="45" height="45" alt="" class="u-sec-title__num">集荷・発送について</h3>
        <p>参考ページ：<a href="<?php echo esc_url(home_url('purchase/shipping/')); ?>" class="u-link">お荷物の発送方法</a></p>
        <dl class="dropdown__list faq__dropdown -mb">
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">発送はどうすればいいですか？自宅まで来て頂けるのでしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>宅配業者がご自宅まで集荷に伺います。事前に商品をダンボールに梱包して頂き、当日ドライバーに商品をお渡しください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">荷物の送り状はどうすればいいですか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>集荷時にドライバーが送り状をお持ちします。すでに印字された送り状をお持ちいたしますので、送り状の記入も必要ありません。</p>
            <p>参考ページ：<a href="<?php echo esc_url(home_url('purchase/shipping/')); ?>" class="u-link">お荷物の発送方法</a></p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">自分でコンビニなどから送りたいのですが</span></dt>
          <dd class="u-dropdown__conts">
            <p>可能でございます。ただし、当店ではご自宅に集荷に伺うことでお客様の住所確認とさせて頂いております。<br>お客様ご自身でお送り頂く場合には、査定終了後、当店より簡易書留の送付をさせて頂きますので、予め当店にご連絡ください。</p>
            <p>詳しくはこちらをご参照ください→<a href="<?php echo esc_url(home_url('purchase/shipping/')); ?>" class="u-link">お荷物の発送方法</a></p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">送料はかかりますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>1点からでも送料無料でご利用頂けます。<br>買取依頼時に「査定後、金額を確認して承認」をお選びいただいた場合で、買取不成立による商品の返送料のみ、お客様ご負担となります。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">○時迄/以降に来てほしい。</span></dt>
          <dd class="u-dropdown__conts">
            <p>誠に恐れ入りますが、詳細な集荷時間は指定できません。<br>時間帯内での集荷となります。お時間に余裕をもってご指定ください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">希望した集荷日時に集荷が来ません。</span></dt>
          <dd class="u-dropdown__conts">
            <p>宅配業者(佐川急便)委託のため、指定日時に集荷が来ない場合は大変お手数ではございますが、下記へ直接ご連絡ください。<br>お問い合わせ先： 佐川急便松本営業所<br>電話番号：0570-01-0337</p>
            <p>また、都合がつかない場合は大変お手数ではございますが、当店の<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせフォーム</a>よりご連絡をお願い致します。<br>再集荷の依頼をさせて頂きます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">身分証記載の住所と現住所が違うのですが、集荷は可能でしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>身分証明書に加え、下記本人確認書類のご提出によりお取引可能です。<br>・住民票<br>・印鑑登録証明書<br>・現住所記載の公共料金等領収証(電気、ガス、水道、電話)<br>・現住所記載の郵便物(消印または「料金後納」「料金別納」の記載があるもの)<br>※全て交付日から3ヶ月以内のものに限る。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">自宅以外に集荷にきてほしい。</span></dt>
          <dd class="u-dropdown__conts">
            <p>お申し込み時、備考欄に集荷希望先の住所をご記入ください。<br>査定完了後、身分証記載の住所宛てにご本人様確認郵便を当店より送付しますので、お受け取りをもってご本人様確認完了とさせていただきます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">発送の仕方が分からないのですが…。</span></dt>
          <dd class="u-dropdown__conts">
            <p>お申し込み時にご入力いただいた指定日時に配達員が送り状を持参してご自宅にお伺いします。すでに印字された送り状をお持ちいたしますので、送り状の記入の必要はございません。</p>
          </dd>
        </dl>
        <p>ご不明な点が解決しない場合は、お気軽に<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせ</a>ください。</p>
        <p class="faq__pagetop"><a href="#" class="faq__pagetop-icon">ページのトップへ</a></p>
      </section>

      <section id="topic6" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num6.svg" width="45" height="45" alt="" class="u-sec-title__num">査定について</h3>
        <dl class="dropdown__list faq__dropdown -mb">
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">事前におおまかな値段が知りたいです。事前査定は可能ですか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>もちろん可能でございます。事前に商品のJANコード（バーコード番号）の情報を<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせフォーム</a>からご連絡頂ければ、当店の査定スタッフが概算の査定額をご連絡致します。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">事前査定の金額は本当に参考になるのでしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>事前査定は美品以上の状態の商品を基準としております。<br>商品の状態が良好であれば、もちろん事前査定の金額で買取をさせていただきます！</p>
            <p>また当店の減額基準につきましては、こちらのページをご参考ください。→<a href="<?php echo esc_url(home_url('purchase/reduced-list')); ?>" class="u-link">【減額基準一覧】</a></p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">どのくらいで査定が完了しますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p><span class="u-dropdown__text-bold">【査定後、すぐにお支払い（自動承認）】を選んだ場合</span><br>査定日数は商品数・商品の到着状況などにより変動しますが、通常はお荷物のご到着から3営業日以内には査定のご報告をさせていただいております。優先査定、最速でのご入金となります。</p>
            <p><span class="u-dropdown__text-bold">【査定後、金額を確認して承認】を選んだ場合</span><br>査定日数は商品数・商品の到着状況などにより変動しますが、査定完了ご連絡までに最長で10営業日程お時間がかかる場合がございます。</p>
            <p>※査定が混み合う時期やお品物が大量の場合などはお振込までに多少時間がかかってしまう可能性もございます。お急ぎのお客様は事前にご相談下さい。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">査定に満足出来なかった場合には、返送してもらえますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>自動承諾でお申込みの場合、荷物到着後のキャンセル、返送はできません。【金額を確認してから承認】をお選びの方のみ査定結果にご満足頂けなかった場合の返送は可能となっております。ただし、返送の際の送料はお客様にご負担頂いております。あらかじめご了承下さい。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">買取不可の商品は返送されてくるのでしょうか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>買取不可の商品は責任をもって当店の方で処分をさせていただきます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">明細はありますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>基本的に合計金額のみのお知らせとなります。<br>買取明細をご希望の方は申込時、備考欄に『明細希望』とご記入ください。<br>数が多い場合のまとめ買取対象商品内訳については省略させていただくことがございます。予めご了承ください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">査定結果の連絡がいつまでたっても来ません。</span></dt>
          <dd class="u-dropdown__conts">
            <p><span class="u-dropdown__text-bold">査定の混み合い状況により、ご報告が遅れる場合がございます。</span><br>査定をお急ぎの場合は、一度<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせ</a>いただきますようお願い申し上げます。</p>
          </dd>
        </dl>
        <p>ご不明な点が解決しない場合は、お気軽に<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせ</a>ください。</p>
        <p class="faq__pagetop"><a href="#" class="faq__pagetop-icon">ページのトップへ</a></p>
      </section>

      <section id="topic7" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num7.svg" width="45" height="45" alt="" class="u-sec-title__num">入金について</h3>
        <dl class="dropdown__list faq__dropdown -mb">
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">どんな支払い方法がありますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>買取金額のお支払いは、お申込いただいたご本人様名義の銀行口座（ネットバンク・ゆうちょ含む）への振込みのみとさせていただいております。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">銀行振込以外の方法で代金を受け取ることは可能ですか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>申し訳ございません。当店では現金書留での送金は行っておりません。<br>必ずご本人様名義の銀行口座をご指定いただきますようお願い致します。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">振込先を本人以外の口座に指定できますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>お申込いただいたご本人様名義の銀行口座（ゆうちょ・ネットバンク含む）への振込みのみとさせていただいております。<br>口座名義が身分証と一致しない場合には買取ができませんのであらかじめご了承ください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">結婚して口座名義が旧姓のままですが買取可能ですか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>旧姓口座名義につきましては、原則、名義変更後のお申込をお願いします。<br>やむをえない事情で名義変更が困難な場合などは、お手数ですが<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせフォーム</a>よりご相談ください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">入金には大体どのくらいの時間がかかりますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>査定の承認を頂いてから翌日～3営業日程度でお振込み致します。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">入金を出来るだけ早くしていただきたいのですが。</span></dt>
          <dd class="u-dropdown__conts">
            <p>ご依頼の商品数や、買取のご依頼の混雑状況によっては対応出来ない場合もございますが、予めご相談いただければできるだけ対応いたします。お気軽にご用命ください。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">査定完了から入金までどのくらいかかりますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>査定はお荷物が集荷センターに届いてから、原則3日以内には完了いたします。(自動承認の場合)<br>要承認をご選択のお客様は最大10営業日程度で査定結果ご連絡となります。<br>また、お支払いに関しては以下の通りです。<br>【査定後すぐにお支払い（自動承認）】<br>　査定完了後3営業日以内<br>【査定後、金額を確認して承認（要承認）】<br>　ご承認後3営業日以内<br><br>お急ぎの場合は、できるだけご要望にお答えしますのでご相談ください。</p>
          </dd>

        </dl>
        <p>ご不明な点が解決しない場合は、お気軽に<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせ</a>ください。</p>
        <p class="faq__pagetop"><a href="#" class="faq__pagetop-icon">ページのトップへ</a></p>
      </section>

      <section id="topic8" class="kaitori__container">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num8.svg" width="45" height="45" alt="" class="u-sec-title__num">必要書類について</h3>
        <p>参考ページ：<a href="<?php echo esc_url(home_url('purchase/identification/')); ?>" class="u-link">本人確認書類について</a></p>
        <dl class="dropdown__list faq__dropdown -mb">
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">身分証明書には何が使えますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>以下、現住所記載のある身分証明書がご利用頂けます。<br>(1) 運転免許証<br>(2) 各種健康保険証(健康保険、国民健康保険、共済組合、船員保険)<br>(3) 日本国パスポート<br>(4) 年金手帳<br>(5) 外国人登録(済)証明書<br>(6) 住民基本台帳カード</p>
            <p>※学生証、社員証等上記以外の物はご利用頂けません。<br>※法令に基づきご本人を証明・確認するものですので、顔写真や項目を塗りつぶすなどの加工はなされませんよう、お願い致します。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">身分証を提示するのはなぜですか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>古物営業法に基づき、法律でご提示が義務付けられております。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">身分証記載の住所と現住所が違うのですが買取可能ですか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>身分証明書に加え、下記本人確認書類のご提出によりお取引可能です。<br>・住民票<br>・印鑑登録証明書<br>・現住所記載の公共料金等領収証(電気、ガス、水道、電話)<br>・現住所記載の郵便物(消印または「料金後納」「料金別納」の記載があるもの)<br>※全て交付日から3ヶ月以内のものに限る。</p>
            <p>なお、振込口座は住民票に記載の本人名義口座に限ります。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">苗字が変わったのですが身分証の名義を変更していません。</span></dt>
          <dd class="u-dropdown__conts">
            <p>身分証明書に加え、下記本人確認書類のご提出が必要になります。<br>・戸籍抄本(謄本)の写し<br>※交付日から3ヶ月以内のものに限る。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">コピー機がなくコピーできません。</span></dt>
          <dd class="u-dropdown__conts">
            <p>スマホカメラなどで身分証全体が写るように撮影し、買取フォームより画像をアップロードしてください。</p>
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
        <p>ご不明な点が解決しない場合は、お気軽に<a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-link">お問い合わせ</a>ください。</p>
        <p class="faq__pagetop"><a href="#" class="faq__pagetop-icon">ページのトップへ</a></p>
      </section>

      <section id="topic9" class="kaitori__container">
        <h3 class="u-sec-title">その他、お問い合わせ</h3>
        <p>お問い合わせフォームより24時間365日、ご依頼、お問い合わせを受け付けております。<br>何かご不明点などございましたら、お気軽にお問い合わせ下さい。</p>
        <p>受付時間：平日9:00～17:00<br>（休業日：土日祝日、年末年始、臨時休業あり）</p>
        <div class="u-lp-btn2 kaitori__foot-btn2">
          <a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">お問い合わせはこちら</span></a>
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
