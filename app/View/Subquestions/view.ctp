<div>
	<?php echo $this->Html->media($subquest['Subquestion']['audioUrl'], array('controls')); ?>
</div>


	<iframe name="votar" style="display:none;"></iframe>
<div class="row">
	<div class="col-md-8">
		<?php echo $this->Html->image($subquest['Subquestion']['imageUrl'], array('width' => '800px','alt' => 'CakePHP', 'border' => '0', 'data-src' => 'holder.js/100%x100'));?>
	</div>
	<div class="col-md-4">
		<?php
			for ( $x=1; $x<= $subquest['Subquestion']['quest_num']; $x++ ){
			echo $this->Form->create('Useranswer', array('url' => array('action' => 'add'), 'target' => 'votar'));
			echo $this->Form->input('subquestion_id', array('type' => 'hidden', 'value' => $subquest['Subquestion']['id']));
			echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => 1));
			echo $this->Form->input('question_num', array('type' => 'hidden', 'value' => $x));
			echo $this->Form->input('answer', array('label' => 'Question ' . $x));
			echo $this->Form->end('Save');
			}
		?>
	</div>
</div>