<?php

/*
*
- head内を整理する -
*
*/

// 絵文字（Emoji and Smily）用のJSとCSSを削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Embed（https://api.w.org/）を削除
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

// WordPressバージョン情報の削除
remove_action('wp_head', 'wp_generator');

// EditURIを削除
remove_action('wp_head', 'rsd_link');

// wlwmanifestを削除
remove_action('wp_head', 'wlwmanifest_link');

//shortlink削除
remove_action('wp_head', 'wp_shortlink_wp_head');

//Gutenberg用CSSを削除
if (!function_exists('remove_block_library_style')) :
  function remove_block_library_style()
  {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
  }
  add_action('wp_enqueue_scripts', 'remove_block_library_style');
endif;

// editor-style.css がキャッシュされて変更が反映しない
if (!function_exists('extend_tiny_mce_before_init')) :
  function extend_tiny_mce_before_init($mce_init)
  {
    $mce_init['cache_suffix'] = 'v=' . time();
    return $mce_init;
  }
  add_filter('tiny_mce_before_init', 'extend_tiny_mce_before_init');
endif;

// global-styles-inline-cssを削除
if (!function_exists('remove_my_global_styles')) :
  function remove_my_global_styles()
  {
    wp_dequeue_style('global-styles');
  }
  add_action('wp_enqueue_scripts', 'remove_my_global_styles');
endif;

//editor style
add_editor_style("editor-style.css");
add_theme_support("editor-styles");

// コメントフィードを削除
if (!function_exists('comment_feed_remove')) :
  function comment_feed_remove()
  {
    if (is_comment_feed()) {
      remove_action('do_feed_rdf', 'do_feed_rdf');
      remove_action('do_feed_rss', 'do_feed_rss');
      remove_action('do_feed_rss2', 'do_feed_rss2');
      remove_action('do_feed_atom', 'do_feed_atom');
    }
  }
  add_action('parse_query', 'comment_feed_remove');
  //コメントフィードURLを削除
  add_filter('feed_links_show_comments_feed', '__return_false');
  //記事ごとのコメントフィードURLを削除
  add_filter('post_comments_feed_link', '__return_false');
endif;

// DNSプリフェッチ用コードを削除
if (!function_exists('remove_dns_prefetch')) :
  function remove_dns_prefetch($hints, $relation_type)
  {
    if ('dns-prefetch' === $relation_type) {
      return array_diff(wp_dependencies_unique_hosts(), $hints);
    }
    return $hints;
  }
  add_filter('wp_resource_hints', 'remove_dns_prefetch', 10, 2);
endif;

// jqueryを読み込ませない
// if (!function_exists('my_delete_local_jquery')) :
//   function my_delete_local_jquery()
//   {
//     wp_deregister_script('jquery');
//   }
//   add_action('wp_enqueue_scripts', 'my_delete_local_jquery');
// endif;



/*
*
- 画像関連 -
*
*/

// 画像の自動生成停止
if (!function_exists('disable_image_sizes')) :
  function disable_image_sizes($new_sizes)
  {
    unset($new_sizes['thumbnail']);
    unset($new_sizes['medium']);
    unset($new_sizes['large']);
    unset($new_sizes['medium_large']);
    unset($new_sizes['1536x1536']);
    unset($new_sizes['2048x2048']);
    return $new_sizes;
  }
  add_filter('intermediate_image_sizes_advanced', 'disable_image_sizes');
  add_filter('big_image_size_threshold', '__return_false');
endif;


// 自動生成追加
// add_image_size('original-1', 1280, 640, array('center', 'center'));
// add_image_size('original-2', 360, 360, array('center', 'center'));
// add_image_size('original-3', 800, 240, array('center', 'center'));
// add_image_size('original-4', 1280, 640, array('center', 'center'));

// アイキャッチ画像を有効化
if (!function_exists('twpp_setup_theme')) :
  function twpp_setup_theme()
  {
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size(1540, 940, true);
  }
  add_action('after_setup_theme', 'twpp_setup_theme');
endif;

// アイキャッチ画像の出力URLをsrc→src-dataに置き換える
if (!function_exists('my_post_image_html')) :
  function my_post_image_html($html, $post_id, $post_image_id)
  {
    //遅延読み込み対象の画像のみ
    if (strpos($html, 'js-inview-load') === false) {
      return $html;
    }

    //srcをdata-srcに置換する
    $html = str_replace('src="', 'data-src="', $html);
    return $html;
  }
  add_filter('post_thumbnail_html', 'my_post_image_html', 10, 3);
endif;

/* WordPress 5.5のlazy-loading『loading="lazy"』挿入の無効化 */
add_filter('wp_lazy_loading_enabled', '__return_false');



/*
*
- メニュー関連 -
*
*/

// カスタムメニュー
// function register_my_menus()
// {
//   register_nav_menus(array(
//     'h-menu' => 'ヘッダーナビ',
//     'g-menu' => 'グローバルナビ',
//     'f-menu'  => 'フッターナビ',
//   ));
// }
// add_action('after_setup_theme', 'register_my_menus');



// liに付与されるクラスを削除
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);

// function my_css_attributes_filter($var)
// {
//   return is_array($var) ? array_intersect($var, array('gnav__lists', 'page__flex', 'gnav__list', 'gnav__cnt', 'g-nav__nav-sub-item', 'page__flex-box')) : '';
// }



