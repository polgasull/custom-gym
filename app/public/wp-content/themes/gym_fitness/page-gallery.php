<?php

/*
Template Name: Gallery template
*/

get_header(); ?>

<div class='container page section'>
  <div class="main-content">
    <?php while(have_posts()):the_post(); ?>

      <h1 class="text-center"><?php the_title(); ?></h1>

      <?php
        $gallery = get_post_gallery(get_the_ID(), false);
        $gallery_images_ID = explode(',', $gallery['ids']);
      ?>

      <ul class="images-gallery">
        <?php
          $i = 1;
          foreach($gallery_images_ID as $id):
            $size = ($i == 4 || $i == 6) ? 'portrait' : 'square';
            $imageThumb = wp_get_attachment_image_src($id, $size)[0];
            $image = wp_get_attachment_image_src($id, 'full')[0];
        ?>
        <li>
          <a href="<?php echo $image; ?>" data-lightbox='gallery'>
            <img src="<?php echo $imageThumb ?>" alt="image">
          </a>
        </li>
        <?php $i++; endforeach; ?>
      </ul>

    <?php endwhile; ?>

  </div>
</div>

<?php get_footer(); ?>
