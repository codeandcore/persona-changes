<?php
$title = get_sub_field('title');
$without_curve_blob = get_sub_field('without_curve_blob');
if(have_rows('our_values_list')):
?>
<section class="our_value_wrapper <?php if($without_curve_blob): echo "partnership_wrap"; endif ?>">
    <div class="container">
        <?php if($title):?>
        <?php echo $title;?>
        <?php endif; ?>
        <div class="values_boxContainer">
            <?php $i= 0; while(have_rows('our_values_list')): the_row(); $i++;?>
            <div class="col-4 animatable fade" data-delay="<?php echo $i*2;?>00">
                <div class="value_box">
                    <?php if(get_sub_field('icon')):?>
                    <span><img src="<?php echo get_sub_field('icon')['url'];?>" alt="<?php echo get_sub_field('icon')['alt'];?>"></span>
                    <?php endif; ?>
                    <?php if(get_sub_field('title')):?>
                    <?php echo get_sub_field('title');?>
                    <?php endif; ?>
                    <?php if(get_sub_field('content')):?>
                    <p><?php echo get_sub_field('content');?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
</section>
<?php endif; ?>