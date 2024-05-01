<section class="agora_blocks">
    <div class="container">
        <?php if ( have_rows('top_title_with_side_image_and_content_list') ) { ?>
        <div class="agora_block_wrap head_portal_wrap">            
            <?php $lottie_id = 700; $i=1; while( have_rows('top_title_with_side_image_and_content_list') ): the_row(); 
                $fa_top_title                   = get_sub_field('fa_top_title');
                $content_after_top_title        = get_sub_field('content_after_top_title');
                $side_image_or_side_video       = get_sub_field('side_image_or_side_video');
                $fa_side_image                  = get_sub_field('fa_side_image');                    
                $fa_side_video                  = get_sub_field('fa_side_video');                    
                $fa_side_lottie                 = get_sub_field('fa_side_lottie');   
                $side_learn_more_button         = get_sub_field('side_learn_more_button');   
                $side_learn_more_button_url     = get_sub_field('side_learn_more_button_url');   

                if($i == 1){
                    $section_id = "internationalpayments";
                }
                if($i == 2){
                    $section_id = "taxoperations";
                }
            ?> 
            <div class="portal_block head_portal_block animatable fade <?php echo $section_id; ?>" data-delay="200">   
                <?php if( $fa_top_title ): ?>
                    <span class="h_tag animatable fade" data-delay="600">
                        <?php echo $fa_top_title; ?>
                    </span>
                <?php endif; ?>
                <?php if( $content_after_top_title ): ?>                    
                <?php echo $content_after_top_title; ?>                    
                <?php endif; ?>
                
                <div class="row justify-between align-items-center">
                    <div class="col-5 portal_content">
                        <ul class="no-listed">
                            <?php $k=5; while( have_rows('fa_side_content_list') ): the_row(); $k++; 
                                $fa_side_content_title       = get_sub_field('fa_side_content_title');
                                $fa_side_content             = get_sub_field('fa_side_content');   
                            ?>
                            <li class="fade animatable" data-delay="<?php echo $k*2 ?>00">
                                <?php if( $fa_side_content_title ): ?>
                                <h6>
                                    <?php echo $fa_side_content_title; ?>
                                </h6>
                                <?php endif; ?>
                                <?php if( $fa_side_content ): ?>
                                <p>
                                    <?php echo $fa_side_content; ?>
                                </p>
                                <?php endif; ?>
                            </li>
                            <?php endwhile; ?>  
                            <div class="fade animatable" data-delay="1800">
                                <?php if( $side_learn_more_button_url && $side_learn_more_button): ?>
                                    <a href="<?php echo $side_learn_more_button_url; ?>" class="right_btn reverse_bb orange-round"><div class="arrow-round"></div><?php echo $side_learn_more_button; ?></a>
                                <?php endif; ?>
                            </div>
                            
                        </ul>
                    </div>
                   
                    <div class="col-7 portal_img fade animatable" data-delay="800">
                        <?php if( $side_image_or_side_video == "Image" && $fa_side_image ): ?>             
                        <div class="image_wrap">
                            <figure>
                                <img src="<?php echo $fa_side_image['url']; ?>" alt="<?php echo $fa_side_image['alt']; ?>">
                            </figure> 
                        </div>
                        <?php endif; ?>
                        <?php if($side_image_or_side_video == "Lottie" && $fa_side_lottie): ?>
                        <div class="lottie_wrap ">                            
                            <div class="lottie-player zIndex" id="lottie_<?php echo $lottie_id; ?>" data-url="<?php echo $fa_side_lottie['url']; ?>" data-loop="<?php echo get_sub_field('side_lottie_play_in_repeat_mode'); ?>"></div>
                        </div>
                        <?php endif; ?>
                        <?php if($side_image_or_side_video == "Video" && $fa_side_video): ?>
                        <div class="video_container">
                            <video autoplay muted loop>
                                <source src="<?php echo $fa_side_video['url']; ?>" type="video/mp4">
                                <p>video not loaded</p>
                            </video>
                        </div>
                        <?php endif; ?>
                    </div>
                   
                </div>
            </div>  
            <?php $lottie_id++; $i++; endwhile; ?>  
        </div>
        <?php } ?>  
    </div>
</section>
<!-- Agora Blocks Ends -->
