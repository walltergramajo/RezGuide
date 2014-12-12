<?php
	class Building extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('update_model');
	}

	function index(){
		$data['pgTitle'] = "Building Main Menu";
		$data['subTitle'] = "Building Main Menu";
		$this->load->view('templates/head', $data);
		$this->load->view('building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function contests(){
		$data['pgTitle'] = "Building Contests Add";
		$this->load->view('templates/head', $data);
		$this->load->view('building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('building/building_contests');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function contests_edit(){
		$data['pgTitle'] = "Building Contests Edit";
		$this->load->view('templates/head', $data);
		$this->load->view('building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('building/building_contests_edit_select');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function garbage(){
		$data['pgTitle'] = "Building Garbage Day";
		$data['subSection'] = "Garbage Day";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('building/building_garbage_housekeeping');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function garbage_edit(){
		$data['pgTitle'] = "Building Garbage Day";
		$data['subSection'] = "Garbage Day";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('building/garbage_housekeeping_edit');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function program_select(){
		$data['pgTitle'] = "Building Housekeeping Day";
		$data['subSection'] = "Housekeeping Day";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/building_header');
		$this->load->view('edit/building/building_program_select');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function events(){
		$data['pgTitle'] = "Building Events Main";
		$this->load->view('templates/head', $data);
		$this->load->view('edit/building/building_header');
		$this->load->view('building/building_options_menu');
		$this->load->view('edit/building/building_events_select');
		$this->load->view('templates/footer');
		$this->load->view('templates/close');
	}

	function rules($record = null){
		if($record != null){
			$this->load->helper('text');
			$data['pgTitle'] = "Building Rules &amp; Regulations";
			$data['subTitle'] = "Rules and Regulations";
			$data['rules'] =$this->update_model->getAll('tbl_rules');
			$rule = $this->update_model->getSingle('tbl_rules', 'rules_id', $record);
				$id = $rule->rules_id;
				$name = $rule->rules_title;
				$desc = $rule->rules_description;
			$data['formstart'] = form_open('building/update_record/bld_rule', array('id' => 'bldRule'));
				$data['name'] = form_input(array(
										'name' => 'name',
										'class' => 'titleText',
										'type' => 'text',
										'placeholder' => 'Title',
										'value' => $name
				));
				$data['desc'] = form_textarea(array(
										'name' => 'desc',
										'placeholder' => 'Description',
										'value' => $desc
				));
				$data['id'] = form_hidden('id', $id);
			$this->load->view('templates/head', $data);
			$this->load->view('building/building_header');
			$this->load->view('building/building_options_menu');
			$this->load->view('building/building_rules');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}else{
			$this->load->helper('text');
			$data['pgTitle'] = "Building Rules &amp; Regulations";
			$data['subTitle'] = "Rules and Regulations";
			$data['rules'] = $this->update_model->getAll('tbl_rules');
			$data['formstart'] = form_open('building/insert_record/bld_rule', array('id' => 'bldRule'));
				$data['name'] = form_input(array(
										'name' => 'name',
										'class' => 'titleText',
										'type' => 'text',
										'placeholder' => 'Title'
				));
				$data['desc'] = form_textarea(array(
										'name' => 'desc',
										'placeholder' => 'Description'
				));

			$this->load->view('templates/head', $data);
			$this->load->view('building/building_header');
			$this->load->view('building/building_options_menu');
			$this->load->view('building/building_rules');
			$this->load->view('templates/footer');
			$this->load->view('templates/close');
		}
	}

	public function insert_record($function) {
		$this->load->model('insert_model');
		$this->insert_model->$function();

		if($function == "bld_rule"){
			$this->building('rules');
		}

	}

	public function update_record($function){
		$this->update_model->$function();
		
		if($function == "bld_rule"){
			$this->building('rules');
		}
	}
}

?>