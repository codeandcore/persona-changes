<?php
$learn_more_button_text = get_sub_field('learn_more_button_text');
$hide_post_related_query = get_sub_field('hide_post_related_category');
if(isset(get_queried_object()->term_id)){
	$cat_id =  get_queried_object()->term_id;
}else{
	$cat_id = 0;
}
?>

 <!-- Filter Section Starts -->
 <section class="filter blog">

        <div class="container">
            <?php
                if(get_the_ID() != 15){
                    the_breadcrumb(); 
                }
           ?>
            <div class="bg_white content">

                <div class="minis with-line sm-height animatable">
                    <?php if(get_sub_field('search_title')): ?>
                        <?php echo get_sub_field('search_title'); ?>
                    <?php endif; ?>
                </div>

                <form method="" action="" id="blog-list-search-form">

                    <div class="form-group pos_rel">

                        <label for="search">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#F38A04" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>

                            </svg>

                        </label>

                        <?php 

                            if(get_sub_field('search_input_placeholder')){

                                $search_placeholder_text = get_sub_field('search_input_placeholder');

                            }else{

                                $search_placeholder_text = "Search Here";

                            }	

                        ?>

                        <input type="text" name="search" id="search" placeholder="<?php echo $search_placeholder_text; ?>">

                    </div>
                    <div class="tagswrap">
                        <ul class="tags no-listed d-flex">

                            <?php if(get_sub_field('all_tab_text')): ?>

                            <!--<li class="active blog-cat-filter tab_filter_0"><a data-catid="0" href="<?php //echo get_permalink(15); ?>"><?php //echo get_sub_field('all_tab_text'); ?></a></li>-->
                            <li class="active resource-blog-cat-filter tab_filter_0"><a data-caturl="<?php echo get_permalink(15); ?>" data-catid="0" href="<?php echo get_permalink(15); ?>"><?php echo get_sub_field('all_tab_text'); ?></a></li>

                            <?php endif; ?>

                            <?php

                            $args = array('parent'   => 0,
                            'ignore_sticky_posts' => 1,
                            'hide_empty' => 0);

                            $categories = get_categories($args);
                            // $terms = get_terms( array(
							// 	'taxonomy'   => 'post_tag',
							// 	'hide_empty' => false,
							// ) );

                            if(!empty($categories)):
                                //var_dump($categories);
                                foreach($categories as $term) {
                                if($term->term_id == "139"){
                                    if( is_user_logged_in()){
                                        echo '<li class="resource-blog-cat-filter tab_filter_'.$term->term_id.'"><a  href="#blog-section" data-catid="'.$term->term_id.'">' . $term->name . '</a></li>';
                                    }
                                }
                                else{
                            echo '<li class="resource-blog-cat-filter tab_filter_'.$term->term_id.'"><a href="#blog-section" data-catid="'.$term->term_id.'">' . $term->name . '</a></li>';
                                }                              

                            }

                            //echo '<li class="resource-blog-cat-filter tab_filter_ebook"><a href="#blog-section" data-catid="ebook" data-caturl="https://agorareal.com/myebook">' . Ebook . '</a></li>';

                            endif;

                            ?>

                        </ul>
                    </div>

                </form>

            </div>           
            <div class="row search_items" id="blog_list_ajax_response" data-pagination="#blog-section">
           
                <?php

                
               if(isset($_GET['search'])){
                    $keyword = $_GET['search'];  
                }else{
                    $keyword = "";
                }

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args1 = array(

                    'post_type' => 'post',
                    'ignore_sticky_posts' => 1,
                    'posts_per_page' => 9,                   
                    'paged' => $paged, 
                    'category__not_in' => $hide_post_related_query,
                    'ignore_custom_sort' => TRUE,
                    'post_status' => 'publish',
                    'orderby' => 'date',  // Specify the orderby parameter as a string
                    'order' => 'DESC', 

                );



                if($keyword != ''){
                    $args1['s'] = $keyword;
                    $keyword_tourl = "?search=".$keyword."#blog-section";                   
                }else{
                    $keyword_tourl = "/#blog-section";
                }

                $blogs = new WP_Query($args1);
                //global $wpdb;
                //echo $wpdb->last_query;
                //var_dump($args1);
                //var_dump($blogs->request);
                //die();

                $i=0;
                if($blogs->have_posts()){

                while( $blogs->have_posts() ): $blogs->the_post(); $i++;    
                
                global $post;

                $categories = get_the_category($post->ID);                       
             
                $termsall = get_the_terms($post->ID,'post_tag');
               
                if(get_the_post_thumbnail_url() != ""){
                    $blog_thumb_img_url = get_the_post_thumbnail_url();
                }else{
                    $blog_thumb_img_url = get_template_directory_uri()."/assets/images/placeholder_agora.jpg";
                }
                ?>

                <div class="col-4 fadeInUp animatable" >

                    <div class="search_block bg_white">

                        <a class="img_block" href="<?php echo get_permalink();?>">

                            <?php //the_post_thumbnail( 'full' );?>
                            <div class="bg_thumb" style="background-image: url('<?php echo $blog_thumb_img_url; ?>');"></div>

                        </a>

                        <?php                       
                        // $blog_full_img_url   = get_the_post_thumbnail_url($post->ID, 'full'); 
                        //echo $counter = count($termsall);
                        //var_dump($termsall);
                      
                  
                        ?>

                        <div class="info">
                            <div class="info_content">
                                <?php
                                    $categories = get_the_category($post->ID);
                                    $termsall = get_the_terms($post->ID,'post_tag');
                                
                                foreach($termsall as $term){ ?>
                                    <div class="category"><?php echo $term->name;?></div>
                                <?php } ?>
                           
                                <div class="inner_head">
                                    <div class="date pos_rel"><?php echo get_the_date('j M Y',$post->ID); ?></div>
                                    <div class="reading_time">
                                        <?php echo gp_reading_time(get_the_content($post->ID)); ?>
                                    </div>
                                </div>
                            </div>


                            <h6><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h6>

                            <?php 
                            
                            $blog_blurb = get_field('blurb_text'); //blog blurb   
                            //while(have_rows('post_contents')): the_row();                                                  

                            ?>
                           
                            <?php if($blog_blurb): ?>
                                <i><?php echo $blog_blurb; ?></i>
                            <?php endif; ?>


                            <?php //endwhile; ?>

                            <a href="<?php echo get_permalink();?>" class="back_btn reverse_bb"><div class="arrow-round"></div><?php echo $learn_more_button_text; ?></a>

                        </div>

                    </div>

                </div>

                <?php $i++; endwhile; wp_reset_postdata(); }else{
                    ?>
                    <div class="span_explore_data">No Content Available</div>
                    <?php
                } ?>

            </div>

         
            <div class="divbtn text-center">
                <a id="explore_more_btn" style="display: none;" class="btn" data-catid="0" href="<?php echo get_permalink(15); ?>"><?php echo get_field('explore_more_button_text','options'); ?></a>
            </div>
            

            <div id="blog_list_pagination">

                <div class="pagination d-flex align-items-center justify-between">

                    <?php 
   
                    $big = 999999999;
                        $purl = home_url()."/resources/".preg_replace("?search=", '', get_pagenum_link(1));
                     
                       // $base_url_arr['base'] = get_pagenum_link(1);                   
                        echo paginate_links( array(

                            'base' => $purl . '%_%',

                            'format' => 'page/%#%'.$keyword_tourl, 

                            'total'        => $blogs->max_num_pages,

                            'current'      => max( 1, get_query_var( 'paged' ) ),

                            'show_all'     => false,

                            'type'         => 'plain',

                            'end_size'     => 2,

                            'mid_size'     => 1,

                            'prev_next'    => true,

                            'prev_text'    => sprintf( '<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 13L1 7L7 1" stroke="#595959" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> %1$s', __( "", 'agora' ) ),

                            'next_text'    => sprintf( '%1$s <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 13L7 7L1 1" stroke="#595959" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>', __( "", 'agora' ) ),

                            'add_args'     => false,

                            'add_fragment' => '',

                        ) );

                        wp_reset_postdata();

                    ?>

                </div>

            </div>

        </div>

    </section>

    <!-- Filter Section Ends -->