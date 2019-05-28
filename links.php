<?php
    include_once('navbar.php');
?>
<div class="uk-section uk-position-relative uk-width-1-1">
    <div class="uk-container">
        
        <!-- Выводим блоки -->
        <?php include_once('lines_grid.php') ?>
        <!-- Добавление нового блока -->
        <?php include_once('add_new.php') ?>
    
    </div>
    
    <div class="uk-padding-small uk-position-bottom-right uk-position-absolute tm-totop">
        <a href="" class="uk-button uk-button-primary uk-light" data-uk-tooltip="Подняться" data-uk-totop data-uk-scroll></a>
    </div>
</div>