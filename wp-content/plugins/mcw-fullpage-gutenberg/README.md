# FullPage for Gutenberg

This plugin simplifies creation of fullscreen scrolling websites with WordPress and saves you big time.

## Top Features
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
* TEMPLATES: You can use empty page templates or supply your own page template
* CSS and JS minified.

## How To Use

For the full documentation visit [documentation site](https://www.meceware.com/docs/fullpage-for-gutenberg/)

For parameters of fullpage.js, please visit [fullpage.js](https://github.com/alvarotrigo/fullpage.js).

* Create a new page/post.
* Add *FullPage for Gutenberg* block. There should be no other content inside the page/post.
* When the block is added, there should be 2 sections. You can add more sections or sections with slides by clicking the corresponding button at the bottom of *FullPage for Gutenberg* block.
* Add any content inside sections/slides.
* Adjust parameters of the blocks. To select the block you want to modify, click on the corresponding block title.
* To remove sections or slides, click the cross/delete icon at the top right of the block.

## Customization

There are a bunch of customizations and advanced options for the plugin.

* You can change the container tag via *Container HTML tag* option.
* If you have extra fullpage.js parameters, you can use *Extra Parameters* option. The text should be comma seperated.
* If you have video inside the sections, you can use *Video Autoplay* option.
* If your theme has built-in margins, you can use *Remove Theme Margins* option to remove the theme margins and make the page full width/height.
* If your theme does not have a fixed header, you can change it via *Force Fixed Theme Header* option. You will also need to enter your header selector.

### Advanced Customization Options

* If you want JQuery dependency, you can enable *Enable JQuery Dependency* option.
* If there is a conflict with a theme/plugin related javascript file, you can remove that file via *Remove Theme JS* and *Remove JS* options. You will need to enter comma seperated javascript file names.

### Empty Page Templates

By default, the plugin comes with empty page template. If you want to use the theme header and theme template, you can disable *Enable Empty Page Template* option under *Customizations/Advanced Parameters* options.

When this is disabled, theme template will be used. Theme header will be displayed. You will need to enable empty page template via theme options. Theme header will be fixed/absolutely positioned at the top. You can use *Remove Theme Margins* and *Force Fixed Theme Header* options for better display. You might need to use CSS and JS to display the page properly.

## Credits

Thanks to [Álvaro Trigo](https://www.alvarotrigo.com/fullPage/) for awesome fullpage.js plugin.

## License

This plugin is comprised of two parts.

- The PHP code and integrated HTML are licensed under the General Public License (GPLv3). (Please see LICENSE)

- All other parts, but not limited to the CSS code, images, and design are licensed according to the terms of your purchased license.

### Commercial license

If you want to use this plugin to develop non open sourced sites, themes, projects, and applications, the Commercial license is the appropriate license. [Purchase a Commercial License](https://alvarotrigo.com/fullPage/wordpress-plugin-gutenberg/)

### Open source license

If you are creating an open source application under a license compatible with the GNU GPL license v3, you may use this plugin under the terms of the GPLv3.
