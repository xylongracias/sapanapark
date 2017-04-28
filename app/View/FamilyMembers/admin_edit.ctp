<div class="familyMembers form">
<?php echo $this->Form->create('FamilyMember'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Family Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('occupation');
		echo $this->Form->input('gender');
		echo $this->Form->input('date_created');
		echo $this->Form->input('date_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FamilyMember.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FamilyMember.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Family Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
