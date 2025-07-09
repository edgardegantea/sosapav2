<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>

<h2><?= esc($titulo) ?></h2>

<a href="<?= site_url('admin/publicaciones/new') ?>" class="btn btn-primary mb-3">Nueva Publicación</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Estado</th>
            <th>Fecha Creación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($publicaciones)): ?>
            <?php foreach ($publicaciones as $p): ?>
                <tr>
                    <td><?= esc($p['id']) ?></td>
                    <td><?= esc($p['titulo']) ?></td>
                    <td><?= esc($p['autor']) ?></td>
                    <td>
                        <span class="badge bg-<?= $p['estado'] == 'publicado' ? 'success' : 'secondary' ?>">
                            <?= esc(ucfirst($p['estado'])) ?>
                        </span>
                    </td>
                    <td><?= esc($p['fecha_creacion']) ?></td>
                    <td>
                        <a href="<?= site_url('admin/publicaciones/edit/' . $p['id']) ?>" class="btn btn-sm btn-warning">Editar</a>
                        <form action="<?= site_url('admin/publicaciones/delete/' . $p['id']) ?>" method="post" class="d-inline" onsubmit="return confirm('¿Estás seguro?');">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" class="text-center">No hay publicaciones para mostrar.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $pager->links() ?>

<?= $this->endSection() ?>