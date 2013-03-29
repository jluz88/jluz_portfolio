<?php
/**
 * 
 */
class admin extends CI_controller {
	
	public function __Construct()
	{
		parent::__Construct();
		
		$this->template->set_layout('admin');
	}
	
	public function main()
	{
		$this->template->build('admin');
	}
	
	public function cats()
	{
		$this->template->build('cats_view');
	}
	
	public function projects()
	{
		$this->template->build('projects_view');	
	}

	public function items($id)
	{
		$this->template->build('items_view');	
	}
	
	public function upload()
	{
		
	}
	
}
