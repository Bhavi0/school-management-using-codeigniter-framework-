<?php

class Teacher_model extends ci_model{
  public function get_teachers(){
    $result = $this->db->get('teacher_table')->result_array();
    return $result;
 
  }
public function get_count(){
    $query = $this->db->get('teacher_table')->num_rows();
    return $query;
}
  public function create_teacher($add_teacher){
    $this->db->insert('teacher_table', $add_teacher);
  }

  public function getSingleTeacher($id){
    $this->db->where('id', $id);
    $result = $this->db->get('teacher_table')->row_array();
    return $result;

  }
  public function update_teacher($id, $edit_teacher){
    $this->db->where('id', $id);
    $this->db->update('teacher_table', $edit_teacher);
  }
  public function delete_teacher($id){
    $this->db->where('id', $id);
    $this->db->delete('teacher_table');
  }
}