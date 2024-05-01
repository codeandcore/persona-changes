<?php

 $sub_title = get_sub_field('sub_title');

 $title = get_sub_field('title');

 $content = get_sub_field('content');

 $service_list = get_sub_field('service_list');
 $random_string                          = random_string_creator(); 

 if($sub_title != '' || $title != '' || $content != '' || $service_list != ''):

 ?>

<!-- Additinal Service Section Starts -->

<section class="additinal_service">

    <div class="container">

        <div class="heading_price">

            <div class="row align-items-center">

                <div class="col-6">

                    <?php if($sub_title != ''):?>

                    <h6 class="animatable fadeInUp" data-delay="200"><?php echo $sub_title;?></h6>

                    <?php endif; ?>

                    <div class="with-line sm-height animatable">

                        <?php if($title != ''):?>

                        <?php echo $title;?>

                        <?php endif; ?>

                    </div>

                </div>

                <div class="col-6 animatable fade" data-delay="1600">

                    <?php if($content != ''):?>

                    <p><?php echo $content;?></p>

                    <?php endif; ?>

                </div>

            </div>

        </div>

        

        <?php if(have_rows('service_list')):?>

        <div class="service_wrapper animatable fadeInUp" data-delay="200">

            <div class="swiper service_box_swiper">

                <div class="justify-between swiper-wrapper">

                    <?php while(have_rows('service_list')): the_row();?>

                    <div class="swiper-slide service_box">

                        <?php if(get_sub_field('icon')):?>

                        <span><img src="<?php echo get_sub_field('icon')['url'];?>"

                                alt="<?php echo get_sub_field('icon')['alt'];?>"></span>

                        <?php endif; ?>

                        <?php if(get_sub_field('title')):?>

                        <?php echo get_sub_field('title');?>

                        <?php endif; ?>

                        <?php if(get_sub_field('coming_soon')){

                            if(get_sub_field('coming_soon_title')){ ?>
                                <h6><?php echo get_sub_field('coming_soon_title');?></h6>
                            <?php } ?>    
                                
                            <?php if(get_sub_field('coming_soon_notify_me_title')){ ?>
                                <label for="email"><?php echo get_sub_field('coming_soon_notify_me_title');?></label>
                            <?php }

                            if(get_sub_field('coming_soon_form')){                              
                                ?>
                                 <script>
                                    hbspt.forms.create({
                                        region: "na1",
                                        portalId: "7402724",
                                        formId: "<?php echo get_sub_field('coming_soon_form'); ?>",
                                        formInstanceId:'th_<?php echo $random_string; ?>',
                                        onFormSubmitted: function($form) {                          
                                           
                                        }
                                    });
                                </script>
                                <?php
                            }
                        }

                        else{ 
                             echo get_sub_field('content');
                        }
                        ?>

                       

                    </div>

                    <?php endwhile; ?>

                </div>

            </div>

        </div>

        <?php endif; ?>

        <div class="pos_rel">



            <div class="swiper_nav__services">

                <div class="swiper-pagination"></div>

            </div>

        </div>

    </div>

</section>

<!-- Additinal Service Section Ends -->

<?php endif; ?>