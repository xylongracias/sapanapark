<div class="buildings view">
<h2><?php echo __('Building'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($building['Building']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($building['Building']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Of Flats'); ?></dt>
		<dd>
			<?php echo h($building['Building']['no_of_flats']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($building['Building']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($building['Building']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Building'), array('action' => 'edit', $building['Building']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Building'), array('action' => 'delete', $building['Building']['id']), array(), __('Are you sure you want to delete # %s?', $building['Building']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Buildings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Building'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flats'), array('controller' => 'flats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flat'), array('controller' => 'flats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Flats'); ?></h3>
	<?php if (!empty($building['Flat'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Building Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Floor'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($building['Flat'] as $flat): ?>
		<tr>
			<td><?php echo $flat['id']; ?></td>
			<td><?php echo $flat['building_id']; ?></td>
			<td><?php echo $flat['name']; ?></td>
			<td><?php echo $flat['floor']; ?></td>
			<td><?php echo $flat['date_created']; ?></td>
			<td><?php echo $flat['date_modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'flats', 'action' => 'view', $flat['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'flats', 'action' => 'edit', $flat['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'flats', 'action' => 'delete', $flat['id']), array(), __('Are you sure you want to delete # %s?', $flat['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Flat'), array('controller' => 'flats', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($building['User'])): ?>
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
	<?php foreach ($building['User'] as $user): ?>
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
