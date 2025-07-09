<?= \Config\Services::validation()->listErrors() ?>
<?= csrf_field() ?>

<div class="row">
    <div class="col-md-8">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo"
                value="<?= old('titulo', $publicacion['titulo'] ?? '') ?>">
        </div>

        <div class="mb-3">
            <label for="cuerpo" class="form-label">Cuerpo del Post</label>
            <textarea class="form-control" name="cuerpo" id="cuerpo"
                rows="10"><?= old('cuerpo', $publicacion['cuerpo'] ?? '') ?></textarea>
        </div>

        <div class="mb-3">
            <label for="extracto" class="form-label">Extracto (Opcional)</label>
            <textarea class="form-control" name="extracto" id="extracto"
                rows="3"><?= old('extracto', $publicacion['extracto'] ?? '') ?></textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5>Publicar</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select name="estado" id="estado" class="form-select">
                        <option value="borrador"
                            <?= old('estado', $publicacion['estado'] ?? '') == 'borrador' ? 'selected' : '' ?>>Borrador
                        </option>
                        <option value="publicado"
                            <?= old('estado', $publicacion['estado'] ?? '') == 'publicado' ? 'selected' : '' ?>>
                            Publicado</option>
                        <option value="archivado"
                            <?= old('estado', $publicacion['estado'] ?? '') == 'archivado' ? 'selected' : '' ?>>
                            Archivado</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="<?= site_url('admin/publicaciones') ?>" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <h5>Categorías</h5>
            </div>
            <div class="card-body" style="max-height: 200px; overflow-y: auto;">
                <?php if (!empty($categorias)): ?>
                <?php foreach($categorias as $cat): ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="categorias[]" value="<?= $cat['id'] ?>"
                        id="cat-<?= $cat['id'] ?>"
                        <?php if(in_array($cat['id'], old('categorias', $categorias_publicacion ?? []))): ?> checked
                        <?php endif; ?>>
                    <label class="form-check-label" for="cat-<?= $cat['id'] ?>">
                        <?= esc($cat['nombre']) ?>
                    </label>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                <p>No hay categorías creadas.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>




    <div class="card mt-3">
        <div class="card-header">
            <h5>Etiquetas</h5>
        </div>
        <div class="card-body" style="max-height: 200px; overflow-y: auto;">
            <?php if (!empty($etiquetas)): ?>
            <?php foreach($etiquetas as $tag): ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="etiquetas[]" value="<?= $tag['id'] ?>"
                    id="tag-<?= $tag['id'] ?>"
                    <?php if(in_array($tag['id'], old('etiquetas', $etiquetas_publicacion ?? []))): ?> checked
                    <?php endif; ?>>
                <label class="form-check-label" for="tag-<?= $tag['id'] ?>">
                    <?= esc($tag['nombre']) ?>
                </label>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
            <p>No hay etiquetas creadas.</p>
            <?php endif; ?>
        </div>
    </div>

</div>