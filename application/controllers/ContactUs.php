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
       

//----------------------------------------email sending start ----------------------------------------

            $this->load->library('email');
            $config['protocol'] = 'sendmail'; // mail, sendmail, or smtp    The mail sending protocol.
    



            $this->email->initialize($config);
       

          ///-------------

          $smtpServer = 'smtp.gmail.com';
          $smtpPort = 587; // Use 465 for SSL or 587 for TLS
          $smtpUsername = 'bookings@nolimitcars.co.uk';
          $smtpPassword = 'La15jdx@#';

          $mail->isSMTP();
          $mail->Host = $smtpServer;
          $mail->Port = $smtpPort;
          $mail->SMTPSecure = 'tls'; // Use 'ssl' for SSL
          $mail->SMTPAuth = true;
          $mail->Username = $smtpUsername;
          $mail->Password = $smtpPassword;

          //---------------


            $to = "ahmedameerdev@gmail.com";
            $this->email->initialize($config);
            //--

            $this->email->Host = $smtpServer;
            $this->email->Port = $smtpPort;
            $this->email->SMTPSecure = 'tls';
            $this->email->SMTPAuth = true;

            $this->email->Username = $smtpUsername;
            $this->email->Password = $smtpPassword;
     
            //--
            $this->email->from($name, $email);

            $this->email->to($to);
            $this->email->subject('Your Nolimit ContactUs Form  has been received');
                     $this->email->message( $message);
            $this->email->send();
                
//------------------------------------------email sending end -------------------------------------------------------------



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