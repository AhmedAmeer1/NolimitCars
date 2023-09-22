<?php
class Contact extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('contact_form');
    }

    public function send_email() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('contact_form');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $message = $this->input->post('message');


            $this->load->model('Contact_model');
            if ($this->Contact_model->save_contact($name, $email, $message)) {
                echo 'Email sent and data saved to the database successfully!';
            } else {
                echo 'Email sent, but data could not be saved to the database.';
            }


            // Configure email
            // $config['protocol'] = 'send';
            // $config['smtp_host'] = 'smtp.gmail.com';
            // $config['smtp_port'] = 587;
            // $config['smtp_user'] = 'ahmedameer1999421@gmail.com';
            // $config['smtp_pass'] = 'Dev@1022';
            // $config['mailtype'] = 'html';
            // $this->load->library('email', $config);





            $config['protocol'] = 'ssmtpend';
            $config['smtp_host'] = 'localhost';
            $config['smtp_port'] = 1025;
            $config['smtp_user'] = 'ahmedameer1999421@gmail.com';
            $config['smtp_pass'] = 'Dev@1022';
            $config['mailtype'] = 'html';
            $this->load->library('email', $config);


            // Compose email
            $this->email->from($email, $name);
            $this->email->to('ahmedameerdev@gmail.com');
            $this->email->subject('Contact Form Submission');
            $this->email->message($message);

            // Send email
            if ($this->email->send()) {
                echo 'Email sent successfully!';
            } else {
                echo 'Email errrrrrrrrrrrr';
                // show_error($this->email->print_debugger());
            }
        }
    }
}
?>
