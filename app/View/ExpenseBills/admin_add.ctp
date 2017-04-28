<div class="expenseBills form">
<?php echo $this->Form->create('ExpenseBill'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Expense Bill'); ?></legend>
	<?php
		echo $this->Form->input('expense_category_id');
		echo $this->Form->input('name');
		echo $this->Form->input('amount');
		echo $this->Form->input('payment_method');
		echo $this->Form->input('date');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Expense Bills'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Expense Categories'), array('controller' => 'expense_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense Category'), array('controller' => 'expense_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
