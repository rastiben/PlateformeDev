<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Routing\Router;
//use Cake\View\Helper\UrlHelper

class Usager extends Entity{
    
    
    public function getUrl(){
        return Router::url(['controller' => 'Usagers','action' => 'view','id' => $this->id]);
    }
    
    public function getEditUrl(){
        return Router::url(['controller' => 'Usagers','action' => 'edit','id' => $this->id]);
    }
    
    
}