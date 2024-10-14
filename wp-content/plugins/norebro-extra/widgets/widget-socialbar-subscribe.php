<?php

if ( ! class_exists( 'norebro_widget_socialbar_subscribe' ) ) {

	class norebro_widget_socialbar_subscribe extends WP_Widget {

		function __construct() {
			parent::__construct(
				'norebro_widget_socialbar_subscribe',
				'Norebro: ' . esc_html__( 'Socialbar subscribe', 'norebro-extra' ),
				array( 'description' =>  esc_html__( 'Subscribe social buttons', 'norebro-extra' ) )
			);
		}

		function widget( $args, $instance ) {
			extract( $args );
			$title = $instance['title'];
			$artstation = false;
		    $behance = false;
		    $deviantart = false;
		    $digg = false;
		    $discord = false;
		    $dribbble = false;
		    $facebook = false;
		    $flickr = false;
		    $github = false;
		    $houzz = false;
		    $instagram = false;
		    $kaggle = false;
		    $linkedin = false;
		    $medium = false;
		    $mixer = false;
		    $pinterest = false;
		    $producthunt = false;
		    $quora = false;
		    $reddit = false;
		    $snapchat = false;
		    $soundcloud = false;
		    $spotify = false;
		    $teamspeak = false;
		    $telegram = false;
		    $threads = false;
		    $tiktok = false;
		    $tumblr = false;
		    $twitch = false;
		    $twitter = false;
		    $vimeo = false;
		    $vine = false;
		    $whatsapp = false;
		    $xing = false;
		    $youtube = false;
		    $fivehundred = false;
			
			if ( isset( $instance['artstation'] ) ) {
				$artstation = $instance['artstation'];
			}
			if ( isset( $instance['behance'] ) ) {
				$behance = $instance['behance'];
			}
			if ( isset( $instance['deviantart'] ) ) {
				$deviantart = $instance['deviantart'];
			}
			if ( isset( $instance['digg'] ) ) {
				$digg = $instance['digg'];
			}
			if ( isset( $instance['discord'] ) ) {
				$discord = $instance['discord'];
			}
			if ( isset( $instance['dribbble'] ) ) {
				$dribbble = $instance['dribbble'];
			}
			if ( isset( $instance['facebook'] ) ) {
				$facebook = $instance['facebook'];
			}
			if ( isset( $instance['flickr'] ) ) {
				$flickr = $instance['flickr'];
			}
			if ( isset( $instance['github'] ) ) {
				$github = $instance['github'];
			}
			if ( isset( $instance['houzz'] ) ) {
				$houzz = $instance['houzz'];
			}
			if ( isset( $instance['instagram'] ) ) {
				$instagram = $instance['instagram'];
			}
			if ( isset( $instance['kaggle'] ) ) {
				$kaggle = $instance['kaggle'];
			}
			if ( isset( $instance['linkedin'] ) ) {
				$linkedin = $instance['linkedin'];
			}
			if ( isset( $instance['medium'] ) ) {
				$medium = $instance['medium'];
			}
			if ( isset( $instance['mixer'] ) ) {
				$mixer = $instance['mixer'];
			}
			if ( isset( $instance['pinterest'] ) ) {
				$pinterest = $instance['pinterest'];
			}
			if ( isset( $instance['producthunt'] ) ) {
				$producthunt = $instance['producthunt'];
			}
			if ( isset( $instance['quora'] ) ) {
				$quora = $instance['quora'];
			}
			if ( isset( $instance['reddit'] ) ) {
				$reddit = $instance['reddit'];
			}
			if ( isset( $instance['snapchat'] ) ) {
				$snapchat = $instance['snapchat'];
			}
			if ( isset( $instance['soundcloud'] ) ) {
				$soundcloud = $instance['soundcloud'];
			}
			if ( isset( $instance['spotify'] ) ) {
				$spotify = $instance['spotify'];
			}
			if ( isset( $instance['teamspeak'] ) ) {
				$teamspeak = $instance['teamspeak'];
			}
			if ( isset( $instance['telegram'] ) ) {
				$telegram = $instance['telegram'];
			}
			if ( isset( $instance['threads'] ) ) {
				$threads = $instance['threads'];
			}
			if ( isset( $instance['tiktok'] ) ) {
				$tiktok = $instance['tiktok'];
			}
			if ( isset( $instance['tumblr'] ) ) {
				$tumblr = $instance['tumblr'];
			}
			if ( isset( $instance['twitch'] ) ) {
				$twitch = $instance['twitch'];
			}
			if ( isset( $instance['twitter'] ) ) {
				$twitter = $instance['twitter'];
			}
			if ( isset( $instance['vimeo'] ) ) {
				$vimeo = $instance['vimeo'];
			}
			if ( isset( $instance['vine'] ) ) {
				$vine = $instance['vine'];
			}
			if ( isset( $instance['whatsapp'] ) ) {
				$whatsapp = $instance['whatsapp'];
			}
			if ( isset( $instance['xing'] ) ) {
				$xing = $instance['xing'];
			}
			if ( isset( $instance['youtube'] ) ) {
				$youtube = $instance['youtube'];
			}
			if ( isset( $instance['fivehundred'] ) ) {
				$fivehundred = $instance['fivehundred'];
			}

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
			
			echo wp_kses( $before_widget, $allowed_tags );

			if ( ! empty( $title ) ) {
				echo wp_kses( $before_title . esc_html( $title ) . $after_title, $allowed_tags );
			}
			?>
			<div class="socialbar small new-tab-links">

				<?php if ( $artstation ) : ?>
					<a href="<?php echo esc_url( $artstation ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-artstation"></i>
					</a>
				<?php endif; ?>

				<?php if ( $behance ) : ?>
					<a href="<?php echo esc_url( $behance ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-behance"></i>
					</a>
				<?php endif; ?>

				<?php if ( $deviantart ) : ?>
					<a href="<?php echo esc_url( $deviantart ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-deviantart"></i>
					</a>
				<?php endif; ?>

				<?php if ( $digg ) : ?>
					<a href="<?php echo esc_url( $digg ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-digg"></i>
					</a>
				<?php endif; ?>

				<?php if ( $discord ) : ?>
					<a href="<?php echo esc_url( $discord ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-discord"></i>
					</a>
				<?php endif; ?>

				<?php if ( $dribbble ) : ?>
					<a href="<?php echo esc_url( $dribbble ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-dribbble"></i>
					</a>
				<?php endif; ?>

				<?php if ( $facebook ) : ?>
					<a href="<?php echo esc_url( $facebook ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-facebook"></i>
					</a>
				<?php endif; ?>

				<?php if ( $flickr ) : ?>
					<a href="<?php echo esc_url( $flickr ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-flickr"></i>
					</a>
				<?php endif; ?>

				<?php if ( $github ) : ?>
					<a href="<?php echo esc_url( $github ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-github"></i>
					</a>
				<?php endif; ?>

				<?php if ( $houzz ) : ?>
					<a href="<?php echo esc_url( $houzz ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-houzz"></i>
					</a>
				<?php endif; ?>

				<?php if ( $instagram ) : ?>
					<a href="<?php echo esc_url( $instagram ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-instagram"></i>
					</a>
				<?php endif; ?>

				<?php if ( $kaggle ) : ?>
					<a href="<?php echo esc_url( $kaggle ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-kaggle"></i>
					</a>
				<?php endif; ?>

				<?php if ( $linkedin ) : ?>
					<a href="<?php echo esc_url( $linkedin ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-linkedin"></i>
					</a>
				<?php endif; ?>

				<?php if ( $medium ) : ?>
					<a href="<?php echo esc_url( $medium ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-medium"></i>
					</a>
				<?php endif; ?>

				<?php if ( $mixer ) : ?>
					<a href="<?php echo esc_url( $mixer ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-mixer"></i>
					</a>
				<?php endif; ?>

				<?php if ( $pinterest ) : ?>
					<a href="<?php echo esc_url( $pinterest ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-pinterest"></i>
					</a>
				<?php endif; ?>

				<?php if ( $producthunt ) : ?>
					<a href="<?php echo esc_url( $producthunt ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-product-hunt"></i>	
					</a>
				<?php endif; ?>

				<?php if ( $quora ) : ?>
					<a href="<?php echo esc_url( $quora ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-quora"></i>
					</a>
				<?php endif; ?>

				<?php if ( $reddit ) : ?>
					<a href="<?php echo esc_url( $reddit ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-reddit"></i>
					</a>
				<?php endif; ?>

				<?php if ( $snapchat ) : ?>
					<a href="<?php echo esc_url( $snapchat ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-snapchat"></i>
					</a>
				<?php endif; ?>

				<?php if ( $soundcloud ) : ?>
					<a href="<?php echo esc_url( $soundcloud ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-soundcloud"></i>
					</a>
				<?php endif; ?>

				<?php if ( $spotify ) : ?>
					<a href="<?php echo esc_url( $spotify ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-spotify"></i>
					</a>
				<?php endif; ?>

				<?php if ( $teamspeak ) : ?>
					<a href="<?php echo esc_url( $teamspeak ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-teamspeak"></i>
					</a>
				<?php endif; ?>

				<?php if ( $telegram ) : ?>
					<a href="<?php echo esc_url( $telegram ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-telegram"></i>
					</a>
				<?php endif; ?>

				<?php if ( $threads ) : ?>
					<a href="<?php echo esc_url( $threads ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-threads"></i>
					</a>
				<?php endif; ?>

				<?php if ( $tiktok ) : ?>
					<a href="<?php echo esc_url( $tiktok ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-tiktok"></i>
					</a>
				<?php endif; ?>

				<?php if ( $tumblr ) : ?>
					<a href="<?php echo esc_url( $tumblr ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-tumblr"></i>
					</a>
				<?php endif; ?>

				<?php if ( $twitch ) : ?>
					<a href="<?php echo esc_url( $twitch ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-twitch"></i>
					</a>
				<?php endif; ?>

				<?php if ( $twitter ) : ?>
					<a href="<?php echo esc_url( $twitter ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-x-twitter"></i>
					</a>
				<?php endif; ?>

				<?php if ( $vimeo ) : ?>
					<a href="<?php echo esc_url( $vimeo ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-vimeo"></i>
					</a>
				<?php endif; ?>

				<?php if ( $vine ) : ?>
					<a href="<?php echo esc_url( $vine ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-vine"></i>
					</a>
				<?php endif; ?>

				<?php if ( $whatsapp ) : ?>
					<a href="<?php echo esc_url( $whatsapp ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-whatsapp"></i>
					</a>
				<?php endif; ?>

				<?php if ( $xing ) : ?>
					<a href="<?php echo esc_url( $xing ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-xing"></i>
					</a>
				<?php endif; ?>

				<?php if ( $youtube ) : ?>
					<a href="<?php echo esc_url( $youtube ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-youtube"></i>
					</a>
				<?php endif; ?>

				<?php if ( $fivehundred ) : ?>
					<a href="<?php echo esc_url( $fivehundred ); ?>" target="_blank" class="social outline rounded">
						<i class="fa-brands fa-500px"></i>
					</a>
				<?php endif; ?>

			</div>
			<?php
			echo wp_kses( $after_widget, $allowed_tags );
		}

		function update( $new, $old){
			$new = wp_parse_args( $new, array(
				'title' => '',
				'artstation' => '',
			    'behance' => '',
			    'deviantart' => '',
			    'digg' => '',
			    'discord' => '',
			    'dribbble' => '',
			    'facebook' => '',
			    'flickr' => '',
			    'github' => '',
			    'houzz' => '',
			    'instagram' => '',
			    'kaggle' => '',
			    'linkedin' => '',
			    'medium' => '',
			    'mixer' => '',
			    'pinterest' => '',
			    'producthunt' => '',
			    'quora' => '',
			    'reddit' => '',
			    'snapchat' => '',
			    'soundcloud' => '',
			    'spotify' => '',
			    'teamspeak' => '',
			    'telegram' => '',
			    'threads' => '',
			    'tiktok' => '',
			    'tumblr' => '',
			    'twitch' => '',
			    'twitter' => '',
			    'vimeo' => '',
			    'vine' => '',
			    'whatsapp' => '',
			    'xing' => '',
			    'youtube' => '',
			    'fivehundred' => ''
			) );
			return $new;
		}

		function form( $instance ) {
			$instance = wp_parse_args( $instance, array(
				'title' => '',
				'artstation' => '',
			    'behance' => '',
			    'deviantart' => '',
			    'digg' => '',
			    'discord' => '',
			    'dribbble' => '',
			    'facebook' => '',
			    'flickr' => '',
			    'github' => '',
			    'houzz' => '',
			    'instagram' => '',
			    'kaggle' => '',
			    'linkedin' => '',
			    'medium' => '',
			    'mixer' => '',
			    'pinterest' => '',
			    'producthunt' => '',
			    'quora' => '',
			    'reddit' => '',
			    'snapchat' => '',
			    'soundcloud' => '',
			    'spotify' => '',
			    'teamspeak' => '',
			    'telegram' => '',
			    'threads' => '',
			    'tiktok' => '',
			    'tumblr' => '',
			    'twitch' => '',
			    'twitter' => '',
			    'vimeo' => '',
			    'vine' => '',
			    'whatsapp' => '',
			    'xing' => '',
			    'youtube' => '',
			    'fivehundred' => ''
			) );
	?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'artstation' ) ); ?>"><?php esc_html_e( 'Artstation', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'artstation' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'artstation' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['artstation'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'behance' ) ); ?>"><?php esc_html_e( 'Behance', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'behance' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'behance' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['behance'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'deviantart' ) ); ?>"><?php esc_html_e( 'DeviantArt', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'deviantart' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'deviantart' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['deviantart'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'digg' ) ); ?>"><?php esc_html_e( 'Digg', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'digg' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'digg' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['digg'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'discord' ) ); ?>"><?php esc_html_e( 'Discord', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'discord' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'discord' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['discord'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>"><?php esc_html_e( 'Dribbble', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'dribbble' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['dribbble'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_html_e( 'Facebook', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['facebook'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>"><?php esc_html_e( 'Flickr', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'flickr' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['flickr'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'github' ) ); ?>"><?php esc_html_e( 'GitHub', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'github' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'github' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['github'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'houzz' ) ); ?>"><?php esc_html_e( 'Houzz', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'houzz' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'houzz' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['houzz'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>"><?php esc_html_e( 'Instagram', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['instagram'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'kaggle' ) ); ?>"><?php esc_html_e( 'Kaggle', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'kaggle' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'kaggle' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['kaggle'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"><?php esc_html_e( 'LinkedIn', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['linkedin'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'medium' ) ); ?>"><?php esc_html_e( 'Medium', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'medium' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'medium' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['medium'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'mixer' ) ); ?>"><?php esc_html_e( 'Mixer', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'mixer' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'mixer' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['mixer'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>"><?php esc_html_e( 'Pinterest', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pinterest' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['pinterest'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'producthunt' ) ); ?>"><?php esc_html_e( 'Product Hunt', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'producthunt' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'producthunt' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['producthunt'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'quora' ) ); ?>"><?php esc_html_e( 'Quora', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'quora' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'quora' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['quora'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'reddit' ) ); ?>"><?php esc_html_e( 'Reddit', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'reddit' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'reddit' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['reddit'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'snapchat' ) ); ?>"><?php esc_html_e( 'Snapchat', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'snapchat' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'snapchat' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['snapchat'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'soundcloud' ) ); ?>"><?php esc_html_e( 'SoundCloud', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'soundcloud' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'soundcloud' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['soundcloud'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'spotify' ) ); ?>"><?php esc_html_e( 'Spotify', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'spotify' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'spotify' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['spotify'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'teamspeak' ) ); ?>"><?php esc_html_e( 'TeamSpeak', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'teamspeak' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'teamspeak' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['teamspeak'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'telegram' ) ); ?>"><?php esc_html_e( 'Telegram', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'telegram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'telegram' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['telegram'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'threads' ) ); ?>"><?php esc_html_e( 'Threads', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'threads' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'threads' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['threads'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'tiktok' ) ); ?>"><?php esc_html_e( 'TikTok', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tiktok' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tiktok' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['tiktok'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>"><?php esc_html_e( 'Tumblr', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tumblr' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['tumblr'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'twitch' ) ); ?>"><?php esc_html_e( 'Twitch', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitch' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitch' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['twitch'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_html_e( 'Twitter', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['twitter'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>"><?php esc_html_e( 'Vimeo', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vimeo' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['vimeo'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'vine' ) ); ?>"><?php esc_html_e( 'Vine', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'vine' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vine' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['vine'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'whatsapp' ) ); ?>"><?php esc_html_e( 'WhatsApp', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'whatsapp' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'whatsapp' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['whatsapp'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'xing' ) ); ?>"><?php esc_html_e( 'Xing', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'xing' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'xing' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['xing'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"><?php esc_html_e( 'YouTube', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['youtube'] ); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'fivehundred' ) ); ?>"><?php esc_html_e( '500px', 'norebro-extra' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'fivehundred' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'fivehundred' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['fivehundred'] ); ?>"/>
		</p>

	<?php
		}
	}

	register_widget( 'norebro_widget_socialbar_subscribe' );
}