<?php
get_header(); ?>

<div id="bg">
  <div class="wrapper1">
    <div class="wrapper3">
      <div class="lead">
        <h2>
          <svg aria-label="ANIERA BLOG" viewBox="0 0 459.5 80.6"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_anierablog01"></use></svg>
          <svg aria-label="ANIERA BLOG" viewBox="0 0 319.8 78.7"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#title_anierablog02"></use></svg>
        </h2>
      </div>
        <div class="blogList">
          <div class="blogListL">
            <div class="aniera_blog">
            <?php if ( have_posts() ): ?>
              <?php get_template_part('inc/part-listpost-blog'); ?>
            <?php else: ?>
              記事はありませんでした
            <?php endif; ?>
            </div>
            <?php get_template_part('inc/pagination'); ?>
          </div>
          <?php get_sidebar('blog'); ?>
        </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
