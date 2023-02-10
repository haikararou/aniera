<div class="pagenate">
<?php
$prev = get_previous_posts_link();
$next = get_next_posts_link();
echo '<div class="prev">';
if ( $prev ) {
// 前のページが存在する場合
echo $prev;
}
echo '</div>';
// 次のページが存在する場合
echo '<div class="next">';
if($next){
echo $next;
}
echo '</div>';
?>
</div>