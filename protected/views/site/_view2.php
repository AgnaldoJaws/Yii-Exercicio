


<table>
	<tr>
		<td>Id</td>
		<td>Nome</td>
		<td>Email</td>
		<td>Ações</td>
	</tr>

	<tr>

		<td><?php echo CHtml::encode($data->id); ?></td>
		<td><?php echo CHtml::encode($data->username); ?></td>
		<td><?php echo CHtml::encode($data->email); ?></td>
		<td>
			<?php echo CHtml::link(CHtml::encode('Delete'), array('user/delet', 'id'=>$data->id)); ?>
			<?php echo CHtml::link(CHtml::encode('Update'), array('user/Update', 'id'=>$data->id)); ?>

		</td>
	</tr>
</table>

<div class="simple">











