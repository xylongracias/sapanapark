<div class="vehicles form">
<?php echo $this->Form->create('Vehicle'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('reg_no');
		echo $this->Form->input('company');
		echo $this->Form->input('type', array(
			'options' => array("two-wheeler" => "two-wheeler", "four-wheeler" => "four-wheeler"),
			'empty' => '(choose one)'
		));
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
