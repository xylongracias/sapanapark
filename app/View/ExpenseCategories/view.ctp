<div class="expenseCategories view">
<h2><?php echo __('Expense Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($expenseCategory['ExpenseCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($expenseCategory['ExpenseCategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($expenseCategory['ExpenseCategory']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($expenseCategory['ExpenseCategory']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($expenseCategory['ExpenseCategory']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Expense Category'), array('action' => 'edit', $expenseCategory['ExpenseCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Expense Category'), array('action' => 'delete', $expenseCategory['ExpenseCategory']['id']), array(), __('Are you sure you want to delete # %s?', $expenseCategory['ExpenseCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Expense Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expense Bills'), array('controller' => 'expense_bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense Bill'), array('controller' => 'expense_bills', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Expense Bills'); ?></h3>
	<?php if (!empty($expenseCategory['ExpenseBill'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Expense Category Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Payment Method'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($expenseCategory['ExpenseBill'] as $expenseBill): ?>
		<tr>
			<td><?php echo $expenseBill['id']; ?></td>
			<td><?php echo $expenseBill['expense_category_id']; ?></td>
			<td><?php echo $expenseBill['name']; ?></td>
			<td><?php echo $expenseBill['amount']; ?></td>
			<td><?php echo $expenseBill['payment_method']; ?></td>
			<td><?php echo $expenseBill['date']; ?></td>
			<td><?php echo $expenseBill['date_created']; ?></td>
			<td><?php echo $expenseBill['date_modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'expense_bills', 'action' => 'view', $expenseBill['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'expense_bills', 'action' => 'edit', $expenseBill['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'expense_bills', 'action' => 'delete', $expenseBill['id']), array(), __('Are you sure you want to delete # %s?', $expenseBill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Expense Bill'), array('controller' => 'expense_bills', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
