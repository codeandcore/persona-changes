<!-- Syndication New Section Starts -->
<?php 
     $syndication_background_tool            = get_sub_field('syndication_background_tool');
     $syndication_section_main_title                  = get_sub_field('syndication_section_main_title',false,false); 
     $syndication_section_main_sub_title                = get_sub_field('syndication_section_main_sub_title'); 
     $syndication_blocks_list            = get_sub_field('syndication_blocks_list'); 
     $syndication_result_title            = get_sub_field('syndication_result_title'); 
     $syndication_result_content             = get_sub_field('syndication_result_content'); 
     $syndication_result_right_image            = get_sub_field('syndication_result_right_image'); 
     $syndication_result_right_image_list            = get_sub_field('syndication_result_right_image_list'); 
     $syndication_section_class            = get_sub_field('syndication_section_class'); 
     if($syndication_section_class == ''){ $syndication_section_class == 'col-3';}
?>
<?php if( !empty($syndication_background_tool) || !empty($syndication_section_main_title) || !empty($syndication_section_main_sub_title)  || !empty($syndication_result_title) || !empty($syndication_result_content) || !empty($syndication_result_right_image) || !empty($syndication_result_right_image_list) ): ?>
<section class="syndication <?php if($syndication_background_tool) { echo 'bg_gray'; } ?>" >
    <div class="container">
        <div class="heading text-center">
            <?php if(!empty($syndication_section_main_title)): ?>
            <?php echo $syndication_section_main_title; ?>
            <?php endif; ?>
            <?php if(!empty($syndication_section_main_sub_title)): ?>
                <?php echo $syndication_section_main_sub_title; ?>
            <?php endif; ?>
        </div>

        <?php if( !empty($syndication_blocks_list) ): ?>
        <div class="box-effect syndication-info">
            <?php while( have_rows('syndication_blocks_list') ): the_row(); 
                 $single_block_icon             = get_sub_field('single_block_icon'); 
                 $single_block_title            = get_sub_field('single_block_title'); 
                 $single_block_content          = get_sub_field('single_block_content'); 

                 if( !empty($single_block_icon) || !empty($single_block_title) || !empty($single_block_content) ):
            ?>
            <div class="syndication-info__wrap <?php echo $syndication_section_class;?>">
                <div class="syndication-info__block">
                    <?php if(!empty($single_block_icon)): ?>
                    <i><img src="<?php echo $single_block_icon['url']; ?>" alt="<?php echo $single_block_icon['alt']; ?>"></i>
                    <?php endif; ?>

                    <?php if(!empty($single_block_title)): ?>
                    <span class="h3"><?php echo $single_block_title; ?></span>
                    <?php endif; ?>

                    <?php if(!empty($single_block_content)): ?>
                    <p><?php echo $single_block_content; ?></p>
                    <?php endif; ?>
                </div>
            </div>   
            <?php endif; endwhile; ?>
        </div>
        <?php endif; ?>

        <?php if( !empty($syndication_result_title) || !empty($syndication_result_content) || !empty($syndication_result_right_image) || !empty($syndication_result_right_image_list) ): ?>
        <div class="syndication-lg__block">
            <div class="syndication-lg__block--left-content">
                <?php if(!empty($syndication_result_title)): ?>
                <h3><?php echo $syndication_result_title; ?></h3>
                <?php endif; ?>
                <?php if(!empty($syndication_result_content)): ?>
                    <?php echo $syndication_result_content; ?>
                <?php endif; ?>             
            </div>

            <?php if(!empty($syndication_result_right_image) || !empty($syndication_result_right_image_list) ): ?>
            <div class="syndication-lg__block--right-content animateContainer">
                <?php if(!empty($syndication_result_right_image) ): ?>
                <figure class='animatable'>
                    <img src="<?php echo $syndication_result_right_image['url']; ?>" alt="<?php echo $syndication_result_right_image['alt']; ?>">
                </figure>
                <?php endif; ?>   

                <?php if( !empty($syndication_result_right_image_list) ): ?>
                <ul class='no-listed'>
                    <?php 
                     $i=1; while( have_rows('syndication_result_right_image_list') ): the_row(); 
                     $right_single_image_result  = get_sub_field('right_single_image_result'); 
                     $animation_type            = get_sub_field('animation_type');                   
    
                     if( !empty($right_single_image_result) || !empty($animation_type) ):
                    ?>
                    <li style='transition-delay:<?php echo 0.4 * $i; ?>s' class='animatable blob-<?php echo $i; ?> <?php if( $animation_type ) { echo $animation_type; } ?> '>
                        <img src="<?php echo $right_single_image_result['url']; ?>" alt="<?php echo $right_single_image_result['alt']; ?>">
                    </li>
                    <?php endif; $i++; endwhile; ?>   
                </ul>
                <?php endif; ?>   
            </div>
            <?php endif; ?>      
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- Syndication New Section Ends -->
<?php endif; ?>