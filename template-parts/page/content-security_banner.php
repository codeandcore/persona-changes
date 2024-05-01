<?php
$top_orange_security_title          = get_sub_field('top_orange_security_title',false,false);
$safeguard_main_title               = get_sub_field('safeguard_main_title',false,false);
$safeguard_content                  = get_sub_field('safeguard_content');
$security_single_image              = get_sub_field('security_single_image');
$security_banner_image              = get_sub_field('security_banner_image');

$banner_type                        = get_sub_field('security_banner_type');
$banner_image                       = get_sub_field('banner_image');
$banner_video                       = get_sub_field('banner_video');
$banner_lottie                      = get_sub_field('banner_lottie');
$banner_lottie_play_in_repeat_mode  = get_sub_field('banner_lottie_play_in_repeat_mode');

if($top_orange_security_title || $safeguard_main_title || $safeguard_content || $security_single_image || $security_banner_image):
?>
<section class="investor-empower secBanner">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js"></script>
  <div class="container">
    <div class="row justify-between align-items-center">
      <div class="col-4 info_text">
        <?php if($top_orange_security_title): ?>
        <h1 role="heading">
          <?php echo $top_orange_security_title; ?>
        </h1>
        <?php endif; ?>

        <?php if($safeguard_main_title): ?>
        <div class="with-line sm-height animatable animated">
          <h2 class="animate"> <?php echo $safeguard_main_title; ?> </h2> 
        </div>
        <?php endif; ?>

        <div class="mobileSec">
          <?php if($banner_type != "" || $banner_image != "" || $banner_video != "" || $banner_lottie != ""): ?>
              <?php if($banner_type == "Image" && $banner_image): ?>
                  <div class="secImg ">
                      <figure>
                          <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>">
                      </figure> 
                  </div>
              <?php endif; ?>                    
              <?php if($banner_type == "Lottie" && $banner_lottie): ?>
                  <div class="lottie_wrap ">  
                      
                      <div class="lottie-player zIndex mob-show" id="lotties_055"></div>
                      <script>
                          $(document).ready(function(){
                              if ($('#lotties_055').length > 0) {
                                  var anim = bodymovin.loadAnimation({
                                      container: document.getElementById('lotties_055'),
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
          <?php endif; ?>
        </div>

        <?php if($safeguard_content): ?>
        <div class="text-content">
          <p> <?php echo $safeguard_content; ?></p>
        </div>
        <?php endif; ?>

        <?php if( have_rows('security_image_list') ): ?>
        <div class="d-flex img_wrap">
            <?php while(have_rows('security_image_list')): the_row(); ?>
              <?php if( get_sub_field('security_single_image') ): ?>
                <img src="<?php echo get_sub_field('security_single_image')['url']; ?>" alt="<?php echo get_sub_field('security_single_image')['alt']; ?>">
              <?php endif; ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
      </div>

        <?php if($banner_type != "" || $banner_image != "" || $banner_video != "" || $banner_lottie != ""): ?>
          <div class="col-8 text-center secBanner_img">
              <?php if($banner_type == "Image" && $banner_image): ?>
                  <div class="secImg ">
                      <figure>
                          <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>">
                      </figure> 
                  </div>
              <?php endif; ?>                    
              <?php if($banner_type == "Lottie" && $banner_lottie): ?>
                <div class="blob_wrap">
                  <svg width="428" height="378" viewBox="0 0 428 378" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M233.009 0.404048C281.646 4.57662 312.88 48.158 347.023 82.9754C380.576 117.192 419.389 149.277 425.555 196.755C432.436 249.75 421.582 309.579 380.972 344.412C341.816 377.998 289.982 385.363 234 369.5C189.199 356.806 167.48 319.695 133.814 295.745C87.006 262.446 9.6304 253.447 0.850549 196.755C-7.95814 139.876 53.5513 98.7839 97.5487 61.5727C136.854 28.3302 181.677 -3.99983 233.009 0.404048Z" fill="#FFF2E8"></path>
                  </svg>
                </div>
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
            <!-- <div class="secImg">
              <figure>
                <img src="<?php echo $security_banner_image['url']; ?>" alt="<?php echo $security_banner_image['alt']; ?>">
              </figure>
            </div> -->
          </div>
        <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>