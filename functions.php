<?php

add_action('after_setup_theme', 'iAfterSetupTheme');

function iAfterSetupTheme()
{
    add_theme_support('automatic-feed-links');
    // register_nav_menu('blog-menu', 'Primary Navigation');
}

add_filter('wp_title', 'iPageTitle');


function iPagination($args = array())
{
    $defaultArgs = array('class' => '');
    $args = wp_parse_args($args, $defaultArgs);
    extract($args, EXTR_SKIP);
    global $wp_query;
    $big = 999999999;
    $paginateOptions = array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'mid_size' => 5/*,
		'prev_text' => '<i class="fa fa-angle-right"></i>',
		'next_text' => '<i class="fa fa-angle-left"></i>'*/
    );
    $paginate_links = paginate_links($paginateOptions);
    if ($paginate_links) {
        echo '<div class="pagination ', $class, '">', $paginate_links, '</div>';
    }
}


function excerptLength()
{
    return 60;
}

add_filter('excerpt_length', 'excerptLength');


function excerptMore()
{
    return '...';
}

add_filter('excerpt_more', 'excerptMore');


function searchPostType($query)
{
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts', 'searchPostType');
