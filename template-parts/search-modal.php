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
                        <h4 class="mb-3">Top Tags</h4>
                        <div class="search-suggestions mb-4 top__tags">
                            <?php echo do_shortcode('[RB_popular_tags]'); ?>
                        </div>
                        <h4 class="mb-3">Picked for you</h4>
                        <div class="row">
                            <?php  
                                $popular_post_args = array(
                                    'meta_key'  => 'post_views_count', 
                                    'orderby'    => 'meta_value_num', 
                                    'order'      => 'DESC',
                                    'ignore_sticky_posts' => 1,
                                    'posts_per_page' => 5 
                                );
                                $popular_posts = new WP_Query( $popular_post_args );
                            ?>
                            <?php if($popular_posts->have_posts()): ?>
                                <?php while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                                    <div class="col-md-6 col-lg-4">
                                        <?php get_template_part('/template-parts/search-block-card'); ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
                <div class="rainbow-search-footer">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fas fa-sort-alpha-down"></i><?php echo esc_html__('DSC', 'rainbow-lite'); ?></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fas fa-sort-alpha-up"></i><?php echo esc_html__('ASC', 'rainbow-lite'); ?></a></li>
                        <li class="list-inline-item footer__last_element"><a href="#"><i class="fas fa-enter"></i><?php echo esc_html__('Enter', 'rainbow-lite'); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>