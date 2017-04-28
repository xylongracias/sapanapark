<div class="expenseBills view">
<h2><?php echo __('Expense Bill'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($expenseBill['ExpenseBill']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expense Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($expenseBill['ExpenseCategory']['name'], array('controller' => 'expense_categories', 'action' => 'view', $expenseBill['ExpenseCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($expenseBill['ExpenseBill']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($expenseBill['ExpenseBill']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($expenseBill['ExpenseBill']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($expenseBill['ExpenseBill']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($expenseBill['ExpenseBill']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($expenseBill['ExpenseBill']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Expense Bill'), array('action' => 'edit', $expenseBill['ExpenseBill']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Expense Bill'), array('action' => 'delete', $expenseBill['ExpenseBill']['id']), array(), __('Are you sure you want to delete # %s?', $expenseBill['ExpenseBill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Expense Bills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense Bill'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expense Categories'), array('controller' => 'expense_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expense Category'), array('controller' => 'expense_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
