<?php
/**
 * Template Name: パスワード再発行：メール送付完了
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead mypage_title">
                <h2>パスワード再発行：メール送付完了</h2>
            </div>
        </div>
        <div class="wrapper5">
            <div class="conts">
                <p>メールに記載されているURLをクリックし、パスワードを再設定してください</p>
                <a href="" class="submit_btnA">ログインする</a>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>

