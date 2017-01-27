<?php get_header(); ?>

<?php the_post() ?>

    <section>
        <article class="page">
            <h1>
                <?php the_title() ?>
            </h1>

            <div class="content">
                <?php the_content() ?>
            </div>
        </article>
    </section>

<?php get_footer() ?>