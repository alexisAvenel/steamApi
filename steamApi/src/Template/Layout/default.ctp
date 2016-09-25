<!DOCTYPE html>
<html class="no-js">
    <head>
        <?= $this->Html->charset() ?>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $this->fetch('title') ?></title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->element('scriptsCss') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body <?php if($this->request->here == '/login'): ?> class="login-page" <?php endif; ?>>
        <?= $this->element('header') ?>

        <?php if($user): ?>
        <?= $this->element('slider') ?>
        <?php endif; ?>

        <?= $this->Flash->render('auth') ?>
        <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>

        <?= $this->element('footer') ?>

        <?= $this->element('scriptsJs') ?>
    </body>
</html>