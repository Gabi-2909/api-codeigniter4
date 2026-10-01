<?php

namespace App\Models;

use CodeIgniter\Model;

class productoModel extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'descripcion',
        'stock',
        'precio'
    ];

    protected $returnType = 'array';
}