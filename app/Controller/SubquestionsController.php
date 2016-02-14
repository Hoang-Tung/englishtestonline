<?php
class SubquestionsController extends AppController{
	public $helpers = array('Form', 'Html', 'Js', 'Time');

	public function view($id = null){
		if(!$id){
			throw new NotFoundException(__('Invalid test'));
		}

		$subquest = $this->Subquestion->findById($id);
		if(!$subquest){
			throw new NotFoundException(__('Invalid test'));	
		}
		var_dump($subquest);
		$this->set('subquest', $subquest);
	}
}