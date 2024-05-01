<?php 
  $real_estate_top_title          = get_sub_field('real_estate_top_title');
  $coffee_break_side_main_title   = get_sub_field('coffee_break_side_main_title',false,false);
  $coffee_break_side_content      = get_sub_field('coffee_break_side_content');
  $coffee_break_guest_form        = get_sub_field('coffee_break_guest_form');
  $whats_in_it_title              = get_sub_field('whats_in_it_title',false,false);
  $whats_in_it_content_list       = get_sub_field('whats_in_it_content_list');  
  $coffee_break_guest_form_title  = get_sub_field('coffee_break_guest_form_title',false,false);  
  $guest_form_close_icon          = get_sub_field('guest_form_close_icon');  
  $guest_form_email_icon          = get_sub_field('guest_form_email_icon');  
  $guest_form_thank_you_content   = get_sub_field('guest_form_thank_you_content');  
  $guest_form_close_button_title  = get_sub_field('guest_form_close_button_title');  
  $guest_form_thank_you_title     = get_sub_field('guest_form_thank_you_title');  
  $random_string                          = random_string_creator();  

  if($real_estate_top_title || $coffee_break_side_main_title || $coffee_break_side_content || $coffee_break_guest_form || $whats_in_it_title  || $whats_in_it_content_list ):
?> 
<section class="management-market coffee_section">
    <div class="innerWrap ddd">
  <div class="topWrap">
    <div class="container">
        <div class="row justify-between align-items-center">
            <div class="col-6 info_text desktop-view">  
              <?php if($real_estate_top_title): ?>
              <p><?php echo $real_estate_top_title; ?></p>
              <?php endif; ?>
              <div class="with-line animatable animated">
                <?php if($coffee_break_side_main_title): ?>
                <h2 class="animate" > <?php echo $coffee_break_side_main_title; ?> </h2>
                <?php endif; ?>

                <?php if($coffee_break_side_content): ?>
                <div class="content">
                  <?php echo $coffee_break_side_content; ?>
                </div>
                <?php endif; ?>
              </div>
              <div class="btn-group overflow-hide ml-auto d-flex align-items-center">
                <a href="#" class="btn" data-popup="popupContainer" role="button">Book a demo</a>
              </div>
            </div>
            <div class="col-6 text-center">
              <div class="top_view info_text mobile-view">
                <?php if($real_estate_top_title): ?>
                <p><?php echo $real_estate_top_title; ?></p>
                <?php endif; ?>
                <div class="with-line animatable animated">
                  <?php if($coffee_break_side_main_title): ?>
                  <h2 class="animate" > <?php echo $coffee_break_side_main_title; ?> </h2>
                  <?php endif; ?>
                </div>
                  
              </div>
              <div class="stickyForm">
                  <div class="contact-form contact-me-form ext-form">
                    <?php if($coffee_break_guest_form_title): ?>
                    <div class="form-title text-center">
                        <p tabindex="0"><?php echo $coffee_break_guest_form_title; ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if($coffee_break_guest_form): ?>
                      <script>
                          hbspt.forms.create({
                              region: "na1",
                              portalId: "7402724",
                              formId: "<?php echo $coffee_break_guest_form; ?>",
                              formInstanceId:'th_<?php echo $random_string; ?>',
                              onFormSubmitted: function($form) {                          
                                  $("[data-id='hubpop_<?php echo $random_string; ?>']").removeClass("show-modal");
                                  $(".th_<?php echo $random_string; ?>").addClass("active");
                              }
                          });
                      </script>
                    <?php endif; ?>
                    
                    <div class="thankyou-popup thankyou_bookdemo th_<?php echo $random_string; ?>">
                      <?php if($guest_form_close_icon): ?>
                      <a href="javascript:;" onclick="history.go(0)" class="close_icon">
                        <img src="<?php echo $guest_form_close_icon['url']; ?>" alt="<?php echo $guest_form_close_icon['alt']; ?>" />
                      </a>
                      <?php endif; ?>

                      <?php if($guest_form_email_icon): ?>
                      <figure> 
                        <img src="<?php echo $guest_form_email_icon['url']; ?>" alt="<?php echo $guest_form_email_icon['alt']; ?>" />
                      </figure>
                      <?php endif; ?>

                      
                      <div class="content">
                        <?php if($guest_form_thank_you_title): ?>
                        <h5><?php echo $guest_form_thank_you_title; ?></h5>
                        <?php endif; ?>   

                        <?php if($guest_form_thank_you_content): ?>
                        <p><?php echo $guest_form_thank_you_content; ?></p>
                        <?php endif; ?>

                        <?php if($guest_form_close_button_title): ?>
                        <a href="javascript:;" onclick="history.go(0)" class="btn overflow-hide" ><?php echo $guest_form_close_button_title; ?></a >
                        <?php endif; ?>
                      </div>
                     
                    </div>
                  </div>
              </div>
              
            </div>
          </div>
    </div>
  </div>

  <?php if($whats_in_it_title ): ?>
  <div class="bottomWrap">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="bottom_view info_text">
                    <div class="with-line">
                      <?php if($whats_in_it_title): ?>
                      <h2 class="animate"><?php echo $whats_in_it_title; ?></h2>
                      <?php endif; ?>
                    </div>
                    
                    <?php if( have_rows('whats_in_it_content_list') ): ?>
                    <ul class="checklist no-listed">
                      <?php while(have_rows('whats_in_it_content_list')): the_row(); ?>
                      <?php if( get_sub_field('whats_in_it_content_list_title') ): ?>
                      <li> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" > <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69279 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke="#F38A04" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ></path> <path d="M22 4L12 14.01L9 11.01" stroke="#F38A04" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ></path> </svg > <span><?php echo get_sub_field('whats_in_it_content_list_title'); ?></span> </li>
                      <?php endif; ?>
                     <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
  </div>
  <?php endif; ?>

</div>
</section>
<?php endif; ?>
