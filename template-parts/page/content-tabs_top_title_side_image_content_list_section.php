<?php $tab_section_top_title = get_sub_field('tab_section_top_header');  ?>    
<!-- Agora Blocks Starts -->
<section class="agora_blocks">    
    <?php if($tab_section_top_title): ?>
        <div class="container">
            <?php echo $tab_section_top_title; ?>
        </div>    
    <?php endif; ?>

    <div class="tabbing">
        <div class="tabbing-menu pos_rel">
            <div class="container">
                <ul class="d-flex no-listed justify-content">
                    <?php 
                        $k = 1; 
                        $tab_list_secttion_take = get_sub_field('tab_list_section'); 
                        $tab_list_section_total = count($tab_list_secttion_take);
                        while(have_rows('tab_list_section')): the_row(); 
                            $tab_name            = get_sub_field('tab_name');
                            $tab_name_for_mobile = get_sub_field('tab_name_for_mobile');                        
                        if($tab_name || $tab_name_for_mobile): 
                    ?>

                            <li <?php if( $k == 1 ): ?> class="active" <?php endif; ?> data-rel="tab-<?php echo $k; ?>">
                                <a href="javascript:;">
                                    <?php if($tab_name): ?>
                                        <span class="desktop_menu_text"><?php echo $tab_name; ?></span>
                                    <?php endif; ?>

                                    <?php if($tab_name_for_mobile): ?>
                                        <span class="mobile_menu_text"><?php echo $tab_name_for_mobile; ?></span>
                                    <?php endif; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php $k++; endwhile; ?>
                </ul>
            </div>
        </div>

        <div class="tabbing-content">
            <div class="container">
                <?php 
                    $lottie_id = 200;
                    $z = 1;                    
                    while(have_rows('tab_list_section')): the_row(); 
                ?>

                <div class="tab-box" id="tab-<?php echo $z; ?>" <?php if( $z == 1 ): ?> style="display:block;" <?php endif; ?>>
                    <?php                          
                        while(have_rows('tab_content_list')): the_row(); 
                        $tab_header                   = get_sub_field('tab_header');
                        $tab_content                  = get_sub_field('tab_content');
                        $tab_image                    = get_sub_field('tab_image');                           
                        $tab_image_video_lottie       = get_sub_field('tab_image__video__lottie');                           
                        $tab_video_file               = get_sub_field('tab_video_file');                           
                        $tab_lottie_file              = get_sub_field('tab_lottie_file');      
                        $block_tab_class              = get_sub_field('block_tab_class');                           

                    ?>

                    <div class="portal_block animatable fade" data-delay="200">
                        <div class="row align-items-center">
                            <div class="col-6 portal_content">
                                <div class="with-line sm-height animatable">
                                    <?php if($tab_header): ?> 
                                        <?php echo $tab_header; ?>
                                    <?php endif; ?>
                                </div>
                                
                                <?php if($tab_content): ?>
                                    <p class="animatable fade" data-delay="1200"><?php echo $tab_content; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="col-6 portal_img animatable fade" data-delay="800">
                                <?php if($tab_image_video_lottie == "Lottie" && $tab_lottie_file): ?>
                                    <div class="lottie_wrap <?php if($block_tab_class): echo 'lottie_block_tabs'; endif; ?>">                                    
                                        <div class="lottie-player" id="lottie_<?php echo $lottie_id; ?>" data-url="<?php echo $tab_lottie_file['url']; ?>" data-loop="<?php echo get_sub_field('tab_lottie_play_in_repeat_mode'); ?>"></div>
                                    </div>
                                <?php endif; ?>

                                <?php if($tab_image_video_lottie == "Video" && $tab_video_file): ?>
                                    <div class="video_container">
                                        <video autoplay muted loop>
                                            <source src="<?php echo $tab_video_file['url']; ?>" type="video/mp4">
                                            <p>video not loaded</p>
                                        </video>
                                    </div>
                                <?php endif; ?>

                                <?php if($tab_image_video_lottie == "Image" && $tab_image): ?>
                                    <div class="image_wrap">
                                        <figure>
                                            <img src="<?php echo $tab_image['url']; ?>" alt="<?php echo $tab_image['alt']; ?>">
                                        </figure>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php $lottie_id++; endwhile; ?>
                </div>
                <?php  $lottie_id++; $z++; endwhile; ?>               
            </div>
        </div>
    </div>
</section>
<!-- Agora Blocks Ends -->