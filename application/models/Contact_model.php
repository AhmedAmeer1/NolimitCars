<?php
class Contact_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function save_contact($name, $email, $message) {
        $data = array(
            'name' => $name,
            'email' => $email,
            'message' => $message
        );
        return $this->db->insert('contacts', $data);
    }
}
?>
