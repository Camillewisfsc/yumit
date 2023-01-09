<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a class="card" style="width: 18rem;" href="<?php the_permalink() ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
            <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p><?php the_field('specialites'); ?></p>
                <p><?php the_field('distance'); ?></p>
            </div>
        </a>
    <?php endwhile;
else : ?>
    <p>Aucun article :(</p>
<?php endif; ?>



<?php get_footer() ?>