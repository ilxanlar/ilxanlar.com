<?php get_header() ?>

    <section>
        <div class="home-heading">
            <h1><?php bloginfo('title') ?></h1>
            <p><?php bloginfo('description') ?></p>
        </div>

        <?php get_template_part('posts') ?>
    </section>

<?php get_footer() ?>