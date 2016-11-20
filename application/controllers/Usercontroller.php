<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usercontroller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'usercontroller/index/';
        $config['total_rows'] = $this->usermodel->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'usercontroller/index/';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $usercontroller = $this->usermodel->index_limit($config['per_page'], $start);

        $data = array(
            'usercontroller_data' => $usercontroller,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->template->load('usercontroller/tbl_user_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'usercontroller/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'usercontroller/index/';
        }

        $config['total_rows'] = $this->usermodel->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'usercontroller/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $usercontroller = $this->usermodel->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'usercontroller_data' => $usercontroller,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('usercontroller/tbl_user_list', $data);
    }

    public function read($id) 
    {
        $row = $this->usermodel->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'Fullname' => $row->Fullname,
		'Name' => $row->Name,
		'Lastname' => $row->Lastname,
		'Birthday' => $row->Birthday,
		'Gender' => $row->Gender,
		'Nationalcode' => $row->Nationalcode,
		'IdentityNumber' => $row->IdentityNumber,
		'State' => $row->State,
		'City' => $row->City,
		'District' => $row->District,
		'Phone' => $row->Phone,
		'CellPhone' => $row->CellPhone,
		'CodePost' => $row->CodePost,
		'Address' => $row->Address,
		'Username' => $row->Username,
		'Password' => $row->Password,
		'Email' => $row->Email,
	    );
            $this->template->load('usercontroller/tbl_user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'رکورد مورد نظر پیدا نشد');
            redirect(site_url('usercontroller'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'ایجاد',
            'action' => site_url('usercontroller/create_action'),
	    'ID' => set_value('ID'),
	    'Fullname' => set_value('Fullname'),
	    'Name' => set_value('Name'),
	    'Lastname' => set_value('Lastname'),
	    'Birthday' => set_value('Birthday'),
	    'Gender' => set_value('Gender'),
	    'Nationalcode' => set_value('Nationalcode'),
	    'IdentityNumber' => set_value('IdentityNumber'),
	    'State' => set_value('State'),
	    'City' => set_value('City'),
	    'District' => set_value('District'),
	    'Phone' => set_value('Phone'),
	    'CellPhone' => set_value('CellPhone'),
	    'CodePost' => set_value('CodePost'),
	    'Address' => set_value('Address'),
	    'Username' => set_value('Username'),
	    'Password' => set_value('Password'),
	    'Email' => set_value('Email'),
	);
        $this->template->load('tbl_user_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Fullname' => $this->input->post('Fullname',TRUE),
		'Name' => $this->input->post('Name',TRUE),
		'Lastname' => $this->input->post('Lastname',TRUE),
		'Birthday' => $this->input->post('Birthday',TRUE),
		'Gender' => $this->input->post('Gender',TRUE),
		'Nationalcode' => $this->input->post('Nationalcode',TRUE),
		'IdentityNumber' => $this->input->post('IdentityNumber',TRUE),
		'State' => $this->input->post('State',TRUE),
		'City' => $this->input->post('City',TRUE),
		'District' => $this->input->post('District',TRUE),
		'Phone' => $this->input->post('Phone',TRUE),
		'CellPhone' => $this->input->post('CellPhone',TRUE),
		'CodePost' => $this->input->post('CodePost',TRUE),
		'Address' => $this->input->post('Address',TRUE),
		'Username' => $this->input->post('Username',TRUE),
		'Password' => $this->input->post('Password',TRUE),
		'Email' => $this->input->post('Email',TRUE),
	    );

            $this->usermodel->insert($data);
            $this->session->set_flashdata('message', 'رکورد با موفقیت ثبت شد');
            redirect(site_url('usercontroller'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->usermodel->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'ویرایش',
                'action' => site_url('usercontroller/update_action'),
		'ID' => set_value('ID', $row->ID),
		'Fullname' => set_value('Fullname', $row->Fullname),
		'Name' => set_value('Name', $row->Name),
		'Lastname' => set_value('Lastname', $row->Lastname),
		'Birthday' => set_value('Birthday', $row->Birthday),
		'Gender' => set_value('Gender', $row->Gender),
		'Nationalcode' => set_value('Nationalcode', $row->Nationalcode),
		'IdentityNumber' => set_value('IdentityNumber', $row->IdentityNumber),
		'State' => set_value('State', $row->State),
		'City' => set_value('City', $row->City),
		'District' => set_value('District', $row->District),
		'Phone' => set_value('Phone', $row->Phone),
		'CellPhone' => set_value('CellPhone', $row->CellPhone),
		'CodePost' => set_value('CodePost', $row->CodePost),
		'Address' => set_value('Address', $row->Address),
		'Username' => set_value('Username', $row->Username),
		'Password' => set_value('Password', $row->Password),
		'Email' => set_value('Email', $row->Email),
	    );
            $this->template->load('tbl_user_form', $data);
        } else {
            $this->session->set_flashdata('message', 'اطلاعات پیدا نشد');
            redirect(site_url('usercontroller'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'Fullname' => $this->input->post('Fullname',TRUE),
		'Name' => $this->input->post('Name',TRUE),
		'Lastname' => $this->input->post('Lastname',TRUE),
		'Birthday' => $this->input->post('Birthday',TRUE),
		'Gender' => $this->input->post('Gender',TRUE),
		'Nationalcode' => $this->input->post('Nationalcode',TRUE),
		'IdentityNumber' => $this->input->post('IdentityNumber',TRUE),
		'State' => $this->input->post('State',TRUE),
		'City' => $this->input->post('City',TRUE),
		'District' => $this->input->post('District',TRUE),
		'Phone' => $this->input->post('Phone',TRUE),
		'CellPhone' => $this->input->post('CellPhone',TRUE),
		'CodePost' => $this->input->post('CodePost',TRUE),
		'Address' => $this->input->post('Address',TRUE),
		'Username' => $this->input->post('Username',TRUE),
		'Password' => $this->input->post('Password',TRUE),
		'Email' => $this->input->post('Email',TRUE),
	    );

            $this->usermodel->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'ویرایش رکورد با موفقیت انجام شد');
            redirect(site_url('usercontroller'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->usermodel->get_by_id($id);

        if ($row) {
            $this->usermodel->delete($id);
            $this->session->set_flashdata('message', 'حذف رکورد با موفقیت انجام شد');
            redirect(site_url('usercontroller'));
        } else {
            $this->session->set_flashdata('message', 'رکورد مورد نظر پیدا نشد');
            redirect(site_url('usercontroller'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Fullname', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('Name', ' ', 'trim|required');
	$this->form_validation->set_rules('Lastname', ' ', 'trim|required');
	$this->form_validation->set_rules('Birthday', ' ', 'trim|required');
	$this->form_validation->set_rules('Gender', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('Nationalcode', ' ', 'trim|required');
	$this->form_validation->set_rules('IdentityNumber', ' ', 'trim|required');
	$this->form_validation->set_rules('State', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('City', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('District', ' ', 'trim|required');
	$this->form_validation->set_rules('Phone', ' ', 'trim|required');
	$this->form_validation->set_rules('CellPhone', ' ', 'trim|required');
	$this->form_validation->set_rules('CodePost', ' ', 'trim|required');
	$this->form_validation->set_rules('Address', ' ', 'trim|required');
	$this->form_validation->set_rules('Username', ' ', 'trim|required');
	$this->form_validation->set_rules('Password', ' ', 'trim|required');
	$this->form_validation->set_rules('Email', ' ', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

};

/* End of file Usercontroller.php */
/* Location: ./application/controllers/Usercontroller.php */