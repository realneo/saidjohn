<?php
    $this->load->view('templates/header');
    $this->load->view('templates/left_pane');
    $this->load->view($page_name);
    $this->load->view('templates/footer');
?>
