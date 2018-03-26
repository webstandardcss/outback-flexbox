<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once(dirname(__FILE__) . "/_meta.php"); ?>
  <script
  src="//code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <!-- <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="custom.css">
</head>
<body class="flex-container">
  <div id="topbar-search" class="topbar-widget flex-container-row">
    <form role="search" method="get" id="searchform" class="search-form" action="http://outbackfeeders.com/">
      <label class="hidden" for="s">Search for:</label>
      <button type="submit" id="searchsubmit" class="search-icon"><i class="fas fa-search"></i></button>
      <input type="text" value="" name="s" id="s" class="search-query" placeholder="Search">
    </form>
    <div class="mobilenav">
      <?php require_once(dirname(__FILE__) . "/_mobilenav.php"); ?>
    </div>
  </div>
  <header class="ob-header flex-container">
    <?php require_once(dirname(__FILE__) . "/_nav.php"); ?>
  </header>
