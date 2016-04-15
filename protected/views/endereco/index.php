<h3>Endereco</h3>

<?php

$this->widget('zii.widgets.CMenu', array(
    'items'=>array(
        array('label'=>'Clientes', 'url'=>array('cliente/index')),
        array('label'=>'Novo endereco', 'url'=>array('endereco/new')),
    ),
));

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view2',
));



