<div class="expenseBills index">
	<h2><?php echo __('Expense Bills'); ?></h2>

	<div class="expense-print">
		<?php echo $this->Form->create('print_bill', array('url' => '/ExpenseCategories/print_expense', 'type' => 'get')); ?>
		<?php echo $this->Html->link(__('Print'), array('action' => 'print_expense', 'controller' => 'ExpenseCategories')); ?>

		<?php echo $this->Form->input('from_date', array('type' => 'date', 'div' => array('class' => 'expense-print-date'))); ?>

		<?php echo $this->Form->input('to_date', array('type' => 'date', 'div' => array('class' => 'expense-print-date'))); ?>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
	
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('expense_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_method'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('date_modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($expenseBills as $expenseBill): ?>
	<tr>
		<td><?php echo h($expenseBill['ExpenseBill']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($expenseBill['ExpenseCategory']['name'], array('controller' => 'expense_categories', 'action' => 'view', $expenseBill['ExpenseCategory']['id'])); ?>
		</td>
		<td><?php echo h($expenseBill['ExpenseBill']['name']); ?>&nbsp;</td>
		<td><?php echo h($expenseBill['ExpenseBill']['amount']); ?>&nbsp;</td>
		<td><?php echo h($expenseBill['ExpenseBill']['payment_method']); ?>&nbsp;</td>
		<td><?php echo h($expenseBill['ExpenseBill']['date']); ?>&nbsp;</td>
		<td><?php echo h($expenseBill['ExpenseBill']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($expenseBill['ExpenseBill']['date_modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $expenseBill['ExpenseBill']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $expenseBill['ExpenseBill']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $expenseBill['ExpenseBill']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expenseBill['ExpenseBill']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Expense Bill'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Expense Categories'), array('controller' => 'expense_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense Category'), array('controller' => 'expense_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
