<?php

/* Copyright 2019-2024 Mehmet Celik */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

require_once plugin_dir_path( __FILE__ ) . '/local.php';
require plugin_dir_path( __FILE__ ) . '/navigation-css.php';

if ( ! class_exists( 'McwFullPageFrontEnd' ) ) {
  class McwFullPageFrontEnd {
    // Tag
    private $tag = '';
    // Gutenberg block name
    private $blockName = 'meceware/fullpage';
    // FullPage wrapper class name
    private $wrapper = 'mcw-fp-wrapper';
    // Block attributes
    private $attributes = array(
      'enabled' => false,
      'isVideoChild' => false,

      // Navigation
      'navigation' => 'right',
      'navigationStyle' => 'default',
      'navigationColorMain' => '',
      'navigationColorHover' => '',
      'navigationColorActive' => '',
      'navigationTooltipBackground' => '',
      'navigationTooltipColor' => '',
      'navigationShowActiveTooltip' => false,
      'navigationClickableTooltip' => false,
      'navigationBig' => false,
      'navigationShow' => true,
      'navigationSpace' => 17,

      'navigationShowTablet' => true,
      'navigationColorMainTablet' => '',
      'navigationColorHoverTablet' => '',
      'navigationColorActiveTablet' => '',
      'navigationTooltipBackgroundTablet' => '',
      'navigationTooltipColorTablet' => '',
      'navigationSpaceTablet' => 17,

      'navigationShowMobile' => true,
      'navigationColorMainMobile' => '',
      'navigationColorHoverMobile' => '',
      'navigationColorActiveMobile' => '',
      'navigationTooltipBackgroundMobile' => '',
      'navigationTooltipColorMobile' => '',
      'navigationSpaceMobile' => 17,

      // Navigation Buttons
      'navigationButtons' => 'off',
      'navigationButtonsColor' => '',
      'navigationButtonsTextColor' => '',

      // Slide navigation
      'navigationSlide' => 'off',
      'navigationSlideStyle' => 'default',
      'navigationSlideColorMain' => '',
      'navigationSlideColorHover' => '',
      'navigationSlideColorActive' => '',
      'navigationSlideBig' => false,
      'navigationSlideShow' => true,
      'navigationSlideSpace' => 17,

      'navigationSlideShowTablet' => true,
      'navigationSlideColorMainTablet' => '',
      'navigationSlideColorHoverTablet' => '',
      'navigationSlideColorActiveTablet' => '',
      'navigationSlideSpaceTablet' => 17,

      'navigationSlideShowMobile' => true,
      'navigationSlideColorMainMobile' => '',
      'navigationSlideColorHoverMobile' => '',
      'navigationSlideColorActiveMobile' => '',
      'navigationSlideSpaceMobile' => 17,

      'controlArrows' => true,
      'controlArrowsStyle' => 'modern',
      'controlArrowsColor' => '',

      'lockAnchors' => false,
      'disableAnchors' => false,
      'animateAnchor' => true,
      'keyboardScrolling' => true,
      'recordHistory' => true,

      // Scrolling
      'autoScrolling' => true,
      'fitToSection' => true,
      'fitToSectionDelay' => 1000,
      'scrollBar' => false,
      'scrollOverflow' => true,
      'scrollOverflowMacStyle' => true,
      'skipIntermediateItems' => 'false',
      'bigSectionsDestination' => 'default',
      'continuousVertical' => false,
      'loopBottom' => false,
      'loopTop' => false,
      'loopHorizontal' => true,
      'easingCSSEnable' => true,
      'easingCSS' => 'ease',
      'easingJS' => 'linear',
      'scrollingSpeed' => 1000,

      // Design
      'verticalAlignment' => 'center',
      'padding' => array( 0, 0, 0, 0 ),
      'paddingTablet' => array( 0, 0, 0, 0 ),
      'paddingTabletSet' => false,
      'paddingMobile' => array( 0, 0, 0, 0 ),
      'paddingMobileSet' => false,
      'responsiveWidth' => 0,
      'responsiveHeight' => 0,
      'fixedElements' => '',
      'normalScrollElements' => '',
      'customCSSEnable' => true,
      'customCSS' => '',

      // Events
      'afterRenderEnable' => false,
      'afterRender' => '',
      'afterResizeEnable' => false,
      'afterResize' => '',
      'afterLoadEnable' => false,
      'afterLoad' => '',
      'beforeLeaveEnable' => false,
      'beforeLeave' => '',
      'onLeaveEnable' => false,
      'onLeave' => '',
      'afterSlideLoadEnable' => false,
      'afterSlideLoad' => '',
      'onSlideLeaveEnable' => false,
      'onSlideLeave' => '',
      'afterResponsiveEnable' => false,
      'afterResponsive' => '',
      'afterReBuildEnable' => false,
      'afterReBuild' => '',
      'onScrollOverflowEnable' => false,
      'onScrollOverflow' => '',
      'beforeFullPageEnable' => false,
      'beforeFullPage' => '',
      'afterFullPageEnable' => false,
      'afterFullPage' => '',

      // Extensions
      'enableExtensions' => false,
      'extensions' => array(),

      // Customizations
      'extraParameters' => '',
      'videoAutoplay' => true,
      'videoKeepPlaying' => false,
      'removeThemeMargins' => false,
      'fixedThemeHeader' => false,
      'fixedThemeHeaderSelector' => 'header',
      'fixedThemeHeaderToggle' => false,
      'fixedThemeHeaderPadding' => false,
      'moveFooter' => false,
      'moveFooterSelector' => 'footer',
      'hideContentBeforeLoad' => false,

      // Advanced Parameters
      'observer' => true,
      'enableJQuery' => false,
      'enableTemplate' => true,
      'enableTemplateRedirect' => false,
      'templatePath' => '',
      'removeThemeJS' => false,
      'removeJS' => '',
    );

    // Block attributes are parsed or not
    private $blockAttributesReady = false;
    // Parsed block attributes
    private $blockAttributes = null;
    // Navigation CSS
    private $navigationCSS = null;
    // Plugin settings
    private $pluginSettings = null;

    // Constructor
    public function __construct( $tag, $pluginSettings ) {
      $this->tag = $tag;
      $this->pluginSettings = $pluginSettings;

      $this->navigationCSS = new McwFullPageGutenbergNavCSS();

      // WP Init action
      add_action( 'init', array( $this, 'OnInit' ) );
      // Enqueue fullpage related css and js
      add_action( 'enqueue_block_assets', array( $this, 'OnEnqueueBlockAssets' ) );

      // Template redirect
      add_action( 'template_redirect', array( $this, 'OnTemplateRedirect' ) );
      // Template include
      add_filter( 'template_include', array( $this, 'OnTemplateInclude' ) );
      // Remove unwanted JS from header
      add_action( 'wp_print_scripts', array( $this, 'OnWpPrintScripts' ) );
      // Add extra body class
      add_filter( 'body_class', array( $this, 'OnBodyClass' ) );
    }

    public function OnInit() {
      // Only load if Gutenberg is available.
      if ( ! function_exists( 'register_block_type' ) ) {
        return;
      }

      register_block_type(
        'meceware/fullpage',
        array(
          'render_callback' => array( $this, 'OnRenderCallback' ),
        )
      );

      register_block_type(
        'meceware/fullpage-section',
        array(
          'render_callback' => array( $this, 'OnRenderCallbackSection' ),
        )
      );

      register_block_type(
        'meceware/fullpage-slide',
        array(
          'render_callback' => array( $this, 'OnRenderCallbackSlide' ),
        )
      );
    }

    public function OnRenderCallback( $attributes, $content, $blocks ) {
      if ( ! $this->IsFieldEnabledAttr( $attributes, 'enabled' ) ) {
        return $content;
      }

      if ( ! ( $this->pluginSettings->GetLicenseKey() && $this->pluginSettings->GetLicenseState() ) ) {
        return $content;
      }

      if ( $this->GetFieldValueAttr( $attributes, 'navigationButtons' ) !== 'off' ) {
        $content .= '<div class="fp-navigation-arrows"><div class="fp-navigation-up"><div class="fp-navigation-line"></div><div class="fp-navigation-space"></div><div class="fp-navigation-inner"><svg enableBackground="new 0 0 512.171 512.171" x="0px" y="0px" viewBox="0 0 512.171 512.171"><g><g><path d="M476.723,216.64L263.305,3.115C261.299,1.109,258.59,0,255.753,0c-2.837,0-5.547,1.131-7.552,3.136L35.422,216.64 c-3.051,3.051-3.947,7.637-2.304,11.627c1.664,3.989,5.547,6.571,9.856,6.571h117.333v266.667c0,5.888,4.779,10.667,10.667,10.667 h170.667c5.888,0,10.667-4.779,10.667-10.667V234.837h116.885c4.309,0,8.192-2.603,9.856-6.592 C480.713,224.256,479.774,219.691,476.723,216.64z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></div></div><div class="fp-navigation-down"><div class="fp-navigation-inner"><svg enableBackground="new 0 0 512.171 512.171" x="0px" y="0px" viewBox="0 0 512.171 512.171"><g><g><path d="M479.046,283.925c-1.664-3.989-5.547-6.592-9.856-6.592H352.305V10.667C352.305,4.779,347.526,0,341.638,0H170.971 c-5.888,0-10.667,4.779-10.667,10.667v266.667H42.971c-4.309,0-8.192,2.603-9.856,6.571c-1.643,3.989-0.747,8.576,2.304,11.627 l212.8,213.504c2.005,2.005,4.715,3.136,7.552,3.136s5.547-1.131,7.552-3.115l213.419-213.504 C479.793,292.501,480.71,287.915,479.046,283.925z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></div><div class="fp-navigation-space"></div><div class="fp-navigation-line"></div></div></div>';
      }

      $content = sprintf(
        '%s<script type="text/javascript">%s</script><style type="text/css">%s</style>',
        $content,
        $this->GetFullPageJS( $attributes ),
        $this->GetFullPageCSS( $attributes, $blocks )
      );

      return $content;
    }

    public function OnRenderCallbackSection( $attributes, $content ) {
      if ( ! ( $this->pluginSettings->GetLicenseKey() && $this->pluginSettings->GetLicenseState() ) ) {
        return $content;
      }

      if ( ! $this->IsFullPageEnabled() ) {
        return $content;
      }

      // Get the content of the first div
      if ( preg_match( '~<div.*?>([\s\S]*)<\/div>~is', $content, $matches ) ) {
        $content = $matches[1];
      }

      $bgImgId = $this->GetFieldValueAttrDef( $attributes, 'bgImgId', '' );
      $anchor = $this->GetFieldValueAttrDef( $attributes, 'anchor', '' );
      $uniqueID = $this->GetFieldValueAttrDef( $attributes, 'uniqueID', '' );

      // Main div attributes
      $divAttr = array(
        'class' => array(
          'mcw-fp-section',
          'mcw-fp-section' . $uniqueID,
        ),
        'data-bg-img-id' => $bgImgId,
      );

      // It seems fp-table is only added when vertical centered is enabled, so add it always.
      $verticalAlignmentBlock = $this->GetFieldValue( 'verticalAlignment' );
      if ( 'center' !== $verticalAlignmentBlock ) {
        $divAttr['class'][] = 'fp-table';
      }

      $isSlide = $this->GetFieldValueAttrDef( $attributes, 'isSlide', false );
      if ( true === $isSlide ) {
        $divAttr['class'][] = 'mcw-fp-section-slide';
      }

      $behaviour = $this->GetFieldValueAttrDef( $attributes, 'behaviour', 'full' );
      if ( 'auto' === $behaviour ) {
        $divAttr['class'][] = 'fp-auto-height';
      } elseif ( 'responsive' === $behaviour ) {
        $divAttr['class'][] = 'fp-auto-height-responsive';
      }

      $scrollbars = $this->GetFieldValueAttrDef( $attributes, 'scrollbars', true );
      if ( true !== $scrollbars ) {
        $divAttr['class'][] = 'fp-noscroll';
      }

      $classes = $this->GetFieldValueAttrDef( $attributes, 'className', '' );
      if ( ! empty( $classes ) ) {
        $divAttr['class'][] = $classes;
      }

      $disableAnchors = $this->GetFieldValueAttrDef( $attributes, 'disableAnchors', false );
      if ( true !== $disableAnchors ) {
        $anchor = $this->GetFieldValueAttrDef( $attributes, 'anchor', '' );
        if ( empty( $anchor ) ) {
          $anchor = 'section' . $this->GetFieldValueAttrDef( $attributes, 'id', 1 );
        }
        $divAttr['data-anchor'] = $anchor;
      }

      $tooltip = $this->GetFieldValueAttrDef( $attributes, 'tooltip', '' );
      $divAttr['data-tooltip'] = ( isset( $tooltip ) && ! empty( $tooltip ) ) ? $tooltip : '';

      // Check if isVideo attribute is set
      $isVideo = $this->GetFieldValueAttrDef( $attributes, 'isVideo', false );
      if ( $isVideo ) {
        $bgVideoSource = $this->GetFieldValueAttrDef(
          $attributes,
          'bgVideoSource',
          array(
            array(
              'mp4' => array(
                'id' => '',
                'url' => '',
              ),
              'ogv' => array(
                'id' => '',
                'url' => '',
              ),
              'webm' => array(
                'id' => '',
                'url' => '',
              ),
              'url' => '',
            ),
          )
        );

        $iWideo = array(
          'wrapperClass' => 'iwideo-wrapper fp-bg',
          'src' => '',
          'poster' => $this->GetFieldValueAttrDef( $attributes, 'bgImg', '' ),
          'posterStyle' => array(
            'size' => $this->GetFieldValueAttrDef( $attributes, 'bgImgSize', 'cover' ),
            'position' => $this->GetFieldValueAttrDef( $attributes, 'bgImgPosition', 'center center' ),
            'repeat' => $this->GetFieldValueAttrDef( $attributes, 'bgImgRepeat', 'no-repeat' ),
            'attachment' => $this->GetFieldValueAttrDef( $attributes, 'bgImgAttachment', 'scroll' ),
          ),
          'loop' => $this->GetFieldValueAttrDef( $attributes, 'bgVideoLoop', true ),
          'mute' => $this->GetFieldValueAttrDef( $attributes, 'bgVideoMute', true ),
          'autoplay' => $this->GetFieldValueAttrDef( $attributes, 'bgVideoAutoPlay', true ),
        );

        if ( $this->GetFieldValueAttrDef( $attributes, 'bgVideoType', 'cloud' ) === 'local' ) {
          $iWideo['src'] = array();
          if ( ! empty( $bgVideoSource[0]['mp4']['url'] ) ) {
            $iWideo['src']['mp4'] = $bgVideoSource[0]['mp4']['url'];
          }

          if ( ! empty( $bgVideoSource[0]['ogv']['url'] ) ) {
            $iWideo['src']['ogv'] = $bgVideoSource[0]['ogv']['url'];
          }

          if ( ! empty( $bgVideoSource[0]['webm']['url'] ) ) {
            $iWideo['src']['webm'] = $bgVideoSource[0]['webm']['url'];
          }
        } else {
          $iWideo['src'] = $bgVideoSource[0]['url'];
        }

        if ( $this->GetFieldValueAttrDef( $attributes, 'bgVideoIsMobile', false ) === true ) {
          $iWideo['isMobile'] = false;
        }

        if ( $this->GetFieldValueAttrDef( $attributes, 'bgVideoAlwaysPlay', false ) === true ) {
          $iWideo['extra']['data-keepplaying'] = true;
        } elseif ( $this->GetFieldValueAttrDef( $attributes, 'bgVideoAutoPlay', true ) === true ) {
          $iWideo['extra']['data-autoplay'] = true;
        }

        $bgVideoExtra = $this->GetFieldValueAttrDef( $attributes, 'bgVideoExtra', '' );
        if ( '' !== $bgVideoExtra ) {
          $pieces = explode( ',', $bgVideoExtra );
          foreach ( $pieces as $piece ) {
            $pair = explode( ':', $piece );
            if ( isset( $pair ) && ! empty( $pair ) && ! empty( $pair[0] ) ) {
              $iWideo[ trim( $pair[0] ) ] = trim( $pair[1] );
            }
          }
        }

        $divAttr['data-iwideo'] = $this->EncodeURIComponent( wp_json_encode( $iWideo, JSON_UNESCAPED_SLASHES ) );
      }

      $extensions = $this->GetExtensionsInfo();
      $extensionParameters = $this->GetFieldValueAttrDef(
        $attributes,
        'extensionsParameters',
        array(
          array(
            'offset-sections' => array(
              'active' => false,
              'percentage' => 100,
              'centered' => true,
            ),
          ),
        )
      );

      if ( $extensions['offset-sections']['active'] && $this->IsFullPageExtensionEnabled( 'offset-sections' ) ) {
        $divAttr['data-percentage'] = $extensionParameters[0]['offset-sections']['percentage'];
        $divAttr['data-centered'] = ( true === $extensionParameters[0]['offset-sections']['centered'] ) ? 'true' : ( ( false === $extensionParameters[0]['offset-sections']['centered'] ) ? 'false' : $extensionParameters[0]['offset-sections']['centered'] );
      }

      return '<div' . $this->MergeHTMLAttributes( $divAttr ) . '>' . trim( $content ) . '</div>';
    }

    public function OnRenderCallbackSlide( $attributes, $content ) {
      if ( ! ( $this->pluginSettings->GetLicenseKey() && $this->pluginSettings->GetLicenseState() ) ) {
        return $content;
      }

      if ( ! $this->IsFullPageEnabled() ) {
        return $content;
      }

      // Get the content of the first div
      if ( preg_match( '~<div.*?>([\s\S]*)<\/div>~is', $content, $matches ) ) {
        $content = $matches[1];
      }

      $bgImgId = $this->GetFieldValueAttrDef( $attributes, 'bgImgId', '' );
      $anchor = $this->GetFieldValueAttrDef( $attributes, 'anchor', '' );
      $uniqueID = $this->GetFieldValueAttrDef( $attributes, 'uniqueID', '' );

      // Main div attributes
      $divAttr = array(
        'class' => array(
          'mcw-fp-slide',
          'mcw-fp-slide' . $uniqueID,
        ),
        'data-bg-img-id' => $bgImgId,
        'data-anchor' => $anchor,
      );

      // It seems fp-table is only added when vertical centered is enabled, so add it always.
      $verticalAlignmentBlock = $this->GetFieldValue( 'verticalAlignment' );
      if ( 'center' !== $verticalAlignmentBlock ) {
        $divAttr['class'][] = 'fp-table';
      }

      $classes = $this->GetFieldValueAttrDef( $attributes, 'className', '' );
      if ( ! empty( $classes ) ) {
        $divAttr['class'][] = $classes;
      }

      // Check if isVideo attribute is set
      $isVideo = $this->GetFieldValueAttrDef( $attributes, 'isVideo', false );
      if ( $isVideo ) {
        $bgVideoSource = $this->GetFieldValueAttrDef(
          $attributes,
          'bgVideoSource',
          array(
            array(
              'mp4' => array(
                'id' => '',
                'url' => '',
              ),
              'ogv' => array(
                'id' => '',
                'url' => '',
              ),
              'webm' => array(
                'id' => '',
                'url' => '',
              ),
              'url' => '',
            ),
          )
        );

        $iWideo = array(
          'wrapperClass' => 'iwideo-wrapper fp-bg',
          'src' => '',
          'poster' => $this->GetFieldValueAttrDef( $attributes, 'bgImg', '' ),
          'posterStyle' => array(
            'size' => $this->GetFieldValueAttrDef( $attributes, 'bgImgSize', 'cover' ),
            'position' => $this->GetFieldValueAttrDef( $attributes, 'bgImgPosition', 'center center' ),
            'repeat' => $this->GetFieldValueAttrDef( $attributes, 'bgImgRepeat', 'no-repeat' ),
            'attachment' => $this->GetFieldValueAttrDef( $attributes, 'bgImgAttachment', 'scroll' ),
          ),
          'loop' => $this->GetFieldValueAttrDef( $attributes, 'bgVideoLoop', true ),
          'mute' => $this->GetFieldValueAttrDef( $attributes, 'bgVideoMute', true ),
          'autoplay' => $this->GetFieldValueAttrDef( $attributes, 'bgVideoAutoPlay', true ),
        );

        if ( $this->GetFieldValueAttrDef( $attributes, 'bgVideoType', 'cloud' ) === 'local' ) {
          $iWideo['src'] = array();
          $iWideo['src']['mp4'] = $bgVideoSource[0]['mp4']['url'];
          $iWideo['src']['ogv'] = $bgVideoSource[0]['ogv']['url'];
          $iWideo['src']['webm'] = $bgVideoSource[0]['webm']['url'];
        } else {
          $iWideo['src'] = $bgVideoSource[0]['url'];
        }

        if ( $this->GetFieldValueAttrDef( $attributes, 'bgVideoIsMobile', false ) === true ) {
          $iWideo['isMobile'] = false;
        }

        if ( $this->GetFieldValueAttrDef( $attributes, 'bgVideoAlwaysPlay', false ) === true ) {
          $iWideo['extra']['data-keepplaying'] = true;
        } elseif ( $this->GetFieldValueAttrDef( $attributes, 'bgVideoAutoPlay', true ) === true ) {
          $iWideo['extra']['data-autoplay'] = true;
        }

        $bgVideoExtra = $this->GetFieldValueAttrDef( $attributes, 'bgVideoExtra', '' );
        if ( '' !== $bgVideoExtra ) {
          $pieces = explode( ',', $bgVideoExtra );
          foreach ( $pieces as $piece ) {
            $pair = explode( ':', $piece );
            if ( isset( $pair ) && ! empty( $pair ) && ! empty( $pair[0] ) ) {
              $iWideo[ trim( $pair[0] ) ] = trim( $pair[1] );
            }
          }
        }

        $divAttr['data-iwideo'] = $this->EncodeURIComponent( wp_json_encode( $iWideo, JSON_UNESCAPED_SLASHES ) );
      }

      return '<div' . $this->MergeHTMLAttributes( $divAttr ) . '>' . trim( $content ) . '</div>';
    }

    public function OnEnqueueBlockAssets() {
      // Do not enqueue on admin
      if ( is_admin() ) {
        return;
      }

      if ( ! ( $this->pluginSettings->GetLicenseKey() && $this->pluginSettings->GetLicenseState() ) ) {
        return;
      }

      if ( ! $this->IsFullPageEnabled() ) {
        return;
      }

      wp_enqueue_style(
        McwFullPageGutenbergGlobals::FullPageScriptName(),
        McwFullPageGutenbergGlobals::Url() . 'fullpage/fullpage.min.css',
        array(),
        McwFullPageGutenbergGlobals::FullPageVersion(),
        'all'
      );

      // Section navigation CSS
      $nav = $this->GetNavigationStyle();
      if ( $nav ) {
        wp_enqueue_style(
          $this->tag . '-section-navigation',
          McwFullPageGutenbergGlobals::Url() . 'fullpage/nav/section/' . $nav . '.min.css',
          array( McwFullPageGutenbergGlobals::FullPageScriptName() ),
          McwFullPageGutenbergGlobals::FullPageVersion(),
          'all'
        );
      }

      $nav = $this->GetNavigationSlideStyle();
      if ( $nav ) {
        wp_enqueue_style(
          $this->tag . '-slide-navigation',
          McwFullPageGutenbergGlobals::Url() . 'fullpage/nav/slide/' . $nav . '.min.css',
          array( McwFullPageGutenbergGlobals::FullPageScriptName() ),
          McwFullPageGutenbergGlobals::FullPageVersion(),
          'all'
        );
      }

      $dep = array();
      if ( $this->IsFieldEnabled( 'enableJQuery' ) ) {
        $dep[] = 'jquery';
      }

      if ( $this->IsFieldEnabled( 'isVideoChild' ) ) {
        wp_enqueue_script( 'mcw_fp_iwideo', McwFullPageGutenbergGlobals::Url() . 'assets/iwideo.min.js', $dep, '1.1.18', true );
        $dep[] = 'mcw_fp_iwideo';
      }

      // Add easing js file
      if ( ! $this->IsFieldEnabled( 'easingCSSEnable' ) ) {
        wp_enqueue_script(
          $this->tag . '-easing-js',
          McwFullPageGutenbergGlobals::Url() . 'fullpage/vendors/easings.min.js',
          $dep,
          '1.3',
          true
        );
        $dep[] = $this->tag . '-easing-js';
      }

      // Add filter
      if ( has_filter( 'mcw-fullpage-enqueue' ) ) {
        $dep = apply_filters( 'mcw-fullpage-enqueue', $dep, $this );
      }

      // Add fullpage JS file
      $jsPath = ( ! McwFullPageCommonLocal::GetState( $this->tag ) || $this->IsFieldEnabled( 'enableExtensions' ) ) ? 'fullpage/fullpage.extensions.min.js' : 'fullpage/fullpage.min.js';
      wp_enqueue_script(
        McwFullPageGutenbergGlobals::FullPageScriptName() . '-js',
        McwFullPageGutenbergGlobals::Url() . $jsPath,
        $dep,
        McwFullPageGutenbergGlobals::FullPageVersion(),
        true
      );
    }

    // Called by template_redirect action
    public function OnTemplateRedirect() {
      $path = $this->GetTemplatePath( true );

      if ( false === $path ) {
        return;
      }

      include $path;
      exit();
    }

    // Called by template_include filter
    public function OnTemplateInclude( $template ) {
      $path = $this->GetTemplatePath( false );

      if ( false === $path ) {
        return $template;
      }

      return $path;
    }

    // Remove unwanted JS from header
    // Called by wp_print_scripts action
    public function OnWpPrintScripts() {
      // Get post
      global $post;
      // Get global scripts
      global $wp_scripts;

      if ( ! ( isset( $post ) && is_object( $post ) ) ) {
        return;
      }

      // Check if fullpage is enabled
      if ( ! $this->IsFullPageEnabled() ) {
        return false;
      }

      // Check if remove theme js is enabled
      if ( $this->GetFieldValue( 'removeThemeJS' ) ) {
        // Error handling
        if ( isset( $wp_scripts ) && isset( $wp_scripts->registered ) ) {
          // Get theme URL
          $themeUrl = get_bloginfo( 'template_directory' );

          // Remove theme related scripts
          foreach ( $wp_scripts->registered as $key => $script ) {
            if ( isset( $script->src ) ) {
              if ( stristr( $script->src, $themeUrl ) !== false ) {
                // Remove theme js
                unset( $wp_scripts->registered[ $key ] );
                // Remove from queue
                if ( isset( $wp_scripts->queue ) ) {
                  $wp_scripts->queue = array_diff( $wp_scripts->queue, array( $key ) );
                  $wp_scripts->queue = array_values( $wp_scripts->queue );
                }
              }
            }
          }
        }
      }

      // Check if remove js is enabled
      $removeJS = array_filter( explode( ',', $this->GetFieldValue( 'removeJS', '' ) ) );
      if ( isset( $removeJS ) && is_array( $removeJS ) && ! empty( $removeJS ) ) {
        // Error handling
        if ( isset( $wp_scripts ) && isset( $wp_scripts->registered ) ) {
          // Remove scripts
          foreach ( $wp_scripts->registered as $key => $script ) {
            if ( isset( $script->src ) ) {
              foreach ( $removeJS as $remove ) {
                if ( ! isset( $remove ) ) {
                  continue;
                }
                // Trim js
                $remove = trim( $remove );
                // Check if script includes the removed JS
                if ( stristr( $script->src, $remove ) !== false ) {
                  // Remove js
                  unset( $wp_scripts->registered[ $key ] );
                  // Remove from queue
                  if ( isset( $wp_scripts->queue ) ) {
                    $wp_scripts->queue = array_diff( $wp_scripts->queue, array( $key ) );
                    $wp_scripts->queue = array_values( $wp_scripts->queue );
                  }
                }
              }
            }
          }
        }
      }
    }

    public function OnBodyClass( $classes ) {
      if ( ! ( $this->pluginSettings->GetLicenseKey() && $this->pluginSettings->GetLicenseState() ) ) {
        return $classes;
      }

      if ( ! $this->IsFullPageEnabled() ) {
        return $classes;
      }

      $extra = 'wp-';
      if ( ! McwFullPageCommonLocal::GetState( $this->tag ) ) {
        $extra .= 'fullpage';
        $classes[] = $extra . '-js';
      }

      if ( 'off' !== $this->GetFieldValue( 'navigation' ) && $this->IsFieldEnabled( 'navigationBig' ) ) {
        $classes[] = 'fp-big-nav';
      }

      if ( 'off' !== $this->GetFieldValue( 'navigationSlide' ) && $this->IsFieldEnabled( 'navigationSlideBig' ) ) {
        $classes[] = 'fp-big-slide-nav';
      }

      return $classes;
    }

    private function ParseBlocks( $content ) {
      $parser_class = apply_filters( 'block_parser_class', 'WP_Block_Parser' );
      if ( class_exists( $parser_class ) ) {
        $parser = new $parser_class();
        return $parser->parse( $content );
      } elseif ( function_exists( 'parse_blocks' ) ) {
        return parse_blocks( $content );
      } elseif ( function_exists( 'gutenberg_parse_blocks' ) ) {
        return gutenberg_parse_blocks( $content );
      } else {
        return false;
      }
    }

    private function GetFieldValueAttr( $attributes, $id ) {
      // Set the default value
      $default = isset( $this->attributes[ $id ] ) ? $this->attributes[ $id ] : null;

      if ( ! is_array( $attributes ) || empty( $attributes ) ) {
        return $default;
      }

      $val = isset( $attributes[ $id ] ) ? $attributes[ $id ] : $default;

      // Add filter
      if ( has_filter( 'mcw_fp_guten_field' ) ) {
        $val = apply_filters( 'mcw_fp_guten_field', $val, $id );
      }

      // Return field value or default
      return $val;
    }

    private function GetFieldValueAttrDef( $attributes, $id, $defaultt ) {
      if ( ! is_array( $attributes ) || empty( $attributes ) ) {
        return $defaultt;
      }

      // Return field value or default
      return isset( $attributes[ $id ] ) ? $attributes[ $id ] : $defaultt;
    }

    private function GetFieldValue( $id ) {
      if ( ! $this->blockAttributesReady ) {
        // Set the default value
        $default = isset( $this->attributes[ $id ] ) ? $this->attributes[ $id ] : null;

        // Check Gutenberg functions
        if ( ! ( function_exists( 'has_blocks' ) && has_blocks( get_the_ID() ) ) ) {
          return $default;
        }

        // Get post
        global $post;
        if ( ! is_object( $post ) ) {
          return $default;
        }

        $this->blockAttributesReady = true;

        // Parse blocks
        $blocks = $this->ParseBlocks( $post->post_content );
        if ( ! is_array( $blocks ) || empty( $blocks ) ) {
          return $default;
        }

        foreach ( $blocks as $indexkey => $block ) {
          if ( ! is_object( $block ) && is_array( $block ) && isset( $block['blockName'] ) ) {
            if ( $this->blockName === $block['blockName'] ) {
              if ( isset( $block['attrs'] ) && is_array( $block['attrs'] ) ) {
                $this->blockAttributes = $block['attrs'];
                break;
              }
            }
          }
        }
      }

      return $this->GetFieldValueAttr( $this->blockAttributes, $id );
    }

    private function IsFieldEnabledAttr( $attributes, $id ) {
      // Get field value
      $val = $this->GetFieldValueAttr( $attributes, $id );

      // Return true if field is on
      return isset( $val ) && $val;
    }

    private function IsFieldEnabled( $id ) {
      // Get field value
      $val = $this->GetFieldValue( $id );

      // Return true if field is on
      return isset( $val ) && $val;
    }

    // Returns true if the specified field is on
    private function IsFieldOnAttr( $attributes, $id ) {
      return $this->IsFieldEnabledAttr( $attributes, $id ) ? 'true' : 'false';
    }

    private function GetExtensionOptions( $extensions, $id ) {
      if ( count( $extensions ) > 0 ) {
        if ( isset( $extensions[0][ $id ] ) && is_array( $extensions[0][ $id ] ) ) {
          if ( isset( $extensions[0][ $id ]['enabled'] ) && isset( $extensions[0][ $id ]['parameters'] ) ) {
            return $extensions[0][ $id ];
          }
        }
      }

      return false;
    }

    public function IsFullPageExtensionEnabled( $extension = false ) {
      if ( ! ( $this->pluginSettings->GetLicenseKey() && $this->pluginSettings->GetLicenseState() ) ) {
        return false;
      }

      if ( ! $this->IsFullPageEnabled() ) {
        return false;
      }

      $enabled = $this->IsFieldEnabled( 'enableExtensions' );

      if ( false === $extension ) {
        return $enabled;
      }

      if ( ! $enabled ) {
        return $enabled;
      }

      $ext = $this->GetExtensionOptions( $this->GetFieldValue( 'extensions' ), $extension );
      return $ext ? $ext['enabled'] : false;
    }

    private function GetTemplatePath( $redirect ) {
      // Get post
      global $post;
      if ( ! ( isset( $post ) && is_object( $post ) ) ) {
        return false;
      }

      if ( is_archive() ) {
        return false;
      }

      if ( ! ( $this->pluginSettings->GetLicenseKey() && $this->pluginSettings->GetLicenseState() ) ) {
        return false;
      }

      // Check if fullpage is enabled
      if ( ! $this->IsFullPageEnabled() ) {
        return false;
      }

      // Check if template is enabled
      if ( ! $this->IsFieldEnabled( 'enableTemplate' ) ) {
        return false;
      }

      if ( $redirect ) {
        // Check if template redirect is enabled
        if ( ! $this->IsFieldEnabled( 'enableTemplateRedirect' ) ) {
          return false;
        }
      } else {
        if ( $this->IsFieldEnabled( 'enableTemplateRedirect' ) ) {
          return false;
        }
      }

      $path = trim( $this->GetFieldValue( 'templatePath' ) );
      if ( '' === $path ) {
        $path = plugin_dir_path( dirname( __FILE__ ) ) . 'template/template.php';
      }

      // Add filter
      if ( has_filter( 'mcw_fp_template' ) ) {
        $path = apply_filters( 'mcw_fp_template', $path );
      }

      if ( empty( $path ) ) {
        return false;
      }

      return $path;
    }

    private function IsFullPageEnabled() {
      return $this->GetFieldValue( 'enabled' );
    }

    private function GetNavigationStyle() {
      if ( $this->GetFieldValue( 'navigation' ) !== 'off' ) {
        return $this->GetFieldValue( 'navigationStyle' );
      }

      return false;
    }

    private function GetNavigationSlideStyle() {
      if ( $this->GetFieldValue( 'navigationSlide' ) !== 'off' ) {
        return $this->GetFieldValue( 'navigationSlideStyle' );
      }

      return false;
    }

    private function ImplodeParams( $parameters, $extras = '' ) {
      $paramStr = '';
      foreach ( $parameters as $key => $value ) {
        if ( isset( $value ) && ! empty( $value ) ) {
          if ( is_array( $value ) && isset( $value['raw'] ) ) {
            $paramStr .= $key . ':' . $value['raw'] . ',';
          } elseif ( 'false' === $value || 'true' === $value || 'null' === $value || is_numeric( $value ) ) {
            $paramStr .= $key . ':' . $value . ',';
          } else {
            $paramStr .= $key . ':"' . $value . '",';
          }
        }
      }
      $paramStr .= $extras;
      return '{' . rtrim( $paramStr, ',' ) . '}';
    }

    private function Decode( $input ) {
      $codes = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';

      // Strip tags first
      $input = strip_tags( $input );

      // Check if input is null
      if ( null === $input ) {
        return '';
      }

      if ( empty( $input ) ) {
        return '';
      }

      // Check if the string is valid
      if ( 0 !== ( strlen( $input ) % 4 ) ) {
        return '';
      }

      $decoded[] = ( ( strlen( $input ) * 3 ) / 4 ) - ( strrpos( $input, '=' ) > 0 ? ( strlen( $input ) - strrpos( $input, '=' ) ) : 0 );
      $inChars = str_split( $input );
      $j = 0;
      $b = array();
      $count = count( $inChars );
      for ( $i = 0; $i < $count; $i += 4 ) {
        $b[0] = strpos( $codes, $inChars[ $i ] );
        $b[1] = strpos( $codes, $inChars[ $i + 1 ] );
        $b[2] = strpos( $codes, $inChars[ $i + 2 ] );
        $b[3] = strpos( $codes, $inChars[ $i + 3 ] );
        $decoded[ $j++ ] = ( ( $b[0] << 2 ) | ( $b[1] >> 4 ) );

        if ( $b[2] < 64 ) {
          $decoded[ $j++ ] = ( ( $b[1] << 4 ) | ( $b[2] >> 2 ) );
          if ( $b[3] < 64 ) {
            $decoded[ $j++ ] = ( ( $b[2] << 6 ) | $b[3] );
          }
        }
      }

      $decodedStr = '';
      $count = count( $decoded );
      for ( $i = 0; $i < $count; $i++ ) {
        $decodedStr .= chr( $decoded[ $i ] );
      }

      return $decodedStr;
    }

    private function MinimizeJavascriptSimple( $js ) {
      return preg_replace( array( '/\s+\n/', '/\n\s+/', '/ +/', '/\{\s+/', '/\s+=\s+/', '/\s*;\s*/' ), array( '', '', ' ', '{', '=', ';' ), $js );
    }

    private function MinimizeJavascriptAdvanced( $js, $level = 3 ) {
      if ( $level <= 0 ) {
        return $js;
      }

      if ( $level >= 1 ) {
        // Remove single-line code comments
        $js = preg_replace( '/^[\t ]*?\/\/.*\s?/m', '', $js );

        // Remove end-of-line code comments
        $js = preg_replace( '/([\s;})]+)\/\/.*/m', '\\1', $js );

        // Remove multi-line code comments
        $js = preg_replace( '/\/\*[\s\S]*?\*\//', '', $js );
      }

      if ( $level >= 2 ) {
        // Remove leading whitespace
        $js = preg_replace( '/^\s*/m', '', $js );

        // Replace multiple tabs with a single space
        $js = preg_replace( '/\t+/m', ' ', $js );
      }

      if ( $level >= 3 ) {
        // Remove newlines
        $js = preg_replace( '/[\r\n]+/', '', $js );
      }

      // Return final minified JavaScript
      return trim( $js );
    }

    private function MinimizeCSS( $css ) {
      return preg_replace(
        array(
            // Remove comment(s)
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')|\/\*(?!\!)(?>.*?\*\/)|^\s*|\s*$#s',
            // Remove unused white-space(s)
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/))|\s*+;\s*+(})\s*+|\s*+([*$~^|]?+=|[{};,>~]|\s(?![0-9\.])|!important\b)\s*+|([[(:])\s++|\s++([])])|\s++(:)\s*+(?!(?>[^{}"\']++|"(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')*+{)|^\s++|\s++\z|(\s)\s+#si',
            // Replace `0(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)` with `0`
            '#(?<=[\s:])(0)(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)#si',
            // Replace `:0 0 0 0` with `:0`
            '#:(0\s+0|0\s+0\s+0\s+0)(?=[;\}]|\!important)#i',
            // Replace `background-position:0` with `background-position:0 0`
            '#(background-position):0(?=[;\}])#si',
            // Replace `0.6` with `.6`, but only when preceded by `:`, `,`, `-` or a white-space
            '#(?<=[\s:,\-])0+\.(\d+)#s',
            // Minify string value
            '#(\/\*(?>.*?\*\/))|(?<!content\:)([\'"])([a-z_][a-z0-9\-_]*?)\2(?=[\s\{\}\];,])#si',
            '#(\/\*(?>.*?\*\/))|(\burl\()([\'"])([^\s]+?)\3(\))#si',
            // Minify HEX color code
            // '#(?<=[\s:,\-]\#)([a-f0-6]+)\1([a-f0-6]+)\2([a-f0-6]+)\3#i',
            // Replace `(border|outline):none` with `(border|outline):0`
            // '#(?<=[\{;])(border|outline):none(?=[;\}\!])#',
            // Remove empty selector(s)
            '#(\/\*(?>.*?\*\/))|(^|[\{\}])(?:[^\s\{\}]+)\{\}#s',
        ),
        array(
            '$1',
            '$1$2$3$4$5$6$7',
            '$1',
            ':0',
            '$1:0 0',
            '.$1',
            '$1$3',
            '$1$2$4$5',
            '$1$2$3',
            '$1:0',
            '$1$2',
        ),
        $css
      );
    }

    private function EncodeURIComponent( $str ) {
      return strtr(
        rawurlencode( $str ),
        array(
          '%21' => '!',
          '%2A' => '*',
          '%27' => "'",
          '%28' => '(',
          '%29' => ')',
        )
      );
    }

    private function MergeHTMLAttributes( $attributes ) {
      $output = '';
      foreach ( $attributes as $key => $value ) {
        if ( ! $value ) {
          continue;
        }

        if ( empty( $value ) ) {
          continue;
        }

        if ( is_array( $value ) ) {
          $output .= ' ' . $key . '="' . implode( ' ', $value ) . '"';
        } else {
          $output .= ' ' . $key . '="' . trim( $value ) . '"';
        }
      }

      return $output;
    }

    private function GetExtensionsInfo( $extension = '' ) {
      $extensions = McwFullPageGutenbergGlobals::GetExtensions();

      if ( empty( $extension ) ) {
        return $extensions;
      }

      return $extensions[ $extension ];
    }

    private function GetFullPageJS( $attributes ) {
      $customizationScripts = array(
        // removeThemeMargins
        'removeThemeMargins' => '
          function getParentsUntil(elem, parent, selector){
            if (!Element.prototype.matches) {
              Element.prototype.matches = Element.prototype.matchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector || Element.prototype.oMatchesSelector || Element.prototype.webkitMatchesSelector || function(s) {
                var matches = (this.document || this.ownerDocument).querySelectorAll(s);
                var i = matches.length;
                while(--i >= 0 && matches.item(i) !== this) {}
                return i > -1;
              };
            }

            var parents = [];
            for (;elem && elem !== document; elem = elem.parentNode) {
              if (parent) {
                if (elem.matches(parent)) break;
              }

              if (selector) {
                if (elem.matches(selector)) {
                  parents.push(elem);
                }
                break;
              }
              parents.push(elem);
            }
            return parents;
          }
          Array.prototype.forEach.call(getParentsUntil( document.querySelector(".' . $this->wrapper . '"), "body" ), function(el, i){
            if (el.classList) el.classList.add("mcw_fp_nomargin");
            else el.className += " mcw_fp_nomargin";
          });
        ',

        // fixedThemeHeader
        'fixedThemeHeader' => '
          function outerHeight(el) {
            if (!el) return 0;
            var height = el.offsetHeight;
            var style = getComputedStyle(el);
            return height + parseInt(style.marginTop) + parseInt(style.marginBottom);
          }
          function headerPadding(header, selector){
            var el = document.querySelectorAll(header);
            if (el.length == 0) return;
            var height = outerHeight(el[0]);

            [].slice.call( document.querySelectorAll(selector) ).forEach(function(eli){
              eli.style.paddingTop = height + "px";
            });

            [].slice.call( document.querySelectorAll(".fp-controlArrow") ).forEach(function(eli){
              eli.style.marginTop = ((height - outerHeight(eli)) / 2) + "px";
            });

            [].slice.call( document.querySelectorAll("#fp-nav") ).forEach(function(eli){
              eli.style.paddingTop = (height / 2) + "px";
            });

            fullpage_api.reBuild();

            return height;
          }
        ',

        // toggleThemeHeader
        'toggleThemeHeader' => '
          if (direction) {
            document.body.classList.remove("fp-direction-last-" + (direction === "up" ? "down" : "up"));
            document.body.classList.add("fp-direction-last-" + direction);
          }
        ',

        // moveFooter
        'moveFooter' => '
          var f = document.querySelector("%s");
          if (f) {
            var d = document.createElement("div");
            d.classList.add("mcw-fp-section", "fp-footer-section", "fp-auto-height");
            ' . ( $this->GetFieldValueAttr( $attributes, 'disableAnchors' ) ? '' : 'd.setAttribute("data-anchor", "footer");' ) . '
            d.appendChild(f);
            document.querySelector(".mcw-fp-section").parentElement.appendChild(d);
          }
        ',

        // videoAutoplay
        'videoAutoplay' => '
          function videoAutoplay(element){
            element = element ? element : document;
            var elements = element.querySelectorAll(\'video,audio,iframe[src*="youtube.com/embed/"]\');
            Array.prototype.forEach.call(elements, function(el, i){
              if (!el.hasAttribute("data-autoplay")) el.setAttribute("data-autoplay", "true");
            });
          }
        ',

        // videoKeepPlaying
        'videoKeepPlaying' => '
          function videoKeepPlaying(element){
            element = element ? element : document;
            var elements = element.querySelectorAll(\'video,audio,iframe[src*="youtube.com/embed/"]\');
            Array.prototype.forEach.call(elements, function(el, i){
              if (!el.hasAttribute("data-keepplaying")) el.setAttribute("data-keepplaying", "true");
            });
          }
        ',

        'clickTooltip' => '
          function clickTooltip(){
            Array.prototype.forEach.call(document.querySelectorAll("#fp-nav ul li .fp-tooltip"), function(t, i){
              t.addEventListener("click", function(e) {
                if (event.target && event.target.parentElement && event.target.parentElement.tagName == "LI") {
                  event.target.parentElement.querySelector("a").dispatchEvent(new MouseEvent("click", {
                    bubbles: true,
                    cancelable: true,
                    view: window
                  }));
                }
              });
            });
          }
        ',
      );

      // FullPage parameters
      $parameters = array();
      $parameters['licenseKey'] = $this->pluginSettings->GetLicenseKeyGen();
      $parameters['observer'] = $this->IsFieldOnAttr( $attributes, 'observer' );
      $parameters['credits'] = 'false';
      $parameters['scrollBeyondFullpage'] = 'false';

      $parameters['sectionSelector'] = '.mcw-fp-section';
      $parameters['slideSelector'] = '.mcw-fp-slide';

      // Customizations
      {
        $extras = $this->GetFieldValueAttr( $attributes, 'extraParameters' );

        $customizations = array(
          'before' => '',
          'after' => 'window.fullpage_api.wordpress={name:"gutenberg",version:"' . McwFullPageGutenbergGlobals::Version() . '"};',
          'afterRender' => '',
          'afterResize' => '',
          'afterLoad' => '',
          'beforeLeave' => '',
          'onLeave' => '',
          'afterSlideLoad' => '',
          'onSlideLeave' => '',
          'onScrollOverflow' => '',
        );

        // This moves background images directly under the section
        $customizations['afterRender'] .= '[].slice.call( document.querySelectorAll(".fp-bg") ).forEach(function(eli){
          var prnt = eli;
          do {
            prnt = prnt.parentElement;
          } while ( prnt && prnt.nodeType === 1 && ! ( prnt.classList.contains("fp-section") || prnt.classList.contains("fp-slide") ) );
          if ( prnt ) {
            prnt.insertBefore( eli, prnt.childNodes[0] );
          }
        });';

        if ( $this->IsFieldEnabledAttr( $attributes, 'fixedThemeHeader' ) ) {
          $selector = $this->GetFieldValueAttr( $attributes, 'fixedThemeHeaderSelector' );
          if ( $this->IsFieldEnabledAttr( $attributes, 'fixedThemeHeaderToggle' ) ) {
            $customizations['onLeave'] .= sprintf( $customizationScripts['toggleThemeHeader'], $selector );
          }

          if ( $this->IsFieldEnabledAttr( $attributes, 'fixedThemeHeaderPadding' ) ) {
            $headerPaddingScriptCall = sprintf( 'headerPadding("%s","%s");', $selector, '.mcw-fp-section:not(.mcw-fp-section-slide)' );
            $headerPaddingScriptCall .= sprintf( 'headerPadding("%s","%s");', $selector, '.mcw-fp-section.mcw-fp-section-slide .mcw-fp-slide' );
            $customizations['afterRender'] .= $headerPaddingScriptCall;
            $customizations['afterResize'] .= $headerPaddingScriptCall;

            $customizations['before'] .= $customizationScripts['fixedThemeHeader'];
          }
        }

        if ( $this->IsFieldEnabledAttr( $attributes, 'moveFooter' ) ) {
          $selector = $this->GetFieldValueAttr( $attributes, 'moveFooterSelector' );
          $customizations['before'] .= sprintf( $customizationScripts['moveFooter'], $selector );
        }

        if ( $this->IsFieldEnabledAttr( $attributes, 'videoAutoplay' ) ) {
          $customizations['before'] .= $customizationScripts['videoAutoplay'];
          $customizations['afterRender'] .= 'videoAutoplay(document.querySelector(".' . $this->wrapper . '"));';
          $customizations['afterLoad'] .= 'videoAutoplay(document.querySelector(".' . $this->wrapper . '"));';
        }

        if ( $this->IsFieldEnabledAttr( $attributes, 'videoKeepPlaying' ) ) {
          $customizations['before'] .= $customizationScripts['videoKeepPlaying'];
          $customizations['afterRender'] .= 'videoKeepPlaying(document.querySelector(".' . $this->wrapper . '"));';
          $customizations['afterLoad'] .= 'videoKeepPlaying(document.querySelector(".' . $this->wrapper . '"));';
        }

        if ( $this->IsFieldEnabledAttr( $attributes, 'removeThemeMargins' ) ) {
          $customizations['before'] .= $customizationScripts['removeThemeMargins'];
        }

        if ( $this->IsFieldEnabledAttr( $attributes, 'isVideoChild' ) ) {
          $customizations['afterResize'] .= 'iwideo.resize();';
        }

        if ( $this->GetFieldValueAttr( $attributes, 'navigationButtons' ) !== 'off' ) {
          $customizations['afterRender'] .= 'document.querySelector(".fp-navigation-up").addEventListener("click",function(){fullpage_api.moveSectionUp();});document.querySelector(".fp-navigation-down").addEventListener("click",function(){fullpage_api.moveSectionDown();});';
        }
      }

      // Navigation parameters
      {
        $nav = $this->GetFieldValueAttr( $attributes, 'navigation' );
        $parameters['navigation'] = ( 'off' === $nav ) ? 'false' : 'true';
        if ( 'off' !== $nav ) {
          $parameters['navigationPosition'] = ( 'right' === $nav ) ? 'right' : 'left';
          $parameters['showActiveTooltip'] = $this->IsFieldOnAttr( $attributes, 'navigationShowActiveTooltip' );

          if ( $this->IsFieldEnabledAttr( $attributes, 'navigationClickableTooltip' ) ) {
            $customizations['before'] .= $customizationScripts['clickTooltip'];
            $customizations['afterRender'] .= 'clickTooltip();';
          }
        }

        $nav = $this->GetFieldValueAttr( $attributes, 'navigationSlide' );
        $parameters['slidesNavigation'] = ( 'off' === $nav ) ? 'false' : 'true';
        if ( 'off' !== $nav ) {
          // navigationPosition
          $parameters['slidesNavPosition'] = ( 'top' === $nav ) ? 'top' : 'bottom';
        }

        // controlArrows
        $parameters['controlArrows'] = $this->IsFieldOnAttr( $attributes, 'controlArrows' );
        if ( $this->IsFieldEnabledAttr( $attributes, 'controlArrows' ) ) {
          $controlArrowsStyle = $this->GetFieldValueAttr( $attributes, 'controlArrowsStyle' );
          if ( 'modern' === $controlArrowsStyle ) {
            $color = $this->GetFieldValueAttr( $attributes, 'controlArrowsColor' );
            if ( empty( $color ) ) {
              $color = '#FFFFFF';
            }

            $parameters['controlArrowsHTML'] = array(
              'raw' => sprintf(
                "['<div class=\"fp-arrow\">%1s<\/div>','<div class=\"fp-arrow\">%2s<\/div>']",
                '<svg width="60px" height="80px" viewBox="0 0 50 80" xml:space="preserve"><polyline fill="none" stroke="' . $color . '" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="45.63,75.8 0.375,38.087 45.63,0.375"></polyline></svg>',
                '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60px" height="80px" viewBox="0 0 50 80" xml:space="preserve"><polyline fill="none" stroke="' . $color . '" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="0.375,0.375 45.63,38.087 0.375,75.8 "></polyline></svg>'
              ),
            );
          } elseif ( 'modern-animated' === $controlArrowsStyle ) {
            $parameters['controlArrowsHTML'] = array(
              'raw' => "['<div class=\"fp-arrow\"><i></i><i></i><\/div>','<div class=\"fp-arrow\"><i></i><i></i><\/div>']",
            );
          }
        }
        // lockAnchors
        $parameters['lockAnchors'] = $this->IsFieldOnAttr( $attributes, 'lockAnchors' );
        // animateAnchor
        $parameters['animateAnchor'] = $this->IsFieldOnAttr( $attributes, 'animateAnchor' );
        // keyboardScrolling
        $parameters['keyboardScrolling'] = $this->IsFieldOnAttr( $attributes, 'keyboardScrolling' );
        // recordHistory
        $parameters['recordHistory'] = $this->IsFieldOnAttr( $attributes, 'recordHistory' );
      }

      // Scrolling parameters
      {
        // autoScrolling
        $parameters['autoScrolling'] = $this->IsFieldOnAttr( $attributes, 'autoScrolling' );
        // fitToSection
        $parameters['fitToSection'] = $this->IsFieldOnAttr( $attributes, 'fitToSection' );
        // fitToSectionDelay
        $parameters['fitToSectionDelay'] = $this->GetFieldValueAttr( $attributes, 'fitToSectionDelay' );
        // scrollBar
        $parameters['scrollBar'] = $this->IsFieldOnAttr( $attributes, 'scrollBar' );

        if ( $this->IsFieldEnabledAttr( $attributes, 'scrollBar' ) ) {
          $parameters['scrollOverflow'] = 'false';
        } else {
          // scrollOverflow
          $parameters['scrollOverflow'] = $this->IsFieldOnAttr( $attributes, 'scrollOverflow' );
          // scrollOverflowMacStyle
          $parameters['scrollOverflowMacStyle'] = $this->IsFieldEnabledAttr( $attributes, 'scrollOverflow' ) ? $this->IsFieldOnAttr( $attributes, 'scrollOverflowMacStyle' ) : 'false';
        }

        $parameters['skipIntermediateItems'] = $this->GetFieldValueAttr( $attributes, 'skipIntermediateItems' );

        // bigSectionsDestination
        $bigSectionsDestination = $this->GetFieldValueAttr( $attributes, 'bigSectionsDestination' );
        $parameters['bigSectionsDestination'] = ( 'default' !== $bigSectionsDestination ) ? $bigSectionsDestination : 'null';

        // continuousVertical, loopBottom, loopTop
        if ( ! $this->IsFieldEnabledAttr( $attributes, 'scrollBar' ) && $this->IsFieldEnabledAttr( $attributes, 'autoScrolling' ) && $this->IsFieldEnabledAttr( $attributes, 'continuousVertical' ) ) {
          $parameters['continuousVertical'] = 'true';
          $parameters['loopBottom'] = 'false';
          $parameters['loopTop'] = 'false';
        } else {
          $parameters['continuousVertical'] = 'false';
          $parameters['loopBottom'] = $this->IsFieldOnAttr( $attributes, 'loopBottom' );
          $parameters['loopTop'] = $this->IsFieldOnAttr( $attributes, 'loopTop' );
        }

        // loopHorizontal
        $parameters['loopHorizontal'] = $this->IsFieldOnAttr( $attributes, 'loopHorizontal' );
        // scrollingSpeed
        $parameters['scrollingSpeed'] = $this->GetFieldValueAttr( $attributes, 'scrollingSpeed' );

        // css3, easingcss3, easing
        if ( $this->IsFieldEnabledAttr( $attributes, 'easingCSSEnable' ) ) {
          $parameters['css3'] = 'true';
          $parameters['easingcss3'] = $this->GetFieldValueAttr( $attributes, 'easingCSS' );
        } else {
          $parameters['css3'] = 'false';
          $parameters['easing'] = $this->GetFieldValueAttr( $attributes, 'easingJS' );
        }
      }

      // Design parameters
      {
        // verticalCentered
        $parameters['verticalCentered'] = $this->GetFieldValueAttr( $attributes, 'verticalAlignment' ) === 'top' ? 'false' : 'true';
        // responsiveWidth
        $parameters['responsiveWidth'] = $this->GetFieldValueAttr( $attributes, 'responsiveWidth' );
        // responsiveHeight
        $parameters['responsiveHeight'] = $this->GetFieldValueAttr( $attributes, 'responsiveHeight' );
        // paddingTop
        $parameters['paddingTop'] = array( 'raw' => '(typeof mcwPaddingTop!=="undefined"&&mcwPaddingTop)?mcwPaddingTop+"px":"0px"' );
        // paddingBottom
        $parameters['paddingBottom'] = '0px';
        // fixedElements
        $parameters['fixedElements'] = $this->GetFieldValueAttr( $attributes, 'fixedElements' );
        // normalScrollElements
        $parameters['normalScrollElements'] = $this->GetFieldValueAttr( $attributes, 'normalScrollElements' );
      }

      // Extension parameters
      if ( $this->IsFieldEnabledAttr( $attributes, 'enableExtensions' ) ) {
        $extensions = $this->GetExtensionsInfo();
        $extensionKeys = apply_filters( 'mcw-fullpage-extension-key', array() );

        foreach ( $extensions as $key => $value ) {
          $extensions[ $key ]['key'] = array_key_exists( $key, $extensionKeys ) ? $extensionKeys[ $key ] : '';
        }

        $extensionFields = $this->GetFieldValueAttr( $attributes, 'extensions' );

        // Continuous Horizontal extension
        if ( $extensions['continuous-horizontal']['active'] ) {
          $ext = $this->GetExtensionOptions( $extensionFields, 'continuous-horizontal' );
          if ( false !== $ext && false !== $ext['enabled'] ) {
            $parameters['continuousHorizontal'] = 'true';
            $parameters['continuousHorizontalKey'] = $extensions['continuous-horizontal']['key'];
          }
        }

        // Drag And Move extension
        if ( $extensions['drag-and-move']['active'] ) {
          $ext = $this->GetExtensionOptions( $extensionFields, 'drag-and-move' );
          if ( false !== $ext && false !== $ext['enabled'] ) {
            $val = $this->GetFieldValueAttrDef( $ext['parameters'], 'dragAndMove', 'true' );
            $parameters['dragAndMove'] = true === $val ? 'true' : $val;
            $parameters['dragAndMoveKey'] = $extensions['drag-and-move']['key'];
          }
        }

        // Fading Effect extension
        if ( $extensions['fading-effect']['active'] ) {
          $ext = $this->GetExtensionOptions( $extensionFields, 'fading-effect' );
          if ( false !== $ext && false !== $ext['enabled'] ) {
            $val = $this->GetFieldValueAttrDef( $ext['parameters'], 'fadingEffect', 'true' );
            $parameters['fadingEffect'] = true === $val ? 'true' : $val;
            $parameters['fadingEffectKey'] = $extensions['fading-effect']['key'];
          }
        }

        // Interlocked Slides extension
        if ( $extensions['interlocked-slides']['active'] ) {
          $ext = $this->GetExtensionOptions( $extensionFields, 'interlocked-slides' );
          if ( false !== $ext && false !== $ext['enabled'] ) {
            $parameters['interlockedSlides'] = 'true';
            $parameters['interlockedSlidesKey'] = $extensions['interlocked-slides']['key'];
          }
        }

        // Offset Sections extension
        if ( $extensions['offset-sections']['active'] ) {
          $ext = $this->GetExtensionOptions( $extensionFields, 'offset-sections' );
          if ( false !== $ext && false !== $ext['enabled'] ) {
            $parameters['offsetSections'] = 'true';
            $parameters['offsetSectionsKey'] = $extensions['offset-sections']['key'];
          }
        }

        // Parallax extension
        if ( $extensions['parallax']['active'] ) {
          $ext = $this->GetExtensionOptions( $extensionFields, 'parallax' );
          if ( false !== $ext && false !== $ext['enabled'] ) {
            $val = $this->GetFieldValueAttrDef( $ext['parameters'], 'parallax', 'true' );
            $parameters['parallax'] = true === $val ? 'true' : $val;
            $parameters['parallaxKey'] = $extensions['parallax']['key'];
            $parameters['parallaxOptions'] = array(
              'raw' => $this->ImplodeParams(
                array(
                  'type' => $this->GetFieldValueAttrDef( $ext['parameters']['parallaxOptions'], 'type', 'reveal' ),
                  'percentage' => $this->GetFieldValueAttrDef( $ext['parameters']['parallaxOptions'], 'percentage', 62 ),
                  'property' => 'translate',
                )
              ),
            );
          }
        }

        // Reset Sliders extension
        if ( $extensions['reset-sliders']['active'] ) {
          $ext = $this->GetExtensionOptions( $extensionFields, 'reset-sliders' );
          if ( false !== $ext && false !== $ext['enabled'] ) {
            $parameters['resetSliders'] = 'true';
            $parameters['resetSlidersKey'] = $extensions['reset-sliders']['key'];
          }
        }

        // Responsive Slides extension
        if ( $extensions['responsive-slides']['active'] ) {
          $ext = $this->GetExtensionOptions( $extensionFields, 'responsive-slides' );
          if ( false !== $ext && false !== $ext['enabled'] ) {
            $parameters['responsiveSlides'] = 'true';
            $parameters['responsiveSlidesKey'] = $extensions['responsive-slides']['key'];
          }
        }

        // Scroll Horizontally extension
        if ( $extensions['scroll-horizontally']['active'] ) {
          $ext = $this->GetExtensionOptions( $extensionFields, 'scroll-horizontally' );
          if ( false !== $ext && false !== $ext['enabled'] ) {
            $parameters['scrollHorizontally'] = 'true';
            $parameters['scrollHorizontallyKey'] = $extensions['scroll-horizontally']['key'];
          }
        }

        // Scroll Overflow Reset extension
        if ( $extensions['scroll-overflow-reset']['active'] ) {
          $ext = $this->GetExtensionOptions( $extensionFields, 'scroll-overflow-reset' );
          if ( false !== $ext && false !== $ext['enabled'] ) {
            $val = $this->GetFieldValueAttrDef( $ext['parameters'], 'scrollOverflowReset', 'true' );
            $parameters['scrollOverflowReset'] = true === $val ? 'true' : $val;
            $parameters['scrollOverflowResetKey'] = $extensions['scroll-overflow-reset']['key'];
          }
        }
      }

      // Events
      {
        $events = array(
          'afterRender' => array(
            'enable' => 'afterRenderEnable',
            'field' => 'afterRender',
            'fn' => 'function(){%s}',
          ),
          'afterResize' => array(
            'enable' => 'afterResizeEnable',
            'field' => 'afterResize',
            'fn' => 'function(width,height){%s}',
          ),
          'afterLoad' => array(
            'enable' => 'afterLoadEnable',
            'field' => 'afterLoad',
            'fn' => 'function(origin,destination,direction,trigger){%s}',
          ),
          'beforeLeave' => array(
            'enable' => 'beforeLeaveEnable',
            'field' => 'beforeLeave',
            'fn' => 'function(origin,destination,direction,trigger){%s}',
          ),
          'onLeave' => array(
            'enable' => 'onLeaveEnable',
            'field' => 'onLeave',
            'fn' => 'function(origin,destination,direction,trigger){%s}',
          ),
          'afterSlideLoad' => array(
            'enable' => 'afterSlideLoadEnable',
            'field' => 'afterSlideLoad',
            'fn' => 'function(section,origin,destination,direction,trigger){%s}',
          ),
          'onSlideLeave' => array(
            'enable' => 'onSlideLeaveEnable',
            'field' => 'onSlideLeave',
            'fn' => 'function(section,origin,destination,direction,trigger){%s}',
          ),
          'onScrollOverflow' => array(
            'enable' => 'onScrollOverflowEnable',
            'field' => 'onScrollOverflow',
            'fn' => 'function(section,slide,position,direction){%s}',
          ),
          'afterResponsive' => array(
            'enable' => 'afterResponsiveEnable',
            'field' => 'afterResponsive',
            'fn' => 'function(isResponsive){%s}',
          ),
          'afterReBuild' => array(
            'enable' => 'afterReBuildEnable',
            'field' => 'afterReBuild',
            'fn' => 'function(){%s}',
          ),
        );

        foreach ( $events as $name => $event ) {
          $script = '';
          if ( isset( $customizations[ $name ] ) && ! empty( $customizations[ $name ] ) ) {
            $script .= $customizations[ $name ];
          }

          if ( $this->IsFieldEnabledAttr( $attributes, $event['enable'] ) ) {
            $script .= $this->MinimizeJavascriptAdvanced( $this->Decode( $this->GetFieldValueAttr( $attributes, $event['field'] ) ) );
          }

          if ( ! empty( $script ) ) {
            $parameters[ $name ] = array( 'raw' => sprintf( $event['fn'], $script ) );
          }
        }

        // beforeFullPage event
        $beforeFullPage = $this->IsFieldEnabledAttr( $attributes, 'beforeFullPageEnable' ) ? $this->Decode( $this->GetFieldValueAttr( $attributes, 'beforeFullPage' ) ) : '';
        // afterFullPage event
        $afterFullPage = $this->IsFieldEnabledAttr( $attributes, 'afterFullPageEnable' ) ? $this->Decode( $this->GetFieldValueAttr( $attributes, 'afterFullPage' ) ) : '';
      }

      $script = $this->IsFieldEnabledAttr( $attributes, 'enableJQuery' )
        ? '(function runFullPage($){(function ready(fn){if (document.attachEvent?document.readyState==="complete":document.readyState!=="loading"){fn();}else{document.addEventListener("DOMContentLoaded",fn);}})(function(){%s%s%s});})(jQuery);'
        : '(function runFullPage(){(function ready(fn){if (document.attachEvent?document.readyState==="complete":document.readyState!=="loading"){fn();}else{document.addEventListener("DOMContentLoaded",fn);}})(function(){%s%s%s});})();';

      return $this->MinimizeJavascriptSimple(
        sprintf(
          $script,
          $customizations['before'] . $beforeFullPage,
          'new fullpage(".' . $this->wrapper . '",' . $this->ImplodeParams( $parameters, $extras ) . ');',
          $customizations['after'] . $afterFullPage
        )
      );
    }

    private function GetFullPageCSS( $attributes, $blocks ) {
      // Default styles
      $css = array(
        '.' . $this->wrapper . ' .fp-slide{position:relative}',
        '.mcw-fp-section-slide>.mcw-fp-section-inner{display:block;height:100%}',
        '.mcw-fp-section-inner,.mcw-fp-slide-inner{display:block;width:100%;box-sizing:border-box}',
      );

      $cssTablet = array();
      $cssMobile = array();

      // Hide fp-sr-only when navigation is enabled
      $navSection = $this->GetFieldValueAttr( $attributes, 'navigation' );
      $navSlide = $this->GetFieldValueAttr( $attributes, 'navigationSlide' );
      if ( ( 'off' !== $navSection ) || ( 'off' !== $navSlide ) ) {
        $css[] = '.fp-sr-only{display:none !important}';
      }

      if ( 'off' !== $navSection ) {
        $tooltipBackground = $this->GetFieldValueAttr( $attributes, 'navigationTooltipBackground' );
        $tooltipColor = $this->GetFieldValueAttr( $attributes, 'navigationTooltipColor' );
        if ( ! empty( $tooltipBackground ) || ! empty( $tooltipColor ) ) {
          $css[] = sprintf(
            '#fp-nav ul li .fp-tooltip{%s%s}',
            empty( $tooltipBackground ) ? '' : ( 'background-color:' . $tooltipBackground . ';' ),
            empty( $tooltipColor ) ? '' : ( 'color:' . $tooltipColor . ';' )
          );
        }

        $tooltipBackground = $this->GetFieldValueAttr( $attributes, 'navigationTooltipBackgroundTablet' );
        $tooltipColor = $this->GetFieldValueAttr( $attributes, 'navigationTooltipColorTablet' );
        if ( ! empty( $tooltipBackground ) || ! empty( $tooltipColor ) ) {
          $cssTablet[] = sprintf(
            '#fp-nav ul li .fp-tooltip{%s%s}',
            empty( $tooltipBackground ) ? '' : ( 'background-color:' . $tooltipBackground . ';' ),
            empty( $tooltipColor ) ? '' : ( 'color:' . $tooltipColor . ';' )
          );
        }

        $tooltipBackground = $this->GetFieldValueAttr( $attributes, 'navigationTooltipBackgroundMobile' );
        $tooltipColor = $this->GetFieldValueAttr( $attributes, 'navigationTooltipColorMobile' );
        if ( ! empty( $tooltipBackground ) || ! empty( $tooltipColor ) ) {
          $cssMobile[] = sprintf(
            '#fp-nav ul li .fp-tooltip{%s%s}',
            empty( $tooltipBackground ) ? '' : ( 'background-color:' . $tooltipBackground . ';' ),
            empty( $tooltipColor ) ? '' : ( 'color:' . $tooltipColor . ';' )
          );
        }

        $css[] = $this->navigationCSS->GetCustomCSS(
          $this->GetNavigationStyle(),
          '#fp-nav',
          $this->GetFieldValueAttr( $attributes, 'navigationColorMain' ),
          $this->GetFieldValueAttr( $attributes, 'navigationColorActive' ),
          $this->GetFieldValueAttr( $attributes, 'navigationColorHover' )
        );

        $cssTablet[] = $this->navigationCSS->GetCustomCSS(
          $this->GetNavigationStyle(),
          '#fp-nav',
          $this->GetFieldValueAttr( $attributes, 'navigationColorMainTablet' ),
          $this->GetFieldValueAttr( $attributes, 'navigationColorActiveTablet' ),
          $this->GetFieldValueAttr( $attributes, 'navigationColorHoverTablet' )
        );

        $cssMobile[] = $this->navigationCSS->GetCustomCSS(
          $this->GetNavigationStyle(),
          '#fp-nav',
          $this->GetFieldValueAttr( $attributes, 'navigationColorMainMobile' ),
          $this->GetFieldValueAttr( $attributes, 'navigationColorActiveMobile' ),
          $this->GetFieldValueAttr( $attributes, 'navigationColorHoverMobile' )
        );

        $css[] = sprintf(
          '#fp-nav{display:%s;}',
          $this->IsFieldEnabledAttr( $attributes, 'navigationShow' ) ? 'block' : 'none'
        );

        $cssTablet[] = sprintf(
          '#fp-nav{display:%s;}',
          $this->IsFieldEnabledAttr( $attributes, 'navigationShowTablet' ) ? 'block' : 'none'
        );

        $cssMobile[] = sprintf(
          '#fp-nav{display:%s;}',
          $this->IsFieldEnabledAttr( $attributes, 'navigationShowMobile' ) ? 'block' : 'none'
        );

        $css[] = sprintf( '#fp-nav.fp-right{right:%1$spx}#fp-nav.fp-left{left:%1$spx}', $this->GetFieldValueAttr( $attributes, 'navigationSpace' ) );
        $cssTablet[] = sprintf( '#fp-nav.fp-right{right:%1$spx}#fp-nav.fp-left{left:%1$spx}', $this->GetFieldValueAttr( $attributes, 'navigationSpaceTablet' ) );
        $cssMobile[] = sprintf( '#fp-nav.fp-right{right:%1$spx}#fp-nav.fp-left{left:%1$spx}', $this->GetFieldValueAttr( $attributes, 'navigationSpaceMobile' ) );
      }

      if ( ( 'off' !== $navSlide ) ) {
        $css[] = $this->navigationCSS->GetCustomCSS(
          $this->GetNavigationSlideStyle(),
          '.fp-slidesNav',
          $this->GetFieldValueAttr( $attributes, 'navigationSlideColorMain' ),
          $this->GetFieldValueAttr( $attributes, 'navigationSlideColorActive' ),
          $this->GetFieldValueAttr( $attributes, 'navigationSlideColorHover' )
        );

        $cssTablet[] = $this->navigationCSS->GetCustomCSS(
          $this->GetNavigationSlideStyle(),
          '.fp-slidesNav',
          $this->GetFieldValueAttr( $attributes, 'navigationSlideColorMainTablet' ),
          $this->GetFieldValueAttr( $attributes, 'navigationSlideColorActiveTablet' ),
          $this->GetFieldValueAttr( $attributes, 'navigationSlideColorHoverTablet' )
        );

        $cssMobile[] = $this->navigationCSS->GetCustomCSS(
          $this->GetNavigationSlideStyle(),
          '.fp-slidesNav',
          $this->GetFieldValueAttr( $attributes, 'navigationSlideColorMainMobile' ),
          $this->GetFieldValueAttr( $attributes, 'navigationSlideColorActiveMobile' ),
          $this->GetFieldValueAttr( $attributes, 'navigationSlideColorHoverMobile' )
        );

        $css[] = sprintf(
          '.fp-slidesNav{display:%s;}',
          $this->IsFieldEnabledAttr( $attributes, 'navigationSlideShow' ) ? 'block' : 'none'
        );

        $cssTablet[] = sprintf(
          '.fp-slidesNav{display:%s;}',
          $this->IsFieldEnabledAttr( $attributes, 'navigationSlideShowTablet' ) ? 'block' : 'none'
        );

        $cssMobile[] = sprintf(
          '.fp-slidesNav{display:%s;}',
          $this->IsFieldEnabledAttr( $attributes, 'navigationSlideShowMobile' ) ? 'block' : 'none'
        );

        $css[] = sprintf( '.fp-slidesNav.fp-bottom{bottom:%1$spx}.fp-slidesNav.fp-top{top:%1$spx}', $this->GetFieldValueAttr( $attributes, 'navigationSlideSpace' ) );
        $cssTablet[] = sprintf( '.fp-slidesNav.fp-bottom{bottom:%1$spx}.fp-slidesNav.fp-top{top:%1$spx}', $this->GetFieldValueAttr( $attributes, 'navigationSlideSpaceTablet' ) );
        $cssMobile[] = sprintf( '.fp-slidesNav.fp-bottom{bottom:%1$spx}.fp-slidesNav.fp-top{top:%1$spx}', $this->GetFieldValueAttr( $attributes, 'navigationSlideSpaceMobile' ) );
      }

      $navButtons = $this->GetFieldValueAttr( $attributes, 'navigationButtons' );
      if ( 'off' !== $navButtons ) {
        $navigationButtonsCSS = '
          .fp-navigation-arrows {
            position: absolute;
            bottom: 5px;
            %1$s: 10px;
            text-align: center;
            width: auto !important;
          }
          .fp-navigation-arrows .fp-navigation-line {
            height: 5px;
            background: %2$s;
          }
          .fp-navigation-arrows .fp-navigation-space {
            height: 2px;
            background: transparent;
          }
          .fp-navigation-arrows .fp-navigation-inner {
            padding: 5px 10px;
            background: %2$s;
            opacity: 0.6;
            text-align: center;
            box-sizing: border-box;
            transition: opacity 0.5s ease-in-out;
          }
          .fp-navigation-arrows .fp-navigation-up:hover .fp-navigation-inner,
          .fp-navigation-arrows .fp-navigation-down:hover .fp-navigation-inner {
            opacity: 1;
          }
          .fp-navigation-arrows svg {
            fill: %3$s;
            width: 20px;
            height: 20px;
          }
          .fp-navigation-arrows .fp-navigation-up, .fp-navigation-arrows .fp-navigation-down {
            width: 40px;
            height: 37px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 5px 0;
          }
        ';
        $navigationButtonsColor = $this->GetFieldValueAttr( $attributes, 'navigationButtonsColor' );
        $navigationButtonsTextColor = $this->GetFieldValueAttr( $attributes, 'navigationButtonsTextColor' );
        $css[] = sprintf(
          $navigationButtonsCSS,
          ( 'left' === $navButtons ) ? 'left' : 'right',
          empty( $navigationButtonsColor ) ? '#157dc4' : $navigationButtonsColor,
          empty( $navigationButtonsTextColor ) ? '#fff' : $navigationButtonsTextColor
        );
      }

      if ( $this->IsFieldEnabledAttr( $attributes, 'removeThemeMargins' ) ) {
        $css[] = '.fp-enabled .mcw_fp_nomargin,.fp-enabled .fp-section{margin:0 !important;width:100% !important;max-width:100% !important;border:none !important}.fp-enabled .mcw_fp_nomargin{padding:0 !important}';
      }

      if ( $this->IsFieldEnabledAttr( $attributes, 'fixedThemeHeader' ) ) {
        $selector = $this->GetFieldValueAttr( $attributes, 'fixedThemeHeaderSelector' );
        $css[] = sprintf(
          '.fp-enabled %1$s{position:fixed!important;left:0!important;right:0!important;width:100%%!important;top:0!important;z-index:9999}.fp-enabled .admin-bar %1$s{top:32px!important}.fp-enabled .fp-section.fp-auto-height{padding-top:0!important}@media screen and (max-width:782px){.fp-enabled .admin-bar %1$s{top:46px!important}}',
          $selector
        );

        if ( $this->IsFieldEnabledAttr( $attributes, 'fixedThemeHeaderToggle' ) ) {
          $css[] = sprintf(
            '.fp-enabled .fp-direction-last-down %1$s,.fp-enabled .fp-direction-last-up %1$s{transition:transform %2$sms ease}.fp-enabled %1$s{transform:translateY(0)}.fp-enabled .fp-direction-last-down %1$s{transform:translateY(-100%%)}',
            $selector,
            $this->GetFieldValueAttr( $attributes, 'scrollingSpeed' )
          );
        }
      }

      if ( $this->IsFieldEnabledAttr( $attributes, 'controlArrows' ) ) {
        $color = $this->GetFieldValueAttr( $attributes, 'controlArrowsColor' );
        if ( empty( $color ) ) {
          $color = '#FFFFFF';
        }

        $controlArrowsStyle = $this->GetFieldValueAttr( $attributes, 'controlArrowsStyle' );
        if ( 'modern' === $controlArrowsStyle ) {
          $css[] = '
            @media screen and (max-width:700px) {
              .fp-controlArrow.fp-next,
              .fp-controlArrow.fp-prev {
                display: none;
              }
            }
            .fp-controlArrow svg {
              padding: 5px;
              pointer-events: none;
            }
            .fp-controlArrow {
              width: 70px !important;
              height: 90px;
              z-index: 99;
              -webkit-appearance: none;
              background: 0 0;
              border: 0 !important;
              outline: 0;
            }
            .fp-controlArrow.fp-next {
              right: 35px;
            }
            .fp-controlArrow.fp-prev {
              left: 35px;
            }
            .fp-controlArrow.fp-next:focus polyline,.fp-controlArrow.fp-next:hover polyline,
            .fp-controlArrow.fp-prev:focus polyline,.fp-controlArrow.fp-prev:hover polyline {
              stroke-width: 6;
            }
            .fp-controlArrow.fp-next:active polyline, .fp-controlArrow.fp-prev:active polyline {
              stroke-width: 10;
              transition: all .1s ease-in-out;
            }
            .fp-controlArrow polyline {
              transition: all 250ms ease-in-out;
              stroke-width: 3;
            }
          ';
        } elseif ( 'modern-animated' === $controlArrowsStyle ) {
          $css[] = '
            @media screen and (max-width:700px) {
              .fp-controlArrow.fp-next,
              .fp-controlArrow.fp-prev {
                display: none;
              }
            }

            .fp-controlArrow {
              width: 50px;
              height: 50px;
              z-index: 99;
              -webkit-appearance: none;
              background: 0 0;
              border: 0 !important;
              outline: 0;
              -webkit-filter: drop-shadow(0 2px 0px rgba(0, 0, 0, 0.2));
              margin-top: -25px;
            }

            .fp-controlArrow i {
                position: absolute;
                top: 50%;
                left: 0;
                width: 50px;
                height: 5px;
                border-radius: 2.5px;
                background: ' . $color . ';
                transition: all 0.15s ease;
            }

            .fp-controlArrow.fp-prev {
              left: 50px;
            }
            .fp-controlArrow.fp-prev i {
              transform-origin: 0% 50%;
            }
            .fp-controlArrow.fp-prev i:first-child {
              transform: translate(0, -1px) rotate(40deg);
            }
            .fp-controlArrow.fp-prev i:last-child {
              transform: translate(0, 1px) rotate(-40deg);
            }
            .fp-controlArrow.fp-prev:hover i:first-child {
              transform: translate(0, -1px) rotate(30deg);
            }
            .fp-controlArrow.fp-prev:hover i:last-child {
              transform: translate(0, 1px) rotate(-30deg);
            }
            .fp-controlArrow.fp-prev:active i:first-child {
              transform: translate(1px, -1px) rotate(25deg);
            }
            .fp-controlArrow.fp-prev:active i:last-child {
              transform: translate(1px, 1px) rotate(-25deg);
            }
            .fp-controlArrow.fp-next {
              right: 50px;
            }
            .fp-controlArrow.fp-next i {
              transform-origin: 100% 50%;
            }
            .fp-controlArrow.fp-next i:first-child {
              transform: translate(0, 1px) rotate(40deg);
            }
            .fp-controlArrow.fp-next i:last-child {
              transform: translate(0, -1px) rotate(-40deg);
            }
            .fp-controlArrow.fp-next:hover i:first-child {
              transform: translate(0, 1px) rotate(30deg);
            }
            .fp-controlArrow.fp-next:hover i:last-child {
              transform: translate(0, -1px) rotate(-30deg);
            }
            .fp-controlArrow.fp-next:active i:first-child {
              transform: translate(1px, 1px) rotate(25deg);
            }
            .fp-controlArrow.fp-next:active i:last-child {
              transform: translate(1px, -1px) rotate(-25deg);
            }
          ';
        } elseif ( 'chevron' === $controlArrowsStyle ) {
          $css[] = '
            .fp-controlArrow {
              --arrow-size: 50px;
              --arrow-color: ' . $color . ';
              --arrow-color-hover: ' . $color . '80;
              width: var(--arrow-size);
              height: var(--arrow-size);
              -webkit-appearance: none;
              background: 0 0;
              border: 0 !important;
              outline: 0;
              top: 50%;
              margin-top: calc( var(--arrow-size) / -2 );
            }
            .fp-controlArrow.fp-prev {
              left: calc( 15px + var(--arrow-size) / 2 );
            }
            .fp-controlArrow.fp-next {
              right: calc( 15px + var(--arrow-size) / 2 );
            }
            .fp-controlArrow::after {
              content: "";
              position: absolute;
              top: 50%;
              box-sizing: border-box;
              display: inline-block;
              width: calc( var(--arrow-size) * .7071);
              height: calc( var(--arrow-size) * .7071);
              border-top: calc( var(--arrow-size) / 5 ) solid var(--arrow-color);
              transition: all 150ms ease-in-out;
            }
            .fp-controlArrow.fp-prev::after {
              left: calc( 100% - var(--arrow-size) / 5 );
              border-left: calc( var(--arrow-size) / 5 ) solid var(--arrow-color);
              transform: translate(-50%, -50%) rotate(-45deg);
            }
            .fp-controlArrow.fp-next::after {
              right: 0;
              border-right: calc( var(--arrow-size) / 5 ) solid var(--arrow-color);
              transform: translate(-50%, -50%) rotate(45deg);
            }
            .fp-controlArrow.fp-prev:hover::after, .fp-controlArrow.fp-next:hover::after {
              border-color: var(--arrow-color-hover);
            }
            .fp-controlArrow.fp-prev:hover::after {
              box-shadow: calc( var(--arrow-size) / -8 ) calc( var(--arrow-size) / -8 ) 0 var(--arrow-color);
            }
            .fp-controlArrow.fp-next:hover::after {
              box-shadow: calc( var(--arrow-size) / 8 ) calc( var(--arrow-size) / -8 ) 0 var(--arrow-color);
            }
          ';
        } else {
          $css[] = '.fp-controlArrow.fp-prev{border-right-color:' . $color . ';}.fp-controlArrow.fp-next{border-left-color:' . $color . ';}';
        }
      }

      if ( $this->IsFieldEnabledAttr( $attributes, 'hideContentBeforeLoad' ) ) {
        $css[] = 'body{opacity: 0;transition: opacity 1s ease;margin-top:100vh}.fp-enabled body{opacity: 1;margin-top:0}';
      }

      $padding = $this->GetFieldValueAttr( $attributes, 'padding' );
      $css[] = sprintf(
        '.%1$s .mcw-fp-section:not(.mcw-fp-section-slide) .mcw-fp-section-inner{padding:%2$spx %3$spx %4$spx %5$spx}.%1$s .mcw-fp-section-slide .mcw-fp-slide-inner{padding:%2$spx %3$spx %4$spx %5$spx}',
        $this->wrapper,
        $padding[0],
        $padding[1],
        $padding[2],
        $padding[3]
      );

      if ( $this->IsFieldEnabledAttr( $attributes, 'paddingTabletSet' ) ) {
        $padding = $this->GetFieldValueAttr( $attributes, 'paddingTablet' );
        $cssTablet[] = sprintf(
          '.%1$s .mcw-fp-section:not(.mcw-fp-section-slide) .mcw-fp-section-inner{padding:%2$spx %3$spx %4$spx %5$spx}.%1$s .mcw-fp-section-slide .mcw-fp-slide-inner{padding:%2$spx %3$spx %4$spx %5$spx}',
          $this->wrapper,
          $padding[0],
          $padding[1],
          $padding[2],
          $padding[3]
        );
      }

      if ( $this->IsFieldEnabledAttr( $attributes, 'paddingMobileSet' ) ) {
        $padding = $this->GetFieldValueAttr( $attributes, 'paddingMobile' );
        $cssMobile[] = sprintf(
          '.%1$s .mcw-fp-section:not(.mcw-fp-section-slide) .mcw-fp-section-inner{padding:%2$spx %3$spx %4$spx %5$spx}.%1$s .mcw-fp-section-slide .mcw-fp-slide-inner{padding:%2$spx %3$spx %4$spx %5$spx}',
          $this->wrapper,
          $padding[0],
          $padding[1],
          $padding[2],
          $padding[3]
        );
      }

      if ( $this->IsFieldEnabledAttr( $attributes, 'enableExtensions' ) ) {
        $extensions = $this->GetExtensionsInfo();
        $extensionFields = $this->GetFieldValueAttr( $attributes, 'extensions' );
      }

      // Section and slide CSS
      foreach ( $blocks->parsed_block['innerBlocks'] as $section ) {
        if ( 'meceware/fullpage-section' === $section['blockName'] ) {
          // Section found
          $sectionAttr = $section['attrs'];
          $uniqueID = $this->GetFieldValueAttrDef( $sectionAttr, 'uniqueID', '' );
          $isVideo = $this->GetFieldValueAttrDef( $sectionAttr, 'isVideo', false );
          $isSlide = $this->GetFieldValueAttrDef( $sectionAttr, 'isSlide', false );

          if ( ! $isSlide ) {
            $verticalAlignment = $this->GetFieldValueAttrDef( $sectionAttr, 'verticalAlignment', 'default' );
            if ( 'default' !== $verticalAlignment ) {
              $options = array(
                'top' => 'flex-start',
                'center' => 'center',
                'bottom' => 'flex-end',
              );
              if ( array_key_exists( $verticalAlignment, $options ) ) {
                $css[] = sprintf(
                  '.mcw-fp-section%s{justify-content:%s;}',
                  $uniqueID,
                  $options[ $verticalAlignment ]
                );
              }
            }
          }

          $bgColor = $this->GetFieldValueAttrDef( $sectionAttr, 'bgColor', '' );
          if ( ! empty( $bgColor ) ) {
            $css[] = sprintf(
              '.mcw-fp-section%s{background-color:%s;}',
              $uniqueID,
              $bgColor
            );
          }

          $bgColor = $this->GetFieldValueAttrDef( $sectionAttr, 'bgColorTablet', '' );
          if ( ! $isVideo && ! empty( $bgColor ) ) {
            $cssTablet[] = sprintf(
              '.mcw-fp-section%s{background-color:%s;}',
              $uniqueID,
              $bgColor
            );
          }

          $bgColor = $this->GetFieldValueAttrDef( $sectionAttr, 'bgColorMobile', '' );
          if ( ! $isVideo && ! empty( $bgColor ) ) {
            $cssMobile[] = sprintf(
              '.mcw-fp-section%s{background-color:%s;}',
              $uniqueID,
              $bgColor
            );
          }

          $bgImg = $this->GetFieldValueAttrDef( $sectionAttr, 'bgImg', '' );
          if ( ! $isVideo && ! empty( $bgImg ) ) {
            $css[] = sprintf(
              '.mcw-fp-section%s .fp-bg{
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: -1;
                width: 100%%;
                height: 100%%;
                background-image: %s;
                background-size: %s;
                background-position: %s;
                background-repeat: %s;
                background-attachment: %s;
                opacity: %s;
              }',
              $uniqueID,
              'url(' . $bgImg . ')',
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgSize', 'cover' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgPosition', 'center center' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgRepeat', 'no-repeat' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgAttachment', 'scroll' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgOpacity', 1 )
            );
          }

          $bgImg = $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgTablet', '' );
          if ( ! $isVideo && ! empty( $bgImg ) ) {
            $cssTablet[] = sprintf(
              '.mcw-fp-section%s .fp-bg{
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: -1;
                width: 100%%;
                height: 100%%;
                background-image: %s;
                background-size: %s;
                background-position: %s;
                background-repeat: %s;
                background-attachment: %s;
                opacity: %s;
              }',
              $uniqueID,
              'url(' . $bgImg . ')',
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgSizeTablet', 'cover' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgPositionTablet', 'center center' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgRepeatTablet', 'no-repeat' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgAttachmentTablet', 'scroll' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgOpacityTablet', 1 )
            );
          }

          $bgImg = $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgMobile', '' );
          if ( ! $isVideo && ! empty( $bgImg ) ) {
            $cssMobile[] = sprintf(
              '.mcw-fp-section%s .fp-bg{
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: -1;
                width: 100%%;
                height: 100%%;
                background-image: %s;
                background-size: %s;
                background-position: %s;
                background-repeat: %s;
                background-attachment: %s;
                opacity: %s;
              }',
              $uniqueID,
              'url(' . $bgImg . ')',
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgSizeMobile', 'cover' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgPositionMobile', 'center center' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgRepeatMobile', 'no-repeat' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgAttachmentMobile', 'scroll' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'bgImgOpacityMobile', 1 )
            );
          }

          $anchorSection = $this->GetFieldValueAttrDef( $sectionAttr, 'anchor', '' );
          if ( empty( $anchorSection ) ) {
            $anchorSection = 'section' . $this->GetFieldValueAttrDef( $sectionAttr, 'id', 1 );
          }

          if ( 'off' !== $navSection ) {
            $css[] = $this->navigationCSS->GetCustomCSS(
              $this->GetNavigationStyle(),
              "body[class*=\"fp-viewing-{$anchorSection}\"] #fp-nav",
              $this->GetFieldValueAttrDef( $sectionAttr, 'colorNavMain', '' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'colorNavActive', '' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'colorNavHover', '' )
            );

            $cssTablet[] = $this->navigationCSS->GetCustomCSS(
              $this->GetNavigationStyle(),
              "body[class*=\"fp-viewing-{$anchorSection}\"] #fp-nav",
              $this->GetFieldValueAttrDef( $sectionAttr, 'colorNavMainTablet', '' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'colorNavActiveTablet', '' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'colorNavHoverTablet', '' )
            );

            $cssMobile[] = $this->navigationCSS->GetCustomCSS(
              $this->GetNavigationStyle(),
              "body[class*=\"fp-viewing-{$anchorSection}\"] #fp-nav",
              $this->GetFieldValueAttrDef( $sectionAttr, 'colorNavMainMobile', '' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'colorNavActiveMobile', '' ),
              $this->GetFieldValueAttrDef( $sectionAttr, 'colorNavHoverMobile', '' )
            );

            $tooltip = $this->GetFieldValueAttrDef( $sectionAttr, 'tooltip', '' );
            if ( ! empty( $tooltip ) ) {
              $colorTooltipBackground = $this->GetFieldValueAttrDef( $sectionAttr, 'colorTooltipBackground', '' );
              $colorTooltipText = $this->GetFieldValueAttrDef( $sectionAttr, 'colorTooltipText', '' );
              if ( ! empty( $colorTooltipBackground ) || ! empty( $colorTooltipText ) ) {
                $css[] = sprintf(
                  'body[class*="fp-viewing-%s"] #fp-nav ul li .fp-tooltip{%s%s}',
                  $anchorSection,
                  empty( $colorTooltipBackground ) ? '' : ( 'background-color:' . $colorTooltipBackground . ';' ),
                  empty( $colorTooltipText ) ? '' : ( 'color:' . $colorTooltipText . ';' )
                );
              }

              $colorTooltipBackground = $this->GetFieldValueAttrDef( $sectionAttr, 'colorTooltipBackgroundTablet', '' );
              $colorTooltipText = $this->GetFieldValueAttrDef( $sectionAttr, 'colorTooltipTextTablet', '' );
              if ( ! empty( $colorTooltipBackground ) || ! empty( $colorTooltipText ) ) {
                $cssTablet[] = sprintf(
                  'body[class*="fp-viewing-%s"] #fp-nav ul li .fp-tooltip{%s%s}',
                  $anchorSection,
                  empty( $colorTooltipBackground ) ? '' : ( 'background-color:' . $colorTooltipBackground . ';' ),
                  empty( $colorTooltipText ) ? '' : ( 'color:' . $colorTooltipText . ';' )
                );
              }

              $colorTooltipBackground = $this->GetFieldValueAttrDef( $sectionAttr, 'colorTooltipBackgroundMobile', '' );
              $colorTooltipText = $this->GetFieldValueAttrDef( $sectionAttr, 'colorTooltipTextMobile', '' );
              if ( ! empty( $colorTooltipBackground ) || ! empty( $colorTooltipText ) ) {
                $cssMobile[] = sprintf(
                  'body[class*="fp-viewing-%s"] #fp-nav ul li .fp-tooltip{%s%s}',
                  $anchorSection,
                  empty( $colorTooltipBackground ) ? '' : ( 'background-color:' . $colorTooltipBackground . ';' ),
                  empty( $colorTooltipText ) ? '' : ( 'color:' . $colorTooltipText . ';' )
                );
              }
            }
          }

          if ( $isSlide ) {
            $slideCounter = 0;
            foreach ( $section['innerBlocks'] as $slide ) {
              if ( 'meceware/fullpage-slide' === $slide['blockName'] ) {
                // Slide found
                $slideAttr = $slide['attrs'];
                $uniqueID = $this->GetFieldValueAttrDef( $slideAttr, 'uniqueID', '' );
                $isVideo = $this->GetFieldValueAttrDef( $slideAttr, 'isVideo', false );

                $verticalAlignment = $this->GetFieldValueAttrDef( $slideAttr, 'verticalAlignment', 'default' );
                if ( 'default' !== $verticalAlignment ) {
                  $options = array(
                    'top' => 'flex-start',
                    'center' => 'center',
                    'bottom' => 'flex-end',
                  );
                  if ( array_key_exists( $verticalAlignment, $options ) ) {
                    $css[] = sprintf(
                      '.mcw-fp-slide%s{justify-content:%s;}',
                      $uniqueID,
                      $options[ $verticalAlignment ]
                    );
                  }
                }

                $bgColor = $this->GetFieldValueAttrDef( $slideAttr, 'bgColor', '' );
                if ( ! empty( $bgColor ) ) {
                  $css[] = sprintf(
                    '.mcw-fp-slide%s{background-color:%s;}',
                    $uniqueID,
                    $bgColor
                  );
                }

                $bgColor = $this->GetFieldValueAttrDef( $slideAttr, 'bgColorTablet', '' );
                if ( ! $isVideo && ! empty( $bgColor ) ) {
                  $cssTablet[] = sprintf(
                    '.mcw-fp-slide%s{background-color:%s;}',
                    $uniqueID,
                    $bgColor
                  );
                }

                $bgColor = $this->GetFieldValueAttrDef( $slideAttr, 'bgColorMobile', '' );
                if ( ! $isVideo && ! empty( $bgColor ) ) {
                  $cssMobile[] = sprintf(
                    '.mcw-fp-slide%s{background-color:%s;}',
                    $uniqueID,
                    $bgColor
                  );
                }

                $bgImg = $this->GetFieldValueAttrDef( $slideAttr, 'bgImg', '' );
                if ( ! $isVideo && ! empty( $bgImg ) ) {
                  $css[] = sprintf(
                    '.mcw-fp-slide%s .fp-bg{
                      position: absolute;
                      top: 0;
                      left: 0;
                      right: 0;
                      bottom: 0;
                      z-index: -1;
                      width: 100%%;
                      height: 100%%;
                      background-image: %s;
                      background-size: %s;
                      background-position: %s;
                      background-repeat: %s;
                      background-attachment: %s;
                      opacity: %s;
                    }',
                    $uniqueID,
                    'url(' . $bgImg . ')',
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgSize', 'cover' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgPosition', 'center center' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgRepeat', 'no-repeat' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgAttachment', 'scroll' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgOpacity', 1 )
                  );
                }

                $bgImg = $this->GetFieldValueAttrDef( $slideAttr, 'bgImgTablet', '' );
                if ( ! $isVideo && ! empty( $bgImg ) ) {
                  $cssTablet[] = sprintf(
                    '.mcw-fp-slide%s .fp-bg{
                      position: absolute;
                      top: 0;
                      left: 0;
                      right: 0;
                      bottom: 0;
                      z-index: -1;
                      width: 100%%;
                      height: 100%%;
                      background-image: %s;
                      background-size: %s;
                      background-position: %s;
                      background-repeat: %s;
                      background-attachment: %s;
                      opacity: %s;
                    }',
                    $uniqueID,
                    'url(' . $bgImg . ')',
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgSizeTablet', 'cover' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgPositionTablet', 'center center' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgRepeatTablet', 'no-repeat' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgAttachmentTablet', 'scroll' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgOpacityTablet', 1 )
                  );
                }

                $bgImg = $this->GetFieldValueAttrDef( $slideAttr, 'bgImgMobile', '' );
                if ( ! $isVideo && ! empty( $bgImg ) ) {
                  $cssMobile[] = sprintf(
                    '.mcw-fp-slide%s .fp-bg{
                      position: absolute;
                      top: 0;
                      left: 0;
                      right: 0;
                      bottom: 0;
                      z-index: -1;
                      width: 100%%;
                      height: 100%%;
                      background-image: %s;
                      background-size: %s;
                      background-position: %s;
                      background-repeat: %s;
                      background-attachment: %s;
                      opacity: %s;
                    }',
                    $uniqueID,
                    'url(' . $bgImg . ')',
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgSizeMobile', 'cover' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgPositionMobile', 'center center' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgRepeatMobile', 'no-repeat' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgAttachmentMobile', 'scroll' ),
                    $this->GetFieldValueAttrDef( $slideAttr, 'bgImgOpacityMobile', 1 )
                  );
                }

                $anchorSlide = $this->GetFieldValueAttrDef( $slideAttr, 'anchor', '' );
                if ( empty( $anchorSlide ) ) {
                  $anchorSlide = $slideCounter;
                }

                $css[] = $this->navigationCSS->GetCustomCSS(
                  $this->GetNavigationSlideStyle(),
                  "body[class*=\"fp-viewing-{$anchorSection}-{$anchorSlide}\"] .fp-slidesNav",
                  $this->GetFieldValueAttrDef( $slideAttr, 'colorNavMain', '' ),
                  $this->GetFieldValueAttrDef( $slideAttr, 'colorNavActive', '' ),
                  $this->GetFieldValueAttrDef( $slideAttr, 'colorNavHover', '' )
                );

                $cssTablet[] = $this->navigationCSS->GetCustomCSS(
                  $this->GetNavigationSlideStyle(),
                  "body[class*=\"fp-viewing-{$anchorSection}-{$anchorSlide}\"] .fp-slidesNav",
                  $this->GetFieldValueAttrDef( $slideAttr, 'colorNavMainTablet', '' ),
                  $this->GetFieldValueAttrDef( $slideAttr, 'colorNavActiveTablet', '' ),
                  $this->GetFieldValueAttrDef( $slideAttr, 'colorNavHoverTablet', '' )
                );

                $cssMobile[] = $this->navigationCSS->GetCustomCSS(
                  $this->GetNavigationSlideStyle(),
                  "body[class*=\"fp-viewing-{$anchorSection}-{$anchorSlide}\"] .fp-slidesNav",
                  $this->GetFieldValueAttrDef( $slideAttr, 'colorNavMainMobile', '' ),
                  $this->GetFieldValueAttrDef( $slideAttr, 'colorNavActiveMobile', '' ),
                  $this->GetFieldValueAttrDef( $slideAttr, 'colorNavHoverMobile', '' )
                );
              }
              ++$slideCounter;
            }
          }
        }
      }

      if ( $this->IsFieldEnabledAttr( $attributes, 'customCSSEnable' ) ) {
        $css[] = trim( $this->Decode( $this->GetFieldValueAttr( $attributes, 'customCSS' ) ) );
      }

      return $this->MinimizeCSS(
        implode( '', $css ) .
        '@media (max-width: 1024px){' . implode( '', $cssTablet ) . '}' .
        '@media (max-width: 767px){' . implode( '', $cssMobile ) . '}'
      );
    }
  }
}
