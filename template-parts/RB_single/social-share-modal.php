<?php
// Get current post URL 
$Post_url = get_the_permalink();

// Get current post title
$post_title = get_the_title();

// Construct sharing URL without using any script
$twitterURL = 'https://twitter.com/intent/tweet?text=' . $post_title . '&amp;url=' . $Post_url . '&amp;via=churel';
$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $Post_url;
$googleURL = 'https://plus.google.com/share?url=' . $Post_url;
$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $Post_url . '&amp;title=' . $post_title;

?>




<div class="modal-social-share modal" id="rainbowSoicalShare" aria-labelledby="rainbowSoicalShareLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-share-content">

                <div class="share-thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url(RB_IMG_URL . '/prev.png'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>

                <h4 class="share-title"><?php echo esc_html__('Share this with your social Community', 'rainbow-lite'); ?></h4>

                <ul class="social-share list-inline">
                    <li class="list-inline-item"><a class="facebook-btn share-button-round" target="_blank" data-toggle="tooltip" data-placement="top" title="" href="<?php echo esc_url($facebookURL); ?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>

                    <li class="list-inline-item"><a class="twitter-btn share-button-round" target="_blank" data-toggle="tooltip" data-placement="top" title="" href="<?php echo esc_url($twitterURL); ?>" onclick="window.open(this.href, 'twitter-share','width=580,height=296');return false;" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>

                    <li class="list-inline-item"><a class="linkedin-btn share-button-round" onclick="window.open(this.href, 'linkedin-share','width=580,height=296');return false;" target="_blank" data-toggle="tooltip" data-placement="top" title="" href="<?php echo esc_url($linkedInURL); ?>" data-original-title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>

                <div class="shot-share-modal-copy-wrapper">
                    <input id="copy-url" type="text" value="<?php the_permalink(); ?>" readonly="readonly" class="shot-share-modal-copy-input form-control">
                    <a href="#" class="shot-share-modal-copy-link js-share-clipboard"><?php echo esc_html__('Copy', 'rainbow-lite'); ?> </a>
                </div>
                <div class="copied-notification">
                    <span class="notify-close"><i class="fas fa-times"></i></span>
                    <h1><i class="fas fa-check"></i><?php echo esc_html__('Link Copied', 'rainbow-lite'); ?></h1>
                    <p><?php echo esc_html__('A link to this page has been copied to your clipboard!', 'rainbow-lite'); ?></p>
                </div>

            </div>
        </div>
    </div>
</div>