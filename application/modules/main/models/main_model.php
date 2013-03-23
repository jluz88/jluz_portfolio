<?php
/**
 * 
 */
class Main_model extends MY_Model{
	
	public function __Construct()
	{
		parent::__Construct();		
	}
	
	public function get_cats()
	{
		$result = $this->db->get_where('cats', array('active' => TRUE))->result();
		
		return (count($result) > 0) ? $result : FALSE;
	}
	
	public function get_cat($slug='')
	{
		$result = $this->db->get_where('cats', array('slug' => $slug))->row();
		
		return ($result) ? $result : FALSE;
	}
	
	public function get_page($slug = NULL)
	{
		$this->db->select('projects.id,projects.title, projects.description, projects.thumb');
		$this->db->join('cats', 'cats.id = projects.cat_id', 'left');
		$this->db->where('cats.slug', $slug);
		$result = $this->db->get('projects')->result();
		
		return ($result) ? $result : FALSE;
	}
	
	public function get_project($project_title)	
	{
		$result->project = $this->db->get_where('projects', array('slug' => $project_title))->row();
		
		if($result->project->id)
		{
			$result->images  = $this->db->get_where('images', array('project_id' => $result->project->id))->result();
		}
		
		return $result;
	}
	
}
