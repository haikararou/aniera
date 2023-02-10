<?php
/**
 * Template Name: 送信完了
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper3">
            <div class="lead">
                <h2><svg aria-label="CONTACT" viewBox="0 0 370.7 49.3"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_contact"></use></svg></h2>
            </div>
        </div>
        <div class="wrapper4">
            <div class="conts">
                <h2>問い合わせが完了致しました。</h2>
                <p>お問い合わせ頂き、誠にありがとうございます。メールは正常に送信されました。スタッフが直ちに確認し、改めてご入力頂いたメールアドレスまでご連絡させて頂きます。<br><span class="asterisk">※お問い合わせをされたお客様には当店より自動返信メールが送られております。そちらを必ずご確認下さい。</span></p>
                <p>【自動返信メールが来ていない場合】<br>自動返信メールが届いていない場合、以下の原因が考えられます。<br>
                <ul class="dot">
                    <li>迷惑メールフォルダに格納されている。</li>
                    <li>ご記入頂いたメールアドレスが間違っている。</li>
                    <li>迷惑メール設定でPCメールの受信を拒否している。</li>
                </ul></p>
                <p>いずれにも該当せず、当店からの自動返信メールが届いていない場合には、大変お手数ではございますが、当店までご連絡下さい。</p>
                <p>ANIERA メールアドレス：<a href="mailto:support@aniera.jp">support@aniera.jp</a></p>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>
<?php get_footer(); ?>

