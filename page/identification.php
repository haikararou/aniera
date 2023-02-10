<?php
/**
 * Template Name: 宅配買取- 本人確認書類ガイド
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
      <h2 class="u-sec-maintitle">本人確認書類について</h2>
      <section class="kaitori__container">
        <h3 class="u-sec-title">はじめに</h3>
        <p>アニエラでは、宅配買取に関する本人確認書類として、お客様に身分証明書コピーの送付をお願いしております。</p>
        <p>非対面・お振込みでのお取引となるため、本人確認が必要です。<br>当店では、お客様の身分証明書記載の住所へ集荷に伺うことで、本人確認とさせていただいております。</p>
        <p>身分証明書をご提示いただくことは、古物営業法第15条に基づき法律で義務付けられており、その他の目的で使用することはありません。</p>
        <p>※身分証をお手持ちのスマートフォンなどで撮影し、アップロードして頂く事も可能です。<br>身分証を撮影し、買取申込依頼フォームからアップロードしてください。</p>
      </section>
      <section class="kaitori__container">
        <h3 class="u-sec-title">身分証明書について</h3>
        <p class="u-headline">身分証明書として認められるもの</p>
        <p>以下のものが、身分証明書にご利用頂けます。</p>
        <div class="u-unit -secondary kaitori__unit -mb">
          <p class="u-unit__innerline">・運転免許証<br>・各種健康保険証(健康保険、国民健康保険、共済組合、船員保険)<br><span class="u-unit__indent">※健康保険証の記号・番号部分のみ、付箋・マスキングテープなどで隠した状態でコピーをお願いします。または、コピー後にマジックなどで塗りつぶしてください。</span><br>・日本国パスポート<br>・年金手帳(住所記載欄があるものに限る)<br>・外国人登録(済)証明書<br>・住民基本台帳カード<br>・マイナンバーカード（通知カードは無効）<br><span class="u-unit__indent">※マイナンバーカードは表面のみお送りください。裏面に関しましては、法令で定められた手続き以外のコピーは禁止されておりますのでご注意ください。</span></p>
          <p class="u-unit__text-small u-unit__innerline">※現住所記載のものに限ります。（保険証裏面手書き有効）<br>※学生証、社員証等上記以外の物はご利用頂けません。<br>※法令に基づきご本人を証明・確認するものですので、顔写真や項目を塗りつぶすなどの加工はなされませんよう、お願いします。<br>※期限切れの身分証はご利用いただけません。<br><span class="u-unit__attention">※18歳未満の方は上記書類に加え保護者同意書が必要となります。</span></p>
          <p class="u-dl"><a href="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/agreement-form.pdf" class="u-dl__link"><span class="u-dl__icon">保護者同意書ダウンロード</span></a></p>
        </div>
        <p class="u-headline">コピーする際の注意点</p>
        <p>ご用意いただいた身分証明書は、コピーしたものを1部お荷物に同封してお送りください。<br>なお、以下のものは本人確認書類として無効となり、再送付をお願いする場合がございます。</p>
        <div class="u-unit -secondary kaitori__unit -mb">
          <p class="u-unit__innerline">■必要事項が確認できないもの<br>コピーする際に身分証明書の一部が欠けたもの、解像度が低く文字が鮮明でないものは無効となります。</p>
          <p class="u-unit__innerline">■有効期限を過ぎたもの<br>現在使用していない過去の運転免許証など、有効期限の過ぎたものは無効となります。</p>
          <p class="u-unit__innerline">■現住所記載面がコピーされていないもの<br>現住所の記載がないものは無効となります。<br>健康保険証など、表面に現住所の記載がないものは必ず、裏面（手書き有効）もコピーしてご送付ください。<br>住所変更などを行った場合も、現住所が記載されている面を必ずコピーしてご送付ください。<br>パスポートや年金手帳は住所記載ページも忘れずにコピーしてご送付ださい。</p>
          <p class="u-unit__innerline">■原本を加工・改ざんしたもの<br>法令に基づきご本人を証明・確認するものですので、顔写真や項目を塗りつぶす・隠すなどの加工、その他改ざん、詐称などがされたものは無効となります。<br>ただし、家族情報（本人以外の氏名）、臓器提供意思表示欄、その他本人確認に必要のないセンシティブ情報につきましては、隠していただいても有効とさせていただきます。<br>※保管時には、センシティブ情報を黒塗りで抹消しております。</p>
          <p class="u-unit__innerline">■身分証記載の住所と現住所が違う場合の対処法<br>身分証明書に加え、下記本人確認書類のご提出によりお取引可能です。<br>・住民票<br>・印鑑登録証明書<br>・現住所記載の公共料金等領収証(電気、ガス、水道、電話)<br>・現住所記載の郵便物(消印または「料金後納」「料金別納」の記載があるもの)<br>※全て交付日から3ヶ月以内のものに限る。<br>※住民票のみコピー不可<br>なお、振込口座は住民票に記載の本人名義口座に限ります。</p>
          <p class="u-unit__innerline">■苗字が変わったが、身分証の名義を変更していない場合<br>身分証明書に加え、下記本人確認書類のご提出が必要になります。<br>・戸籍抄本(謄本)の写し<br>※交付日から3ヶ月以内のものに限る。</p>
          <div class="u-unit__color-inner">
            <p class="u-unit__text-large">18歳未満のお客様へ</p>
            <p>18歳未満のお客様には保護者同意書のご記入とご同封をお願いしております。<br>下記の同意書を印刷し、保護者の方がご記入・ご捺印頂いたものを身分証と同封して頂きますようお願い致します。</p>
            <p class="u-dl"><a href="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/lp/agreement-form.pdf" class="u-dl__link"><span class="u-dl__icon">保護者同意書ダウンロード</span></a></p>
          </div>
        </div>
        <p>なお、不備があった場合には、お申し込み時のメールアドレス宛に当店【support@aniera.jp】よりご連絡しますので、必ずご確認ください。</p>
        <p>以上が、当店の宅配買取でご使用いただける身分証明書になります。<br>そのほか例外につきましては、”よくあるご質問：必要書類について”をご確認、またはお問い合わせください。</p>
        <div class="u-lp-btn2 kaitori__foot-btn2">
          <a href="<?php echo esc_url(home_url('purchase/faq')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">よくあるご質問</span></a>
        </div>
        <div class="u-lp-btn2 kaitori__foot-btn2">
          <a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">お問い合わせはこちら</span></a>
        </div>
      </section>
      <section class="kaitori__container">
        <div class="identification__inner">
          <h3 class="u-sec-title">本人確認書類の取扱について</h3>
          <p class="u-head-title">本人確認書類の保管</p>
          <p>古物営業法・個人情報保護法に基づき、弊社規約が定める期間厳重に保管させて頂きます。<br>※古物営業法の定める項目につきましては3年間の保管が法令により義務付けられております。</p>
          <p class="u-head-title">本人確認書類の利用・処理</p>
          <p>ご送付いただいた身分証明書は本人確認書類として、古物営業法に基づき一定期間弊社にて保管後、個人情報として厳重に処理いたします。<br>お客様の個人情報は、買取に関する本人確認・連絡などの業務及び当店における営業に関する各種情報提供サービスのみに利用させて頂きます。</p>
          <div class="u-lp-btn2">
            <a href="<?php echo esc_url(home_url('privacy')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">プライバシーポリシー</span></a>
          </div>
        </div>
        <div class="identification__inner">
          <p class="u-head-title">個人情報の保護・開示</p>
          <p>本人確認書類により取得した個人情報を第三者に開示することはございません。<br>ただし、下記の場合に警察からの要請があれば、直ちに当該警察・関係機関へ届出を致します。</p>
          <p>・警察・関係機関より法令に基づく開示要求があった場合<br>・お売りいただいた商品に盗品・偽造品の疑いがある場合<br>・申込者が法令に違反及び違反する疑いのある場合</p>
          <p>そのほかなにかご不明点などございましたらお気軽にお問い合わせください。</p>
          <div class="u-lp-btn2">
            <a href="<?php echo esc_url(home_url('ec/contact')); ?>" class="u-lp-btn2__text"><span class="u-lp-btn2__icon">お問い合わせはこちら</span></a>
          </div>
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
