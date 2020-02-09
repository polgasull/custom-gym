<?php get_header('front') ?>

<section class="welcome text-center section">
  <h2><?php the_field('welcome_header'); ?></h2>
  <p><?php the_field('welcome_text') ?></p>
</section>

<div class="section-areas">
  <ul class="area-container">
    <li class="area">
      <?php 
        $area1 = get_field('area_1');
        $image = wp_get_attachment_image_src($area1['area_image'], 'medium-size')[0];
      ?>
      <img src="<?php echo esc_attr($image); ?>">
      <p><?php echo esc_html($area1['area_text']); ?></p>
    </li>
    <li class="area">
      <?php 
        $area2 = get_field('area_2');
        $image = wp_get_attachment_image_src($area2['area_image'], 'medium-size')[0];
      ?>
      <img src="<?php echo esc_attr($image); ?>">
      <p><?php echo esc_html($area2['area_text']); ?></p>
    </li>
    <li class="area">
      <?php 
        $area3 = get_field('area_3');
        $image = wp_get_attachment_image_src($area3['area_image'], 'medium-size')[0];
      ?>
      <img src="<?php echo esc_attr($image); ?>">
      <p><?php echo esc_html($area3['area_text']); ?></p>
    </li>
    <li class="area">
      <?php 
        $area4 = get_field('area_4');
        $image = wp_get_attachment_image_src($area4['area_image'], 'medium-size')[0];
      ?>
      <img src="<?php echo esc_attr($image); ?>">
      <p><?php echo esc_html($area4['area_text']); ?></p>
    </li>
  </ul>
</div>

<section class="workouts">
  <div class="container section">
    <h2 class="text-center">Workouts</h2>
    <?php workouts_list(4); ?>
    <div class="button-container">
      <a href="<?php echo esc_url(get_permalink(get_page_by_title('Workouts'))); ?>"
        class="button primary-button">
        Go to Workouts
      </a>
    </div>
  </div>
</section>

<section class="coaches">
  <div class="container section">
    <h2 class="text-center">Our coaches</h2>
    <p class="text-center">Professional coaches to achieve your objectives</p>
    <ul class="coaches-list">
      <?php
        $args = array(
          'post_type' => 'coaches_post_type',
          'posts_per_page' => 30
        );
        $coahes = new WP_Query($args);
        while($coahes->have_posts()): $coahes->the_post();
      ?>
      <li class="coach">
        <?php the_post_thumbnail('medium_size') ?>
        <div class="content text-center">
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
          <div class="speciality">
            <?php 
              $specialties = get_field('specialties');
              foreach($specialties as $specialty): ?>
                <span class="tag"> <?php echo esc_html($specialty); ?></span>
              <?php endforeach; ?>
          </div>
        </div>
      </li>

      <?php endwhile; wp_reset_postdata(); ?>
    </ul>
  </div>
</section>

<section class="reviews">
  <h2 class="text-center white-text">Reviews</h2>
  <div class="reviews-container">
    <ul class="reviews-list">
      <?php 
        $args = array(
          'post_type' => 'reviews_post_type',
          'posts_per_page' => 10
        );
        $reviews = new WP_Query($args);
        while($reviews->have_posts()): $reviews->the_post();
      ?>
      <li class="review text-center">
        <blockquote>
          <?php the_content(); ?>
        </blockquote>
        <footer class="review-footer">
          <?php the_post_thumbnail('thumbnail'); ?>
          <p><?php the_title(); ?></p>
        </footer>
      </li>
      <?php endwhile; wp_reset_postdata(); ?>
    </ul>
  </div>
</section>

<?php get_footer(); ?>