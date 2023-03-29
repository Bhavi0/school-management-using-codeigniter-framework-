<?php
class Class_model extends ci_model{
  public function get_class(){
    $class = $this->db->get('class_category')->result_array();
    return $class;
  }
  public function get_single_class(){
    $class = $this->db->get('class_category')->row_array();
    return $class;
  }

  public function add_class($class){
    $this->db->insert('class_category', $class);
  }

  public function delete($id)
  {
    $this->db->where('c_id', $id);
    $this->db->delete('class_category');
  }

    public function get_info(){
        $this->db->select('*');
        $this->db->from('class_category');
        $this->db->join('student_table','class_category.class_no = student_table.class_no');
    $result = $this->db->get()->result_array();
    return $result;
  }

  public function get_classes($id){
    $this->db->where('class_no', $id);
    $query = $this->db->get('class_category')->row_array();
    return $query;
  }
}