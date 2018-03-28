<?php require_once(dirname(__FILE__) . "/inc/config.php"); ?>

<?php // Page data
$pageTitle = "Homepage";
$pageTitleTag = $siteName . " " . $pageTitle;
$pageDescription = $siteName  . " " . $pageTitle;
$pageKeywords = $pageTitle . "" . $siteKeywords;
?>

<?php require_once(dirname(__FILE__) . "/inc/header.php"); ?>
  <main class="ob-main flex-container">
    <h1>Product Layouts</h1>
    <div class="ob-products">
      <div class="product">
        <h2>Water Stations</h2>
        <div class="product-row flex-container-row">
          <div class="product-media">
            <img class="product-image" src="obf/products/La-Bandera-Qu-Cntrl_20140917-370x3702-300x300.jpg" alt="La Bandera" />
          </div>
          <div class="product-description">
            <h3>LA BANDERA QUAIL CENTRAL FEEDER & WATER STATION</h3>
            <p>Designed by Wildlife Biologist Gene Naquain. Features side panels to shield quail and limit pest access. Also adjustable water drippers and feed pan.</p>
            <p>1000# Feed Capacity & 24 Gallon Water Capacity – $1825</p>
          </div>
        </div>
      </div>

      <div class="product">
        <h2>Reverse Product</h2>
        <div class="product-row flex-container-row flex-container-row-reverse">
          <div class="product-media">
            <img class="product-image" src="obf/products/La-Bandera-Qu-Cntrl_20140917-370x3702-300x300.jpg" alt="La Bandera" />
          </div>
          <div class="product-description">
            <h3>LA BANDERA QUAIL CENTRAL FEEDER & WATER STATION</h3>
            <p>Designed by Wildlife Biologist Gene Naquain. Features side panels to shield quail and limit pest access. Also adjustable water drippers and feed pan.</p>
            <p>1000# Feed Capacity & 24 Gallon Water Capacity – $1825</p>
          </div>
        </div>
      </div>
    </div>
    <div class="slick-outer block-container-centered ob-carousel">
      <div class="slick slider-home">
        <div><span>Image 0</span><img src="https://dummyimage.com/400/200/fff&text=Outback" alt=""></div>
        <div><span>Image 1</span><img src="https://dummyimage.com/400/200/fff&text=Outback" alt=""></div>
        <div><span>Image 2</span><img src="https://dummyimage.com/400/200/fff&text=Outback" alt=""></div>
        <div><span>Image 3</span><img src="https://dummyimage.com/400/200/fff&text=Outback" alt=""></div>
        <div><span>Image 4</span><img src="https://dummyimage.com/400/200/fff&text=Outback" alt=""></div>
        <div><span>Image 5</span><img src="https://dummyimage.com/400/200/fff&text=Outback" alt=""></div>
        <div><span>Image 6</span><img src="https://dummyimage.com/400/200/fff&text=Outback" alt=""></div>
        <div><span>Image 7</span><img src="https://dummyimage.com/400/200/fff&text=Outback" alt=""></div>
        <div><span>Image 8</span><img src="https://dummyimage.com/400/200/fff&text=Outback" alt=""></div>
        <div><span>Image 9</span><img src="https://dummyimage.com/400/200/fff&text=Outback" alt=""></div>
      </div>
      <script type="text/javascript">
      $('.slider-home').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: false
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
      </script>
    </div>
  </main>
<?php require_once(dirname(__FILE__) . "/inc/footer.php"); ?>
