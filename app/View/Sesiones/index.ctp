<div class="sesiones index">
	<h2><?php echo __('Sesiones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('opinion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('terapeuta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tratamiento_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sesiones as $sesion): ?>
	<tr>
		<td><?php echo h($sesion['Sesion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sesion['Opinion']['nombre'], array('controller' => 'opiniones', 'action' => 'view', $sesion['Opinion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesion['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $sesion['Cliente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesion['Terapeuta']['nombre'], array('controller' => 'terapeutas', 'action' => 'view', $sesion['Terapeuta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sesion['Tratamiento']['nombre'], array('controller' => 'tratamientos', 'action' => 'view', $sesion['Tratamiento']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sesion['Sesion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sesion['Sesion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sesion['Sesion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sesion['Sesion']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sesion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Opiniones'), array('controller' => 'opiniones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opinion'), array('controller' => 'opiniones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terapeutas'), array('controller' => 'terapeutas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terapeuta'), array('controller' => 'terapeutas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamiento'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
