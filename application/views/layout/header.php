<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js"  dir="ltr"  lang="en"     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js"  dir="ltr"  lang="en"     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" dir="ltr"  lang="en">  <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $page_info['page_title']; ?></title>
<meta name="description" content="<?php echo $page_info['meta_description']; ?>">
<meta name="keywords"    content="<?php echo $page_info['meta_keywords']; ?>">
<base href="<?php echo base_url(); ?>" />
<link href="<?php echo base_url(); ?>assets/img/cart.png" rel="icon" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/foundation.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/stylesheet.css" />	
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/stylesheet-small-screens.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/stylesheet-large-screens.css" />	
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/ui.totop.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/tipTip.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/carousel.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cloud-zoom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/elastic_slideshow.css" />

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery-ui-1.8.16.custom.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.foundation.reveal.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/simpleswap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.swipebox.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/swipebox.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/camera.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.themepunch.revolution.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/settings.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/oxy-revo.css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jcarousel.min.js"></script>
<script> document.createElement('header'); document.createElement('section'); document.createElement('article'); document.createElement('aside'); document.createElement('nav'); document.createElement('footer'); </script>
<!--[if lt IE 9]> 
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]--> 
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/oxy/stylesheet/ie8.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/oxy/stylesheet/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/oxy/stylesheet/ie6.css" />
<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->

	
<style type="text/css">

/*  Body background color and pattern  */
body {
	background-color: #F6F6F6;
	background-image: url("<?php echo base_url(); ?>assets/img/<?php echo $background; ?>"); ?>;
	background-position: top center;
	background-repeat: no-repeat;
	background-attachment: scroll;
}

/*  Headings color  */
h1, h2, h3, h4, h5, h6, #content .box-heading {color: #464646;}

/*  Body text color  */
body, .cart-info thead td, .checkout-product thead td, table tbody tr td, .wishlist-info thead td, .sitemap-info ul li ul li, .sitemap-info ul li ul li a, .product-grid .name a, #content .box-product .name a, .product-list .name a, .product-info .wishlist-compare-friend a, .product-bottom-related .name a, .product-box-slider .name a, .product-right-sm-info span.p_title a, .box-category-home .subcat a, .product-compare a, .product-info .review > div a, .mini-cart-info .name small, .mini-cart-info td, .mini-cart-total td {color: #464646;}

/*  Light text color  */
.heading h5, .product_box_brand span, .product_box_brand a, .product-description-l, .product-description-l span, .product-description-l a, ul.breadcrumbs li:before, .product-info .cart .minimum, .product-info .you-save, .product-right-sm-info span.p_subtitle {color: #B6B6B6;}

/*  Links color  */
a, .box ul li, .product-info .save-percent, #product-top .product-description .product-description-l span.stock {color: #4BB8E2;}
#menu_contacts .mc:hover span.mm_icon, .product-info .cart .dec:hover, .product-info .cart .inc:hover, .contact-info .mc:hover span.mm_icon, #footer_a .mc:hover span.mm_icon, .es-nav span:hover, .product-related .bx-wrapper div.bx-next:hover, .product-related .bx-wrapper div.bx-prev:hover, #toTopHover, .product-right-sm-info span.p_icon, #livesearch_search_results li:hover, #livesearch_search_results .highlighted, #swipebox-action, .top-bar ul > li a:hover {background-color: #4BB8E2;}

/*  Links hover color  */
a:hover, .product-info .review > div a:hover, .sitemap-info ul li ul li:hover, .sitemap-info ul li ul li a:hover, .htabs a:hover, #header #cart:hover .heading a div#cart-total, .product-grid .name a:hover, #content .box-product .name a:hover, .product-list .name a:hover, .product-info .wishlist-compare-friend a:hover, .product-bottom-related .name a:hover, .product-right-sm-info span.p_title a:hover, .box-category-home .subcat a:hover {color: #ED5053;}
.product-right-sm-info .product-right-sm-info-content:hover span.p_icon, .camera_wrap .camera_pag .camera_pag_ul li:hover > span, .flex-control-paging li a:hover, #swipebox-action:hover, .tp-bullets.simplebullets.round .bullet:hover {background-color: #ED5053;}

/*  General icons style  */
.product-list .wishlist, .product-grid .wishlist {background: url("<?php echo base_url(); ?>assets/img/oxy-wishlist-1.png") no-repeat scroll center transparent;}
.product-list .compare, .product-grid .compare {background: url("<?php echo base_url(); ?>assets/img/oxy-compare-1.png")  no-repeat scroll center transparent;}
span.wishlist {background: url("<?php echo base_url(); ?>assets/img/oxy-wishlist-1.png") no-repeat scroll left center transparent;}
span.compare {background: url("<?php echo base_url(); ?>assets/img/oxy-compare-1.png") no-repeat scroll left center transparent;}
span.friend {background: url("<?php echo base_url(); ?>assets/img/oxy-send-1.png") no-repeat scroll left center transparent;}

/*  Main Column  */
.wrapper {
	background-color: #FFFFFF;
	background-image: none;
	background-position: top center;
	background-repeat: repeat;
	background-attachment: scroll;
	box-shadow: 0 1px 3px rgba(0,0,0,0.2); -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.2); -moz-box-shadow:0 1px 3px rgba(0,0,0,0.2);
}

