<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>

<h2><?= esc($titulo) ?></h2>

<a href="<?= site_url('admin/etiquetas/new') ?>" class="btn btn-primary mb-3">Nueva Etiqueta</a>

<?= $this->include('partials/_session_messages') ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Slug</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($etiquetas)): ?>
            <?php foreach ($etiquetas as $etiqueta): ?>
                <tr>
                    <td><?= esc($etiqueta['id']) ?></td>
                    <td><?= esc($etiqueta['nombre']) ?></td>
                    <td><?= esc($etiqueta['slug']) ?></td>
                    <td>
                        <a href="<?= site_url('admin/etiquetas/edit/' . $etiqueta['id']) ?>" class="btn btn-sm btn-warning">Editar</a>
                        <form action="<?= site_url('admin/etiquetas/delete/' . $etiqueta['id']) ?>" method="post" class="d-inline" onsubmit="return confirm('¿Estás seguro?');">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">No hay etiquetas para mostrar.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->endSection() ?>