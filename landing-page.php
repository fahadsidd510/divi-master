<?php
/*
Template Name: Landing Page
*/
get_header('landing');
$page_id = get_the_ID();

/** BANNER SECTION ** */
$banner_heading = get_field('landing_banner_heading', $page_id);
$banner_image = get_field('landing_banner_image', $page_id);
$banner_buttons = get_field('need_buttons_for_banner', $page_id);
$call_now_button_text = get_field('landing_page_call_now_button_text', $page_id);
$call_now_button_phone_num = get_field('landing_page_call_now_phone_no', $page_id);
$text_now_button_text = get_field('landing_page_text_now_button_text', $page_id);
$text_now_button_phone_num = get_field('landing_page_text_now_phone_no', $page_id);

/** BANNER FORM SECTION ** */
$banner_contact_form_heading = get_field('banner_contact_form_heading', $page_id);
$banner_form_shortcode = get_field('banner_form_shortcode', $page_id);

/** PREGNANCY SECTION ** */
$pragnancy_image = get_field('landing_pregnancy_section_image', $page_id);
$pragnancy_content = get_field('landing_pregnancy_section_content', $page_id);
$pragnancy_buttons = get_field('need_buttons_for_pregnacy', $page_id);

/** SERVICES SECTION ** */
$services_heading = get_field('landing_services_heading', $page_id);
$landing_services_repeater = get_field('landing_services_repeater', $page_id);
$add_service_bottom_text = get_field('add_service_bottom_text', $page_id);
$service_buttons = get_field('need_buttons_for_services', $page_id);

/** ADOPTION SECTION ** */
$adoption_image = get_field('landing_adoption_section_image', $page_id);
$adoption_content = get_field('add_adoption_section_content', $page_id);
$adoption_buttons = get_field('need_buttons_for_adoption', $page_id);

/** AGENCY SECTION ** */
$agency_section_heading = get_field('add_agency_section_heading', $page_id);
$first_agency_name = get_field('first_agency_name', $page_id);
$first_agency_services_rep = get_field('first_agency_services_rep', $page_id);
$second_agency_name = get_field('second_agency_name', $page_id);
$second_agency_services_rep = get_field('second_agency_services_rep', $page_id);
$agency_bottom_heading = get_field('agency_bottom_heading', $page_id);
$agency_bottom_location_shortcode = get_field('agency_bottom_location_shortcode', $page_id);

/** CONTACT SECTION ** */
$add_contact_image = get_field('add_contact_image', $page_id);
$add_contact_heading = get_field('add_contact_heading', $page_id);
$add_contact_form_shortcode = get_field('add_contact_form_shortcode', $page_id);

/** DOWNLOAD SECTION ** */
$add_download_image = get_field('add_download_image', $page_id);
$add_download_content = get_field('add_download_content', $page_id);
$add_download_button_text = get_field('add_download_button_text', $page_id);
$add_download_file = get_field('add_download_file', $page_id);

?>
<section class="hero-banner">
  <div class="lp-container">
       <div class="hero-content ">
          <div class="hero-text">
            <?php if($banner_heading) : ?>
            <h1><?php echo $banner_heading;?></h1>
            <?php endif; ?>
            <?php if($banner_buttons == 'yes') : ?>
            <div class="landing-buttons">
              <a href="tel:<?php echo $call_now_button_phone_num;?>" class="landing-btn call-now-btn"><?php echo $call_now_button_text;?></a>
              <a href="sms:<?php echo $text_now_button_phone_num;?>" class="landing-btn text-now-btn"><?php echo $text_now_button_text;?></a>
            </div>
            <?php endif;?>
          </div>
          <?php if($banner_image) : ?>
          <div class="hero-image">
            <img src="<?php echo $banner_image['url'];?>" alt="<?php echo $banner_image['alt'];?>">
          </div>
          <?php endif; ?>
       </div><!-- hero-content -->
  </div>
</section>

</div><!-- page-top-section -->


