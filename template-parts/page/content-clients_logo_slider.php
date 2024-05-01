<?php 
$clients = get_field('clients','options');
?>
<?php if(!empty($clients)):?>
<!-- company marquee starts -->
<section class="company_wrap">
    
        <div class="swiper companyMarquee">
            <div class="swiper-wrapper align-items-center">
                <?php foreach($clients as $client):?>
                <div class="swiper-slide c-img"><img src="<?php echo $client['url'];?>" alt="<?php echo $client['alt'];?>" /></div>
                <?php endforeach; ?>
            </div>
        </div>
    
</section>
<!-- company marquee ends -->
<?php endif; ?>