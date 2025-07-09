<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>

<h2><?= esc($titulo) ?></h2>

<?= \Config\Services::validation()->listErrors() ?>

<form action="<?= site_url('admin/categorias/create') ?>" method="post">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="nombre">Nombre de la Categoría</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="<?= old('nombre') ?>">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Guardar Categoría</button>
    <a href="<?= site_url('admin/categorias') ?>" class="btn btn-secondary mt-3">Cancelar</a>
</form>

<?= $this->endSection() ?>