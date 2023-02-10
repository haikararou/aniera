<?php
/**
 * Template Name: 汎用ページ
 * Template Post Type: page
 */

get_header(); ?>

<?php while(have_posts() ) : the_post(); ?>
<div id="bg">
    <div class="wrapper1">
        <div class="wrapper4">
            <div class="conts">
                <h2><?php the_title(); ?></h2>
                <?php
                    //remove_filter('the_content', 'wpautop');
                    the_content();
                    //add_filter('the_content', 'wpautop');
                ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile;?>

<?php get_footer(); ?>

