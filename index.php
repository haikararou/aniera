<?php
/**
 * indexテンプレート
 */

get_header(); ?>

  <main class="page-main">
    <div class="contents-wrap">
       
      <?php while (have_posts() ) : the_post(); ?>
         <h2 class="title-h2"><?php the_title(); ?></h2>
         <?php the_content(); ?>
       <?php endwhile;?>
       </ul>
    </div>
  </main>

<?php get_footer(); ?>

