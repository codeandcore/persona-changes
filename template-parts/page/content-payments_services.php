<?php
    $title = get_sub_field('title',false,false);
?>
<?php if($title): ?>
<section class="paymentServices">
    <div class="container">
        <div class="text-center paymentServices-head">
            <?php if($title): ?>
            <h2><?php echo $title; ?></h2>
            <?php endif; ?>
        </div>
        <?php if(have_rows('payment_services_list')): ?>
        <div class="row">
            <?php while(have_rows('payment_services_list')): the_row(); 
                $payment_services_list_title  = get_sub_field('payment_services_list_title');
                $payment_services_list_content = get_sub_field('payment_services_list_content');
                $payment_services_list_default_image = get_sub_field('payment_services_list_default_image');
                $payment_services_list_hover_image = get_sub_field('payment_services_list_hover_image');
                //var_dump($payment_services_list_default_image);
            ?>
            <div class="col-6">
                <div class="paymentServices_block">
                    <div class="paymentServices_block-imgWrap">
                        <?php if($payment_services_list_default_image): ?>
                        <img src="<?php echo $payment_services_list_default_image['url']; ?>" alt="<?php echo $payment_services_list_default_image['alt']; ?>" class="default">
                        <?php endif; ?>
                        <?php if($payment_services_list_hover_image): ?>
                        <img src="<?php echo $payment_services_list_hover_image['url']; ?>" alt="<?php echo $payment_services_list_hover_image['alt']; ?>" class="hover">
                        <?php endif; ?>                        
                    </div>
                    <?php if($payment_services_list_title): ?>
                    <h5><?php echo $payment_services_list_title; ?></h5>
                    <?php endif; ?>
                    <?php if($payment_services_list_content): ?>
                    <?php echo $payment_services_list_content; ?>
                    <?php endif; ?>
                </div>
            </div>
           <?php endwhile; ?>  
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>