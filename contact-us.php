<?php require_once(dirname(__FILE__) . "/inc/config.php"); ?>

<?php // Page data
$pageTitle = "Contact Us";
$pageTitleTag = $siteName . "Outback Feeders" . $pageTitle;
$pageDescription = $siteName . "Contact Outback Feeders" . $pageTitle;
$pageKeywords = $pageTitle . "Contact Outback Feeders" . $siteKeywords;
$extraCss = array("forms")
?>

<?php require_once(dirname(__FILE__) . "/inc/header.php"); ?>
<main class="ob-main flex-container">
  <h1>Contact Us</h1>
  <div class="main span8" role="main">


    <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1">
      <form method="post" enctype="multipart/form-data" id="gform_1" action="">
        <div class="gform_heading">
          <h3 class="gform_title">Please fill all the fields before submitting form</h3>
          <span class="gform_description"></span>
        </div>
        <div class="gform_body">
          <ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
            <li id="field_1_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="input_1_1">First Name
                <span class="gfield_required">*</span>
              </label>
              <div class="ginput_container ginput_container_text">
                <input name="input_1" id="input_1_1" type="text" value="" class="medium" tabindex="1" aria-required="true"
                  aria-invalid="false">
              </div>
            </li>
            <li id="field_1_2" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="input_1_2">Last Name
                <span class="gfield_required">*</span>
              </label>
              <div class="ginput_container ginput_container_text">
                <input name="input_2" id="input_1_2" type="text" value="" class="medium" tabindex="2" aria-required="true"
                  aria-invalid="false">
              </div>
            </li>
            <li id="field_1_3" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="input_1_3">Email
                <span class="gfield_required">*</span>
              </label>
              <div class="ginput_container ginput_container_email">
                <input name="input_3" id="input_1_3" type="text" value="" class="medium" tabindex="3" aria-required="true" aria-invalid="false">
              </div>
            </li>
            <li id="field_1_4" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="input_1_4">Phone</label>
              <div class="ginput_container ginput_container_phone">
                <input name="input_4" id="input_1_4" type="text" value="" class="medium" tabindex="4" aria-invalid="false">
              </div>
            </li>
            <li id="field_1_5" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="input_1_5">Message/Comments</label>
              <div class="ginput_container ginput_container_textarea">
                <textarea name="input_5" id="input_1_5" class="textarea medium" tabindex="5" aria-invalid="false" rows="10"
                  cols="50"></textarea>
              </div>
            </li>
            <li id="field_1_6" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
              <label class="gfield_label" for="input_1_6">Captcha</label>
              <div id="input_1_6" class="ginput_container ginput_recaptcha" data-sitekey="6LdnsL4SAAAAADHLcyRW7M_XUSvttpFk4BzItB4W"
                data-stoken="nfLNaYqYst8Y2l0dLMY2B6UlGI-5L3-AiDU6bXd7XGDlBlS-8JKm8rAe2Jfa97h9ey43KMV67IYCQwdWij-mdg" data-theme="light"
                data-tabindex="6">
                <div style="width: 304px; height: 78px;">
                  <div>
                    <iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LdnsL4SAAAAADHLcyRW7M_XUSvttpFk4BzItB4W&amp;co=aHR0cDovL291dGJhY2tmZWVkZXJzLmNvbTo4MA..&amp;hl=en&amp;v=v1522970272143&amp;theme=light&amp;size=normal&amp;stoken=nfLNaYqYst8Y2l0dLMY2B6UlGI-5L3-AiDU6bXd7XGDlBlS-8JKm8rAe2Jfa97h9ey43KMV67IYCQwdWij-mdg&amp;cb=87u3l6a8d5e9"
                      width="304" height="78" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                      tabindex="6"></iframe>
                  </div>
                  <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="gform_footer top_label">
          <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Submit" tabindex="7">

        </div>
      </form>
    </div>
    903.734.6774 Shop&nbsp; &nbsp;903.734.4210 Office&nbsp;&nbsp;&nbsp; 5197 FM 2685 – Gilmer TX 75645&nbsp;
    Email
    <a href="mailto:outbackwildlifefeeders@yahoo.com">rickmeritt@yahoo.com</a>
    <p></p>
    <p>&nbsp;</p>
  </div>

</main>
<?php require_once(dirname(__FILE__) . "/inc/footer.php"); ?>