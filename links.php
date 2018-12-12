<div class="uk-container">

    <!-- Выводим конфиг -->
    <?php include_once('config.php') ?>
    <!-- Выводим функции -->
    <?php include_once('func.php') ?>

    <div class="uk-position-small uk-position-top-left uk-position-fixed" uk-scrollspy="target: > a; cls:uk-animation-fade uk-animation-fast; delay: 100">
        <a href="#add_new" class="uk-button uk-button-primary" uk-icon="icon: plus" uk-tooltip="Добавить новый блок" uk-scroll></a>
        <a id="linkId" href="javascript:void(0)" onclick="logOut();" class="uk-button uk-button-primary" uk-icon="icon: sign-out" uk-tooltip="Выйти"></a>
    </div>

    <div class="uk-position-small uk-position-top-right uk-position-absolute uk-text-muted uk-text-small" uk-scrollspy="target: > div; cls:uk-animation-fade uk-animation-fast; delay: 100">
        <div class="count_box">
            Всего записей: <?php echo sizeof($json_arr,0); ?>
        </div>
    </div>

    <h1 class="uk-text-center uk-margin-large"><?php echo $title; ?></h1>

    <!-- Выводим блоки -->
    <?php include_once('lines_grid.php') ?>
    <!-- Добавление нового блока -->
    <?php include_once('add_new.php') ?>

</div>

<div class="uk-padding-small uk-position-bottom-right uk-position-absolute tm-totop">
    <a href="" class="uk-button uk-button-primary uk-light" uk-tooltip="Подняться" uk-totop uk-scroll></a>
</div>