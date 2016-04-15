<h3>Clientes</h3>

<?php

$this->widget('zii.widgets.CMenu', array(
    'items'=>array(
        array('label'=>'Novo Cliente', 'url'=>array('cliente/new')),
        array('label'=>'Enderecos', 'url'=>array('endereco/index')),
    ),
));

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view2',
));

