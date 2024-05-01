<?php
    $title      = get_sub_field('title',false,false);
    $content    = get_sub_field('content');
?>
<?php if($title): ?>
<section class="serviceOffers bg_white">
    <div class="container">
        <div class="text-center serviceOffers-heading">
            <?php if($title): ?>
            <h2><?php echo $title; ?></h2>
            <?php endif; ?>
            <?php if($content): ?>
            <?php echo $content; ?>
            <?php endif; ?>
        </div>

        <?php if(have_rows('services_we_offers_list')): ?>
        <div class="row">
            <?php while(have_rows('services_we_offers_list')): the_row(); 
                $services_we_offers_title   = get_sub_field('services_we_offers_title');
                $services_we_offers_content = get_sub_field('services_we_offers_content');
                $services_we_offers_image   = get_sub_field('services_we_offers_image');
                
            ?>
            <div class="col-4">
                <div class="serviceOffers_block">
                    <?php if($services_we_offers_image): ?>
                    <figure><img src="<?php echo $services_we_offers_image['url']; ?>" alt="<?php echo $services_we_offers_image['alt']; ?>"></figure>
                    <?php endif; ?>

                    <?php if($services_we_offers_title): ?>
                    <h4><?php echo $services_we_offers_title; ?></h4>
                    <?php endif; ?>
                    
                    <?php if($services_we_offers_content): ?>
                    <?php echo $services_we_offers_content; ?>
                    <?php endif; ?>
                </div>
            </div>           
            <?php endwhile; ?>  
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>