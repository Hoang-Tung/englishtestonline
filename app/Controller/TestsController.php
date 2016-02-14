<?php

class TestsController extends AppController{
	
	public $helpers = array('Form', 'Html', 'Js', 'Time');

	public function index(){
		$this->set('tests', $this->Test->find('all'));
	}

	public function view($id = null){
		if(!$id){
			throw new NotFoundException(__('Invalid test'));
		}

		$test = $this->Test->findById($id);
		if(!$test){
			throw new NotFoundException(__('Invalid test'));	
		}
		
		$test_quest_list = array();
		$this->loadModel("Question");
		foreach ($test['Testquest'] as $test_quest) {
			$tq_id = $test_quest['question_id'];
			$quest = $this->Question->findById($tq_id);
			array_push($test_quest_list, $quest);
		}
		$this->set('test', $test);
		$this->set('test_quest', $test_quest_list);
	}
}