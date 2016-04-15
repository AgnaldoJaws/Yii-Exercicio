<h3>Clientes</h3>

<?php

$this->widget('zii.widgets.CMenu', array(
	'items'=>array(
		array('label'=>'New', 'url'=>array('user/new','id'=>1)),
	),
));

 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));


