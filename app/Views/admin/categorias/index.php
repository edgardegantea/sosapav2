<?= $this->extend('layouts/admin_layout') ?> <?= $this->section('content') ?>

<h2><?= esc($titulo) ?></h2>

<a href="<?= site_url('admin/categorias/new') ?>" class="btn btn-primary mb-3">Nueva Categoría</a>

<?php if(session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
<?php endif; ?>

<?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

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
        <?php if (!empty($categorias)): ?>
            <?php foreach ($categorias as $categoria): ?>
                <tr>
                    <td><?= esc($categoria['id']) ?></td>
                    <td><?= esc($categoria['nombre']) ?></td>
                    <td><?= esc($categoria['slug']) ?></td>
                    <td>
                        <a href="<?= site_url('admin/categorias/edit/' . $categoria['id']) ?>" class="btn btn-sm btn-warning">Editar</a>
                        <form action="<?= site_url('admin/categorias/delete/' . $categoria['id']) ?>" method="post" class="d-inline" onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta categoría?');">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">No hay categorías para mostrar.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->endSection() ?>