<?php

    $small_title            = get_sub_field('small_title');

    $title                  = get_sub_field('title');

    $content                = get_sub_field('content');

    $button_type            = get_sub_field('button_type');

    $button_text            = get_sub_field('button_text');

    $button_url             = get_sub_field('button_url');

    $banner_type            = get_sub_field('banner_type');

    $banner_image           = get_sub_field('banner_image');

    $banner_video           = get_sub_field('banner_video');

    $button_url           = get_sub_field('button_url');

    $banner_lottie          = get_sub_field('banner_lottie');


    $banner_lottie_play_in_repeat_mode          = get_sub_field('banner_lottie_play_in_repeat_mode');

    $button_popup = get_sub_field('button_popup');

    $pop_up_title                           = get_sub_field('cptpop_up_title');

    $popup_sub_title                        = get_sub_field('popup_sub_title');

    $popup_book_demo_button                 = get_sub_field('popup_book_demo_button');

    $pop_up_close_icon                      = get_sub_field('pop_up_close_icon');

    $pop_up_email_icon                      = get_sub_field('pop_up_email_icon');

    $after_submit_pop_up_content            = get_sub_field('after_submit_pop_up_content');

    $pop_up_close_title                     = get_sub_field('pop_up_close_button_title');

    $banner_block_center                    = get_sub_field('banner_block_center');

    $blob_wrap_centralize                   = get_sub_field('blob_wrap_centralize');

    $tour_button_toggler                    = get_sub_field('tour_button_toggler');
    $tour_button_text                       = get_sub_field('tour_button_text');
    $tour_button_link                       = get_sub_field('tour_button_link');
    $tour_button_link_target                = get_sub_field('tour_button_link_target');
    
    $show_animating_image                   = get_sub_field('show_animating_image');
    $main_animating_image                   = get_sub_field('main_animating_image');
    $blob_images                            = get_sub_field('blob_images');

    $random_string                          = random_string_creator();  
    $book_demo_button_text                  = get_field('book_demo_button_text','options');
    
