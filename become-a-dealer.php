<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Contact Us";
$pageTitleTag = $siteName . " Outback Feeders " . $pageTitle;
$pageDescription = $siteName . "Contact Outback Feeders " . $pageTitle;
$pageKeywords = $pageTitle . " Contact Outback Feeders " . $siteKeywords;
$extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>
<main class="ob-main flex-container cushycms">
  <h1>Become a Dealer</h1>
  <a href="outback-dealers.php">Find a dealer</a>
  <div class="form gform-dealer">
    <h2>Apply to Become a Dealer Today</h2>

    <div class="gform_wrapper" id="gform_wrapper_4">
      <form method="post" enctype="multipart/form-data" id="gform_1" action="http://outbackfeeders.com/obf/mail/mail.php">
          <input type="hidden" name="recipients" value="myaddress" />
          <input type="hidden" name="good_url" value="/" />
          <input type="hidden" name="subject" value="Outback Become a Dealer Form" />
          <input type="hidden" name="csvfile" value="mail-dealer.csv" />
          <input type="hidden" name="logfile" value="mail-dealer.log" />
          <input type="hidden" name="derive_fields" value="ipaddr = REMOTE_ADDR,
                                  browser = HTTP_USER_AGENT, 
                                  referrer = HTTP_REFERER, 
                                  DateTime = %'Date of form submission was: '% . %date% + %time%" />
          <input type="hidden" name="csvcolumns"
              value="DateTime:cs,ipaddr:cs,email:c,
              realname:c,companyname:c,phone:cs,location:c,
              product:r,browser:c,referrer:c,message:r" />
          <input type="hidden" name="required"
              value="email:Your email address,
              realname:Your name,
              companyname:Your company name,
              phone:Your phone number,
              location:Your primary location,
              product:The reason you're interested in our product" />
        <div class="gform_body">
          <ul id="gform_fields_4" class="gform_fields top_label form_sublabel_below description_below">
            <li id="field_4_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="realname">Name<span class="gfield_required">*</span></label>
              <div class="ginput_container ginput_container_text">
                <input name="realname" id="realname" type="text" value="" class="medium" tabindex="1" placeholder="Name" aria-required="true" aria-invalid="false">
              </div>
            </li>
            <li id="field_4_5" class="gfield dealer-field-right field_sublabel_below field_description_below gfield_visibility_visible">
            <label class="gfield_label" for="companyname">Company Name<span class="gfield_required">*</span></label>
              <div class="ginput_container ginput_container_text">
                <input name="companyname" id="companyname" type="text" value="" class="medium" tabindex="1" placeholder="Company Name" aria-required="true" aria-invalid="false">
              </div>
            </li>
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
              <label class="gfield_label" for="location">Location</label>
              <div class="ginput_container ginput_container_text">
                <input name="location" id="location" type="text" value="" class="medium" tabindex="5" placeholder="Location" aria-invalid="false">
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
            <li id="field_4_7" class="gfield message-text field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="message">Comments</label>
              <div class="ginput_container ginput_container_textarea">
                <textarea name="message" id="message" class="textarea medium" tabindex="7" placeholder="Comments" aria-invalid="false" rows="10" cols="50"></textarea>
              </div>
            </li>
            <li id="field_4_8" class="gfield image-verify field_sublabel_below field_description_below gfield_visibility_visible">
                <label class="gfield_label" for="comments">Comments</label>
                <div class="ginput_container imgverify">
                  <img src="http://outbackfeeders.com/obf/mail/verifyimg.php" alt="Image verification" name="vimg" />
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
  </div>
</main>
<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
