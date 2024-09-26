<?php
defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\GlobalArea;
use Concrete\Core\Support\Facade\Config;

?>
<link rel="stylesheet" href="<?php echo $view->getThemePath(); ?>/css/styles.css">


<header class="bg-gray-800 text-white ">
    <div class="container mx-auto p-4 flex items-center justify-between">
        <h1 class="text-2xl font-bold">
            <a href="<?php echo DIR_REL; ?>/"><?php echo h(Config::get('concrete.site')); ?></a>
        </h1>
        hola header 1
        <nav>
            <?php
            $a = new GlobalArea('Header Navigation');
            $a->display();
            ?>
        </nav>
    </div>
</header>