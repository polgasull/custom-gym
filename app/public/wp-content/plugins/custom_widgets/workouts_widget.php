<?php

  /*
    Plugin Name: Custom workouts - Widgets
    Plugin URI:
    Description: Add Widget to the site
    Version: 1.0.0
    Author: Pol Gasull Navarro
    Author URI:
    Text Domain: gymfitness
  */

if(!defined('ABSPATH')) die();

/**
 * Adds Foo_Widget widget.
 */
class custom_workouts_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Custom workouts', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Add workouts as widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
    $quantity = $instance['quantity'];
    if ($quantity == '') {
      $quantity = 3;
    }
		?>
      <ul>
        <?php $args = array(
          'post_type' => 'workouts_post_type',
          'post_per_page' => $quantity
        );
        $workouts = new WP_Query($args);
        while($workouts->have_posts()): $workouts->the_post();
        ?>
        <li class="workouts-sidebar">
          <div class="image">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
          <div class="workout-content">
            <a href="<?php the_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
            </a>
            <?php
              $start_hour = get_field('start_hour');
              $end_hour = get_field('end_hour');
            ?>
            <p> <?php the_field('workout_days'); ?> - <?php echo $start_hour." to ".$end_hour ?></p>
          </div>
        </li>
      <?php endwhile; wp_reset_postdata();?>
      </ul>

    <?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	  $quantity = !empty($instance['quantity']) ? $instance['quantity'] : esc_html__('How many workouts want to show?', 'gymfitness'); ?>

    <p>
      <label for="<?php echo esc_attr($this->get_field_id('quantity')) ?>">
        <?php esc_attr_e('How many workouts want to show?', 'gymfitness'); ?>
      </label>
      <input
        class="widefat"
        id="<?php echo esc_attr($this->get_field_id('quantity')) ?>"
        name="<?php echo esc_attr($this->get_field_name('quantity')) ?>"
        type="number"
        value="<?php echo esc_attr($quantity) ?>"
      >
    </p>
    <?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['quantity'] = ( ! empty( $new_instance['quantity'] ) ) ? sanitize_text_field( $new_instance['quantity'] ) : '';

		return $instance;
	}

}

function register_workouts_widget() {
    register_widget( 'custom_workouts_widget' );
}
add_action( 'widgets_init', 'register_workouts_widget' );