/*  Content Column  */
.product-filter, #content .content, .cart-info thead td, .checkout-heading, .checkout-product thead td, table.list thead td, .compare-info thead td, .compare-info thead tr td:first-child, .attribute thead td, .attribute thead tr td:first-child, .tab-content, .manufacturer-heading, .wishlist-info thead td, #header #cart .content, .reveal-modal, .custom_box, .success, .warning, .attention {
	background-color: #F6F6F6;
}

.pagination, .product-info .price, .product-info .review, .product-info .options, .product-info .cart, .product-right-sm-logo, .product-right-sm-custom, .product-right-sm-info, .product-right-sm-related, .product-share, .product-right-sm-tags {
    border-top: 1px solid 
	#EAEAEA;	
}
	
#content h1, #content .box-heading, .product-bottom-related h2 {
    border-bottom: 1px solid 
	#EAEAEA;	
}	
.product-compare {
    border-left: 1px solid 
	#EAEAEA;	
}
.product-info .image, .product-info .image-additional img, .product-info .image-additional-left img, .contact-map, .manufacturer-list, .checkout-heading, .review-list, .product-info .option-image img {
	border: 1px solid #EAEAEA;	
}
.product-info .image-additional img:hover, .product-info .image-additional-left img:hover {
	border: 1px solid #4BB8E2;	
}

.cart-info table, .cart-total table, .checkout-product table, .wishlist-info table, .order-list .order-content, table.list, .attribute, .compare-info {
	border-top: 1px solid #EAEAEA;	
}
.cart-info thead td, .cart-info tbody td, .cart-total table, .checkout-product thead td, .checkout-product tbody td, .checkout-product tfoot td, .wishlist-info thead td, .wishlist-info tbody td, .order-list .order-content, table.list td, .box-category-home .subcat li, .attribute td, .compare-info td, .mini-cart-info td, .mini-cart-total {
	border-bottom: 1px solid #EAEAEA;	
}
.cart-info table, .checkout-product table, .wishlist-info table, table.list, .attribute, .compare-info {
	border-left: 1px solid #EAEAEA;	
}
.cart-info table, .checkout-product table, table thead tr th:last-child, table tfoot tr td:last-child, .wishlist-info table, table.list td, .attribute td, .compare-info td {
	border-right: 1px solid #EAEAEA;	
}

