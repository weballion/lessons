<!-- Подключаем конфиг (набор переменных) -->
<?php include_once('config.php') ?>
<!-- Подключаем функционал -->
<?php include_once('func.php') ?>

<div class="uk-card uk-card-small uk-card-default uk-card-body" data-uk-sticky="top: 500; animation: uk-animation-slide-top;">
    <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar data-uk-scrollspy="target: > div; cls:uk-animation-fade">
        <div class="uk-navbar-left">
            <div class="">
                <a href="#add_new" class="uk-button uk-button-primary" data-uk-icon="icon: plus" data-uk-tooltip="Добавить новый блок" data-uk-scroll></a>
                <a id="linkId" href="javascript:void(0)" onclick="logOut();" class="uk-button uk-button-primary" data-uk-icon="icon: sign-out" data-uk-tooltip="Выйти"></a>
            </div>
        </div>
        <div class="uk-navbar-center">
            <h3 class="uk-text-center uk-margin-remove">
                <?php echo $title; ?>
            </h3>
        </div>
        <div class="uk-navbar-right">
            <div class="uk-text-muted uk-text-small">
                <div class="count_box">
                    Всего записей: <?php echo sizeof($json_arr,0); ?>
                </div>
            </div>
        </div>
    </nav>
</div>