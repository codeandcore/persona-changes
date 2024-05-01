<?php

$title = get_sub_field('title');

$content = get_sub_field('content');

$logo = get_sub_field('logo');

$image_1 = get_sub_field('image_1');

$image_2 = get_sub_field('image_2');

$image_3 = get_sub_field('image_3');

$image_4 = get_sub_field('image_4');

$image_5 = get_sub_field('image_5');

$image_6 = get_sub_field('image_6');

?>    

<?php if($title != "" || $content != "" || $logo != "" || $image_1 != ""|| $image_2 != "" || $image_3 != "" || $image_4 != "" || $image_5 != "" || $image_6 != ""):?>

    <!-- Seamless Integration Section Starts -->

    <section class="integration">

        <div class="container pos_rel">

            <div class="content">

                <div class="with-line animatable">

                    <?php if($title):?>

                    <?php echo $title;?>

                    <?php endif; ?>

                </div>

                <?php if($content):?>

                <div class="animatable fadeInUp" data-delay="600"><?php echo $content;?></div>

                <?php endif; ?>

            </div>

            <div class="circle_container animatable fade" data-delay="800">

                <div class="animation_wrap">

                    <div class="circuler_round sm-round" style="--n:2;--d:35s">

                        <?php if($logo):?>

                        <div class="logo">

                            <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'];?>">

                        </div>

                        <?php endif; ?>

                        <div class="item"><svg width="13" height="13" viewBox="0 0 13 13" fill="none"

                                xmlns="http://www.w3.org/2000/svg">

                                <ellipse cx="6.1604" cy="6.1604" rx="6.1604" ry="6.1604" fill="#F38A04" />

                            </svg> </div>

                        <div class="item"><svg width="13" height="13" viewBox="0 0 13 13" fill="none"

                                xmlns="http://www.w3.org/2000/svg">

                                <ellipse cx="6.1604" cy="6.1604" rx="6.1604" ry="6.1604" fill="#F38A04" />

                            </svg> </div>

                    </div>

                    <div class="circuler_round sm2-round" style="--n:3;--d:50s">

                        <?php if($image_1):?>

                        <div class="item">

                            <img src="<?php echo $image_1['url'];?>" alt="<?php echo $image_1['alt'];?>">

                        </div>

                        <?php endif; ?>

                        <?php if($image_2):?>

                        <div class="item">

                            <img src="<?php echo $image_2['url'];?>" alt="<?php echo $image_2['alt'];?>">

                        </div>

                        <?php endif; ?>

                        <?php if($image_3):?>

                        <div class="item">

                            <img src="<?php echo $image_3['url'];?>" alt="<?php echo $image_3['alt'];?>">

                        </div>

                        <?php endif; ?>

                    </div>

                    <div class="circuler_round sm3-round" style="--n:4;--d:70s">

                        <?php if($image_4):?>

                        <div class="item">

                        <img src="<?php echo $image_4['url'];?>" alt="<?php echo $image_4['alt'];?>">

                        </div>

                        <?php endif; ?>

                        <?php if($image_5):?>

                        <div class="item">

                        <img src="<?php echo $image_5['url'];?>" alt="<?php echo $image_5['alt'];?>">

                        </div>

                        <?php endif; ?>

                        <div class="item">

                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <ellipse cx="6.1604" cy="6.1604" rx="6.1604" ry="6.1604" fill="#F38A04" />

                            </svg>

                        </div>

                        <?php if($image_6):?>

                        <div class="item">

                        <img src="<?php echo $image_6['url'];?>" alt="<?php echo $image_6['alt'];?>">

                        </div>

                        <?php endif; ?>

                    </div>

                    <div class="circuler_round sm4-round"></div>

                    <div class="circuler_round sm5-round"></div>

                </div>

            </div>

        </div>

    </section>

    <!-- Seamless Integration Section Ends -->

<?php endif; ?>