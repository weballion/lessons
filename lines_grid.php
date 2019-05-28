<div class="uk-child-width-1-1" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 300">
    <?php if (is_array($json_arr)) : ?>
        <?php foreach ($json_arr as $numId => $key) : ?>
            <div>
                <!-- Вывод блока -->
                <form action="" method="post">
                    <div class="uk-card uk-card-default uk-card-body uk-card-hover uk-position-reletive">
                        <div class="uk-text-small uk-position-top-right uk-background-primary uk-light tm-date" data-uk-tooltip="title: <?= $title_data ?>; delay: 300">
                            <?= $json_arr[$numId]["data"]; ?>
                        </div>
                        <div class="uk-position-bottom-right uk-padding-small">
                            <a data-uk-tooltip="title: <?= $title_edit_btn; ?>; delay: 300" class="tm-btns-edit" href="#toggle-animation<?= $numId; ?>" data-uk-toggle="target: #toggle-animation<?= $numId; ?>; animation: uk-animation-fade" data-uk-icon="icon: file-edit"></a>
                            <button data-uk-tooltip="title: <?= $title_delete; ?>; delay: 300" class="tm-btns-del uk-text-danger" data-uk-icon="icon: trash" type="submit" value="<?= $numId; ?>" name="deleteline"></button>
                        </div>
                        <div class="uk-flex-middle uk-grid-small uk-margin-medium-bottom" data-uk-grid>
                            <div>
                                <div class="tm-num-card uk-background-primary uk-light uk-padding-small uk-text-center uk-text-small">
                                    <?= ($numId + 1); ?>
                                </div>
                            </div>
                            <div>
                                <h3>
                                    <a class="uk-link-heading" href="http://<?= $json_arr[$numId]["main_name_link"]; ?>" target="_blank">
                                        <?= $json_arr[$numId]["main_name"]; ?>
                                    </a>
                                </h3>
                            </div>
                            <?php if(array_values_not_empty_check($json_arr[$numId]["add_domains"])) : ?>
                                <div class="uk-text-muted">
                                    <?= $title_dop_domen; ?>:
                                    <?php foreach ($json_arr[$numId]["add_domains"] as $key) : ?>
                                        <a class="uk-link-text" href="http://<?= $key; ?>" target="_blank">
                                            <?= $key; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="uk-flex-middle uk-grid-small uk-margin-small-bottom" data-uk-grid>
                            <div class="uk-h4 uk-heading-bullet"><?= $title_hosting; ?></div>
                            <?php if (array_key_exists("hosting_type", $json_arr[$numId])) : ?>
                                <div class="uk-text-muted">(<?= $json_arr[$numId]["hosting_type"]; ?>)</div>
                            <?php endif; ?>
                        </div>
                        <div><?= $title_link; ?>: <a class="uk-link-text" href="<?= $json_arr[$numId]["hosting_link"]; ?>" target="_blank"><?= $json_arr[$numId]["hosting_name"]; ?></a></div>
                        <div><?= $title_login; ?>: <?= $json_arr[$numId]["hosting_login"]; ?></div>
                        <div><?= $title_pass; ?>: <?= $json_arr[$numId]["hosting_pass"]; ?></div>
                        <div><?= $json_arr[$numId]["comment"]; ?></div>
                    </div>
                </form>

                <!-- Редактирование блока -->
                <?php include('edit_line.php') ?>

            </div>
        <?php endforeach; ?>
    <?php else : ?>
        В файле json нет массива!
    <?php endif; ?>
</div>