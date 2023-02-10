<?php
/**
 * Template Name: マイページログイン
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead mypage_title">
                <h2>マイページログイン</h2>
            </div>
        </div>
        <div class="wrapper5">
            <div class="conts">
                <ul class="aste_list">
                    <li>通販と買取のログイン情報は異なります。買取の会員IDではログイン出来ませんので、ご注意ください。</li>
                    <li>はじめての方は会員登録をお願いします。</li>
                </ul>
            </div>
            <div class="conts">
            <form>
                <dl class="contact_form">
                    <div>
                        <dt>ログインID</dt>
                        <dd><input type="text" value="" size="40" class="formTxt" /></dd>
                    </div>
                    <div>
                        <dt>パスワード</dt>
                        <dd><input type="text" value="" size="40" class="formTxt" /></dd>
                    </div>
                </dl>
                <div class="Retention"><input type="checkbox" id="Retention" name="Retention"><label for="Retention">ログイン情報を保持する</label></div>
                <input type="submit" value="ログイン" class="submit_btnA" />
                <a href="" class="submit_btnB">パスワードを忘れた方はこちら</a>
                <a href="" class="submit_btnC">新規会員登録の方はこちら</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>

