<?php get_header(); ?>
  <main class="container page section without-sidebar">
    <ul class="blog-list">
      <?php
        get_template_part('partials/loop_blog');
      ?>
    </ul>
  </main>
<?php get_footer(); ?>
