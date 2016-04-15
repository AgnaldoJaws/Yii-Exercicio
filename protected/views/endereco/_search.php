<?php
/* @var $this EnderecoController */
/* @var $model Endereco */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEndereco'); ?>
		<?php echo $form->textField($model,'idEndereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rua'); ?>
		<?php echo $form->textField($model,'rua',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero'); ?>
		<?php echo $form->textField($model,'numero'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->