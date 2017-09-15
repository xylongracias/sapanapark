<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('building_id'); ?></th>
			<th><?php echo $this->Paginator->sort('flat_id'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_name'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_email'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('phno'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('occupation'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('user_status'); ?></th>
			<th><?php echo $this->Paginator->sort('join_date'); ?></th>
			<th><?php echo $this->Paginator->sort('leaving_date'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('date_modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['ID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Building']['name'], array('controller' => 'buildings', 'action' => 'view', $user['Building']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Flat']['name'], array('controller' => 'flats', 'action' => 'view', $user['Flat']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['owner_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['owner_email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['phno']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['gender']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['occupation']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['user_status']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['join_date']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['leaving_date']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['date_modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['ID']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['ID']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Buildings'), array('controller' => 'buildings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Building'), array('controller' => 'buildings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flats'), array('controller' => 'flats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flat'), array('controller' => 'flats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Members'), array('controller' => 'family_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Member'), array('controller' => 'family_members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Months'), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month'), array('controller' => 'months', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Bills'), array('controller' => 'user_bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Bill'), array('controller' => 'user_bills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expense Bills'), array('controller' => 'expense_bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expense Categories'), array('controller' => 'expense_categories', 'action' => 'index')); ?> </li>
	</ul>
</div>
