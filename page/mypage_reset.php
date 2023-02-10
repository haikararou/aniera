<?php
/**
 * Template Name: パスワードの再発行
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead mypage_title">
                <h2>パスワードの再発行</h2>
            </div>
        </div>
        <div class="wrapper5">
            <div class="conts">
                <p>パスワードをお忘れの方は、登録されたメールアドレスを入力してください。届いたメールから、パスワードを再設定してください。</p>
                <form>
                    <dl class="contact_form">
                        <div>
                            <dt>メールアドレス</dt>
                            <dd><input type="text" value="" size="40" class="formTxt" /></dd>
                        </div>
                    </dl>
                    <input type="submit" value="メールを送信する" class="submit_btnA" />
                </form>
                <p class="asterisk">※メールアドレスを入力してもエラーになる場合は、メールアドレスが登録されていない可能性がございます。新しく会員登録していただくか、アニエラカスタマーセンターまでお問い合わせください。</p>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>

