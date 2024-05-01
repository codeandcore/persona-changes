<?php

    $subtitle            = get_sub_field('subtitle');

    $title               = get_sub_field('title');

    $content             = get_sub_field('content',false,false,false);   

?>



<?php if( $subtitle != "" || $title != "" || $content != "" ): ?>   

<!-- FAQs Section Starts -->

<section class="faqs">



    <div class="container">



        <div class="row justify-between">



            <div class="col-5 faqs_head">
                <div class="faqs_head_inner">
                    <?php if( $subtitle ): ?>

                    <p><?php echo $subtitle;?></p>

                    <?php endif; ?>   



                    <div class="with-line animatable">

                        <?php if( $title ): ?>

                        <?php echo $title; ?>

                        <?php endif; ?>   

                    </div>



                    <?php if( $content ): ?>

                    <?php echo $content;?>

                    <?php endif; ?>
                </div>
            </div>



            <?php if( have_rows('faq_list') ): ?>

            <div class="col-6 faqs_list_block">



                <ul class="faqs_list no-listed">

                    <?php while(have_rows('faq_list')): the_row();

                        $question = get_sub_field('question');

                        $answer    = get_sub_field('answer');                       

                    ?>

                    <li class="animatable fadeInUp" data-delay="200">

                        <?php if( $question ): ?>

                        <h6>

                            <a href="javascript:void(0);">

                                <?php echo $question; ?>

                            </a>

                        </h6>

                        <?php endif; ?>



                        <?php if( $answer ): ?>

                        <div class="answer">

                        <?php echo $answer; ?>

                        </div>

                        <?php endif; ?>

                    </li>  

                    <?php endwhile; ?>                       



                </ul>



            </div>

            <?php endif; ?>



        </div>



    </div>



</section>

<!-- FAQs Section Ends -->

<?php endif;