<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

    var $data;
    
    public function __construct()
    {
        parent::__construct();

    }
    
    public function index()
    {        
        $this->load->model('projects_model', 'events_model');
        $data['projects'] = $this->projects_model->get_projects('DESC',3,2);
        
        $this->load->view('templates/header');
        $this->load->view('templates/left_pane');
        $this->load->view('index');
        $this->load->view('templates/footer', $data);
        
    }
}
