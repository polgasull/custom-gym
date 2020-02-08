<?php 

/*

  Template Name: Centered content without sidebar

*/

?>

<?php get_header(); ?>

<div class='container page section without-sidebar'>
  <div class="main-content">
    <?php
      get_template_part('partials/page_content');
    ?>
  </div> 
</div>

<?php get_footer(); ?>