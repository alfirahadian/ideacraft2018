<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }

    /*
	public function login($email,$password)
    {
		$this->db->where("email",$email);
        $this->db->where("password",$password);
            
        $query=$this->db->get("pitch_first");
        if($query->num_rows()>0)
        {
         	foreach($query->result() as $rows)
            {
            	//add all data to session
                $newdata = array(
                	   	'id' 		=> $rows->id,
                        'email'   => $rows->email,
                        'team_name'        => $rows->team_name,
	                    'logged_in' 	=> TRUE,
                   );
			}
            	$this->session->set_userdata($newdata);
                return true;            
		}
		return false;
    }
    */
    
	public function add_user_pitch_first($ref_code_gen,$billing)
	{
        $deadline_date = strtotime("+21 day");
        $deadline_date = date('d M Y', $deadline_date);

        $register_date = date('d M Y');

		$data=array(
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password')),
            'team_name'=>$this->input->post('team_name'),
            'university'=>$this->input->post('university'),
            'bio1_name'=>$this->input->post('bio1_name'),
            'bio1_phone'=>$this->input->post('bio1_phone'),
            'bio1_major'=>$this->input->post('bio1_major'),
            //'bio1_address'=>$this->input->post('bio1_address'),
            'bio2_name'=>$this->input->post('bio2_name'),
            'bio2_phone'=>$this->input->post('bio2_phone'),
            'bio2_major'=>$this->input->post('bio2_major'),
            //'bio2_address'=>$this->input->post('bio2_address'),
            'ref_code'=>$this->input->post('ref_code'),
            'ref_code_gen'=>$ref_code_gen,
            'deadline_date'=>$deadline_date,
            'register_date'=>$register_date,
            'billing'=>$billing,
            'status'=>$this->input->post('status')
			);
		$this->db->insert('pitch_first',$data);
	}

    public function get_participant() {
        $email = $this->session->userdata('email');

        $this->db->where('email', $email);
        $query = $this->db->get('pitch_first');
        //return $query->result_array();
        return $query->result();
        //return $row->result();
    }

    public function get_jumlah_referral_digunakan() {
        //$email = $this->session->userdata('email');
        $ref_code_gen = $this->session->userdata('ref_code_gen');
        
        $this->db->where('ref_code', $ref_code_gen);
        $query = $this->db->get('pitch_first');
        $query = $query->num_rows();

        //print_r($query);
        
        return $query;
        
    }

    public function admin_get_participant() {
        //$email = $this->session->userdata('email');

        //$this->db->where('email', $email);
        $query = $this->db->get('pitch_first');
        //return $query->result_array();
        return $query->result();
        //return $row->result();
    }

    public function admin_get_participant_marketition() {
        //$email = $this->session->userdata('email');

        //$this->db->where('email', $email);
        $query = $this->db->get('marketition');
        //return $query->result_array();
        return $query->result();
        //return $row->result();
    }

    public function login($data) {
        $email = $data['email'];
        $password = md5($data['password']);

        $this->db->select('*');
        $this->db->from('pitch_first');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
        return true;
        } else {
        return false;
        }
    }

    // Read data from database to show data in admin page
    public function read_user_information($email) {

    $condition = "email =" . "'" . $email . "'";
    $this->db->select('*');
    $this->db->from('pitch_first');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
    return $query->result();
    } else {
    return false;
    }
    }

    public function update_payment_proof($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($pitch_first, array('payment_proof' => $payment_proof));
    return true;
    }

    public function update_bio1_id_card($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($pitch_first, array('bio1_id_card' => $bio1_id_card));
    return true;
    }

    public function update_bio2_id_card($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($pitch_first, array('bio2_id_card' => $bio2_id_card));
    return true;
    }

    public function update_student_letter($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($pitch_first, array('student_letter' => $student_letter));
    return true;
    }

    public function update_student_letter_2($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($pitch_first, array('student_letter_2' => $student_letter_2));
    return true;
    }

    public function update_executive_summary($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($pitch_first, array('executive_summary' => $executive_summary));
    return true;
    }

    public function update_username_ig($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($pitch_first, array('username_ig' => $username_ig));
    return true;
    }

    public function update_video_ig($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($pitch_first, array('video_ig' => $video_ig));
    return true;
    }

    public function update_video_ig_2($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($pitch_first, array('video_ig_2' => $video_ig_2));
    return true;
    }

    public function update_status_model($id){
        //echo $id;
        $status = array('status' => 1);    
        $this->db->where('id', $id);
        $this->db->update('pitch_first', $status); 
    }

    public function update_status_off_model($id){
        //echo $id;
        $status = array('status' => 0);    
        $this->db->where('id', $id);
        $this->db->update('pitch_first', $status); 
    }

    public function update_status_model_marketition($id){
        $id =  $this->uri->segment(3);
        $status = array('status' => 1);    
        $this->db->where('id', $id);
        $this->db->update('marketition', $status); 

        //$id =  $this->uri->segment(3);
        //$this->db->where('id', $id);
        //$query = $this->db->get('marketition');

        //$data = array_shift($query->result_array());

        //var_dump($query);
        //die;
        //return $data->result();
    }

    public function update_status_off_model_marketition($id){
        //echo $id;
        $status = array('status' => 0);    
        $this->db->where('id', $id);
        $this->db->update('marketition', $status); 
    }

    public function reset_billing($id){
        //echo $id;
        $status = array('billing' => 0);    
        $this->db->where('id', $id);
        $this->db->update('pitch_first', $status); 
    }

    public function delete_by_id($id){
        //echo $id;
         $this->db->where('id',$id); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
        $this->db->delete('pitch_first'); //eksekusi
        return;
    }

    public function delete_by_id_marketition($id){
        //echo $id;
         $this->db->where('id',$id); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
        $this->db->delete('marketition'); //eksekusi
        return;
    }

    public function get_participant_by_id($ref_code_gen)
    {    
        $query = $this->db->get_where('pitch_first', array('ref_code_gen' => $ref_code_gen));
        return $query->result();
    }

    public function get_participant_by_id_marketition($id)
    {    
        $query = $this->db->get_where('marketition', array('id' => $id));
        return $query->result();
    }

    public function add_user_marketition($billing)
    {
        $deadline_date = strtotime("+21 day");
        $deadline_date = date('d M Y', $deadline_date);

        $register_date = date('d M Y');

        $data=array(
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password')),
            'team_name'=>$this->input->post('team_name'),
            'university'=>$this->input->post('university_name'),
            'country'=>$this->input->post('country'),
            'deadline_date'=>$deadline_date,
            'register_date'=>$register_date,
            'billing'=>$billing,
            'status'=>$this->input->post('status')
            );
        $this->db->insert('marketition',$data);
    }

    public function login_marketition($data) {
        $email = $data['email'];
        $password = md5($data['password']);

        $this->db->select('*');
        $this->db->from('marketition');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
        return true;
        } else {
        return false;
        }
    }

    // Read data from database to show data in admin page
    public function read_user_marketition_information($email) {

    $condition = "email =" . "'" . $email . "'";
    $this->db->select('*');
    $this->db->from('marketition');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
    return $query->result();
    } else {
    return false;
    }
    }

    public function get_marketition_participant() {
        $email = $this->session->userdata('email');

        $this->db->where('email', $email);
        $query = $this->db->get('marketition');
        //return $query->result_array();
        return $query->result();
        //return $row->result();
    }

    public function get_reset_marketition_participant() {
        $email = $this->session->userdata('email');

        $this->db->where('email', $email);
        $query = $this->db->get('marketition');
        //return $query->result_array();
        return $query->row();
        //return $row->result();
    }

    public function update_payment_proof_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('payment_proof' => $payment_proof));
    return true;
    }

    public function update_ack_letter_university_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('ack_letter_university' => $ack_letter_university));
    return true;
    }

    //PARTICIPANT 1
    public function update_register_participant_1_2_3_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array(
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
            'participant_1_2_3' => '1'));
    return true;
    }

    public function update_bio1_id_card_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio1_id_card' => $bio1_id_card));
    return true;
    }

     public function update_bio1_ack_letter_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio1_ack_letter' => $bio1_ack_letter));
    return true;
    }

    public function update_bio1_id_card_employee_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio1_id_card_employee' => $bio1_id_card_employee));
    return true;
    }

    public function update_bio1_ack_letter_employee_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio1_ack_letter_employee' => $bio1_ack_letter_employee));
    return true;
    }

    //PARTICIPANT 2
    public function update_bio2_id_card_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio2_id_card' => $bio2_id_card));
    return true;
    }

     public function update_bio2_ack_letter_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio2_ack_letter' => $bio2_ack_letter));
    return true;
    }

    public function update_bio2_id_card_employee_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio2_id_card_employee' => $bio2_id_card_employee));
    return true;
    }

    public function update_bio2_ack_letter_employee_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio2_ack_letter_employee' => $bio2_ack_letter_employee));
    return true;
    }

    //PARTICIPANT 3
    public function update_bio3_id_card_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio3_id_card' => $bio3_id_card));
    return true;
    }

     public function update_bio3_ack_letter_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio3_ack_letter' => $bio3_ack_letter));
    return true;
    }

    public function update_bio3_id_card_employee_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio3_id_card_employee' => $bio3_id_card_employee));
    return true;
    }

    public function update_bio3_ack_letter_employee_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio3_ack_letter_employee' => $bio3_ack_letter_employee));
    return true;
    }

    //PARTICIPANT 4
    public function update_register_participant_4_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio4_name' => $bio4_name, 'bio4_phone' => $bio4_phone, 'bio4_major' => $bio4_major, 'bio4_company' => $bio4_company, 'participant_4' => '1'));
    return true;
    }

    public function update_bio4_id_card_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio4_id_card' => $bio4_id_card));
    return true;
    }

    public function update_bio4_ack_letter_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio4_ack_letter' => $bio4_ack_letter));
    return true;
    }

    public function update_bio4_id_card_employee_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio4_id_card_employee' => $bio4_id_card_employee));
    return true;
    }

    public function update_bio4_ack_letter_employee_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio4_ack_letter_employee' => $bio4_ack_letter_employee));
    return true;
    }

    //PARTICIPANT 5
    public function update_register_participant_5_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio5_name' => $bio5_name, 'bio5_phone' => $bio5_phone, 'bio5_major' => $bio5_major, 'bio5_company' => $bio5_company, 'participant_5' => '1'));
    return true;
    }

    public function update_bio5_id_card_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio5_id_card' => $bio5_id_card));
    return true;
    }

     public function update_bio5_ack_letter_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio5_ack_letter' => $bio5_ack_letter));
    return true;
    }

    public function update_bio5_id_card_employee_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio5_id_card_employee' => $bio5_id_card_employee));
    return true;
    }

    public function update_bio5_ack_letter_employee_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array('bio5_ack_letter_employee' => $bio5_ack_letter_employee));
    return true;
    }

    public function add_4th_participant($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('add_4th_participant' => $add_4th_participant));
    return true;
    }

    public function add_5th_participant($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('add_5th_participant' => $add_5th_participant));
    return true;
    }

    public function update_register_participant_1_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array(
            'bio1_name' => $bio1_name, 
            'bio1_phone' => $bio1_phone, 
            'bio1_major' => $bio1_major, 
            'bio1_company' => $bio1_company
            //'bio1_address' => $bio1_address
            ));
    return true;
    }

    public function update_register_participant_2_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array(
            'bio2_name' => $bio2_name, 
            'bio2_phone' => $bio2_phone, 
            'bio2_major' => $bio2_major, 
            'bio2_company' => $bio2_company 
            //'bio2_address' => $bio2_address
            ));
    return true;
    }

    public function update_register_participant_3_marketition($data) {
        extract($data);
        //var_dump($data);
        //die;
        $this->db->where('email', $email);
        $this->db->update($marketition, array(
            'bio3_name' => $bio3_name, 
            'bio3_phone' => $bio3_phone, 
            'bio3_major' => $bio3_major, 
            'bio3_company' => $bio3_company 
            //'bio3_address' => $bio3_address
            ));
    return true;
    }

    //RESET ID CARD
    public function reset_bio1_id_card($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio1_id_card' => $bio1_id_card));
    return true;
    }

    public function reset_bio2_id_card($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio2_id_card' => $bio2_id_card));
    return true;
    }

    public function reset_bio3_id_card($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio3_id_card' => $bio3_id_card));
    return true;
    }

    public function reset_bio4_id_card($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio4_id_card' => $bio4_id_card));
    return true;
    }

    public function reset_bio5_id_card($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio1_id_card' => $bio5_id_card));
    return true;
    }

    //RESET ACK LETTER
    public function reset_bio1_ack_letter($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio1_ack_letter' => $bio1_ack_letter));
    return true;
    }

    public function reset_bio2_ack_letter($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio2_ack_letter' => $bio2_ack_letter));
    return true;
    }

    public function reset_bio3_ack_letter($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio3_ack_letter' => $bio3_ack_letter));
    return true;
    }

    public function reset_bio4_ack_letter($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio4_ack_letter' => $bio4_ack_letter));
    return true;
    }

    public function reset_bio5_ack_letter($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio5_ack_letter' => $bio5_ack_letter));
    return true;
    }

    //RESET EMPLOYEE ID CARD
    public function reset_bio1_id_card_employee($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio1_id_card_employee' => $bio1_id_card_employee));
    return true;
    }

    public function reset_bio2_id_card_employee($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio2_id_card_employee' => $bio2_id_card_employee));
    return true;
    }

    public function reset_bio3_id_card_employee($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio3_id_card_employee' => $bio3_id_card_employee));
    return true;
    }

    public function reset_bio4_id_card_employee($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio4_id_card_employee' => $bio4_id_card_employee));
    return true;
    }

    public function reset_bio5_id_card_employee($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio5_id_card_employee' => $bio5_id_card_employee));
    return true;
    }

   //RESET ACK LETTER EMPLOYEE
    public function reset_bio1_ack_letter_employee($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio1_ack_letter_employee' => $bio1_ack_letter_employee));
    return true;
    }

    public function reset_bio2_ack_letter_employee($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio2_ack_letter_employee' => $bio2_ack_letter_employee));
    return true;
    }

    public function reset_bio3_ack_letter_employee($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio3_ack_letter_employee' => $bio3_ack_letter_employee));
    return true;
    }

    public function reset_bio4_ack_letter_employee($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio4_ack_letter_employee' => $bio4_ack_letter_employee));
    return true;
    }

    public function reset_bio5_ack_letter_employee($data) {
        extract($data);
        //var_dump($data);
        //die;
        //die;
        $this->db->where('email', $email);
        $this->db->update('marketition', array('bio5_ack_letter_employee' => $bio5_ack_letter_employee));
    return true;
    }

}