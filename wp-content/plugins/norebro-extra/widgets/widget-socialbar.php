<?php

if ( ! class_exists( 'norebro_widget_socialbar' ) ) {

	class norebro_widget_socialbar extends WP_Widget {

		function __construct() {
			parent::__construct(
				'norebro_widget_socialbar',
				'Norebro: ' . esc_html__( 'Socialbar share', 'norebro-extra' ),
				array( 'description' => esc_html__( 'Social share buttons', 'norebro-extra' ) )
			);
		}

		/**
		 * @param array $args
		 * @param array $instance
		 */
		function widget( $args, $instance ) {
			extract( $args );
			$title = $instance['title'];
			$facebook = $instance['facebook'];
			$twitter = $instance['twitter'];
			$pinterest = $instance['pinterest'];
			$linkedin = $instance['linkedin'];

			$allowed_tags = array(
				'section' => array(
					'id' => array(),
					'class' => array()
				),
				'li' => array(
					'id' => array(),
					'class' => array()
				),
				'div' => array(
					'id' => array(),
					'class' => array()
				),
				'h3' => array(
					'class' => array()
				)
			);

			global $post;
			
			echo wp_kses( $before_widget, $allowed_tags );

			if ( ! empty( $title ) ) {
				echo wp_kses( $before_title . esc_html( $title ) . $after_title, $allowed_tags );
			}
			?>
			<div class="socialbar small">
				<?php if ( $facebook ) : ?>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" class="social outline rounded">
						<span class="fab fa-facebook"></span>
					</a>
				<?php endif; ?>

				<?php if ( $twitter ) : ?>
					<a href="https://twitter.com/intent/tweet?text=<?php echo urlencode( $post->post_title ); ?>,+<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" class="social outline rounded">
						<span class="fab fa-x-twitter"></span>
					</a>
				<?php endif; ?>

				<?php if ( $linkedin ) : ?>
					<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo rawurlencode( get_permalink() ); ?>&title=<?php echo urlencode( $post->post_title ); ?>&source=<?php echo urlencode( get_bloginfo( 'name' ) ); ?>" target="_blank" class="social outline rounded">
						<span class="fab fa-linkedin"></span>
					</a>
				<?php endif; ?>

				<?php if ( $pinterest ) : ?>
					<a href="http://pinterest.com/pin/create/button/?url=<?php echo rawurlencode( get_permalink() ); ?>&description=<?php echo urlencode( $post->post_title ); ?>" target="_blank" class="social outline rounded">
						<span class="fab fa-pinterest-p"></span>
					</a>
				<?php endif; ?>
			</div>
			<?php
			echo wp_kses( $after_widget, $allowed_tags );
		}


		function update( $new, $old){
			$new = wp_parse_args( $new, array(
				'title' => '',
				'facebook' => '',
				'twitter' => '',
				'pinterest' => '',
				'linkedin' => ''
			) );
			return $new;
		}

		function form( $instance ) {
			$instance = wp_parse_args( $instance, array(
				'title' => '',
				'facebook' => '',
				'twitter' => '',
				'pinterest' => '',
				'linkedin' => ''
			) );
			$facebook_checked = false;
			$twitter_checked = false;
			$pinterest_checked = false;
			$linkedin_checked = false;
			if( $instance['facebook'] ) {
				$facebook_checked = true;
			}
			if( $instance['facebook'] ) {
				$facebook_checked = true;
			}
			if( $instance['twitter'] ) {
				$twitter_checked = true;
			}
			if( $instance['pinterest'] ) {
				$pinterest_checked = true;
			}
			if( $instance['linkedin'] ) {
				$linkedin_checked = true;
			}
	?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'norebro-extra' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_html_e( 'Facebook', 'norebro-extra' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="checkbox" <?php if( $facebook_checked ) { echo 'checked="checked"'; } ?> />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_html_e( 'Twitter', 'norebro-extra' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="checkbox" <?php if( $twitter_checked ) { echo 'checked="checked"'; } ?> />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>"><?php esc_html_e( 'Pinterest', 'norebro-extra' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pinterest' ) ); ?>" type="checkbox" <?php if( $pinterest_checked ) { echo 'checked="checked"'; } ?> />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"><?php esc_html_e( 'Linkedin', 'norebro-extra' ); ?>:</label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" type="checkbox" <?php if( $linkedin_checked ) { echo 'checked="checked"'; } ?> />
		</p>

	<?php
		}
	}

	register_widget( 'norebro_widget_socialbar' );

}