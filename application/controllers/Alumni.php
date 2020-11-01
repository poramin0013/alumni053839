<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Menu_Alumni','MA');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('index');
	}

	//เรียกใช้หน้า Register
	//localhost/Alumni/index.php/Alumni/Register
	public function Register()
	{
		$this->load->view('view_Regis');
	}
	//ฟังก์ชั่นเพิ่มข้อมูล จากหน้า Register ลงฐานข้อมูล
	public function insert_Register(){
		$result = array(
			'STD_ID' => $this->input->post("STD_ID"),
			'Password'=> $this->input->post("Password"),
			'YEARCON'=> $this->input->post("YEARCON"),
		);

		$result2 = array(	
			'STD_ID'=> $this->input->post("STD_ID"),
			'HOME_N'=> $this->input->post("HOME_N"),
			'MOO'=> $this->input->post("MOO"),
			'KT'=> $this->input->post("KT"),
			'KA'=> $this->input->post("KA"),
			'CH'=> $this->input->post("CH"),
			'HOME_P'=> $this->input->post("HOME_P"),
		);

		$result3 = array(
			'STD_ID'=> $this->input->post("STD_ID"),
			'POS'=> $this->input->post("POS"),
			'W_N'=> $this->input->post("W_N"),
			'W_P'=> $this->input->post("W_P"),
			'W_MOO'=> $this->input->post("W_MOO"),
			'W_KT'=> $this->input->post("W_KT"),
			'W_KA'=> $this->input->post("W_KA"),
			'W_CH'=> $this->input->post("W_CH"),
			'W_C'=> $this->input->post("W_C"),
		);

		$result4 = array(
			'STD_ID' => $this->input->post("STD_ID"),
			'title' => $this->input->post("title"),
			'name' => $this->input->post("name"),
			'lastname'=> $this->input->post("lastname"),
			'gender'=> $this->input->post("gender"),
			'C_ID'=> $this->input->post("C_ID"),
			'BD'=> $this->input->post("BD"),
		);
		$result5 = array(
			'STD_ID' => $this->input->post("STD_ID"),
			'email'=> $this->input->post("email"),
			'tel'=> $this->input->post("tel"),
			'facebook'=> $this->input->post("facebook"),
			'line'=> $this->input->post("line"),
		);
		
		

		if($this->input->post("name")!= "" && $this->input->post("STD_ID")!== ""){
			$this->MA->insert_Login($result);
			$this->MA->insert_address($result2);
			$this->MA->insert_Work($result3);
			$this->MA->insert_pessonal($result4);
			$this->MA->insert_Contact($result5);
			$this->load->view('index');
		}else {
			echo "ไม่สามารถเพิ่มข้อมูลได้ค่ะ !";
		}

	}
	//เรียกใช้งานหน้า Login
	//localhost/Alumni/index.php/Alumni/Login
	public function Login()
	{
		$this->load->view('view_Login');
	}
	//ฟังก์ชั่น Check Login
	public function Check_Login()
	{

        if ($this->input->post('login')) {
            $STD_ID = $this->input->post('STD_ID');
            $Password = $this->input->post('Password');
            $check = $this->MA->Check_Login($STD_ID, $Password);

            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                $this->load->view('Home');
            } else {



                // echo '<script>alert("Region already added");</script>'
				echo"<script language=\"JavaScript\">";
    			echo"alert('คุณกรอกรหัสผ่านไม่ถูกต้องหรือกรุณาสมัครสมาชิกก่อนค่ะ !')";
				echo	"</script>";
				$this->load->view('index');
            }
        }
	}
	//เรียกใช้งานหน้า View_Search
	public function Search()
	{
		$this->load->view('');
	}
	//เรียกใช้งานหน้า view_Enter_std_ID
	public function input()
	{
		$this->load->view('input');
	}
	//ฟังก์ชั่นค้นหาจากรหัสนักศึกษา
	public function search_STD_ID()
	{	
	
		$STD_ID = $this->input->get('STD_ID');
		
		if($STD_ID == "")
		{
			echo"<script language=\"JavaScript\">";
    		echo"alert('ไม่พบข้อมูลที่คุณค้นหาค่ะ !')";
			echo	"</script>";
			$this->load->view('view_Enter_std_ID');
		}
		else
		{
		$result['MA'] = $this->MA->Search_Std_ID($STD_ID);
		$this->load->view('show_STD_ID',$result);
		}
	}
	//ฟังก์ชั่นค้นหาจากชื่อนักศึกษา
	public function search_Name()
	{
		$name = $this->input->get('name');

		if($name == "")
		{
			echo"<script language=\"JavaScript\">";
    		echo"alert('ไม่พบข้อมูลที่คุณค้นหาค่ะ !')";
			echo	"</script>";
			$this->load->view('view_Enter_std_Name');
		}
		else
		{
		$result['MA'] = $this->MA->Search_Name($name);
		$this->load->view('show_STD_Name',$result);
		}
	}
	
	//ฟังก์ชั่นจอยตารางทั้งหมด นำมาแสดงหน้า profile
	public function Profile()
	{
		$STD_ID =  $this->session->userdata('STD_ID');
		$result['MA'] = $this->MA->Profile($STD_ID);
		$this->load->view('view_Profile',$result);
		
	}
	//เรียกใช้งานหน้า Edit
	public function Edit()
	{
		$Std_ID =  $this->session->userdata('Std_ID');
		$result['MA'] = $this->MA->Profile($Std_ID);
		$this->load->view('view_Edit',$result);
		
	}
	//ฟังก์ชั่นแก้ไข
	public function edit_Profile()
	{
		$data = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'Name_LastName' => $this->input->post("Name_LastName"),
			'Date_Of_Birth'=> $this->input->post("Date_Of_Birth"),
			'Address'=> $this->input->post("Address"),
			'Tel'=> $this->input->post("Tel"),
			'E_mail'=> $this->input->post("E_mail"),
			'Facebook'=> $this->input->post("Facebook"),
			'Instagram'=> $this->input->post("Instagram"),
		);

		$data1 = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'End_Year'=> $this->input->post("End_Year"),
		);

		$data2 = array(
			'Std_ID' => $this->input->post("Std_ID"),
			'Company_Name'=> $this->input->post("Company_Name"),
			'Company_Address'=> $this->input->post("Company_Address"),
			'Profession'=> $this->input->post("Profession"),
			'Rank'=> $this->input->post("Rank"),
			'Company_Tel'=> $this->input->post("Company_Tel"),
		);

			$this->MA->Update_Register($data);
			$this->MA->Update_Educational($data1);
			$this->MA->Update_Work($data2);
			$Std_ID =  $this->session->userdata('Std_ID');
			$result1['MA'] = $this->MA->Profile($Std_ID);
			$this->load->view('view_Profile', $result1);
		
	}
	
	public function Logout()
    {
        $this->session->sess_destroy();
        // $this->session->unset_userdata($data);
    
        $this->load->view('index');
	}
	
	
}
