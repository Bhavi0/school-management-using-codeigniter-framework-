<?php

class Class_category extends CI_Controller{
  public function index(){
    $class = $this->class_model->get_class();
    $data['school_name'] = $this->user_model->getSchoolName();
    $data['all_class'] = $class;
    $this->load->view('partials/header',$data);
    $this->load->view('class/class_list', $data);
    $this->load->view('partials/footer');
  }

  public function add_class(){
    $this->form_validation->set_rules('class', 'Class', 'trim|required');
    if($this->form_validation->run() == true)
    {
      $class['class_no'] = $this->input->post('class');
      $this->class_model->add_class($class);
      return redirect('class_category');
    }
    else{
      $data = array('errors'=> validation_errors());
      $this->session->set_flashdata($data);
      redirect('class_category');
    }
  }

  public function delete_class($id)
  {
    $this->class_model->delete($id);
    return redirect(base_url() . 'class_category');
  }
}