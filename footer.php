</div>
<!-- js-push -->

<footer class="footer page__footer">
</footer>

<div id="js-off-canvas" class="off-canvas">
</div>

<? // php get_template_part('block/block-js-menu'); 
?>

</div>
<script src='<?php echo get_template_directory_uri(); ?>/assets/dist/js/main.js?<?php print date('Ymd', filemtime(get_template_directory() . "/assets/dist/js/main.js")); ?>'></script>
<?php wp_footer(); ?>
</body>

</html>