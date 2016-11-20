<?php
/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 18/11/2016
 * Time: 12:32 PM
 */
class Indexcontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Productmodel');
    }

    public function single_product($id)
    {
        if(!is_null($id))
        {
            $single_product = $this->Productmodel->get_by_id($id);
            $data = array('single_product'=>$single_product);
            $this->load->view('single_product',$data);
        }
    }

    public function start_buy()
    {
        $data = array(
            'Title' => $this->input->post('txtTitle'),
            'Price'=> $this->input->post('txtPrice'),
            'Pic'=> $this->input->post('txtPicUrl'),
            'Count'=> $this->input->post('txtCount'),
            'Color'=> $this->input->post('txtColor'));

        $this->session->set_userdata($data);

        $this->load->view('checkout-step-1',$data);
    }

    public function checkout_step_2()
    {
        $idUser = $this->session->userdata('IdUser');
        if(!is_null($idUser))
        {
            $this->load->view('checkout-step-2');
        }
        $this->load->view('checkout-step-2');
    }
}