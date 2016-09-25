<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >
    <div class="container users form">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="block wow fadeInUp" data-wow-delay=".3s">
                    <?=
                        $this->Form->create($user, [
                            'horizontal' => true,
                            'columns' => [
                                'label' => 2,
                                'input' => 10,
                                'error' => 0
                            ]
                        ])
                    ?>
                    <h2><?= __('Connexion à la plateforme') ?></h2>
                    <?= $this->Form->input('email', ['label' => 'Adresse Email', 'class' => 'form-control']) ?>
                    <?= $this->Form->input('password', ['label' => 'Mot de passe', 'class' => 'form-control']) ?>
                    <?= $this->Form->button(__('Se connecter'), ['class' => 'btn btn-contact']); ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->