?>

    <!-- Management Market Starts -->

    <?php if( $small_title != "" || $title != "" || $content != "" || $button_text != ""  || $button_url != ""  || $banner_type != "" || $banner_image != "" || $banner_video != "" || $banner_lottie != "" ): ?>

    <section class="investor-empower <?php if($banner_block_center): echo 'banner_block_center'."_".get_the_ID(); endif; ?> <?php if($show_animating_image == true): echo 'variation-two'; endif; ?>">

        <div class="container">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js"></script>

            <div class="row justify-between align-items-center">

                <div class="col-6 info_text">

                    <?php if( $small_title ): ?>

                    <h1 role='heading' aria-level='1' class=""><?php echo $small_title; ?></h1>

                    <?php endif; ?>

                    <div class="with-line sm-height animatable animated">                       

                        <?php if( $title ): ?>

                        <span><?php echo $title; ?></span>

                        <?php endif; ?>                     

                    </div>

                    <?php if($show_animating_image == true){ ?>
                        <span class="animateContainer <?php echo 'imgWrap'."_".get_the_ID(); ?>">
                            <?php if($main_animating_image): ?>
                                <div class="image_wrap">
                                    <figure class="zIndex animatable">
                                        <img src="<?php echo $main_animating_image['url']; ?>" alt="<?php echo $main_animating_image['alt']; ?>">
                                    </figure> 
                                </div>
                            <?php endif; ?>
                            <?php if( have_rows('blob_images') ):  ?>
                                <ul class="blob_images no-listed">
                                    <?php $i = 1; while(have_rows('blob_images')): the_row(); 
                                        $image = get_sub_field('blob_image');
                                        $animation_type = get_sub_field('animation_type');
                                        ?>
                                        <li class='animatable  <?php if( $animation_type ) { echo $animation_type; } ?>  ' style='transition-delay:<?php echo 0.4 * $i; ?>s'>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </li>
                                    <?php $i++; endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </span>
                    <?php } ?>
                    <?php if($show_animating_image == false){ ?>
                        <?php if($banner_type == "Image" && $banner_image): ?>
    
                            <div class="image_wrap ">
    
                                <figure class="zIndex mob-show">
    
                                    <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>">
    
                                </figure> 
    
                            </div>
    
                        <?php endif; ?>
    
                        <?php if($banner_type == "Lottie" && $banner_lottie): ?>
                            <div class="lottie_wrap ">  
                                <div class="lottie-player zIndex mob-show" id="lotties_02"></div>
                                <script>
                                    $(document).ready(function(){
                                        if ($('#lotties_02').length > 0) {
                                            var anim = bodymovin.loadAnimation({
                                                container: document.getElementById('lotties_02'),
                                                path: "<?php echo $banner_lottie['url']; ?>",
                                                renderer: 'svg',
                                                autoplay: false,
                                                loop: "<?php echo get_sub_field('banner_lottie_play_in_repeat_mode'); ?>",
                                            });
                                            anim.playSegments(1,true)
                                        }
                                    })
                                </script>
                            </div>
                        <?php endif; ?>
    
                        <?php if($banner_type == "Video" && $banner_video): ?>
                            <div class="video_container ">
                                <video autoplay muted loop class="zIndex mob-show">
                                    <source src="<?php echo $banner_video['url']; ?>" type="video/mp4">
                                    <p>video not loaded</p>
                                </video>
                            </div>
                        <?php endif; ?>
                    <?php } ?>


                    <div  class="text-content ">
                        <?php if( $content ): ?>
                            <?php echo $content; ?>
                        <?php endif; ?>
                    </div>

                    <div class="btnWrap">
                        <?php if($button_type == "Link"):?>
                            <a href="<?php echo $button_url;?>" class="btn " ><?php echo $button_text;?></a>
                        <?php endif; ?>
    
                        <?php if($button_type == "Popup"):?>
                            <a href="javascript:;" class="btn hubspotbtn " data-popup="hubpop_<?php echo $random_string; ?>"  ><?php echo $button_text;?></a>
                        <?php endif; ?>

                        <?php if($tour_button_toggler): ?>
                            <?php 
                                if($tour_button_link_target == "newTab"){
                                    $target_value = "_blank";
                                }else{
                                    $target_value = "_self";
                                }    
                            ?>
                            <a href="<?php echo $tour_button_link;?>" class="btn outline" target="<?php echo $target_value; ?>"  ><?php echo $tour_button_text;?></a>
                        <?php endif; ?>
                    </div>




                    <?php if(have_rows('rating_list','options')):?>
                    <ul class="ratings no-listed d-flex " >
                        <?php 
                        $p = 1;
                        while(have_rows('rating_list','options')): the_row();?>
                        <li>
                            <a class="d-flex" href="<?php echo get_sub_field('brand_link');?>" target="_blank">
                                <div class="logo">
                                    <?php if(get_sub_field('icon')):?>
                                    <img src="<?php echo get_sub_field('icon')['url'];?>"
                                        alt="<?php echo get_sub_field('icon')['alt'];?>">
                                    <?php endif; ?>
                                </div>
                                <div class="content">
                                    <label for="rating_label_<?php echo $p; ?>" class="rating-label">
                                        <?php if(get_sub_field('rating')):?>
                                            <input id="rating_label_<?php echo $p; ?>" class="rating" max="5" readonly step="0.01" style="--value:4.90" type="range" value="<?php echo get_sub_field('rating');?>"> 
                                        <?php endif; ?>
                                    </label>
                                    <?php if(get_sub_field('brand_name')):?>
                                        <div class="rating_digit"><?php echo get_sub_field('brand_name');?> <?php if(get_sub_field('rating')){ echo ' / '.get_sub_field('rating');}?></div>
                                    <?php endif; ?>
                                </div>
                            </a>                                
                        </li>
                        <?php $p++; endwhile; ?>
                    </ul>
                    <?php endif; ?>

                </div>

                <div class="col-6  text-center blob_img_wrap " >

                    <div class="blob_wrap <?php if($blob_wrap_centralize): echo 'blob_wrap_centralize'."_".get_the_ID(); endif; ?>">
                        <svg width="531" height="460" viewBox="0 0 531 460" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M289.437 0.501897C349.852 5.68494 388.651 59.8205 431.062 103.07C472.741 145.573 520.954 185.427 528.612 244.403C537.16 310.233 523.677 384.551 473.232 427.819C424.595 469.538 352.359 461.943 289.437 449.553C239.052 439.632 208.039 397.116 166.22 367.366C108.076 326.003 11.9626 314.825 1.05653 244.403C-9.88538 173.749 66.5199 122.707 121.172 76.4839C169.996 35.1909 225.674 -4.96848 289.437 0.501897Z" fill="#FFF2E8"/>
                        </svg>
                    </div>    
                    
                    <?php if($show_animating_image == true){ ?>
                        <span class="animateContainer <?php echo 'imgWrap'."_".get_the_ID(); ?>">
                            <?php if($main_animating_image): ?>
                                <div class="image_wrap">
                                    <figure class="zIndex animatable">
                                        <img src="<?php echo $main_animating_image['url']; ?>" alt="<?php echo $main_animating_image['alt']; ?>">
                                    </figure> 
                                </div>
                            <?php endif; ?>
                            <?php if( have_rows('blob_images') ): ?>
                                <ul class="blob_images no-listed">
                                    <?php $i = 1; while(have_rows('blob_images')): the_row(); 
                                        $image = get_sub_field('blob_image');
                                        $animation_type = get_sub_field('animation_type');
                                        ?>
                                        <li class='animatable  <?php if( $animation_type ) { echo $animation_type; } ?>  ' style='transition-delay:<?php echo 0.4 * $i; ?>s'>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </li>
                                    <?php $i++; endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </span>
                    <?php } ?>
                    <?php if($show_animating_image == false){ ?>
                        <?php if($banner_type == "Image" && $banner_image): ?>
                            <div class="image_wrap">
                                <figure class="zIndex">
                                    <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>">
                                </figure> 
                            </div>
                        <?php endif; ?>
    
                        <?php if($banner_type == "Lottie" && $banner_lottie): ?>
                            <div class="lottie_wrap ">                        
    
                                <div class="lottie-player zIndex" id="lotties_01"></div>
                                <script>
                                    $(document).ready(function(){
                                        if ($('#lotties_01').length > 0) {
                                            var anim = bodymovin.loadAnimation({
                                                container: document.getElementById('lotties_01'),
                                                path: "<?php echo $banner_lottie['url']; ?>",
                                                renderer: 'svg',
                                                autoplay: false,
                                                loop: "<?php echo get_sub_field('banner_lottie_play_in_repeat_mode'); ?>",
                                            });
                                            anim.playSegments(1,true)
                                        }
                                    })
                                </script>
                            </div>
                        <?php endif; ?>
    
                        <?php if($banner_type == "Video" && $banner_video): ?>
                            <div class="video_container">
                                <video autoplay muted loop class="zIndex">
                                    <source src="<?php echo $banner_video['url']; ?>" type="video/mp4">
                                    <p>video not loaded</p>
                                </video>
                            </div>
                        <?php endif; ?>
                    <?php } ?>


                </div>

            </div>

        </div>

    </section>

    <!-- Management Market Ends -->

    <?php endif; ?>
    <?php if( $button_type == "Popup" ): ?>
        <!-- <div class="popup popup-initial" data-id="popupContainer-product">
            <div class="popup_overlay"></div>
            <div class="popup_wrap text-center">
                <div class="popup_container">
                    <div class="popup_header">
                        <a href="javascript:;" class="close_btn">
                            <?php if($pop_up_close_icon): ?>
                            <img src="<?php echo $pop_up_close_icon['url']; ?>"
                                alt="<?php echo $pop_up_close_icon['alt']; ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="popup_body">
                        <figure>
                            <img src="<?php echo get_template_directory_uri()."/assets/images/popup-initial-img.svg"; ?>"/>
                        </figure>
                        <?php if(get_field('initial_popup_title','option')): ?>
                            <?php echo get_field('initial_popup_title','option'); ?>
                        <?php endif; ?>

                        <?php if(get_field('initial_popup_content','option')): ?>
                            <p><?php echo get_field('initial_popup_content','option'); ?></p>
                        <?php endif; ?>
                        
                        <div class="popup_body-btnWrap">
                            <a href="#" class="btn hubspotbtn" data-popup="hubpop_<?php echo $random_string; ?>" role="button">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M20.5 12.5V6.8C20.5 5.11984 20.5 4.27976 20.173 3.63803C19.8854 3.07354 19.4265 2.6146 18.862 2.32698C18.2202 2 17.3802 2 15.7 2H9.3C7.61984 2 6.77976 2 6.13803 2.32698C5.57354 2.6146 5.1146 3.07354 4.82698 3.63803C4.5 4.27976 4.5 5.11984 4.5 6.8V17.2C4.5 18.8802 4.5 19.7202 4.82698 20.362C5.1146 20.9265 5.57354 21.3854 6.13803 21.673C6.77976 22 7.61984 22 9.3 22H12.5M14.5 11H8.5M10.5 15H8.5M16.5 7H8.5M15 19L17 21L21.5 16.5" stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>
                                <span><?php echo $book_demo_button_text; ?></span>
                            </a>
                            <a data-popup="bookcalender" href="javascript:;" class="btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10H3M16 2V6M8 2V6M7.8 22H16.2C17.8802 22 18.7202 22 19.362 21.673C19.9265 21.3854 20.3854 20.9265 20.673 20.362C21 19.7202 21 18.8802 21 17.2V8.8C21 7.11984 21 6.27976 20.673 5.63803C20.3854 5.07354 19.9265 4.6146 19.362 4.32698C18.7202 4 17.8802 4 16.2 4H7.8C6.11984 4 5.27976 4 4.63803 4.32698C4.07354 4.6146 3.6146 5.07354 3.32698 5.63803C3 6.27976 3 7.11984 3 8.8V17.2C3 18.8802 3 19.7202 3.32698 20.362C3.6146 20.9265 4.07354 21.3854 4.63803 21.673C5.27976 22 6.11984 22 7.8 22Z" stroke="#BFBFBF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                                <span><?php //echo $popup_book_demo_button; ?></span>
                                <span><?php echo "Schedule a meeting"; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>  -->
    <?php endif; ?>

