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
  <h1>Contact Us</h1>
  <div class="form gform-contact">
    <div class="gform_wrapper" id="gform_wrapper_1">
    <form method="post" enctype="multipart/form-data" id="gform_1" action="http://outbackfeeders.com/obf/mail/mail.php">
      <input type="hidden" name="recipients" value="myaddress" />
          <input type="hidden" name="good_url" value="/" />
          <input type="hidden" name="subject" value="Outback Contact Us Form" />
          <input type="hidden" name="csvfile" value="mail-contactpage.csv" />
          <input type="hidden" name="logfile" value="mail-contactpage.log" />
          <input type="hidden" name="derive_fields" value="ipaddr = REMOTE_ADDR,
                                  realname = firstname + lastname,
                                  browser = HTTP_USER_AGENT, 
                                  referrer = HTTP_REFERER, 
                                  DateTime = %'Date of form submission was: '% . %date% + %time%" />
          <input type="hidden" name="csvcolumns"
              value="DateTime:cs,ipaddr:cs,email:c,
              firstname:c,lastname:c,phone:cs,
              browser:c,referrer:c,message:r" />
          <input type="hidden" name="required"
              value="email:Your email address,
              firstname:Your first name,
              lastname:Your last name,
              phone:Your phone number,
              imgverify:Please type the image text" />
        <div class="gform_heading">
          <h3 class="gform_title">Please fill all the fields before submitting form</h3>
          <span class="gform_description"></span>
        </div>
        <div class="gform_body">
          <ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
            <li id="field_1_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="firstname">First Name
                <span class="gfield_required">*</span>
              </label>
              <div class="ginput_container ginput_container_text">
                <input placeholder="First Name" name="firstname" id="firstname" type="text" value="" class="medium" tabindex="1" aria-required="true"
                  aria-invalid="false">
              </div>
            </li>
            <li id="field_1_2" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="lastname">Last Name
                <span class="gfield_required">*</span>
              </label>
              <div class="ginput_container ginput_container_text">
                <input placeholder="Last Name" name="lastname" id="lastname" type="text" value="" class="medium" tabindex="2" aria-required="true"
                  aria-invalid="false">
              </div>
            </li>
            <li id="field_1_3" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="email">Email<span class="gfield_required">*</span></label>
              <div class="ginput_container ginput_container_email">
                <input name="email" id="email" type="text" value="" class="medium" tabindex="4" placeholder="Email" aria-required="true" aria-invalid="false">
              </div>
            </li>
            <li id="field_1_4" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="phone">Phone<span class="gfield_required">*</span></label>
              <div class="ginput_container ginput_container_text">
                <input name="phone" id="phone" type="text" value="" class="medium" tabindex="3" placeholder="Phone" aria-required="true" aria-invalid="false">
              </div>
            </li>
            <li id="field_1_5" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="message">Message / Comments</label>
              <div class="ginput_container ginput_container_textarea">
                <textarea placeholder="Message / Comments" name="message" id="message" class="textarea medium" tabindex="5" aria-invalid="false" rows="10"
                  cols="50"></textarea>
              </div>
            </li>
            <li id="field_1_6" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="input_1_6">Captcha</label>
              <div class="ginput_container imgverify">
                <img src="http://outbackfeeders.com/obf/mail/verifyimg.php" alt="Image verification" name="vimg" />
                <input type="text" size="12" name="imgverify" placeholder="Enter image text" />
              </div>
            </li>
          </ul>
        </div>
        <div class="gform_footer top_label">
          <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Submit" tabindex="7">

        </div>
      </form>
    </div>
    <h2>
      903.734.6774 Shop&nbsp; &nbsp;903.734.4210 Office&nbsp;&nbsp;&nbsp; 5197 FM 2685 &ndash; Gilmer TX 75645&nbsp;
      Email <a href="mailto:outbackwildlifefeeders@yahoo.com">rickmeritt@yahoo.com</a>
    </h2>
    <p></p>
    <p>&nbsp;</p>
  </div>

</main>
<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
