<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel{
	
	public $hasMany = array('Useranswer');

	public $validate = array(
			'email' => array(
					'rule' => 'notBlank',
					'message' => 'A email is required'
				),
			'pass' => array(
					'required' => array(
							'rule' => 'notBlank',
							'message' => 'A password is required'
						)
				),
			'role' => array(
					'valid' => array(
							'rule' => array('inList', array(1,2)),
							'message' => 'Please enter a valid role',
							'allowEmpty' => false
						)
				)
		);

	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['pass'])) {
        $passwordHasher = new BlowfishPasswordHasher();
        $this->data[$this->alias]['pass'] = $passwordHasher->hash(
            $this->data[$this->alias]['pass']
        );
    }
    return true;
	}
}