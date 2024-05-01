<?php 
    $banner_tagline                             = get_sub_field('banner_tagline');
    $banner_title                               = get_sub_field('banner_title');
    $banner_content                             = get_sub_field('banner_content');
    $april_fool_prank_hbspt_id                  = get_sub_field('april_fool_prank_hbspt_id');
    $april_fool_prank_hbspt_title               = get_sub_field('april_fool_prank_hbspt_title');
    $april_fool_prank_hbspt_success_msg         = get_sub_field('april_fool_prank_hbspt_success_msg');
    $april_fool_prank_hbspt_success_response    = get_sub_field('april_fool_prank_hbspt_success_response');   
    $random_string                              = random_string_creator();
?>
<!-- Banner Starts -->

<section class="april-fool-prank  bannerWrap banner_warp bg_white">
    <div class="pos_rel banner home_banner" role="banner">
        <div class="container">
            <div class="row">
                <div class="col-6 info_text">
                    <?php if( $banner_tagline ): ?>
                        <h1 role='heading' aria-level='1' class=""><?php echo $banner_tagline; ?></h1>
                    <?php endif; ?>
                    <div class="with-line sm-height animatable animated">                       
                        <?php if( $banner_title ): ?>
                            <span><?php echo $banner_title; ?></span>
                        <?php endif; ?>                     
                    </div>
                    <span class="desktop-info">
                        <div  class="text-content ">
                            <?php if( $banner_content ): ?>
                                <?php echo $banner_content; ?>
                            <?php endif; ?>
                        </div>
                        <?php if(have_rows('rating_list','options')):?>
                            <ul class="ratings no-listed d-flex " >
                                <?php 
                                    $p = 1;
                                    while(have_rows('rating_list','options')): the_row();?>
                                    <li>
                                        <a class="d-flex" href="<?php echo get_sub_field('brand_link');?>" target="_blank">
                                            <div class="logo">
                                                <?php if(get_sub_field('icon')):?>
                                                    <img src="<?php echo get_sub_field('icon')['url'];?>" alt="<?php echo get_sub_field('icon')['alt'];?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="content">
                                                <label for="rating_label_<?php echo $p; ?>" class="rating-label">
                                                    <?php if(get_sub_field('rating')):?>
                                                        <input id="rating_label_<?php echo $p; ?>" class="rating" max="5" readonly step="0.01" style="--value:4.90" type="range" value="<?php echo get_sub_field('rating');?>"> 
                                                    <?php endif; ?>
                                                </label>
                                                <?php if(get_sub_field('brand_name')):?>
                                                    <div class="rating_digit"><?php echo get_sub_field('brand_name');?> <?php if(get_sub_field('rating')){ echo ' / '.get_sub_field('rating');}?></div>
                                                <?php endif; ?>
                                            </div>
                                        </a>                                
                                    </li>
                                <?php $p++; endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </span>
                </div>
                <div class="col-6 info_form">
                    <div class="contact-form contact-me-form ext-form">
                        <?php if($april_fool_prank_hbspt_title): ?>
                        <div class="form-title text-center">
                            <p tabindex="0"><?php echo $april_fool_prank_hbspt_title; ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if($april_fool_prank_hbspt_id): ?>
                        <script>
                            hbspt.forms.create({
                                region: "na1",
                                portalId: "7402724",
                                formId: "<?php echo $april_fool_prank_hbspt_id; ?>",
                                formInstanceId:'th_<?php echo $random_string; ?>',
                                onFormSubmitted: function($form) {                          
                                    $("[data-id='hubpop_<?php echo $random_string; ?>']").removeClass("show-modal");
                                    $(".th_<?php echo $random_string; ?>").addClass("active");
                                }
                            });
                        </script>
                        <?php endif; ?>
                        
                        <div class="thankyou-popup thankyou_bookdemo th_<?php echo $random_string; ?>">
                            <a href="javascript:;" onclick="history.go(0)" class="close_icon">
                                <img src="<?php echo get_template_directory_uri()."/assets/images/close_icon_contact.svg"; ?>" alt="popup close icon" />
                            </a>
                            <figure> 
                                <img src="<?php echo get_template_directory_uri()."/assets/images/contact_email_icon.svg"; ?>" alt="popup message icon" />
                            </figure>

                        
                            <div class="content">
                                <?php if($april_fool_prank_hbspt_success_msg): ?>
                                <h5><?php echo $april_fool_prank_hbspt_success_msg; ?></h5>
                                <?php endif; ?>   

                                <?php if($april_fool_prank_hbspt_success_response): ?>
                                <p><?php echo $april_fool_prank_hbspt_success_response; ?></p>
                                <?php endif; ?>

                                <a href="javascript:;" onclick="history.go(0)" class="btn overflow-hide" >Close</a>
                            </div>
                        
                        </div>
                    </div>
                    <div class="info_text">
                        <span class="mob-info">
                            <div  class="text-content ">
                                <?php if( $banner_content ): ?>
                                    <?php echo $banner_content; ?>
                                <?php endif; ?>
                            </div>
                            <?php if(have_rows('rating_list','options')):?>
                                <ul class="ratings no-listed d-flex " >
                                    <?php 
                                        $p = 1;
                                        while(have_rows('rating_list','options')): the_row();?>
                                        <li>
                                            <a class="d-flex" href="<?php echo get_sub_field('brand_link');?>" target="_blank">
                                                <div class="logo">
                                                    <?php if(get_sub_field('icon')):?>
                                                        <img src="<?php echo get_sub_field('icon')['url'];?>" alt="<?php echo get_sub_field('icon')['alt'];?>">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="content">
                                                    <label for="rating_label_<?php echo $p; ?>" class="rating-label">
                                                        <?php if(get_sub_field('rating')):?>
                                                            <input id="rating_label_<?php echo $p; ?>" class="rating" max="5" readonly step="0.01" style="--value:4.90" type="range" value="<?php echo get_sub_field('rating');?>"> 
                                                        <?php endif; ?>
                                                    </label>
                                                    <?php if(get_sub_field('brand_name')):?>
                                                        <div class="rating_digit"><?php echo get_sub_field('brand_name');?> <?php if(get_sub_field('rating')){ echo ' / '.get_sub_field('rating');}?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </a>                                
                                        </li>
                                    <?php $p++; endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_border move_border home_bottom_border ">
            <img src="<?php echo get_template_directory_uri()."/assets/images/blob-line-home.png"; ?>" alt="border_rotate">
            <img src="<?php echo get_template_directory_uri()."/assets/images/mobile_border_rotate.png";  ?>" class="mobile"  alt="border_rotate">
        </div>
    </div>
</section>