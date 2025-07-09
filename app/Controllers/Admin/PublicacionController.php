<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PublicacionModel;
use App\Models\CategoriaModel;
use App\Models\EtiquetaModel; // Asegúrate de que este 'use' esté presente

class PublicacionController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $publicacionModel = new PublicacionModel();
        
        $data = [
            'titulo' => 'Gestión de Publicaciones',
            'publicaciones' => $publicacionModel->getPublicacionesConAutor()->paginate(10), // Paginación
            'pager' => $publicacionModel->pager,
        ];

        return view('admin/publicaciones/index', $data);
    }

    public function new()
    {
        $categoriaModel = new CategoriaModel();
        $etiquetaModel = new EtiquetaModel(); // Cargar modelo de etiquetas
        
        $data = [
            'titulo'     => 'Crear Nueva Publicación',
            'categorias' => $categoriaModel->findAll(),
            'etiquetas'  => $etiquetaModel->findAll() // Pasar etiquetas a la vista
        ];
        return view('admin/publicaciones/new', $data);
    }

    public function create()
    {
        $reglas = [
            'titulo'     => 'required|min_length[5]|max_length[255]',
            'cuerpo'     => 'required',
            'estado'     => 'required|in_list[publicado,borrador,archivado]',
            'categorias' => 'permit_empty|is_array',
            'etiquetas'  => 'permit_empty|is_array' // Regla para etiquetas
        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $publicacionModel = new PublicacionModel();

        $datosPublicacion = [
            'usuario_id' => auth()->id(), // ID del usuario logueado con Shield
            'titulo'     => $this->request->getPost('titulo'),
            'slug'       => $this->generarSlug($this->request->getPost('titulo')),
            'extracto'   => $this->request->getPost('extracto'),
            'cuerpo'     => $this->request->getPost('cuerpo'),
            'estado'     => $this->request->getPost('estado'),
        ];
        
        // Si el estado es "publicado", se establece la fecha de publicación
        if ($datosPublicacion['estado'] === 'publicado') {
            $datosPublicacion['fecha_publicacion'] = date('Y-m-d H:i:s');
        }

        // Guardar la publicación y obtener su ID
        $publicacionId = $publicacionModel->insert($datosPublicacion, true);
        
        // Guardar las categorías asociadas
        $categoriasSeleccionadas = $this->request->getPost('categorias') ?? [];
        $publicacionModel->actualizarCategorias($publicacionId, $categoriasSeleccionadas);
        
        // Guardar las etiquetas asociadas
        $etiquetasSeleccionadas = $this->request->getPost('etiquetas') ?? [];
        $publicacionModel->actualizarEtiquetas($publicacionId, $etiquetasSeleccionadas);

        return redirect()->to('/admin/publicaciones')->with('mensaje', 'Publicación creada exitosamente.');
    }

    public function edit($id = null)
    {
        $publicacionModel = new PublicacionModel();
        $categoriaModel = new CategoriaModel();
        $etiquetaModel = new EtiquetaModel(); // Cargar modelo de etiquetas

        $publicacion = $publicacionModel->find($id);
        if ($publicacion === null) {
            return redirect()->to('/admin/publicaciones')->with('error', 'Publicación no encontrada.');
        }

        $data = [
            'titulo'                 => 'Editar Publicación',
            'publicacion'            => $publicacion,
            'categorias'             => $categoriaModel->findAll(),
            'categorias_publicacion' => $publicacionModel->getCategoriasDePublicacion($id),
            'etiquetas'              => $etiquetaModel->findAll(), // Pasar todas las etiquetas
            'etiquetas_publicacion'  => $publicacionModel->getEtiquetasDePublicacion($id) // Pasar etiquetas de la publicación
        ];

        return view('admin/publicaciones/edit', $data);
    }

    public function update($id = null)
    {
        $reglas = [
            'titulo'     => 'required|min_length[5]|max_length[255]',
            'cuerpo'     => 'required',
            'estado'     => 'required|in_list[publicado,borrador,archivado]',
            'categorias' => 'permit_empty|is_array',
            'etiquetas'  => 'permit_empty|is_array' // Regla para etiquetas
        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $publicacionModel = new PublicacionModel();
        $publicacionActual = $publicacionModel->find($id);

        $datosPublicacion = [
            'titulo'     => $this->request->getPost('titulo'),
            'slug'       => $this->generarSlug($this->request->getPost('titulo')),
            'extracto'   => $this->request->getPost('extracto'),
            'cuerpo'     => $this->request->getPost('cuerpo'),
            'estado'     => $this->request->getPost('estado'),
        ];
        
        // Si el estado cambia a "publicado" y no tenía fecha, se establece
        if ($datosPublicacion['estado'] === 'publicado' && $publicacionActual['fecha_publicacion'] === null) {
            $datosPublicacion['fecha_publicacion'] = date('Y-m-d H:i:s');
        }

        $publicacionModel->update($id, $datosPublicacion);
        
        // Actualizar las categorías asociadas
        $categoriasSeleccionadas = $this->request->getPost('categorias') ?? [];
        $publicacionModel->actualizarCategorias($id, $categoriasSeleccionadas);
        
        // Actualizar las etiquetas asociadas
        $etiquetasSeleccionadas = $this->request->getPost('etiquetas') ?? [];
        $publicacionModel->actualizarEtiquetas($id, $etiquetasSeleccionadas);

        return redirect()->to('/admin/publicaciones')->with('mensaje', 'Publicación actualizada exitosamente.');
    }

    public function delete($id = null)
    {
        $publicacionModel = new PublicacionModel();
        if ($publicacionModel->find($id) === null) {
            return redirect()->to('/admin/publicaciones')->with('error', 'Publicación no encontrada.');
        }

        $publicacionModel->delete($id);

        return redirect()->to('/admin/publicaciones')->with('mensaje', 'Publicación eliminada exitosamente.');
    }

    private function generarSlug(string $texto): string
    {
        // Esta función es la misma que usamos en CategoriaController
        $texto = preg_replace('~[^\pL\d]+~u', '-', $texto);
        $texto = iconv('utf-8', 'us-ascii//TRANSLIT', $texto);
        $texto = preg_replace('~[^-\w]+~', '', $texto);
        $texto = trim($texto, '-');
        $texto = preg_replace('~-+~', '-', $texto);
        $texto = strtolower($texto);
        return empty($texto) ? 'n-a' : $texto;
    }
}