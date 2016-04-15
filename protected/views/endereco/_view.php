<?php
/* @var $this EnderecoController */
/* @var $data Endereco */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEndereco')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEndereco), array('view', 'id'=>$data->idEndereco)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rua')); ?>:</b>
	<?php echo CHtml::encode($data->rua); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />


</div>