<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends Application {
	public function index()	{
		$role = $this->session->userdata('userrole');
		if ($role == 'admin'){
			$this->data['content'] = 'This is admin view.';
		} 
		else if ($role == 'user'){
			$this->data['content'] = 'You\'re not authorized to view this page. Go away.';
		}
		else{
			$this->data['content'] = 'This shouldn\'t happen';
		}

		$this->render();
	}
}