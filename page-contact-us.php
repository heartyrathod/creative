<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if (!isset($_SESSION)) {
  session_start();
}
get_header();

?>
<main class="cud-main">
  <?php include("banner.php"); ?>
  <section class="cud-contact">
    <div class="container">
      <div class="cud-contact-wrap px-xxl-7 px-xl-7 px-lg-5 px-md-4 px-sm-0 px-0 my-xxl-5 my-xl-5 my-lg-4 my-3 d-flex flex-column flex-wrap gap-4">
        <h2>Interested in working with us?</h2>
        <p class="mb-xxl-3 mb-xl-3 mb-lg-3 mb-md-2 mb-sm-1 mb-0">In case you face any problem filling up the form below - please feel free to send us your requirements / questions at <a href="mailto:info@creativeuidesign.com">info@creativeuidesign.com</a>. Our professional experts are available to answer all your queries.You can use the form below to send us your valuable feedback or call us on our Number at any time of the day!</p>
        <form action="" method="POST" id="cud-contact-form">
          <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="cud-name" class="form-label">Name</label>
                <input type="text" class="form-control" name="cud_name" id="cud_name" placeholder="John Deo" maxlength="100" >
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="cud-email" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="cud_email" id="cud_email" placeholder="johndeo@gmail.com">
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="cud-phone" class="form-label">Phone</label>
                <div class="cud_phone_select d-flex gap-1">
                  <select class="form-select" name="cud_phone_code" id="cud_phone_code" title="Phone Code">
                    <option value="+1">+1</option>
                    <?php
                      $c_code = array('+1','+93','+358','+355','+213','+1684','+376','+244','+1264','+672','+1268','+54','+374','+297','+61','+43','+994','+1242','+973','+880','+1246','+375','+32','+501','+229','+1441','+975','+591','+599','+387','+267','+55','+55','+246','+673','+359','+226','+257','+855','+237','+238','+1345','+236','+235','+56','+86','+61','+672','+57','+269','+242','+242','+682','+506','+225','+385','+53','+599','+357','+420','+45','+253','+1767','+1809','+593','+20','+503','+240','+291','+372','+251','+500','+298','+679','+358','+33','+594','+689','+262','+241','+220','+995','+49','+233','+350','+30','+299','+1473','+590','+1671','+502','+44','+224','+245','+592','+509','+0','+39','+504','+852','+36','+354','+91','+62','+98','+964','+353','+44','+972','+39','+1876','+81','+44','+962','+7','+254','+686','+850','+82','+381','+965','+996','+856','+371','+961','+266','+231','+218','+423','+370','+352','+853','+389','+261','+265','+60','+960','+223','+356','+692','+596','+222','+230','+262','+52','+691','+373','+377','+976','+382','+1664','+212','+258','+95','+264','+674','+977','+31','+599','+687','+64','+505','+227','+234','+683','+672','+1670','+47','+968','+92','+680','+970','+507','+675','+595','+51','+63','+64','+48','+351','+1787','+974','+262','+40','+7','+250','+590','+290','+1869','+1758','+590','+508','+1784','+684','+378','+239','+966','+221','+381','+381','+248','+232','+65','+721','+421','+386','+677','+252','+27','+500','+211','+34','+94','+249','+597','+47','+268','+46','+41','+963','+886','+992','+255','+66','+670','+228','+690','+676','+1868','+216','+90','+7370','+1649','+688','+256','+380','+971','+44','+598','+998','+678','+58','+84','+1284','+1340','+681','+212','+967','+260','+263');
                      foreach($c_code as $code){
                    ?>
                      <option value="<?= $code; ?>"><?= $code; ?></option>
                    <?php } ?>
                  </select>
                  <input type="text" data-mask="___-_______" pattern="(000)-\d{6}" class="form-control cud_phone" name="cud_phone" id="cud_phone" maxlength="14" placeholder="___-_______">
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label for="cud-service" class="form-label">Services</label>
                <select class="form-select" name="cud_services" id="cud_services" title="Services">
                  <option disabled="" selected="">Select service</option>
                  <option value="Mobile App Design">Mobile App Design </option>
                  <option value="Web Design">Web Design</option>
                  <option value="Branding Design">Branding Design</option>
                  <option value="Hire Dedicated UI Designer">Hire Dedicated UI Designer</option>
                </select>
              </div>
            </div>
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label for="cud-message" class="form-label">Message</label>
                <textarea class="form-control" name="cud_mesaage" id="cud_mesaage" rows="5" maxlength="500"></textarea>
              </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="g-recaptcha cud-captcha d-flex flex-wrap flex-row gap-3" id="recaptcha1">
                <span class="cud-valid-code d-flex flex-row flex-wrap align-items-center justify-content-between">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/home/icons8-refresh-30.png" class="cud-refresh" onclick="refreshCaptcha()" alt="Change Captcha" title="Change Captcha">
				  <img src="<?php echo get_stylesheet_directory_uri(); ?>/captcha.php" class="cud-code h-100 w-auto" id='captcha_image' alt="PHP Captcha" title="PHP Captcha">
                </span>
                <div class="form-group">
                  <input type="text" placeholder="enter captcha code" class="form-control" name="cud_captcha" id="cud_captcha" maxlength="6">
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 d-flex justify-content-end align-items-start">
              <input type="hidden" name="action" value="cud_contact_form">
              <button type="submit" id="contact_btn" name="contact_btn" class="next cud-btn cud-btn-mobile d-flex flex-row flex-wrap align-items-center justify-content-center border-0 rounded-5 fw-medium">Submit</button>
            </div>
          </div>
          <div class="contactsuccess mt-4" role="alert" style="display:none"></div>
        </form>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
