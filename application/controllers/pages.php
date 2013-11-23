<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
    }
    
    public function index()
    {        
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $this->load->model('projects_model');
        $this->load->model('intro_model');
        
        $data['projects'] = $this->projects_model->get_projects('DESC',3,3);
        $data['introduction'] = $this->intro_model->get_intro();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/left_pane');
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
        
    }
    
    public function about()
    {
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $this->load->model('about_model');
        
        $data['about_us'] = $this->about_model->get_about();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/left_pane');
        $this->load->view('about', $data);
        $this->load->view('templates/footer');
    }
    
    public function projects()
    {
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $this->load->model('projects_model');
        
        $data['all_projects'] = $this->projects_model->get_all_projects();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/left_pane');
        $this->load->view('projects', $data);
        $this->load->view('templates/footer');
    }
    
    public function project(){
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $this->load->model('projects_model');
        
        $project_id = $this->input->get('id', TRUE);
        
        $data['project_by_id'] = $this->projects_model->get_project_by_id($project_id);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/left_pane');
        $this->load->view('project', $data);
        $this->load->view('templates/footer');
        
    }
    
}
