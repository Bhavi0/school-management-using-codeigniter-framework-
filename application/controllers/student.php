<?php
class Student extends CI_Controller{
  public function index(){
    $class = $this->class_model->get_class();
    $data['all_class'] = $class;
    $data['school_name'] = $this->user_model->getSchoolName();
    $this->load->view('partials/header',$data);
    $this->load->view('student/class_list', $data);
    $this->load->view('partials/footer');
  }



  public function get_students($id){
    $data['school_name'] = $this->user_model->getSchoolName();
    $student = $this->student_model->get_students($id);
    $class = $this->class_model->get_classes($id);
    $data['students'] = $student;
    $data['class'] = $class;
    $this->load->view('partials/header',$data);
    $this->load->view('student/student_list', $data);
    $this->load->view('partials/footer');
  }
  public function add_student(){
    $class = $this->class_model->get_class();
    $this->form_validation->set_rules('student_name', 'Student Name', 'trim|required');
    $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
    $this->form_validation->set_rules('class', 'class', 'trim|required');
    $this->form_validation->set_rules('address', 'Address', 'trim|required');
    $this->form_validation->set_rules('weekly_marks', 'Weekly Mark', 'trim|required');
    $this->form_validation->set_rules('monthly_marks', 'Monthly Mark', 'trim|required');
    $this->form_validation->set_rules('quarterly_marks', 'Quarterly Mark', 'trim|required');
    $this->form_validation->set_rules('annual_marks', 'Annual Mark', 'trim|required');

    if($this->form_validation->run()== TRUE)
    {
      $add_student['name'] = $this->input->post('student_name');
      $add_student['gender'] = $this->input->post('gender');
      $add_student['class_no'] = $this->input->post('class');
      $add_student['address'] = $this->input->post('address');
      $add_student['weekly_marks'] = $this->input->post('weekly_marks');
      $add_student['monthly_marks'] = $this->input->post('monthly_marks');
      $add_student['quarterly_marks'] = $this->input->post('quarterly_marks');
      $add_student['annual_marks'] = $this->input->post('annual_marks');

      $this->student_model->add_student($add_student);
      return redirect(base_url() . 'student');
    }
    else{
      $data = array('errors'=> validation_errors());
      $this->session->set_flashdata($data);
      $data['all_class'] = $class;
      $data['school_name'] = $this->user_model->getSchoolName();
      $this->load->view('partials/header',$data);
      $this->load->view('student/add_student', $data);
      $this->load->view('partials/footer');
    }
  }

  public function get_class(){
    $data = $this->class_model->get_info();
    $result['class'] = $data;
    $this->load->view('partials/header');
      $this->load->view('student/student_list', $result);
      $this->load->view('partials/footer');

  }

  public function edit_student($id){
    $student = $this->student_model->get_student($id);
    $class = $this->class_model->get_class();
    $this->form_validation->set_rules('student_name', 'Student Name', 'trim|required');
    $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
    $this->form_validation->set_rules('class', 'class', 'trim|required');
    $this->form_validation->set_rules('address', 'Address', 'trim|required');
    $this->form_validation->set_rules('weekly_marks', 'Weekly Mark', 'trim|required');
    $this->form_validation->set_rules('monthly_marks', 'Monthly Mark', 'trim|required');
    $this->form_validation->set_rules('quarterly_marks', 'Quarterly Mark', 'trim|required');
    $this->form_validation->set_rules('annual_marks', 'Annual Mark', 'trim|required');

    if($this->form_validation->run()== TRUE)
    {
      $edit_student['name'] = $this->input->post('student_name');
      $edit_student['gender'] = $this->input->post('gender');
      $edit_student['class_no'] = $this->input->post('class');
      $edit_student['address'] = $this->input->post('address');
      $edit_student['weekly_marks'] = $this->input->post('weekly_marks');
      $edit_student['monthly_marks'] = $this->input->post('monthly_marks');
      $edit_student['quarterly_marks'] = $this->input->post('quarterly_marks');
      $edit_student['annual_marks'] = $this->input->post('annual_marks');

      $this->student_model->update_student($edit_student, $id);
      redirect('student');
    }
    else{
      $data['student'] = $student;
      $data['all_class'] = $class;
      $data['school_name'] = $this->user_model->getSchoolName();
      $this->load->view('partials/header',$data);
      $this->load->view('student/edit_student',$data);
      $this->load->view('partials/footer');
    }
  }
  public function delete_student($id){
    $this->student_model->delete_student($id);
    return redirect('student');
  }
}