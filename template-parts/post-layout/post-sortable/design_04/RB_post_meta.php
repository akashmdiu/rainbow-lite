<div class="post-meta">
    <ul class="meta-data">
        <li class="list-inline-item date"><i class="fas fa-calendar"></i><?php the_time(get_option('date_format'));; ?></li>
        <?php if (get_the_category()) : ?>
            <li class="category list-inline-item"><i class="fas fa-folder"></i><?php the_category(', '); ?></li>
        <?php endif; ?>
    </ul>
</div>