<?php
/**
 * Template Name: プライバシーポリシー
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper3">
            <div class="lead">
                <h2>
                    <svg aria-label="PRIVACY" viewBox="0 0 302.8 50"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_privacy01"></use></svg>
                    <svg aria-label="PRIVACY" viewBox="0 0 266.5 48.1"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_privacy02"></use></svg>
                </h2>
            </div>
        </div>
        <div class="wrapper4">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>

