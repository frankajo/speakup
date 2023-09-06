 <?php 

#import constant file
	include_once("constants.php");

#define class victim
		class Victim{

		//member variable
			public $firstname;
			public $lastname;
			public $phonenumber;
			public $dob;
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

				public function signUp($firstname, $lastname, $phonenumber, $dob, $email, $password){

			//hash password
				$pwd = password_hash($password, PASSWORD_DEFAULT);

			//prepare statement
				$statement = $this->dbcon->prepare("INSERT INTO victim(firstname, lastname, phonenumber, dob, email, password) VALUES(?,?,?,?,?,?)");

			//bind parameters
				$statement->bind_param("ssssss", $firstname, $lastname, $phonenumber, $dob, $email, $pwd);

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
			$statement = $this->dbcon->prepare("SELECT * FROM victim WHERE email = ?");

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

					$_SESSION['victim_id'] = $row['victim_id'];
					$_SESSION['firstname'] = $row['firstname'];
					$_SESSION['lastname'] = $row['lastname'];
					$_SESSION['myprotect'] = 'freedomfighter';
					$_SESSION['myemail'] = $row['email'];
					

					return true;

				}else{
					return false;
				}
			}else{
				return false;
			}

		}
# Victim login end here


#Begin lisVictim here

		public function listVictim(){
			// prepare statement
				$stmt = $this->dbcon->prepare("SELECT * FROM victim");

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
#End listVictim here

#Begin logout

			function logout(){
				session_start();
				session_destroy();

	//redirect to login
				header("Location: victim_login.php");
				exit();
			}
#End logout


			
		}





?>