
<!-- Testimonial Section Ends -->

<section class="g2_testimonial">
    <div class="outerWrap pos_rel">
        <div class="innerWrap">
        <div class="swiper testimonalSlider">
            <div class="swiper-wrapper">
                   
                <?php while(have_rows('testimonial_slider')): the_row();
                        $person_photo            = get_sub_field('person_photo');
                        $person_name             = get_sub_field('person_name');
                        $person_logo             = get_sub_field('person_logo');
                        $person_designation      = get_sub_field('person_designation');  
                        $testimonial             = get_sub_field('testimonial');   
                        $rating                  = get_sub_field('rating');   
                    
                ?>
                    <div class="swiper-slide">
                        <div class="row align-items-center">
                            <div class="col-5 iv_testimonial_img animatable fadeInDown">
                                <?php if($person_photo): ?>
                                <figure>
                                    <img src="<?php echo $person_photo['url']; ?>" alt="<?php echo $person_photo['alt']; ?>">
                                </figure>
                                <?php endif; ?>
                            </div>
            
                            <div class="col-7 iv_testimonial_content animatable fadeInDown">
                
                                <div class="fadeInLeft animatable" data-delay="1000">
                                    <div class="testimonial_profileName">
                                        <?php if($person_name): ?> 
                                        <h4><?php echo $person_name; ?></h4>
                                        <?php endif; ?>
                
                                        
                
                                        <?php if($person_designation): ?> 
                                        <span><?php echo $person_designation; ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <?php if( $rating ): ?>   
                                    <div class="star">
                                        <svg width="150" height="31" viewBox="0 0 150 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <?php    
                                            for ($i=1; $i <= $rating; $i++) { 
                                                $agora_rating = "agora_rating_".$i;  
                                                $agora_rating();
                                            }                     
                                            ?>                        
                                        </svg>
                                    </div>
                                    <?php endif; ?>
                
                                    <?php if($testimonial): ?> 
                                    <?php echo $testimonial; ?>
                                    <?php endif; ?>                
                
                                    
                                        <div class="person_logo">
                                            <?php if($person_logo): ?> 
                                            <img class="single_testimonial_person_logo" src="<?php echo $person_logo['url']; ?>" alt="<?php echo $person_logo['alt']; ?>">
                                            <?php endif; ?>
                                        </div>

                                </div>
                            </div>
                            

                        </div>
                    </div>
                <?php endwhile; ?>
                  
                
            </div>
            
        </div>
        </div>
        <div class="controllers">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- Testimonial Section Ends -->
