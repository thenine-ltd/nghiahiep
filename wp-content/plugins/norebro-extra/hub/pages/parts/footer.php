<!-- Footer -->
<div class="clb-page-footer">
    <div class="clb-page-container">
        <div class="copyright">
            <?php _e( 'Copyright ©', 'norebro-extra' ); ?> <?php echo date("Y"); ?>, <?php _e( 'Norebro Version', 'norebro-extra' ); ?> <?php
                    $norebro_theme = wp_get_theme( get_template() );
                    $norebro_version = $norebro_theme->get( 'Version' ) ? $norebro_theme->get( 'Version' ) : '3.0.0';
                    echo $norebro_version;
                ?> <?php _e( 'by', 'norebro-extra' ); ?> <a target="_blank" href="https://themeforest.net/user/colabrio"><?php _e( 'Colabrio', 'norebro-extra' ); ?></a>.
        </div>
        <div class="social-networks">
            <a target="_blank" href="https://docs.clbthemes.com/norebro/"><?php _e( 'Documentation', 'norebro-extra' ); ?></a>&nbsp;|&nbsp;<a target="_blank" href="https://colabrio.ticksy.com/"><?php _e( 'Help Center', 'norebro-extra' ); ?></a>&nbsp;|&nbsp;<?php _e( 'Follow Us', 'norebro-extra' ); ?> -&nbsp;<a target="_blank" href="https://www.facebook.com/"><span class="dashicons dashicons-facebook"></span> <?php _e( 'Facebook', 'norebro-extra' ); ?></a>
        </div>  
    </div>
</div>