<section class="banner-form-section">
  <div class="lp-container">
      <div class="banner-horizontal-form">
          <?php if($banner_contact_form_heading) : ?>
          <div class="staff-contact">
            <h2><?php echo $banner_contact_form_heading;?></h2>
          </div>
          <?php endif; ?>
          <?php if($banner_form_shortcode) : ?>
          <div class="landing-banner-form">
            <?php echo do_shortcode($banner_form_shortcode); ?>
          </div>
          <?php endif; ?>
        </div>
    </div>
</section>

<section>
    <div class="lp-container">
          <div class="pragnancy-content">
            <?php if($pragnancy_image) : ?>
            <div class="pragnancy-image">
              <img src="<?php echo $pragnancy_image['url'];?>" alt="<?php echo $pragnancy_image['alt'];?>">
            </div>
            <?php endif; ?>
            <?php if($pragnancy_content) : ?>
            <div class="pragnancy-text">
              <?php echo $pragnancy_content;?>
              <?php if($pragnancy_buttons == 'yes') : ?>
              <div class="landing-buttons">
                <a href="tel:<?php echo $call_now_button_phone_num;?>" class="landing-btn call-now-btn"><?php echo $call_now_button_text;?></a>
                <a href="sms:<?php echo $text_now_button_phone_num;?>" class="landing-btn text-now-btn"><?php echo $text_now_button_text;?></a>
              </div>
              <?php endif;?>
            </div>
            <?php endif; ?>
          </div>
    </div><!-- lp-container -->
 </section>

<section>
      <div class="adoption-services">
        <div class="lp-container">
              <div class="adoption-services-content">
                <?php if($services_heading):?>
                <h2><?php echo $services_heading;?></h2>
                <?php endif; ?>
                <?php if($landing_services_repeater): ?>
                <div class="service-process">
                  <?php foreach($landing_services_repeater as $service):
                    $service_icon = $service['add_landing_service_icon'];
                    $service_icon_url = $service_icon['url'];
                    $service_icon_alt = $service_icon['alt'];
                    $service_name = $service['add_landing_service_text'];
                  ?>
                  <div class="service-step">
                    <img src="<?php echo $service_icon_url;?>" alt="<?php echo $service_icon_alt;?>">
                    <h4><?php echo $service_name;?></h4>
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <?php echo $add_service_bottom_text;?>
              </div>
            </div>
        </div>

      <?php if($service_buttons == 'yes') : ?>
      <div class="middle-button-section landing-container">
          <div class="landing-buttons">
            <a href="tel:<?php echo $call_now_button_phone_num;?>" class="landing-btn call-now-btn"><?php echo $call_now_button_text;?></a>
            <a href="sms:<?php echo $text_now_button_phone_num;?>" class="landing-btn text-now-btn"><?php echo $text_now_button_text;?></a>
          </div>
      </div>
      <?php endif;?>
</section>



  <section>
    <div class="lp-container">
        <div class="pragnancy-content pragnancy-content-giveup">
          <?php if($adoption_content):?>
          <div class="pragnancy-text-giveup pragnancy-text">
            <?php echo $adoption_content;?>
            <?php if($adoption_buttons == 'yes') : ?>
            <div class="landing-buttons">
              <a href="tel:<?php echo $call_now_button_phone_num;?>" class="landing-btn call-now-btn"><?php echo $call_now_button_text;?></a>
              <a href="sms:<?php echo $text_now_button_phone_num;?>" class="landing-btn text-now-btn"><?php echo $text_now_button_text;?></a>
            </div>
            <?php endif;?>
          </div>
          <?php endif; ?>
          <?php if($adoption_image) : ?>
          <div class="pragnancy-image pragnancy-image-giveup">
            <img src="<?php echo $adoption_image['url'];?>" alt="<?php echo $adoption_image['alt'];?>">
          </div>
          <?php endif; ?>
        </div>
      </div>
