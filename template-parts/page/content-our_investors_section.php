<?php
$title = get_sub_field('title');
$investors_logos = get_sub_field('investors_logos');
if(!empty($investors_logos)):
?>
<section class="our_investors_wrapper">
    <div class="container">
        <?php if($title):?>
        <h2 class="font-weight-medium animatable fade" data-delay="200"><?php echo $title;?></h2>
        <?php endif; ?>
        <div class="investors_container">
            <?php $i=0; foreach($investors_logos as $logo): $i++; ?>
            <div class="investors_box animatable fade" data-delay="<?php echo $i*2; ?>00">
                <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'];?>">
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php endif; ?>