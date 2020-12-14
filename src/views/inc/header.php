<!DOCTYPE HTML>
<html dir="ltr" lang="en-GB"> 
    <head>
        <title><?= $page->getTitle() ?> | <?= Settings::get('site.name') ?></title>

        <link href="<?= $pub('main.css') ?>" rel='stylesheet' type='text/css'>
      
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?= meta_description() ?>
        <?= meta_keywords() ?>
        <?= meta_og() ?>
        <?= meta_robots() ?>
        <?= $analytics() ?>
    </head>

    <body id="<?= $page->getTemplate()->getFilename() ?>">
        <header>
           header
        </header>

        <main>
