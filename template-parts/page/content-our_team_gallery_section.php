<?php
$team_gallery = get_sub_field('team_gallery');
if(!empty($team_gallery)):
?>
<section class="gallery_full">
    <div class="container">
        <div class="gallery_container">
            <?php $i=0; foreach($team_gallery as $img): $i++; ?>
            <div class="gallery_box animatable fadeInUp" data-delay="<?php echo $i*2 ?>00">
                <img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>