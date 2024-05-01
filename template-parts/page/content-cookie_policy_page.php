<?php

$cookie_policy_header_title         = get_sub_field('cookie_policy_header_title');

$cookie_policy_header_title_bold    = get_sub_field('cookie_policy_header_title_bold');

$cookie_policy_last_revision_text   = get_sub_field('cookie_policy_last_revision_text');

$cookie_policy_content              = get_sub_field('cookie_policy_content',false,false,false);
$back_button_text_cookie              = get_sub_field('back_button_text_cookie');
$back_button_url_cookie              = get_sub_field('back_button_url_cookie');

?>

<?php if($cookie_policy_header_title != "" || $cookie_policy_header_title_bold != "" || $cookie_policy_last_revision_text != ""): ?>

 <!-- Banner Starts -->

<div class="pos_rel bannerWrap">

    <div class="banner bg_blue">

        <div class="container ">
            <?php //the_breadcrumb(); ?>
            <?php if($back_button_text_cookie && $back_button_url_cookie): ?>
            <a href="<?php echo $back_button_url_cookie; ?>" class="back_btn pos_rel text-white"><div class="arrow-round"></div><?php echo $back_button_text_cookie; ?></a>
            <?php endif; ?>

            <div class="text-center head_txt pos_rel">

                <?php if( $cookie_policy_header_title || $cookie_policy_header_title_bold ):?>

                <h1 class="text-white"><?php echo $cookie_policy_header_title; ?> <strong><?php echo $cookie_policy_header_title_bold; ?></strong></h1>

                <?php endif; ?>

                   <?php                        

                        // $u_time          = get_the_time( 'U' );

                        // $u_modified_time = get_the_modified_time( 'U' );

                        // // Only display modified date if 24hrs have passed since the post was published.

                        // if ( $u_modified_time >= $u_time + 86400 ) { 

                        //     $updated_date = get_the_modified_time( 'F j, Y' );                            

                        // }

                   ?>

                  

                

                <p class="text-white">

                    <?php if($cookie_policy_last_revision_text ): ?>  

                    <strong><?php echo $cookie_policy_last_revision_text; ?></strong>

                    <?php endif; ?>

                     <?php //echo $updated_date;
                        $u_time = get_the_time('U');
                        $u_modified_time = get_the_modified_time('U');
                        if ($u_modified_time >= $u_time + 86400) {  
                            echo get_the_modified_time('F jS, Y');
                        } else { 
                            echo get_the_date('F jS, Y'); } 
                     ?>

                </p>

                

            </div>

        </div>

    </div>

    <!-- Banner Border Starts -->

    <div class="bottom_border move_border">

        <svg xmlns="http://www.w3.org/2000/svg" width="1910" height="163" viewBox="0 0 1910 163" fill="none">

            <path d="M-50.9996 0.815866C448.299 202.912 1329 223.571 1909.5 12.3879" stroke="#F38A04"/>

        </svg>

    </div>

    <!-- Banner Border Ends -->

</div>

<!-- Banner Ends -->

<?php endif; ?>



<?php if($cookie_policy_content): ?>

<!-- General Page Content Starts-->

<section class="g-page animatable fadeInUp">

    <div class="container">

        <div class="content bg_white">

           <?php echo $cookie_policy_content; ?>

        </div>

    </div>

</section>

<!-- General Page Content Ends-->

<?php endif; ?>

