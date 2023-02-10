<?php
get_header(); ?>

<div id="bg">
    <div class="wrapper1">
        <div class="wrapper3">
            <div class="lead">
                <h2><svg aria-label="STORE" viewBox="0 0 368.5 78.7"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_store"></use></svg></h2>
                <?php get_sidebar('store'); ?>
            </div>
        </div>
        <!-- <div class="wrapper2 cat_title <?php echo($cat->slug); ?>">
            <h2 class="title"><?php echo $cat->name; ?></h2>
            <h2 id="page_title"><svg aria-label="NEW ARRIVAL" viewBox="0 0 842.9 83.6"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_newarrival"></use></svg></h2>
        </div> -->
        <div class="wrapper3" id="<?php echo($cat->slug); ?>">
        <div id="archiveHead">
            <h2>「<?php the_archive_title(); ?>」の商品</h2>
            <div class="archiveHead">
                <h3><?php $term = get_queried_object(); echo $term->count; ?>件の商品が見つかりました</h3>
                <!-- <div class="archiveHeadR">
                    <div>
                        <?php posts_per_page_changer_ui(); ?>
                    </div>
                    <div>
                        <select name="pets">
                            <option value="価格が低い順" selected>価格が低い順</option>
                            <option value="価格が高い順">価格が高い順</option>
                        </select>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="conts">
            <div class="new_arrival">
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                <?php get_template_part('inc/part-listpost-store'); ?>
            <?php endwhile; ?>
            <?php else: ?>
              記事はありませんでした
            <?php endif; ?>
            </div>
        </div>
        <?php get_template_part('inc/pagination'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>