<?php namespace App\Models;            

use CodeIgniter\Model;

class VypisSaluModel extends Model
{
    
    protected $table = 'saly';

    protected $primaryKey = 'id_salu';
    protected $allowedFields = [
        'id_salu',
        'cislo_salu',
        'typ_promitani',
        'typ_ozvuceni',

      
        
    ];

}

?>