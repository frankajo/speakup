<?php 

#import constant file
	include_once("constants.php");

#define class victim
		class Partner{

		//member variable
			public $fullname;
			public $phonenumber;
			public $email;
			public $password;
			public $dbcon; // database connection hadller

		//memeber function/methods

	#Beging Construct here
			public function __construct(){

		//create obj of mySQLi class
				$this->dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

		//check if connection successfull
				if($this->dbcon->connect_error){
					die("Connection Failed: Try again later" .$this->dbcon->connect_error);
				}
			}
	#End construct here

	# Begin signUp here

				public function signUp($fullname, $phonenumber, $email, $password){

			//hash password
				$pwd = password_hash($password, PASSWORD_DEFAULT);

			//prepare statement
				$statement = $this->dbcon->prepare("INSERT INTO partner(fullname, phonenumber, email, password) VALUES(?,?,?,?)");

			//bind parameters
				$statement->bind_param("ssss", $fullname, $phonenumber, $email, $pwd);

			//Execute
				$statement->execute();

				if($statement->affected_rows == 1){
					return true;
				}else{
					return false;
				}
			}

# End signUp here

# Begin victim login
		public function login($email, $password){
		// prepare statement
			$statement = $this->dbcon->prepare("SELECT * FROM partner WHERE email = ?");

		// bind the parameter
			$statement->bind_param("s", $email);

		// execute
			$statement->execute();

		// get result
			$result = $statement->get_result();

			if ($result->num_rows == 1) {
				$row = $result->fetch_assoc();

		// check if password match (verify password)
				if(password_verify($password, $row['password'])){

			// create session variables
					session_start();
					$_SESSION['partner_id'] = $row['partner_id'];
					$_SESSION['fullname'] = $row['fullname'];
					$_SESSION[''] = $row['email'];

					return true;

				}else{
					return false;
				}
			}else{
				return false;
			}

		}
# end customer login


#Begin listPartner here

		public function listPartner(){
			// prepare statement
				$stmt = $this->dbcon->prepare("SELECT * FROM partner");

			// execute
				$stmt->execute();

			// get result
				$result = $stmt->get_result();

			// fetch records
				$records = array();
				if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
				$records[] = $row;
				}
			}

			return $records;
		}
#End listPartner here

#Begin logout

			function logout(){
				session_start();
				session_destroy();

	//redirect to login
				header("Location: dashboard_partner.php");
				exit();
			}
#End logout


			
		}





?>