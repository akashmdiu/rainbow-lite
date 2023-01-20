<div class="modal-search">
    <div class="modal fade" id="rainbowSearchModal" tabindex="-1" aria-labelledby="rainbowSearchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-search-content">

                    <form method="get" action="/" autocomplete="off">
                        <div class="input-group">
                            <i class="fas fa-search"></i>

                            <input type="search" id="keyword" name="s" value="<?php echo get_search_query(); ?>" class="form-control input_search" placeholder="<?php echo esc_attr('Quick search for anything'); ?>" onkeyup="fetch()">
                        </div>
                    </form>

                    <div id="datafetch" class="rainbow-search-results">

                    </div>


                    <div class="search-modal-extension ">
                        <?php if (!empty(RB_tag_cloud())) : ?>
                            <h4 class="mb-3"><?php echo esc_html__('Top Tags', 'rainbow-lite'); ?></h4>
                            <div class="search-suggestions mb-4 top__tags">
                                <?php echo RB_tag_cloud(); ?>
                            </div>
                        <?php endif; ?>

                        <?php
                        $popular_post_args = array(
                            'meta_key'  => 'post_views_count',
                            'orderby'    => 'meta_value_num',
                            'order'      => 'DESC',
                            'ignore_sticky_posts' => 1,
                            'posts_per_page' => 5
                        );
                        $popular_posts = new WP_Query($popular_post_args);
                        ?>
                        <?php if ($popular_posts->have_posts()) : ?>
                            <h4 class="mb-3"><?php echo esc_html__('Picked for you', 'rainbow-lite'); ?></h4>
                            <div class="row">
                                <?php while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                                    <div class="col-md-6 col-lg-4">
                                        <?php get_template_part('/template-parts/search-block-card'); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>