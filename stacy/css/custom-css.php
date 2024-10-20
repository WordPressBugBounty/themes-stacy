<?php
// define function for custom color setting
function stacy_custom_light() {
    
    $link_color = esc_html(get_theme_mod('link_color'));

    list($r, $g, $b) = sscanf($link_color, "#%02x%02x%02x");
    $r = $r - 50;
    $g = $g - 25;
    $b = $b - 40;
    if(!get_theme_mod('link_color')){
        $link_color ='#ce1b28';
    }
    if ( $link_color != '#ff0000' ) :
    ?>
<style type="text/css">

@media (min-width: 1101px){
	.navbar-custom .open .dropdown-menu {
    	border-top: 2px solid <?php echo $link_color; ?> !important;
    	border-bottom: 2px solid <?php echo $link_color; ?> !important;
	}
}

.blog-btn .home-blog-btn {
    background-color: <?php echo $link_color; ?>;
}

.blog-btn a:focus,.reply a:focus,.navbar-nav > .active > a:focus,input[type="submit"]:focus , .entry-date > a:focus,a.hc_scrollup:focus,.page-breadcrumb > li a:focus{
	outline-color: brown;
}

.navbar-custom .navbar-nav > li > a:focus,
.navbar-custom .navbar-nav > li > a:hover, 
.navbar-custom .navbar-nav .open > a,
.navbar-custom .navbar-nav .open > a:focus,
.navbar-custom .navbar-nav .open > a:hover {
	color: <?php echo $link_color; ?>;
    background-color: transparent;
}
.navbar-custom .navbar-nav > .active > a, 
.navbar-custom .navbar-nav > .active > a:hover, 
.navbar-custom .navbar-nav > .active > a:focus {
	color: #ffffff;
    /*background-color: <?php echo $link_color; ?>;*/
}
.navbar.navbar-custom .dropdown-menu {
    border-top: 2px solid <?php echo $link_color; ?> !important;
    border-bottom: 2px solid <?php echo $link_color; ?> !important;
}
.navbar-custom .navbar-nav .open .dropdown-menu > .active > a, 
.navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover, 
.navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
    background-color: transparent;
    color: <?php echo $link_color; ?>;
}


/*Dropdown Menus & Submenus Css----------------------------------------------------------*/

.navbar-custom .dropdown-menu {
	border-top: 2px solid <?php echo $link_color; ?>;
	border-bottom: 2px solid <?php echo $link_color; ?>;	
}
@media (max-width: 1100px) { 
	.navbar-custom .dropdown-menu {
		border-top: none;
		border-bottom: none;	
		box-shadow: none !important;
		border: none;
	}		
}

@media (min-width: 100px) and (max-width: 1100px) { 
	.navbar .navbar-nav > .active > a, 
	.navbar .navbar-nav > .active > a:hover, 
	.navbar .navbar-nav > .active > a:focus {
		color: <?php echo $link_color; ?> ;
		background-color: transparent;
	}
	.navbar .navbar-nav > .open > a,
	.navbar .navbar-nav > .open > a:hover,
	.navbar .navbar-nav > .open > a:focus { 
		background-color: transparent; 
		color: <?php echo $link_color; ?> !important; 
		border-bottom: 1px dotted #4c4a5f; 
	}
}

/*===================================================================================*/
/*	CART ICON 
/*===================================================================================*/

.cart-header:hover > a { color: <?php echo $link_color; ?>; }
.cart-header > a .cart-total { background: <?php echo $link_color; ?>; }


/*===================================================================================*/
/*	HOMEPAGE OWL CAROUSEL SLIDER
/*===================================================================================*/

