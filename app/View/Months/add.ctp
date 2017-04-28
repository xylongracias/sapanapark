<div class="months form">
<?php echo $this->Form->create('Month'); ?>
	<fieldset>
		<legend><?php echo __('Add Month'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('user_bill_id');
		echo $this->Form->input('year');
		echo $this->Form->input('april');
		echo $this->Form->input('may');
		echo $this->Form->input('june');
		echo $this->Form->input('july');
		echo $this->Form->input('august');
		echo $this->Form->input('september');
		echo $this->Form->input('october');
		echo $this->Form->input('november');
		echo $this->Form->input('december');
		echo $this->Form->input('january');
		echo $this->Form->input('february');
		echo $this->Form->input('march');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Months'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Bills'), array('controller' => 'user_bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Bill'), array('controller' => 'user_bills', 'action' => 'add')); ?> </li>
	</ul>
</div>
