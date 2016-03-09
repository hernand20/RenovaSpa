<div class="agencias form">
<?php echo $this->Form->create('Agencia'); ?>
	<fieldset>
		<legend><?php echo __('Add Agencia'); ?></legend>
	<?php
		echo $this->Form->input('razon_social');
		echo $this->Form->input('nombre_comercial');
		echo $this->Form->input('telefono');
		echo $this->Form->input('correo_electronico');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Agencias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
