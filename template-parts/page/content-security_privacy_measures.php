<?php
$security_privacy_title          = get_sub_field('security_privacy_title');
$security_privacy_list           = get_sub_field('security_privacy_list');

if( $security_privacy_title || $security_privacy_list ): 
?>
<section class="ach_payment privacy-measure bg_white">
  <div class="container">
    <div class="bg_white content zIndex">
      <div class="heading_price">
        <div class="with-line sm-height animatable ">
            <?php if($security_privacy_title): ?>
              <?php echo $security_privacy_title; ?>
            <?php endif; ?>
        </div>
      </div>

      <?php if( have_rows('security_privacy_list') ): ?>
      <div class="payment_wrapper row">
        <?php while(have_rows('security_privacy_list')): the_row(); ?>
        <div class="col-6">
          <div class="payment_box">  
            <?php if( get_sub_field('tick_icon') ): ?>          
            <span >              
              <img src="<?php echo get_sub_field('tick_icon')['url']; ?>" alt="<?php echo get_sub_field('tick_icon')['alt']; ?>">
            </span>
            <?php endif; ?>

            <?php if( get_sub_field('security_privacy_list_single_title') ): ?>   
            <h5><?php echo get_sub_field('security_privacy_list_single_title'); ?></h5>
            <?php endif; ?>

            <?php if( get_sub_field('security_privacy_single_content') ): ?>   
            <p><?php echo get_sub_field('security_privacy_single_content'); ?></p>
            <?php endif; ?>
          </div>
        </div> 
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>