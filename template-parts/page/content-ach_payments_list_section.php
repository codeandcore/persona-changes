<?php

 $sub_title = get_sub_field('sub_title');

 $title = get_sub_field('title');

 $payment_list = get_sub_field('payment_list');

 $button_text = get_sub_field('button_text');

 $button_url = get_sub_field('button_url');

 if($sub_title != '' || $title != '' || $payment_list != '' || $button_text != '' || $button_url != ''):

 ?>

<!-- ACH Payment Section Starts -->

<section class="ach_payment animatable fade">

    <div class="container">

        <div class="bg_white content animatable fadeInUp" data-delay="200">

            <div class="heading_price">

                <?php  if($sub_title != ''):?>

                <h6 class="animatable fade"><?php echo $sub_title; ?></h6>

                <?php endif; ?>

                <div class="with-line sm-height animatable">

                <?php  if($title != ''):?>

                    <?php echo $title; ?>

                <?php endif; ?>

                </div>

            </div>

            <?php  if(have_rows('payment_list')):?>

            <div class="payment_wrapper row">

            <?php $i=4; while(have_rows('payment_list')): the_row(); $i++; ?>

                <div class="col-4 animatable fadeInUp" data-delay="<?php echo $i*2; ?>00">

                    <div class="payment_box">

                        <span><img src="<?php echo get_template_directory_uri()."/assets/images/payment_tick.svg" ?>"

                                alt=""></span>

                        <?php if(get_sub_field('title')):?>

                        <h5><?php echo get_sub_field('title');?></h5>

                        <?php endif; ?>

                        <?php if(get_sub_field('tag')):?>

                        <p><?php echo get_sub_field('tag');?></p>

                        <?php endif; ?>

                    </div>

                </div>

                <?php endwhile; ?>

            </div>

            <?php endif; ?>

            <?php  if($button_text != ''):?>

            <a href="<?php echo $button_url;?>" class="right_btn reverse_bb orange-round animatable fadeInUp" data-delay="200">

                <div class="arrow-round"></div><span class="desktop"><?php echo $button_text;?></span><span

                    class="mobile"><?php echo $button_text;?></span>

            </a>

            <?php endif; ?>

        </div>

    </div>

</section>

<!-- ACH Payment Section Ends -->

<?php endif; ?>