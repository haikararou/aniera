<?php
/**
 * Template Name: 新規会員登録：確認画面
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper-lead">
            <div class="lead mypage_title">
                <h2>新規会員登録</h2>
            </div>
        </div>
        <div class="wrapper5">
            <div class="conts">
                <form>
                    <dl class="contact_form non_form">
                        <div>
                            <dt>お名前</dt>
                            <dd>〇〇 〇〇</dd>
                        </div>
                        <div>
                            <dt>メールアドレス</dt>
                            <dd>xxxx@xx.com</dd>
                        </div>
                        <div>
                            <dt>パスワード</dt>
                            <dd>●●●●●●●●●●●●●●</dd>
                        </div>
                        <div>
                            <dt>生年月日</dt>
                            <dd>1983年3月1日</dd>
                        </div>
                        <div>
                            <dt>性別</dt>
                            <dd>男性</dd>
                        </div>
                        <div>
                            <dt>住所</dt>
                            <dd>
                                〒5300001 北海道〇〇市〇〇番地〇〇ビル〇〇</dd>
                        </div>
                        <div>
                            <dt>メールマガジン送付について</dt>
                            <dd>受け取る</dd>
                        </div>
                    </dl>
                    <a href="" class="submit_btnA">登録する</a>
                    <a href="" class="submit_btnC">戻る</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>

