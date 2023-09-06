 
 <?php  
include_once "constants.php";

// class definition
class Testimonial{

// member variables
	public $testimonialid;
	public $victimid;
	public $message;
	public $dbcon; // DB connection handler


//member methode/function
		public function __construct(){

    // create object of mysqli class
			$this->dbcon = new MySQLi(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

			if($this->dbcon->connect_error){
				echo "Connection Failed" .$this->dbcon->connect_error;
			}else{
				// echo "Connection Successful";
			}
		}


#insert response method Begins here
		public function insertTestimonial($victimid, $firstname, $lastname, $message){

		//prepare the statement
			$statement = $this->dbcon->prepare("INSERT INTO testimonial(victim_id, firstname, lastname, message) VALUES(?,?,?,?)");

		//bind pthe parameter
			$statement->bind_param("isss", $victimid, $firstname, $lastname, $message);

		//execute means to click GO inside mql
			$statement->execute();

		//check if record was inserted
			if($statement->affected_rows == 1){
				return true;
			}else{
				return false;
			}
		}
#insert reponse method Ends here


#Begin listTestimonial here
		public function listTestimonial(){
			// prepare statement
				$stmt = $this->dbcon->prepare("SELECT * FROM testimonial");

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
#End listTestimonial here



#Begin listActiveTestimonia here
		public function listActiveTestimonial(){
			// prepare statement
				$stmt = $this->dbcon->prepare("SELECT * FROM testimonial WHERE testimonial_status = 2");

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
#End listActiveTestimonial here




#begin update Testimonial method!
		public function updateTestimonial($testimonial_id){

		$statement = $this->dbcon->prepare("UPDATE testimonial SET testimonial_status=? WHERE testimonial_id=?");

			$testimonial_status = "active";

			//bind parameters
			$statement->bind_param("si", $testimonial_status,$testimonial_id);

			//execute

			$statement->execute();

			if ($statement->affected_rows == 1) {

				header('Location: dashboard_admin.php');
				exit();
			}else{

				header('Location:list_testimony.php');
				exit();
			}

			//check if update was successfully updated
		
				return $statement->affected_rows;
			
		}
#end update Testimonial method!



	}
?>

