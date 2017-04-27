<?php
namespace App\Controller;

class UsagersController extends AppController{
    
    var $paginate = array(
        'limit' => 25
    );
    
    public function index(){
        
        $ajax = $this->request->is('ajax') ? 'true' : 'false';
        $this->set('usagers',$this->paginate());
        
        if($ajax == 'true')
            $this->render('/Element/Usagers/list');
    }
    
    public function view($id){
        
        $usager = $this->Usagers->get($id , ['contain' => ['Addresses']]);
        $this->set(compact('usager'));
        $this->render('Usager');
        
    }
    
    public function edit($id = null)
    {
        $usager = $this->Usagers->get($id, ['contain' => ['Addresses']]);
        if ($this->request->is(['post', 'put'])) {
            $this->Usagers->patchEntity($usager, $this->request->getData());
            if ($this->Usagers->save($usager)) {
                $this->Flash->success(__('L\'usager à été mis à jour.'));
                return $this->redirect(['action' => 'view','id' => $id]);
            }
            $this->Flash->error(__('Impossible de mettre à jour l\'usager.'));
        }

        $this->set('usager', $usager);
        $this->render('edit');
    }
    
}