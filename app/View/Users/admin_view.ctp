<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($user['User']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Building'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Building']['name'], array('controller' => 'buildings', 'action' => 'view', $user['Building']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flat'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Flat']['name'], array('controller' => 'flats', 'action' => 'view', $user['Flat']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['owner_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['owner_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($user['User']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phno'); ?></dt>
		<dd>
			<?php echo h($user['User']['phno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Occupation'); ?></dt>
		<dd>
			<?php echo h($user['User']['occupation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Join Date'); ?></dt>
		<dd>
			<?php echo h($user['User']['join_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leaving Date'); ?></dt>
		<dd>
			<?php echo h($user['User']['leaving_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['ID']), array(), __('Are you sure you want to delete # %s?', $user['User']['ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
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
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Family Members'); ?></h3>
	<?php if (!empty($user['FamilyMember'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Occupation'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['FamilyMember'] as $familyMember): ?>
		<tr>
			<td><?php echo $familyMember['id']; ?></td>
			<td><?php echo $familyMember['user_id']; ?></td>
			<td><?php echo $familyMember['name']; ?></td>
			<td><?php echo $familyMember['date_of_birth']; ?></td>
			<td><?php echo $familyMember['occupation']; ?></td>
			<td><?php echo $familyMember['gender']; ?></td>
			<td><?php echo $familyMember['date_created']; ?></td>
			<td><?php echo $familyMember['date_modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'family_members', 'action' => 'view', $familyMember['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'family_members', 'action' => 'edit', $familyMember['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'family_members', 'action' => 'delete', $familyMember['id']), array(), __('Are you sure you want to delete # %s?', $familyMember['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Family Member'), array('controller' => 'family_members', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Months'); ?></h3>
	<?php if (!empty($user['Month'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('April'); ?></th>
		<th><?php echo __('May'); ?></th>
		<th><?php echo __('June'); ?></th>
		<th><?php echo __('July'); ?></th>
		<th><?php echo __('August'); ?></th>
		<th><?php echo __('September'); ?></th>
		<th><?php echo __('October'); ?></th>
		<th><?php echo __('November'); ?></th>
		<th><?php echo __('December'); ?></th>
		<th><?php echo __('January'); ?></th>
		<th><?php echo __('February'); ?></th>
		<th><?php echo __('March'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Month'] as $month): ?>
		<tr>
			<td><?php echo $month['id']; ?></td>
			<td><?php echo $month['user_id']; ?></td>
			<td><?php echo $month['year']; ?></td>
			<td><?php echo $month['april']; ?></td>
			<td><?php echo $month['may']; ?></td>
			<td><?php echo $month['june']; ?></td>
			<td><?php echo $month['july']; ?></td>
			<td><?php echo $month['august']; ?></td>
			<td><?php echo $month['september']; ?></td>
			<td><?php echo $month['october']; ?></td>
			<td><?php echo $month['november']; ?></td>
			<td><?php echo $month['december']; ?></td>
			<td><?php echo $month['january']; ?></td>
			<td><?php echo $month['february']; ?></td>
			<td><?php echo $month['march']; ?></td>
			<td><?php echo $month['date_created']; ?></td>
			<td><?php echo $month['date_modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'months', 'action' => 'view', $month['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'months', 'action' => 'edit', $month['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'months', 'action' => 'delete', $month['id']), array(), __('Are you sure you want to delete # %s?', $month['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Month'), array('controller' => 'months', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Bills'); ?></h3>
	<?php if (!empty($user['UserBill'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Ammount'); ?></th>
		<th><?php echo __('Payment Method'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Payment For'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserBill'] as $userBill): ?>
		<tr>
			<td><?php echo $userBill['id']; ?></td>
			<td><?php echo $userBill['user_id']; ?></td>
			<td><?php echo $userBill['name']; ?></td>
			<td><?php echo $userBill['ammount']; ?></td>
			<td><?php echo $userBill['payment_method']; ?></td>
			<td><?php echo $userBill['date']; ?></td>
			<td><?php echo $userBill['payment_for']; ?></td>
			<td><?php echo $userBill['description']; ?></td>
			<td><?php echo $userBill['date_created']; ?></td>
			<td><?php echo $userBill['date_modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_bills', 'action' => 'view', $userBill['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_bills', 'action' => 'edit', $userBill['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_bills', 'action' => 'delete', $userBill['id']), array(), __('Are you sure you want to delete # %s?', $userBill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Bill'), array('controller' => 'user_bills', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
