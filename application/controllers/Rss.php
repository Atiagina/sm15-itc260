<?php
//Rss.php



class Rss extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rss_model');
        $this->config->set_item('banner','Cats and Musicians Feed');
        $this->config->set_item('title','RSS Cats and Musicians');
    }

            public function index()
        {
$data['rss'] = $this->rss_model->get_rss();
$this->load->view('rss/index', $data);
    
    } //end index

    } //end Rss