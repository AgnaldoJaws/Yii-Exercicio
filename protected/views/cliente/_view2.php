


<table>
	<tr>
		<td>Id</td>
		<td>Nome</td>
		<td>Email</td>
		<td>Rua</td>
		<td>Numero</td>
		<td>Ações</td>
	</tr>

	<tr>
		<td><?php echo CHtml::encode($data->id); ?></td>
		<td><?php echo CHtml::encode($data->nome); ?></td>
		<td><?php echo CHtml::encode($data->email); ?></td>
		<td><?php echo CHtml::encode($data->idEndereco0->rua); ?></td>
		<td><?php echo CHtml::encode($data->idEndereco0->numero); ?></td>
		<td>
			<?php echo CHtml::link(CHtml::encode('Delete'), array('cliente/delete', 'id'=>$data->id)); ?>
			<?php echo CHtml::link(CHtml::encode('Update'), array('cliente/Update', 'id'=>$data->id)); ?>

		</td>
	</tr>
</table>
















