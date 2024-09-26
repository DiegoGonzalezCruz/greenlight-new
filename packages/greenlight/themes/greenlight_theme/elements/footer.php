<?php
defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\GlobalArea;
use Concrete\Core\Support\Facade\Config;

?>


<footer class="bg-red-500 text-white ">
    <div class="container mx-auto p-4 flex items-center justify-between">
        <h1 class="text-2xl font-bold">
            <a href="<?php echo DIR_REL; ?>/"><?php echo h(Config::get('concrete.site')); ?></a>
        </h1>
        hola footer
        <nav>
            <?php
            $a = new GlobalArea('Footer Navigation');
            $a->display();
            ?>
        </nav>
    </div>
</footer>