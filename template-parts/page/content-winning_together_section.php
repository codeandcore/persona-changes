 <?php



  $winning_together_block_title  = get_sub_field('winning_together_block_title');



?>

 <!-- Winning Section Starts -->    



 <?php if( $winning_together_block_title ): ?>

 <section class="winning">        



    <div class="container">

        <div class="with-line animatable">

            <?php if( $winning_together_block_title ): ?>

            <!-- <h2 class="h_tag"> -->

                <?php echo $winning_together_block_title; ?>

            <!-- </h2> -->

            <?php endif; ?>

        </div>



        <?php if( have_rows('winning_together_all_block') ): ?>

        <div class="winning-wrap row"> 

            <?php while( have_rows('winning_together_all_block') ): the_row();  ?>                 

            <div class="col-4">

                <?php $i= 0; while( have_rows('winning_together_block_list') ): the_row(); $i++;

                    $image      = get_sub_field('winning_block_icon');

                    $title      = get_sub_field('winning_block_title');

                    $content    = get_sub_field('winning_block_content');

                 ?>        

                <div class="winning-block animatable fadeInUp" data-delay="<?php echo $i*2; ?>00">

                    <?php if( $image ): ?>

                    <i>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                    </i>

                    <?php endif; ?>



                    <?php if( $title ): ?>

                    <h6><?php echo $title; ?></h6>

                    <?php endif; ?>



                    <?php if( $content ): ?>

                    <div class="content">

                    <p><?php echo $content; ?></p>

                    </div>

                    <?php endif; ?>



                </div>

                <?php endwhile; ?>  

            </div>  

            <?php endwhile; ?>   

        </div>  

        <?php endif; ?>  

    </div>

</section>

<?php endif; ?>



<!-- Winning Section Ends -->