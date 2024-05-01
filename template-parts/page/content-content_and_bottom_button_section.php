 <?php
 $content_detail        = get_sub_field('content_detail');
 $button_type           = get_sub_field('button_type');
 $content_button_text   = get_sub_field('content_button_text');
 $content_button_link   = get_sub_field('content_button_link');
 $banner_popup                           = get_sub_field('banner_popup');
 $pop_up_close_icon                      = get_sub_field('pop_up_close_icon');
 $pop_up_email_icon                      = get_sub_field('pop_up_email_icon');
 $content_pop_up_title                   = get_sub_field('content_pop_up_title');
 $content_pop_up_sub_title               = get_sub_field('content_pop_up_sub_title');
 $after_submit_pop_up_content            = get_sub_field('after_submit_pop_up_content');
 $pop_up_close_title                     = get_sub_field('pop_up_close_title');
 $random_string                          = random_string_creator();  
 ?>
<?php if( $content_detail ||  $content_button_text ||  $content_button_link): ?>
<section class="podcast bg_white"> 
    <div class="container">       
  
        <div class="podcast-bottom-cta text-center animatable fadeInUp" data-delay="200">
            <?php if( $content_detail ): ?>
            <p><?php echo $content_detail; ?></p>
            <?php endif; ?>

            <?php if($button_type == "Link"):?>
                <a href="<?php echo $content_button_link;?>" class="btn"><?php echo $content_button_text;?></a>
            <?php endif; ?>
            <?php if($button_type == "Popup"):?>
                <a href="javascript:;" class="btn hubspotbtn" data-popup="hubpop_<?php echo $random_string; ?>"><?php echo $content_button_text;?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if( $button_type == "Popup" ): ?>
<!-- Custom CTA popup Starts -->
<div class="popup" data-id="hubpop_<?php echo $random_string; ?>">
    <div class="popup_overlay"></div>
    <div class="popup_wrap text-center">
        <div class="popup_container">
            <div class="popup_header">
            <div class="text-left popup_heading">
                <?php if($content_pop_up_title): ?>
                <h2><?php  echo $content_pop_up_title; ?></h2>  
                <?php endif; ?>
                <?php if($content_pop_up_sub_title): ?>
                <p><?php  echo $content_pop_up_sub_title; ?></p>  
                <?php endif; ?> 
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
                            formId: "<?php echo $banner_popup; ?>",
                            formInstanceId:'th_<?php echo $random_string; ?>',
                            onFormSubmitted: function($form) {                          
                                $("[data-id='hubpop_<?php echo $random_string; ?>']").removeClass("show-modal");
                                $(".th_<?php echo $random_string; ?>").addClass("show-modal");
                            }
                        });
                    </script>                   
                </div>
                
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