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
        $this->load->model('Custommodel');
        $this->load->model('Categorymodel');
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
        $listState= $this->Custommodel->getAllState();

        if($this->session->userdata('Count') != $this->input->post('txtNewCount'))
        {
            $new_price = $this->input->post('txtNewCount') * $this->session->userdata('Price');

            $dataSession = array('new_count'=>$this->input->post('txtNewCount'),
                                 'new_price'=>$new_price,);
            $this->session->set_userdata($dataSession);

        }

        $data = array('listState'=> $listState);
        $idUser = $this->session->userdata('IdUser');

        if(!is_null($idUser))
        {
            $this->load->view('checkout-step-2',$data);
        }
        $this->load->view('checkout-step-2',$data);
    }

    public function checkout_step_3()
    {
        $data = array('Receiver'=>$this->input->post('txtReceiver'),
                      'CellPhone'=>$this->input->post('txtCellPhone'),
                      'Phone'=>$this->input->post('txtPhone'),
                      'State'=>$this->input->post('_IDState'),
                      'City'=>$this->input->post('city_dropdown'),
                      'Address'=>$this->input->post('txtAddress'),
            );
        $this->session->set_userdata($data);
        $this->load->view('checkout-step-3');
    }

    public function checkout_step_4()
    {
        $this->load->view('checkout-step-4');
    }

    public function shop($categoryId)
    {
        $productList = $this->Productmodel->get_by_CategoryId($categoryId);
        $subCategory = $this->Categorymodel->get_by_parentId($categoryId);
        $data = array('productList'=>$productList,
                      'subCategory'=>$subCategory);
        $this->load->view('shop',$data);
    }
}