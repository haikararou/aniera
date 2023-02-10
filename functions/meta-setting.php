<?php
/*---------------------------------------------------------
タイトル出力設定
-----------------------------------------------------------*/
//titleタグの出力
//機能をOFFにしたい場合は、以下をコメントアウトしてください。
add_theme_support( 'title-tag' );


/*---------------------------------------------------------
titleタグのカスタマイズ
-----------------------------------------------------------*/
//タイトルからキャッチフレーズを削除する
/*
function remove_tagline($title) {
  if ( isset($title['tagline']) ) {
    unset( $title['tagline'] );
  }
  return $title;
}
add_filter( 'document_title_parts', 'remove_tagline' );
*/

//セパレータを任意のものに変更する。
function custom_title_separator($sep) {
  $sep = '|';
  return $sep;
}
add_filter( 'document_title_separator', 'custom_title_separator' );


/*meta title以外は、サイト名等の情報を表示しない*/
function edit_document_title($title){
	if(!doing_action('wp_head')){
		$title['tagline'] = '';
		$title['page'] = '';
		$title['site'] = '';
	}
	return $title;
}
 
add_filter('document_title_parts','edit_document_title');



/*---------------------------------------------------------
descriptionを出力
-----------------------------------------------------------*/
function print_description() {
  global $post;
	if (is_single()) ://記事ページ
    setup_postdata($post);
		echo get_custom_excerpt(get_the_excerpt(''), 70);
	elseif (is_page()) : //固定ページ
    if(is_page('smokeless-wood-stove')) {
      echo 'ディスクリプション';
    }
    else if(is_page('faq')) {
      echo 'ディスクリプション';
    }
    else {
      echo get_custom_excerpt(get_the_excerpt(''), 70);
    }
	elseif ( is_home() || is_front_page()) : //トップページ
		echo 'ディスクリプション';
	else ://その他
		if ( is_tag() ) ://タグページ
			echo (get_queried_object()->name).' | ';
		elseif ( is_category() ) ://カテゴリーページ
			$cat = get_queried_object();
			echo $cat->name.' | ';
            bloginfo('description');
		
		elseif (is_tax() ) : /*カスタムタクソノミーのアーカイブ*/
			$taxonomy = get_query_var('taxonomy');
			$posttype_name = get_taxonomy($taxonomy)->object_type[0];
			$posttype_label = esc_html(get_post_type_object($posttype_name)->label);
			echo single_tag_title().' | '.$posttype_label.' | ';
     bloginfo('description');
		elseif ( is_archive() ) :
      if(is_post_type_archive('agency')) {
        echo 'ディスクリプション';
      }
      if(is_post_type_archive('case')) {
        echo 'ディスクリプション';
      }
      else {
            $posttype_name = get_query_var('post_type');
            $posttype_label = esc_html(get_post_type_object($posttype_name)->label);
            echo $posttype_label.' | ';
            bloginfo('description');
      }
		else :
		endif;
	endif;
	}
	
	
/*---------------------------------------------------------
現在のページのURLを出力(OGP設定用)
-----------------------------------------------------------*/
	function print_url() {
    echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	} 
/*---------------------------------------------------------
タイトル出力を出力(OGP設定用)
-----------------------------------------------------------*/
	function print_ogp_title() {
		echo wp_get_document_title();
		if(!is_home()) { 
			echo ' | ';
			echo bloginfo('name');
		}
		echo ' | ';
		echo  bloginfo('description');
	}
	
/*-----------------------------------------------------------------------------------
OGP画像のURLを取得
投稿・カスタム投稿の記事ページ、固定ページはアイキャッチ画像を使用
その他のページ、アイキャッチがない場合はデフォルトのOGP画像を使用する
-----------------------------------------------------------------------------------*/
function get_ogpimg_url() {
	$ogp_url = '';
  if ((is_single() || is_page()) && has_post_thumbnail() ){
	  $ogp_url =  wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
		$ogp_url =  $ogp_url[0];
	}
	else { 
  	$ogp_url = get_template_directory_uri().'/common/img/ogp.jpg';
	}
	return $ogp_url;

}
