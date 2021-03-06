<div class="opiniones view">
<h2><?php echo __('Opinion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($opinion['Opinion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($opinion['Opinion']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Opinion'), array('action' => 'edit', $opinion['Opinion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Opinion'), array('action' => 'delete', $opinion['Opinion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $opinion['Opinion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Opiniones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opinion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sesiones'), array('controller' => 'sesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sesion'), array('controller' => 'sesiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sesiones'); ?></h3>
	<?php if (!empty($opinion['Sesion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Opinion Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Terapeuta Id'); ?></th>
		<th><?php echo __('Tratamiento Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($opinion['Sesion'] as $sesion): ?>
		<tr>
			<td><?php echo $sesion['id']; ?></td>
			<td><?php echo $sesion['opinion_id']; ?></td>
			<td><?php echo $sesion['cliente_id']; ?></td>
			<td><?php echo $sesion['terapeuta_id']; ?></td>
			<td><?php echo $sesion['tratamiento_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sesiones', 'action' => 'view', $sesion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sesiones', 'action' => 'edit', $sesion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sesiones', 'action' => 'delete', $sesion['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sesion['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sesion'), array('controller' => 'sesiones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
