 
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
		public function insertComplaint($victimid, $violenceid, $message){

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
#insert Complaint method ends here


#Begin listComplaint here

		public function listComplaint(){
			// prepare statement
				$stmt = $this->dbcon->prepare("SELECT * FROM complaint LEFT JOIN victim ON victim.victim_id = complaint.victim_id");

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
#End listComplait here


#Begin getComplaint
		public function getComplaint($complaintid){
			// prepare statement
				$stmt = $this->dbcon->prepare("SELECT * FROM complaint WHERE complaint_id=?");

			// bind the parameter
				$stmt->bind_param("i", $complaintid);

			// execute
				$stmt->execute();

			// get result
				$result = $stmt->get_result();

				return $result->fetch_assoc();
		}
#End getComplaint


#Begin delete complaint record
		public function deleteComplaint($id){
			//prepare the statement
			$statement = $this->dbcon->prepare("DELETE FROM complaint WHERE complaint_id=?");

			//bind param
			$statement->bind_param("i",$id);

			//execute

			$statement->execute();

			//check if record was deleted

			if ($statement->affected_rows ==1) {
				//redirect to list clubs
				$msg = "Complaint was successfully deleted!";
				header("location:listcomplaint.php?m=$msg");
				exit;
			}else{
				$msg = "Oops! could not delete commplaint record.";
				header("location:listcomplaint.php?info=$msg");
				exit;
			}

		}


		#end club record


	}
?>

