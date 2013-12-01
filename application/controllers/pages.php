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
        
        $data['page_name'] = 'index';
        
        $this->load->model('projects_model');
        $this->load->model('intro_model');
        
        $data['projects'] = $this->projects_model->get_projects('DESC',3,3);
        $data['introduction'] = $this->intro_model->get_intro();
        
        $this->load->vars($data);
        $this->load->view('templates/template');
        
    }
    
    public function about()
    {
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $data['page_name'] = 'about';
        
        $this->load->model('about_model');
        
        $data['about_us'] = $this->about_model->get_about();
        
        $this->load->vars($data);
        $this->load->view('templates/template');
    }
    
    public function projects()
    {
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $data['page_name'] = 'projects';
        
        $this->load->model('projects_model');
        
        $data['all_projects'] = $this->projects_model->get_all_projects();
        
        $this->load->vars($data);
        $this->load->view('templates/template');
    }
    
    public function project(){
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $data['page_name'] = 'project';
        
        $this->load->model('projects_model');
        
        $project_id = $this->input->get('id', TRUE);
        
        $data['project_by_id'] = $this->projects_model->get_project_by_id($project_id);
        
        $this->load->vars($data);
        $this->load->view('templates/template');
        
    }
    
    public function events()
    {
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $data['page_name'] = 'events';
        
        $this->load->model('events_model');
        
        $data['all_events'] = $this->events_model->get_all_events();
        
        $this->load->vars($data);
        $this->load->view('templates/template');
    }
    
    public function event()
    {
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $data['page_name'] = 'event';
        $this->load->model('events_model');
        
        $event_id = $this->input->get('id', TRUE);
        
        $data['event_by_id'] = $this->events_model->get_event_by_id($event_id);
        
        $this->load->vars($data);
        $this->load->view('templates/template');
        
    }
    
    public function volunteer()
    {
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $data['page_name'] = 'volunteer';
        $this->load->model('volunteer_model');
        
        $data['volunteers'] = $this->volunteer_model->get_volunteer();
        
        $this->load->vars($data);
        $this->load->view('templates/template');
    }
    
    public function donate()
    {
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $this->load->model('donate_model');
        $data['page_name'] = 'donate';
        
        $data['donate_now'] = $this->donate_model->get_donate();
        
        $this->load->vars($data);
        $this->load->view('templates/template');
    }
    
    public function contact()
    {
        $this->base = $this->config->item('base_url');
        $data['base'] = $this->base;
        
        $data['page_name'] = 'contact';
        
        $this->load->library('email');
        $this->load->helper('form');

        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        
        $this->load->vars($data);
        $this->load->view('templates/template');
    }
    
}