/*  Left Column Heading  */
#column-left .box .box-heading, #column-left .product-box-slider .box-heading  {
	
	background-color: #4BB8E2;
	background-image: none;
}
#column-left .box .box-heading, #column-left .product-box-slider .box-heading {color: #FFFFFF;}
#column-left .box .box-heading, #column-left .product-box-slider .box-heading  {
	
	padding: 12px 15px;
	}

/*  Left Column Box  */
#column-left .box .box-content, #column-left .product-box-slider .box-content {
	
	background-color: #F6F6F6;
	
	padding: 20px 15px;
	}
#column-left .box-product, #column-left .box-product a, #column-left .box .box-content ul li a, #column-left .product-box-slider .name a {color: #464646;}
#column-left .box-product a:hover, #column-left .box .box-content ul li a:hover, #column-left .product-box-slider .name a:hover {color: #ED5053;}

/*  Right Column Heading  */
#column-right .box .box-heading, #column-right .product-box-slider .box-heading  {
	
	background-color: #4BB8E2;
	background-image: none;
}
#column-right .box .box-heading, #column-right .product-box-slider .box-heading {color: #FFFFFF;}
#column-right .box .box-heading, #column-right .product-box-slider .box-heading  {
	
	padding: 12px 15px;
	}

/*  Right Column Box  */
#column-right .box .box-content, #column-right .product-box-slider .box-content {
	
	background-color: #F6F6F6;
	
	padding: 20px 15px;
	}
#column-right .box-product, #column-right .box-product a, #column-right .box .box-content ul li a, #column-right .product-box-slider .name a {color: #464646;}
#column-right .box-product a:hover, #column-right .box .box-content ul li a:hover, #column-right .product-box-slider .name a:hover {color: #ED5053;}

