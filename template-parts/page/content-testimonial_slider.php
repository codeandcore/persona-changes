 <?php

 $title = get_sub_field('title');

 $testimonial_list = get_sub_field('testimonial_list');

 $counter_list = get_sub_field('counter_list');

 ?>



 <!-- Testimonial Section Ends -->

 <section class="testimonial">

     <div class="container">

         <div class="row">

             <div class="col-5 testimonial_title animatable fadeInDown" data-delay="400">

                <?php if($title):?>
                 <?php echo $title;?>   
                 <?php endif; ?>

                 <div class="testimonial_nav  d-flex">

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

             </div>

             <div class="col-7 animatable slider_anim">

                <?php if(have_rows('testimonial_list')):?>

                 <div class="testimonial_slider swiper">

                     <div data-delay="1000" class="fadeInLeft animatable swiper-wrapper">

                     <?php while(have_rows('testimonial_list')): the_row();?>

                         <div class="swiper-slide testimonial_slide">

                             <div class="row align-items-flexEnd">

                                 <div class="col-6 testimonial_profileLogo">

                                    <?php if(get_sub_field('person_photo')):?>

                                     <img src="<?php echo get_sub_field('person_photo')['url'];?>"

                                         alt="<?php echo get_sub_field('person_photo')['alt'];?>">

                                    <?php endif; ?>

                                 </div>

                                 <div class="col-6 testimonial_profileName">

                                    <?php if(get_sub_field('person_name')):?>

                                     <p><?php echo get_sub_field('person_name');?></p>

                                     <?php endif; ?>

                                     <?php if(get_sub_field('person_designation')):?>

                                     <span><?php echo get_sub_field('person_designation');?> </span>

                                     <?php endif; ?>

                                 </div>

                             </div>

                             <div class="testimonial_content">

                                 <div class="star">

                                 <?php if(get_sub_field('rating')):?>

                                     <svg width="150" height="31" viewBox="0 0 150 31" fill="none"

                                         xmlns="http://www.w3.org/2000/svg">

                                         <?php if(get_sub_field('rating') >= 1):?>

                                         <path

                                             d="M13.4983 5.35213C13.971 3.89743 16.029 3.89743 16.5017 5.35213L18.0132 10.0042C18.2246 10.6547 18.8308 11.0952 19.5149 11.0952H24.4063C25.9359 11.0952 26.5719 13.0525 25.3344 13.9516L21.3772 16.8267C20.8238 17.2288 20.5922 17.9414 20.8036 18.592L22.3151 23.2441C22.7878 24.6988 21.1228 25.9084 19.8854 25.0094L15.9281 22.1343C15.3747 21.7322 14.6253 21.7322 14.0719 22.1343L10.1146 25.0094C8.8772 25.9084 7.21223 24.6988 7.68489 23.2441L9.19643 18.592C9.40781 17.9414 9.17625 17.2288 8.62285 16.8267L4.66557 13.9516C3.42813 13.0525 4.06409 11.0952 5.59365 11.0952H10.4851C11.1692 11.0952 11.7754 10.6547 11.9868 10.0042L13.4983 5.35213Z"

                                             fill="#FAAD14" />

                                        <?php endif; ?>

                                        <?php if(get_sub_field('rating') >= 2):?>

                                         <path

                                             d="M43.4983 5.35213C43.971 3.89743 46.029 3.89743 46.5017 5.35213L48.0132 10.0042C48.2246 10.6547 48.8308 11.0952 49.5149 11.0952H54.4063C55.9359 11.0952 56.5719 13.0525 55.3344 13.9516L51.3772 16.8267C50.8238 17.2288 50.5922 17.9414 50.8036 18.592L52.3151 23.2441C52.7878 24.6988 51.1228 25.9084 49.8854 25.0094L45.9281 22.1343C45.3747 21.7322 44.6253 21.7322 44.0719 22.1343L40.1146 25.0094C38.8772 25.9084 37.2122 24.6988 37.6849 23.2441L39.1964 18.592C39.4078 17.9414 39.1763 17.2288 38.6228 16.8267L34.6656 13.9516C33.4281 13.0525 34.0641 11.0952 35.5937 11.0952H40.4851C41.1692 11.0952 41.7754 10.6547 41.9868 10.0042L43.4983 5.35213Z"

                                             fill="#FAAD14" />

                                        <?php endif; ?>

                                        <?php if(get_sub_field('rating') >= 3):?>

                                         <path

                                             d="M73.4983 5.35213C73.971 3.89743 76.029 3.89743 76.5017 5.35213L78.0132 10.0042C78.2246 10.6547 78.8308 11.0952 79.5149 11.0952H84.4063C85.9359 11.0952 86.5719 13.0525 85.3344 13.9516L81.3772 16.8267C80.8238 17.2288 80.5922 17.9414 80.8036 18.592L82.3151 23.2441C82.7878 24.6988 81.1228 25.9084 79.8854 25.0094L75.9281 22.1343C75.3747 21.7322 74.6253 21.7322 74.0719 22.1343L70.1146 25.0094C68.8772 25.9084 67.2122 24.6988 67.6849 23.2441L69.1964 18.592C69.4078 17.9414 69.1763 17.2288 68.6228 16.8267L64.6656 13.9516C63.4281 13.0525 64.0641 11.0952 65.5937 11.0952H70.4851C71.1692 11.0952 71.7754 10.6547 71.9868 10.0042L73.4983 5.35213Z"

                                             fill="#FAAD14" />

                                        <?php endif; ?>

                                        <?php if(get_sub_field('rating') >= 4):?>

                                         <path

                                             d="M103.498 5.35213C103.971 3.89743 106.029 3.89743 106.502 5.35213L108.013 10.0042C108.225 10.6547 108.831 11.0952 109.515 11.0952H114.406C115.936 11.0952 116.572 13.0525 115.334 13.9516L111.377 16.8267C110.824 17.2288 110.592 17.9414 110.804 18.592L112.315 23.2441C112.788 24.6988 111.123 25.9084 109.885 25.0094L105.928 22.1343C105.375 21.7322 104.625 21.7322 104.072 22.1343L100.115 25.0094C98.8772 25.9084 97.2122 24.6988 97.6849 23.2441L99.1964 18.592C99.4078 17.9414 99.1763 17.2288 98.6228 16.8267L94.6656 13.9516C93.4281 13.0525 94.0641 11.0952 95.5937 11.0952H100.485C101.169 11.0952 101.775 10.6547 101.987 10.0042L103.498 5.35213Z"

                                             fill="#FAAD14" />

                                             <?php endif; ?>

                                        <?php if(get_sub_field('rating') >= 5):?>

                                         <path

                                             d="M133.498 5.35213C133.971 3.89743 136.029 3.89743 136.502 5.35213L138.013 10.0042C138.225 10.6547 138.831 11.0952 139.515 11.0952H144.406C145.936 11.0952 146.572 13.0525 145.334 13.9516L141.377 16.8267C140.824 17.2288 140.592 17.9414 140.804 18.592L142.315 23.2441C142.788 24.6988 141.123 25.9084 139.885 25.0094L135.928 22.1343C135.375 21.7322 134.625 21.7322 134.072 22.1343L130.115 25.0094C128.877 25.9084 127.212 24.6988 127.685 23.2441L129.196 18.592C129.408 17.9414 129.176 17.2288 128.623 16.8267L124.666 13.9516C123.428 13.0525 124.064 11.0952 125.594 11.0952H130.485C131.169 11.0952 131.775 10.6547 131.987 10.0042L133.498 5.35213Z"

                                             fill="#FAAD14" />

                                        <?php endif; ?>

                                     </svg>

                                     <?php endif; ?>

                                 </div>

                                 <?php if(get_sub_field('testimonial')):?>

                                 <?php echo get_sub_field('testimonial');?>

                                 <?php endif; ?>

                                 <?php if(get_sub_field('button_text')):?>

                                 <a href="<?php echo get_sub_field('button_url');?>"><?php echo get_sub_field('button_text');?></a>

                                 <?php endif; ?>

                             </div>

                         </div>

                         <?php endwhile; ?>

                     </div>

                 </div>

                 <?php endif; ?>

             </div>

         </div>

         <?php if(have_rows('counter_list')):?>

         <div class="states pos_rel row align-items-center justify-between zIndex animatable fadeInUp" data-delay="400">

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

         </div>

         <?php endif; ?>

     </div>

 </section>

 <!-- Testimonial Section Ends -->