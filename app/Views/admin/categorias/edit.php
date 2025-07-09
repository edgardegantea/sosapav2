<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>

<h2><?= esc($titulo) ?></h2>

<?= \Config\Services::validation()->listErrors() ?>

<form action="<?= site_url('admin/categorias/update/' . $categoria['id']) ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="_method" value="POST"> <div class="form-group">
        <label for="nombre">Nombre de la Categoría</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="<?= old('nombre', $categoria['nombre']) ?>">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Actualizar Categoría</button>
    <a href="<?= site_url('admin/categorias') ?>" class="btn btn-secondary mt-3">Cancelar</a>
</form>

<?= $this->endSection() ?>