/*  Category Box Heading  */
.box-category .box-heading-category {
	
	background-color: #ED5053;
	background-image: none;
}
.box-category .box-heading-category {color: #FFFFFF;}
.box-category .box-heading-category  {
	
	padding: 12px 15px;
	}

/*  Category Box Content  */
.box-category .box-content-category {
	
	background-color: #F6F6F6;
}
.box-category .box-content-category ul > li > a:hover {
	
	padding-left: 18px;
	}
.box-category .box-content-category ul > li > a {
	
	padding: 10px 25px 10px 15px;
	}
.box-category .box-content-category ul > li > ul > li > a {
	
	padding: 10px 25px 10px 30px;
	}
.box-category .box-content-category ul > li > ul > li > a:hover  {
	
	padding-left: 33px;
	}
.box-category .box-content-category ul > li + li, .box-category .box-content-category ul > li ul {
	border-top: 1px solid #FFFFFF;	
}
.box-category .box-content-category ul > li > a {color: #464646;}
.box-category .box-content-category ul > li > a:hover {
	background-color: #F0F0F0;
	color: #4BB8E2;
}

/*  Filter Box Heading  */
.box-filter .box-heading  {
	
	background-color: #424242;
	background-image: none;
}
.box-filter .box-heading {color: #FFFFFF;}
.box-filter .box-heading  {
	
	padding: 12px 15px;
	}

/*  Filter Box Content  */
.box-filter .box-content {
	
	background-color: #F6F6F6;
	
	padding: 20px 15px;
	}
.box-filter .box-content span, .box-filter label {color: #464646;}
.box-filter label:hover {color: #ED5053;}

/*  Prices */
.price, .total, .product-info .price .discount {color: #4BB8E2;}
.price-old, .wishlist-info tbody .price s {color: #B6B6B6;}
.price-new, .cart-total .total-r {color: #ED5053;}
.price-tax, .product-info .price .reward {color: #B6B6B6;}

/*  Buttons */
a.button, input.button, .ei-title h4 a.button {
	background-color: #4BB8E2;
	color: #FFFFFF;
}
a.button:hover, input.button:hover, .ei-title h4 a.button:hover {
	background-color: #ED5053;
    color: #FFFFFF;	
}
a.button-exclusive, input.button-exclusive {
	background-color: #ED5053;
	color: #FFFFFF;
}
a.button-exclusive:hover, input.button-exclusive:hover {
	background-color: #4BB8E2;
	color: #FFFFFF;
}
.product-grid .cart input.button, .product-list .cart input.button, #content .box-product .cart input.button, .product-right-sm-tags div a, .product-box-slider .cart input.button, .product-bottom-related .cart input.button, #header #cart .checkout .mini-cart-button {
	background-color: #EFEFEF;
	color: #464646;
}
.product-grid .cart input.button:hover, .product-list .cart input.button:hover, #content .box-product .cart input.button:hover, .product-right-sm-tags div a:hover, .product-box-slider .cart input.button:hover, .product-bottom-related .cart input.button:hover, #header #cart .checkout .mini-cart-button:hover {
	background-color: #4BB8E2;
	color: #FFFFFF;
}
.prev-next a, .product-bottom-related .flex-direction-nav a, .product-bottom-related .flex-direction-nav .flex-disabled:hover, .product-right-sm-related .flex-direction-nav a, .product-right-sm-related .flex-direction-nav .flex-disabled:hover, .product-box-slider .flex-direction-nav a, .product-box-slider .flex-direction-nav .flex-disabled:hover, .pagination .links a, .flex-direction-nav a, .flex-control-paging li a, .camera_prevThumbs, .camera_nextThumbs, .camera_prev, .camera_next, .camera_commands, .camera_thumbs_cont, .camera_wrap .camera_pag .camera_pag_ul li, .slideshow .nivo-directionNav a, .tp-bullets.simplebullets.round .bullet, .tp-leftarrow.default, .tp-rightarrow.default {
	background-color: #EEEEEE;
}
.prev-next a:hover, .product-right-sm-related .flex-direction-nav a:hover, .product-bottom-related .flex-direction-nav a:hover, .product-box-slider .flex-direction-nav a:hover, .pagination .links b, .pagination .links a:hover, .flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover, .camera_prevThumbs:hover, .camera_nextThumbs:hover, .camera_prev:hover, .camera_next:hover, .camera_commands:hover, .camera_thumbs_cont:hover, .camera_wrap .camera_pag .camera_pag_ul li.cameracurrent > span, .flex-control-paging li a.flex-active, .slideshow .nivo-directionNav a:hover, .tp-bullets.simplebullets .bullet.selected, .tp-leftarrow:hover, .tp-rightarrow:hover {
	background-color: #4BB8E2;
}
a.button, input.button, a.button-exclusive, input.button-exclusive {
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}

/*  Top Area */
#header {
	background-image: none;
	background-position: top center;
	background-repeat: repeat;
	background-attachment: scroll;
}
.is-sticky #header {
	background-color: #FFFFFF;
	background-image: none;
}

/*  Top Bar  */
#top-line {
	background-color: #424242;
}
#top-line {
	color: #CCCCCC;
}
#top-line a {
	color: #4BB8E2;
}
#top-line a:hover {
	color: #ED5053;
}
.currency, .language, .my-account {
	border-left: 1px solid #525252;
}
.currency {
	border-right: 1px solid #525252;
}
@media only screen and (max-width: 767px) {
.currency, .language {
	border-top: 1px solid #525252;
}
}
.dropdown_l ul {
	background-color: #FFFFFF;
}
.dropdown_l li a {
	color: #464646!important;
}
.dropdown_l li a:hover {
	background-color: #4BB8E2;
	color: #FFFFFF!important;
}
#header #search input {
	background-color: #F3F3F3;
	border-color: #DFDFDF;
	color: #464646;
}
#header #search input:focus {
	border-color: #CCCCCC;
}
#header #cart h5 {
	color: #B6B6B6;
}
#header #cart .heading a div#cart-total {
	color: #4BB8E2;
	border-right: 1px solid #EDEDED;
}
#header #cart .heading a div#cart-total:hover {
	color: #ED5053;
}
#header #cart .heading a div#cart-icon {
    background: url('<?php echo base_url(); ?>assets/img/icon_cart_1.png')  no-repeat scroll 65% 50%;
}

	
#header #logo {padding: 5px 15px 5px 0;}
	
