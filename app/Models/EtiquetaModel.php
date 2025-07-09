<?php

namespace App\Models;

use CodeIgniter\Model;

class EtiquetaModel extends Model
{
    protected $table            = 'etiquetas';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nombre', 'slug'];

    // Tabla sin timestamps
    protected $useTimestamps = false;
}