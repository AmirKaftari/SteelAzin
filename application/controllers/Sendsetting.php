<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sendsetting extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('sendsettingmodel');
        $this->load->model('Provincemodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'sendsetting/index/';
        $config['total_rows'] = $this->sendsettingmodel->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'sendsetting/index/';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $sendsetting = $this->sendsettingmodel->index_limit($config['per_page'], $start);

        $data = array(
            'sendsetting_data' => $sendsetting,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->template->load('_layout_admin','sendsetting/tbl_send_setting_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'sendsetting/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'sendsetting/index/';
        }

        $config['total_rows'] = $this->sendsettingmodel->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'sendsetting/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $sendsetting = $this->sendsettingmodel->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'sendsetting_data' => $sendsetting,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('_layout_admin','sendsetting/tbl_send_setting_list', $data);
    }

    public function create() 
    {
        $states = $this->Provincemodel->get_all();
        $data = array(
            'button' => 'ایجاد',
            'action' => site_url('sendsetting/create_action'),
            'ID' => set_value('ID'),
            'Type' => set_value('Type'),
            'State' => $states,
            'City' => set_value('City'),
	);
        $this->template->load('_layout_admin','sendsetting/tbl_send_setting_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
			'Type' => $this->input->post('Type',TRUE),
			'State' => $this->input->post('_IDState',TRUE),
			'City' => $this->input->post('city_dropdown',TRUE),
	    );

            $this->sendsettingmodel->insert($data);
            $this->session->set_flashdata('message', 'رکورد با موفقیت ثبت شد');
            redirect(site_url('sendsetting'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->sendsettingmodel->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'ویرایش',
                'action' => site_url('sendsetting/update_action'),
		'ID' => set_value('ID', $row->ID),
		'Type' => set_value('Type', $row->Type),
		'State' => set_value('State', $row->State),
		'City' => set_value('City', $row->City),
	    );
            $this->template->load('_layout_admin','sendsetting/tbl_send_setting_form', $data);
        } else {
            $this->session->set_flashdata('message', 'اطلاعات پیدا نشد');
            redirect(site_url('sendsetting'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'Type' => $this->input->post('Type',TRUE),
		'State' => $this->input->post('State',TRUE),
		'City' => $this->input->post('City',TRUE),
	    );

            $this->sendsettingmodel->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'ویرایش رکورد با موفقیت انجام شد');
            redirect(site_url('sendsetting'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->sendsettingmodel->get_by_id($id);

        if ($row) {
            $this->sendsettingmodel->delete($id);
            $this->session->set_flashdata('message', 'حذف رکورد با موفقیت انجام شد');
            redirect(site_url('sendsetting'));
        } else {
            $this->session->set_flashdata('message', 'رکورد مورد نظر پیدا نشد');
            redirect(site_url('sendsetting'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Type', ' ', 'trim|required');
	$this->form_validation->set_rules('_IDState', ' ', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

};

/* End of file Sendsetting.php */
/* Location: ./application/controllers/Sendsetting.php */