<?php

class Database{
	private $connection;

	public function __construct(){
		$this->connection = $this->dbconnect();
	}
   
  	public function dbconnect() {
		$conn = new mysqli($servername = "localhost", $username= "root", $password= "");         
		if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
		}    
		$selected = mysqli_select_db($conn,"addressbook")
	  	or die("Could not select database");     
	    return $conn;
  	}

	public function getUserCount(){
		$sql = $this->connection->query("SELECT count(*) from users");    
		$row = $sql->fetch_row();
		return $row[0];		
	}

    public function getContactsCount($id){
        $sql = $this->connection->query("SELECT count(*) from contacts where id=".$id);
        $row = $sql->fetch_row();
        return $row[0];
    }

	public function getProfileDetail($email){
        $sql = $this->connection->query("SELECT * from users where email = '".$email."'");
        $row = $sql->fetch_row();
        return $row;
    }

    public function insertNewRecord($r_name, $r_mobile, $r_address, $r_city, $r_state, $r_zip, $r_email, $r_landline, $r_website, $r_company)
    {
    	$stats=0;
    	$sql = "insert into contacts (name, mobile, address, city, state, zip, email, landline, website, company	) values ('".$r_name."','".$r_mobile."','".$r_address."','".$r_city."','".$r_state."','".$r_zip."','".$r_email."','".$r_landline."','".$r_website."','".$r_company."');";
        if ($this->connection->query($sql) === TRUE) {
            $stats = 1;
        }
        return $stats;
    }

    public function getAllContacts(){
        $sql = $this->connection->query("SELECT * from contacts");
        return $sql;
    }

    public function getAllIds(){
        $sql = $this->connection->query("SELECT id from contacts");
        return $sql;
    }

    public function getContact($id){
        $sql = $this->connection->query("SELECT * from contacts where id =".$id);
        $row = $sql->fetch_row();
        return $row;
	}

	public function UpdateRecord($id,$name,$mobile,$address,$city,$state,$zip,$email,$landline,$website,$company){
        $stats=0;
        $sql = "update contacts set name='".$name."',mobile='".$mobile."',address='".$address."', city='".$city."', state='".$state."', zip='".$zip."', email='".$email."', landline='".$landline."', website='".$website."', company='".$company."' where id = ".$id;
        if ($this->connection->query($sql) === TRUE) {
            $stats = 1;
        }
        return $stats;
	}

	public function DeleteContact($id){
		$exist = $this->getContactsCount($id);
		if($exist == 1) {
            if ($this->connection->query("DELETE from contacts where id =" . $id) === TRUE)
                return 'Successfully deleted contact';
        }
        else
            return 'Cannot delete contact.';
	}
}
?> 