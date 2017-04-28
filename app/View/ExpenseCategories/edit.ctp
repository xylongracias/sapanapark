<div class="expenseCategories form">
<?php echo $this->Form->create('ExpenseCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Expense Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ExpenseCategory.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ExpenseCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Expense Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Expense Bills'), array('controller' => 'expense_bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense Bill'), array('controller' => 'expense_bills', 'action' => 'add')); ?> </li>
	</ul>
</div>
