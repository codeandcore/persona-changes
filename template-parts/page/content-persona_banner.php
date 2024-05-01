<?php
    $banner_image                 = get_sub_field('banner_image');                                       
    $small_title                  = get_sub_field('small_title');                                       
    $title                        = get_sub_field('title');                                            
    $content                      = get_sub_field('content');                                            
    $cta_text                     = get_sub_field('cta_text');                                      
    $cta_hbspt_id                 = get_sub_field('cta_hbspt_id');                                      
    $hbspt_title                  = get_sub_field('hbspt_title');                                    
    $hbspt_content                = get_sub_field('hbspt_content');                       
    $hbspt_thankyou_title         = get_sub_field('hbspt_thankyou_title');                                     
    $hbspt_thankyou_content       = get_sub_field('hbspt_thankyou_content');  
    $random_string_header         = "NDI34-DWK34-45ERF-DOR23-RO23G";
?>

<section class="banner-bg persona-banner bannerWrap" style="<?php if(!empty($banner_image)):?>background-image:url('<?php echo $banner_image['url']; ?>')<?php endif;?>">
    <div class="banner">
        <div class="container">
            <div class="banner-content">
                <?php if(!empty($small_title)):?>
                    <span><?php echo $small_title; ?></span>
                <?php endif;?>
                <?php if(!empty($title)):?>
                    <?php echo $title; ?>
                <?php endif;?>
                <?php if(!empty($content)):?>
                    <?php echo $content; ?>
                <?php endif;?>
                <?php if(!empty($content)):?>
                    <a href="javascript:;" class="btn hubspotbtn" data-popup="hubpop_<?php echo $random_string_header; ?>" role="button"><?php echo $cta_text; ?></a>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>