</section>



  <section class="landing-tab-section-wrap">
    <div class="lp-container">

      <div class="landing-tab-section">
        <?php if($agency_section_heading):?>
        <h2><?php echo $agency_section_heading;?></h2>
        <?php endif; ?>
        <div class="landing-tabs-wrap">

        <!-- Tab Navigation -->
          <div class="tab__bar">
            <div class="tab__navigation">
              <ul class="tab__menu">
                <li class="tab__btn active" id="agency-1"><?php echo $first_agency_name;?></li>
                <li class="tab__btn" id="agency-2"><?php echo $second_agency_name;?></li>
              </ul>
            </div>
          </div>
          <!-- Tab Content -->
          <div class="tab__content">
            <!-- Tab 1 -->
            <?php if($first_agency_services_rep): ?>
            <div class="tab active">
              <div class="agency-grid">
                <?php foreach($first_agency_services_rep as $first_agency):
                  $first_agency_icon = $first_agency['add_first_agency_service_icon'];
                  $first_agency_icon_url = $first_agency_icon['url'];
                  $first_agency_icon_alt = $first_agency_icon['alt'];
                  $first_agency_text = $first_agency['add_first_agency_service_text'];
                ?>
                <div class="agency">
                  <img src="<?php echo $first_agency_icon_url;?>" alt="<?php echo $first_agency_icon_alt;?>">
                  <h4><?php echo $first_agency_text;?></h4>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <?php endif; ?>
            <?php if($second_agency_services_rep): ?>
            <!-- Tab 2 -->
            <div class="tab">
              <div class="agency-grid">
                <?php foreach($second_agency_services_rep as $second_agency):
                  $second_agency_icon = $second_agency['add_second_agency_service_icon'];
                  $second_agency_icon_url = $second_agency_icon['url'];
                  $second_agency_icon_alt = $second_agency_icon['alt'];
                  $second_agency_text = $second_agency['add_second_agency_service_text'];
                ?>
                <div class="agency">
                  <img src="<?php echo $second_agency_icon_url;?>" alt="<?php echo $second_agency_icon_alt;?>">
                  <h4><?php echo $second_agency_text;?></h4>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <?php endif; ?>
          </div>

        </div><!-- landing-tabs-wrap -->

      </div>

    </div><!-- lp-container -->
  </section>



  <section>
    <div class="lp-container">
      <?php if($agency_bottom_heading):?>
      <div class="landing-location-section">
        <h2><?php echo $agency_bottom_heading;?><?php echo do_shortcode($agency_bottom_location_shortcode);?></h2>
      </div>
      <?php endif; ?>
    </div>
  </section>


  <section class="landing-contact-section" id="contact">
    <div class="lp-container">
        <div class="contact-info-section">
          <?php if($add_contact_image) : ?>
          <div class="contact-section-image">
            <img src="<?php echo $add_contact_image['url'];?>" alt="<?php echo $add_contact_image['alt'];?>">
          </div>
          <?php endif; ?>
          <?php if($add_contact_heading):?>
          <div class="contact-section-content">
            <?php echo $add_contact_heading;?>
            <?php echo do_shortcode($add_contact_form_shortcode); ?>
          </div>
          <?php endif; ?>
        </div>
    </div>
  </section>


  <section>
    <div class="lp-container">
      <?php if($add_download_content):?>
      <div class="landing-download-section landing-container">
        <div class="download-section">
          <?php if($add_download_image) : ?>
          <div class="doc-download-icon">
            <img src="<?php echo $add_download_image['url'];?>" alt="<?php echo $add_download_image['alt'];?>">
          </div>
          <?php endif; ?>
          <?php if($add_download_content) : ?>
          <div class="doc-download-text">
            <?php echo $add_download_content;?>
          </div>
          <?php endif; ?>
          <?php if($add_download_button_text && $add_download_file) : ?>
          <div class="doc-download-btn">
            <a href="<?php echo $add_download_file['url'];?>" download class="landing-btn call-now-btn"><?php echo $add_download_button_text;?></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>


<?php
get_footer('landing');
?>