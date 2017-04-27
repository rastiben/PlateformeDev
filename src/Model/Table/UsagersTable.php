<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class UsagersTable extends Table{
    
    public function initialize(array $config){
        
        $this->hasMany('Addresses')->setForeignKey('usager_id');
        
    }
    
}