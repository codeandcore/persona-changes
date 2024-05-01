<?php
if(have_rows('aboutus_content_with_image_list')):
    $i=1;while(have_rows('aboutus_content_with_image_list')): the_row();
?>
<section class="about_us_wrapper <?php if($i % 2 == 0){ echo 'reverse';}?>">
    <div class="container">
        <div class="row justify-between align-items-center">
            <div class="col-6 info_text">
                <?php if(get_sub_field('small_title')):?>
                <h6 class="animatable fade"><?php echo get_sub_field('small_title');?></h6>
                <?php endif; ?>
                <div class="with-line animatable">
                <?php if(get_sub_field('title')):?>                   
                    <?php echo get_sub_field('title');?>
                    <?php endif; ?>
                </div>
                <?php if(get_sub_field('content')):?>
                    <span class="animatable fade" data-delay="1000"><?php echo get_sub_field('content');?></span>
                <?php endif; ?>
            </div>
            <div class="col-6 info_blob text-center animatable fadeInRight" data-delay="400">
                <figure>
                    <img src="<?php echo get_sub_field('image')['url'];?>" alt="blob_img">
                </figure>
            </div>
        </div>
    </div>
</section>
<?php $i++; endwhile; ?>
<?php endif;?>