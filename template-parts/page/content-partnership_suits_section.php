 <?php

  $partnership_suits_title  = get_sub_field('partnership_suits_title');

?>
 <!-- Winning Section Starts -->    

 <?php if( $partnership_suits_title != "" ): ?>
<!-- Partnership suits Section Starts -->

<section class="partnershipSuit">

    <div class="container">

        <div class="row justify-between">

            <div class="col-5">

                <div class="with-line animatable">

                <?php if( $partnership_suits_title ): ?>
                <!-- <h2 class="h_tag"> -->
                    <?php echo $partnership_suits_title; ?>
                <!-- </h2> -->
                <?php endif; ?>

                </div>

            </div>

            <div class="col-6 partnershipSuit__partner">
                <?php if( have_rows('partnership_suits_list') ): ?>
                <ul class="no-listed">
                    <?php while( have_rows('partnership_suits_list') ): the_row(); 
                        $partnership_information_title          = get_sub_field('partnership_information_title');
                        $partnership_information_sub_title      = get_sub_field('partnership_information_sub_title');
                        $partnership_suit_icon                  = get_sub_field('partnership_suit_icon');
                    ?>   
                    <li data-delay="800" class="animatable fadeInDown">
                        <?php if( $partnership_suit_icon ): ?>
                        <i>
                            <img src="<?php echo $partnership_suit_icon['url']; ?>" alt="<?php echo $partnership_suit_icon['alt']; ?>">
                        </i>
                        <?php endif; ?>

                        <div class="info">

                            <?php if( $partnership_information_title ): ?>
                            <?php echo $partnership_information_title; ?>
                            <?php endif; ?>

                            <?php if( $partnership_information_sub_title ): ?>
                            <p><?php echo $partnership_information_sub_title; ?></p>
                            <?php endif; ?>

                        </div>

                    </li>
                    <?php endwhile; ?>  
                </ul>
                <?php endif; ?>

            </div>

        </div>

    </div>

</section>

<!-- Partnership suits Section Ends -->

<?php endif; ?>

<!-- Winning Section Ends -->