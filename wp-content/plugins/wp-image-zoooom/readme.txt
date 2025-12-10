=== WP Image Zoom ===
Created: 21/11/2015
Contributors: diana_burduja
Email: diana@burduja.eu
Tags: zoom, image zoom, magnify image, image magnifier, woocommerce zoom 
Requires at least: 3.0.1
Tested up to: 6.8 
Stable tag: 1.60
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires PHP: 5.2.4

Awesome image zoom plugin for images in posts/pages and for WooCommerce products.

== Description ==

= Awesome image zoom for images in posts/pages and for WooCommerce or SureCart products =

WP Image Zoom is a robust, modern and very configurable image zoom plugin. It allows you to easily create a magnifying glass on your images, all from a very intuitive WP admin interface.

Your visitors will be able to see the beautiful details of your images. This will improve your users' experience and hopefully also your revenue.

[youtube https://www.youtube.com/watch?v=JSkcItXaZK4] 

= Features =

* **4 Zooming Types** - Inner zoom, Round lens, Square lens and outer zoom (with Zoom Window).
* **Animation Easing Effect** - the zooming lense will follow the mouse over the image with a sleak delay. This will add a touch of elegance to the zooming experience.
* **Fade Effect** - the zoomed part will gracefully fade in or fade out.
* **Extremely configurable** - control zooming lens size, border color, border size, shadow, rounded corner, and others ...
* **Works with WooCommerce** - easily enable the zoom on all your products' images. Only a checkbox away.
* **Works in Pages and Posts** - within the post's/page's editor you'll find a button for applying the zooming effect on any image.

= Using the plugin with a page bulider =
For applying the zoom on an image on a page/post from within a page builder, you need to add the "zoooom" CSS class to the image. Here are screenshots on how to do this with the most popular page builders:
* Gutenberg - [screenshot](https://www.silkypress.com/wp-content/uploads/2018/10/zoom-gutenberg.png)
* WPBakery - depending on the page builder's version: 1) [screenshot](https://www.silkypress.com/wp-content/uploads/2017/05/image-zoom-js_composer.png) with the "large" or "full" for the Image Size setting. Or 2) [screenshot](https://www.silkypress.com/wp-content/uploads/2019/06/wpbakery-zoooom.png).
* Page Builder by SiteOrigin - [screenshot](https://www.silkypress.com/wp-content/uploads/2020/04/site-origin-zoooom.png)
* Elementor Page Builder - [screenshot](https://www.silkypress.com/wp-content/uploads/2016/09/image-zoom-elementor.png). It works with all the Image Size options, except Custom.
* Beaver Builder - [screenshot](https://www.silkypress.com/wp-content/uploads/2020/04/beaver-builder-zoooom.png)
* Divi Builder - [screenshot](https://www.silkypress.com/wp-content/uploads/2024/11/divi-builder.png) (used by the Divi theme)
* Avia Layout Builder - [screenshot](https://www.silkypress.com/wp-content/uploads/2019/04/enfold-apply-zoooom.png) (used by the Enfold theme)
* Fusion Page Builder - [screenshot](https://www.silkypress.com/wp-content/uploads/2021/06/fusion-zoooom.png)
* Brizy Page Builder - [screenshot](https://www.silkypress.com/wp-content/uploads/2019/01/zoom-brizy.png)
* Tatsu Page Builder - [screencast](https://www.dropbox.com/h?preview=tatsu-builder-zoom.flv)
The zoom works alright only with Image elements. Unfortunately, trying to apply the zoom on an image gallery will make the zoom work only on the first image of the gallery. With the WP Image Zoom Pro the zoom can also be applied on image galleries. 

= Why should you upgrade to WP Image Zoom Pro? =

* Responsive (the zoom window will fit to the browser width)
* Mousewheel Zoom
* Works with WooCommerce variations
* Works with Portfolio images
* Works with Easy Digital Downloads featured images
* Works with MarketPress - WordPress eCommerce
* Zoom within Lightboxes and Carousels
* You can choose the zoom window position (left or right from the image)
* You can use on more than one image on the same page
* Custom theme support

= Notes =

* This plugin is provided "as-is"; within the scope of WordPress. We will update this plugin to remain secure, and to follow WP coding standards.
* If you prefer more dedicated support, with more advanced and powerful plugin features, please consider upgrading to [WP Image Zoom Pro](https://www.silkypress.com/wp-image-zoom-plugin/?utm_source=wordpress&utm_campaign=iz_free&utm_medium=banner).


== Installation ==

* From the WP admin panel, click "Plugins" -> "Add new".
* In the browser input box, type "WP Image Zoom".
* Select the "WP Image Zoom" plugin and click "Install".
* Activate the plugin.

OR...

* Download the plugin from this page.
* Save the .zip file to a location on your computer.
* Open the WP admin panel, and click "Plugins" -> "Add new".
* Click "upload".. then browse to the .zip file downloaded from this page.
* Click "Install".. and then "Activate plugin".

OR...

* Download the plugin from this page.
* Extract the .zip file to a location on your computer.
* Use either FTP or your hosts cPanel to gain access to your website file directories.
* Browse to the `wp-content/plugins` directory.
* Upload the extracted `wp-image-zoooom` folder to this directory location.
* Open the WP admin panel.. click the "Plugins" page.. and click "Activate" under the newly added "WP Image Zoom" plugin.

== Frequently Asked Questions ==

= Does it work with caching plugins ? =
Yes

= The zoom will show up only on the first image on my WooCommerce gallery =
The zoom should work fine with all the images on the default WooCommerce gallery, but some themes replace entirely the gallery with a [Owl Carousel](https://owlcarousel2.github.io/OwlCarousel2/) or a another gallery/carousel/slider. Note that this plugin doesn't change the gallery, it only tries to add a zoom to the present gallery and we cannot guarantee compatibility with each gallery/carousel/slider implementation out there.

= It displays the zoom lens, but the picture is not enlarged =
In order for the zoom to work you have to upload a bigger picture than the one presented on the website. For more control over the zoom level you can try upgrading to the PRO version. There you can set the zoom level to 2x or 3x the size of the presented picture.

In case you did upload a bigger picture and the zoom still isn't working, you might try to deactivate the Jetpack Photon module. The module resizes the image and interferes with the zoom.

= The zoom window is about 1cm lower than the zoomed image =
This is an effect caused by the WordPres Admin Bar. Try logging out and check the zoom again.

Another cause could be the sticky header. When the page is loaded, the zoom window is built and set in the right position (next to the zoomed image). When you scroll down, the sticky header changes its height but the zoom window keeps staying in the same position. In order to solve this you can choose between removing the header's sticky effect or upgrading to the WP Image Zoom PRO, as there the zoom window is totally differently built and the sticky header doesn't affect the zoom position.

Another cause could be the "CSS Animation" settings within WPBakery. If you want to keep the animation effect and still have the zoom, I recommend you upgrade to the WP Image Zoom PRO. 

= How to zoom an image without the button in the editor? =
When you add a CSS class called 'zoooom' to any image, the zoom will be applied on that particular image. Remember that the zooming works only when the displayed image is smaller than the loaded image (i.e. the image is shrinked with "width" and "height" attributes).

= If I want to use a "lazy load" plugin will it work? =
We can ensure compatibility with [Unveil Lazy Load](https://wordpress.org/plugins/unveil-lazy-load/), [WP images lazy loading](https://wordpress.org/plugins/wp-images-lazy-loading/) and [Lazy Load](https://wordpress.org/plugins/lazy-load/) plugins. 


= My image is within a tab =
The zoom lens is built on page load relative to the image and it will be shown in mouse hover no matter if the image is hidden in another tab. We cannot do anything about this, the zoom is not built to work with images within tabs. 

Alternatively you can upgrade to the Pro version, as there the zoom lens is built on mouse hover and not on page load, which means that the zoom will work also with images within tabs. 

= Known Incompatibilities =

* When both the **Black Studio TinyMCE Widget** and the "Site Builder by SiteOrigin" plugins are installed on the website, then the WP Image Zoom button doesn't show up in the Edit Post and Edit Page editor. But you can still apply the zoom if you manage to add the "zoooom" CSS class to the image.

* The zoom doesn't work well with **Image Carousel** on **Avada** theme. You cannot use the zoom and the carousel on the same page.

* The zoom doesn't work at all with the **WooCommerce Dynamic Gallery** plugin. 

* The zoom will not work with the WooCommerce gallery on the **Avada** theme. The Avada theme changes entirely the default WooCommerce gallery with the [Flexslider gallery](https://woocommerce.com/flexslider/) and the zoom plugin does not support the Flexslider gallery. Please check the [PRO version](https://www.silkypress.com/wp-image-zoom-plugin/?utm_source=wordpress&utm_campaign=iz_free&utm_medium=banner) of the plugin for compatibility with the Flexslider gallery. 

= Credits =

* Demo photo from https://pixabay.com/en/camera-retro-ricoh-old-camera-813814/ under CC0 Public Domain license


== Screenshots ==

1. Configuration menu for the Round Lens

2. Configuration menu for the Square Lens

3. Configuration menu for the Zoom Window

4. Application of zoom on an image in a post

5. General configuration menu

6. WooCommerce product page with the Zoom Window applied on the featured image

7. Apply the zoom from WPBakery, the Single Image element

8. Apply the zoom from Page Builder by SiteOrigin, the Image Widget

== Changelog ==

= 1.59 2025-03-05 =
* Feature: compatibility with the SureCart product gallery images
* Fix: use the pro version, if both the free and the pro version are simultaneously active
* Tweak: rearrange the options on the General Settings page

= 1.58 2024-11-08 =
* Use the Script API strategy feature to defer front-end scripts in WordPress 6.3+
* Use the MutationObserver interface to watch for image change in the WooCommerce gallery
* Feature: "no-zoooom" CSS class for disabling the zoom effect on any child IMG elements

= 1.57 2024-06-30 =
* Compatibility with the Kalium theme 
* Add translation file for Korean

= 1.56 2024-03-29 =
* Feature: support AVIF images

= 1.55 2023-12-19 =
* Fix: deprecation notices with PHP8.3

= 1.54 2023-11-14 =
* Fix: support SVG images with intrinsic size larger than zero

= 1.53 2023-05-17 =
* Compatibility with the WooCommerce "Custom Order Tables" feature

[See full changelog](https://plugins.svn.wordpress.org/wp-image-zoooom/trunk/changelog.txt).
