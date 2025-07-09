<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ComentarioModel;

class ComentarioController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $modelo = new ComentarioModel();
        $data = [
            'titulo'      => 'Gestión de Comentarios',
            'comentarios' => $modelo->getComentariosConPublicacion()->paginate(15),
            'pager'       => $modelo->pager,
        ];

        return view('admin/comentarios/index', $data);
    }

    public function edit($id = null)
    {
        $modelo = new ComentarioModel();
        $comentario = $modelo->find($id);

        if ($comentario === null) {
            return redirect()->to('/admin/comentarios')->with('error', 'Comentario no encontrado.');
        }

        $data = [
            'titulo'     => 'Editar Comentario',
            'comentario' => $comentario,
        ];

        return view('admin/comentarios/edit', $data);
    }

    public function update($id = null)
    {
        $modelo = new ComentarioModel();
        if ($modelo->find($id) === null) {
            return redirect()->to('/admin/comentarios')->with('error', 'Comentario no encontrado.');
        }

        $reglas = [
            'contenido' => 'required|min_length[5]',
            'autor'     => 'required',
            'estado'    => 'required|in_list[pendiente,aprobado,rechazado]'
        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $modelo->update($id, [
            'autor'     => $this->request->getPost('autor'),
            'contenido' => $this->request->getPost('contenido'),
            'estado'    => $this->request->getPost('estado'),
        ]);

        return redirect()->to('/admin/comentarios')->with('mensaje', 'Comentario actualizado.');
    }

    public function delete($id = null)
    {
        $modelo = new ComentarioModel();
        if ($modelo->find($id) === null) {
            return redirect()->to('/admin/comentarios')->with('error', 'Comentario no encontrado.');
        }

        $modelo->delete($id);
        return redirect()->to('/admin/comentarios')->with('mensaje', 'Comentario eliminado.');
    }


    public function cambiarEstado($id, $estado)
    {
        $modelo = new ComentarioModel();
        if (!in_array($estado, ['aprobado', 'rechazado', 'pendiente'])) {
            return redirect()->to('/admin/comentarios')->with('error', 'Estado no válido.');
        }

        $modelo->update($id, ['estado' => $estado]);
        return redirect()->back()->with('mensaje', 'Estado del comentario actualizado.');
    }
}