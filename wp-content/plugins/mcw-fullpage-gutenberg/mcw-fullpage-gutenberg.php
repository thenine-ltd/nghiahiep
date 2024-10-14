<?php

/**
 * Plugin Name: FullPage for Gutenberg
 * Plugin URI: https://www.meceware.com/docs/fullpage-for-gutenberg/
 * Author: Mehmet Celik, Álvaro Trigo
 * Author URI: https://www.meceware.com/
 * Version: 3.2.2
 * Description: Create beautiful scrolling fullscreen web sites with Gutenberg editor and WordPress, fast and simple. Gutenberg editor addon of FullPage JS implementation.
 * Text Domain: mcw_fullpage_gutenberg
 *
 * @package mcw-fullpage-gutenberg
**/

/* Copyright 2019-2024 Mehmet Celik */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

require_once plugin_dir_path( __FILE__ ) . '/models/page-settings.php';
require_once plugin_dir_path( __FILE__ ) . '/models/server.php';

if ( ! class_exists( 'McwFullPageGutenbergGlobals' ) ) {

  final class McwFullPageGutenbergGlobals {
    // Plugin version
    private static $version = '3.2.2';
    // FullPage JS version
    private static $fullPageVersion = '4.0.29';
    // Tag
    private static $tag = 'mcw-fullpage-gutenberg';
    // Plugin name
    private static $pluginName = 'FullPage for Gutenberg';

    private function __construct() { }

    public function __clone() {
      // Cloning instances of the class is forbidden
      _doing_it_wrong( __FUNCTION__, esc_html__( 'NOT ALLOWED', self::$tag ), self::$version );
    }

    public function __wakeup() {
      // Unserializing instances of the class is forbidden
      _doing_it_wrong( __FUNCTION__, esc_html__( 'NOT ALLOWED', self::$tag ), self::$version );
    }

    public static function Version() {
      return self::$version;
    }

    public static function Tag() {
      return self::$tag;
    }

    public static function Name() {
      return self::Translate( self::$pluginName );
    }

    public static function Url() {
      return trailingslashit( plugin_dir_url( __FILE__ ) );
    }

    public static function Dir() {
      return trailingslashit( plugin_dir_path( __FILE__ ) );
    }

    public static function File() {
      return __FILE__;
    }

    public static function FullPageVersion() {
      return self::$fullPageVersion;
    }

    public static function FullPageScriptName() {
      return self::$tag . '-fullpage';
    }

    public static function Translate( $str ) {
      return esc_html__( $str, self::$tag );
    }

    public static function Translate_e( $str ) {
      esc_html_e( $str, self::$tag );
    }

    public static function GetExtensions() {
      $extensions = array(
        'continuous-horizontal' => array(
          'name' => 'Continuous Horizontal',
          'idc' => 'continuousHorizontal',
        ),
        'drag-and-move' => array(
          'name' => 'Drag and Move',
          'idc' => 'dragAndMove',
        ),
        'fading-effect' => array(
          'name' => 'Fading Effect',
          'idc' => 'fadingEffect',
        ),
        'interlocked-slides' => array(
          'name' => 'Interlocked Slides',
          'idc' => 'interlockedSlides',
        ),
        'offset-sections' => array(
          'name' => 'Offset Sections',
          'idc' => 'offsetSections',
        ),
        'parallax' => array(
          'name' => 'Parallax',
          'idc' => 'parallax',
        ),
        'reset-sliders' => array(
          'name' => 'Reset Sliders',
          'idc' => 'resetSliders',
        ),
        'responsive-slides' => array(
          'name' => 'Responsive Slides',
          'idc' => 'responsiveSlides',
        ),
        'scroll-horizontally' => array(
          'name' => 'Scroll Horizontally',
          'idc' => 'scrollHorizontally',
        ),
        'scroll-overflow-reset' => array(
          'name' => 'Scroll Overflow Reset',
          'idc' => 'scrollOverflowReset',
        ),
      );

      $active = apply_filters(
        'mcw-fullpage-extensions',
        array(
          'continuous-horizontal' => false,
          'drag-and-move' => false,
          'fading-effect' => false,
          'interlocked-slides' => false,
          'offset-sections' => false,
          'parallax' => false,
          'reset-sliders' => false,
          'responsive-slides' => false,
          'scroll-horizontally' => false,
          'scroll-overflow-reset' => false,
        )
      );

      foreach ( $extensions as $key => $value ) {
        $extensions[ $key ]['id'] = 'mcw-fullpage-extension-' . $key;
        $extensions[ $key ]['active'] = array_key_exists( $key, $active ) ? $active[ $key ] : false;
      }

      return $extensions;
    }
  }

}

