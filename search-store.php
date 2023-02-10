<?php
get_header(); ?>

<?php
global $wp_query;
$total_results = $wp_query->found_posts;
$search_query = get_search_query();
?>

<div id="bg">
    <div class="wrapper1">
        <div class="wrapper3">
            <div class="lead">
                <h2><svg aria-label="STORE" viewBox="0 0 368.5 78.7"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_store"></use></svg></h2>
            </div>
        </div>
        <div class="wrapper2">
            <h2 class="title"><?php if ( get_search_query() ): ?><?php the_search_query(); ?><?php else: ?>すべて<?php endif; ?>の検索結果 : <?php echo $wp_query->found_posts; ?>件</h2>
        </div>
        <div class="wrapper3">
            <div class="conts">
                <div class="new_arrival">
                    <?php if ( have_posts() ): ?>
                    <?php while ( have_posts() ): the_post(); ?>
                    <?php get_template_part('inc/part-listpost-store'); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                    検索されたキーワードにマッチする記事はありませんでした
                    <?php endif; ?>
                </div>
            </div>
            <?php get_template_part('inc/pagination'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>


