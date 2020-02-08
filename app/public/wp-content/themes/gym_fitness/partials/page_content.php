<?php while(have_posts()):the_post(); ?>

  <h1 class="text-center"><?php the_title(); ?></h1>

  <?php
    if(has_post_thumbnail()):
      the_post_thumbnail('blog', array('class' => 'featured-image'));
    endif;
  ?>

  <?php
    if(get_post_type() === 'workouts_post_type') {
        $start_hour = get_field('start_hour');
        $end_hour = get_field('end_hour');
  ?>
        <p class="workout-info"> <?php the_field('workout_days'); ?> - <?php echo $start_hour." to ".$end_hour ?></p>
  <?php
    }
  ?>

  <p><?php the_content(); ?></p>

<?php endwhile; ?>
