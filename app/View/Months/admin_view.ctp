<div class="months view">
<h2><?php echo __('Month'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($month['Month']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($month['User']['owner_name'], array('controller' => 'users', 'action' => 'view', $month['User']['ID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Bill'); ?></dt>
		<dd>
			<?php echo $this->Html->link($month['UserBill']['name'], array('controller' => 'user_bills', 'action' => 'view', $month['UserBill']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($month['Month']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('April'); ?></dt>
		<dd>
			<?php echo h($month['Month']['april']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('May'); ?></dt>
		<dd>
			<?php echo h($month['Month']['may']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('June'); ?></dt>
		<dd>
			<?php echo h($month['Month']['june']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('July'); ?></dt>
		<dd>
			<?php echo h($month['Month']['july']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('August'); ?></dt>
		<dd>
			<?php echo h($month['Month']['august']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('September'); ?></dt>
		<dd>
			<?php echo h($month['Month']['september']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('October'); ?></dt>
		<dd>
			<?php echo h($month['Month']['october']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('November'); ?></dt>
		<dd>
			<?php echo h($month['Month']['november']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('December'); ?></dt>
		<dd>
			<?php echo h($month['Month']['december']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('January'); ?></dt>
		<dd>
			<?php echo h($month['Month']['january']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('February'); ?></dt>
		<dd>
			<?php echo h($month['Month']['february']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('March'); ?></dt>
		<dd>
			<?php echo h($month['Month']['march']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($month['Month']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($month['Month']['date_modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Month'), array('action' => 'edit', $month['Month']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Month'), array('action' => 'delete', $month['Month']['id']), array(), __('Are you sure you want to delete # %s?', $month['Month']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Months'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Month'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Bills'), array('controller' => 'user_bills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Bill'), array('controller' => 'user_bills', 'action' => 'add')); ?> </li>
	</ul>
</div>
