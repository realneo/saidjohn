<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Said John Admin';
            $data['page_name'] = 'index';
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        public function login()
        {
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Secure Login';
            
            $this->load->view('templates/header', $data);
            $this->load->view('login');
            $this->load->view('templates/footer', $data);
        }
        
        public function intro()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Introduction';
            $data['page_name'] = 'intro';
            
            $this->load->model('intro_model');
            
            $data['introduction'] = $this->intro_model->get_intro();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        public function modify_intro(){
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Introduction';
            $data['page_name'] = 'intro';
            
            $this->load->model('intro_model');
            $intro = $this->input->post('intro', TRUE);
            
            $data['mod_intro'] = $this->intro_model->modify_intro($intro);
            $data['introduction'] = $this->intro_model->get_intro();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
            
        }
        
        public function about()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'About Us';
            $data['page_name'] = 'about';
            
            $this->load->model('about_model');
            
            $data['about_us'] = $this->about_model->get_about();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        public function modify_about(){
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'About Us';
            $data['page_name'] = 'about';
            
            $this->load->model('about_model');
            $intro = $this->input->post('about', TRUE);
            
            $data['mod_about'] = $this->about_model->modify_about($intro);
            $data['about_us'] = $this->about_model->get_about();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
            
        }
        public function volunteer()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Volunteer';
            $data['page_name'] = 'volunteer';
            
            $this->load->model('volunteer_model');
            
            $data['volunteers'] = $this->volunteer_model->get_volunteer();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        public function donate()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Donate Now';
            $data['page_name'] = 'donate';
            
            $this->load->model('donate_model');
            
            $data['donate_now'] = $this->donate_model->get_donate();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        public function modify_donate()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Donate Now';
            $data['page_name'] = 'donate';
            
            $this->load->model('donate_model');
            $donate = $this->input->post('donate', TRUE);
            
            $this->donate_model->modify_donate($donate);
            $data['donate_now'] = $this->donate_model->get_donate();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        public function projects()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Projects';
            $data['page_name'] = 'projects';
            
            $this->load->model('projects_model');
            
            $data['projects'] = $this->projects_model->get_all_projects();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        public function events()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Events';
            $data['page_name'] = 'events';
            
            $this->load->model('events_model');
            
            $data['events'] = $this->events_model->get_all_events();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        public function news()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'News';
            $data['page_name'] = 'news';
            
            $this->load->model('news_model');
            
            $data['news'] = $this->news_model->get_all_news();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        public function biography()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Biography';
            $data['page_name'] = 'biography';
            
            $this->load->model('biography_model');
            
            $data['biography'] = $this->biography_model->get_bio();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        public function modify_bio()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Biography';
            $data['page_name'] = 'biography';
            
            $this->load->model('biography_model');
            
            $bio = $this->input->post('bio', TRUE);
            $data['mod_bio'] = $this->biography_model->modify_bio($bio);
            $data['biography'] = $this->biography_model->get_bio();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        
        public function users()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $data['title'] = 'Users';
            $data['page_name'] = 'users';
            
            $this->load->model('users_model');
            
            $data['users'] = $this->users_model->get_all_users();
            
            $this->load->vars($data);
            
            $this->load->view('templates/template');
	}
        
        public function add_user()
        {
        
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;

            $data['title'] = 'Add User';
            $data['page_name'] = 'add_user';

            $this->load->model('users_model');
            $data['users'] = $this->users_model->get_all_users();

            $this->load->vars($data);
            
            $this->load->view('templates/template');
        }
        
        public function add_user_process()
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            
            if ($this->form_validation->run() == FALSE){
                $this->base = $this->config->item('base_url');
                $data['base'] = $this->base;
                
                $data['title'] = 'Add User';
                $data['page_name'] = 'add_user';
                
                $this->load->model('users_model');
                $data['users'] = $this->users_model->get_all_users();
                
                $data['error_message'] ="
                    <div class='alert alert-error'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <h4>Error</h4>
                        ".validation_errors()."
                    </div>  
                ";
                
                $this->load->vars($data);
                $this->load->view('templates/template');
                
            }
            else
            {
                $this->base = $this->config->item('base_url');
                $data['base'] = $this->base;
                
                $data['title'] = 'Add User';
                $data['page_name'] = 'add_user';
                
                $this->load->model('users_model');
                $data['add_user'] = $this->users_model->add_new_user();
                $data['users'] = $this->users_model->get_all_users();
                
                $this->load->vars($data);
                $this->load->view('templates/template');
            }
        }
}