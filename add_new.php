<div id="add_new" class="uk-card uk-card-default uk-card-body uk-card-hover uk-margin-large-top" uk-scrollspy="cls:uk-animation-slide-bottom-medium">
    <form id="add_new_line" action="" method="post">
        <div class="uk-h3 uk-heading-bullet"><?php echo $title_new_line; ?></div>
        <div class="uk-grid-small uk-child-width-1-2@m" uk-grid>
            <div>
                <label class="uk-form-label uk-margin-small-bottom" for="main_name">
                    <?php echo $title_edit_name; ?>
                </label>
                <div class="uk-form-controls">
                    <input class="uk-input <?=$error_main_name?>" id="main_name" name="main_name" type="text" placeholder="<?php echo $title_edit_name_ph; ?>">
                </div>
            </div>
            <div>
                <label class="uk-form-label uk-margin-small-bottom" for="main_name_link">
                    <?php echo $title_edit_name_link; ?>
                </label>
                <div class="uk-form-controls">
                    <input class="uk-input <?=$error_main_name_link?>" id="main_name_link" name="main_name_link" type="text" placeholder="<?php echo $title_edit_link_ph; ?>">
                </div>
            </div>
        </div>
        <div class="uk-margin">
            <div class="uk-h4">
                <?php echo $title_dop_domen; ?>
            </div>
            <div class="uk-grid-small uk-child-width-1-2@m" uk-grid>
                <div class="uk-form-controls">
                    <input class="uk-input" id="additional_damain_1" name="additional_damain_1" type="text" placeholder="<?php echo $title_dop_domen_ph; ?>">
                </div>
                <div class="uk-form-controls">
                    <input class="uk-input" id="additional_damain_2" name="additional_damain_2" type="text" placeholder="<?php echo $title_dop_domen_ph; ?>">
                </div>
            </div>
        </div>
        <div class="uk-h4">
            <?php echo $title_hosting; ?>
        </div>
        <div class="uk-grid-small uk-child-width-1-1" uk-grid>
            <div>
                <div class="uk-grid-small uk-child-width-1-2@m" uk-grid>
                    <div>
                        <label class="uk-form-label uk-margin-small-bottom" for="hosting_name">
                            <?php echo $title_edit_name; ?>
                        </label>
                        <div class="uk-form-controls">
                            <input class="uk-input <?=$error_hosting_name?>" id="hosting_name" name="hosting_name" type="text" placeholder="<?php echo $title_hosting_name; ?>">
                        </div>
                    </div>
                    <div>
                        <label class="uk-form-label uk-margin-small-bottom" for="hosting_link">
                            <?php echo $title_edit_name_link; ?>
                        </label>
                        <div class="uk-form-controls">
                            <input class="uk-input <?=$error_hosting_link?>" id="hosting_link" name="hosting_link" type="text" placeholder="<?php echo $title_hosting_link; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-grid-small uk-child-width-auto" uk-grid>
                    <label>
                        <input class="uk-radio" type="radio" name="hosting_type" value="<?php echo $title_edit_hosting_type_1; ?>">
                            <span class="uk-margin-small-left">
                                <?php echo $title_edit_hosting_type_1; ?>
                            </span>
                    </label>
                    <label>
                        <input class="uk-radio" type="radio" name="hosting_type" value="<?php echo $title_edit_hosting_type_2; ?>">
                            <span class="uk-margin-small-left">
                                <?php echo $title_edit_hosting_type_2; ?>
                            </span>
                    </label>
                    <label>
                        <input class="uk-radio" type="radio" name="hosting_type" value="<?php echo $title_edit_hosting_type_3; ?>">
                            <span class="uk-margin-small-left">
                                <?php echo $title_edit_hosting_type_3; ?>
                            </span>
                    </label>
                </div>
            </div>
            <div>
                <div class="uk-grid-small uk-child-width-1-2@m" uk-grid>
                    <div>
                        <label class="uk-form-label uk-margin-small-bottom" for="hosting_login">
                            <?php echo $title_login; ?>
                        </label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="hosting_login" name="hosting_login" type="text" placeholder="<?php echo $title_login_ph; ?>">
                        </div>
                    </div>
                    <div>
                        <label class="uk-form-label uk-margin-small-bottom" for="hosting_pass">
                            <?php echo $title_pass; ?>
                        </label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="hosting_pass" name="hosting_pass" type="text" placeholder="<?php echo $title_pass_ph; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <label class="uk-form-label uk-margin-small-bottom" for="acomment">
                    <?php echo $title_comment; ?>
                </label>
                <div class="uk-form-controls">
                    <textarea class="uk-textarea" id="comment" name="comment" rows="3" placeholder="<?php echo $title_comment_ph; ?>"></textarea>
                </div>
            </div>
        </div>
        <div class="uk-margin-top">
            <input class="uk-button uk-button-default uk-button-primary" type="submit" value="Отправить" name="button" form="add_new_line"/>
        </div>
    </form>
</div>