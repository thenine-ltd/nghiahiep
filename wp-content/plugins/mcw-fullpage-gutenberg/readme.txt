=== FullPage for Gutenberg ===
Contributors: meceware, Álvaro Trigo
Tags: fullpage, full page, full screen, fullpage.js, one page, onepage, presentation, scrolling, slider, slide, slideshow, swipe, gutenberg, wordpress
Requires at least: 6.0.0
Tested up to: 6.6.2
Requires PHP: 5.6.20
Stable Tag: 3.2.2
License: Commercial

This plugin simplifies creation of fullscreen scrolling websites with WordPress and saves you big time.

== Description ==

This plugin simplifies creation of fullscreen scrolling websites with WordPress and saves you big time.

[Documentation](https://www.meceware.com/docs/fullpage-for-gutenberg/)

= Top Features =
* Fully responsive.
* Touch support for mobiles, tablets, touch screen computers.
* Easy adding sections and slides.
* Full page scroll with optional visible scrollbar.
* Optional Auto-height sections.
* CSS3 and (optional) JS animations.
* Animated anchor links.
* Optional show/hide anchor links in the address bar.
* Optional vertically centered row content.
* Optional section and slide loops.
* Optional section only scrollbars.
* Optional keyboard support while scrolling.
* Optional history record. When this is enabled, browser back button will go to the previous section.
* Optional horizontal and vertical navigation bars with different styles.
* Optional responsive scrollbar. When responsive width and height given, a normal scroll page will be used under the given width and height values.
* Optional empty page template or supply your own page template
* CSS and JS minified.

= How To Use =

For the full documentation visit the [documentation site](https://www.meceware.com/docs/fullpage-for-gutenberg/)

* Create a new page/post.
* Add *FullPage for Gutenberg* block. There should be no other content inside the page/post.
* When the block is added, there should be 2 sections. You can add more sections or sections with slides by clicking the corresponding button at the bottom of *FullPage for Gutenberg* block.
* Add any content inside sections/slides.
* Adjust parameters of the blocks. To select the block you want to modify, click on the corresponding block title.
* To remove sections or slides, click the cross/delete icon at the top right of the block.

= Credits =

Thanks to [Álvaro Trigo](https://www.alvarotrigo.com/fullpage/) for awesome fullpage.js plugin.

== FAQ ==

No FAQ yet.

== Screenshots ==

Please check the [documentation](https://www.meceware.com/docs/fullpage-for-gutenberg/) for screenshots.

== Changelog ==

**v3.2.2**

  - Fix: Conflicting nonce issue is fixed.
  - Package updates.
  - Minor fixes.

**v3.2.1**

  - Fullpage.js library is updated to v4.0.29.

**v3.2.0**

  - Enhancement: Skip Intermediate Items option is added under Scrolling tab.
  - Fullpage.js library is updated to v4.0.28.
  - iWideo library is updated to v1.1.18.

**v3.1.7**

  - Fullpage.js library is updated to v4.0.26.

**v3.1.6**

  - Fullpage.js library is updated to v4.0.25.
  - Fix: Gutenberg incompatibilities are fixed.
  - Fix: Server deactivation bug is fixed.
  - Minor improvements.
  - Package updates.

**v3.1.5**

  - Minor fixes.
  - Package updates.

**v3.1.4**

  - Fullpage.js library is updated to v4.0.22.
  - Package updates.

**v3.1.3**

  - Fix: Background video option not set bug is fixed.
  - Minor improvements.

**v3.1.2**

  - Fix: Remove section crash issue.
  - Fix: Extension initialization issue.

**v3.1.1**

  - WordPress 6.4.2 compatibility updates.
  - Minor improvements.
  - Package updates.

**v3.1.0**

  - Enhancement: New control arrow styles are added. (#158)
  - Enhancement: Responsive content padding options are added. (#159)
  - Obsolete extensions (cards, drop effect and water effect) are removed. (#172)
  - Package updates.

**v3.0.10**

  - Fullpage.js library is updated to v4.0.20.
  - Fix: ID update recursive issue.

**v3.0.9**

  - Fullpage.js library is updated to v4.0.19.
  - iWideo library is updated to v1.1.17.

**v3.0.8**

  - Fixed Scroll Overflow Reset bug that crashes the backend editor.
  - Compatibility with WordPress v6.2.0 editor.
  - Fullpage.js library is updated to v4.0.18.
  - Minor improvements.
  - Package updates.

**v3.0.7**

  - Fullpage.js library is updated to v4.0.17.
  - Package updates.

**v3.0.6**

  - Fullpage.js library is updated to v4.0.16.

**v3.0.5**

  - Fullpage.js library is updated to v4.0.15.

**v3.0.4**

  - Fixed extensions not working when not activated.

**v3.0.3**

  - Fullpage.js library is updated to v4.0.14.
  - Minor compatibility enhancements.

**v3.0.2**

  - Fix: Right navigation buttons style fix under certain conditions.
  - Fix: Minor Gutenberg compatibility update.

**v3.0.1**

  - Enhancement: iWideo library is updated to v1.1.16.

**v3.0.0**

  - Fullpage.js is updated to v4.0.12.
    - BREAKING: 'Easing' option is changed. Instead 'Easing CSS' option is created and CSS/JS easing options are updated.
    - BREAKING: Data-Centered option for Offset Sections is updated. New options are added.
    - BREAKING: Customized scripts and styles added by support or manually should be checked.
    - 'Scroll Overflow Options' options ('Show Scroll Overflow Scrollbars', 'Fade Scroll Overflow Scrollbars' and 'Interactive Scroll Overflow Scrollbars') are removed. Instead, 'Mac Style Scroll Overflow' option is added.
    - 'Flex Mode' option is removed.
    - 'Form Buttons' option is removed.
    - Default value of 'Section Navigation' option is changed to 'Right'.
    - Default value of 'Scroll Overflow' option is changed to enabled.
    - Default value of 'Control Arrows' option is changed to enabled.
    - Default value of 'Control Arrows Style' option is changed to 'Modern'.
    - Default value of 'Video Autoplay' is changed to enabled.
    - New events ('beforeLeave', 'onScrollOverflow') are added.
    - New parameter (trigger) is added to 'afterLoad', 'onLeave', 'afterSlideLoad', 'onSlideLeave' events.
    - 'Observer' option is added.
    - Scroll Overflow Reset extension 'Scroll Overflow Reset Target' option is added.
    - 'Vertical Alignment' option is added for each section and slide.
  - Enhancement: iWideo library is updated to v1.1.15.
  - Fix: Extension check bug is fixed.
  - The plugin is improved and optimized. Deprecated codes are removed.

**v2.1.0**

  - Enhancement: Toggle Header option is added under Customizations. (#150)
  - Enhancement: iWideo library is updated to v1.1.12.
  - Minor bug fixes and improvements.

**v2.0.1**

  - Fix: Extension script is updated to the latest. (#148)

**v2.0.0**

  - Enhancement: The least supported WordPress version is increased to v5.6.0. Deprecated functionalities are removed. (#144)
  - Enhancement: Plugin is optimized and enhanced for future uses with better Gutenberg compatibility. (#117, #140, #144)
  - Enhancement: fullpage.js library is updated to v3.1.2. (#145)
  - Enhancement: Responsive background image and color support are added. (#112)
  - Enhancement: Responsive navigation options are added. (#141)
  - Enhancement: Water effect extension support is added. (#143)
  - Enhancement: Body open hook is added to the template. (#146)
  - Please re-save your pages that enabled FullPage for Gutenberg.

**v1.9.3**

  - Enhancement: fullpage.js library is updated to v3.1.1. (#136)
  - Minor improvements.

**v1.9.2**

  - Fix: Background popover is fixed. (#133)
  - Minor improvements.

**v1.9.1**

  - Enhancement: Domain deactivation link is added on error conditions. (#127)
  - Enhancement: 'Enable Flex Mode' option is added under Customization tab. (#122)
  - Fix: Multiple extension activation bug is fixed. (#126, #125)
  - Fix: Header padding for slides is fixed. (#124)
  - Fix: Line comments are stripped in Events. (#128)
  - Fix: CSS not updating on section and slide duplication issue is fixed. (#123)
  - Minor bug fixes and improvements.

**v1.9.0**

  - Enhancement: fullpage.js library is updated to v3.1.0. (#119)
  - Enhancement: iWideo library is updated to v1.1.8.
  - Enhancement: Plugin settings page is reorganized. (#120)
  - Enhancement: Drop effect extension support is added. (#118)

**v1.8.0**

  - Enhancement: Tooltip background and text options are added to section options. (#114)
  - Enhancement: Hiding content before FullPage load is added as an option under Customization. (#115)
  - Fix: Extension key update issue is fixed. (#111)
  - Fix: Extension activated text is updated in the plugin settings page. (#113)
  - Fix: Forms button customization is added.
  - FullPage extensions file is updated to the latest.
  - English language files are added.
  - Minor bug fixes and improvements.

**v1.7.0**

  - Enhancement: Automatic extension installation and update functionality is added. Please remove the previous extensions plugin. You can check the [documentation](https://www.meceware.com/docs/fullpage-for-gutenberg/#extensions) for more details. (#63)
  - Minor improvements and package updates.

**v1.6.4**

  - Enhancement: Offset Sections extension data parameters are added. (#93)
  - Enhancement: Compatibility updates.
  - Minor improvements.

**v1.6.3**

  - Enhancement: fullpage.js library is updated to v3.0.9. (#102)
  - Enhancement: iWideo library is updated to v1.1.7. (#102)
  - Enhancement: Clickable tooltip option is added. (#100)
  - Fix: Template is reset on archive pages. (#101)
  - Minor improvements and package updates.

**v1.6.2**

  - Enhancement: iwideo is updated to v1.1.6.
  - Bug: Video parameters for new blocks bug is fixed. (#98)
  - Minor improvements.

**v1.6.1**

  - Package updates.

**v1.6.0**

  - Enhancement: Modern control arrow style is added. Option for control arrow color is added. (Control arrow are only available for slides.) (#95)
  - Enhancement: Documentation link is added to the settings page. (#85)
  - Enhancement: License key is hidden when plugin is activated. (#87)
  - Enhancement: Video keep playing option is added under Customization tab. (#94)
  - Enhancement: Footer customization is added. (#91)
  - Bug: Color buttons are fixed. (#89)
  - Bug: IE11 compatibilities.
  - Minor improvements.

**v1.5.0**

  - Enhancement: Section navigation buttons are added. (#83)
  - Enhancement: Extension loading is changed. Please check documentation for more information. (#64)
  - Enhancement: Cards extension is added.
  - Minor improvements.

**v1.4.1**

  - Enhancement: fullpage.js library is updated to v3.0.8. (#81)
  - Enhancement: Compatibility with Gutenberg 7.
  - Bug: Parallax extension compatibility is fixed. (#75)
  - Bug: Height of the videos on slides are fixed. (#69)
  - Bug: Section and slide navigation colors can be set seperately. (#80)
  - Bug: Some typos in generated CSS are fixed.
  - Minor improvements.

**v1.4.0**

  - Enhancement: Collapse button is enhanced. (#52)
  - Enhancement: FullPage section and slide title bars are redesigned. (#57)
  - Enhancement: FullPage icon is added. (#65)
  - Enhancement: Settings page is redesigned. (#68)
  - Bug: Section gets hidden when WordPress menu is opened and expand is enabled. (#66)
  - Bug: Sorting controls when expanded are reorganized. (#67)
  - Bug: Validating of number attributes are fixed. (#71)
  - Bug: Activation functionality is fixed that crashes because of the PHP version number. (#72)
  - Minor improvements.

**v1.3.0**

  - Bug: Freeze issue is fixed when Gutenberg plugin is active. (#60)
  - Enhancement: Deprecated Gutenberg functionalities are updated. (#61)
  - Enhancement: Collapse button is added to sections and slides.
  - Enhancement: Expand functionality animations are added.
  - Enhancement: Library updates.

**v1.2.2**

  - Enhancement: iwideo is updated to v1.1.2.
  - Enhancement: Library updates.

**v1.2.1**

  - Bug: Backwards compatibility.

**v1.2.0**

  - Enhancement: License deactivation is added.
  - Enhancement: Section ordering is improved.
  - Bug: Opacity + images on the edit screen is fixed.
  - Minor cosmetic improvements, text updates.

**v1.1.0**

**Note**: Please take a database backup before updating the plugin. Please contact [support](https://alvarotrigo.com/#contact) for any questions or problems.

  - Enhancement: Video backgrounds are added using iwideo library. Self-hosted videos, Youtube and Vimeo background videos can be used. Vimeo is not supported with fullpage.js so some of the options may be incompatible.
  - Enhancement: The way of selecting colors (color palette) is written from scratch. Now the colors can be selected in a more intuitive way.
  - Enhancement: Navigation color options are added to section and slide settings. Navigation bullet colors can be changed for each section and slide.
  - Enhancement: fullpage.js library is updated to v3.0.7.
  - Enhancement: afterReBuild event of fullpage.js is added.
  - Enhancement: Image opacity option is added for regular backgrounds.
  - Enhancement: Libraries are updated to latest version.
  - Code cleanup and minor improvements.

**v1.0.3**

  - License key check bug fixes and improvements. Error message is shown in more details.
  - Custom CSS is moved under Design tab.
  - Removed the license key field from Gutenberg editor.
  - Build script improvements.

**v1.0.2**

  - License key check bug fixes and improvements.

**v1.0.1**

  - Bug fixes.
  - Minor Improvements.

**v1.0.0**

  - Initial Release
