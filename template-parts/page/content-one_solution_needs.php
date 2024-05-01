<?php if( get_sub_field('one_solution_heading') || get_sub_field('one_solution_list') ):?>
<section class="investmentNeed bg_white">
    <div class="container">
        <?php if( get_sub_field('one_solution_heading') ):?>
        <div class="text-center animatable">
            <?php echo get_sub_field('one_solution_heading');?>
        </div>
        <?php endif; ?>

        <?php if(have_rows('one_solution_list')):?>
        <div class="investmentNeed-row">
            <?php while(have_rows('one_solution_list')): the_row();?>
            <div class="investmentNeed-block animatable fadeInUp row align-items-center pos_rel">
                <div class="col-6 investmentNeed-block__info">
                    <?php if( get_sub_field('one_solution_title') ):?>
                    <div class="with-line animatable">
                        <h3 class="animate"><strong><?php echo get_sub_field('one_solution_title');?></strong></h3>
                    </div>
                    <?php endif; ?>

                    <?php if( get_sub_field('one_solution_content') ):?>
                        <p><?php echo get_sub_field('one_solution_content');?></p>
                    <?php endif; ?>
                    
                    <?php if(have_rows('one_solution_content_list')):?>
                    <ul class="no-listed">
                        <?php while(have_rows('one_solution_content_list')): the_row();?>   
                            <?php if( get_sub_field('one_solution_content_point') ):?>
                                <li><?php echo get_sub_field('one_solution_content_point');?></li>      
                            <?php endif; ?>                 
                        <?php endwhile; ?> 
                    </ul>
                    <?php endif; ?>

                    <?php if( get_sub_field('one_solution_image') ):?>
                        <div class="col-6 investmentNeed-block__img mobile_img zIndex">
                          <img src="<?php echo get_sub_field('one_solution_image')['url'];?>" alt="<?php echo get_sub_field('one_solution_image')['title'];?>">
                        </div>
                    <?php endif; ?>
                </div>

                <?php if( get_sub_field('one_solution_image') ):?>
                <div class="col-5 investmentNeed-block__img zIndex">
                    <img src="<?php echo get_sub_field('one_solution_image')['url'];?>" alt="<?php echo get_sub_field('one_solution_image')['title'];?>">
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?> 
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>