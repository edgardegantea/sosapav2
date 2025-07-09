<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4"><?= esc($titulo) ?></h1>
            <p>Bienvenido, <?= esc(auth()->user()->username) ?>. Desde aquí puedes gestionar el contenido de tu blog.
            </p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">📚 Gestión de Categorías</h5>
                    <p class="card-text">Crea, edita y elimina las categorías para organizar tus publicaciones.</p>
                    <div class="mt-auto">
                        <a href="<?= site_url('admin/categorias') ?>" class="btn btn-primary">Ir a Categorías</a>
                    </div>
                </div>
            </div>
        </div>

       <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">💬 Moderación de Comentarios</h5>
                    <p class="card-text">Aprueba, rechaza y responde a los comentarios de los lectores de tu blog.</p>
                    <div class="mt-auto">
                        <a href="<?= site_url('admin/comentarios') ?>" class="btn btn-primary">Moderar Comentarios</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">📝 Gestión de Publicaciones</h5>
                    <p class="card-text">Escribe nuevas publicaciones, edita borradores y gestiona todo el contenido del
                        blog.</p>
                    <div class="mt-auto">
                        <a href="<?= site_url('admin/publicaciones') ?>" class="btn btn-primary">Ir a Publicaciones</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">🏷️ Gestión de Etiquetas</h5>
                    <p class="card-text">Añade y gestiona las etiquetas para una clasificación más detallada.</p>
                    <div class="mt-auto">
                        <a href="<?= site_url('admin/etiquetas') ?>" class="btn btn-primary">Ir a Etiquetas</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<?= $this->endSection() ?>