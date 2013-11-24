<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    var $data;
    
    public function __construct()
    {
        parent::__construct();

    }
    
    public function send_mail()
    {
        

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('contact');
        }
        else
        {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $message = $this->input->post('message');
            
            $this->email->from($email, $name);
            $this->email->to('neo@yoteyote.com');

            $this->email->subject('From SAIDJOHN.COM Website');
            $this->email->message($message);

            $this->email->send();
            $data['msg'] = "Message Sent";
            $this->load->view('contact');
        }        
    }
}
