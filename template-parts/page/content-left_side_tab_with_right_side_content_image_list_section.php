<?php if(have_rows('tab_list')):?>

<!-- Software Variation Section Starts -->

<section class="software bg_white">

<div class="container">

    <div class="row justify-between ">

        <div class="col-3 software-sticky_nav animatable fade">

            <ul class="tags no-listed">

                <?php $i = 0; while(have_rows('tab_list')): the_row();?>

                <li>

                    <a href="#ivestor_portal<?php echo $i;?>">

                        <?php if(get_sub_field('tab_icon')):?>

                        <span class="img_wrap"> <img src="<?php echo get_sub_field('tab_icon')['url'];?>" alt="<?php echo get_sub_field('tab_icon')['alt'];?>"> </span>

                        <?php endif; ?>

                        <?php if(get_sub_field('tab_title')):?>

                        <span><?php echo get_sub_field('tab_title');?></span>

                        <?php endif; ?>

                    </a>

                </li>

                <?php $i++; endwhile; ?>

            </ul>

        </div>

        <div class="col-12 software-content">

        <?php $lottie_id = 100; $i = 0; while(have_rows('tab_list')): the_row();?>
                           
            <div class="software-section animatable fade" data-delay="200" id="ivestor_portal<?php echo $i;?>">

              
                <span class="animatable fade" data-delay="600">
                    <?php if(get_sub_field('tab_content_image_type') == "content_image_type" && get_sub_field('tab_content_image')):?>
                    <div class="image_wrap">
                        <figure>
                            <img src="<?php echo get_sub_field('tab_content_image')['url'];?>" alt="<?php echo get_sub_field('tab_content_image')['alt'];?>">
                        </figure>
                    </div>
                    <?php endif; ?>

                    <?php if(get_sub_field('tab_content_image_type') == "content_lottie_type" && get_sub_field('tab_content_lottie')):?>
                    <div class="lottie_wrap">               
                        
                        <div class="lottie-player" id="lottie_<?php echo $lottie_id; ?>" data-loop="<?php echo get_sub_field('tab_content_lottie_play_in_repeat_mode'); ?>" data-url="<?php echo get_sub_field('tab_content_lottie')['url']; ?>"></div>
                    </div>  
                    <?php endif; ?>

                    <?php if(get_sub_field('tab_content_image_type') == "content_video_type" && get_sub_field('tab_content_video')):?>
                    <div class="video_container">
                        <video autoplay muted loop class="zIndex">
                            <source src="<?php echo get_sub_field('tab_content_video')['url']; ?>" type="video/mp4">
                            <p>video not loaded</p>
                        </video>
                    </div>
                    <?php endif; ?>
                </span>

                <div class="content">

                    <div class="with-line animatable">

                        <?php if(get_sub_field('tab_content_title')):?>

                            <?php echo get_sub_field('tab_content_title');?>                    

                        <?php endif; ?>

                    </div>
                
                    <span class="animatable fade" data-delay="1200">
                        <?php if(get_sub_field('tab_content_text')):?>

                            <?php echo get_sub_field('tab_content_text');?>

                        <?php endif; ?>
                    
                    
                
                        <?php if(have_rows('tab_content_list')):?>
                        
                            <ul class="checklist no-listed">
                            
                                <?php while(have_rows('tab_content_list')): the_row();?>
                                
                                    <li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 0C7.21997 0 5.47991 0.527841 3.99987 1.51677C2.51983 2.50571 1.36628 3.91131 0.685088 5.55585C0.00389957 7.20038 -0.17433 9.00998 0.172937 10.7558C0.520204 12.5016 1.37737 14.1053 2.63604 15.364C3.89472 16.6226 5.49836 17.4798 7.24419 17.8271C8.99002 18.1743 10.7996 17.9961 12.4442 17.3149C14.0887 16.6337 15.4943 15.4802 16.4832 14.0001C17.4722 12.5201 18 10.78 18 9C18 6.61305 17.0518 4.32387 15.364 2.63604C13.6761 0.948212 11.387 0 9 0V0ZM9 16.5C7.51664 16.5 6.0666 16.0601 4.83323 15.236C3.59986 14.4119 2.63856 13.2406 2.07091 11.8701C1.50325 10.4997 1.35473 8.99168 1.64411 7.53682C1.9335 6.08197 2.64781 4.74559 3.6967 3.6967C4.7456 2.64781 6.08197 1.9335 7.53683 1.64411C8.99168 1.35472 10.4997 1.50325 11.8701 2.0709C13.2406 2.63856 14.4119 3.59985 15.236 4.83322C16.0601 6.06659 16.5 7.51664 16.5 9C16.5 10.9891 15.7098 12.8968 14.3033 14.3033C12.8968 15.7098 10.9891 16.5 9 16.5Z" fill="#F38A04"/><path d="M12.18 6.12682L7.94249 10.3718C7.87277 10.4421 7.78982 10.4979 7.69843 10.536C7.60703 10.5741 7.509 10.5937 7.40999 10.5937C7.31098 10.5937 7.21295 10.5741 7.12156 10.536C7.03017 10.4979 6.94722 10.4421 6.87749 10.3718L5.81999 9.30682C5.75006 9.23689 5.66705 9.18142 5.57568 9.14357C5.48431 9.10573 5.38639 9.08625 5.28749 9.08625C5.1886 9.08625 5.09067 9.10573 4.99931 9.14357C4.90794 9.18142 4.82492 9.23689 4.75499 9.30682C4.68506 9.37675 4.62959 9.45977 4.59175 9.55113C4.5539 9.6425 4.53442 9.74043 4.53442 9.83932C4.53442 9.93821 4.5539 10.0361 4.59175 10.1275C4.62959 10.2189 4.68506 10.3019 4.75499 10.3718L5.81999 11.4293C6.24187 11.8507 6.81374 12.0873 7.40999 12.0873C8.00624 12.0873 8.57812 11.8507 8.99999 11.4293L13.245 7.19182C13.3149 7.12189 13.3704 7.03887 13.4082 6.94751C13.4461 6.85614 13.4656 6.75821 13.4656 6.65932C13.4656 6.56042 13.4461 6.4625 13.4082 6.37113C13.3704 6.27977 13.3149 6.19675 13.245 6.12682C13.1751 6.05689 13.092 6.00142 13.0007 5.96357C12.9093 5.92573 12.8114 5.90625 12.7125 5.90625C12.6136 5.90625 12.5157 5.92573 12.4243 5.96357C12.3329 6.00142 12.2499 6.05689 12.18 6.12682V6.12682Z" fill="#F38A04"/></svg><span> <?php echo get_sub_field('text');?></span></li>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>
                    
                        <?php if(get_sub_field('tab_content_button_text')):?>

                            <a href="<?php echo get_sub_field('tab_content_button_url');?>" class="right_btn reverse_bb orange-round"><div class="arrow-round"></div><?php echo get_sub_field('tab_content_button_text');?></a>   

                        <?php endif; ?> 
                    </span>
                </div>

            </div>

            <?php $i++; $lottie_id++; endwhile; ?>

        </div>

    </div>

</div>

</section>

<!-- Software Variation Section Ends -->

<?php endif; ?>