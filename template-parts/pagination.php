<div class="posts-pagination text-center mt-5">
	<!-- <a class="loadmore btn" id="loadmore-btn" data-page="1" data-url="<?php echo esc_url(admin_url('admin-ajax.php')); ?>"> <i class="fas fa-cog "></i> <span class="text"> <?php echo esc_html__('Load More..'); ?> </span></a> -->

	<?php 
		the_posts_pagination(array(
			'mid_size'  => apply_filters( 'RB_pagination_mid_size', 2),
			'prev_text' => esc_html__('«', 'rainbow'),
			'next_text' => esc_html__('»', 'rainbow'),
			'screen_reader_text' => ' '
		));
	 ?>

</div>