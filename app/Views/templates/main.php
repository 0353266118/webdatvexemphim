<!DOCTYPE html>
<html lang="vi" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?: 'Manga7' ?></title>
    <link rel="stylesheet" href="<?= base_url('css/bootstraps/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/details/navbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/details/post.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/details/carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/details/footer.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <script src="<?= base_url('js/bootstraps/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('js/home.js') ?>"></script>
    <script src="<?= base_url('js/script.js') ?>"></script>
    <script src="<?= base_url('js/bootstraps/bootstrap.js') ?>"></script>
    <script src="<?= base_url('js/details/theme.js') ?>"></script>

    <?= $this->include('sections/background') ?>
    <?= $this->renderSection('styles') ?>
</head>

<body class="bg">
    <?= $this->include('templates/header') ?>
    
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    
    <?= $this->include('templates/footer') ?>
    <?= $this->renderSection('modals') ?>

    <?= $this->renderSection('scripts') ?>
</body>
</html>