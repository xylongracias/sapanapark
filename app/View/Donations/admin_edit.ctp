<div class="donations form">
<?php echo $this->Form->create('Donation'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Donation'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Donation.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Donation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Donations'), array('action' => 'index')); ?></li>
	</ul>
</div>
