<?php 
 $random_string_header                   = "NDI34-DWK34-45ERF-DOR23-RO23G";
$banner_title = get_sub_field('banner_title');
$banner_subtitle_list = get_sub_field('banner_subtitle_list');
$banner_bottom_tagline = get_sub_field('banner_bottom_tagline');
$banner_center = get_sub_field('banner_center');
$banner_right = get_sub_field('banner_right');
$banner_left = get_sub_field('banner_left');
$banner_scroll_text = get_sub_field('banner_scroll_text');
$banner_scroll_hash_link = get_sub_field('banner_scroll_hash_link');

/*Theme settinh get value from book demo*/
$book_demo_button_text                  = get_field('book_demo_button_text','options');
$book_demo_button_url                   = get_field('book_demo_button_url','options');
$button_type                            = get_field('button_type','options');

// New Changes
$pricing_button_title = get_sub_field('pricing_button_title');
$pricing_button_url = get_sub_field('pricing_button_url');

// New Added
$home_banner_type                               = get_sub_field('home_banner_type');
$home_banner_image                              = get_sub_field('home_banner_image');
$home_banner_video                              = get_sub_field('home_banner_video');
$home_banner_lottie                             = get_sub_field('home_banner_lottie');
$home_banner_lottie_play_in_repeat_mode         = get_sub_field('home_banner_lottie_play_in_repeat_mode');
$mobile_home_banner_type                        = get_sub_field('mobile_home_banner_type');
$mobile_home_banner_image                       = get_sub_field('mobile_home_banner_image');
$mobile_home_banner_video                       = get_sub_field('mobile_home_banner_video');
$mobile_home_banner_lottie                      = get_sub_field('mobile_home_banner_lottie');
$mobile_home_banner_lottie_play_in_repeat_mode  = get_sub_field('mobile_home_banner_lottie_play_in_repeat_mode');

?>

