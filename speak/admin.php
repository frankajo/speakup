// <?php 
session_start();

#import constant file
	include_once("constants.php");

#define class victim
		class Admin{

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
			

# Begin Admin login
		public function login($email, $password){
		// prepare statement
			$statement = $this->dbcon->prepare("SELECT * FROM admin WHERE email = ?");

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
					$_SESSION['admin_id'] = $row['admin_id'];
					$_SESSION['fullname'] = $row['fullname'];
					$_SESSION['myprotect'] = 'freedomfighter';

					return true;

				}else{
					return false;
				}
			}else{
				return false;
			}

		}
# End Admin login

#Begin logout

			function logout(){
				session_start();
				session_destroy();

	//redirect to login
				header("Location: dashboard_admin.php");
				exit();
			}
#End logout


			
		}





?>