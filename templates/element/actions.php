<ul class="side-nav">
	<li class="heading"><?= __('Actions'); ?></li>
	<li><?= $this->Html->link(
		'New '.$type, 
		['action' => 'add' ]
		); ?>			
	</li>
	<li><?= $this->Html->link(
		'List '.$typePlural, 
		['action' => 'index' ]
		); ?>			
	</li>
</ul>