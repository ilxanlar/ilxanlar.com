<?php get_header(); ?>

<?php the_post() ?>

    <section>
        <article class="single">
            <h1>
                <?php the_title() ?>
            </h1>

            <div class="meta">
                <span>موضوع: <?php the_category(', ') ?></span>

                <span>تاریخ: <?php the_date() ?></span>
            </div>

            <div class="content">
                <?php the_content() ?>
            </div>
        </article>
    </section>

<?php get_footer() ?>