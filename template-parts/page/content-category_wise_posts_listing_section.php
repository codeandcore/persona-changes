<?php

$video_banner_image         = get_sub_field('video_banner_image');
$video_url                  = get_sub_field('video_url');
$video_file                 = get_sub_field('video_file');
$after_banner_video_type    = get_sub_field('after_banner_video_type');
$case_study_or_blog_type    = get_sub_field('case_study_or_blog_type');
if($case_study_or_blog_type == "case_study_type"){
     $blog_category = get_sub_field('case_study_category');
}else{
     $blog_category = get_sub_field('blog_category');
}
$learn_more_button_text      = get_sub_field('learn_more_button_text');
$next_btn_text              = get_sub_field('next_blog_button_text');
$prev_btn_text              = get_sub_field('previous_blog_button_text');
?>

<!-- Filter Section Starts -->
<section class="filter">
    <div class="container">
        <?php 
        if(get_the_ID() != 884 && get_the_ID() != 35 ){    
            the_breadcrumb();
        }

        if($video_banner_image != '' || $video_url != ''):
        ?>
        <div class="video_wrap animatable fadeInUp">
            <figure>
                <?php if($video_banner_image):?>
                <img src="<?php echo $video_banner_image['url'];?>" alt="<?php echo $video_banner_image['alt'];?>">
                <?php endif; ?>

                <?php if($after_banner_video_type == "online_video" && $video_url != "" ):?>
                <a href="javascript:;" data-link="<?php echo $video_url;?>" class="fancybox-video play-btn">
                    <svg class="zIndex" width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="37.5378" cy="37.0006" r="36.9987" fill="#FF8C4B"></circle>
                        <path
                            d="M30.0957 45.1913V28.8073C30.0957 26.9742 32.112 25.8567 33.6664 26.8282L46.7737 35.0202C48.2362 35.9343 48.2362 38.0643 46.7737 38.9783L33.6664 47.1704C32.112 48.1419 30.0957 47.0244 30.0957 45.1913Z" fill="white"></path>
                    </svg>
                </a>
                <?php endif; ?>
                <?php if($after_banner_video_type == "offline_video" && $video_file != ""):?>
                    <a class="play-btn" data-link href="#myVideo">
                        <svg class="zIndex" width="75" height="74" viewBox="0 0 75 74" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="37.5378" cy="37.0006" r="36.9987" fill="#FF8C4B" />
                            <path
                                d="M30.0957 45.1913V28.8073C30.0957 26.9742 32.112 25.8567 33.6664 26.8282L46.7737 35.0202C48.2362 35.9343 48.2362 38.0643 46.7737 38.9783L33.6664 47.1704C32.112 48.1419 30.0957 47.0244 30.0957 45.1913Z"
                                fill="white" />
                        </svg>
                    </a>
                    <video width="640" height="320" controls id="myVideo" style="display:none;">
                        <source src="<?php echo $video_file['url']; ?>" type="video/mp4">                        
                        Your browser doesn't support HTML5 video tag.
                    </video>
                <?php endif; ?>
            </figure>
        </div>
        <?php endif; ?>
        <?php if($blog_category){
                //if(get_the_ID() == 35){
            if($case_study_or_blog_type == "case_study_type"){
                $post_type = "case-study";
            }else{
                $post_type = "post";
            }    
            /*if page deal maker then*/
            /*here deal maker page id is = 884*/
            $current_page_id  = get_the_ID();  
            
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args1 = array(
                'post_type'         => $post_type,
                'posts_per_page'    => 9,          
                'post__not_in'      => get_option('sticky_posts'),    
                'post_status'       => 'publish',
                //'order'             => 'ASC',
                //'orderby'           => 'title',
             
            );

            if( $current_page_id == 884){
                $args1['category__in'] = 19;	
                $args1['category__not_in'] = 140;	
            }

            // if(get_the_ID() == 35){
            // }else{
            //     $args1['category__in'] = array($blog_category);
            // }    
            
            $blogs = new WP_Query($args1);              
            $max_pages = $blogs->max_num_pages;
        ?>

            <input type="hidden" name="blog_catid" id="blog_catid_input" value="<?php echo $blog_category;?>">
            <input type="hidden" name="case_study_or_blog_type" id="case_study_or_blog_type" value="<?php echo $case_study_or_blog_type;?>">
            <input type="hidden" name="current_page_id" id="current_page_id" value="<?php echo get_the_ID();?>">
            <input type="hidden" name="loaded_post" id="loaded_post" value="1">
            <input type="hidden" name="learn_more" id="learn_more" value="<?php echo $learn_more_button_text;?>">
            <div class="row search_items" id="blog_category_list_ajax_response" data-maxpages=<?php echo $max_pages; ?>>

            <?php                 
                $i=0;

                while( $blogs->have_posts() ): $blogs->the_post();

                if(get_the_post_thumbnail_url() != ""){
                    $imgurl = get_the_post_thumbnail_url();
                }else{
                    $imgurl = get_template_directory_uri()."/assets/images/placeholder_agora.jpg";
                }               

                $i++;
                global $post;
                ?>
                <div class="col-4 animatable fadeInUp" data-delay="<?php echo $i; ?>00" data-blogid="<?php echo $post->ID; ?>">
                    <div class="search_block bg_white">
                        <a class="img_block" href="<?php echo get_permalink();?>">
                            <?php //the_post_thumbnail( 'full' );?>
                            <div class="bg_thumb" style="background-image: url('<?php echo $imgurl; ?>');"></div>
                        </a>
                        <?php  
                        $categories = get_the_category($post->ID);
                        //$tags_all = get_the_terms($post->ID,'case-study-tag');
                        //var_dump($termsall);                 
                      
                        $blog_blurb = get_field('blurb_text',$post->ID,false); //blog blurb
                        
                        //if(!empty($tags_all)):

                            //foreach($tags_all as $singletag){ 
                                //if($category->parent > 0){
                                ?>
                                <!--<div class="tag"><?php //echo $singletag->name;?></div>-->
                            <?php //}      
                           // }
                            //var_dump($categories[0]->name);   
                        //endif;
                        ?>

                        <div class="info test1">
                            <h6><a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a></h6>
                            <?php if($blog_blurb): ?>
                            <i><?php echo $blog_blurb;  //echo $blog_blurb;?></i>
                            <?php endif; ?>

                            <a href="<?php echo get_permalink($post->ID);?>" class="back_btn reverse_bb"><div class="arrow-round"></div><?php echo $learn_more_button_text; ?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                wp_reset_postdata();               
            ?>
            </div>
            <!-- <div class="divbtn text-center">	
			    <img id='loader_explore' style="display:none;width:50px;" src='<?php echo get_template_directory_uri(); ?>/assets/images/loader_explore.gif' alt='loader_blogs'>
		    </div> -->

            <!-- <div id="blog_category_list_pagination">

                <div class="pagination d-flex align-items-center justify-between">

                    <?php 

                    /*$big = 999999999;

                        echo paginate_links( array(

                            'base' => @add_query_arg('paged','%#%'),

                            'format' => '?paged=%#%',

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

                        wp_reset_postdata();*/

                    ?>

                </div>

            </div> -->

        <?php } ?>

    </div>

</section>

<!-- Filter Section Ends -->