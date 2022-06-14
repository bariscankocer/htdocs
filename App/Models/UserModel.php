<?php
			 namespace App\Models;
			 use System\Core\Database;

   class UserModel extends Database{

    public function __construct(){
        parent::__construct();
    }
    public function getData(){
        if($this->Query("SELECT * FROM kullanicilar ")){
        $data = $this->fetchAll();
        return $data;
        }
    }
    public function setData($data){
 
		$baglan = mysqli_connect("localhost","root","","voiddb");
		// $baglan = new PDO("localhost","root","","voiddb");
		if (!$baglan) 
					{	
				die ("connection failed:".mysqli_connect_error());
					 }
				else {
				$sql= ("insert into kullanicilar (adsoyad , email)  values ('".$_POST['adsoyad']."','".$_POST['eposta']."')");
				$sonuc = mysqli_query($baglan,$sql);
				
				echo "<p>Eklenen kayýt ID: " . $baglan->insert_id . "</p>";
				echo"saaf";
				
				}
				
			
    }
    public function getDataId($userId){

        if($this->Query("SELECT * FROM users WHERE Id = ? ", [$userId])){
        $data = $this->fetchAll();
        return $data;
        }
    }
}
?>