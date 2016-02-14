<?php
class QuestionsController extends AppController{
	public $helpers = array('Form', 'Html', 'Js', 'Time');

	public function view($id=null){
		if(!$id){
			throw new NotFoundException(__('Invalid test'));
		}

		$question = $this->Question->findById($id);
		if(!$question){
			throw new NotFoundException(__('Invalid test'));	
		}
		var_dump($question);
		$this->set('question', $question);
		
	}

}