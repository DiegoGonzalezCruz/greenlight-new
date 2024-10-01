<?php
defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\Area;
?>

<?php $this->inc('elements/header.php'); ?>

<div id="app debug2">
    <main class="container mx-auto p-4">
        <?php
        $a = new Area('Main');
        $a->display($c);
        ?>
    </main>
</div>

<?php $this->inc('elements/footer.php'); ?>