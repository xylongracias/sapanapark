<div class="userBills form">
<?php echo $this->Form->create('UserBill'); ?>
	<fieldset>
		<legend><?php echo __('Edit User Bill'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
		echo $this->Form->input('ammount');
		echo $this->Form->input('payment_method');
		echo $this->Form->input('date');
		echo $this->Form->input('payment_for');
		echo $this->Form->input('description');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserBill.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UserBill.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Bills'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
