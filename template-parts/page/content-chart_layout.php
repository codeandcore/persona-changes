<?php 
    $get_to_know_title = get_sub_field('get_to_know_title',false,false);
    $all_chart_layout = get_sub_field('all_chart_layout');
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

    if (strpos($url,'co/') !== false) {
      $co_para_check = 'co available';
    }else{
        $co_para_check = 'co not available';
    }
    if($co_para_check == "co not available"):
    if($get_to_know_title || $all_chart_layout){
        ?>
        <section class="know-us">    
            <div class="container">
                <?php if($get_to_know_title): ?>
                <div class="text-center">
                    <h2><?php echo $get_to_know_title; ?></h2>
                </div>
                <?php endif;  

            if( have_rows('all_chart_layout') ){ ?>
            <div class="know-us__states row">
                <?php
                $p = 0;
                while( have_rows('all_chart_layout') ): the_row();
                    if( get_row_layout() == 'number_chart_layout' ){
                        $number_chart_title             = get_sub_field('number_chart_title');
                        $chart_counter_number           = get_sub_field('chart_counter_number');           

                        if( have_rows('number_chart_sub_title_list') ){
                            ?>
                            <div class="col-6">
                                <div class="know-us__states-item bg_white ku-counter d-flex align-items-center justify-between">
                                    <div class="left_col">
                                        <?php  
                                        if($number_chart_title):
                                            ?>
                                                <h5>
                                                    <?php echo $number_chart_title; ?>
                                                </h5>
                                            <?php
                                        endif;    
                                        ?>
                                        <ul class="no-listed">
                                            <?php  
                                            while( have_rows('number_chart_sub_title_list') ): the_row();
                                                $title_type_name    = get_sub_field('title_type_name');
                                                $title_type_number  = get_sub_field('title_type_number');
                                                if($title_type_name || $title_type_number): ?>
                                                    <li>
                                                        <strong><span data-target='<?php echo $title_type_number; ?>' class="counter"><?php echo $title_type_number; ?></span>%</strong><?php echo $title_type_name; ?>
                                                    </li>
                                                    <?php
                                                endif;   
                                            endwhile;
                                            ?>
                                        </ul>
                                    </div>  
                                    
                                    <div class="right_col text">
                                        <?php if($chart_counter_number): ?>
                                        <p><span data-target='<?php echo $chart_counter_number; ?>' class="counter"><?php echo $chart_counter_number; ?></span>+</p>
                                        <?php endif; ?>  
                                    </div>                                    
                                </div>
                            </div>
                            <?php
                        }
                        
                    }elseif( get_row_layout() == 'pie_chart_layout' ){

                        $pie_chart_title        = get_sub_field('pie_chart_title');
                        $pie_chart_main_image   = get_sub_field('pie_chart_main_image');
                        $pie_chart_image_mobile   = get_sub_field('pie_chart_image_mobile');
                        if( have_rows('pie_chart_sub_title_list') ){
                            $color_arr = array('#FAD09B','#F38A04');
                            ?>
                            <div class="col-6">
                                <div class="know-us__states-item bg_white ku-chart d-flex align-items-center justify-between ">
                                    <div class="left_col">
                                        <?php if($pie_chart_title): ?>
                                        <h5 class="animatable"><?php echo $pie_chart_title; ?></h5>
                                        <?php endif; ?>
                                        <ul class="no-listed itemInfo2">
                                            <?php
                                            $clr_key = 0;
                                            $pie_chart_sub_title_list_arr = get_sub_field('pie_chart_sub_title_list');
                                                if(!empty($pie_chart_sub_title_list_arr)){
                                                    $count_max_rows = count($pie_chart_sub_title_list_arr);
                                                 }
                                                while( have_rows('pie_chart_sub_title_list') ): the_row();
                                                    $pie_title_type_name       = get_sub_field('pie_title_type_name');
                                                    $pie_title_type_number     = get_sub_field('pie_title_type_number');
                                                    $pie_chart_icon            = "";
                                                    if($pie_title_type_name || $pie_title_type_number || $pie_chart_icon): ?>
                                                    <li data-color="<?php echo $color_arr[$clr_key]; ?>" data-counter="<?php echo $pie_title_type_number; ?>"  data-label="<?php echo $pie_title_type_name; ?>"><strong><span data-target='<?php echo $pie_title_type_number; ?>' class="counter"><?php echo $pie_title_type_number; ?></span>%</strong><?php echo $pie_title_type_name; ?></li>  
                                                    <?php endif; 
                                                    $clr_key++;                                              
                                                endwhile;
                                                if($count_max_rows == $clr_key){
                                                    $clr_key = 0;
                                                }
                                           
                                         
                                            ?>                                                                                     
                                        </ul>
                                    </div>
                                    <div class="right_col chart">
                                        <figure>
                                            <img id="purchasedLeadsByCategory<?php echo $p; ?>" class="item<?php echo $p+1; ?> chartshow" src="<?php echo $pie_chart_main_image['url']; ?>" alt="pie-chart" >
                                            <img src="<?php echo $pie_chart_image_mobile['url']; ?>" alt="pie-chart" class="pie-mobImg pie-<?php echo $p; ?>">
                                        </figure>
                                    </div>                               
                                </div>
                            </div>
                            <?php
                             $p++;
                        }

                    }elseif( get_row_layout() == 'progress_chart_layout' ){
                       
                        $prog_arr = array('progress-orange-lite300','progress-orange-lite400','progress-orange','progress-orange700');
                        $progress_chart_title       = get_sub_field('progress_chart_title');                       
                        $progress_chart_category    = get_sub_field('progress_chart_category');
                        if( have_rows('progress_chart_sub_title_list') ){  ?>
                            <div class="col-6">
                                <div class="ku-progressBar bg_white know-us__states-item">
                                    <?php if($progress_chart_title): ?>
                                    <h5 class="animatable"><?php echo $progress_chart_title; ?></h5>
                                    <?php
                                    endif; 
                                    ?>
                                    <div class="ku-progressBar__chart <?php echo $progress_chart_category; ?>">
                                        <div class="progress-ratings">
                                        <?php  
                                            $prg_key = 0;
                                            $progress_chart_sub_title_list_arr = get_sub_field('progress_chart_sub_title_list');                                           
                                            if(!empty($progress_chart_sub_title_list_arr)){
                                                $count_max_prg_rows = count($progress_chart_sub_title_list_arr);
                                            } 
                                            while( have_rows('progress_chart_sub_title_list') ): the_row();

                                                $progress_title_type_name      = get_sub_field('progress_title_type_name');
                                                $progress_title_type_number    = get_sub_field('progress_title_type_number');
                                                ?>
                                                <div class="animated-progress <?php echo $prog_arr[$prg_key]; ?>">
                                                    <span class="animatable" data-progress="<?php echo $progress_title_type_number/10; ?>">
                                                        <strong class="val_p"></strong>
                                                    </span>
                                                    <p><?php echo $progress_title_type_name; ?></p>
                                                    <div class="c_tooltip"><?php echo $progress_title_type_name; ?> : <?php echo $progress_title_type_number; ?>%</div>
                                                </div>
                                                <?php
                                                $prg_key++;                                                
                                            endwhile;    
                                            if($count_max_prg_rows == $prg_key){
                                                $prg_key = 0;
                                            } 
                                                                                 
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }  

                    }
                   
                endwhile;
                ?>   
            </div>
            <?php } ?>
            </div>
        </section>
    <?php } endif; ?>