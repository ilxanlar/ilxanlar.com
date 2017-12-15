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

            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
                <span>بیشتر بخوانید</span>
            </a>
        </article>

    <?php endwhile; ?>

    <?php iPagination() ?>

<?php else : ?>

    <p>در حال حاضر نوشته‌ای وجود ندارد.</p>

<?php endif; ?>