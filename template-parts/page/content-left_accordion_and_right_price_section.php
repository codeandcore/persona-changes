 <?php

 $sub_title = get_sub_field('sub_title');

 $main_title = get_sub_field('main_title');

 $faq_list = get_sub_field('faq_list');

 $start_from_title = get_sub_field('start_from_title');

 $per_month_price_title = get_sub_field('per_month_price_title',false,false,false);

 $price_sub_title = get_sub_field('price_sub_title');

 $start_button_type = get_sub_field('start_button_type');

 $start_button_text = get_sub_field('start_button_text');

 $start_button_url = get_sub_field('start_button_url');

 $start_button_popup_content = get_sub_field('start_button_popup_content');
 $start_button_pop_up_title = get_sub_field('start_button_pop_up_title');
 $start_pop_up_close_icon = get_sub_field('start_pop_up_close_icon');
 $start_button_pop_up_sub_title = get_sub_field('start_button_pop_up_sub_title');
 $pop_up_demo_calender_button = get_sub_field('pop_up_demo_calender_button');
 $start_button_popup_book_demo_button = get_sub_field('start_button_popup_book_demo_button');
 $start_button_popup_book_demo_button_link = get_sub_field('start_button_popup_book_demo_button_link');
 $pop_up_close_icon = get_sub_field('pop_up_close_icon');
 $pop_up_email_icon = get_sub_field('pop_up_email_icon');
 $after_submit_pop_up_content = get_sub_field('after_submit_pop_up_content');
 $pop_up_close_title = get_sub_field('pop_up_close_title');

 $random_string                          = random_string_creator();  
 $book_demo_button_text                  = get_field('book_demo_button_text','options');
 if($sub_title != '' || $main_title != '' || $faq_list != '' || $start_from_title != '' || $per_month_price_title != '' || $price_sub_title != '' || $start_button_text != ''):

 ?>

 <!-- Pricing Section Starts -->

 <section class="pricing_wrap">

    <div class="container">

        <div class="content">

            <div class="wrap_pricing">

                
                <div class="right_pricing animatable fade" data-delay="1000">
                        <div class="right_pricing_wrap">
    
                        <div class="right_pricing_sidebar" id="sidebar_price">
    
                           
    
                                <?php  if($start_from_title != ''):?>
    
                                    <h5><?php echo $start_from_title;?></h5>
    
                                <?php endif; ?>
    
                                <?php  if($per_month_price_title != ''):?>
    
                                <?php echo $per_month_price_title;?>
    
                                <?php endif; ?>
    
                                <?php  if($price_sub_title != ''):?>
    
                                    <p><?php echo $price_sub_title;?></p>
    
                                <?php endif; ?>
    
                                <?php  if($start_button_type == "link" && $start_button_text != ''):?>
    
                                    <a href="<?php echo $start_button_url;?>" class="btn"><?php echo $start_button_text;?></a>
    
                                <?php endif; ?>
    
                                <?php  if($start_button_type == "popup" && $start_button_text != ''):?>
    
                                    <a href="#" class="btn hubspotbtn" data-popup="hubpop_<?php echo $random_string; ?>"><?php echo $start_button_text;?></a>
                                    <!-- <a href="#" class="btn hubspotbtn" data-popup="popupContainer-pricing"><?php echo $start_button_text;?></a> -->
                                    
                                <?php endif; ?>
    
                           
    
                        </div>
    
                    </div>
                </div>
                    <div class="left_pricing">

                        <div class="heading_price">

                            <?php  if($sub_title != ''):?>

                            <h6 class="animatable fade"><?php echo $sub_title;?></h6>

                            <?php endif; ?>

                            <div class="with-line sm-height animatable">

                                <?php  if($main_title != ''):?>

                                <?php echo $main_title;?>

                                <?php endif; ?>

                            </div>

                        </div>

                        <?php if(have_rows('faq_list')):?>

                        <div class="pricing_tabing">

                            <?php while(have_rows('faq_list')): the_row();?>

                            <div class="collapse animatable fadeInUp" data-delay="1400">

                                <?php  if(get_sub_field('faq_feature_title')):?>

                                <a href="javascript:void(0)" class="accordion">

                                    <?php echo get_sub_field('faq_feature_title');?>

                                    <span class="arrow_accor">                                

                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path d="M12.4999 12.8944L16.2812 9.11316L17.3613 10.1933L12.4999 15.0547L7.63855 10.1933L8.71869 9.11316L12.4999 12.8944Z" fill="#595959"/>

                                        </svg>

                                    </span>

                                </a>

                                <?php endif; ?>

                                <div class="panel">

                                    <?php while(have_rows('faq_feature_list')): the_row();?>

                                    <div class="list_box">

                                        <div class="left_list">

                                            <?php  if(get_sub_field('faq_feature_text')):?>

                                            <h6><?php echo get_sub_field('faq_feature_text');?></h6>

                                            <?php endif; ?>

                                            <?php  if(get_sub_field('faq_feature_tooltip')):?>

                                            <span class="icon">

                                                <div class="tooltip">

                                                    <div class="tooltip-content">

                                                    <?php echo get_sub_field('faq_feature_tooltip');?>

                                                    </div>

                                                </div>

                                            </span>

                                            <?php endif; ?>

                                        </div>

                                        <?php  if(get_sub_field('faq_feature_check_icon')):?>

                                        <div class="right_mark">

                                            <img src="<?php echo get_sub_field('faq_feature_check_icon')['url'];?>" alt="">

                                        </div>

                                        <?php endif; ?>

                                    </div>

                                    <?php endwhile; ?>

                                </div>

                            </div>

                        <?php endwhile; ?>

                        </div>

                        <?php endif; ?>

                    </div>

            </div>

        </div>

    </div>

