<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class CategoriaController extends BaseController
{
    protected $helpers = ['form', 'url'];

    public function index()
    {
        $modelo = new CategoriaModel();
        $data = [
            'titulo'     => 'Gestión de Categorías',
            'categorias' => $modelo->orderBy('id', 'DESC')->findAll(),
        ];

        return view('admin/categorias/index', $data);
    }

    public function new()
    {
        $data = [
            'titulo' => 'Crear Nueva Categoría',
        ];
        return view('admin/categorias/new', $data);
    }

    public function create()
    {
        $modelo = new CategoriaModel();
        $reglas = [
            'nombre' => 'required|min_length[3]|max_length[100]|is_unique[categorias.nombre]',
        ];

        if (! $this->validate($reglas)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'slug'   => $this->generarSlug($this->request->getPost('nombre')),
        ];

        $modelo->save($datos);

        return redirect()->to('/admin/categorias')->with('mensaje', 'Categoría creada exitosamente.');
    }

    public function edit($id = null)
    {
        $modelo = new CategoriaModel();
        $categoria = $modelo->find($id);

        if ($categoria === null) {
            return redirect()->to('/admin/categorias')->with('error', 'Categoría no encontrada.');
        }

        $data = [
            'titulo'    => 'Editar Categoría',
            'categoria' => $categoria,
        ];

        return view('admin/categorias/edit', $data);
    }

    public function update($id = null)
    {
        $modelo = new CategoriaModel();
        $categoria = $modelo->find($id);

        if ($categoria === null) {
            return redirect()->to('/admin/categorias')->with('error', 'Categoría no encontrada.');
        }

        $reglas = [
            'nombre' => 'required|min_length[3]|max_length[100]|is_unique[categorias.nombre,id,' . $id . ']',
        ];

        if (! $this->validate($reglas)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'slug'   => $this->generarSlug($this->request->getPost('nombre')),
        ];

        $modelo->update($id, $datos);

        return redirect()->to('/admin/categorias')->with('mensaje', 'Categoría actualizada exitosamente.');
    }

    public function delete($id = null)
    {
        $modelo = new CategoriaModel();
        $categoria = $modelo->find($id);

        if ($categoria === null) {
            return redirect()->to('/admin/categorias')->with('error', 'Categoría no encontrada.');
        }
        

        $modelo->delete($id);

        return redirect()->to('/admin/categorias')->with('mensaje', 'Categoría eliminada exitosamente.');
    }

    private function generarSlug(string $texto): string
    {
        $texto = preg_replace('~[^\pL\d]+~u', '-', $texto);
        $texto = iconv('utf-8', 'us-ascii//TRANSLIT', $texto);
        $texto = preg_replace('~[^-\w]+~', '', $texto);
        $texto = trim($texto, '-');
        $texto = preg_replace('~-+~', '-', $texto);
        $texto = strtolower($texto);

        if (empty($texto)) {
            return 'n-a';
        }

        return $texto;
    }
}