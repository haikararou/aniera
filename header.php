<?php
/*
 * ヘッダーテンプレート
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-61806186-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-61806186-1');
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="<?php print_description(); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/common/img/favicon.ico">
<?php wp_head(); ?>

<?php if(is_page('purchase') || is_page('identification') || is_page('faq') || is_page('reduced-list') || is_page('shipping') || is_page('packing') || is_page('kaitori-guide')): ?>
<link rel='stylesheet' id='theme-common-css' href='https://classic.aniera.jp/wp-content/themes/aniera/common/css/lp.css?ver=5.8.1' type='text/css' media='all' />
<?php endif; ?>

<?php if(is_page('purchase')): ?>
<link rel='stylesheet' id='theme-common-css' href='https://classic.aniera.jp/wp-content/themes/aniera/common/css/lp2_000.css?ver=5.8.1' type='text/css' media='all' />
<?php endif; ?>

</head>

<?php get_template_part('inc/svg'); ?>

<body <?php if(is_home() || is_front_page()): ?>id="home"<?php elseif(is_page('about')): ?>id="about"<?php elseif(is_post_type_archive('blog') || is_tax('blog_cat') || is_singular('blog')): ?>id="blog"<?php elseif(is_post_type_archive('store') || is_tax('store_cat') || is_singular('store') || is_page('agreement') || is_tag()): ?>id="store"<?php elseif(is_page('privacy')): ?>id="privacy"<?php elseif(is_page('tradelaw')): ?>id="tradelaw"<?php elseif(is_page('contact')): ?>id="contact"<?php endif; ?> class="preload<?php if(!is_home() || !is_front_page()): ?> index<?php endif; ?><?php if(is_singular('store')): ?> entry<?php endif; ?>">
<div id="top-link"></div>

<?php get_template_part('inc/menu'); ?>


