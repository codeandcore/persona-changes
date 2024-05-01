<?php

$title = get_sub_field('title');

$testimonial_list = get_sub_field('testimonial_list');

$counter_list = get_sub_field('counter_list');

?>



<!-- Testimonial Section Ends -->

<section class="multiTestimonial <?php if(get_sub_field('background_toggler')){echo 'bg_gray';}else{echo 'bg_white';} ?>">
    

    <div class="multiTestimonial_nav  inner_nav d-flex">

        <div class="swiper-prev">

            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">

                <circle cx="22.9977" cy="23.0016" r="21.4976" transform="rotate(-180 22.9977 23.0016)"

                    stroke="#0C1B36" stroke-width="0.704839" />

                <g clip-path="url(#clip0_3397_39353)">

                    <path

                        d="M24.8141 28.7037L19.6644 23.4783C19.5387 23.3518 19.4763 23.1879 19.4763 23.0247C19.4763 22.8614 19.5387 22.6974 19.6644 22.571L24.8141 17.3456C25.0715 17.0833 25.4987 17.0748 25.7676 17.326C26.0383 17.5755 26.0471 17.9926 25.7878 18.2532L21.0628 23.0493L25.787 27.7962C26.0462 28.0559 26.0374 28.4737 25.7668 28.7234C25.4978 28.9747 25.0701 28.9659 24.8141 28.7037Z"

                        fill="black" />

                </g>

                <defs>

                    <clipPath id="clip0_3397_39353">

                        <rect width="9" height="14" fill="white"

                            transform="translate(28 30) rotate(-180)" />

                    </clipPath>

                </defs>

            </svg>

        </div>

        <div class="swiper-next">

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"

                width="43.699" height="43.7" viewBox="0 0 43.699 43.7">

                <defs>

                    <clipPath id="clip-path">

                        <rect id="Rectangle_1125" data-name="Rectangle 1125" width="9" height="14"

                            transform="translate(28 30) rotate(180)" fill="#fff" />

                    </clipPath>

                </defs>

                <g id="Arrow_Left" data-name="Arrow Left" transform="translate(44.848 44.852) rotate(180)">

                    <circle id="Ellipse_1" data-name="Ellipse 1" cx="21.498" cy="21.498" r="21.498"

                        transform="translate(44.495 44.499) rotate(180)" fill="none" stroke="#0c1b36"

                        stroke-width="0.705" />

                    <g id="Group_1973" data-name="Group 1973" clip-path="url(#clip-path)">

                        <path id="Path_986" data-name="Path 986"

                            d="M24.814,28.7l-5.15-5.225a.641.641,0,0,1,0-.907l5.15-5.225a.687.687,0,0,1,.953-.02.64.64,0,0,1,.02.927l-4.725,4.8L25.787,27.8a.64.64,0,0,1-.02.927A.686.686,0,0,1,24.814,28.7Z" />

                    </g>

                </g>

            </svg>

        </div>

    </div>
    <div class="container">
       <div class="multiTestimonial_title">
           <?php if($title):?>
               <?php echo $title;?>   
           <?php endif; ?>
       </div>
       <div class="slider_anim">


               <?php if(have_rows('testimonial_list')):?>

                <div class="multiTestimonial_slider swiper">
                    <div class="swiper-wrapper">

                       <?php while(have_rows('testimonial_list')): the_row();
                           if(get_sub_field('font_variation') == "Big Font"){
                               $font_variation_cls = "font_big";
                           }
                       ?>

                           <div class="swiper-slide multiTestimonial_slide">
                               <div class="quoteLogo">
                                   <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M6.68602 10.8451C8.15062 10.528 9.48787 10.9086 10.6978 11.9867C11.9077 13.0648 12.5126 14.4283 12.5126 16.0772C12.5126 17.6627 11.9395 18.9945 10.7933 20.0727C9.71075 21.0874 8.34166 21.5947 6.68602 21.5947C4.45727 21.5947 2.76979 20.802 1.62357 19.2165C0.541038 17.5676 -0.0002293 15.4748 -0.000229079 12.938C-0.000228905 10.9506 0.40721 9.16901 1.07276 7.52786C2.02797 5.17242 3.56102 2.993 5.70229 1.62354C6.59088 1.05523 7.57625 0.64685 8.81955 0.369997C9.33978 0.254154 9.56714 0.986665 9.11958 1.27604C7.76076 2.15461 6.66302 3.15634 5.82636 4.28124C4.61647 5.99356 4.01152 7.89614 4.01152 9.98898C4.01152 10.6866 4.13888 11.0988 4.39359 11.2257C4.71198 11.3525 5.09405 11.3525 5.5398 11.2257L6.68602 10.8451Z" fill="#F38A04"/>
                                       <path d="M21.6987 10.8451C23.1633 10.528 24.5006 10.9086 25.7105 11.9867C26.9204 13.0648 27.5253 14.4283 27.5253 16.0772C27.5253 17.6627 26.9522 18.9945 25.806 20.0727C24.7234 21.0874 23.3544 21.5947 21.6987 21.5947C19.47 21.5947 17.7825 20.802 16.6363 19.2165C15.5537 17.5676 15.0125 15.4748 15.0125 12.938C15.0125 10.9506 15.4199 9.16901 16.0855 7.52786C17.0407 5.17242 18.5737 2.993 20.715 1.62354C21.6036 1.05523 22.5889 0.64685 23.8322 0.369997C24.3525 0.254154 24.5798 0.986665 24.1323 1.27604C22.7735 2.15461 21.6757 3.15634 20.8391 4.28124C19.6292 5.99356 19.0242 7.89614 19.0242 9.98898C19.0242 10.6866 19.1516 11.0988 19.4063 11.2257C19.7247 11.3525 20.1067 11.3525 20.5525 11.2257L21.6987 10.8451Z" fill="#F38A04"/>
                                   </svg>
                               </div>
                               <div class="multiTestimonial_content <?php if(isset($font_variation_cls)){ echo $font_variation_cls; } ?>">
                                   <?php if(get_sub_field('testimonial')):?>
                                       <?php echo get_sub_field('testimonial');?>
                                   <?php endif; ?>
                               </div>
                               <div class="bottomInfo">
                                   <div class="multiTestimonial_profileLogo">
                                       <?php if(get_sub_field('person_photo')):?>
                                           <img src="<?php echo get_sub_field('person_photo')['url'];?>"  alt="<?php echo get_sub_field('person_photo')['alt'];?>">
                                       <?php endif; ?>
                                   </div>
                                   <div class="multiTestimonial_profileName">
                                       <?php if(get_sub_field('person_name')):?>
                                           <p><?php echo get_sub_field('person_name');?></p>
                                       <?php endif; ?>
                                       <?php if(get_sub_field('person_designation')):?>
                                           <span><?php echo get_sub_field('person_designation');?> </span>
                                       <?php endif; ?>
                                   </div>
                                   <div class="text-center">
                                       <?php if(get_sub_field('button_text')):?>
                                           <a class="right_btn reverse_bb orange-round" href="<?php echo get_sub_field('button_url');?>"><div class="arrow-round"></div> <?php echo get_sub_field('button_text');?></a>
                                       <?php endif; ?>
                                   </div>
                               </div>
                           </div>

                           <?php endwhile; ?>
                       </div>
                       <div class="swiper-pagination"></div>

                </div>

                <?php endif; ?>

            </div>

        <?php if(have_rows('counter_list')):?>

        <!-- <div class="states pos_rel row align-items-center justify-between zIndex animatable fadeInUp" data-delay="400">

           <?php while(have_rows('counter_list')): the_row();?>

            <div class="col-4">

                <div class="states_counter">

                   <?php if(get_sub_field('counter')):?>

                    <h3 role="heading" aria-level="3"><span class="counter"><?php echo get_sub_field('counter');?></span>%</h3>

                    <?php endif; ?>

                    <?php if(get_sub_field('title')):?>

                    <p role="term"><?php echo get_sub_field('title');?></p>

                    <?php endif; ?>

                </div>

            </div>

            <?php endwhile; ?>

        </div> -->

        <?php endif; ?>

    </div>

</section>

<!-- Testimonial Section Ends -->