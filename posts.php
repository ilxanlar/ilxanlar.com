<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="archive">
            <h2>
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
                    <?php the_title() ?>
                </a>
            </h2>

            <div class="excerpt">
                <?php the_excerpt() ?>
            </div>
        </article>

    <?php endwhile; ?>

    <?php iPagination() ?>

<?php else : ?>

    <?php get_template_part('empty'); ?>

<?php endif; ?>