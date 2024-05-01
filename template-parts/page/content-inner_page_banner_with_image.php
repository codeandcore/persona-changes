<?php

$banner_image = get_sub_field('banner_image');

$image_for_mobile_banner = get_sub_field('image_for_mobile_banner');

$banner_small_title = get_sub_field('banner_small_title');

$banner_title = get_sub_field('banner_title');

$banner_tagline = get_sub_field('banner_tagline');

$banner_button_text = get_sub_field('banner_button_text');

$banner_button_link = get_sub_field('banner_button_link');

$sm_height = get_sub_field('sm_height');

$center_banner_image = get_sub_field('center_banner_image');

$background_white = get_sub_field('background_white');

$extra_bottom_space = get_sub_field('extra_bottom_space');

$display_banner_button                   = get_sub_field('display_banner_button');

$banner_button_type                     = get_sub_field('banner_button_type');

$banner_popup                           = get_sub_field('banner_popup');

$on_banner_pop_up_title                 = get_sub_field('on_banner_pop_up_title');

$on_banner_pop_up_sub_title             = get_sub_field('on_banner_pop_up_sub_title');

$pop_up_close_icon                      = get_sub_field('pop_up_close_icon');

$pop_up_email_icon                      = get_sub_field('pop_up_email_icon');

$after_submit_pop_up_content            = get_sub_field('after_submit_pop_up_content');

$pop_up_close_title                     = get_sub_field('pop_up_close_title');

$bg_image = '';

$case_studies_banner 					= get_sub_field('case_studies_banner'); 

$popup_book_demo_button                 = get_field('blogpopup_book_demo_button','options');
$random_string                          = random_string_creator(); 

$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($url,'co/') !== false) {
    $check = 1;
}else{
    $check = 0;
}
?>

<?php if($banner_button_type == "Popup" ): ?>

    <div class="popup partner_pop" data-id="hubpop_<?php echo $random_string; ?>">
    
        <div class="popup_overlay"></div>
    
        <div class="popup_wrap text-center">
            <div class="popup_container">
                <div class="popup_header">
                    <div class="text-left popup_heading">
                        <?php if($on_banner_pop_up_title): ?><h2><?php echo $on_banner_pop_up_title ; ?></h2><?php endif; ?>
                        <?php if($on_banner_pop_up_sub_title): ?><h4><?php echo $on_banner_pop_up_sub_title ; ?></h4><?php endif; ?>
                    </div>
    
                    <a href="javascript:;" class="close_icon close_btn">
    
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
                            formId: "<?php echo $banner_popup; ?>",
                            formInstanceId:'th_<?php echo $random_string; ?>',
                            onFormSubmitted: function($form) {                          
                                $("[data-id='hubpop_<?php echo $random_string; ?>']").removeClass("show-modal");
                                $(".th_<?php echo $random_string; ?>").addClass("show-modal");
                            }
                        });
                    </script>
    
                        <div class="thankyou-popup">
    
                            <div class="close_icon close_btn">
    
                                <?php if($pop_up_close_icon): ?>                       
    
                                    <img src="<?php echo $pop_up_close_icon['url']; ?>" alt="<?php echo $pop_up_close_icon['alt']; ?>">
    
                                <?php endif; ?>
    
                            </div>
    
                            <figure>
    
                                <?php if($pop_up_email_icon): ?>                       
    
                                    <img src="<?php echo $pop_up_email_icon['url']; ?>" alt="<?php echo $pop_up_email_icon['alt']; ?>">
    
                                <?php endif; ?>
    
                            </figure>
    
                            <?php if($after_submit_pop_up_content || $pop_up_close_title): ?>
    
                            <div class="content">
    
                                <?php if($after_submit_pop_up_content): ?>   
    
                                <?php echo $after_submit_pop_up_content; ?>
    
                                <?php endif; ?>    
    
                                <?php if($pop_up_close_title): ?>   
    
                                <a href="javascript:;" class="btn"><?php echo $pop_up_close_title; ?></a>
    
                                <?php endif; ?>    
    
                            </div>
    
                            <?php endif; ?>    
    
                        </div>
    
                    </div>
                     <?php if($popup_book_demo_button): ?>
                    <div class="book-demo-btn">
                        <a data-popup="bookcalender" href="javascript:;" class="btn"><?php echo $popup_book_demo_button['title']; ?></a>
                    </div>
                    <?php endif; ?>
    
                </div>
            </div>
    
        </div>
    
    </div>
    
    <div class="popup blog_btp thankyou-popup th_<?php echo $random_string; ?>" data-id="thankyou-modal">
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

<?php if($check == 0): ?>
<?php  if( $banner_image != "" || $banner_small_title != "" || $banner_title != "" ): ?>

<div class="pos_rel bannerWrap <?php if($case_studies_banner): echo 'cs_banner'; endif; ?> <?php if($sm_height): echo 'sm-banner'; endif; ?> <?php if($extra_bottom_space): echo 'bottom_space'; endif; ?> <?php if($background_white): echo 'bg_white'; endif; ?> ">

    <!-- Banner Starts -->

    <div class="banner banner_bg <?php if($center_banner_image): echo 'center_img'; endif; ?>" <?php if($banner_image): ?> style="background-image: url(<?php echo $banner_image['url'];?>);" <?php endif; ?>>
        <?php if($image_for_mobile_banner): ?>
        <div class="is_mobile_banner_img" style="background-image: url(<?php echo $image_for_mobile_banner['url'];?>);"></div>
        <?php endif; ?>
        <div class="container">

            <div class="text-center head_txt pos_rel " >

                <?php if($banner_small_title):?>

                <span class="text-orange"><?php echo $banner_small_title;?></span>

                <?php endif; ?>

                <?php if($banner_title):?>

                <?php echo $banner_title;?>

                <?php endif; ?>

                <?php if($banner_tagline):?>

                <?php echo $banner_tagline;?>
                

                <?php endif; ?>

                <?php if ($display_banner_button && $banner_button_text && $banner_button_type == "Link") { ?>

                    <a href="<?php echo $banner_button_link; ?>" class="btn"><?php echo $banner_button_text; ?></a>

                <?php } ?>

                <?php if ($display_banner_button && $banner_button_text && $banner_button_type == "Popup") { ?>

                <a href="#" data-popup="hubpop_<?php echo $random_string; ?>" class="btn hubspotbtn"><?php echo $banner_button_text; ?></a>

                <?php } ?>

            </div>

        </div>

    </div>

    <!-- Banner Ends -->

    <!-- Banner Border Starts -->

    <div class="bottom_border move_border">
        <img src="<?php echo get_template_directory_uri()."/assets/images/border_rotate.png"; ?>" alt="border_rotate">
        <img src="<?php echo get_template_directory_uri()."/assets/images/mobile_border_rotate.png";  ?>" class="mobile"  alt="border_rotate">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1910" height="163" viewBox="0 0 1910 163" fill="none">
            <path d="M-50.9996 0.815866C448.299 202.912 1329 223.571 1909.5 12.3879" stroke="#F38A04" />
        </svg> -->

    </div>

    <!-- Banner Border Ends -->

</div>

<?php endif; ?>
<?php endif; ?>

<!-- Custom CTA popup Starts -->