<?php 
$random_string_header       = "NDI34-DWK34-45ERF-DOR23-RO23G";
$small_title                = get_sub_field('small_title');
$title                      = get_sub_field('title');
$content_sub_title          = get_sub_field('content_sub_title');
$contact_form               = get_sub_field('contact_form');
$thank_you_title            = get_sub_field('thank_you_title');
$thank_you_sub_title        = get_sub_field('thank_you_sub_title');
$thank_you_content          = get_sub_field('thank_you_content');
$thank_you_button_text      = get_sub_field('thank_you_button_text');
$thank_you_button_url       = get_sub_field('thank_you_button_url');
$pop_up_close_icon          = get_sub_field('pop_up_close_icon');
$pop_up_email_icon          = get_sub_field('pop_up_email_icon');

$content_sub_points_list    = get_sub_field('content_sub_points_list');
$contact_form_title         = get_sub_field('contact_form_title');
$request_button_text        = get_sub_field('request_button_text');
$schedual_button_text        = get_sub_field('schedual_button_text');


$book_demo_button_text      = get_field('book_demo_button_text','options');
$book_demo_button_url       = get_field('book_demo_button_url','options');
$button_type                = get_field('button_type','options');
$random_string                           = random_string_creator();  
$compare_banner_section_hero_image       = get_sub_field('compare_banner_section_hero_image');	
$svg_array = array('<div class="svgWrap"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 14.9998L9 11.9998M12 14.9998C13.3968 14.4685 14.7369 13.7985 16 12.9998M12 14.9998V19.9998C12 19.9998 15.03 19.4498 16 17.9998C17.08 16.3798 16 12.9998 16 12.9998M9 11.9998C9.53214 10.6192 10.2022 9.29582 11 8.04976C12.1652 6.18675 13.7876 4.65281 15.713 3.59385C17.6384 2.53489 19.8027 1.98613 22 1.99976C22 4.71976 21.22 9.49976 16 12.9998M9 11.9998H4C4 11.9998 4.55 8.96976 6 7.99976C7.62 6.91976 11 7.99976 11 7.99976M4.5 16.4998C3 17.7598 2.5 21.4998 2.5 21.4998C2.5 21.4998 6.24 20.9998 7.5 19.4998C8.21 18.6598 8.2 17.3698 7.41 16.5898C7.02131 16.2188 6.50929 16.0044 5.97223 15.9878C5.43516 15.9712 4.91088 16.1535 4.5 16.4998Z" stroke="#F38A04" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>','<div class="svgWrap"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.5 5.49989L16 6.99989M11.5 8.49989L13 9.99989M8.49996 11.4999L9.99996 12.9999M5.49996 14.4999L6.99996 15.9999M2.56561 17.5656L6.43424 21.4342C6.63225 21.6322 6.73125 21.7313 6.84542 21.7683C6.94584 21.801 7.05401 21.801 7.15443 21.7683C7.2686 21.7313 7.3676 21.6322 7.56561 21.4342L21.4342 7.56561C21.6322 7.3676 21.7313 7.2686 21.7683 7.15443C21.801 7.05401 21.801 6.94584 21.7683 6.84542C21.7313 6.73125 21.6322 6.63225 21.4342 6.43424L17.5656 2.56561C17.3676 2.3676 17.2686 2.2686 17.1544 2.2315C17.054 2.19887 16.9458 2.19887 16.8454 2.2315C16.7313 2.2686 16.6322 2.3676 16.4342 2.56561L2.56561 16.4342C2.3676 16.6322 2.2686 16.7313 2.2315 16.8454C2.19887 16.9458 2.19887 17.054 2.2315 17.1544C2.2686 17.2686 2.3676 17.3676 2.56561 17.5656Z" stroke="#F38A04" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>','<div class="svgWrap"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 3.5V2M5.06066 5.06066L4 4M5.06066 13L4 14.0607M13 5.06066L14.0607 4M3.5 9H2M15.8645 16.1896L13.3727 20.817C13.0881 21.3457 12.9457 21.61 12.7745 21.6769C12.6259 21.7349 12.4585 21.7185 12.324 21.6328C12.1689 21.534 12.0806 21.2471 11.9038 20.6733L8.44519 9.44525C8.3008 8.97651 8.2286 8.74213 8.28669 8.58383C8.33729 8.44595 8.44595 8.33729 8.58383 8.2867C8.74213 8.22861 8.9765 8.3008 9.44525 8.44519L20.6732 11.9038C21.247 12.0806 21.5339 12.169 21.6327 12.324C21.7185 12.4586 21.7348 12.6259 21.6768 12.7745C21.61 12.9458 21.3456 13.0881 20.817 13.3728L16.1896 15.8645C16.111 15.9068 16.0717 15.9279 16.0374 15.9551C16.0068 15.9792 15.9792 16.0068 15.9551 16.0374C15.9279 16.0717 15.9068 16.111 15.8645 16.1896Z" stroke="#F38A04" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>');


