<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>

<h2><?= esc($titulo) ?></h2>

<?= \Config\Services::validation()->listErrors() ?>

<form action="<?= site_url('admin/etiquetas/update/' . $etiqueta['id']) ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label for="nombre">Nombre de la Etiqueta</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="<?= old('nombre', $etiqueta['nombre']) ?>">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    <a href="<?= site_url('admin/etiquetas') ?>" class="btn btn-secondary mt-3">Cancelar</a>
</form>

<?= $this->endSection() ?>