<?php if( get_sub_field('why_agora_title') || get_sub_field('comparison_testimonial_list') ):?>
<section class="jsCompSlider bg_white">
    <div class="text-center">
        <?php if( get_sub_field('why_agora_title') ):?>
        <?php echo get_sub_field('why_agora_title');?>
        <?php endif; ?>
        <?php if(have_rows('comparison_testimonial_list')):?>
        <div class="mainWrap">
            <div class="jsCompSlider--slider swiper">
                <div class="swiper-wrapper">
                    <?php while(have_rows('comparison_testimonial_list')): the_row();?>
                    <div class="swiper-slide jsCompSlider--slide">
                        <div class="d-flex">
                            <?php if( get_sub_field('comparison_testimonial_image') ):?>
                            <div class="blobWrap">                               
                                <img src="<?php echo get_sub_field('comparison_testimonial_image')['url'];?>" alt="<?php echo get_sub_field('comparison_testimonial_image')['title'];?>">                                
                            </div>
                            <?php endif; ?>

                            <?php if(get_sub_field('comparison_testimonial_title') || get_sub_field('comparison_testimonial_content') ):?>
                            <div class="jsCompSlider--slide_content">
                                <?php if( get_sub_field('comparison_testimonial_title') ):?>
                                <h4><?php echo get_sub_field('comparison_testimonial_title');?></h4>
                                <?php endif; ?>
                                <?php if( get_sub_field('comparison_testimonial_content') ):?>
                                <?php echo get_sub_field('comparison_testimonial_content');?>
                                <?php endif; ?>                                
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?> 
                </div>
            </div>  
            <div class="jsCompSlider--nav  d-flex">

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
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>