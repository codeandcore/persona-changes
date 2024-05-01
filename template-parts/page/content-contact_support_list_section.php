<?php

$contact_support_list                      = get_sub_field('contact_support_list');
$pop_up_close_icon                         = get_sub_field('pop_up_close_icon');
$pop_up_email_icon                         = get_sub_field('pop_up_email_icon');
$after_submit_pop_up_content               = get_sub_field('after_submit_pop_up_content');
$pop_up_close_title                        = get_sub_field('pop_up_close_title');
$pop_up_form_title                         = get_sub_field('pop_up_form_title');
$pop_up_form_sub_title                     = get_sub_field('pop_up_form_sub_title');
$random_string                          = random_string_creator();  

$popup_book_demo_button                 = get_field('blogpopup_book_demo_button','options');


if ( $contact_support_list != "" ) {

   ?>

       <!-- Contact Card Starts -->

       <section class="contact_card">

           <div class="container">

               <div class="row">

   <?php 

   $k = 1;    
   foreach ($contact_support_list as $key => $value) {

       $title                  = $value["title"];
       $content                = $value["content"];
       $button_contact_type    = $value["button_contact_type"];
       $button_text            = $value["button_text"];
       $button_url             = $value["button_url"];       
       ?>

       <div class="col-4">

           <div class="single-contact-box animatable fadeInUp">

               <?php

               if ($title) {

                   echo $title;

               }

               if ($content) { ?>

                   <!-- <p> -->

                   <?php echo $content; ?>

                   <!-- </p> -->

               <?php }



               if ($button_text && $button_contact_type == "link") { ?>

                   <a href="<?php echo $button_url; ?>" class="right_btn reverse_bb orange-round"><div class="arrow-round"></div><?php echo $button_text; ?></a>

               <?php } 
               
               if ($button_text && $button_contact_type == "contact_form") { ?>

                   <a href="javascript:;" class="right_btn reverse_bb orange-round hubspotbtn" data-popup="hubpop_<?php echo $random_string; ?>"><div class="arrow-round"></div><?php echo $button_text; ?></a>
                 

               <?php } 
               
               if ($button_text && $button_contact_type == "live_chat") { ?>

                <a href="<?php echo $button_url; ?>" id="live_chat" class="right_btn reverse_bb orange-round"><div class="arrow-round"></div><?php echo $button_text; ?></a>

             <?php } 
               ?>                 
                              

           </div>

       </div>

       <?php 
       $k++;
   }

   ?>

       </div>

   </div>

</section>

<!-- Contact Card ends -->

<?php } ?>


<?php 
   $m = 1;
   foreach ($contact_support_list as $key => $value) {
      
       $button_contact_type                = $value["button_contact_type"];   
       $partnership_inquiry_form           = $value["partnership_inquiry_form"];

       $title                  = $value["title"];
       $content                = $value["content"];
       $button_text            = $value["button_text"];
       $button_url             = $value["button_url"];     

if( $button_contact_type == "contact_form" ): ?>

<!-- Custom CTA popup Starts -->

<div class="popup" data-id="hubpop_<?php echo $random_string; ?>">

   <div class="popup_overlay"></div>

   <div class="popup_wrap text-center">
        <div class="popup_container">
        <div class="popup_header">

                <div class="text-left popup_heading">
                    <?php if($pop_up_form_title): ?><h2><?php echo $pop_up_form_title ; ?></h2><?php endif; ?>
                    <?php if($pop_up_form_sub_title): ?><h4><?php echo $pop_up_form_sub_title ; ?></h4><?php endif; ?>
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
                            formId: "<?php echo $partnership_inquiry_form; ?>",
                            formInstanceId:'th_<?php echo $random_string; ?>',
                            onFormSubmitted: function($form) {                          
                                $("[data-id='hubpop_<?php echo $random_string; ?>']").removeClass("show-modal");
                                $(".th_<?php echo $random_string; ?>").addClass("show-modal");
                            }
                        });
                    </script>

           
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

<!-- Custom CTA popup Ends -->

<?php endif; $m++; } ?>