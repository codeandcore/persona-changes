<?php
    $title           = get_sub_field('title');
    $content         = get_sub_field('content');
    $video_thumbnail = get_sub_field('video_thumbnail');
    $video_type      = get_sub_field('video_type');
    $video_file      = get_sub_field('video_file');
    $youtube_link    = get_sub_field('youtube_link');
?>

<section class="ip_video">
    <div class="container">
        <?php if(!empty($title)): ?>
            <span><?php echo $title; ?></span>
        <?php endif; ?>
        <?php if(!empty($content)): ?>
            <?php echo $content; ?>
        <?php endif; ?>
        <div class="video_container">
            <?php if($video_type == "videoFile" && $video_file != ""): ?>
                <div class="video_section">
                    <video controls="false" loop <?php if($video_thumbnail): ?> poster="<?php echo $video_thumbnail['url']; ?>" <?php endif; ?>>
                        <source src="<?php echo $video_file['url']; ?>" type="video/mp4">
                    </video>
                    <div class="play-btn">
                        <img src="<?php echo get_template_directory_uri()."/assets/images/header-icons/play-btn.svg" ?>" alt="play-btn">
                    </div>
                </div>
            <?php endif; ?>

            <?php if($video_type == "youtubeLink" && $youtube_link != ""): ?>
                <div class="video_section">
                    <?php if($video_thumbnail): ?>
                        <div class="poster_wrap">
                            <img src="<?php echo $video_thumbnail['url']; ?>" alt="poster img">
                        </div>
                    <?php endif; ?>
                    <a href="javascript:;" class="play-btn">
                        <img class="fancybox-video" data-link="<?php echo $youtube_link; ?>" src="<?php echo get_template_directory_uri()."/assets/images/header-icons/play-btn.svg" ?>" alt="play-btn">
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>