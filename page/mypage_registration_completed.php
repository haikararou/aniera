<?php
/**
 * Template Name: 新規会員登録：ご登録完了
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead mypage_title">
                <h2>新規会員登録：ご登録完了</h2>
            </div>
        </div>
        <div class="wrapper5">
            <div class="conts">
                <p>会員登録が完了しました。</p>
                <a href="" class="submit_btnA">マイページへ</a>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>

