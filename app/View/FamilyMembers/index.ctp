<div class="familyMembers index">
	<h2><?php echo __('Family Members'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('relation_with_owner'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('occupation'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('date_modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($familyMembers as $familyMember): ?>
	<tr>
		<td><?php echo h($familyMember['FamilyMember']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($familyMember['User']['owner_name'], array('controller' => 'users', 'action' => 'view', $familyMember['User']['ID'])); ?>
		</td>
		<td><?php echo h($familyMember['FamilyMember']['name']); ?>&nbsp;</td>
		<td><?php echo h($familyMember['FamilyMember']['relation_with_owner']); ?>&nbsp;</td>
		<td><?php echo h($familyMember['FamilyMember']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($familyMember['FamilyMember']['occupation']); ?>&nbsp;</td>
		<td><?php echo h($familyMember['FamilyMember']['gender']); ?>&nbsp;</td>
		<td><?php echo h($familyMember['FamilyMember']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($familyMember['FamilyMember']['date_modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $familyMember['FamilyMember']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $familyMember['FamilyMember']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $familyMember['FamilyMember']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $familyMember['FamilyMember']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Family Member'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
