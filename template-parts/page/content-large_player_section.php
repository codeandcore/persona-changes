 <?php
 $large_player_iframe_url        = get_sub_field('large_player_iframe_url');
 ?>
<section class="podcast bg_white"> 
    <div class="container">    
        <div class="podcast_frame animatable fadeInUp" data-delay="800">
            <?php if( $large_player_iframe_url ): ?>
            <div id='buzzsprout-large-player'></div>
            <script type='text/javascript' charset='utf-8' src='<?php echo $large_player_iframe_url; ?>'></script>
            <?php endif; ?>
        </div>
    </div>
</section>