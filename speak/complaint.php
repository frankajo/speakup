 
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
		public function insertComplaint($victimid, $violenceid, $firstname, $lastname, $message){

			//prepare the statement
				$statement = $this->dbcon->prepare("INSERT INTO complaint(victim_id, violence_id, firstname, lastname, message) VALUES(?,?,?,?,?)");

			//bind pthe parameter
				$statement->bind_param("iisss", $victimid, $violenceid, $firstname, $lastname, $message);



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
				$stmt = $this->dbcon->prepare("SELECT * FROM complaint JOIN violence ON violence.violence_id = complaint.violence_id");

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



#Begin list Pending Complaint here

		public function pendingComplaint(){
			// prepare statement
				$stmt = $this->dbcon->prepare("SELECT * FROM complaint WHERE complaint_status = 1");

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
#End list Pending Complaint here



#Begin Veryfying Complaint here

		public function verifyComplaint(){
			// prepare statement
				$stmt = $this->dbcon->prepare("SELECT * FROM complaint WHERE complaint_status = 2");

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
#End Veryfying Complaint here



#Begin Assigning Help here

		public function helpComplaint(){
			// prepare statement
				$stmt = $this->dbcon->prepare("SELECT * FROM complaint WHERE complaint_status = 3");

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
#End Assigning Help here



#Begin Close Complaint

		public function closeComplaint(){
			// prepare statement
				$stmt = $this->dbcon->prepare("SELECT * FROM complaint WHERE complaint_status = 4");

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
#End Close Complaint here






//Method for individual victim's page
#Begin listVictimComp here
		public function listVictimcomplain($victim_id){
			// prepare statement
$stmt = $this->dbcon->prepare("SELECT * FROM complaint JOIN violence ON violence.violence_id = complaint.violence_id WHERE victim_id=?");				

			//bind parameters
				$stmt->bind_param("i", $victim_id);

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



#begin update complaint method 
		public function updateComplaint($complaint_id){

		$statement = $this->dbcon->prepare("UPDATE complaint SET complaint_status=? WHERE complaint_id=?");

			$complaint_status = "verifying";

			//bind parameters
			$statement->bind_param("si", $complaint_status,$complaint_id);

			//execute

			$statement->execute();

			if ($statement->affected_rows == 1) {

				header('Location: assigninghelp.php');
				exit();
			}else{

				header('Location:listcomplaint.php');
				exit();
			}

			//check if update was successfully updated
		
				return $statement->affected_rows;
			
		}
#end update complaint method




#begin update Assignhelp method 
		public function updateAssignhelp($complaint_id){

			$statement = $this->dbcon->prepare("UPDATE complaint SET complaint_status=? WHERE complaint_id=?");

			$complaint_status = "helped";
			// // //bind parameters
			$statement->bind_param("si", $complaint_status,$complaint_id);

			//execute

			$statement->execute();

			if ($statement->affected_rows == 1) {

				header('Location: closedcase.php');
				exit();
			}else{

				header('Location:assigninghelp.php');
				exit();
			}

			//check if update was successfully updated
		
				return $statement->affected_rows;
			
		}
#end update Assignhelp method




#begin update Assignhelp method 
		public function updateClosedcase($complaint_id){

		$statement = $this->dbcon->prepare("UPDATE complaint SET complaint_status=? WHERE complaint_id=?");

			$complaint_status = "closed";
			// // //bind parameters
			$statement->bind_param("si", $complaint_status,$complaint_id);

			//execute

			$statement->execute();

			if ($statement->affected_rows == 1) {

				header('Location: dashboard_admin.php');
				exit();
			}else{

				header('Location: closedcase.php');
				exit();
			}

			//check if update was successfully updated
		
				return $statement->affected_rows;
			
		}
#end update Assignhelp method






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
#End delete complaint record




	}
?>

