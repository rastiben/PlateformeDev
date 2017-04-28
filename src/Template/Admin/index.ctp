<?php $tab = empty($this->request->query['tab']) ? 'forms' : $this->request->query['tab']; ?>

 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?= ($tab == 'forms')?'active' :'' ?>">
            <a href="<?= $this->Url->build(['controller' => 'admin','tab'=>'forms']); ?>">Formulaires</a>
        </li>
        <li class="<?= ($tab == 'cars')?'active' :'' ?>">
            <a href="<?= $this->Url->build(['controller' => 'admin','tab'=>'cars']); ?>">Véhicules</a>
        </li>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="right-aside clearfix">           

<div class="header-right" hoe-position-type="relative">
            
    <?php
    
        $this->Breadcrumbs->add(
            'Administrateur',
            ['controller' => 'Admin']
        );

        echo $this->Breadcrumbs->render(
            ['class' => 'breadcrumbs-trail'],
            ['separator' => '&nbsp;/&nbsp;']
        );
    
    ?>
</div>

<?php echo $this->element('Admin/'.$tab); ?> 

</div>