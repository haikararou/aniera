<?php 
  $my_tax = 'store_cat';  //取得したいタクソノミー名
  $parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 0) );  //第一階層のタームだけ取得
  if ( !empty( $parent_terms ) ) :
    echo '<nav><ul>';

    //第1ループ
    foreach ( $parent_terms as $pt ) : 
      $pt_id = $pt->term_id;
      $pt_name = $pt->name;
      $pt_url = get_term_link($pt);
?>
      <li>
        <a href="<?php echo $pt_url; ?>"><?php echo $pt_name; ?></a>
        <?php 
          $child_terms = get_terms( $my_tax, array('hide_empty' => true, 'parent' => $pt_id) );
          if ( !empty( $child_terms ) ) :
            echo '<ul class="child">';
            echo '<li><a href="'.$pt_url.'">'.$pt_name.'</a></li>';
           //第2ループ
            foreach ( $child_terms as $ct ) : 
              $ct_id = $ct->term_id;
              $ct_name = $ct->name;
              $ct_url = get_term_link($ct);
        ?>
              <li>
                <a href="<?php echo $ct_url; ?>"><?php echo $ct_name; ?></a>
              </li>
        <?php
            endforeach;  //End : 第２ループ
            echo '</ul>';
          endif;
        ?>
      </li>
<?php
    endforeach;  //End : 第1ループ
    echo '</ul></nav>';
  endif;
?>
<script>
$(function () {
  $("nav ul li:has(.child)").addClass("parent");
});
</script>

<script>
var $win = $(window);
$win.on('load resize', function() {
  if (window.matchMedia('(max-width:768px)').matches) {
    // SPの処理
    $(function(){
      $('nav ul li.parent a').click(function(event){
        event.preventDefault();
        $(this).next("ul").toggleClass("open");
      });
    });
  } else {
    // PCの処理
    $("nav ul").children("li").hover(function(){
      $(this).children("ul").stop().slideToggle(180);
    });
  }
});
</script>

<script>
//リサイズするとドロワー閉じる
$(window).resize(function(){
    if (window.matchMedia('(min-width:767px)').matches) {
        // SPの処理
        $(function(){
          $("nav ul li.parent ul").removeClass("open");
        });
    } else {
        // PCの処理
    }
});
</script>
