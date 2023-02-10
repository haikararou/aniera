<?php
/**
 * Template Name: 宅配買取- 荷物発送のながれ
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
      <h2 class="u-sec-maintitle">荷物発送のながれ</h2>
      <p>売りたい商品が決まったら、あとはダンボールに詰めて送るだけです！<br>梱包方法とポイントをご紹介します。</p>

      <section class="kaitori__container">
        <h3 class="u-sec-title">宅配買取の発送方法</h3>
        <Ul class="u-step">
          <li class="u-step__list -num1">
            <p class="u-step__title">まずは梱包</p>
            <div class="u-step__box u-step__flex">
              <div class="u-step__text">
                <p>荷物をダンボールに詰めましょう。<br>隙間に緩衝材やくしゅくしゅにした新聞紙(不要になった広告紙など)をいれ、隙間をなくしてあげると運送中のキズや破損をする可能性が少なくなります！</p>
                <div class="u-lp-btn2 u-step__btn2">
                  <a href="<?php echo esc_url(home_url('purchase/packing')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">梱包方法</span></a>
                </div>
                <p>※現住所記載の身分証明書が必要です※<br>お荷物には、現住所（集荷先）記載の身分証コピーを必ず同梱してください。<br>複数個口の場合も1部あれば大丈夫です。</p>
                <div class="u-lp-btn2 u-step__btn2">
                  <a href="<?php echo esc_url(home_url('purchase/identification')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">身分証について</span></a>
                </div>
              </div>
              <div class="u-step__thumb">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/shipping/ship1.jpg" width="288" height="194" alt="">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/shipping/ship2.jpg" width="288" height="194" alt="">
              </div>
            </div>
            <div class="u-step__box">
              <p>こんな時はどうすれば？</p>
              <dl class="dropdown__list faq__dropdown">
                <dt class="u-dropdown__title"><span class="faq__dropdown-icon">ダンボールがお手元にない場合</span></dt>
                <dd class="u-dropdown__conts">
                  <p>1.梱包ダンボールプレゼントサービスを利用する<br>お送りいただく商品が、当店の買取対象品であればご利用いただけます。<br>送料などの費用も、もちろん弊社が全て負担いたします!!<br>梱包でお困りになられていましたら、こちらのサービスをぜひご利用ください！<br><br>お送りするダンボールの詳細は<a href="<?php echo esc_url(home_url('purchase/packing/')); ?>" class="u-link">こちら</a>をご確認ください。<br><br>2.スーパー、薬局、ホームセンターで手に入れるダンボールはスーパーや薬局で、不要になっているものを無料で貰えることができます。また、有料になってしまいますが、ホームセンターなどで200円ほどで購入することも出来ます。<br><br>※送る商品が傷ついたり、汚れないようにするために、できるだけきれいなものや、匂いのないもの、頑丈なものをお選びいただくのをオススメします。</p>
                </dd>
                <dt class="u-dropdown__title"><span class="faq__dropdown-icon">身分証と集荷先住所が違うのですが。</span></dt>
                <dd class="u-dropdown__conts">
                  <p>身分証のコピーの他に、必要書類を一緒におくっていただくことでお取引可能です。<br>・住民票(コピー不可)<br>・印鑑登録証明書<br>・現住所記載の公共料金等領収証(電気、ガス、水道、電話)<br>・現住所記載の郵便物(消印または「料金後納」「料金別納」の記載があるもの)<br>※全て交付日から3ヶ月以内のものに限る。<br><br>そのほか詳しい本人確認書類についてのページよりご確認ください。</p>
                  <div class="u-lp-btn2 u-step__btn2">
                    <a href="<?php echo esc_url(home_url('purchase/identification')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">本人確認書類について</span></a>
                  </div>
                </dd>
              </dl>
            </div>
          </li>
          <li class="u-step__list -num2">
            <p class="u-step__title">ご自宅まで集荷に伺います</p>
            <div class="u-step__box u-step__flex">
              <div class="u-step__text">
                <p>申込時にご希望をしていただいた日時に、宅配業者(佐川急便)のドライバーが送り状を持ってご自宅まで集荷に伺います。</p>
              </div>
              <div class="u-step__thumb">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/shipping/ship3.jpg" width="280" height="117" alt="">
              </div>
            </div>
            <div class="u-step__box">
              <div class="u-unit -secondary kaitori__unit -mb">
                <p class="u-unit__bold">お読みください</p>
                <p>※集荷はご希望時間帯内でのお伺いとなりますが、運送状況・交通状況などにより遅れなどが生じる際には佐川急便の担当ドライバーより直接ご連絡させていただく場合がございます。<br>また、詳細な時間指定（例：9時までに来て欲しい）などはご対応いたしかねます。</p>
                <p>※宅配業者委託のため、指定日時に集荷が来ない場合は大変お手数ではございますが、下記へ直接ご連絡ください。<br>【お問い合わせ先】<br>佐川急便松本営業所（0570-01-0337）</p>
              </div>
              <p>ご自身で発送をされたい場合<br>ご自身で郵便局・佐川事業所・コンビニへ持ち込みをご希望の場合は必ずお読みください。</p>
              <div class="u-lp-btn2 u-step__btn2">
                <a href="#self-shipping" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">自己発送の方法</span></a>
              </div>
            </div>
          </li>
          <li class="u-step__list -num3">
            <p class="u-step__title">ご希望日時に受け渡し</p>
            <div class="u-step__box u-step__flex">
              <div class="u-step__text">
                <p>梱包したお品物をドライバーに引き渡して完了です！<br>あとは査定を待つのみ。</p>
                <p>※送り状の記入は必要ありません。<br>下画像のように、すでに印字された送り状をドライバーが持参いたします。</p>
              </div>
              <div class="u-step__thumb">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/shipping/ship4.jpg" width="280" height="117" alt="">
              </div>
            </div>
            <div class="u-step__box">
              <p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/shipping/invoice1.png" width="640" height="900" alt=""></p>
              <p>赤枠部分がお客様控えとなります。<br>到着連絡は行っておりませんので、控え記載のお問い合わせ番号にて配達状況をご確認ください。</p>
            </div>
            <div class="u-step__box">
              <p>こんな時はどうすれば？</p>
              <dl class="dropdown__list faq__dropdown">
                <dt class="u-dropdown__title"><span class="faq__dropdown-icon">指定日に引渡しできなかった</span></dt>
                <dd class="u-dropdown__conts">
                  <p>お手数ですが希望日時をご記入の上、お問い合わせフォームまたは申込時の自動応答メールのアドレス宛にご連絡ください。<br>再集荷の手配をさせて頂きます。</p>
                  <div class="u-lp-btn2 u-step__btn2">
                    <a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">お問い合わせ</span></a>
                  </div>
                </dd>
                <dt class="u-dropdown__title"><span class="faq__dropdown-icon">集荷日を変更したい</span></dt>
                <dd class="u-dropdown__conts">
                  <p>【お申込時の氏名】をご記入の上お問合せフォームまたは申込時の自動応答メールのアドレス宛へ、集荷日前営業日17:00までにご連絡頂ければ変更いたします。</p>
                  <p>※お問い合わせは常時受け付けておりますが、営業時間内のご対応となります。<br>定休日：土日祝日(臨時休業あり)<br>営業時間：11時 ～ 17時30分</p>
                  <div class="u-lp-btn2 u-step__btn2">
                    <a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">お問い合わせ</span></a>
                  </div>
                </dd>
                <dt class="u-dropdown__title"><span class="faq__dropdown-icon">箱数を変更したい</span></dt>
                <dd class="u-dropdown__conts">
                  <p>箱数を変更する場合は、追加の伝票等が必要となりますのでご連絡ください。【お申込時の氏名】をご記入の上お問い合わせフォームまたは申込時の自動応答メールのアドレス宛へ、集荷日前営業日の17:00までにご連絡頂ければ変更いたします。</p>
                  <p>※お問い合わせは常時受け付けておりますが、集荷に関する変更は営業時間内のご対応となります。<br>定休日：土日祝日(臨時休業あり)<br>営業時間：11時 ～ 17時30分</p>
                  <div class="u-lp-btn2 u-step__btn2">
                    <a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">お問い合わせ</span></a>
                  </div>
                </dd>
              </dl>
            </div>
          </li>
          <li class="u-step__list -num4">
            <p class="u-step__title">荷渡し後から入金までの流れ</p>
            <div class="u-step__box">
              <div class="u-unit -secondary kaitori__unit -mb">
                <p>商品到着次第、査定に入らせていただきます。<br>※混み具合によっては少々お待ちいただく場合がございます。</p>
                <p>査定完了後、査定結果メールをお送りいたします。<br>自動承認の方や承認していただけた方へ最短1営業日、遅くとも3営業日以内にご指定の金融機関にお振込みいたします。</p>
              </div>
              <div class="u-lp-btn2 u-step__btn2">
                <a href="<?php echo esc_url(home_url('purchase/kaitori-guide')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">宅配買取の流れ</span></a>
              </div>
            </div>
          </li>
        </Ul>
      </section>
      <div class="kaitori__container kaitori__foot">
        <p>発送方法がわかったら、必要項目を入力するだけ最短2分で記入完了！</p>
        <p class="u-sec-em">カンタンお申し込みはこちらから！</p>
        <div class="u-lp-btn kaitori__foot-btn">
          <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
        </div>
      </div>
      <section id="self-shipping" class="kaitori__container">
        <h3 class="u-sec-title">自己発送希望のお客様へ</h3>
        <Ul class="u-step">
          <li class="u-step__list -num1">
            <p class="u-step__title">ご確認ください</p>
            <div class="u-step__box">
              <p class="u-sec-em">ご本人確認が必要です</p>
              <p>中古商品売買の取引におきましては、古物営業法により、非対面取引時の本人確認が定められております。<br>当店では、お申込頂いたご住所へ集荷に伺うことで、身分証ご住所との照合・ご本人様確認完了としております。</p>
              <p>お客様ご自身で発送をご希望の場合は、上記方法でのご本人様確認ができないため、本人確認のための簡易書留を送らせて頂きます。<br>こちらのお受け取りをもって本人確認となります。</p>
              <p>※「古物営業法」により、非対面取引における古物の取り扱いにおいて、身分証写しに記載のある住所の確認が義務付けられております。ご協力よろしくお願いいたします。</p>
            </div>
          </li>
          <li class="u-step__list -num2">
            <p class="u-step__title">申込時</p>
            <div class="u-step__box">
              <p>※買取のお申し込みなく送られてきた場合はお受け取りできません。</p>
              <p>買取依頼申込フォームの【その他、ご意見、ご質問など】の欄に”自己発送希望”の旨を必ずご記入ください。</p>
            </div>
          </li>
          <li class="u-step__list -num3">
            <p class="u-step__title">発送時</p>
            <div class="u-step__box">
              <p>送り先<br>住所：〒399-0001<br>長野県松本市宮田5-13<br>宛名：アニエラ宛<br>電話：0263-87-3452</p>
            </div>
            <div class="u-step__box">
              <p class="u-step__text-bold">【ダンボール１箱の場合】</p>
              <p>必ず日本郵便の<span class="u-step__attention">着払い「ゆうパック」</span>でお荷物を発送してください。</p>
              <p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/shipping/invoice2.png" width="640" height="390" alt=""></p>
              <div class="u-lp-btn3 u-step__btn2">
                <a href="https://www.post.japanpost.jp/service/you_pack/" target="_blank" rel="noopener noreferrer" class="u-lp-btn3__text"><span class="u-lp-btn3__icon">郵便局：ゆうパック</span></a>
              </div>
            </div>
            <div class="u-step__box">
              <p class="u-step__text-bold">【ダンボール２箱以上となる場合】</p>
              <p>必ず佐川急便の<span class="u-step__attention">着払い「飛脚宅配便」</span>でお荷物を発送してください。</p>
              <p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/shipping/invoice3.png" width="600" height="324" alt=""></p>
              <div class="u-lp-btn3 u-step__btn2">
                <a href="https://www.sagawa-exp.co.jp/service/takuhai/" target="_blank" rel="noopener noreferrer" class="u-lp-btn3__text"><span class="u-lp-btn3__icon">佐川急便：飛脚宅配便</span></a>
              </div>
            </div>

          </li>
          <li class="u-step__list -num4">
            <p class="u-step__title">査定完了後</p>
            <div class="u-step__box">
              <p>本人確認のための簡易書留を送らせて頂きます。<br>査定結果にご承諾頂ければ、簡易書留を送付し、お受取をもってご本人様確認とさせて頂きます。<br>ご本人様確認後に、お振込みとなります。<br>(過去に本人確認済の場合や、集荷による発送の場合は不要となります。その場合、金融機関の3営業日以内にお客様の口座に送金いたします。)</p>
            </div>
            <div class="u-step__box">
              <p class="u-step__color-inner">お荷物の不着について<br>【集荷希望日】（自己発送の場合申込時にご選択頂いた【発送日付＝集荷希望日】）翌日より、ご連絡なく7日間を過ぎてもお荷物が未着の場合には、お荷物確認のためメールにてご連絡をさせていただきます。<br>当店からの確認メールより3日間を過ぎてもご連絡をいただけない場合には、お申し込みは自動キャンセルとなります。<br>自動キャンセルとなった場合、買取をご希望される場合には再申込が必要となりますのであらかじめご了承ください。</p>
            </div>
          </li>
        </Ul>
      </section>
      <div class="kaitori__container  kaitori__foot">
        <p>そのほかなにかご不明点などございましたらお気軽にお問い合わせください。</p>
        <div class="u-lp-btn2">
          <a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">お問い合わせはこちら</span></a>
        </div>
      </div>
      <div class="kaitori__container kaitori__foot">
        <p class="u-sec-em -mb-none">24時間365日受付中！！</p>
        <p>あなたさまからのお申し込みお待ちしております！！！</p>
        <div class="u-lp-btn kaitori__foot-btn">
          <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
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
