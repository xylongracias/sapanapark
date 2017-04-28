<div class="donations view">
<h2><?php echo __('Donation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Donation'), array('action' => 'edit', $donation['Donation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Donation'), array('action' => 'delete', $donation['Donation']['id']), array(), __('Are you sure you want to delete # %s?', $donation['Donation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Donations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donation'), array('action' => 'add')); ?> </li>
	</ul>
</div>
