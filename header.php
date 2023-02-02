<!DOCTYPE html>
<?php global $site_url, $template_url; ?>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="http://schema.org/WebSite">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Name of web application (only should be used if the website is used as an app) -->
<meta name="application-name" content="<?php bloginfo('name'); ?>">

<!-- Theme Color for Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#ffffff">

<!-- Short description of the document (limit to 150 characters) -->
<meta name="description" content="<?php bloginfo('description'); ?>">

<!-- Control the behavior of search engine crawling and indexing -->
<meta name="robots" content="index,follow"><!-- All Search Engines -->
<meta name="googlebot" content="index,follow"><!-- Google Specific -->

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="<?php echo $site_url; ?>">
<meta name="twitter:title" content="<?php bloginfo('name'); ?>">
<meta name="twitter:description" content="<?php bloginfo('description'); ?>">

<!-- Open Graph data -->
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $site_url; ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />

<!-- Favicon and extra -->

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $template_url; ?>/public/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $template_url; ?>/public/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $template_url; ?>/public/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $template_url; ?>/public/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $template_url; ?>/public/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $template_url; ?>/public/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $template_url; ?>/public/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $template_url; ?>/public/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $template_url; ?>/public/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $template_url; ?>/public/images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $template_url; ?>/public/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $template_url; ?>/public/images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $template_url; ?>/public/images/favicon-16x16.png">


<!-- PWA -->
<!--
<link rel="manifest" href="<?php echo $template_url; ?>/public/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $template_url; ?>/public/ms-icon-144x144.png">
<meta name="msapplication-navbutton-color" content="#ffffff">
<meta name="msapplication-config" content="<?php echo $template_url; ?>/public/browserconfig.xml">
<meta name="msapplication-tooltip" content="<?php bloginfo('description'); ?>">
<meta name="msapplication-tap-highlight" content="no">
<meta name="msapplication-starturl" content="/">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="full-screen" content="yes">
<meta name="browsermode" content="application">
<meta name="screen-orientation" content="portrait">
-->

<!-- Control the behavior of search engine crawling and indexing -->
<meta name="robots" content="index,follow"><!-- All Search Engines -->
<meta name="googlebot" content="index,follow"><!-- Google Specific -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-L6N181TFTR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L6N181TFTR');
</script>

<?php partial('head-scripts'); ?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDACXjU1cGop--FHRW01nyCiUFpUxb-KPk" type="text/javascript"></script>
<!-- <script src="<?php echo $template_url; ?>/scripts/gmaps.js"></script> -->
<?php wp_head(); ?>
</head>

