<?php
defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\GlobalArea;

use Concrete\Core\Localization\Localization;
use Concrete\Core\Support\Facade\Config;


?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage(); ?>">

<head>
    <?php Loader::element('header_required'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $view->getThemePath(); ?>/css/styles.css">

</head>

<body>
    <div class='<?= $c->getPageWrapperClass() ?>'>
        <header class=" text-black bg-go-green ">
            <div class="container mx-auto p-4 flex items-center justify-between">
                <h1 class="text-2xl font-bold">
                    <a href="<?php echo DIR_REL; ?>/"><?php echo h(Config::get('concrete.site')); ?></a>
                </h1>
                <nav>
                    <?php
                    $a = new GlobalArea('Header Navigation');
                    $a->display();
                    ?>
                </nav>
            </div>


        </header>