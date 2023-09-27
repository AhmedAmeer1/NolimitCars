<?php
class ContactUs extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('contactUs');
    }


    public function send_email() {
        $this->load->library('session');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('contactUs');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $message = $this->input->post('message');
            $contactnumber = $this->input->post('contactnumber');
       

            $this->load->model('Contact_model');
            if ($this->Contact_model->save_contact($name, $email, $message, $contactnumber)) {
                $this->session->set_flashdata('success_message', 'Your message has been sent successfully.');
                redirect(base_url('ContactUs'));
            } else {
                $this->session->set_flashdata('success_message', 'Your message has been sent successfully.');
                redirect(base_url('ContactUs'));
            }

        }
    }




}
?>