if ( ! class_exists( 'McwFullPageGutenberg' ) ) {

  final class McwFullPageGutenberg {
    private $tag;
    // Plugin name
    private $pluginName;

    // Notice user meta
    private $noticeMeta = '-license-user-meta';

    // Object instance
    private static $instance = null;
    private $pluginSettings = null;

    public function __clone() {
      // Cloning instances of the class is forbidden
      _doing_it_wrong( __FUNCTION__, esc_html__( 'NOT ALLOWED', McwFullPageGutenbergGlobals::Tag() ), McwFullPageGutenbergGlobals::Version() );
    }

    public function __wakeup() {
      // Unserializing instances of the class is forbidden
      _doing_it_wrong( __FUNCTION__, esc_html__( 'NOT ALLOWED', McwFullPageGutenbergGlobals::Tag() ), McwFullPageGutenbergGlobals::Version() );
    }

    private function __construct() {
      // Get tag
      $this->tag = McwFullPageGutenbergGlobals::Tag();
      $this->pluginName = McwFullPageGutenbergGlobals::Name();
      // Init Plugin
      add_action( 'plugins_loaded', array( $this, 'OnPluginsLoaded' ), 100 );
    }

    public static function instance() {
      if ( is_null( self::$instance ) ) {
        self::$instance = new self();
      }

      return self::$instance;
    }

    public function OnPluginsLoaded() {
      require_once McwFullPageGutenbergGlobals::Dir() . 'models/plugin-settings.php';
      $this->pluginSettings = new McwFullPageGutenbergPluginSettings( $this->tag );

      // Enqueue editor assets for the backend
      add_action( 'enqueue_block_editor_assets', array( $this, 'OnEnqueueBlockEditorAssets' ) );
      add_action( 'admin_enqueue_scripts', array( $this, 'OnAdminEnqueueScripts' ) );

      // Admin notices
      add_action( 'admin_notices', array( $this, 'OnAdminNotices' ) );
      add_action( 'wp_ajax_' . $this->tag . '-admin-notice', array( $this, 'OnAjaxAdminNoticeRequest' ) );

      // Create frontend script
      new McwFullPageFrontEnd( $this->tag, $this->pluginSettings );
    }

    public function OnAdminEnqueueScripts() {
      if ( $this->pluginSettings->GetLicenseState() ) {
        return;
      }

      wp_enqueue_script(
        $this->tag . '-notice-js',
        McwFullPageGutenbergGlobals::Url() . 'assets/notice/notice.min.js',
        array( 'jquery', 'common' ),
        McwFullPageGutenbergGlobals::Version(),
        true
      );

      wp_localize_script(
        $this->tag . '-notice-js',
        'McwFullPageGutenberg',
        array(
          'nonce' => wp_create_nonce( $this->tag . '-admin-notice-nonce' ),
          'ajaxurl' => admin_url( 'admin-ajax.php' ),
        )
      );
    }

    public function OnAdminNotices() {
      // Do not show in the settings page.
      if ( $this->pluginSettings->IsSettingsPage() ) {
        return;
      }

      if ( $this->pluginSettings->GetLicenseState() ) {
        return;
      }

      // Check the user transient.
      $currentUser = wp_get_current_user();
      $meta = get_user_meta( $currentUser->ID, $this->noticeMeta, true );
      if ( isset( $meta ) && ! empty( $meta ) && ( $meta > new DateTime( 'now' ) ) ) {
        return;
      }

      // No license is given
      $message = '';
      $url = menu_page_url( $this->tag, false );
      $button = McwFullPageGutenbergGlobals::Translate( 'Activate Now!' );
      $inner = '';
      // No license is given
      if ( ! $this->pluginSettings->GetLicenseKey() ) {
        /* translators: 1: Plugin Name */
        $message = sprintf( McwFullPageGutenbergGlobals::Translate( '%s plugin requires the license key to be activated. Please enter your license key!' ), '<strong>' . $this->pluginName . '</strong>' );
        $inner = 'class="' . $this->tag . '-notice notice notice-info is-dismissible" data-notice="no-license"';
      } else {
        /* translators: 1: Plugin Name */
        $message = sprintf( McwFullPageGutenbergGlobals::Translate( '%s plugin is NOT activated. Please check your license key!' ), '<strong>' . $this->pluginName . '</strong>' );
        $inner = 'class="' . $this->tag . '-notice notice notice-error is-dismissible" data-notice="no-active-license"';
      }

      ?>
      <div <?php echo $inner; ?> style="display:flex;align-items:center;">
        <div class="mcw-fp-img-wrap" style="display:flex;align-items:center;padding:0.7em;">
          <img src="<?php echo McwFullPageGutenbergGlobals::Url() . 'assets/logo/logo-32.png'; ?>">
        </div>
        <div class="mcw-fp-img-text">
          <p>
            <?php echo $message; ?>
          </p>
          <p><a href="<?php echo $url; ?>" class="button-primary"><?php echo $button; ?></a></p>
        </div>
      </div>
      <?php
    }

    public function OnAjaxAdminNoticeRequest() {
      $notice = sanitize_text_field( $_POST['notice'] );

      check_ajax_referer( $this->tag . '-admin-notice-nonce', 'nonce' );

      if ( ( 'no-license' === $notice ) || ( 'no-active-license' === $notice ) ) {
        $currentUser = wp_get_current_user();
        update_user_meta( $currentUser->ID, $this->noticeMeta, ( new DateTime( 'now' ) )->modify( '+12 hours' ) );
      }

      wp_die();
    }

    // Enqueue Gutenberg block assets for backend editor.
    public function OnEnqueueBlockEditorAssets() {
      wp_enqueue_script(
        $this->tag . '-block-js',
        McwFullPageGutenbergGlobals::Url() . 'build/index.js',
        array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
        McwFullPageGutenbergGlobals::Version(),
        false
      );

      wp_enqueue_style(
        $this->tag . '-block-editor-css',
        McwFullPageGutenbergGlobals::Url() . 'build/index.css',
        array( 'wp-edit-blocks' ),
        McwFullPageGutenbergGlobals::Version(),
        'all'
      );

      wp_localize_script(
        $this->tag . '-block-js',
        'McwFullPageGutenbergOptions',
        array(
          'verified' => $this->pluginSettings->GetLicenseState(),
          'url' => menu_page_url( $this->tag, false ),
          'extensions' => McwFullPageGutenbergGlobals::GetExtensions(),
        )
      );
    }
  }

}

McwFullPageGutenberg::instance();
