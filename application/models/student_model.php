<?php

class Student_model extends ci_model{
  public function add_student($add_student)
  {
    $this->db->insert('student_table', $add_student);
    
  }

  public function delete_student($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('student_table');
  }

  public function get_student($id){
    $this->db->where('class_no', $id);
    $query = $this->db->get('student_table')->row_array();
    return $query;
  }

  public function get_students($id){
    $this->db->where('class_no', $id);
    $query = $this->db->get('student_table')->result_array();
    return $query;
  }

  public function update_student($edit_student, $id)
  {
    $this->db->where('id', $id);
     $this->db->update('student_table', $edit_student);
  }

  public function class1count(){
    $this->db->where('class_no', '1');
    $query = $this->db->get('student_table')->num_rows();
    return $query;
  }
  public function class2count(){
    $this->db->where('class_no', '2');
    $query = $this->db->get('student_table')->num_rows();
    return $query;
  }
  public function class3count(){
    $this->db->where('class_no', '3');
    $query = $this->db->get('student_table')->num_rows();
    return $query;
  }
  public function class4count(){
    $this->db->where('class_no', '4');
    $query = $this->db->get('student_table')->num_rows();
    return $query;
  }
  public function class5count(){
    $this->db->where('class_no', '5');
    $query = $this->db->get('student_table')->num_rows();
    return $query;
  }
  public function class6count(){
    $this->db->where('class_no', '6');
    $query = $this->db->get('student_table')->num_rows();
    return $query;
  }
  public function class7count(){
    $this->db->where('class_no', '7');
    $query = $this->db->get('student_table')->num_rows();
    return $query;
  }
  public function class8count(){
    $this->db->where('class_no', '8');
    $query = $this->db->get('student_table')->num_rows();
    return $query;
  }

}