.slide-btn-sm:before, .slide-btn-sm:after { background-color: <?php echo $link_color; ?>; }
/*Status Format*/
.format-status-btn-sm { background-color: <?php echo $link_color; ?>; box-shadow: 0 3px 0 0 #b3131f; }
/*Quote Format*/
#slider-carousel .format-quote:before { color: <?php echo $link_color; ?>; } 
/*Video Format*/
.format-video-btn-sm { background-color: <?php echo $link_color; ?>; box-shadow: 0 3px 0 0 #b3131f; }
/* Direction Nav */
.slide-shadow { background: url("../images/slide-shadow.png") no-repeat center bottom #fff; }

/*===================================================================================*/
/*	OWL CAROUSEL SLIDER NEXT-PREV
/*===================================================================================*/

.horizontal-nav .owl-prev:hover, .horizontal-nav .owl-next:hover { background-color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	SECTION HEADER
/*===================================================================================*/

.widget-separator span { background-color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	SECRVICE SECTION
/*===================================================================================*/

.service-section .post:hover { border-top: 3px solid <?php echo $link_color; ?>; }
.txt-pink { color: <?php echo $link_color; ?>; }
.more-link, .more-link:hover, .more-link:focus { color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	PORTFOLIO SECTION
/*===================================================================================*/

/*Portfolio Tabs*/
.portfolio-tabs li.active > a, .portfolio-tabs li > a:hover { border-color: <?php echo $link_color; ?>; background: <?php echo $link_color; ?>; }


/*===================================================================================*/
/*	TESTIMONIAL SECTION
/*===================================================================================*/

.author-description p:before { color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	CALLOUT SECTION
/*===================================================================================*/

.sm-callout { border-top: 2px solid <?php echo $link_color; ?>; }
.sm-callout-btn a { background-color: <?php echo $link_color; ?>; box-shadow: 0 3px 0 0 #b3131f; }
.sm-callout-btn a:hover { color: #ffffff; }

/*===================================================================================*/
/*	PAGE TITLE SECTION
/*===================================================================================*/

.page-title-section .overlay { background-color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	ABOUT US PAGE
/*===================================================================================*/

.about-section h2 > span { color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	TEAM SECTION
/*===================================================================================*/

.team-image .team-showcase-icons a:hover { background-color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	HOMEPAGE BLOG & BLOG PAGE SECTION
/*===================================================================================*/

/*Entry Title*/
.entry-header .entry-title > a:hover, .entry-header .entry-title > a:focus { color: <?php echo $link_color; ?>; } 
/*Blog Meta*/
.entry-meta a:hover, .entry-meta a:focus { color: <?php echo $link_color; ?>; }
.entry-meta .entry-date > a { background-color: <?php echo $link_color; ?>; }
/*More Link*/
.home-news .more-link:hover, .home-news .more-link:focus, 
.blog-section .more-link:hover, .blog-section .more-link:focus {
    background-color: transparent;
    color: <?php echo $link_color; ?> !important;
}
/*Comment Section*/
.comment-date { color: <?php echo $link_color; ?>; }
.reply a { background-color: #395CA3; box-shadow: 0 3px 0 0 #27437D; }
.blogdetail-btn, .blogdetail-btn a { background-color: #395CA3; box-shadow: 0 3px 0 0 #27437D; }

/*===================================================================================*/
/*	SIDEBAR SECTION
/*===================================================================================*/

/*Sidebar Calender Widget*/
.calendar_wrap table#wp-calendar caption { background-color: <?php echo $link_color; ?>; }
.calendar_wrap table#wp-calendar a:hover, .calendar_wrap table#wp-calendar a:focus, 
.calendar_wrap table#wp-calendar #next a:hover, .calendar_wrap table#wp-calendar #next a:focus, 
.calendar_wrap table#wp-calendar #prev a:hover, .calendar_wrap table#wp-calendar #prev a:focus { color: <?php echo $link_color; ?>; }
/*Sidebar Widget Archive, Widget categories, Widget Links, Widget Meta, widget Nav Menu, Widget Pages, Widget Recent Comments, Widget Recent Entries */
.widget_archive a:hover, .widget_categories a:hover, .widget_links a:hover, 
.widget_meta a:hover, .widget_nav_menu a:hover, .widget_pages a:hover, 
.widget_recent_comments a:hover, .widget_recent_entries a:hover {
	color: <?php echo $link_color; ?> !important;
}
.widget_archive li:before, .widget_categories li:before, .widget_links li:before, 
.widget_meta li:before, .widget_nav_menu li:before, .widget_pages li:before, 
.widget_recent_comments li:before, .widget_recent_entries li:before {
    color: <?php echo $link_color; ?>;
}
/*Sidebar Search*/
form.search-form input.search-submit, 
input[type="submit"], 
.woocommerce-product-search input[type="submit"] { background-color: <?php echo $link_color; ?>; }

/*Sidebar Tags*/
.tagcloud a:hover { background-color: <?php echo $link_color; ?>; border: 1px solid <?php echo $link_color; ?>; }

.sidebar .section-header {
    border-left: 5px solid <?php echo $link_color; ?> !important;
}

/*===================================================================================*/
/*	HEADER SIDEBAR & FOOTER SIDEBAR SECTION
/*===================================================================================*/

.site-footer { border-top: 3px solid <?php echo $link_color; ?>; border-bottom: 3px solid <?php echo $link_color; ?>; }
.header-sidebar .section-header span, .footer-sidebar .section-header span { background-color: <?php echo $link_color; ?>; }
/*Sidebar Latest Post Widget*/
.footer-sidebar .widget .post .entry-title:hover, .footer-sidebar .widget .post .entry-title a:hover, 
.header-sidebar .widget .post .entry-title:hover, .header-sidebar .widget .post .entry-title a:hover { 
	color: <?php echo $link_color; ?>; 
}
.widget .post:hover .entry-title a { color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	FOOTER COPYRIGHTS - SITE INFO
/*===================================================================================*/

.site-info a:hover, .site-info a:focus { color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	WP THEME DATA - CUSTOM HTML TAGS
/*===================================================================================*/ 
blockquote { border-left: 5px solid <?php echo $link_color; ?>; }
table a, table a:hover, table a:focus,
a, a:hover, a:focus, 
dl dd a, dl dd a:hover, dl dd a:focus { color: <?php echo $link_color; ?>; }
p > mark, p > ins { background-color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	CONTACT SECTION
/*===================================================================================*/ 

.cont-info address > a:hover, .cont-info address > a:focus { color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	404 ERROR PAGE SECTION
/*===================================================================================*/

.error_404 h1 { color: <?php echo $link_color; ?>; }
.error_404 p > a { color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	SCROLL BUTTON PAGE TO TOP
/*===================================================================================*/ 

.hc_scrollup { background-color: <?php echo $link_color; ?>; }


/*WOOCOMMERCE CSS-----------------------------------------------------------------------------------------------------------------*/
/* Woocommerce Colors-------------------------------------------------------------------------------------------- */
.woocommerce ul.products li.product .price del, .woocommerce ul.products li.product .price ins, .woocommerce div.product p.price ins, .woocommerce ul.products li.product .price, .woocommerce .variations td.label, .woocommerce table.shop_table td, .woocommerce-cart .cart-collaterals .cart_totals table td, .woocommerce .woocommerce-ordering select, .woocommerce-cart table.cart td.actions .coupon .input-text, .select2-container .select2-choice { color: #64646d; }
.woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce .posted_in a, .woocommerce-product-rating a, .woocommerce .tagged_as a, .woocommerce div.product form.cart .variations td.label label, .woocommerce #reviews #comments ol.commentlist li .meta strong, .woocommerce table.shop_table th, .woocommerce-cart table.cart td a, .owl-item .item .cart .add_to_cart_button, .woocommerce ul.cart_list li a, .woocommerce ul.product_list_widget li a, .woocommerce-error, .woocommerce-info, .woocommerce-message { color: #0f0f16; }
.woocommerce ul.products li.product .button { color: #fff; }
.woocommerce ul.product_list_widget li a:hover, .woocommerce ul.product_list_widget li a:focus, 
.woocommerce .posted_in a:hover, .woocommerce .posted_in a:focus { color: <?php echo $link_color; ?>; }
.woocommerce ul.products li.product:hover .button, 
.woocommerce ul.products li.product:focus .button, 
.woocommerce div.product form.cart .button:hover, 
.woocommerce div.product form.cart .button:focus, 
.woocommerce div.product form.cart .button, .woocommerce a.button, .woocommerce a.button:hover, .woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled], .woocommerce-EditAccountForm input.woocommerce-Button, .owl-item .item .cart .add_to_cart_button:hover, #add_payment_method table.cart img, .woocommerce-cart table.cart img, .woocommerce-checkout table.cart img { border: 4px double #e9e9e9; }
.woocommerce div.product form.cart .button, .woocommerce a.button, .woocommerce a.button:hover, .woocommerce a.added_to_cart, .woocommerce table.my_account_orders .order-actions .button { color: #fff; }
.woocommerce ul.products li.product .button,  
 .owl-item .item .cart .add_to_cart_button { background: <?php echo $link_color; ?> !important; }
.woocommerce ul.products li.product .button, .woocommerce ul.products li.product .button:hover, .owl-item .item .cart .add_to_cart_button { border: 1px solid <?php echo $link_color; ?> !important; }
.woocommerce ul.products li.product, 
.woocommerce-page ul.products li.product { background-color: #ffffff; border: 1px solid #e9e9e9; }
.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt { background-color: <?php echo $link_color; ?>; }
.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
    background-color: <?php echo $link_color; ?>;
    color: #fff;
}
.woocommerce .star-rating span { color: <?php echo $link_color; ?>; }
.woocommerce ul.products li.product .onsale, .woocommerce span.onsale { background: <?php echo $link_color; ?>; border: 2px solid <?php echo $link_color; ?>; color: #fff; }
.woocommerce ul.products li.product:hover .onsale, .woocommerce mark, .woocommerce ins { color: #fff; }
.woocommerce span.onsale:hover { color: #fff; }
.woocommerce ul.products li.product:before, .woocommerce ul.products li.product:after, .woocommerce-page ul.products li.product:before, .woocommerce-page ul.products li.product:after {
    content: "";
    position: absolute;
    z-index: -1;
    top: 50%;
    bottom: 0;
    left: 10px;
    right: 10px;
    -moz-border-radius: 100px / 10px;
    border-radius: 100px / 10px;
}
.woocommerce ul.products li.product:before, .woocommerce ul.products li.product:after, .woocommerce-page ul.products li.product:before, .woocommerce-page ul.products li.product:after {
    -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.8);
    -moz-box-shadow: 0 0 15px rgba(0,0,0,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.8);
}
.woocommerce a.remove, .woocommerce .woocommerce-Button, .woocommerce .cart input.button, .woocommerce input.button.alt, .woocommerce button.button, .woocommerce #respond input#submit, .woocommerce .cart input.button:hover, 
.woocommerce .cart input.button:focus, 
.woocommerce input.button.alt:hover, 
.woocommerce input.button.alt:focus, 
.woocommerce input.button:hover, 
.woocommerce input.button:focus, 
.woocommerce button.button:hover, 
.woocommerce button.button:focus, 
.woocommerce #respond input#submit:hover, 
.woocommerce #respond input#submit:focus, 
.woocommerce ul.products li.product:hover .button, 
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce .return-to-shop a.button  { color: #ffffff !important; }
.woocommerce div.product form.cart .button, .woocommerce a.button, .woocommerce a.button:hover, .woocommerce a.button, .woocommerce .woocommerce-Button, .woocommerce .cart input.button, .woocommerce input.button.alt, .woocommerce button.button, .woocommerce #respond input#submit, .woocommerce .cart input.button:hover, .woocommerce .cart input.button:focus, 
.woocommerce input.button.alt:hover, .woocommerce input.button.alt:focus, 
.woocommerce input.button:hover, .woocommerce input.button:focus, 
.woocommerce button.button:hover, .woocommerce button.button:focus, 
.woocommerce #respond input#submit:hover, .woocommerce #respond input#submit:focus, 
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button { background: <?php echo $link_color; ?>; border: 1px solid transparent !important; }
.woocommerce-message, .woocommerce-info {
    border-top-color: <?php echo $link_color; ?>;
}
.woocommerce-message::before, .woocommerce-info::before { color: <?php echo $link_color; ?>; }
.woocommerce div.product div.summary {
    margin-bottom: 2em;
    padding: 0.4rem 0.9rem 1.5rem;
    background-color: #fff;
    border: 1px solid #e9e9e9;
}
.price_label { color: #727272; }
.woocommerce a.added_to_cart { background: #21202e; border: 1px solid #ffffff; }
.woocommerce a.button { border-radius: 0px; box-shadow: none; }
.woocommerce #reviews #comments ol.commentlist li .comment-text { border: 1px solid #e4e1e3; }
.woocommerce #reviews #comments ol.commentlist li .meta time { color: #8f969c; }
.woocommerce #review_form #respond textarea, .woocommerce-cart table.cart td.actions .coupon .input-text { border: 1px solid #e9e9e9; }
.woocommerce-error, .woocommerce-info, .woocommerce-message { background-color: #fbfbfb; box-shadow: 0 7px 3px -5px #e0e0e0; }
.woocommerce table.shop_table, .woocommerce table.shop_table td { border: 1px solid rgba(0, 0, 0, .1); }
.woocommerce table.shop_table th { background-color: #fbfbfb; }
#add_payment_method table.cart img, .woocommerce-cart table.cart img, .woocommerce-checkout table.cart img { border: 4px double #e9e9e9; }
.woocommerce a.remove { background: #555555; }
.woocommerce .checkout_coupon input.button, 
.woocommerce .woocommerce-MyAccount-content input.button, .woocommerce .login input.button { background-color: <?php echo $link_color; ?>; color: #ffffff; border: 1px solid transparent; }
.woocommerce-page #payment #place_order { border: 1px solid transparent; }
.select2-container .select2-choice, .select2-drop-active, .woocommerce .woocommerce-ordering select, .woocommerce .widget select { 
    border: 1px solid #e9e9e9;
}
.woocommerce-checkout #payment ul.payment_methods { background-color: #fbfbfb; border: 1px solid rgba(0, 0, 0, .1); }
#add_payment_method #payment div.payment_box, .woocommerce-cart #payment div.payment_box, .woocommerce-checkout #payment div.payment_box { background-color: #ebe9eb; }
#add_payment_method #payment div.payment_box:before, 
.woocommerce-cart #payment div.payment_box:before, 
.woocommerce-checkout #payment div.payment_box:before { 
    border: 1em solid #ebe9eb;
    border-right-color: transparent;
    border-left-color: transparent;
    border-top-color: transparent;
}   
.woocommerce nav.woocommerce-pagination ul li a, 
.woocommerce nav.woocommerce-pagination ul li span { background-color: transparent; border: 1px solid #0f0f16; color: #242526; }
.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current { background-color: #0f0f16; border: 1px solid #0f0f16; color: #ffffff; }
.woocommerce-MyAccount-navigation ul li { border-bottom: 1px solid #ebe9eb; }
.woocommerce-EditAccountForm input.woocommerce-Button { border: 1px solid #ffffff; }
.ui-slider .ui-slider-handle {
    border: 1px solid rgba(0, 0, 0, 0.25);
    background: #e7e7e7;
    background: -webkit-gradient(linear,left top,left bottom,from(#FEFEFE),to(#e7e7e7));
    background: -webkit-linear-gradient(#FEFEFE,#e7e7e7);
    background: -moz-linear-gradient(center top,#FEFEFE 0%,#e7e7e7 100%);
    background: -moz-gradient(center top,#FEFEFE 0%,#e7e7e7 100%);
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.65) inset;
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.65) inset;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(255, 255, 255, 0.65) inset;
}
.price_slider_wrapper .ui-widget-content {
    background: #1e1e1e;
    background: -webkit-gradient(linear,left top,left bottom,from(#1e1e1e),to(#6a6a6a));
    background: -webkit-linear-gradient(#1e1e1e,#6a6a6a);
    background: -moz-linear-gradient(center top,#1e1e1e 0%,#6a6a6a 100%);
    background: -moz-gradient(center top,#1e1e1e 0%,#6a6a6a 100%);
}
.sidebar-widget .widget-title { border-bottom: 2px solid #eeeeee; }
.sidebar-widget .woocommerce ul.cart_list li { border-bottom: 1px dotted #d1d1d1; }
.woocommerce div.product .woocommerce-tabs .panel { background: #fff; border: 1px solid #e9e9e9; }
.woocommerce .widget_price_filter .ui-slider .ui-slider-range { background-color: <?php echo $link_color; ?>; }

/*===================================================================================*/
/*	WOOCOMMERCE PRODUCT CAROUSEL
/*===================================================================================*/

.product_container { background-color: #ffffff; border: 1px solid #e9e9e9; }
.wpcs_product_carousel_slider .owl-item .item h4.product_name, .wpcs_product_carousel_slider .owl-item .item h4.product_name a, 
.wpcs_product_carousel_slider .owl-item .item .cart .add_to_cart_button { color: #0f0f16 !important; }
.wpcs_product_carousel_slider .owl-item .item .cart:hover .add_to_cart_button,
.testimonial-section .wpcs_product_carousel_slider .title, .top-header-detail .wpcs_product_carousel_slider .title { color: #ffffff !important; }

/*Woocommerce Section----------------------------------------------------------------------------------------*/
.woocommerce-section {  background-color: <?php echo $link_color; ?>; }
.rating li i { color: <?php echo $link_color; ?>; }
.products .onsale { background: <?php echo $link_color; ?>; border: 2px solid <?php echo $link_color; ?>; }

/*404 */
.error_404_btn:hover, .error_404_btn:focus {
   background-color: <?php echo $link_color; ?>;
}

.error_404_btn { 
   background-color: transparent;
   color: <?php echo $link_color; ?>;
   border: 1px solid <?php echo $link_color; ?>;
}
    
    
    
    
.services2 .post::before {
    background-color: <?php echo $link_color; ?>  !important;
}

.services2 .post-thumbnail i.fa {
    color: <?php echo $link_color; ?>  !important;
}
.navbar-custom.hp-hc .navbar-nav > li > a:focus, .navbar-custom.hp-hc .navbar-nav > li > a:hover, .navbar-custom.hp-hc .navbar-nav .open > a, .navbar-custom.hp-hc .navbar-nav .open > a:focus, .navbar-custom.hp-hc .navbar-nav .open > a:hover {
        color: <?php echo $link_color; ?>  !important;
        background-color: #fff !important;
}
.navbar-custom.hp-hc .navbar-nav > li > a:focus, .navbar-custom.hp-hc .navbar-nav > li.active > a:hover{
    color: <?php echo $link_color; ?>  !important;
}
.navbar5 .dropdown-menu {
        border-top: 2px solid <?php echo $link_color; ?>  !important;
        border-bottom: 2px solid <?php echo $link_color; ?>  !important;
}

/*@media (min-width: 1101px){
	.navbar-custom .open .dropdown-menu {
    	border-top: 2px solid #395CA3 ;
    	border-bottom: 2px solid #395CA3 ;
	}
}*/
</style>
<?php endif; }