<?php if( $button_type == "Popup" ): ?>

<!-- Custom CTA popup Starts -->

<div class="popup" data-id="hubpop_<?php echo $random_string; ?>">

    <div class="popup_overlay"></div>

    <div class="popup_wrap s-height text-center">
        <div class="popup_container">
        <div class="popup_header">

            <div class="text-left popup_heading">
                <!-- <span class="backBTN"> <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.77701 1.59279L9.77701 0.149657C9.77701 0.0245736 9.63134 -0.0445026 9.53298 0.0320412L1.00517 6.60547C0.932711 6.66108 0.874083 6.73228 0.833753 6.81366C0.793424 6.89503 0.77246 6.98442 0.77246 7.075C0.77246 7.16558 0.793424 7.25497 0.833753 7.33634C0.874083 7.41772 0.932711 7.48892 1.00517 7.54453L9.53297 14.118C9.63323 14.1945 9.777 14.1254 9.777 14.0003L9.777 12.5572C9.777 12.4657 9.7335 12.378 9.66161 12.322L2.85147 7.07593L9.66161 1.82802C9.7335 1.77201 9.77701 1.68427 9.77701 1.59279V1.59279Z" fill="#595959"/></svg> </span>
                <figure>
                    <img src="<?php echo get_template_directory_uri()."/assets/images/popup-initial-img.svg"; ?>"/>
                </figure>  -->
                <?php if($pop_up_title): ?><h2 role='heading' aria-level='2'><?php echo $pop_up_title ; ?></h2><?php endif; ?>

                <?php if($popup_sub_title): ?><h4 role='heading' aria-level='4'><?php echo $popup_sub_title ; ?></h4><?php endif; ?>

            </div>

            <a href="javascript:;" class="close_btn">                   

                <?php if($pop_up_close_icon): ?>                       

                    <img src="<?php echo $pop_up_close_icon['url']; ?>" alt="<?php echo $pop_up_close_icon['alt']; ?>">

                <?php endif; ?>    

            </a>

        </div>

        <div class="popup_body">

            <div class="contact-form">                 
                <script>
                    hbspt.forms.create({
                        region: "na1",
                        portalId: "7402724",
                        formId: "<?php echo $button_popup; ?>",
                        formInstanceId:'th_<?php echo $random_string; ?>',
                        onFormSubmitted: function($form) {                          
                            $("[data-id='hubpop_<?php echo $random_string; ?>']").removeClass("show-modal");
                            $(".th_<?php echo $random_string; ?>").addClass("show-modal");
                        }
                    });
                </script>  
            </div>

            <?php if($popup_book_demo_button): ?>

            <div class="book-demo-btn">

                <a data-popup="bookcalender" href="<?php echo $popup_book_demo_button['url']; ?>" class="btn" target="<?php echo $popup_book_demo_button['target']; ?>"><?php echo $popup_book_demo_button['title']; ?></a>

            </div>

            <?php endif; ?>

        </div>
        </div>

    </div>

