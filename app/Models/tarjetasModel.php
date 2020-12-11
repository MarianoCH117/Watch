<?php namespace App\Models;

use CodeIgniter\Model;

class tarjetasModel extends Model
{
    protected $table      = 'tarjetas';
    protected $primaryKey = '';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['correoUsuario','numTarjeta', 'titular', 'cvv', 'tipo', 'fechaVen'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}