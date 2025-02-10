<?php
require_once __DIR__ . '/BorgToolKit/index.php';
?>
<?= BorgTemplate::allCss(); ?>
<?= BorgTemplate::allJs(); ?>

<div class="some-space">&nbsp;</div>

<div class="dev">

    <div class="pos-rel square_1">
        <div class="pos-abs test">I am absolute duv with many rows inside</div>
        <div class="pos-abs test-2">Another am absolute duv with many rows inside</div>
    </div>

</div>
<div class="some-space">&nbsp;</div>

<style>
    .test {
        background-color: darkolivegreen;
        right: 0;
        bottom: 20px;

        width: 10ch;
    }

    .test-2 {
        background-color: darkmagenta;
        right: 0;
        bottom: 20px;

        width: 25ch;
    }
</style>