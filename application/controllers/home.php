<?php
class Home extends CI_Controller{
  public function index(){
			redirect('home/login');

  }
public function success(){
    return redirect('user');
}
public function login(){
  if($this->session->userdata('user_id')){
    return redirect('welcome/admin_dashboard');
  }
  else{
    $this->load->view('home');
  }
    }
  public function signin(){


    $this->form_validation->set_rules('email', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if($this->form_validation->run() == TRUE)
    {
      // code runs
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $user_id = $this->user_model->login($email, $password);

      if($user_id)
      {
          if($user_id->role_id == '1')
          {
            // admin
          $sessionData = [
            'admin_id' => $user_id->id,
            'username' => $user_id->username,
            'email' => $user_id->email,
            'role_id' => $user_id->role_id
          ];
          $this->load->library('session');
          $this->session->set_userdata($sessionData);
          return redirect('welcome/admin_dashboard');
          }

          else if($user_id->role_id > '1'){
            // teacher

          $sessionData = [
            'teacher_id'=> $user_id->id,
            'teacher_username' => $user_id->username,
            'email' => $user_id->email,
            'role_id' => $user_id->role_id
          ];
          $this->session->set_userdata($sessionData);
          $this->session->set_flashdata('success','successfull logged in!');
          return redirect('welcome/teacher_dashboard');
          }
      }
      else{
        // error while running the code
       
        $this->session->set_flashdata('error_message', 'either username or password is incorrect!');
        redirect('home/login');
      }
    }
    else{
      $this->session->set_flashdata('msg', 'Either username or password is incorrect');
      redirect('home/login');    }

    // $email = $this->input->post('email');
    //   $password = $this->input->post('password');
    //   $query = $this->db->query("SELECT * FROM `users` WHERE `email`= '$email' AND `password` = '$password'");
    //   if ($query->num_rows()) {
    //     $result = $query->result_array();
    //     $this->session->set_userdata('user_id', $result[0]['id']);
    //     $this->session->set_userdata('user_name', $result[0]['username']);
    //     $this->session->set_userdata('user_email', $result[0]['email']);
    //     redirect('user/admin_dashboard');
    //     // $this->home();
    //     // redirect('home');
    //   } else {
    //     $this->login("invalid email and password!");
    //   }
  }

  public function logout(){
    $this->session->unset_userdata('user_id');
    $this->session->sess_destroy();
		 redirect(base_url().'home/login');
  }
  public function get_school_name(){
    // $school_name = $this->user_model->getSchoolName();
    // $data['school_name'] = $school_name;
    // $this->load->view('partials/header',$data);
    
  }
}


?>