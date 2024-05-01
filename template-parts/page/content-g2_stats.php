<?php 
$states_list = get_sub_field('states_list');
?>
<!-- Management Market Starts -->
<div class="pos_rel">
        
        <div class="top_border move_border animatable">
            <svg width="1920" height="208" viewBox="0 0 1920 208" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-9.5 1C270.5 85.5 885 270 1930.5 185" stroke="#F38A04" />
            </svg>
        </div>
    </div>
<section class="patternStates">
    
    <div class="container">
        
        <?php if(have_rows('states_list')):?>
        <div class="states pos_rel row align-items-center justify-between zIndex animatable fadeInUp" data-delay="400">
            <?php while(have_rows('states_list')): the_row();?>
            <div class="col-4">
                <div class="states_counter">
                    <?php if(get_sub_field('number')):?>
                    <h3 role="heading" aria-level="3"><?php echo get_sub_field('prefix');?><span
                            class="counter"><?php echo get_sub_field('number');?></span><?php echo get_sub_field('postfix');?>
                    </h3>
                    <?php endif; ?>
                    <?php if(get_sub_field('title')):?>
                    <p><?php echo get_sub_field('title');?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- Management Market Ends -->