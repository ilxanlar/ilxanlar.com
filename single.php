<?php get_header(); ?>

<?php the_post() ?>

    <section>
        <article class="single">
            <h1>
                <?php the_title() ?>
            </h1>

            <div class="meta">
                Posted in <?php the_category(', ') ?> on <?php the_date() ?>
            </div>

            <div class="content">
                <?php the_content() ?>
            </div>
        </article>
    </section>

<?php get_footer() ?>