<div class="right-aside clearfix">
  
<div class="header-right" hoe-position-type="relative">
    
    <h3>Edition de l'usager <?= $usager->nom . ' ' . $usager->prenom ?></h3>        
    
</div>
 

 <h2>Informations sur l'usager</h2>
  

<?php

    echo $this->Form->create($usager);
    echo $this->Form->input('nom');
    echo $this->Form->input('prenom');

?>
    
<hr>
<h2>Adresses de l'usager</h2>
    
<table>
   <thead>
       <tr>
           <th>Adresse</th>
           <th>Code Postal</th>
           <th>Ville</th>
       </tr>
   </thead>
    <tbody>
<?php

    for($i = 0; $i < count($usager->addresses); $i++){ ?>
     <?php echo $this->Form->input('addresses.'.$i.'.id'); ?>   
     <tr>
         <td><?php echo $this->Form->input('addresses.'.$i.'.adresse',['label' => false]); ?></td>
         <td><?php echo $this->Form->input('addresses.'.$i.'.cp',['label' => false]); ?></td>
         <td><?php echo $this->Form->input('addresses.'.$i.'.ville',['label' => false]); ?></td>
     </tr>
      
<?php   
    }
?>
    </tbody>      
</table>  

<?php

    echo $this->Html->link(
        'Annuler',
        ['controller' => 'Usagers', 'action' => 'view', $usager->id],
        ['confirm' => 'Ne pas enregistrer les changements ?',
        'class'=>'btn btn-danger']
    );
    echo $this->Form->button(__("Sauvegarder"),['class'=>'btn btn-success']);
    echo $this->Form->end();
    
?>


</div>