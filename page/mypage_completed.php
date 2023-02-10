<?php
/**
 * Template Name: 退会手続き完了
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead mypage_title">
                <h2>マイページ</h2>
            </div>
        </div>
        <div class="wrapper5">
            <div class="conts">
                <h2>退会手続き完了</h2>
                <p>ご利用ありがとうございました。また機会がございましたらアニエラをよろしくお願いします。</p>
                <a href="" class="submit_btnA">トップページへ</a>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>

