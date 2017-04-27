<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       
        Plateforme de développement
    </title>
    
    <?php echo $this->Html->css('bootstrap.min.css');?>
    <?php echo $this->Html->script('jquery.js');?>
    <?php echo $this->Html->script('bootstrap.min.js');?>
    
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
        <header id="header" hoe-lpanel-effect="shrink" class="">
            <div class="header-left">
                <a href="#"><span>NOM DU LOGICIEL</span></a>
                <span class="hoe-sidebar-toggle"><a href="#"></a></span>
            </div>
        </header>
        
        <?php $controller = $this->request->params['controller']; ?>
        
        <aside id="left-aside" hoe-position-type="absolute">
                <ul class="nav">
                    <li class="<?= (!empty($controller) && ($controller == 'Usagers') )?'active' :'' ?>">
                        <a href="<?= $this->Url->build(['controller' => 'Usagers']); ?>">
                            <span class="text">Dashboard</span>
                        </a>
                        <span class="selected"></span>
                    </li>
                    <li class="<?= (!empty($controller) && ($controller == 'Admin') )?'active' :'' ?>">
                        <a href="<?= $this->Url->build(['controller' => 'Admin']); ?>">
                            <span class="text">Administrateur</span>
                        </a>
                        <span class="selected"></span>
                    </li>
                </ul>
            </aside>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <script>
        /*$(document).on('click','#left-aside .text',function(e){
            e.preventDefault();
            $('.rendering').css('display','block');
            $.ajax({
                type:'GET',
                url:$(this).attr('data-url'),
                success : function(data){
                    $('.right-aside').html(data);
                }
            });
        });*/
    </script>
    <footer>
    </footer>
</body>
</html>
