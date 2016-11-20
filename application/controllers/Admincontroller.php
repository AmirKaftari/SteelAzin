<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admincontroller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('adminmodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'admincontroller/index/';
        $config['total_rows'] = $this->adminmodel->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'admincontroller/index/';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $admincontroller = $this->adminmodel->index_limit($config['per_page'], $start);

        $data = array(
            'admincontroller_data' => $admincontroller,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->template->load('admincontroller/tbl_admin_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'admincontroller/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'admincontroller/index/';
        }

        $config['total_rows'] = $this->adminmodel->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'admincontroller/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $admincontroller = $this->adminmodel->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'admincontroller_data' => $admincontroller,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('admincontroller/tbl_admin_list', $data);
    }

    public function read($id) 
    {
        $row = $this->adminmodel->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'userName' => $row->userName,
		'Password' => $row->Password,
	    );
            $this->template->load('admincontroller/tbl_admin_read', $data);
        } else {
            $this->session->set_flashdata('message', 'رکورد مورد نظر پیدا نشد');
            redirect(site_url('admincontroller'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'ایجاد',
            'action' => site_url('admincontroller/create_action'),
	    'ID' => set_value('ID'),
	    'userName' => set_value('userName'),
	    'Password' => set_value('Password'),
	);
        $this->template->load('tbl_admin_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'userName' => $this->input->post('userName',TRUE),
		'Password' => $this->input->post('Password',TRUE),
	    );

            $this->adminmodel->insert($data);
            $this->session->set_flashdata('message', 'رکورد با موفقیت ثبت شد');
            redirect(site_url('admincontroller'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->adminmodel->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'ویرایش',
                'action' => site_url('admincontroller/update_action'),
		'ID' => set_value('ID', $row->ID),
		'userName' => set_value('userName', $row->userName),
		'Password' => set_value('Password', $row->Password),
	    );
            $this->template->load('tbl_admin_form', $data);
        } else {
            $this->session->set_flashdata('message', 'اطلاعات پیدا نشد');
            redirect(site_url('admincontroller'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'userName' => $this->input->post('userName',TRUE),
		'Password' => $this->input->post('Password',TRUE),
	    );

            $this->adminmodel->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'ویرایش رکورد با موفقیت انجام شد');
            redirect(site_url('admincontroller'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->adminmodel->get_by_id($id);

        if ($row) {
            $this->adminmodel->delete($id);
            $this->session->set_flashdata('message', 'حذف رکورد با موفقیت انجام شد');
            redirect(site_url('admincontroller'));
        } else {
            $this->session->set_flashdata('message', 'رکورد مورد نظر پیدا نشد');
            redirect(site_url('admincontroller'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('userName', ' ', 'trim|required');
	$this->form_validation->set_rules('Password', ' ', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

};

/* End of file Admincontroller.php */
/* Location: ./application/controllers/Admincontroller.php */