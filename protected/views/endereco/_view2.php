


<table>
	<tr>
		<td>Id</td>
		<td>Rua</td>
		<td>Numero</td>
		<td>Ações</td>
	</tr>

	<tr>

		<td><?php echo CHtml::encode($data->idEndereco); ?></td>
		<td><?php echo CHtml::encode($data->rua); ?></td>
		<td><?php echo CHtml::encode($data->numero); ?></td>
		<td>
			<?php echo CHtml::link(CHtml::encode('Delete'), array('endereco/delete', 'id'=>$data->idEndereco)); ?>
			<?php echo CHtml::link(CHtml::encode('Update'), array('endereco/Update', 'id'=>$data->idEndereco)); ?>

		</td>
	</tr>
</table>


<?php













