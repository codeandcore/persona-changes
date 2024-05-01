 <?php

 $top_title         = get_sub_field('top_title');
 $bottom_content    = get_sub_field('bottom_content');
 if ($top_title != "" || $bottom_content != "" ) {
    ?>
 <!-- Deal Maker Magezine Section Starts -->
     <section class="magazine">

        <div class="container">

            <div class="text-center">

                <?php echo $top_title; ?>

                <p class="animatable fadeInLeft"><?php echo $bottom_content; ?></p>

            </div>
        </div>    
    </section>       
    <?php 
 }
 