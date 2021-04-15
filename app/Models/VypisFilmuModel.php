<?php namespace App\Models;            

use CodeIgniter\Model;

class VypisFilmuModel extends Model
{

    protected $table = 'filmy';

    protected $primaryKey = 'id_filmu';
    protected $allowedFields = [
        'id_filmu',
        'nazev_cz',
        'originalni_nazev',
        'delka',
        'id_typu_filmu',
        'id_zanru_filmu',
        'zeme_id_zeme',
      
        
    ];

}

?>