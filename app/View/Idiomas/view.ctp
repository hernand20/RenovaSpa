<div class="idiomas view">
<h2><?php echo __('Idioma'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($idioma['Idioma']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($idioma['Idioma']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Idioma'), array('action' => 'edit', $idioma['Idioma']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Idioma'), array('action' => 'delete', $idioma['Idioma']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $idioma['Idioma']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Idiomas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Idioma'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clientes'); ?></h3>
	<?php if (!empty($idioma['Cliente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pais Id'); ?></th>
		<th><?php echo __('Idioma Id'); ?></th>
		<th><?php echo __('Hotel Id'); ?></th>
		<th><?php echo __('Agencia Id'); ?></th>
		<th><?php echo __('Circustancia Id'); ?></th>
		<th><?php echo __('Fecha Alta'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Edad'); ?></th>
		<th><?php echo __('Correo Electronico'); ?></th>
		<th><?php echo __('Habitacion'); ?></th>
		<th><?php echo __('Firma'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($idioma['Cliente'] as $cliente): ?>
		<tr>
			<td><?php echo $cliente['id']; ?></td>
			<td><?php echo $cliente['pais_id']; ?></td>
			<td><?php echo $cliente['idioma_id']; ?></td>
			<td><?php echo $cliente['hotel_id']; ?></td>
			<td><?php echo $cliente['agencia_id']; ?></td>
			<td><?php echo $cliente['circustancia_id']; ?></td>
			<td><?php echo $cliente['fecha_alta']; ?></td>
			<td><?php echo $cliente['nombre']; ?></td>
			<td><?php echo $cliente['apellidos']; ?></td>
			<td><?php echo $cliente['edad']; ?></td>
			<td><?php echo $cliente['correo_electronico']; ?></td>
			<td><?php echo $cliente['habitacion']; ?></td>
			<td><?php echo $cliente['firma']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clientes', 'action' => 'view', $cliente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clientes', 'action' => 'edit', $cliente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clientes', 'action' => 'delete', $cliente['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cliente['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
