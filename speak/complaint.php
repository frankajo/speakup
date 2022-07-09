
 <?php  
include_once "constants.php";

// class definition
class Complaint{

// member variables
	public $complaintid;
	public $victimid;
	public $violenceid;
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

#Begin getViolence

	public function getViolencetype(){

		// prepare statement
		$statement = $this->dbcon->prepare("SELECT violence_id, violence_type FROM violence");

		// excute
		$statement->execute();

		// fetch result
		$result = $statement->get_result();

		$records = array();
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$records[] = $row;
			}
		}

		return $records;
	}
#End getViolence


#insert complaint method begins here
		public function insertComplaint( $victimid, $violenceid, $message){

		//prepare the statement
			$statement = $this->dbcon->prepare("INSERT INTO complaint(victim_id, violence_id, message) VALUES(?,?,?)");

		//bind pthe parameter
			$statement->bind_param("iis", $victimid, $violenceid, $message);

		//execute means to click GO inside mql
			$statement->execute();

		//check if record was inserted
			if($statement->affected_rows == 1){
				return true;
			}else{
				return false;
			}
		}
#insert message method ends here

	}
?>

