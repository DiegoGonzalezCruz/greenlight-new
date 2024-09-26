<?php
defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\Area;


$this->inc('elements/header.php'); ?>

<div id="app">
    <main class="container mx-auto">
        <?php
        $a = new Area('Main');
        $a->display($c);
        ?>
    </main>
</div>

<?php $this->inc('elements/footer.php'); ?>