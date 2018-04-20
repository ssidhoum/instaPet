<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="containerHome">
    <div class="greenHome">
        <div class="form">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Rejoignez nous') ?></legend>
                <?php
                    echo $this->Form->control('email', ['label'=>'Votre email: ']);
                    echo $this->Form->control('password', ['label'=>'Votre mot de passe: ']);
                    echo $this->Form->control('password2', ['label'=>'Retapez votre mot de passe: ']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Inscription')) ?>
            <?= $this->Form->end() ?>
            <p class="or"> 
                OU <br/>
            </p>
            <div class="icones">
                <div class="instaIcon">
                    <p>
                        Se connecter <br/>
                        avec insta
                    </p>
                    <?php 
                        echo $this->Html->image("insta.png", [
                            "alt" => "logo instapets",
                            "class" => "iconDeco"
                        ]);
                    ?> 
                </div>
                <div class="fbIcon">

                    <?php 
                        echo $this->Html->image("facebook.png", [
                            "alt" => "logo instapets",
                            "class" => "iconDeco"
                        ]);
                    ?>
                    <p>
                        Se connecter <br/>
                        avec facebook
                    </p>
                </div>
             </div>
        </div>
    </div>
    <div class="whiteHome">
        <h1 class="h1Home">
            Découvrez instapet
        </h1>
        <h2 class="quoteHome">
            "On peut juger de la grandeur d'une nation par la façon dont les animaux y sont traités."
        </h2>
    </div>

</div>