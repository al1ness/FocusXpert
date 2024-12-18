<?php
    if( !defined('PAGE_TITLE') ){ define('PAGE_TITLE', "FocusXpert"); }
    if( !defined('PAGE_DESCRIPTION') ){ define('PAGE_DESCRIPTION', ""); }
    if( !defined('PAGE_KEYWORDS') ){ define('PAGE_KEYWORDS', ""); }
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title><?= PAGE_TITLE; ?></title>
    <meta name="description" content="<?= PAGE_DESCRIPTION; ?>">
    <meta name="keywords" content="<?= PAGE_KEYWORDS; ?>">  
    <link href="/images/icon.png" rel="shortcut icon" type="image/x-icon">

    <meta property="og:title" content="FocusXpert"> 
    <meta property="og:description" content="Locust Engine Page">
    <meta property="og:image" content="<?= $_SERVER['SERVER_NAME']; ?>/images/icon.png">
    <meta property="og:type" content="catalogue">
    <meta property="og:url" content= "<?= $_SERVER['SERVER_NAME']; ?>">  
    <meta property="og:locale" content="ru_RU">
    <meta property="og:locale:alternate" content="en_US"> 
    <meta property="og:site_name" content="FocusXpert"> 

    <link rel="stylesheet" href="/styles/reset.css?<?= rand(0,999); ?>">
    <script src="/scripts/jquery.js"></script>
</head>
