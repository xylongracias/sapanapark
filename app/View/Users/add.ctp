<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('building_id');
		echo $this->Form->input('flat_id');
		echo $this->Form->input('owner_name');
		echo $this->Form->input('owner_email');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('phno');
		echo $this->Form->input('gender');
		echo $this->Form->input('occupation');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('user_status');
		echo $this->Form->input('join_date');
		echo $this->Form->input('leaving_date');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Buildings'), array('controller' => 'buildings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Building'), array('controller' => 'buildings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flats'), array('controller' => 'flats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flat'), array('controller' => 'flats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Members'), array('controller' => 'family_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Member'), array('controller' => 'family_members', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Months'), array('controller' => 'months', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month'), array('controller' => 'months', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Bills'), array('controller' => 'user_bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Bill'), array('controller' => 'user_bills', 'action' => 'add')); ?> </li>
	</ul>
</div>
