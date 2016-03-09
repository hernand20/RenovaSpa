<div class="agencias view">
<h2><?php echo __('Agencia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($agencia['Agencia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Razon Social'); ?></dt>
		<dd>
			<?php echo h($agencia['Agencia']['razon_social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Comercial'); ?></dt>
		<dd>
			<?php echo h($agencia['Agencia']['nombre_comercial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($agencia['Agencia']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Electronico'); ?></dt>
		<dd>
			<?php echo h($agencia['Agencia']['correo_electronico']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Agencia'), array('action' => 'edit', $agencia['Agencia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Agencia'), array('action' => 'delete', $agencia['Agencia']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $agencia['Agencia']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Agencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agencia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clientes'); ?></h3>
	<?php if (!empty($agencia['Cliente'])): ?>
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
	<?php foreach ($agencia['Cliente'] as $cliente): ?>
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
