<div class="block col-md-12">
   
   <div class="rendering">
      <div class="rendering-info">
           <div class="loader"></div>
           <h5>Récupération des éléments</h5>
       </div>
   </div>
   
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
            </tr>
        </thead>
        <tbody>


    <?php foreach($usagers as $usager) { ?>

    <tr>

    <td><a href="<?= $usager->getUrl(); ?>"><?= $usager->id; ?></a></td>

    <td><?= $usager->nom; ?></td>

    <td><?= $usager->prenom; ?></td>

    </tr>

    <?php } ?>


        </tbody>
    </table>
    
<div class="paginator">
<ul class="pagination pagination-large">
    <?php
        echo $this->Paginator->prev(__('Précédent'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
        echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
        echo $this->Paginator->next(__('Suivant'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
    ?>
</ul>
</div>

</div>