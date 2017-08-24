<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/fav32.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/fav32.png">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>
<body>
<div id="header">
    <div class="headnav">
        <a href="<?php bloginfo('url'); ?>">
            <h1><?php bloginfo('name'); ?></h1>
        </a>
        <ul class="cathead">
            <?php wp_list_categories('title_li='); ?>
        </ul>
    </div>
</div>
