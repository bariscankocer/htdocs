<?php
namespace App\Controllers;
use App\Core\Framework;
use System\Helpers\Session;
use App\Models\UserModel;


class UserController extends Framework {

    public function __construct(){
        //$this->view("Dashboard");
    }

    public function index(){
        $model = new UserModel();
        $return = $model->getData();
        $data = $return;
        $this->view("User",$data);
    }
	  
    public function SetData($data){
	   if (isset($_POST['kaydet'])) {

        $model = new UserModel();
        $return = $model->setData($data);
		$data = $return;
		echo "ashdh".$_post['kaydet'];
		echo "eklendi";
		}
		 

		
	

    }
	
	
	
   public function PutData($userId,$data)
   {
	
   
   }

    public function GetUsers(){
        $data = ['ad'=> "haktan",'soyad'=> "akdag"];
        $this->view("User",$data);
    }
 

   

}


?>