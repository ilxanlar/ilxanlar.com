<?php $siteTitle = get_bloginfo('title');?><!DOCTYPE html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php wp_title() ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(), '/normalize.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(), '/style.css'; ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(), '/favicon.ico'; ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(), '/favicon.ico'; ?>" type="image/x-icon">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

<main>
    <header>
        <a href="/" title="<?php echo $siteTitle ?>">
            <?php if (is_home()) : ?>
                <h1><?php echo $siteTitle ?></h1>
            <?php else : ?>
                <span><?php echo $siteTitle ?></span>
            <?php endif ?>
        </a>

        <a href="/about" title="درباره من">درباره من</a>

        <br>

        <small><?php bloginfo('description') ?></small>
    </header>
