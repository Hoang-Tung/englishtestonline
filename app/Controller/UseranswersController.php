<?php
class UseranswersController extends AppController{
	public $helpers = array('Form', 'Html', 'Js', 'Time');

	public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }

    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $postId = (int) $this->request->params['pass'][0];
        if ($this->Post->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
  }

	public function add(){
		if($this->request->is('post')){
  		if($this->Useranswer->save($this->request->data)){
  			$this->Flash->success(__('Your post have been saved'));
  			
  		}
  		$this->Flash->error(__('Unable to add your post.'));
  	}
	}
}