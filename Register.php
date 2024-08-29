<?php

include_once 'Database.php';

class Register{
   public $db;

   public function __construct(){
       $this->db = new Database();
   }

   public function addRegister($data){
       $firstname = $data['firstname'];
       $lastname = $data['lastname'];
       $age = $data['age'];
    
       $query = "INSERT INTO `students` (`id`, `First_Name`, `Last_Name`, `Age`)
                 VALUES (NULL, '$firstname', '$lastname', '$age')";
       $result = $this->db->insert($query);
       
       if($result){
           return "Registration Successful";
       } else {
           return "Registration Fail";
       }
   }
   public function allStudent(){
    $query ="SELECT * FROM students ORDER BY id asc ";
    $result =$this->db->select($query);
    return $result;
   }

   public function getStdId($id){
    $query ="SELECT * FROM students where id ='$id' ";
    $result =$this->db->select($query);
    return $result;
   }

   public function  delStudent($id){
     $del_query = "DELETE FROM students where id = '$id'";
     $del =$this->db->delete($del_query);
   }

   public function updateStudent($data,$id){
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $age = $data['age'];
 
    $query ="UPDATE students set First_Name ='$firstname',Last_Name ='$lastname',
    Age ='$age' where id ='$id'";
    $result = $this->db->insert($query);
    
    if($result){
        return "Registration Successful";
    } else {
        return "Registration Fail";
    }
   }
}
?>
