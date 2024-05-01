<?php
$title              = get_sub_field('title'); 
$random_string      = random_string_creator(); 
if( $title != "" || have_rows('product_list') ): ?>
    <!-- Agora Blocks Starts -->
    <section class="agora_blocks">
        <div class="container">
            <?php if( $title ): ?>
            <?php echo $title; ?>
            <?php endif; ?>
            <div class="agora_block_wrap">
                <?php 
                    $lottie_id = 50;
                    while(have_rows('product_list')): the_row();
                        $prod_title             = get_sub_field('prod_title');
                        $content                = get_sub_field('content');
                        $image_type             = get_sub_field('image_type');
                        $image                  = get_sub_field('image');
                        $video                  = get_sub_field('video'); 
                        $lottiee                = get_sub_field('lottiee'); 
                        $center_block           = get_sub_field('center_block');
                        $notify_me_form_section = get_sub_field('notify_me_form_section');
                        $notify_me_form_title   = get_sub_field('notify_me_form_title');
                        $notify_me_form_script  = get_sub_field('notify_me_form_script');
                ?>
                <div class="portal_block animatable fade" data-delay="200">
                    <div class="row align-items-center">
                        <div class="col-6 portal_content">
                            <div class="with-line sm-height animatable">
                                <?php if($prod_title): 
                                        echo $prod_title; 
                                ?>   
                            </div>
                            <?php endif; ?>
                            <div class="animatable fade" data-delay="1200">
                                <?php if($content): 
                                    echo $content; 
                                    endif;
                                ?>
                            </div>
                            <?php
                            if(get_sub_field('notify_me_form_section')){
                                if(get_sub_field('notify_me_form_title')){ ?>
                                    <div class="portal_block-form">
                                    <h6><?php echo get_sub_field('notify_me_form_title');?></h6>
                                <?php }                                

                                if(get_sub_field('notify_me_form_script')){                              
                                    ?>
                                    <script>
                                        hbspt.forms.create({
                                            region: "na1",
                                            portalId: "7402724",
                                            formId: "<?php echo get_sub_field('notify_me_form_script'); ?>",
                                            formInstanceId:'th_<?php echo $random_string; ?>',
                                            onFormSubmitted: function($form) {                          
                                            
                                            }
                                        });
                                    </script>
                                </div>
                                    <?php
                                    }
                                } ?>
                        </div>
                        <div class="col-6 portal_img animatable fade <?php if($center_block): echo "agora_product_center_block"; endif; ?>" data-delay="800">
                            <?php if($image_type == "Lottie" && $lottiee): ?>
                            <div class="lottie_wrap">
                                <div class="lottie-player" id="lottie_<?php echo $lottie_id; ?>" data-url="<?php echo $lottiee['url']; ?>" data-loop="<?php echo get_sub_field('lottie_play_in_repeat_mode'); ?>"></div>
                            </div>
                            <?php endif; ?>
                            <?php if($image_type == "Video" && $video): ?>
                            <div class="video_container">
                                <video autoplay muted loop>
                                    <source src="<?php echo $video['url']; ?>" type="video/mp4">
                                    <p>video not loaded</p>
                                </video>
                            </div>
                            <?php endif; ?>

                            <?php if($image_type == "Image" && $image): ?>
                            <div class="image_wrap">
                                <figure>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </figure> 
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>   
                <?php $lottie_id++; endwhile; ?>    
            </div>
        </div>
    </section>
    <!-- Agora Blocks Ends -->
<?php endif; ?>