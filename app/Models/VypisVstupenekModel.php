<?php namespace App\Models;            

use CodeIgniter\Model;

class VypisVstupenekModel extends Model
{
    
    protected $table = 'prodeje';

    protected $primaryKey = 'id_prodeje';
    protected $allowedFields = [
        'id_prodeje',
        'cas_prodeje',
        'cena_vstupenky',
        'misto_v_sale',
        'id_salu_id',

      
        
    ];

}

?>