 <?php

 $add_repeat_content = get_sub_field('add_repeat_content');
 $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


 if (strpos($url,'co/') !== false) {
    $check = 1;
}else{
    $check = 0;
}

 if ($add_repeat_content && $check == 0) {
    ?>
     <!-- make an impact start-->
 <section class="make_an_impact">
    <div class="container">
        <div class="row zIndex">
    <?php 
    $i = 0;
    foreach ($add_repeat_content as $key => $value) {
        $i++;
        $icon = $value['icon'];
        $content = $value['content'];
        
        ?>
        <div class="col-4 animatable fadeInDown" data-delay="<?php echo $i*2; ?>00">
            <div class="single_white_box zIndex">
                <?php if ($icon) { ?>
                    <figure><img src="<?php echo $icon["url"]; ?>" alt="<?php echo $icon["alt"]; ?>"></figure>
                <?php } 
                
                    if ($content) {
                        echo $content   ;
                    }
                ?>
            </div>
        </div>
        <?php 
        
    }
    ?>
        </div>
    </div>
</section>
    <?php 
 }
 