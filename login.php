<div class="uk-section uk-position-relative uk-width-1-1">
    <div class="uk-flex uk-flex-column uk-flex-middle uk-flex-center" uk-height-viewport="expand: true">
        <div class="uk-container">
            <div class="uk-card uk-card-default uk-card-body uk-width-large uk-margin-auto" uk-scrollspy="cls:uk-animation-slide-bottom-medium">
                <form class="" name="login" action="" method="post">
                    <fieldset class="uk-fieldset">
                        <div class="uk-child-width-1-1 uk-grid-small" uk-grid>
                            <div>
                                <input class="uk-input <?=$_SESSION["error_class_login"]?>" type="text" placeholder="login" name="login" value="<?=(isset($_SESSION["login"]) && $_SESSION["login"] != "") ? $_SESSION["login"] : ""?>" required>
                                <div class="uk-text-danger uk-text-small">
                                    <?=$_SESSION["error_login"]?>
                                </div>
                            </div>
                            <div>
                                <input class="uk-input <?=$_SESSION["error_class_pass"]?>" type="password" placeholder="password" name="pass" value="<?=(isset($_SESSION["pass"]) && $_SESSION["pass"] != "") ? $_SESSION["pass"] : ""?>" required>
                                <div class="uk-text-danger uk-text-small">
                                    <?=$_SESSION["error_pass"]?>
                                </div>
                            </div>
                            <div>
                                <input class="uk-button uk-button-default uk-button-large uk-button-primary uk-width-1-1" type="submit" value="Войти" name="login_btn"/>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>