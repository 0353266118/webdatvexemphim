<?= $this->extend('templates/main') ?>

<?= $this->section('title') ?>
CinemaBooking
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main>
    <div class="container-md">
        <?= $this->include('sections/posts') ?>
    </div>
</main>
<?= $this->endSection() ?>

<?= $this->section('modals') ?>

<?= $this->endSection() ?>

