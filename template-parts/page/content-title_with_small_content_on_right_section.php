 <?php
 $title = get_sub_field('title');
 $content = get_sub_field('content');

 $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
 if (strpos($url,'co/') !== false) {
    $check = 1;
}else{
    $check = 0;
}

 if ($title && $content && $check == 0) { ?>

 <!-- help us start -->

 <section class="help_us">

<div class="container">

    <div class="row">

        <div class="col-6">

            <div class="with-line animatable">

                <?php if ($title) { 
                    echo $title;
                    } ?>

            </div>

        </div>

        <div class="col-6">

            <div class="rt_content animatable fade" data-delay="1400">
                    <?php if ($content) { 
                        echo $content;
                     } ?>
                
            </div>

        </div>

    </div>

</div>

</section>

<!-- help us end -->

<hr>
<?php } ?>