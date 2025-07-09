<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>

    <h2><?= esc($titulo) ?></h2>

    <form action="<?= site_url('admin/publicaciones/create') ?>" method="post">
        <?= $this->include('admin/publicaciones/_form') ?>
    </form>

<?= $this->endSection() ?>