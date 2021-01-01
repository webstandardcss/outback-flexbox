<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "";
$pageTitleTag = $siteName . " Outback Feeders " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
$extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

<main class="ob-main flex-container-row">
  <h1>Welcome to Outback Feeders!</h1>
  <!-- iframe src="https://www.youtube.com/embed/yIDBzfALRYM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe -->

<iframe width="560" height="315" src="https://www.youtube.com/embed/yIDBzfALRYM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  
  <div class="form gform-home">
  <!-- Start of the form -->
    <h1>Get In Touch</h1>

    <div class="gform_wrapper" id="gform_wrapper_4">
      <form method="post" enctype="multipart/form-data" id="gform_4" action="https://outbackfeeders.com/obf/mail/mail.php">
        <input type="hidden" name="recipients" value="myaddress" />
        <input type="hidden" name="good_url" value="/" />
        <input type="hidden" name="subject" value="Outback Homepage Get In Touch Form" />
        <input type="hidden" name="csvfile" value="mail-homepage.csv" />
        <input type="hidden" name="logfile" value="mail-homepage.log" />
        <input type="hidden" name="derive_fields" value="ipaddr = REMOTE_ADDR,
                                browser = HTTP_USER_AGENT, 
                                referrer = HTTP_REFERER, 
                                DateTime = %'Date of form submission was: '% . %date% + %time%" />
        <input type="hidden" name="csvcolumns"
            value="DateTime:cs,ipaddr:cs,email:c,
            realname:c,phone:cs,zipcode:cs,
            product:r,browser:c,referrer:c" />
        <input type="hidden" name="required"
            value="email:Your email address,
            realname:Your name,
            phone:Your phone number,
            zipcode:Your zip code,
            product:The reason you're interested in our product,
            imgverify:Please type the image text" />
        <div class="gform_body">
          <ul id="gform_fields_4" class="gform_fields top_label form_sublabel_below description_below">
            <li id="field_4_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="realname">Name<span class="gfield_required">*</span></label>
              <div class="ginput_container ginput_container_text">
                <input name="realname" id="realname" type="text" value="" class="medium" tabindex="1" placeholder="Name" aria-required="true" aria-invalid="false">
              </div>
            </li>
            <li id="field_4_3" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="phone">Phone<span class="gfield_required">*</span></label>
              <div class="ginput_container ginput_container_text">
                <input name="phone" id="phone" type="text" value="" class="medium" tabindex="3" placeholder="Phone" aria-required="true" aria-invalid="false">
              </div>
            </li>
            <li id="field_4_8" class="gfield dealer-field-right gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="email">Email<span class="gfield_required">*</span></label>
              <div class="ginput_container ginput_container_email">
                <input name="email" id="email" type="text" value="" class="medium" tabindex="4" placeholder="Email" aria-required="true" aria-invalid="false">
              </div>
            </li>
            <li id="field_4_6" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="zipcode">Your Zipcode</label>
              <div class="ginput_container ginput_container_text">
                <input name="zipcode" id="zipcode" type="text" value="" class="medium" tabindex="5" placeholder="Your Zipcode" aria-invalid="false">
              </div>
            </li>
            <li id="field_4_4" class="gfield dealer-field-right gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="product">Products You Are Interested In<span class="gfield_required">*</span></label>
              <div class="ginput_container ginput_container_select">
                <select name="product" id="product" class="medium gfield_select" tabindex="6" aria-required="true" aria-invalid="false">
                  <option value="" selected="selected" class="gf_placeholder">Products You Are Interested In</option>
                  <option value="Corn Feeders">Corn Feeders</option>
                  <option value="Protein Feeders">Protein Feeders</option>
                  <option value="Specialty Products">Specialty Products</option>
                </select>
              </div>
            </li>
            <li id="field_4_7" class="gfield image-verify field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="comments">Comments</label>
              <div class="ginput_container imgverify">
                <img src="https://outbackfeeders.com/obf/mail/verifyimg.php" alt="Image verification" name="vimg" />
                <input type="text" size="12" name="imgverify" placeholder="Enter image text" />
              </div>
            </li>
          </ul>
        </div>
        <div class="gform_footer top_label">
          <input type="submit" id="gform_submit_button_4" class="gform_button button" value="SEND YOUR INFO" tabindex="8" />
        </div>
      </form>
    </div>
    <!-- End of the form  -->
  </div>

  
  <!-- <div class="product">
    <div class="product-row flex-container">
      <img class="product-image" src="obf/..." alt="" />
      <div class="product-description">
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div> -->
</main>

