<h1><?php echo h($test['Test']['title']); ?></h1>

<?php
	foreach ($test_quest as $item) {		
		echo $this->Html->link(
			$item['Question']['title'], array('controller' => 'questions' ,'action' => 'view', $item['Question']['id'])
    );
    echo '</br>';
	}
?>