<div class="flats form">
<?php echo $this->Form->create('Flat'); ?>
	<fieldset>
		<legend><?php echo __('Edit Flat'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('building_id');
		echo $this->Form->input('name');
		echo $this->Form->input('floor');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Flat.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Flat.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Flats'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Buildings'), array('controller' => 'buildings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Building'), array('controller' => 'buildings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
