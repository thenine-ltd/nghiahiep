<?php



    

    // $external_link = OhioOptions::get_global( 'social_network_target_blank', true );
    // $link_target = ( $external_link ) ? '_blank' : '_self';



    $social_network_icon_mapping = [
        'artstation' => 'fa-artstation',
        'behance' => 'fa-behance',
        'deviantart' => 'fa-deviantart',
        'digg' => 'fa-digg',
        'discord' => 'fa-discord',
        'dribbble' => 'fa-dribbble',
        'facebook' => 'fa-facebook',
        'flickr' => 'fa-flickr',
        'github' => 'fa-github',
        'houzz' => 'fa-houzz',
        'instagram' => 'fa-instagram',
        'kaggle' => 'fa-kaggle',
        'linkedin' => 'fa-linkedin',
        'medium' => 'fa-medium-m',
        'mixer' => 'fa-mixer',
        'pinterest' => 'fa-pinterest',
        'producthunt' => 'fa-product-hunt',
        'quora' => 'fa-quora',
        'reddit' => 'fa-reddit',
        'snapchat' => 'fa-snapchat',
        'soundcloud' => 'fa-soundcloud',
        'spotify' => 'fa-spotify',
        'teamspeak' => 'fa-teamspeak',
        'telegram' => 'fa-telegram',
        'threads' => 'fa-threads',
        'tiktok' => 'fa-tiktok',
        'tumblr' => 'fa-tumblr',
        'twitch' => 'fa-twitch',
        'twitter' => 'fa-x-twitter',
        'vimeo' => 'fa-vimeo',
        'vine' => 'fa-vine',
        'whatsapp' => 'fa-whatsapp',
        'xing' => 'fa-xing',
        'youtube' => 'fa-youtube',
        '500px' => 'fa-500px'
    ];

    while ( have_rows( 'global_header_menu_social_links', 'option' ) ) :
        the_row();

        $target_blank = '';
        if ( get_sub_field( 'in_new_tab' ) ) :
            $target_blank = ' target="_blank"';
        endif;

        $_network_field = get_sub_field( 'social_network' );
        $network_icon = $social_network_icon_mapping[$_network_field];
        printf( '<a href="%s"' . $target_blank . 'rel="nofollow" class="%s">', esc_url( get_sub_field( 'url' ) ), esc_attr( $_network_field ) );
            ?>
                <i class="fa-brands <?php echo $network_icon; ?>"></i>
            <?php
        echo '</a>';
    endwhile;
?>