<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "";
$pageTitleTag = $siteName . " Outback Feeders " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>
  <main class="ob-main flex-container">
    <h1>Bulk Hoppers</h1>
    
	    <div class="product">
        <h2>Regular Product Layout</h2>
        <div class="product-row flex-container-row">
          <div class="product-media">
            <img class="product-image" src="obf/products/1NEWFEE2.-500-trk-hopper-300x261.jpg" alt="Truck Hopper" />
          </div>
          <div class="product-description">
            <h3>TRUCK & TRAILER HOPPERS</h3>
            <p>With Remote Controlled “Eliminator”, Road Feeder, Gravity Tube & Blower System</p>

            <p>600# –   $3780  (shown left)<br>
            1000# – $3900<br>
            2000# – $4250<br>
            3000# – $4550</p>
          </div>
        </div>
      </div>
      <br>
        <div class="product">

        <div class="product-row flex-container-row">
          <div class="product-media">
            <img class="product-image" src="obf/products/NEWFEE6-4K-trlr-hpr-300x225.jpg" alt="Trailer Hopper" />
          </div>
          <div class="product-description">
            
            <p>4000# – $5575</p>
          </div>
        </div>
      </div>
    
  </main>
<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
