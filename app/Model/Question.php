<?php
class Question extends AppModel{
	public $hasMany = array('Testquest', 'Subquestion');
	
}