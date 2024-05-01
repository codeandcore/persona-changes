<?php 
$title = get_sub_field('title');
$video_type = get_sub_field('video_type');
$video_link = get_sub_field('video_link');
$video_file = get_sub_field('video_file');
$video_image = get_sub_field('video_image');
$video_url = '';
if($video_type == 'mp4'){
    if(!empty($video_file)){
        $video_url = $video_file['url'];
    }
}
if($video_type == 'url'){
    if(!empty($video_link)){
        $video = Agora_parseVideos($video_link);
        if(!empty($video)){
            $video_url = $video['url'];
        }
    }
}
if($video_type == 'image'){
    if(!empty($video_image)){
            $video_url = $video_image['url'];
    }
}
$states_list = get_sub_field('states_list');
?>
<!-- Management Market Starts -->
<section class="leading-market bg_white">
    <div class="container">
        <!-- <div class="row justify-between align-items-center">
            <div class="col-6 info_text">
                <div class="with-line animatable sm-height">
                    <?php if($title):?>                   
                      <?php echo $title; ?>                   
                    <?php endif; ?>
                </div>
                <?php if(have_rows('rating_list','options')):?>
                <ul class="ratings no-listed d-flex animatable fadeInDown" data-delay="600">
                    <?php while(have_rows('rating_list','options')): the_row();?>
                    <li>
                        <a class="d-flex" href="<?php echo get_sub_field('brand_link');?>" target="_blank">
                            <div class="logo">
                                <?php if(get_sub_field('icon')):?>
                                <img src="<?php echo get_sub_field('icon')['url'];?>"
                                    alt="<?php echo get_sub_field('icon')['alt'];?>">
                                <?php endif; ?>
                            </div>
                            <div class="content">
                                <label class="rating-label">
                                    <?php if(get_sub_field('rating')):?>
                                        <input class="rating" max="5" readonly step="0.01" style="--value:4.90" type="range" value="<?php echo get_sub_field('rating');?>"> 
                                    <?php endif; ?>
                                </label>
                                <?php if(get_sub_field('brand_name')):?>
                                    <div class="rating_digit"><?php echo get_sub_field('brand_name');?> <?php if(get_sub_field('rating')){ echo ' / '.get_sub_field('rating');}?></div>
                                <?php endif; ?>
                            </div>
                        </a>                                
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
            <div class="col-6 info_blob text-center animatable fadeInDown" data-delay="400">
                <div class="blob ">
                    <?php if($video_image): ?>
                        <img src="<?php echo $video_image['url']; ?>" alt="blob">
                    <?php endif; ?>                   

                    <?php if($video_type == "url"): ?>  
                        <a data-fancybox href="<?php echo $video_url; ?>"   class="play-btn">
                            <svg class="zIndex" width="75" height="74" viewBox="0 0 75 74" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="37.5378" cy="37.0006" r="36.9987" fill="#FF8C4B"></circle>
                                <path
                                    d="M30.0957 45.1913V28.8073C30.0957 26.9742 32.112 25.8567 33.6664 26.8282L46.7737 35.0202C48.2362 35.9343 48.2362 38.0643 46.7737 38.9783L33.6664 47.1704C32.112 48.1419 30.0957 47.0244 30.0957 45.1913Z"
                                    fill="white"></path>
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php if($video_type == 'mp4'): ?>
                    <a class="play-btn" data-fancybox href="#myVideo">
                        <svg class="zIndex" width="75" height="74" viewBox="0 0 75 74" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="37.5378" cy="37.0006" r="36.9987" fill="#FF8C4B" />
                            <path
                                d="M30.0957 45.1913V28.8073C30.0957 26.9742 32.112 25.8567 33.6664 26.8282L46.7737 35.0202C48.2362 35.9343 48.2362 38.0643 46.7737 38.9783L33.6664 47.1704C32.112 48.1419 30.0957 47.0244 30.0957 45.1913Z"
                                fill="white" />
                        </svg>
                    </a>
                    <video width="640" height="320" controls id="myVideo" style="display:none;">
                        <source src="<?php echo $video_url; ?>" type="video/mp4">                        
                        Your browser doesn't support HTML5 video tag.
                    </video>
                    <?php endif; ?>

                    <?php if($video_type == 'image'): ?>
                    <a class="play-btn" data-fancybox href="<?php echo $video_url; ?>">
                        <svg class="zIndex" width="75" height="74" viewBox="0 0 75 74" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="37.5378" cy="37.0006" r="36.9987" fill="#FF8C4B" />
                            <path
                                d="M30.0957 45.1913V28.8073C30.0957 26.9742 32.112 25.8567 33.6664 26.8282L46.7737 35.0202C48.2362 35.9343 48.2362 38.0643 46.7737 38.9783L33.6664 47.1704C32.112 48.1419 30.0957 47.0244 30.0957 45.1913Z"
                                fill="white" />
                        </svg>
                    </a>                   
                    <?php endif; ?>
                </div>
            </div>
        </div> -->

        <div class="text-center">
            <?php if($title):?>                   
                <?php echo $title; ?>                   
            <?php endif; ?>
        </div>
        <?php if(have_rows('states_list')):?>
        <div class="states pos_rel row align-items-center justify-between zIndex animatable fadeInUp" data-delay="400">
            <?php while(have_rows('states_list')): the_row();?>
            <div class="col-4">
                <div class="states_counter">
                    <?php if(get_sub_field('number')):?>
                    <h3 role="heading"  aria-level="3">
                        <?php echo get_sub_field('prefix');?><span data-target="<?php echo get_sub_field('number');?>" class="counter"><?php echo get_sub_field('number');?></span><?php echo get_sub_field('postfix');?>
                    </h3>
                    <?php endif; ?>
                    <?php if(get_sub_field('title')):?>
                    <p><?php echo get_sub_field('title');?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- Management Market Ends -->