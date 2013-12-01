<?php
    $this->load->view('templates/header');
    $this->load->view('templates/nav');
    $this->load->view('templates/side_bar');
    
    $this->load->view($page_name);
    
    $this->load->view('templates/footer');
?>
