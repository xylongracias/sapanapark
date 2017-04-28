<div class="flats view">
<h2><?php echo __('Flat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($flat['Flat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Building'); ?></dt>
		<dd>
			<?php echo $this->Html->link($flat['Building']['name'], array('controller' => 'buildings', 'action' => 'view', $flat['Building']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($flat['Flat']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Floor'); ?></dt>
		<dd>
			<?php echo h($flat['Flat']['floor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($flat['Flat']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($flat['Flat']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Flat'), array('action' => 'edit', $flat['Flat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Flat'), array('action' => 'delete', $flat['Flat']['id']), array(), __('Are you sure you want to delete # %s?', $flat['Flat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Flats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Buildings'), array('controller' => 'buildings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Building'), array('controller' => 'buildings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($flat['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('ID'); ?></th>
		<th><?php echo __('Building Id'); ?></th>
		<th><?php echo __('Flat Id'); ?></th>
		<th><?php echo __('Owner Name'); ?></th>
		<th><?php echo __('Owner Email'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Phno'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Occupation'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('User Status'); ?></th>
		<th><?php echo __('Join Date'); ?></th>
		<th><?php echo __('Leaving Date'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($flat['User'] as $user): ?>
		<tr>
			<td><?php echo $user['ID']; ?></td>
			<td><?php echo $user['building_id']; ?></td>
			<td><?php echo $user['flat_id']; ?></td>
			<td><?php echo $user['owner_name']; ?></td>
			<td><?php echo $user['owner_email']; ?></td>
			<td><?php echo $user['date_of_birth']; ?></td>
			<td><?php echo $user['phno']; ?></td>
			<td><?php echo $user['gender']; ?></td>
			<td><?php echo $user['occupation']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['user_status']; ?></td>
			<td><?php echo $user['join_date']; ?></td>
			<td><?php echo $user['leaving_date']; ?></td>
			<td><?php echo $user['date_created']; ?></td>
			<td><?php echo $user['date_modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['ID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['ID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['ID']), array(), __('Are you sure you want to delete # %s?', $user['ID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