</div>

<div class="popup blog_btp th_<?php echo $random_string; ?> thankyou-popup" data-id="thankyou-modal">
    <div class="popup_overlay"></div>
    <div class="popup_wrap text-center">
        <div class="popup_container">
            <div class="popup_header">
                <a href="javascript:;" class="close_btn">
                    <?php if($pop_up_close_icon): ?>
                    <img src="<?php echo $pop_up_close_icon['url']; ?>"
                        alt="<?php echo $pop_up_close_icon['alt']; ?>">
                    <?php endif; ?>
                </a>
            </div>
            <div class="popup_body">
                <div class="thankyou-popup">
                    <figure>
                        <?php if($pop_up_email_icon): ?>
                        <img src="<?php echo $pop_up_email_icon['url']; ?>"
                            alt="<?php echo $pop_up_email_icon['alt']; ?>">
                        <?php endif; ?>
                    </figure>
                    <?php if($after_submit_pop_up_content || $pop_up_close_title || $pop_up_close_button_url || $pop_up_close_button_url_open_tab): ?>
                    <div class="content">
                        <?php if($after_submit_pop_up_content): ?>
                            <?php echo $after_submit_pop_up_content; ?>
                        <?php endif; ?>
                        <a href="javascript:;" onClick="window.location.reload();" class="btn overflow-hide"><?php echo $pop_up_close_title; ?></a>
                    </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Custom CTA popup Ends -->

<?php endif; ?>