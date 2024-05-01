<?php
    $current_page = 1;
    $args = array(
        'post_type' => 'ebook',
        'posts_per_page' => -1,
        'ignore_sticky_posts' => 1,
        'post_status' => 'draft',
    );

    $pages = new WP_Query($args);   
    $total_pages = $pages->found_posts;
    $first_post = $pages->posts[0];
    
    $chid =  $first_post->ID;    
    if (have_rows('ebook_content',$chid)) {
        $total_chapter_list_arr = array();
        while (have_rows('ebook_content',$chid)) {the_row();
            
            if( get_row_layout() == 'chapter_list_section' ){
                $total_chapter_list[] = count(get_sub_field('chapter_list')); // get the total repeater (chapter) of first loaded page
            }
           
           
        }
    }

    $args_page = array(
        'post_type'         => 'ebook',    
        'posts_per_page'    => -1,    
        'ignore_sticky_posts' => 1,
        'post_status'       => 'draft'      
    );
    
    $all_pages = new WP_Query($args_page);
      
?>
<div class="page_wrapper">

    <div class="container">

        <div class="sticky_wrap">

            <div class="chapter_navigation zIndex d-flex bg_white align-items-center">

                <div class="explore d-flex align-items-center">

                    <span><?php _e('Explore chapters','agora');?></span>

                    <div class="pos_rel">

                        <div class="select_wrap">
                            <select class="makeMeList" name="chapters" id="chapters">
                                <?php 
                                    while( $all_pages->have_posts() ): $all_pages->the_post();
                                    global $post; 
                                    ?>
                                    <option value="<?php echo get_the_ID();?>"><?php echo get_the_title();?></option>
                                    <?php endwhile; wp_reset_postdata(); ?> 
                            </select>
                        </div>

                        <div class="down_arrow">

                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none"

                                xmlns="http://www.w3.org/2000/svg">

                                <path d="M1 1L5 5L9 1" stroke="#262626" stroke-width="1.5" stroke-linecap="round"

                                    stroke-linejoin="round" />

                            </svg>

                        </div>

                    </div>

                </div>

                <div class="pages d-flex align-items-center">

                    <div class="align-items-center d-flex pages_count">

                        <span>Pages</span>

                        <input type="number" max="<?php echo $total_chapter_list[0];?>" value="<?php echo $current_page;?>" id="current_page">

                        <span class="pages_total">/  <?php echo $total_chapter_list[0];?></span>

                    </div>

                    <div class="pages_navigate d-flex">

                        <div class="pages_navigate_controls prev">

                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none"

                                xmlns="http://www.w3.org/2000/svg">

                                <path

                                    d="M5.57512 10.9596L1.09713 6.41579C0.987835 6.30582 0.933565 6.16327 0.933565 6.02132C0.933565 5.87937 0.987835 5.73671 1.09713 5.62686L5.57512 1.08304C5.79895 0.854926 6.17039 0.847508 6.4042 1.06596C6.63959 1.28292 6.64724 1.64564 6.42177 1.87224L2.31308 6.04275L6.42107 10.1704C6.64653 10.3963 6.63888 10.7596 6.40349 10.9767C6.16966 11.1952 5.79767 11.1876 5.57512 10.9596Z"

                                    fill="#262626" />

                            </svg>

                        </div>

                        <div class="pages_navigate_controls next">

                            <svg width="7" height="11" viewBox="0 0 7 11" fill="none"

                                xmlns="http://www.w3.org/2000/svg">

                                <path

                                    d="M1.83406 0.506022L6.41156 5.23376C6.52329 5.34818 6.57876 5.49649 6.57876 5.64419C6.57876 5.79188 6.52329 5.94032 6.41156 6.05462L1.83406 10.7824C1.60526 11.0197 1.22556 11.0274 0.986563 10.8001C0.745938 10.5744 0.738113 10.197 0.968595 9.96121L5.1686 5.62189L0.969313 1.32713C0.738838 1.0921 0.746663 0.714082 0.98728 0.48821C1.22631 0.260853 1.60656 0.26877 1.83406 0.506022Z"

                                    fill="#262626" />

                            </svg>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- General Page Content Starts-->

    <section class="g-page ebook_wrap">

        <div class="container">

            <div class="content bg_white" id="ajax_page_ebook_content">
                <?php
                    if (have_rows('ebook_content',$chid)) {
                        $total_chapter_list_arr = array();
                        while (have_rows('ebook_content',$chid)) {the_row();
                            
                            if( get_row_layout() == 'chapter_list_section' ){
                                // $chapter_list_rows = get_sub_field('chapter_list');
                                // $chapter_title = $chapter_list_rows[0]['chapter_title'];
                                // $chapter_content = $chapter_list_rows[0]['chapter_content'];                                
                            }
                          
                            get_template_part('template-parts/ebook/content', get_row_layout());
                        }
                        wp_reset_postdata();
                    }
                ?>
               
                

            </div>

        </div>

    </section>

    <!-- <div class="timer_ebook text-center">
        <p>Continue reading next chapter in <span><strong id="countdowntimer">5</strong></span> seconds</p>
        <a href="javascript:;" class="right_btn reverse_bb orange-round">
            <div class="arrow-round"></div>
            Stop redirection
        </a>
    </div> -->

    <!-- General Page Content Ends-->

    <?php 
        $button_type                            = get_field('ebook_cta_button_type','options');
        $button_popup                           = get_field('ebook_button_popup_script','options');
        $pop_up_title                           = get_field('ebook_popup_title','options');
        $popup_sub_title                        = get_field('ebook_popup_sub_title','options');
        $popup_book_demo_button                 = get_field('ebook_popup_book_demo_button','options');
        $popup_book_demo_button_link            = get_field('popup_book_demo_button_link','options');   
        $pop_up_close_icon                      = get_field('ebook_pop_up_close_icon','options');    
   

    if( $button_type == "popup" ): ?>
        <!-- Custom CTA popup Starts -->
        <div class="popup" data-id="ebooktalkExperts">
            <div class="popup_overlay"></div>
            <div class="popup_wrap text-center">
                <div class="popup_container">
                    <div class="popup_header">
                        <div class="text-left popup_heading">
                            <?php if($pop_up_title): ?><h2><?php echo $pop_up_title ; ?></h2><?php endif; ?>
                            <?php if($popup_sub_title): ?><h4><?php echo $popup_sub_title ; ?></h4><?php endif; ?>
                        </div>
                        <a href="javascript:;" class="close_btn">                   
                            <?php if($pop_up_close_icon): ?>                       
                                <img src="<?php echo $pop_up_close_icon['url']; ?>" alt="<?php echo $pop_up_close_icon['alt']; ?>">
                            <?php endif; ?>    
                        </a>
                    </div>
                    <div class="popup_body">
                        <div class="contact-form">                                   
                            <?php echo $button_popup; ?>
                        </div>
                        <?php if($popup_book_demo_button): ?>
                        <div class="book-demo-btn">
                            <a data-popup="bookcalender" href="<?php echo $popup_book_demo_button_link; ?>" class="btn"><?php echo $popup_book_demo_button['title']; ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Custom CTA popup Ends -->
        <?php endif; ?>

</div>