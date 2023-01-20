<div class="posts-pagination text-center mt-5">

	<?php 
		the_posts_pagination(array(
			'mid_size'  => apply_filters( 'RB_pagination_mid_size', 2),
			'prev_text' => esc_html__('«', 'rainbow-lite'),
			'next_text' => esc_html__('»', 'rainbow-lite'),
			'screen_reader_text' => ' '
		));
	 ?>

</div>