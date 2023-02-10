      <nav class="blogListR">
        <h2>カテゴリ</h2>
        <ul>
          <?php $parents = get_terms(array('taxonomy' => 'blog_cat', 'parent' => 0)); ?>
          <?php foreach($parents as $parent) : ?>
          <li>
            <a href="<?php echo get_category_link( $parent->term_id ); ?> " ><?php echo $parent->name ?></a>
            <ul>
              <?php $childs = get_terms(array('taxonomy' => 'blog_cat', 'parent' => $parent->term_id)); ?>
              <?php foreach($childs as $child) : ?>
              <li>
                <a href="<?php echo esc_url(home_url()) ?>/blog_cat/<?php echo $child->slug ?>/"><?php echo $child->name ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <?php endforeach; ?>
        </ul>

        <h2>アーカイブ</h2>
        <?php
          $args = array(
          'post_type'=>'blog',
          'type'             => 'monthly',
          'format'           => 'option',
          'show_post_count'  => '1',
          );
        ?>
        <div>
            <select onchange="document.location.href=this.options[this.selectedIndex].value;" class="select-blog-month">
            <option value="">月年月を選択</option>
            <?php wp_get_archives($args); ?>
            </select>
        </div>
        <h2>サイト内検索</h2>
        <?php get_search_form(); ?>
    </nav>



