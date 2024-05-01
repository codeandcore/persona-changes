<?php
 $find_right_role_title = get_sub_field('find_right_role_title'); 
 if ($find_right_role_title) {
    $find_right_role_title = $find_right_role_title;
}else{
    $find_right_role_title = "";
}
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'co/') !== false) {
    get_header();
}else{
   
}
?>
 <!-- role section start -->    
 <section class="role_section ">
    <div class="container">
        <div class="row">            
            <?php  
                if (strpos($url,'co/') !== false) {
                    echo '';
                } else {
                    echo '<div class="col-12">';
                    echo $find_right_role_title;
                    echo '</div>';
                }
            ?>           
        </div>
        <div class="row">
            <div class="col-12">
                <div class="role_list">
                    <ul class="careers-jobs-new animatable fadeInUp">
                        <?php echo do_shortcode('[comeet_data]'); ?>
                    </ul>
                </div>
            </div>
        </div>            
    </div>
</section>
<!-- role section end -->
<?php 
    if (strpos($url,'co/') !== false) {
        get_footer();
    }else{
       
    }
?>