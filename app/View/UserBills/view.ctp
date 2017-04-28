<div class="userBills view">
<h2><?php echo __('User Bill'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userBill['UserBill']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userBill['User']['owner_name'], array('controller' => 'users', 'action' => 'view', $userBill['User']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($userBill['UserBill']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ammount'); ?></dt>
		<dd>
			<?php echo h($userBill['UserBill']['ammount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($userBill['UserBill']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($userBill['UserBill']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment For'); ?></dt>
		<dd>
			<?php echo h($userBill['UserBill']['payment_for']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($userBill['UserBill']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($userBill['UserBill']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($userBill['UserBill']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Bill'), array('action' => 'edit', $userBill['UserBill']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Bill'), array('action' => 'delete', $userBill['UserBill']['id']), array(), __('Are you sure you want to delete # %s?', $userBill['UserBill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Bills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Bill'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
