<?php

class Welcome extends CI_Controller{

  // public function __construct(){
  //   parent::__construct();
	// 	if (!$this->session->userdata('id')) {
	// 		return redirect('home');
	// 	}
  // }
  public function admin_dashboard(){
if($this->session->userdata('admin_id'))
{


    $teachers = $this->teacher_model->get_teachers();
    $class = $this->class_model->get_class();
    $query = $this->teacher_model->get_count();
    $data['teacher_count'] = $query;
    $data['teach'] = $teachers;
    $data['all_class'] = $class;
    $data['school_name'] = $this->user_model->getSchoolName();
    $data['class1count'] = $this->student_model->class1count();
    $data['class2count'] = $this->student_model->class2count();
    $data['class3count'] = $this->student_model->class3count();
    $data['class4count'] = $this->student_model->class4count();
    $data['class5count'] = $this->student_model->class5count();
    $data['class6count'] = $this->student_model->class6count();
    $data['class7count'] = $this->student_model->class7count();
    $data['class8count'] = $this->student_model->class8count();
   
    $this->load->view('partials/header',$data);
    $this->load->view('dashboard', $data);
    $this->load->view('partials/footer');
  }
  else{
    return redirect('home');
  }
}

  public function teacher_dashboard(){
    if($this->session->userdata('teacher_id')){
    // $user_id['dev'] = $this->session->userdata('user_id');
    $data['class1count'] = $this->student_model->class1count();
    $data['class2count'] = $this->student_model->class2count();
    $data['class3count'] = $this->student_model->class3count();
    $data['class4count'] = $this->student_model->class4count();
    $data['class5count'] = $this->student_model->class5count();
    $data['class6count'] = $this->student_model->class6count();
    $data['class7count'] = $this->student_model->class7count();
    $data['class8count'] = $this->student_model->class8count();
    $data['school_name'] = $this->user_model->getSchoolName();
    $this->load->view('partials/header',$data);
    $this->load->view('dashboard_teacher', $data);
  }
  else{
   return redirect('home');
  }
  }
  public function update_school($id){
    $this->form_validation->set_rules('school_name', 'School Name', 'required|trim');
    if($this->form_validation->run() == True){
      // true
      $edit_school['school_name'] = $this->input->post('school_name');
      $this->user_model->edit_school_name($id, $edit_school);
      redirect('welcome/admin_dashboard');
    }
    else{
      // error
    }
  }
}