<?php

  function workouts_list($quantity = -1) { ?>
    <ul class="workouts-list">
      <?php
        $args = array(
          'post_type' => 'workouts_post_type',
          'posts_per_page' => $quantity,
          'orderby' => 'title',
          'order' => 'ASC'
        );
        $workouts = new WP_Query($args);
        while($workouts->have_posts()): $workouts->the_post();
      ?>

      <li class="workout-item card gradient">
        <?php the_post_thumbnail('medium-size') ?>
        <div class="content">
          <a href="<?php the_permalink(); ?>">
            <h3> <?php the_title(); ?> </h3>
          </a>
          <?php
            $start_hour = get_field('start_hour');
            $end_hour = get_field('end_hour');
          ?>
          <p> <?php the_field('workout_days'); ?> - <?php echo $start_hour." to ".$end_hour ?></p>
        </div>
      </li>

      <?php endwhile; wp_reset_postdata(); ?>

    </ul>

  <?php
  }
