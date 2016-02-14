<h1><?php echo h($question['Question']['title']); ?></h1>

<?php
	foreach ($question['Subquestion'] as $item) {		
		echo $this->Html->link(
			'Subquestion' . $item['id'], array('controller' => 'subquestions' ,'action' => 'view', $item['id'])
    );
    echo '</br>';
	}
?>