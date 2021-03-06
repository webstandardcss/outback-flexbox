<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Search";
$pageTitleTag = $siteName . " Outback Feeders " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
$extraCss = array("searchfix");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>
<link rel="stylesheet" href="/assets/vendors/tipue/tipuesearch/css/tipuesearch.css">

  <style>
    #searchform { display: none; }
    #tipue_search_input {
      width: 100%;
      max-width: 100%;
    }
    .tipue_search_content_title, .tipue_search_content_title a {
      color: #ddd;
      font: 100 21px/1.7 Roboto, sans-serif;
      border: none;
    }
    .tipue_search_content_title a:hover,
    .tipue_search_content_url a:hover {
      color: white;
    }

    .tipue_search_content_url a {
      border: none;
      color: #ddf
    }
  </style>

  <main class="ob-main flex-container cushycms-text">
    <h1>Search Outback!</h1>
    
    <!-- <form action="search.php">
      <input type="text" name="q" id="tipue_search_input" autocomplete="off" placeholder="Search Outback" required>
    </form> -->
    
    <h3>Outback products are “Built Right the First Time, to Last a Lifetime”, withstanding extreme weather, wind and wildlife abuse.</h3>
    
    <form action="search.php">
    <div class="tipue_search_left"><img src="/assets/vendors/tipue/tipuesearch/search.png" class="tipue_search_icon"></div>
    <div class="tipue_search_right"><input type="text" name="q" id="tipue_search_input" pattern=".{3,}" title="At least 3 characters" placeholder="Search Outback" required></div>
    <div style="clear: both;"></div>
    </form>
    <div id="tipue_search_content"></div>

    <h3>All Outback products are innovatively designed and built at the original location in Gilmer, Texas. Made with only high quality American steel and craftsmanship, all products are 100% Satisfaction Guaranteed.</h3>

    <script>
      $(document).ready(function() {
        $('#tipue_search_input').tipuesearch({
          // 'mode': 'live',
          // 'liveDescription': 'h1',
          // 'liveContent': 'main'
        });
      });
    </script>
  </main>
<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