#header #search {margin-top: 22px;}

/*  Main Menu  */

/*  Main Menu Bar  */
#menu {
	
	background-color: #424242;
	background-image: none;
	background-repeat: repeat;
}

/*  Home Page Link  */
 
#menu #homepage {
	background-color: #4BB8E2;
}
 
#menu #homepage:hover {
	background-color: #ED5053;
}	
 
#menu #homepage a {
	color: #FFFFFF;
}	
#menu #homepage:hover a {
	color: #FFFFFF;
}

/*  Categories Section  */
 
#menu_oc > ul > li, #menu_v > ul > li, #menu_h > ul > li  {
	background-color: #ED5053;
}
 
#menu_oc > ul > li:hover, #menu_v > ul > li:hover, #menu_h > ul > li:hover  {
	background-color: #4BB8E2;
}
 
#menu_oc > ul > li > a, #menu_v > ul > li > a, #menu_h > ul > li > a {
	color: #FFFFFF;
}	
#menu_oc > ul > li:hover > a, #menu_v > ul > li:hover > a, #menu_h > ul > li:hover > a {
	color: #FFFFFF;
}

/*  Brands Section  */
 
#menu_brands > ul > li:hover {
	background-color: #4BB8E2;
}
 
#menu_brands > ul > li > a {
	color: #FFFFFF;
}	
#menu_brands > ul > li:hover > a {
	color: #FFFFFF;
}

/*  Custom Links Section  */
 
.menu_links:hover {
	background-color: #4BB8E2;
}	
 
.menu_links a {
	color: #FFFFFF;
}	
.menu_links:hover a {
	color: #FFFFFF;
}

/*  Information Section  */
 
#menu_informations > ul > li:hover {
	background-color: #4BB8E2;
}
 
#menu_informations > ul > li > a {
	color: #FFFFFF;
}	
#menu_informations > ul > li:hover > a {
	color: #FFFFFF;
}

/*  Custom Menu Section  */
 
#menu_custom_menu > ul > li:hover {
	background-color: #4BB8E2;
}
 
#menu_custom_menu > ul > li > a {
	color: #FFFFFF;
}	
#menu_custom_menu > ul > li:hover > a {
	color: #FFFFFF;
}

/*  Custom Blocks Section  */
 
.menu_custom_block > ul > li:hover {
	background-color: #4BB8E2;
}	
 
.menu_custom_block > ul > li > a {
	color: #FFFFFF;
}	
.menu_custom_block > ul > li:hover > a {
	color: #FFFFFF;
}

/*  Contact Section  */
 
#menu_contacts > ul > li:hover {
	background-color: #4BB8E2;
}
 
#menu_contacts > ul > li > a {
	color: #FFFFFF;
}	
#menu_contacts > ul > li:hover > a {
	color: #FFFFFF;
}

