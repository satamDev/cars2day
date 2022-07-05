<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class FormSubmission extends CI_Controller {
		function __construct() {
			parent::__construct();
			date_default_timezone_set('Asia/Kolkata');
		}

		function set_message($submit_message_for, $data){
			// $submit_message_for = sell, carvenience, insurance, store
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "https://cars2dayapp.in/cars2day/api/website/".$submit_message_for);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			    'Content-Type: application/json'
				)
			);
			
			$data = json_encode($data);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

			$result = curl_exec($ch);
			
			$r = json_decode($result);
			return $r;
		}

		public function home_data() {
			$arr = [
				"type" => $this->input->post('type'),
				"dtcr" => date("Y-m-d")."T".date("H:i:s")."Z",
				"id" => 0,
				"kilometers" => $this->input->post('kilometers'),
				"location" => $this->input->post('location'),
				"make" => $this->input->post('make'),
				"model" => $this->input->post('model'),
				"owner" => $this->input->post('owner'),
				"registrationNumber" => $this->input->post('registrationNumber'),
				"year" => $this->input->post('year'),
				"name" => $this->input->post('name'),
				"mobile" => $this->input->post('mobile')
			];
			$this->set_message("store", $arr);
		}

		public function sell_data() {
			$arr = [
				"type" => $this->input->post('type'),
				"dtcr" => date("Y-m-d")."T".date("H:i:s")."Z",
				"id" => 0,
				"kilometers" => $this->input->post('kilometers'),
				"location" => $this->input->post('location'),
				"make" => $this->input->post('make'),
				"model" => $this->input->post('model'),
				"owner" => $this->input->post('owner'),
				"registrationNumber" => $this->input->post('registrationNumber'),
				"year" => $this->input->post('year'),
				"name" => $this->input->post('name'),
				"mobile" => $this->input->post('mobile')
			];
			$this->set_message("sell", $arr);
		}

		public function insurance_data() {
			$arr = [
				"type" => $this->input->post('type'),
				"dtcr" => date("Y-m-d")."T".date("H:i:s")."Z",
				"id" => 0,
				"carNumber" => $this->input->post('carNumber'),
				"mobile" => $this->input->post('mobile'),
				"termsAndCondition" => true,
				"name" => $this->input->post('name'),
				"email" => $this->input->post('email')
			];
			$this->set_message("insurance", $arr);
		}

		public function carvenience_rto_data() {
			$arr = [
				"type" => $this->input->post('type'),
				"dtcr" => date("Y-m-d")."T".date("H:i:s")."Z",
				"id" => 0,
				"carNumber" => $this->input->post('carNumber'),
				"mobile" => $this->input->post('mobile')
			];
			$this->set_message("carvenience", $arr);
		}

		public function book_test_drive() {
			$arr = [
				'car' => [ 'id' => $this->input->post('car_id') ],
				'user' => [
					'id' => 0,
				    'name' => $this->input->post('name'),
				    'email' => $this->input->post('email'),
				    'mobile' => $this->input->post('mobile'),
				],
				'id' => 0,
				'description' => '',
  				'status' => true,				
				'appoinmentdt' => date("Y-m-d")."T".date("H:i:s")."Z",
				'testdrivestatus' => [ 'id' => 1 ],
				'createdBy' => [ 'id' => 1 ],
				'modifiedBy' => [ 'id' => 1 ]
			];
			$response = $this->set_message("bookTestDrive", $arr);
			echo json_encode($res['message'] = $response->message);
		}

		public function feedback_data() {
			$arr = [
				'createdBy' => [ 'id' => 1 ],
				'dtcr' => date("Y-m-d")."T".date("H:i:s")."Z",
				'dtlm' => date("Y-m-d")."T".date("H:i:s")."Z",
				'id' => 0,
				'message' => $this->input->post('message'),
				'userrating' => $this->input->post('feedback'),
				'modifiedBy' => [ 'id' => 1 ],
				'status' => true,				
				'user' => [
					'id' => 0,
				    'name' => $this->input->post('name'),				    
				    'mobile' => $this->input->post('mobile'),
				    'email' => $this->input->post('email'),
				]
			];
			$response = $this->set_message("websiteSupport", $arr);
			echo json_encode($res['message'] = $response->message);
		}

	}
?>