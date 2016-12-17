<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categorycontroller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('categorymodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'categorycontroller/index/';
        $config['total_rows'] = $this->categorymodel->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'categorycontroller/index/';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $categorycontroller = $this->categorymodel->index_limit($config['per_page'], $start);

        $data = array(
            'categorycontroller_data' => $categorycontroller,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->template->load('_layout_admin','category/tbl_category_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'categorycontroller/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'categorycontroller/index/';
        }

        $config['total_rows'] = $this->categorymodel->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'categorycontroller/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $categorycontroller = $this->categorymodel->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'categorycontroller_data' => $categorycontroller,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('_layout_admin','category/tbl_category_list', $data);
    }

    public function read($id) 
    {
        $row = $this->categorymodel->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'Title' => $row->Title,
	    );
            $this->template->load('_layout_admin','category/tbl_category_read', $data);
        } else {
            $this->session->set_flashdata('message', 'رکورد مورد نظر پیدا نشد');
            redirect(site_url('categorycontroller'));
        }
    }
    
    public function create() 
    {
        $categoryList = $this->categorymodel->get_parent();
        $data = array(
            'button' => 'ایجاد',
            'action' => site_url('categorycontroller/create_action'),
            'ID' => set_value('ID'),
            'Title' => set_value('Title'),
            'categoryList'=>$categoryList
	);
        $this->template->load('_layout_admin','category/tbl_category_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->create();
        }
        else
        {
            $data = array(
                        'Title' => $this->input->post('Title',TRUE),
                        'parentId' => $this->input->post('categoryParent',TRUE),
                        );

            $this->categorymodel->insert($data);
            $this->session->set_flashdata('message', 'رکورد با موفقیت ثبت شد');
            redirect(site_url('categorycontroller'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->categorymodel->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'ویرایش',
                'action' => site_url('categorycontroller/update_action'),
		'ID' => set_value('ID', $row->ID),
		'Title' => set_value('Title', $row->Title),
	    );
            $this->template->load('_layout_admin','category/tbl_category_form', $data);
        } else {
            $this->session->set_flashdata('message', 'اطلاعات پیدا نشد');
            redirect(site_url('categorycontroller'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'Title' => $this->input->post('Title',TRUE),
	    );

            $this->categorymodel->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'ویرایش رکورد با موفقیت انجام شد');
            redirect(site_url('categorycontroller'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->categorymodel->get_by_id($id);

        if ($row) {
            $this->categorymodel->delete($id);
            $this->session->set_flashdata('message', 'حذف رکورد با موفقیت انجام شد');
            redirect(site_url('categorycontroller'));
        } else {
            $this->session->set_flashdata('message', 'رکورد مورد نظر پیدا نشد');
            redirect(site_url('categorycontroller'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Title', ' ', 'trim|required');
	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

};

/* End of file Categorycontroller.php */
/* Location: ./application/controllers/Categorycontroller.php */