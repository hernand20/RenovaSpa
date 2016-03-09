<div class="terapeutas view">
<h2><?php echo __('Terapeuta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($terapeuta['Terapeuta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($terapeuta['Terapeuta']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Terapeuta'), array('action' => 'edit', $terapeuta['Terapeuta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Terapeuta'), array('action' => 'delete', $terapeuta['Terapeuta']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $terapeuta['Terapeuta']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Terapeutas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terapeuta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sesiones'), array('controller' => 'sesiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sesion'), array('controller' => 'sesiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sesiones'); ?></h3>
	<?php if (!empty($terapeuta['Sesion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Opinion Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Terapeuta Id'); ?></th>
		<th><?php echo __('Tratamiento Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($terapeuta['Sesion'] as $sesion): ?>
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
