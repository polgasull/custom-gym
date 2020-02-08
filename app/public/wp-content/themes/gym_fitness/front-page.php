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

<?php get_footer(); ?>