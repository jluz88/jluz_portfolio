<?php
/**
 * Test Controller
 */
class Main extends CI_Controller {
	
	public function __Construct() {
		parent::__Construct();
		
		$this->template->set_layout('main');
		$this->load->model('main_model');
	}
	
	public function index()
    {
    	$data['cats'] = $this->main_model->get_cats();

		$this->template->build('home_view', $data);
    }
	
	public function cat($page = NULL, $project = NULL)
	{
		$data['cats'] = $this->main_model->get_cats();

		if(!is_null($page) && !is_null($project))
		{
			$data['project'] = $this->main_model->get_project(urldecode($project));
			//pre($data['project']);
			$this->template->build('project_view', $data);
		}
		elseif(!is_null($page))
		{
			$data['cat']      = $this->main_model->get_cat($page);
			$data['projects'] = $this->main_model->get_page($this->uri->segment(1));

			$this->template->build('cat_view', $data);
		}
	}
	
	public function contact()
	{
		$data['cats'] = $this->main_model->get_cats();

		$this->template->build('contact_view', $data);
	}
}