</section>

<!-- Pricing Section Ends -->
<?php endif; ?>

    <?php if( $start_button_type == "popup" ): ?>
        <!--<div class="popup popup-initial" data-id="popupContainer-pricing">
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
                        <figure>
                            <img src="<?php echo get_template_directory_uri()."/assets/images/popup-initial-img.svg"; ?>"/>
                        </figure>
                        <?php if(get_field('initial_popup_title','option')): ?>
                            <?php echo get_field('initial_popup_title','option'); ?>
                        <?php endif; ?>
    
                        <?php if(get_field('initial_popup_content','option')): ?>
                            <p><?php echo get_field('initial_popup_content','option'); ?></p>
                        <?php endif; ?>
                        
                        <div class="popup_body-btnWrap">
                            <a href="#" class="btn hubspotbtn" data-popup="hubpop_<?php echo $random_string; ?>" role="button">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M20.5 12.5V6.8C20.5 5.11984 20.5 4.27976 20.173 3.63803C19.8854 3.07354 19.4265 2.6146 18.862 2.32698C18.2202 2 17.3802 2 15.7 2H9.3C7.61984 2 6.77976 2 6.13803 2.32698C5.57354 2.6146 5.1146 3.07354 4.82698 3.63803C4.5 4.27976 4.5 5.11984 4.5 6.8V17.2C4.5 18.8802 4.5 19.7202 4.82698 20.362C5.1146 20.9265 5.57354 21.3854 6.13803 21.673C6.77976 22 7.61984 22 9.3 22H12.5M14.5 11H8.5M10.5 15H8.5M16.5 7H8.5M15 19L17 21L21.5 16.5" stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <span><?php echo $book_demo_button_text; ?></span>
                            </a>
                            <a data-popup="bookcalender" href="javascript:;" class="btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10H3M16 2V6M8 2V6M7.8 22H16.2C17.8802 22 18.7202 22 19.362 21.673C19.9265 21.3854 20.3854 20.9265 20.673 20.362C21 19.7202 21 18.8802 21 17.2V8.8C21 7.11984 21 6.27976 20.673 5.63803C20.3854 5.07354 19.9265 4.6146 19.362 4.32698C18.7202 4 17.8802 4 16.2 4H7.8C6.11984 4 5.27976 4 4.63803 4.32698C4.07354 4.6146 3.6146 5.07354 3.32698 5.63803C3 6.27976 3 7.11984 3 8.8V17.2C3 18.8802 3 19.7202 3.32698 20.362C3.6146 20.9265 4.07354 21.3854 4.63803 21.673C5.27976 22 6.11984 22 7.8 22Z" stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
    
                                <span><?php //echo $popup_book_demo_button; ?></span>
                                <span><?php echo "Schedule a meeting"; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>  -->
        <div class="popup" data-id="hubpop_<?php echo $random_string; ?>">
            <div class="popup_overlay"></div>
            <div class="popup_wrap s-height text-center">
                <div class="popup_container">
                    <div class="popup_header">
                        <div class="text-left popup_heading">
                            <!-- <span class="backBTN"> <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.77701 1.59279L9.77701 0.149657C9.77701 0.0245736 9.63134 -0.0445026 9.53298 0.0320412L1.00517 6.60547C0.932711 6.66108 0.874083 6.73228 0.833753 6.81366C0.793424 6.89503 0.77246 6.98442 0.77246 7.075C0.77246 7.16558 0.793424 7.25497 0.833753 7.33634C0.874083 7.41772 0.932711 7.48892 1.00517 7.54453L9.53297 14.118C9.63323 14.1945 9.777 14.1254 9.777 14.0003L9.777 12.5572C9.777 12.4657 9.7335 12.378 9.66161 12.322L2.85147 7.07593L9.66161 1.82802C9.7335 1.77201 9.77701 1.68427 9.77701 1.59279V1.59279Z" fill="#595959"/></svg> </span>
                            <figure>
                                <img src="<?php echo get_template_directory_uri()."/assets/images/popup-initial-img.svg"; ?>"/>
                            </figure>  -->
                            <?php if($start_button_pop_up_title): ?><h2><?php echo $start_button_pop_up_title ; ?></h2><?php endif; ?>
                            <?php if($start_button_pop_up_sub_title): ?><h4><?php echo $start_button_pop_up_sub_title ; ?></h4>
                            <?php endif; ?>
                        </div>
                        <a href="javascript:;" class="close_btn">
                            <?php if($start_pop_up_close_icon): ?>
                            <img src="<?php echo $start_pop_up_close_icon['url']; ?>"
                                alt="<?php echo $start_pop_up_close_icon['alt']; ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="popup_body">
                        <div class="contact-form">
                            <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "7402724",
                                    formId: "<?php echo $start_button_popup_content; ?>",
                                    formInstanceId:'th_<?php echo $random_string; ?>',
                                    onFormSubmitted: function($form) {                          
                                        $("[data-id='hubpop_<?php echo $random_string; ?>']").removeClass("show-modal");
                                        $(".th_<?php echo $random_string; ?>").addClass("show-modal");
                                    }
                                });
                            </script>
                        </div>
                        <?php if($pop_up_demo_calender_button && $start_button_popup_book_demo_button): ?>
                        <div class="book-demo-btn">
                            <a data-popup="bookcalender" href="javascript:;"
                                class="btn"><?php echo $start_button_popup_book_demo_button; ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog_btp popup thankyou-popup th_<?php echo $random_string; ?>" data-id="thankyou-modal">
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
    <?php endif; ?>