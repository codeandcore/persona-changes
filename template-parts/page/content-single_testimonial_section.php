<?php
    $person_photo                      = get_sub_field('person_photo');
    $person_name                       = get_sub_field('person_name');
    $person_logo                       = get_sub_field('person_logo');
    $person_designation                = get_sub_field('person_designation');  
    $testimonial                       = get_sub_field('testimonial');   
    $rating                            = get_sub_field('rating');   
      
    $random_string                     = random_string_creator();  
    $show_hbspt_cta                    = get_sub_field('show_hbspt_cta');   
    $testimonial_button_text           = get_sub_field('testimonial_button_text');   
    $testimonial_button_url            = get_sub_field('testimonial_button_url');  
    $testimonial_button_will_open      = get_sub_field('testimonial_button_will_open');  
    $hbspt_cta_button_text             = get_sub_field('hbspt_cta_button_text');   
    $hbspt_cta_id                      = get_sub_field('hbspt_cta_id');   
    $hbspt_cta_popup_title             = get_sub_field('hbspt_cta_popup_title');   
    $hbspt_cta_popup_content           = get_sub_field('hbspt_cta_popup_content');   
    $hbspt_cta_thankyou_popup_title    = get_sub_field('hbspt_cta_thankyou_popup_title');   
    $hbspt_cta_thankyou_popup_content  = get_sub_field('hbspt_cta_thankyou_popup_content');   
    
?>

<?php if( $person_photo != "" || $person_name != "" || $person_logo != "" || $person_designation != "" || $testimonial != "" || $rating != "" ): ?>   
<!-- Testimonial Section Ends -->

<section class="testimonial iv_testimonial">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-5 iv_testimonial_img animatable fadeInDown">
                <?php if($person_photo): ?>
                <figure>
                    <img src="<?php echo $person_photo['url']; ?>" alt="<?php echo $person_photo['alt']; ?>">
                </figure>
                <?php endif; ?>
            </div>

            <div class="col-7 iv_testimonial_content animatable fadeInDown">

                <div class="fadeInLeft animatable" data-delay="1000">
                    <?php if( $rating ): ?>   
                    <div class="star">
                        <svg width="150" height="31" viewBox="0 0 150 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <?php    
                            for ($i=1; $i <= $rating; $i++) { 
                                $agora_rating = "agora_rating_".$i;  
                                $agora_rating();
                            }                     
                            ?>                        
                        </svg>
                    </div>
                    <?php endif; ?>

                    <?php if($testimonial): ?> 
                    <?php echo $testimonial; ?>
                    <?php endif; ?>                

                    <div class="testimonial_profileName">
                        <?php if($person_name): ?> 
                        <h4><?php echo $person_name; ?></h4>
                        <?php endif; ?>

                        <?php if($person_logo): ?> 
                        <img class="single_testimonial_person_logo" src="<?php echo $person_logo['url']; ?>" alt="<?php echo $person_logo['alt']; ?>">
                        <?php endif; ?>

                        <?php if($person_designation): ?> 
                        <span><?php echo $person_designation; ?></span>
                        <?php endif; ?>
                    </div>

                    <?php if($show_hbspt_cta){ ?> 
                        <div class="compStates_connect">
                            <a data-popup='hubpop_<?php echo $random_string; ?>' href="javascript:;" class="right_btn reverse_bb orange-round"><div class="arrow-round"></div><?php echo $hbspt_cta_button_text; ?></a>
                        </div>
                    <?php }else{
                        if( !empty($testimonial_button_url) && !empty($testimonial_button_text) ):
                        ?>
                        <div class="compStates_connect">
                            <a href="<?php echo $testimonial_button_url; ?>" target="<?php echo $testimonial_button_will_open; ?>" class="right_btn reverse_bb orange-round"><div class="arrow-round"></div><?php echo $testimonial_button_text; ?></a>
                        </div>
                        <?php
                        endif;
                    } ?>
                </div>
            </div>

        </div>

    </div>
    <div class="popup" data-id="hubpop_<?php echo $random_string; ?>">
    <div class="popup_overlay"></div>
    <div class="popup_wrap text-center">
        <div class="popup_container">
            <div class="popup_header">
                <div class="text-left popup_heading">
                    <?php if($hbspt_cta_popup_title): ?><h2><?php echo $hbspt_cta_popup_title ; ?></h2><?php endif; ?>
                    <?php if($hbspt_cta_popup_content): ?><h4><?php echo $hbspt_cta_popup_content ; ?></h4><?php endif; ?>
                </div>
                <a href="javascript:;" class="close_icon close_btn">                   
                    <img src="<?php echo get_template_directory_uri()."/assets/images/close_icon_contact.svg"; ?>" alt="popup close icon" />
                </a>
            </div>
            <div class="popup_body">
                <div class="contact-form">                                   
                    <script>
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "7402724",
                            formId: "<?php echo $hbspt_cta_id; ?>",
                            formInstanceId:'th_<?php echo $random_string; ?>',
                            onFormSubmitted: function($form) {                          
                                $("[data-id='hubpop_<?php echo $random_string; ?>']").removeClass("show-modal");
                                $(".th_<?php echo $random_string; ?>").addClass("show-modal");
                            }
                        });
                    </script>
                </div>
                <div class="book-demo-btn">
                    <a data-popup="bookcalender" href="javascript:;" class="btn">Book directly on our calendar</a>               
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Custom CTA popup Ends -->

<div class="blog_btp thankyou-popup popup th_<?php echo $random_string; ?>">
    <div class="popup_overlay"></div>
    <div class="popup_wrap text-center">
        <div class="popup_container">
            <div class="popup_header">
                <a href="javascript:;" class="close_btn">                   
                    <img src="<?php echo get_template_directory_uri()."/assets/images/close_icon_contact.svg"; ?>" alt="popup close icon" />    
                </a>
            </div>
            <div class="popup_body">
                <figure>
                    <img src="<?php echo get_template_directory_uri()."/assets/images/contact_email_icon.svg"; ?>" alt="popup message icon" />
                </figure>
                <div class="content">
                    <?php if($hbspt_cta_thankyou_popup_title): ?>
                        <h3><?php echo $hbspt_cta_thankyou_popup_title; ?></h3>
                    <?php endif; ?>   
                    
                    <?php if($hbspt_cta_thankyou_popup_content): ?>
                        <p><?php echo $hbspt_cta_thankyou_popup_content; ?></p>
                    <?php endif; ?>
                        
                    <a href="javascript:;" onclick="history.go(0)" class="btn overflow-hide" >Close</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
</section>

<!-- Testimonial Section Ends -->
<?php endif; ?>


