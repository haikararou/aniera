<?php
/* ---------------------------------------------------------------------
テーマでアイキャッチ機能を有効化
-------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );
/* ---------------------------------------------------------------------
ビジュアルエディタ内のテキストにCSSを適用
適用するときは、以下のコメントアウトを外してください。
この例は、テーマフォルダ内の/css/editor-style.cssに
ビジュアルエディタ用のCSSを記述し、読み込んでいます。
-------------------------------------------------------------------------*/
//add_editor_style(get_template_directory_uri().'/common/css/editor-style.css' );
/* ---------------------------------------------------------------------
正しいURLを入力しないとログイン画面を表示しないようにする
-------------------------------------------------------------------------*/
remove_action( 'template_redirect', 'wp_redirect_admin_locations', 1000 );
/* ---------------------------------------------------------------------
CSS・JSを登録する
-------------------------------------------------------------------------*/
function register_files() {
	wp_register_style( 'theme-common', get_template_directory_uri().'/common/css/import.css' );
	wp_register_style( 'picturefill', get_template_directory_uri().'/common/js/picturefill.js' );
	wp_register_style( 'stylemin', '/wp-includes/css/dist/block-library/style.min.css' );
	//wp_register_style( 'icon-fonts', get_template_directory_uri().'/css/font.css' );
	//wp_register_style( 'theme-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:700|Noto+Sans+JP:400,500,700&display=swap');
	wp_register_style( 'theme-google-fonts', 'https://fonts.googleapis.com/css2?family=family=Montserrat:100,200,300,400,500,600,700,800,900|Noto+Sans+JP:100,300,400,500,700,900|Didact+Gothic|Roboto:300,400,500,700&display=swap');
	//wp_register_style( 'swiper-css','https://unpkg.com/swiper/swiper-bundle.min.css' );
	//wp_register_style( 'popup-style', get_template_directory_uri().'/common/css/magnific-popup.css' );
	//wp_register_style( 'scroll-css','https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css' );
	//wp_register_style( 'fullpage-css', get_template_directory_uri().'/css/fullpage.min.css' );
	//wp_register_style( 'theme-construction', get_template_directory_uri().'/css/construction.css' );
	//wp_register_style( 'theme-style', get_template_directory_uri().'/css/style.css' );
	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	//wp_enqueue_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );
	//wp_register_script( 'popup-js', get_template_directory_uri() . '/common/js/jquery.magnific-popup.min.js', array(), null, true);
	//wp_register_script( 'swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
	//wp_register_script( 'scroll-js', 'https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js', array(), null, true);
	//wp_register_script( 'fullpage-js', get_template_directory_uri() . '/js/fullpage.min.js', array(), null, true);
	// wp_register_script( 'mousestalker', get_template_directory_uri() . '/common/js/mousestalker.js', array(), null, true);
	wp_register_script( 'mousestalker', get_template_directory_uri() . '/common/js/mousestalker.js', array(), null, true);
	wp_register_script( 'config', get_template_directory_uri() . '/common/js/config.js', array(), null, true);
	wp_register_script( 'lp', get_template_directory_uri() . '/common/js/lp.js', array(), null, true);
	wp_register_script( 'comma3', get_template_directory_uri() . '/common/js/comma3.js', array(), null, true);
	wp_register_script( 'easing', get_template_directory_uri() . '/common/js/jquery.easing.1.3.js', array(), null, true);
	wp_register_script( 'animation', get_template_directory_uri() . '/common/js/animation.gsap.min.js', array(), null, true);
	wp_register_script( 'TweenMax', get_template_directory_uri() . '/common/js/TweenMax.min.js', array(), null, true);
	wp_register_style( 'swiper-css', get_template_directory_uri().'/common/css/swiper.min.css' );
	wp_register_script( 'swiper-js', get_template_directory_uri() . '/common/js/swiper.min.js', array(), null, true);
}
function my_enqueue_files() {
	register_files();
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_enqueue_style( 'theme-common' );
	wp_enqueue_style( 'picturefill' );
	wp_enqueue_style( 'stylemin' );
	//wp_enqueue_style( 'icon-fonts' );
	//wp_enqueue_style( 'theme-google-fonts' );
	//wp_enqueue_style( 'swiper-css' );
	//wp_enqueue_style( 'popup-style' );
	//wp_enqueue_style( 'scroll-css' );
	//wp_enqueue_style( 'theme-construction' );
	//wp_enqueue_style( 'theme-style' );
	//wp_enqueue_script( 'popup-js' );
	//wp_enqueue_script( 'swiper-js' );
	//wp_enqueue_script( 'scroll-js' );
	wp_enqueue_script( 'mousestalker' );
	wp_enqueue_script( 'config' );
	wp_enqueue_script( 'lp' );
	wp_enqueue_script( 'comma3' );
	wp_enqueue_script( 'easing' );
	wp_enqueue_script( 'animation' );
	wp_enqueue_script( 'TweenMax' );
	wp_enqueue_style( 'swiper-css' );
	wp_enqueue_script( 'swiper-js' );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_files' );
/* ---------------------------------------------------------------------
その他の機能
-------------------------------------------------------------------------*/
/*初期設定*/
include_once( get_template_directory().'/functions/initial-setting.php' );
/*メタタグ類の設定*/
include_once( get_template_directory().'/functions/meta-setting.php' );
/*カスタム投稿タイプを追加*/
//include_once( get_template_directory().'/functions/custompost.php' );
/*便利な関数*/
include_once( get_template_directory().'/functions/utility.php' );
/*ダッシュボードのカスタマイズ*/
include_once( get_template_directory().'/functions/dashboard.php' );
function my_bizcalendar_options() {
    return 'edit_pages';
}
add_filter( 'option_page_capability_bizcalendar_options', 'my_bizcalendar_options' );
//include_once( get_template_directory().'/functions/eventdate.php' );
//include_once( get_template_directory().'/functions/multidatepicker.php' );
/*ContactForm7 複数チェックボックスを必須*/
/*
function wpcf7_validate_customize( $result, $tags ) {
	$form = WPCF7_Submission::get_instance();
	$posted_datas = $form->get_posted_data();
	$names = array( 'catalog001', 'catalog002', 'catalog003', 'catalog004', 'catalog005','catalog006', 'catalog007', 'catalog008', 'catalog101', 'catalog102', 'catalog103' );
	$counter = 0;
	foreach ( $names as $name ) {
		if ( ! empty( $posted_datas[$name][0] ) ) $counter++;
	}
	if ( $counter < 1 ) {
		$result->invalidate( 'catalog103', '1 個以上選択してください。' );
	}
	return $result;
}
add_filter( 'wpcf7_validate', 'wpcf7_validate_customize', 11, 2 );
*/
/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
	} elseif (is_tax()) {
	    $title = single_term_title('',false);
	} elseif (is_post_type_archive() ){
		$title = post_type_archive_title('',false);
	} elseif (is_date()) {
	    $title = get_the_time('Y年n月');
	} elseif (is_search()) {
	    $title = '検索結果：'.esc_html( get_search_query(false) );
	} elseif (is_404()) {
	    $title = '「404」ページが見つかりません';
	} else {
	}
    return $title;
});
//検索結果にカスタム投稿タイプの記事も含める
/*
function filter_search( $query ) {
	if ( $query->is_search() && $query->is_main_query() && ! is_admin() ) {
		$query->set( 'post_type', array( 'post', 'page', 'blog', 'store' ) );
	}
}
add_filter( 'pre_get_posts', 'filter_search' );
*/
//カスタム投稿用post_typeセット
add_filter('template_include','custom_search_template');
function custom_search_template($template){
  if ( is_search() ){
    $post_types = get_query_var('post_type');
    foreach ( (array) $post_types as $post_type )
      $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search',$templates);
  }
  return $template;
}
//Advanced Custom Fields PRO オプションページ追加
// if( function_exists('acf_add_options_page') ) {
// 	acf_add_options_page();
//   }
//WPタグのアーカイブページ（tag.php）にカスタム投稿タイプも表示させる
function add_post_tag_archive( $wp_query ) {
if ($wp_query->is_main_query() && $wp_query->is_tag()) {
	$wp_query->set( 'post_type', array('post','store'));
}
}
add_action( 'pre_get_posts', 'add_post_tag_archive' , 10 , 1);
/*--feedのテンプレートをカスタマイズ----------------------------------------------*/
remove_filter('do_feed_rss2', 'do_feed_rss2', 10);
function custom_feed_rss2(){
	$template_file = '/feed-rss2.php';
	load_template(get_template_directory() . $template_file);
}
add_action('do_feed_rss2', 'custom_feed_rss2', 10);
?>