<?php

$community_image = get_sub_field( 'community_image' );

$community_title = get_sub_field( 'community_title' );

$community_sub_title = get_sub_field( 'community_sub_title' );

$community_email_form = get_sub_field( 'community_email_form' );

$disscuss_title = get_sub_field( 'disscuss_title' );

$social_medial_list = get_sub_field( 'social_medial_list' );

$random_string                          = random_string_creator();  



?>

<section class="community action_section ">

<div class="top_border">

    <svg width="1920" height="114" viewBox="0 0 1920 114" fill="none" xmlns="http://www.w3.org/2000/svg">

        <path d="M-9.57422 54.1445C269.095 79.9932 892 197.5 1921 0.999998" stroke="#F38A04"/>

    </svg>

</div>

<div class="container animatable fade" data-dalay="400">

    <div class="row align-items-center zIndex">

        <div class="col-6 community_content">

            <div class="with-line animatable">

                <div class="animatable fadeInDown">

                    <?php echo $community_title; ?>

                </div>

                <div class="animatable fadeInUp">
                    <?php if($community_sub_title): ?>
                    <p class="mobile_txt"><?php echo $community_sub_title; ?></p>
                    <?php endif; ?>


                    <div class="community_email_form">

                        <div class="form_box">
                           
                            <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "7402724",
                                    formId: "<?php echo $community_email_form; ?>",
                                    formInstanceId:'th_<?php echo $random_string; ?>',
                                    onFormSubmitted: function($form) {                          
                                       
                                    }
                                });
                            </script>

                        </div>

                    </div>

                    <div class="dicussion d-flex align-items-center">

                        <p><?php echo $disscuss_title; ?></p>

                        <ul class="no-listed d-flex">

                            <?php while(have_rows('social_medial_list')): the_row(); 

                                $icon = get_sub_field( 'icon' );

                                $link = get_sub_field( 'link' );

                            ?>

                            <li>

                                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">

                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">

                                </a>

                            </li>

                            <?php endwhile; ?>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-6 community_img animatable fadeInRight">

            <figure>

                <img src="<?php echo get_template_directory_uri()."/assets/images/community_blob.png" ?>" alt="community_blob">

            </figure>

        </div>

    </div>

</div>

<div class="line_bg desktop-line" style="background-image: url(<?php echo get_template_directory_uri()."/assets/images/line_bottom.svg"?>);"></div>

<div class="line_bg mobile-line" style="background-image: url(<?php echo get_template_directory_uri()."/assets/images/mobile-line.svg"?>);"></div>

</section>

