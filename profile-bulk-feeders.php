<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Bulk Feeders Portofilo";
$pageTitleTag = $siteName . " Outback Feeders " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>
  <main class="ob-main flex-container cushycms">
    <h1>Bulk Feeders</h1>
      <div class="product">
        <h2>Regular Product Layout</h2>
        <div class="product-row flex-container-row">
          <div class="product-media">
            <img class="product-image" src="obf/products/Bulk_featured_product_image-670x450.png" alt="Bulk Feeders" />
          </div>
          <div class="product-description">
            <a href="bulk-trailers.php"><h1>Bulk Trailers</h1></a>
            <a href="bulk-hoppers.php"><h1>Bulk Hoppers</h1></a>
            <a href="bulk-bins.php"><h1>Bulk Bins</h1></a>
          </div>
        </div>
      </div>

    <br>
    <br>
  </main>
<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
