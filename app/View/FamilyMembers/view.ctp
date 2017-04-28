<div class="familyMembers view">
<h2><?php echo __('Family Member'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($familyMember['FamilyMember']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familyMember['User']['owner_name'], array('controller' => 'users', 'action' => 'view', $familyMember['User']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($familyMember['FamilyMember']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Realation with the Owner'); ?></dt>
		<dd>
			<?php echo h($familyMember['FamilyMember']['relation_with_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($familyMember['FamilyMember']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Occupation'); ?></dt>
		<dd>
			<?php echo h($familyMember['FamilyMember']['occupation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($familyMember['FamilyMember']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($familyMember['FamilyMember']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($familyMember['FamilyMember']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Family Member'), array('action' => 'edit', $familyMember['FamilyMember']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Family Member'), array('action' => 'delete', $familyMember['FamilyMember']['id']), array(), __('Are you sure you want to delete # %s?', $familyMember['FamilyMember']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
