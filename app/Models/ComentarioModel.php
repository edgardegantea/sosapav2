<?php

namespace App\Models;

use CodeIgniter\Model;

class ComentarioModel extends Model
{
    protected $table            = 'comentarios';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['publicacion_id', 'autor', 'email_autor', 'contenido', 'estado'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'fecha_creacion';
    protected $updatedField  = '';


    public function getComentariosConPublicacion()
    {
        $this->select('comentarios.*, publicaciones.titulo AS publicacion_titulo');
        $this->join('publicaciones', 'publicaciones.id = comentarios.publicacion_id');
        $this->orderBy('comentarios.id', 'DESC');
        return $this;
    }
}