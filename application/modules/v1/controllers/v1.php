<?php
/**
 * 
 */
class v1 extends REST_Controller{
	
	public function __Construct()
	{
		parent::__Construct();
		$this->load->model('v1_model');
	}
	
	public function test_($value='')
	{
		
	}

	public function albums_get()
	{
		$user_id = $this->get('user_id');

		$return = $this->api_model->get_something($user_id);

		$this->response($return);
	}
	
	public function cats_get($id = null)
	{
		if($id != null && is_numeric($id))
		{
			$this->db->where('id', $id);
		}
		$data = $this->db->get('cats')->result();
		
		$this->response($data);
	}
	
	public function cats_post()
	{
		$data = $this->post();
		
		$this->db->insert('cats', $data);
		
		$cat_id = $this->db->insert_id();
		
		$this->response(array('id' => $cat_id));
	}
	
	public function cats_put($id)
	{
		$data = $this->_put_args;
		
		$this->db->where('id', $id);
		$this->db->update('cats', $data);
		
		$this->response($data);
	}

	public function cats_delete($id)
	{
		$this->db->delete('cats', array('id' => $id));
		
		if($this->db->affected_rows()){
			$return = TRUE;
		}else{
			$return = FALSE;
		}
		
		$this->response($return);
	}
	
}