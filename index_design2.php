<?php

if (function_exists('opcache_reset')) {
    opcache_reset();
}

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');



// Include the configuration file  

require_once 'config.php';

$country = isset($_GET['c']) ? $_GET['c'] : 'MY';

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Busy Brainy</title>
    <meta name='robots' content='max-image-preview:large' />
    <script type='application/javascript'
        id='pys-version-script'>console.log('PixelYourSite Free version 9.5.4');</script>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />

    <script>
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".webp", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/busybrainy.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=45181196ca1e88cc943122dfdde4d125" } };
        /*! This file is auto-generated */
        !function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
    </script>

    <?php
    require_once 'header.php'
        ?>

    <link rel='stylesheet' id='astra-theme-css-css' href='content/main.min.css?ver=4.6.9' media='all' />
    <style>
        div#paypal-container-LBJ4HQCX2SEXS {
            text-align: center;
        }
        .lgbk{
            background:#f0f0f0;
        }
    </style>
    <style id='astra-theme-css-inline-css'>
        :root {
            --ast-container-default-xlg-padding: 6.67em;
            --ast-container-default-lg-padding: 5.67em;
            --ast-container-default-slg-padding: 4.34em;
            --ast-container-default-md-padding: 3.34em;
            --ast-container-default-sm-padding: 6.67em;
            --ast-container-default-xs-padding: 2.4em;
            --ast-container-default-xxs-padding: 1.4em;
            --ast-code-block-background: #EEEEEE;
            --ast-comment-inputs-background: #FAFAFA;
            --ast-normal-container-width: 1200px;
            --ast-narrow-container-width: 750px;
            --ast-blog-title-font-weight: normal;
            --ast-blog-meta-weight: inherit;
        }

        html {
            font-size: 100%;
        }

        a,
        .page-title {
            color: var(--ast-global-color-0);
        }

        a:hover,
        a:focus {
            color: var(--ast-global-color-1);
        }

        body,
        button,
        input,
        select,
        textarea,
        .ast-button,
        .ast-custom-button {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            font-size: 16px;
            font-size: 1rem;
            line-height: var(--ast-body-line-height, 1.7em);
        }

        blockquote {
            color: var(--ast-global-color-3);
        }

        p,
        .entry-content p {
            margin-bottom: 0em;
        }

        h1,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6,
        .site-title,
        .site-title a {
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
        }

        .site-title {
            font-size: 35px;
            font-size: 2.1875rem;
            display: none;
        }

        header .custom-logo-link img {
            max-width: 60px;
        }

        .astra-logo-svg {
            width: 60px;
        }

        .site-header .site-description {
            font-size: 15px;
            font-size: 0.9375rem;
            display: none;
        }

        .entry-title {
            font-size: 30px;
            font-size: 1.875rem;
        }

        .archive .ast-article-post .ast-article-inner,
        .blog .ast-article-post .ast-article-inner,
        .archive .ast-article-post .ast-article-inner:hover,
        .blog .ast-article-post .ast-article-inner:hover {
            overflow: hidden;
        }

        h1,
        .entry-content h1 {
            font-size: 64px;
            font-size: 4rem;
            font-weight: 400;
            font-family: 'DM Sans', sans-serif;
        }

        h2,
        .entry-content h2 {
            font-size: 30px;
            font-size: 1.875rem;
            font-weight: 400;
            font-family: 'DM Sans', sans-serif;
        }

        h3,
        .entry-content h3 {
            font-size: 20px;
            font-size: 1.25rem;
            font-weight: 400;
            font-family: 'DM Sans', sans-serif;
        }

        h4,
        .entry-content h4 {
            font-size: 35px;
            font-size: 2.1875rem;
            line-height: 1.25em;
            font-weight: 400;
            font-family: 'Forum', display;
        }

        h5,
        .entry-content h5 {
            font-size: 18px;
            font-size: 1.125rem;
            font-weight: 400;
            font-family: 'DM Sans', sans-serif;
        }

        h6,
        .entry-content h6 {
            font-size: 15px;
            font-size: 0.9375rem;
            font-weight: 400;
            font-family: 'DM Sans', sans-serif;
        }

        ::selection {
            background-color: var(--ast-global-color-0);
            color: #000000;
        }

        body,
        h1,
        .entry-title a,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6 {
            color: var(--ast-global-color-3);
        }

        .tagcloud a:hover,
        .tagcloud a:focus,
        .tagcloud a.current-item {
            color: #000000;
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
        }

        input:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="password"]:focus,
        input[type="reset"]:focus,
        input[type="search"]:focus,
        textarea:focus {
            border-color: var(--ast-global-color-0);
        }

        input[type="radio"]:checked,
        input[type=reset],
        input[type="checkbox"]:checked,
        input[type="checkbox"]:hover:checked,
        input[type="checkbox"]:focus:checked,
        input[type=range]::-webkit-slider-thumb {
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
            box-shadow: none;
        }

        .site-footer a:hover+.post-count,
        .site-footer a:focus+.post-count {
            background: var(--ast-global-color-0);
            border-color: var(--ast-global-color-0);
        }

        .single .nav-links .nav-previous,
        .single .nav-links .nav-next {
            color: var(--ast-global-color-0);
        }

        .entry-meta,
        .entry-meta * {
            line-height: 1.45;
            color: var(--ast-global-color-0);
        }

        .entry-meta a:not(.ast-button):hover,
        .entry-meta a:not(.ast-button):hover *,
        .entry-meta a:not(.ast-button):focus,
        .entry-meta a:not(.ast-button):focus *,
        .page-links>.page-link,
        .page-links .page-link:hover,
        .post-navigation a:hover {
            color: var(--ast-global-color-1);
        }

        #cat option,
        .secondary .calendar_wrap thead a,
        .secondary .calendar_wrap thead a:visited {
            color: var(--ast-global-color-0);
        }

        .secondary .calendar_wrap #today,
        .ast-progress-val span {
            background: var(--ast-global-color-0);
        }

        .secondary a:hover+.post-count,
        .secondary a:focus+.post-count {
            background: var(--ast-global-color-0);
            border-color: var(--ast-global-color-0);
        }

        .calendar_wrap #today>a {
            color: #000000;
        }

        .page-links .page-link,
        .single .post-navigation a {
            color: var(--ast-global-color-0);
        }

        .ast-search-menu-icon .search-form button.search-submit {
            padding: 0 4px;
        }

        .ast-search-menu-icon form.search-form {
            padding-right: 0;
        }

        .ast-search-menu-icon.slide-search input.search-field {
            width: 0;
        }

        .ast-header-search .ast-search-menu-icon.ast-dropdown-active .search-form,
        .ast-header-search .ast-search-menu-icon.ast-dropdown-active .search-field:focus {
            transition: all 0.2s;
        }

        .search-form input.search-field:focus {
            outline: none;
        }

        .ast-archive-title {
            color: var(--ast-global-color-2);
        }

        .wp-block-latest-posts>li>a {
            color: var(--ast-global-color-2);
        }

        .widget-title,
        .widget .wp-block-heading {
            font-size: 22px;
            font-size: 1.375rem;
            color: var(--ast-global-color-2);
        }

        .ast-search-menu-icon.slide-search a:focus-visible:focus-visible,
        .astra-search-icon:focus-visible,
        #close:focus-visible,
        a:focus-visible,
        .ast-menu-toggle:focus-visible,
        .site .skip-link:focus-visible,
        .wp-block-loginout input:focus-visible,
        .wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper,
        .ast-header-navigation-arrow:focus-visible,
        .woocommerce .wc-proceed-to-checkout>.checkout-button:focus-visible,
        .woocommerce .woocommerce-MyAccount-navigation ul li a:focus-visible,
        .ast-orders-table__row .ast-orders-table__cell:focus-visible,
        .woocommerce .woocommerce-order-details .order-again>.button:focus-visible,
        .woocommerce .woocommerce-message a.button.wc-forward:focus-visible,
        .woocommerce #minus_qty:focus-visible,
        .woocommerce #plus_qty:focus-visible,
        a#ast-apply-coupon:focus-visible,
        .woocommerce .woocommerce-info a:focus-visible,
        .woocommerce .astra-shop-summary-wrap a:focus-visible,
        .woocommerce a.wc-forward:focus-visible,
        #ast-apply-coupon:focus-visible,
        .woocommerce-js .woocommerce-mini-cart-item a.remove:focus-visible,
        #close:focus-visible,
        .button.search-submit:focus-visible,
        #search_submit:focus,
        .normal-search:focus-visible {
            outline-style: dotted;
            outline-color: inherit;
            outline-width: thin;
        }

        input:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="password"]:focus,
        input[type="reset"]:focus,
        input[type="search"]:focus,
        input[type="number"]:focus,
        textarea:focus,
        .wp-block-search__input:focus,
        [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal:focus,
        .ast-mobile-popup-drawer.active .menu-toggle-close:focus,
        .woocommerce-ordering select.orderby:focus,
        #ast-scroll-top:focus,
        #coupon_code:focus,
        .woocommerce-page #comment:focus,
        .woocommerce #reviews #respond input#submit:focus,
        .woocommerce a.add_to_cart_button:focus,
        .woocommerce .button.single_add_to_cart_button:focus,
        .woocommerce .woocommerce-cart-form button:focus,
        .woocommerce .woocommerce-cart-form__cart-item .quantity .qty:focus,
        .woocommerce .woocommerce-billing-fields .woocommerce-billing-fields__field-wrapper .woocommerce-input-wrapper>.input-text:focus,
        .woocommerce #order_comments:focus,
        .woocommerce #place_order:focus,
        .woocommerce .woocommerce-address-fields .woocommerce-address-fields__field-wrapper .woocommerce-input-wrapper>.input-text:focus,
        .woocommerce .woocommerce-MyAccount-content form button:focus,
        .woocommerce .woocommerce-MyAccount-content .woocommerce-EditAccountForm .woocommerce-form-row .woocommerce-Input.input-text:focus,
        .woocommerce .ast-woocommerce-container .woocommerce-pagination ul.page-numbers li a:focus,
        body #content .woocommerce form .form-row .select2-container--default .select2-selection--single:focus,
        #ast-coupon-code:focus,
        .woocommerce.woocommerce-js .quantity input[type=number]:focus,
        .woocommerce-js .woocommerce-mini-cart-item .quantity input[type=number]:focus,
        .woocommerce p#ast-coupon-trigger:focus {
            border-style: dotted;
            border-color: inherit;
            border-width: thin;
        }

        input {
            outline: none;
        }

        .ast-logo-title-inline .site-logo-img {
            padding-right: 1em;
        }

        .site-logo-img img {
            transition: all 0.2s linear;
        }

        body .ast-oembed-container * {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            left: 0;
        }

        body .wp-block-embed-pocket-casts .ast-oembed-container * {
            position: unset;
        }

        .ast-single-post-featured-section+article {
            margin-top: 2em;
        }

        .site-content .ast-single-post-featured-section img {
            width: 100%;
            overflow: hidden;
            object-fit: cover;
        }

        .site>.ast-single-related-posts-container {
            margin-top: 0;
        }

        @media (min-width: 922px) {
            .ast-desktop .ast-container--narrow {
                max-width: var(--ast-narrow-container-width);
                margin: 0 auto;
            }
        }

        .ast-page-builder-template .hentry {
            margin: 0;
        }

        .ast-page-builder-template .site-content>.ast-container {
            max-width: 100%;
            padding: 0;
        }

        .ast-page-builder-template .site .site-content #primary {
            padding: 0;
            margin: 0;
        }

        .ast-page-builder-template .no-results {
            text-align: center;
            margin: 4em auto;
        }

        .ast-page-builder-template .ast-pagination {
            padding: 2em;
        }

        .ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {
            margin-top: 0;
        }

        .ast-page-builder-template .entry-header.ast-header-without-markup {
            margin-top: 0;
            margin-bottom: 0;
        }

        .ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {
            margin-bottom: 0;
        }

        .ast-page-builder-template.single .post-navigation {
            padding-bottom: 2em;
        }

        .ast-page-builder-template.single-post .site-content>.ast-container {
            max-width: 100%;
        }

        .ast-page-builder-template .entry-header {
            margin-top: 4em;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        .single.ast-page-builder-template .entry-header {
            padding-left: 20px;
            padding-right: 20px;
        }

        .ast-page-builder-template .ast-archive-description {
            margin: 4em auto 0;
            padding-left: 20px;
            padding-right: 20px;
        }

        @media (max-width:921px) {
            #ast-desktop-header {
                display: none;
            }
        }

        @media (min-width:922px) {
            #ast-mobile-header {
                display: none;
            }
        }

        .wp-block-buttons.aligncenter {
            justify-content: center;
        }

        @media (max-width:921px) {

            .ast-theme-transparent-header #primary,
            .ast-theme-transparent-header #secondary {
                padding: 0;
            }
        }

        @media (max-width:921px) {
            .ast-plain-container.ast-no-sidebar #primary {
                padding: 0;
            }
        }

        .ast-plain-container.ast-no-sidebar #primary {
            margin-top: 0;
            margin-bottom: 0;
        }

        .wp-block-button.is-style-outline .wp-block-button__link {
            border-color: var(--ast-global-color-0);
        }

        div.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color),
        div.wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color) {
            color: var(--ast-global-color-0);
        }

        .wp-block-button.is-style-outline .wp-block-button__link:hover,
        .wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link:focus,
        .wp-block-buttons .wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color):hover,
        .wp-block-buttons .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color):hover {
            color: var(--ast-global-color-2);
            background-color: var(--ast-global-color-1);
            border-color: var(--ast-global-color-1);
        }

        .post-page-numbers.current .page-link,
        .ast-pagination .page-numbers.current {
            color: #000000;
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
        }

        .wp-block-button.is-style-outline .wp-block-button__link.wp-element-button,
        .ast-outline-button {
            border-color: var(--ast-global-color-0);
            font-family: inherit;
            font-weight: 400;
            font-size: 14px;
            font-size: 0.875rem;
            line-height: 1em;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        .wp-block-buttons .wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color),
        .wp-block-buttons .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color),
        .ast-outline-button {
            color: var(--ast-global-color-0);
        }

        .wp-block-button.is-style-outline .wp-block-button__link:hover,
        .wp-block-buttons .wp-block-button.is-style-outline .wp-block-button__link:focus,
        .wp-block-buttons .wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color):hover,
        .wp-block-buttons .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color):hover,
        .ast-outline-button:hover,
        .ast-outline-button:focus,
        .wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button:hover,
        .wp-block-uagb-buttons-child .uagb-buttons-repeater.ast-outline-button:focus {
            color: var(--ast-global-color-2);
            background-color: var(--ast-global-color-1);
            border-color: var(--ast-global-color-1);
        }

        .wp-block-button .wp-block-button__link.wp-element-button.is-style-outline:not(.has-background),
        .wp-block-button.is-style-outline>.wp-block-button__link.wp-element-button:not(.has-background),
        .ast-outline-button {
            background-color: var(--ast-global-color-0);
        }

        @media (max-width:921px) {

            .wp-block-button.is-style-outline .wp-block-button__link.wp-element-button,
            .ast-outline-button {
                font-size: 16px;
                font-size: 1rem;
            }
        }

        @media (max-width:544px) {

            .wp-block-button.is-style-outline .wp-block-button__link.wp-element-button,
            .ast-outline-button {
                font-size: 14px;
                font-size: 0.875rem;
            }
        }

        .entry-content[ast-blocks-layout]>figure {
            margin-bottom: 1em;
        }

        h1.widget-title {
            font-weight: 400;
        }

        h2.widget-title {
            font-weight: 400;
        }

        h3.widget-title {
            font-weight: 400;
        }

        @media (max-width:921px) {

            .ast-separate-container #primary,
            .ast-separate-container #secondary {
                padding: 1.5em 0;
            }

            #primary,
            #secondary {
                padding: 1.5em 0;
                margin: 0;
            }

            .ast-left-sidebar #content>.ast-container {
                display: flex;
                flex-direction: column-reverse;
                width: 100%;
            }

            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single {
                padding: 1.5em 2.14em;
            }

            .ast-author-box img.avatar {
                margin: 20px 0 0 0;
            }
        }

        @media (min-width:922px) {

            .ast-separate-container.ast-right-sidebar #primary,
            .ast-separate-container.ast-left-sidebar #primary {
                border: 0;
            }

            .search-no-results.ast-separate-container #primary {
                margin-bottom: 4em;
            }
        }

        .elementor-button-wrapper .elementor-button {
            border-style: solid;
            text-decoration: none;
            border-top-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-bottom-width: 0;
        }

        body .elementor-button.elementor-size-sm,
        body .elementor-button.elementor-size-xs,
        body .elementor-button.elementor-size-md,
        body .elementor-button.elementor-size-lg,
        body .elementor-button.elementor-size-xl,
        body .elementor-button {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;
            padding-top: 17px;
            padding-right: 40px;
            padding-bottom: 17px;
            padding-left: 40px;
        }

        @media (max-width:921px) {

            .elementor-button-wrapper .elementor-button.elementor-size-sm,
            .elementor-button-wrapper .elementor-button.elementor-size-xs,
            .elementor-button-wrapper .elementor-button.elementor-size-md,
            .elementor-button-wrapper .elementor-button.elementor-size-lg,
            .elementor-button-wrapper .elementor-button.elementor-size-xl,
            .elementor-button-wrapper .elementor-button {
                padding-top: 16px;
                padding-right: 32px;
                padding-bottom: 16px;
                padding-left: 32px;
            }
        }

        @media (max-width:544px) {

            .elementor-button-wrapper .elementor-button.elementor-size-sm,
            .elementor-button-wrapper .elementor-button.elementor-size-xs,
            .elementor-button-wrapper .elementor-button.elementor-size-md,
            .elementor-button-wrapper .elementor-button.elementor-size-lg,
            .elementor-button-wrapper .elementor-button.elementor-size-xl,
            .elementor-button-wrapper .elementor-button {
                padding-top: 15px;
                padding-right: 28px;
                padding-bottom: 15px;
                padding-left: 28px;
            }
        }

        .elementor-button-wrapper .elementor-button {
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
        }

        .elementor-button-wrapper .elementor-button:hover,
        .elementor-button-wrapper .elementor-button:focus {
            color: var(--ast-global-color-2);
            background-color: var(--ast-global-color-1);
            border-color: var(--ast-global-color-1);
        }

        .wp-block-button .wp-block-button__link,
        .elementor-button-wrapper .elementor-button,
        .elementor-button-wrapper .elementor-button:visited {
            color: var(--ast-global-color-2);
        }

        .elementor-button-wrapper .elementor-button {
            font-weight: 400;
            font-size: 14px;
            font-size: 0.875rem;
            line-height: 1em;
            text-transform: none;
        }

        body .elementor-button.elementor-size-sm,
        body .elementor-button.elementor-size-xs,
        body .elementor-button.elementor-size-md,
        body .elementor-button.elementor-size-lg,
        body .elementor-button.elementor-size-xl,
        body .elementor-button {
            font-size: 14px;
            font-size: 0.875rem;
        }

        .wp-block-button .wp-block-button__link:hover,
        .wp-block-button .wp-block-button__link:focus {
            color: var(--ast-global-color-2);
            background-color: var(--ast-global-color-1);
            border-color: var(--ast-global-color-1);
        }

        .elementor-widget-heading h4.elementor-heading-title {
            line-height: 1.25em;
        }

        .wp-block-button .wp-block-button__link,
        .wp-block-search .wp-block-search__button,
        body .wp-block-file .wp-block-file__button {
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
            color: var(--ast-global-color-2);
            font-family: inherit;
            font-weight: 400;
            line-height: 1em;
            text-transform: none;
            font-size: 14px;
            font-size: 0.875rem;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;
            padding-top: 17px;
            padding-right: 40px;
            padding-bottom: 17px;
            padding-left: 40px;
        }

        @media (max-width:921px) {

            .wp-block-button .wp-block-button__link,
            .wp-block-search .wp-block-search__button,
            body .wp-block-file .wp-block-file__button {
                font-size: 16px;
                font-size: 1rem;
                padding-top: 16px;
                padding-right: 32px;
                padding-bottom: 16px;
                padding-left: 32px;
            }
        }

        @media (max-width:544px) {

            .wp-block-button .wp-block-button__link,
            .wp-block-search .wp-block-search__button,
            body .wp-block-file .wp-block-file__button {
                font-size: 14px;
                font-size: 0.875rem;
                padding-top: 15px;
                padding-right: 28px;
                padding-bottom: 15px;
                padding-left: 28px;
            }
        }

        .menu-toggle,
        button,
        .ast-button,
        .ast-custom-button,
        .button,
        input#submit,
        input[type="button"],
        input[type="submit"],
        input[type="reset"],
        form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
        body .wp-block-file .wp-block-file__button,
        .woocommerce-js a.button,
        .woocommerce button.button,
        .woocommerce .woocommerce-message a.button,
        .woocommerce #respond input#submit.alt,
        .woocommerce input.button.alt,
        .woocommerce input.button,
        .woocommerce input.button:disabled,
        .woocommerce input.button:disabled[disabled],
        .woocommerce input.button:disabled:hover,
        .woocommerce input.button:disabled[disabled]:hover,
        .woocommerce #respond input#submit,
        .woocommerce button.button.alt.disabled,
        .wc-block-grid__products .wc-block-grid__product .wp-block-button__link,
        .wc-block-grid__product-onsale,
        [CLASS*="wc-block"] button,
        .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),
        .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,
        .woocommerce button.button.alt.disabled.wc-variation-selection-needed,
        [CLASS*="wc-block"] .wc-block-components-button {
            border-style: solid;
            border-top-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-bottom-width: 0;
            color: var(--ast-global-color-2);
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
            padding-top: 17px;
            padding-right: 40px;
            padding-bottom: 17px;
            padding-left: 40px;
            font-family: inherit;
            font-weight: 400;
            font-size: 14px;
            font-size: 0.875rem;
            line-height: 1em;
            text-transform: none;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        button:focus,
        .menu-toggle:hover,
        button:hover,
        .ast-button:hover,
        .ast-custom-button:hover .button:hover,
        .ast-custom-button:hover,
        input[type=reset]:hover,
        input[type=reset]:focus,
        input#submit:hover,
        input#submit:focus,
        input[type="button"]:hover,
        input[type="button"]:focus,
        input[type="submit"]:hover,
        input[type="submit"]:focus,
        form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:hover,
        form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:focus,
        body .wp-block-file .wp-block-file__button:hover,
        body .wp-block-file .wp-block-file__button:focus,
        .woocommerce-js a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce .woocommerce-message a.button:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce input.button:hover,
        .woocommerce button.button.alt.disabled:hover,
        .wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover,
        [CLASS*="wc-block"] button:hover,
        .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping):hover,
        .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout:hover,
        .woocommerce button.button.alt.disabled.wc-variation-selection-needed:hover,
        [CLASS*="wc-block"] .wc-block-components-button:hover,
        [CLASS*="wc-block"] .wc-block-components-button:focus {
            color: var(--ast-global-color-2);
            background-color: var(--ast-global-color-1);
            border-color: var(--ast-global-color-1);
        }

        @media (max-width:921px) {

            .menu-toggle,
            button,
            .ast-button,
            .ast-custom-button,
            .button,
            input#submit,
            input[type="button"],
            input[type="submit"],
            input[type="reset"],
            form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
            body .wp-block-file .wp-block-file__button,
            .woocommerce-js a.button,
            .woocommerce button.button,
            .woocommerce .woocommerce-message a.button,
            .woocommerce #respond input#submit.alt,
            .woocommerce input.button.alt,
            .woocommerce input.button,
            .woocommerce input.button:disabled,
            .woocommerce input.button:disabled[disabled],
            .woocommerce input.button:disabled:hover,
            .woocommerce input.button:disabled[disabled]:hover,
            .woocommerce #respond input#submit,
            .woocommerce button.button.alt.disabled,
            .wc-block-grid__products .wc-block-grid__product .wp-block-button__link,
            .wc-block-grid__product-onsale,
            [CLASS*="wc-block"] button,
            .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),
            .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,
            .woocommerce button.button.alt.disabled.wc-variation-selection-needed,
            [CLASS*="wc-block"] .wc-block-components-button {
                padding-top: 16px;
                padding-right: 32px;
                padding-bottom: 16px;
                padding-left: 32px;
                font-size: 16px;
                font-size: 1rem;
            }
        }

        @media (max-width:544px) {

            .menu-toggle,
            button,
            .ast-button,
            .ast-custom-button,
            .button,
            input#submit,
            input[type="button"],
            input[type="submit"],
            input[type="reset"],
            form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
            body .wp-block-file .wp-block-file__button,
            .woocommerce-js a.button,
            .woocommerce button.button,
            .woocommerce .woocommerce-message a.button,
            .woocommerce #respond input#submit.alt,
            .woocommerce input.button.alt,
            .woocommerce input.button,
            .woocommerce input.button:disabled,
            .woocommerce input.button:disabled[disabled],
            .woocommerce input.button:disabled:hover,
            .woocommerce input.button:disabled[disabled]:hover,
            .woocommerce #respond input#submit,
            .woocommerce button.button.alt.disabled,
            .wc-block-grid__products .wc-block-grid__product .wp-block-button__link,
            .wc-block-grid__product-onsale,
            [CLASS*="wc-block"] button,
            .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),
            .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,
            .woocommerce button.button.alt.disabled.wc-variation-selection-needed,
            [CLASS*="wc-block"] .wc-block-components-button {
                padding-top: 15px;
                padding-right: 28px;
                padding-bottom: 15px;
                padding-left: 28px;
                font-size: 14px;
                font-size: 0.875rem;
            }
        }

        @media (max-width:921px) {

            .menu-toggle,
            button,
            .ast-button,
            .button,
            input#submit,
            input[type="button"],
            input[type="submit"],
            input[type="reset"] {
                font-size: 16px;
                font-size: 1rem;
            }

            .ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
                display: inline-block;
            }

            .ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
                margin: 0;
            }

            .ast-comment-avatar-wrap img {
                max-width: 2.5em;
            }

            .ast-comment-meta {
                padding: 0 1.8888em 1.3333em;
            }

            .ast-separate-container .ast-comment-list li.depth-1 {
                padding: 1.5em 2.14em;
            }

            .ast-separate-container .comment-respond {
                padding: 2em 2.14em;
            }
        }

        @media (min-width:544px) {
            .ast-container {
                max-width: 100%;
            }
        }

        @media (max-width:544px) {

            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single,
            .ast-separate-container .comments-title,
            .ast-separate-container .ast-archive-description {
                padding: 1.5em 1em;
            }

            .ast-separate-container #content .ast-container {
                padding-left: 0.54em;
                padding-right: 0.54em;
            }

            .ast-separate-container .ast-comment-list .bypostauthor {
                padding: .5em;
            }

            .ast-search-menu-icon.ast-dropdown-active .search-field {
                width: 170px;
            }

            .menu-toggle,
            button,
            .ast-button,
            .button,
            input#submit,
            input[type="button"],
            input[type="submit"],
            input[type="reset"] {
                font-size: 14px;
                font-size: 0.875rem;
            }
        }

        body,
        .ast-separate-container {
            background-color: var(--ast-global-color-5);
            ;
            background-image: none;
            ;
        }

        @media (max-width:921px) {
            .site-title {
                display: none;
            }

            .site-header .site-description {
                display: none;
            }

            h1,
            .entry-content h1 {
                font-size: 30px;
            }

            h2,
            .entry-content h2 {
                font-size: 25px;
            }

            h3,
            .entry-content h3 {
                font-size: 20px;
            }

            h4,
            .entry-content h4 {
                font-size: 35px;
                font-size: 2.1875rem;
            }

            .astra-logo-svg {
                width: 60px;
            }

            header .custom-logo-link img,
            .ast-header-break-point .site-logo-img .custom-mobile-logo-link img {
                max-width: 60px;
            }
        }

        @media (max-width:544px) {
            .site-title {
                display: none;
            }

            .site-header .site-description {
                display: none;
            }

            h1,
            .entry-content h1 {
                font-size: 30px;
            }

            h2,
            .entry-content h2 {
                font-size: 25px;
            }

            h3,
            .entry-content h3 {
                font-size: 20px;
            }

            h4,
            .entry-content h4 {
                font-size: 24px;
                font-size: 1.5rem;
            }

            header .custom-logo-link img,
            .ast-header-break-point .site-branding img,
            .ast-header-break-point .custom-logo-link img {
                max-width: 50px;
            }

            .astra-logo-svg {
                width: 50px;
            }

            .ast-header-break-point .site-logo-img .custom-mobile-logo-link img {
                max-width: 50px;
            }
        }

        @media (max-width:921px) {
            html {
                font-size: 91.2%;
            }
        }

        @media (max-width:544px) {
            html {
                font-size: 91.2%;
            }
        }

        @media (min-width:922px) {
            .ast-container {
                max-width: 1240px;
            }
        }

        @media (min-width:922px) {
            .site-content .ast-container {
                display: flex;
            }
        }

        @media (max-width:921px) {
            .site-content .ast-container {
                flex-direction: column;
            }
        }

        @media (min-width:922px) {

            .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover>.sub-menu,
            .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus>.sub-menu {
                margin-left: -0px;
            }
        }

        .site .comments-area {
            padding-bottom: 3em;
        }

        .wp-block-file {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .wp-block-pullquote {
            border: none;
        }

        .wp-block-pullquote blockquote::before {
            content: "\201D";
            font-family: "Helvetica", sans-serif;
            display: flex;
            transform: rotate(180deg);
            font-size: 6rem;
            font-style: normal;
            line-height: 1;
            font-weight: bold;
            align-items: center;
            justify-content: center;
        }

        .has-text-align-right>blockquote::before {
            justify-content: flex-start;
        }

        .has-text-align-left>blockquote::before {
            justify-content: flex-end;
        }

        figure.wp-block-pullquote.is-style-solid-color blockquote {
            max-width: 100%;
            text-align: inherit;
        }

        html body {
            --wp--custom--ast-default-block-top-padding: 3em;
            --wp--custom--ast-default-block-right-padding: 3em;
            --wp--custom--ast-default-block-bottom-padding: 3em;
            --wp--custom--ast-default-block-left-padding: 3em;
            --wp--custom--ast-container-width: 1200px;
            --wp--custom--ast-content-width-size: 1200px;
            --wp--custom--ast-wide-width-size: calc(1200px + var(--wp--custom--ast-default-block-left-padding) + var(--wp--custom--ast-default-block-right-padding));
        }

        .ast-narrow-container {
            --wp--custom--ast-content-width-size: 750px;
            --wp--custom--ast-wide-width-size: 750px;
        }

        @media(max-width: 921px) {
            html body {
                --wp--custom--ast-default-block-top-padding: 3em;
                --wp--custom--ast-default-block-right-padding: 2em;
                --wp--custom--ast-default-block-bottom-padding: 3em;
                --wp--custom--ast-default-block-left-padding: 2em;
            }
        }

        @media(max-width: 544px) {
            html body {
                --wp--custom--ast-default-block-top-padding: 3em;
                --wp--custom--ast-default-block-right-padding: 1.5em;
                --wp--custom--ast-default-block-bottom-padding: 3em;
                --wp--custom--ast-default-block-left-padding: 1.5em;
            }
        }

        .entry-content>.wp-block-group,
        .entry-content>.wp-block-cover,
        .entry-content>.wp-block-columns {
            padding-top: var(--wp--custom--ast-default-block-top-padding);
            padding-right: var(--wp--custom--ast-default-block-right-padding);
            padding-bottom: var(--wp--custom--ast-default-block-bottom-padding);
            padding-left: var(--wp--custom--ast-default-block-left-padding);
        }

        .ast-plain-container.ast-no-sidebar .entry-content>.alignfull,
        .ast-page-builder-template .ast-no-sidebar .entry-content>.alignfull {
            margin-left: calc(-50vw + 50%);
            margin-right: calc(-50vw + 50%);
            max-width: 100vw;
            width: 100vw;
        }

        .ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignfull,
        .ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignfull,
        .ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignwide,
        .ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignwide,
        .ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignfull,
        .ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignfull,
        .ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignwide,
        .ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignwide,
        .ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignfull,
        .ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignfull,
        .ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignwide,
        .ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignwide {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }

        [ast-blocks-layout] .wp-block-separator:not(.is-style-dots) {
            height: 0;
        }

        [ast-blocks-layout] .wp-block-separator {
            margin: 20px auto;
        }

        [ast-blocks-layout] .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            max-width: 100px;
        }

        [ast-blocks-layout] .wp-block-separator.has-background {
            padding: 0;
        }

        .entry-content[ast-blocks-layout]>* {
            max-width: var(--wp--custom--ast-content-width-size);
            margin-left: auto;
            margin-right: auto;
        }

        .entry-content[ast-blocks-layout]>.alignwide {
            max-width: var(--wp--custom--ast-wide-width-size);
        }

        .entry-content[ast-blocks-layout] .alignfull {
            max-width: none;
        }

        .entry-content .wp-block-columns {
            margin-bottom: 0;
        }

        blockquote {
            margin: 1.5em;
            border-color: rgba(0, 0, 0, 0.05);
        }

        .wp-block-quote:not(.has-text-align-right):not(.has-text-align-center) {
            border-left: 5px solid rgba(0, 0, 0, 0.05);
        }

        .has-text-align-right>blockquote,
        blockquote.has-text-align-right {
            border-right: 5px solid rgba(0, 0, 0, 0.05);
        }

        .has-text-align-left>blockquote,
        blockquote.has-text-align-left {
            border-left: 5px solid rgba(0, 0, 0, 0.05);
        }

        .wp-block-site-tagline,
        .wp-block-latest-posts .read-more {
            margin-top: 15px;
        }

        .wp-block-loginout p label {
            display: block;
        }

        .wp-block-loginout p:not(.login-remember):not(.login-submit) input {
            width: 100%;
        }

        .wp-block-loginout input:focus {
            border-color: transparent;
        }

        .wp-block-loginout input:focus {
            outline: thin dotted;
        }

        .entry-content .wp-block-media-text .wp-block-media-text__content {
            padding: 0 0 0 8%;
        }

        .entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
            padding: 0 8% 0 0;
        }

        .entry-content .wp-block-media-text.has-background .wp-block-media-text__content {
            padding: 8%;
        }

        .entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,
        .entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
        .entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
        .entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
        .entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
        .entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text {
            color: var(--ast-global-color-5);
        }

        .wp-block-loginout .login-remember input {
            width: 1.1rem;
            height: 1.1rem;
            margin: 0 5px 4px 0;
            vertical-align: middle;
        }

        .wp-block-latest-posts>li>*:first-child,
        .wp-block-latest-posts:not(.is-grid)>li:first-child {
            margin-top: 0;
        }

        .wp-block-search__inside-wrapper .wp-block-search__input {
            padding: 0 10px;
            color: var(--ast-global-color-3);
            background: var(--ast-global-color-5);
            border-color: var(--ast-border-color);
        }

        .wp-block-latest-posts .read-more {
            margin-bottom: 1.5em;
        }

        .wp-block-search__no-button .wp-block-search__inside-wrapper .wp-block-search__input {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .wp-block-latest-posts .wp-block-latest-posts__post-date,
        .wp-block-latest-posts .wp-block-latest-posts__post-author {
            font-size: 1rem;
        }

        .wp-block-latest-posts>li>*,
        .wp-block-latest-posts:not(.is-grid)>li {
            margin-top: 12px;
            margin-bottom: 12px;
        }

        .ast-page-builder-template .entry-content[ast-blocks-layout]>*,
        .ast-page-builder-template .entry-content[ast-blocks-layout]>.alignfull>* {
            max-width: none;
        }

        .ast-page-builder-template .entry-content[ast-blocks-layout]>.alignwide>* {
            max-width: var(--wp--custom--ast-wide-width-size);
        }

        .ast-page-builder-template .entry-content[ast-blocks-layout]>.inherit-container-width>*,
        .ast-page-builder-template .entry-content[ast-blocks-layout]>*>*,
        .entry-content[ast-blocks-layout]>.wp-block-cover .wp-block-cover__inner-container {
            max-width: var(--wp--custom--ast-content-width-size);
            margin-left: auto;
            margin-right: auto;
        }

        .entry-content[ast-blocks-layout] .wp-block-cover:not(.alignleft):not(.alignright) {
            width: auto;
        }

        @media(max-width: 1200px) {

            .ast-separate-container .entry-content>.alignfull,
            .ast-separate-container .entry-content[ast-blocks-layout]>.alignwide,
            .ast-plain-container .entry-content[ast-blocks-layout]>.alignwide,
            .ast-plain-container .entry-content .alignfull {
                margin-left: calc(-1 * min(var(--ast-container-default-xlg-padding), 20px));
                margin-right: calc(-1 * min(var(--ast-container-default-xlg-padding), 20px));
            }
        }

        @media(min-width: 1201px) {
            .ast-separate-container .entry-content>.alignfull {
                margin-left: calc(-1 * var(--ast-container-default-xlg-padding));
                margin-right: calc(-1 * var(--ast-container-default-xlg-padding));
            }

            .ast-separate-container .entry-content[ast-blocks-layout]>.alignwide,
            .ast-plain-container .entry-content[ast-blocks-layout]>.alignwide {
                margin-left: calc(-1 * var(--wp--custom--ast-default-block-left-padding));
                margin-right: calc(-1 * var(--wp--custom--ast-default-block-right-padding));
            }
        }

        @media(min-width: 921px) {

            .ast-separate-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width)> :where(:not(.alignleft):not(.alignright)),
            .ast-plain-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width)> :where(:not(.alignleft):not(.alignright)) {
                max-width: calc(var(--wp--custom--ast-content-width-size) + 80px);
            }

            .ast-plain-container.ast-right-sidebar .entry-content[ast-blocks-layout] .alignfull,
            .ast-plain-container.ast-left-sidebar .entry-content[ast-blocks-layout] .alignfull {
                margin-left: -60px;
                margin-right: -60px;
            }
        }

        @media(min-width: 544px) {
            .entry-content>.alignleft {
                margin-right: 20px;
            }

            .entry-content>.alignright {
                margin-left: 20px;
            }
        }

        @media (max-width:544px) {
            .wp-block-columns .wp-block-column:not(:last-child) {
                margin-bottom: 20px;
            }

            .wp-block-latest-posts {
                margin: 0;
            }
        }

        @media(max-width: 600px) {

            .entry-content .wp-block-media-text .wp-block-media-text__content,
            .entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
                padding: 8% 0 0;
            }

            .entry-content .wp-block-media-text.has-background .wp-block-media-text__content {
                padding: 8%;
            }
        }

        .ast-page-builder-template .entry-header {
            padding-left: 0;
        }

        .ast-narrow-container .site-content .wp-block-uagb-image--align-full .wp-block-uagb-image__figure {
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        :root .has-ast-global-color-0-color {
            color: var(--ast-global-color-0);
        }

        :root .has-ast-global-color-0-background-color {
            background-color: var(--ast-global-color-0);
        }

        :root .wp-block-button .has-ast-global-color-0-color {
            color: var(--ast-global-color-0);
        }

        :root .wp-block-button .has-ast-global-color-0-background-color {
            background-color: var(--ast-global-color-0);
        }

        :root .has-ast-global-color-1-color {
            color: var(--ast-global-color-1);
        }

        :root .has-ast-global-color-1-background-color {
            background-color: var(--ast-global-color-1);
        }

        :root .wp-block-button .has-ast-global-color-1-color {
            color: var(--ast-global-color-1);
        }

        :root .wp-block-button .has-ast-global-color-1-background-color {
            background-color: var(--ast-global-color-1);
        }

        :root .has-ast-global-color-2-color {
            color: var(--ast-global-color-2);
        }

        :root .has-ast-global-color-2-background-color {
            background-color: var(--ast-global-color-2);
        }

        :root .wp-block-button .has-ast-global-color-2-color {
            color: var(--ast-global-color-2);
        }

        :root .wp-block-button .has-ast-global-color-2-background-color {
            background-color: var(--ast-global-color-2);
        }

        :root .has-ast-global-color-3-color {
            color: var(--ast-global-color-3);
        }

        :root .has-ast-global-color-3-background-color {
            background-color: var(--ast-global-color-3);
        }

        :root .wp-block-button .has-ast-global-color-3-color {
            color: var(--ast-global-color-3);
        }

        :root .wp-block-button .has-ast-global-color-3-background-color {
            background-color: var(--ast-global-color-3);
        }

        :root .has-ast-global-color-4-color {
            color: var(--ast-global-color-4);
        }

        :root .has-ast-global-color-4-background-color {
            background-color: var(--ast-global-color-4);
        }

        :root .wp-block-button .has-ast-global-color-4-color {
            color: var(--ast-global-color-4);
        }

        :root .wp-block-button .has-ast-global-color-4-background-color {
            background-color: var(--ast-global-color-4);
        }

        :root .has-ast-global-color-5-color {
            color: var(--ast-global-color-5);
        }

        :root .has-ast-global-color-5-background-color {
            background-color: var(--ast-global-color-5);
        }

        :root .wp-block-button .has-ast-global-color-5-color {
            color: var(--ast-global-color-5);
        }

        :root .wp-block-button .has-ast-global-color-5-background-color {
            background-color: var(--ast-global-color-5);
        }

        :root .has-ast-global-color-6-color {
            color: var(--ast-global-color-6);
        }

        :root .has-ast-global-color-6-background-color {
            background-color: var(--ast-global-color-6);
        }

        :root .wp-block-button .has-ast-global-color-6-color {
            color: var(--ast-global-color-6);
        }

        :root .wp-block-button .has-ast-global-color-6-background-color {
            background-color: var(--ast-global-color-6);
        }

        :root .has-ast-global-color-7-color {
            color: var(--ast-global-color-7);
        }

        :root .has-ast-global-color-7-background-color {
            background-color: var(--ast-global-color-7);
        }

        :root .wp-block-button .has-ast-global-color-7-color {
            color: var(--ast-global-color-7);
        }

        :root .wp-block-button .has-ast-global-color-7-background-color {
            background-color: var(--ast-global-color-7);
        }

        :root .has-ast-global-color-8-color {
            color: var(--ast-global-color-8);
        }

        :root .has-ast-global-color-8-background-color {
            background-color: var(--ast-global-color-8);
        }

        :root .wp-block-button .has-ast-global-color-8-color {
            color: var(--ast-global-color-8);
        }

        :root .wp-block-button .has-ast-global-color-8-background-color {
            background-color: var(--ast-global-color-8);
        }

        :root {
            --ast-global-color-0: #ffd936;
            --ast-global-color-1: #dab200;
            --ast-global-color-2: #536942;
            --ast-global-color-3: rgba(82, 104, 64, 0.75);
            --ast-global-color-4: #f6f8f5;
            --ast-global-color-5: #ffffff;
            --ast-global-color-6: rgba(82, 104, 64, 0.8);
            --ast-global-color-7: #000000;
            --ast-global-color-8: rgba(82, 104, 64, 0.3);
        }

        :root {
            --ast-border-color: #dddddd;
        }

        .ast-single-entry-banner {
            -js-display: flex;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            position: relative;
            background: #eeeeee;
        }

        .ast-single-entry-banner[data-banner-layout="layout-1"] {
            max-width: 1200px;
            background: inherit;
            padding: 20px 0;
        }

        .ast-single-entry-banner[data-banner-width-type="custom"] {
            margin: 0 auto;
            width: 100%;
        }

        .ast-single-entry-banner+.site-content .entry-header {
            margin-bottom: 0;
        }

        .site .ast-author-avatar {
            --ast-author-avatar-size: ;
        }

        a.ast-underline-text {
            text-decoration: underline;
        }

        .ast-container>.ast-terms-link {
            position: relative;
            display: block;
        }

        a.ast-button.ast-badge-tax {
            padding: 4px 8px;
            border-radius: 3px;
            font-size: inherit;
        }

        header.entry-header .entry-title {
            font-size: 30px;
            font-size: 1.875rem;
        }

        header.entry-header>*:not(:last-child) {
            margin-bottom: 10px;
        }

        .ast-archive-entry-banner {
            -js-display: flex;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            position: relative;
            background: #eeeeee;
        }

        .ast-archive-entry-banner[data-banner-width-type="custom"] {
            margin: 0 auto;
            width: 100%;
        }

        .ast-archive-entry-banner[data-banner-layout="layout-1"] {
            background: inherit;
            padding: 20px 0;
            text-align: left;
        }

        body.archive .ast-archive-description {
            max-width: 1200px;
            width: 100%;
            text-align: left;
            padding-top: 3em;
            padding-right: 3em;
            padding-bottom: 3em;
            padding-left: 3em;
        }

        body.archive .ast-archive-description .ast-archive-title,
        body.archive .ast-archive-description .ast-archive-title * {
            font-size: 40px;
            font-size: 2.5rem;
        }

        body.archive .ast-archive-description>*:not(:last-child) {
            margin-bottom: 10px;
        }

        @media (max-width:921px) {
            body.archive .ast-archive-description {
                text-align: left;
            }
        }

        @media (max-width:544px) {
            body.archive .ast-archive-description {
                text-align: left;
            }
        }

        .ast-breadcrumbs .trail-browse,
        .ast-breadcrumbs .trail-items,
        .ast-breadcrumbs .trail-items li {
            display: inline-block;
            margin: 0;
            padding: 0;
            border: none;
            background: inherit;
            text-indent: 0;
            text-decoration: none;
        }

        .ast-breadcrumbs .trail-browse {
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            color: inherit;
        }

        .ast-breadcrumbs .trail-items {
            list-style: none;
        }

        .trail-items li::after {
            padding: 0 0.3em;
            content: "\00bb";
        }

        .trail-items li:last-of-type::after {
            display: none;
        }

        h1,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6 {
            color: var(--ast-global-color-2);
        }

        .entry-title a {
            color: var(--ast-global-color-2);
        }

        @media (max-width:921px) {

            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row>*:first-child,
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row>*:last-child {
                grid-column: 1 / -1;
            }
        }

        @media (max-width:544px) {

            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row>*:first-child,
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row>*:last-child {
                grid-column: 1 / -1;
            }
        }

        .ast-builder-menu-1 {
            font-family: inherit;
            font-weight: inherit;
        }

        .ast-builder-menu-1 .menu-item>.menu-link {
            color: var(--ast-global-color-3);
        }

        .ast-builder-menu-1 .menu-item>.ast-menu-toggle {
            color: var(--ast-global-color-3);
        }

        .ast-builder-menu-1 .menu-item:hover>.menu-link,
        .ast-builder-menu-1 .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
            color: var(--ast-global-color-1);
        }

        .ast-builder-menu-1 .menu-item:hover>.ast-menu-toggle {
            color: var(--ast-global-color-1);
        }

        .ast-builder-menu-1 .menu-item.current-menu-item>.menu-link,
        .ast-builder-menu-1 .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
        .ast-builder-menu-1 .current-menu-ancestor>.menu-link {
            color: var(--ast-global-color-1);
        }

        .ast-builder-menu-1 .menu-item.current-menu-item>.ast-menu-toggle {
            color: var(--ast-global-color-1);
        }

        .ast-builder-menu-1 .sub-menu,
        .ast-builder-menu-1 .inline-on-mobile .sub-menu {
            border-top-width: 2px;
            border-bottom-width: 0px;
            border-right-width: 0px;
            border-left-width: 0px;
            border-color: var(--ast-global-color-0);
            border-style: solid;
        }

        .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
        .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
            margin-top: 0px;
        }

        .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu:before,
        .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper:before {
            height: calc(0px + 5px);
        }

        .ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link {
            border-style: none;
        }

        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0;
            }

            .ast-builder-menu-1 .inline-on-mobile .menu-item.menu-item-has-children>.ast-menu-toggle {
                right: -15px;
            }

            .ast-builder-menu-1 .menu-item-has-children>.menu-link:after {
                content: unset;
            }

            .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
            .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
                margin-top: 0;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0;
            }

            .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
            .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
                margin-top: 0;
            }
        }

        .ast-builder-menu-1 {
            display: flex;
        }

        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-1 {
                display: flex;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-1 {
                display: flex;
            }
        }

        .footer-widget-area.widget-area.site-footer-focus-item {
            width: auto;
        }

        .elementor-widget-heading .elementor-heading-title {
            margin: 0;
        }

        .elementor-page .ast-menu-toggle {
            color: unset !important;
            background: unset !important;
        }

        .elementor-post.elementor-grid-item.hentry {
            margin-bottom: 0;
        }

        .woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,
        .elementor-element .elementor-wc-products .woocommerce[class*='columns-'] ul.products li.product {
            width: auto;
            margin: 0;
            float: none;
        }

        .elementor-toc__list-wrapper {
            margin: 0;
        }

        body .elementor hr {
            background-color: #ccc;
            margin: 0;
        }

        .ast-left-sidebar .elementor-section.elementor-section-stretched,
        .ast-right-sidebar .elementor-section.elementor-section-stretched {
            max-width: 100%;
            left: 0 !important;
        }

        .elementor-posts-container [CLASS*="ast-width-"] {
            width: 100%;
        }

        .elementor-template-full-width .ast-container {
            display: block;
        }

        .elementor-screen-only,
        .screen-reader-text,
        .screen-reader-text span,
        .ui-helper-hidden-accessible {
            top: 0 !important;
        }

        @media (max-width:544px) {
            .elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product {
                width: auto;
                margin: 0;
            }

            .elementor-element .woocommerce .woocommerce-result-count {
                float: none;
            }
        }

        .ast-header-break-point .main-header-bar {
            border-bottom-width: 1px;
        }

        @media (min-width:922px) {
            .main-header-bar {
                border-bottom-width: 1px;
            }
        }

        .main-header-menu .menu-item,
        #astra-footer-menu .menu-item,
        .main-header-bar .ast-masthead-custom-menu-items {
            -js-display: flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .main-header-menu>.menu-item>.menu-link,
        #astra-footer-menu>.menu-item>.menu-link {
            height: 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -js-display: flex;
            display: flex;
        }

        .ast-header-break-point .main-navigation ul .menu-item .menu-link .icon-arrow:first-of-type svg {
            top: .2em;
            margin-top: 0px;
            margin-left: 0px;
            width: .65em;
            transform: translate(0, -2px) rotateZ(270deg);
        }

        .ast-mobile-popup-content .ast-submenu-expanded>.ast-menu-toggle {
            transform: rotateX(180deg);
            overflow-y: auto;
        }

        @media (min-width:922px) {
            .ast-builder-menu .main-navigation>ul>li:last-child a {
                margin-right: 0;
            }
        }

        .ast-separate-container .ast-article-inner {
            background-color: transparent;
            background-image: none;
        }

        .ast-separate-container .ast-article-post {
            background-color: var(--ast-global-color-4);
            ;
            background-image: none;
            ;
        }

        @media (max-width:921px) {
            .ast-separate-container .ast-article-post {
                background-color: var(--ast-global-color-5);
                ;
                background-image: none;
                ;
            }
        }

        @media (max-width:544px) {
            .ast-separate-container .ast-article-post {
                background-color: var(--ast-global-color-5);
                ;
                background-image: none;
                ;
            }
        }

        .ast-separate-container .ast-article-single:not(.ast-related-post),
        .woocommerce.ast-separate-container .ast-woocommerce-container,
        .ast-separate-container .error-404,
        .ast-separate-container .no-results,
        .single.ast-separate-container .ast-author-meta,
        .ast-separate-container .related-posts-title-wrapper,
        .ast-separate-container .comments-count-wrapper,
        .ast-box-layout.ast-plain-container .site-content,
        .ast-padded-layout.ast-plain-container .site-content,
        .ast-separate-container .ast-archive-description,
        .ast-separate-container .comments-area .comment-respond,
        .ast-separate-container .comments-area .ast-comment-list li,
        .ast-separate-container .comments-area .comments-title {
            background-color: var(--ast-global-color-4);
            ;
            background-image: none;
            ;
        }

        @media (max-width:921px) {

            .ast-separate-container .ast-article-single:not(.ast-related-post),
            .woocommerce.ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .error-404,
            .ast-separate-container .no-results,
            .single.ast-separate-container .ast-author-meta,
            .ast-separate-container .related-posts-title-wrapper,
            .ast-separate-container .comments-count-wrapper,
            .ast-box-layout.ast-plain-container .site-content,
            .ast-padded-layout.ast-plain-container .site-content,
            .ast-separate-container .ast-archive-description {
                background-color: var(--ast-global-color-5);
                ;
                background-image: none;
                ;
            }
        }

        @media (max-width:544px) {

            .ast-separate-container .ast-article-single:not(.ast-related-post),
            .woocommerce.ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .error-404,
            .ast-separate-container .no-results,
            .single.ast-separate-container .ast-author-meta,
            .ast-separate-container .related-posts-title-wrapper,
            .ast-separate-container .comments-count-wrapper,
            .ast-box-layout.ast-plain-container .site-content,
            .ast-padded-layout.ast-plain-container .site-content,
            .ast-separate-container .ast-archive-description {
                background-color: var(--ast-global-color-5);
                ;
                background-image: none;
                ;
            }
        }

        .ast-separate-container.ast-two-container #secondary .widget {
            background-color: var(--ast-global-color-4);
            ;
            background-image: none;
            ;
        }

        @media (max-width:921px) {
            .ast-separate-container.ast-two-container #secondary .widget {
                background-color: var(--ast-global-color-5);
                ;
                background-image: none;
                ;
            }
        }

        @media (max-width:544px) {
            .ast-separate-container.ast-two-container #secondary .widget {
                background-color: var(--ast-global-color-5);
                ;
                background-image: none;
                ;
            }
        }

        .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }

        .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
            content: unset;
        }

        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .main-header-menu,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .main-header-menu,
        .ast-hfb-header .ast-mobile-header-content .ast-builder-menu-mobile .main-navigation .main-header-menu,
        .ast-hfb-header .ast-mobile-popup-content .ast-builder-menu-mobile .main-navigation .main-header-menu {
            border-top-width: 1px;
            border-color: #eaeaea;
        }

        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
        .ast-hfb-header .ast-mobile-header-content .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link,
        .ast-hfb-header .ast-mobile-header-content .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
        .ast-hfb-header .ast-mobile-popup-content .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link,
        .ast-hfb-header .ast-mobile-popup-content .ast-builder-menu-mobile .main-navigation .menu-item .menu-link {
            border-bottom-width: 1px;
            border-color: #eaeaea;
            border-style: solid;
        }

        .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }

        @media (max-width:921px) {
            .ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item>.menu-link {
                color: #000000;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 0px;
                padding-right: 0px;
            }

            .ast-builder-menu-mobile .main-navigation .menu-item>.ast-menu-toggle {
                color: #000000;
            }

            .ast-builder-menu-mobile .main-navigation .menu-item:hover>.menu-link,
            .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
                color: #000000;
                background: rgba(0, 0, 0, 0);
            }

            .ast-builder-menu-mobile .main-navigation .menu-item:hover>.ast-menu-toggle {
                color: #000000;
            }

            .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item>.menu-link,
            .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
            .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor>.menu-link,
            .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor>.ast-menu-toggle {
                color: var(--ast-global-color-0);
                background: rgba(0, 0, 0, 0);
            }

            .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item>.ast-menu-toggle {
                color: var(--ast-global-color-0);
            }

            .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 5px;
                right: calc(0px - 0.907em);
            }

            .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
                content: unset;
            }

            .ast-builder-menu-mobile .main-navigation .main-header-menu,
            .ast-builder-menu-mobile .main-navigation .main-header-menu .sub-menu {
                background-color: rgba(0, 0, 0, 0);
                ;
                background-image: none;
                ;
            }
        }

        @media (max-width:544px) {
            .ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item>.menu-link {
                padding-top: 5px;
                padding-bottom: 5px;
            }

            .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 5px;
            }
        }

        .ast-builder-menu-mobile .main-navigation {
            display: block;
        }

        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
                display: block;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
                display: block;
            }
        }

        :root {
            --e-global-color-astglobalcolor0: #ffd936;
            --e-global-color-astglobalcolor1: #dab200;
            --e-global-color-astglobalcolor2: #536942;
            --e-global-color-astglobalcolor3: rgba(82, 104, 64, 0.75);
            --e-global-color-astglobalcolor4: #f6f8f5;
            --e-global-color-astglobalcolor5: #ffffff;
            --e-global-color-astglobalcolor6: rgba(82, 104, 64, 0.8);
            --e-global-color-astglobalcolor7: #000000;
            --e-global-color-astglobalcolor8: rgba(82, 104, 64, 0.3);
        }
    </style>
    <link rel='stylesheet' id='astra-google-fonts-css'
        href='https://fonts.googleapis.com/css?family=DM+Sans%3A400%2C%2C700%7CForum%3A400&#038;display=fallback&#038;ver=4.6.9'
        media='all' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
            --wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
            --wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
            --wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
            --wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
            --wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
            --wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
            --wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
            --wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        body {
            margin: 0;
            --wp--style--global--content-size: var(--wp--custom--ast-content-width-size);
            --wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size);
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.wp-site-blocks)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :where(.wp-site-blocks)> :first-child:first-child {
            margin-block-start: 0;
        }

        :where(.wp-site-blocks)> :last-child:last-child {
            margin-block-end: 0;
        }

        body {
            --wp--style--block-gap: 24px;
        }

        :where(body .is-layout-flow)> :first-child:first-child {
            margin-block-start: 0;
        }

        :where(body .is-layout-flow)> :last-child:last-child {
            margin-block-end: 0;
        }

        :where(body .is-layout-flow)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :where(body .is-layout-constrained)> :first-child:first-child {
            margin-block-start: 0;
        }

        :where(body .is-layout-constrained)> :last-child:last-child {
            margin-block-end: 0;
        }

        :where(body .is-layout-constrained)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :where(body .is-layout-flex) {
            gap: 24px;
        }

        :where(body .is-layout-grid) {
            gap: 24px;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        a:where(:not(.wp-element-button)) {
            text-decoration: none;
        }

        .wp-element-button,
        .wp-block-button__link {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            text-decoration: none;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-ast-global-color-0-color {
            color: var(--wp--preset--color--ast-global-color-0) !important;
        }

        .has-ast-global-color-1-color {
            color: var(--wp--preset--color--ast-global-color-1) !important;
        }

        .has-ast-global-color-2-color {
            color: var(--wp--preset--color--ast-global-color-2) !important;
        }

        .has-ast-global-color-3-color {
            color: var(--wp--preset--color--ast-global-color-3) !important;
        }

        .has-ast-global-color-4-color {
            color: var(--wp--preset--color--ast-global-color-4) !important;
        }

        .has-ast-global-color-5-color {
            color: var(--wp--preset--color--ast-global-color-5) !important;
        }

        .has-ast-global-color-6-color {
            color: var(--wp--preset--color--ast-global-color-6) !important;
        }

        .has-ast-global-color-7-color {
            color: var(--wp--preset--color--ast-global-color-7) !important;
        }

        .has-ast-global-color-8-color {
            color: var(--wp--preset--color--ast-global-color-8) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-ast-global-color-0-background-color {
            background-color: var(--wp--preset--color--ast-global-color-0) !important;
        }

        .has-ast-global-color-1-background-color {
            background-color: var(--wp--preset--color--ast-global-color-1) !important;
        }

        .has-ast-global-color-2-background-color {
            background-color: var(--wp--preset--color--ast-global-color-2) !important;
        }

        .has-ast-global-color-3-background-color {
            background-color: var(--wp--preset--color--ast-global-color-3) !important;
        }

        .has-ast-global-color-4-background-color {
            background-color: var(--wp--preset--color--ast-global-color-4) !important;
        }

        .has-ast-global-color-5-background-color {
            background-color: var(--wp--preset--color--ast-global-color-5) !important;
        }

        .has-ast-global-color-6-background-color {
            background-color: var(--wp--preset--color--ast-global-color-6) !important;
        }

        .has-ast-global-color-7-background-color {
            background-color: var(--wp--preset--color--ast-global-color-7) !important;
        }

        .has-ast-global-color-8-background-color {
            background-color: var(--wp--preset--color--ast-global-color-8) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-ast-global-color-0-border-color {
            border-color: var(--wp--preset--color--ast-global-color-0) !important;
        }

        .has-ast-global-color-1-border-color {
            border-color: var(--wp--preset--color--ast-global-color-1) !important;
        }

        .has-ast-global-color-2-border-color {
            border-color: var(--wp--preset--color--ast-global-color-2) !important;
        }

        .has-ast-global-color-3-border-color {
            border-color: var(--wp--preset--color--ast-global-color-3) !important;
        }

        .has-ast-global-color-4-border-color {
            border-color: var(--wp--preset--color--ast-global-color-4) !important;
        }

        .has-ast-global-color-5-border-color {
            border-color: var(--wp--preset--color--ast-global-color-5) !important;
        }

        .has-ast-global-color-6-border-color {
            border-color: var(--wp--preset--color--ast-global-color-6) !important;
        }

        .has-ast-global-color-7-border-color {
            border-color: var(--wp--preset--color--ast-global-color-7) !important;
        }

        .has-ast-global-color-8-border-color {
            border-color: var(--wp--preset--color--ast-global-color-8) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='animate-css-css' href='content/animate.css?ver=1.2.5' media='all' />
    <link rel='stylesheet' id='salert-main-css-css' href='content/style.css?ver=45181196ca1e88cc943122dfdde4d125'
        media='all' />
    <style id='salert-main-css-inline-css'>
        #salertWrapper .popup_template {
            background-color: #fff;

            border: 2px solid #e0e0e0;
            border-width: 2px;
            border-radius: 0px;

        }

        #salertWrapper .popup_position {
            width: 350px;
        }


        #salertWrapper .popup_position .salert-content-wrap {
            color: #000;
            font-size: 16px;
            text-transform: none;
        }

        #salertWrapper .popup-item {
            padding: 10px;
        }

        @media (max-width: 767px) {
            #salertWrapper {
                display: block !important;
            }
        }

        #salertWrapper .popup_template {
            -webkit-box-shadow: 3px 5px 10px 1px rgba(0, 0, 0, 0.38);
            box-shadow: 3px 5px 10px 1px rgba(0, 0, 0, 0.38);
        }
    </style>
    <link rel='stylesheet' id='elementor-frontend-css' href='content/frontend-lite.min.css?ver=3.20.3' media='all' />
    <style id='elementor-frontend-inline-css'>
        .elementor-kit-25673 {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-2e6c5c0: #9FCE00;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        .e-con {
            --container-max-width: 1140px;
        }

        .elementor-widget:not(:last-child) {
            margin-block-end: 20px;
        }

        .elementor-element {
            --widgets-spacing: 20px 20px;
        }

            {}

        h1.entry-title {
            display: var(--page-title-display);
        }

        @media(max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }

            .e-con {
                --container-max-width: 1024px;
            }
        }

        @media(max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }

            .e-con {
                --container-max-width: 767px;
            }
        }

        .elementor-25696 .elementor-element.elementor-element-a3baca2 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-6d3f0b1 {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-6d3f0b1 .elementor-heading-title {
            color: #FFFFFF;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-25696 .elementor-element.elementor-element-6d3f0b1>.elementor-widget-container {
            background-color: #0D9C00;
        }

        .elementor-25696 .elementor-element.elementor-element-b0c218a {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-9da3423 {
            --display: flex;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-bc64291 {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-bc64291 .elementor-heading-title {
            color: #000000;
            font-size: 40px;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-25696 .elementor-element.elementor-element-bc64291>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 50px 0px 50px 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-dad91e2 {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-dad91e2 .elementor-heading-title {
            color: #000000;
            font-size: 40px;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-25696 .elementor-element.elementor-element-dad91e2>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 50px 0px 50px 0px;
            background-color: #FFDB61;
        }

        .elementor-25696 .elementor-element.elementor-element-b6bb463 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --gap: 0px 0px;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-a1f96d6 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-f00122f img {
            width: 100%;
        }

        .elementor-25696 .elementor-element.elementor-element-f00122f>.elementor-widget-container {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .elementor-25696 .elementor-element.elementor-element-892bed7 .elementor-wrapper {
            --video-aspect-ratio: 1.77777;
        }

        .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-item:not(:last-child):after {
            content: "";
            border-color: #ddd;
        }

        .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child):after {
            border-top-style: solid;
            border-top-width: 1px;
        }

        .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:not(:last-child):after {
            border-left-style: solid;
        }

        .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-inline-items .elementor-icon-list-item:not(:last-child):after {
            border-left-width: 1px;
        }

        .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-icon i {
            color: #0D9C00;
            transition: color 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-icon svg {
            fill: #0D9C00;
            transition: fill 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-8d70262 {
            --e-icon-list-icon-size: 14px;
            --icon-vertical-offset: 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-text {
            color: #000000;
            transition: color 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-fcce2d0 .elementor-button {
            font-size: 30px;
            font-weight: 700;
            text-shadow: 0px 0px 0px rgba(0, 0, 0, 0.3);
            fill: #000000;
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-fcce2d0>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-cbf7162 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-3959fe1 {
            --e-rating-icon-marked-color: #FDD600;
        }

        .elementor-25696 .elementor-element.elementor-element-934fabe {
            color: #0D9C00;
        }

        .elementor-25696 .elementor-element.elementor-element-934fabe>.elementor-widget-container {
            background-color: #0D9C00;
        }

        .elementor-25696 .elementor-element.elementor-element-3ea31b1 {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-3ea31b1 .elementor-heading-title {
            color: #000000;
            font-size: 35px;
        }

        .elementor-25696 .elementor-element.elementor-element-3ea31b1>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 20px 20px 20px 20px;
            border-style: dotted;
            border-radius: 1px 1px 1px 1px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .elementor-25696 .elementor-element.elementor-element-ffa8281 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-964f194 {
            --display: flex;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-59559f3 {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-59559f3 .elementor-heading-title {
            color: #000000;
            font-size: 40px;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-25696 .elementor-element.elementor-element-59559f3>.elementor-widget-container {
            margin: 50px 0px 30px 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-item:not(:last-child):after {
            content: "";
            border-color: #ddd;
        }

        .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child):after {
            border-top-style: solid;
            border-top-width: 1px;
        }

        .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:not(:last-child):after {
            border-left-style: solid;
        }

        .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-inline-items .elementor-icon-list-item:not(:last-child):after {
            border-left-width: 1px;
        }

        .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-icon i {
            color: #0D9C00;
            transition: color 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-icon svg {
            fill: #0D9C00;
            transition: fill 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-739ec1f {
            --e-icon-list-icon-size: 14px;
            --icon-vertical-offset: 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-text {
            color: #000000;
            transition: color 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-432a8ef .elementor-button {
            font-size: 30px;
            font-weight: 700;
            text-shadow: 0px 0px 0px rgba(0, 0, 0, 0.3);
            fill: #000000;
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-432a8ef>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-fac031b {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --gap: 0px 0px;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-d29349f {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-73ad5d8 {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-73ad5d8 .elementor-heading-title {
            color: #000000;
            font-size: 40px;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-25696 .elementor-element.elementor-element-73ad5d8>.elementor-widget-container {
            margin: 50px 0px 30px 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-302d5f2 {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-302d5f2 .elementor-heading-title {
            color: #000000;
            font-weight: 500;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-25696 .elementor-element.elementor-element-7707880>.elementor-widget-container {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .elementor-25696 .elementor-element.elementor-element-e9f11fd {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-a41e263>.elementor-widget-container {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .elementor-25696 .elementor-element.elementor-element-9041395 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-bb68df1>.elementor-widget-container {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .elementor-25696 .elementor-element.elementor-element-93f51df {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --gap: 0px 0px;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-bd140eb {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-d8ebdbe>.elementor-widget-container {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .elementor-25696 .elementor-element.elementor-element-feb07f3 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-84250d4>.elementor-widget-container {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .elementor-25696 .elementor-element.elementor-element-db8bf05 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-93657ac>.elementor-widget-container {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .elementor-25696 .elementor-element.elementor-element-3b4d46e {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-e9a6288>.elementor-widget-container {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .elementor-25696 .elementor-element.elementor-element-86a8fd3 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-a2baade .elementor-button {
            font-size: 30px;
            font-weight: 700;
            text-shadow: 0px 0px 0px rgba(0, 0, 0, 0.3);
            fill: #000000;
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-a2baade>.elementor-widget-container {
            margin: 20px 0px 20px 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-210a937 {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-210a937 .elementor-heading-title {
            color: #000000;
            font-size: 40px;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-25696 .elementor-element.elementor-element-210a937>.elementor-widget-container {
            margin: 50px 0px 30px 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-13a2db6 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --gap: 0px 0px;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-83b6828 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --justify-content: space-around;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-2ce2901 {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-2ce2901 .elementor-heading-title {
            color: #000000;
            font-size: 20px;
        }

        .elementor-25696 .elementor-element.elementor-element-2ce2901>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 20px 20px 20px 20px;
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-7e59bfd {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-34cb7c4 .elementor-wrapper {
            --video-aspect-ratio: 1.77777;
        }

        .elementor-25696 .elementor-element.elementor-element-f1a657b {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-9fe228b {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-9fe228b .elementor-heading-title {
            color: #000000;
            font-size: 40px;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-25696 .elementor-element.elementor-element-9fe228b>.elementor-widget-container {
            margin: 50px 0px 30px 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-d56c18a {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-3516a67 {
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-3516a67>.elementor-widget-container {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .elementor-25696 .elementor-element.elementor-element-e17936d {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-a8fd165 {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-a8fd165 .elementor-heading-title {
            color: #000000;
            font-size: 40px;
            font-weight: 600;
            -webkit-text-stroke-color: #000;
            stroke: #000;
        }

        .elementor-25696 .elementor-element.elementor-element-a8fd165>.elementor-widget-container {
            margin: 50px 0px 30px 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-aae0621 {
            --display: flex;
            --flex-direction: row;
            --container-widget-width: initial;
            --container-widget-height: 100%;
            --container-widget-flex-grow: 1;
            --container-widget-align-self: stretch;
            --gap: 0px 0px;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-4f0c782 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-23ebf0a .elementor-testimonial-wrapper {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-23ebf0a .elementor-testimonial-content {
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-ef7bd59 .elementor-testimonial-wrapper {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-ef7bd59 .elementor-testimonial-content {
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-68ea6e5 .elementor-testimonial-wrapper {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-68ea6e5 .elementor-testimonial-content {
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-230c28f .elementor-testimonial-wrapper {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-230c28f .elementor-testimonial-content {
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-230c28f .elementor-testimonial-name {
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-230c28f .elementor-testimonial-job {
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-e417ae0 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-88653f5 .elementor-testimonial-wrapper {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-88653f5 .elementor-testimonial-content {
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-d7c04af {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-d7c04af.e-con {
            --flex-grow: 0;
            --flex-shrink: 0;
        }

        .elementor-25696 .elementor-element.elementor-element-631e5b8 .elementor-testimonial-wrapper {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-631e5b8 .elementor-testimonial-content {
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-631e5b8.elementor-element {
            --flex-grow: 0;
            --flex-shrink: 0;
        }

        .elementor-25696 .elementor-element.elementor-element-e3ec730 {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-77ea245 .elementor-testimonial-wrapper {
            text-align: center;
        }

        .elementor-25696 .elementor-element.elementor-element-77ea245 .elementor-testimonial-content {
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-203661f {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-0bca0a6 .elementor-button {
            font-size: 30px;
            font-weight: 700;
            text-shadow: 0px 0px 0px rgba(0, 0, 0, 0.3);
            fill: #000000;
            color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-0bca0a6>.elementor-widget-container {
            margin: 20px 0px 20px 0px;
        }

        .elementor-25696 .elementor-element.elementor-element-a4a2bac {
            --display: flex;
            --flex-direction: column;
            --container-widget-width: 100%;
            --container-widget-height: initial;
            --container-widget-flex-grow: 0;
            --container-widget-align-self: initial;
            --background-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-a4a2bac:not(.elementor-motion-effects-element-type-background),
        .elementor-25696 .elementor-element.elementor-element-a4a2bac>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #000000;
        }

        .elementor-25696 .elementor-element.elementor-element-a4a2bac,
        .elementor-25696 .elementor-element.elementor-element-a4a2bac::before {
            --border-transition: 0.3s;
        }

        .elementor-25696 .elementor-element.elementor-element-a8e0fe8 {
            color: #FFFFFF;
        }

        @media(min-width:768px) {
            .elementor-25696 .elementor-element.elementor-element-a1f96d6 {
                --width: 50%;
            }

            .elementor-25696 .elementor-element.elementor-element-d29349f {
                --width: 25%;
            }

            .elementor-25696 .elementor-element.elementor-element-e9f11fd {
                --width: 25%;
            }

            .elementor-25696 .elementor-element.elementor-element-9041395 {
                --width: 25%;
            }

            .elementor-25696 .elementor-element.elementor-element-bd140eb {
                --width: 25%;
            }

            .elementor-25696 .elementor-element.elementor-element-feb07f3 {
                --width: 25%;
            }

            .elementor-25696 .elementor-element.elementor-element-db8bf05 {
                --width: 25%;
            }

            .elementor-25696 .elementor-element.elementor-element-3b4d46e {
                --width: 25%;
            }

            .elementor-25696 .elementor-element.elementor-element-83b6828 {
                --width: 50%;
            }

            .elementor-25696 .elementor-element.elementor-element-7e59bfd {
                --width: 50%;
            }

            .elementor-25696 .elementor-element.elementor-element-4f0c782 {
                --width: 25%;
            }

            .elementor-25696 .elementor-element.elementor-element-e417ae0 {
                --width: 25%;
            }

            .elementor-25696 .elementor-element.elementor-element-d7c04af {
                --width: 25%;
            }

            .elementor-25696 .elementor-element.elementor-element-e3ec730 {
                --width: 25%;
            }
        }

        @media(max-width:767px) {
            .elementor-25696 .elementor-element.elementor-element-6d3f0b1 .elementor-heading-title {
                font-size: 14px;
            }

            .elementor-25696 .elementor-element.elementor-element-6d3f0b1>.elementor-widget-container {
                padding: 10px 5px 10px 5px;
            }

            .elementor-25696 .elementor-element.elementor-element-9da3423 {
                --margin-block-start: 0px;
                --margin-block-end: 0px;
                --margin-inline-start: 0px;
                --margin-inline-end: 0px;
                --padding-block-start: 0px;
                --padding-block-end: 0px;
                --padding-inline-start: 0px;
                --padding-inline-end: 0px;
            }

            .elementor-25696 .elementor-element.elementor-element-bc64291 .elementor-heading-title {
                font-size: 16px;
            }

            .elementor-25696 .elementor-element.elementor-element-bc64291>.elementor-widget-container {
                padding: 0px 5px 0px 5px;
            }

            .elementor-25696 .elementor-element.elementor-element-dad91e2 .elementor-heading-title {
                font-size: 16px;
            }

            .elementor-25696 .elementor-element.elementor-element-dad91e2>.elementor-widget-container {
                padding: 20px 5px 20px 5px;
            }

            .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(10px/2);
            }

            .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(10px/2);
            }

            .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                margin-right: calc(10px/2);
                margin-left: calc(10px/2);
            }

            .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-items.elementor-inline-items {
                margin-right: calc(-10px/2);
                margin-left: calc(-10px/2);
            }

            body.rtl .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                left: calc(-10px/2);
            }

            body:not(.rtl) .elementor-25696 .elementor-element.elementor-element-8d70262 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                right: calc(-10px/2);
            }

            .elementor-25696 .elementor-element.elementor-element-fcce2d0 .elementor-button {
                font-size: 20px;
            }

            .elementor-25696 .elementor-element.elementor-element-b3efa07 img {
                width: 100%;
            }

            .elementor-25696 .elementor-element.elementor-element-3959fe1 {
                --e-rating-justify-content: center;
                --e-rating-icon-font-size: 27px;
            }

            .elementor-25696 .elementor-element.elementor-element-934fabe {
                text-align: center;
                font-size: 18px;
            }

            .elementor-25696 .elementor-element.elementor-element-934fabe>.elementor-widget-container {
                padding: 5px 5px 5px 5px;
            }

            .elementor-25696 .elementor-element.elementor-element-3ea31b1 .elementor-heading-title {
                font-size: 20px;
            }

            .elementor-25696 .elementor-element.elementor-element-59559f3 .elementor-heading-title {
                font-size: 28px;
            }

            .elementor-25696 .elementor-element.elementor-element-59559f3>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
                padding-bottom: calc(20px/2);
            }

            .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
                margin-top: calc(20px/2);
            }

            .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                margin-right: calc(20px/2);
                margin-left: calc(20px/2);
            }

            .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-items.elementor-inline-items {
                margin-right: calc(-20px/2);
                margin-left: calc(-20px/2);
            }

            body.rtl .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                left: calc(-20px/2);
            }

            body:not(.rtl) .elementor-25696 .elementor-element.elementor-element-739ec1f .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                right: calc(-20px/2);
            }

            .elementor-25696 .elementor-element.elementor-element-432a8ef .elementor-button {
                font-size: 20px;
            }

            .elementor-25696 .elementor-element.elementor-element-73ad5d8 .elementor-heading-title {
                font-size: 28px;
            }

            .elementor-25696 .elementor-element.elementor-element-73ad5d8>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-25696 .elementor-element.elementor-element-302d5f2 .elementor-heading-title {
                font-size: 16px;
            }

            .elementor-25696 .elementor-element.elementor-element-a2baade .elementor-button {
                font-size: 20px;
            }

            .elementor-25696 .elementor-element.elementor-element-a2baade>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-25696 .elementor-element.elementor-element-210a937 .elementor-heading-title {
                font-size: 28px;
            }

            .elementor-25696 .elementor-element.elementor-element-210a937>.elementor-widget-container {
                margin: 20px 0px 0px 0px;
            }

            .elementor-25696 .elementor-element.elementor-element-2ce2901 {
                text-align: center;
            }

            .elementor-25696 .elementor-element.elementor-element-2ce2901 .elementor-heading-title {
                font-size: 16px;
            }

            .elementor-25696 .elementor-element.elementor-element-2ce2901>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }

            .elementor-25696 .elementor-element.elementor-element-9fe228b .elementor-heading-title {
                font-size: 28px;
            }

            .elementor-25696 .elementor-element.elementor-element-9fe228b>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-25696 .elementor-element.elementor-element-3516a67 {
                text-align: center;
            }

            .elementor-25696 .elementor-element.elementor-element-3516a67>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
                padding: 20px 10px 20px 10px;
            }

            .elementor-25696 .elementor-element.elementor-element-a8fd165 .elementor-heading-title {
                font-size: 28px;
            }

            .elementor-25696 .elementor-element.elementor-element-a8fd165>.elementor-widget-container {
                margin: 10px 0px 0px 0px;
            }

            .elementor-25696 .elementor-element.elementor-element-23ebf0a .elementor-testimonial-content {
                font-size: 16px;
            }

            .elementor-25696 .elementor-element.elementor-element-ef7bd59 .elementor-testimonial-content {
                font-size: 16px;
            }

            .elementor-25696 .elementor-element.elementor-element-68ea6e5 .elementor-testimonial-content {
                font-size: 16px;
            }

            .elementor-25696 .elementor-element.elementor-element-230c28f .elementor-testimonial-content {
                font-size: 16px;
            }

            .elementor-25696 .elementor-element.elementor-element-88653f5 .elementor-testimonial-content {
                font-size: 16px;
            }

            .elementor-25696 .elementor-element.elementor-element-d7c04af {
                --width: 303.2px;
            }

            .elementor-25696 .elementor-element.elementor-element-631e5b8 .elementor-testimonial-content {
                font-size: 16px;
            }

            .elementor-25696 .elementor-element.elementor-element-631e5b8 {
                width: var(--container-widget-width, 304.2px);
                max-width: 304.2px;
                --container-widget-width: 304.2px;
                --container-widget-flex-grow: 0;
            }

            .elementor-25696 .elementor-element.elementor-element-77ea245 .elementor-testimonial-content {
                font-size: 16px;
            }

            .elementor-25696 .elementor-element.elementor-element-0bca0a6 .elementor-button {
                font-size: 20px;
            }

            .elementor-25696 .elementor-element.elementor-element-a8e0fe8 {
                font-size: 11px;
            }
        }

        .btn-buy {
            padding: 15px 30px;
            font-size: 18px;
            background-color: #2a612c;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .btn-buy:hover {
            background-color: #45a049;
        }

        .container-curriculum {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
            width: 94%;
            margin: auto;
            margin-top: 11px;
            margin-bottom: 28px;
        }

        .container-curriculum h1 {
            color: #333;
            font-size: 1.7em;
        }

        .curriculum-list {
            margin: 0;
        }

        .curriculum-list-curriculum {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .curriculum-list li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            list-style: none;
        }

        .curriculum-list li:last-child {
            border-bottom: none;
        }
    </style>
    <link rel='stylesheet' id='swiper-css'
        href='https://busybrainy.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5'
        media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href='https://busybrainy.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.20.3'
        media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href='https://busybrainy.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.20.3'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.4'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><!--[if IE]>
<script src="https://busybrainy.com/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=4.6.9" id="astra-flexibility-js"></script>
<script id="astra-flexibility-js-after">
flexibility(document.documentElement);
</script>
<![endif]-->
    <script src="https://busybrainy.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://busybrainy.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script id="salert-main-js-js-extra">
    </script>
    <script src="https://busybrainy.com/wp-content/plugins/salert//assets/frontend/js/main.js?ver=1.2.5"
        id="salert-main-js-js"></script>
    <script
        src="https://busybrainy.com/wp-content/plugins/pixelyoursite/dist/scripts/jquery.bind-first-0.2.3.min.js?ver=45181196ca1e88cc943122dfdde4d125"
        id="jquery-bind-first-js"></script>
    <script src="https://busybrainy.com/wp-content/plugins/pixelyoursite/dist/scripts/js.cookie-2.1.3.min.js?ver=2.1.3"
        id="js-cookie-pys-js"></script>
    <script src="https://busybrainy.com/wp-content/plugins/pixelyoursite/dist/scripts/public.js?ver=9.5.4"
        id="pys-js"></script>
    <script
        src="https://busybrainy.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.20.3"
        id="font-awesome-4-shim-js"></script>
    <link rel="https://api.w.org/" href="https://busybrainy.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://busybrainy.com/wp-json/wp/v2/pages/25696" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://busybrainy.com/xmlrpc.php?rsd" />
    <link rel="canonical" href="https://busybrainy.com/" />
    <link rel="alternate" type="application/json+oembed"
        href="https://busybrainy.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbusybrainy.com%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://busybrainy.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fbusybrainy.com%2F&#038;format=xml" />

    <style id="wp-custom-css">
        /* WPForms fixes */
        /* Initial field looks */
        .wpforms-container input[type=date],
        .wpforms-container input[type=datetime],
        .wpforms-container input[type=datetime-local],
        .wpforms-container input[type=email],
        .wpforms-container input[type=month],
        .wpforms-container input[type=number],
        .wpforms-container input[type=password],
        .wpforms-container input[type=range],
        .wpforms-container input[type=search],
        .wpforms-container input[type=tel],
        .wpforms-container input[type=text],
        .wpforms-container input[type=time],
        .wpforms-container input[type=url],
        .wpforms-container input[type=week],
        .wpforms-container select,
        .wpforms-container textarea {
            background: #fff;
            border-width: 0 0 1px 0;
            color: var(--ast-global-color-2);
            opacity: 0.5;
        }

        /* On focus */
        .wpforms-container input:focus,
        .wpforms-container select:focus,
        .wpforms-container textarea:focus {
            outline: none;
            opacity: 1;
            border-color: var(--ast-global-color-0);
        }

        /* Don't allow resizing the Message box */
        .wpforms-container textarea {
            resize: none;
        }

        /* Message box fixed height */
        .wpforms-container .wpforms-field-textarea textarea.wpforms-field-medium {
            height: 136px;
        }

        /* Button size & font size */
        .wpforms-container button {
            padding: 15px 34px;
            font-size: 15px;
        }

        /* WPForms done */
        /* Footer 2 big columns on sides and 1 small one in the middle */
        .ast-builder-grid-row-3-equal .ast-builder-grid-row {
            grid-template-columns: 3fr 1fr 3fr;
        }
    </style>
</head>

<body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope'
    class="home page-template-default page page-id-25696 wp-custom-logo ast-header-break-point ast-page-builder-template ast-no-sidebar astra-4.6.9 ast-single-post ast-replace-site-logo-transparent ast-inherit-site-logo-transparent ast-hfb-header elementor-default elementor-kit-25673 elementor-page elementor-page-25696">

    <a class="skip-link screen-reader-text" href="#content" role="link" title="Skip to content">
        Skip to content</a>

    <div class="hfeed site" id="page">
        <header
            class="site-header header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-hide-custom-menu-mobile ast-builder-menu-toggle-icon ast-mobile-header-inline"
            id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">
            <div id="ast-desktop-header" data-toggle-type="dropdown">
            </div> <!-- Main Header Bar Wrap -->
            <div id="ast-mobile-header" class="ast-mobile-header-wrap " data-type="dropdown">
            </div>
        </header><!-- #masthead -->
        <div id="content" class="site-content">
            <div class="ast-container">


                <div id="primary" class="content-area primary">


                    <main id="main" class="site-main">
                        <article class="post-25696 page type-page status-publish ast-article-single" id="post-25696"
                            itemtype="https://schema.org/CreativeWork" itemscope="itemscope">


                            <header class="entry-header ast-no-title ast-header-without-markup">
                            </header> <!-- .entry-header -->


                            <div class="entry-content clear" itemprop="text">


                                <div data-elementor-type="wp-page" data-elementor-id="25696"
                                    class="elementor elementor-25696">
                                    <div class="maxwidth">
                                        <div class="elementor-element elementor-element-a3baca2 e-flex e-con-boxed e-con e-parent"
                                            data-id="a3baca2" data-element_type="container" data-core-v316-plus="true">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-6d3f0b1 elementor-widget elementor-widget-heading"
                                                    data-id="6d3f0b1" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <style>
                                                            /*! elementor - v3.20.0 - 26-03-2024 */
                                                            .elementor-heading-title {
                                                                padding: 0;
                                                                margin: 0;
                                                                line-height: 1
                                                            }
    
                                                            .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                                color: inherit;
                                                                font-size: inherit;
                                                                line-height: inherit
                                                            }
    
                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                                font-size: 15px
                                                            }
    
                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                                font-size: 19px
                                                            }
    
                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                                font-size: 29px
                                                            }
    
                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                                font-size: 39px
                                                            }
    
                                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                                font-size: 59px
                                                            }
                                                        </style>
                                                        <h2 class="elementor-heading-title elementor-size-default">Limited
                                                            Period Offer</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b0c218a e-flex e-con-boxed e-con e-parent"
                                            data-id="b0c218a" data-element_type="container" data-core-v316-plus="true">
                                            <div class="e-con-inner">
                                                <div class="elementor-element elementor-element-9da3423 e-con-full e-flex e-con e-child"
                                                    data-id="9da3423" data-element_type="container">
                                                    <div class="elementor-element elementor-element-bc64291 elementor-widget elementor-widget-heading"
                                                        data-id="bc64291" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h1 class="elementor-heading-title elementor-size-default">As a
                                                                Parent, You Want to Give Your Child the Best Start in Life.
                                                                You Want Them to Grow Up Smart, Confident , and Curious
                                                                About The World Around Them.</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div style=" padding: 0px 25px; margin-top: 30px; "
                                        class="maxwidth elementor-element elementor-element-8d70262 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="8d70262" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <link rel="stylesheet" href="content/widget-icon-list.min.css">
                                            <ul class="elementor-icon-list-items">
                                                 <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true"
                                                            class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="elementor-icon-list-text">9+ Months Preschool Curriculum</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true"
                                                            class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="elementor-icon-list-text">4000+ 
                                                        worksheet. A Smarter Way to Engage Your
                                                        Kids.</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true"
                                                            class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="elementor-icon-list-text">Screen Free
                                                        Activity that will help your child develop the
                                                        essential skills.</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true"
                                                            class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="elementor-icon-list-text">2+ Years Research
                                                        to create such a powerful engaging and quality
                                                        learning worksheets.</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true"
                                                            class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="elementor-icon-list-text">Instant &
                                                        Lifetime Access to Print Anytime Anywhere</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <svg aria-hidden="true"
                                                            class="e-font-icon-svg e-fas-check-circle"
                                                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                            </path>
                                                        </svg> </span>
                                                    <span class="elementor-icon-list-text">20+ Essential
                                                        Skills with precise tracking at best price for
                                                        limited period.</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="elementor-element elementor-element-b0c218a e-flex e-con-boxed e-con e-parent"
                                        data-id="b0c218a" data-element_type="container" data-core-v316-plus="true">
                                        <div class="row justify-content-center mb-3" style="text-align:center">
                                            <h4>Offer Expires in</h4>
                                        </div>
                                        <div class="row justify-content-center mb-5" style="margin:auto">
                                            <div class="sale-counter">
                                                <div id="flipdown" class="flipdown"></div>
                                            </div>

                                        </div>
                                    </div>

                                    <?php include "price.php" ?>
                                    
                                    <div class="brands">
                                        <h2>As Seen In</h2>
                                        <img src="images/brands.png" />
                                    </div>


                                    <div style=" background-color: #f0f0f0; padding: 5px 0px; ">
                                        <div class="container-curriculum">
                                            <h1>Kindergarten Curriculum</h1>
                                            <ul class="curriculum-list">
                                                <li>✍️ Handwriting</li>
                                                <li>📚 Reading</li>
                                                <li>🌦️ Weather</li>
                                                <li>📅 Days of the Week</li>
                                                <li>⏰ Telling Time</li>
                                                <li>🔤 Sight words</li>
                                                <li>📏 Measurements</li>
                                                <li>➕ Addition</li>
                                                <li>➖ Subtraction</li>
                                                <li>🔄 Patterns and Sequencing</li>
                                                <li>👃👂👁️👅✋ Their 5 Senses</li>
                                                <li>🦋 Life Cycles</li>
                                                <li>🧠 Critical Thinking</li>
                                                <li>🍎 Healthy Choices</li>
                                                <li>🎨 Art</li>
                                                <li>...and MORE!</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <?php include_once "price.php" ?>




                                    <div style="padding: 25px 19px 13px;"
                                        class="maxwidth elementor-element elementor-element-f00122f elementor-widget elementor-widget-image"
                                        data-id="f00122f" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.20.0 - 26-03-2024 */
                                                .elementor-widget-image {
                                                    text-align: center
                                                }

                                                .elementor-widget-image a {
                                                    display: inline-block
                                                }

                                                .elementor-widget-image a img[src$=".svg"] {
                                                    width: 48px
                                                }

                                                .elementor-widget-image img {
                                                    vertical-align: middle;
                                                    display: inline-block
                                                }
                                            </style> <img fetchpriority="high" decoding="async" width="794" height="794"
                                                src="images/il_794xN.5449451925_cmdn-1.webp"
                                                class="attachment-large size-large wp-image-24" alt="" />
                                        </div>
                                    </div>
                                    <div class="maxwidth elementor-element elementor-element-892bed7 elementor-widget elementor-widget-video"
                                        data-id="892bed7" data-element_type="widget"
                                        data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                                        data-widget_type="video.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.20.0 - 26-03-2024 */
                                                .elementor-widget-video .elementor-widget-container {
                                                    overflow: hidden;
                                                    transform: translateZ(0)
                                                }

                                                .elementor-widget-video .elementor-wrapper {
                                                    aspect-ratio: var(--video-aspect-ratio)
                                                }

                                                .elementor-widget-video .elementor-wrapper iframe,
                                                .elementor-widget-video .elementor-wrapper video {
                                                    height: 100%;
                                                    width: 100%;
                                                    display: flex;
                                                    border: none;
                                                    background-color: #000
                                                }

                                                @supports not (aspect-ratio:1/1) {
                                                    .elementor-widget-video .elementor-wrapper {
                                                        position: relative;
                                                        overflow: hidden;
                                                        height: 0;
                                                        padding-bottom: calc(100% / var(--video-aspect-ratio))
                                                    }

                                                    .elementor-widget-video .elementor-wrapper iframe,
                                                    .elementor-widget-video .elementor-wrapper video {
                                                        position: absolute;
                                                        top: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        left: 0
                                                    }
                                                }

                                                .elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay {
                                                    position: absolute;
                                                    top: 0;
                                                    right: 0;
                                                    bottom: 0;
                                                    left: 0;
                                                    background-size: cover;
                                                    background-position: 50%
                                                }

                                                .elementor-widget-video .elementor-custom-embed-image-overlay {
                                                    cursor: pointer;
                                                    text-align: center
                                                }

                                                .elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i {
                                                    opacity: 1
                                                }

                                                .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                                    display: block;
                                                    width: 100%;
                                                    aspect-ratio: var(--video-aspect-ratio);
                                                    -o-object-fit: cover;
                                                    object-fit: cover;
                                                    -o-object-position: center center;
                                                    object-position: center center
                                                }

                                                @supports not (aspect-ratio:1/1) {
                                                    .elementor-widget-video .elementor-custom-embed-image-overlay {
                                                        position: relative;
                                                        overflow: hidden;
                                                        height: 0;
                                                        padding-bottom: calc(100% / var(--video-aspect-ratio))
                                                    }

                                                    .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                                        position: absolute;
                                                        top: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        left: 0
                                                    }
                                                }

                                                .elementor-widget-video .e-hosted-video .elementor-video {
                                                    -o-object-fit: cover;
                                                    object-fit: cover
                                                }

                                                .e-con-inner>.elementor-widget-video,
                                                .e-con>.elementor-widget-video {
                                                    width: var(--container-widget-width);
                                                    --flex-grow: var(--container-widget-flex-grow)
                                                }
                                            </style>
                                            <div class="e-hosted-video elementor-wrapper elementor-open-inline">
                                                <video class="elementor-video"
                                                    src="images/Coloring_Page_clip_1_zwr0mu.mp4" autoplcay=""
                                                    controls="" playsinline="" controlsList="nodownload"></video>
                                            </div>
                                        </div>
                                    </div>
                                        <?php include "price.php" ?>
<br>
                                    <div  style="background:#f0f0f0;    padding: 40px 0px;" class="elementor-element elementor-element-fac031b e-flex e-con-boxed e-con e-parent multi-images"
                                        data-id="fac031b" data-element_type="container" data-core-v316-plus="true" >
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-d29349f e-con-full e-flex e-con e-child"
                                                data-id="d29349f" data-element_type="container">
                                                <div class="elementor-element elementor-element-73ad5d8 elementor-widget elementor-widget-heading"
                                                    data-id="73ad5d8" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container"> 
                                                        <h1 class="elementor-heading-title elementor-size-default">
                                                            Make
                                                            Differentiation Easy!</h1>
                                                        <span>
                                                            Get Printable and digital activities that are challenging, engaging, educating and low-prep.

                                                        </span>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>
                                            <div class="elementor-element elementor-element-e9f11fd e-con-full e-flex e-con e-child"
                                                data-id="e9f11fd" data-element_type="container">
                                                <div class="elementor-element elementor-element-a41e263 elementor-widget elementor-widget-image"
                                                    data-id="a41e263" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="794" height="634"
                                                            src="images/il_794xN.5449453593_qixv.webp"
                                                            class="attachment-large size-large wp-image-22" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        
                                           
                                        </div>
                                         <div class="e-con-inner">
                                             <div class="elementor-element elementor-element-9041395 e-con-full e-flex e-con e-child"
                                                data-id="90413953" data-element_type="container">
                                             <div class="elementor-element elementor-element-7707880 elementor-widget elementor-widget-image"
                                                    data-id="7707880" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="794" height="634"
                                                            src="images/il_794xN.5449453589_sl40.webp"
                                                            class="attachment-large size-large wp-image-21" alt="" />
                                                    </div>
                                                </div>
                                                </div>
                                        
                                       
                                            <div class="elementor-element elementor-element-bd140eb e-con-full e-flex e-con e-child"
                                                data-id="bd140eb" data-element_type="container">
                                                <div class="elementor-element elementor-element-d8ebdbe elementor-widget elementor-widget-image"
                                                    data-id="d8ebdbe" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="794" height="634"
                                                            src="images/il_794xN.5401305154_lmqz.webp"
                                                            class="attachment-large size-large wp-image-19" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-feb07f3 e-con-full e-flex e-con e-child"
                                                data-id="feb07f3" data-element_type="container">
                                                <div class="elementor-element elementor-element-84250d4 elementor-widget elementor-widget-image"
                                                    data-id="84250d4" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="794" height="634"
                                                            src="images/il_794xN.5401305152_h89j.webp"
                                                            class="attachment-large size-large wp-image-18" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-db8bf05 e-con-full e-flex e-con e-child"
                                                data-id="db8bf05" data-element_type="container">
                                                <div class="elementor-element elementor-element-93657ac elementor-widget elementor-widget-image"
                                                    data-id="93657ac" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="794" height="634"
                                                            src="images/il_794xN.5401305148_f1ry.webp"
                                                            class="attachment-large size-large wp-image-17" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3b4d46e e-con-full e-flex e-con e-child"
                                                data-id="3b4d46e" data-element_type="container">
                                                <div class="elementor-element elementor-element-e9a6288 elementor-widget elementor-widget-image"
                                                    data-id="e9a6288" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="794" height="634"
                                                            src="images/il_794xN.5401305138_3wyd.webp"
                                                            class="attachment-large size-large wp-image-16" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="elementor-element elementor-element-9041395 e-con-full e-flex e-con e-child"
                                                data-id="9041395" data-element_type="container">
                                                <div class="elementor-element elementor-element-bb68df1 elementor-widget elementor-widget-image"
                                                    data-id="bb68df1" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="794" height="634"
                                                            src="images/il_794xN.5401305156_9pem.webp"
                                                            class="attachment-large size-large wp-image-20" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <?php include "price.php" ?>


                                  
                                    <div style="display:none"
                                        class="elementor-element elementor-element-b3efa07 elementor-widget elementor-widget-image"
                                        data-id="b3efa07" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="450" height="210"
                                                src="images/Untitled-design-30.webp"
                                                class="attachment-large size-large wp-image-25914" alt="" />
                                        </div>
                                    </div>


                                    <div class="elementor-element elementor-element-cbf7162 e-flex e-con-boxed e-con e-parent"
                                        data-id="cbf7162" data-element_type="container" data-core-v316-plus="true">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-3959fe1 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-rating"
                                                data-id="3959fe1" data-element_type="widget"
                                                data-widget_type="rating.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.20.0 - 26-03-2024 */
                                                        .elementor-widget-rating {
                                                            --e-rating-gap: 0px;
                                                            --e-rating-icon-font-size: 16px;
                                                            --e-rating-icon-color: #ccd6df;
                                                            --e-rating-icon-marked-color: #f0ad4e;
                                                            --e-rating-icon-marked-width: 100%;
                                                            --e-rating-justify-content: flex-start
                                                        }

                                                        .elementor-widget-rating .e-rating {
                                                            display: flex;
                                                            justify-content: var(--e-rating-justify-content)
                                                        }

                                                        .elementor-widget-rating .e-rating-wrapper {
                                                            display: flex;
                                                            justify-content: inherit;
                                                            flex-direction: row;
                                                            flex-wrap: wrap;
                                                            width: -moz-fit-content;
                                                            width: fit-content;
                                                            margin-block-end: calc(0px - var(--e-rating-gap));
                                                            margin-inline-end: calc(0px - var(--e-rating-gap))
                                                        }

                                                        .elementor-widget-rating .e-rating .e-icon {
                                                            position: relative;
                                                            margin-block-end: var(--e-rating-gap);
                                                            margin-inline-end: var(--e-rating-gap)
                                                        }

                                                        .elementor-widget-rating .e-rating .e-icon-wrapper.e-icon-marked {
                                                            --e-rating-icon-color: var(--e-rating-icon-marked-color);
                                                            width: var(--e-rating-icon-marked-width);
                                                            position: absolute;
                                                            z-index: 1;
                                                            height: 100%;
                                                            left: 0;
                                                            top: 0;
                                                            overflow: hidden
                                                        }

                                                        .elementor-widget-rating .e-rating .e-icon-wrapper :is(i, svg) {
                                                            display: flex;
                                                            flex-shrink: 0
                                                        }

                                                        .elementor-widget-rating .e-rating .e-icon-wrapper i {
                                                            font-size: var(--e-rating-icon-font-size);
                                                            color: var(--e-rating-icon-color)
                                                        }

                                                        .elementor-widget-rating .e-rating .e-icon-wrapper svg {
                                                            width: auto;
                                                            height: var(--e-rating-icon-font-size);
                                                            fill: var(--e-rating-icon-color)
                                                        }
                                                    </style>
                                                    <div class="e-rating" itemtype="https://schema.org/Rating"
                                                        itemscope="" itemprop="reviewRating">
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="bestRating" content="5">
                                                        <div class="e-rating-wrapper" itemprop="ratingValue"
                                                            content="4.5" role="img" aria-label="Rated 4.5 out of 5">
                                                            <div class="e-icon">
                                                                <div class="e-icon-wrapper e-icon-marked">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-eicon-star"
                                                                        viewBox="0 0 1000 1000"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="e-icon-wrapper e-icon-unmarked">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-eicon-star"
                                                                        viewBox="0 0 1000 1000"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="e-icon">
                                                                <div class="e-icon-wrapper e-icon-marked">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-eicon-star"
                                                                        viewBox="0 0 1000 1000"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="e-icon-wrapper e-icon-unmarked">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-eicon-star"
                                                                        viewBox="0 0 1000 1000"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="e-icon">
                                                                <div class="e-icon-wrapper e-icon-marked">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-eicon-star"
                                                                        viewBox="0 0 1000 1000"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="e-icon-wrapper e-icon-unmarked">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-eicon-star"
                                                                        viewBox="0 0 1000 1000"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="e-icon">
                                                                <div class="e-icon-wrapper e-icon-marked">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-eicon-star"
                                                                        viewBox="0 0 1000 1000"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="e-icon-wrapper e-icon-unmarked">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-eicon-star"
                                                                        viewBox="0 0 1000 1000"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="e-icon">
                                                                <div class="e-icon-wrapper e-icon-marked"
                                                                    style="--e-rating-icon-marked-width: 50%;">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-eicon-star"
                                                                        viewBox="0 0 1000 1000"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="e-icon-wrapper e-icon-unmarked">
                                                                    <svg aria-hidden="true"
                                                                        class="e-font-icon-svg e-eicon-star"
                                                                        viewBox="0 0 1000 1000"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M450 75L338 312 88 350C46 354 25 417 58 450L238 633 196 896C188 942 238 975 275 954L500 837 725 954C767 975 813 942 804 896L763 633 942 450C975 417 954 358 913 350L663 312 550 75C529 33 471 33 450 75Z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-934fabe elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-text-editor"
                                                data-id="934fabe" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.20.0 - 26-03-2024 */
                                                        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                            background-color: #69727d;
                                                            color: #fff
                                                        }

                                                        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                            color: #69727d;
                                                            border: 3px solid;
                                                            background-color: transparent
                                                        }

                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                            margin-top: 8px
                                                        }

                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                            width: 1em;
                                                            height: 1em
                                                        }

                                                        .elementor-widget-text-editor .elementor-drop-cap {
                                                            float: left;
                                                            text-align: center;
                                                            line-height: 1;
                                                            font-size: 50px
                                                        }

                                                        .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                            display: inline-block
                                                        }
                                                    </style>
                                                    <p><a href="#reviews"><strong>(5023 Reviews)</strong></a></p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3ea31b1 elementor-widget elementor-widget-heading"
                                                data-id="3ea31b1" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">Grand
                                                        Opening Special: 75% Off – Celebrate Our New Store Launch!</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 21px;    padding-bottom: -40px;" class="lgbk elementor-element elementor-element-ffa8281 e-flex e-con-boxed e-con e-parent"
                                        data-id="ffa8281" data-element_type="container" data-core-v316-plus="true">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-964f194 e-flex e-con-boxed e-con e-child"
                                                data-id="964f194" data-element_type="container">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-59559f3 elementor-widget elementor-widget-heading"
                                                        data-id="59559f3" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h1 class="elementor-heading-title elementor-size-default">
                                                                WHAT YOU WILL GET</h1>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-739ec1f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                        data-id="739ec1f" data-element_type="widget"
                                                        data-widget_type="icon-list.default">
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-check-circle"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span class="elementor-icon-list-text">1200 Pages
                                                                        Worksheet for 20 learning activities</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-check-circle"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span class="elementor-icon-list-text">950+ Pages
                                                                        Worksheet for English Alphabet</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-check-circle"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span class="elementor-icon-list-text">300+ Number
                                                                        and Counting Worksheet</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-check-circle"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span class="elementor-icon-list-text">500+ Cut and
                                                                        Glue Worksheet</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-check-circle"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span class="elementor-icon-list-text">500+ Coloring
                                                                        and Drawing Worksheet</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <svg aria-hidden="true"
                                                                            class="e-font-icon-svg e-fas-check-circle"
                                                                            viewBox="0 0 512 512"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                                                            </path>
                                                                        </svg> </span>
                                                                    <span class="elementor-icon-list-text">300+ Word
                                                                        Search Worksheet</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="elementor-element elementor-element-13a2db6 e-flex e-con-boxed e-con e-parent"
                                        data-id="13a2db6" data-element_type="container" data-core-v316-plus="true">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-83b6828 e-con-full e-flex e-con e-child"
                                                data-id="83b6828" data-element_type="container">
                                                <div class="elementor-element elementor-element-2ce2901 elementor-widget elementor-widget-heading"
                                                    data-id="2ce2901" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">
                                                            Preschool Activity Sheets are a delightful and educational
                                                            resource designed to engage and inspire young learners in
                                                            the crucial early years of their educational journey. These
                                                            carefully crafted activity sheets provide a wide range of
                                                            interactive, age-appropriate exercises and tasks that
                                                            promote holistic development in children aged 2 to 6 years.
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7e59bfd e-con-full e-flex e-con e-child"
                                                data-id="7e59bfd" data-element_type="container">
                                                <div class="elementor-element elementor-element-34cb7c4 elementor-widget elementor-widget-video"
                                                    data-id="34cb7c4" data-element_type="widget"
                                                    data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                                                    data-widget_type="video.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="e-hosted-video elementor-wrapper elementor-open-inline">
                                                            <video class="elementor-video"
                                                                src="images/pexels-artem-podrez-6942886-Original.mp4"
                                                                autoplay="" controls="" playsinline=""
                                                                controlsList="nodownload"></video>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-f1a657b e-flex e-con-boxed e-con e-parent"
                                        data-id="f1a657b" data-element_type="container" data-core-v316-plus="true">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-9fe228b elementor-widget elementor-widget-heading"
                                                data-id="9fe228b" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">More
                                                        Detail Of The Activities And Games.</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d56c18a e-flex e-con-boxed e-con e-parent"
                                        data-id="d56c18a" data-element_type="container" data-core-v316-plus="true">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-3516a67 elementor-widget elementor-widget-text-editor"
                                                data-id="3516a67" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container" style="padding:15px">
                                                    <p>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br /><strong>ACTIVITY
                                                            AND GAMES
                                                            :</strong><br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-
                                                    </p>
                                                    <p>|CHORE CHART|<br />|COLOR BY NUMBER | DO-A-DOT|<br />|EMOTIONS
                                                        ACTIVITY | HUMAN ANATOMY | SHADOW MATCHING | MAZE WORKSHEET |
                                                        PATTERN SHEETS | PRESCHOOL CURRICULUM | PUZZLE GAME |
                                                        RESPONSIBILITIES CHART | REWARD CHART |SCISSOR
                                                        CUTTING|<br />|FARM BUSY BOOK | kids binder|<br />|PRINTABLE DIY
                                                        TODDLER BOOK | Popsicle Sticks Activity Game | Preschool
                                                        Calendar
                                                        Worksheet|<br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br /><strong>ALPHABET
                                                            :</strong><br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-
                                                    </p>
                                                    <p>|BEGINNING SOUNDS | COLORING | ENDING | FLASHCARDS |
                                                        MATCHING|<br />|NOUN | SENTENCES | TRACING | VERBS|<br />|CUT
                                                        AND PASTE | DOT MAT | VOWELS|<br />|COLORING
                                                        SHEETS|<br />|COLORING MATCHING | COLORING|<br />|CUT AND PASTE
                                                        | FLASHCARD|<br />|FUN COLORING | MATCHING |
                                                        SYMMETRY|<br />|Color Sorting
                                                        Activity|<br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br /><strong>EVENTS
                                                            :</strong><br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br />|FATHER&#8217;S
                                                        DAY | MOTHER&#8217;S DAY | VALENTINE&#8217;S
                                                        DAY|<br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br /><strong>FLASHCARDS
                                                            :</strong><br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br />|ACTIONS
                                                        VERBS | ALPHABET|<br />|COLOR|<br />|COMMUNITY HELPERS | DAY OF
                                                        WEEK|<br />|ARM ANIMALS|FRUIT|<br />|MONTHS OF THE YEAR |
                                                        NUMBERS | VEGATABLES | VEHICLES
                                                        FLASHCARDS|<br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br /><strong>READING
                                                            :</strong><br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br />|READING
                                                        COMPREHENSION | READING
                                                        WORKSHEETS|<br />NUMBERS<br />|ADDITION|<br />|COUNT AND CIRCLE
                                                        | FLASHCARDS|<br />|HOW MANY | MATCHING|<br />|MISSING NUMBER |
                                                        MULTIPLY|<br />|NUMBERS COLORING | SCRAMBLE | SUBTRACTION |
                                                        TRACING WORKSHEETS | ARRANGE|<br />|BEFORE AFTER | NUMBER
                                                        CHARTS|<br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br /><strong>SHAPES
                                                            :</strong><br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br />|COLOR
                                                        DIFFERENT | COLOR THE SHAPE | COMPLETE THE PATTERN | COMPLETE
                                                        THE SHAPES | COUNT THE SHAPES | DOT PAINTING|<br />|DRAW THE
                                                        SHAPE|<br />|FIND THE SHAPE AND TRACE IT | FLASHCARDS|<br />|HOW
                                                        MANY SIDES|<br />|LEARNING SHAPES|<br />|MATCH THE
                                                        SHAPE|<br />|MISSING SHAPE|<br />|TRACE AND COLOR THE SHAPE |
                                                        TRACE AND WRITE|<br />|RACE THE SHAPE|<br />TRACING<br />|TRACE
                                                        AND COLOR|<br />|TRACE THE ALPHABET | TRACE THE PATTERN |
                                                        TRACING LINES|<br />|TRACING SHAPES|<br />|TRACE THE SMALL
                                                        ALPHABET|<br />PRETEND PLAY<br />|APPLE ORCHARD | BIRTHDAY PARTY
                                                        | GROCERY ST | ICECREAM|<br />|PIZZA SHOP|<br />|SPAGHETTI
                                                        RESTAURANT | SPORTS TRAINING|<br />|TEA
                                                        PARTY|<br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br /><strong>SIGHT
                                                            WORDS
                                                            :</strong><br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br />|COLORING
                                                        WORKSHEET | FIND THE COLOR | FLASHCARDS | MATCHING|<br />|READ
                                                        AND CIRCLE | TRACING
                                                        SHEETS|<br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br />Our
                                                        preschool activity sheets cover a diverse array of subjects,
                                                        including math, language arts, science, and art, ensuring a
                                                        well-rounded learning experience.<br />The sheets feature
                                                        vibrant and appealing illustrations that capture the imagination
                                                        of young children, making learning fun and exciting.</p>
                                                    <p>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br />Please
                                                        be aware that this product is exclusively available as a digital
                                                        download, and it does not include any physical print
                                                        copies.<br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-
                                                    </p>
                                                    <p>Upon the successful processing of your payment, digital downloads
                                                        become instantly accessible.</p>
                                                    <p>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-
                                                    </p>
                                                    <p>To obtain the files, a computer or mobile and a web browser such
                                                        as Chrome (PC or Moile) or Safari (Mac) are required. Should you
                                                        require alternative dimensions or encounter any challenges while
                                                        downloading, please don&#8217;t hesitate to get in touch.
                                                        I&#8217;m always here to assist you.</p>
                                                    <p>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br /><strong>Printing
                                                            Guidelines:</strong><br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-
                                                    </p>
                                                    <p>1. Download your selected files.<br />2. Opt for the size and
                                                        format that suits your needs.<br />3. Print the files using your
                                                        home printer or utilize local printing services of your
                                                        preference.</p>
                                                    <p>&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-<br /><strong>Important
                                                            Information:</strong><br />&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;-
                                                    </p>
                                                    <p>1. The colors displayed on your monitor may vary from the printed
                                                        image due to differences in device models and printer
                                                        types.<br />2. For a premium poster appearance, it is
                                                        recommended to use matte, heavyweight paper.<br />3. These files
                                                        are intended solely for personal use. Commercial sale of posters
                                                        and files is strictly prohibited. However, you are welcome to
                                                        print them as frequently as required.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-e17936d e-flex e-con-boxed e-con e-parent"
                                        data-id="e17936d" data-element_type="container" data-core-v316-plus="true"
                                        style="display:none">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-a8fd165 elementor-widget elementor-widget-heading"
                                                data-id="a8fd165" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">Reviews
                                                        By Our Verified Buyers.</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php include_once "reviews.php" ?>
                                    <?php include "price.php" ?>
                                    <div style="display:none"
                                        class="elementor-element elementor-element-aae0621 e-flex e-con-boxed e-con e-parent"
                                        data-id="aae0621" data-element_type="container" id="reviews"
                                        data-core-v316-plus="true">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-4f0c782 e-con-full e-flex e-con e-child"
                                                data-id="4f0c782" data-element_type="container">
                                                <div class="elementor-element elementor-element-23ebf0a elementor-widget elementor-widget-testimonial"
                                                    data-id="23ebf0a" data-element_type="widget"
                                                    data-widget_type="testimonial.default">
                                                    <div class="elementor-widget-container">
                                                        <style>
                                                            /*! elementor - v3.20.0 - 26-03-2024 */
                                                            .elementor-testimonial-wrapper {
                                                                overflow: hidden;
                                                                text-align: center
                                                            }

                                                            .elementor-testimonial-wrapper .elementor-testimonial-content {
                                                                font-size: 1.3em;
                                                                margin-bottom: 20px
                                                            }

                                                            .elementor-testimonial-wrapper .elementor-testimonial-name {
                                                                line-height: 1.5;
                                                                display: block
                                                            }

                                                            .elementor-testimonial-wrapper .elementor-testimonial-job {
                                                                font-size: .85em;
                                                                display: block
                                                            }

                                                            .elementor-testimonial-wrapper .elementor-testimonial-meta {
                                                                width: 100%;
                                                                line-height: 1
                                                            }

                                                            .elementor-testimonial-wrapper .elementor-testimonial-meta-inner {
                                                                display: inline-block
                                                            }

                                                            .elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-details,
                                                            .elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-image {
                                                                display: table-cell;
                                                                vertical-align: middle
                                                            }

                                                            .elementor-testimonial-wrapper .elementor-testimonial-meta .elementor-testimonial-image img {
                                                                width: 60px;
                                                                height: 60px;
                                                                border-radius: 50%;
                                                                -o-object-fit: cover;
                                                                object-fit: cover;
                                                                max-width: none
                                                            }

                                                            .elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-aside .elementor-testimonial-image {
                                                                padding-right: 15px
                                                            }

                                                            .elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-aside .elementor-testimonial-details {
                                                                text-align: left
                                                            }

                                                            .elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-details,
                                                            .elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-image {
                                                                display: block
                                                            }

                                                            .elementor-testimonial-wrapper .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-image {
                                                                margin-bottom: 20px
                                                            }
                                                        </style>
                                                        <div class="elementor-testimonial-wrapper">
                                                            <div class="elementor-testimonial-content">Perfect mix of
                                                                fun and education.</div>

                                                            <div
                                                                class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                                                <div class="elementor-testimonial-meta-inner">
                                                                    <div class="elementor-testimonial-image">
                                                                        <img loading="lazy" decoding="async" width="333"
                                                                            height="352" src="images/654665.webp"
                                                                            class="attachment-full size-full wp-image-25779"
                                                                            alt="" />
                                                                    </div>

                                                                    <div class="elementor-testimonial-details">
                                                                        <div class="elementor-testimonial-name">Priya
                                                                            Kapoor</div>
                                                                        <div class="elementor-testimonial-job">(verified
                                                                            buyer) </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-ef7bd59 elementor-widget elementor-widget-testimonial"
                                                    data-id="ef7bd59" data-element_type="widget"
                                                    data-widget_type="testimonial.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-testimonial-wrapper">
                                                            <div class="elementor-testimonial-content">Nice bundle, I
                                                                really liked how they have created it.</div>

                                                            <div
                                                                class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                                                <div class="elementor-testimonial-meta-inner">
                                                                    <div class="elementor-testimonial-image">
                                                                        <img loading="lazy" decoding="async" width="320"
                                                                            height="490"
                                                                            src="images/pexels-sadman-chowdhury-2747267.webp"
                                                                            class="attachment-full size-full wp-image-25927"
                                                                            alt="" />
                                                                    </div>

                                                                    <div class="elementor-testimonial-details">
                                                                        <div class="elementor-testimonial-name">Jiya
                                                                            Sharma</div>
                                                                        <div class="elementor-testimonial-job">(verified
                                                                            buyer) </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-68ea6e5 elementor-widget elementor-widget-testimonial"
                                                    data-id="68ea6e5" data-element_type="widget"
                                                    data-widget_type="testimonial.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-testimonial-wrapper">
                                                            <div class="elementor-testimonial-content">Loved it, amazing
                                                                activities and games.</div>

                                                            <div
                                                                class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                                                <div class="elementor-testimonial-meta-inner">
                                                                    <div class="elementor-testimonial-image">
                                                                        <img loading="lazy" decoding="async" width="320"
                                                                            height="490"
                                                                            src="images/pexels-samarth-singhai-1139450-1.webp"
                                                                            class="attachment-full size-full wp-image-25928"
                                                                            alt="" />
                                                                    </div>

                                                                    <div class="elementor-testimonial-details">
                                                                        <div class="elementor-testimonial-name">Anjana
                                                                            Singh</div>
                                                                        <div class="elementor-testimonial-job">(verified
                                                                            buyer) </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-230c28f elementor-widget elementor-widget-testimonial"
                                                    data-id="230c28f" data-element_type="widget"
                                                    data-widget_type="testimonial.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-testimonial-wrapper">
                                                            <div class="elementor-testimonial-content">My son is really
                                                                enjoying the bundle.</div>

                                                            <div
                                                                class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                                                <div class="elementor-testimonial-meta-inner">
                                                                    <div class="elementor-testimonial-image">
                                                                        <img loading="lazy" decoding="async" width="320"
                                                                            height="490"
                                                                            src="images/pexels-ravi-roshan-15613222-1.webp"
                                                                            class="attachment-full size-full wp-image-25926"
                                                                            alt="" />
                                                                    </div>

                                                                    <div class="elementor-testimonial-details">
                                                                        <div class="elementor-testimonial-name">Geeta
                                                                            Dutt</div>
                                                                        <div class="elementor-testimonial-job">(verified
                                                                            buyer) </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e417ae0 e-con-full e-flex e-con e-child"
                                                data-id="e417ae0" data-element_type="container">
                                                <div class="elementor-element elementor-element-88653f5 elementor-widget elementor-widget-testimonial"
                                                    data-id="88653f5" data-element_type="widget"
                                                    data-widget_type="testimonial.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-testimonial-wrapper">
                                                            <div class="elementor-testimonial-content">Loving the
                                                                diverse range of activities!</div>

                                                            <div
                                                                class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                                                <div class="elementor-testimonial-meta-inner">
                                                                    <div class="elementor-testimonial-image">
                                                                        <img loading="lazy" decoding="async" width="499"
                                                                            height="384" src="images/Screenshot_22.webp"
                                                                            class="attachment-full size-full wp-image-25920"
                                                                            alt="" />
                                                                    </div>

                                                                    <div class="elementor-testimonial-details">
                                                                        <div class="elementor-testimonial-name">Riya
                                                                            Chaudhary</div>
                                                                        <div class="elementor-testimonial-job">(verified
                                                                            buyer) </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-d7c04af e-con-full e-flex e-con e-child"
                                                data-id="d7c04af" data-element_type="container">
                                                <div class="elementor-element elementor-element-631e5b8 elementor-widget-mobile__width-initial elementor-widget elementor-widget-testimonial"
                                                    data-id="631e5b8" data-element_type="widget"
                                                    data-widget_type="testimonial.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-testimonial-wrapper">
                                                            <div class="elementor-testimonial-content">Crushing it with
                                                                this bundle! Alphabet and numbers are top-notch.</div>

                                                            <div
                                                                class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                                                <div class="elementor-testimonial-meta-inner">
                                                                    <div class="elementor-testimonial-image">
                                                                        <img loading="lazy" decoding="async" width="436"
                                                                            height="480"
                                                                            src="images/Indian_girl_in_traditional_attire.webp"
                                                                            class="attachment-full size-full wp-image-25768"
                                                                            alt="" />
                                                                    </div>

                                                                    <div class="elementor-testimonial-details">
                                                                        <div class="elementor-testimonial-name">Anvi
                                                                            Tiwari</div>
                                                                        <div class="elementor-testimonial-job">(verified
                                                                            buyer) </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e3ec730 e-con-full e-flex e-con e-child"
                                                data-id="e3ec730" data-element_type="container">
                                                <div class="elementor-element elementor-element-77ea245 elementor-widget elementor-widget-testimonial"
                                                    data-id="77ea245" data-element_type="widget"
                                                    data-widget_type="testimonial.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-testimonial-wrapper">
                                                            <div class="elementor-testimonial-content">Engaging
                                                                interactive games, especially worksheets.</div>

                                                            <div
                                                                class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                                                <div class="elementor-testimonial-meta-inner">
                                                                    <div class="elementor-testimonial-image">
                                                                        <img loading="lazy" decoding="async" width="600"
                                                                            height="400"
                                                                            src="images/depositphotos_11594175-stock-photo-photo-of-handsome-middle-aged.webp"
                                                                            class="attachment-full size-full wp-image-25767"
                                                                            alt="" />
                                                                    </div>

                                                                    <div class="elementor-testimonial-details">
                                                                        <div class="elementor-testimonial-name">Rishi
                                                                            Kumar </div>
                                                                        <div class="elementor-testimonial-job">(verified
                                                                            buyer) </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <?php include_once "price.php" ?>
                                    <div style="display:none"
                                        class="elementor-element elementor-element-0bca0a6 elementor-align-center animated-fast elementor-invisible elementor-widget elementor-widget-button"
                                        data-id="0bca0a6" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;bounceIn&quot;}"
                                        data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                                    href="https://cosmofeed.com/vp/65ca473310c034001ff5f49f">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Buy Now @ ₹49
                                                            Only!</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a4a2bac e-flex e-con-boxed e-con e-parent"
                                data-id="a4a2bac" data-element_type="container"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
                                data-core-v316-plus="true">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-a8e0fe8 elementor-widget elementor-widget-text-editor"
                                        data-id="a8e0fe8" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div id="shopify-section-template--16302731755669__main"
                                                class="shopify-section">
                                                <div class="Container">
                                                    <div class="PageContent PageContent--narrow Rte">
                                                        <div class="page" title="Page 1">
                                                            <div class="section">
                                                                <div class="layoutArea">
                                                                    <div class="column">
                                                                        <p>Copyright © 2024 All Rights Reserved.
                                                                        </p>
                                                                        <p><a
                                                                                href="https://busybrainy.com/PrivacyPolicy">Privacy
                                                                                Policy</a> | <a
                                                                                href="https://busybrainy.com/TermsAndConditions">Terms
                                                                                and Conditions</a> | <a
                                                                                href="https://busybrainy.com/Disclaimer">Disclaimer</a> | 
                                                                                <a href="mailto:infoe@busybrainy.com">Contact Us</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="shopify-section-footer"
                                                class="shopify-section shopify-section--footer">
                                                <footer id="section-footer" class="Footer " role="contentinfo"
                                                    data-section-id="footer" data-section-type="footer">
                                                    <div class="Container">
                                                        <div class="Footer__Inner">
                                                            <div class="Footer__Block Footer__Block--text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>



            </div><!-- .entry-content .clear -->



            </article><!-- #post-## -->

            </main><!-- #main -->


        </div><!-- #primary -->


    </div> <!-- ast-container -->
    </div><!-- #content -->
    <footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope"
        itemid="#colophon">
    </footer><!-- #colophon -->
    </div><!-- #page -->
    <div id="salertWrapper">
        <div class="popup_position bottomRight">
            <div class="popup_box">
                <div class="popup_template animated clearfix" id="popup_template" style="display: none;">
                    <!-- Content will be loaded dynamically through ajax -->
                </div>
            </div>
        </div>
    </div>

    <link rel='stylesheet' id='e-animations-css'
        href='https://busybrainy.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.20.3'
        media='all' />
    <script id="astra-theme-js-js-extra">
        var astra = { "break_point": "921", "isRtl": "", "is_scroll_to_id": "", "is_scroll_to_top": "", "is_header_footer_builder_active": "1" };
    </script>
    <script src="https://busybrainy.com/wp-content/themes/astra/assets/js/minified/frontend.min.js?ver=4.6.9"
        id="astra-theme-js-js"></script>
    <script src="https://busybrainy.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.20.3"
        id="elementor-webpack-runtime-js"></script>
    <script src="https://busybrainy.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.20.3"
        id="elementor-frontend-modules-js"></script>
    <script src="https://busybrainy.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script src="https://busybrainy.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2"
        id="jquery-ui-core-js"></script>
    <script src="https://busybrainy.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.20.3"
        id="elementor-frontend-js"></script>
    <script src="https://busybrainy.com/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
    <script id="wp-util-js-extra">
    </script>
    <script src="https://busybrainy.com/wp-includes/js/wp-util.min.js?ver=45181196ca1e88cc943122dfdde4d125"
        id="wp-util-js"></script>
    <script id="wpforms-elementor-js-extra">
        var wpformsElementorVars = { "captcha_provider": "recaptcha", "recaptcha_type": "v2" };
    </script>
    <script
        src="https://busybrainy.com/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.7.2"
        id="wpforms-elementor-js"></script>
    <script>
        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () { var t, e = location.hash.substring(1); /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus()) }, !1);
    </script>
</body>


<script>
    paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
            return actions.order.create({
                "purchase_units": [{
                    "custom_id": "<?php echo $itemNumber; ?>",
                    "description": "<?php echo $itemName; ?>",
                    "amount": {
                        "currency_code": "<?php echo $currency; ?>",
                        "value": <?php echo $itemPrice; ?>,
                        "breakdown": {
                            "item_total": {
                                "currency_code": "<?php echo $currency; ?>",
                                "value": <?php echo $itemPrice; ?>
                            }
                        }
                    },
                    "items": [
                        {
                            "name": "<?php echo $itemName; ?>",
                            "description": "<?php echo $itemName; ?>",
                            "unit_amount": {
                                "currency_code": "<?php echo $currency; ?>",
                                "value": <?php echo $itemPrice; ?>
                            },
                            "quantity": "1",
                            "category": "DIGITAL_GOODS"
                        },
                    ]
                }]
            });
        },

        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
            return actions.order.capture().then(function (orderData) {
                //setProcessing(true);

                var postData = { paypal_order_check: 1, order_id: orderData.id };
                fetch('paypal_checkout_validate', {
                    method: 'POST',
                    headers: { 'Accept': 'application/json' },
                    body: encodeFormData(postData)
                })
                    .then((response) => response.json())
                    .then((result) => {

                        if (result.status == 1) {
                            window.location.href = "payment-status.php?checkout_ref_id=" + result.ref_id;
                        } else {
                            const messageContainer = document.querySelector("#paymentResponse");
                            messageContainer.classList.remove("hidden");
                            messageContainer.textContent = result.msg;

                            setTimeout(function () {
                                messageContainer.classList.add("hidden");
                                messageText.textContent = "";
                            }, 5000);
                        }
                        setProcessing(false);
                    })
                    .catch(error => console.log(error));
            });
        }
    }).render('#paypal-button-container');

    paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
            return actions.order.create({
                "purchase_units": [{
                    "custom_id": "<?php echo $itemNumber; ?>",
                    "description": "<?php echo $itemName; ?>",
                    "amount": {
                        "currency_code": "<?php echo $currency; ?>",
                        "value": <?php echo $itemPrice; ?>,
                        "breakdown": {
                            "item_total": {
                                "currency_code": "<?php echo $currency; ?>",
                                "value": <?php echo $itemPrice; ?>
                            }
                        }
                    },
                    "items": [
                        {
                            "name": "<?php echo $itemName; ?>",
                            "description": "<?php echo $itemName; ?>",
                            "unit_amount": {
                                "currency_code": "<?php echo $currency; ?>",
                                "value": <?php echo $itemPrice; ?>
                            },
                            "quantity": "1",
                            "category": "DIGITAL_GOODS"
                        },
                    ]
                }]
            });
        },

        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
            return actions.order.capture().then(function (orderData) {
                //setProcessing(true);

                var postData = { paypal_order_check: 1, order_id: orderData.id };
                fetch('paypal_checkout_validate', {
                    method: 'POST',
                    headers: { 'Accept': 'application/json' },
                    body: encodeFormData(postData)
                })
                    .then((response) => response.json())
                    .then((result) => {

                        if (result.status == 1) {
                            window.location.href = "payment-status.php?checkout_ref_id=" + result.ref_id;
                        } else {
                            const messageContainer = document.querySelector("#paymentResponse");
                            messageContainer.classList.remove("hidden");
                            messageContainer.textContent = result.msg;

                            setTimeout(function () {
                                messageContainer.classList.add("hidden");
                                messageText.textContent = "";
                            }, 5000);
                        }
                        setProcessing(false);
                    })
                    .catch(error => console.log(error));
            });
        }
    }).render('#paypal-button-container2');

    const encodeFormData = (data) => {
        var form_data = new FormData();

        for (var key in data) {
            form_data.append(key, data[key]);
        }
        return form_data;
    }

    // Show a loader on payment form processing
    const setProcessing = (isProcessing) => {
        if (isProcessing) {
            document.querySelector(".overlay").classList.remove("hidden");
        } else {
            document.querySelector(".overlay").classList.add("hidden");
        }
    }    
</script>

<link rel="stylesheet" href="content/flipdown.min.css" />

<script type='application/javascript' src="content/flipdown.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        var twoDaysFromNow = (new Date().getTime() / 1000) + (30) + (30 * 60) + 1;

        // Set up FlipDown
        var flipdown = new FlipDown(twoDaysFromNow)

            // Start the countdown
            .start()

            // Do something when the countdown ends
            .ifEnded(() => {
                console.log('The countdown has ended!');
            });

        // Toggle theme
        var interval = setInterval(() => {
            let body = document.body;
            body.classList.toggle('light-theme');
            body.querySelector('#flipdown').classList.toggle('flipdown__theme-dark');
            body.querySelector('#flipdown').classList.toggle('flipdown__theme-dark');
        }, 5000);

    });

</script>

</html>


<!-- Page cached by LiteSpeed Cache 6.1 on 2024-06-13 19:26:24 -->