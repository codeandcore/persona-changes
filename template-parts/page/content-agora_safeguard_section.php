<?php 
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$icons = get_sub_field('icons');
$safeguard_list = get_sub_field('safeguard_list');
?>
<?php if(isset($title) || isset($subtitle) || isset($icons) || isset($safeguard_list)):?>
<!-- SafeGuard Section Ends -->
<section class="safegaurd">
    <div class="container">
        <div class="top_head row ">
            <div class="col-6">
                <div class="with-line animatable">
                    <?php if($title):?>
                    <?php echo $title;?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6 content">
            <?php if($subtitle):?>
                <p role="definition" class="fade animatable" data-delay="600"><?php echo $subtitle;?></p>
                <?php endif; ?>
                <?php if(!empty($icons)):?>
                <div data-delay="800" class="d-flex fadeInUp animatable img_wrap">
                <?php foreach( $icons as $image ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>">
                    <?php endforeach;?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if(have_rows('safeguard_list')):?>
        <div class="gaurdblocks row">
            <?php while(have_rows('safeguard_list')): the_row();?>
            <div class="col-4 text-center fadeInUp animatable" data-delay="800">
                <div class="gaurdblock">
                    <div class="gaurdblock_img">
                        <?php if(get_sub_field('image')):?>
                        <img src="<?php echo get_sub_field('image')['url'];?>"
                            alt="<?php echo get_sub_field('image')['alt'];?>">
                        <?php endif; ?>
                    </div>
                    <div class="gaurdblock_content">
                        <?php if(get_sub_field('title')):?>
                        <h5 role="heading" aria-level="5"><?php echo get_sub_field('title');?></h5>
                        <?php endif; ?>
                        <?php if(get_sub_field('content')):?>
                        <p role="definition"><?php echo get_sub_field('content');?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- SafeGuard Section Ends -->
<?php endif; ?>