//add_action('wpcf7_mail_sent', 'sent_contact_form_7');
if($small_title != "" || $title != "" || $content_sub_title != "" || $content_sub_points_list != "" || $contact_form_title != ""  || $contact_form != "" || $thank_you_title != "" || $thank_you_content != "" || $thank_you_button_url != "" ):?>
    <!-- Management Market Starts -->
    <section class="compitetion-v1">
        <div class="container">
            <div class="compitetion-v1-content">
                    <?php if($small_title):?>
                        <h1><?php echo $small_title;?></h1>
                    <?php endif; ?>
                    <?php if($title):?>
                        <?php echo $title;?>
                    <?php endif; ?>
                    <?php if($content_sub_title):?>
                        <p><?php echo $content_sub_title;?></p>
                    <?php endif; ?>
            
                <div class="compitetion-v1-content__btnWrap">
                    <?php if($request_button_text):?>
                        <a data-popup="hubpop_<?php echo $random_string_header; ?>" role="button" class="btn hubspotbtn" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"><path d="M20.8488 13.4176V7.73053C20.8488 6.05418 20.8488 5.21601 20.5225 4.57572C20.2356 4.01252 19.7777 3.55461 19.2145 3.26765C18.5742 2.94141 17.736 2.94141 16.0596 2.94141H9.67414C7.99779 2.94141 7.15961 2.94141 6.51933 3.26765C5.95612 3.55461 5.49822 4.01252 5.21125 4.57572C4.88501 5.21601 4.88501 6.05418 4.88501 7.73053V18.107C4.88501 19.7833 4.88501 20.6215 5.21125 21.2618C5.49822 21.825 5.95612 22.2829 6.51933 22.5699C7.15961 22.8961 7.99779 22.8961 9.67414 22.8961H12.8669M14.8624 11.921H8.87595M10.8714 15.912H8.87595M16.8578 7.93008H8.87595M15.3612 19.9029L17.3567 21.8984L21.8465 17.4086" stroke="white" stroke-width="1.4966" stroke-linecap="round" stroke-linejoin="round"/></svg><?php echo $request_button_text;?></a>
                    <?php endif; ?>
                    <?php if($schedual_button_text):?>
                        <a data-popup="bookcalender" role="button" class="btn" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"><path d="M21.1489 10.9233H3.1897M16.1603 2.94141V6.93235M8.17837 2.94141V6.93235M7.97882 22.8961H16.3598C18.0361 22.8961 18.8743 22.8961 19.5146 22.5699C20.0778 22.2829 20.5357 21.825 20.8227 21.2618C21.1489 20.6215 21.1489 19.7833 21.1489 18.107V9.726C21.1489 8.04965 21.1489 7.21148 20.8227 6.57119C20.5357 6.00799 20.0778 5.55008 19.5146 5.26312C18.8743 4.93688 18.0362 4.93688 16.3598 4.93688H7.97882C6.30247 4.93688 5.4643 4.93688 4.82402 5.26312C4.26081 5.55008 3.80291 6.00799 3.51594 6.57119C3.1897 7.21148 3.1897 8.04965 3.1897 9.726V18.107C3.1897 19.7833 3.1897 20.6215 3.51594 21.2618C3.80291 21.825 4.26081 22.2829 4.82402 22.5699C5.4643 22.8961 6.30247 22.8961 7.97882 22.8961Z" stroke="#F38A04" stroke-width="1.4966" stroke-linecap="round" stroke-linejoin="round"/></svg><?php echo $schedual_button_text;?></a>
                    <?php endif; ?>
                </div>
                <div class="compitetion-v1-graphic">
                    <?php if($compare_banner_section_hero_image):?> 
                        <figure>
                            <img src="<?php echo $compare_banner_section_hero_image['url']; ?>" alt="<?php echo $compare_banner_section_hero_image['alt']; ?>">
                        </figure>    
                    <?php endif; ?>
                    <?php if(have_rows('content_sub_points_list')):?>
                    <ul> 
                        
                        <?php $k = 0; $m = 3; while(have_rows('content_sub_points_list')): the_row();
                        $sub_image = get_sub_field('single_content_icon' );
                        ?>
                        <?php if(get_sub_field('single_content_point' )): ?>
                        <li>
                            <?php
                            if(!empty($sub_image)){ ?>
                            <div class="btnWrap svgWrap"><img src="<?php echo $sub_image['url'];?>" alt="<?php echo $sub_image['title'];?>"></div> 
                            <?php
                            }
                            else{
                                 echo $svg_array[$k]; 
                            }
                            ?>
                            <span><?php echo get_sub_field('single_content_point',false,false); ?></span>
                        </li>    
                        <?php endif; ?>                    
                        <?php $k++; 
                        if($k % $m == 0){
                            $k = 0;
                        }
                        endwhile; ?> 
                    </ul>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>

        <!-- Revenue Popup Starts -->
        <div class="popup" data-id="revenue-modal">
            <div class="popup_overlay"></div>
            <div class="popup_wrap s-height text-center">
                <div class="popup_container">
                        <div class="popup_header">
                            <a href="javascript:;" class="close_btn">&times;</a>
                            <figure>
                                <img src="<?php echo get_template_directory_uri()."/assets/images/popup-initial-img.svg"; ?>"/>
                            </figure>
                            <?php if($content_sub_title):?>
                                <span class="h2" role="heading" aria-level="2"><?php echo $contact_form_title;?></span>
                            <?php endif; ?>
                            
                        </div>
                        <div class="popup_body">
                            <div class="contact-form">
                                <?php if($contact_form):?>
                                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                                    <script>
                                        hbspt.forms.create({
                                            region: "na1",
                                            portalId: "7402724",
                                            formId: "<?php echo $contact_form; ?>"
                                        });
                                    </script>

                                    <script type="text/javascript" src="https://app.revenuehero.io/scheduler.min.js"></script>
                                    <script type="text/javascript">
                                        window.hero = new RevenueHero({ routerId: '970' })
                                        hero.schedule('hsForm_<?php echo $contact_form; ?>')
                                    </script>
                                    <script>
                                        var listentowidget = (e) => {
                                            // https://help.revenuehero.io/integrations/javascript-events#meeting-booked
                                            if (e.data.type === "MEETING_BOOKED") {
                                                //console.log("meeting booked");
                                                dataLayer.push({ event:"meeting_booked" });
                                            }

                                            // https://help.revenuehero.io/integrations/javascript-events#page-loaded
                                            if (e.data.type === "PAGE_LOADED") {
                                                //console.log("scheduler loaded");
                                                dataLayer.push({ event:"scheduler_loaded" });

                                                $('[data-id="bookcalenderX"]').removeClass('active show-modal')
                                            }
                                            if (e.data.type === "CLOSE_DIALOG") {
                                                //console.log("CLOSE_DIALOG called")
                                                location.reload();
                                            }
                                        };

                                        window.addEventListener("message", listentowidget);
                                    </script>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Revenue Popup Ends -->
    </section>
    
    <!-- Management Market Ends -->
    <?php endif; ?>

    
    