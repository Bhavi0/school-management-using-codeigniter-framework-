<?php

class Teacher extends CI_Controller
{
  public function index()
  {
    $teachers = $this->teacher_model->get_teachers();
    $data['teacher'] = $teachers;
    $data['school_name'] = $this->user_model->getSchoolName();
$this->load->view('partials/header',$data);
    $this->load->view('teacher/teacher_list', $data);
    $this->load->view('partials/footer');
  }

  public function add_teacher()
  {
    $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
    $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('phoneno', 'Phone No', 'trim|required');
    $this->form_validation->set_rules('address', 'Address', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required');

    if ($this->form_validation->run() == TRUE) {
      $add_teacher['firstname'] = $this->input->post('firstname');
      $add_teacher['lastname'] = $this->input->post('lastname');
      $add_teacher['phone_no'] = $this->input->post('phoneno');
      $add_teacher['address'] = $this->input->post('address');
      $add_teacher['email'] = $this->input->post('email');

      $this->teacher_model->create_teacher($add_teacher);
      $this->session->set_flashdata('success_message', 'Teacher added successfully');
       redirect(base_url() . 'teacher/index');
      
    }
    else{
      $data = array('errors'=> validation_errors());
      $this->session->set_flashdata($data);
      $data['school_name'] = $this->user_model->getSchoolName();
      $this->load->view('partials/header',$data);
      $this->load->view('teacher/add_teacher');
      $this->load->view('partials/footer');
    }
  }

  public function edit_teacher($id){
    $single_teacher = $this->teacher_model->getSingleTeacher($id);
    $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
    $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('phoneno', 'Phone No', 'trim|required');
    $this->form_validation->set_rules('address', 'Address', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required');

    if($this->form_validation->run() == true)
    {
      $edit_teacher['firstname'] = $this->input->post('firstname');
      $edit_teacher['lastname'] = $this->input->post('lastname');
      $edit_teacher['phone_no'] = $this->input->post('phoneno');
      $edit_teacher['address'] = $this->input->post('address');
      $edit_teacher['email'] = $this->input->post('email');

      $this->teacher_model->update_teacher($id, $edit_teacher);
      $this->session->set_flashdata('success_message', 'Teacher added successfully');
      redirect(base_url() . 'teacher/index');
    }
    else{
      $data['teach'] = $single_teacher;
      $data['school_name'] = $this->user_model->getSchoolName();
      $this->load->view('partials/header',$data);
      $this->load->view('teacher/edit_teacher', $data);
      $this->load->view('partials/footer');
    }
  }

  public function delete_teacher($id){
    $this->teacher_model->delete_teacher($id);
    return redirect('teacher/index');
  }
}