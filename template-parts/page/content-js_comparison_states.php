<?php
    $book_demo_button_text                  = get_field('book_demo_button_text','options');
    $book_demo_button_url                   = get_field('book_demo_button_url','options');
    $button_type                            = get_field('button_type','options');
    $random_string_header                   = "NDI34-DWK34-45ERF-DOR23-RO23G";
    ?>


<section class="compStates">
    <div class="container">
        
        <div class="compStates_content">
            <div class="topHeading">
                <?php if( get_sub_field('head_above_title') ):?>
                    
                    <h6 class="animatable fade"><strong></strong> <?php echo get_sub_field('head_above_title');?></h6>
                <?php endif; ?>

                <?php if( get_sub_field('head_main_title') ):?>
                    <div class="with-line animatable">
                        <?php echo get_sub_field('head_main_title' );?>
                    </div>
                <?php endif; ?>

                <?php if( get_sub_field('head_sub_title') ):?>
                    <p class="animatable fade"> <?php echo get_sub_field('head_sub_title');?></p>
                <?php endif; ?>
            </div>
            <div class="mainCompWrap">
                    <div class="topInfoComp">
                        <div class="pos_rel">
                            <div class="innerTopHeading d-flex justify-between align-items-center">
                                <h4><strong>vs.</strong></h4>
                                <?php if(have_rows('compare_state_list')):?> 
                                    <?php while(have_rows('compare_state_list')): the_row();
                                        $switchCheck = get_sub_field('compare_state_review_swticher');
                                    ?> 
                                        <!-- Logo-->
                                        <?php if( get_sub_field('compare_state_logo') ):?>
                                            <div class="logo">
                                                <img src="<?php echo get_sub_field('compare_state_logo')['url'];?>" alt="<?php echo get_sub_field('compare_state_logo')['title'];?>">
                                            </div>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php //if(is_user_logged_in()) : ?>
                                <?php //endif; ?>
                            </div>
                        </div>
                        <?php if( get_sub_field('compare_state_swticher') ):?>
                        <div class="starRatings pos_rel <?php if( $switchCheck) { echo 'active'; }  else { echo 'notActive'; }?>">
                        
                            <?php if( get_sub_field('compare_main_title') ):?>
                                <div class="label animatable fade"><?php echo get_sub_field('compare_main_title');?></div>
                            <?php endif; ?>

                            
                            <?php
                            $mobile_logo_url_arr = array();
                            $mobile_logo_title_arr = array();

                                if(have_rows('compare_state_list')): 
                                    while(have_rows('compare_state_list')): the_row();
                                        if( get_sub_field('compare_state_mobile_logo') ):
                                            $mobile_logo_url_arr[] =  get_sub_field('compare_state_mobile_logo')['url'];
                                            $mobile_logo_title_arr[] =  get_sub_field('compare_state_mobile_logo')['title'];                                
                                        endif; 
                                    endwhile;
                                endif; 
                            ?>

                            <?php
                            if(have_rows('compare_state_list')):
                                $t = 0;
                            ?> 
                                <?php while(have_rows('compare_state_list')): the_row();?>
                                    <?php if( get_sub_field('compare_state_rating') ):?>
                                        <?php $total = get_sub_field('compare_state_rating') - 0.05; ?>
                                            <div class="srWrap">
                                                <div class="singleOrg-rating">
                                                    <div class="svg">
                                                        <span class="svg"> <img src="<?php echo $mobile_logo_url_arr[$t];?>" alt="<?php echo $mobile_logo_title_arr[$t];?>"></span>
                                                    </div>
                                                    <input class="rating" max="<?php echo get_sub_field('compare_state_rating');?>" readonly="" step="0.01" style="--value:<?php echo $total;?>" type="range" value="4.8">
                                                    <div class="total"><?php echo get_sub_field('compare_state_rating');?></div>
                                                </div>
                                                <?php if( get_sub_field('compare_state_review_swticher') ):?>
                                                <span><?php if(get_sub_field('compare_state_reviews')) : echo get_sub_field('compare_state_reviews'); endif; ?> reviews</span>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php $t--; if($t < 0){ $t = 1; } endwhile; ?>
                                <?php endif; ?>
                            
                        </div>
                        <?php endif; ?>
                    </div>
                
                    
                <div class="compStates_content-states">
                    
                        <div style="display:none;" class="topInfoComp">
                            <div class="pos_rel">
                                <div class="innerTopHeading d-flex justify-between align-items-center">
                                    <h4><strong>vs.</strong></h4>
                                    <?php if(have_rows('compare_state_list')):?> 
                                        <?php while(have_rows('compare_state_list')): the_row(); ?> 
                                            <!-- Logo-->
                                            <?php if( get_sub_field('compare_state_logo') ):?>
                                                <div class="logo">
                                                    <img src="<?php echo get_sub_field('compare_state_logo')['url'];?>" alt="<?php echo get_sub_field('compare_state_logo')['title'];?>">
                                                </div>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php //if(is_user_logged_in()) : ?>
                                    <?php //endif; ?>
                                </div>
                            </div>

                             
                            <?php
                                $mobile_logo_url_arr = array();
                                $mobile_logo_title_arr = array();
                                        //var_dump(get_sub_field('compare_state_list'));
                                    if(have_rows('compare_state_list')): 
                                        while(have_rows('compare_state_list')): the_row();
                                            //if( get_sub_field('compare_state_mobile_logo') ):
                                                $mobile_logo_url_arr[] =  get_sub_field('compare_state_mobile_logo')['url'];
                                                $mobile_logo_title_arr[] =  get_sub_field('compare_state_mobile_logo')['title'];                                
                                            //endif; 
                                        endwhile;
                                    endif; 
                                ?>
                                
                            <?php if( get_sub_field('compare_state_swticher') ):?>
                                <div class="starRatings pos_rel">
                                
                                    <?php if( get_sub_field('compare_main_title') ):?>
                                        <div class="label animatable fade"><?php echo get_sub_field('compare_main_title');?></div>
                                    <?php endif; ?>

                                   

                                    <?php
                                    if(have_rows('compare_state_list')):
                                        $t = 0;
                                    ?> 
                                        <?php while(have_rows('compare_state_list')): the_row(); $checkStatus = get_sub_field('compare_state_review_swticher'); ?>
                                            <?php if( get_sub_field('compare_state_rating') ):?>
                                                <?php $total = get_sub_field('compare_state_rating') - 0.05; ?>
                                                    <div class="srWrap">
                                                        <div class="singleOrg-rating">
                                                            <div class="svg">
                                                                <span class="svg"> <img src="<?php echo $mobile_logo_url_arr[$t];?>" alt="<?php echo $mobile_logo_title_arr[$t];?>"></span>
                                                            </div>
                                                            <input class="rating" max="<?php echo get_sub_field('compare_state_rating');?>" readonly="" step="0.01" style="--value:<?php echo $total;?>" type="range" value="4.8">
                                                            <div class="total"><?php echo get_sub_field('compare_state_rating');?></div>
                                                        </div>
                                                        <?php if( $checkStatus ):?>
                                                            <span>
                                                                <?php if(get_sub_field('compare_state_reviews')) : echo get_sub_field('compare_state_reviews'); endif; ?> reviews
                                                            </span>
                                                        <?php endif; ?>
                                                        
                                                    </div>
                                                <?php endif; ?>
                                            <?php $t--; if($t < 0){ $t = 1; } endwhile; ?>
                                        <?php endif; ?>
                                    
                                </div>
                            <?php endif; ?>
                        </div>
                    
                    
                    <div class="innerWrap">
                    

                        
                        <?php if(have_rows('progress_rating_list')):
                            
                            ?>                 
                            <?php while(have_rows('progress_rating_list')): the_row();?>
                                <div class="progress-ratings d-flex justify-content pos_rel align-items-center">
                                    <?php if( get_sub_field('progress_rating_title') ):?>
                                        <div class="label animatable fade"><?php echo get_sub_field('progress_rating_title');?></div>
                                    <?php endif; ?>
                                
                                    <?php if(have_rows('progress_rating_sub_list')):  ?> 
                                        <div class="wrapMain">
                                            <?php $p = 1; $i = 1; while(have_rows('progress_rating_sub_list')): the_row();
                                                 $prog_subrating = get_sub_field('progress_rating_sub_rating'); 
                                            ?>
                                            <div class="animated-progress <?php if($i%2 == 0){ echo 'progress-orange'; }else{ echo 'progress-orange-lite'; } ?>">                                                    
                                                    <span class="<?php if( $prog_subrating < 7 || $prog_subrating == 0 ) { echo 'Inserr'; } ?>   animatable" style="width:<?php echo $prog_subrating * 10;?>%" data-progress="<?php echo $prog_subrating;?>">                                                        
                                                        <p>                                                                
                                                            <?php 
                                                                $mobo_url = $mobile_logo_url_arr[$p];
                                                                $mobo_title = $mobile_logo_title_arr[$p];
                                                            ?>
                                                            <span class="svg testdemo"> <img src="<?php echo $mobo_url;?>" alt="<?php echo $mobo_title;?>"></span>
                                                            <?php if( $prog_subrating < 7 || $prog_subrating == 0 ) { ?>
                                                                <span class="val Insufficient">
                                                                    Insufficient G2 reviews
                                                                </span>
                                                            <?php } else { ?>
                                                                <span class="val">
                                                                    <?php 
                                                                        $currentValue =  $prog_subrating / 10 * 10;
                                                                        echo number_format($currentValue, 1, '.', ""); 
                                                                    ?>
                                                                </span>
                                                            <?php } ?>
                                                        </p>
                                                    </span>
                                                    
                                                    <?php                                                          
                                                    if( $prog_subrating == 0 || $prog_subrating < 7) { ?>
                                                        <span class="val val_out Insufficient">
                                                            Insufficient G2 reviews
                                                        </span>
                                                    <?php
                                                    }else{ ?>
                                                        <span class="val val_out">
                                                            <?php 
                                                                $currentValue =  $prog_subrating / 10 * 10;
                                                                echo number_format($currentValue, 1, '.', ""); 
                                                            ?>
                                                        </span>
                                                        
                                                    <?php                                                        
                                                } 
                                                ?>                                                    
                                            </div>
                                            <?php $p--; if($p < 0){ $p = 1; } $i++; endwhile; wp_reset_postdata() ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>            
                        <?php endif; ?>    
                    </div>
                    
                </div>            
            </div>
        </div>
       
        <div class="compStates_connect">
            <div class="text-center">
                <?php if (get_sub_field('info_text')) {
                    echo get_sub_field('info_text'); 
                }?>
                
                <?php if( $book_demo_button_text && $button_type == "Popup" ): ?>
                    <div class="mobBookDemo">
                            <a href="javascript:;" class="btn hubspotbtn" data-popup="hubpop_<?php echo $random_string_header; ?>" role="button"><?php echo $book_demo_button_text; ?></a>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="text-center btnWrap">
                    <?php if (get_sub_field('g2_url') && get_sub_field('g2_url_text')) { ?>
                        <a target="_blank" href="<?php echo get_sub_field('g2_url'); ?>" class="right_btn reverse_bb orange-round"><div class="arrow-round"></div><?php echo get_sub_field('g2_url_text') ?></a>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>