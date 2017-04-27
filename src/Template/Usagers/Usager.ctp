<div class="right-aside clearfix">           

<div class="header-right" hoe-position-type="relative">
            
    <?php
    
        $this->Breadcrumbs->add(
            'Usagers',
            ['controller' => 'Usagers', 'action' => 'index']
        );

        $this->Breadcrumbs->add(
            $usager->id,
            ['controller' => 'Usagers', 'action' => 'view','id' => $usager->id]
        );


        echo $this->Breadcrumbs->render(
            ['class' => 'breadcrumbs-trail'],
            ['separator' => '&nbsp;/&nbsp;']
        );
    
    ?>
</div>

<a href="<?= $usager->url; ?>"><h1><?= $usager->nom . ' ' . $usager->prenom ?></h1></a>

<p><?php if(array_key_exists(0, $usager->addresses)) echo $usager->addresses[0]->adresse ?></p>


<a href="<?= $usager->getEditUrl(); ?>" class="btn btn-default">Modifier</a>


</div>