<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        cek_login();
    }

    public function index(){
        $data->load->view('templates/header', data);        
        $data->load->view('templates/sidebar', data);        
        $data->load->view('templates/topbar', data);        
        $data->load->view('templates/index', data);        
        $data->load->view('templates/footer', data);        
    }
}