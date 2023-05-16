<h1><?php the_search_query(); ?> の検索結果</h1>

<?php
if (have_posts() && get_search_query()) :
  while (have_posts()) :
    the_post();
    get_template_part('template-parts/post/content', 'excerpt');
  endwhile;
?>

<?php else : ?>
  <div class="col-full">
    <div class="wrap-col">
      <p>検索キーワードに該当する記事がありませんでした。</p>
    </div>
  </div>
<?php endif; ?>