<?php if($banner_title != "" || $banner_subtitle_list != "" || $banner_bottom_tagline != "" || $banner_center != "" || $banner_right != "" || $banner_left != "" || $banner_scroll_text != "" || $banner_scroll_hash_link != "" ):?>
<!-- Banner Starts -->
<div class="pos_rel bannerWrap banner_warp bg_white">
    <div class="banner bg_blue home_banner" role="banner">
        <div class="container ">
            
            <div class="row homeLC align-items-center">
                <div class="col-6 homeLC_content">
                    <?php if($banner_title):?>
                        <span aria-label="<?php echo $banner_title;?>"><?php echo $banner_title;?></span>
                    <?php endif; ?>
                    <?php if($banner_bottom_tagline):?>
                        <p aria-label="<?php echo $banner_bottom_tagline;?>"><?php echo $banner_bottom_tagline;?></p>
                    <?php endif; ?>
                    <div class="mobNav">
                        <?php  if( $book_demo_button_text && $button_type == "Popup" ): ?>
                            <a href="javascript:;" class="btn hubspotbtn" data-popup="hubpop_<?php echo $random_string_header; ?>" role="button"><?php echo $book_demo_button_text; ?></a>
                            <!-- <a href="javascript:;" class="btn hubspotbtn" data-popup="popupContainer" role="button"><?php echo $book_demo_button_text; ?></a> -->
                        <?php endif; ?>
                    
                        <?php if( $book_demo_button_text && $button_type == "Link" ): ?>
                        <div class="btn-group overflow_hidden ml-auto d-flex align-items-center">
                            <a href="<?php echo $book_demo_button_url; ?>" class="btn"><?php echo $book_demo_button_text; ?></a>
                        </div>
                        <?php endif; ?>
        
                        <?php if( $pricing_button_title && $pricing_button_url ): ?>
                        <a href="<?php echo $pricing_button_url; ?>" class="outline btn"><?php echo $pricing_button_title; ?></a>
                        <?php endif; ?>                
                    </div>
                </div>
                <div class="col-6 homeLC_lottie">
                    <span class="desktopGraphic">
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js"></script>
                        <?php if($home_banner_type != "" || $home_banner_image != "" || $home_banner_video != "" || $home_banner_lottie != ""): ?>
                            <?php if($home_banner_type == "Image" && $home_banner_image): ?>
                                <figure>
                                    <img src="<?php echo $home_banner_image['url']; ?>" alt="<?php echo $home_banner_image['alt']; ?>">
                                </figure> 
                            <?php endif; ?>                    
                            <?php if($home_banner_type == "Lottie" && $home_banner_lottie):  ?>
                                <div class="lottie_wrap">  
                                    <div class="zIndex mob-show" id="lotties_855" ></div>
                                </div>
                                
                                <script>
                                    $(window).load(function(){
                                        if ($('#lotties_855').length > 0) {
                                            var anim = bodymovin.loadAnimation({
                                                container: document.getElementById('lotties_855'),
                                                path: "<?php echo $home_banner_lottie['url']; ?>",
                                                renderer: 'svg',
                                                autoplay: false,
                                                loop: "<?php echo $home_banner_lottie_play_in_repeat_mode; ?>",
                                            });
                                            anim.playSegments(1,true)
                                        }
                                    })
                                </script>
                            <?php endif; ?>
                            <?php if($home_banner_type == "Video" && $home_banner_video): ?>
                                <div class="video_container ">
                                    <video autoplay muted loop class="zIndex mob-show">
                                        <source src="<?php echo $home_banner_video['url']; ?>" type="video/mp4">
                                        <p>video not loaded</p>
                                    </video>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </span>
                    
                    <span class="mobileGraphic">
                        <?php if($mobile_home_banner_type != "" || $mobile_home_banner_image != "" || $mobile_home_banner_video != "" || $mobile_home_banner_lottie != ""): ?>
                            <?php if($mobile_home_banner_type == "mobile_Image" && $mobile_home_banner_image): ?>
                                <figure>
                                    <img src="<?php echo $mobile_home_banner_image['url']; ?>" alt="<?php echo $mobile_home_banner_image['alt']; ?>">
                                </figure> 
                            <?php endif; ?>                    
                            <?php if($mobile_home_banner_type == "mobile_Lottie" && $mobile_home_banner_lottie): ?>
                                <div class="lottie_wrap">  
                                    <div class="zIndex mob-show" id="lotties_885" data-url="<?php echo $mobile_home_banner_lottie['url']; ?>" data-loop="<?php echo $mobile_home_banner_lottie_play_in_repeat_mode; ?>"></div>
                                    <script>
                                        $(window).load(function(){
                                            if ($('#lotties_855').length > 0) {
                                                var anim = bodymovin.loadAnimation({
                                                    container: document.getElementById('lotties_885'),
                                                    path: "<?php echo $mobile_home_banner_lottie['url']; ?>",
                                                    renderer: 'svg',
                                                    autoplay: false,
                                                    loop: "<?php echo $mobile_home_banner_lottie_play_in_repeat_mode; ?>",
                                                });
                                                anim.playSegments(1,true)
                                            }
                                        })
                                    </script>
                                </div>
                            <?php endif; ?>
                            <?php if($mobile_home_banner_type == "mobile_Video" && $mobile_home_banner_video): ?>
                                <div class="video_container ">
                                    <video autoplay muted loop class="zIndex mob-show">
                                        <source src="<?php echo $mobile_home_banner_video['url']; ?>" type="video/mp4">
                                        <p>video not loaded</p>
                                    </video>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </span>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_border move_border home_bottom_border ">
        <img src="<?php echo get_template_directory_uri()."/assets/images/blob-line-home.png"; ?>" alt="border_rotate">
        <img src="<?php echo get_template_directory_uri()."/assets/images/mobile_border_rotate.png";  ?>" class="mobile"  alt="border_rotate">
    </div>
</div>
<!-- Banner Ends -->
<?php endif; ?>