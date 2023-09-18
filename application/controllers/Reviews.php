<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends CI_Controller {

	public function __construct() {
		parent::__construct();
		date_default_timezone_set('Europe/London');
		$this->load->model('Review_Model');
	
 	}
	public function addReview($id='',$type = '')
	{
		if(empty($id)){
            $this->session->set_flashdata('message',$flashMsg);
            redirect(base_url());
        }
        $data['trip_id'] = $id;
        $data['type'] = $type ? $type : 0;
		$this->load->view('review-form',$data);
	}

	public function review()
	{
		$home_template['result'] = $this->db->get('settings')->row();
		$home_template['reviews'] =  $this->Review_Model->getAllReviews();
		$this->load->view('reviews',$home_template);
	}

	public function reviewDetails($reviewId)
	{
		if(empty($reviewId)){
            $this->session->set_flashdata('message',$flashMsg);
            redirect(base_url());
        }

        $reviewId = decode_param($reviewId);
		$home_template['reviewData'] =  $this->Review_Model->getReviewById($reviewId);
		$home_template['reviewCount'] =  $this->Review_Model->getReviewDetails();
		$home_template['reviews'] =  $this->Review_Model->getAllReviews(1);
		$home_template['result'] = $this->db->get('settings')->row();
		$this->load->view('review-details',$home_template);
	}

	public function add()
	{
		$post_data = $this->input->post();
		if(empty($post_data['trip_id']) || empty($post_data['rating'])  || empty($post_data['comment']) ){
            $this->session->set_flashdata('message',$flashMsg);
            redirect(base_url());
        }
        $this->load->model('BookingModel');
        $post_data['trip_id'] = decode_param($post_data['trip_id']);
        $book_data = $this->BookingModel->getBgDetails($post_data['trip_id']);
		$post_data['userId'] = $book_data->user_id;
        $status = $this->Review_Model->addReview($post_data);
        echo $status;
	}

	// public function getAllReviews(){
	// 	$data['result'] =  $this->Review_Model->getAllReviews();
	// 	$this->load->view('index', $data);
	// }
}
