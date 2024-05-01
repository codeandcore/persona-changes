 <?php
 $contact_address_list = get_sub_field('contact_address_list');
 if ($contact_address_list != "" ) { ?>
<!-- Contact Information Start-->
<section class="contact_address_information">
<div class="container">
    <div class="row">
        <?php foreach ($contact_address_list as $key => $value) { 
                $country_office = $value["country_office"];
                $office_address = $value["office_address"];
                $button_text = $value["button_text"];
                $contact_number = $value["contact_number"];
            ?>
            <div class="col-6">
                <div class="with-line_section animatable">
                    <div class="wrap_line_animi">
                        <?php
                            if ($country_office) {
                                echo '<h3>'.$country_office.'</h3>';
                            }
                        ?>
                        <?php
                            if ($office_address) {
                                echo $office_address;
                            }

                        if ($button_text && $contact_number) { ?>
                            <span><a href="tel:<?php echo $contact_number; ?>" class=""><div class="arrow-round"></div><?php echo $button_text; ?></a></span>
                        <?php } ?>                        
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</section>
<!-- Contact Information End-->
<?php } ?>