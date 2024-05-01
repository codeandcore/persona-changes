<?php 
$small_title                = get_sub_field('small_title');
$title                      = get_sub_field('title');
$content_sub_title          = get_sub_field('content_sub_title');

$contact_form               = get_sub_field('contact_form');
$thank_you_title            = get_sub_field('thank_you_title');
$thank_you_sub_title        = get_sub_field('thank_you_sub_title');
$thank_you_content          = get_sub_field('thank_you_content');
$thank_you_button_text      = get_sub_field('thank_you_button_text');
$thank_you_button_url       = get_sub_field('thank_you_button_url');
$pop_up_close_icon          = get_sub_field('pop_up_close_icon');
$pop_up_email_icon          = get_sub_field('pop_up_email_icon');

$content_sub_points_list    = get_sub_field('content_sub_points_list');
$contact_form_title         = get_sub_field('contact_form_title');

$book_demo_button_text      = get_field('book_demo_button_text','options');
$book_demo_button_url       = get_field('book_demo_button_url','options');
$button_type                = get_field('button_type','options');
$random_string                          = random_string_creator();  
$svg_array = array('<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.75 6H16.4016C20.9725 6 23.2579 6 24.1255 6.82093C24.8754 7.53055 25.2077 8.57592 25.0052 9.58832C24.771 10.7595 22.9052 12.0793 19.1734 14.7188L13.0766 19.0312C9.34486 21.6707 7.47898 22.9905 7.24475 24.1617C7.04229 25.1741 7.37462 26.2194 8.12454 26.9291C8.9921 27.75 11.2775 27.75 15.8484 27.75H17.25M10.5 6C10.5 8.48528 8.48528 10.5 6 10.5C3.51472 10.5 1.5 8.48528 1.5 6C1.5 3.51472 3.51472 1.5 6 1.5C8.48528 1.5 10.5 3.51472 10.5 6ZM31.5 27C31.5 29.4853 29.4853 31.5 27 31.5C24.5147 31.5 22.5 29.4853 22.5 27C22.5 24.5147 24.5147 22.5 27 22.5C29.4853 22.5 31.5 24.5147 31.5 27Z" stroke="#F38A04" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"/></svg>','<svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.928 20.8572L10.571 16.5002M14.928 20.8572C16.9567 20.0856 18.9028 19.1125 20.7373 17.9525M14.928 20.8572V28.1188C14.928 28.1188 19.3285 27.3201 20.7373 25.2142C22.3058 22.8614 20.7373 17.9525 20.7373 17.9525M10.571 16.5002C11.3438 14.4952 12.317 12.5732 13.4757 10.7635C15.1679 8.0578 17.5242 5.83002 20.3205 4.29207C23.1168 2.75411 26.26 1.95713 29.4513 1.97692C29.4513 5.92726 28.3185 12.8694 20.7373 17.9525M10.571 16.5002H3.30935C3.30935 16.5002 4.10813 12.0997 6.21401 10.6909C8.56678 9.12238 13.4757 10.6909 13.4757 10.6909M4.03552 23.0357C1.85702 24.8656 1.13086 30.2973 1.13086 30.2973C1.13086 30.2973 6.56257 29.5712 8.3925 27.3927C9.42366 26.1727 9.40913 24.2992 8.26179 23.1664C7.69728 22.6276 6.95367 22.3163 6.17367 22.2921C5.39367 22.268 4.63224 22.5328 4.03552 23.0357Z" stroke="#F38A04" stroke-width="2.17849" stroke-linecap="round" stroke-linejoin="round"/> </svg>','<svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.4623 22.2453L14.3718 17.1548M22.8736 4.42856V1.8833M29.558 7.07674L31.3578 5.27697M29.558 20.5485L31.3578 22.3483M16.0862 7.07674L14.2865 5.27697M32.2062 13.7612H34.7514M7.80741 33.9003L23.4815 18.2262C24.1535 17.5542 24.4895 17.2182 24.6154 16.8308C24.7261 16.49 24.7261 16.1229 24.6154 15.7821C24.4895 15.3946 24.1535 15.0586 23.4815 14.3867L22.2305 13.1357C21.5585 12.4637 21.2226 12.1277 20.8351 12.0018C20.4943 11.8911 20.1272 11.8911 19.7864 12.0018C19.399 12.1277 19.063 12.4637 18.391 13.1357L2.7169 28.8098C2.04492 29.4817 1.70893 29.8177 1.58305 30.2052C1.47232 30.546 1.47232 30.9131 1.58305 31.2539C1.70893 31.6413 2.04492 31.9773 2.7169 32.6493L3.96791 33.9003C4.63988 34.5723 4.97587 34.9082 5.3633 35.0341C5.7041 35.1449 6.07121 35.1449 6.41201 35.0341C6.79944 34.9082 7.13543 34.5722 7.80741 33.9003Z" stroke="#F38A04" stroke-width="2.54525" stroke-linecap="round" stroke-linejoin="round"/></svg>');


//add_action('wpcf7_mail_sent', 'sent_contact_form_7');
if($small_title != "" || $title != "" || $content_sub_title != "" || $content_sub_points_list != "" || $contact_form_title != ""  || $contact_form != "" || $thank_you_title != "" || $thank_you_content != "" || $thank_you_button_url != "" ):?>
    <!-- Management Market Starts -->
    <section class="management-market g2-Form compairison compairison-sm">
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
                    
                    <?php if( get_sub_field('content_sub_title_hide-show') ):?>
                        <?php if($content_sub_title):?>
                            <p><?php echo $content_sub_title;?></p>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if(have_rows('content_sub_points_list')):?>
                    <ul class="checklist no-listed"> 
                        
                        <?php $k = 0; $m = 3; while(have_rows('content_sub_points_list')): the_row();?>
                        <?php if(get_sub_field('single_content_point' )): ?>
                        <li>
                            <?php echo $svg_array[$k]; ?>
                            <span class="inline"><?php echo get_sub_field('single_content_point',false,false); ?></span>
                        </li>    
                        <?php endif; ?>                    
                        <?php $k++; 
                        if($k % $m == 0){
                            $k = 0;
                        }
                        endwhile; ?> 
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
                        
                    </div>
                    <div class="mobContact" >
                        <?php if($content_sub_title):?>
                            <p><?php echo $content_sub_title;?></p>
                        <?php endif; ?>
                        <?php if($contact_form): ?>
                        <div class="contact-form contact-me-form">
                            <div class="form-title text-center">
                                <?php if($contact_form_title):?>
                                    <?php echo $contact_form_title;?>
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
                        <?php if(have_rows('content_sub_points_list')):?>
                            <ul class="checklist no-listed"> 
                                
                                <?php $k = 0; $m = 3; while(have_rows('content_sub_points_list')): the_row();?>
                                <?php if(get_sub_field('single_content_point' )): ?>
                                <li>
                                    <?php echo $svg_array[$k]; ?>
                                    <span class="inline"><?php echo get_sub_field('single_content_point',false,false); ?></span>
                                </li>    
                                <?php endif; ?>                    
                                <?php $k++; 
                                if($k % $m == 0){
                                    $k = 0;
                                }
                                endwhile; ?> 
                            </ul>
                        <?php endif; ?>
                   </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Management Market Ends -->
    <?php endif; ?>

    
    