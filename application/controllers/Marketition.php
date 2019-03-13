<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Marketition extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('view_marketition');
	}

	public function registration()
	{
		//echo "BERHASIL";
		$this->load->view('view_signup_marketition');
	}

	public function registration_marketition()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('team_name', 'Team Name', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('master', 'Master degree student', 'required');
		if($this->form_validation->run() == FALSE)
		{
			//echo "ERROR";
			$this->load->view('view_signup_marketition');
		}
		else
		{
			// CODE FOR EMAIL DUPLICATE AND REFFERAL CODE CHECK
			$email_check=$this->input->post('email');
			$this->db->from('marketiton');
        	$email_check_from_db = $this->db->query("SELECT * FROM `marketition` WHERE `email`='$email_check';");
        	//$ref_code_input_check_from_db= $this->db->query("SELECT * FROM `pitch_first` WHERE `ref_code`='$ref_code_input';");
        	//$ref_code_gen_check_from_db = $this->db->query("SELECT * FROM `pitch_first` WHERE `ref_code_gen`='$ref_code_input';");
        	$email_check_from_db = $email_check_from_db->num_rows();
        	//$ref_code_input_check_from_db = $ref_code_input_check_from_db->num_rows();
			//$ref_code_gen_check_from_db = $ref_code_gen_check_from_db->num_rows();

			//echo $ref_code_input_check_from_db;
			//exit();
			//ALGORITMA PENDAFTARAN
				if (($email_check_from_db == '0'))
				{
					//POTONGAN HARGA
					$country = $this->input->post('country');
					if ($country !== 'Indonesia'){
						$tagihan = "45";
					} else {
						$tagihan = "600000";
					}
					$discount = "0.1";

					$billing = $tagihan-($tagihan*$discount);

					//echo $billing;

					//die;

					$this->user_model->add_user_marketition($billing);

					$country = $this->input->post('country');
					$data['email'] = $this->input->post('email');
					$data['team_name'] = $this->input->post('team_name');
					$data['billing'] = $billing;
					$data['country'] = $country;
		    		$this -> signup_marketition_success($data);
		    		$this -> kirim_email($email_check, $billing, $country);
	    		}
	    		else {
	    			$data['message']= "Sorry, your email already registered. Use another email.";
					$this->load->view('view_signup_marketition',$data);
	    		}
	    	//END ALGORITMA PENDAFTARAN
	    	/*
			//ALGORITMA REFERRAL
				if (($email_check_from_db == '0'))
				{
					if (($ref_code_gen_check_from_db != '0' OR $ref_code_input == ""))
					{
						if ($ref_code_input == "earlybird") {
							$batasan = '2'; //SETTING UNTUK JUMLAH EARLY BIRD
						} else {
							$batasan = '1000';
						}

						if (($ref_code_input_check_from_db < $batasan))
						{
								//POTONGAN HARGA
								$tagihan = "100000";
								if ($ref_code_input == ""){
									$discount = "0";
								} elseif ($ref_code_input == "earlybird") {
									$discount = "0.3";
								}
								else {
									$discount = "0.2";
								}

								$billing = $tagihan-($tagihan*$discount);
								

								//PEMBUATAN KODE REFFERAL
								$team_name=$this->input->post('team_name');
								$team_name = str_replace(' ', '', $team_name);
								$team_name = strtolower($team_name);
								$ref = "_pf2018";
								$ref_code_gen = $team_name.$ref;

								$this->user_model->add_user_pitch_first($ref_code_gen,$billing);

							
								//$this->user_model->add_user_pitch_first();
								$data['ref_code_input'] = strtolower($this->input->post('ref_code'));
								$data['email'] = $this->input->post('email');
								$data['billing'] = $billing;
					    		$this -> signup_pitch_first_success($data);
					    		$this -> kirim_email($email_check, $billing);
			    		}
			    		else {
			    			if ($ref_code_input == "earlybird") {
								$data['message']= "Sorry, your referral code <font color='white'>".$ref_code_input."</font> is already used by ".$batasan." first teams. Try another referral code.";
							} else {
								$data['message']= "Sorry, your referral code <font color='white'>".$ref_code_input."</font> is exceeding limit. Try another referral code.";
							}
							$this->load->view('view_signup',$data);
			    		}
			    	}
			    	else {
			    		$data['message']= "Sorry, your referral code <font color='white'>".$ref_code_input."</font> is not valid. Try another referral code.";
						$this->load->view('view_signup',$data);
			    	}
	    		}
	    		else {
	    			$data['message']= "Sorry, your email already registered. Use another email.";
					$this->load->view('view_signup',$data);
	    		}
	    	//END ALGORITMA REFERRAL
	    	*/
	    	}
	}

	public function signup_marketition_success($data)
	{		
		//echo var_dump($data);
		//$data['row'] = $this->user_model->get_marketition_participant();
		$this->load->view('view_signup_success_marketition',array("data"=>$data));
	}

	public function login()
	{
		//echo "BERHASIL";
		$this->load->view('view_login_marketition');
	}

	public function user_login_process() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
				if(isset($this->session->userdata['logged_in'])){
					//$this->load->view('view_marketition_participant_area');
					redirect ('marketition/participant_area');
					//echo "BERHASIL";
				}else{
					$this->load->view('view_login_marketition');
					//echo "haha";
				}
		} 
		else {
				$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
				);
				$result = $this->user_model->login_marketition($data);
			if ($result == TRUE) {
				$email = $this->input->post('email');
				$result = $this->user_model->read_user_marketition_information($email);
				if ($result != false) {
				$session_data = array(
				'email' => $result[0]->email,
				'team_name' => $result[0]->team_name,
				'user_role' => $result[0]->user_role,
				'university' => $result[0]->university,
				'logged_in' => TRUE
				);
			// Add user data in session
				$this->session->set_userdata($session_data);
				//$this->session->set_userdata('email', $session_data);
				//var_dump($session_data);
				//die;
				//$this->load->view('view_participant_area');
				//echo "BERHASIL login";
				redirect('marketition/participant_area');
			}
			} else {
				$data = array(
				'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('view_login_marketition', $data);
			}
		}
	}

	public function participant_area()
	{		
		if(isset($_SESSION['logged_in']) || $_SESSION['logged_in']== TRUE)
		{
		    switch ($_SESSION['user_role']) {		
			case '1' :
				redirect ('marketition/admin');
				break;
			case '0' :
				//echo $this->session->userdata['email'];
			    $data['row'] = $this->user_model->get_marketition_participant();
			    //$data['row2'] = $this->user_model->get_jumlah_referral_digunakan();
			    //echo "view marketition participant_area";
				$this->load->view('view_marketition_participant_area', $data);
			}
		} else {
			redirect('marketition/login');
		}
	}

	public function not_found()
	{
			$this->load->view('view_404');
	}

	public function do_upload_payment_proof() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$new_name = $team_name."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition/",
		'allowed_types' => "jpg|png|jpeg|pdf",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'payment_proof' => $new_name
	    	);

    		$this->user_model->update_payment_proof_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');

			$data['team_name'] = $this->session->userdata('team_name');
			//$data['university'] = $this->session->userdata('university');
			$university = $this->session->userdata('university');
			//echo $university;
			//echo $team_name;
			//die;
		    $this -> kirim_email_udah_bayar($team_name, $university);

			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_ack_letter_university_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$new_name = $team_name."_"."ack_letter_university"."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'ack_letter_university' => $new_name
	    	);

    		$this->user_model->update_ack_letter_university_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	//PARTICIPANT 1

	public function do_register_participant_1_2_3_marketition()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('bio1_name', 'Participant Name', 'required');
		$this->form_validation->set_rules('bio1_phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('bio1_major', 'Major', 'required');
		if ($this->input->post('bio1_tick') == "1"){
			$this->form_validation->set_rules('bio1_company', 'Company', 'required');
		}
		//$this->form_validation->set_rules('bio1_address', 'Address', 'required');
		$this->form_validation->set_rules('bio2_name', 'Participant Name', 'required');
		$this->form_validation->set_rules('bio2_phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('bio2_major', 'Major', 'required');
		if ($this->input->post('bio2_tick') == "1"){
			$this->form_validation->set_rules('bio2_company', 'Company', 'required');
		}
		//$this->form_validation->set_rules('bio2_address', 'Address', 'required');
		$this->form_validation->set_rules('bio3_name', 'Participant Name', 'required');
		$this->form_validation->set_rules('bio3_phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('bio3_major', 'Major', 'required');
		if ($this->input->post('bio3_tick') == "1"){
			$this->form_validation->set_rules('bio3_company', 'Company', 'required');
		}
		//$this->form_validation->set_rules('bio3_address', 'Address', 'required');
		if($this->form_validation->run() == FALSE)
		{
			//$error = array('error' => $this->upload->display_errors());
			//var_dump($error);
			//$error = $this->form_validation->error_array();
			$data['row'] = $this->user_model->get_marketition_participant();
			$this->load->view('view_marketition_participant_area',$data);
			//redirect('marketition/participant_area',$error);
		}
		else
		{
			$bio1_name=$this->input->post('bio1_name');
			$bio1_phone=$this->input->post('bio1_phone');
			$bio1_major=$this->input->post('bio1_major');
			$bio1_company=$this->input->post('bio1_company');
			//$bio1_address=$this->input->post('bio1_address');
			$bio2_name=$this->input->post('bio2_name');
			$bio2_phone=$this->input->post('bio2_phone');
			$bio2_major=$this->input->post('bio2_major');
			$bio2_company=$this->input->post('bio2_company');
			//$bio2_address=$this->input->post('bio2_address');
			$bio3_name=$this->input->post('bio3_name');
			$bio3_phone=$this->input->post('bio3_phone');
			$bio3_major=$this->input->post('bio3_major');
			$bio3_company=$this->input->post('bio3_company');
			//$bio3_address=$this->input->post('bio3_address');
			$email=$this->session->userdata('email');

			if (empty($bio1_company)){
				$bio1_company = "-";
			}

			if (empty($bio2_company)){
				$bio2_company = "-";
			}

			if (empty($bio3_company)){
				$bio3_company = "-";
			}

			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $email,
	        'bio1_name' => $bio1_name,
	        'bio1_phone' => $bio1_phone,
	        'bio1_major' => $bio1_major,
	        'bio1_company' => $bio1_company,
	        //'bio1_address' => $bio1_address,
	        'bio2_name' => $bio2_name,
	        'bio2_phone' => $bio2_phone,
	        'bio2_major' => $bio2_major,
	        'bio2_company' => $bio2_company,
	        //'bio2_address' => $bio2_address,
	        'bio3_name' => $bio3_name,
	        'bio3_phone' => $bio3_phone,
	        'bio3_major' => $bio3_major,
	        'bio3_company' => $bio3_company,
	        //'bio3_address' => $bio3_address,
	    	);

    		$this->user_model->update_register_participant_1_2_3_marketition($data);
    		redirect('marketition/participant_area');
	    	}
	}

	public function do_upload_bio1_id_card_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio1_id_card"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio1_id_card' => $new_name
	    	);

    		$this->user_model->update_bio1_id_card_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_ack_letter_bio1_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio1_ack_letter"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio1_ack_letter' => $new_name
	    	);

    		$this->user_model->update_bio1_ack_letter_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_bio1_id_card_employee_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio1_id_card_employee"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio1_id_card_employee' => $new_name
	    	);

    		$this->user_model->update_bio1_id_card_employee_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_ack_letter_bio1_employee_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio1_ack_letter_employee"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio1_ack_letter_employee' => $new_name
	    	);

    		$this->user_model->update_bio1_ack_letter_employee_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	//PARTICIPANT 2
	public function do_upload_bio2_id_card_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio2_id_card"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "20000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio2_id_card' => $new_name
	    	);

    		$this->user_model->update_bio2_id_card_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_ack_letter_bio2_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio2_ack_letter"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "20000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio2_ack_letter' => $new_name
	    	);

    		$this->user_model->update_bio2_ack_letter_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_bio2_id_card_employee_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio2_id_card_employee"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio2_id_card_employee' => $new_name
	    	);

    		$this->user_model->update_bio2_id_card_employee_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_ack_letter_bio2_employee_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio2_ack_letter_employee"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio2_ack_letter_employee' => $new_name
	    	);

    		$this->user_model->update_bio2_ack_letter_employee_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	//PARTICIPANT 3
	public function do_upload_bio3_id_card_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio3_id_card"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "30000000", // Can be set to particular file size , here it is 3 MB(3048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio3_id_card' => $new_name
	    	);

    		$this->user_model->update_bio3_id_card_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_ack_letter_bio3_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio3_ack_letter"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "30000000", // Can be set to particular file size , here it is 3 MB(3048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio3_ack_letter' => $new_name
	    	);

    		$this->user_model->update_bio3_ack_letter_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_bio3_id_card_employee_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio3_id_card_employee"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio3_id_card_employee' => $new_name
	    	);

    		$this->user_model->update_bio3_id_card_employee_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_ack_letter_bio3_employee_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio3_ack_letter_employee"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio3_ack_letter_employee' => $new_name
	    	);

    		$this->user_model->update_bio3_ack_letter_employee_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	//PARTICIPANT 4
	public function do_register_participant_4_marketition()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('bio4_name', 'Participant Name', 'required');
		$this->form_validation->set_rules('bio4_phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('bio4_major', 'Major', 'required');
		if ($this->input->post('bio4_tick') == "1"){
			$this->form_validation->set_rules('bio4_company', 'Company', 'required');
		}
		//$this->form_validation->set_rules('bio4_address', 'Address', 'required');
		if($this->form_validation->run() == FALSE)
		{
			//$error = array('error' => $this->upload->display_errors());
			//var_dump($error);
			//$error = $this->form_validation->error_array();
			$data['row'] = $this->user_model->get_marketition_participant();
			$this->load->view('view_marketition_participant_area',$data);
			//redirect('marketition/participant_area',$error);
		}
		else
		{
			$bio4_name=$this->input->post('bio4_name');
			$bio4_phone=$this->input->post('bio4_phone');
			$bio4_major=$this->input->post('bio4_major');
			$bio4_company=$this->input->post('bio4_company');
			//$bio4_address=$this->input->post('bio4_address');
			$email=$this->session->userdata('email');

			if (empty($bio4_company)){
				$bio4_company = "-";
			}

			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $email,
	        'bio4_name' => $bio4_name,
	        'bio4_phone' => $bio4_phone,
	        'bio4_major' => $bio4_major,
	        'bio4_company' => $bio4_company,
	        //'bio4_address' => $bio4_address
	    	);

    		$this->user_model->update_register_participant_4_marketition($data);
    		redirect('marketition/participant_area');
	    	}
	}

	public function do_upload_bio4_id_card_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio4_id_card"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "40000000", // Can be set to particular file size , here it is 4 MB(4048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio4_id_card' => $new_name
	    	);

    		$this->user_model->update_bio4_id_card_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_ack_letter_bio4_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio4_ack_letter"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "40000000", // Can be set to particular file size , here it is 4 MB(4048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio4_ack_letter' => $new_name
	    	);

    		$this->user_model->update_bio4_ack_letter_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_bio4_id_card_employee_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio4_id_card_employee"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio4_id_card_employee' => $new_name
	    	);

    		$this->user_model->update_bio4_id_card_employee_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_ack_letter_bio4_employee_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio4_ack_letter_employee"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio4_ack_letter_employee' => $new_name
	    	);

    		$this->user_model->update_bio4_ack_letter_employee_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}


	public function add_4th_participant()
  	{
  	
  	$email=$this->session->userdata('email');

  	$data = array(
  			'email' => $email,
          	'add_4th_participant' => '1'
        );

        $this->user_model->add_4th_participant($data);
        redirect('marketition/participant_area');
  	}

  	public function add_5th_participant()
  	{
  	
  	$email=$this->session->userdata('email');

  	$data = array(
  			'email' => $email,
          	'add_5th_participant' => '1'
        );

        $this->user_model->add_5th_participant($data);
        redirect('marketition/participant_area');
  	}

  //PARTICIPANT 5
  public function do_register_participant_5_marketition()
  {
    $this->load->library('form_validation');
    // field name, error message, validation rules
    $this->form_validation->set_rules('bio5_name', 'Participant Name', 'required');
    $this->form_validation->set_rules('bio5_phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('bio5_major', 'Major', 'required');
    if ($this->input->post('bio5_tick') == "1"){
			$this->form_validation->set_rules('bio5_company', 'Company', 'required');
		}
    //$this->form_validation->set_rules('bio5_address', 'Address', 'required');
    if($this->form_validation->run() == FALSE)
    {
      //$error = array('error' => $this->upload->display_errors());
      //var_dump($error);
      //$error = $this->form_validation->error_array();
      $data['row'] = $this->user_model->get_marketition_participant();
      $this->load->view('view_marketition_participant_area',$data);
      //redirect('marketition/participant_area',$error);
    }
    else
    {
      $bio5_name=$this->input->post('bio5_name');
      $bio5_phone=$this->input->post('bio5_phone');
      $bio5_major=$this->input->post('bio5_major');
      $bio5_company=$this->input->post('bio5_company');
      //$bio5_address=$this->input->post('bio5_address');
      $email=$this->session->userdata('email');

      if (empty($bio5_company)){
        $bio5_company = "-";
      }

      $data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio5_name' => $bio5_name,
          'bio5_phone' => $bio5_phone,
          'bio5_major' => $bio5_major,
          'bio5_company' => $bio5_company
          //'bio5_address' => $bio5_address
        );

        $this->user_model->update_register_participant_5_marketition($data);
        redirect('marketition/participant_area');
        }
  }

  public function do_upload_bio5_id_card_marketition() {
    $this->load->library('upload');

    
    $team_name = $this->session->userdata('team_name');

    $team_name = str_replace(' ', '', $team_name);
    $team_name = strtolower($team_name);

    $randomizer = rand(100,999);

    $new_name = $team_name."_"."bio5_id_card"."_".$randomizer."_".$_FILES["userfile"]['name'];

    $new_name = str_replace(' ', '', $new_name);

    //echo $new_name;
    //die;
    

    $config = array(
    'upload_path' => "./uploads/marketition",
    'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
    'max_size' => "40000000", // Can be set to particular file size , here it is 4 MB(4048 Kb)
    'file_name' => $new_name 
    );

    $this->upload->initialize($config);
    if($this->upload->do_upload())
    {
      $data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $this->session->userdata('email'),
          'bio5_id_card' => $new_name
        );

        $this->user_model->update_bio5_id_card_marketition($data);

      $data = array('upload_data' => $this->upload->data());
      //echo "upload successs";
      //$this->load->view('view_participant_area');
      redirect('marketition/participant_area');
    }
    else
    {
      $error = array('error' => $this->upload->display_errors());
      var_dump($error);
      $this->load->view('view_marketition_participant_area', $error);
    }
  }

  public function do_upload_ack_letter_bio5_marketition() {
    $this->load->library('upload');

    
    $team_name = $this->session->userdata('team_name');

    $team_name = str_replace(' ', '', $team_name);
    $team_name = strtolower($team_name);

    $randomizer = rand(100,999);

    $new_name = $team_name."_"."bio5_ack_letter"."_".$randomizer."_".$_FILES["userfile"]['name'];

    $new_name = str_replace(' ', '', $new_name);

    //echo $new_name;
    //die;
    

    $config = array(
    'upload_path' => "./uploads/marketition",
    'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
    'max_size' => "40000000", // Can be set to particular file size , here it is 4 MB(4048 Kb)
    'file_name' => $new_name 
    );

    $this->upload->initialize($config);
    if($this->upload->do_upload())
    {
      $data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $this->session->userdata('email'),
          'bio5_ack_letter' => $new_name
        );

        $this->user_model->update_bio5_ack_letter_marketition($data);

      $data = array('upload_data' => $this->upload->data());
      //echo "upload successs";
      //$this->load->view('view_participant_area');
      redirect('marketition/participant_area');
    }
    else
    {
      $error = array('error' => $this->upload->display_errors());
      var_dump($error);
      $this->load->view('view_marketition_participant_area', $error);
    }
  }

  public function do_upload_bio5_id_card_employee_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio5_id_card_employee"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio5_id_card_employee' => $new_name
	    	);

    		$this->user_model->update_bio5_id_card_employee_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

	public function do_upload_ack_letter_bio5_employee_marketition() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$randomizer = rand(100,999);

		$new_name = $team_name."_"."bio5_ack_letter_employee"."_".$randomizer."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/marketition",
		'allowed_types' => "pdf|doc|docx|jpg|jpeg|png",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'marketition' => 'marketition', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio5_ack_letter_employee' => $new_name
	    	);

    		$this->user_model->update_bio5_ack_letter_employee_marketition($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('marketition/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_marketition_participant_area', $error);
		}
	}

  	public function logout() {
		// Removing session data
		$this->session->sess_destroy();
		//$data['message_display'] = 'Successfully Logout';
		$this->load->view('view_login_marketition');
	}

	public function edit_participant_1() {
		$data['row'] = $this->user_model->get_marketition_participant();
		$this->load->view('view_edit_participant_1_marketition', $data);
	}

	public function edit_participant_2() {
		$data['row'] = $this->user_model->get_marketition_participant();
		$this->load->view('view_edit_participant_2_marketition', $data);
	}

	public function edit_participant_3() {
		$data['row'] = $this->user_model->get_marketition_participant();
		$this->load->view('view_edit_participant_3_marketition', $data);
	}

	public function edit_participant_4() {
		$data['row'] = $this->user_model->get_marketition_participant();
		$this->load->view('view_edit_participant_4_marketition', $data);
	}

	public function edit_participant_5() {
		$data['row'] = $this->user_model->get_marketition_participant();
		$this->load->view('view_edit_participant_5_marketition', $data);
	}

	//UPDATE PARTICIPANT 1
  	public function update_participant_1_marketition()
  	{
    $this->load->library('form_validation');
    // field name, error message, validation rules
    $this->form_validation->set_rules('bio1_name', 'Participant Name', 'required');
    $this->form_validation->set_rules('bio1_phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('bio1_major', 'Major', 'required');
    if ($this->input->post('bio1_tick') == "1"){
			$this->form_validation->set_rules('bio1_company', 'Company', 'required');
		}
    //$this->form_validation->set_rules('bio1_address', 'Address', 'required');
    if($this->form_validation->run() == FALSE)
    {
      //$error = array('error' => $this->upload->display_errors());
      //var_dump($error);
      //$error = $this->form_validation->error_array();
      $data['row'] = $this->user_model->get_marketition_participant();
      $this->load->view('view_edit_participant_1_marketition',$data);
      //redirect('marketition/participant_area',$error);
    }
    else
    {
      $bio1_name=$this->input->post('bio1_name');
      $bio1_phone=$this->input->post('bio1_phone');
      $bio1_major=$this->input->post('bio1_major');
      $bio1_company=$this->input->post('bio1_company');
      //$bio1_address=$this->input->post('bio1_address');
      $email=$this->session->userdata('email');

      if (empty($bio1_company)){
        $bio1_company = "-";
      }

      $data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio1_name' => $bio1_name,
          'bio1_phone' => $bio1_phone,
          'bio1_major' => $bio1_major,
          'bio1_company' => $bio1_company
          //'bio1_address' => $bio1_address
        );

        $this->user_model->update_register_participant_1_marketition($data);
        redirect('marketition/participant_area');
        }
  	}	

  	//UPDATE PARTICIPANT 2
  	public function update_participant_2_marketition()
  	{
    $this->load->library('form_validation');
    // field name, error message, validation rules
    $this->form_validation->set_rules('bio2_name', 'Participant Name', 'required');
    $this->form_validation->set_rules('bio2_phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('bio2_major', 'Major', 'required');
    if ($this->input->post('bio2_tick') == "1"){
			$this->form_validation->set_rules('bio2_company', 'Company', 'required');
		}
    //$this->form_validation->set_rules('bio2_address', 'Address', 'required');
    if($this->form_validation->run() == FALSE)
    {
      //$error = array('error' => $this->upload->display_errors());
      //var_dump($error);
      //$error = $this->form_validation->error_array();
      $data['row'] = $this->user_model->get_marketition_participant();
      $this->load->view('view_edit_participant_2_marketition',$data);
      //redirect('marketition/participant_area',$error);
    }
    else
    {
      $bio2_name=$this->input->post('bio2_name');
      $bio2_phone=$this->input->post('bio2_phone');
      $bio2_major=$this->input->post('bio2_major');
      $bio2_company=$this->input->post('bio2_company');
      //$bio2_address=$this->input->post('bio2_address');
      $email=$this->session->userdata('email');

      if (empty($bio2_company)){
        $bio2_company = "-";
      }

      $data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio2_name' => $bio2_name,
          'bio2_phone' => $bio2_phone,
          'bio2_major' => $bio2_major,
          'bio2_company' => $bio2_company
          //'bio2_address' => $bio2_address
        );

        $this->user_model->update_register_participant_2_marketition($data);
        redirect('marketition/participant_area');
        }
  	}

  	//UPDATE PARTICIPANT 3
  	public function update_participant_3_marketition()
  	{
    $this->load->library('form_validation');
    // field name, error message, validation rules
    $this->form_validation->set_rules('bio3_name', 'Participant Name', 'required');
    $this->form_validation->set_rules('bio3_phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('bio3_major', 'Major', 'required');
    if ($this->input->post('bio3_tick') == "1"){
			$this->form_validation->set_rules('bio3_company', 'Company', 'required');
		}
    //$this->form_validation->set_rules('bio3_address', 'Address', 'required');
    if($this->form_validation->run() == FALSE)
    {
      //$error = array('error' => $this->upload->display_errors());
      //var_dump($error);
      //$error = $this->form_validation->error_array();
      $data['row'] = $this->user_model->get_marketition_participant();
      $this->load->view('view_edit_participant_3_marketition',$data);
      //redirect('marketition/participant_area',$error);
    }
    else
    {
      $bio3_name=$this->input->post('bio3_name');
      $bio3_phone=$this->input->post('bio3_phone');
      $bio3_major=$this->input->post('bio3_major');
      $bio3_company=$this->input->post('bio3_company');
      //$bio3_address=$this->input->post('bio3_address');
      $email=$this->session->userdata('email');

      if (empty($bio3_company)){
        $bio3_company = "-";
      }

      $data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio3_name' => $bio3_name,
          'bio3_phone' => $bio3_phone,
          'bio3_major' => $bio3_major,
          'bio3_company' => $bio3_company
          //'bio3_address' => $bio3_address
        );

        $this->user_model->update_register_participant_3_marketition($data);
        redirect('marketition/participant_area');
        }
  	}

  	//UPDATE PARTICIPANT 4
  	public function update_participant_4_marketition()
  	{
    $this->load->library('form_validation');
    // field name, error message, validation rules
    $this->form_validation->set_rules('bio4_name', 'Participant Name', 'required');
    $this->form_validation->set_rules('bio4_phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('bio4_major', 'Major', 'required');
    if ($this->input->post('bio4_tick') == "1"){
			$this->form_validation->set_rules('bio4_company', 'Company', 'required');
		}
    //$this->form_validation->set_rules('bio4_address', 'Address', 'required');
    if($this->form_validation->run() == FALSE)
    {
      //$error = array('error' => $this->upload->display_errors());
      //var_dump($error);
      //$error = $this->form_validation->error_array();
      $data['row'] = $this->user_model->get_marketition_participant();
      $this->load->view('view_edit_participant_4_marketition',$data);
      //redirect('marketition/participant_area',$error);
    }
    else
    {
      $bio4_name=$this->input->post('bio4_name');
      $bio4_phone=$this->input->post('bio4_phone');
      $bio4_major=$this->input->post('bio4_major');
      $bio4_company=$this->input->post('bio4_company');
      //$bio4_address=$this->input->post('bio4_address');
      $email=$this->session->userdata('email');

      if (empty($bio4_company)){
        $bio4_company = "-";
      }

      $data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio4_name' => $bio4_name,
          'bio4_phone' => $bio4_phone,
          'bio4_major' => $bio4_major,
          'bio4_company' => $bio4_company
          //'bio4_address' => $bio4_address
        );

        $this->user_model->update_register_participant_4_marketition($data);
        redirect('marketition/participant_area');
        }
  	}

  	//UPDATE PARTICIPANT 5
  	public function update_participant_5_marketition()
  	{
    $this->load->library('form_validation');
    // field name, error message, validation rules
    $this->form_validation->set_rules('bio5_name', 'Participant Name', 'required');
    $this->form_validation->set_rules('bio5_phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('bio5_major', 'Major', 'required');
    if ($this->input->post('bio5_tick') == "1"){
			$this->form_validation->set_rules('bio5_company', 'Company', 'required');
		}
    //$this->form_validation->set_rules('bio5_address', 'Address', 'required');
    if($this->form_validation->run() == FALSE)
    {
      //$error = array('error' => $this->upload->display_errors());
      //var_dump($error);
      //$error = $this->form_validation->error_array();
      $data['row'] = $this->user_model->get_marketition_participant();
      $this->load->view('view_edit_participant_5_marketition',$data);
      //redirect('marketition/participant_area',$error);
    }
    else
    {
      $bio5_name=$this->input->post('bio5_name');
      $bio5_phone=$this->input->post('bio5_phone');
      $bio5_major=$this->input->post('bio5_major');
      $bio5_company=$this->input->post('bio5_company');
      //$bio5_address=$this->input->post('bio5_address');
      $email=$this->session->userdata('email');

      if (empty($bio5_company)){
        $bio5_company = "-";
      }

      $data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio5_name' => $bio5_name,
          'bio5_phone' => $bio5_phone,
          'bio5_major' => $bio5_major,
          'bio5_company' => $bio5_company
          //'bio5_address' => $bio5_address
        );

        $this->user_model->update_register_participant_5_marketition($data);
        redirect('marketition/participant_area');
        }
  	}

  	//RE-UPLOAD ID CARD
  	public function reset_bio1_id_card()
  	{
  		//$data['row'] = $this->user_model->get_reset_marketition_participant();
  		//var_dump($data['row']);
  		//var_dump($data['row']->id);
  		//$bio1_id_card = $data['row']->bio1_id_card;
  		//echo $data['row']['bio1_id_card'];
  		//$path = base_url()."uploads/marketition/".$bio1_id_card;

  		//$this->load->helper("file");
		//unlink($path);

  		$email=$this->session->userdata('email');
  		$bio1_id_card = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio1_id_card' => $bio1_id_card
        );

        $this->user_model->reset_bio1_id_card($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio2_id_card()
  	{
  		$email=$this->session->userdata('email');
  		$bio2_id_card = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio2_id_card' => $bio2_id_card
        );

        $this->user_model->reset_bio2_id_card($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio3_id_card()
  	{
  		$email=$this->session->userdata('email');
  		$bio3_id_card = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio3_id_card' => $bio3_id_card
        );

        $this->user_model->reset_bio3_id_card($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio4_id_card()
  	{
  		$email=$this->session->userdata('email');
  		$bio4_id_card = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio4_id_card' => $bio4_id_card
        );

        $this->user_model->reset_bio4_id_card($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio5_id_card()
  	{
  		$email=$this->session->userdata('email');
  		$bio5_id_card = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio5_id_card' => $bio5_id_card
        );

        $this->user_model->reset_bio5_id_card($data);
        redirect('marketition/participant_area');
  	}

  	//RE-UPLOAD ACK LETTER
  	public function reset_bio1_ack_letter()
  	{
  		//$data['row'] = $this->user_model->get_reset_marketition_participant();
  		//var_dump($data['row']);
  		//var_dump($data['row']->id);
  		//$bio1_ack_letter = $data['row']->bio1_ack_letter;
  		//echo $data['row']['bio1_ack_letter'];
  		//$path = base_url()."uploads/marketition/".$bio1_ack_letter;

  		//$this->load->helper("file");
		//unlink($path);

  		$email=$this->session->userdata('email');
  		$bio1_ack_letter = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio1_ack_letter' => $bio1_ack_letter
        );

        $this->user_model->reset_bio1_ack_letter($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio2_ack_letter()
  	{
  		$email=$this->session->userdata('email');
  		$bio2_ack_letter = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio2_ack_letter' => $bio2_ack_letter
        );

        $this->user_model->reset_bio2_ack_letter($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio3_ack_letter()
  	{
  		$email=$this->session->userdata('email');
  		$bio3_ack_letter = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio3_ack_letter' => $bio3_ack_letter
        );

        $this->user_model->reset_bio3_ack_letter($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio4_ack_letter()
  	{
  		$email=$this->session->userdata('email');
  		$bio4_ack_letter = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio4_ack_letter' => $bio4_ack_letter
        );

        $this->user_model->reset_bio4_ack_letter($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio5_ack_letter()
  	{
  		$email=$this->session->userdata('email');
  		$bio5_ack_letter = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio5_ack_letter' => $bio5_ack_letter
        );

        $this->user_model->reset_bio5_ack_letter($data);
        redirect('marketition/participant_area');
  	}
	
	//RE-UPLOAD ID CARD EMPLOYEE
  	public function reset_bio1_id_card_employee()
  	{
  		//$data['row'] = $this->user_model->get_reset_marketition_participant();
  		//var_dump($data['row']);
  		//var_dump($data['row']->id);
  		//$bio1_id_card_employee = $data['row']->bio1_id_card_employee;
  		//echo $data['row']['bio1_id_card_employee'];
  		//$path = base_url()."uploads/marketition/".$bio1_id_card_employee;

  		//$this->load->helper("file");
		//unlink($path);

  		$email=$this->session->userdata('email');
  		$bio1_id_card_employee = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio1_id_card_employee' => $bio1_id_card_employee
        );

        $this->user_model->reset_bio1_id_card_employee($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio2_id_card_employee()
  	{
  		$email=$this->session->userdata('email');
  		$bio2_id_card_employee = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio2_id_card_employee' => $bio2_id_card_employee
        );

        $this->user_model->reset_bio2_id_card_employee($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio3_id_card_employee()
  	{
  		$email=$this->session->userdata('email');
  		$bio3_id_card_employee = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio3_id_card_employee' => $bio3_id_card_employee
        );

        $this->user_model->reset_bio3_id_card_employee($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio4_id_card_employee()
  	{
  		$email=$this->session->userdata('email');
  		$bio4_id_card_employee = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio4_id_card_employee' => $bio4_id_card_employee
        );

        $this->user_model->reset_bio4_id_card_employee($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio5_id_card_employee()
  	{
  		$email=$this->session->userdata('email');
  		$bio5_id_card_employee = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio5_id_card_employee' => $bio5_id_card_employee
        );

        $this->user_model->reset_bio5_id_card_employee($data);
        redirect('marketition/participant_area');
  	}
	
	//RE-UPLOAD ACK LETTER EMPLOYEE
  	public function reset_bio1_ack_letter_employee()
  	{
  		//$data['row'] = $this->user_model->get_reset_marketition_participant();
  		//var_dump($data['row']);
  		//var_dump($data['row']->id);
  		//$bio1_ack_letter_employee = $data['row']->bio1_ack_letter_employee;
  		//echo $data['row']['bio1_ack_letter_employee'];
  		//$path = base_url()."uploads/marketition/".$bio1_ack_letter_employee;

  		//$this->load->helper("file");
		//unlink($path);

  		$email=$this->session->userdata('email');
  		$bio1_ack_letter_employee = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio1_ack_letter_employee' => $bio1_ack_letter_employee
        );

        $this->user_model->reset_bio1_ack_letter_employee($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio2_ack_letter_employee()
  	{
  		$email=$this->session->userdata('email');
  		$bio2_ack_letter_employee = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio2_ack_letter_employee' => $bio2_ack_letter_employee
        );

        $this->user_model->reset_bio2_ack_letter_employee($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio3_ack_letter_employee()
  	{
  		$email=$this->session->userdata('email');
  		$bio3_ack_letter_employee = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio3_ack_letter_employee' => $bio3_ack_letter_employee
        );

        $this->user_model->reset_bio3_ack_letter_employee($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio4_ack_letter_employee()
  	{
  		$email=$this->session->userdata('email');
  		$bio4_ack_letter_employee = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio4_ack_letter_employee' => $bio4_ack_letter_employee
        );

        $this->user_model->reset_bio4_ack_letter_employee($data);
        redirect('marketition/participant_area');
  	}

  	public function reset_bio5_ack_letter_employee()
  	{
  		$email=$this->session->userdata('email');
  		$bio5_ack_letter_employee = "";
      	$data = array(
          'marketition' => 'marketition', // pass the real table name
          'email' => $email,
          'bio5_ack_letter_employee' => $bio5_ack_letter_employee
        );

        $this->user_model->reset_bio5_ack_letter_employee($data);
        redirect('marketition/participant_area');
  	}

  	public function admin()
	{
		if ($_SESSION['user_role'] == '1'){
	    $data['row'] = $this->user_model->admin_get_participant_marketition();
		$this->load->view('view_admin_marketition', $data);
		}
		else {
			redirect('marketition/login');
		}
			
	}

	public function user($id){
   	if ($_SESSION['user_role'] == '1') {
	   	$data['$id'] =  $this->uri->segment(3);

	   	$id = $data['$id'];
	    
	    if($data['$id'] == FALSE) {
	         echo "Profile Not Found";
	      } else {
		$data['id'] =  $this->uri->segment(3);

	    $data['row'] = $this->user_model->get_participant_by_id_marketition($id);
	    $this->load->view('view_profile_participant_marketition',$data);
	         /*access the database and get info for $data['username']*/
	         /*Load profile page with said info*/
	      }//End of Else
	}//End of function
	else {
		redirect ('marketition/login');
	}
   }

   	public function update_status($id){
	        $this->user_model->update_status_model_marketition($id); 
	        
		    $this->db->select('*');
			$this->db->where('id', $id);
			$q = $this->db->get('marketition');
			
			$data = $q->result_array();

			$email_check = $data[0]['email'];
			$team_name = $data[0]['team_name'];
			//die;
		    $this -> kirim_email_setelah_aktivasi($email_check, $team_name);
	        redirect('marketition/admin');
	}

	public function update_status_off($id){
	        $this->user_model->update_status_off_model_marketition($id); 
	        redirect('marketition/admin');
	}

	public function delete_by_id($id){ //fungsi delete
    		$this->user_model->delete_by_id_marketiion($id); //ngacir ke fungsi delTransaksi
    		redirect('marketition/admin'); //redirect
	}

	public function kirim_email($email_check, $billing, $country) {
		$this->load->library('email');
		$deadline_date = strtotime("+21 day");
        $deadline_date = date('d M Y', $deadline_date);

        if($country !== "Indonesia")
	      { 
	        $currency = "USD ";
	      }
	      else {
	        $currency = "Rp ";
	      }
        //echo $country;
        //die;
		//$email=$this->input->post('email');
		//$email_check = "alfirahadian@gmail.com";
		//$billing = "90000";



		$htmlContent = '<img src="https://image.ibb.co/ddYDFp/logo_marketition.png" width="200"/><br><br>
		Dear Marketers,<br>
		<br>
		Thank you for completing the registration process and let us officially welcome you to <b>Marketition 2018</b>! We sincerely hope you will enjoy and get challenging yet remarkable experiences during the competition.
		<br><br>
		Here are the next 2 steps you need to do: <br>
		<br>
		1. 	Secure your seat by paying the registration fee as detailed below: <br><br>
		<b>Total amount is '.$currency.' '.$billing.' <br></b><br>
		For participants from Indonesia, payments is to be transferred to the following beneficiary’s bank account:
		<br><br>
		<b>Yayasan Prasetiya Mulya <br>
		BCA KCU SCBD, Jakarta <br>
		006-309-3669 <br></b>
		<br>
		For international participants, payments is to be transferred to the following beneficiary’s Paypal account:<br>
		<br><b>
		1. Login to your PayPal account<br>
		2. Use payment url: <a href="https://www.paypal.me/alfirahadian">https://www.paypal.me/alfirahadian</a><br>
		3. Enter the amount '.$currency.' '.$billing.' <br>
		4. Click “Next” <br>
		5. Add a note: Your team name <br>
		6. Uncheck list the “Paying for goods or a service? Select the checkbox and your eligible purchases may be covered by Paypal Buyer Protection” <br>
		7. Click “Send payment now” <br></b>
		<br>
		Please complete payment within 48 hours and upload your payment proof on your <a href="www.ideacraft.id/marketition/login">Marketition Account </a>for account activation. Remember that you will not be able to submit your files before your payment is verified by our team. 
		<br><br>		
		2. Submit your files as listed below: <br><br>
		<b>Personal Documents: <br>
		1. Acknowledgement Letter</b> from each University/Business School/Institute of every team members <br>
		<b>2. Student Identity Card</b><br>
		<b>3. Employee Identity Card</b>* (for team members who are currently employed) <br>
		<b>4. Acknowledgement Letter from the Company</b>* (for team members who are currently employed) <br>
		<br>
		You are entitled submit all your files on <b>Wednesday, 12 September 2018 at 18:00 WIB (UTC+7)</b> at the latest.
		<br><br>
		You can find the official rules and all requirements for the competition <a href="www.ideacraft.id/assets/doc/General_Rules_Marketition_2018.pdf">here</a>.
		<br>
		Should you have any questions regarding the event, please contact <b>Silvy Laurencia (+62 819 3224 9491)</b> or send us an e-mail. 
		<br><br>
		Thank you very much.<br><br>
		 
		Best regards,<br>
		Marketition Committee – Universitas Prasetiya Mulya<br>
		Jl. R.A Kartini (TB. Simatupang), Cilandak Barat, Jakarta Selatan 12430<br>
		E: ideacraft.id@gmail.com<br>
		IG: ideacraft.id<br>
		W: www.ideacraft.id/marketition<br>
		</p>
		</div>';
    	$config["protocol"] = "smtp";
		$config["smtp_host"] = "ssl://smtp.gmail.com";
		$config["smtp_port"] = "465";
		$config["smtp_timeout"] = "60";
		$config["smtp_user"] = "ideacraft.id@gmail.com";
		$config["smtp_pass"] = "duaribudelapanbelas";
		$config["charset"] = "utf-8";
		$config["newline"] = "\r\n";
		$config["mailtype"] = "html";
		$config["validation"] = TRUE;

		$this->email->initialize($config);
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->to($email_check);
		$this->email->bcc('chandragoldie@gmail.com, alfirahadian@gmail.com, adicahyanto@yahoo.com');
		$this->email->from('ideacraft.id@gmail.com','Marketition 2018');
		$this->email->subject('Welcome to Marketition 2018!');
		$this->email->message($htmlContent);
		$this->email->send();
	}

	public function kirim_email_udah_bayar($team_name, $university) {
		$this->load->library('email');
		
		$htmlContent = '<img src="https://image.ibb.co/ddYDFp/logo_marketition.png" width="150"/><br><br>
		Hi admin marketition,<br><br>
		Barusan ada yang bayar loh.
		<br><br><b>
		Team : '.$team_name.'<br>
		University : '.$university.'<br><br></b>
		Tolong dicek dan di-activate yaaa :)
		<br>
		Thank you very much.<br><br>
		Best regards,<br>
		Marketition Committee – Universitas Prasetiya Mulya<br>
		Jl. R.A Kartini (TB. Simatupang), Cilandak Barat, Jakarta Selatan 12430<br>
		E: ideacraft.id@gmail.com<br>
		IG: ideacraft.id<br>
		W: www.ideacraft.id/marketition</p>
		</div>';
    	$config["protocol"] = "smtp";
		$config["smtp_host"] = "ssl://smtp.gmail.com";
		$config["smtp_port"] = "465";
		$config["smtp_timeout"] = "60";
		$config["smtp_user"] = "ideacraft.id@gmail.com";
		$config["smtp_pass"] = "duaribudelapanbelas";
		$config["charset"] = "utf-8";
		$config["newline"] = "\r\n";
		$config["mailtype"] = "html";
		$config["validation"] = TRUE;

		$this->email->initialize($config);
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->to('ms.silvylaurencia@gmail.com ');
		$this->email->bcc('chandragoldie@gmail.com, alfirahadian@gmail.com, adicahyanto@yahoo.com','aviciennaakbar@gmail.com');
		$this->email->from('ideacraft.id@gmail.com','New Payment Complete @ Marketition 2018');
		$this->email->subject($team_name.' Team');
		$this->email->message($htmlContent);
		$this->email->send();
	}

	public function kirim_email_setelah_aktivasi($email_check, $team_name) {
		$this->load->library('email');
		
		$htmlContent = '<img src="https://image.ibb.co/ddYDFp/logo_marketition.png" width="150"/><br><br>
		Dear '.$team_name.',
		<br><br>
		Thank you for completing the registration process. Your payment proof has been verified by our team and now you are eligible to submit your <b>Business Plan</b> and <b>Documents</b> on our website using your <a href="www.ideacraft.id/marketition/login">Marketition Account</a>.
		<br><br>
		The submission deadline would be on <b>Wednesday, 12 September 2018 at 18:00 WIB (UTC+7)</b>.
		<br><br>
		Please note that our system will be automatically closed after the deadline so you will not be able to submit your files.
		<br><br>
		Thank you and good luck!
		<br><br>
		Best regards, <br>
		Marketition Committee – Universitas Prasetiya Mulya <br>
		Jl. R.A Kartini (TB. Simatupang), Cilandak Barat, Jakarta Selatan 12430 <br>
		E: ideacraft.id@gmail.com <br>
		IG: ideacraft.id <br>
		W: www.ideacraft.id/marketition <br>
		</p>
		</div>';
    	$config["protocol"] = "smtp";
		$config["smtp_host"] = "ssl://smtp.gmail.com";
		$config["smtp_port"] = "465";
		$config["smtp_timeout"] = "60";
		$config["smtp_user"] = "ideacraft.id@gmail.com";
		$config["smtp_pass"] = "duaribudelapanbelas";
		$config["charset"] = "utf-8";
		$config["newline"] = "\r\n";
		$config["mailtype"] = "html";
		$config["validation"] = TRUE;

		$this->email->initialize($config);
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->to($email_check);
		$this->email->bcc('chandragoldie@gmail.com, alfirahadian@gmail.com, adicahyanto@yahoo.com','aviciennaakbar@gmail.com','ms.silvylaurencia@gmail.com');
		$this->email->from('ideacraft.id@gmail.com','Marketition 2018');
		$this->email->subject('Your payment has been received');
		$this->email->message($htmlContent);
		$this->email->send();
	}




}
?>