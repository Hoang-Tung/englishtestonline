<?php
class Useranswer extends AppModel{
	
	public $belongsTo = array('User', 'Subquestion');

}