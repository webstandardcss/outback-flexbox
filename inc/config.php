<?php
$siteName = "Outback Wildlife Feeders";
$sitePhone = "800-396-6313";
$sitePhoneRaw = "+18003966313";
$siteTwitter = "@OutbackFeeders";
$siteKeywords = ",outback,feeders,hunting,deer feeders";
$siteFacebookAdmin = "Facebook admin numeric ID";
$siteFacebookURL = "https://www.facebook.com/Outback-Wildlife-Feeders-and-Furniture-249061648570558/";
$siteGoogleURL = "https://plus.google.com/105053570710154312351";
// $siteHost = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI];
$siteHost = "http://" . $_SERVER['HTTP_HOST'];
$pageURL = $siteHost . $_SERVER['REQUEST_URI'];
$pageImage = $siteHost . "/assets/images/logo.png";
$pageDateModifiedFriendly = date("F d Y H:i:s",filemtime($pageURL));
// February 14 2006 13:22:46
$pageDateModified = date("Y-F-d\TH:i:s-5:00",filemtime($pageURL));
// 2013-09-17T05:59:00+01:00
?>
