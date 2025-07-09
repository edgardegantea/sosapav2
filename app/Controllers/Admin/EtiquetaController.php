<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EtiquetaModel;

class EtiquetaController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $modelo = new EtiquetaModel();
        $data = [
            'titulo'    => 'Gestión de Etiquetas',
            'etiquetas' => $modelo->orderBy('id', 'DESC')->findAll(),
        ];

        return view('admin/etiquetas/index', $data);
    }

    public function new()
    {
        $data = ['titulo' => 'Crear Nueva Etiqueta'];
        return view('admin/etiquetas/new', $data);
    }

    public function create()
    {
        $modelo = new EtiquetaModel();
        $reglas = ['nombre' => 'required|min_length[2]|max_length[50]|is_unique[etiquetas.nombre]'];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $modelo->save([
            'nombre' => $this->request->getPost('nombre'),
            'slug'   => $this->generarSlug($this->request->getPost('nombre')),
        ]);

        return redirect()->to('/admin/etiquetas')->with('mensaje', 'Etiqueta creada exitosamente.');
    }

    public function edit($id = null)
    {
        $modelo = new EtiquetaModel();
        $etiqueta = $modelo->find($id);

        if ($etiqueta === null) {
            return redirect()->to('/admin/etiquetas')->with('error', 'Etiqueta no encontrada.');
        }

        $data = [
            'titulo'   => 'Editar Etiqueta',
            'etiqueta' => $etiqueta,
        ];

        return view('admin/etiquetas/edit', $data);
    }

    public function update($id = null)
    {
        $modelo = new EtiquetaModel();
        $reglas = ['nombre' => 'required|min_length[2]|max_length[50]|is_unique[etiquetas.nombre,id,' . $id . ']'];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $modelo->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'slug'   => $this->generarSlug($this->request->getPost('nombre')),
        ]);

        return redirect()->to('/admin/etiquetas')->with('mensaje', 'Etiqueta actualizada exitosamente.');
    }

    public function delete($id = null)
    {
        $modelo = new EtiquetaModel();
        if ($modelo->find($id) === null) {
            return redirect()->to('/admin/etiquetas')->with('error', 'Etiqueta no encontrada.');
        }
        
        $modelo->delete($id);
        return redirect()->to('/admin/etiquetas')->with('mensaje', 'Etiqueta eliminada exitosamente.');
    }

    private function generarSlug(string $texto): string
    {
        $texto = preg_replace('~[^\pL\d]+~u', '-', $texto);
        $texto = iconv('utf-8', 'us-ascii//TRANSLIT', $texto);
        $texto = preg_replace('~[^-\w]+~', '', $texto);
        $texto = trim($texto, '-');
        $texto = preg_replace('~-+~', '-', $texto);
        $texto = strtolower($texto);
        return empty($texto) ? 'n-a' : $texto;
    }
}