 <?php
 $map_background_image = get_sub_field('map_background_image');
 $first_office_pin_image = get_sub_field('first_office_pin_image');
 $second_office_pin_image = get_sub_field('second_office_pin_image');

 if ($map_background_image != "" || $first_office_pin_image != "" || $second_office_pin_image != "") { ?>
 <!-- Location Pin Start -->
 <section class="map-pin-section animatable fadeInDown" data-delay="400">
<div class="container">

    <div class="map-section">
        <?php if ($first_office_pin_image) { ?>
            <span class="pin pin-1">
                <img src="<?php echo $first_office_pin_image["url"]; ?>" alt="<?php echo $first_office_pin_image["alt"]; ?>">
                <span class="pulse"></span>
            </span>
        <?php } ?>
        <?php if ($second_office_pin_image) { ?>
        <span class="pin pin-2">
            <img src="<?php echo $second_office_pin_image["url"]; ?>" alt="<?php echo $second_office_pin_image["alt"]; ?>">
            <span class="pulse"></span>
        </span>
        <?php } ?>
        <?php if ($map_background_image) { ?>
            <img src="<?php echo $map_background_image["url"]; ?>" alt="<?php echo $map_background_image["alt"]; ?>" id="map">              
        <?php } ?>
    </div>

</div>

</section>

<!-- Location Pin End-->
<?php } ?>