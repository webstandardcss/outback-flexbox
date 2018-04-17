<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Search";
$pageTitleTag = $siteName . " Outback Feeders " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>
<link rel="stylesheet" href="/assets/vendors/tipue/tipuesearch/css/tipuesearch.css">

  <style>
    main > form > input {
      margin-left:
    }
  </style>

  <main class="ob-main flex-container">
    <h1>Search Outback!</h1>
    
    <form action="search.php">
      <input type="text" name="q" id="tipue_search_input" autocomplete="off" placeholder="Search Outback" required>
    </form>
    
    <p>Outback products are “Built Right the First Time, to Last a Lifetime”, withstanding extreme weather, wind and wildlife abuse.</p>
    
    <div id="tipue_search_content"></div>

    <p>All Outback products are innovatively designed and built at the original location in Gilmer, Texas. Made with only high quality American steel and craftsmanship, all products are 100% Satisfaction Guaranteed.</p>

    <script>
      $(document).ready(function() {
        $('#tipue_search_input').tipuesearch({
          'mode': 'live'
        });
      });
    </script>
  </main>
<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
