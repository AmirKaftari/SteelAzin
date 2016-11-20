<?php

/**
 * Created by PhpStorm.
 * User: Programmer
 * Date: 07/11/2016
 * Time: 08:50 PM
 */
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->template->load('_layout_admin','includes/index');
    }

    public function new_product()
    {
        
    }

}