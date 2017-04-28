<div class="months index">
	<h2><?php echo __('Months'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_bill_id'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('april'); ?></th>
			<th><?php echo $this->Paginator->sort('may'); ?></th>
			<th><?php echo $this->Paginator->sort('june'); ?></th>
			<th><?php echo $this->Paginator->sort('july'); ?></th>
			<th><?php echo $this->Paginator->sort('august'); ?></th>
			<th><?php echo $this->Paginator->sort('september'); ?></th>
			<th><?php echo $this->Paginator->sort('october'); ?></th>
			<th><?php echo $this->Paginator->sort('november'); ?></th>
			<th><?php echo $this->Paginator->sort('december'); ?></th>
			<th><?php echo $this->Paginator->sort('january'); ?></th>
			<th><?php echo $this->Paginator->sort('february'); ?></th>
			<th><?php echo $this->Paginator->sort('march'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('date_modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($months as $month): ?>
	<tr>
		<td><?php echo h($month['Month']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($month['User']['owner_name'], array('controller' => 'users', 'action' => 'view', $month['User']['ID'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($month['UserBill']['id'], array('controller' => 'user_bills', 'action' => 'view', $month['UserBill']['id'])); ?>
		</td>
		<td><?php echo h($month['Month']['year']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['april']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['may']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['june']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['july']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['august']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['september']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['october']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['november']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['december']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['january']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['february']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['march']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($month['Month']['date_modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $month['Month']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $month['Month']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $month['Month']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $month['Month']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Month'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Bills'), array('controller' => 'user_bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Bill'), array('controller' => 'user_bills', 'action' => 'add')); ?> </li>
	</ul>
</div>
