<div class="hoteles form">
<?php echo $this->Form->create('Hotele'); ?>
	<fieldset>
		<legend><?php echo __('Add Hotele'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('ubicacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hoteles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
