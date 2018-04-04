<?php require_once(dirname(__FILE__) . "/inc/config.php"); ?>

<?php // Page data
$pageTitle = "Homepage";
$pageTitleTag = $siteName . " " . $pageTitle;
$pageDescription = $siteName  . " " . $pageTitle;
$pageKeywords = $pageTitle . "" . $siteKeywords;
?>

<?php require_once(dirname(__FILE__) . "/inc/header.php"); ?>
  <main class="ob-main flex-container">
    <h1>Water Stations</h1>
    <div class="product">
      <div class="product-row flex-container">
        <img class="product-image" src="obf/products/La-Bandera-Qu-Cntrl_20140917-370x3702-300x300.jpg" alt="La Bandera" />
        <div class="product-description">
          <h3>LA BANDERA QUAIL CENTRAL FEEDER & WATER STATION</h3>
          <p>Designed by Wildlife Biologist Gene Naquain. Features side panels to shield quail and limit pest access. Also adjustable water drippers and feed pan.</p>
          <p>1000# Feed Capacity & 24 Gallon Water Capacity – $1825</p>
        </div>
      </div>
    </div>
  </main>
<?php require_once(dirname(__FILE__) . "/inc/footer.php"); ?>
