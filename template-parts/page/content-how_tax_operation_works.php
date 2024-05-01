<?php
$title = get_sub_field('title');
if($title || have_rows('tax_operation_working_flow') ): ?>
<section class="timeline-section">
    <div class="container">
        <div class="text-center">
            <?php if($title): ?>
            <?php echo $title; ?>
            <?php endif; ?>
        </div>
        <div class="timeline">
            <?php              
        if( is_array(get_sub_field('tax_operation_working_flow'))){
            $count_rows = count( get_sub_field('tax_operation_working_flow') ); 
        }else{
            $count_rows = 0;
        }     
        $k = 1;  
        while(have_rows('tax_operation_working_flow')): the_row();
        $toperate_title                     = get_sub_field('toperate_title',false,false);
        $to_content                         = get_sub_field('to_content');
        $banner_type                        = get_sub_field('banner_type');
        $banner_image                       = get_sub_field('banner_image');
        $banner_video                       = get_sub_field('banner_video');
        $banner_lottie                      = get_sub_field('banner_lottie');
        $banner_lottie_play_in_repeat_mode  = get_sub_field('banner_lottie_play_in_repeat_mode');
      ?>
            <div class="timeline__item <?php if($count_rows == $k){ echo "pb-0"; } ?>">
                <div class="timeline__line"></div>
                <div class="timeline__wrap row">
                    <div class="col-6 timeline__wrap-content">
                        <div class="timeline__wrap-content__count"><?php echo $k; ?></div>
                        <?php if(!empty($toperate_title)): ?>
                        <h3><?php echo $toperate_title; ?></h3>
                        <?php endif; ?>
                        <?php if($to_content): ?>
                        <?php echo $to_content; ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-6 timeline__wrap-media">
                        <?php if($banner_type == "Lottie" && $banner_lottie): ?>
                        <div class="lottie_wrap ">
                            <div class="lottie-player zIndex mob-show" id="lotties_<?php echo $k; ?>"
                                data-url="<?php echo $banner_lottie['url']; ?>"
                                data-loop="<?php echo $banner_lottie_play_in_repeat_mode; ?>"></div>
                        </div>
                        <?php endif; ?>
                        <?php if($banner_type == "Video" && $banner_video): ?>
                        <div class="video_container ">
                            <video autoplay muted loop class="zIndex mob-show" style="width:200; margin:0 auto;">
                                <source src="<?php echo $banner_video['url']; ?>" type="video/mp4">
                                <p>video not loaded</p>
                            </video>
                        </div>
                        <?php endif; ?>
                        <?php if($banner_type == "Image" && $banner_image): ?>
                        <figure>
                            <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"
                                style="width:200; margin:0 auto;">
                        </figure>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php $k++; endwhile; ?>
            <div class="timeline__footer text-center"> </div>
            <div class="timeline__track"></div>
            <div class="timeline__track-filed"></div>
        </div>
    </div>
</section>
<?php endif; ?>