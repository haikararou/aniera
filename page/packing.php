<?php
/**
 * Template Name: 宅配買取- 梱包ガイド
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
      <h2 class="u-sec-maintitle">梱包方法</h2>
      <p>売りたい商品が決まったら、あとはダンボールに詰めて送るだけです！<br>梱包方法とポイントをご紹介します。</p>
      <section class="kaitori__container packing__prep">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num1.svg" width="45" height="45" alt="" class="u-sec-title__num">準備</h3>
        <p class="u-headline">用意するもの</p>
        <div class="packing__unit">
          <p class="packing__unit-title">ダンボール</p>
          <div class="packing__unit-inner">
            <figure class="packing__unit-thumb"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/packing/prep1.jpg" width="288" height="216" alt=""></figure>
            <div class="packing__unit-text -mt">
              <p>ダンボール1箱の最大サイズ上限</p>
              <p class="packing__unit-cardbord"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/kaitori/cardboard.png" width="187" height="165" alt=""></p>
              <p>1箱の最大サイズ<br>大きさ：160cm(縦＋横＋高さの合計)以内<br>重さ　：30kg(CD300枚程度)以内</p>
              <p>上記を超える場合には2箱以上に分けてください。<br>※軽い商品で小さな箱が複数個になる場合には、できるだけ1箱にまとめるようご協力をお願いいたします。</p>
            </div>
          </div>
        </div>
        <div class="packing__unit">
          <p class="packing__unit-title">ガムテープ、新聞紙、プチプチなどの緩衝材</p>
          <div class="packing__unit-inner">
            <figure class="packing__unit-thumb"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/packing/prep2.jpg" width="288" height="216" alt=""></figure>
            <div class="packing__unit-text">
              <p>不要な広告紙などでも緩衝材の代用となります。</p>
            </div>
          </div>
        </div>
        <div class="packing__unit">
          <p class="packing__unit-title">身分証のコピー</p>
          <div class="packing__unit-inner">
            <figure class="packing__unit-thumb"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/packing/prep3.jpg" width="288" height="288" alt=""></figure>
            <div class="packing__unit-text">
              <p>下記いずれか一部<br>・運転免許証<br>・各種健康保険証<br>・日本国パスポート<br>・年金手帳(住所記載限り)<br>・外国人登録(済)証明書<br>・住民基本台帳カード<br>・マイナンバーカード表面（通知カードは無効）<br>※現住所記載のものに限ります。<br>※18歳未満の方は上記書類に加え保護者同意書が必要となります。</p>
            </div>
          </div>
        </div>
        <p class="u-sec-em">こんな時は？</p>
        <dl class="dropdown__list">
          <dt class="u-dropdown__title">ダンボールが手元にない場合は？</dt>
          <dd class="u-dropdown__conts">1.梱包ダンボールプレゼントサービスを利用する<br>お送りいただく商品が、当店の買取対象品であればご利用いただけます。<br>送料などの費用も、もちろん弊社が全て負担いたします!!<br>梱包でお困りになられていましたら、こちらのサービスをぜひご利用ください！<br><br>お送りするダンボールに関しましては、買取フォームより「資材を希望する」にチェックをいれて、商品サイズにあったダンボールを選択してください。<br><br>2.スーパー、薬局、ホームセンターで手に入れるダンボールはスーパーや薬局で、不要になっているものを無料で貰えることができます。また、有料になってしまいますが、ホームセンターなどで200円ほどで購入することも出来ます。<br><br>※送る商品が傷ついたり、汚れないようにするために、できるだけきれいなものや、匂いのないもの、頑丈なものをお選びいただくのをオススメします。</dd>
          <dt class="u-dropdown__title">紙袋などでもいい？</dt>
          <dd class="u-dropdown__conts">紙袋でも問題はございませんが、商品が傷つく可能性が非常に高いので、出来る限りダンボールにしていただくことをオススメします。<br>紙袋ご使用の際は、輸送破損が無いように梱包をお願いします。<br>またCDやブルーレイ/DVDなど小さく商品点数が少ない場合(数点等)には、クッション材付きの封筒などをご利用いただいても問題ございません。</dd>
        </dl>
      </section>
      <section class="kaitori__container packing__method">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num2.svg" width="45" height="45" alt="" class="u-sec-title__num">梱包方法</h3>
        <p>梱包するときのコツは、余分な隙間を作らないことです。<br>できるだけ売りたい商品の量にあった大きさのダンボールを選び、新聞紙などの緩衝材で隙間をうめると、輸送時の破損を防げます。</p>
        <p>それでは早速、CD、DVD、ゲームをダンボールに詰めてみましょう。</p>
        <Ul class="u-step">
          <li class="u-step__list -num1">
            <p class="u-step__title">まずは詰める</p>
            <div class="u-step__flex">
              <div class="u-step__text">
                <p>できるだけ隙間なく詰めようとしても、ダンボールのサイズの関係上どうしても隙間が生まれてしまう場合がございます。<br>隙間があると、輸送時に中身が動いてしまうので、商品が壊れて買取不可になってしまうこともあるんです。<br>そんなキズがつきやすい商品も、一工夫で輸送時の破損を防げます。</p>
              </div>
              <div class="u-step__thumb"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/packing/pac1.jpg" width="288" height="216" alt=""></div>
            </div>
          </li>
          <li class="u-step__list -num2">
            <p class="u-step__title">心配な商品は補強する</p>
            <div class="u-step__flex">
              <div class="u-step__text">
                <p>商品発送中に稀にキズがついたり割れてしまうことがあります。キズや割れは、査定時には減額対象になってしまうので、補強するのがオススメです。<br>新聞紙、プチプチなどで一周巻いてひとまとめにするだけで、キズになることも簡単に割れる可能性も大きく減少します。<br>この一手間で、減額対象となってしまうキズや割れを防ぐことができます。</p>
              </div>
              <div class="u-step__thumb">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/packing/pac2.jpg" width="288" height="288" alt="">
              </div>
            </div>
          </li>
          <li class="u-step__list -num3">
            <p class="u-step__title">隙間を埋める</p>
            <div class="u-step__flex">
              <div class="u-step__text">
                <p>緩衝材を使って最初に詰めたダンボールの隙間を埋めていきます。<br>プチプチやエアークッションなどは、わざわざホームセンターで買ってくる必要はありません。<br>ご自宅にある不要な新聞紙や広告、古紙などを丸めるだけでも、充分に商品のキズや割れを防いでくれます。<br>通販で買った時についてくる緩衝材を再利用するのもいいですね。</p>
                <p>今回はちぎった新聞紙を利用して、隙間を埋めてみました。</p>
              </div>
              <div class="u-step__thumb">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/packing/pac3.jpg" width="288" height="216" alt="">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/packing/pac4.jpg" width="288" height="216" alt="">
              </div>
            </div>
            <div class="u-step__flex">
              <div class="u-step__text">
                <p>ダンボールや送り状に【上積（下積）厳禁】【割れ物注意】など記入して頂くと、より安心です。</p>
              </div>
              <div class="u-step__thumb">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/packing/pac5.jpg" width="288" height="216" alt="">
              </div>
            </div>
          </li>
          <li class="u-step__list -num4">
            <p class="u-step__title">最後に</p>
            <div class="u-step__flex">
              <div class="u-step__text">
                <p>最後に、忘れずに身分証を入れてください。</p>
                <p>ガムテープでしっかりダンボールに封をしたら完成です！<br>※ダンボールが複数になる場合は、身分証を入れたダンボールに【身分証在中】とご記入をお願い致します。</p>
              </div>
              <div class="u-step__thumb">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/packing/pac6.jpg" width="288" height="216" alt="">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/packing/pac7.jpg" width="288" height="216" alt="">
              </div>
            </div>
          </li>
        </Ul>
      </section>

      <div class="kaitori__container kaitori__foot">
        <p>あとは、集荷がくるのを待ちましょう！</p>
        <div class="u-lp-btn2 kaitori__foot-btn2">
          <a href="<?php echo esc_url(home_url('purchase/shipping')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">お荷物の発送方法</span></a>
        </div>
        <p>ご不明点などございましたら、<br class="u-pc-none">お気軽にお問い合せください！</p>
        <div class="u-lp-btn2 kaitori__foot-btn2">
          <a href="<?php echo esc_url(home_url('purchase/faq')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">よくあるご質問</span></a>
        </div>
        <div class="u-lp-btn2 kaitori__foot-btn2">
          <a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">お問い合わせはこちら</span></a>
        </div>
      </div>
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
