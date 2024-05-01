<?php

 $button_text = get_sub_field('button_text');

 $button_url = get_sub_field('button_url');

 $button_type = get_field('ebook_cta_button_type','options');

 $button_popup = get_sub_field('button_popup',false,false,false);

 $pop_up_title                           = get_sub_field('popup_title');

 $popup_sub_title                        = get_sub_field('popup_sub_title');

 $popup_book_demo_button                 = get_sub_field('popup_book_demo_button');

 $pop_up_close_icon                      = get_sub_field('pop_up_close_icon');

 $pop_up_email_icon                      = get_sub_field('pop_up_email_icon');

 $after_submit_pop_up_content            = get_sub_field('after_submit_pop_up_content');

 $pop_up_close_title                     = get_sub_field('pop_up_close_title');



 if($button_text != '' || $button_url != ''):

 ?>

<div class="btn_wrap text-center">

    <?php if($button_type == "link"):?>

        <a href="<?php echo $button_url;?>" class="btn"><?php echo $button_text;?></a>

    <?php endif; ?>

    <?php if($button_type == "popup"):?>

        <a href="#" class="btn hubspotbtn" data-popup="ebooktalkExperts"><?php echo $button_text;?></a>

    <?php endif; ?>

</div>

<?php endif; ?>

<?php //if( $button_type == "Popup" ): ?>

<!-- Custom CTA popup Starts -->

<!--<div class="popup" data-id="ebooktalkExperts">

    <div class="popup_overlay"></div>

    <div class="popup_wrap text-center">

    <div class="popup_container">

        <div class="popup_header">

            <div class="text-left popup_heading test">

                <?php //if($pop_up_title): ?><h2><?php //echo $pop_up_title; ?></h2><?php //endif; ?>

                <?php //if($popup_sub_title): ?><h4><?php //echo $popup_sub_title; ?></h4><?php //endif; ?>

            </div>

            <a href="javascript:;" class="close_ icon close_btn">                   

                <?php //if($pop_up_close_icon): ?>                       

                    <img src="<?php echo $pop_up_close_icon['url']; ?>" alt="<?php //echo $pop_up_close_icon['alt']; ?>">

                <?php //endif; ?>    

            </a>

        </div>

        <div class="popup_body">

            <div class="contact-form">                                   

                <?php //echo $button_popup; ?>

                <div class="thankyou-popup">

                    <figure>

                        <?php //if($pop_up_email_icon): ?>                       

                        <img src="<?php //echo $pop_up_email_icon['url']; ?>" alt="<?php //echo $pop_up_email_icon['alt']; ?>">

                        <?php //endif; ?>

                    </figure>

                    <?php //if($after_submit_pop_up_content || $pop_up_close_title): ?>

                    <div class="content">

                        <?php //if($after_submit_pop_up_content): ?>   

                        <?php //echo $after_submit_pop_up_content; ?>

                        <?php //endif; ?>    

                        <?php //if($pop_up_close_title): ?>   

                        <a href="javascript:;" class="btn"><?php //echo $pop_up_close_title; ?></a>

                        <?php //endif; ?>    

                    </div>

                    <?php //endif; ?>

                </div>

            </div>

            <?php //if($popup_book_demo_button): ?>

            <div class="book-demo-btn">

                <a href="<?php //echo $popup_book_demo_button['url']; ?>" class="btn" target="<?php //echo $popup_book_demo_button['target']; ?>"><?php //echo $popup_book_demo_button['title']; ?></a>

            </div>

            <?php //endif; ?>

        </div>
    </div>
    </div>

</div>-->

<!-- Custom CTA popup Ends -->

<?php //endif; ?>