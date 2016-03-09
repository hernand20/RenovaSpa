<div class="sesiones view">
<h2><?php echo __('Sesion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sesion['Sesion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opinion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesion['Opinion']['nombre'], array('controller' => 'opiniones', 'action' => 'view', $sesion['Opinion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesion['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $sesion['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terapeuta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesion['Terapeuta']['nombre'], array('controller' => 'terapeutas', 'action' => 'view', $sesion['Terapeuta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tratamiento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sesion['Tratamiento']['nombre'], array('controller' => 'tratamientos', 'action' => 'view', $sesion['Tratamiento']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sesion'), array('action' => 'edit', $sesion['Sesion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sesion'), array('action' => 'delete', $sesion['Sesion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sesion['Sesion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Sesiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sesion'), array('action' => 'add')); ?> </li>
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
