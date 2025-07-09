<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>

<h2><?= esc($titulo) ?></h2>

<?= $this->include('partials/_session_messages') ?>

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Autor</th>
                <th>Comentario</th>
                <th>En Respuesta a</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($comentarios)): ?>
                <?php foreach ($comentarios as $comentario): ?>
                    <tr>
                        <td><?= esc($comentario['id']) ?></td>
                        <td>
                            <strong><?= esc($comentario['autor']) ?></strong>
                            <br>
                            <small><?= esc($comentario['email_autor']) ?></small>
                        </td>
                        <td><?= esc(substr($comentario['contenido'], 0, 100)) ?>...</td>
                        <td>
                            <a href="#" title="<?= esc($comentario['publicacion_titulo']) ?>">
                                <?= esc(substr($comentario['publicacion_titulo'], 0, 30)) ?>...
                            </a>
                        </td>
                        <td>
                            <?php
                                $estadoClase = [
                                    'pendiente' => 'warning',
                                    'aprobado'  => 'success',
                                    'rechazado' => 'danger',
                                ];
                                $clase = $estadoClase[$comentario['estado']] ?? 'secondary';
                            ?>
                            <span class="badge bg-<?= $clase ?>"><?= esc(ucfirst($comentario['estado'])) ?></span>
                        </td>
                        <td><?= date('d/m/Y', strtotime($comentario['fecha_creacion'])) ?></td>
                        <td>
                            <div class="btn-group">
                                <?php if ($comentario['estado'] !== 'aprobado'): ?>
                                    <a href="<?= site_url('admin/comentarios/cambiar-estado/' . $comentario['id'] . '/aprobado') ?>" class="btn btn-sm btn-success">Aprobar</a>
                                <?php endif; ?>
                                <?php if ($comentario['estado'] !== 'rechazado'): ?>
                                    <a href="<?= site_url('admin/comentarios/cambiar-estado/' . $comentario['id'] . '/rechazado') ?>" class="btn btn-sm btn-secondary">Rechazar</a>
                                <?php endif; ?>
                                <a href="<?= site_url('admin/comentarios/edit/' . $comentario['id']) ?>" class="btn btn-sm btn-warning">Editar</a>
                                <form action="<?= site_url('admin/comentarios/delete/' . $comentario['id']) ?>" method="post" class="d-inline" onsubmit="return confirm('¿Estás seguro?');">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">No hay comentarios para mostrar.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $pager->links() ?>

<?= $this->endSection() ?>