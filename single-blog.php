<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<div id="bg">
    <div class="wrapper1">
        <div class="wrapper3">
            <div class="lead">
                <h2><svg aria-label="ANIERA BLOG" viewBox="0 0 863.7 80.6"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_anierablog"></use></svg></h2>
            </div>
            <div class="wrapper5">
                <div id="entry_title">
                    <div class="date"><div><?php the_time('Y'); ?><span><?php the_time('n.j'); ?></span></div></div>
                    <h2><?php the_title(); ?></h2>
                    <div class="category"><span><?php echo get_the_term_list($post->ID,'blog_cat'); ?></span></div>
                    <nav class="sns">
                        <ul>
                            <li><a href="https://twitter.com/aniera_japan" target="_blank" title="Twitter"><svg viewBox="0 0 25 21.3"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#tw"></use></svg></a></li>
                            <li><a href="https://www.facebook.com/anieramode/" target="_blank" title="Facebook"><svg viewBox="0 0 18 17.9"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fb"></use></svg></a></li>
                        </ul>
                    </nav>
                </div>
                <div id="entry_body">
                    <?php if(has_post_thumbnail()): ?>
                      <div class="entry_header"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" /></div>
                    <?php else: ?><?php endif; ?>
                    <div class="entry_body">
                        <div class="conts">
                        <?php the_content(); ?>
                        </div>
                        <?php $related_posts = get_field('Purchase'); if($related_posts) : ?>
                            <?php
                                foreach( $related_posts as $post): // variable must be called $post
                                setup_postdata($post);
                            ?>
                            <div class="purchaseBtn">
                                <a href="<?php the_permalink();?>"><span><svg viewBox="0 0 29 28"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cr"></use></svg>購入はこちら</span></a>
                            </div>
                            <?php endforeach; wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="pagenate">
                    <div class="prev"><?php if( get_next_post() ): ?><?php next_post_link('%link', '%title »'); ?><?php endif; ?></div>
                    <div class="next"><?php if( get_previous_post() ): ?><?php previous_post_link('%link', '« %title'); ?><?php endif; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
