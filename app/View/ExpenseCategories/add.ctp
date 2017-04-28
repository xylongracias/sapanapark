<div class="expenseCategories form">
<?php echo $this->Form->create('ExpenseCategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Expense Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
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

		<li><?php echo $this->Html->link(__('List Expense Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Expense Bills'), array('controller' => 'expense_bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense Bill'), array('controller' => 'expense_bills', 'action' => 'add')); ?> </li>
	</ul>
</div>
