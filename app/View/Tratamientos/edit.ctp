<div class="tratamientos form">
<?php echo $this->Form->create('Tratamiento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tratamiento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tratamiento.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Tratamiento.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sesiones'), array('controller' => 'sesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sesion'), array('controller' => 'sesiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
