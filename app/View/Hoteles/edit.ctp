<div class="hoteles form">
<?php echo $this->Form->create('Hotele'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hotele'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('ubicacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hotele.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Hotele.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Hoteles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
