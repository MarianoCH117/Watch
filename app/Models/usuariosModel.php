<?php namespace App\Models;

use CodeIgniter\Model;

class usuariosModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'correo';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['correo','nombre', 'apellidos', 'contrasenia'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}