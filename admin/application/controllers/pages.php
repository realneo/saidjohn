<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('templates/side_bar');
            $this->load->view('index');
            $this->load->view('templates/footer', $data);
	}
        
        public function login()
        {
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $this->load->view('templates/header', $data);
            $this->load->view('login');
            $this->load->view('templates/footer', $data);
        }
        
        public function intro()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $this->load->model('intro_model');
            
            $data['introduction'] = $this->intro_model->get_intro();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('templates/side_bar');
            $this->load->view('intro');
            $this->load->view('templates/footer', $data);
	}
        
        public function about()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $this->load->model('about_model');
            
            $data['about_us'] = $this->about_model->get_about();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('templates/side_bar');
            $this->load->view('about', $data);
            $this->load->view('templates/footer', $data);
	}
        
        public function volunteer()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $this->load->model('volunteer_model');
            
            $data['volunteers'] = $this->volunteer_model->get_volunteer();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('templates/side_bar');
            $this->load->view('volunteer', $data);
            $this->load->view('templates/footer', $data);
	}
        
        public function donate()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $this->load->model('donate_model');
            
            $data['donate_now'] = $this->donate_model->get_donate();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('templates/side_bar');
            $this->load->view('donate', $data);
            $this->load->view('templates/footer', $data);
	}
        
        public function projects()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $this->load->model('projects_model');
            
            $data['projects'] = $this->projects_model->get_all_projects();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('templates/side_bar');
            $this->load->view('projects', $data);
            $this->load->view('templates/footer', $data);
	}
        
        public function events()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $this->load->model('events_model');
            
            $data['events'] = $this->events_model->get_all_events();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('templates/side_bar');
            $this->load->view('events', $data);
            $this->load->view('templates/footer', $data);
	}
        
        public function news()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $this->load->model('news_model');
            
            $data['news'] = $this->news_model->get_all_news();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('templates/side_bar');
            $this->load->view('news', $data);
            $this->load->view('templates/footer', $data);
	}
        
        public function biography()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $this->load->model('biography_model');
            
            $data['biography'] = $this->biography_model->get_bio();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('templates/side_bar');
            $this->load->view('biography', $data);
            $this->load->view('templates/footer', $data);
	}
        
        public function users()
	{
            //It should first check if user is logged in
            
            $this->base = $this->config->item('base_url');
            $data['base'] = $this->base;
            
            $this->load->model('users_model');
            
            $data['users'] = $this->users_model->get_all_users();
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav');
            $this->load->view('templates/side_bar');
            $this->load->view('users', $data);
            $this->load->view('templates/footer', $data);
	}
}
