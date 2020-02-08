<?php get_header(); ?>

<div class='container page section without-sidebar'>
  <div class="main-content text-center">
    <?php
      get_template_part('partials/page_content');
    ?>
    <?php
      workouts_list();
    ?>
  </div> 
</div>

<?php get_footer(); ?>