/*  Sub-Menu  */
#menu_oc > ul > li > div, #menu_oc > ul > li > div > ul > li > div, #menu_v > ul > li > div, #menu_v > ul > li > div > ul > li > div, #menu_v > ul > li > div > ul > li > div > ul > li > div, #menu_h > ul > li > div, #menu_brands > ul > li > div, #menu_custom_menu > ul > li > div, .menu_custom_block > ul > li > div, #menu_informations > ul > li > div, #menu_contacts > ul > li > div {
	background-color: #FFFFFF;
}	
#menu, #menu_informations span, .menu_custom_block h1, #menu_contacts > ul > li > div > ul > li > .ngw, #menu_contacts span.mm {
	color: #464646;
}	
#menu_oc > ul > li ul > li > a, #menu_v > ul > li ul > li > a, #menu_h span a, #menu_h > ul > li ul > li > a, #menu_brands > ul > li > div > div a, #menu_custom_menu > ul > li ul > li > a, .menu_custom_block > ul > li > div a, #menu_informations > ul > li ul > li > a {
	color: #464646;
}	
#menu_oc > ul > li ul > li > a:hover, #menu_v > ul > li ul > li > a:hover, #menu_v > ul > li > div > ul > li ul > li > a:hover, #menu_h span a:hover, #menu_h > ul > li ul > li > a:hover, #menu_brands > ul > li > div > div:hover a, #menu_custom_menu > ul > li ul > li > a:hover, .menu_custom_block > ul > li > div a:hover, #menu_informations > ul > li ul > li > a:hover {
	color: #FFFFFF;
}	
#menu_h > ul > li ul > li ul > li:first-child {
	border-top: 1px solid #F1F1F1;
}
#menu_oc > ul > li ul > li, #menu_v > ul > li ul > li, #menu_h > ul > li ul > li, #menu_brands > ul > li > div > div, #menu_custom_menu > ul > li ul > li, #menu_informations > ul > li ul > li {
	border-bottom: 1px solid #F1F1F1;
}
#menu_oc > ul > li ul > li > a:hover, #menu_v > ul > li ul > li > a:hover, #menu_h > ul > li ul > li > a:hover, #menu_v > ul > li > div > ul > li ul > li > a:hover, #menu_h span a:hover, #menu_brands > ul > li > div > div:hover, #menu_custom_menu > ul > li ul > li > a:hover, #menu_informations > ul > li ul > li > a:hover {
	background-color: #4BB8E2;
}	
#menu_h span a, #menu_informations span, #menu_contacts > ul > li > div > ul > li > .ngw, #menu_contacts > ul > li > div > ul > li > .social_widget {
	background-color: #F5F5F5;
}	
#menu_oc > ul > li > div, #menu_oc > ul > li > div > ul > li > div, #menu_v > ul > li > div, #menu_v > ul > li > div > ul > li > div, #menu_v > ul > li > div > ul > li > div > ul > li > div, #menu_h > ul > li > div, #menu_brands > ul > li > div, #menu_custom_menu > ul > li > div, .menu_custom_block > ul > li > div, #menu_informations > ul > li > div, #menu_contacts > ul > li > div {
	box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3); -webkit-box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
}	

/*  Mobile Main Menu Bar  */
.top-bar ul > li.name a {
	background-color: #424242;
	color: #FFFFFF!important;
}
.top-bar:hover ul > li.name a {
	background-color: #ED5053;
}

/*  Layout  */

/*  Product Box  */
.product-grid > div:hover, .product-list > div:hover, #content .box-product > div:hover {
	background-color: #FFFFFF;
}
	
.product-grid > div:hover, #content .box-product > div:hover {
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.25);
}
span.sale-icon {
	background-color: #ED5053;
}
.product-grid .name, #content .box-product .name, .product-bottom-related .name, .product-box-slider .name, .product-grid .product_box_brand, .product-grid .price, #content .box-product .price, .product-box-slider .price, .product-bottom-related .price, .product-grid .rating, #content .box-product .rating, .product-box-slider .rating, .product-grid .cart, #content .box-product .cart, .product-box-slider .cart, .product-bottom-related .cart {
	
	text-align: left;
	}

/*  Tabs  */
.htabs a {
	background-color: #424242;
}
.htabs a.selected {
	background-color: #4BB8E2;
}
.htabs a, .htabs a.selected {
	color: #FFFFFF;
}

