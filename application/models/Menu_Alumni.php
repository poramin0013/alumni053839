<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_Alumni extends CI_Model {
    //คำสั่ง Insert ข้อมูลต่างๆลงตาราง
    function insert_Login($result){
        $this->db->insert('study_tb',$result);
    }
    function insert_address($result2){
        $this->db->insert('address_tb',$result2);
    }
    function insert_Work($result3){
        $this->db->insert('work_tb',$result3);
    }
    function insert_pessonal($result4){
        $this->db->insert('pessonal_tb',$result4);
    }
    function insert_Contact($result5){
        $this->db->insert('contact_tb',$result5);
    }
   
    //คำสั่ง Check Login
    function Check_Login($STD_ID,$Password){
        $this->db->where('STD_ID', $STD_ID);
        $this->db->where('Password', $Password);
        $result = $this->db->get('study_tb');
        $message = '';

        if ($result->num_rows() > 0) {
            $message = true;

            // $this->load->view('list');

        } else {
            $message = false;
        }
        $data = array(
            "message" => $message, "data" => $result->result()

        );
        return $data;
    }
    //คำสั่งค้นหาจากรหัสนักศึกษา
    function Search_Std_ID($STD_ID){
       
        $result = $this->db->query("SELECT * FROM `pessonal_tb` WHERE `STD_ID` = $STD_ID"); 
        return $result;
        
    }
    //คำสั่งค้นหาจากชื่อนักศึกษา
    function Search_Name($name){
        $result = $this->db->query("SELECT * FROM `pessonal_tb` WHERE `name` LIKE '%$name%'");
        return $result;
    }
    
    //คำสั่งjoin ตารางที่STD_ID เหมือนกันจากนั้นจะดึงข้อมูลทั้งหมด
    function Profile($STD_ID){
        $this->db->select('*');
        $this->db->from('study_tb');
        $this->db->join('pessonal_tb', 'pessonal_tb.STD_ID = study_tb.STD_ID', 'left');
        $this->db->join('address_tb', 'address_tb.STD_ID = study_tb.STD_ID', 'left');
        $this->db->join('work_tb', 'work_tb.STD_ID = study_tb.STD_ID', 'left');
        $this->db->join('contact_tb', 'contact_tb.STD_ID = study_tb.STD_ID', 'left');
        $this->db->where('study_tb.Std_ID', $STD_ID);
        
        $query = $this->db->get();
        return $query->result();
        }
    //คำสั่ง Edit
    function Update_Register($data)
    {
        $Std_ID =  $this->session->userdata('Std_ID');
        $this->db->where('Std_ID', $Std_ID);
        $this->db->update('register', $data);
    }
    function Update_Educational($data)
    {
        $Std_ID =  $this->session->userdata('Std_ID');
        $this->db->where('Std_ID', $Std_ID);
        $this->db->update('data_educational', $data);
    }
    function Update_Work($data)
    {
        $Std_ID =  $this->session->userdata('Std_ID');
        $this->db->where('Std_ID', $Std_ID);
        $this->db->update('data_work', $data);
    }
}
