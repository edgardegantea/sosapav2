<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>

<h2><?= esc($titulo) ?></h2>

<?= \Config\Services::validation()->listErrors() ?>

<form action="<?= site_url('admin/comentarios/update/' . $comentario['id']) ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label for="autor" class="form-label">Autor</label>
        <input type="text" class="form-control" name="autor" id="autor" value="<?= old('autor', $comentario['autor']) ?>">
    </div>

    <div class="mb-3">
        <label for="contenido" class="form-label">Contenido</label>
        <textarea class="form-control" name="contenido" id="contenido" rows="5"><?= old('contenido', $comentario['contenido']) ?></textarea>
    </div>

    <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <select name="estado" id="estado" class="form-select">
            <option value="pendiente" <?= old('estado', $comentario['estado']) == 'pendiente' ? 'selected' : '' ?>>Pendiente</option>
            <option value="aprobado" <?= old('estado', 'aprobado') == 'aprobado' ? 'selected' : '' ?>>Aprobado</option>
            <option value="rechazado" <?= old('estado', 'rechazado') == 'rechazado' ? 'selected' : '' ?>>Rechazado</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Comentario</button>
    <a href="<?= site_url('admin/comentarios') ?>" class="btn btn-secondary">Cancelar</a>
</form>

<?= $this->endSection() ?>