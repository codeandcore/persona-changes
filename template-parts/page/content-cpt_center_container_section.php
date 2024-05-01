<?php
 $sub_title = get_sub_field('sub_title');
 $title = get_sub_field('title');
 $payment_list = get_sub_field('payment_list');
 $button_text = get_sub_field('button_text');
 $button_url = get_sub_field('button_url');
 $button_type = get_sub_field('cpt_button_type');
 $button_popup = get_sub_field('button_popup');
 $pop_up_title                           = get_sub_field('cptpop_up_title');
 $popup_sub_title                        = get_sub_field('popup_sub_title');
 $popup_book_demo_button                 = get_sub_field('popup_book_demo_button');
 $pop_up_close_icon                      = get_sub_field('pop_up_close_icon');
 $pop_up_email_icon                      = get_sub_field('pop_up_email_icon');
 $after_submit_pop_up_content            = get_sub_field('after_submit_pop_up_content');
 $pop_up_close_title                     = get_sub_field('pop_up_close_title');
 $random_string                          = random_string_creator();  
 if($title != '' || $button_text != '' ):
 ?>
<!-- Tack Expert Section Starts -->
<section class="tack_expert bg_white">
    <div class="container">
        <div class="ads_banner animatable fadeInUp" data-delay="200">
            <div class="zIndex innerWrap">
                <div class="learn_more">
                    <?php if($title):?>
                    <?php echo $title;?>
                    <?php endif; ?>
                </div>
                <?php if($button_type == "Link"):?>
                    <a href="<?php echo $button_url;?>" class="btn"><?php echo $button_text;?></a>
                <?php endif; ?>
                <?php if($button_type == "Popup"):?>
                    <a href="javascript:;" class="btn hubspotbtn" data-popup="hubpop_<?php echo $random_string; ?>"><?php echo $button_text;?></a>
                <?php endif; ?>
            </div>
            <div class="line_bg desktop-line"
                style="background-image: url(<?php echo get_template_directory_uri()."/assets/images/pricing-line-desktop.svg"?>);">
            </div>
            <div class="line_bg mobile-line"
                style="background-image: url(<?php echo get_template_directory_uri()."/assets/images/pricing_line.svg"?>);">
            </div>
        </div>
    </div>
</section>
<!-- Tack Expert Section Ends -->
<?php endif; ?>

<?php if( $button_type == "Popup" ): ?>
<!-- Custom CTA popup Starts -->
<div class="popup" data-id="hubpop_<?php echo $random_string; ?>">
    <div class="popup_overlay"></div>
    <div class="popup_wrap text-center">
        <div class="popup_container">
            <div class="popup_header">
                <div class="text-left popup_heading">
                    <?php if($pop_up_title): ?><h2><?php echo $pop_up_title ; ?></h2><?php endif; ?>
                    <?php if($popup_sub_title): ?><h4><?php echo $popup_sub_title ; ?></h4><?php endif; ?>
                </div>
                <a href="javascript:;" class="close_btn">                   
                    <?php if($pop_up_close_icon): ?>                       
                        <img src="<?php echo $pop_up_close_icon['url']; ?>" alt="<?php echo $pop_up_close_icon['alt']; ?>">
                    <?php endif; ?>    
                </a>
            </div>
            <div class="popup_body">
                <div class="contact-form">  
                    <script>
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "7402724",
                            formId: "<?php echo $button_popup; ?>",
                            formInstanceId:'th_<?php echo $random_string; ?>',
                            onFormSubmitted: function($form) {                          
                                $("[data-id='hubpop_<?php echo $random_string; ?>']").removeClass("show-modal");
                                $(".th_<?php echo $random_string; ?>").addClass("active");
                            }
                        });
                    </script>
                   
                </div>
                <?php if($popup_book_demo_button): ?>
                <div class="book-demo-btn">
                    <a href="<?php echo $popup_book_demo_button['url']; ?>" class="btn" target="<?php echo $popup_book_demo_button['target']; ?>"><?php echo $popup_book_demo_button['title']; ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="popup blog_btp th_<?php echo $random_string; ?> thankyou-popup" data-id="thankyou-modal">
    <div class="popup_overlay"></div>
    <div class="popup_wrap text-center">
        <div class="popup_container">
            <div class="popup_header">
                <a href="javascript:;" class="close_btn">
                    <?php if($pop_up_close_icon): ?>
                    <img src="<?php echo $pop_up_close_icon['url']; ?>"
                        alt="<?php echo $pop_up_close_icon['alt']; ?>">
                    <?php endif; ?>
                </a>
            </div>
            <div class="popup_body">
                <div class="thankyou-popup">
                    <figure>
                        <?php if($pop_up_email_icon): ?>
                        <img src="<?php echo $pop_up_email_icon['url']; ?>"
                            alt="<?php echo $pop_up_email_icon['alt']; ?>">
                        <?php endif; ?>
                    </figure>
                    <?php if($after_submit_pop_up_content || $pop_up_close_title || $pop_up_close_button_url || $pop_up_close_button_url_open_tab): ?>
                    <div class="content">
                        <?php if($after_submit_pop_up_content): ?>
                        <?php echo $after_submit_pop_up_content; ?>
                        <?php endif; ?>
                        <?php if($pop_up_close_title && $pop_up_close_button_url){ ?>
                        <a href="<?php echo $pop_up_close_button_url; ?>"
                            target="<?php echo $pop_up_close_button_url_open_tab; ?>"
                            class="btn overflow-hide"><?php echo $pop_up_close_title; ?></a>
                        <?php }else{
        ?><a href="javascript:;" onClick="window.location.reload();"
                            class="btn overflow-hide"><?php echo $pop_up_close_title; ?></a><?php
        } ?>
                    </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Custom CTA popup Ends -->
<?php endif; ?>
