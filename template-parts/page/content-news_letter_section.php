<?php

    $news_letter_title              = get_sub_field('news_letter_title');

    $news_letter_content            = get_sub_field('news_letter_content');

    $above_title_from_newsletter    = get_sub_field('above_title_from_newsletter');

    $newsletter_form_chooser        = get_sub_field('newsletter_form_chooser');  
    $random_string                  = random_string_creator();   

?>

<?php if($news_letter_title != "" || $news_letter_content != "" || $above_title_from_newsletter != "" || $newsletter_form_chooser != "" ):?>

    <section class="agora_blocks bookkeeping">
    <div class="container">
        <div class="agora_block_wrap head_portal_wrap">            
            <div class="portal_block keeping_service" >



                <div class="row justify-content">



                    <div class="col-10 text-center animatable fadeInUp" data-delay="400">

                        <?php if( $news_letter_title ): ?>

                        <?php echo $news_letter_title; ?>

                        <?php endif; ?>



                        <?php if( $news_letter_content ): ?>

                        <?php echo $news_letter_content; ?>

                        <?php endif; ?>                        
                        
                        <span class="animatable fade" data-delay="800">
                        <?php if( $newsletter_form_chooser ): ?>
                            <div class="newsletter_from pos_rel">    
                            <?php if( $above_title_from_newsletter ): ?>
    
                            <p><?php echo $above_title_from_newsletter; ?></p>
    
                            <?php endif; ?>
                            
                             <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "7402724",
                                    formId: "<?php echo $newsletter_form_chooser; ?>",
                                    formInstanceId:'th_<?php echo $random_string; ?>'
                                });
                            </script>
                        </div>
                        <?php endif; ?>
                        </span>


                    </div>



                </div>



            </div>



        </div>



    </div>



</section>



<!-- Agora Blocks Ends -->

<?php endif; ?>

