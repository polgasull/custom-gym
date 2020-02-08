<?php get_header(); ?>
  <main class="container page section without-sidebar">
    <?php $category = get_queried_object(); ?>
    <h3 class="text-center"> <?php echo $category->name; ?></h3>
    <ul class="blog-list">
      <?php
        get_template_part('partials/loop_blog');
      ?>
    </ul>
  </main>
<?php get_footer(); ?>
