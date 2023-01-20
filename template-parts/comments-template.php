<?php // If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() && get_comments_number() ) {?>
        <div class="comments_template">
        <?php  comments_template(); ?>
        </div>
    <?php
	}
	else if ( !comments_open() && get_comments_number() ) {?>
        <div class="comments_template">
        <?php comments_template();   ?>
        <p class="comments-closed"> <?php  esc_html_e('Comments are closed', 'rainbow-lite'); ?> </p>
        </div>
    <?php
	}
	else if (comments_open() && !get_comments_number() ) {?>
        <div class="comments_template">
        <?php comments_template(); ?>
        </div>
    <?php
	}
	else{
	     echo '';    
	}
        
?>