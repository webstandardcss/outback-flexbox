<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "";
$pageTitleTag = $siteName . "Outback Feeders" . $pageTitle;
$pageDescription = $siteName  . "" . $pageTitle;
$pageKeywords = $pageTitle . "" . $siteKeywords;
$extraCss = array("forms");
?>

<style>
iframe {
  margin: 0 auto;
  position: relative;
  right: 5%;
  width: 80%;
  height: 40%;
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
  height: 212px;
}

</style>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>
  <main class="ob-main flex-container">
    <h1>Welcome to Outback Feeders!</h1>
    <iframe src="https://www.youtube.com/embed/yIDBzfALRYM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    
    <div class="form dealer-form">
    <!-- Start of the form -->
      <h2>Get In Touch</h2>

      <div class="gform_wrapper" id="gform_wrapper_4">
        <form method="post" enctype="multipart/form-data" id="gform_4" action="">
          <div class="gform_body">
            <ul id="gform_fields_4" class="gform_fields top_label form_sublabel_below description_below">
              <li id="field_4_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                <label class="gfield_label" for="input_4_1">Name<span class="gfield_required">*</span></label>
                <div class="ginput_container ginput_container_text">
                  <input name="input_1" id="input_4_1" type="text" value="" class="medium" tabindex="1" placeholder="Name" aria-required="true" aria-invalid="false">
                </div>
              </li>
              <li id="field_4_3" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                <label class="gfield_label" for="input_4_3">Phone<span class="gfield_required">*</span></label>
                <div class="ginput_container ginput_container_text">
                  <input name="input_3" id="input_4_3" type="text" value="" class="medium" tabindex="3" placeholder="Phone" aria-required="true" aria-invalid="false">
                </div>
              </li>
              <li id="field_4_8" class="gfield dealer-field-right gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                <label class="gfield_label" for="input_4_8">Email<span class="gfield_required">*</span></label>
                <div class="ginput_container ginput_container_email">
                  <input name="input_8" id="input_4_8" type="text" value="" class="medium" tabindex="4" placeholder="Email" aria-required="true" aria-invalid="false">
                </div>
              </li>
              <li id="field_4_6" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                <label class="gfield_label" for="input_4_6">Your Zipcode</label>
                <div class="ginput_container ginput_container_text">
                  <input name="input_6" id="input_4_6" type="text" value="" class="medium" tabindex="5" placeholder="Your Zipcode" aria-invalid="false">
                </div>
              </li>
              <li id="field_4_4" class="gfield dealer-field-right gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                <label class="gfield_label" for="input_4_4">Products You Are Interested In<span class="gfield_required">*</span></label>
                <div class="ginput_container ginput_container_select">
                  <select name="input_4" id="input_4_4" class="medium gfield_select" tabindex="6" aria-required="true" aria-invalid="false">
                    <option value="" selected="selected" class="gf_placeholder">Products You Are Interested In</option>
                    <option value="Corn Feeders">Corn Feeders</option>
                    <option value="Protein Feeders">Protein Feeders</option>
                    <option value="Specialty Products">Specialty Products</option>
                  </select>
                </div>
              </li>
              <li id="field_4_7" class="gfield message-text field_sublabel_below field_description_below gfield_visibility_visible">
                <label class="gfield_label" for="input_4_7">Comments</label>
                <div class="ginput_container ginput_container_textarea">
                  <textarea name="input_7" id="input_4_7" class="textarea medium" tabindex="7" placeholder="Comments" aria-invalid="false" rows="10" cols="50"></textarea>
                </div>
              </li>
            </ul>
          </div>
          <div class="gform_footer top_label">
            <input type="submit" id="gform_submit_button_4" class="gform_button button" value="SEND YOUR INFO" tabindex="8" />
          </div>
        </form>
      </div>
    </div>
    <div class="product">
      <div class="product-row flex-container">
        <img class="product-image" src="obf/..." alt="" />
        <div class="product-description">
          <h3></h3>
          <p></p>
        </div>
      </div>
      <!-- End of the form  -->
    </div>


    <div class="slick-outer block-container-centered ob-carousel">
      <!-- Start Carousel  -->
      <div class="slick slider-home">
        <div class="product">
          <div class="product-row flex-container-row">
            <div class="product-media">
              <img class="product-image" src="/assets/images/slider/home/Gril_page-1024x896-0x200.jpg" alt="GRILLS & FIRE PITS" />
            </div>
            <div class="product-description">
              <h1>GRILLS & FIRE PITS</h1>
              <p>Includes fire poker – $525 30” JUNIOR FIRE PIT (LEFT) Includes swivel grill, Dutch oven support, fire poker & ash pan – $925 36-40” TEXAS SIZE FIRE PIT (RIGHT) Features swivel grill, Dutch oven support, fire poker & ash pan – $1125</p>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="product-row flex-container-row">
            <div class="product-media">
              <img class="product-image" src="/assets/images/slider/home/shooting-bench-1024x1024-0x200.png" alt="SHOOTING BENCH" />
            </div>
            <div class="product-description">
              <h1>SHOOTING BENCH</h1>
              <p>Portable with swivel seat. Shown with MB Ranch King’s shooting system (not included). $500</p>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="product-row flex-container-row">
            <div class="product-media">
              <img class="product-image" src="/assets/images/slider/home/1EZ-Clean-Cart-w-deer-005-300x225-0x200.jpg" alt="E-Z CLEAN CART" />
            </div>
            <div class="product-description">
              <h1>E-Z CLEAN CART</h1>
              <p>Cleaning a deer doesn’t have to be a back-breaking job! $500</p>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="product-row flex-container-row">
            <div class="product-media">
              <img class="product-image" src="/assets/images/slider/home/posing-cartRGBcropped_20141009-1024x708-0x200.jpg" alt="POSING CART" />
            </div>
            <div class="product-description">
              <h1>POSING CART</h1>
              <p>Preserves your trophy for the perfect photo $500</p>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="product-row flex-container-row">
            <div class="product-media">
              <img class="product-image" src="/assets/images/slider/home/Caping-Table-Rick-bkgd-867x1024-0x200.png" alt="CAPING CART" />
            </div>
            <div class="product-description">
              <h1>CAPING CART</h1>
              <p>Makes caping an easier one-man job $500</p>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="product-row flex-container-row">
            <div class="product-media">
              <img class="product-image" src="/assets/images/slider/home/All_grtballoffire_20140929-1024x512-0x200.png" alt="GREAT BALL OF FIRE WILDLIFE SCENE EMBELLISHED FIRE PIT" />
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
              <img class="product-image" src="/assets/images/slider/home/Game-Rack-758x1024-0x200.png" alt="GAME RACK" />
            </div>
            <div class="product-description">
              <h1>GAME RACK</h1>
              <p>Portable with quartz lighting & 4 winches (800 Lb. Capacity each) $1000</p>
            </div>
          </div>
        </div>
        <div class="product">
          <div class="product-row flex-container-row">
            <div class="product-media">
              <img class="product-image" src="/assets/images/slider/home/MICROWAVE-GRILL_09232013-1024x819-0x200.png" alt="MICRO-WAVE GRILL" />
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
              <img class="product-image" src="/assets/images/slider/home/EZ-lift-on-truck-639x10241-0x200.png" alt="E-Z LIFT LOADER" />
            </div>
            <div class="product-description">
              <h1>E-Z LIFT LOADER</h1>
              <p>Locking swivel design allows easy loading of animal from ground or vehicle. Faatures heavy-duty brake. $375</p>
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



    
  </main>
<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
