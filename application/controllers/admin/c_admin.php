<?php

class C_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
            redirect('auth');
        }
        $this->load->helper('text');
    }

    public function index() {
        $cek = $this->session->userdata('logged_in');
        $stts = $this->session->userdata('stts');
        if (!empty($cek) && $stts = "admin") {
            

            $this->load->view('t_admin');
        } else {

            echo "<script>alert('Maaf anda tidak berhak mengakses halaman ini');history.go(-1);</script>";
        }
    }
}
