<?php get_header() ?>

    <h1>
        <?php single_tag_title() ?>
    </h1>

    <section>
        <?php get_template_part('posts') ?>
    </section>

<?php get_footer() ?>