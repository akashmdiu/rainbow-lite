<section class="hero-section cover-img section-padding page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cover-content text-center">
                    <h1 class="post-title"> <?php the_archive_title( ); ?> </h1>
                    <?php if (get_the_archive_description()) : ?>
                    <h5 class="subtitle"><?php the_archive_description(); ?></h5>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>