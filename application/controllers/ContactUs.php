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
       


            $this->load->library('email');
            $config['protocol'] = 'sendmail'; // mail, sendmail, or smtp    The mail sending protocol.
    
            $config['wordwrap'] = TRUE; // TRUE or FALSE (boolean)    Enable word-wrap.
            $config['wrapchars'] = 76; // Character count to wrap at.
            $config['mailtype'] = 'html'; // text or html Type of mail. If you send HTML email you must send it as a complete web page. Make sure you don't have any relative links or relative image paths otherwise they will not work.
            $config['charset'] = 'utf-8'; // Character set (utf-8, iso-8859-1, etc.).
            $config['validate'] = FALSE; // TRUE or FALSE (boolean)    Whether to validate the email address.
            $config['priority'] = 3; // 1, 2, 3, 4, 5    Email Priority. 1 = highest. 5 = lowest. 3 = normal.
            $config['crlf'] = "\r\n"; // "\r\n" or "\n" or "\r" Newline character. (Use "\r\n" to comply with RFC 822).
            $config['newline'] = "\r\n"; // "\r\n" or "\n" or "\r"    Newline character. (Use "\r\n" to comply with RFC 822).
            $config['bcc_batch_mode'] = FALSE; // TRUE or FALSE (boolean)    Enable BCC Batch Mode.
            $config['bcc_batch_size'] = 200; // Number of emails in each BCC batch.
            $this->email->initialize($config);
       
            $to = "bookings@nolimitcars.co.uk,soumen.karmakar@solutions2xl.com";
                //$to = "soumen.karmakar@solutions2xl.com";
            $this->email->initialize($config);
            $this->email->from($email, $name);
            // $this->email->from('bookings@nolimitcars.co.uk', 'CONTACT US');
            $this->email->to($to);
            $this->email->subject('Your Nolimit ContactUs Form  has been received');
         
            $this->email->message( $message);
            $this->email->send();
                




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