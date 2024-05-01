<?php 
$small_title = get_sub_field('small_title');
$title = get_sub_field('title');
$g2_content = get_sub_field('g2_content');
$button_popup = get_sub_field('button_popup');
$rating_logos = get_sub_field('rating_logos');
$contact_form = get_sub_field('contact_form',false,false);
$thank_you_title = get_sub_field('thank_you_title');
$thank_you_sub_title = get_sub_field('thank_you_sub_title');
$thank_you_content = get_sub_field('thank_you_content');
$thank_you_button_text = get_sub_field('thank_you_button_text');
$thank_you_button_url = get_sub_field('thank_you_button_url');
$pop_up_close_icon = get_sub_field('pop_up_close_icon');
$pop_up_email_icon = get_sub_field('pop_up_email_icon');
$random_string                          = random_string_creator();  

$g2_badges = get_field('g2_badges');
$contact_form_title = get_sub_field('contact_form_title');

//add_action('wpcf7_mail_sent', 'sent_contact_form_7');
if($small_title != "" || $title != "" || $g2_content != "" || $g2_badges != "" || $contact_form_title != "" || $rating_logos != "" || $contact_form != "" || $thank_you_title != "" || $thank_you_content != "" || $thank_you_button_url != "" ):?>
    <!-- Management Market Starts -->
    <section class="management-market g2-Form compairison">
        <div class="container">
            <div class="row justify-between align-items-center">
                <div class="col-6 info_text desktop-view">
                    
                    <?php if($small_title):?>
                        <div class="myHeading">
                            <h1><?php echo $small_title;?></h1>
                        </div>
                        <!-- <p class=""></p> -->
                    <?php endif; ?>
                    <div class="with-line animatable animated">
                        <?php if($title):?>
                            <?php echo $title;?>
                        <?php endif; ?>
                    </div>
                    <div class="small_p">
                        <?php if($g2_content):?>
                            <?php echo $g2_content;?>
                        <?php endif; ?>
                    </div>

                    <!-- <?php if(have_rows('g2_badges')):?>
                        <ul class="badges b-spacing d-flex no-listed certificate-wrap">
                            <?php while(have_rows('g2_badges')): the_row();?>
                                <li class="certificate-logo">
                                    <img src="<?php echo get_sub_field(g2_badge)['url'];?>" alt="<?php echo get_sub_field(g2_badge)['alt'];?>" />
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?> -->
                    <?php if(have_rows('rating_list','options')):?>
                    <ul class="g2Reviews ratings no-listed d-flex " >
                        <?php 
                        $p = 1;
                        while(have_rows('rating_list','options')): the_row();?>
                        <li>
                            <a class="d-flex" href="<?php echo get_sub_field('brand_link');?>" target="_blank">
                                <div class="logo">
                                    <?php if(get_sub_field('icon')):?>
                                    <img src="<?php echo get_sub_field('icon')['url'];?>"
                                        alt="<?php echo get_sub_field('icon')['alt'];?>">
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
                </div>
                <div class="col-6  text-center ">
                    <div class="top_view info_text mobile-view">
                        <?php if($small_title):?>
                            <p class=""><?php echo $small_title;?></p>
                        <?php endif; ?>
                        <div class="with-line animatable animated">
                            <?php if($title):?>
                                <?php echo $title;?>
                            <?php endif; ?>
                        </div>
                        <div class="custom_p myPere">
                            <?php if($g2_content):?>
                                <?php echo $g2_content;?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="" >
                        <div class="blob_wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="427.477" height="377.51" viewBox="0 0 427.477 377.51">
                                <path>
                                    <animate attributeName="d" dur="16s" repeatCount="indefinite" values="
                                    M426,304Q379,358,332.5,407Q286,456,216,443Q146,430,82.5,382Q19,334,57,264Q95,194,125,139.5Q155,85,215.5,92.5Q276,100,323.5,124.5Q371,149,422,199.5Q473,250,426,304Z;M426,311Q395,372,342,420.5Q289,469,222,442Q155,415,107.5,367Q60,319,45.5,244.5Q31,170,102.5,144Q174,118,231,77Q288,36,332,90Q376,144,416.5,197Q457,250,426,311Z;M412,302.5Q376,355,332,409.5Q288,464,223,437Q158,410,99,368Q40,326,44.5,251.5Q49,177,91,112.5Q133,48,211,37Q289,26,364,59Q439,92,443.5,171Q448,250,412,302.5Z;M426,327.5Q434,405,355.5,404Q277,403,219,403.5Q161,404,128,355Q95,306,81.5,245Q68,184,103,120Q138,56,208,73Q278,90,342,104.5Q406,119,412,184.5Q418,250,426,327.5Z;M426,304Q379,358,332.5,407Q286,456,216,443Q146,430,82.5,382Q19,334,57,264Q95,194,125,139.5Q155,85,215.5,92.5Q276,100,323.5,124.5Q371,149,422,199.5Q473,250,426,304Z;"></animate>
                                </path>
                            </svg>
                        </div>
                        <?php if($contact_form): ?>
                        <div class="contact-form contact-me-form g2sForm">
                            <div class="form-title text-center">
                                <?php if($contact_form_title):?>
                                    <p><?php echo $contact_form_title;?></p>
                                <?php endif; ?>
                            </div>                           
                             <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "7402724",
                                    formId: "<?php echo $contact_form; ?>",
                                    formInstanceId:'th_<?php echo $random_string; ?>',
                                    onFormSubmitted: function($form) {                          
                                        $("[data-id='hubpop_<?php echo $random_string; ?>']").removeClass("show-modal");
                                        $(".th_<?php echo $random_string; ?>").addClass("active");
                                    }
                                });
                            </script>
                            <div class="thankyou-popup thankyou_bookdemo th_<?php echo $random_string; ?>">
                                <a href="javascript:;" onclick="history.go(0)" class="close_icon">
                                    <?php if($pop_up_close_icon): ?>
                                    <img src="<?php echo $pop_up_close_icon['url']; ?>"
                                        alt="<?php echo $pop_up_close_icon['alt']; ?>">
                                    <?php endif; ?>
                                </a>
                                <figure>
                                    <?php if($pop_up_email_icon): ?>
                                    <img src="<?php echo $pop_up_email_icon['url']; ?>"
                                        alt="<?php echo $pop_up_email_icon['alt']; ?>">
                                    <?php endif; ?>
                                </figure>
                                <?php if($thank_you_content || $thank_you_button_text || $pop_up_close_button_url || $pop_up_close_button_url_open_tab): ?>
                                <div class="content">
                                    <?php if($thank_you_title): ?>
                                    <h5><?php echo $thank_you_title; ?></h5>
                                    <?php endif; ?>       

                                    <?php if($thank_you_content): ?>
                                    <?php echo $thank_you_content; ?>
                                    <?php endif; ?>
                                    <?php if($thank_you_button_text && $thank_you_button_url){ ?>
                                    <a href="<?php echo $thank_you_button_url; ?>"
                                        target="<?php echo $pop_up_close_button_url_open_tab; ?>"
                                        class="btn overflow-hide"><?php echo $thank_you_button_text; ?></a>
                                    <?php }else{
                                    ?><a href="javascript:;" onclick="history.go(0)" class="btn overflow-hide"><?php echo $thank_you_button_text; ?></a><?php
                                    } ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                       
                        <?php endif; ?> 
                    </div>
                    <div class="bottom_view info_text mobile-view">
                    
                                    
                    <!-- <?php if(have_rows('g2_badges')):?>
                        <div class="swiperWrapper">
                            <div class="swiper certificate-slider">
                                <div class="swiper-wrapper">
                                    <?php while(have_rows('g2_badges')): the_row();?>
                                        <div class="certificate-slide swiper-slide">
                                            <img src="<?php echo get_sub_field(g2_badge)['url'];?>" alt="<?php echo get_sub_field(g2_badge)['alt'];?>" />
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?> -->
                    <div class="small_p g2Content">
                        <?php if($g2_content):?>
                            <?php echo $g2_content;?>
                        <?php endif; ?>
                    </div>
                    <?php if(have_rows('rating_list','options')):?>
                    <ul class="g2Reviews ratings no-listed d-flex " >
                        <?php 
                        $p = 1;
                        while(have_rows('rating_list','options')): the_row();?>
                        <li>
                            <a class="d-flex" href="<?php echo get_sub_field('brand_link');?>" target="_blank">
                                <div class="logo">
                                    <?php if(get_sub_field('icon')):?>
                                    <img src="<?php echo get_sub_field('icon')['url'];?>"
                                        alt="<?php echo get_sub_field('icon')['alt'];?>">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Management Market Ends -->
    <?php endif; ?>

    
    