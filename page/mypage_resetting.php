<?php
/**
 * Template Name: パスワード再設定
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead mypage_title">
                <h2>パスワード再設定</h2>
            </div>
        </div>
        <div class="wrapper5">
            <div class="conts">
                <p>新しいパスワードを入力し「パスワードを再設定する」ボタンをクリックしてください。</p>
                <form>
                    <dl class="contact_form">
                        <div>
                            <dt>新パスワード</dt>
                            <dd><input type="text" value="" size="40" class="formTxt" /></dd>
                        </div>
                        <div>
                            <dt>新パスワード（確認）</dt>
                            <dd><input type="text" value="" size="40" class="formTxt" /></dd>
                        </div>
                    </dl>
                    <input type="submit" value="パスワードを再設定する" class="submit_btnA" />
                </form>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>

