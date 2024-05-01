<?php
    $title            = get_sub_field('title');   
    $partner_list     = get_sub_field('partner_list');         
?>

<?php if( $title != "" || !empty($partner_list) ): ?>   
 <!-- Banking Partners Starts -->

 <section class="banking bg_white text-center no-shadow">

    <div class="container">
        <span class="fade animatable" data-delay="200">    
            <?php if( $title ): ?>
                <?php echo $title;?>
            <?php endif; ?>   
        </span>

        <ul class="no-listed d-flex banking-partners justify-content">
            <?php foreach($partner_list as $partner_image):?>
            <li class="fadeInUp animatable" data-delay="200"><img src="<?php echo $partner_image['url'];?>" alt="<?php echo $partner_image['alt'];?>" /></li>       
            <?php endforeach; ?>
        </ul>

    </div>

</section>

<!-- Banking Partners Ends -->
<?php endif; ?>