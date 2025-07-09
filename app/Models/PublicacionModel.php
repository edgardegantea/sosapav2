<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicacionModel extends Model
{
    protected $table            = 'publicaciones';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'usuario_id', 'titulo', 'slug', 'extracto', 'cuerpo', 'estado', 'fecha_publicacion'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'fecha_creacion';
    protected $updatedField  = 'fecha_actualizacion';

    public function getPublicacionesConAutor()
    {
        $this->select('publicaciones.*, users.username AS autor');
        $this->join('users', 'users.id = publicaciones.usuario_id');
        $this->orderBy('publicaciones.id', 'DESC');
        return $this;
    }
    

    public function getCategoriasDePublicacion($publicacionId)
    {
        $builder = $this->db->table('publicacion_categoria');
        $builder->select('categoria_id');
        $builder->where('publicacion_id', $publicacionId);
        $query = $builder->get();

        return array_map(function($row) {
            return $row->categoria_id;
        }, $query->getResult());
    }


    public function actualizarCategorias($publicacionId, array $categorias)
    {
        $pivotTable = $this->db->table('publicacion_categoria');

        $pivotTable->where('publicacion_id', $publicacionId)->delete();

        if (!empty($categorias)) {
            $data = [];
            foreach ($categorias as $categoriaId) {
                $data[] = [
                    'publicacion_id' => $publicacionId,
                    'categoria_id'   => $categoriaId
                ];
            }
            $pivotTable->insertBatch($data);
        }
    }




    // Método para obtener las ETIQUETAS de una publicación
    public function getEtiquetasDePublicacion($publicacionId)
    {
        $builder = $this->db->table('publicacion_etiqueta');
        $builder->select('etiqueta_id');
        $builder->where('publicacion_id', $publicacionId);
        $query = $builder->get();

        return array_map(fn($row) => $row->etiqueta_id, $query->getResult());
    }

    // Método para actualizar las ETIQUETAS de una publicación
    public function actualizarEtiquetas($publicacionId, array $etiquetas)
    {
        $pivotTable = $this->db->table('publicacion_etiqueta');
        $pivotTable->where('publicacion_id', $publicacionId)->delete();

        if (!empty($etiquetas)) {
            $data = [];
            foreach ($etiquetas as $etiquetaId) {
                $data[] = [
                    'publicacion_id' => $publicacionId,
                    'etiqueta_id'   => $etiquetaId
                ];
            }
            $pivotTable->insertBatch($data);
        }
    }

}