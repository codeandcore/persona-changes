<?php 
$notable_guest_title        = get_sub_field('notable_guest_title',false,false);

if($notable_guest_title ):
?>
<section class="notable_guest">
    <div class="container">
        <div class="text-center">
            <?php if($notable_guest_title): ?>
            <h2><?php echo $notable_guest_title; ?></h2>
            <?php endif; ?>
        </div>

        <?php if( have_rows('notable_guest_list') ): ?>
        <div class="notable_guest--list row">
            <?php while(have_rows('notable_guest_list')): the_row(); ?>
            <div class="col-6">
                <div class="notable_guest--list-item d-flex bg_white">
                    <div class="notable_guest--list-item_info">
                        <?php if( get_sub_field('guest_name') ): ?>
                        <h4><?php echo get_sub_field('guest_name'); ?></h4>
                        <?php endif; ?>

                        <?php if( get_sub_field('guest_designation') ): ?>
                        <p><?php echo get_sub_field('guest_designation'); ?></p>
                        <?php endif; ?>

                        <?php if( get_sub_field('guset_content') ): ?>
                        <span><?php echo get_sub_field('guset_content'); ?></span>
                        <?php endif; ?>

                        <?php if( get_sub_field('listen_link_title') && get_sub_field('listen_link') ): ?>
                        <a target="_blank" href="<?php echo get_sub_field('listen_link'); ?>" class="right_btn reverse_bb orange-round"><div class="arrow-round"></div><?php echo get_sub_field('listen_link_title'); ?></a>
                        <?php endif; ?>
                    </div>

                    <?php if( get_sub_field('guset_image') ): ?>
                    <div class="notable_guest--list-item_img">
                        <img src="<?php echo get_sub_field('guset_image')['url']; ?>" alt="<?php echo get_sub_field('guest_name'); ?>">
                    </div>
                    <?php endif; ?>
                </div>
            </div> 
            <?php endwhile; ?> 
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>