/*  Product Slider on Home Page  */
.ei-slider {
	background-color: #FFFFFF;
	background-image: url("catalog/view/theme/oxy/image/bg_prod_slider_1.png");
	background-position: top center;
	background-repeat: repeat;
}
@media screen and (max-width: 767px) {
.ei-slider{background-image: none;background-color: #FFFFFF;}
}
.ei-title h2 a{color: #464646;}
.ei-title h3 a, .ei-title h4 a .price-old{color: #A3A3A3;}
.ei-title h4 a{color: #ED5053;}
.ei-title h2 a:hover, .ei-title h3 a:hover{color: #4BB8E2;}
.ei-slider-thumbs li a{background: #E8E8E8;}
.ei-slider-thumbs li a:hover{background: #ED5053;}
.ei-slider-thumbs li.ei-slider-element{background: #4BB8E2;}

  
/*  Video Box  */
.video_box_left #video_box_icon, .video_box_right #video_box_icon {
    background-color: #ED5053;
}
.video_box_right .video_box, .video_box_left .video_box {
    border: 4px solid #ED5053;
}

  
/*  Custom Box  */
.custom_box_left #custom_box_icon, .custom_box_right #custom_box_icon {
    background-color: #FFCA00;
}
.custom_box_right .custom_box, .custom_box_left .custom_box {
    border: 4px solid #FFCA00;
}

/*  Bottom Area  */

/*  Feature Block  */

#footer_p {
	background-color: #F6F6F6;
}
#footer_p span.p_title a {
	color: #464646;
}
#footer_p span.p_title a:hover {
	color: #ED5053;
}
#footer_p span.p_subtitle {
	color: #B6B6B6;
}
#footer_p span.pi1 {
	background-color: #4BB8E2;
}
#footer_p .p_content:hover span.pi1 {
	background-color: #4BB8E2;
}
#footer_p span.pi2 {
	background-color: #ED5053;
}
#footer_p .p_content:hover span.pi2 {
	background-color: #ED5053;
}
#footer_p span.pi3 {
	background-color: #FFCA00;
}
#footer_p .p_content:hover span.pi3 {
	background-color: #FFCA00;
}
#footer_p span.pi4 {
	background-color: #9AE24B;
}
#footer_p .p_content:hover span.pi4 {
	background-color: #9AE24B;
}

/*  About Us, Custom Column, Follow Us, Contact Us  */
#footer_a {
	color: #8C8C8C;
	background-color: #373737;
	background-image: none;
	background-position: top center;
	background-repeat: repeat;
}
#footer_a h3 {color: #FFFFFF; border-bottom: 1px solid #464646;}
#footer_a a {color: #4BB8E2;}
#footer_a a:hover {color: #FFFFFF;}
#footer_a span.mm_icon, #footer_a .social_widget ul li {background-color: #525252;}

/*  Information, Customer Service, Extras, My Account  */
#footer_c {
	background-color: #2F2F2F;
	background-image: none;
	background-position: top center;
	background-repeat: repeat;
}
#footer_c h3 {color: #FFFFFF; border-bottom: 1px solid #464646;}
#footer_c a {color: #8C8C8C;}
#footer_c a:hover {color: #FFFFFF;}
#footer_c ul li {color: #464646;}

/*  Powered by, Payment Images  */
#footer_d {
	background-color: #2F2F2F;
	background-image: none;
	background-position: top center;
	background-repeat: repeat;
	border-top: 1px solid #464646;	
}
#footer_d {color: #8C8C8C;}
#footer_d a {color: #4BB8E2;}
#footer_d a:hover {color: #FFFFFF;}

/*  Bottom Custom Block  */
#footer_e {
	background-color: #2F2F2F;
	background-image: none;
	background-position: top center;
	background-repeat: repeat;
	border-top: 1px solid #464646;	
}
#footer_e {color: #8C8C8C;}
#footer_e a {color: #4BB8E2;}
#footer_e a:hover {color: #FFFFFF;}


/*  Fonts  */
body, p, .ei-title h3 a, .cart-info thead .price, .cart-info tbody .price, .box-category-home .subcat a, .box-category-home .all a { 
    font-family: 'Open Sans',Arial,Helvetica,sans-serif; 
}

