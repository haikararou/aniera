<?php 
/*-----------------------------------------------------------------------------------
 メニューに「更新マニュアル」を追加
-----------------------------------------------------------------------------------*/
function admin_top_setting_menu() {
	add_menu_page( '更新マニュアル', '更新マニュアル', 'edit_posts', 'manual','', '', 3 );
}
add_action('admin_menu', 'admin_top_setting_menu', 1000);

	
function admin_manual_link() {
?><script>
	jQuery(function($){
		var menu_slug = 'manual';
		$('a.toplevel_page_' + menu_slug).prop({
			href: "<?php echo home_url(); ?>/wordpress/manual/", //マニュアルのURLを変更するときはここを修正
			target:'_blank'
		});
	});
</script><?php
}
add_action('admin_print_footer_scripts', 'admin_manual_link');


/*-----------------------------------------------------------------------------------
 投稿の記事一覧ページのURLを取得
-----------------------------------------------------------------------------------*/
function get_allpost_page_link() {
	$allpost_page = 'posts'; //記事一覧ページのスラッグ
	return get_permalink( get_page_by_path($allpost_page)->ID );
}
/*
//お問い合わせと送信完了（固定ページ）のスラッグをセットする
$contact = 'contact';
$thanks = 'thanks';

//お問い合わせフォームの送信後にサンクスページへ飛ばす
add_action( 'wp_footer', 'redirect_thanks_page' );
function redirect_thanks_page() {
  if( is_page('contact')) {
  ?>
  <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      var inputs = event.detail.inputs;
      for ( var i = 0; i < inputs.length; i++ ) {
          if ( 'type' == inputs[i].name ) {
            if(inputs[i].value == '個人') {
              var type = 'kojin';
            }
            else if(inputs[i].value == '法人') {
              var type = 'hojin';
            }
            
          }
        
      }
      location = '<?php echo home_url('/contact/thanks?type='); ?>'+type; // 遷移先のURL
    }, false );
  </script>
  <?php }
    if( is_page('catalog')) {
  ?>
  <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      location = '<?php echo home_url('/catalog/thanks'); ?>'; // 遷移先のURL
    }, false );
  </script>
  <?php }
}
*/

/*---------------------------------------------------------------------
BASIC認証
---------------------------------------------------------------------*/
/*
function basic_auth($auth_list,$realm="Restricted Area",$failed_text="認証に失敗しました"){
if (isset($_SERVER['PHP_AUTH_USER']) and isset($auth_list[$_SERVER['PHP_AUTH_USER']])){
if ($auth_list[$_SERVER['PHP_AUTH_USER']] == $_SERVER['PHP_AUTH_PW']){
return $_SERVER['PHP_AUTH_USER'];
}
}
header('WWW-Authenticate: Basic realm="'.$realm.'"');
header('HTTP/1.0 401 Unauthorized');
header('Content-type: text/html; charset='.mb_internal_encoding());
die($failed_text);
}
*/