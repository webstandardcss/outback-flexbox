<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "";
$pageTitleTag = $siteName . "Outback Feeders" . $pageTitle;
$pageDescription = $siteName  . "" . $pageTitle;
$pageKeywords = $pageTitle . "" . $siteKeywords;
$extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>
  <main class="ob-main flex-container">
    <h1>Welcome to Outback!</h1>
    <p>It all began in 1981 with Rick Meritt building custom steel fences and buildings as 3-M Steel Construction. Named 3-M (three Meritts) to include his wife and son.</p>
    <p>As he built all over Texas, Rick developed products that better suited his first love – Hunting. Hence, Outback Wildlife Feeders was created and began with a single deer feeder. The product line has expanded to include about four dozen hunting, fishing and ranch equipment items.</p>
    <p>Outback products are “Built Right the First Time, to Last a Lifetime”, withstanding extreme weather, wind and wildlife abuse.</p>
    <p>All Outback products are innovatively designed and built at the original location in Gilmer, Texas. Made with only high quality American steel and craftsmanship, all products are 100% Satisfaction Guaranteed.</p>
    <div class="form dealer-form">
      <h2>Apply to Become a Dealer Today</h2>

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
              <li id="field_4_5" class="gfield dealer-field-right field_sublabel_below field_description_below gfield_visibility_visible">
                <label class="gfield_label" for="input_4_5">Company Name</label>
                <div class="ginput_container ginput_container_text">
                  <input name="input_5" id="input_4_5" type="text" value="" class="medium" tabindex="2" placeholder="Company Name" aria-invalid="false">
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
                <label class="gfield_label" for="input_4_6">Location</label>
                <div class="ginput_container ginput_container_text">
                  <input name="input_6" id="input_4_6" type="text" value="" class="medium" tabindex="5" placeholder="Location" aria-invalid="false">
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
    </div>
    
  </main>
<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