h1, h2, h3, h4, h5, h6, #content .box-heading, .box-category .box-heading-category, .box-filter .box-heading, #column-left .box .box-heading, #column-right .box .box-heading, #column-left .product-box-slider .box-heading, #column-right .product-box-slider .box-heading, .product-grid .name a, .product-list .name a, #content .box-product .name a, .product-right-sm-related .name a, .product-bottom-related .name a, #column-left .box-product .name a, #column-right .box-product .name a, .product-box-slider .name a, .box-category-home a { 
    font-family: Bitter,Arial,Helvetica,sans-serif; 
}
h1, h2, h3, h4, h5, h6, #content .box-heading, .box-category .box-heading-category, .box-filter .box-heading, #column-left .box .box-heading, #column-right .box .box-heading, #column-left .product-box-slider .box-heading, #column-right .product-box-slider .box-heading, .product-grid .name a, .product-list .name a, #content .box-product .name a, .product-right-sm-related .name a, .product-bottom-related .name a, #column-left .box-product .name a, #column-right .box-product .name a, .product-box-slider .name a, .box-category-home a { 
    font-weight: normal; 
}
h1, h2, h3, h4, h5, h6, #content .box-heading, .box-category .box-heading-category, .box-filter .box-heading, #column-left .box .box-heading, #column-right .box .box-heading, #column-left .product-box-slider .box-heading, #column-right .product-box-slider .box-heading, .product-grid .name a, .product-list .name a, #content .box-product .name a, .product-right-sm-related .name a, .product-bottom-related .name a, #column-left .box-product .name a, #column-right .box-product .name a, .product-box-slider .name a, .box-category-home a { 
    text-transform: uppercase;
}

.price, .price-new, .price-old, .ei-title h4 a { 
    font-family: Bitter,Arial,Helvetica,sans-serif; 
}
.price, .price-new, .price-old, .ei-title h4 a { 
    font-weight: normal; 
}

a.button, input.button, a.button-exclusive, input.button-exclusive, .ei-title h4 a.button { 
    font-family: 'Open Sans',Arial,Helvetica,sans-serif; 
}
a.button, input.button, a.button-exclusive, input.button-exclusive, .ei-title h4 a.button { 
    font-weight: normal; 
}
a.button, input.button, a.button-exclusive, input.button-exclusive, .ei-title h4 a.button { 
    text-transform: uppercase;
}

#t-header #search input { 
    font-family: 'Open Sans',Arial,Helvetica,sans-serif; 
}
#t-header #search input { 
	font-size: 13px;
    font-weight: normal;
	
	text-transform: uppercase;
}

#header #cart .heading a div#cart-total { 
    font-family: Bitter,Arial,Helvetica,sans-serif; 
}
#header #cart .heading a div#cart-total { 
	font-size: 17px;
    font-weight: normal;
}

#menu #homepage a, #menu_oc > ul > li > a, #menu_v > ul > li > a, #menu_h > ul > li > a, #menu_brands > ul > li > a, .menu_links a, #menu_custom_menu > ul > li > a, .menu_custom_block > ul > li > a, #menu_informations > ul > li > a, #menu_contacts > ul > li > a, .top-bar > ul .name h1 a { 
    font-family: Bitter,Arial,Helvetica,sans-serif; 
}
#menu, #menu #homepage a, #menu_oc > ul > li > a, #menu_v > ul > li > a, #menu_h > ul > li > a, #menu_brands > ul > li > a, .menu_links a, #menu_custom_menu > ul > li > a, .menu_custom_block > ul > li > a, #menu_informations > ul > li > a, #menu_contacts > ul > li > a, .top-bar > ul .name h1 a {
	font-size: 16px;
    font-weight: normal;
	
	text-transform: uppercase;
}

</style>

<link href='//fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Bitter&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Droid+Sans&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese' rel='stylesheet' type='text/css'>

</head>
<body>
