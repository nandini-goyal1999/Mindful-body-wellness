<?php 
class Charity{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="logininfo";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_us($data){
        $name=$data['name'];
        $email=$data['email'];
        $phone=$data['phone'];
        $amount=$data['amount'];
        $message=$data['message'];
        $q="insert into charity set Donor_name='$name', Email='$email',  Phone='$phone',Amount='$amount', message='$message'";
       $data= $this->mysqli->query($q);
       
    }
    
?>