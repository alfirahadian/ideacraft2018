<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pitchfirst extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		$this->load->view('view_pitchfirst');
		/*
		$sess_id = $this->session->userdata('email');
   		if(!empty($sess_id))
		{
			//echo "berhasil";
			$this->load->view('view_pitchfirst');
			//redirect ('pitchfirst/participant_area');
		}
		else{
			$this->load->view('view_pitchfirst');
		}
		*/
	
		//if(($this->session->userdata('nama_sekolah')!=""))
		//{
			//echo "berhasil";
		//	redirect ('beranda');
		//}
		//else{
			//$this->load->view('login_becik');
		//}

		/*
		 $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('view_signup');
        }
        else
        {
                //$this->load->view('formsuccess');
        		echo "Berhasssssil";
        }

        */
	}

	
	public function login()
	{
		$this->load->view('view_login');
	}

	public function timer()
	{
		$this->load->view('view_timer');
	}
	/*
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		$result=$this->user_model->login($email,$password);
		if($result) $this->index();
		else        $this->load->view('view_login');
	}
	*/

	// Check for user login process
	public function user_login_process() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
				if(isset($this->session->userdata['logged_in'])){
					$this->load->view('view_participant_area');
				}else{
					$this->load->view('view_login');
				}
		} 
		else {
				$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
				);
			$result = $this->user_model->login($data);
			if ($result == TRUE) {
				$email = $this->input->post('email');
				$result = $this->user_model->read_user_information($email);
				if ($result != false) {
				$session_data = array(
				'email' => $result[0]->email,
				'team_name' => $result[0]->team_name,
				'ref_code_gen' => $result[0]->ref_code_gen,
				'user_role' => $result[0]->user_role,
				'logged_in' => TRUE
				);
			// Add user data in session
				$this->session->set_userdata($session_data);
				//$this->session->set_userdata('email', $session_data);
				//var_dump($session_data);
				//die;
				//$this->load->view('view_participant_area');
				redirect('pitchfirst/participant_area');
			}
			} else {
				$data = array(
				'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('view_login', $data);
			}
		}
	}

	public function registration()
	{
		//echo "BERHASIL";
		$this->load->view('view_signup');
	}
	
	public function registration_pitch_first()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('team_name', 'Team Name', 'required');
		$this->form_validation->set_rules('university', 'University', 'required');
		$this->form_validation->set_rules('bio1_name', 'Nama Peserta', 'required');
		$this->form_validation->set_rules('bio1_phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('bio1_major', 'Major', 'required');
		$this->form_validation->set_rules('bio1_address', 'Address', 'required');
		if($this->form_validation->run() == FALSE)
		{
			//echo "ERROR";
			$this->load->view('view_signup');
		}
		else
		{
			// CODE FOR EMAIL DUPLICATE AND REFFERAL CODE CHECK
			$email_check=$this->input->post('email');
			$ref_code_input=strtolower($this->input->post('ref_code'));
			$this->db->from('pitch_first');
        	$email_check_from_db = $this->db->query("SELECT * FROM `pitch_first` WHERE `email`='$email_check';");
        	$ref_code_input_check_from_db= $this->db->query("SELECT * FROM `pitch_first` WHERE `ref_code`='$ref_code_input';");
        	$ref_code_gen_check_from_db = $this->db->query("SELECT * FROM `pitch_first` WHERE `ref_code_gen`='$ref_code_input';");
        	$email_check_from_db = $email_check_from_db->num_rows();
        	$ref_code_input_check_from_db = $ref_code_input_check_from_db->num_rows();
			$ref_code_gen_check_from_db = $ref_code_gen_check_from_db->num_rows();

			//echo $ref_code_input_check_from_db;
			//exit();
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
	    	}
	}

	public function signup_pitch_first_success($data)
	{		
		//echo var_dump($data);
		$this->load->view('view_signup_success',array("data"=>$data));
	}

	public function participant_area()
	{		
		if(isset($_SESSION['logged_in']) || $_SESSION['logged_in']== TRUE)
		{
		    switch ($_SESSION['user_role']) {		
			case '1' :
				redirect ('pitchfirst/admin');
				break;
			case '0' :
				//echo $this->session->userdata['email'];
			    $data['row'] = $this->user_model->get_participant();
			    $data['row2'] = $this->user_model->get_jumlah_referral_digunakan();
				$this->load->view('view_participant_area', $data);
			}
		} else {
			redirect('pitchfirst/login');
		}
	}

	public function success()
	{		
		//var_dump($data);
		$this->load->view('view_signup_success');
	}

	public function halaman_login()
	{		
		//var_dump($data);
		$this->load->view('view_login');
	}

	public function logout() {
		// Removing session data
		$this->session->sess_destroy();
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('view_login', $data);
	}

	public function cobacoba() {
		// Removing session data
		$team_name = "The Dream Team";
		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		echo $team_name;
	}

	public function do_upload() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$new_name = $team_name."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/",
		'allowed_types' => "jpg|png|jpeg|pdf",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'pitch_first' => 'pitch_first', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'payment_proof' => $new_name
	    	);

    		$this->user_model->update_payment_proof($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('pitchfirst/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_participant_area', $error);
		}
	}

	public function do_upload_bio1_id_card() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$new_name = $team_name."_ID_CARD_PARTICIPANT_1_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/",
		'allowed_types' => "jpg|png|jpeg|pdf",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'pitch_first' => 'pitch_first', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio1_id_card' => $new_name
	    	);

    		$this->user_model->update_bio1_id_card($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('pitchfirst/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_participant_area', $error);
		}
	}

	public function do_upload_bio2_id_card() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$new_name = $team_name."_ID_CARD_PARTICIPANT_2_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/",
		'allowed_types' => "jpg|png|jpeg|pdf",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'pitch_first' => 'pitch_first', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'bio2_id_card' => $new_name
	    	);

    		$this->user_model->update_bio2_id_card($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('pitchfirst/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_participant_area', $error);
		}
	}

	public function do_upload_student_letter() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		//echo $new_name;
		//die;
		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);
		$new_name = $team_name."_"."letter"."_".$_FILES["userfile"]['name'];
		$new_name = str_replace(' ', '', $new_name);		

		$config = array(
		'upload_path' => "./uploads/",
		'allowed_types' => "pdf|doc|docx",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
        	'pitch_first' => 'pitch_first', // pass the real table name
        	'email' => $this->session->userdata('email'),
        	'student_letter' => $new_name
    		);

    		$this->user_model->update_student_letter($data);


			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('pitchfirst/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			//$data['row'] = $this->user_model->get_participant();
			//$this->load->view('view_participant_area', $data);
			$this->load->view('view_participant_area', $error);
			//redirect('pitchfirst/participant_area');
		}
	}

	public function do_upload_student_letter_2() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		//echo $new_name;
		//die;
		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);
		$new_name = $team_name."_"."letter_2"."_".$_FILES["userfile"]['name'];
		$new_name = str_replace(' ', '', $new_name);		

		$config = array(
		'upload_path' => "./uploads/",
		'allowed_types' => "pdf|doc|docx",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
        	'pitch_first' => 'pitch_first', // pass the real table name
        	'email' => $this->session->userdata('email'),
        	'student_letter_2' => $new_name
    		);

    		$this->user_model->update_student_letter_2($data);


			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('pitchfirst/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			//$data['row'] = $this->user_model->get_participant();
			//$this->load->view('view_participant_area', $data);
			$this->load->view('view_participant_area', $error);
			//redirect('pitchfirst/participant_area');
		}
	}

	public function do_upload_executive_summary() {
		$this->load->library('upload');

		
		$team_name = $this->session->userdata('team_name');

		$team_name = str_replace(' ', '', $team_name);
		$team_name = strtolower($team_name);

		$new_name = $team_name."_"."executive_summary"."_".$_FILES["userfile"]['name'];

		$new_name = str_replace(' ', '', $new_name);

		//echo $new_name;
		//die;
		

		$config = array(
		'upload_path' => "./uploads/",
		'allowed_types' => "pdf|doc|docx",
		'max_size' => "10000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'file_name' => $new_name 
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload())
		{
			$data = array(
	        'pitch_first' => 'pitch_first', // pass the real table name
	        'email' => $this->session->userdata('email'),
	        'executive_summary' => $new_name
	    	);

    		$this->user_model->update_executive_summary($data);

			$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('pitchfirst/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_participant_area', $error);
		}
	}

	public function do_upload_username_ig() {
		//$this->load->library('upload');

		$username_ig=$this->input->post('username_ig');

		$data = array(
        'pitch_first' => 'pitch_first', // pass the real table name
        'email' => $this->session->userdata('email'),
        'username_ig' => $username_ig
    	);

		if($this->user_model->update_username_ig($data))
		{
			//$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('pitchfirst/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_participant_area', $error);
		}
	}

	public function do_upload_video_ig() {
		//$this->load->library('upload');

		$video_ig=$this->input->post('video_ig');

		$data = array(
        'pitch_first' => 'pitch_first', // pass the real table name
        'email' => $this->session->userdata('email'),
        'video_ig' => $video_ig
    	);

		if($this->user_model->update_video_ig($data))
		{
			//$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('pitchfirst/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_participant_area', $error);
		}
	}

	public function do_upload_video_ig_2() {
		//$this->load->library('upload');

		$video_ig_2=$this->input->post('video_ig_2');

		$data = array(
        'pitch_first' => 'pitch_first', // pass the real table name
        'email' => $this->session->userdata('email'),
        'video_ig_2' => $video_ig_2
    	);

		if($this->user_model->update_video_ig_2($data))
		{
			//$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('pitchfirst/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_participant_area', $error);
		}
	}

	public function do_register_() {
		//$this->load->library('upload');

		$video_ig_2=$this->input->post('video_ig_2');

		$data = array(
        'pitch_first' => 'pitch_first', // pass the real table name
        'email' => $this->session->userdata('email'),
        'video_ig_2' => $video_ig_2
    	);

		if($this->user_model->update_video_ig_2($data))
		{
			//$data = array('upload_data' => $this->upload->data());
			//echo "upload successs";
			//$this->load->view('view_participant_area');
			redirect('pitchfirst/participant_area');
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			$this->load->view('view_participant_area', $error);
		}
	}

	public function kirim_email($email_check, $billing) {
		$this->load->library('email');
		$deadline_date = strtotime("+21 day");
        $deadline_date = date('d M Y', $deadline_date);
		//$email=$this->input->post('email');
		//$email_check = "alfirahadian@gmail.com";
		//$billing = "90000";



		$htmlContent = '<img src="https://image.ibb.co/drhXSS/logo_pitchfirst.png" width="150"/><br><br>
		Dear Pitchers,<br>
		<p style="text-align: justify;">Thank you for completing the registration process and let us officially welcome you to <b>Pitch First 2018: Capturing Business Ideas within Societal Changes!</b> We sincerely hope you will enjoy and get challenging yet remarkable experiences during the competition.<br><br><br>
		Here are the next 2 steps you need to do:
		<br><br>
		1. Secure your seat by paying the registration fee as detailed below:
		<br>
			Total amount is <b>Rp'.$billing.' </b><br>
		Payment is to be remitted to: <br><br>
		<b>Yayasan Prasetiya Mulya
		<br>BCA KCU SCBD, Jakarta
		<br>006-309-3669
		<br>
		</b>
		<br>
		Please complete payment within 48 hours and upload your payment proof on your <a href="www.ideacraft.id/pitchfirst/login">Pitch First Account</a> for account activation. Remember that you will not be able to submit your files before your payment is verified by our team.
 		<br><br>
		2. Submit your files as listed below:<br>
		•	1-2 Pages Executive Summary in A4. Upload your file to our website using your Pitch First Account.<br>
		•	Preliminary Pitch Video about Business Ideas. Upload your 60 seconds video into your Pitch First Account.<br>
		•	Preliminary Pitch Video about Pitch First 2018 Event. Upload your videos on your Instagram account, follow and tag @ideacraft.id, and also use #yourideasmatter hashtags. Kindly share your referral code to friends or relatives. You are required to put your Instagram ID in Pitch First Account and make sure your Instagram is open for public.
		<br><br>
		You are entitled to have 21 days since registration date to submit your files. The submission deadline is on '.$deadline_date.'  at 18:00 WIB.<br><br>
		You can find the official rules and all requirements for the competition <a href="http://ideacraft.id/assets/doc/general_rules_pitchfirst2018.pdf">here</a>.<br>
		<br>
		Should you have any questions regarding the event, please contact Yohanna (085813853750) or send us an e-mail.
		<br><br>
		Thank you very much.<br><br>
		Best regards,<br>
		Pitch First Committee – Universitas Prasetiya Mulya<br>
		Jl. R.A Kartini (TB. Simatupang), Cilandak Barat, Jakarta Selatan 12430<br>
		E: ideacraft.id@gmail.com<br>
		IG: ideacraft.id<br>
		W: www.ideacraft.id/pitchfirst</p>
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
		$this->email->bcc('yohanna.001@student.pmbs.ac.id, alfirahadian@gmail.com, adicahyanto@yahoo.com, camilla.jasrin@student.pmbs.ac.id');
		$this->email->from('ideacraft.id@gmail.com','Pitch First 2018');
		$this->email->subject('Welcome to Pitch First 2018!');
		$this->email->message($htmlContent);
		$this->email->send();
	}

	public function admin()
	{
		if ($_SESSION['user_role'] == '1'){
	    $data['row'] = $this->user_model->admin_get_participant();
		$this->load->view('view_admin', $data);
		}
		else {
			redirect('pitchfirst/login');
		}
			
	}

	public function update_status($id){
	        $this->user_model->update_status_model($id); 
	        redirect('pitchfirst/admin');
	}

	public function update_status_off($id){
	        $this->user_model->update_status_off_model($id); 
	        redirect('pitchfirst/admin');
	}

	public function reset_billing($id){
	        $this->user_model->reset_billing($id); 
	        redirect('pitchfirst/admin');
	}

	public function delete_by_id($id){ //fungsi delete
    		$this->user_model->delete_by_id($id); //ngacir ke fungsi delTransaksi
    		redirect('pitchfirst/admin'); //redirect
	}


   public function user($ref_code_gen){
   	if ($_SESSION['user_role'] == '1') {
	   	$data['$ref_code_gen'] =  $this->uri->segment(3);

	   	$id = $data['$ref_code_gen'];
	    
	    if($data['$ref_code_gen'] == FALSE) {
	         echo "Profile Not Found";
	      } else {
		$data['ref_code_gen'] =  $this->uri->segment(3);

	    $data['row'] = $this->user_model->get_participant_by_id($ref_code_gen);
	    $this->load->view('view_profile_participant',$data);
	         /*access the database and get info for $data['username']*/
	         /*Load profile page with said info*/
	      }//End of Else
	}//End of function
	else {
		redirect ('pitchfirst/login');
	}
   }
   	
}
?>