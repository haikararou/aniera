<?php
/**
 * Template Name: 宅配買取-買取の流れ
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
      <h2 class="u-sec-maintitle">宅配買取の流れ</h2>
      <figure class="kaitori__flow"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/kaitori/flow.png" width="768" height="114" alt=""></figure>
      <section class="kaitori__container kaitori__packing">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num1.svg" width="45" height="45" alt="" class="u-sec-title__num">まずは梱包!</h3>
        <p>お売り頂ける商品が決まったら、商品を段ボールへつめましょう。</p>
        <p class="u-sec-em">1箱でも10箱以上でも送料無料でご利用いただけます！</p>
        <dl class="dropdown__list  kaitori__dropdown">
          <dt class="u-dropdown__title">ダンボール1箱の場合</dt>
          <dd class="u-dropdown__conts">
            <div class="kaitori__dropdown-inner">
              <div class="kaitori__dropdown-text">1箱の最大サイズ<br>大きさ：160cm(縦＋横＋高さの合計)以内<br>重さ　：30kg(CD300枚程度)以内<br><br>上記を超える場合には2箱に分けて梱包してください。</div>
              <div class="kaitori__dropdown-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/kaitori/cardboard.png" width="187" height="165" alt=""></div>
            </div>
          </dd>
          <dt class="u-dropdown__title">ダンボール2箱以上の場合</dt>
          <dd class="u-dropdown__conts">軽くて小さな箱が複数個になる場合には、できるだけ1箱にまとめていただきますようご協力お願いいたします。</dd>
          <dt class="u-dropdown__title">ダンボール10箱を超える場合</dt>
          <dd class="u-dropdown__conts">お申込前にかならず、ご連絡ください。<br>またお売りいただく商品のおおまかな概要をお知らせください。お受け可能かご連絡させていただきます。</dd>
        </dl>
        <p>ご自宅にある緩衝材や新聞紙などで、隙間を埋めると輸送キズや破損なく査定時の減額を防ぐことができます！</p>
        <div class="u-lp-btn2 kaitori__packing-btn">
          <a href="<?php echo esc_url(home_url('purchase/packing')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">梱包ガイド</span></a>
        </div>
        <p>ダンボールには、お売りいただく商品と一緒に現住所(集荷先)記載の身分証明書コピーを忘れずに入れてください。<br>※複数個口の場合、いずれかひとつの箱に1部同封で問題ございません。</p>

        <div class="u-unit -secondary kaitori__unit -mb">
          <p>・運転免許証<br>・各種健康保険証(健康保険、国民健康保険、共済組合、船員保険)<br>・日本国パスポート<br>・年金手帳(住所記載限り)<br>・外国人登録(済)証明書<br>・住民基本台帳カード<br>・マイナンバーカード表面（通知カードは無効）<br>※現住所記載のものに限ります。<br>※18歳未満の方は上記書類に加え保護者同意書が必要となります。</p>
          <div class="u-lp-btn2">
            <a href="<?php echo esc_url(home_url('purchase/identification')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">身分証ガイド</span></a>
          </div>
        </div>
      </section>
      <section class="kaitori__container kaitori__request">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num2.svg" width="45" height="45" alt="" class="u-sec-title__num">宅配買取のお申込</h3>
        <p>売りにだす商品を段ボールへ梱包できたらお申込み！<br><br>入力内容は、必要最低限の情報入力のみ！面倒なお手続きは一切ございません！<br>最短2分で完了します！</p>
        <div class="u-lp-btn kaitori__request-btn">
          <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
        </div>
        <p class="u-sec-em">よくあるご質問</p>
        <dl class="dropdown__list faq__dropdown">
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">商品の点数は正確でないといけませんか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>大量にある場合はおおまかな点数のみで構いません。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">身分証と集荷先住所が違うのですが。</span></dt>
          <dd class="u-dropdown__conts">
            <p>身分証明書に加え、下記本人確認書類のご提出によりお取引可能です。<br>・住民票<br>・印鑑登録証明書<br>・現住所記載の公共料金等領収証(電気、ガス、水道、電話)<br>・現住所記載の郵便物(消印または「料金後納」「料金別納」の記載があるもの)<br>※全て交付日から3ヶ月以内のものに限る。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">実家・勤め先に集荷にきてほしいのですが。</span></dt>
          <dd class="u-dropdown__conts">
            <p>ご対応可能でございます。<br>フォーム記載住所は集荷先のご住所をご記入ください。<br>査定後、身分証記載のご住所へ当店より簡易書留郵便を送付し、お受け取りをもってご本人様確認とさせていただきます。</p>
          </dd>
          <dt class="u-dropdown__title"><span class="faq__dropdown-icon">振込先はなにが使えますか？</span></dt>
          <dd class="u-dropdown__conts">
            <p>お申し込みされるご本人様名義の金融機関口座（ネットバンク・ゆうちょ含む）がご利用いただけます。</p>
          </dd>
        </dl>
        <div class="u-lp-btn2 kaitori__request-btn2">
          <a href="<?php echo esc_url(home_url('purchase/faq')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">そのほかのよくある質問</span></a>
        </div>
        <p>事前査定をご希望されるお客様<br>ご入力頂いたメール内容（バーコードの番号またはタイトル名）から、概算のお見積もり金額を出させて頂きます。</p>
        <div class="u-lp-btn2">
          <a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">事前査定はこちらから</span></a>
        </div>

      </section>
      <section class="kaitori__container kaitori__delivery">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num3.svg" width="45" height="45" alt="" class="u-sec-title__num">引き渡し</h3>
        <p>配送料＆集荷サービス無料です。<br>ご指定の日付時間帯に運送会社のドライバーが送り状を持ってお伺いしますので、梱包した商品をお渡しください。</p>
        <div class="u-lp-btn2 kaitori__delivery-btn">
          <a href="<?php echo esc_url(home_url('purchase/shipping')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">お荷物の発送方法</span></a>
        </div>
        <div class="u-unit -secondary kaitori__unit">
          <p>※時間帯は「指定なし」「8-13時」「13-15時」「15-17時」「17-19時」よりお選びいただけます。<br><br>※集荷はご希望時間帯内でのお伺いとなりますが、運送状況・交通状況などにより遅れなどが生じる際には佐川急便の担当ドライバーより直接ご連絡させていただく場合がございます。<br>また、詳細な時間指定（例：9時までに来て欲しい）などはご対応いたしかねますのでご注意ください。<br><br>※宅配業者委託のため、指定日時に集荷が来ない場合は大変お手数ではございますが、下記へ直接ご連絡のうえ集荷依頼完了メールに記載の問い合わせ番号をお伝えください。<br>【お問い合わせ先】<br>佐川急便松本営業所（0570-01-0337）</p>
        </div>
      </section>
      <section class="kaitori__container kaitori__assess">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num4.svg" width="45" height="45" alt="" class="u-sec-title__num">査定</h3>
        <p>当店にお荷物が届きましたら、精鋭スタッフにより1点、1点、丁寧、かつ、スピーディーに査定いたします！！</p>
        <p class="u-sec-em">お選びいただける査定方法</p>
        <dl class="dropdown__list  kaitori__dropdown kaitori__assess-list">
          <dt class="u-dropdown__title">A.【査定後、すぐにお支払い（自動承認）】を選んだ場合</dt>
          <dd class="u-dropdown__conts">
            お荷物到着後、優先査定・最速でのご入金（通常1～3営業日以内）となります。<br>最速で査定いたします。現金化をお急ぎのお客様、最短の手順で買取を希望のお客様におすすめです。
            <div class="u-dropdown__color-inner">
              <p>※常時優先して査定いたしますが、査定が混み合う時期やお品物が大量の場合などはお振込までに多少時間がかかってしまう可能性もございます。お急ぎのお客様は事前にご相談下さい。<br>ただし、発送を持って売買契約が成立するものとし、査定結果メールはありますが入金時の通知はございません。<br>発送後のキャンセル・返品は如何なる場合でも一切お受けできません。</p>
            </div>
          </dd>
          <dt class="u-dropdown__title">B.【査定後、金額を確認して承認】を選んだ場合</dt>
          <dd class="u-dropdown__conts">
            査定完了後、お客様へメールにて査定金額の通知を行います。<br>当店から提示した金額にご納得いただける場合は承認（買取成立）、ご満足いただけない場合には返品（買取不成立）をお選びいただくことが可能です。金額の確認をしたいお客様におすすめです。<br>自動承認のお客様を優先して査定いたしますので、査定完了まで1週間～最長10営業日程度お時間がかかります。<br>承認後の、ご入金までにかかる時間は通常1～3営業日以内となります。査定終了後、当店から査定結果のメールが送られてきますので金額を確認後、承認・不承認をご選択ください。<br><br>➡︎承認する<br>当店から送られてきた査定結果のお知らせメールのアドレスへ、承認していただける旨をご連絡ください。<br><br>➡︎承認しない<br>（買取不成立）<br>査定金額にご満足頂けない場合、査定結果のお知らせメールのアドレスへ商品の返却を希望する旨をご連絡ください。
            <div class="u-dropdown__color-inner">
              <p>注意点<br>※買取不成立の場合の返送料はお客様ご負担となります。<br><br>※ご返信は１週間以内にお願い致します。１週間経過してもご連絡頂けない場合には、査定承認とみなしお振込をさせて頂きます。<br>場合により、電話連絡にて確認させていただく場合がございますのでご了承ください。（査定事務所：0263-87-3452）<br><br>※※お取り扱いについて※※<br>未開封商品につきましては、状態確認のため開封させて頂く場合がございます。あらかじめご了承ください。<br><br>※※返却について※※<br>査定した商品はすべて買取かすべて返却のいずれかになります。一部商品の返却は致しかねますので、あらかじめご了承下さい。</p>
            </div>
          </dd>
        </dl>
        <div class="u-lp-btn2">
          <a href="<?php echo esc_url(home_url('purchase/shipping')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">お荷物の発送方法</span></a>
        </div>
      </section>
      <section class="kaitori__container kaitori__pay">
        <h3 class="u-sec-title"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/num5.svg" width="45" height="45" alt="" class="u-sec-title__num">入金</h3>
        <p>自動承認の方、承認していただけた方へ査定結果メールをお送りします。<br>最短１営業日、遅くとも３営業日以内にご指定の金融機関にお振込みいたします。<br>なお、入金時の通知はございません。<br><br>また、銀行休業日につきましてはお振込できませんので、ご注意下さい。ご入金をお急ぎのお客様は事前にご相談下さい。</p>

        <div class="u-unit -secondary kaitori__unit">
          <p>振込先について<br>身分証明書と同一の、ご本人様名義口座へのみ振込が可能です。<br>ご家族および名義変更をしていない口座などへのご入金は致しかねますのであらかじめご了承ください。</p>
        </div>
      </section>
      <div class="kaitori__container kaitori__foot">
        <p>以上が、宅配買取の流れとなります。</p>
        <p class="u-sec-em"> 24時間365日受付中！！<br>簡単最短2分でお申し込み完了です！</p>
        <div class="u-lp-btn kaitori__foot-btn">
          <a href="https://kaitori.aniera.jp/" target="_blank" class="u-lp-btn__text"><span class="u-lp-btn__icon">今すぐお申込み!</span></a>
        </div>
        <p>ご不明点などございましたら、<br class="u-pc-none">お気軽にお問い合せください！</p>
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
