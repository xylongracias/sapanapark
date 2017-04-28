<div class="userBills form">
<?php echo $this->Form->create('UserBill'); ?>
	<fieldset>
		<legend><?php echo __('Add User Bill'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('ammount');
		echo $this->Form->input('payment_method');
		
		echo $this->Form->checkbox('Month.april',array('value' => '1','hiddenField' => '0'));?>
		<label for="MonthApril">April</label>

		<?php echo $this->Form->checkbox('Month.may',array('value' => '1','hiddenField' => '0',));?>
		<label for="MonthMay">May</label>

		<?php echo $this->Form->checkbox('Month.june',array('value' => '1','hiddenField' => '0',));?>
		<label for="MonthJune">June</label>

		<?php echo $this->Form->checkbox('Month.july',array('value' => '1','hiddenField' => '0',));?>
		<label for="MonthJuly">July</label>

		<?php echo $this->Form->checkbox('Month.august',array('value' => '1','hiddenField' => '0',));?>
		<label for="MonthAugust">August</label>

		<?php echo $this->Form->checkbox('Month.september',array('value' => '1','hiddenField' => '0',));?>
		<label for="MonthSeptember">September</label>

		<?php echo $this->Form->checkbox('Month.october',array('value' => '1','hiddenField' => '0',));?>
		<label for="MonthOctober">October</label>

		<?php echo $this->Form->checkbox('Month.november',array('value' => '1','hiddenField' => '0',));?>
		<label for="MonthNovember">November</label>

		<?php echo $this->Form->checkbox('Month.december',array('value' => '1','hiddenField' => '0',));?>
		<label for="MonthDecember">December</label>

		<?php echo $this->Form->checkbox('Month.january',array('value' => '1','hiddenField' => '0',));?>
		<label for="MonthJanuary">January</label>

		<?php echo $this->Form->checkbox('Month.february',array('value' => '1','hiddenField' => '0',));?>
		<label for="MonthFebruary">February</label>

		<?php echo $this->Form->checkbox('Month.march',array('value' => '1','hiddenField' => '0',));?>
		<label for="MonthMarch">March</label>

		<?php echo $this->Form->input('date');
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

		<li><?php echo $this->Html->link(__('List User Bills'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
