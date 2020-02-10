<?php get_header(); ?>
  <main class="container page section without-sidebar">
    <ul class="blog-list">
      <?php while(have_posts()): the_post(); ?>
        <?php get_template_part('partials/loop_blog', 'blog'); ?>
      <?php endwhile; ?>
    </ul>
  </main>
<?php get_footer(); ?>
