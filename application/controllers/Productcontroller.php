<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Productcontroller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('productmodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'productcontroller/index/';
        $config['total_rows'] = $this->productmodel->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'productcontroller/index/';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $productcontroller = $this->productmodel->index_limit($config['per_page'], $start);

        $data = array(
            'productcontroller_data' => $productcontroller,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->template->load('_layout_admin','product/tbl_product_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'productcontroller/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'productcontroller/index/';
        }

        $config['total_rows'] = $this->productmodel->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'productcontroller/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $productcontroller = $this->productmodel->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'productcontroller_data' => $productcontroller,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('_layout_admin','product/tbl_product_list', $data);
    }

    public function read($id) 
    {
        $row = $this->productmodel->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'Code' => $row->Code,
		'Title' => $row->Title,
		'Price' => $row->Price,
		'Photo' => $row->Photo,
		'Discript' => $row->Discript,
	    );
            $this->template->load('_layout_admin','product/tbl_product_read', $data);
        } else {
            $this->session->set_flashdata('message', 'رکورد مورد نظر پیدا نشد');
            redirect(site_url('productcontroller'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'ایجاد',
            'action' => site_url('productcontroller/create_action'),
	    'ID' => set_value('ID'),
	    'Code' => set_value('Code'),
	    'Title' => set_value('Title'),
	    'Price' => set_value('Price'),
	    'Photo' => set_value('Photo'),
	    'Discript' => set_value('Discript'),
	);
        $this->template->load('_layout_admin','product/tbl_product_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        }
        else
        {
            $path_upload = 'uploads/new_products';
            $picPath = upload($path_upload);

            $data = array(
                'Code' => $this->input->post('Code',TRUE),
                'Title' => $this->input->post('Title',TRUE),
                'Price' => $this->input->post('Price',TRUE),
                'Photo' => $picPath,
                'Discript' => $this->input->post('Discript',TRUE),
                );

            $this->productmodel->insert($data);
            $this->session->set_flashdata('message', 'رکورد با موفقیت ثبت شد');
            redirect(site_url('productcontroller'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->productmodel->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'ویرایش',
                'action' => site_url('productcontroller/update_action'),
		'ID' => set_value('ID', $row->ID),
		'Code' => set_value('Code', $row->Code),
		'Title' => set_value('Title', $row->Title),
		'Price' => set_value('Price', $row->Price),
		'Photo' => set_value('Photo', $row->Photo),
		'Discript' => set_value('Discript', $row->Discript),
	    );
            $this->template->load('_layout_admin','product/tbl_product_form', $data);
        } else {
            $this->session->set_flashdata('message', 'اطلاعات پیدا نشد');
            redirect(site_url('productcontroller'));
        }
    }
    
    public function update_action() 
    {
        $id = $this->input->post('ID');
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        }
        else
        {
            $path_upload = 'uploads/new_products';
            $picPath = upload($path_upload);

            $data = array(
                'Code' => $this->input->post('Code',TRUE),
                'Title' => $this->input->post('Title',TRUE),
                'Price' => $this->input->post('Price',TRUE),
                'Photo' => $picPath,
                'Discript' => $this->input->post('Discript',TRUE),
                );

            $this->productmodel->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'ویرایش رکورد با موفقیت انجام شد');
            redirect(site_url('productcontroller'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->productmodel->get_by_id($id);

        if ($row) {
            $this->productmodel->delete($id);
            $this->session->set_flashdata('message', 'حذف رکورد با موفقیت انجام شد');
            redirect(site_url('productcontroller'));
        } else {
            $this->session->set_flashdata('message', 'رکورد مورد نظر پیدا نشد');
            redirect(site_url('productcontroller'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Code', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('Title', ' ', 'trim|required');
	$this->form_validation->set_rules('Price', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

};

/* End of file Productcontroller.php */
/* Location: ./application/controllers/Productcontroller.php */