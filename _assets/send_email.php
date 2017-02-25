<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Send_Email extends CI_Controller {

public function index()
{
	//$from = "test@aol.com";
	$subject = "New Launcher Email!";
	$message = "Test Message.";
	
	$name = $this->input->post('name');
	$email = $this->input->post('email');
	$message = $this->input->post('message');
	
	$config = array(
	            'protocol' => 'smtp',
	            'smtp_host' => 's1301.gridserver.com',
	            'smtp_port' => 587,
	            'smtp_user' => 'peter@petercole.com',
	            'smtp_pass' => 'Remmilg67'
	);
	
	$to = "peter@petercole.com";
	//$headers = "From: $email_from \r\n";
	//$headers .= "Reply-To: $visitor_email \r\n";
	
	
	$this->load->library('email',$config);
	$this->email->set_newline("\r\n");
	
	$this->email->from($email,$name);
	$this->email->to($to);
	$this->email->subject($subject);
	$this->email->message($message);
	//$this->email->send();
	
	//echo "Email is: " . $to;
	
	if($this->email->send()) {
		echo "Thank you for your message!";
	} else {
		echo "Error sending email.";
	}
	
	
}

public function sendPasswordResetEmail()
{
	$from = "passwordhelp@launchbx.net";
	$email = $this->input->post('email');
	$this->load->model('login_model');
	$pre_user_id = $this->login_model->getUserID($email);	
	
	//$key = 'super-secret-key';
	//$url_param = $this->encrypt->encode($pre_user_id);

	$base_64 = base64_encode($pre_user_id);
	$url_param = rtrim($base_64, '=');
	
	//echo "<br>Please click on the following link to reset your password:<br><a href = '" .base_url() ."login/resetPassword/" . urlencode($url_param) . " '/>" .base_url() ."login/resetPassword/" . urlencode($url_param) . "</a>";
	

	$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 's1301.gridserver.com',
			'smtp_port' => 587,
			'smtp_user' => 'peter@petercole.com',
			'smtp_pass' => 'Remmilg67'
	);

	$to = $email;
	$subject = "LaunchBx: Password Request";
	$message = "Please visit the following link to reset your password \n\n " .base_url() ."login/resetPassword/" . urlencode($url_param);
	//$headers = "From: $email_from \r\n";
	//$headers .= "Reply-To: $visitor_email \r\n";


	$this->load->library('email',$config);
	$this->email->set_newline("\r\n");

	$this->email->from($from,$name);
	$this->email->to($to);
	$this->email->subject($subject);
	$this->email->message($message);
	//$this->email->send();
	
	

	if($this->email->send()) {
		//echo "Please check your email for instructions on how to reset your password.";
	} else {
		echo "Error sending email.";
	}
	
	$data["content"] = "menu/login_view";
	$data["title"] = "create menu";
	$data['user_id'] = $user_id;
	$data['modal'] = '0';
	$this->load->view("menu/includes/template", $data);
	

}


}




?>