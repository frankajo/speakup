
 <?php  
include_once "constants.php";

// class definition
class Response{

// member variables
	public $responseid;
	public $partnerid;
	public $supportid;
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

#Begin getSupporttype

	public function getSupporttype(){

		// prepare statement
		$statement = $this->dbcon->prepare("SELECT support_id, support_type FROM support");

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
#End getSupporttype


#insert response method Begins here
		public function insertResponse($partnerid, $supportid, $message){

		//prepare the statement
			$statement = $this->dbcon->prepare("INSERT INTO response(partner_id, support_id, message) VALUES(?,?,?)");

		//bind pthe parameter
			$statement->bind_param("iis", $partnerid, $supportid, $message);

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

	}
?>

