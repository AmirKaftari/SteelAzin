<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settingcontroller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('settingmodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'settingcontroller/index/';
        $config['total_rows'] = $this->settingmodel->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'settingcontroller/index/';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $settingcontroller = $this->settingmodel->index_limit($config['per_page'], $start);

        $data = array(
            'settingcontroller_data' => $settingcontroller,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->template->load('_layout_admin','setting/tbl_setting_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'settingcontroller/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'settingcontroller/index/';
        }

        $config['total_rows'] = $this->settingmodel->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'settingcontroller/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $settingcontroller = $this->settingmodel->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'settingcontroller_data' => $settingcontroller,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('_layout_admin','setting/tbl_setting_list', $data);
    }

   
    public function create() 
    {
        $data = array(
            'button' => 'ایجاد',
            'action' => site_url('settingcontroller/create_action'),
			'motorDasti' => set_value('motorDasti'),
			'motorBarghi' => set_value('motorBarghi'),
			'payehSaghfi' => set_value('payehSaghfi'),
			'payehDivari' => set_value('payehDivari'),
			'nasb' => set_value('nasb'),
			'ID' => set_value('ID'),
	);
        $this->template->load('_layout_admin','setting/tbl_setting_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'motorDasti' => $this->input->post('motorDasti',TRUE),
		'motorBarghi' => $this->input->post('motorBarghi',TRUE),
		'payehSaghfi' => $this->input->post('payehSaghfi',TRUE),
		'payehDivari' => $this->input->post('payehDivari',TRUE),
		'nasb' => $this->input->post('nasb',TRUE),
	    );

            $this->settingmodel->insert($data);
            $this->session->set_flashdata('message', 'رکورد با موفقیت ثبت شد');
            redirect(site_url('settingcontroller'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->settingmodel->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'ویرایش',
                'action' => site_url('settingcontroller/update_action'),
				'motorDasti' => set_value('motorDasti', $row->motorDasti),
				'motorBarghi' => set_value('motorBarghi', $row->motorBarghi),
				'payehSaghfi' => set_value('payehSaghfi', $row->payehSaghfi),
				'payehDivari' => set_value('payehDivari', $row->payehDivari),
				'nasb' => set_value('nasb', $row->nasb),
				'ID' => set_value('ID', $row->ID),
	    );
            $this->template->load('_layout_admin','setting/tbl_setting_form', $data);
        } else {
            $this->session->set_flashdata('message', 'اطلاعات پیدا نشد');
            redirect(site_url('settingcontroller'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'motorDasti' => $this->input->post('motorDasti',TRUE),
		'motorBarghi' => $this->input->post('motorBarghi',TRUE),
		'payehDivari' => $this->input->post('payehDivari',TRUE),
		'payehSaghfi' => $this->input->post('payehSaghfi',TRUE),
		'nasb' => $this->input->post('nasb',TRUE),
	    );

            $this->settingmodel->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'ویرایش رکورد با موفقیت انجام شد');
            redirect(site_url('settingcontroller'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->settingmodel->get_by_id($id);

        if ($row) {
            $this->settingmodel->delete($id);
            $this->session->set_flashdata('message', 'حذف رکورد با موفقیت انجام شد');
            redirect(site_url('settingcontroller'));
        } else {
            $this->session->set_flashdata('message', 'رکورد مورد نظر پیدا نشد');
            redirect(site_url('settingcontroller'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('motorDasti', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('motorBarghi', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('payehDivari', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('payehSaghfi', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('nasb', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

};

/* End of file Settingcontroller.php */
/* Location: ./application/controllers/Settingcontroller.php */