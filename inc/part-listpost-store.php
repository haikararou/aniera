      <a href="<?php the_permalink();?>"<?php if (get_field('soldout')): ?> class="<?php the_field('soldout'); ?>"<?php endif; ?>>
          <div class="ph">
            <figure><img src="<?php if(has_post_thumbnail()): ?><?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?><?php else: ?><?php bloginfo('template_url') ?>/common/img/noimage.jpg<?php endif; ?>" alt="<?php the_title(); ?>" /></figure>
          </div>
          <div class="txt">
              <h3><?php the_title(); ?></h3>
              <?php if(get_field('price')): ?><div class="price">￥<div class="num3"><?php the_field('price'); ?></div><span>税込</span></div><?php endif; ?>
          </div>
      </a>