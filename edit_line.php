<div id="toggle-animation<?= $numId; ?>" class="uk-card uk-card-default uk-card-body uk-margin-small uk-position-reletive" hidden>
    <form action="" method="post">
        <fieldset class="uk-fieldset">
            <div class="uk-position-top-right">
                <div class="uk-flex-middle uk-grid-collapse uk-flex-center" uk-grid>
                    <div>
                        <a uk-tooltip="title: <?= $title_close; ?>; delay: 300" class="uk-button uk-button-danger" href="#toggle-animation<?= $numId; ?>" uk-toggle="target: #toggle-animation<?= $numId; ?>; animation: uk-animation-fade" uk-icon="icon: close"></a>
                    </div>
                    <div>
                        <button uk-tooltip="title: <?= $title_save; ?>; delay: 300" class="uk-button uk-button-primary" uk-icon="icon: check" type="submit" value="<?= $numId; ?>" name="editline"></button>
                    </div>
                </div>
            </div>
            <div class="uk-position-bottom-right">
                <div class="uk-flex-middle uk-grid-collapse uk-flex-center" uk-grid>
                    <div>
                        <a uk-tooltip="title: <?= $title_close; ?>; delay: 300" class="uk-button uk-button-danger" href="#toggle-animation<?= $numId; ?>" uk-toggle="target: #toggle-animation<?= $numId; ?>; animation: uk-animation-fade" uk-icon="icon: close"></a>
                    </div>
                    <div>
                        <button uk-tooltip="title: <?= $title_save; ?>; delay: 300" class="uk-button uk-button-primary" uk-icon="icon: check" type="submit" value="<?= $numId; ?>" name="editline"></button>
                    </div>
                </div>
            </div>
            <div class="uk-h3 uk-heading-bullet"><?= $title_edit; ?></div>
            <div class="uk-grid-small uk-child-width-1-2@m" uk-grid>
                <div>
                    <label class="uk-form-label uk-margin-small-bottom" for="main_name"><?= $title_edit_name; ?></label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="main_name" name="main_name" type="text" placeholder="<?= $title_edit_name_ph; ?>" value="<?= $json_arr[$numId]["main_name"]; ?>">
                    </div>
                </div>
                <div>
                    <label class="uk-form-label uk-margin-small-bottom" for="main_name_link"><?= $title_edit_name_link; ?></label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="main_name_link" name="main_name_link" type="text" placeholder="<?= $title_edit_link_ph; ?>" value="<?= $json_arr[$numId]["main_name_link"]; ?>">
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-h4"><?= $title_dop_domen; ?></div>
                <div class="uk-grid-small uk-child-width-1-2@m" uk-grid>
                    <?php foreach ($json_arr[$numId]["add_domains"] as $key => $value) : ?>
                        <div class="uk-form-controls">
                            <input class="uk-input" name="additional_damain_<?= ($key + 1); ?>" type="text" placeholder="<?= $title_dop_domen_ph; ?>" value="<?= $value; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="uk-h4"><?= $title_hosting; ?></div>
            <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                <div>
                    <div class="uk-grid-small uk-child-width-1-2@m" uk-grid>
                        <div>
                            <label class="uk-form-label uk-margin-small-bottom" for="hosting_name"><?= $title_edit_name; ?></label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="hosting_name" name="hosting_name" type="text" placeholder="<?= $title_hosting_name; ?>" value="<?= $json_arr[$numId]["hosting_name"]; ?>">
                            </div>
                        </div>
                        <div>
                            <label class="uk-form-label uk-margin-small-bottom" for="hosting_link"><?= $title_edit_name_link; ?></label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="hosting_link" name="hosting_link" type="text" placeholder="<?= $title_hosting_link; ?>" value="<?= $json_arr[$numId]["hosting_link"]; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid-small uk-child-width-auto" uk-grid>
                        <label>
                            <input class="uk-radio" type="radio" name="hosting_type" value="<?php echo $title_edit_hosting_type_1; ?>" <?= (((array_key_exists('hosting_type', $json_arr[$numId])) and ($json_arr[$numId]["hosting_type"] == $title_edit_hosting_type_1)) ? "checked" : "") ?>>
													<span class="uk-margin-small-left">
														<?php echo $title_edit_hosting_type_1; ?>
													</span>
                        </label>
                        <label>
                            <input class="uk-radio" type="radio" name="hosting_type" value="<?php echo $title_edit_hosting_type_2; ?>" <?= (((array_key_exists('hosting_type', $json_arr[$numId])) and ($json_arr[$numId]["hosting_type"] == $title_edit_hosting_type_2)) ? "checked" : "") ?>>
													<span class="uk-margin-small-left">
														<?php echo $title_edit_hosting_type_2; ?>
													</span>
                        </label>
                        <label>
                            <input class="uk-radio" type="radio" name="hosting_type" value="<?php echo $title_edit_hosting_type_3; ?>" <?= (((array_key_exists('hosting_type', $json_arr[$numId])) and ($json_arr[$numId]["hosting_type"] == $title_edit_hosting_type_3)) ? "checked" : "") ?>>
													<span class="uk-margin-small-left">
														<?php echo $title_edit_hosting_type_3; ?>
													</span>
                        </label>
                    </div>
                </div>
                <div>
                    <div class="uk-grid-small uk-child-width-1-2@m" uk-grid>
                        <div>
                            <label class="uk-form-label uk-margin-small-bottom" for="hosting_login"><?= $title_login; ?></label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="hosting_login" name="hosting_login" type="text" placeholder="<?= $title_login_ph; ?>"  value="<?= $json_arr[$numId]["hosting_login"]; ?>">
                            </div>
                        </div>
                        <div>
                            <label class="uk-form-label uk-margin-small-bottom" for="hosting_pass"><?= $title_pass; ?></label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="hosting_pass" name="hosting_pass" type="text" placeholder="<?= $title_pass_ph; ?>" value="<?= $json_arr[$numId]["hosting_pass"]; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="uk-form-label uk-margin-small-bottom" for="comment"><?= $title_comment; ?></label>
                    <div class="uk-form-controls">
                        <textarea class="uk-textarea" id="comment" name="comment" rows="3" placeholder="<?= $title_comment_ph; ?>"><?= $json_arr[$numId]["comment"]; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="uk-text-danger uk-margin-top"><?= $edit_alert_text; ?></div>
        </fieldset>
    </form>
</div>