/*
*
- 投稿一覧 -
*
*/

// 固定ページ一覧にスラッグを追加
// src:https://mets-lab.com/mainloop_query_set/
if (!function_exists('add_page_column_title')) :
  function add_page_column_title($columns)
  {
    $columns['slug'] = "スラッグ";
    return $columns;
  }
  add_filter('manage_pages_columns', 'add_page_column_title');
endif;

if (!function_exists('add_page_column')) :
  function add_page_column($column_name, $post_id)
  {
    if ($column_name == 'slug') {
      $post = get_post($post_id);
      $slug = $post->post_name;
      echo esc_attr($slug);
    }
  }
  add_action('manage_pages_custom_column', 'add_page_column', 10, 2);
endif;

// 表示件数を変更
if (!function_exists('pickup_sort')) :
  function pickup_sort($query)
  {
    //管理画面は除外
    if (is_admin() || !$query->is_main_query()) {
      return;
    }
    if ($query->is_tax('work_category')) {
      $query->set('posts_per_page', -1);
    } elseif ($query->is_post_type_archive('works')) {
      $query->set('posts_per_page', -1);
    }
  }
  add_action('pre_get_posts', 'pickup_sort');
endif;





/*
*
- 投稿 -
*
*/

//カテゴリーをラジオボタンに変更する
if (!function_exists('my_print_footer_scripts')) :
  function my_print_footer_scripts()
  {
    echo '<script type="text/javascript">
  //<![CDATA[
  jQuery(document).ready(function($){
    $(".categorychecklist input[type=checkbox]").each(function(){
      $check = $(this);
      var checked = $check.attr("checked") ? \' checked="checked"\' : \'\';
      $(\'<input type="radio" id="\' + $check.attr("id")
        + \'" name="\' + $check.attr("name") + \'"\'
    + checked
    + \' value="\' + $check.val()
    + \'"/>\'
      ).insertBefore($check);
      $check.remove();
    });
  });
  //]]>
  </script>';
  }
  add_action('admin_print_footer_scripts', 'my_print_footer_scripts', 21);
endif;

// 投稿のYoutube、iframeをdivで囲む
if (!function_exists('iframe_in_div')) :
  function iframe_in_div($the_content)
  {
    if (is_singular()) {
      $the_content = preg_replace('/<iframe/i', '<div class="youtube"><iframe', $the_content);
      $the_content = preg_replace('/<\/iframe>/i', '</iframe></div>', $the_content);
    }
    return $the_content;
  }
  add_filter('the_content', 'iframe_in_div');
endif;

// エディタ切り替えによるレイアウト崩れ帽子
if (!function_exists('tinymce_init')) :
  function tinymce_init($init)
  {
    $init['verify_html'] = false; // 空タグや属性なしのタグを消させない
    $initArray['valid_children'] = '+body[style], +div[div|span|a], +span[span]'; // 指定の子要素を消させない
    return $init;
  }
  add_filter('tiny_mce_before_init', 'tinymce_init', 100);
endif;

// 管理画面のスタイル
if (!function_exists('custom_admin_enqueue')) :
  function custom_admin_enqueue()
  {
    wp_enqueue_style('custom_admin_enqueue', get_template_directory_uri() . '/admin-style.css');
  }
  add_action('admin_enqueue_scripts', 'custom_admin_enqueue');
endif;

// TinyMCE Advancedのフォントサイズ変更
if (!function_exists('tinymce_custom_fonts')) :
  function tinymce_custom_fonts($setting)
  {
    $setting['fontsize_formats'] = "10px=1rem 12px=1.2rem 14px=1.4rem 16px=1.6rem 18px=1.8rem 20px=2rem 24px=2.4rem 36px=3.6rem";
    return $setting;
  }
  add_filter('tiny_mce_before_init', 'tinymce_custom_fonts', 5);
endif;

// カスタムタクソノミーアーカイブ（taxonomy-○○.php）ではデフォルトの日付順に表示されてしまう
if (!function_exists('sort_order')) :

  function sort_order($query)
  {
    if (is_admin() || !$query->is_main_query()) {
      return;
    }
    if ($query->is_tax('work_category')) {
      $query->set('orderby', 'menu_order');
      $query->set('order', 'ASC');
    }
  }
  add_action('pre_get_posts', 'sort_order');

endif;




// 固定ページのエディタを非表示に

if (!function_exists('post_output_css')) :

  function post_output_css()
  {
    $pt = get_post_type();
    if ($pt == 'page') {
      $hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
      echo $hide_postdiv_css;
    }
  }
  add_action('admin_head', 'post_output_css');

endif;







/*
*
- カスタム投稿 -
*
*/

// 「プレビュー」ボタンの非表示化
if (function_exists('admin_preview_css_custom')) {

  function admin_preview_css_custom()
  {
    $current_screen = get_current_screen();
    if (isset($current_screen) && ($current_screen->post_type === 'company' ||
      $current_screen->post_type === 'office'
    )) {
      $style = '<style>#preview-action {display: none;}</style>';
      echo $style;
    }
  }
  add_action('admin_print_styles', 'admin_preview_css_custom');
}

/*ACF・オプションページ の設定 */
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title' => 'Theme General Settings', // ページタイトル
    'menu_title' => 'Theme Settings', // メニュータイトル
    'menu_slug' => 'theme-general-settings', // メニュースラッグ
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}
