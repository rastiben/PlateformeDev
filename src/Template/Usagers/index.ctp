<div class="right-aside clearfix">
           
<div class="header-right" hoe-position-type="relative">
            
    <?php
    
        $this->Breadcrumbs->add(
            'Usagers',
            ['controller' => 'Usagers', 'action' => 'index']
        );

        echo $this->Breadcrumbs->render(
            ['class' => 'breadcrumbs-trail'],
            ['separator' => '&nbsp;/&nbsp;']
        );
    
    ?>
</div>

<div class="block col-md-3 text-center green">
   <span class="glyphicon glyphicon-user"></span>
   <h3><?= $this->Paginator->params()['count']; ?></h3>
</div>

<?php echo $this->element('Usagers/list'); ?> 

<script>
    
    $(document).on('click','.paginator li a',function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        if(href != ''){
            $('.rendering').css('display','block');
            $.ajax({
                type:'GET',
                url:href,
                success : function(data){
                    $('.block.col-md-12').replaceWith(data);
                }
            });
        }
    });
    
</script>


</div>