<script type="text/javascript">
var _iub = _iub || [];
_iub.csConfiguration = {"lang":"en","siteId":1618344,"cookiePolicyId":12726851,"cookiePolicyUrl":"https://www.iubenda.com/privacy-policy/12726851", "banner":{ "acceptButtonDisplay":true,"acceptButtonColor":"#2f2f2f;","acceptButtonCaptionColor":"#2f2f2f","position":"float-top-center","textColor":"#2f2f2f","backgroundColor":"white" }};
</script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<div class ="loader">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 643 371"><path d="M125.056 371c23.532 0 45.215-3.617 65.049-10.852 19.834-7.235 35.802-18.172 47.904-32.81 12.103-14.638 18.154-33.062 18.154-55.271 0-18.508-3.782-34.324-11.346-47.448-7.564-13.124-17.565-24.902-30.003-35.333-12.439-10.432-26.558-20.864-42.358-31.296-19.834-13.796-36.223-25.406-49.165-34.828-12.943-9.422-22.608-18.76-28.995-28.014-6.387-9.254-9.58-20.275-9.58-33.062 0-15.816 5.042-28.015 15.127-36.596 10.085-8.58 22.86-12.871 38.323-12.871 17.818 0 32.861 5.552 45.132 16.657 12.27 11.105 21.935 25.07 28.994 41.895 7.06 16.826 11.262 34.324 12.607 52.496h11.598c0-24.565.084-44.335.252-59.31.168-14.974.504-27.005 1.008-36.09.505-9.086.925-16.994 1.26-23.724H227.42c-2.017 14.806-5.715 22.21-11.094 22.21-2.353 0-4.79-.59-7.311-1.767-2.522-1.178-5.8-2.945-9.833-5.3-8.069-4.711-17.817-9.17-29.247-13.376C158.505 2.103 142.369 0 121.526 0c-20.506 0-39.92 3.281-58.242 9.843-18.321 6.562-33.029 16.741-44.122 30.538-11.094 13.797-16.64 31.463-16.64 53 0 18.844 4.117 34.913 12.354 48.205 8.236 13.292 19.245 25.322 33.028 36.09 13.783 10.768 28.575 21.368 44.375 31.8 21.851 14.47 39.752 28.603 53.703 42.4 13.952 13.797 20.927 31.127 20.927 51.99 0 17.163-5.715 30.286-17.145 39.372-11.43 9.086-26.221 13.629-44.374 13.629-21.515 0-38.744-6.142-51.687-18.424-12.942-12.283-22.523-28.35-28.742-48.205-6.22-19.854-10.001-41.222-11.346-64.105H2.017c0 27.594-.084 50.308-.252 68.143-.168 17.835-.336 32.39-.504 43.662C1.093 349.211.672 359.054 0 367.467h11.598c2.017-14.807 5.715-22.21 11.094-22.21 4.034 0 9.749 2.356 17.144 7.067 9.077 4.374 20.087 8.58 33.03 12.619 12.942 4.038 30.339 6.057 52.19 6.057zM643 363.933v-10.095c-8.068-3.701-14.54-7.908-19.414-12.619-4.874-4.711-9.665-10.768-14.371-18.171L492.14 133.66 548.2 68.143c14.439-16.425 28.077-28.44 40.915-36.047l.938-.548c13.11-7.572 25.213-12.704 36.307-15.396v-9.59c-12.775 1.01-29.247 1.514-49.418 1.514h-1.729c-16.05-.012-29.593-.18-40.628-.505-11.43-.336-23.868-.673-37.315-1.01v9.591c13.11.337 23.28 3.702 30.507 10.096 7.228 6.393 10.085 15.142 8.573 26.247-1.513 11.105-8.993 24.397-22.44 39.876l-23.7 27.762c-15.8 18.508-29.92 31.969-42.358 40.381-11.43 7.73-23.853 12.194-37.27 13.389l-.549.045V60.067c0-12.074.79-21.062 2.371-26.965l.15-.545c1.681-5.889 5.211-9.927 10.59-12.114 5.379-2.187 13.279-3.45 23.7-3.786V6.562c-9.413.336-21.431.673-36.054 1.01-14.624.336-29.331.504-44.123.504-17.145 0-33.28-.168-48.409-.505-15.127-.336-27.23-.673-36.306-1.01v10.096c10.421.337 18.237 1.599 23.448 3.786 5.21 2.187 8.74 6.225 10.59 12.114 1.848 5.889 2.773 15.059 2.773 27.51v250.362c0 12.114-.925 21.2-2.774 27.257-1.849 6.057-5.379 10.095-10.59 12.114-5.21 2.019-13.026 3.365-23.447 4.038v10.095c9.076-.673 21.179-1.093 36.306-1.262 15.128-.168 31.264-.252 48.409-.252 14.792 0 29.5.084 44.123.252 14.623.169 26.641.59 36.054 1.262v-10.095c-10.421-.673-18.237-2.019-23.448-4.038-5.21-2.019-8.74-6.057-10.59-12.114-1.848-6.057-2.773-15.143-2.773-27.257v-125.9l.367.044c3.224.434 5.946 1.16 8.165 2.18l.545.261c3.025 1.515 6.135 3.954 9.329 7.32 3.193 3.364 6.807 8.58 10.841 15.647l73.622 121.143c5.042 8.413 6.219 14.133 3.53 17.162-2.69 3.028-11.43 4.88-26.222 5.552v10.095c16.472-.673 30.087-1.093 40.845-1.262 10.757-.168 19.834-.252 27.23-.252 13.11 0 27.23.084 42.357.252 15.128.169 29.247.59 42.358 1.262z" fill="#2F2F2F" fill-rule="nonzero" opacity=".027"/></svg>
    <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
    </div>
</div>


