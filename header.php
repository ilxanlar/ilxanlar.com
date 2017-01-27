<!DOCTYPE html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php wp_title() ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(), '/normalize.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(), '/style.css'; ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(), '/favicon.ico'; ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(), '/favicon.ico'; ?>" type="image/x-icon">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

<main>
    <header>
        <a href="/" title="Home">Home</a>
        <a href="https://github.com/ilxanlar" title="Github" target="_blank">Github</a>
        <a href="/about" title="About">About</a>
    </header>