<!-- <div style="clear: both;"></div> -->
<style scoped>
  iframe {
    margin: 0 auto;
  } 

@media screen and (max-width: 580px) {
  iframe {
    margin: 0 auto;
    position: relative;
    right: 5%;
    width: 80%;
    height: 40%;
  }
}
  .slider-home, .slider-home h1 {
    color: #B3D8DD;
  }
  .slider-home {
    font-size: 18px;
  }
  .slick {display: block;}
  .slick-image {display: inline-block;}
  .slider-home > div,
  .slider-home img {
    height: 300px;
  }

  .ob-carousel {
      margin-top: 50px;
   }

  @-moz-document url-prefix() {
    .ob-carousel {
      margin-top: 120px;
    }
  }
  </style>
<div class="slick-outer ob-carousel">

  <!-- Start Carousel  -->
  <div class="slick slider-home block-container-centered">
    <div class="product">
      <div class="product-row flex-container-row">
        <div class="product-media">
          <a href="new-half-rack-protein-series.php">
          <img class="product-image" src="obf/products/IMG_1700-2.jpg" alt="New Half Rack-Series" /></a>
        </div>
        <div class="product-description">
          <h1>New Half-back series </h1>
          <p>Choose from three models - all available in three sizes: 400#, 600# and 1000# capacities.The Half-Back Gravity Flow model is the shortest of the Series. The Half-Back Gravity Flow XT is six inches taller; allowing for more antler clearance.</p>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-row flex-container-row">
        <div class="product-media">
          <a href="/protein-feeders.php">
            <img class="product-image" src="/obf/products/galvanized-finish-2020.jpg" alt="Galvanized Coating" /></a>
        </div>
        <div class="product-description">
          <h1>Galvanized Coating </h1>
          <p>Hot-dipped galvanized coating for extra corrosion protection. Call for a quote to add this option to your feeder order.</p>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-row flex-container-row">
        <div class="product-media">
          <a href="bulk-trailers.php">
          <img class="product-image" src="/obf/products/float-tires-pardner-4m.png" alt="Flotation Tires" /></a>
        </div>
        <div class="product-description">
          <h1>Floatation Tires (per axle) - $700</h1>
          
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-row flex-container-row">
        <div class="product-media">
          <a href="/water-stations.php">
          <img class="product-image" src="/obf/products/Reg-Quail-Cntrl_20140918-300x252.jpg" alt="CAPING CART" /></a>
        </div>
        <div class="product-description">
          <h1>Water Stations</h1>
          <p>Makes caping an easier one-man job $500</p>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-row flex-container-row">
        <div class="product-media">
          <a href="hunt-camp-equipment.php">
          <img class="product-image" src="/assets/images/slider/home/All_grtballoffire_20140929-1024x512-0x200.png" alt="GREAT BALL OF FIRE WILDLIFE SCENE EMBELLISHED FIRE PIT" /></a>
        </div>
        <div class="product-description">
          <h1>GREAT BALL OF FIRE WILDLIFE SCENE EMBELLISHED FIRE PIT</h1>
          <p>No two alike, each one a work of art! 1400 degree high-temperature powder-coat finish. Fire poker & ash can included. $2150</p>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-row flex-container-row">
        <div class="product-media">
          <a href="hunt-camp-equipment.php"><img class="product-image" src="/assets/images/slider/home/MICROWAVE-GRILL_09232013-1024x819-0x200.png" alt="MICRO-WAVE GRILL" /></a>
        </div>
        <div class="product-description">
          <h1>MICRO-WAVE GRILL</h1>
          <p>Faster & hotter, with adjustable heat, thermometer included. Built to cook reliably for decades. $1125</p>
        </div>
      </div>
    </div>
    <div class="product">
      <div class="product-row flex-container-row">
        <div class="product-media">
          <a href="/specialty-products.php">
          <img class="product-image" src="/obf/products/alfalfa-237x300.jpg" alt="Specialty Products"/></a>
        </div>
        <div class="product-description">
          <h1>Specialty Products</h1>
          <p>HAY & ALFALFA FEEDERS</p>
          <p>Fawn Specialty Products</p>
          <p>FAWN FEEDER</p>
        </div>
      </div>
    </div>
    <!-- <div class="product">
      <div class="product-row flex-container-row">
        <div class="product-media">
          <img class="product-image" src="/assets/images/slider/home/" alt="" />
        </div>
        <div class="product-description">
          <h1></h1>
          <p></p>
        </div>
      </div>
    </div> -->
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
  <!-- End Carousel -->
</div>  

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
