<?php 
    $title                    = get_sub_field('title');
    $EnableAnimation          = get_sub_field('enable_hover_animation');
    $financial_blocks         = have_rows('financial_blocks');
    $EnableAnimationClass     = "";
    if($EnableAnimation)
    {
        $EnableAnimationClass = "hover_animation";
    }
?>

<section class='finAutomation'>
    <div class="container">
        <?php if(!empty($title)):?>
            <?php echo $title; ?>
        <?php endif;?>
        <div class="row">
            <?php if($financial_blocks):?>
                <div class="finAutomation-blocks">
                    <div class="row">
                        <?php $count = 0; while( have_rows('financial_blocks') ): the_row(); 
                            $count++;
                            $column_class = $count <= 2 || ($count - 2) % 5 == 0 ? 'col-6' : 'col-4';
                            /* Repeater Fields */
                            $financial_block_title    = get_sub_field('financial_block_title');
                            $financial_block_content  = get_sub_field('financial_block_content');
                            $financial_block_graphics = get_sub_field('financial_block_graphics');
                        ?>

                            <div class="<?php echo $column_class; ?>">
                                <div class="singleBlock <?php echo $EnableAnimationClass; ?>">
                                    <?php if($financial_block_title): ?>
                                        <?php echo $financial_block_title; ?>
                                    <?php endif;?>
                                    <?php if($financial_block_content): ?>
                                        <?php echo $financial_block_content; ?>
                                    <?php endif;?>
                                    <?php if($financial_block_graphics): ?>
                                        <figure>
                                            <img src="<?php echo $financial_block_graphics['url']; ?>" alt="<?php echo $financial_block_graphics['alt']; ?>">    
                                        </figure>
                                    <?php endif;?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif;?>
        </div>    
    </div>
</section>