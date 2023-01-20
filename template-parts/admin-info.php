<div class="admin-info text-center">
    <div class="admin-img">
        <img src="<?php echo esc_url(get_avatar_url(get_current_user_id())); ?>" alt="<?php echo esc_attr(get_the_author_meta('display_name', get_current_user_id())); ?>">
        <h1><?php echo get_the_author_meta('display_name', get_current_user_id()); ?></h1>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <div class="r-setup r-info">
                <a href="">
                    <i class="fas fa-cogs"></i><br>
                    <span><?php echo esc_html__('Setup', 'rainbow-lite'); ?></span>
                </a>
            </div>
        </div>
        <div class="ccol-sm-6 col-lg-4">
            <div class="user-dashboard r-info">
                <a href="<?php echo esc_url(RB_dashboard_url()); ?>">
                    <i class="fas fa-tachometer-alt"></i><br>
                    <span class="dashboard">
                        <?php echo esc_html__('Dashboard', 'rainbow-lite'); ?>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="dash-settings r-info">
                <a href="">
                    <i class="fas fa-cog"></i><br>
                    <span class="profile"><?php echo esc_html__('settings', 'rainbow-lite'); ?></span>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="author-posts r-info">
                <a href="<?php echo esc_url(RB_posts_url()); ?>">
                    <i class="fas fa-file-alt"></i><br>
                    <span class="count">
                        <?php RB_current_user_posts_count(); ?>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="edit-profile r-info">
                <a href="<?php echo esc_url(RB_admin_profile_url()); ?>">
                    <i class="fas fa-user"></i><br>
                    <span class="profile"><?php echo esc_html__('Edit Profile', 'rainbow-lite'); ?></span>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="logout r-info">
                <a href="<?php echo esc_url(RB_logout_url());?>">
                    <i class="fas fa-sign-out-alt"></i><br>
                    <span><?php echo esc_html__('Logout', 'rainbow-lite'); ?></span>
                    
                </a>
            </div>
        </div>
    </div>
</div>