<?PHP
class client{
	private $Email;
	private $Password;
	private $FirstName;
	private $LastName;
	function __construct($Email,$Password,$FirstName,$LastName){
		$this->Email=$Email;
		$this->Password=$Password;
		$this->FirstName=$FirstName;
		$this->LastName=$LastName;
	}
	
	function getEmail(){
		return $this->Email;
	}
	function getPassword(){
		return $this->Password;
	}
	function getFirstName(){
		return $this->FirstName;
	}

	function getLastName(){
		return $this->LastName;
	}
	function setEmail($Email){
		$this->Email=$Email;
	}
	function setPassword($Password){
		$this->Password=$Password;
	}
	function setFirstName($FirstName){
		$this->FirstName=$FirstName;
	}
	function setLasttName($LasttName){
		$this->LastName=$LastName;
	}
	
}

?>