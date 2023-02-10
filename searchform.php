<form method="get" class="searchform" action="<?php echo esc_url( home_url('/') ); ?>">
    <input type="text" name="s" class="search" value="<?php the_search_query(); ?>">
    <input type="submit" name="submit" value="" class="submit">
    <input type="hidden" name="post_type" value="news_release">
</form>