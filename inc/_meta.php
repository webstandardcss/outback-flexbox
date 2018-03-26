<title><?php echo $pageTitleTag; ?></title>

    <!-- Meta data -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $pageDescription; ?>" />
    <meta name="keywords" content="<?php echo $pageKeywords; ?>" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?php echo $pageURL; ?>" />

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="<?php echo $pageTitleTag; ?>">
    <meta itemprop="description" content="<?php echo $pageDescription; ?>">
    <meta itemprop="image" content="<?php echo $pageImage; ?>">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="<?php echo $pageImage; ?>">
    <meta name="twitter:site" content="<?php echo $siteTwitter; ?>">
    <meta name="twitter:title" content="<?php echo $pageTitleTag; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>">
    <meta name="twitter:creator" content="<?php echo $siteTwitter; ?>">

    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="<?php echo $pageImage; ?>">

    <!-- Open Graph data -->
    <meta property="og:title" content="<?php echo $pageTitleTag; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo $pageURL; ?>" />
    <meta property="og:image" content="<?php echo $pageImage; ?>" />
    <meta property="og:description" content="<?php echo $pageDescription; ?>" />
    <meta property="og:site_name" content="<?php echo $siteName; ?>" />
    <meta property="article:published_time" content="<?php echo $pageDateModified; ?>" />
    <meta property="article:modified_time" content="<?php echo $pageDateModified; ?>" />
    <meta property="article:section" content="<?php echo $pageTitleTag; ?>" />
    <meta property="article:tag" content="<?php echo $pageKeywords; ?>" />
    <meta property="fb:admins" content="<?php echo $siteFacebookAdmin; ?>" />

    <!-- Geocode data -->
    <meta name="DC.title" content="<?php echo $siteName; ?>" />
    <meta name="geo.region" content="US-TX" />
    <meta name="geo.placename" content="Gilmer" />
    <meta name="geo.position" content="32.6550964, -94.9630285" />
    <meta name="ICBM" content="32.6550964, -94.9630285" />
