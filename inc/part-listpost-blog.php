<?php while ( have_posts() ): the_post(); ?>
  <a href="<?php the_permalink();?>">
    <figure><img src="<?php if(has_post_thumbnail()): ?><?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?><?php else: ?><?php bloginfo('template_url') ?>/common/img/noimage.jpg<?php endif; ?>" alt="<?php the_title(); ?>" /></figure>
    <div class="txt">
      <div class="date"><div><?php the_time('Y'); ?><span><?php the_time('n.j'); ?></span></div></div>
      <h3><?php the_title(); ?></h3>
      <div class="category"><span><?php $terms = get_the_terms($post->ID,'blog_cat'); if($terms){echo $terms[0]->name;} ?></span></div>
    </div>
  </a>
  <?php endwhile; ?>
<div class="emp"></div>